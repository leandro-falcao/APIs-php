<?php
class chamar
{
    public function call()
    {
        //receber o valor de input vindo do postman via json atravez do body
        $vindoPostamanBodyjson = file_get_contents('php://input');
        $data = json_decode($vindoPostamanBodyjson, true);
        $nome = $data['nome'];



        // if (isset($nome) && !empty($nome)) {
        //     $sites = ["https://randomuser.me/api", "https://api.agify.io/?name={$nome}"];
        //     $response = file_get_contents($sites[1]);
        //     //var_dump($nome);
        //     $dados = json_decode($response, true);

        //     //echo $dados;  
        //     // echo $response;
        // } else {
        //     print('nome está vazio ');
        // }
        // return $response;

    
        // https://api.agify.io/?name=

// Recebe os parâmetros GET a partir da variável JSON
$getParams = json_decode($_GET['getParams'], true);

// Constrói a URL da solicitação GET
$url = "https://api.agify.io/?name={$nome}"; //. http_build_query($getParams);

// Inicializa a sessão cURL
$ch = curl_init();

// Define as opções de cURL usando curl_setopt_array()
$options = array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $options);

// Executa a solicitação cURL
$response = curl_exec($ch);

// Verifica se ocorreu algum erro durante a solicitação cURL
if (curl_errno($ch)) {
    echo 'Erro: ' . curl_error($ch);
}

// Fecha a sessão cURL
curl_close($ch);

// Exibe a resposta da solicitação cURL
echo $response;



    }


}



    /**
    vamos usar a api com curl   
    **/
