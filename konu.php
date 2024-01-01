<?php
session_start();
include 'ayar.php';
include 'ukas.php';
include 'fonksiyon.php';
?>
<center>

<?php include = 'ust_bilgi.php'; ?>

<br> <br>

<h2> Konu Başlığı </h2>

<strong> Konu Sahibi: </strong> <a href= "profil.php?yin=kemal"> Kemal Dokumacı </a>

<p>
    Konu Mesajlar
</p>

<hr>

<h3> Yorumlar: </h3>

<a href= "profil.php?yin=serkan"> <strong> Serkan Mutlu </strong> </a> <br>

<p>
    Lorem ipsum dolor sit amet.
</p>

<small> Tarih: </small>

<hr>

<a href= "profil.php?yin=serkan"> <strong> Serkan Mutlu </strong> </a> <br>

<p>
    Lorem ipsum dolor sit amet.
</p>

<small> Tarih: </small>

<hr>

<a href= "profil.php?yin=serkan"> <strong> Serkan Mutlu </strong> </a> <br>

<p>
    Lorem ipsum dolor sit amet.
</p>

<small> Tarih: </small>

<h4> Yorum Yap: </h4>

<form action = " " method = "post">
    
<textarea name = "yorum" cols = "30" rows = "10"> </textarea>

<br> <br>

<input type = "submit" value = "Yorum Yap">

</form>

Yorum yapabilmek için <a href = "uyelik.php"> Giriş Yap </a> veya <a href = "uyelik.php?q=kayit"> Kayıt Ol </a>

</center>