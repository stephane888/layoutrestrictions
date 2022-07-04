<?php

namespace Drupal\layoutrestrictions\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for layoutrestrictions routes.
 */
class LayoutrestrictionsController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
