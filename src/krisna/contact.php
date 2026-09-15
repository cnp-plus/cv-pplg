<?php
// =========================================
// PROSES FORM KONTAK
// =========================================

// Hanya proses jika request-nya POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Ambil & bersihkan input
$nama  = trim($_POST['nama_pengirim'] ?? '');
$email = trim($_POST['email_pengirim'] ?? '');
$pesan = trim($_POST['pesan'] ?? '');

// Validasi sederhana
if ($nama === '' || $email === '' || $pesan === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Kalau ada input yang tidak valid, kembali ke form dengan pesan error
    header('Location: index.php?sukses=0');
    exit;
}

// Format data yang mau disimpan
$baris = sprintf(
    "[%s] Nama: %s | Email: %s | Pesan: %s\n",
    date('Y-m-d H:i:s'),
    $nama,
    $email,
    str_replace(["\r", "\n"], ' ', $pesan)
);

// Simpan ke file pesan.txt (bisa diganti ke database MySQL kalau perlu)
file_put_contents(__DIR__ . '/pesan.txt', $baris, FILE_APPEND | LOCK_EX);

// -------------------------------------------------------
// OPSIONAL: kalau server sudah mendukung mail(), aktifkan ini
// -------------------------------------------------------
// $tujuan  = 'email-tujuan@contoh.com';
// $subjek  = 'Pesan baru dari CV Online';
// $isi     = "Nama: $nama\nEmail: $email\nPesan:\n$pesan";
// $headers = "From: $email";
// mail($tujuan, $subjek, $isi, $headers);

// Redirect balik ke halaman utama dengan status sukses
header('Location: index.php?sukses=1');
exit;
