<?php 
require_once 'controllers/errores.php';

class App{

    function __construct(){
        //echo "<p>Nueva app</p>";

        $url = isset($_GET['url']) ? $_GET['url']: null; //El parametro url esta definido en .htaccess
        $url =rtrim($url, '/'); //Elimina los / que no sean necesarios 
        $url = explode('/', $url); // Divide cada parametro que se ingresa con un /

        //Cuando se ingresa sin definir un controlador, o sea sin nada despues del / en el URL
        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }
        
        $archivoController = 'controllers/' . $url[0] . '.php'; // Llama al controlador que este en la posicion 0 de la url, o sea la primer /

        //Valida que exista el controlador que escribimos arriba
        if(file_exists($archivoController)){
            require_once $archivoController; //Llama lo que creamos arriba

            //Inicializa el controlador 
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            //Contiene el numero de elementos del arreglo
            $nparam = sizeof($url);

            if($nparam > 1){ //Este if valida la cantidad de parametros que tenemos en nuestra URL.
                if ($nparam > 2) {
                    $param = [];
                    for($i = 2; $i<$nparam; $i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    $controller->{$url[1]}();//Define la posicion de la url que se valora, en este ejemplo solo se valoran las primeras 3 /0/1/2 de ahi en adelante no toma en cuenta lo que se escriba.
                }
            }else{
                $controller->render();
            }
        }else{
            $controller = new Errores();
        }

    }
}

?> 