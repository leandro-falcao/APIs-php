<?php

    /**
    chamando o arquivo da api na pasta de api file get contens, ela esta sendo validada por postman
    1) usar método GET no postman, com endereço http://localhost 
    2) no body em raw, passa um json por exemplo: { "nome":"leandro" }
    **/

        // // // // // // este get em file get ob_get_contents
        // // // // require_once("api-file-get-contents/file-get-contents.php");

        // // // // // esta dentro de uma classe para pode ser trabalhado posteriormente
        // // // // $chamarClasse = new order();
        // // // // $ComFileGet = $chamarClasse->send(); 
        
        
            //  // usando curl
        // // importando usando o Curl
        require_once("api-curl/api-curl.php");
        // // chamado a api get de Curl
        $chamarClasseCurl = new orderCurl();
        $ComCurl = $chamarClasseCurl->sendCurl(); 
            // // end Curl

    

        // // qual dados exibir
        // print($ComFileGet);
        print($ComCurl);
    

