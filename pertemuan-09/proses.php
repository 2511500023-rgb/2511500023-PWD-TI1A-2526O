<?php
session_start();
= $_POST["txtNama"];
= $_POST["txtEmail"];
= $_POST["txtPesan"];
["sesnama"] = $sesnama;
["sesemail"] = $sesemail;
["sespesan"] = $sespesan;

$arrBiodata = [
"nim" => $_POST["txtNim"] ?? "",
"nama" => $_POST["txtNmLengkap"] ?? "",
"tempat" => $_POST["txtT4Lhr"] ?? "",
"tanggal" => $_POST["txtTglLhr"] ?? "",
"hobi" => $_POST["txtHobi"] ?? "",
"pasangan" => $_POST["txtPasangan"] ?? "",
"pekerjaan" => $_POST["txtKerja"] ?? "",
"ortu" => $_POST["txtNmOrtu"] ?? "",
"kakak" => $_POST["txtNmKakak"] ?? "",
"adik" => $_POST["txtNmAdik"] ?? ""
];

$_SESSION["biodata"] = $arrBiodata;
header("location: index.php#about");

header("location: index.php");
?>