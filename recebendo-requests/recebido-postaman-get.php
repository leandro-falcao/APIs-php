<?php

//namespace recebendo-valores;

class recebidoPostamanGet
{
    public function receber(){
        $vindoPostamanBodyjson = file_get_contents('php://input');
        $data = json_decode($vindoPostamanBodyjson, true);
        $nome = $data['nome'];
    }
    
}