<?php include 'header/header.php'; ?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">
 	
			    <div class="banner">
			   
					<h2>
					<a href="index.php">Home</a>
					<i class="fa fa-angle-right"></i>
					<a href="dashboard.php">Dashboard</a> 
					<i class="fa fa-angle-right"></i>
					<span>Profile</span>
					</h2>
			    </div>



		                      	<div class="modal fade" id="info_login_session" role="dialog">
								    <div class="modal-dialog">
								    
								      <!-- Modal content-->
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal">&times;</button>
								          <h4 class="modal-title">My active sessions</h4>
								        </div>
								        <div class="modal-body">
								          <p class="login-user"></p>
								        </div>
								        <div class="modal-footer">
								        	<p style='text-align:center; margin:0;'><img src="images/cs.png" class="logo-nav" style="width:68px;"></p>
								          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancel</font></button>
								        </div>
								      </div>
								      
								    </div>
								  </div>


		                      	

									<div class="modal fade" id="perfil_user_edit" role="dialog">
									    <div class="modal-dialog">
									    
									      <!-- Modal content-->
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Profile - <span id="edit_perfil_username"></span></h4>
									        </div>
									        <div class="modal-body">
										          <div class="row">
										          	<div class="col-xs-12 col-md-6">
										          		<div class="form-group">
											                <label><i class="fa fa-user"></i> Username: </label>
										          			<input type="text" id="nome_utilizador_perfil" class="form-control" >
										            	</div>
										          	</div>
										          	<div class="col-xs-12 col-md-6">
										          		<div class="form-group">
										          			<label><i class="fas fa-building"></i> Departement: </label>
										          			<input type="text" id="nome_departament_perfil" class="form-control" >
										          		</div>
										          	</div>
										          	<div class="col-xs-12 col-md-6">
										          		<div class="form-group">
										          			<label><i class="fas fa-flag"></i> Country: </label>
										          			<input type="text" id="nome_country_perfil" class="form-control" >
										          		</div>
										          	</div>
										          	<div class="col-xs-12 col-md-6">
										          		<div class="form-group">
										          			<label><i class="fas fa-code-branch"></i> Skills: </label>
										          			<input type="text" id="nome_skills_perfil" class="form-control" >
										          		</div>
										          	</div>
										          	<div class="col-xs-12 col-md-12">
										          		<div class="form-group">
										          			<label><i class="fas fa-envelope"></i> Email: </label>
										          			<input type="email" id="nome_email_perfil" class="form-control" >
										          		</div>
										          	</div>

										          	<div class="col-xs-12 col-md-6">
											        		<label><i class="fas fa-user-cog"></i> Privileges:</label>
											      			<div class="form-group" style="margin-bottom: -1px;">
											                      <div class="input-group" style='width:100%;'>
											                      <select readonly class="w3-select" name="tipo_utilizador_perfil" id="tipo_utilizador_perfil" onchange="chPermission()" style="border-radius: 0px; height: 40px;">
											                        <option value='' selected>Escolha *</option>
											                        <option value='Administrator'>Administrator</option>
											                        <option value='User'>User</option>
											                     </select>
											                    </div>
											                  </div>
										          	</div>

										          	<div class="col-xs-12 col-md-6">
										          		<div class="form-group">
										          			<label><i class="fas fa-cogs"></i> Type: </label>
										          			<input type="text" id="pri_utilizador_perfil" class="form-control" >
										          		</div>
										          	</div>

										          	<div class="col-xs-12 col-md-12">
										          		<div class="form-group">
										          			<label><i class="fas fa-image"></i> Logo: </label>
										          			<div id="logo_user_perf" class="col-xs-12 col-md-12">

										          			</div>
										          			<input id="image_prof" name="file" type="file" class="btn-primary btn col-xs-12">
										          		</div>
										          	</div>
										        </div>
									    	</div>
									          <div class="modal-footer">
									            <p style='text-align:center; margin:0;'><img src="images/cs.png" class="logo-nav" style="width:68px;"></p>
									            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
									            <button class="btn btn-success" id="edit_utilizador"><i class="fas fa-save"></i><font class="hidden-xs"> Guardar</font></button>
									        </div>
									        
									      </div>
									      
									    </div>
									  </div>



			<div class="content-top">

				<div class=" profile row">

		<div class="profile-bottom col-md-6 w3-row-padding">
			<div class="profile-bottom-top">
			<div class="col-md-12 profile-bottom-img">
				<img src="images/users/<?php echo $_COOKIE['logotipo']; ?>" alt="" id="perfil_img_user" style="width: 150px; height: 150px;">
			</div>
			<div class="col-md-12 profile-text">
				<h6 style="text-align: center;" id="perfil_nome_user"><?php echo $_COOKIE['username']; ?></h6>
				<button type="button" id="perf_in" class="btn btn-default btn-sm centering" style="width: 100%">
					<h5 class="centering"><i class="fas fa-user"></i> View Profile &nbsp;&nbsp;<i class="fas fa-chevron-right"></i></h5>
				</button>

				<button type="button" id="perf_act" class="btn btn-default btn-sm centering" style="width: 100%">
					<h5 class="centering"><i class="fas fa-user"></i> View Profile &nbsp;&nbsp;<i class="fas fa-chevron-down"></i></h5>
				</button>

				<div id="perfil">
					<br>
					<p><b>Department:</b> <span id="perfil_dep_user"><?php echo $_COOKIE['departament']; ?></span></p>
					<p><b>Email:</b> <a href="<?php echo $_COOKIE['email']; ?>"><span id="perfil_email_user"><?php echo $_COOKIE['email']; ?></span></a></p>
					<p><b>Skills:</b> <span id="perfil_hab_user"><?php echo $_COOKIE['skills']; ?></span></p>
					<p><b>Country:</b> <span id="perfil_pais_user"><?php echo $_COOKIE['country']; ?></span></p>
					<br>

					<p style="text-align: center;">
						<button type="button" class="btn btn-info" id="change_perfil"><span class="fa fa-user"></span> Change User Profile</button>
					</p>
				</div>
				
			</div>
			
			<div class="clearfix"></div>
			</div>
			
			 
			
		</div>
		

			<div class="col-md-5 profile-bottom w3-row-padding tabs">
				<i class="fas fa-file-invoice"></i>&nbsp;&nbsp; Reports <font style="float: right;"><i class="fas fa-chevron-right" id="report-left"></i><i class="fas fa-chevron-down" id="report-down"></i></font>

				<div id="report-cont">
					<p>
						<strong>Main Features:</strong>
						<br>
						<br>
						<a data-toggle="modal" onclick="$('#info_login_session').modal('show');" class="btn btn-info"><i class="fas fa-sign-in-alt"></i> Browser sessions</a>
						<br>
						<br>
						<a href="/grades.php" class="btn btn-info"><i class="fa fa-th"></i> Grades overview</a>
					</p>
				</div>
			</div>

			<div class="col-md-5 profile-bottom w3-row-padding tabs">
				<i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp; Login activity <font style="float: right;"><i class="fas fa-chevron-right" id="bag_in"></i><i class="fas fa-chevron-down" id="bag_act"></i></font>

				<div id="badge-cont">
					<br>
					<p style="text-align: center;"><b><i class="fas fa-user-lock"></i> First registry to site: </b> <?php echo $_COOKIE['data_criacao'];  ?>&nbsp;&nbsp;<?php echo $_COOKIE['hora_criacao'];  ?>
						<br>
					<p style="text-align: center;"><b><i class="fas fa-download"></i> Last access to site: </b> <?php echo $_COOKIE['data_login'];  ?>&nbsp;&nbsp;<?php echo $_COOKIE['hora_login'];  ?>
					</p>
				</div>
			</div>

			


			



			<div class="col-md-6 profile-bottom w3-row-padding tabs">
			<div class="profile-bottom-top">

				<i class="fas fa-book"></i>&nbsp;&nbsp; Course details <font style="float: right;"><i class="fas fa-chevron-right" id="course_in"></i><i class="fas fa-chevron-down" id="course_act"></i></font>

				<div id="course-cont">
					<br>

					<div class="col-md-12">
						<div class="panel panel-primary" Id="panel_col">
      						<div class="panel-heading" id="col" >
      							<i class="fas fa-spa"></i> <a href="/spa/spa-geral.php" style="color: white;">SPA & Leisure</a> <font style="float:right;"><i id="line_minus" class="fas fa-plus"></i></font>
      						</div>
      						<div class="panel-body" id="spa_cot">
      							<p><strong>SPA & Leisure - Level 1:</strong> This Module is divided into five key sections, covering the Settings category of the SPA & LEISURE application. Each of these sections have videos that explain the software functionality available.</p>
      							<br>
      							<p><strong>SPA & Leisure - Level 2:</strong> This Module is divided into five key sections, covering the Settings category of the SPA & LEISURE application. Each of these sections have videos that explain the software functionality available.</p>
      							<br>
      							<p><strong>SPA & Leisure - Level 3:</strong> This Module covers some more functions about the functionality of Agenda such as the Agenda List, the Multibookings and the Package Bookings.</p>
      						</div>
    					</div>
    					<br>
    					<div class="panel panel-primary" id="panel_col">
      						<div class="panel-heading" id="col" >
      							<i class="fa fa-credit-card"></i> <a href="/pos/pos-geral.php" style="color: white;">Point of Sale Solutions</a> <font style="float:right;"><i id="line_minus_pos" class="fas fa-plus"></i></font>
      						</div>
      						<div class="panel-body" id="pos_cot">
      							<p>This Module is divided into four key sections, covering categories of the application. Each of these sections have videos that explain the software functionality available.</p>
      							<br>
      							<p>This Module is divided into three key sections, covering categories of the application. In each section there is a video that explain the software functionality available.</p>
      							<br>
      							<p>This Module is divided into three key sections, covering the Configurations Area of how to set up specific functionalities of the application. Each of these sections have videos that explain the software functionality available.</p>
      						</div>
    					</div>
    					<br>
    					<div class="panel panel-primary" id="panel_col">
      						<div class="panel-heading" id="col" >
      							<i class="fab fa-markdown"></i> <a href="/mem/mem-geral.php" style="color: white;">Member Marketing</a> <font style="float:right;"><i id="line_minus_mem" class="fas fa-plus"></i></font>
      						</div>
      						<div class="panel-body" id="mem_cot">
      							<p>This Module is divided into four key sections, covering specific categories of the application. Each of these sections have videos that explain the software functionality available.</p>
      						</div>
    					</div>
    					<br>
    					<div class="panel panel-primary" id="panel_col">
      						<div class="panel-heading" id="col" >
      							<i class="fas fa-warehouse"></i> <a href="/inv/inv-geral.php" style="color: white;">Inventory</a> <font style="float:right;"><i id="line_minus_inv" class="fas fa-plus"></i></font>
      						</div>
      						<div class="panel-body" id="inv_cot">
      							<p>This Module is divided into three key sections, covering categories of the application. Each of these sections have videos that explain the software functionality available.</p>
      						</div>
    					</div>
    					<br>
    					<div class="panel panel-primary" id="panel_col">
      						<div class="panel-heading" id="col" >
      							<i class="fas fa-golf-ball"></i> <a href="/golf/golf-geral.php" style="color: white;">Golf Management</a> <font style="float:right;"><i id="line_minus_golf" class="fas fa-plus"></i></font>
      						</div>
      						<div class="panel-body" id="golf_cot">
      							<p>This Module is divided into three key sections, covering the Profile, the Tee-Sheet and the Single Reservations categories of the GOLF application. Each of these sections have videos that explain the software functionality available.</p>
      							<br>
      							<p>This Module is divided into three key sections, covering the Reservations (including the Group Bookings, the Packages and the Tournament/Shotgun Bookings), the Communications and the Reports categories of the GOLF application. Each of these sections have videos that explain the software functionality available.</p>
      						</div>
    					</div>
    					<br>
    					<div class="panel panel-primary" id="panel_col">
      						<div class="panel-heading" id="col" >
      							<i class="fas fa-lock"></i> <a href="/user-security/user-security-geral.php" style="color: white;">User Security</a> <font style="float:right;"><i id="line_minus_user_security" class="fas fa-plus"></i></font>
      						</div>
      						<div class="panel-body" id="user_security_cot">
      							<p>On completion of this module you will be able to:<br><i class="fas fa-caret-right"></i> Create new Users &amp; Roles.<br><i class="fas fa-caret-right"></i> How to create a Password by user.<br><i class="fas fa-caret-right"></i> Define a security policy for passwords.<br><i class="fas fa-caret-right"></i> Create filters per user or roles.<br><i class="fas fa-caret-right"></i> Use Audit.<br><i class="fas fa-caret-right"></i> Use Print Report.<br><i class="fas fa-caret-right"></i> Use Components and Global Filters.<br><i class="fas fa-caret-right"></i> Next &amp; Previous</p>
      						</div>
    					</div>







					</div>

					
					
				</div>
			
			
			<div class="clearfix"></div>
			</div>
			
			 
			
			</div>

			<div class="col-md-5 profile-bottom w3-row-padding tabs">

				<i class="fas fa-paperclip"></i>&nbsp;&nbsp; Miscellaneous <font style="float: right;"><i class="fas fa-chevron-right" id="mil_in"></i><i class="fas fa-chevron-down" id="mil_act"></i></font>

				<div id="mil-cont">
					
					<p>
						<br>
						<a href="/site-blogs.php" class="btn btn-info"><i class="fas fa-blog"></i>&nbsp;&nbsp;Blog entries</a>
						
						
						
					<br>
					</p>

					
				</div>
			
			
			<div class="clearfix"></div>
			
			
			 
			
			</div>

			


		








			








		</div>


			
				
	</div>
			



	 
		<!---->
		<div class="copy">
            <p> &copy; 2019 Concept Moodle. All Rights Reserved | Design by <a href="https://concept.shijigroup.com/en/" target="_blank">Concept S.A.</a> </p>
	    </div>
		</div>
		<div class="clearfix"> </div>


       </div>

       <?php include 'footer/footer.php'; ?>

       <script type="text/javascript">
       	
       		function chPermission()
			{
			    $("#tipo_utilizador_perfil").val();
			    
			    if ($("#tipo_utilizador_perfil").val() == 'Administrator')
			    {
			        $("#pri_utilizador_perfil").val(1);
			    }
			    if ($("#tipo_utilizador_perfil").val() == 'User')
			    {
			        $("#pri_utilizador_perfil").val(2);
			    }
			}

			



		

		
    	//removing extension and keeping just the filename







		$("#change_perfil").click(function(e)
		{
			e.preventDefault();

			var modal_edit_user = $("#perfil_user_edit");

			var nome_edit_perfil = $("#perfil_nome_user").html();

			var dep_perfil = $("#perfil_dep_user").html();

			var email_perfil = $("#perfil_email_user").html();

			var hab_perfil = $("#perfil_hab_user").html();

			var pais_perfil = $("#perfil_pais_user").html();

			var tipo_utilizador = $("#tipo_utilizador_perfil_usr").val();

			var pri_utilizador = $("#pri_utilizador_perfil_usr").val();



			$("#edit_perfil_username").html(nome_edit_perfil);

			$("#nome_utilizador_perfil").val(nome_edit_perfil);

			$("#nome_departament_perfil").val(dep_perfil);

			$("#nome_country_perfil").val(pais_perfil);

			$("#nome_skills_perfil").val(hab_perfil);

			$("#nome_email_perfil").val(email_perfil);

			$("#tipo_utilizador_perfil").val(tipo_utilizador);

			$("#pri_utilizador_perfil").val(pri_utilizador);



			$("#logo_user_perf").html('<img src="images/users/'+s+'" class="img-responsive"><br>');




			modal_edit_user.modal('show');


		});

		$(document).ready(function()
		{
				$("#image_prof").on('change', function (e){
				  e.preventDefault();
				  var image = $("#image_prof").prop("files")[0];
				  createFormData(image);
				 });
		});


		function createFormData(image)
		{
		 var formImage = new FormData();
		 formImage.append('userImage', image);
		 uploadFormData(formImage);
		}

		function uploadFormData(formData) 
		{
		 $.ajax({
		 url: "upload_images_user.php",
		 type: "POST",
		 data: formData,
		 contentType:false,
		 cache: false,
		 processData: false,
		 success: function(data){
		 	s = data;
		  $("#logo_user_perf").html('<img id="logged_username_img" style="width: 150px; height: 150px;" src="images/users/'+data+'" class="img-responsive"><br>');
		 }});
		}

		$("#edit_utilizador").click(function(e)
		{

			var modal_user = $("#perfil_user_edit");

			var user_name_prof = $("#nome_utilizador_perfil").val();

			var dep = $("#nome_departament_perfil").val();

			var email = $("#nome_email_perfil").val();

			var pais = $("#nome_country_perfil").val();

			var hab = $("#nome_skills_perfil").val();


			var tipo_utilizador = $("#tipo_utilizador_perfil").val();

			var pri_utilizador = $("#pri_utilizador_perfil").val(); 


			datav="action=1&utilizador="+user_name_prof+"&pais="+pais+"&email="+email+"&tipo_utilizador="+tipo_utilizador+"&privilegios="+pri_utilizador+"&departament="+dep+"&skills="+hab+"&img_logo="+s+"&id="+<?php echo $_COOKIE['id'] ?>;

			$('.back').show();
		    e.preventDefault();
		    $.ajax({
		        type: "POST",
		        url: "profile/action_profile.php",
		        data: datav,
		        cache: false,
		        success: function(data) {
		          $('.back').fadeOut();
		          if (data == 1){
			         $('.debug-url').html('The User Profile <strong class="cpt">'+<?php echo $_COOKIE['id']; ?>+'</strong> was updated succesfully');
	                  $("#Modalok").modal('show');
	                  $('html, body').animate({ scrollTop: 0 }, 500);
	                  setTimeout(function(){
	                  $('#Modalok').modal('hide');},2500);
	                  setTimeout(function(){  location.reload();}, 2500);
		          }
		          else
		          {
		          	  $('.debug-url').html('The User Profile <strong class="cpt">'+<?php echo $_COOKIE['id']; ?>+'</strong> was not updated succesfully');
	                  $("#Modalko").modal('show');
	                  setTimeout(function(){  $('#Modalko').modal('hide');}, 2500);
			            
			          }
		        },
		        error: function() {
		        	 $('.debug-url').html('The User Profile <strong class="cpt">'+<?php echo $_COOKIE['id']; ?>+'</strong> was not updated succesfully. Please verify the wifi connection and try again');
		            $("#Modalko").modal('show');
		        }
		    });
		    modal_user.modal('hide');

			



			

			
		});


       </script>



     

