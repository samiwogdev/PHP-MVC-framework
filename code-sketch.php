<?php 
/**
 * @author samiwog
 *
 */
class Route{
//A    
public array $routes = [  
    'get' => [
        '/' => 'callback',
        '/contact' => 'callback'
    ],
    'post' =>[
        "/" => 'callback'
    ]
];
/**
 *  Alternative of A above
 *  for every route we assign a callback function
 *  route = [method][path]
*/
public function get($path, $callback){
$this->routes['get'][$path] = $callback; //assign a callback function to every user route
}

}