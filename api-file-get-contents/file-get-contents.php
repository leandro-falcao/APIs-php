<?php
    function call()
    {
        //receber o valor de input vindo do postman via json atravez do body
        $vindoPostamanBodyjson = file_get_contents('php://input');
        $data = json_decode($vindoPostamanBodyjson, true);
        $nome = $data['nome'];



        if (isset($nome) && !empty($nome)) {
            $sites = ["https://randomuser.me/api", "https://api.agify.io/?name={$nome}"];
            $response = file_get_contents($sites[1]);
            //var_dump($nome);
            $dados = json_decode($response, true);

            //echo $dados;  
            // echo $response;
        } else {
            print('vazio');
        }
        return $response;

    }
    
