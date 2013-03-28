<h2>Data Siswa Pelamar</h2>
<table border="1">
  <?php
include 'include/koneksi.php';

$no=1;
$sql1 = mysql_query("select * from Data_Sekolah");
while ($data1 = mysql_fetch_array($sql1))

$sql2 = mysql_query("select * from Data_Siswa");
while ($data2 = mysql_fetch_array($sql2))

$sql3 = mysql_query("select * from Data_Prestasi");
while ($data3 = mysql_fetch_array($sql3))

$sql4 = mysql_query("select * from Data_Pilihan");
while ($data4 = mysql_fetch_array($sql4))
{

?>
  <tr>
    <td>No</td>
    <td>:</td>
    <td>
      <?php echo $no ; ?>
    </td>
  </tr>
  <tr>
    <td>Nomor Pendaftaran</td>
    <td>:</td>
    <td>
      <?php echo $data2[nomor_pendaftaran]; ?>
    </td>
  </tr>
  <tr>
    <td>NISN</td>
    <td>:</td>
    <td>
      <?php echo $data2[nisn]; ?>
    </td>
  </tr>
  <tr>
    <td>NIS</td>
    <td>:</td>
    <td>
      <?php echo $data2[nis]; ?>
    </td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td>
      <?php echo $data2[nama_siswa]; ?>
    </td>
  </tr>
  <tr>
    <td>Direkomendasikan</td>
    <td>:</td>
    <td>
      <?php echo $data2[direkomendasikan]; ?>
    </td>
  </tr>
  <tr>
    <td>Jenis Prestasi</td>
    <td>:</td>
    <td>
      <?php echo $data3[jenis_prestasi]; ?>
    </td>
  </tr>
  <tr>
    <td>Jenjang Prestasi</td>
    <td>:</td>
    <td>
      <?php echo $data3[jejang_prestasi]; ?>
    </td>
  </tr>
  <tr>
    <td>NPSN Sekolah</td>
    <td>:</td>
    <td>
      <?php echo $data2[npsn_sekolah]; ?>
    </td>
  </tr>
  <tr>
    <td>Nama Sekolah</td>
    <td>:</td>
    <td>
      <?php echo $data1[nama_sekolah]; ?>
    </td>
  </tr>
  <tr>
    <td>Jenis Sekolah</td>
    <td>:</td>
    <td>
      <?php echo $data1[jenis_sekolah]; ?>
    </td>
  </tr>
  <tr>
    <td>Akreditas Sekolah</td>
    <td>:</td>
    <td>
      <?php echo $data1[akreditasi_sekolah]; ?>
    </td>
  </tr>
  <tr>
    <td>Kode Kabupaten</td>
    <td>:</td>
    <td>
      <?php echo $data1[kode_kabupaten]; ?>
    </td>
  </tr>
  <tr>
    <td>Kepemilikan Sekolah</td>
    <td>:</td>
    <td>
      <?php echo $data1[kepemilikan]; ?>
    </td>
  </tr>
  <tr>
    <td>Urutan PTN</td>
    <td>:</td>
    <td>
      <?php echo $data4[urutan_ptn]; ?>
    </td>
  </tr>
  <tr>
    <td>Kode Program Studi</td>
    <td>:</td>
    <td>
      <?php echo $data4[kode_program_studi]; ?>
    </td>
  </tr>
    <tr>
    <td>Program Studi</td>
    <td>:</td>
    <td>
      <?php echo $data4[program_studi]; ?>
    </td>
  </tr>
    <tr>
    <td>Urutan Program Studi</td>
    <td>:</td>
    <td>
      <?php echo $data4[urutan_program_studi]; ?>
    </td>
  </tr>
  <?php 
  $no++;
    }
  ?>
  </table>