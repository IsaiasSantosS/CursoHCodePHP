<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Teste <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
    <p>Teste teste</p>
    <p>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
</body>
</html>