<?php 

namespace Drupal\intern\Controller; 

use Drupal\Core\Controller\ControllerBase;

class ProductController extends ControllerBase{
    public function content(){
        return array(
            '#type' => 'markup',
            '#markup' => '<div> Working thing </div>',
        );
    }

}