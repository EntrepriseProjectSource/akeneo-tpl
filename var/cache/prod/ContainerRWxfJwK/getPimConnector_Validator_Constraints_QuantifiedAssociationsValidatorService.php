<?php

namespace ContainerRWxfJwK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimConnector_Validator_Constraints_QuantifiedAssociationsValidatorService extends KernelProdContainer
{
    /*
     * Gets the private 'pim_connector.validator.constraints.quantified_associations_validator' shared service.
     *
     * @return \Akeneo\Pim\Enrichment\Component\Product\Validator\Constraints\QuantifiedAssociationsValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Validator/Constraints/QuantifiedAssociationsValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/FindNonExistingProductsQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Doctrine/ORM/Query/FindNonExistingProductsQuery.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Component/Product/Query/FindNonExistingProductModelCodesQueryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Doctrine/ORM/Query/FindNonExistingProductModelCodesQuery.php';

        $a = ($container->privates['pim_catalog.repository.association_type'] ?? $container->load('getPimCatalog_Repository_AssociationTypeService'));

        if (isset($container->privates['pim_connector.validator.constraints.quantified_associations_validator'])) {
            return $container->privates['pim_connector.validator.constraints.quantified_associations_validator'];
        }
        $b = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['pim_connector.validator.constraints.quantified_associations_validator'])) {
            return $container->privates['pim_connector.validator.constraints.quantified_associations_validator'];
        }

        return $container->privates['pim_connector.validator.constraints.quantified_associations_validator'] = new \Akeneo\Pim\Enrichment\Component\Product\Validator\Constraints\QuantifiedAssociationsValidator($a, new \Akeneo\Pim\Enrichment\Bundle\Doctrine\ORM\Query\FindNonExistingProductsQuery($b), new \Akeneo\Pim\Enrichment\Bundle\Doctrine\ORM\Query\FindNonExistingProductModelCodesQuery($b));
    }
}
