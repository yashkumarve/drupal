<?php

namespace Drupal\mycustom\Controller;
use Drupal\Core\Controller\ControllerBase;


class MyPageController extends ControllerBase{
    
    public function myPage(){
    return[
        '#theme'=>'my_page',
        '#test_var'=>$this->t('test variable to be added'),
    ];

    }
}

?>