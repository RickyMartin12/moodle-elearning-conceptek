<?php include 'header/header.php'; ?>



        <div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">
 	
			    <div class="banner">
			   
					<h2>
					<a href="index.php">Home</a>
					<i class="fa fa-angle-right"></i>
					<a href="dashboard.php">Dashboard</a> 
					<i class="fa fa-angle-right"></i>
					<span>Definitions</span>
					</h2>
			    </div>


			    <div class="modal fade" id="password_change_modal" role="dialog">
									    <div class="modal-dialog">
									    
									      <!-- Modal content-->
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title"><i class="fas fa-lock"></i> Change User Password</span></h4>
									        </div>
									        <div class="modal-body">
										          <div class="row">
										          	<div class="col-xs-12 col-md-6">
											                <label><i class="fas fa-key"></i> New Password: </label>
											                <div class="input-group" id="show_hide_password">
										          				<input type="password" id="nova_passord_pre" class="form-control" required="">
										          				<div class="input-group-addon"> 
										          					<a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a> 
										          				</div>
										          			</div>


										          	</div>
										          	<div class="col-xs-12 col-md-6">
										          		<div class="form-group">
										          			<label><i class="fas fa-key"></i> Confirm New Passord: </label>

										          			<div class="input-group" id="show_hide_password_conf">
										          				<input type="password" id="conf_nova_passord_pre" class="form-control" required="">
										          				<div class="input-group-addon"> 
										          					<a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a> 
										          				</div>
										          			</div>
										          		</div>
										          	</div>
										          	
										        </div>
									    	</div>
									          <div class="modal-footer">
									            <p style='text-align:center; margin:0;'><img src="images/cs.png" class="logo-nav" style="width:68px;"></p>
									            <button type="button" id="reset_password" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
									            <button class="btn btn-success" id="salvar_password"><i class="fas fa-save"></i><font class="hidden-xs"> Guardar Password</font></button>
									        </div>
									        
									      </div>
									      
									    </div>
									  </div>

			    <div class="modal fade" id="perfil_user_edit_pre" role="dialog">
									    <div class="modal-dialog">
									    
									      <!-- Modal content-->
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Event - <span id="edit_perfil_username_pre"></span></h4>
									        </div>
									        <div class="modal-body">
										          <div class="row">
										          	<div class="col-xs-12 col-md-6">
										          		<div class="form-group">
											                <label><i class="fa fa-user"></i> Username: </label>
										          			<input type="text" id="nome_utilizador_perfil_pre" class="form-control" >
										            	</div>
										          	</div>
										          	<div class="col-xs-12 col-md-6">
										          		<div class="form-group">
										          			<label><i class="fas fa-building"></i> Departement: </label>
										          			<input type="text" id="nome_departament_perfil_pre" class="form-control" >
										          		</div>
										          	</div>
										          	<div class="col-xs-12 col-md-6">
										          		<div class="form-group">
										          			<label><i class="fas fa-flag"></i> Country: </label>
										          			<input type="text" id="nome_country_perfil_pre" class="form-control" >
										          		</div>
										          	</div>
										          	<div class="col-xs-12 col-md-6">
										          		<div class="form-group">
										          			<label><i class="fas fa-code-branch"></i> Skills: </label>
										          			<input type="text" id="nome_skills_perfil_pre" class="form-control" >
										          		</div>
										          	</div>
										          	<div class="col-xs-12 col-md-12">
										          		<div class="form-group">
										          			<label><i class="fas fa-envelope"></i> Email: </label>
										          			<input type="email" id="nome_email_perfil_pre" class="form-control" >
										          		</div>
										          	</div>

										          	<div class="col-xs-12 col-md-6">
											        		<label><i class="fas fa-user-cog"></i> Privileges:</label>
											      			<div class="form-group" style="margin-bottom: -1px;">
											                      <div class="input-group" style='width:100%;'>
											                      <select readonly class="w3-select" name="tipo_utilizador_perfil_pre" id="tipo_utilizador_perfil_pre" onchange="chPermission_def()" style="border-radius: 0px; height: 40px;">
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
										          			<input type="text" id="pri_utilizador_perfil_pre" class="form-control" >
										          		</div>
										          	</div>

										          	<div class="col-xs-12 col-md-12">
										          		<div class="form-group">
										          			<label><i class="fas fa-image"></i> Logo: </label>
										          			<div id="logo_user_perf_pre" class="col-xs-12 col-md-12">

										          			</div>
										          			<input id="image_prof_pre" name="file" type="file" class="btn-primary btn col-xs-12">
										          		</div>
										          	</div>
										        </div>
									    	</div>
									          <div class="modal-footer">
									            <p style='text-align:center; margin:0;'><img src="images/cs.png" class="logo-nav" style="width:68px;"></p>
									            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
									            <button class="btn btn-success" id="edit_utilizador_pre"><i class="fas fa-save"></i><font class="hidden-xs"> Guardar</font></button>
									        </div>
									        
									      </div>
									      
									    </div>
									  </div>

			    



		<div class="content-top">
			<div class="profile row">
				<div class="col-md-12">
					<div class="col-md-12 profile-bottom w3-row-padding tabs row">
						<div class="row">
							<div class="col-md-12">
								<h5 class="col-xs-12" ><font style="float: right;"><i class="fas fa-chevron-right" id="pre_off"></i><i class="fas fa-chevron-down" id="pre_on"></i></font>
				                    <span class="fas fa-cogs"></span>&nbsp;&nbsp;Preferencies - User Account
			                    </h5>
			                </div>
			           </div>



			           <div id="pre_cont">
			              <div class="col-md-12">
			           		<div class="row">
			           			<div class="col-md-12">
			           				<br>
			           				<div class="col-md-6 col-sm-6" id="pd">
			           					<button type="button" id="change_perfil" class="btn btn-primary"><i class="fas fa-edit"></i> &nbsp;&nbsp;Edit Profile </button>
			           				</div>
			           				<div class="col-md-6 col-sm-6" id="pd">
			           					<button type="button" id="change_password" class="btn btn-primary"> <i class="fas fa-user-lock"></i> &nbsp;&nbsp;Change Password </button>
			           				</div>
			           			</div>

				           		</div>
					        </div>
					    </div>






			       </div>
			    </div>
			</div>
		</div>

		<div class="content-top">		
				</div>

				<div class="content-top">	
				</div>

				<div class="content-top">	
				</div>

				<div class="content-top">		
				</div>

				<div class="content-top">	
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



