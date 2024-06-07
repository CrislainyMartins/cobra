<?php 



$host = "localhost";
$user ="root";
$senha ="";
$banco = "provainfor";

$conexao = new mysqli($host,$user,$senha,$banco);
    if (!$conexao){
    //echo 'deu errado'.mysqli_connect_error();
} 
else{
    //echo 'deu certo ';
}


function mensagem($texto,$tipo){
    echo"<div class='alert alert-$tipo' role='alert'>
            $texto
    </div>";
}
function mostrar_data($data){
    $d = explode("-",$data);
    $escreve = $d[2]."/".$d[1]."/" .$d[0];
    return $escreve;

}


?>