<?php

namespace Drupal\eauthority_composer_testing\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the eauthority_composer_testing module.
 */
class DefaultControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "eauthority_composer_testing DefaultController's controller functionality",
      'description' => 'Test Unit for module eauthority_composer_testing and controller DefaultController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests eauthority_composer_testing functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module eauthority_composer_testing.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
