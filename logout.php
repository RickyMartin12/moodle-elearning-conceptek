<style type="text/css">
    .item 
    {
        position: relative;
        float: left;
    }

    .item h2 
    {
        text-align:center;
        position: absolute;
        line-height: 125px;
        width: 100%;
    }

    svg 
    {
       -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .circle_animation {
      stroke-dasharray: 440; /* this value is the pixel circumference of the circle */
      stroke-dashoffset: 440;
      transition: all 1s linear;
    }

</style>


<?php
session_start();


require_once 'connect.php';

/*$id_login_session = $_COOKIE['login_id'];

$sql = "UPDATE sessao_logged SET sessao_logged=0 WHERE login_id=$id_login_session";

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}*/





if (session_destroy()) {
    
    
            setcookie("username", "", 0, "/"); 
            setcookie("id", "", 0, "/");
            setcookie("privilegios", "", 0, "/");
            setcookie("email", "", 0, "/"); 
            setcookie("country", "", 0, "/");
            setcookie("departament", "", 0, "/");
            setcookie("skills", "", 0, "/"); 
            setcookie("logotipo", "", 0, "/");
            setcookie("access", "", 0, "/");
            setcookie("data_login", "", 0, "/");
            setcookie("hora_login", "", 0, "/");

            setcookie("data_criacao", "", 0, "/");
            setcookie("hora_criacao", "", 0, "/");

            setcookie("home_dashboard", "", 0, "/");
            setcookie("home_site_pages", "", 0, "/");
            setcookie("home_site_pages_site_blogs", "", 0, "/");
            setcookie("home_site_pages_site_badges", "", 0, "/");

            setcookie("home_site_pages_calendar", "", 0, "/");
            setcookie("home_site_pages_site_news", "", 0, "/");

            setcookie("home_site_pages_main_activities", "", 0, "/");
            setcookie("home_site_pages", "", 0, "/");
            setcookie("home_site_pages_main_activities_spa", "", 0, "/");
            setcookie("home_site_pages_main_activities_pos", "", 0, "/");

            setcookie("home_site_pages_main_activities_inventory", "", 0, "/");
            setcookie("home_site_pages_site_news", "", 0, "/");

            setcookie("home_site_pages_main_activities_golf", "", 0, "/");
            setcookie("home_site_pages_main_activities_user_security", "", 0, "/");


    echo '
    <html lang="pt-br"> 
    <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="http://elearning298.conceptsoftware.eu/theme/image.php/more/theme/1520363512/favicon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <style>
    #back-color
    {
      background: #903a8b;
      width: 100%;
      height: 100%;
      background-image: url("images/info_news.jpg");
      background-size: cover;
      background-position: 50% 50%;
      background-repeat: no-repeat;
      color: #fff;
    }
    .particles-js-canvas-el
  {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0px;
  }

    </style>
    
    <body id="back-color">
    <hr >
    <h2 style="text-align:center;">Finish the Session!</h2><br><h3 style="text-align:center;">Redirect in <span id="timer"></span> <br></h3>
    
    <p style="text-align:center;">
    </p>


    <div class="item html" style="margin: auto; position: absolute; left: 0; right: 0;">
    <h2 id="tm">10</h2>
    <svg width="160" height="160" xmlns="http://www.w3.org/2000/svg" style="margin: auto; position: absolute; left: 0; right: 0;">
     <g>
      <title>Moodle Logout</title>
      <circle id="circle" class="circle_animation" r="69.85699" cy="81" cx="81" stroke-width="8" stroke="#6fdb6f" fill="none"/>
     </g>
    </svg>

    </div>
    <hr style="position: absolute; width: 100%; top: 80%; bottom: 80%;">
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/canvas-video-player.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript">
    var time = 0;
var initialOffset = "440";
var i = 9;
var redirect = "login.php";
$(".circle_animation").css("stroke-dashoffset", "440");

var interval = setInterval(function() {
        $("#tm").text(i);
        if (i == time) {    
      clearInterval(interval);
      window.location.href = redirect;
            return;
    }
    $(".circle_animation").css("stroke-dashoffset", initialOffset-((time+1)*(initialOffset/i)));
    i--; 
}, 1000);
</script>

<script>
  var count_particles, stats, update;
  
  count_particles = document.querySelector(".particles-js-canvas-el");
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

    ';




}


exit();

?>

