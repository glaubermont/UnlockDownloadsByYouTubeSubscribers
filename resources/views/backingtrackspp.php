


<?php include "topbar.php" ; ?>



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



// REQUIRED: "jQuery Query Parser" plugin.
// https://github.com/mattsnider/jquery-plugin-query-parser
// Minified version here:
 (function($){var pl=/\+/g,searchStrict=/([^&=]+)=+([^&]*)/g,searchTolerant=/([^&=]+)=?([^&]*)/g,decode=function(s){return decodeURIComponent(s.replace(pl," "));};$.parseQuery=function(query,options){var match,o={},opts=options||{},search=opts.tolerant?searchTolerant:searchStrict;if('?'===query.substring(0,1)){query=query.substring(1);}while(match=search.exec(query)){o[decode(match[1])]=decode(match[2]);}return o;};$.getQuery=function(options){return $.parseQuery(window.location.search,options);};$.fn.parseQuery=function(options){return $.parseQuery($(this).serialize(),options);};}(jQuery));

// YOUTUBE VIDEO CODE
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
		var iFrameCode = '<iframe width="' + vidWidth + '" height="'+ vidHeight +'" scrolling="no" allowtransparency="true" allowfullscreen="true" src="https://www.youtube.com/embed/'+  queryVars['v'] +'?rel=0&wmode=transparent&showinfo=0" frameborder="0"></iframe>';
 
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
</style>
<!DOCTYPE html>  
 <html lang ="en">  
  
      <head>  
      
           <title>Backing tracks and presets</title>  
                       <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	   
         
         
      </head>  
      <body> 
 
        
           <script src="js/tradutor-indiano.js"></script>  
		   <center>
		   <h4>Help keep the site, thank you! Thanks in advance!</h4>
		   <form action="https://www.paypal.com/donate" method="post" target="_top">
<input type="hidden" name="hosted_button_id" value="4FVMQG3L28LNA" />
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
</form></center>




<?php include "gldp.php" ; ?>

<?php include "footer.php" ; ?>




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</html>


