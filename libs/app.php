<?php 
require_once 'controllers/error.php';

class App{

    function __construct(){
        echo "<p>Nueva app</p>";

        $url = $_GET['url']; //El parametro url esta definido en .htaccess
        
        $url = $_GET['url']; 
        $url =rtrim($url, '/'); //Elimina los / que no sean necesarios 
        $url = explode('/', $url); // Divide cada parametro que se ingresa con un /

        //var_dump($url); //Imprime el array que se crea con lo que esta ente /
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