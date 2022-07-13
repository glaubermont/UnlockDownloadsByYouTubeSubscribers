<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<?php
          $fillfields= 'Download file '.$name;
?>

 <style>
@import url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
   </style>
</html>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand fa fa-unlock" href="https://localhost/UnlockDownloadsByYouTubeSubscribers"><a class="navbar-brand" href="https://localhost/UnlockDownloadsByYouTubeSubscribers"> <p>UnlockDownloadsByYouTubeSubscribers</p></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link fa fa-home" href="https://localhost/UnlockDownloadsByYouTubeSubscribers"> Home <span class="sr-only">(current)</span></a>
      </li>

    </ul>
  </div>
</nav>

<html>


<script>
function enabled(){
   document.getElementById("download").hidden=true;
   document.getElementById("loading").hidden=false;  
  //document.getElementById("rbutton_"+i).setAttribute("enabled","enabled");
    //document.getElementById("download").disabled = false;
  setTimeout(function(){
     document.getElementById("download").hidden=false;
     document.getElementById("loading").hidden=true;
     document.getElementById("loadprogress").hidden=true;
     document.getElementById("loadprogressfull").hidden=false;
     document.getElementById("rbutton_1").hidden=true; 
     document.getElementById("youtubebtn").hidden=false; 
    //document.getElementById(id).style.visibility = "visible";
    document.getElementById("download").disabled = false;
  },12000);
  
    }
</script>
<body>

<center>

<br>

<h3> <b><?php echo $fillfields; ?></b></h3>

<h5>Complete the actions and unlock the download</h5>

<a style="font-size:18px;" class = "btn btn-danger btn-lg fa fa-youtube-play" href="https://www.youtube.com/channel/UCK8sQmJBp8GCxrOtXWBpyEA?sub_confirmation=1" target ="_blank" type='button' id = 'rbutton_1' onclick="enabled()"> Subscribe on Youtube</a>
<button style="font-size:18px;"  hidden id="youtubebtn" class="btn btn-danger btn-lg fa fa-youtube-play" type="submit" disabled>
  <span role="status" aria-hidden="true"></span>
 Subscribe on Youtube
</button>

<!-- <button class = "btn btn-primary" type='button' id = 'download' disabled >Unlock Download link</button> -->
<h5 id="loadprogress">unlock progress 0/1</h5>
<h5 hidden id="loadprogressfull">unlock progress 1/1</h5>
<form action=" {!! action('DownloadController@downloadFile',$id) !!}" method="POST" enctype="multipart/form-data" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<button  id="download" class="btn btn-primary btn-lg" type="submit" disabled>
  <span role="status" aria-hidden="true"></span>
 Unlock Download
</button>
<button hidden   id="loading" class="btn btn-primary btn-lg" type="button" disabled>
  <span class="spinner-border spinner-border-lg" role="status" aria-hidden="true"></span>
 Loading...
</button>

  <!--   <input type="submit" id = 'download' name="submit" disabled value="Unlock Download" class="btn btn-primary btn-lg "> -->
    <br>    <br>    
</form>

<html>
<hr>
<footer>
        <center><p><i class="fa fa-copyright" aria-hidden="true"></i> UnlockDownloadsByYouTubeSubscribers 2022</p></center>
</footer>
</html>