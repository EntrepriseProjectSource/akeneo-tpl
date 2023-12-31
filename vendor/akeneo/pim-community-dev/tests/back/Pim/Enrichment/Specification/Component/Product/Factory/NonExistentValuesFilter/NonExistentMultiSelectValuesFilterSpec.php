<?php
declare(strict_types=1);

namespace Specification\Akeneo\Pim\Enrichment\Component\Product\Factory\NonExistentValuesFilter;

use Akeneo\Pim\Enrichment\Component\Product\Factory\NonExistentValuesFilter\NonExistentMultiSelectValuesFilter;
use Akeneo\Pim\Enrichment\Component\Product\Factory\NonExistentValuesFilter\OnGoingFilteredRawValues;
use Akeneo\Pim\Structure\Component\AttributeTypes;
use Akeneo\Pim\Structure\Component\Query\PublicApi\AttributeOption\GetExistingAttributeOptionCodes;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @author    Anael Chardan <anael.chardan@akeneo.com>
 * @copyright 2019 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
final class NonExistentMultiSelectValuesFilterSpec extends ObjectBehavior
{
    public function let(GetExistingAttributeOptionCodes $getExistingAttributeOptionCodes) {
        $this->beConstructedWith($getExistingAttributeOptionCodes);
    }

    public function it_has_a_type()
    {
        $this->shouldHaveType(NonExistentMultiSelectValuesFilter::class);
    }

    public function it_filters_multi_select_values(GetExistingAttributeOptionCodes $getExistingAttributeOptionCodes)
    {
        $ongoingFilteredRawValues = OnGoingFilteredRawValues::fromNonFilteredValuesCollectionIndexedByType(
            [
                AttributeTypes::OPTION_MULTI_SELECT => [
                    'a_multi_select' => [
                        [
                            'identifier' => 'product_A',
                            'values' => [
                                'ecommerce' => [
                                    'en_US' => ['micHEL', 'sardou'],
                                ],
                                'tablet' => [
                                    'en_US' => ['jean', 'claude', 'van', 'damm'],
                                    'fr_FR' => ['des', 'Fraises'],
                                ],
                            ]
                        ],
                        [
                            'identifier' => 'product_C',
                            'values' => [
                                'ecommerce' => [
                                    'en_US' => ['MIChel', 'sardou'],
                                ],
                                'tablet' => [
                                    '<all_locales>' => ['des', 'FRAISES', 'JEAN', 'TOUrloupe'],
                                ],
                            ]
                        ],
                    ],
                ],
                AttributeTypes::TEXTAREA => [
                    'a_description' => [
                        [
                            'identifier' => 'product_B',
                            'values' => [
                                '<all_channels>' => [
                                    '<all_locales>' => 'plop'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        );

        $optionCodes = [
            'a_multi_select' => [
                'micHEL',
                'sardou',
                'jean',
                'claude',
                'van',
                'damm',
                'des',
                'Fraises',
                'MIChel',
                'FRAISES',
                'JEAN',
                'TOUrloupe',
            ],
        ];

        $getExistingAttributeOptionCodes->fromOptionCodesByAttributeCode($optionCodes)->shouldBeCalled()->willReturn(
            [
                'a_multi_select' => ['michel', 'fraises', 'tourlOUPE'],
            ]
        );

        /** @var OnGoingFilteredRawValues $filteredCollection */
        $filteredCollection = $this->filter($ongoingFilteredRawValues);
        $filteredCollection->filteredRawValuesCollectionIndexedByType()->shouldBeLike(
            [
                AttributeTypes::OPTION_MULTI_SELECT => [
                    'a_multi_select' => [
                        [
                            'identifier' => 'product_A',
                            'values' => [
                                'ecommerce' => [
                                    'en_US' => ['michel'],
                                ],
                                'tablet' => [
                                    'en_US' => [],
                                    'fr_FR' => ['fraises'],
                                ],
                            ],
                        ],
                        [
                            'identifier' => 'product_C',
                            'values' => [
                                'ecommerce' => [
                                    'en_US' => ['michel'],
                                ],
                                'tablet' => [
                                    '<all_locales>' => ['fraises', 'tourlOUPE'],
                                ],
                            ]
                        ],
                    ],
                ],
            ]
        );
    }
}
