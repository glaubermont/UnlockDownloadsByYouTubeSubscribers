

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="jquery.js"/>
<script src="js/jquery.min.js"/>




<script>

 $(document).ready(function () {
    $('.nav li a').click(function(e) {

        $('.nav li.active').removeClass('active');

        var $parent = $(this).parent();
        $parent.addClass('active');
        e.preventDefault();
    });
});

</script>
<script>
      var userLang = navigator.language || navigator.userLanguage;
</script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

<html lang ="en" >

   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
   <script src="js/angular-translate.min.js"></script>
      <script src="js/bootstrap-select.min.js"></script>
<script src="js/tradutor-indiano.js"></script>
    <script src="js/angular-translate.js"></script>
    <script src="js/main.js"></script>

<?php 

          $home = ' Home';

?>

 <nav class="navbar navbar-default">
  <div class="container-fluid">
 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>
     <a class="navbar-brand fa fa-unlock" href="files"><a class="navbar-brand" href="files"> <p>&nbsp&nbspUnlockDownloadsByYouTubeSubscribers </p></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         
        <li  ><a  href="files" class= "lang" key="home" ><i class="fa fa-home" aria-hidden="true"></i><?php echo $home; ?><span class="sr-only">(current)</span></a></li>

    </div>
  </div>
</nav>

</html>


