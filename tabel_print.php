<html>
<link rel="stylesheet" href="bahan/css/print_tabel.css"/>
<body>

<table>
  <thead>
    <tr>
      <th>Type</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>

  <?php
$a = mysql_query("SELECT * FROM item_name ")or die(mysql_error());

while ($b=mysql_fetch_array($a)){
@SESSION_START();
?>
<tr>
     <td><strong><?php echo $b['itm_name']; ?></strong></td>
       <td><strong><?php echo $b['qty']; ?></strong></td>
        
      <?php } ?>
    </tr>
  </tbody>
</table>


</body>
</html>