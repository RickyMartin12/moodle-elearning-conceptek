<?php include 'request/session.php' ?> 


<div id="content_info">
<?php include 'header/header.php'; ?>



        <div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">
 	
			    <div class="banner">
			   
					<h2>
					<a href="index.php">Home</a>
					<i class="fa fa-angle-right"></i>
					<span>Dashboard</span>
					</h2>
			    </div>
			<div class="content-top">

				<div class=" profile row">

		<div class="profile-bottom col-md-6 w3-row-padding">
			<div class="profile-bottom-top">
			<div class="col-md-12 profile-bottom-img">
				<img src="images/users/<?php echo $_COOKIE['logotipo'] ?>" alt="" style="width: 150px; height: 150px;">
			</div>
			<div class="col-md-12 profile-text">
				<h6 style="text-align: center;"><?php echo $_COOKIE['username'] ?></h6>
				<button type="button" id="perf_in" class="btn btn-default btn-sm centering" style="width: 100%">
					<h5 class="centering"><i class="fas fa-user"></i> View Profile &nbsp;&nbsp;<i class="fas fa-chevron-right"></i></h5>
				</button>

				<button type="button" id="perf_act" class="btn btn-default btn-sm centering" style="width: 100%">
					<h5 class="centering"><i class="fas fa-user"></i> View Profile &nbsp;&nbsp;<i class="fas fa-chevron-down"></i></h5>
				</button>

				<div id="perfil">
					<br>
					<p><b>Department:</b> <?php echo $_COOKIE['departament'] ?></p>
					<p><b>Email:</b> <a href="<?php echo $_COOKIE['email'] ?>"><?php echo $_COOKIE['email'] ?></a></p>
					<p><b>Skills:</b> <?php echo $_COOKIE['skills'] ?></p>
					<p><b>Country:</b> <?php echo $_COOKIE['country'] ?></p>
				</div>
				
			</div>
			
			<div class="clearfix"></div>
			</div>
			
			 
			
		</div>
		

			<div class="col-md-5 profile-bottom w3-row-padding tabs">
				<i class="fas fa-file-alt"></i> Private Files <font style="float: right;"><i class="fas fa-chevron-right" id="file-left"></i><i class="fas fa-chevron-down" id="file-down"></i></font>

				<div id="file-cont">

					<div id="content_private_files">
					</div>
					<div id="content_fil_blog_load">

					</div>




					<br>
					<input id="files_blogs" name="files_blogs[]" type="file" class="btn-primary btn col-xs-12" multiple="multiple">


					<input id="files_blogs_content" type="hidden" />

					<br>
					<br>
					<button onclick="filePrivate();" class="btn btn-info"><i class="fa fa-file"></i> Add/Updated Private Files</button>
				</div>
			</div>

			<div class="col-md-5 profile-bottom w3-row-padding tabs">
				<i class="fas fa-calendar-alt"></i> Calendar
				<font style="float: right;"><i class="fas fa-chevron-right" id="calendar_in"></i><i class="fas fa-chevron-down" id="calendar_act"></i></font>
				<br>
				<div class="cal1 cal_2" id="caln"><br><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td></tr><tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table></div></div>
					<link rel="stylesheet" href="css/clndr.css" type="text/css" />
					<script src="js/underscore-min.js" type="text/javascript"></script>
					<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
					<script src="js/clndr.js" type="text/javascript"></script>
					<script src="js/site.js" type="text/javascript"></script>
			</div>


			<div class="col-md-5 profile-bottom w3-row-padding tabs">
				<i class="fas fa-calendar-check"></i> Upcoming Events  <font style="float: right;"><i class="fas fa-chevron-right" id="eve_in"></i><i class="fas fa-chevron-down" id="eve_act"></i></font>

				<div id="eve-cont">
					<br>
					<p style="text-align: center;"><a href="calendar.php" class="btn btn-info" role="button"><i class="far fa-calendar"></i> Go to Calendar</a></p>
				</div>
			</div>

			<div class="col-md-5 profile-bottom w3-row-padding tabs" >
				<i class="fa fa-users"></i> Online Users (Last in 5 seconds) <font style="float: right;"><i class="fas fa-chevron-right" id="usr_in"></i><i class="fas fa-chevron-down" id="usr_act"></i></font>

				<div id="usr-cont">
					<!--<br>
					<p style="text-align: center;"><b>(last 5 minutes: 2)</b></p>
					<br>
					<div class="table-responsive">          
					  <table class="table" id="users_table">
					    <tbody>
					      <tr>
					        <td><img src="images/pr.jpg" class="mg-responsive img-user"></td>
					        <td><a href="#">Maria Simões</a></td>
					      </tr>
					      <tr>
					        <td><img src="images/in.jpg" class="mg-responsive img-user"></td>
					        <td><a href="#">The Spa Hotel at Ribby Hall Village</a></td>
					      </tr>
					    </tbody>
					  </table>
					  </div>-->

				</div>

			</div>

			<!--
			<div class="col-md-12 profile-bottom w3-row-padding tabs">
			  <ul class="nav nav-tabs">
			    <li class="active"><a data-toggle="tab" href="#home" id="home_click"><i class="fas fa-clock"></i>Timeline</a></li>
			    <li><a data-toggle="tab" href="#menu1" id="menu_click"><i class="fas fa-list-alt"></i>Courses</a></li>
			  </ul>

			  <div class="tab-content">
			    <div id="home" class="tab-pane fade in active">
			    	<br>
			    	<h4 style="text-align: center" class="s">Sorting by Date or Course</h4>
			    	<br>
				    <div class="tab">
					  <button class="tablinks" onclick="openCity(event, 'date')"><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;Date</button>
					  <button class="tablinks" onclick="openCity(event, 'course')"><i class="far fa-list-alt"></i>&nbsp;&nbsp;Course</button>
					</div>

					<div id="date" class="tabcontent">
					  <br>
					  <h3 class="centering">Sort by Date</h3>
					  <p class="centering"><b>Realizar uma actividade</b></p>

					  <div class="table-responsive">          
						  <table class="table table-striped">
						    <thead>
						      <tr>
						        <th>ID/Accções</th>
						        <th>Nome da Actividade</th>
						        <th>Data</th>
						        <th>Descricao</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>1</td>
						        <td>Golf Level 1</td>
						        <td>19/05/2018</td>
						        <td>Transferencias de Golf</td>
						      </tr>
						      <tr>
						        <td>2</td>
						        <td>Golf Level 2</td>
						        <td>22/05/2018</td>
						        <td>Transferencias de Golf 2</td>
						      </tr>
						    </tbody>
						  </table>
						  </div>


					  <p class="centering"><b>Não realizar uma actividade</b></p>

					  <img src="images/activities.svg" class="img-responsive img-res" >





					  <p class="centering">No upcoming activities due</p>
					</div>

					<div id="course" class="tabcontent">
					  <br>
					  <h3 class="centering">Sort by Courses</h3>

					  <div class="row">

					  	<div class="col-md-12">

					  		<h5 class="centering"> Historico de Datas da Actividades </h5>
					  		<br>


					  		<div class="line-bord">
						  		<div class="modal-header title-black">
	        						<h4 class="modal-title"><i class="fas fas fa-spa"></i> SPA & LEISURE </h4>
								</div>
								<div class="panel-body">
									<img src="images/activities.svg" class="img-responsive img-res" >
					  				<p class="centering">No upcoming activities due</p>
								</div>
							</div>

							<div class="botter2"></div>

					  		<div class="line-bord">
						  		<div class="modal-header title-black">
	        						<h4 class="modal-title"><i class="fa fa-credit-card"></i> Point of Sale Solutions </h4>
								</div>
								<div class="panel-body">
									<img src="images/activities.svg" class="img-responsive img-res" >
					  				<p class="centering">No upcoming activities due</p>
								</div>
							</div>


							<div class="botter2"></div>

					  		<div class="line-bord">
						  		<div class="modal-header title-black">
	        						<h4 class="modal-title"><i class="fab fa-markdown"></i> Membership Marketing </h4>
								</div>
								<div class="panel-body">
									<img src="images/activities.svg" class="img-responsive img-res" >
					  				<p class="centering">No upcoming activities due</p>
								</div>
							</div>

							<div class="botter2"></div>

					  		<div class="line-bord">
						  		<div class="modal-header title-black">
	        						<h4 class="modal-title"><i class="fas fa-warehouse"></i> Inventory</h4>
								</div>
								<div class="panel-body">
									<img src="images/activities.svg" class="img-responsive img-res" >
					  				<p class="centering">No upcoming activities due</p>
								</div>
							</div>

							<div class="botter2"></div>



					  		<div class="line-bord">
						  		<div class="modal-header title-black">
	        						<h4 class="modal-title"><i class="fas fa-golf-ball"></i> Golf Management</h4>
								</div>
								<div class="panel-body">
									<div class="table-responsive">          
									  <table class="table table-striped">
									    <thead>
									      <tr>
									        <th>ID/Accções</th>
									        <th>Nome da Actividade</th>
									        <th>Data</th>
									        <th>Descricao</th>
									      </tr>
									    </thead>
									    <tbody>
									      <tr>
									        <td>1</td>
									        <td>Golf Level 1</td>
									        <td>19/05/2018</td>
									        <td>Transferencias de Golf</td>
									      </tr>
									      <tr>
									        <td>2</td>
									        <td>Golf Level 2</td>
									        <td>22/05/2018</td>
									        <td>Transferencias de Golf 2</td>
									      </tr>
									    </tbody>
									  </table>
									</div>
								</div>
							</div>

							<div class="botter2"></div>


					  		<div class="line-bord">
						  		<div class="modal-header title-black">
	        						<h4 class="modal-title"><i class="fas fa-lock"></i> User Security</h4>
								</div>
								<div class="panel-body">
									<img src="images/activities.svg" class="img-responsive img-res" >
					  				<p class="centering">No upcoming activities due</p>
								</div>
							</div>

							

					  	</div>

					  	

					  	
					  	
					</div>
					</div>
			    </div>
			    <div id="menu1" class="tab-pane fade">
			    	<br>
			    	<div class="sum"> 
						<h4 style="text-align: center;">Sort by Course</h4>
					</div>
					<div class="row">
					  	<div class="col-md-12">

					  		<br>
						    <div class="tab2">
							  <button class="tablinks2" onclick="openCity2(event, 'progress')" id="prog"><i class="fas fa-spinner"></i>&nbsp;&nbsp;In Progress</button>
							  <button class="tablinks2" onclick="openCity2(event, 'future')" id="future2"><i class="fas fa-clock"></i>&nbsp;&nbsp;Future</button>
							  <button class="tablinks2" onclick="openCity2(event, 'past')" id="past2"><i class="far fa-clock"></i>&nbsp;&nbsp;Past</button>
							</div>

							<div id="progress" class="tabcontent2">
						  		<div class="line-bord line-content" id="anim">
							  		<div class="modal-header title-black">
		        						<h4 class="modal-title"><i class="fas fas fa-spa"></i> SPA & LEISURE </h4>
									</div>
									<div class="panel-body">
										<b>On completion of this module you will be able to: </b>
										<div class="list-group">
									    <a href="#" class="list-group-item list-group-item-action">Create Complexes, Seasons and Locations.</a>
									    <a href="#" class="list-group-item list-group-item-action">Create Groups.</a>
									    <a href="#" class="list-group-item list-group-item-action">Search for a Profile, create a new one and modify an existing.</a>
									    <a href="#" class="list-group-item list-group-item-action">Review the History.</a>
									    <a href="#" class="list-group-item list-group-item-action">Manage the Agenda List.</a>
									    <a href="#" class="list-group-item list-group-item-action">Complete a multi activity / treatment Reservation.</a>
									    <a href="#" class="list-group-item list-group-item-action">etc</a>
									  </div>
									</div>
								</div>

								<div class="botter2"></div>

						  		<div class="line-bord line-content" id="anim2">
							  		<div class="modal-header title-black">
		        						<h4 class="modal-title"><i class="fa fa-credit-card"></i> Point of Sale Solutions </h4>
									</div>
									<div class="panel-body">
										<b>On completion of this module you will be able to: </b>
										<div class="list-group">
										    <a href="#" class="list-group-item list-group-item-action">How to perform an Express Sale.</a>
										    <a href="#" class="list-group-item list-group-item-action">How to perform Profile Sales.</a>
										    <a href="#" class="list-group-item list-group-item-action">How to use the ...</a>
										    <a href="#" class="list-group-item list-group-item-action">How to sell a Gift Card and to redeem it.</a>
										    <a href="#" class="list-group-item list-group-item-action">How to view the Accounts of the ...</a>
										    <a href="#" class="list-group-item list-group-item-action">How to setup Commissions.</a>
										    <a href="#" class="list-group-item list-group-item-action">How to create and set up Gift Cards.</a>
										    <a href="#" class="list-group-item list-group-item-action">How to set up ...</a>
										</div>
									</div>
								</div>

								<div class="botter2"></div>

						  		<div class="line-bord line-content" id="anim3">
							  		<div class="modal-header title-black">
		        						<h4 class="modal-title"><i class="fab fa-markdown"></i> Membership Marketing</h4>
									</div>
									<div class="panel-body">
										<b>On completion of this module you will be able to: </b>
										<div class="list-group">
										    <a href="#" class="list-group-item list-group-item-action">Create Profiles.</a>
										    <a href="#" class="list-group-item list-group-item-action">Generate Profile Invoices / Credit Notes & Receipts.</a>
										</div>
									</div>
								</div>

								<div class="botter2"></div>


						  		<div class="line-bord line-content" id="anim4">
							  		<div class="modal-header title-black">
		        						<h4 class="modal-title"><i class="fas fa-warehouse"></i> Inventory</h4>
									</div>
									<div class="panel-body">
										<b>On completion of this module you will be able to: </b>
										<div class="list-group">
										    <a href="#" class="list-group-item list-group-item-action">Create and link different warehouses, families, etc. for Articles.</a>
										    <a href="#" class="list-group-item list-group-item-action">Create ...</a>
										</div>
									</div>
								</div>

								<div class="botter2"></div>

						  		<div class="line-bord line-content" id="anim5">
							  		<div class="modal-header title-black" >
		        						<h4 class="modal-title"><i class="fas fa-golf-ball"></i> Golf Management</h4>
									</div>
									<div class="panel-body">
										<a href="#" class="list-group-item list-group-item-action">PROFILE SEARCH</a>
										<a href="#" class="list-group-item list-group-item-action">&nbsp;&nbsp; - Advanced Search.</a>
										<a href="#" class="list-group-item list-group-item-action">&nbsp;&nbsp; - Grid sorting / Navigation.</a>
										<a href="#" class="list-group-item list-group-item-action">&nbsp;&nbsp; - Profile list export...</a>
										<a href="#" class="list-group-item list-group-item-action">GROUP BOOKINGS</a>	
										<a href="#" class="list-group-item list-group-item-action">&nbsp;&nbsp; - Understand the difference between multiple reservations and ...</a>
									</div>
								</div>

								<div class="botter2"></div>




						  		<div class="line-bord line-content" id="anim6">
							  		<div class="modal-header title-black" >
		        						<h4 class="modal-title"><i class="fas fa-lock"></i> User Security</h4>
									</div>
									<div class="panel-body">
						  				<p class="centering">None</p>
									</div>
								</div>

								<div class="botter2"></div>



								<ul id="pagin" class="pagination">
								     <li><a class="current" >1</a></li>
								     <li><a >2</a></li>
								</ul>


								



							</div>

							<div id="future" class="tabcontent2">
								<h5 class="centering">Lists Courses in Future</h5>
								<br>
								<div class="table-responsive">          
									  <table class="table table-striped">
									    <thead>
									      <tr>
									        <th>ID/Accções</th>
									        <th>Nome da Actividade</th>
									        <th>Descricao</th>
									      </tr>
									    </thead>
									    <tbody>
									      <tr>
									        <td>1</td>
									        <td>Golf Level 1</td>
									        <td>Golf de Suporte de Dados</td>
									      </tr>
									      
									    </tbody>
									  </table>
									</div>
							</div>

							<div id="past" class="tabcontent2">
								<h5 class="centering">Lists Courses in Past</h5>
								<br>
								<img src="images/courses.svg" class="img-responsive img-res" >
					  			<p class="centering">No past courses</p>
							</div>

							







					  	</div>




					</div>


			    </div>
			    
			  </div>
			</div>
		-->








			








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
       	
       	$(document).ready(function() 
       	{
       		function update_acyivity()
       		{
       			var action = "update_time";
       			$.ajax({
       				url: 'dashboard/action.php',
       				method: 'POST',
       				data:{action:action},
       				success: function(data)
       				{
       				}
       			});
       		}
       		fetch_user_login_data();
       		function fetch_user_login_data()
			{
			 var action = "fetch_data";
			 $.ajax({
			  url:"dashboard/action.php",
			  method:"POST",
			  data:{action:action},
			  success:function(data)
			  {
			   $('#usr-cont').html(data);
			  }
			 });
			}
       		setInterval(function()
       		{
       			update_acyivity()
       		}, 500);

       		


       		




       	});


       	var names = [];
       	var names_init = [];
       	var files = "";
       	var id_user = <?php echo $_COOKIE['id']; ?>

       		function removeA(arr) 
       		{
			    var what, a = arguments, L = a.length, ax;
			    while (L > 1 && arr.length) {
			        what = a[--L];
			        while ((ax= arr.indexOf(what)) !== -1) {
			            arr.splice(ax, 1);
			        }
			    }
			    return arr;
			}


       		$("#files_blogs").change(function() {
  			

		    
		    for (var i = 0; i < $(this).get(0).files.length; ++i) {
		        names.push($(this).get(0).files[i].name);
		        console.log(names[i]);
		    }
		    var list_files = '';
		    

		    $("#files_blogs_content").val(names);
		   	var files_upl = $("#files_blogs_content").val().split(",");


		        for(var i=0; i< files_upl.length; i++)
		        {

					var extension = files_upl[i].substr( (files_upl[i].lastIndexOf('.') +1) );
					s = '';
					switch(extension) 
					{
						case 'jpg':
						case 'png':
						case 'gif':
							s += "<i class='fa fa-image'></i><a href='private_files/"+files_upl[i]+"'><span>" + files_upl[i] + "</span></a>";
						break;                         
						case 'zip':
						case 'rar':
							s += "<i class='fas fa-file-archive'></i><a href='private_files/"+files_upl[i]+"'><span>" + files_upl[i] + "</span></a>";
						break;
						case 'pdf':
							s += "<i class='fas fa-file-pdf'></i><a href='private_files/"+files_upl[i]+"'><span>" + files_upl[i] + "</span></a>";
						break;
						default:
							s += "<i class='fas fa-file'></i><a href='private_files/"+files_upl[i]+"'><span>" + files_upl[i] + "</span></a>";
					}


					list_files += '<div id="cont_fil_edit_'+i+'">' + '<font id="fil_blog_edit">' + s +'</font><button id="btn_file_rem" onclick="removeFileEdit('+i+');"> X</button></div>';

		        }
		        $("#content_fil_blog_load").html(list_files + '');

		        $("#content_fil_blog").html('<br>');

		        var myfiles = document.getElementById("files_blogs");
                    var files = myfiles.files;
                    var data = new FormData();

                    for (i = 0; i < files.length; i++) {
                        data.append('file' + i, files[i]);
                    }



                    $.ajax({
                        url: 'upload_private_files.php', 
                        type: 'POST',
                        contentType: false,
                        data: data,
                        processData: false,
                        cache: false
                    }).done(function(msg) {
                        $('.debug-url').html('File(s) was added successfully');
			            $('#Modalok').modal('show');
			            var obj = document.createElement("audio");
						  obj.src = "/Sound/success.mp3";
						  obj.volume = 0.1;
						  obj.autoPlay = false;
						  obj.preLoad = true;
						  obj.controls = true;
						  obj.play();
                    });


		});


       	function removeFileEdit(i)
	    	{
	    		var conf_blog = $("#cont_fil_edit_"+i+" > #fil_blog_edit > a > span").html();
	    		removeA(names, conf_blog);
	    		var path = "private_files/"+conf_blog;

	    		$.ajax({
			      url: 'removefile_blogs.php',
			      type: 'post',
			      data: {path: path},
			      success: function(response){
			 		console.log(response);
			        // Changing image source when remove
			        if(response == 1){
			          $('.debug-url').html('File was removed successfully');
			          $('#Modalok').modal('show');
			          var obj = document.createElement("audio");
						  obj.src = "/Sound/success.mp3";
						  obj.volume = 0.1;
						  obj.autoPlay = false;
						  obj.preLoad = true;
						  obj.controls = true;
						  obj.play();
			        }
			      }
		   		 });
	    		$('#cont_fil_edit_'+i).empty();
	    		
	    	}

	    	function removeFile(i)
	    	{
	    		var conf_blog = $("#cont_fil_"+i+" > #fil_blog > a > span").html();
	    		removeA(names_init, conf_blog);

	    		var path = "private_files/"+conf_blog;

	    		$.ajax({
			      url: 'removefile_blogs.php',
			      type: 'post',
			      data: {path: path},
			      success: function(response){
			 		console.log(response);
			        // Changing image source when remove
			        if(response == 1){
			          $('.debug-url').html('File was removed successfully');
			          $('#Modalok').modal('show');
			          var obj = document.createElement("audio");
						  obj.src = "/Sound/success.mp3";
						  obj.volume = 0.1;
						  obj.autoPlay = false;
						  obj.preLoad = true;
						  obj.controls = true;
						  obj.play();
			        }
			      }
		   		 });


	    		$('#cont_fil_'+i).empty();
	    		
	    	}

	    	


	    	function filePrivate()
	    	{
	    		var i = 0;
	    		var s = '';
	    		for (j=0; j < names_init.length; j++)
	    		{
	    			s+=names_init[j]+";";
	    			
	    		}
	    		var id_user = <?php echo $_COOKIE['id']; ?>;
	    		for (i=0; i<names.length; i++)
	    		{
	    			s += names[i]+";";
	    		}
	    		var files_a = s.slice(0, -1);
	    		console.log(files_a);


	    		datav = "action=1&files_private="+escape(files_a)+"&user_id="+id_user;
	    		$.ajax({
			        type: "POST",
			        url: "dashboard/save_private_files.php",
			        data: datav,
			        cache: false,
			        success: function(data) {
			          $('.back').fadeOut();
			          obj = [];
			          obj = JSON.parse(data);
			          if (obj.error){
			            $('.debug-url').html('File(s) not saved. Try Again');
			            $('#Modalko').modal('show');
			            var obj = document.createElement("audio");
						  obj.src = "/Sound/success.mp3";
						  obj.volume = 0.1;
						  obj.autoPlay = false;
						  obj.preLoad = true;
						  obj.controls = true;
						  obj.play();
			          }

			          else if (data == 11)
			          {
			            $('.debug-url').html('Files updated Sucessfully');
					    $('#Modalok').modal('show');
					    var obj = document.createElement("audio");
						  obj.src = "/Sound/success.mp3";
						  obj.volume = 0.1;
						  obj.autoPlay = false;
						  obj.preLoad = true;
						  obj.controls = true;
						  obj.play();


			          }

			          else if (obj.success == 0)
			          {
				        $('.debug-url').html('File was not actualize/created successfully');
				        $('#Modalko').modal('show');
				        var obj = document.createElement("audio");
						  obj.src = "/Sound/error.mp3";
						  obj.volume = 0.1;
						  obj.autoPlay = false;
						  obj.preLoad = true;
						  obj.controls = true;
						  obj.play();

				      }	          
			          else if (obj.success == 1)
			          {
			            $('.debug-url').html('Files saved/actualize Sucessfully');
					    $('#Modalok').modal('show');
					    $('body').append('<embed src="Sound/success.mp3" autostart="true" hidden="true">');
					    var obj = document.createElement("audio");
						  obj.src = "/Sound/error.mp3";
						  obj.volume = 0.1;
						  obj.autoPlay = false;
						  obj.preLoad = true;
						  obj.controls = true;
						  obj.play();

			          }
			        },
			        error: function() {
			            $('.debug-url').html('File was not actualize/created successfully. Please verify wifi connection');
      					$('#Modalko').modal('show');
      					var obj = document.createElement("audio");
						  obj.src = "/Sound/error.mp3";
						  obj.volume = 0.1;
						  obj.autoPlay = false;
						  obj.preLoad = true;
						  obj.controls = true;
						  obj.play();
			        }
			    });




	    	}


	    	showPrivateFiles(id_user);
	    	function showPrivateFiles(id)
	    	{

	    		var s = "";
	    		var tt="";
				  dataValue="&action=2&id="+id;
				  $.ajax({ url:'dashboard/save_private_files.php',
				    data:dataValue,
				    type:'POST', 
				     success:function(data){



				     arr=[];
				     arr =  JSON.parse(data);
				     //console.log(data);
				    if (arr == null || arr.length < 1 ){
				     $('.debug-url').html('Cannot exists private files');
				     $('#Modalko').modal('show');
				    			  var obj2 = document.createElement("audio");
								  obj2.src = "/Sound/error.mp3";
								  obj2.volume = 0.1;
								  obj2.autoPlay = false;
								  obj2.preLoad = true;
								  obj2.controls = true;
								  const playPromise = obj2.play();
									if (playPromise !== null){
									    playPromise.catch(() => { obj2.play(); })
									}
				    }
				    else {
				        
				        for (i=0; i < arr.length; i++)
				        {
				        	if (arr[i].files_private == "" )
				        	{
						     $('.debug-url').html('Cannot exists private files');
						     $('#Modalko').modal('show');
						     	  var obj2 = document.createElement("audio");
								  obj2.src = "/Sound/error.mp3";
								  obj2.volume = 0.1;
								  obj2.autoPlay = false;
								  obj2.preLoad = true;
								  obj2.controls = true;
								  const playPromise = obj2.play();
									if (playPromise !== null){
									    playPromise.catch(() => { obj2.play(); })
									}
						    }
				        	var tt = arr[i].files_private;
				        	files = tt;
				        	var lists_files = tt;
				            var elem = lists_files.split(';');

				            if (elem == "")
				            {
				            	elem = 0;
				            }

				            var list_files = '';


				            for (var i = 0; i < elem.length; ++i) {
		        				names_init.push(elem[i]);
		    				}

		                                    				for(var i=0; i< elem.length; i++)
		                                    				{
		                                    					var s = "";
		                                    					var extension = elem[i].substr( (elem[i].lastIndexOf('.') +1) );



		                                    					switch(extension) {
															        case 'jpg':
															        case 'png':
															        case 'gif':
															            s += "<i class='fa fa-image'></i> <a href='private_files/"+elem[i]+"'><span>" + elem[i] + "</span></a>";
															        break;                         
															        case 'zip':
															        case 'rar':

															            s += "<i class='fas fa-file-archive'></i> <a href='private_files/"+elem[i]+"'><span>" + elem[i] + "</span></a>";
															        break;
															        case 'pdf':
															            s += "<i class='fas fa-file-pdf'></i><a href='private_files/"+elem[i]+"'><span>" + elem[i] + "</span></a>";
															        break;
															        default:
															            s += "<i class='fas fa-file'></i><a href='private_files/"+elem[i]+"'><span>" + elem[i] + "</span></a>";
															    }

															    list_files += '<div id="cont_fil_'+i+'">' + '<font id="fil_blog">' + s +'</font><button id="btn_file_rem" onclick="removeFile('+i+');"> X</button></div>';

		                                    					
     															
   															 }  
   															 $('#content_private_files').html(list_files);   
				        }

				          
				      
				      
				      
				      
				    
				    
				    
				    
				    }
				    
				    

				    },
				    error:function(data){
				     $('.debug-url').html('Error: Cannot exists private files. Please verify wifi connection');
      				 $('#Modalko').modal('show');
				    }
				  });
	    		
	    	}
       </script>


</div>
     

