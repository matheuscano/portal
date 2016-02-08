<?php

require("../model/User.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$ativo = $_POST['ativo'];

$user = new User($nome,$email,$senha,$ativo);
