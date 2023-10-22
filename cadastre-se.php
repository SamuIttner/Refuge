





<!doctype html>
<html lang="pt-br">
<head>
<title>Cadastro</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="teste.css">
<script nonce="7b2a73ed-a87a-4e2e-be46-d159d5e6154a">(function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return async function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})),{})))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">

<?php


if(isset($_POST['submit']))
{
 // print_r($_POST['nome']);
 // print_r($_POST['email']); 
 // print_r($_POST['senha']); 
 //  print_r($_POST['telefone']);
 // print_r($_POST['pais_origem']);
 // print_r($_POST['sexo']);
 // print_r($_POST['data_nascimento']);
  
include_once('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$pais_origem = $_POST['pais_origem'];
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];

$result = mysqli_query($mysqli, "INSERT INTO cadastro(nome,email,senha,telefone,pais_origem,sexo,data_nascimento) 
VALUES ('$nome','$email','$senha','$telefone','$pais_origem','$sexo','$data_nascimento')");

}
?>

</div>
</div>
<a href="index.php" id="voltarAba" class="seta">&#8592;</a>
  
  <script src="script.js"></script>
<div class="row justify-content-center">
<div class="col-md-6 col-lg-4">
<div class="login-wrap p-0">
    <h3 class="mb-4 text-center">Crie sua conta</h3>
    <br/>
    <br/>
    <form action="cadastre-se.php" method="POST" class="signin-form">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" required>
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" id="email" name="email" class="form-control" placeholder="E-mail" required>
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="text" id="senha" name="senha" class="form-control" placeholder="Senha" required>
  </div>
  <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="number" id="telefone" name="telefone" class="form-control" placeholder="Telefone" required>
  </div>
  <div class="form-group">
    <label for="sexo">Sexo</label>
    <select id="sexo" name="sexo" class="form-control" required>
      <option value="feminino">Feminino</option>
      <option value="masculino">Masculino</option>
      <option value="prefiro_nao_informar">Prefiro não informar</option>
    </select>
  </div>
  <div class="form-group">
    <label for="data_nascimeno">Data de nascimento</label>
    <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="pais_origem">País de Origem</label>
    <select id="pais_origem" name="pais_origem" class="form-control" required>
        <option value="Afeganistão">Afeganistão</option>
        <option value="Alemanha">Alemanha</option>
        <option value="Arábia Saudita">Arábia Saudita</option>
        <option value="Austrália">Austrália</option>
        <option value="Brasil">Brasil</option>
        <option value="Canadá">Canadá</option>
        <option value="China">China</option>
        <option value="Estados Unidos">Estados Unidos</option>
        <option value="França">França</option>
        <option value="Índia">Índia</option>
        <option value="Itália">Itália</option>
        <option value="Japão">Japão</option>
        <option value="Reino Unido">Reino Unido</option>
        <option value="Rússia">Rússia</option>
        <!-- Adicione mais países aqui -->
    </select>
</div>

  <div class="form-group">
    <button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Enviar</button>
  </div>
</form>




</label>
</div>
<div class="w-50 text-md-right">

</div>
</div>
</form>



</div>
</div>
</div>
</div>
</div>
</section>

</body>

</html>
