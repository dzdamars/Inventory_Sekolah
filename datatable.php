<?php
include('head.php');
?>
<body>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Kelas/Jurusan</th>
            <th>Lokasi</th>
            <th>Barang</th>
            <th>Jumlah</th>
            <th>Price</th>
            <th>Date</th>
            <th>Ket</th>
            <th>Bayar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $a = mysql_query("SELECT * FROM st_barang where status='belum Lunas'")or die(mysql_error());
        while ($b = mysql_fetch_array($a)){
            @session_start();
            $nama = $b['dev_serial'];
            $nis = $_SESSION['nis'];
            $id = $b['id'];
        ?>
         <tr>
            <td><?php echo $b['dev_name']; ?></td>
            <td><?php echo $b['kelas'];?>/<?php echo $b['jurusan']; ?></td>
            <td><?php echo $b['lokasi']; ?></td>
            <td><?php echo $b['dev_id']; ?></td>
            <td><?php echo $b['qtyu']; ?></td>
            <td><?php echo $b['price']; ?></td>
            <td><?php echo $b['st_date']; ?></td>
                <td><?php echo $b['status']; ?></td>
                <td><a href="bayar.php?<?php echo 'id='.$id ?>"><b>Lunasi</b></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>