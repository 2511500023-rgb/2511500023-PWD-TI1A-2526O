<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $_SESSION["error"] = "Akses tidak valid!";
    redirect_ke("index.php#contact");
    exit;
}
$nama  = trim($_POST["txtNama"] ?? '');
$email = trim($_POST["txtEmail"] ?? '');
$pesan = trim($_POST["txtPesan"] ?? '');

$eror = [];

if ($nama === "") {
    $eror[] = "Nama harus diisi!";
}
if ($email === "") {
    $eror[] = "Email harus diisi!";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $eror[] = "Format email tidak valid!";
}
if ($pesan === "") {
    $eror[] = "Pesan harus diisi!";
}

if (!empty($eror)) {
    $_SESSION["flash_error"] = implode("<br>", $eror);
    $_SESSION["old"] = compact("nama", "email", "pesan");
    redirect_ke("index.php#contact");
    exit;
}
arrContact = [
  "nama" => $_POST["txtNama"] ?? "",
  "email" => $_POST["txtEmail"] ?? "",
  "pesan" => $_POST["txtPesan"] ?? ""
];
$_SESSION["contact"] = $arrContact;

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
