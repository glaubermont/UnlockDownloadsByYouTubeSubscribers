
<?php 
// using pure php: 
include "topbar.php" ; 
 
	$filename = ' Filename';
	$description = 'Description';
	$category = 'Category';
	$texttitle= ' Unlock Downloads By YouTube Subscribers';

?>


<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="jquery.js"/>
<script src="jquery.translate.js"/>

function AlertSave() {
   alert("Alert Message OnClick");
}

</script>  
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script>


 (function($){var pl=/\+/g,searchStrict=/([^&=]+)=+([^&]*)/g,searchTolerant=/([^&=]+)=?([^&]*)/g,decode=function(s){return decodeURIComponent(s.replace(pl," "));};$.parseQuery=function(query,options){var match,o={},opts=options||{},search=opts.tolerant?searchTolerant:searchStrict;if('?'===query.substring(0,1)){query=query.substring(1);}while(match=search.exec(query)){o[decode(match[1])]=decode(match[2]);}return o;};$.getQuery=function(options){return $.parseQuery(window.location.search,options);};$.fn.parseQuery=function(options){return $.parseQuery($(this).serialize(),options);};}(jQuery));


$(document).ready(function(){
	
// BOOTSTRAP 3.0 - Open YouTube Video Dynamicaly in Modal Window
// Modal Window for dynamically opening videos
$('a[href^="https://www.youtube.com"]').on('click', function(e){
  // Store the query string variables and values
	// Uses "jQuery Query Parser" plugin, to allow for various URL formats (could have extra parameters)
	var queryString = $(this).attr('href').slice( $(this).attr('href').indexOf('?') + 1);
	var queryVars = $.parseQuery( queryString );
 
	// if GET variable "v" exists. This is the Youtube Video ID
	if ( 'v' in queryVars )
	{
		// Prevent opening of external page
		e.preventDefault();
 
		// Variables for iFrame code. Width and height from data attributes, else use default.
		var vidWidth = window.innerWidth; // default
		
		
		if (vidWidth > 578) {
	    var vidWidth = 560; // default
		var vidHeight = 300;
	    } else if((vidWidth > 320) && (vidWidth < 578)) {
	    var vidWidth = 300; // default
		var vidHeight = 180;
	    } else if (vidWidth < 321) {
	    var vidWidth = 250; // default
		var vidHeight = 180;
		}
		if ( $(this).attr('data-width') ) { vidWidth = parseInt($(this).attr('data-width')); }
		if ( $(this).attr('data-height') ) { vidHeight =  parseInt($(this).attr('data-height')); }
		var iFrameCode = '<iframe align="center" width="' + vidWidth + '" height="'+ vidHeight +'" scrolling="no" allowtransparency="true" allowfullscreen="true" src="https://www.youtube.com/embed/'+  queryVars['v'] +'?rel=0&wmode=transparent&showinfo=0" frameborder="0"></iframe>';
 
		// Replace Modal HTML with iFrame Embed
		$('#mediaModal .modal-body').html(iFrameCode);
		// Set new width of modal window, based on dynamic video content
		$('#mediaModal').on('show.bs.modal', function () {
			// Add video width to left and right padding, to get new width of modal window
			var modalBody = $(this).find('.modal-body');
			var modalDialog = $(this).find('.modal-dialog');
			var newModalWidth = vidWidth + parseInt(modalBody.css("padding-left")) + parseInt(modalBody.css("padding-right"));
			newModalWidth += parseInt(modalDialog.css("padding-left")) + parseInt(modalDialog.css("padding-right"));
			newModalWidth += 'px';
			// Set width of modal (Bootstrap 3.0)
		    $(this).find('.modal-dialog').css('width', newModalWidth);
		});
 
		// Open Modal
		$('#mediaModal').modal();
	}

	
	$("#mediaModal").on('hidden.bs.modal', function (e) {
    $("#mediaModal iframe").attr("src", $("#mediaModal iframe").attr("src"));
});
});

}); 



</script>



<style>
@media (max-width: 767px) {

.desktopad { display: none; }
}

@media (min-width: 767px) {

.mobilead { display: none; }
}
/*.buttons { position: relative; margin:0 auto 20px auto; padding:20px; float:left; display:block; background-color:#eee; border-radius:4px; }*/
/*		.buttons:after { top: 100%; left: 50%; border: solid transparent; content: " "; height: 0; width: 0; position: absolute; pointer-events: none; border-color: rgba(238, 238, 238, 0); border-top-color: #eee; border-width: 10px; margin-left: -10px; }*/
/*		.button { padding:10px 20px; font-weight:bold; letter-spacing:5px; outline:none; cursor:pointer; color:white; background-color:#7F8C8D; border:none; border-radius:4px; }*/
/*		#play-button { background-color:#2ECC71; }*/
/*		#play-button:hover { background-color:#27AE60; }*/
/*		#pause-button { background-color:#E67E22; }*/
/*		#pause-button:hover { background-color:#D35400; }*/
/*		#stop-button { background-color:#E74C3C; }*/
/*		#stop-button:hover { background-color:#C0392B; }*/
/*		#pause-button, #stop-button { margin-left:15px; }*/
/*		iframe { margin:0 auto; width:560px; height:315px; float:left; clear:both; display:block; background-color:#eee; }*/
@keyframes fa-blink {
     0% { opacity: 1; }
     50% { opacity: 0.5; }
     100% { opacity: 0; }
 }
.fa-blink {
   -webkit-animation: fa-blink .75s linear infinite;
   -moz-animation: fa-blink .75s linear infinite;
   -ms-animation: fa-blink .75s linear infinite;
   -o-animation: fa-blink .75s linear infinite;
   animation: fa-blink .75s linear infinite;
}

</style>


<!DOCTYPE html>  
 <html lang ="en">  
      <head>  
	
           <title>GuitarPreset</title>  
                       <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	   
         
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

		    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
			<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
			<link rel="manifest" href="/site.webmanifest">
			<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
      </head>  
      <body> 
 
           <div class="container"> 
         
                <h1 style="font-size: 70px;" class= "fa fa-unlock" key="btfamous" align="center"><?php echo $texttitle; ?></h1>  
				<!-- <center><p><img src="resources/images/new_preset.png" /> Audioslave - Be yourself - solo auto wah wah -  guitar rig 5 tone preset    - date: 05/23/2021</p></center>
				<center><p><img src="resources/images/new_preset.png" /> Radiohead - creep - base clean chorus guitar rig 5 tone  preset    - date: 05/26/2021</p></center>
				<center><p><img src="resources/images/new_preset.png" /> Radiohead - creep - distortion guitar rig 5 tone  preset       - date: 05/26/2021</p></center> -->
				<div id="ytbutton">
    <script src="https://apis.google.com/js/platform.js"></script>
    <div class="g-ytsubscribe" data-channelid="UCK8sQmJBp8GCxrOtXWBpyEA" data-layout="full" data-count="default"></div>
</div>
				<br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead >  
                               <tr>  
                                    <td><?php echo $filename; ?></td>  
                                    <td><?php echo $description; ?></td>  
                      
									<td><?php echo $category; ?></td> 
                                   <td>Download</td>

                     
                               </tr> 
													   
                          </thead> 
<script>

// global variable for the player
	var player;

	// this function gets called when API is ready to use
	function onYouTubePlayerAPIReady() {
	  // create the global player from the specific iframe (#video)
	  player = new YT.Player('video', {
	    events: {
	      // call this function when player is ready to use
	      'onReady': onPlayerReady
	    }
	  });
	}



	// Inject YouTube API script
	var tag = document.createElement('script');
	tag.src = "https://www.youtube.com/player_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

</script>						  
                          <?php  
						 $file = 0;
                         foreach ($files as $file) {
              
			
                           $path_download= $file->presetguitar;
				
						
					          if  ($file->approved == 1) :
							  
                               echo '  
                                <tr>  
                                    <td>'.$file->name.'</td>  
                                    <td>'.$file->description.'</td>

                                       <td>'.$file->category.'</td>
										
										
                                       <td>
									   <center>
								
									<a title="If download is not working for you: Please try disabling Adblock
									" target="_blank" href='.$path_download.'>
									
<i class="fa fa-download" style="font-size:36px; aria-hidden="true"></i><h5 >FREE</h5></a>
										</center>
									   
						                
					                  </td>
                                 
                                     
                                </tr>    
                                 
                                  ';   

								endif;

							} 		
														
                          ?>  
						  
						  
						  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 $('#myTable').DataTable( {
    responsive: true
} );

 </script> 


<?php include "footer.php" ; ?>

</html>


