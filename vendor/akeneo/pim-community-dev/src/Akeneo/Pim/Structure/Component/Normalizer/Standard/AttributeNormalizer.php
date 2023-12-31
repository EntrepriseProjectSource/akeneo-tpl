<?php

namespace Akeneo\Pim\Structure\Component\Normalizer\Standard;

use Akeneo\Pim\Structure\Component\Model\AttributeInterface;
use Akeneo\Platform\Bundle\FeatureFlagBundle\FeatureFlags;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * A normalizer to transform an AttributeInterface entity into array
 *
 * @author    Marie Bochu <marie.bochu@akeneo.com>
 * @copyright 2016 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class AttributeNormalizer implements NormalizerInterface, CacheableSupportsMethodInterface
{
    public function __construct(
        private NormalizerInterface $translationNormalizer,
        private NormalizerInterface $dateTimeNormalizer,
        private FeatureFlags $featureFlags
    ) {
    }

    /**
     * {@inheritdoc}
     *
     * @param AttributeInterface $attribute
     */
    public function normalize($attribute, $format = null, array $context = [])
    {
        $normalizedAttribute = [
            'code'                   => $attribute->getCode(),
            'type'                   => $attribute->getType(),
            'group'                  => ($attribute->getGroup()) ? $attribute->getGroup()->getCode() : null,
            'unique'                 => (bool) $attribute->isUnique(),
            'useable_as_grid_filter' => (bool) $attribute->isUseableAsGridFilter(),
            'allowed_extensions'     => $attribute->getAllowedExtensions(),
            'metric_family'          => '' === $attribute->getMetricFamily() ? null : $attribute->getMetricFamily(),
            'default_metric_unit'    => '' === $attribute->getDefaultMetricUnit() ?
                null : $attribute->getDefaultMetricUnit(),
            'reference_data_name'    => $attribute->getReferenceDataName(),
            'available_locales'      => $attribute->getAvailableLocaleCodes(),
            'max_characters'         => null === $attribute->getMaxCharacters() ?
                null : (int) $attribute->getMaxCharacters(),
            'validation_rule'        => '' === $attribute->getValidationRule() ? null : $attribute->getValidationRule(),
            'validation_regexp'      => '' === $attribute->getValidationRegexp() ?
                null : $attribute->getValidationRegexp(),
            'wysiwyg_enabled'        => $attribute->isWysiwygEnabled(),
            'number_min'             => null === $attribute->getNumberMin() ?
                null : (string) $attribute->getNumberMin(),
            'number_max'             => null === $attribute->getNumberMax() ?
                null : (string) $attribute->getNumberMax(),
            'decimals_allowed'       => $attribute->isDecimalsAllowed(),
            'negative_allowed'       => $attribute->isNegativeAllowed(),
            'date_min'               => $this->dateTimeNormalizer->normalize($attribute->getDateMin()),
            'date_max'               => $this->dateTimeNormalizer->normalize($attribute->getDateMax()),
            'max_file_size'          => null === $attribute->getMaxFileSize() ?
                null : (string) $attribute->getMaxFileSize(),
            'minimum_input_length'   => null === $attribute->getMinimumInputLength() ?
                null : (int) $attribute->getMinimumInputLength(),
            'sort_order'             => (int) $attribute->getSortOrder(),
            'localizable'            => (bool) $attribute->isLocalizable(),
            'scopable'               => (bool) $attribute->isScopable(),
            'labels'                 => $this->translationNormalizer->normalize($attribute, $format, $context),
            'guidelines' => $attribute->getGuidelines(),
            'auto_option_sorting' => $attribute->getProperty('auto_option_sorting'),
            'default_value' => $attribute->getProperty('default_value'),
        ];

        if ($this->isReadOnlyFeatureAvailableAndEnabled()) {
            $normalizedAttribute['is_read_only'] = $attribute->getProperty('is_read_only');
        }

        return $normalizedAttribute;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof AttributeInterface && 'standard' === $format;
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }

    private function isReadOnlyFeatureAvailableAndEnabled(): bool
    {
        try {
            return $this->featureFlags->isEnabled('read_only_product_attribute');
        } catch (\InvalidArgumentException $notAvailableFeatureFlagException) {
            return false;
        }
    }
}
