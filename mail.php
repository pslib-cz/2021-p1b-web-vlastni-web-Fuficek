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
$recipient = "matalacek49fuf@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo '
<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/mainpage.css">
    <link rel="stylesheet" href="CSS/background.css">
    <link rel="icon" href="IMG/favicon.png">
    <title>CPW</title>
  </head>
  <body>
    <div class="container py-4">
      <div class="toplogo">
          <a href="index.html"><img src="IMG/image001.png"></a>
      </div>
    <header class="d-flex justify-content-center py-2">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.html" class="nav-link " aria-current="page">ÚVOD</a></li>
            <li class="nav-item"><a href="rozsah_cinnosti.html" class="nav-link">ROZSAH ČINNOSTÍ</a></li>
            <li class="nav-item"><a href="reference.html" class="nav-link">REFERENCE</a></li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ELEKTRO REVIZE</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="elektrorevize/reference.html">ELEKTRO REVIZE</a>
                <a class="dropdown-item" href="elektrorevize/reference.html">REFERENCE</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="elektrorevize/kontakt.html">KONTAKT</a>
              </div>
            </li>
            <li class="nav-item"><a href="#" class="nav-link">KARIÉRA</a></li>
            <li class="nav-item"><a href="kontakt.html" class="nav-link active">KONTAKT</a></li>
        </ul>
    </header>
            </div>
      </div>
      <div class="container py-4">
        <div class="container-spacing">
            <div class="p-5 mb-4 bg-dark rounded-3">
                <div class="container-fluid py-3">
                  <h2 class="text-center">Váš email byl úspěšně odeslán!</h2>
                <p class="sizing text-center">
                  Děkujeme za kontaktování, brzy se vám ozveme
                </p>
                </div>
            </div>
        </div>
        <footer class="pt-3 text-muted border-top">
          <div class="text-center">
              <p>CPW s.r.o.</p>
            <p>Tel.: +420 723 760 168         Email: cpw@cpw.cz</p>
            <p>Bítouchov 117, 513 01 Semily   IČ. 04778839, DIČ: CZ 04778839</p>
        </div>
        </footer>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>
';
?>