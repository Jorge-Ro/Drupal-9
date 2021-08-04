<?php

namespace Drupal\customod\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 *
 * definicion de la clase del controlador
 */
class customodController extends ControllerBase
{
  public function generate() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('texto devuelto por customod'),
    ];
  }
}
