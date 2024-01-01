<?php
session_start();
include 'ayar.php';
include 'ukas.php';
include 'fonksiyon.php';

$q = @$_GET["q"];

$data = $db -> prepare("SELECT * FROM kategoriler WHERE k_kategori_link=?
");
$data -> execute([
  $q
]);
$_data = $data -> fetch(PDO::FETCH_ASSOC);
?>
<center>
<?php include 'ust_bilgi.php'; ?>

<br> <br>

<h2><?php echo $_data["k_kategori"]; ?></h2>

<ul>
				<li><a href=" "> Kategori İçindeki Başlıklar </a></li>
				<li><a href=" "> Kategori İçindeki Başlıklar </a></li>
				<li><a href=" "> Kategori İçindeki Başlıklar </a></li>
				<li><a href=" "> Kategori İçindeki Başlıklar </a></li>
				<li><a href=" "> Kategori İçindeki Başlıklar </a></li>
				<li><a href=" "> Kategori İçindeki Başlıklar </a></li>
				<li><a href=" "> Kategori İçindeki Başlıklar </a></li>
				<li><a href=" "> Kategori İçindeki Başlıklar </a></li>
				<li><a href=" "> Kategori İçindeki Başlıklar </a></li>
				<li><a href=" "> Kategori İçindeki Başlıklar </a></li>
</ul>

</form>

</center>