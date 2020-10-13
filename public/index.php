<?php

require '../vendor/autoload.php';

$crud = new Crud\DataBase\DataBase(
    '127.0.0.1',
    'usuario',
    'senha',
    'banco'
);

$sql = $crud->query("select id,nome from cliente");

while ($row = $sql->fetch_assoc()) {
    echo $row['id'] . ' - ' . $row['nome'] . '<br>';
}
