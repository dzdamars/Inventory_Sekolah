
<html>
<link rel="stylesheet" href="bahan/css/table.css"/>
<body>
<div class="wrapper">
<table>
  <thead>
    <tr>
      <th>Nama</th>
      <th>Kelas/Jurusan</th>
      <th>Inventaris</th>
      <th>Jumlah</th>
      <th>Date</th>
      <th>Start</th>
      <th>End</th>
      <th>Status</th>
      <th>ket</th>
      <th>Detail</th>
    </tr>
  </thead>
  <tbody>
  <?php
include('config.php');
dbcon();
$a = mysql_query("SELECT * FROM table_pinjam WHERE status = 'pinjam' ");
while ($b=mysql_fetch_array($a)){
@SESSION_START();
$nama = $b['nama'];
$nis = $_SESSION['nis'];
$id = $b['nomor_pinjam'];
?>
<tr>
     <td><strong><?php echo $b['nama']; ?></strong></td>
       <td><strong><?php echo $b['kelas']; ?>/<?php echo $b['jurusan']; ?></strong></td>
      <td><?php echo $b['inventaris']; ?></td>
      <td><?php echo $b['qty']; ?></td>
      <td><strong><?php echo $b['date1']; ?></strong></td>
       <td><strong><?php echo $b['mulai']; ?></strong></td>
        <td><strong><?php echo $b['sampai']; ?></strong></td>
         <td><strong><?php echo $b['dev_desc']; ?></strong></td>
      <td><?php echo $b['status']; ?></td>
      <td><a href="pengembalian.php?<?php echo 'nomor_pinjam='.$id; ?>"><button class="btn btn-success">Kembalikan</button></a></td>
      
      <?php } ?>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>