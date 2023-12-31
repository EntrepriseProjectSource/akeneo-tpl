<?php

namespace Specification\Akeneo\Pim\Enrichment\Component\Product\Connector\ArrayConverter\StandardToFlat;

use Akeneo\Pim\Enrichment\Component\Product\Connector\ArrayConverter\StandardToFlat\Product\ProductValueConverter;
use Akeneo\Pim\Enrichment\Component\Product\Connector\ArrayConverter\StandardToFlat\Product\QualityScoreConverter;
use Akeneo\Pim\Enrichment\Component\Product\Connector\UseCase\GetProductsWithQualityScoresInterface;
use Akeneo\Pim\Structure\Component\Model\AttributeInterface;
use PhpSpec\ObjectBehavior;

class ProductSpec extends ObjectBehavior
{
    function let(
        ProductValueConverter $valueConverter,
        QualityScoreConverter $qualityScoreConverter,
        AttributeInterface $identifierAttribute
    ) {
        $identifierAttribute->getCode()->willReturn('sku');

        $this->beConstructedWith($valueConverter, $qualityScoreConverter);
    }

    function it_converts_from_standard_to_flat_format($valueConverter, $qualityScoreConverter)
    {
        $valueConverter->convertAttribute(
            'sku',
            [
                [
                    'locale' => null,
                    'scope' => null,
                    'data' => '10699783',
                ],
            ]
        )->willReturn(['sku' => '10699783']);

        $valueConverter->convertAttribute(
            'weight',
            [
                [
                    'locale' => 'de_DE',
                    'scope' => 'print',
                    'data' => [
                        'unit' => 'KILOGRAM',
                        'amount' => '100',
                    ],
                ],
            ]
        )->willReturn([
            'weight-de_DE-print' => '100',
            'weight-de_DE-print-unit' => 'KILOGRAM',
        ]);

        $qualityScoreConverter->convert([
            'print' => [
                'de_DE' => 'A',
                'en_US' => 'B',
            ],
        ])->willReturn([
            sprintf('%s-de_DE-print', GetProductsWithQualityScoresInterface::FLAT_FIELD_PREFIX) => 'A',
            sprintf('%s-en_US-print', GetProductsWithQualityScoresInterface::FLAT_FIELD_PREFIX) => 'B',
        ]);

        $expected = [
            'categories' => 'audio_video_sales,loudspeakers,sony',
            'enabled' => '1',
            'family' => 'loudspeakers',
            'parent' => 'parent_model_code',
            'groups' => 'sound,audio,mp3',
            'UPSELL-groups' => '',
            'UPSELL-products' => '',
            'X_SELL-groups' => 'akeneo_tshirt,oro_tshirt',
            'X_SELL-products' => 'AKN_TS,ORO_TSH',
            'PACK-products' => '',
            'PACK-products-quantity' => '',
            'PACK-product_models' => '',
            'PACK-product_models-quantity' => '',
            'PRODUCTSET-products' => 'bag,socks',
            'PRODUCTSET-products-quantity' => '2|8',
            'PRODUCTSET-product_models' => 'braided-hat,tall_antelope',
            'PRODUCTSET-product_models-quantity' => '12|24',
            'sku' => '10699783',
            'weight-de_DE-print' => '100',
            'weight-de_DE-print-unit' => 'KILOGRAM',
            sprintf('%s-de_DE-print', GetProductsWithQualityScoresInterface::FLAT_FIELD_PREFIX) => 'A',
            sprintf('%s-en_US-print', GetProductsWithQualityScoresInterface::FLAT_FIELD_PREFIX) => 'B',
        ];

        $item = [
            'categories' => ['audio_video_sales', 'loudspeakers', 'sony'],
            'enabled' => true,
            'family' => 'loudspeakers',
            'parent' => 'parent_model_code',
            'groups' => ['sound', 'audio', 'mp3'],
            'associations' => [
                'UPSELL' => [
                    'groups' => [],
                    'products' => [],
                ],
                'X_SELL' => [
                    'groups' => ['akeneo_tshirt', 'oro_tshirt'],
                    'products' => ['AKN_TS', 'ORO_TSH'],
                ],
            ],
            'quantified_associations' => [
                'PACK' => [
                    'products' => [],
                    'product_models' => [],
                ],
                'PRODUCTSET' => [
                    'products' => [
                        [
                            'identifier' => 'bag',
                            'quantity' => 2,
                        ],
                        [
                            'identifier' => 'socks',
                            'quantity' => 8,
                        ],
                    ],
                    'product_models' => [
                        [
                            'identifier' => 'braided-hat',
                            'quantity' => 12,
                        ],
                        [
                            'identifier' => 'tall_antelope',
                            'quantity' => 24,
                        ],
                    ],
                ],
            ],
            'sku' => [
                [
                    'locale' => null,
                    'scope' => null,
                    'data' => '10699783',
                ],
            ],
            'weight' => [
                [
                    'locale' => 'de_DE',
                    'scope' => 'print',
                    'data' => [
                        'unit' => 'KILOGRAM',
                        'amount' => '100',
                    ],
                ],
            ],
            'quality_scores' => [
                'print' => [
                    'de_DE' => 'A',
                    'en_US' => 'B',
                ],
            ],
        ];

        $this->convert($item)->shouldReturn($expected);
    }

    function it_converts_a_product_without_any_group_from_standard_to_flat_format($valueConverter)
    {
        $valueConverter->convertAttribute(
            'sku',
            [
                [
                    'locale' => null,
                    'scope' => null,
                    'data' => '10699783',
                ],
            ]
        )->willReturn(['sku' => '10699783']);

        $valueConverter->convertAttribute(
            'weight',
            [
                [
                    'locale' => 'de_DE',
                    'scope' => 'print',
                    'data' => [
                        'unit' => 'KILOGRAM',
                        'amount' => '100',
                    ],
                ],
            ]
        )->willReturn([
            'weight-de_DE-print' => '100',
            'weight-de_DE-print-unit' => 'KILOGRAM',
        ]);

        $expected = [
            'categories' => 'audio_video_sales,loudspeakers,sony',
            'enabled' => '1',
            'family' => 'loudspeakers',
            'groups' => '',
            'UPSELL-groups' => '',
            'UPSELL-products' => '',
            'X_SELL-groups' => 'akeneo_tshirt,oro_tshirt',
            'X_SELL-products' => 'AKN_TS,ORO_TSH',
            'sku' => '10699783',
            'weight-de_DE-print' => '100',
            'weight-de_DE-print-unit' => 'KILOGRAM',
        ];

        $item = [
            'categories' => ['audio_video_sales', 'loudspeakers', 'sony'],
            'enabled' => true,
            'family' => 'loudspeakers',
            'groups' => [],
            'associations' => [
                'UPSELL' => [
                    'groups' => [],
                    'products' => [],
                ],
                'X_SELL' => [
                    'groups' => ['akeneo_tshirt', 'oro_tshirt'],
                    'products' => ['AKN_TS', 'ORO_TSH'],
                ],
            ],
            'sku' => [
                [
                    'locale' => null,
                    'scope' => null,
                    'data' => '10699783',
                ],
            ],
            'weight' => [
                [
                    'locale' => 'de_DE',
                    'scope' => 'print',
                    'data' => [
                        'unit' => 'KILOGRAM',
                        'amount' => '100',
                    ],
                ],
            ],
        ];

        $this->convert($item)->shouldReturn($expected);
    }

    function it_does_not_convert_the_uuid_when_the_option_is_set_to_false(ProductValueConverter $valueConverter)
    {
        $valueConverter->convertAttribute(
            'sku',
            [
                [
                    'locale' => null,
                    'scope' => null,
                    'data' => 'my_product_sku',
                ],
            ]
        )->shouldBeCalled()->willReturn(['sku' => 'my_product_sku']);

        $standardItem = [
            'uuid' => 'ab38e7f9-8af3-4ac2-9ea2-ce078848ee6f',
            'categories' => ['clothing', 'sportswear'],
            'values' => [
                'sku' => [
                    [
                        'locale' => null,
                        'scope' => null,
                        'data' => 'my_product_sku',
                    ],
                ],
            ],
            'enabled' => false,
        ];

        $expected = [
            'categories' => 'clothing,sportswear',
            'sku' => 'my_product_sku',
            'enabled' => '0',
        ];

        $this->convert($standardItem, ['with_uuid' => false])->shouldReturn($expected);
    }

    function it_converts_the_uuid_when_the_option_is_not_set_or_true(ProductValueConverter $valueConverter)
    {
        $valueConverter->convertAttribute(
            'sku',
            [
                [
                    'locale' => null,
                    'scope' => null,
                    'data' => 'my_product_sku',
                ],
            ]
        )->shouldBeCalled()->willReturn(['sku' => 'my_product_sku']);

        $standardItem = [
            'uuid' => 'ab38e7f9-8af3-4ac2-9ea2-ce078848ee6f',
            'categories' => ['clothing', 'sportswear'],
            'values' => [
                'sku' => [
                    [
                        'locale' => null,
                        'scope' => null,
                        'data' => 'my_product_sku',
                    ],
                ],
            ],
            'enabled' => false,
        ];

        $expected = [
            'uuid' => 'ab38e7f9-8af3-4ac2-9ea2-ce078848ee6f',
            'categories' => 'clothing,sportswear',
            'sku' => 'my_product_sku',
            'enabled' => '0',
        ];

        $this->convert($standardItem, ['with_uuid' => true])->shouldReturn($expected);
        $this->convert($standardItem, [])->shouldReturn($expected);
    }
}
