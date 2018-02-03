<?php 
include 'controller.php';
?>

<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
	<title>RedaELmoussaLLY</title>
	<link rel="icon" href="icon.gif" type="image/gif" sizes="32x32">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- font google-->
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
  	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<!--design css -->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/Design css.css'); ?>">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  	<link rel="stylesheet" type="text/css" href="css/preload_css.css">


  	<!--script -->
  	<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
  	<script src="js/circle-progress.min.js" type="text/javascript"></script>
  	<script src="js/slidr.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script type="text/javascript" src="js/phaser.min.js"></script> 
  	<script src="js/test-canvas.js" type="text/javascript" charset="utf-8" async defer></script>


</head>


<body style="overflow: hidden;">



<div class="sk-cube-grid">
  <div class="sk-cube sk-cube1"></div>
  <div class="sk-cube sk-cube2"></div>
  <div class="sk-cube sk-cube3"></div>
  <div class="sk-cube sk-cube4"></div>
  <div class="sk-cube sk-cube5"></div>
  <div class="sk-cube sk-cube6"></div>
  <div class="sk-cube sk-cube7"></div>
  <div class="sk-cube sk-cube8"></div>
  <div class="sk-cube sk-cube9"></div>
</div>


<div id="load" style="display: none;">
	



		


     
      <nav id="navig">
        <a href="#home" id="a-home"><i class="tiny material-icons icon">home</i>Accueil</a>
		<a  href="#about_me" id="a-about_me"><i class="tiny material-icons icon">person</i>Profil</a>
		<a href="#contact_me" id="a-contact_me"><i class="tiny material-icons icon">email</i> Contacter moi</a>
		<a href="#follow_me" id="a-follow_me"><i class="tiny material-icons icon">share</i>Suivez moi</a>
        <a href=""><i class="tiny material-icons icon">file_download</i>Telecharger le cv</a>
      </nav> 
      


      





	

	<div id="home">
    	<canvas id="canva"></canvas>
    </div>



<div id="about_me">

	<div id="slidr-div" style="display: block;" >

	    	<div  class="niveau z-depth-2" data-slidr="one">
	    		 <h2 style="font-family:'Dancing Script', cursive;">Reda Elmoussally - Developpeur informatique</h2>
	      		<p><b>À propos de moi</b>
	      			<br>
	      			Il est toujours difficile de se présenter soi même donc je vais faire simple.
	      			Je mets mes compétences au service de vos projets. je suis à l'affût de chaque nouveauté et des dernières tendances.
	      			<br>
	      			Développeur d'application, je réalise vos projets en plusieurs langage, 
	      		 </p>
	    	</div>
	    	
    		<div class="row niveau z-depth-2" data-slidr="two">
	    		<h2>Développement Web</h2>
	    		<div class="circle col s4" id="a" data-value="0.80" data-size="130" data-thickness="11" data-aos="fade-zoom-in">
	    			<strong></strong>
	    			<span>HTML5/CSS3/Canvas</span>
	    		</div>
	    		<div class="circle col s4" id="b" data-value="0.75" data-size="130" data-thickness="11">
	    			<strong></strong>
	    			<span>JavaScript/Jquery/Ajax</span>
	    		</div>
	    		<div class="circle col s4" id="c" data-value="0.55" data-size="130" data-thickness="11">
	    			<strong></strong>
	    			<span>PHP</span>
	    		</div>
	    		<div class="circle col s4" id="d" data-value="0.70" data-size="130" data-thickness="11">
	    			<strong></strong>
	    			<span>SQL/MySQL</span>
	    		</div>
    		</div>
    		<div class="row niveau z-depth-2" data-slidr="three">
    			<h2>Développement logiciels</h2>
	    		<div class="circle col s4" id="e" data-value="0.80" data-size="130" data-thickness="12"><strong></strong><span class="col">Java / JavaFX</span></div>
	    		<div class="circle col s4"  id="f" data-value="0.90" data-size="130" data-thickness="12"><strong></strong><span class="col">VB.NET / C#</span></div>
	    		<div class="circle col s4" id="g" data-value="0.70" data-size="130" data-thickness="12"><strong></strong><span class="col">SGBD: Oracle / SqlServer</span></div>
    		</div>
    </div>
</div>

	










    <div id="contact_me">
		<form class="row z-depth-5" id="formValidate" method="post" action="controller.php?action=add">
		      <div class="row">
		     	   <div class="input-field col s11">
		            <i class="material-icons prefix">account_circle</i>
		            <input id="icon_prefix" type="text" class="validate" name="nom">
		            <label for="icon_prefix">Nom</label>
		           </div>
		      </div>
		          <div class="row">
		          	<div class="input-field col s11">
		            <i class="material-icons prefix">phone</i>
		            <input id="icon_telephone" type="tel" class="validate" name="phone">
		            <label for="icon_telephone" for="tel" data-error="wrong" data-success="right">Telephone</label>
		          	</div>
		          </div> 
		      <div class="row">
		         <div class="input-field col s11">
                 <i class="material-icons prefix">email</i>
                 <input id="icon_prefix" type="email" class="validate" name="email">
                 <label for="icon_prefix2" for="email" class="" data-error="wrong" data-success="right">Email</label>
                 </div>
		      </div>
		      <div class="row">
		      	<div class="input-field col s11">
                <i class="material-icons prefix">mode_edit</i>
                <textarea id="icon_prefix2" class="materialize-textarea" length="300" style="height: 20px;" name="message"></textarea>
                <label for="icon_prefix2" class="">Message</label>
              	</div>
		      </div>
		      <button class="btn waves-effect waves-light" type="submit">Envoyer
			    <i class="material-icons right">send</i>
			  </button>
		</form> 
    </div>




    <div id="follow_me">

    
	    
    </div>


    
    

    



          
          
        





<script type="text/javascript">




 
    
 



    
  $(document).ready(function (){


  			// load page
  			$('.sk-cube-grid').show(0).delay(3000).hide(500);
  			$('#load').delay(3500).show(1000);

  			//----------------------------------------------

  				//slider bar
				       slidr.create('slidr-div', {
						  after: function(e) { console.log('in: ' + e.in.slidr); },
						  before: function(e) { console.log('out: ' + e.out.slidr); },
						  breadcrumbs: true,
						  controls: 'none',
						  direction: 'horizontal',
						  fade: true,
						  keyboard: true,
						  overflow: true,
						  theme: '#26a69a',
						  timing: { 'cube': '0.9s ease-in' },
						  touch: true,
						  transition: 'cube'
						}).start();
			// -------------------------------------------------


				//scroll button 
			function scrol (buton) {
				$(function() {
		$(buton).bind('click',function(event){
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollLeft: $($anchor.attr('href')).offset().left
		}, 1000);

		event.preventDefault();
			});
		});
			};


		scrol('#a-about_me');	
		scrol('#a-contact_me');
		scrol('#a-follow_me');
		scrol('#a-home');

		// --------------------------------------------------------------


		//$('.slidr-breadcrumbs li.normal').click(function(event) {

							/*	function circlePro() {
									$('.circle').circleProgress({
							    animation: {
							    duration: 2000
							     }

							  }).on('circle-animation-progress', function(event, progress) {
								    $(this).find('strong').html(parseInt(90 * progress) + '<i>%</i>');
								});
								}
				       				
				       			//});
*/


			// function de circle canvas progress
 			function circlePro(id,nbr) {
			$(id).circleProgress({
							    animation: {
							    duration: 2500
							     },
							   fill: {
								      color: "#ff6d00"
								    }
							     
							  }).on('circle-animation-progress', function(event, progress) {
								    $(this).find('strong').html(parseInt(nbr * progress) + '<i>%</i>');
								});
						}




			  				

				
				  	
  			/*$('.notClicked').click(function()
	{
	    $(this).addClass('active');
	});*/			

		var listItems = $( ".niveau:gt(1)" );
		//alert( "Index: " + $( ".niveau" ).index( listItems ) );
		var item = $( ".normal" ).index( $( ".normal:gt(1)" ) );
		//alert(item);
		$(".normal:gt(0)").addClass('one');
		$(".normal:gt(1)").addClass('two');

		$(".one").one( "click", function() {  
				circlePro('#a',80);
				circlePro('#b',75);
				circlePro('#c',55);
				circlePro('#d',70);
			});
				       			
		$(".two").one( "click", function() {  
				circlePro('#e',80);
				circlePro('#f',75);
				circlePro('#g',55);
				circlePro('#h',70);
			});	    			
			  					
			  			
  					




 			


  				
	





  			
			
				
			
			


		
			


	 

			
     
    
	
      

        
     
        });

  </script>    







<style type="text/css" media="screen">
	

	/*** Maxamed ***/


	/*.slidr-breadcrumbs li.normal{
	    
	    box-shadow: inset 0 0 0 6px #609279;
	    border-radius: 50%;
	    -webkit-transition: -webkit-transform 0.3s, box-shadow 0.3s;
	    transition: transform 0.3s, box-shadow 0.3s;
	}


	.slidr-breadcrumbs li.active{
		-webkit-transform: scale3d(1.75,1.75,1); 
	    transform: scale3d(1.75,1.75,1);
	    box-shadow: inset 0 0 0 1px #609279;
	}






</style>




















</div>

</body>
</html>