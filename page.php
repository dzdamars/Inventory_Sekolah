<?php
include('head.php');
?>
<?php
include ('header.php');
?>
 <style type="text/css">
 	.wrapper {
  display: inline-block;
  width: 100%;
  height: auto;
  padding: auto;
  margin: 0 auto;
  background: rgba(0, 00, 0, 0.0);
  padding: 10px 0px 0px;
}
.main {
  border-radius: 2px 2px 5px 5px;
  padding: auto;
  width: auto;
  height: auto; 
  position: relative;
  box-shadow: 0px 1px 5px rgba(0, 9, 9, 0.3);
  border: 1px solid #D0D0D0;
  box-shadow: 0 0 20px #D0D0D0;
  margin: auto;
}
.header {
	width: 90%;
	max-width: 90em;
	margin: auto;
	margin-top: auto;
	position: relative;
	text-align: center;
	font-style: bold;
	font-size: 20pt;
}
img {
	position: relative;
	margin-left: auto;
	margin-right: auto;
	display: block;
	padding: auto;
	padding-top: 0px;
	width: 150px;
	height: auto;
	margin-top: 10px;
}
 </style>
 <body style="background: #fff;">
 <div class="container">
 	<img src="bahan/image/smk.png" width="50" height="50">
 	<a href="logout.php" style="float: right;" class="btn btn-info">Logout</a>
 	<header>
 		<h2><p align="center">Inventaris SMKN 1 Cibinong</p></h2>
 		<span><h3><p align="center">Multimedia</p></h3></span></header>
    <div class="block-content collapse in">
<div id="page-wrapper">
  <div class="row-fluid">
    <div class="span6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="container-fluid">
            <div class="row-fluid">
              <div class="span3"><br/>
                <i class="fa fa-desktop fa-5x"></i><br/>
              </div>
              <div class="span8 text-right"><br/>
                <div class="huge"></div>
                <div style="font-size: 14pt;">Peminjaman Inventaris Barang MM</div><br/>
              </div>
            </div>
          </div>
        </div>
        <a href="peminjaman.php">
          <div class="modal-footer">
            <span class="pull-left">Input</span>
            <span class="pull-right">
              <i class="fa fa-plus"></i>
            </span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="span6">
      <div class="panel panel-green">
        <div class="panel-heading">
          <div class="container-fluid">
            <div class="row-fluid">
              <div class="span3"><br/>
                <i class="fa fa-print fa-5x"></i><br/>
              </div>
              <div class="span8 text-right"><br/>
                <div class="huge">
                </div>
                <div style="font-size: 14pt;">Pengambilan Barang Habis Pakai</div><br/>
              </div>
            </div>
          </div>
        </div>
        <a href="stoks.php">
          <div class="modal-footer">
            <span class="pull-left">Input</span>
            <span class="pull-right">
              <i class="fa fa-plus"></i>
            </span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
       </div>
     </div>
   </div>
        <?php
@SESSION_START(); ?>
       <br>
    <a href="prints.php?<?php echo "6"; ?>" style="float: left;" class="btn btn-info"  id="back" >
      <i class="fa fa-print fa-1x">
      </i>Print</a> <br>
                                   <?php include('tabel.php');
                                   ?> 
                                 </div>
                               </body>
                               </html>