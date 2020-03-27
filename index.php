<?php

require_once 'app/Core/Core.php';
require_once 'app/Controller/HomeController.php';
require_once 'app/Controller/ErroController.php';
    $template = file_get_contents('app/Template/estrutura.html');
   
    
    ob_start();
        $core = new Core;
        $core->Start($_GET);
    //A variavel superGlobal $_GET funciona para recuperar a pagina que o usuario quer na URL
    //ela será tratada na class Core.
        $saida = ob_get_contents();
    ob_end_clean();
    
    $tplPronto = str_replace('{{area_dinamina}}', $saida, $template);
     echo $tplPronto;