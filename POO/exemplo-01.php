<?php

class Pessoa{
    public $nome;

    public function falar(){
        return "O meu nome é ".$this->nome;
    }
}

$teste = new Pessoa();
$teste->nome = "Isaias Santos";
echo $teste->falar();

?>