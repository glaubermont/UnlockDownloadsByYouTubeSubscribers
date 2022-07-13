<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		*{
			text-align:center;
		}
	</style>
</head>
<body>

<div class="container" style="background: #fdfdff;">

	  <div class="row" style="color:#fff;font-size:25px; font-weight:bold;background: #3b7dd8;height:120px;">
	  	  <div class="col-lg-12">
	  	  	 <br>
	  	    <center><h3>Password Reset Successfull</h3></center> 	
	  	  </div>
	  </div>
	  <div class="row" style="font-size: 15px;">
	  	<div class="col-lg-12">
	  	
	  		 <br><br>
	  		 <h3>Dear {{$data['name']}}</h3>
	  		 <br>
	  		 <h3>You have successfully reset your password.Given below is your new password</h3>
	  		 <br>
	  		 <h3>&nbsp;&nbsp;&nbsp;&nbsp;<b> New Password:</b>&nbsp;{{$data['password']}}</h3>
	  		 <br>
	         <br>
	         <h3>For Login <a href="https://guitarpreset.com/login" target="_new">Click Here</a></h3>
	  	</div>
	  </div>
</div>	
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>