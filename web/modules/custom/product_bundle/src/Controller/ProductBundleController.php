<?php 

namespace Drupal\product_bundle\Controller; 

use Drupal\Core\Controller\ControllerBase;

class ProductBundleController extends ControllerBase{
    public function content(){
        return array(
            '#type' => 'markup',
            '#markup' => '<div> Working thing </div>',
        );
    }

}