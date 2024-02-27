<?php 
   $nome = $_POST['nome']; 
   $email = $_POST['email'];
   $idade = $_POST['idade'];
   $numero = $_POST['numero'];
   $estados = $_POST['estados-brasil'];
   $texto = $_POST['area-texto'];
 
    echo "<br>  O nome informado no formulário foi: ".$nome;
    echo "<br>  O email informado no formulário foi: ".$email;
    echo "<br>  A idade informada no formulário foi: ".$idade;
    echo "<br>  O número informado no formulário foi: ".$numero;  
    echo "<br>  O estado informado no formulário foi: ".$estados;  
    echo "<br>  Observações informadas no formulário: ".$texto;  

?>