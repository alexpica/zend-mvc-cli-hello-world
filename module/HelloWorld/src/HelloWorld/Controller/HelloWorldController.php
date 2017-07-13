<?php
namespace HelloWorld\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class HelloWorldController extends AbstractActionController
{
    public function helloAction(){
        $name = $this->getRequest()->getParam('name');
        
        if (!preg_match("/^[A-Z \\-']+$/i", $name)){
            return "Please provide a valid name!";
        }

        return "Hello {$name}!";
    }
}