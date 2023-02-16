<?php

    /**
        vamos usar trazendo dados get via file get contents   
    **/

class order
{
    public function send()
    {
        //  receber o valor de input vindo do postman via json atravez do body
        $vindoPostamanBodyjson = file_get_contents('php://input');
        $data = json_decode($vindoPostamanBodyjson, true);
        $nome = $data['nome'];



        if (isset($nome) && !empty($nome)) {
            $sites = ["https://randomuser.me/api", "https://api.agify.io/?name={$nome}"];
            $response = file_get_contents($sites[1]);
            
            $dados = json_decode($response, true);

            // echo $dados;  
            // echo $response;
        } else {
            print('nome nulo ou vazio, retorne um nome valido');
        }
        return $response;

    

    }


}


