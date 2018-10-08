<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>LOGIN - AJAX</title>
    <style>
    	form{
    		margin: 100px auto;
    		border: 1px solid gray;
    		padding: 20px 15px;
    		border-top: 5px solid #007BFF;
    		box-shadow: 5px 5px 10px gray;
    		max-width: 500px;
    	}
    	form p{
    		margin-bottom: 30px;
    	}
	</style>
  </head>
  <body>
    


    <form id="formLogin" action="loginaction.php" method="post">
    	<div id="pesan">
	  		<?php
	  		if(isset($_GET['pesan'])){
		  		echo '<div class="alert alert-danger" role="alert">'.$_GET['pesan'].'</div>';
		  	}
	  		?>
	  	</div>
		
      <h2>LOGIN</h2>
      <p>Enter your credential...!</p>

	  <div class="form-group">
	    <label for="txtEmail">Email address</label>
	    <input type="email" class="form-control" id="txtEmail" aria-describedby="emailHelp" placeholder="Enter email" name="txtEmail">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group">
	    <label for="txtPassword">Password</label>
	    <input type="password" class="form-control" id="txtPassword" placeholder="Password" name="txtPassword">
	  </div>
	  <div class="form-group form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script>
		
		$('#formLogin').submit(function(e){
			e.preventDefault();
			
			var email = $("#txtEmail").val();
			var password = $("#txtPassword").val();

			if(email == '' || password == ''){
				$('#pesan').html('<div class="alert alert-danger" role="alert">Lengkapi Data Anda...!</div>');
				return;
			}

			//post data melalui ajax
			$.ajax({
				url  : 'loginaction.php',
				type : 'POST',
				dataType : 'json',
				data : {
					txtEmail : email,
					txtPassword : password
				},
				success : function(result){
					console.log(result);
					if(result.status=="OK"){
						window.location = 'admin.php';
					}else{
						$('#pesan').html('<div class="alert alert-danger" role="alert">'+ result.message +'</div>');
					}
				},
				error : function(err){
					console.error(err);
				}
			});

		});


			



	</script>

  </body>
</html>