<?php
  $dzisiaj = date("d");

  $img = "./img/". $dzisiaj .".png";

  $zadanie = "Abyś mógł cieszyć się tym radosnym czasem  i w pełni korzystać z tego kalendarza będziesz potrzebował kilku rzeczy: opakowanie (najmniejsze) gipsu, mały słoiczek oleju kokosowego, mieszankę ziaren, sznurek bawełniany gruby (motek), 3 koperty, 3 znaczki pocztowe, foremki na ciastka i nieduży słoik. Przy okazji sprawdź gdzie podziewają się nożyczki,klej,papiery kolorowe oraz farby :)";

  //echo "<img src='". $img ."'>";
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="dh. Filip Sochaj">
    <title>Kalendarz Adwentowy dla 12 DH Orion</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <div class="title font3">
      Kalendarz Adwentowy
    </div>
    <hr><br>
    <div class="font2" style="font-size: 20px">
      Dzisiaj jest: <?php echo $dzisiaj; ?> grudnia 2020 roku.
      <br>
      <br>
      Poniżej znajdziesz zadanie na dziś. Każdy dzień ma inne zadanie, postaraj się wykonać wszystkie. Możesz je potem wysłać na WhatsAppow'ą grupę lub przez formularz poniżej!
    </div>
    <br><br>
    <div style="text-align: center; font-size: 40px;" class="font1">
      <?php echo "<img src='". $img ."'>"; ?><br>
      <?php echo $zadanie; ?>
    </div><br>
    <div style="font-size: 15px;" class="font2">Zadania są aktualizowane ręcznie około godziny 8:30 rano.</div>
    <br>
    <center><iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc0UXmm2-fzRJAmLXstpF5Q7GsBTp2PyHQt4AmAP9vboRMWcw/viewform?embedded=true" width="640" height="705" frameborder="0" marginheight="0" marginwidth="0">Ładuję…</iframe></center>
  </body>
</html>
