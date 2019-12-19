<?php

namespace Drupal\eauthority_composer_testing\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Testing.
   *
   * @return string
   *   Return Hello string.
   */
  public function testing() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: testing')
    ];
  }

}
