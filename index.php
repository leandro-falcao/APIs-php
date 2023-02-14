<?php

    /**
    chamando o arquivo da api na pasta de api file get contens, ela esta sendo validada por postman
    1) usar método GET no postman, com endereço http://localhost 
    2) no body em raw, passa um json por exemplo: { "nome":"leandro" }
    **/
    require_once("api-file-get-contents/file-get-contents.php");
    
    // esta dentro de uma classe para pode ser trabalhado posteriormente
    $chamar_classe = new chamar();
    $data =  $chamar_classe->call();
    print($data);

