document.getElementById("contact-button").addEventListener("click", function() {
    var email = "refuge.adm@gmail.com";
    var subject = encodeURIComponent("Problema de suporte");
    var body = encodeURIComponent("Olá,\n\nPreciso de ajuda com um problema. [Descreva o problema aqui].\n\nAgradeço desde já pela sua assistência.\n\nAtenciosamente,\n[Seu nome]");
  
    var gmailUrl = "https://mail.google.com/mail/?view=cm&to=" + email + "&su=" + subject + "&body=" + body;
    window.open(gmailUrl);
  });
  