
<!doctype html>
<html lang="pt-br">
<head>
<title>Login Refuge</title>
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
<h2 class="heading-section"><img src="imagem/logo1.png" alt=""></h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-6 col-lg-4">
<div class="login-wrap p-0">
<h3 class="mb-4 text-center">Tem uma conta?</h3>
<form action="testelogin.php" class="signin-form">
<div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" id="email" name="email" class="form-control" placeholder="E-mail" required>
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="text" id="senha" name="senha" class="form-control" placeholder="Senha" required>
</div>
<div class="form-group">
    <button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Entrar</button>
  </div>
<div class="form-group d-md-flex">
<div class="w-50">
<label class="checkbox-wrap checkbox-primary">Lembre-se de mim
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</div>
<div class="w-50 text-md-right">
<a href="recuperaçãodesenha.html" style="color: #fff">Esqueceu a senha?</a>
</div>
</div>
</form>
<p class="w-100 text-center">&mdash; ou &mdash;</p>
<div class="social d-flex text-center">
    <script>document.getElementById('voltarAba').addEventListener('click', function() {
  window.history.back();
});
</script>

<a href="cadastre-se.html" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Cadastre-se</a>
</div>
</div>
</div>
</div>
</div>
</section>

</body>

</html>
