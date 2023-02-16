<?php
//namespace recebendo-valores;

class recebidoPostamanGet
{
    public function params(){
        $varGetByPostaman = file_get_contents('php://input');
        $data = json_decode($varGetByPostaman, true);
        $nome = $data['nome'];
        return $nome;
    }
    
}