<?php
     

     if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
     {
       include_once('conexao.php');
       $email = $_POST['email'];
       $senha = $_POST['semha'];

       print_r('email: ' . $email);
       print_r('senha: ' . $senha);

     }
     else
     {
        header('Location: index.php');
     }







?>