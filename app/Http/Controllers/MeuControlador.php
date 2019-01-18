<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function getNome() {
        return "Igor Ramon";
    }
    
    public function getIdade(){
        return "20 anos";
    }
    
    public function getMultiplicar($n1, $n2) {
        return $n1*$n2;
    }
    
    public function getNomeById($id){
        $v = ['Igor', 'Ramon', 'Feliciano', 'Da Silva'];
        if($id >= 0 && $id < count($v)){
            return $v[$id];
        }
        return "Fora do intervalo";
    }
}
