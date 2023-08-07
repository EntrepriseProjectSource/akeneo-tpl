<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimCatalog_Validator_Mapping_DelegatingClassMetadataFactoryService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_catalog.validator.mapping.delegating_class_metadata_factory' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Validator\Mapping\DelegatingClassMetadataFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/Mapping/DelegatingClassMetadataFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/Mapping/ProductValueMetadataFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ChainedAttributeConstraintGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/EmailGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/FileGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/LengthGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/NotBlankGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/DateGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/NumericGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/StringGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/BooleanGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/RangeGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/RegexGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/NotDecimalGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/UrlGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/UniqueValueGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/PriceCollectionGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/MetricGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/CurrencyGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/ConstraintGuesser/OptionsGuesser.php';

        $container->privates['pim_catalog.validator.mapping.delegating_class_metadata_factory'] = $instance = new \Akeneo\Pim\Enrichment\Component\Product\Validator\Mapping\DelegatingClassMetadataFactory();

        $a = new \Akeneo\Pim\Enrichment\Component\Product\Validator\ChainedAttributeConstraintGuesser();
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\EmailGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\FileGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\LengthGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\NotBlankGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\DateGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\NumericGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\StringGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\BooleanGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\RangeGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\RegexGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\NotDecimalGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\UrlGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\UniqueValueGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\PriceCollectionGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\MetricGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\CurrencyGuesser());
        $a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\OptionsGuesser());

        $instance->addMetadataFactory(new \Akeneo\Pim\Enrichment\Component\Product\Validator\Mapping\ProductValueMetadataFactory($a, ($container->privates['pim_catalog.repository.cached_attribute'] ?? $container->load('getPimCatalog_Repository_CachedAttributeService'))));
        $instance->addMetadataFactory(($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')));

        return $instance;
    }
}
