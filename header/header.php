<!DOCTYPE HTML>
<html>
<head>
<title>Moodle eLearning Concepted</title>


<link rel="shortcut icon" href="../favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Moodle Concpted Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="https://moodle-elearrning.herokuapp.com/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://moodle-elearrning.herokuapp.com/css/bootstrap-switch.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href="https://moodle-elearrning.herokuapp.com/css/w3.css" rel='stylesheet' type='text/css' />
<link href="https://moodle-elearrning.herokuapp.com/css/style.css" rel='stylesheet' type='text/css' />
<link href="https://moodle-elearrning.herokuapp.com/css/font-awesome.css" rel="stylesheet"> 
<script src="https://moodle-elearrning.herokuapp.com/js/jquery.min.js"> </script>
<script src="https://moodle-elearrning.herokuapp.com/js/jquery.metisMenu.js"></script>
<script src="https://moodle-elearrning.herokuapp.com/js/jquery.slimscroll.min.js"></script>
<link href="https://moodle-elearrning.herokuapp.com/css/custom.css" rel="stylesheet">
<script src="https://moodle-elearrning.herokuapp.com/js/custom.js"></script>
<script src="https://moodle-elearrning.herokuapp.com/js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
			if (!screenfull.enabled) {
				return false;
			}
			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
		});
		</script>
        <style type="text/css">
            
            .btn-ques
            {
                border-radius: 80%!important; background-color: #5bc0de!important; color: #fff!important; border-color: #46b8da!important;
            }
            .btn-ques:hover {
                color: #fff!important;
                background-color: #31b0d5!important;
                border-color: #269abc!important;
            }
        </style>
<script src="https://moodle-elearrning.herokuapp.com/js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>


<div id="mySidenav" class="sidenav">
  <a href="#" id="contact" data-toggle="modal">&nbsp;Contact Us</a>
</div>

<div class="modal fade" id="aaa" role="dialog">
    <div class="modal-dialog" id="news">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title" style="text-align:center;">SIGN UP FOR CONCEPT UPDATES</h2>
        </div>
        <div class="modal-body">
          <p>JOIN US AND SIGN UP FOR CONCEPT UPDATES</p>
          <br>
          <p><button class="w3-button w3-black" onclick="window.open('http://eepurl.com/gpXnCj');">Learn More</button></p>
        </div>

        <!--<div class="modal-footer">
        	<p>*By completing this form you are signing up to receive our emails and can unsubscribe at any time.</p>
        </div>-->
      </div>
      
    </div>
  </div>


<div id="wrapper">


        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.php"><img src="https://moodle-elearrning.herokuapp.com/images/cs.png" class="img-responsive" title="Welcome to Concept Software Systems eLearning"></a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">

            <button type="button" class="btn btn-info btn-ques" id="quest_click" title="Click the Questionnare"><i class="fas fa-clipboard-list" style="margin-left: 0px; margin-right: 0px; margin-bottom: 3px; margin-top: 2px;"></i></button>

        	  
			<!-- <a class='flags' href='index.php?lang=pt' title='PT'><img src ='images/pt.png' style='width:35px;'></a>
			           <a class='flags2' href='index.php?lang=en'  title='EN-US'><img src ='images/en.png' style='width:35px;'></a> -->


            


            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
		           <!-- Idiomas -->


			           

		           <!-- //Idiomas -->


		    		
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><font id="logged_username_name"><?php echo $_COOKIE["username"] ?></font><i class="caret"></i></span><img src="https://moodle-elearrning.herokuapp.com/images/users/<?php echo $_COOKIE['logotipo'] ?>" id="logged_username_img"></a>
		              <ul class="dropdown-menu" id="menu_drop" role="menu">
		                <li class="info_dashobaord"><a href="https://moodle-elearrning.herokuapp.com/dashboard.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
		                <li><a href="https://moodle-elearrning.herokuapp.com/profile.php"><i class="fa fa-user"></i>Edit Profile</a></li>
		                <li><a href="https://moodle-elearrning.herokuapp.com/grades.php"><i class="fa fa-th"></i>Grades</a></li>
		                <li><a href="https://moodle-elearrning.herokuapp.com/definitions.php"><i class="fa fa-cog"></i>Definitions</a></li>
		                <li class="logout"><a href="https://moodle-elearrning.herokuapp.com/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
		              </ul>
		            </li>
		           
		        </ul>
		     </div><!-- /.navbar-collapse -->

        <input type="hidden" id="logged_perfil_dep_user" value="<?php echo $_COOKIE['departament'] ?>">
        <input type="hidden" id="logged_perfil_email_user" value="<?php echo $_COOKIE['email'] ?>">
        <input type="hidden" id="logged_perfil_hab_user" value="<?php echo $_COOKIE['skills'] ?>">
        <input type="hidden" id="logged_perfil_pais_user" value="<?php echo $_COOKIE['country'] ?>">
        <input type="hidden" id="tipo_utilizador_perfil_usr" value="<?php echo $_COOKIE['privilegios'] ?>">
        <input type="hidden" id="pri_utilizador_perfil_usr" value="<?php echo $_COOKIE['access'] ?>">
        <input type="hidden" id="user_id_logged" value="<?php echo $_COOKIE['id'] ?>">  


			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-home nav_icon"></i> <span class="nav-label">Home</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <?php if ($_COOKIE['home_dashboard'] == 'checked') { ?>
                                <li><a href="https://moodle-elearrning.herokuapp.com/dashboard.php" class=" hvr-bounce-to-right"> <i class="fas fa-tachometer-alt nav_icon"></i>Dashboard</a></li>
                            <?php } ?>

                            <?php if ($_COOKIE['home_site_pages'] == 'checked') { ?>
                            	<li><a href="#" class="hvr-bounce-to-right"><i class="fas fa-globe-europe nav_icon"></i> <span class="nav-label">Site Pages</span><span class="fa arrow"></span></a>
                            

	                            <ul class="nav nav-second-level">


                                <?php if ($_COOKIE['home_site_pages_site_blogs'] == 'checked') { ?>
	                            	<li><a href="https://moodle-elearrning.herokuapp.com/site-blogs.php" class=" hvr-bounce-to-right"><i class="fab fa-blogger nav_icon"></i>Site Blogs</a></li>
                                <?php } ?>


                                <?php if ($_COOKIE['home_site_pages_site_badges'] == 'checked') { ?>
	                            	<li><a href="https://moodle-elearrning.herokuapp.com/site-badges.php" class=" hvr-bounce-to-right"><i class="fas fa-id-badge nav_icon"></i>Site Badges</a></li>
                                <?php } ?>

                                <?php if ($_COOKIE['home_site_pages_calendar'] == 'checked') { ?>
	                            	<li><a href="https://moodle-elearrning.herokuapp.com/calendar.php" class=" hvr-bounce-to-right"><i class="fa fa-calendar nav_icon"></i>Calendar</a></li>
                                <?php } ?>

                                <?php if ($_COOKIE['home_site_pages_site_news'] == 'checked') { ?>
	                            	<li><a href="https://moodle-elearrning.herokuapp.com/site-news.php" class=" hvr-bounce-to-right"><i class="far fa-newspaper nav_icon"></i>Site News</a></li>
                                <?php } ?>



	                            </ul>
                        	</li>
                            <?php } ?>
			
                            <?php if ($_COOKIE['home_site_pages_main_activities'] == 'checked') { ?>



							<!--<li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list-alt nav_icon"></i> <span class="nav-label">Main Activities</span><span class="fa arrow"></span></a>

							<ul class="nav nav-second-level">

                                <?php if ($_COOKIE['home_site_pages_main_activities_spa'] == 'checked') { ?>


								<li><a href="#" class=" hvr-bounce-to-right"><i class="fas fa-spa nav_icon"></i><span class="nav-label">SPA & LEISURE</span><span class="fa arrow"></span></a>

									<ul class="nav nav-second-level">
										<li><a href="spa/spa-geral.php" class=" hvr-bounce-to-right"><i class="far fa-file-alt nav_icon"></i>Overview</a></li>
                        				<li><a href="spa/spa-badges.php" class=" hvr-bounce-to-right"><i class="fas fa-id-card-alt nav_icon"></i>Badges</a></li>
                        				<li><a href="spa/spa-comp.php" class=" hvr-bounce-to-right"><i class="fas fa-concierge-bell nav_icon"></i>Competencies</a></li>
                        				<li><a href="spa/spa-grades.php" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i>Grades</a></li>
                        			</ul>


								</li>

                                <?php } ?>




                                <?php if ($_COOKIE['home_site_pages_main_activities_pos'] == 'checked') { ?>

								<li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-credit-card nav_icon"></i><span class="nav-label">Point of Sale Solutions</span><span class="fa arrow"></span></a>


									<ul class="nav nav-second-level">
										<li><a href="pos/pos-geral.php" class=" hvr-bounce-to-right"><i class="far fa-file-alt nav_icon"></i>Overview</a></li>
                        				<li><a href="pos/pos-badges.php" class=" hvr-bounce-to-right"><i class="fas fa-id-card-alt nav_icon"></i>Badges</a></li>
                        				<li><a href="pos/pos-comp.php" class=" hvr-bounce-to-right"><i class="fas fa-concierge-bell nav_icon"></i>Competencies</a></li>
                        				<li><a href="pos/pos-grades.php" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i>Grades</a></li>
                        			</ul>


								</li>

                                <?php } ?>


                                <?php if ($_COOKIE['home_site_pages_main_activities_marketing'] == 'checked') { ?>

								<li><a href="#" class="hvr-bounce-to-right"><i class="fab fa-markdown nav_icon"></i><span class="nav-label">Member Marketing</span><span class="fa arrow"></span></a>

									<ul class="nav nav-second-level">
										<li><a href="mem/mem-geral.php" class=" hvr-bounce-to-right"><i class="far fa-file-alt nav_icon"></i>Overview</a></li>
                        				<li><a href="mem/mem-badges.php" class=" hvr-bounce-to-right"><i class="fas fa-id-card-alt nav_icon"></i>Badges</a></li>
                        				<li><a href="mem/mem-comp.php" class=" hvr-bounce-to-right"><i class="fas fa-concierge-bell nav_icon"></i>Competencies</a></li>
                        				<li><a href="mem/mem-grades.php" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i>Grades</a></li>
                        			</ul>

								</li>

                                <?php } ?>

                                <?php if ($_COOKIE['home_site_pages_main_activities_inventory'] == 'checked') { ?>

								<li><a href="#" class="hvr-bounce-to-right"><i class="fas fa-warehouse nav_icon"></i><span class="nav-label">Inventory</span><span class="fa arrow"></span></a>

									<ul class="nav nav-second-level">
										<li><a href="inv/inv-geral.php" class=" hvr-bounce-to-right"><i class="far fa-file-alt nav_icon"></i>Overview</a></li>
                        				<li><a href="inv/inv-badges.php" class=" hvr-bounce-to-right"><i class="fas fa-id-card-alt nav_icon"></i>Badges</a></li>
                        				<li><a href="inv/inv-comp.php" class=" hvr-bounce-to-right"><i class="fas fa-concierge-bell nav_icon"></i>Competencies</a></li>
                        				<li><a href="inv/inv-grades.php" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i>Grades</a></li>
                        			</ul>

								</li>


                                <?php } ?>

                                <?php if ($_COOKIE['home_site_pages_main_activities_golf'] == 'checked') { ?>

								<li><a href="#" class="hvr-bounce-to-right"><i class="fas fa-golf-ball nav_icon"></i><span class="nav-label">Golf Management</span><span class="fa arrow"></span></a>

									<ul class="nav nav-second-level">
										<li><a href="golf/golf-geral.php" class=" hvr-bounce-to-right"><i class="far fa-file-alt nav_icon"></i>Overview</a></li>
                        				<li><a href="golf/golf-badges.php" class=" hvr-bounce-to-right"><i class="fas fa-id-card-alt nav_icon"></i>Badges</a></li>
                        				<li><a href="golf/golf-comp.php" class=" hvr-bounce-to-right"><i class="fas fa-concierge-bell nav_icon"></i>Competencies</a></li>
                        				<li><a href="golf/golf-grades.php" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i>Grades</a></li>
                        			</ul>

								</li>

                                <?php } ?>

                                <?php if ($_COOKIE['home_site_pages_main_activities_user_security'] == 'checked') { ?>



								<li><a href="user-security.html" class="hvr-bounce-to-right"><i class="fas fa-lock nav_icon"></i><span class="nav-label">User Security</span><span class="fa arrow"></span></a>

									<ul class="nav nav-second-level">
										<li><a href="#" class=" hvr-bounce-to-right"><i class="far fa-file-alt nav_icon"></i>Overview</a></li>
                        				<li><a href="#" class=" hvr-bounce-to-right"><i class="fas fa-id-card-alt nav_icon"></i>Badges</a></li>
                        				<li><a href="#" class=" hvr-bounce-to-right"><i class="fas fa-concierge-bell nav_icon"></i>Competencies</a></li>
                        				<li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i>Grades</a></li>
                        			</ul>
								</li>
                                <?php } ?>


							</ul>
                    </li>-->

                    <li><a href="https://moodle-elearrning.herokuapp.com/categoria/ver-categories.php" class=" hvr-bounce-to-right"> <i class="fa fa-list-alt nav_icon"></i>Ver Categories</a></li>

                    <li><a href="https://moodle-elearrning.herokuapp.com/grades/view-grades.php" class=" hvr-bounce-to-right"> <i class="fa fa-th nav_icon"></i>Ver Grades</a></li>

                     <li><a href="https://moodle-elearrning.herokuapp.com/chat/index.php" class=" hvr-bounce-to-right"> <i class="fas fa-sms nav_icon"></i>Chat</a></li>


                </ul>
            </li>
                    <?php } ?>
                    <?php if ($_COOKIE['privilegios'] == 'Administrator' ) { ?>
                    <li>
                    	<a href="#" class=" hvr-bounce-to-right"><i class="fas fa-user nav_icon"></i> <span class="nav-label">Administrator</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        	<li><a href="https://moodle-elearrning.herokuapp.com/admin/notifications.php" class=" hvr-bounce-to-right"><i class="fas fa-bell nav_icon"></i>Notifications</a></li>
                        	<li><a href="https://moodle-elearrning.herokuapp.com/admin/register-user.php" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Registry User</a></li>
                        	<li><a href="https://moodle-elearrning.herokuapp.com/admin/adv-features.php" class=" hvr-bounce-to-right"><i class="fas fa-shield-alt nav_icon"></i>Advanced Features</a></li>
                            <li><a href="https://moodle-elearrning.herokuapp.com/admin/lists_users.php" class=" hvr-bounce-to-right"><i class="fas fa-users nav_icon"></i>Users Lists</a></li>


                            <li><a href="#" class="hvr-bounce-to-right"><i class="fas fa-graduation-cap nav_icon"></i><span class="nav-label">Courses / Categories</span><span class="fa arrow"></span></a>

                                    <ul class="nav nav-second-level">
                                  
                                        <li><a href="https://moodle-elearrning.herokuapp.com/cursos/content-cursos.php" class=" hvr-bounce-to-right"><i class="fas fa-tag nav_icon"></i>List Courses </a></li>

                                        <li><a href="https://moodle-elearrning.herokuapp.com/categoria/content-categoria-cursos.php" class=" hvr-bounce-to-right"><i class="fas fa-tags nav_icon"></i>List Categories </a></li>


                                        <li><a href="https://moodle-elearrning.herokuapp.com/categoria/edit-content-categoria-cursos.php" class=" hvr-bounce-to-right"><i class="fas fa-edit nav_icon"></i>Edit Categories </a></li>
                                        
                                    </ul>
                                </li>


                                <li><a href="#" class="hvr-bounce-to-right"><i class="fas fa-th nav_icon"></i> Grades <span class="nav-label"></span><span class="fa arrow"></span></a>

                                    <ul class="nav nav-second-level">


                                        <li><a href="https://moodle-elearrning.herokuapp.com/grades/edit-grades.php" class=" hvr-bounce-to-right"><i class="fas fa-edit nav_icon"></i>Edit Grades </a></li>
                                        
                                    </ul>
                                </li>
                        </ul>
                    </li>

                    <?php } ?>
                    
                
            </div>
			</div>
        </nav>

        <?php include $_SERVER['DOCUMENT_ROOT']. "/modals.php"; ?>




        <div class="modal fade" id="quest_modal" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title"><i class="fas fa-question"></i> Satisfaction Questionnare </h4>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" >
                                     <span class="fas fa-question-circle"></span></span>&nbsp;&nbsp;Satisfaction Questionnare 
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">  
                                    <div class="form-group">
                                          <label for="nome_perg_1"><i class="fas fa-question-circle"></i>&nbsp;&nbsp; 1 - The elearning platform accept all topics desired?</label>
                                           <div class="radio">
                                              <label><input type="radio" name="sel_per_1" id="sel_per_1_1" value="Yes">Yes</label>
                                            </div>
                                            <div class="radio">
                                              <label><input type="radio" name="sel_per_1" id="sel_per_1_2" value="No">No</label>
                                            </div>
                                          <input type="text" class="form-control" id="obs_perg_1" placeholder="Adicione um comentario">
                                    </div>
                            </div>



                            <div class="col-md-12 col-xs-12">  
                                    <div class="form-group">
                                          <label for="nome_perg_1"><i class="fas fa-question-circle"></i>&nbsp;&nbsp; 2 - You considerate the elearning platform as a good channel to learn the concept applications?</label>

                                           <div class="radio">
                                              <label><input type="radio" name="sel_per_2" id="sel_per_2_1" value="Yes">Yes</label>
                                            </div>
                                            <div class="radio">
                                              <label><input type="radio" name="sel_per_2" id="sel_per_2_2" value="No">No</label>
                                            </div>
                                            
                                          <input type="text" class="form-control" id="obs_perg_2" placeholder="Adicione um comentario">


                                    </div>
                            </div>
                                                        

                            <div class="botter2"></div>
                            
                        </div>

                        <div class="botter2"></div>

                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                    <div class="form-group">
                                          <label for="nome_curso"><i class="fas fa-question-circle"></i>&nbsp;&nbsp; 3 - Which improves would you like it?</label>
                                          <textarea class="form-control" rows="5" name="sel_per_2" id="sel_per_3" placeholder="Adicione um contexto"></textarea>
                                    </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <p style='text-align:center; margin:0;'><img src="https://moodle-elearrning.herokuapp.com/images/cs.png" class="logo-nav" style="width:68px;"></p>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancel</font></button>
                        <button title="Guardar as alterações do blogue" type="button" class="btn btn-info" onclick="saveQuest();"> <span class="glyphicon glyphicon-send"></span><font class="hidden-xs"> Send Questionnaire</font></button>
                    </div>
                  </div>
                  
                </div>
              </div>
