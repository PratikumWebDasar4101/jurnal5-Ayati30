<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Hitung Jumlah kata<h1>
    <form action ="" method ="post" ><br/>
       <textarea name="kata"></textarea><br/><br/>
       <input type="submit" name="hitung_kata" id="hitungkata" value="submit" />
    </form>

    <?php
       if(isset($_POST['hitungkata'])){
          $hasil=explode(" ", $_POST['kata']);
          echo "sekitar". count($hasil) . "kata" ;
       }
    ?>

  </body>
</html>
