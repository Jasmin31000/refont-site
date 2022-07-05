<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Informa09</title>
        <link href="css/styles.css" rel="stylesheet" />
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-210283645-1">
</script>
    </head>
    <body>
      <div class="contenfond-1">
        <div class="bulle">
          <span class="xbul-1" style="--i:11"></span>
          <span class="xbul-1" style="--i:12"></span>
          <span class="xbul-1" style="--i:24"></span>
          <span class="xbul-1" style="--i:10"></span>
          <span class="xbul-1" style="--i:14"></span>
          <span class="xbul-1" style="--i:23"></span>
          <span class="xbul-1" style="--i:18"></span>
          <span class="xbul-1" style="--i:16"></span>
          <span class="xbul-1" style="--i:19"></span>
          <span class="xbul-1" style="--i:20"></span>
          <span class="xbul-1" style="--i:22"></span>
          <span class="xbul-1" style="--i:25"></span>
          <span class="xbul-1" style="--i:13"></span>
          <span class="xbul-1" style="--i:15"></span>
          <span class="xbul-1" style="--i:26"></span>
          <span class="xbul-1" style="--i:17"></span>
          <span class="xbul-1" style="--i:21"></span>
          <span class="xbul-1" style="--i:26"></span>
          <span class="xbul-1" style="--i:28"></span>
          <span class="xbul-1" style="--i:27"></span>
          <span class="xbul-1" style="--i:11"></span>
          <span class="xbul-1" style="--i:12"></span>
          <span class="xbul-1" style="--i:24"></span>
          <span class="xbul-1" style="--i:10"></span>
          <span class="xbul-1" style="--i:14"></span>
          <span class="xbul-1" style="--i:23"></span>
          <span class="xbul-1" style="--i:18"></span>
          <span class="xbul-1" style="--i:16"></span>
          <span class="xbul-1" style="--i:19"></span>
          <span class="xbul-1" style="--i:20"></span>
          <span class="xbul-1" style="--i:22"></span>
          <span class="xbul-1" style="--i:25"></span>
          <span class="xbul-1" style="--i:13"></span>
          <span class="xbul-1" style="--i:15"></span>
          <span class="xbul-1" style="--i:26"></span>
          <span class="xbul-1" style="--i:17"></span>
          <span class="xbul-1" style="--i:21"></span>
          <span class="xbul-1" style="--i:26"></span>
          <span class="xbul-1" style="--i:28"></span>
          <span class="xbul-1" style="--i:27"></span>
        </div>
      </div>
      <header class="pagehead">
        <div class="contact-contenaire">
          <h2>Nous Contacter</h2>
          <h1>Nous vous répondrons le plus rapidement possible</h1>
        </div>
      </header>
      <section class="secbod">
        <h2 class="titre">Information</h2>
        <div class="info-conte">
          <form class="info-form" method="post">
            <div class="info-cont-groupe">
              <div class="info-groupe-form">
                <label class="label-form">Nom</label>
                <input class="input-form" id="name" type="text" placeholder="Nom *" name="name" required/>
              </div>
              <div class="info-groupe-form">
                <label class="label-form">E-mail</label>
                <input class="input-form" id="email" type="email" placeholder="E-mail *" name="email" required/>
              </div>
              <div class="info-groupe-form">
                <label class="label-form">Sujet</label>
                <input class="input-form" id="sujet" type="text" placeholder="Sujet *" name="sujet" required/>
              </div>
              <div class="info-groupe-form">
                <label class="label-form">Numéro</label>
                <input class="input-form" id="phone" type="tel" placeholder="Téléphone *" name="tel" required/>
              </div>
              <div class="info-groupe-form">
                <label class="label-form">Descriptif de votre projet</label>
                <textarea class="input-form" id="message" placeholder="Descriptif *" name="mes" required></textarea>
              </div>
            </div>
            <a href="#" class="bouton" id="submitButton" type="submit">
              <span class="boutanim">Notre Mail</span><i></i>
            </a>
          </form>
          <?php
          if (isset($_POST["mes"])) {
            $message = "Ce message vous à été envoyé via la page contact de votre site
            Nom : " . $_POST["name"] . "
            E-mail : " . $_POST["email"] . "
            Téléphone : " . $_POST["tel"] . "
            Message : " . $_POST["mes"];

            $retour = mail("support-mail@infoma-09.com",$_POST["sujet"],$message,"From:support-mail@infoma-09.com" . "\r\n" . "Reply-to:" . $_POST["email"]);
            if($retour){
              echo "<div class='container'><div class='text-center'><p>Le mail à bien été envoyer.</p></div></div>";
            }
          }
          ?>
        </div>
      </section>
    </body>
</html>
