<?php
    //O include é utilizado para incluir um arquivo php em outro arquivo php
    
    //Ele traz tudo do arquivo teste.php para este arquivo, incluindo as variáveis
    include('teste.php');
?>
    <p>Após o inclue</p>
    
    <!-- A variável teste foi definida no arquivo teste.php -->
    <p>Valor da variável teste: <?php echo $teste; ?></p>