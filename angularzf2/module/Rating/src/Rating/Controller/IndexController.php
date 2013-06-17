<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author hp
 */

namespace Rating\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {
    //put your code here
    
    
    public function indexAction() {
//       return new ViewModel(array("name => 'asdfads'"));
        return array("title" => "asdfas");
    }
}

?>
