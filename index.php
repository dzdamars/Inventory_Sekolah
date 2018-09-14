<?php
include('hd.php');
?>
<script>
	$(function(){
			$('.demo1').easyTicker({
				direction: 'up',
				speed: "slow",
				interval: 5000
			});
		});
		</script>
<style>
.wafer {
	justify-content: center;
	width: 100%;
	height: 100%;
	padding: 20px;
	background: rgba(255, 255, 255, 0.50);
}
.rb-week div img{
	position:fixed;
	bottom:0px;
	left:30%;
	height:600px;
	z-index: -200;
}
	</style>
</head>
<body style="background-image: url(background.jpg); background-size: cover; ">
        <div class="container">
			<header class="clearfix">
				<img src="bahan/image/smk.png" width="100" height="100" class="inline img-responsive" style="float:right; box-shadow: 1px 0px 2px rgba(0,0,0,0.2);">
				<h1 style="float:left; color: #fff;">Multimedia SMKN 1 Cibinong<span><b>Inventaris barang &amp Barang Habis Pakai</b></span></h1>	
			<!--
				<nav class="codrops-demos">
					<a href="#">Hubungi Kami</a>
					<a class="current-demo" href="#">Login</a>
				</nav>
			-->
			</header>
			<div class="main">
				<ul id="rb-grid" class="rb-grid clearfix">
					<li>
						<h3></h3><span class="rb-temp">Siswa</span>
						<div class="rb-overlay">
							<span class="rb-close">close</span>
							<div id="login_mhs" class="rb-week">
								<div>
								<span class="rb-city" style="font-size: 60.65px;">Siswa</span>
									<div id="simple-msg1"></div>
									<!-- Login Form -->
									<?php if (isset($_SESSION['alert'])) {echo '<strong>Snap!</strong>'.$_SESSION['alert'];}; ?>
									<form action="login.php" class="form-2" method="post" accept-charset="utf-8">
										<p class="clearfix">
											<label for="login">NIS</label>
											<input type="text" name="nama" id="nama" placeholder="Masukkan NIS" required="" autofocus="" onsubmit="return validasi()">
										</p>
										<p class="clearfix">
											<input type="hidden" name="room" value="mhs">
											<input style="width:305px;" type="submit" name="submit" id="go1" value="Sign in">
										</p>       
									</form>​
									<img src="bahan/image/student.png">
								<!-- Close Login Form -->
								</div>
							</div> 
						</div>
					</li>
					<li>
						<h3></h3><span class="rb-temp">Guru</span>
						<div class="rb-overlay">
							<span class="rb-close">close</span>
							<div class="rb-week">
								<div>
								<span class="rb-city" style="font-size: 60.65px;">Guru</span>
									<div id="simple-msg4"></div>
								<!-- Login Form -->
								<?php if (isset($_SESSION['alert'])) {echo '<strong>Snap!</strong>'.$_SESSION['alert'];}; ?>
									<form action="login_tch.php" class="form-3" method="post" accept-charset="utf-8">
										<p class="clearfix">
											<label for="password">Nama</label>
											<input type="text" name="nama" id="nama" placeholder="username" required="">
										</p>
										<p class="clearfix">
											<input type="hidden" name="room" value="dos">
											<input type="submit" name="submit" id="go4" value="Sign in">
										</p>       
									</form>​
									<img src="bahan/image/teacher.png">
									*Masukkan username : guru
								<!-- Close Login Form -->
								</div>
							</div> <!-- Close rb-week -->
						</div>
					</li>
				</ul>
			</div>	
        </div> 
		<!--<script src="http://siakadug.kreasiaplikasi.com:/assets/login/js/183.jquery.min.js"></script>-->
		<script src="bahan/js/jquery.fittext.js"></script>
		<script src="bahan/js/boxgrid.example2.js"></script>
		<script type="text/javascript">function validasi(){

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username!= "" && password!=""){
      return true;
    } else {
      alert("username dan password harus diisi!")
      return false;
    }
  }
</script>
		<script>
			$(function() {
				Boxgrid.init();
			});
		</script>
		
		<script>
			$("#lupa1").click(function()
			{
				$("#simple-msg1").html("<img src=loading.gif' />");
				$("#login_mhs").load("/login/lupa_password");
			});
			// siswa
			$("#go1").click(function()
			{
				$("#login_form1").submit(function(e)
				{
					$("#simple-msg1").html("<img src='http://siakadug.kreasiaplikasi.com:/assets/login/loading.gif' />");
					var postData = $(this).serializeArray();
					var formURL = $(this).attr("action");
					$.ajax(
					{
						url : formURL,
						type: "POST",
						data : postData,
						success:function(data, textStatus, jqXHR) 
						{
							if(data == 'sukses'){
								window.location=""
							}else{
								$("#simple-msg1").html(data);
							}
						},
						error: function(jqXHR, textStatus, errorThrown) 
						{
							
						}
					});
					e.preventDefault();	//STOP default action
					e.unbind();
				});	
				$("#login_form1").submit(); //SUBMIT FORM
			});
			// guru
			$("#go4").click(function()
			{
				$("#login_form4").submit(function(e)
				{
					$("#simple-msg1").html("<img src='http://siakadug.kreasiaplikasi.com:/assets/login/loading.gif' />");
					var postData = $(this).serializeArray();
					var formURL = $(this).attr("action");
					$.ajax(
					{
						url : formURL,
						type: "POST",
						data : postData,
						success:function(data, textStatus, jqXHR) 
						{
							if(data == 'sukses'){
								window.location=""
							}else{
								$("#simple-msg4").html(data);
							}
						},
						error: function(jqXHR, textStatus, errorThrown) 
						{
							
						}
					});
					e.preventDefault();	//STOP default action
					e.unbind();
				});	
				$("#login_form4").submit(); //SUBMIT FORM
			});
		</script>
	</body>
	</html>