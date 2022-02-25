<?php

class Conversor{

    public $valor;
    public $opcao;
    public $resultado;


    


    function ConverterMedidas(){

        switch($this->opcao){
            case "centimetro":
                $this->resultado = $this->valor*10;
                echo "$this->valor centimetros é igual a $this->resultado milimetros";
            break;
            case "metro":
                $this->resultado = $this->valor*100;
                echo "$this->valor metros é igual a $this->resultado centimetros";
            break;

            case "km":
                $this->resultado = $this->valor*1000;
                echo "$this->valor quilometros é igual a $this->resultado metros";
            break;

            default:
                echo "Favor, inserir uma opção válida";
            break;
        }

    }

}