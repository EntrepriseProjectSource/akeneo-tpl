<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/configuration/locale' => [[['_route' => 'pim_enrich_locale_index'], null, null, null, true, false, null]],
        '/configuration/locale/rest' => [[['_route' => 'pim_enrich_locale_rest_index', '_controller' => 'pim_enrich.controller.rest.locale:indexAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/rest/v1/locales' => [[['_route' => 'pim_api_locale_list', '_controller' => 'pim_api.controller.locale:listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/configuration/channel' => [[['_route' => 'pim_enrich_channel_index'], null, null, null, true, false, null]],
        '/configuration/channel/create' => [[['_route' => 'pim_enrich_channel_create'], null, null, null, false, false, null]],
        '/configuration/channel/category-tree' => [[['_route' => 'pim_enrich_channel_category_trees_get', '_controller' => 'pim_enrich.controller.rest.channel:listCategoryTreeAction'], null, ['GET' => 0], null, false, false, null]],
        '/configuration/channel/rest' => [
            [['_route' => 'pim_enrich_channel_rest_index', '_controller' => 'pim_enrich.controller.rest.channel:indexAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pim_enrich_channel_rest_post', '_controller' => 'pim_enrich.controller.rest.channel:postAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/rest/v1/channels' => [
            [['_route' => 'pim_api_channel_list', '_controller' => 'pim_api.controller.channel:listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pim_api_channel_create', '_controller' => 'pim_api.controller.channel:createAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'pim_api_channel_partial_update_list', '_controller' => 'pim_api.controller.channel:partialUpdateListAction', '_format' => 'json'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/api/rest/v1/currencies' => [[['_route' => 'pim_api_currency_list', '_controller' => 'pim_api.controller.currency:listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/configuration/currency/rest' => [[['_route' => 'pim_enrich_currency_rest_index', '_controller' => 'pim_enrich.controller.rest.currency:indexAction'], null, ['GET' => 0], null, false, false, null]],
        '/configuration/currency' => [[['_route' => 'pim_enrich_currency_index'], null, null, null, true, false, null]],
        '/api/rest/v1/attributes' => [
            [['_route' => 'pim_api_attribute_list', '_controller' => 'pim_api.controller.attribute:listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pim_api_attribute_create', '_controller' => 'pim_api.controller.attribute:createAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'pim_api_attribute_partial_update_list', '_controller' => 'pim_api.controller.attribute:partialUpdateListAction', '_format' => 'json'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/api/rest/v1/attribute-groups' => [
            [['_route' => 'pim_api_attribute_group_list', '_controller' => 'pim_api.controller.attribute_group:listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pim_api_attribute_group_create', '_controller' => 'pim_api.controller.attribute_group:createAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'pim_api_attribute_group_partial_update_list', '_controller' => 'pim_api.controller.attribute_group:partialUpdateListAction', '_format' => 'json'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/api/rest/v1/families' => [
            [['_route' => 'pim_api_family_list', '_controller' => 'pim_api.controller.family:listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pim_api_family_create', '_controller' => 'pim_api.controller.family:createAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'pim_api_family_partial_update_list', '_controller' => 'pim_api.controller.family:partialUpdateListAction', '_format' => 'json'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/api/rest/v1/association-types' => [
            [['_route' => 'pim_api_association_type_list', '_controller' => 'pim_api.controller.association_type:listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pim_api_association_type_create', '_controller' => 'pim_api.controller.association_type:createAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'pim_api_association_type_partial_update_list', '_controller' => 'pim_api.controller.association_type:partialUpdateListAction', '_format' => 'json'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/rest/attribute' => [
            [['_route' => 'pim_enrich_attribute_rest_index', '_controller' => 'pim_enrich.controller.rest.attribute:indexAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null],
            [['_route' => 'pim_enrich_attribute_rest_create', '_controller' => 'pim_enrich.controller.rest.attribute:createAction'], null, ['PUT' => 0], null, true, false, null],
        ],
        '/rest/attribute-group' => [
            [['_route' => 'pim_enrich_attributegroup_rest_index', '_controller' => 'pim_enrich.controller.rest.attribute_group:indexAction'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'pim_enrich_attributegroup_rest_search', '_controller' => 'pim_enrich.controller.rest.attribute_group:searchAction'], null, ['POST' => 0], null, true, false, null],
            [['_route' => 'pim_enrich_attributegroup_rest_create', '_controller' => 'pim_enrich.controller.rest.attribute_group:createAction'], null, ['PUT' => 0], null, true, false, null],
            [['_route' => 'pim_enrich_attributegroup_rest_sort', '_controller' => 'pim_enrich.controller.rest.attribute_group:sortAction'], null, ['PATCH' => 0], null, true, false, null],
        ],
        '/configuration/rest/family' => [
            [['_route' => 'pim_enrich_family_rest_create', '_controller' => 'pim_enrich.controller.rest.family:createAction'], null, ['POST' => 0], null, true, false, null],
            [['_route' => 'pim_enrich_family_rest_index', '_controller' => 'pim_enrich.controller.rest.family:indexAction'], null, ['GET' => 0], null, true, false, null],
        ],
        '/configuration/rest/family/with-variants' => [[['_route' => 'pim_enrich_family_index_get_variants', '_controller' => 'pim_enrich.controller.rest.family:getWithVariantsAction'], null, ['GET' => 0], null, false, false, null]],
        '/configuration/rest/family-variant' => [
            [['_route' => 'pim_enrich_family_variant_rest_index', '_controller' => 'pim_enrich.controller.rest.family_variant:indexAction'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'pim_enrich_family_variant_rest_create', '_controller' => 'pim_enrich.controller.rest.family_variant:createAction'], null, ['POST' => 0], null, true, false, null],
        ],
        '/rest/attribute-type' => [[['_route' => 'pim_enrich_attribute_type_index', '_controller' => 'pim_enrich.controller.rest.attribute_type:indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/configuration/rest/association-type' => [
            [['_route' => 'pim_enrich_associationtype_rest_create', '_controller' => 'pim_enrich.controller.rest.association_type:createAction'], null, ['POST' => 0], null, true, false, null],
            [['_route' => 'pim_enrich_associationtype_rest_index', '_controller' => 'pim_enrich.controller.rest.association_type:indexAction'], null, ['GET' => 0], null, true, false, null],
        ],
        '/rest/reference-data-configuration' => [[['_route' => 'pim_reference_data_configuration_rest_get', '_controller' => 'pim_reference_data.controller.configuration_rest:indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/configuration/rest/group-type' => [
            [['_route' => 'pim_enrich_grouptype_rest_create', '_controller' => 'pim_enrich.controller.rest.group_type:createAction'], null, ['POST' => 0], null, true, false, null],
            [['_route' => 'pim_enrich_grouptype_rest_index', '_controller' => 'pim_enrich.controller.rest.group_type:indexAction'], null, ['GET' => 0], null, true, false, null],
        ],
        '/configuration/attribute' => [[['_route' => 'pim_enrich_attribute_index'], null, null, null, true, false, null]],
        '/configuration/attribute/create' => [[['_route' => 'pim_enrich_attribute_create'], null, null, null, false, false, null]],
        '/configuration/attribute-group' => [[['_route' => 'pim_enrich_attributegroup_index'], null, null, null, true, false, null]],
        '/configuration/attribute-group/create' => [[['_route' => 'pim_enrich_attributegroup_create'], null, null, null, false, false, null]],
        '/configuration/family' => [[['_route' => 'pim_enrich_family_index'], null, null, null, true, false, null]],
        '/configuration/association-type' => [[['_route' => 'pim_enrich_associationtype_index'], null, null, null, true, false, null]],
        '/configuration/group-type' => [[['_route' => 'pim_enrich_grouptype_index'], null, null, null, false, false, null]],
        '/localization/format' => [[['_route' => 'pim_localization_format_index', '_controller' => 'pim_localization.controller.format:indexAction'], null, ['GET' => 0], null, false, false, null]],
        '/localization/format/date' => [[['_route' => 'pim_localization_format_date', '_controller' => 'pim_localization.controller.format:dateAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/rest/v1/product-models' => [
            [['_route' => 'pim_api_product_model_list', '_controller' => 'pim_api.controller.product_model:listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pim_api_product_model_create', '_controller' => 'pim_api.controller.product_model:createAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'pim_api_product_model_partial_update_list', '_controller' => 'pim_api.controller.product_model:partialUpdateListAction', '_format' => 'json'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/api/rest/v1/products' => [
            [['_route' => 'pim_api_product_list', '_controller' => 'pim_api.controller.product:listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pim_api_product_create', '_controller' => 'pim_api.controller.product:createAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'pim_api_product_partial_update_list', '_controller' => 'pim_api.controller.product:partialUpdateListAction', '_format' => 'json'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/api/rest/v1/products-uuid' => [
            [['_route' => 'pim_api_product_uuid_list', '_controller' => 'Akeneo\\Pim\\Enrichment\\Bundle\\Controller\\ExternalApi\\ListProductsByUuidController', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pim_api_product_uuid_create', '_controller' => 'Akeneo\\Pim\\Enrichment\\Bundle\\Controller\\ExternalApi\\CreateProductByUuidController', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'pim_api_product_uuid_partial_update_list', '_controller' => 'Akeneo\\Pim\\Enrichment\\Bundle\\Controller\\ExternalApi\\PartialUpdateListProductsByUuidController', '_format' => 'json'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/enrich/product/rest' => [
            [['_route' => 'pim_enrich_product_rest_index', '_controller' => 'pim_enrich.controller.rest.product:indexAction'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'pim_enrich_product_rest_create', '_controller' => 'pim_enrich.controller.rest.product:createAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/enrich/product-model/rest' => [[['_route' => 'pim_enrich_product_model_rest_index', '_controller' => 'pim_enrich.controller.rest.product_model:indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/enrich/product-model/rest/children' => [[['_route' => 'pim_enrich_product_model_rest_children_list', '_controller' => 'pim_enrich.controller.rest.product_model:childrenAction'], null, ['GET' => 0], null, false, false, null]],
        '/enrich/product-model/rest/family-variant-leaf' => [[['_route' => 'pim_enrich_product_model_family_variant_leaf', '_controller' => 'pim_enrich.controller.rest.product_model:searchLastLevelProductModelByCode'], null, ['GET' => 0], null, false, false, null]],
        '/enrich/product-model/rest/product-model/family-variant' => [[['_route' => 'pim_enrich_product_model_for_family_variant_rest_list', '_controller' => 'pim_enrich.controller.rest.product_model:listFamilyVariantProductModels'], null, ['GET' => 0], null, false, false, null]],
        '/enrich/group/rest/search' => [[['_route' => 'pim_enrich_group_rest_search', '_controller' => 'pim_enrich.controller.rest.group:searchAction'], null, ['GET' => 0], null, false, false, null]],
        '/enrich/group/rest' => [[['_route' => 'pim_enrich_group_rest_create', '_controller' => 'pim_enrich.controller.rest.group:createAction'], null, ['POST' => 0], null, false, false, null]],
        '/rest/sequential_edit' => [[['_route' => 'pim_enrich_sequential_edit_rest_get_ids', '_controller' => 'pim_enrich.controller.rest.sequential_edit:getIdsAction'], null, ['POST' => 0], null, true, false, null]],
        '/rest/product-and-product-model' => [[['_route' => 'pim_enrich_product_and_product_model_by_identifiers_rest_list', '_controller' => 'pim_enrich.controller.rest.product_and_product_model.get_from_identifier'], null, ['POST' => 0], null, true, false, null]],
        '/rest/product-and-product-model/count_items_with_attribute_value' => [[['_route' => 'pim_enrich_count_items_with_attribute_value', '_controller' => 'pim_enrich.controller.rest.count_impacted_items_by_attribute_deletion'], null, ['GET' => 0], null, false, false, null]],
        '/rest/value/validate' => [[['_route' => 'pim_enrich_value_rest_validate', '_controller' => 'pim_enrich.controller.rest.value:validateAction'], null, ['POST' => 0], null, false, false, null]],
        '/rest/mass_edit/get-filter' => [[['_route' => 'pim_enrich_mass_edit_rest_get_filter', '_controller' => 'pim_enrich.controller.rest.mass_edit:getFilterAction'], null, ['POST' => 0], null, false, false, null]],
        '/rest/mass_edit' => [[['_route' => 'pim_enrich_mass_edit_rest_launch', '_controller' => 'pim_enrich.controller.rest.mass_edit:launchAction'], null, ['POST' => 0], null, true, false, null]],
        '/media' => [[['_route' => 'pim_enrich_media_rest_post', '_controller' => 'pim_enrich.controller.rest.media:postAction'], null, ['POST' => 0], null, true, false, null]],
        '/enrich/product-category-tree/move-node' => [[['_route' => 'pim_enrich_categorytree_movenode', '_controller' => 'pim_enrich.controller.category_tree.product:moveNodeAction'], null, null, null, false, false, null]],
        '/enrich/product-category-tree' => [[['_route' => 'pim_enrich_categorytree_index'], null, null, null, true, false, null]],
        '/enrich/product-category-tree/create' => [[['_route' => 'pim_enrich_categorytree_create', '_controller' => 'pim_enrich.controller.category_tree.product:createAction'], null, null, null, false, false, null]],
        '/enrich/product-category-tree/products-number-by-category-tree' => [[['_route' => 'pim_enrich_categorytree_get_products_number', '_controller' => 'pim_enrich.controller.category_tree.product:getCategoryTreesProductsNumberAction'], null, ['GET' => 0], null, false, false, null]],
        '/enrich/product-category-tree/count-trees-children' => [[['_route' => 'pim_enrich_categorytree_count_trees_children', '_controller' => 'pim_enrich.controller.category_tree.product:countTreesChildrenAction'], null, ['GET' => 0], null, false, false, null]],
        '/enrich/product-model/rest/create' => [[['_route' => 'pim_enrich_product_model_rest_create', '_controller' => 'pim_enrich.controller.rest.product_model:createAction'], null, ['POST' => 0], null, false, false, null]],
        '/enrich/product' => [[['_route' => 'pim_enrich_product_index'], null, null, null, true, false, null]],
        '/enrich/group' => [[['_route' => 'pim_enrich_group_index'], null, null, null, true, false, null]],
        '/enrich/mass-edit-action/mass_action' => [[['_route' => 'pim_enrich_mass_edit_action'], null, ['GET' => 0], null, false, false, null]],
        '/rest/apps/connected-apps' => [[['_route' => 'akeneo_connectivity_connection_apps_rest_get_all_connected_apps', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\GetAllConnectedAppsAction'], null, ['GET' => 0], null, false, false, null]],
        '/connect/apps/v1/authorize' => [[['_route' => 'akeneo_connectivity_connection_connect_apps_v1_authorize', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Public\\AuthorizeAction'], null, ['GET' => 0], null, false, false, null]],
        '/connect/apps/v1/oauth2/token' => [[['_route' => 'akeneo_connectivity_connection_connect_apps_v1_token', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Public\\RequestAccessTokenAction'], null, ['POST' => 0], null, false, false, null]],
        '/connect/apps/v1/openid/public-key' => [[['_route' => 'akeneo_connectivity_connection_connect_apps_v1_openid_public_key', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Public\\GetOpenIdPublicKeyAction'], null, ['GET' => 0], null, false, false, null]],
        '/connect/apps/v1/scopes/update' => [[['_route' => 'akeneo_connectivity_connection_connect_apps_v1_scopes_update', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Public\\FlagConnectedAppWithOutdatedScopesAction'], null, ['POST' => 0], null, false, false, null]],
        '/connect/apps/activate' => [[['_route' => 'akeneo_connectivity_connection_connect_apps_activate'], null, null, null, false, false, null]],
        '/connect/apps/authorize' => [[['_route' => 'akeneo_connectivity_connection_connect_apps_authorize'], null, null, null, false, false, null]],
        '/connect/apps/authenticate' => [[['_route' => 'akeneo_connectivity_connection_connect_apps_authenticate'], null, null, null, false, false, null]],
        '/connect/connected-apps' => [[['_route' => 'akeneo_connectivity_connection_connect_connected_apps'], null, null, null, false, false, null]],
        '/rest/connections/audit/weekly' => [[['_route' => 'akeneo_connectivity_connection_audit_rest_weekly', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Audit\\Controller\\Internal\\GetWeeklyAuditAction'], null, ['GET' => 0], null, false, false, null]],
        '/rest/connections/audit/weekly-error' => [[['_route' => 'akeneo_connectivity_connection_audit_rest_weekly_error', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Audit\\Controller\\Internal\\GetWeeklyErrorAuditAction'], null, ['GET' => 0], null, false, false, null]],
        '/rest/connections/audit/error-count-per-connection' => [[['_route' => 'akeneo_connectivity_connection_audit_rest_error_count_per_connection', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Audit\\Controller\\Internal\\GetErrorCountPerConnectionAction'], null, ['GET' => 0], null, false, false, null]],
        '/connect/data-flows' => [[['_route' => 'akeneo_connectivity_connection_audit_index'], null, null, null, false, false, null]],
        '/connection/dashboard' => [[['_route' => 'akeneo_connectivity_connection_redirect_audit'], null, null, null, false, false, null]],
        '/rest/connections' => [
            [['_route' => 'akeneo_connectivity_connection_rest_list', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Connections\\Controller\\Internal\\ListConnectionsAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'akeneo_connectivity_connection_rest_create', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Connections\\Controller\\Internal\\CreateConnectionAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/rest/connections/wrong-credentials-combination' => [[['_route' => 'akeneo_connectivity_connection_rest_wrong_credentials_combination_list', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Connections\\WrongCredentialsCombination\\Controller\\Internal\\ListWrongCredentialsCombinationsAction'], null, ['GET' => 0], null, false, false, null]],
        '/rest/marketplace/marketplace-url' => [[['_route' => 'akeneo_connectivity_connection_marketplace_rest_get_web_marketplace_url', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\Controller\\Internal\\GetWebMarketplaceUrlAction'], null, ['GET' => 0], null, false, false, null]],
        '/rest/marketplace/extensions' => [[['_route' => 'akeneo_connectivity_connection_marketplace_rest_get_all_extensions', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\Controller\\Internal\\GetAllExtensionsAction'], null, ['GET' => 0], null, false, false, null]],
        '/rest/marketplace/apps' => [[['_route' => 'akeneo_connectivity_connection_marketplace_rest_get_all_apps', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\Controller\\Internal\\GetAllAppsAction'], null, ['GET' => 0], null, false, false, null]],
        '/rest/marketplace/test-apps' => [
            [['_route' => 'akeneo_connectivity_connection_marketplace_rest_get_all_test_apps', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\Controller\\Internal\\GetAllTestAppsAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'akeneo_connectivity_connection_marketplace_rest_test_apps_create', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\TestApps\\Controller\\Internal\\CreateTestAppAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/rest/v1/test-apps' => [
            [['_route' => 'akeneo_connectivity_connection_marketplace_api_test_apps_list', '_list_in_root_endpoint' => false, '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\TestApps\\Controller\\External\\GetTestAppsAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'akeneo_connectivity_connection_marketplace_api_test_apps_create', '_list_in_root_endpoint' => false, '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\TestApps\\Controller\\External\\CreateTestAppAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/connect/app-store' => [[['_route' => 'akeneo_connectivity_connection_connect_marketplace'], null, null, null, false, false, null]],
        '/connect/app-store/profile' => [[['_route' => 'akeneo_connectivity_connection_connect_marketplace_profile'], null, null, null, false, false, null]],
        '/connect/app-store/test-apps/create' => [[['_route' => 'akeneo_connectivity_connection_connect_marketplace_test_app_create'], null, null, null, false, false, null]],
        '/rest/events-api-debug/search-event-subscription-logs' => [[['_route' => 'akeneo_connectivity_connection_events_api_debug_rest_search_event_subscription_logs', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Webhook\\EventsApiDebug\\Controller\\Internal\\SearchEventSubscriptionLogsAction'], null, ['GET' => 0], null, false, false, null]],
        '/rest/events-api-debug/download-event-subscription-logs' => [[['_route' => 'akeneo_connectivity_connection_events_api_debug_rest_download_event_subscription_logs', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Webhook\\EventsApiDebug\\Controller\\Internal\\DownloadEventSubscriptionLogsAction'], null, ['GET' => 0], null, false, false, null]],
        '/rest/connections/max-limit-reached' => [[['_route' => 'akeneo_connectivity_connection_rest_connections_max_limit_reached', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Settings\\Controller\\Internal\\IsConnectionsNumberLimitReachedAction'], null, ['GET' => 0], null, false, false, null]],
        '/connections' => [[['_route' => 'akeneo_connectivity_connection_settings_redirect'], null, null, null, false, false, null]],
        '/connect/connection-settings' => [[['_route' => 'akeneo_connectivity_connection_settings_index'], null, null, null, false, false, null]],
        '/configuration/measurement' => [[['_route' => 'akeneo_measurements_settings_index'], null, null, null, false, false, null]],
        '/rest/measurement-families' => [[['_route' => 'akeneo_measurements_measurement_family_create_rest', '_controller' => 'pim_api.controller.internal_api.create_measurement_family'], null, ['POST' => 0], null, false, false, null]],
        '/configuration/feature-flags' => [[['_route' => 'feature_flag', '_controller' => 'akeneo.feature_flag.service.controller:isEnabledAction'], null, ['GET' => 0], null, false, false, null]],
        '/rest/announcements' => [[['_route' => 'akeneo_communication_channel_announcement_list_rest', '_controller' => 'akeneo_communication_channel.internal_api.announcement.list'], null, ['GET' => 0], null, false, false, null]],
        '/rest/viewed_announcements/add' => [[['_route' => 'akeneo_communication_channel_viewed_announcements_add_rest', '_controller' => 'akeneo_communication_channel.internal_api.announcement.add_viewed_announcements'], null, ['POST' => 0], null, false, false, null]],
        '/rest/new_announcements' => [[['_route' => 'akeneo_communication_channel_has_new_announcements_rest', '_controller' => 'akeneo_communication_channel.internal_api.announcement.has_new_announcements'], null, ['GET' => 0], null, false, false, null]],
        '/job' => [
            [['_route' => 'akeneo_job_process_tracker_index'], null, null, null, false, false, null],
            [['_route' => 'pim_enrich_job_tracker_index'], null, null, null, false, false, null],
        ],
        '/rest/process-tracker' => [[['_route' => 'akeneo_job_index_action', '_controller' => 'akeneo.job.controller.get_job_execution_action'], null, ['POST' => 0], null, false, false, null]],
        '/rest/process-tracker/job-type' => [[['_route' => 'akeneo_job_get_job_type_action', '_controller' => 'akeneo.job.controller.get_job_type_action'], null, ['GET' => 0], null, false, false, null]],
        '/rest/process-tracker/job-user' => [[['_route' => 'akeneo_job_get_job_user_action', '_controller' => 'akeneo.job.controller.get_job_user_action'], null, ['GET' => 0], null, false, false, null]],
        '/api/rest/v1/catalogs' => [
            [['_route' => 'akeneo_catalogs_public_create_catalog', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Public\\CreateCatalogAction', '_feature' => 'catalogs'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'akeneo_catalogs_public_get_catalogs', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Public\\GetCatalogsAction', '_feature' => 'catalogs'], null, ['GET' => 0], null, false, false, null],
        ],
        '/rest/catalogs' => [[['_route' => 'akeneo_catalogs_internal_get_catalogs_by_owner', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetAllCatalogsByOwnerAction'], null, ['GET' => 0], null, false, false, null]],
        '/rest/catalogs/families' => [[['_route' => 'akeneo_catalogs_internal_get_families', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetFamiliesAction'], null, ['GET' => 0], null, false, false, null]],
        '/rest/catalogs/attributes' => [[['_route' => 'akeneo_catalogs_internal_get_attributes', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetAttributesAction'], null, null, null, false, false, null]],
        '/rest/catalogs/channels' => [[['_route' => 'akeneo_catalogs_internal_get_channels', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetChannelsAction'], null, ['GET' => 0], null, false, false, null]],
        '/rest/catalogs/locales' => [[['_route' => 'akeneo_catalogs_internal_get_locales', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetLocalesAction'], null, ['GET' => 0], null, false, false, null]],
        '/rest/catalogs/currencies' => [[['_route' => 'akeneo_catalogs_internal_get_currencies', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetCurrenciesAction'], null, ['GET' => 0], null, false, false, null]],
        '/rest/catalogs/categories' => [[['_route' => 'akeneo_catalogs_internal_get_categories', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetCategoriesAction'], null, ['GET' => 0], null, false, false, null]],
        '/rest/catalogs/product-selection-criteria/product/count' => [[['_route' => 'akeneo_catalogs_internal_count_products_selected_by_criteria', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\CountProductsSelectedByCriteriaAction'], null, ['POST' => 0], null, false, false, null]],
        '/analytics/collect_data' => [[['_route' => 'pim_analytics_data_collect', '_controller' => 'pim_analytics.controller.data:collectAction', '_format' => 'json'], null, null, null, false, false, null]],
        '/system_info' => [[['_route' => 'pim_analytics_system_info_index'], null, null, null, false, false, null]],
        '/system_info/rest' => [[['_route' => 'pim_analytics_system_info_rest_index', '_controller' => 'pim_analytics.controller.system_info:indexAction', '_format' => 'json'], null, null, null, false, false, null]],
        '/system_info/download' => [[['_route' => 'pim_analytics_system_info_download', '_controller' => 'pim_analytics.controller.system_info:indexAction', '_format' => 'txt'], null, null, null, false, false, null]],
        '/api/rest/v1/system-information' => [[['_route' => 'pim_analytics_external_api_system_info_get', '_controller' => 'pim_analytics.external_api.controller.get_system_information', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/datagrid/product-grid/attributes-filters' => [[['_route' => 'pim_datagrid_productgrid_attributes_filters', '_controller' => 'pim_datagrid.controller.productgrid:getAttributesFiltersAction'], null, ['GET' => 0], null, false, false, null]],
        '/datagrid/product-grid/available-columns' => [[['_route' => 'pim_datagrid_productgrid_available_columns', '_controller' => 'pim_datagrid.controller.productgrid:getAvailableColumnsAction'], null, ['GET' => 0], null, false, false, null]],
        '/datagrid/product-grid/available-columns-groups' => [[['_route' => 'pim_datagrid_productgrid_available_columns_groups', '_controller' => 'pim_datagrid.controller.productgrid:getAvailableColumnsGroupsAction'], null, ['GET' => 0], null, false, false, null]],
        '/datagrid/export/index' => [[['_route' => 'pim_datagrid_export_index', '_controller' => 'pim_datagrid.controller.export:indexAction'], null, null, null, false, false, null]],
        '/datagrid/export/product/index' => [[['_route' => 'pim_datagrid_export_product_index', '_controller' => 'pim_datagrid.controller.product_export:indexAction'], null, null, null, false, false, null]],
        '/datagrid_view/rest/types' => [[['_route' => 'pim_datagrid_view_rest_types', '_controller' => 'pim_datagrid.controller.rest.datagrid_view:typesAction'], null, ['GET' => 0], null, false, false, null]],
        '/enrich/product-grid-filter' => [[['_route' => 'pim_enrich_product_grid_filters', '_controller' => 'akeneo.pim.enrichment.controller.product_grid_filter:listAction'], null, null, null, true, false, null]],
        '/dashboard' => [[['_route' => 'pim_dashboard_index', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController', 'path' => '/#/dashboard', 'permanent' => true], null, null, null, false, false, null]],
        '/dashboard/version_data' => [[['_route' => 'pim_dashboard_version_data', '_controller' => 'Akeneo\\Platform\\Bundle\\DashboardBundle\\Controller\\VersionController'], null, null, null, false, false, null]],
        '/list.json' => [[['_route' => 'pim_ui_ajaxentity_list', '_controller' => 'pim_ui.controller.ajax_option:listAction'], null, null, null, false, false, null]],
        '/system/locale/ui' => [[['_route' => 'pim_localization_locale_index', '_controller' => 'pim_localization.controller.locale:indexAction'], null, ['GET' => 0], null, false, false, null]],
        '/configuration/measures/rest' => [[['_route' => 'pim_enrich_measures_rest_index', '_controller' => 'akeneo_measure.controller.rest.measures:indexAction'], null, ['GET' => 0], null, false, false, null]],
        '/settings' => [[['_route' => 'pim_settings_index'], null, null, null, false, false, null]],
        '/settings/rest/count-entities' => [[['_route' => 'pim_settings_count_entities', '_controller' => 'Akeneo\\Platform\\Bundle\\UIBundle\\Controller\\SettingsController::countEntitiesAction'], null, ['GET' => 0], null, false, false, null]],
        '/system' => [
            [['_route' => 'pim_system_index'], null, null, null, false, false, null],
            [['_route' => 'oro_config_configuration_system'], null, null, null, true, false, null],
        ],
        '/system/rest/count-entities' => [[['_route' => 'pim_system_count_entities', '_controller' => 'Akeneo\\Platform\\Bundle\\UIBundle\\Controller\\SystemController::countEntitiesAction'], null, ['GET' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'pim_user_index'], null, null, null, true, false, null]],
        '/user/logout/redirect' => [[['_route' => 'pim_user_logout_redirect', '_controller' => 'pim_user.controller.security:logoutRedirect'], null, null, null, false, false, null]],
        '/rest/user' => [
            [['_route' => 'pim_user_user_rest_get_current', '_controller' => 'pim_user.controller.user_rest:getCurrentAction'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'pim_user_user_rest_create', '_controller' => 'pim_user.controller.user_rest:createAction'], null, ['POST' => 0], null, true, false, null],
        ],
        '/rest/user/profiles' => [[['_route' => 'pim_user_rest_find_all_profiles', '_controller' => 'Akeneo\\UserManagement\\Bundle\\Controller\\Rest\\FindAllProfilesController'], null, ['GET' => 0], null, false, false, null]],
        '/rest/user_group' => [[['_route' => 'pim_user_user_group_rest_index', '_controller' => 'pim_user.controller.user_group_rest:indexAction'], null, null, null, true, false, null]],
        '/rest/user_role' => [[['_route' => 'pim_user_user_role_rest_index', '_controller' => 'pim_user.controller.user_role_rest:indexAction'], null, null, null, true, false, null]],
        '/rest/security' => [[['_route' => 'pim_user_security_rest_get', '_controller' => 'pim_user.controller.security_rest:getAction'], null, null, null, true, false, null]],
        '/user/group/create' => [[['_route' => 'pim_user_group_create', '_controller' => 'pim_user.controller.user_group:create'], null, null, null, false, false, null]],
        '/user/group' => [[['_route' => 'pim_user_group_index'], null, null, null, true, false, null]],
        '/user/reset-request' => [[['_route' => 'pim_user_reset_request', '_controller' => 'pim_user.controller.reset:request'], null, ['GET' => 0], null, false, false, null]],
        '/user/send-email' => [[['_route' => 'pim_user_reset_send_email', '_controller' => 'pim_user.controller.reset:sendEmail'], null, ['POST' => 0], null, false, false, null]],
        '/user/role/create' => [[['_route' => 'pim_user_role_create', '_controller' => 'pim_user.controller.role:create'], null, null, null, false, false, null]],
        '/user/role' => [[['_route' => 'pim_user_role_index'], null, null, null, true, false, null]],
        '/user/login' => [[['_route' => 'pim_user_security_login', '_controller' => 'pim_user.controller.security:login'], null, null, null, false, false, null]],
        '/user/login-check' => [[['_route' => 'pim_user_security_check', '_controller' => 'pim_user.controller.security:check'], null, null, null, false, false, null]],
        '/user/logout' => [[['_route' => 'pim_user_security_logout', '_controller' => 'pim_user.controller.security:logout'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'pim_enrich_api_connection_index'], null, null, null, true, false, null]],
        '/client/rest' => [[['_route' => 'pim_enrich_api_connection_rest_create', '_controller' => 'pim_enrich.controller.rest.api_client:createAction'], null, ['POST' => 0], null, false, false, null]],
        '/spread/export' => [[['_route' => 'pim_importexport_export_profile_index'], null, null, null, true, false, null]],
        '/spread/export/category-trees' => [[['_route' => 'pim_importexport_category_tree_list', '_controller' => 'pim_import_export.controller.category_trees'], null, ['POST' => 0], null, false, false, null]],
        '/collect/import' => [[['_route' => 'pim_importexport_import_profile_index'], null, null, null, true, false, null]],
        '/job-instance/rest/import' => [[['_route' => 'pim_enrich_job_instance_rest_import_create', '_controller' => 'pim_enrich.controller.rest.job_instance:createImportAction'], null, ['POST' => 0], null, false, false, null]],
        '/job-instance/rest/export' => [[['_route' => 'pim_enrich_job_instance_rest_export_create', '_controller' => 'pim_enrich.controller.rest.job_instance:createExportAction'], null, ['POST' => 0], null, false, false, null]],
        '/job-instance/rest/jobs' => [[['_route' => 'pim_enrich_job_instance_rest_jobs_get', '_controller' => 'pim_enrich.controller.rest.job_instance:getJobNamesAction'], null, ['GET' => 0], null, false, false, null]],
        '/notification/list' => [[['_route' => 'pim_notification_notification_list', '_controller' => 'pim_notification.controller.notification:listAction'], null, null, null, false, false, null]],
        '/notification/count_unread' => [[['_route' => 'pim_notification_notification_count_unread', '_controller' => 'pim_notification.controller.notification:countUnreadAction'], null, null, null, false, false, null]],
        '/api/rest/v1/media-files' => [
            [['_route' => 'pim_api_media_file_list', '_controller' => 'pim_api.controller.media_file:listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pim_api_media_file_create', '_controller' => 'pim_api.controller.media_file:createAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/oauth/v1/token' => [[['_route' => 'fos_oauth_server_token', '_controller' => 'pim_api.controller.token:tokenAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/rest/v1' => [[['_route' => 'pim_api_root_endpoint', '_controller' => 'pim_api.controller.root_endpoint:getAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/rest/v1/measure-families' => [[['_route' => 'legacy_pim_api_measure_family_list', '_controller' => 'legacy_pim_api.controller.measure_family:listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/rest/v1/measurement-families' => [
            [['_route' => 'pim_api_measurement_family_get', '_controller' => 'pim_api.controller.get_measurement_families', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pim_api_measurement_family_create_or_update', '_controller' => 'pim_api.controller.create_update_measurement_families'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/catalog-volumes' => [[['_route' => 'pim_enrich_catalog_volume_index'], null, null, null, false, false, null]],
        '/catalog-volume-monitoring/volumes' => [[['_route' => 'pim_volume_monitoring_get_volumes', '_controller' => 'pim_volume_monitoring.controller.volume_monitoring:getVolumesAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/data-quality-insights/dashboard' => [[['_route' => 'akeneo_data_quality_insights_dashboard', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\Dashboard\\DashboardController', '_feature' => 'data_quality_insights'], null, ['GET' => 0], null, false, false, null]],
        '/data-quality-insights/attribute-group-activation' => [[['_route' => 'akeneo_data_quality_insights_update_attribute_group_activation', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\UpdateAttributeGroupActivationController', '_feature' => 'data_quality_insights'], null, ['POST' => 0], null, false, false, null]],
        '/data-quality-insights/attribute-groups-activation' => [[['_route' => 'akeneo_data_quality_insights_get_all_attribute_groups_activation', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\GetAllAttributeGroupsActivationController', '_feature' => 'data_quality_insights'], null, ['GET' => 0], null, false, false, null]],
        '/data-quality-insights/families' => [[['_route' => 'akeneo_data_quality_insights_find_families', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\Dashboard\\FindFamiliesController', '_feature' => 'data_quality_insights'], null, ['GET' => 0], null, false, false, null]],
        '/api/rest/v1/categories' => [
            [['_route' => 'pim_api_category_list', '_controller' => 'Akeneo\\Category\\Infrastructure\\Controller\\ExternalApi\\ListCategoriesController'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pim_api_category_create', '_controller' => 'pim_api.controller.category:createAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'pim_api_category_partial_update_list', '_controller' => 'pim_api.controller.category:partialUpdateListAction', '_format' => 'json'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/enrich/category/rest' => [[['_route' => 'pim_enrich_category_rest_list', '_controller' => 'pim_enrich.controller.rest.category:listAction'], null, ['GET' => 0], null, false, false, null]],
        '/category/rest/file/upload' => [[['_route' => 'pim_enriched_category_rest_file_upload', '_controller' => 'Akeneo\\Category\\Infrastructure\\Controller\\InternalApi\\UploadController', '_feature' => 'enriched_category'], null, ['POST' => 0], null, false, false, null]],
        '/configuration/identifier-generator' => [[['_route' => 'akeneo_identifier_generator_index', '_feature' => 'identifier_generator'], null, null, null, true, false, null]],
        '/identifier-generator/identifier-attributes' => [[['_route' => 'akeneo_identifier_generator_get_identifier_attributes', '_feature' => 'identifier_generator', '_controller' => 'Akeneo\\Pim\\Automation\\IdentifierGenerator\\Infrastructure\\Controller\\GetIdentifierAttributesController'], null, ['GET' => 0], null, false, false, null]],
        '/rest/identifier-generator' => [
            [['_route' => 'akeneo_identifier_generator_rest_list', '_feature' => 'identifier_generator', '_controller' => 'Akeneo\\Pim\\Automation\\IdentifierGenerator\\Infrastructure\\Controller\\ListIdentifierGeneratorController'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'akeneo_identifier_generator_rest_create', '_feature' => 'identifier_generator', '_controller' => 'Akeneo\\Pim\\Automation\\IdentifierGenerator\\Infrastructure\\Controller\\CreateIdentifierGeneratorController'], null, ['POST' => 0], null, false, false, null],
        ],
        '/' => [[['_route' => 'oro_default', 'template' => '@PimUI/index.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], null, null, null, false, false, null]],
        '/system/rest' => [
            [['_route' => 'oro_config_configuration_system_get', '_controller' => 'oro_config.controller.configuration:getAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'oro_config_configuration_system_post', '_controller' => 'oro_config.controller.configuration:postAction'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/rest/v1/(?'
                    .'|locales/([^/]++)(*:39)'
                    .'|c(?'
                        .'|hannels/([^/]++)(?'
                            .'|(*:69)'
                        .')'
                        .'|urrencies/([^/]++)(*:95)'
                        .'|at(?'
                            .'|alogs/([^/]++)(?'
                                .'|(*:124)'
                                .'|/(?'
                                    .'|product(?'
                                        .'|\\-(?'
                                            .'|identifiers(*:162)'
                                            .'|uuids(*:175)'
                                        .')'
                                        .'|s(?'
                                            .'|/([^/]++)(*:197)'
                                            .'|(*:205)'
                                        .')'
                                    .')'
                                    .'|mapp(?'
                                        .'|ing\\-schemas/product(?'
                                            .'|(*:245)'
                                        .')'
                                        .'|ed\\-products(*:266)'
                                    .')'
                                .')'
                            .')'
                            .'|egories/([^/]++)(?'
                                .'|(*:296)'
                            .')'
                        .')'
                    .')'
                    .'|a(?'
                        .'|ttribute(?'
                            .'|s/([^/]++)(?'
                                .'|(*:335)'
                                .'|/options(?'
                                    .'|(*:354)'
                                    .'|/([^/]++)(?'
                                        .'|(*:374)'
                                    .')'
                                    .'|(*:383)'
                                .')'
                            .')'
                            .'|\\-groups/([^/]++)(?'
                                .'|(*:413)'
                            .')'
                        .')'
                        .'|ssociation\\-types/([^/]++)(?'
                            .'|(*:452)'
                        .')'
                    .')'
                    .'|families/([^/]++)(?'
                        .'|(*:482)'
                        .'|/variants(?'
                            .'|(*:502)'
                            .'|/([^/]++)(?'
                                .'|(*:522)'
                            .')'
                            .'|(*:531)'
                        .')'
                    .')'
                    .'|product(?'
                        .'|\\-models/(?'
                            .'|((?:.+$)(?<!/draft|/proposal))(*:593)'
                            .'|(.+)(?'
                                .'|(*:608)'
                            .')'
                        .')'
                        .'|s(?'
                            .'|/((?:.+$)(?<!/draft|/proposal))(?'
                                .'|(*:656)'
                            .')'
                            .'|\\-uuid/([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})(?'
                                .'|(*:752)'
                            .')'
                        .')'
                    .')'
                    .'|test\\-apps/([^/]++)(*:782)'
                    .'|me(?'
                        .'|dia\\-files/(?'
                            .'|((?:[a-zA-Z0-9_./]+))/download(*:839)'
                            .'|((?:[a-zA-Z0-9_./]+))(*:868)'
                        .')'
                        .'|asure\\-families/([^/]++)(*:901)'
                    .')'
                .')'
                .'|/c(?'
                    .'|o(?'
                        .'|n(?'
                            .'|figuration/(?'
                                .'|c(?'
                                    .'|hannel/(?'
                                        .'|([a-zA-Z0-9_]+)/edit(*:972)'
                                        .'|rest/(?'
                                            .'|([^/]++)(*:996)'
                                            .'|([a-zA-Z0-9_]+)(?'
                                                .'|(*:1022)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|urrency/(\\d+)/toggle(*:1054)'
                                .')'
                                .'|rest/(?'
                                    .'|family(?'
                                        .'|/(?'
                                            .'|([a-zA-Z0-9_]+)(?'
                                                .'|(*:1103)'
                                                .'|(*:1112)'
                                            .')'
                                            .'|family\\-variant/([a-zA-Z0-9_]+)(*:1153)'
                                            .'|([a-zA-Z0-9_]+)/available\\-axes(*:1193)'
                                        .')'
                                        .'|\\-variant/([a-zA-Z0-9_]+)(?'
                                            .'|(*:1231)'
                                            .'|(*:1240)'
                                        .')'
                                    .')'
                                    .'|association\\-type/([a-zA-Z0-9_]+)(?'
                                        .'|(*:1287)'
                                        .'|(*:1296)'
                                    .')'
                                    .'|group\\-type/([a-zA-Z0-9_]+)(?'
                                        .'|(*:1336)'
                                        .'|(*:1345)'
                                    .')'
                                .')'
                                .'|a(?'
                                    .'|ttribute(?'
                                        .'|\\-(?'
                                            .'|option/(?'
                                                .'|(\\d+)(?'
                                                    .'|(*:1394)'
                                                .')'
                                                .'|(\\d+)/(\\d+)(?'
                                                    .'|(*:1418)'
                                                .')'
                                                .'|(\\d+)/update\\-sorting(*:1449)'
                                                .'|attribute/([a-zA-Z0-9_]+)/option(*:1490)'
                                            .')'
                                            .'|group/([a-zA-Z0-9_]+)/edit(*:1526)'
                                        .')'
                                        .'|/([a-zA-Z0-9_]+)/edit(*:1557)'
                                    .')'
                                    .'|ssociation\\-type/([a-zA-Z0-9_]+)/edit(*:1604)'
                                .')'
                                .'|family/([a-zA-Z0-9_]+)/edit(*:1641)'
                                .'|group\\-type/([a-zA-Z0-9_]+)/edit(*:1682)'
                                .'|measurement/(.*)(*:1707)'
                                .'|identifier\\-generator/([^/]++)(*:1746)'
                            .')'
                            .'|nect/(?'
                                .'|app(?'
                                    .'|s/v1/c(?'
                                        .'|atalogs/([^/]++)(*:1795)'
                                        .'|onnected_app/([^/]++)(*:1825)'
                                    .')'
                                    .'|\\-store/test\\-apps/([a-zA-Z0-9_-]+)/delete(*:1877)'
                                .')'
                                .'|connect(?'
                                    .'|ed\\-apps/(?'
                                        .'|([a-zA-Z0-9_-]+)(*:1925)'
                                        .'|([a-zA-Z0-9_-]+)/delete(*:1957)'
                                        .'|([a-zA-Z0-9_-]+)/open(*:1987)'
                                        .'|([a-zA-Z0-9_-]+)/catalogs/([0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})(*:2084)'
                                    .')'
                                    .'|ion\\-settings/(?'
                                        .'|([a-zA-Z0-9_]+)/monitoring(*:2137)'
                                        .'|([a-zA-Z0-9_]+)/event\\-subscription/regenerate\\-secret(*:2200)'
                                        .'|([a-zA-Z0-9_]+)/event\\-subscription(*:2244)'
                                        .'|([a-zA-Z0-9_]+)/event\\-logs(*:2280)'
                                        .'|([a-zA-Z0-9_]+)/edit(*:2309)'
                                        .'|(.*)(*:2322)'
                                    .')'
                                .')'
                                .'|data\\-flows/(?'
                                    .'|(.*)(*:2352)'
                                    .'|business\\-errors(*:2377)'
                                .')'
                            .')'
                        .')'
                        .'|mment/(\\d+)/remove(*:2407)'
                        .'|llect/import(?'
                            .'|/(?'
                                .'|([a-zA-Z0-9_]+)(*:2450)'
                                .'|([a-zA-Z0-9_]+)/edit(*:2479)'
                            .')'
                            .'|_execution/(?'
                                .'|(\\d+)/download(*:2517)'
                                .'|(\\d+)/download/([^/]++)/([^/]++)(*:2558)'
                            .')'
                        .')'
                    .')'
                    .'|lient/rest/([^/]++)(*:2589)'
                    .'|ategory/(?'
                        .'|rest/(?'
                            .'|(\\d+)(?'
                                .'|(*:2625)'
                            .')'
                            .'|file/image_preview/([^/]++)/([^/]++)(*:2671)'
                        .')'
                        .'|template/rest/(?'
                            .'|([^/]++)(*:2706)'
                            .'|in\\-memory/([^/]++)(*:2734)'
                            .'|([^/]++)(*:2751)'
                        .')'
                    .')'
                .')'
                .'|/rest/(?'
                    .'|a(?'
                        .'|ttribute(?'
                            .'|/(?'
                                .'|([a-zA-Z0-9_]+)(?'
                                    .'|(*:2809)'
                                .')'
                                .'|([^/]++)(*:2827)'
                                .'|axes(*:2840)'
                            .')'
                            .'|\\-group/([a-zA-Z0-9_]+)(?'
                                .'|(*:2876)'
                            .')'
                        .')'
                        .'|pps/(?'
                            .'|activate/([^/]++)(*:2911)'
                            .'|load\\-wizard\\-data/([^/]++)(*:2947)'
                            .'|con(?'
                                .'|firm\\-auth(?'
                                    .'|orization/([^/]++)(*:2993)'
                                    .'|entication/([^/]++)(*:3021)'
                                .')'
                                .'|nected\\-apps/([^/]++)(?'
                                    .'|/(?'
                                        .'|scope\\-messages(*:3074)'
                                        .'|authentication\\-scopes(*:3105)'
                                        .'|monitoring\\-settings(?'
                                            .'|(*:3137)'
                                        .')'
                                        .'|refresh(*:3154)'
                                        .'|open\\-app\\-url(*:3177)'
                                    .')'
                                    .'|(*:3187)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|c(?'
                        .'|onnections/(?'
                            .'|([a-zA-Z0-9_]+)(?'
                                .'|(*:3236)'
                            .')'
                            .'|([a-zA-Z0-9_]+)/regenerate\\-secret(*:3280)'
                            .'|([a-zA-Z0-9_]+)/regenerate\\-password(*:3325)'
                            .'|([a-zA-Z0-9_]+)/business\\-errors(*:3366)'
                            .'|([a-zA-Z0-9_]+)/webhook/regenerate\\-secret(*:3417)'
                            .'|([a-zA-Z0-9_]+)/webhook(*:3449)'
                            .'|([^/]++)/webhook/check\\-reachability(*:3494)'
                            .'|([a-zA-Z0-9_]+)/webhook(*:3526)'
                        .')'
                        .'|atalogs/(?'
                            .'|([0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})(?'
                                .'|/errors(*:3619)'
                                .'|(*:3628)'
                            .')'
                            .'|attributes/([^/]++)(?'
                                .'|/options(*:3668)'
                                .'|(*:3677)'
                            .')'
                            .'|c(?'
                                .'|hannels/([^/]++)(?'
                                    .'|/locales(*:3718)'
                                    .'|(*:3727)'
                                .')'
                                .'|ategories/([^/]++)/children(*:3764)'
                            .')'
                            .'|measurement\\-families/([^/]++)/units(*:3810)'
                            .'|([0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})/mapping\\-schemas/product(*:3906)'
                        .')'
                    .')'
                    .'|m(?'
                        .'|arketplace/test\\-apps/([^/]++)(*:3951)'
                        .'|easurement\\-families/([^/]++)(?'
                            .'|(*:3992)'
                            .'|(*:4001)'
                            .'|/validate\\-unit(*:4025)'
                        .')'
                    .')'
                    .'|user/(?'
                        .'|(\\d+)(?'
                            .'|(*:4052)'
                        .')'
                        .'|(\\d+)/profile(*:4075)'
                        .'|(\\d+)(*:4089)'
                        .'|(\\d+)/duplicate(*:4113)'
                    .')'
                    .'|identifier\\-generator/([^/]++)(?'
                        .'|(*:4156)'
                    .')'
                .')'
                .'|/enrich/(?'
                    .'|product(?'
                        .'|/(?'
                            .'|rest/([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})(?'
                                .'|/(?'
                                    .'|categories(*:4291)'
                                    .'|(\\d+)(*:4305)'
                                    .'|convert\\-to\\-simple(*:4333)'
                                .')'
                                .'|(*:4343)'
                            .')'
                            .'|([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})/comments(?'
                                .'|(*:4442)'
                                .'|/([0-9a-f]+)(*:4463)'
                            .')'
                            .'|rest/product/([0-9a-f]+|(?:[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}))/history(*:4585)'
                            .'|([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})(?'
                                .'|/download\\-pdf(*:4688)'
                                .'|(*:4697)'
                            .')'
                            .'|categories/([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})(*:4795)'
                            .'|([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})/toggle\\-status(*:4896)'
                            .'|list\\-categories/product/([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})/parent/(\\d+)(*:5020)'
                        .')'
                        .'|\\-(?'
                            .'|model/(?'
                                .'|rest(?'
                                    .'|/(?'
                                        .'|([0-9a-f]+)/categories(*:5077)'
                                        .'|([0-9a-f]+)(?'
                                            .'|(*:5100)'
                                        .')'
                                        .'|(\\d+)(*:5115)'
                                        .'|product\\-model/([0-9a-f]+)/history(*:5158)'
                                    .')'
                                    .'|\\-code/(.+)(*:5179)'
                                .')'
                                .'|([^/]++)(*:5197)'
                                .'|categories/([^/]++)(*:5225)'
                                .'|list\\-categories/product\\-model/([0-9a-f]+)/parent/(\\d+)(*:5290)'
                            .')'
                            .'|category\\-tree/(?'
                                .'|product\\-grid/(?'
                                    .'|list\\-tree\\.(json)(*:5353)'
                                    .'|children\\.(json)(*:5378)'
                                .')'
                                .'|list\\-tree\\.(json)(*:5406)'
                                .'|children\\.(json)(*:5431)'
                                .'|(\\d+)/edit(*:5450)'
                                .'|(\\d+)/tree(*:5469)'
                                .'|(\\d+)/remove(*:5490)'
                                .'|(\\d+)/count\\-products(*:5520)'
                                .'|(\\d+)/template/([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})(*:5621)'
                            .')'
                        .')'
                    .')'
                    .'|group/(?'
                        .'|rest/(?'
                            .'|([a-zA-Z0-9_]+)(*:5665)'
                            .'|([a-zA-Z0-9_]+)/products(*:5698)'
                            .'|([a-zA-Z0-9_]+)(?'
                                .'|(*:5725)'
                            .')'
                        .')'
                        .'|([a-zA-Z0-9_]+)/edit(*:5756)'
                    .')'
                    .'|category/rest/([^/]++)(?'
                        .'|/selected\\-children(*:5810)'
                        .'|(*:5819)'
                    .')'
                .')'
                .'|/media/(?'
                    .'|show/([^/]++)(?:/([^/]++))?(*:5867)'
                    .'|d(?'
                        .'|ownload/([^/]++)(*:5896)'
                        .'|efault\\-thumbnail/([a-z-]+/[a-z0-9.-]+)(*:5944)'
                    .')'
                    .'|cache/(?'
                        .'|resolve/([A-z0-9_-]*)/(.+)(*:5989)'
                        .'|([A-z0-9_-]*)/(.+)(*:6016)'
                        .'|resolve/(?'
                            .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:6066)'
                            .'|([A-z0-9_-]*)/(.+)(*:6093)'
                        .')'
                    .')'
                .')'
                .'|/j(?'
                    .'|ob(?'
                        .'|/(?'
                            .'|show/(\\d+)(*:6129)'
                            .'|(\\d+)/stop(*:6148)'
                            .'|(\\d+)/download/([^/]++)/([^/]++)(*:6189)'
                            .'|(\\d+)/download/zip(*:6216)'
                        .')'
                        .'|\\-(?'
                            .'|instance/rest/(?'
                                .'|import/([^/]++)(?'
                                    .'|(*:6266)'
                                    .'|(*:6275)'
                                    .'|/launch(*:6291)'
                                .')'
                                .'|export/([^/]++)(?'
                                    .'|(*:6319)'
                                    .'|(*:6328)'
                                    .'|/launch(*:6344)'
                                .')'
                                .'|([^/]++)/duplicate(*:6372)'
                            .')'
                            .'|execution/rest/([^/]++)(*:6405)'
                        .')'
                    .')'
                    .'|s/(?'
                        .'|translation/([^/\\.]++)\\.js(*:6447)'
                        .'|routing(?:\\.(js|json))?(*:6479)'
                    .')'
                .')'
                .'|/data(?'
                    .'|grid(?'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|load(*:6525)'
                                .'|massAction/([^/]++)(*:6553)'
                            .')'
                            .'|(*:6563)'
                        .')'
                        .'|_view/rest/([^/]++)(?'
                            .'|/(?'
                                .'|views(*:6604)'
                                .'|default(?'
                                    .'|\\-columns(*:6632)'
                                    .'|(*:6641)'
                                .')'
                                .'|available\\-columns(*:6669)'
                            .')'
                            .'|(*:6679)'
                            .'|(*:6688)'
                        .')'
                    .')'
                    .'|\\-quality\\-insights/(?'
                        .'|dashboard/(?'
                            .'|overview/([^/]++)/([^/]++)/([^/]++)(*:6770)'
                            .'|widget/(?'
                                .'|families/([^/]++)/([^/]++)(*:6815)'
                                .'|categories/([^/]++)/([^/]++)(*:6852)'
                            .')'
                            .'|key_indicators/([^/]++)/([^/]++)(*:6894)'
                            .'|quality\\-score\\-evolution/([^/]++)/([^/]++)(*:6946)'
                        .')'
                        .'|product\\-(?'
                            .'|evaluation/([^/]++)(?'
                                .'|(*:6990)'
                                .'|(*:6999)'
                            .')'
                            .'|model\\-(?'
                                .'|evaluation/([^/]++)(?'
                                    .'|(*:7041)'
                                    .'|(*:7050)'
                                .')'
                                .'|quality\\-score/([^/]++)(*:7083)'
                            .')'
                            .'|quality\\-score/([^/]++)(*:7116)'
                        .')'
                        .'|attribute\\-group\\-activation/([^/]++)(*:7163)'
                    .')'
                .')'
                .'|/widget/([^/]++)(*:7190)'
                .'|/user/(?'
                    .'|(\\d+)/edit(*:7218)'
                    .'|group/(?'
                        .'|update(?:/(\\d+))?(*:7253)'
                        .'|delete/(\\d+)(*:7274)'
                    .')'
                    .'|r(?'
                        .'|eset/(\\w+)(*:7298)'
                        .'|ole/(?'
                            .'|update(?:/(\\d+))?(*:7331)'
                            .'|delete/(\\d+)(*:7352)'
                        .')'
                    .')'
                .')'
                .'|/spread/export(?'
                    .'|/(?'
                        .'|([a-zA-Z0-9_]+)(*:7400)'
                        .'|([a-zA-Z0-9_]+)/edit(*:7429)'
                    .')'
                    .'|_execution/(?'
                        .'|(\\d+)/download(*:7467)'
                        .'|(\\d+)/download/([^/]++)/([^/]++)(*:7508)'
                    .')'
                .')'
                .'|/notification/(?'
                    .'|mark_viewed(?:/(\\d+))?(*:7558)'
                    .'|remove/(\\d+)(*:7579)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'pim_api_locale_get', '_controller' => 'pim_api.controller.locale:getAction', '_format' => 'json'], ['code'], ['GET' => 0], null, false, true, null]],
        69 => [
            [['_route' => 'pim_api_channel_get', '_controller' => 'pim_api.controller.channel:getAction', '_format' => 'json'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_api_channel_partial_update', '_controller' => 'pim_api.controller.channel:partialUpdateAction', '_format' => 'json'], ['code'], ['PATCH' => 0], null, false, true, null],
        ],
        95 => [[['_route' => 'pim_api_currency_get', '_controller' => 'pim_api.controller.currency:getAction', '_format' => 'json'], ['code'], ['GET' => 0], null, false, true, null]],
        124 => [
            [['_route' => 'akeneo_catalogs_public_get_catalog', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Public\\GetCatalogAction', '_feature' => 'catalogs'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'akeneo_catalogs_public_delete_catalog', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Public\\DeleteCatalogAction', '_feature' => 'catalogs'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'akeneo_catalogs_public_update_catalog', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Public\\UpdateCatalogAction', '_feature' => 'catalogs'], ['id'], ['PATCH' => 0], null, false, true, null],
        ],
        162 => [[['_route' => 'akeneo_catalogs_public_get_product_identifiers', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Public\\GetProductIdentifiersAction', '_feature' => 'catalogs'], ['id'], ['GET' => 0], null, false, false, null]],
        175 => [[['_route' => 'akeneo_catalogs_public_get_product_uuids', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Public\\GetProductUuidsAction', '_feature' => 'catalogs'], ['id'], ['GET' => 0], null, false, false, null]],
        197 => [[['_route' => 'akeneo_catalogs_public_get_product', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Public\\GetProductAction', '_feature' => 'catalogs'], ['id', 'uuid'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'akeneo_catalogs_public_get_products', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Public\\GetProductsAction', '_feature' => 'catalogs'], ['id'], ['GET' => 0], null, false, false, null]],
        245 => [
            [['_route' => 'akeneo_catalogs_public_get_products_mapping_schema', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Public\\GetProductMappingSchemaAction', '_feature' => 'catalogs'], ['catalogId'], ['GET' => 0], null, false, false, null],
            [['_route' => 'akeneo_catalogs_public_update_products_mapping_schema', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Public\\UpdateProductMappingSchemaAction', '_feature' => 'catalogs'], ['catalogId'], ['PUT' => 0], null, false, false, null],
            [['_route' => 'akeneo_catalogs_public_delete_products_mapping_schema', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Public\\DeleteProductMappingSchemaAction', '_feature' => 'catalogs'], ['catalogId'], ['DELETE' => 0], null, false, false, null],
        ],
        266 => [[['_route' => 'akeneo_catalogs_public_get_mapped_products', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Public\\GetMappedProductsAction', '_feature' => 'catalogs'], ['catalogId'], ['GET' => 0], null, false, false, null]],
        296 => [
            [['_route' => 'pim_api_category_get', '_controller' => 'pim_api.controller.category:getAction', '_format' => 'json'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_api_category_partial_update', '_controller' => 'pim_api.controller.category:partialUpdateAction', '_format' => 'json'], ['code'], ['PATCH' => 0], null, false, true, null],
        ],
        335 => [
            [['_route' => 'pim_api_attribute_partial_update', '_controller' => 'pim_api.controller.attribute:partialUpdateAction', '_format' => 'json'], ['code'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'pim_api_attribute_get', '_controller' => 'pim_api.controller.attribute:getAction', '_format' => 'json'], ['code'], ['GET' => 0], null, false, true, null],
        ],
        354 => [
            [['_route' => 'pim_api_attribute_option_list', '_controller' => 'pim_api.controller.attribute_option:listAction', '_format' => 'json'], ['attributeCode'], ['GET' => 0], null, false, false, null],
            [['_route' => 'pim_api_attribute_option_create', '_controller' => 'pim_api.controller.attribute_option:createAction', '_format' => 'json'], ['attributeCode'], ['POST' => 0], null, false, false, null],
        ],
        374 => [
            [['_route' => 'pim_api_attribute_option_partial_update', '_controller' => 'pim_api.controller.attribute_option:partialUpdateAction', '_format' => 'json'], ['attributeCode', 'code'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'pim_api_attribute_option_get', '_controller' => 'pim_api.controller.attribute_option:getAction', '_format' => 'json'], ['attributeCode', 'code'], ['GET' => 0], null, false, true, null],
        ],
        383 => [[['_route' => 'pim_api_attribute_option_partial_update_list', '_controller' => 'pim_api.controller.attribute_option:partialUpdateListAction', '_format' => 'json'], ['attributeCode'], ['PATCH' => 0], null, false, false, null]],
        413 => [
            [['_route' => 'pim_api_attribute_group_get', '_controller' => 'pim_api.controller.attribute_group:getAction', '_format' => 'json'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_api_attribute_group_partial_update', '_controller' => 'pim_api.controller.attribute_group:partialUpdateAction', '_format' => 'json'], ['code'], ['PATCH' => 0], null, false, true, null],
        ],
        452 => [
            [['_route' => 'pim_api_association_type_get', '_controller' => 'pim_api.controller.association_type:getAction', '_format' => 'json'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_api_association_type_partial_update', '_controller' => 'pim_api.controller.association_type:partialUpdateAction', '_format' => 'json'], ['code'], ['PATCH' => 0], null, false, true, null],
        ],
        482 => [
            [['_route' => 'pim_api_family_get', '_controller' => 'pim_api.controller.family:getAction', '_format' => 'json'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_api_family_partial_update', '_controller' => 'pim_api.controller.family:partialUpdateAction', '_format' => 'json'], ['code'], ['PATCH' => 0], null, false, true, null],
        ],
        502 => [[['_route' => 'pim_api_family_variant_list', '_controller' => 'pim_api.controller.family_variant:listAction', '_format' => 'json'], ['familyCode'], ['GET' => 0], null, false, false, null]],
        522 => [
            [['_route' => 'pim_api_family_variant_get', '_controller' => 'pim_api.controller.family_variant:getAction', '_format' => 'json'], ['familyCode', 'code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_api_family_variant_partial_update', '_controller' => 'pim_api.controller.family_variant:partialUpdateAction', '_format' => 'json'], ['familyCode', 'code'], ['PATCH' => 0], null, false, true, null],
        ],
        531 => [
            [['_route' => 'pim_api_family_variant_create', '_controller' => 'pim_api.controller.family_variant:createAction', '_format' => 'json'], ['familyCode'], ['POST' => 0], null, false, false, null],
            [['_route' => 'pim_api_family_variant_partial_update_list', '_controller' => 'pim_api.controller.family_variant:partialUpdateListAction', '_format' => 'json'], ['familyCode'], ['PATCH' => 0], null, false, false, null],
        ],
        593 => [[['_route' => 'pim_api_product_model_get', '_controller' => 'pim_api.controller.product_model:getAction', '_format' => 'json'], ['code'], ['GET' => 0], null, false, true, null]],
        608 => [
            [['_route' => 'pim_api_product_model_partial_update', '_controller' => 'pim_api.controller.product_model:partialUpdateAction', '_format' => 'json'], ['code'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'pim_api_product_model_delete', '_controller' => 'pim_api.controller.product_model:deleteAction', '_format' => 'json'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        656 => [
            [['_route' => 'pim_api_product_get', '_controller' => 'pim_api.controller.product:getAction', '_format' => 'json'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_api_product_partial_update', '_controller' => 'pim_api.controller.product:partialUpdateAction', '_format' => 'json'], ['code'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'pim_api_product_delete', '_controller' => 'pim_api.controller.product:deleteAction', '_format' => 'json'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        752 => [
            [['_route' => 'pim_api_product_uuid_delete', '_controller' => 'Akeneo\\Pim\\Enrichment\\Bundle\\Controller\\ExternalApi\\DeleteProductByUuidController', '_format' => 'json'], ['uuid'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'pim_api_product_uuid_get', '_controller' => 'Akeneo\\Pim\\Enrichment\\Bundle\\Controller\\ExternalApi\\GetProductByUuidController', '_format' => 'json'], ['uuid'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_api_product_uuid_partial_update', '_controller' => 'Akeneo\\Pim\\Enrichment\\Bundle\\Controller\\ExternalApi\\UpdateProductByUuidController', '_format' => 'json'], ['uuid'], ['PATCH' => 0], null, false, true, null],
        ],
        782 => [[['_route' => 'akeneo_connectivity_connection_marketplace_api_test_apps_delete', '_list_in_root_endpoint' => false, '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\TestApps\\Controller\\External\\DeleteTestAppAction'], ['clientId'], ['DELETE' => 0], null, false, true, null]],
        839 => [[['_route' => 'pim_api_media_file_download', '_controller' => 'pim_api.controller.media_file:downloadAction', '_format' => 'json'], ['code'], ['GET' => 0], null, false, false, null]],
        868 => [[['_route' => 'pim_api_media_file_get', '_controller' => 'pim_api.controller.media_file:getAction', '_format' => 'json'], ['code'], ['GET' => 0], null, false, true, null]],
        901 => [[['_route' => 'legacy_pim_api_measure_family_get', '_controller' => 'legacy_pim_api.controller.measure_family:getAction', '_format' => 'json'], ['code'], ['GET' => 0], null, false, true, null]],
        972 => [[['_route' => 'pim_enrich_channel_edit'], ['code'], null, null, false, false, null]],
        996 => [[['_route' => 'pim_enrich_channel_rest_get', '_controller' => 'pim_enrich.controller.rest.channel:getAction'], ['identifier'], ['GET' => 0], null, false, true, null]],
        1022 => [
            [['_route' => 'pim_enrich_channel_rest_put', '_controller' => 'pim_enrich.controller.rest.channel:putAction'], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'pim_enrich_channel_rest_remove', '_controller' => 'pim_enrich.controller.rest.channel:removeAction'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        1054 => [[['_route' => 'pim_enrich_currency_toggle', '_controller' => 'pim_enrich.controller.currency:toggleAction'], ['id'], null, null, false, false, null]],
        1103 => [[['_route' => 'pim_enrich_family_rest_get', '_controller' => 'pim_enrich.controller.rest.family:getAction'], ['identifier'], ['GET' => 0], null, false, true, null]],
        1112 => [
            [['_route' => 'pim_enrich_family_rest_put', '_controller' => 'pim_enrich.controller.rest.family:putAction'], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'pim_enrich_family_rest_remove', '_controller' => 'pim_enrich.controller.rest.family:removeAction'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        1153 => [[['_route' => 'pim_enrich_family_variant_rest_get', '_controller' => 'pim_enrich.controller.rest.family_variant:getAction'], ['identifier'], ['GET' => 0], null, false, true, null]],
        1193 => [[['_route' => 'pim_enrich_family_rest_get_available_axes', '_controller' => 'pim_enrich.controller.rest.family:getAvailableAxesAction'], ['code'], ['GET' => 0], null, false, false, null]],
        1231 => [[['_route' => 'pim_enrich_family_variant_rest_put', '_controller' => 'pim_enrich.controller.rest.family_variant:putAction'], ['identifier'], ['PUT' => 0], null, false, true, null]],
        1240 => [[['_route' => 'pim_enrich_family_variant_rest_remove', '_controller' => 'pim_enrich.controller.rest.family_variant:removeAction'], ['familyVariantCode'], ['DELETE' => 0], null, false, true, null]],
        1287 => [
            [['_route' => 'pim_enrich_associationtype_rest_get', '_controller' => 'pim_enrich.controller.rest.association_type:getAction'], ['identifier'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_enrich_associationtype_rest_post', '_controller' => 'pim_enrich.controller.rest.association_type:postAction'], ['identifier'], ['POST' => 0], null, false, true, null],
        ],
        1296 => [[['_route' => 'pim_enrich_associationtype_rest_remove', '_controller' => 'pim_enrich.controller.rest.association_type:removeAction'], ['code'], ['DELETE' => 0], null, false, true, null]],
        1336 => [
            [['_route' => 'pim_enrich_grouptype_rest_get', '_controller' => 'pim_enrich.controller.rest.group_type:getAction'], ['identifier'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_enrich_grouptype_rest_post', '_controller' => 'pim_enrich.controller.rest.group_type:postAction'], ['identifier'], ['POST' => 0], null, false, true, null],
        ],
        1345 => [[['_route' => 'pim_enrich_grouptype_rest_remove', '_controller' => 'pim_enrich.controller.rest.group_type:removeAction'], ['code'], ['DELETE' => 0], null, false, true, null]],
        1394 => [
            [['_route' => 'pim_enrich_attributeoption_index', '_controller' => 'pim_enrich.controller.attribute_option:indexAction', '_format' => 'json'], ['attributeId'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_enrich_attributeoption_create', '_controller' => 'pim_enrich.controller.attribute_option:createAction', '_format' => 'json'], ['attributeId'], ['POST' => 0], null, false, true, null],
        ],
        1418 => [
            [['_route' => 'pim_enrich_attributeoption_update', '_controller' => 'pim_enrich.controller.attribute_option:updateAction', '_format' => 'json'], ['attributeId', 'attributeOptionId'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'pim_enrich_attributeoption_delete', '_controller' => 'pim_enrich.controller.attribute_option:deleteAction', '_format' => 'json'], ['attributeId', 'attributeOptionId'], ['DELETE' => 0], null, false, true, null],
        ],
        1449 => [[['_route' => 'pim_enrich_attributeoption_update_sorting', '_controller' => 'pim_enrich.controller.attribute_option:updateSortingAction', '_format' => 'json'], ['attributeId'], ['PUT' => 0], null, false, false, null]],
        1490 => [[['_route' => 'pim_enrich_attributeoption_get', '_controller' => 'pim_enrich.controller.attribute_option:getAction', '_format' => 'json'], ['identifier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1526 => [[['_route' => 'pim_enrich_attributegroup_edit'], ['identifier'], null, null, false, false, null]],
        1557 => [[['_route' => 'pim_enrich_attribute_edit'], ['code'], null, null, false, false, null]],
        1604 => [[['_route' => 'pim_enrich_associationtype_edit'], ['code'], null, null, false, false, null]],
        1641 => [[['_route' => 'pim_enrich_family_edit'], ['code'], null, null, false, false, null]],
        1682 => [[['_route' => 'pim_enrich_grouptype_edit'], ['code'], null, null, false, false, null]],
        1707 => [[['_route' => 'akeneo_measurements_settings_any'], ['any'], null, null, false, true, null]],
        1746 => [[['_route' => 'akeneo_identifier_generator_edit', '_feature' => 'identifier_generator'], ['code'], ['GET' => 0], null, false, true, null]],
        1795 => [[['_route' => 'akeneo_connectivity_connection_connect_apps_v1_redirect_to_catalog', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Public\\RedirectToEditCatalogAction'], ['id'], ['GET' => 0], null, false, true, null]],
        1825 => [[['_route' => 'akeneo_connectivity_connection_connect_apps_v1_redirect_to_connected_app', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Public\\RedirectToEditConnectedAppAction'], ['id'], ['GET' => 0], null, false, true, null]],
        1877 => [[['_route' => 'akeneo_connectivity_connection_connect_marketplace_test_app_delete'], ['testAppId'], null, null, false, false, null]],
        1925 => [[['_route' => 'akeneo_connectivity_connection_connect_connected_apps_edit'], ['connectionCode'], null, null, false, true, null]],
        1957 => [[['_route' => 'akeneo_connectivity_connection_connect_connected_apps_delete'], ['connectionCode'], null, null, false, false, null]],
        1987 => [[['_route' => 'akeneo_connectivity_connection_connect_connected_apps_open'], ['connectionCode'], null, null, false, false, null]],
        2084 => [[['_route' => 'akeneo_connectivity_connection_connect_connected_apps_catalogs_edit'], ['connectionCode', 'catalogId'], null, null, false, true, null]],
        2137 => [[['_route' => 'akeneo_connectivity_connection_error_management_connection_monitoring'], ['code'], null, null, false, false, null]],
        2200 => [[['_route' => 'akeneo_connectivity_connection_webhook_regenerate_secret'], ['code'], null, null, false, false, null]],
        2244 => [[['_route' => 'akeneo_connectivity_connection_webhook_edit'], ['code'], null, null, false, false, null]],
        2280 => [[['_route' => 'akeneo_connectivity_connection_webhook_event_logs'], ['code'], null, null, false, false, null]],
        2309 => [[['_route' => 'akeneo_connectivity_connection_settings_edit'], ['code'], null, null, false, false, null]],
        2322 => [[['_route' => 'akeneo_connectivity_connection_settings_any'], ['any'], null, null, false, true, null]],
        2352 => [[['_route' => 'akeneo_connectivity_connection_audit_any'], ['any'], null, null, false, true, null]],
        2377 => [[['_route' => 'akeneo_connectivity_connection_error_management_dashboard'], [], null, null, false, false, null]],
        2407 => [[['_route' => 'pim_comment_comment_delete', '_controller' => 'pim_comment.controller.comment:deleteAction'], ['id'], ['DELETE' => 0], null, false, false, null]],
        2450 => [[['_route' => 'pim_importexport_import_profile_show'], ['code'], null, null, false, true, null]],
        2479 => [[['_route' => 'pim_importexport_import_profile_edit'], ['code'], null, null, false, false, null]],
        2517 => [[['_route' => 'pim_importexport_import_execution_download_log', '_controller' => 'pim_import_export.controller.import_execution:downloadLogFileAction'], ['id'], null, null, false, false, null]],
        2558 => [[['_route' => 'pim_importexport_import_execution_download_file', '_controller' => 'pim_import_export.controller.import_execution:downloadFilesAction'], ['id', 'archiver', 'key'], null, null, false, true, null]],
        2589 => [[['_route' => 'pim_enrich_api_connection_rest_revoke', '_controller' => 'pim_enrich.controller.rest.api_client:revokeAction'], ['publicId'], ['DELETE' => 0], null, false, true, null]],
        2625 => [
            [['_route' => 'pim_enriched_category_rest_update', '_controller' => 'Akeneo\\Category\\Infrastructure\\Controller\\InternalApi\\UpdateCategoryController', '_feature' => 'enriched_category'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'pim_enriched_category_rest_get', '_controller' => 'Akeneo\\Category\\Infrastructure\\Controller\\InternalApi\\GetCategoryController', '_feature' => 'enriched_category'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        2671 => [[['_route' => 'pim_enriched_category_rest_image_preview', '_controller' => 'Akeneo\\Category\\Infrastructure\\Controller\\InternalApi\\ImagePreviewController', '_feature' => 'enriched_category'], ['attributeCode', 'type'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2706 => [[['_route' => 'pim_category_template_rest_get_by_template_uuid', '_controller' => 'Akeneo\\Category\\Infrastructure\\Controller\\InternalApi\\GetTemplateController:byTemplateUuid', '_feature' => 'enriched_category'], ['templateUuid'], ['GET' => 0], null, false, true, null]],
        2734 => [[['_route' => 'pim_category_template_rest_get_by_template_uuid_in_memory', '_controller' => 'Akeneo\\Category\\Infrastructure\\Controller\\InternalApi\\GetTemplateController:byTemplateUuidInMemory', '_feature' => 'enriched_category'], ['templateUuid'], ['GET' => 0], null, false, true, null]],
        2751 => [[['_route' => 'pim_category_template_rest_create', '_controller' => 'Akeneo\\Category\\Infrastructure\\Controller\\InternalApi\\CreateTemplateController', '_feature' => 'enriched_category'], ['categoryTreeId'], ['POST' => 0], null, false, true, null]],
        2809 => [
            [['_route' => 'pim_enrich_attribute_rest_get', '_controller' => 'pim_enrich.controller.rest.attribute:getAction'], ['identifier'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_enrich_attribute_rest_post', '_controller' => 'pim_enrich.controller.rest.attribute:postAction'], ['identifier'], ['POST' => 0], null, false, true, null],
        ],
        2827 => [[['_route' => 'pim_enrich_attribute_rest_remove', '_controller' => 'pim_enrich.controller.rest.attribute:removeAction'], ['code'], ['DELETE' => 0], null, false, true, null]],
        2840 => [[['_route' => 'pim_enrich_attribute_axes_index', '_controller' => 'pim_enrich.controller.rest.attribute:listAxesAction'], [], ['GET' => 0], null, false, false, null]],
        2876 => [
            [['_route' => 'pim_enrich_attributegroup_rest_get', '_controller' => 'pim_enrich.controller.rest.attribute_group:getAction'], ['identifier'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_enrich_attributegroup_rest_post', '_controller' => 'pim_enrich.controller.rest.attribute_group:postAction'], ['identifier'], ['POST' => 0], null, false, true, null],
            [['_route' => 'pim_enrich_attributegroup_rest_remove', '_controller' => 'pim_enrich.controller.rest.attribute_group:removeAction'], ['identifier'], ['DELETE' => 0], null, false, true, null],
        ],
        2911 => [[['_route' => 'akeneo_connectivity_connection_apps_rest_get_app_activate_url', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\GetAppActivateUrlAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2947 => [[['_route' => 'akeneo_connectivity_connection_apps_rest_get_wizard_data', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\GetWizardDataAction'], ['clientId'], ['GET' => 0], null, false, true, null]],
        2993 => [[['_route' => 'akeneo_connectivity_connection_apps_rest_confirm_authorization', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\ConfirmAuthorizationAction'], ['clientId'], ['POST' => 0], null, false, true, null]],
        3021 => [[['_route' => 'akeneo_connectivity_connection_apps_rest_confirm_authentication', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\ConfirmAuthenticationAction'], ['clientId'], ['POST' => 0], null, false, true, null]],
        3074 => [[['_route' => 'akeneo_connectivity_connection_apps_rest_get_all_connected_app_scope_messages', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\GetAllConnectedAppScopeMessagesAction'], ['connectionCode'], ['GET' => 0], null, false, false, null]],
        3105 => [[['_route' => 'akeneo_connectivity_connection_apps_rest_get_connected_app_authentication_scopes', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\GetConnectedAppAuthenticationScopesAction'], ['connectionCode'], ['GET' => 0], null, false, false, null]],
        3137 => [
            [['_route' => 'akeneo_connectivity_connection_apps_rest_get_connected_app_monitoring_settings', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\GetConnectedAppMonitoringSettingsAction'], ['connectionCode'], ['GET' => 0], null, false, false, null],
            [['_route' => 'akeneo_connectivity_connection_apps_rest_update_connected_app_monitoring_settings', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\UpdateConnectedAppMonitoringSettingsAction'], ['connectionCode'], ['POST' => 0], null, false, false, null],
        ],
        3154 => [[['_route' => 'akeneo_connectivity_connection_apps_rest_refresh', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\RefreshConnectedAppAction'], ['connectionCode'], ['POST' => 0], null, false, false, null]],
        3177 => [[['_route' => 'akeneo_connectivity_connection_apps_rest_get_open_app_url', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\GetOpenAppUrlAction'], ['connectionCode'], ['GET' => 0], null, false, false, null]],
        3187 => [
            [['_route' => 'akeneo_connectivity_connection_apps_rest_get_connected_app', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\GetConnectedAppAction'], ['connectionCode'], ['GET' => 0], null, false, true, null],
            [['_route' => 'akeneo_connectivity_connection_apps_rest_delete', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Apps\\Controller\\Internal\\DeleteAppAction'], ['connectionCode'], ['DELETE' => 0], null, false, true, null],
        ],
        3236 => [
            [['_route' => 'akeneo_connectivity_connection_rest_get', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Connections\\Controller\\Internal\\GetConnectionAction'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'akeneo_connectivity_connection_rest_update', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Connections\\Controller\\Internal\\UpdateConnectionAction'], ['code'], ['POST' => 0], null, false, true, null],
            [['_route' => 'akeneo_connectivity_connection_rest_delete', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Connections\\Controller\\Internal\\DeleteConnectionAction'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        3280 => [[['_route' => 'akeneo_connectivity_connection_rest_regenerate_secret', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Connections\\Controller\\Internal\\RegenerateSecretAction'], ['code'], ['POST' => 0], null, false, false, null]],
        3325 => [[['_route' => 'akeneo_connectivity_connection_rest_regenerate_password', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Connections\\Controller\\Internal\\RegeneratePasswordAction'], ['code'], ['POST' => 0], null, false, false, null]],
        3366 => [[['_route' => 'akeneo_connectivity_connection_error_management_rest_get_connection_business_errors', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\ErrorManagement\\Controller\\Internal\\ErrorManagementAction'], ['connection_code'], ['GET' => 0], null, false, false, null]],
        3417 => [[['_route' => 'akeneo_connectivity_connection_webhook_rest_regenerate_secret', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Webhook\\Controller\\Internal\\RegenerateSecretAction'], ['code'], ['GET' => 0], null, false, false, null]],
        3449 => [[['_route' => 'akeneo_connectivity_connection_webhook_rest_get', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Webhook\\Controller\\Internal\\GetWebhookAction'], ['code'], ['GET' => 0], null, false, false, null]],
        3494 => [[['_route' => 'akeneo_connectivity_connection_webhook_rest_check_reachability', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Webhook\\Controller\\Internal\\CheckWebhookReachabilityAction'], ['code'], null, null, false, false, null]],
        3526 => [[['_route' => 'akeneo_connectivity_connection_webhook_rest_update', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Webhook\\Controller\\Internal\\UpdateWebhookAction'], ['code'], ['POST' => 0], null, false, false, null]],
        3619 => [[['_route' => 'akeneo_catalogs_internal_get_catalog_errors', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetCatalogErrorsAction'], ['catalogId'], ['GET' => 0], null, false, false, null]],
        3628 => [
            [['_route' => 'akeneo_catalogs_internal_get_catalog', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetCatalogAction'], ['catalogId'], ['GET' => 0], null, false, true, null],
            [['_route' => 'akeneo_catalogs_internal_update_catalog', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\UpdateCatalogAction'], ['catalogId'], ['PATCH' => 0], null, false, true, null],
        ],
        3668 => [[['_route' => 'akeneo_catalogs_internal_get_attribute_options', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetAttributeOptionsAction'], ['code'], ['GET' => 0], null, false, false, null]],
        3677 => [[['_route' => 'akeneo_catalogs_internal_get_attribute', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetAttributeAction'], ['code'], ['GET' => 0], null, false, true, null]],
        3718 => [[['_route' => 'akeneo_catalogs_internal_get_channel_locales', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetChannelLocalesAction'], ['code'], ['GET' => 0], null, false, false, null]],
        3727 => [[['_route' => 'akeneo_catalogs_internal_get_channel', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetChannelAction'], ['code'], ['GET' => 0], null, false, true, null]],
        3764 => [[['_route' => 'akeneo_catalogs_internal_get_category_children', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetCategoryChildrenAction'], ['categoryCode'], ['GET' => 0], null, false, false, null]],
        3810 => [[['_route' => 'akeneo_catalogs_internal_get_measurements_family_units', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetMeasurementsFamilyUnitsAction'], ['code'], ['GET' => 0], null, false, false, null]],
        3906 => [[['_route' => 'akeneo_catalogs_internal_get_product_mapping_schema', '_controller' => 'Akeneo\\Catalogs\\Infrastructure\\Controller\\Internal\\GetProductMappingSchemaAction'], ['catalogId'], ['GET' => 0], null, false, false, null]],
        3951 => [[['_route' => 'akeneo_connectivity_connection_marketplace_rest_test_apps_delete', '_controller' => 'Akeneo\\Connectivity\\Connection\\Infrastructure\\Marketplace\\TestApps\\Controller\\Internal\\DeleteTestAppAction'], ['testAppId'], ['DELETE' => 0], null, false, true, null]],
        3992 => [[['_route' => 'akeneo_measurements_measurement_family_delete_rest', '_controller' => 'pim_api.controller.internal_api.delete_measurement_family'], ['code'], ['DELETE' => 0], null, false, true, null]],
        4001 => [[['_route' => 'akeneo_measurements_measurement_family_create_save', '_controller' => 'pim_api.controller.internal_api.save_measurement_family'], ['measurement_family_code'], ['POST' => 0], null, false, true, null]],
        4025 => [[['_route' => 'akeneo_measurements_validate_unit_rest', '_controller' => 'pim_api.controller.internal_api.validate_unit'], ['measurement_family_code'], ['POST' => 0], null, false, false, null]],
        4052 => [
            [['_route' => 'pim_user_user_rest_get', '_controller' => 'pim_user.controller.user_rest:getAction'], ['identifier'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_user_user_rest_post', '_controller' => 'pim_user.controller.user_rest:postAction'], ['identifier'], ['POST' => 0], null, false, true, null],
        ],
        4075 => [[['_route' => 'pim_user_user_rest_profile', '_controller' => 'pim_user.controller.user_rest:updateProfileAction'], ['identifier'], ['POST' => 0], null, false, false, null]],
        4089 => [[['_route' => 'pim_user_user_rest_delete', '_controller' => 'pim_user.controller.user_rest:deleteAction'], ['identifier'], ['DELETE' => 0], null, false, true, null]],
        4113 => [[['_route' => 'pim_user_user_rest_duplicate', '_controller' => 'pim_user.controller.user_rest:duplicateAction'], ['identifier'], ['POST' => 0], null, false, false, null]],
        4156 => [
            [['_route' => 'akeneo_identifier_generator_rest_delete', '_feature' => 'identifier_generator', '_controller' => 'Akeneo\\Pim\\Automation\\IdentifierGenerator\\Infrastructure\\Controller\\DeleteIdentifierGeneratorController'], ['code'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'akeneo_identifier_generator_rest_get', '_feature' => 'identifier_generator', '_controller' => 'Akeneo\\Pim\\Automation\\IdentifierGenerator\\Infrastructure\\Controller\\GetIdentifierGeneratorController'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'akeneo_identifier_generator_rest_update', '_feature' => 'identifier_generator', '_controller' => 'Akeneo\\Pim\\Automation\\IdentifierGenerator\\Infrastructure\\Controller\\UpdateIdentifierGeneratorController'], ['code'], ['PATCH' => 0], null, false, true, null],
        ],
        4291 => [[['_route' => 'pim_enrich_product_category_rest_list', '_controller' => 'pim_enrich.controller.rest.product_category:listAction'], ['uuid'], ['GET' => 0], null, false, false, null]],
        4305 => [[['_route' => 'pim_enrich_product_remove_attribute_rest', '_controller' => 'pim_enrich.controller.rest.product:removeAttributeAction'], ['uuid', 'attributeId'], ['DELETE' => 0], null, false, true, null]],
        4333 => [[['_route' => 'pim_enrich_product_rest_convert_to_simple', '_controller' => 'pim_enrich.controller.rest.product:convertToSimpleProductAction'], ['uuid'], ['POST' => 0], null, false, false, null]],
        4343 => [
            [['_route' => 'pim_enrich_product_rest_get', '_controller' => 'pim_enrich.controller.rest.product:getAction'], ['uuid'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_enrich_product_rest_post', '_controller' => 'Akeneo\\Pim\\Enrichment\\Bundle\\Controller\\InternalApi\\Product\\UpdateProductController'], ['uuid'], ['POST' => 0], null, false, true, null],
            [['_route' => 'pim_enrich_product_rest_remove', '_controller' => 'pim_enrich.controller.rest.product:removeAction', '_format' => 'json'], ['uuid'], ['DELETE' => 0], null, false, true, null],
        ],
        4442 => [
            [['_route' => 'pim_enrich_product_comments_rest_get', '_controller' => 'pim_enrich.controller.rest.product_comment:getAction'], ['uuid'], ['GET' => 0], null, false, false, null],
            [['_route' => 'pim_enrich_product_comments_rest_post', '_controller' => 'pim_enrich.controller.rest.product_comment:postAction'], ['uuid'], ['POST' => 0], null, false, false, null],
        ],
        4463 => [[['_route' => 'pim_enrich_product_comment_reply_rest_post', '_controller' => 'pim_enrich.controller.rest.product_comment:postReplyAction'], ['uuid', 'commentId'], ['POST' => 0], null, false, true, null]],
        4585 => [[['_route' => 'pim_enrich_product_history_rest_get', '_controller' => 'pim_enrich.controller.rest.versioning:getAction', 'entityType' => 'product'], ['entityId'], ['GET' => 0], null, false, false, null]],
        4688 => [[['_route' => 'pim_pdf_generator_download_product_pdf', '_controller' => 'pim_pdf_generator.controller.product:downloadPdfAction'], ['uuid'], ['GET' => 0], null, false, false, null]],
        4697 => [[['_route' => 'pim_enrich_product_edit'], ['uuid'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        4795 => [[['_route' => 'pim_enrich_product_edit_categories'], ['uuid'], ['GET' => 0], null, false, true, null]],
        4896 => [[['_route' => 'pim_enrich_product_toggle_status', '_controller' => 'pim_enrich.controller.product:toggleStatusAction'], ['uuid'], ['POST' => 0], null, false, false, null]],
        5020 => [[['_route' => 'pim_enrich_product_listcategories', '_controller' => 'pim_enrich.controller.product:listCategoriesAction', '_format' => 'json'], ['uuid', 'categoryId'], null, null, false, true, null]],
        5077 => [[['_route' => 'pim_enrich_product_model_category_rest_list', '_controller' => 'pim_enrich.controller.rest.product_model_category:listAction'], ['id'], ['GET' => 0], null, false, false, null]],
        5100 => [
            [['_route' => 'pim_enrich_product_model_rest_get', '_controller' => 'pim_enrich.controller.rest.product_model:getAction'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_enrich_product_model_rest_post', '_controller' => 'pim_enrich.controller.rest.product_model:postAction'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        5115 => [[['_route' => 'pim_enrich_product_model_rest_remove', '_controller' => 'pim_enrich.controller.rest.product_model:removeAction', '_format' => 'json'], ['id'], ['DELETE' => 0], null, false, true, null]],
        5158 => [[['_route' => 'pim_enrich_product_model_history_rest_get', '_controller' => 'pim_enrich.controller.rest.versioning:getAction', 'entityType' => 'product_model'], ['entityId'], ['GET' => 0], null, false, false, null]],
        5179 => [[['_route' => 'pim_enrich_product_model_rest_get_by_code', '_controller' => 'pim_enrich.controller.rest.product_model:getByCodeAction'], ['identifier'], ['GET' => 0], null, false, true, null]],
        5197 => [[['_route' => 'pim_enrich_product_model_edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        5225 => [[['_route' => 'pim_enrich_product_model_edit_categories'], ['id'], ['GET' => 0], null, false, true, null]],
        5290 => [[['_route' => 'pim_enrich_product_model_listcategories', '_controller' => 'pim_enrich.controller.product_model:listCategoriesAction', '_format' => 'json'], ['id', 'categoryId'], null, null, false, true, null]],
        5353 => [[['_route' => 'pim_enrich_product_grid_category_tree_listtree', '_controller' => 'akeneo.pim.enrichment.controller.product_grid_category_tree:listTreeAction'], ['_format'], null, null, false, true, null]],
        5378 => [[['_route' => 'pim_enrich_product_grid_category_tree_children', '_controller' => 'akeneo.pim.enrichment.controller.product_grid_category_tree:listChildrenAction'], ['_format'], null, null, false, true, null]],
        5406 => [[['_route' => 'pim_enrich_categorytree_listtree', '_controller' => 'pim_enrich.controller.category_tree.product:listTreeAction'], ['_format'], null, null, false, true, null]],
        5431 => [[['_route' => 'pim_enrich_categorytree_children', '_controller' => 'pim_enrich.controller.category_tree.product:childrenAction'], ['_format'], null, null, false, true, null]],
        5450 => [[['_route' => 'pim_enrich_categorytree_edit', '_controller' => 'pim_enrich.controller.category_tree.product:editAction'], ['id'], null, null, false, false, null]],
        5469 => [[['_route' => 'pim_enrich_categorytree_tree'], ['id'], null, null, false, false, null]],
        5490 => [[['_route' => 'pim_enrich_categorytree_remove', '_controller' => 'pim_enrich.controller.category_tree.product:removeAction'], ['id'], ['DELETE' => 0], null, false, false, null]],
        5520 => [[['_route' => 'pim_enrich_categorytree_count_category_products', '_controller' => 'pim_enrich.controller.category_tree.product:countCategoryProducts'], ['id'], ['GET' => 0], null, false, false, null]],
        5621 => [[['_route' => 'pim_category_template_edit'], ['treeId', 'templateUuid'], null, null, false, true, null]],
        5665 => [[['_route' => 'pim_enrich_group_rest_get', '_controller' => 'pim_enrich.controller.rest.group:getAction'], ['identifier'], ['GET' => 0], null, false, true, null]],
        5698 => [[['_route' => 'pim_enrich_group_rest_list_products', '_controller' => 'pim_enrich.controller.rest.group:listProductsAction'], ['identifier'], ['GET' => 0], null, false, false, null]],
        5725 => [
            [['_route' => 'pim_enrich_group_rest_post', '_controller' => 'pim_enrich.controller.rest.group:postAction'], ['code'], ['POST' => 0], null, false, true, null],
            [['_route' => 'pim_enrich_group_rest_remove', '_controller' => 'pim_enrich.controller.rest.group:removeAction'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        5756 => [[['_route' => 'pim_enrich_group_edit'], ['code'], null, null, false, false, null]],
        5810 => [[['_route' => 'pim_enrich_category_rest_list_selected_children', '_controller' => 'pim_enrich.controller.rest.category:listSelectedChildrenAction'], ['identifier'], ['POST' => 0], null, false, false, null]],
        5819 => [[['_route' => 'pim_enrich_category_rest_get', '_controller' => 'pim_enrich.controller.rest.category:getAction'], ['identifier'], ['GET' => 0], null, false, true, null]],
        5867 => [[['_route' => 'pim_enrich_media_show', '_controller' => 'pim_enrich.controller.file:showAction', 'filter' => null], ['filename', 'filter'], ['GET' => 0], null, false, true, null]],
        5896 => [[['_route' => 'pim_enrich_media_download', '_controller' => 'pim_enrich.controller.file:downloadAction', 'filter' => null], ['filename'], ['GET' => 0], null, false, true, null]],
        5944 => [[['_route' => 'pim_enrich_default_thumbnail', '_controller' => 'pim_enrich.controller.file:defaultThumbnailAction', 'filter' => 'thumbnail'], ['mimeType'], ['GET' => 0], null, false, true, null]],
        5989 => [[['_route' => 'pim_enrich_media_cache_resolve', '_controller' => 'pim_enrich.controller.file:cacheAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        6016 => [[['_route' => 'pim_enrich_media_cache', '_controller' => 'pim_enrich.controller.file:cacheAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        6066 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        6093 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        6129 => [[['_route' => 'akeneo_job_process_tracker_details'], ['id'], null, null, false, true, null]],
        6148 => [[['_route' => 'pim_enrich_job_tracker_rest_stop', '_controller' => 'pim_enrich.controller.job_tracker:stopJobAction'], ['id'], null, null, false, false, null]],
        6189 => [[['_route' => 'pim_enrich_job_tracker_download_file', '_controller' => 'pim_enrich.controller.job_tracker:downloadFilesAction'], ['id', 'archiver', 'key'], null, null, false, true, null]],
        6216 => [[['_route' => 'pim_enrich_job_tracker_download_zip_archive', '_controller' => 'pim_enrich.controller.job_tracker:downloadZipArchiveAction'], ['jobExecutionId'], null, null, false, false, null]],
        6266 => [
            [['_route' => 'pim_enrich_job_instance_rest_import_get', '_controller' => 'pim_enrich.controller.rest.job_instance:getImportAction'], ['identifier'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_enrich_job_instance_rest_import_put', '_controller' => 'pim_enrich.controller.rest.job_instance:putImportAction'], ['identifier'], ['PUT' => 0, 'POST' => 1], null, false, true, null],
        ],
        6275 => [[['_route' => 'pim_enrich_job_instance_rest_import_delete', '_controller' => 'pim_enrich.controller.rest.job_instance:deleteImportAction'], ['code'], ['DELETE' => 0], null, false, true, null]],
        6291 => [[['_route' => 'pim_enrich_job_instance_rest_import_launch', '_controller' => 'pim_enrich.controller.rest.job_instance:launchImportAction'], ['code'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        6319 => [
            [['_route' => 'pim_enrich_job_instance_rest_export_get', '_controller' => 'pim_enrich.controller.rest.job_instance:getExportAction'], ['identifier'], ['GET' => 0], null, false, true, null],
            [['_route' => 'pim_enrich_job_instance_rest_export_put', '_controller' => 'pim_enrich.controller.rest.job_instance:putExportAction'], ['identifier'], ['PUT' => 0, 'POST' => 1], null, false, true, null],
        ],
        6328 => [[['_route' => 'pim_enrich_job_instance_rest_export_delete', '_controller' => 'pim_enrich.controller.rest.job_instance:deleteExportAction'], ['code'], ['DELETE' => 0], null, false, true, null]],
        6344 => [[['_route' => 'pim_enrich_job_instance_rest_export_launch', '_controller' => 'pim_enrich.controller.rest.job_instance:launchExportAction'], ['code'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        6372 => [[['_route' => 'pim_enrich_job_instance_rest_duplicate', '_controller' => 'pim_enrich.controller.rest.job_instance:duplicateAction'], ['code'], ['POST' => 0], null, false, false, null]],
        6405 => [[['_route' => 'pim_enrich_job_execution_rest_get', '_controller' => 'pim_enrich.controller.rest.job_execution:getAction'], ['identifier'], ['GET' => 0], null, false, true, null]],
        6447 => [[['_route' => 'oro_translation_jstranslation', '_controller' => 'oro_translation.controller:indexAction'], ['_locale'], null, null, false, false, null]],
        6479 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
        6525 => [[['_route' => 'pim_datagrid_load', '_controller' => 'pim_datagrid.controller.datagrid:loadAction'], ['alias'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6553 => [[['_route' => 'pim_datagrid_mass_action', '_controller' => 'pim_datagrid.controller.mass_action:massActionAction'], ['gridName', 'actionName'], null, null, false, true, null]],
        6563 => [[['_route' => 'oro_datagrid_index', '_controller' => 'oro_datagrid.controller.grid:get'], ['gridName'], null, null, false, true, null]],
        6604 => [[['_route' => 'pim_datagrid_view_rest_index', '_controller' => 'pim_datagrid.controller.rest.datagrid_view:indexAction'], ['alias'], ['GET' => 0], null, false, false, null]],
        6632 => [[['_route' => 'pim_datagrid_view_rest_default_columns', '_controller' => 'pim_datagrid.controller.rest.datagrid_view:defaultViewColumnsAction'], ['alias'], ['GET' => 0], null, false, false, null]],
        6641 => [[['_route' => 'pim_datagrid_view_rest_default_user_view', '_controller' => 'pim_datagrid.controller.rest.datagrid_view:getUserDefaultDatagridViewAction'], ['alias'], ['GET' => 0], null, false, false, null]],
        6669 => [[['_route' => 'pim_datagrid_view_list_available_columns', '_controller' => 'pim_datagrid.controller.rest.datagrid_view:listColumnsAction'], ['alias'], ['GET' => 0], null, false, false, null]],
        6679 => [[['_route' => 'pim_datagrid_view_rest_save', '_controller' => 'pim_datagrid.controller.rest.datagrid_view:saveAction'], ['alias'], ['POST' => 0], null, false, true, null]],
        6688 => [
            [['_route' => 'pim_datagrid_view_rest_remove', '_controller' => 'pim_datagrid.controller.rest.datagrid_view:removeAction'], ['identifier'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'pim_datagrid_view_rest_get', '_controller' => 'pim_datagrid.controller.rest.datagrid_view:getAction'], ['identifier'], ['GET' => 0], null, false, true, null],
        ],
        6770 => [[['_route' => 'akeneo_data_quality_insights_dashboard_overview', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\Dashboard\\DashboardOverviewController', '_feature' => 'data_quality_insights'], ['channel', 'locale', 'timePeriod'], ['GET' => 0], null, false, true, null]],
        6815 => [[['_route' => 'akeneo_data_quality_insights_dashboard_widget_families', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\Dashboard\\DashboardWidgetFamiliesController', '_feature' => 'data_quality_insights'], ['channel', 'locale'], ['GET' => 0], null, false, true, null]],
        6852 => [[['_route' => 'akeneo_data_quality_insights_dashboard_widget_categories', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\Dashboard\\DashboardWidgetCategoriesController', '_feature' => 'data_quality_insights'], ['channel', 'locale'], ['GET' => 0], null, false, true, null]],
        6894 => [[['_route' => 'akeneo_data_quality_insights_dashboard_key_indicators', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\Dashboard\\DashboardKeyIndicatorsController', '_feature' => 'data_quality_insights'], ['channel', 'locale'], ['GET' => 0], null, false, true, null]],
        6946 => [[['_route' => 'akeneo_data_quality_insights_dashboard_quality_score_evolution', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\Dashboard\\DashboardQualityScoreEvolutionController', '_feature' => 'data_quality_insights'], ['channel', 'locale'], ['GET' => 0], null, false, true, null]],
        6990 => [[['_route' => 'akeneo_data_quality_insights_product_evaluation', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\GetProductEvaluationController', '_feature' => 'data_quality_insights'], ['productUuid'], ['GET' => 0], null, false, true, null]],
        6999 => [[['_route' => 'akeneo_data_quality_insights_evaluate_product', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\EvaluateProductController', '_feature' => 'data_quality_insights'], ['productId'], ['POST' => 0], null, false, true, null]],
        7041 => [[['_route' => 'akeneo_data_quality_insights_product_model_evaluation', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\GetProductModelEvaluationController', '_feature' => 'data_quality_insights'], ['productModelId'], ['GET' => 0], null, false, true, null]],
        7050 => [[['_route' => 'akeneo_data_quality_insights_evaluate_product_model', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\EvaluateProductModelController', '_feature' => 'data_quality_insights'], ['productId'], ['POST' => 0], null, false, true, null]],
        7083 => [[['_route' => 'akeneo_data_quality_insights_product_model_quality_score', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\GetProductModelQualityScoreController', '_feature' => 'data_quality_insights'], ['productId'], ['GET' => 0], null, false, true, null]],
        7116 => [[['_route' => 'akeneo_data_quality_insights_product_quality_score', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\GetProductQualityScoreController', '_feature' => 'data_quality_insights'], ['productUuid'], ['GET' => 0], null, false, true, null]],
        7163 => [[['_route' => 'akeneo_data_quality_insights_get_attribute_group_activation', '_controller' => 'Akeneo\\Pim\\Automation\\DataQualityInsights\\Infrastructure\\Symfony\\Controller\\GetAttributeGroupActivationController', '_feature' => 'data_quality_insights'], ['attributeGroupCode'], ['GET' => 0], null, false, true, null]],
        7190 => [[['_route' => 'pim_dashboard_widget_data', '_controller' => 'pim_dashboard.controller.widget:dataAction'], ['alias'], ['GET' => 0], null, false, true, null]],
        7218 => [[['_route' => 'pim_user_edit'], ['identifier'], null, null, false, false, null]],
        7253 => [[['_route' => 'pim_user_group_update', '_controller' => 'pim_user.controller.user_group:update', 'id' => 0], ['id'], null, null, false, true, null]],
        7274 => [[['_route' => 'pim_user_group_delete', '_controller' => 'pim_user.controller.user_group:delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        7298 => [[['_route' => 'pim_user_reset_reset', '_controller' => 'pim_user.controller.reset:reset'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        7331 => [[['_route' => 'pim_user_role_update', '_controller' => 'pim_user.controller.role:update', 'id' => 0], ['id'], null, null, false, true, null]],
        7352 => [[['_route' => 'pim_user_role_delete', '_controller' => 'pim_user.controller.role:delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        7400 => [[['_route' => 'pim_importexport_export_profile_show'], ['code'], null, null, false, true, null]],
        7429 => [[['_route' => 'pim_importexport_export_profile_edit'], ['code'], null, null, false, false, null]],
        7467 => [[['_route' => 'pim_importexport_export_execution_download_log', '_controller' => 'pim_import_export.controller.export_execution:downloadLogFileAction'], ['id'], null, null, false, false, null]],
        7508 => [[['_route' => 'pim_importexport_export_execution_download_file', '_controller' => 'pim_import_export.controller.export_execution:downloadFilesAction'], ['id', 'archiver', 'key'], null, null, false, true, null]],
        7558 => [[['_route' => 'pim_notification_notification_mark_viewed', '_controller' => 'pim_notification.controller.notification:markAsViewedAction', 'id' => null], ['id'], ['POST' => 0], null, false, true, null]],
        7579 => [
            [['_route' => 'pim_notification_notification_remove', '_controller' => 'pim_notification.controller.notification:removeAction'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
