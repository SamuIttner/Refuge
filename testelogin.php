<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
    $result = $mysqli->query($sql);

    

    if ($result->num_rows > 0) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: refugepi.php');
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}
?>
