
/*
	var c = document.getElementById("canva");
	var ctx = c.getContext("2d");

	c.width  = window.innerWidth;
	c.height = window.innerHeight;


	






		var bollx=[false,false,false,false,false,false];
		var bolly=[false,false,false,false,false,false];	
		var x=[1500,20,10,30,800,700];
		var y=[20,800,10,1200,1000,80];
		var h=[30,40,70,50,36,70,10,78,70];
		var w=[30,40,70,50,36,70];
		var i;

		 setInterval(function() {
			
			ctx.clearRect(0, 0, c.width, c.height);			

			

		
			function an (i,type) {
				if(x[i]<c.width && bollx[i]==false){
				x[i]+=1;
			}else {
					x[i]-=1;	
					};

			if(y[i]<c.height && bolly[i] == false){
				y[i]+=1;
			}else {
						y[i]-=1;
					};


			if (x[i]==0 ){
				bollx[i]=false;
			};

			if (y[i]==0 ){
				bolly[i]=false;
			};

			if (x[i]==c.width){
				bollx[i]=true;
			};

			if (y[i]==c.height){
				bolly[i]=true;
			};


			switch (type)
			{
				case "rect":
					ctx.strokeStyle="#138479";
					ctx.strokeRect(x[i],y[i], h[i], w[i]);
					break;
				case "smal":

					ctx.beginPath();
				    ctx.arc(x[i],y[i], 30, 0, 2 * Math.PI, false);
				    ctx.stroke();
				    ctx.beginPath();
				    ctx.arc(x[i]-10,y[i]-10, 5, 0, 2 * Math.PI, false);
				    ctx.arc(x[i]+10,y[i]-10, 5, 0, 2 * Math.PI, false);
				    ctx.fillStyle = '#138479';
  					ctx.fill();
					ctx.beginPath();
				    ctx.arc(x[i],y[i], 20, 0, Math.PI, false);
				    ctx.stroke();

					break;

				default:

			}


			};

			
		an(0,"rect");
		an(1,"rect");
		an(2,"smal");
		/*an(3);
		an(4);
		an(5);
		an(6);*/
			
	

		//},30);

									// jusqua ici






	











		 var game = new Phaser.Game(window.innerWidth,window.innerHeight(90), Phaser.CANVAS, 'phaser-example', { preload: preload, create: create });

			function preload() {

			    //game.load.image('ball', 'assets/sprites/shinyball.png');
			    //game.load.image('sky', 'assets/skies/sunset.png');

			}

			var sprite1;
			var char;

			function create() {

			    //game.add.image(0, 0, 'sky');

			    //  Enable p2 physics
			    game.physics.startSystem(Phaser.Physics.P2JS);

			    game.physics.p2.gravity.y = 200;

			   	var spriteMaterial = game.physics.p2.createMaterial('spriteMaterial');
			    var worldMaterial = game.physics.p2.createMaterial('worldMaterial');
			    var contactMaterial = game.physics.p2.createContactMaterial(spriteMaterial, worldMaterial, { restitution: 1.0 });

			    game.physics.p2.setWorldMaterial(worldMaterial);
			    

			    	 sprite1 = game.add.text(200,300,'R',{ font: "65px Arial", fill: "#ffff00" });
			    	 sprite2 = game.add.text(250,300,'E',{ font: "65px Arial", fill: "#ffff00" });
			    	sprite3 = game.add.text(300,300,'D',{ font: "65px Arial", fill: "#ffff00" });
			    	 sprite4 = game.add.text(350,300,'A',{ font: "65px Arial", fill: "#ffff00" });

			    //  Enable for physics. This creates a default rectangular body.
			    game.physics.p2.enable([ sprite1,sprite2,sprite3,sprite4 ]);

			   sprite1.body.setMaterial(spriteMaterial);
			   sprite2.body.setMaterial(spriteMaterial);
			   sprite3.body.setMaterial(spriteMaterial);
			   sprite4.body.setMaterial(spriteMaterial);
			   

			    //  Adjust the gravity scale
			    //  At the moment you need to apply this to the body.data property, but this will change to just body as well in the future

			    sprite1.body.data.gravityScale = 0.7;
			    sprite2.body.data.gravityScale = 0.6;
			    sprite3.body.data.gravityScale = 0.8;
			    sprite4.body.data.gravityScale = 0.5;
			

			}






















			

	/*	  function  drawScreen () {

			      ball.y = circle.centerY + Math.sin(circle.angle) * circle.radius;
	     ctx.fillStyle = '#EEEEEE';
		      ctx.fillRect(0, 0, c.width, c.height);
		      //Box
		      ctx.strokeStyle = '#000000';
		      ctx.strokeRect(1,  1, c.width-2, c.height-2);

		      ball.x = circle.centerX + Math.cos(circle.angle) * circle.radius;

		      circle.angle += ball.speed;

		      
				ctx.beginPath();
		      ctx.arc(ball.x,ball.y,15,0,Math.PI*2,true);
		      ctx.fillStyle = "#fff";
		      ctx.closePath();
		      ctx.fill();

		   }

		   var radius = 100;
		   var circle = {centerX:250, centerY:250, radius:360, angle:0}
		   var ball = {x:0, y:0,speed:.02};

		  

		   setInterval(drawScreen, 33);*/

		











		



		

		
		/*ctx.fllStyle = "#fff";
		ctx.font = "50px 'Roboto',sans-serif";
		ctx.fillText("​‌EL MOUSSALLY REDA",50,150);*/
		
/*

		 		var radius = 100;
		   		var circle = {centerX:20, centerY:300, radius:180, angle:2}
		   		var ball = {x:600, y:600,speed:.003};
		   		var word="A";


		   		var circleangle=[2,2,2,2,2,2,2,2];


				function  drawcircle (z,j,sp,word,speed,direction,c) {
			 	circle.radius=sp
		 		circle.centerX=z
		 		circle.centerY=j	
		      	ball.x = circle.centerX + Math.cos(circleangle[c]) * circle.radius;
 				ball.y = circle.centerY + Math.sin(circleangle[c]) * circle.radius;
 				if(direction=="r"){
 					circleangle[c] -= speed; //ball.speed;
 				}else{
 					circleangle[c] += speed; //ball.speed;
 				}
 		   		 /* ctx.beginPath();
			      ctx.arc(ball.x,ball.y,20,0,Math.PI*2,true);
			      ctx.fillStyle = "#999";
			      ctx.closePath();
			      ctx.fill();*/ 
/*			    ctx.fillStyle = "#fff";
			    ctx.font = "50px 'Roboto',sans-serif";
				ctx.fillText(word,ball.x,ball.y);
		   }



		setInterval(function() {
			ctx.clearRect(0, 0, c.width, c.height);
			
		 	 drawcircle(200,300,300,"E",0.003,"r",0);
		 	 drawcircle(200,200,300,"L",0.003,"-",1);
		 	 drawcircle(150,400,300,"M",0.003,"r",2);
		 	 drawcircle(400,250,300,"O",0.003,"-",3);
		 	 drawcircle(300,400,300,"U",0.003,"r",4);

		  	  /*drawcircle(600,500,60);
				drawcircle(600,50,120);
		  	  drawcircle(600,50,240);
				drawcircle(600,50,360);
		  	  drawcircle(600,50,480);

		  	   drawcircle(600,500,120);
		  	    drawcircle(600,500,180);*/

//		},30)

		

		

		  

















		/*  var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create });

			function preload() {

			    //game.load.image('ball', 'assets/sprites/shinyball.png');
			    //game.load.image('sky', 'assets/skies/sunset.png');

			}

			var sprite1;
			var sprite2;
			var sprite3;

			function create() {

			    //game.add.image(0, 0, 'sky');

			    //  Enable p2 physics
			    game.physics.startSystem(Phaser.Physics.P2JS);

			    game.physics.p2.gravity.y = 300;

			    var spriteMaterial = game.physics.p2.createMaterial('spriteMaterial');
			    var worldMaterial = game.physics.p2.createMaterial('worldMaterial');
			    var contactMaterial = game.physics.p2.createContactMaterial(spriteMaterial, worldMaterial, { restitution: 1.0 });

			    game.physics.p2.setWorldMaterial(worldMaterial);

			    sprite1 = game.add.bitmapText(200,400,"ali",64);
			    

			    //  Enable for physics. This creates a default rectangular body.
			    game.physics.p2.enable([ sprite1, sprite2, sprite3 ]);

			    sprite1.body.setMaterial(spriteMaterial);
			    sprite2.body.setMaterial(spriteMaterial);
			    sprite3.body.setMaterial(spriteMaterial);

			    //  Adjust the gravity scale
			    //  At the moment you need to apply this to the body.data property, but this will change to just body as well in the future

			    sprite1.body.data.gravityScale = 1;
			    sprite2.body.data.gravityScale = 0.5;
			    sprite3.body.data.gravityScale = 0.25;

			}*/

		   






















		
		
	


	



/*achkal-------------------

	ctx.beginPath();
	ctx.arc(100,100,40,0,2*Math.PI);
	ctx.stroke();
	
	ctx.fillStyle = "#fff";
	ctx.font = "50px Arial";
	ctx.fillText("R",10,50);
	
	ctx.beginPath();
    ctx.moveTo(125,125);
    ctx.lineTo(125,45);
    ctx.lineTo(45,125);
    ctx.closePath();
    ctx.stroke();
	
---------------------------*/
