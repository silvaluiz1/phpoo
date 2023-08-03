<?php
require ("pessoa.php");

class Fruta{
     // atributos
     public $nome;
     public $cor;

     //Métodos
     function __constuct($nome,$cor){
        $this->nome = $nome;
        $this->cor = $cor;
     }
     function set_name($name){
        $this->nome = $name;
     }
     function set_cor($cor){
        $this->cor=$cor;
     }    
    function get_name(){
        return $this->nome;
     }
    function get_cor(){
        return $this->cor;

    }  

}
/*$maca = new Fruta("maca_ifsp_turmaB","vermelha");
$uva =  new Fruta("uva_ifsp_turmaB","roxo");

$maca->set_name("maca_ifsp_turmaB");
$uva ->set_name("uva_ifsp_turmaB");

echo $maca->get_name();
echo "<br>". $uva->get_name();*/

$aluno1 = new Pessoa ("Luiz",17, "Aluno");
$aluno2 = new Pessoa ("Cristiano",38, "Jogador");

echo $aluno1->apresentar();
echo $aluno2->apresentar();

$retangulo = new retangulo (2, 4);