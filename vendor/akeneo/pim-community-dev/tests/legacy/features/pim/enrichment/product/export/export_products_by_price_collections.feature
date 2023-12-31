@javascript
Feature: Export products according to price attribute filter
  In order to export specific products
  As a product manager
  I need to be able to export the products according to price attribute values

  Background:
    Given a "footwear" catalog configuration
    And the following attributes:
      | code           | type                         | label-en_US    | group | decimals_allowed |
      | provider_price | pim_catalog_price_collection | Provider price | other | 0                |
    And the following family:
      | code    | requirements-mobile | attributes           |
      | rangers | sku                 | sku,price,provider_price |
    And the following products:
      | uuid                                 | sku      | enabled | family  | categories        | price          | provider_price |
      | 0b494030-cb7f-49e3-b703-5ca2d4c3e132 | SNKRS-1B | 1       | rangers | summer_collection | 20 EUR, 30 USD |                |
      | 398778f3-85bc-4302-92ca-dc0f7f6ae976 | SNKRS-1R | 1       | rangers | summer_collection | 25 EUR, 40 USD | 30 USD         |
      | d2025c27-563d-47a9-a8a8-75c5fe1afa35 | SNKRS-1N | 1       | rangers | summer_collection |                | 20 EUR         |
    And I am logged in as "Julia"

  Scenario: Successfully export products by their price values
    Given the following job "csv_footwear_product_export" configuration:
      | storage   | {"type": "local", "file_path": "%tmp%/product_export/product_export.csv"} |
      | with_uuid | yes                                                                       |
    And I am on the "csv_footwear_product_export" export job edit page
    And I visit the "Content" tab
    When I add available attributes Price
    When I add available attributes Provider price
    And I filter by "price" with operator "Is equal to" and value "30 USD"
    And I filter by "provider_price" with operator "Is empty" and value ""
    And I filter by "completeness" with operator "No condition on completeness" and value ""
    And I press "Save"
    Then I should not see the text "There are unsaved changes"
    When I am on the "csv_footwear_product_export" export job page
    And I launch the export job
    And I wait for the "csv_footwear_product_export" job to finish
    Then exported file of "csv_footwear_product_export" should contain:
    """
    uuid;sku;categories;enabled;family;groups;price-EUR;price-USD;provider_price-EUR
    0b494030-cb7f-49e3-b703-5ca2d4c3e132;SNKRS-1B;summer_collection;1;rangers;;20.00;30.00;
    """
