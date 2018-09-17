<?php
/*** Criado por Luis Felipe **/
session_start();
/******* CONTADOR DE VISUALIZAÇÕES ***/
// Abre
$arquivo = fopen("contador.txt", "r");  // Aqui abre o arquivo
$atual = fread($arquivo,filesize("contador.txt"));
echo "Tinha: ".$atual. "<br>";
// escreve
$novo = $atual + 1; //  Aqui aumenta 1 visualização
echo $novo; // vai exibir o novo valor de visualizações na tela
// Verifica se já acessou, se não, insere +1 viwer
   
   if (!isset($_SESSION['teste'])) {
    $arquivo = fopen("contador.txt", "w") or die("Impossivel abrir o arquivo");
   fwrite($arquivo, $novo);   
      $_SESSION['teste'] = "visualizado";
   }
   

?>