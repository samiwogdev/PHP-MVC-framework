<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Application
 *
 * @author samiwog
 */
class Application {
    public Router $router;
    
    public function __construct() {
        $this->router = new Router;
    }

}
