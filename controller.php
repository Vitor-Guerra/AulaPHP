<?php

include "model.php";

$objMedidas = new Conversor();

$objMedidas->valor = $_POST['valor'];
$objMedidas->opcao = $_POST['opcao'];

$objMedidas->ConverterMedidas();
