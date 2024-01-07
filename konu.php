<?php
session_start();
include 'ayar.php';
include 'ukas.php';
include 'fonksiyon.php';

$link = $_GET["link"];

$data = $db -> prepare("SELECT * FROM konular WHERE
  konu_link=?

");
$data -> execute([
  $link
]);
$data = $db -> prepare("SELECT * FROM konular WHERE
        konu_link=?
    ");
    $data -> execute([
        $link
    ]);
    $_data = $data -> fetch(PDO::FETCH_ASSOC);
?>
<center>

<?php include 'ust_bilgi.php'; ?>

<br> <br>



<h2><?php echo $_data["konu_ad"]; ?></h2>

<strong> Konu Sahibi: </strong><a href= "profil.php?kadi=<?= uye_ID_to_kadi($_data["konu_uye_id"])?>"><?=uye_ID_to_isim($_data["konu_uye_id"])?></a>

<p>
<?php echo $_data["konu_mesaj"]; ?>
</p>

<p>
    <small><?=$_data["konu_tarih"]?></small>
</p>

<?php
if (@$_SESSION["uye_id"]) {
  echo '<h4>Konuya Yorum Yap: </h4>
  <form action="" method="post">
  <textarea name="yorum" cols="30" rows="15"> </textarea>
  <br>
  <br>
  <input type="submit" value="Yorumu Yayınla">
  </form>';
} else {
  echo 'Konuya yorum yapabilmek için lütfen <a href="uyelik.php"> GİRİŞ YAPIN</a> veya <a href="uyelik.php?p=kayit">KAYIT OLUN </a>';
}
?>
</center>