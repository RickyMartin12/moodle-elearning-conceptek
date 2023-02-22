<?php

session_start();

?>

<!doctype html>
<html lang="pt_PT">
<head>

    <link rel="shortcut icon" href="http://elearning298.conceptsoftware.eu/theme/image.php/more/theme/1520363512/favicon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Moodle Concpted Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <title>Login do Moodle Elearning</title>

    <style type="text/css">
      body {
        margin: 0;
      }

      #showerrors, #password_funcao
{
  z-index: 10000000;
}

      #contact {
    z-index: 100;
    position: absolute;
    width: 100%;
    /* margin: auto; */
    /* float: right; */
    text-align: center;
    left: 50%;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    /* bottom: 5px; */
  }

  .particles-js-canvas-el
  {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0px;
  }

      #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%; 
        min-height: 100%;
        z-index: -1;
      }

      #myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

.content2 {
  position: relative;
  bottom: 0;
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
  z-index: 1;
  margin-top: 100px;
}

#back-color
{
  background: #903a8b;
  width: 100%;
  height: 100%;
  background-image: url('');
  background-size: cover;
  background-position: 50% 50%;
  background-repeat: no-repeat;
}

body, html{
margin: 0;
padding: 0;}

/*Video background tutorial to keep it fixed on the page copy this code into your CSS file */
#myvideo {
 position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
  background-size: cover;
  transition: 1s opacity;
  filter:opacity(60%);
} 


#myvideo:full-screen
{
      position: relative;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 100;
    transform: none;
    background-size: cover;
    transition: 1;
    filter: opacity(100%);
}

#myvideo:full-screen video
{
  position: relative;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 100;
    transform: none;
    background-size: cover;
    transition: 1;
    filter: opacity(100%);
}

#myvideo:-webkit-full-screen {
   position: relative;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 100;
    transform: none;
    background-size: cover;
    transition: 1;
    filter: opacity(100%);
}

#myvideo:fullscreen, #myvideo:-ms-fullscreen,   #myvideo:-moz-full-screen, #myvideo:-webkit-full-screen {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 100;
    transform: none;
    background-size: cover;
    transition: 1;
    filter: opacity(100%);
}


#myvideo:-webkit-full-screen  { 
  position: relative;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 100;
    transform: none;
    background-size: cover;
    transition: 1;
    filter: opacity(100%);
}
#myvideo:-moz-full-screen   { position: relative;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 100;
    transform: none;
    background-size: cover;
    transition: 1;
    filter: opacity(100%);
}
#myvideo:-ms-full-screen    { position: relative;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 100;
    transform: none;
    background-size: cover;
    transition: 1;
    filter: opacity(100%);
}


#myvideo:-o-full-screen   
{ 
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 100;
    transform: none;
    background-size: cover;
    transition: 1;
    filter: opacity(100%);
}
#myvideo:full-screen      
{ 

  position: relative;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 100;
    transform: none;
    background-size: cover;
    transition: 1;
    filter: opacity(100%);
}



h1 {
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-family:Arial, sans-serif;
    font-weight: lighter;
    text-align: center;
    text-transform: uppercase;
    color: black;
}


  #showmob
  {
    display: block;
    margin: auto;
  }

    </style>
</head>


<body id="back-color">

<video autoplay preload="auto" loop="loop" muted="muted" id="myvideo">
  <source src="video/Intro.mp4" type="video/mp4">
</video>

<div class="back">
    <div class="load"></div>
</div>

  <!-- Contact Section -->
<div class="w3-padding-16 w3-content w3-text-black" id="contact">

<div class="w3-row-padding w3-center w3-margin-top">

<div class="w3-col l3 m2 s0">&nbsp;</div>

<div class="w3-col l12 m8 s12 w3-card-2" id="cont" style="background:rgba(255,255,255,0.8);">

<div class="w3-col l12 m12 s12">
    <div class="w3-center w3-padding-16">
    <img class="w3-image logo_insert" style="max-width:130px; vertical-align: text-top;">
    <font style="float: right;"><i class="fas fa-chevron-right" id="aut_user"></i></font>

    <div id="cont_video_full">
    	<button type="button" class="btn btn-primary" onclick="openFullscreen();"><i class="fas fa-file-video"></i> Open Video on Fullscreen</button>
    </div>
</div>

<div id="cont_aut">

<br>


<div class="w3-col l12" style="margin-bottom: -20px; margin-top: -10px;">
    <div class="w3-light-grey" style="height:23px;">
      <div id="myBar" class="w3-container w3-center w3-red" style="height:23px;width:0px;">0%</div>
    </div><br>
</div>

<div class="freeform w3-col l12">
    <span  title="Periodo para validar os dados são 4 minutos, se expirar tem que actualizar a página (tecla F5)" class="w3-center w3-large">User login</span>
    <!--<form class="form-signin">-->
      <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
        
        <div class="w3-row-padding">
        	<div class="w3-col m12">
        		<label class="w3-left"><i class="fa fa-user"></i> Username:</label>
      			<input readonly title="Insira Utilizador" class="w3-input w3-padding-8 w3-border" type="text" id="utilizador" placeholder="Username *" name="utilizador" autofocus>
        	</div>



        	<div class="w3-col m12">
        		<br>
        		<label class="w3-left"><i class="fas fa-lock"></i> Password:</label>
		      	<br>
		      	<div class="input-group" id="show_hide_password_login" style="width:100%;">
					<input readonly title="Insira Password" class="w3-input w3-padding-8 w3-border" type="password" id="password" placeholder="Password *" name="password">
					<div class="input-group-addon"> 
						<a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a> 
					</div>
				</div>

        	</div>



        </div>



    




      
     <div class="w3-row w3-padding-16">
     <div class="w3-col s1">&nbsp;</div>
     <div class="w3-col s4">
        <button id="clean" title="Limpar campos Utilizador e Password " class="w3-button btn w3-sand w3-medium" disabled type="button" style="border-radius: 0px!important;">
           <i class="fa fa-eraser"></i><span class="w3-hide-small"> Clear</span>
        </button>
      </div>

      <div class="w3-col m12 centering">
        <br>
        <button id="for_password" title="Esqueceu a password" class="btn btn-primary" type="button">
           <i class="fa fa-lock"></i> Forgot the Password
        </button>
      </div>

      <button id="myButton" class="w3-button btn w3-center w3-red" disabled type="submit" style="border-radius: 0px!important;">
           0%
      </button>
      </div>     
    <!--</form>-->
  </div>
    </div>
</div>
    </div>
  </div>  

<div class="content2">
  <button id="myBtn" onclick="Video_Button()">Pause</button>
</div>

    <p class="w3-center w3-text-white">
        <?php if (isset($error) && !empty($error)) {echo $error;}?>
    </p>


    </div>

<div id="showerrors" class="w3-modal" style="display: none;">
  <div class="w3-modal-content w3-animate-zoom" style="max-width:600px;">
    <div class="w3-container header w3-amber">
      <span onclick="document.getElementById('showerrors').style.display='none'" class="w3-button w3-display-topright w3-medium">x</span>
      <h3 class="messagehead"></h3>
    </div>
    <div class="w3-container w3-padding-16">
        <p class="messagetxt"></p>
        <p></p>
    </div>
  </div>
</div>

  <div id="password_funcao" class="w3-modal" style="display: none;">
    <div class="w3-modal-content w3-animate-zoom">
      <div class="w3-container header w3-indigo"> 
        <span onclick="document.getElementById('password_funcao').style.display='none'" 
        class="w3-button w3-display-topright">x</span>
        <h2> <i class="fas fa-user-shield"></i> Forgot the User Password</h2>
      </div>
      <div class="w3-container">
        <div class="w3-row-padding">

          <h4>Find by username</h4>
          <br>
          <div class="w3-col m12">
            <label class="w3-left"><i class="fa fa-user"></i> Username:</label>
            <input title="Insert Username" class="w3-input w3-padding-8 w3-border" type="text" id="user_val" placeholder="Username" name="user_val" autofocus>
            <br>
            <br>
          </div>

          <h4>Find by email</h4>
          <br>
          <div class="w3-col m12">
            <label class="w3-left"><i class="fas fa-envelope"></i> Email:</label>
            <input title="Insert Eamil" class="w3-input w3-padding-8 w3-border" type="email" id="email_val" placeholder="Email" name="email_val">
            <br>
            <br>
          </div>



        </div>

      </div>
      <div class="w3-container footer w3-border-top w3-padding-16 w3-indigo">
        <button onclick="document.getElementById('password_funcao').style.display='none'" type="button" class="w3-button w3-red"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancel</font></button>
        <button title="Guardar as alterações do blogue" type="button" class="w3-button w3-blue w3-right" type="button" onclick="FindPassword();"> <span class="glyphicon glyphicon-search"></span><font class="hidden-xs"> Save</font></button>
      </div>
    </div>
  </div>




</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/canvas-video-player.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script>
<!-- scripts -->
<script src="js/particles.js"></script>
<script src="js/app.js"></script>

<!-- stats.js -->
<script>

  var herovide = document.getElementById('myvideo');
       herovide.autoplay=true;
       herovide.load();
       herovide.play();



  var count_particles, stats, update;
  
  count_particles = document.querySelector('.particles-js-canvas-el');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>


<script>

  $("#clean").click(function(e)
  {
    $("#utilizador").val('');
    $("#password").val('');
  });






  var video = document.getElementById("myvideo");
  var btn = document.getElementById("myBtn");

  function Video_Button() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}


  




$(document).ready(function() {
		    $("#show_hide_password_login a").on('click', function(event) {
		        event.preventDefault();
		        if($('#show_hide_password_login input').attr("type") == "text"){
		            $('#show_hide_password_login input').attr('type', 'password');
		            $('#show_hide_password_login i').addClass( "fa-eye-slash" );
		            $('#show_hide_password_login i').removeClass( "fa-eye" );
		        }else if($('#show_hide_password_login input').attr("type") == "password"){
		            $('#show_hide_password_login input').attr('type', 'text');
		            $('#show_hide_password_login i').removeClass( "fa-eye-slash" );
		            $('#show_hide_password_login i').addClass( "fa-eye" );
		        }
		    });

		    // show_hide_password_register_conf


		    

		    
		});

  

  $("#cont").css('display', 'none');

  setTimeout(function(){ $("#cont").css('display', 'block'); $("#cont").addClass('w3-animate-left'); move(); }, 1000);











function move() 
{
   $('.logo_insert').prop('src','images/cs.png');
   $('.logo_insert').addClass('w3-animate-zoom');
      
    
  var elem = document.getElementById("myBar");   
  var button = document.getElementById("myButton");   
  var width = 5;
  var id = setInterval(frame, 200);
  function frame() {

  if (width == 100) {
      clearInterval(id);
      $('#myBar').removeClass('w3-light-green').addClass('w3-green');
      $('#myButton').removeClass('w3-light-green').addClass('w3-green');
      $('.freeform').removeClass('w3-opacity'); 
      $('.w3-button').attr('disabled',false);
      $('.w3-input, .w3-select').attr('readonly',false);
    }
    
     else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
      button.innerHTML = width * 1  + '%';

      if (width >= 70 && width <= 99) {
      $('#myBar').removeClass('w3-lime').addClass('w3-light-green');
      $('#myButton').removeClass('w3-lime').addClass('w3-light-green');
    }

    if (width >= 60 && width <= 69) {
      $('#myBar').removeClass('w3-yellow').addClass('w3-lime');
      $('#myButton').removeClass('w3-yellow').addClass('w3-lime');
    }


    if (width >= 50 && width <= 59) {
      $('#myBar').removeClass('w3-amber').addClass('w3-yellow');
      $('#myButton').removeClass('w3-amber').addClass('w3-yellow');
    }

    if (width >= 40 && width <= 49) {
      $('#myBar').removeClass('w3-orange').addClass('w3-amber');
      $('#myButton').removeClass('w3-orange').addClass('w3-amber');
    }

    if (width >= 30 && width <= 39) {
      $('#myBar').removeClass('w3-red').addClass('w3-orange');
      $('#myButton').removeClass('w3-red').addClass('w3-orange');
    }
      
      if (button.innerHTML == "100%")
      {
        button.innerHTML='<i class="fa fa-check"></i><span class="w3-hide-small"> Submit</span>';
      }

    }
  }
}


		var pos_level2 = 0;

		$("#cont_aut").slideUp();

		$("#aut_user").click(function(e)
		{
			pos_level2++;

			if (pos_level2 % 2 == 1)
			{
				$("#aut_user").addClass('fa-chevron-down');
				$("#aut_user").removeClass('fa-chevron-right');

				$("#cont_video_full").fadeOut( "slow" );
			}
			else
			{
				$("#aut_user").removeClass('fa-chevron-down');
				$("#aut_user").addClass('fa-chevron-right');

				$("#cont_video_full").fadeIn( "slow" );
			}

			$( "#cont_aut" ).slideToggle( "slow" );
		});




		// -- ficheiro


		

$("#myButton").on("click", function(e) 
{

	var utilizador = $("#utilizador").val();
	var password = $("#password").val();


    $('.back').show()
    e.preventDefault();
    datav="utilizador="+utilizador+"&password="+password;
    $.ajax({
        type: "POST",
        url: "request/login.php",
        data: datav,
        cache: false,
        success: function(data) {
          $('.back').fadeOut();
          console.log(data);
          obj = JSON.parse(data);
          if (obj.error){
            var obj2 = document.createElement("audio");
            obj2.src = "Sound/error.mp3";
            
                  obj2.volume = 0.1;
                  obj2.autoPlay = false;
                  obj2.preLoad = true;
                  obj2.controls = true;
                  const playPromise = obj2.play();
                  if (playPromise !== null){
                      playPromise.catch(() => { obj2.play(); })
                  }
            $('#showerrors .header').addClass('w3-amber').removeClass('w3-green w3-red')
            $('#showerrors').css('display','block')
            $('.messagehead').text('Please, verify:')
            $('.messagetxt').html(obj.error)
          }
          else if (obj.success){
            var obj1 = document.createElement("audio");
              obj1.src = "Sound/success.mp3";
              obj1.volume = 0.1;
              obj1.autoPlay = false;
              obj1.preLoad = true;
              obj1.controls = true;
              obj1.play();
            $('#showerrors .header').addClass('w3-green').removeClass('w3-red w3-amber')
            $('#showerrors').css('display','block')
            $('.messagehead').text('Sucesso') 
            $('.messagetxt').html('Bem vindo '+$('#utilizador').val()+', a redireccionar ...');
            setTimeout(function(){
              location.href = "/"+obj.success;
            }, 1500);
          }
        },
        error: function() {
          var obj2 = document.createElement("audio");
          obj2.src = "Sound/error.mp3";
                  obj2.volume = 0.1;
                  obj2.autoPlay = false;
                  obj2.preLoad = true;
                  obj2.controls = true;
                  const playPromise = obj2.play();
                  if (playPromise !== null){
                      playPromise.catch(() => { obj2.play(); })
                  }
           $('.back').fadeOut()
           $('#showerrors .header').addClass('w3-red').removeClass('w3-green w3-amber')
           $('#showerrors').css('display','block')
           $('.messagehead').text('Aviso')
           $('.messagetxt').html('Verify the wifi connection')
        }
    })
});


var pfx = ["webkit", "moz", "ms", "o", ""];
function RunPrefixMethod(obj, method) {
  
  var p = 0, m, t;
  while (p < pfx.length && !obj[m]) {
    m = method;
    if (pfx[p] == "") {
      m = m.substr(0,1).toLowerCase() + m.substr(1);
    }
    m = pfx[p] + m;
    t = typeof obj[m];
    if (t != "undefined") {
      pfx = [pfx[p]];
      return (t == "function" ? obj[m]() : obj[m]);
    }
    p++;
  }

}


var e = document.getElementById("myvideo");

function openFullscreen() {

  if (RunPrefixMethod(document, "FullScreen") || RunPrefixMethod(document, "IsFullScreen")) {
    RunPrefixMethod(document, "CancelFullScreen");
  }
  else {
    RunPrefixMethod(e, "RequestFullScreen");
  }

}


$("#for_password").on('click', function(e)
{

  document.getElementById('password_funcao').style.display='block';


});


function FindPassword()
{
  var username = $("#user_val").val();
  var email = $("#email_val").val();


  datav="username="+username+"&email="+email;
    $.ajax({
        type: "POST",
        url: "request/forgot-password.php",
        data: datav,
        cache: false,
        success: function(data) {
          console.log(data);
          obj = JSON.parse(data);
          console.log(obj);
          if (obj.error)
          {

            $("#password_funcao").css('display','none');
            $('#showerrors .header').addClass('w3-amber').removeClass('w3-green w3-red')
            $('#showerrors').css('display','block')
            $('.messagehead').text('Please, Verify:')
            $('.messagetxt').html(obj.error);
          }
          else if (obj.success == 0){
            $("#password_funcao").css('display','none');
            $('#showerrors .header').addClass('w3-amber').removeClass('w3-green w3-red')
            $('#showerrors').css('display','block')
            $('.messagehead').text('Error while find the username and email');
          }
          else if (obj.success == 1){
            $("#password_funcao").css('display','none');
            $('#showerrors .header').addClass('w3-green').removeClass('w3-red w3-amber')
            $('#showerrors').css('display','block')
            $('.messagehead').text('Sucesso') 
            $('.messagetxt').html('The password was recovery by email/password '+email+' '+username+' was sent successfully.');
          }
        },
        error: function() {
           $("#password_funcao").css('display','none');
           $('#showerrors .header').addClass('w3-red').removeClass('w3-green w3-amber')
           $('#showerrors').css('display','block')
           $('.messagehead').text('Aviso')
           $('.messagetxt').html('Verift the wifi connection')
        }
    });


}

</script>
  
  
  

  

</body>
</html>
