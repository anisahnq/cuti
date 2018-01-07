<?php
include('../../koneksi.php');

//mengabmil data dari tabel
$kd_cuti = $_GET['kd_cuti'];
$id_pegawai = $_GET['id_pegawai'];
$query = mysql_query("SELECT b.id_pegawai AS 'idpeg', c.kd_cuti AS 'kdct', a.nama_managerhrd AS 'nmhrd', b.nama_pegawai AS 'nmpegawai', c.tgl_mulai_cuti AS 'mulai',
c.tgl_selesai_cuti AS 'selesai', c.alasan_cuti AS 'alasan', c.keterangan AS 'ket'
FROM managerhrd a, pegawai b, permohonan c WHERE a.id_managerhrd=c.id_managerhrd AND b.id_pegawai=c.id_pegawai AND c.id_pegawai='$id_pegawai' AND c.kd_cuti='$kd_cuti'");
$row = mysql_fetch_array($query);

$tempat="Tangerang, ";
$tgl=date('l, d-m-Y');

$tanggalmulaicuti = $row['mulai'];
$tglmulaicutifix=date("d F Y",strtotime($tanggalmulaicuti));
$tanggalselesaicuti = $row['selesai'];
$tglselesaicutifix=date("d F Y",strtotime($tanggalselesaicuti));
$namapegawai = $row['nmpegawai'];
$verifikasi = $row['ket'];
$alasan = $row ['alasan'];

//kirim pesan
$noTujuan = "+62$rs[tlp]";
$message = "Kami Memberitahukan bahwa pada tanggal $rsa[tgl]. Nama : $rs[nama]. Alamat : $rs[alamat]. Tidak Masuk Sekolah Tanpa Keterangan";

$message = "Permohonan Cuti Anda telah  "
 
exec('c:\xampp\htdocs\smsku\bin\gammu-smsd-inject.exe -c c:\xampp\htdocs\smsku\bin\smsdrc EMS '.$noTujuan.' -text "'.$message.'"');
echo "<script>window.alert('Pesan Sedang Diproses');
window.history.go(-1);</script>";

?>
