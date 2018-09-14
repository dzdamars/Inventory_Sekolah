<?php include('header.php'); ?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("thesis") ;

$a="select*from admin LIMIT 4" ;
$b=mysql_query($a) ;

while ($c=mysql_fetch_array($b) ) {
?>
				<?php } ?>

<body id="login">
    <div class="container">
		<div class="row-fluid">
			<div class="span6"><div class="title_index"><?php include('title_index.php'); ?></div></div>
			<div class="span6">
			<div class="pull-right"></div>
			<form action="register_form.php" class="form-signin" method="post">
				<h3 class="form-signin-heading">
					<i class="icon-lock"></i> Please Register
				</h3>
				<input type="text"      class="input-block-level"   id="firstname" name="firstname" placeholder="Firstname" required>
				<input type="text"      class="input-block-level"   id="lastname" name="lastname" placeholder="Lastname" required>
				<input type="text"      class="input-block-level"   id="username" name="username" placeholder="Username" required>
				<input type="password"  class="input-block-level"   id="password" name="password" placeholder="Password" required>
				
				<button data-placement="right" title="Click Here to Sign In" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Register</button>
					
				<script type="text/javascript">
				$(document).ready(function(){
				$('#signin').tooltip('show');
				$('#signin').tooltip('hide');
				});
				</script>		
			</form>
			</div></div>
		</div>
		<div class="row-fluid">
           <div class="offset2">		
			   <div class="span11"><div class="index-footer"><?php include('link.php'); ?></div></div>		
		   </div>
	    </div>
			<?php include('footer.php'); ?>
    </div>
<?php include('script.php'); ?>
</body>
</html>



