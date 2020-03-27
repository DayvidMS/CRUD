<?php

//Cerebro da aplicação, essa classe lê e entende o que o usuário quer ver
class Core {

    public function Start($urlGet) {

        $acao = 'Index';

        if (isset($urlGet['pagina'])) {
            $controller = ucfirst($urlGet['pagina'] . 'Controller');
        } else {
            $controller = 'HomeController';
        }


        if (!class_exists($controller)) {
            $controller = 'ErroController';
        }


        call_user_func_array(array(new $controller, $acao), array());
    }

}
