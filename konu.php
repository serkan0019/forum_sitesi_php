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

</center>