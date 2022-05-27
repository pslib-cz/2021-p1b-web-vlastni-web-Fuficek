<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "astastny268@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo '
<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/parallax.css">
    <link rel="stylesheet" href="CSS//normalize.css">
    <link rel="icon" href="IMG/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton&effect=neon">
    <title>𝙉𝙄𝙏𝙍𝙊 𝙉𝙀𝙊𝙉𝙎</title>
  </head>
  <body>
      <div class="parallax"> 
        <div class="neon-wrapper">
          <a class="logo" href="index.html">
          <h1 class="neontext">Nitro Neons</h1>
          </a>
          <a href="#site">
            <div class="arrow">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </a>
        </div>
        </div>
        <div class="content-outer"> 
            <div class="content-inner">
              <div class="pagecontent" id="site"> 
                <div class="space bag">
                  <header>
                    <nav>
                      <ul class="nav-links">
                        <li><a class="nav-link" href="index.html">Úvod</a></li>
                        <li><a class="nav-link" href="#">Servis</a></li>
                        <li><a class="nav-link" href="contact.html">Kontakt</a></li>
                        <li><a class="nav-link" href="#">Zdroje</a></li>
                      </ul>
                    </nav>
                  </header>
                  <div class="jumbospace">
                    <div class="jumbotron-l mail">
                        <h1>Váš email byl úspěšně odeslán!</h1>
                        <p class="regular-text">
                          Děkujeme za váš zájem.
                          Ozveme se vám nejrychleji jak to bude možné!
                        </p>
                          <div class="back-div"><a class="back" href="index.html">Zpět na hlavní stránku!</a></div>
                    </div>
                </div>
                <footer>
                  <p>
                    © 2022 Nitro Neons s r.o. Všechna práva vyhrazena | IČO: 58202205 | Kontakt: astastny268@gmail.com | Design Matěj Hrabal 
                  </p>
                </footer>
                </div>
            </div>
        </div>
        </div>
  </body>
</html>
';
?>