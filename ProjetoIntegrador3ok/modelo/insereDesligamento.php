=<?php

include "../modelo/conexao.php";

$nomeFuncionario = $_POST['funcionario'];


$questao1 = $_POST['funcionario'];
$dataSaida = $_POST['dataSaida'];
$MotivoDesligamento = $_POST['MotivoDesligamento'];

//questão 1
$questao1 = $_POST['q1'];
$questao1PQ = $_POST['q1PQ'];

//questão 2
$questao2 = $_POST['q2'];

//questão 3
$questao3 = $_POST['q3'];

//questão 4
$questao4 = $_POST['q4'];

$q4Quantidade = $_POST['q4Quantidade'];

//questão 5
$questao51 = $_POST['q51'];
$questao52 = $_POST['q52'];
$questao53 = $_POST['q53'];
$questao54 = $_POST['q54'];
$questao55 = $_POST['q55'];

$q5observacao = $_POST['q5observacao'];

//questão 6
$questao6 = $_POST['q6'];

//questão 7
$questao7 = $_POST['q7'];


$query1 = @mysqli_query("SELECT * FROM funcionario WHERE Nome='$nomeFuncionario'");
$exibe2 = @mysqli_fetch_assoc($query1);
$id = $exibe2['id'];





$query = mysqli_query("INSERT INTO desligamento (id,dataSaida,motivo,questao1,questao1PQ,questao2,questao3,questao4,q4Quantidade,questao51,questao52,questao53,questao54,questao55,q5observacao,questao6,questao7) VALUES('$id','$dataSaida','$MotivoDesligamento','$questao1','$questao1PQ','$questao2','$questao3','$questao4','$q4Quantidade','$questao51','$questao52','$questao53','$questao54','$questao55','$q5observacao','$questao6','$questao7')");



header('location:../visao/Desligamento.php');
?>