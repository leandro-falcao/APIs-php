<?php
require_once('../recebendo-requests/recebido-postaman-get.php');
class chamar
{
    public function call()
    {
        // // // // receber o valor de input vindo do postman via json atravez do body
        // // // $vindoPostamanBodyjson = file_get_contents('php://input');
        // // // $data = json_decode($vindoPostamanBodyjson, true);
        // // // $nome = $data['nome'];
        $recebendoData = new recebidoPostamanGet();
        $value = $recebendoData ->params();



        if (isset($nome) && !empty($nome)) {
            $sites = ["https://randomuser.me/api", "https://api.agify.io/?name={$value}"];
            $response = file_get_contents($sites[1]);
            var_dump($nome);
            $dados = json_decode($response, true);

            echo $dados;  
            echo $response;
        } else {
            print('nome está vazio ');
        }
        return $response;

    

    }


}



    /**
    vamos usar a api com curl   
    **/
