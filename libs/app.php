<?php 
require_once 'controllers/errores.php';

class App{

    function __construct(){
        //echo "<p>Nueva app</p>";

        $url = isset($_GET['url']) ? $_GET['url']: null; //El parametro url esta definido en .htaccess
        $url =rtrim($url, '/'); //Elimina los / que no sean necesarios 
        $url = explode('/', $url); // Divide cada parametro que se ingresa con un /

        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            //$controller->loadModel('main');
            return false;
        }
        
        $archivoController = 'controllers/' . $url[0] . '.php'; // Llama al controlador que este en la posicion 0 de la url, o sea la primer /

        if(file_exists($archivoController)){
            require_once $archivoController; //Llama lo que creamos arriba
            $controller = new $url[0];

            if(isset($url[1])){
                $controller->{$url[1]}();//Define la posicion de la url que se valora, en este ejemplo solo se valoran las primeras 3 /0/1/2 de ahi en adelante no toma en cuenta lo que se escriba.
            }

        }else{
            $controller = new Errores();
        }

    }
}

?> 