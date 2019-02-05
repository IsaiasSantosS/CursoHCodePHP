<?php

$name = "imagens";

if(!is_dir($name)){
    mkdir($name);//cria diretório
    echo "Diretório $name criado com sucesso!";
} else {
    rmdir($name); //revome diretorio
    echo "Já existe o diretório: $name Foi removido";
}