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
									<form action="login_validasi2.php" class="form-2" method="post" accept-charset="utf-8">
							
										<p class="clearfix">
											<label for="login">Password</label>
											<input type="password" name="password" id="password" placeholder="Isi! Minta Admin!" required="" autofocus="" onsubmit="return validasi()">
																					
																					</p>
										<p class="clearfix">
											<input type="hidden" name="room" value="mhs">
											<input type="submit" name="submit" id="go1" value="Sign in">
											<a id="lupa1" href="javasript:void(0);">Lupa password?</a>
										</p>       
									</form>​
									
									<img src="bahan/image/student.png">
</div>
</div>
</div>

</div>
</li>


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
			
			// -------------------------------------------- Alumni -----------------------------------------------------
			$("#go2").click(function()
			{
				$("#login_form2").submit(function(e)
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
								$("#simple-msg2").html(data);
							}

						},
						error: function(jqXHR, textStatus, errorThrown) 
						{
							
						}
					});
					e.preventDefault();	//STOP default action
					e.unbind();
				});
					
				$("#login_form2").submit(); //SUBMIT FORM
			});
			
			// -------------------------------------------- Staff -----------------------------------------------------
			$("#go3").click(function()
			{
				$("#login_form3").submit(function(e)
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
								$("#simple-msg3").html(data);
							}
						},
						error: function(jqXHR, textStatus, errorThrown) 
						{
							
						}
					});
					e.preventDefault();	//STOP default action
					e.unbind();
				});
					
				$("#login_form3").submit(); //SUBMIT FORM
			});
						
			// -------------------------------------------- Dosen -----------------------------------------------------
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
		
	