@cleaner @cleaner_none
Feature: Adding a import with a cleaner
  The Cleaner will unpublish items that don't exist in the
  Import File anymore

  Background:
    Given there is a pimcore class "Product"
    And the definition has a input field "name"
    And there is a import-definition "Product" for definition
    And the import-definitions cleaner is "none"
    And the import-definitions provider is "csv" with the configuration:
      | key         | value |
      | csvExample  | name  |
      | delimiter   | ,     |
      | enclosure   | "     |
    And  the import-definitions mapping is:
      | fromColumn | toColumn    | primary |
      | name       | name        | true    |
      | published  | published | false   |
    And there is a file test.csv with content:
      """
      name,published
      test1,1
      test2,1
      test3,1
      """
    And I run the import-definitions with params:
      | key  | value    |
      | file | test.csv |

  Scenario: When I run the import the first time, there should be objects
    Then there should be "3" published data-objects for definition

  Scenario: When I run the import again, with no data, there should be unpublished objects
    Given there is a file test.csv with content:
      """
      name
      """
    And I run the import-definitions with params:
      | key  | value    |
      | file | test.csv |
    Then there should be "3" published data-objects for definition

  Scenario: When I run the import again, with only one object, there should be one published and two unpublished
    Given there is a file test.csv with content:
      """
      name,published
      test1,1
      """
    And I run the import-definitions with params:
      | key  | value    |
      | file | test.csv |
    Then there should be "3" published data-objects for definition