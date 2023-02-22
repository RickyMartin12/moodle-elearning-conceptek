<?php include '../header/header.php'; ?>

<div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">
 	
			    <div class="banner">
			   
					<h2>
					<a href="#">Administrator</a>
					<i class="fa fa-angle-right"></i>
					<span>Advanced Features</span>
					</h2>
			    </div>


			    <div class="content-top">
					<div class="profile row">
						<div class="col-md-12">
							<div class="col-md-12 profile-bottom w3-row-padding tabs row">
								<div class="w3-panel w3-purple w3-display-container" id="padder">
								  <h5 id="pri_admin"><i class="fas fa-user-lock"></i>&nbsp;&nbsp;Administrator <font style="float: right;"><i class="fas fa-chevron-right" id="notifications_amin"></i></font> </h5>
								</div>
								  <div id="cont_notifications_amin">
									  	 <h6><strong>Administrator privileges System</strong></h6>
									  	 <br>
									  	  <div id="show_privileges">
										  </div>
								  </div>
							</div>
						</div>
			    	</div>
			    </div>
			    <div style="margin-top: -50px"></div>
			    <div class="content-top">
					<div class="profile row">
						<div class="col-md-12">
							<div class="col-md-12 profile-bottom w3-row-padding tabs row">
								<div class="w3-panel w3-purple w3-display-container" id="padder">
								  	<h5 id="pri_user"><i class="fas fa-user"></i>&nbsp;&nbsp;User <font style="float: right;"><i class="fas fa-chevron-right" id="notifications_user"></i></font> </h5>
								  </div>
								  <div id="cont_notifications_user">
								  	<h6><strong>User privileges System</strong></h6>
									  	 <br>
									  	  <div id="show_privileges_user">
			    						   	
										  </div>


								  




								</div>


								




							</div>
						</div>
			    	</div>
			    </div>





			    <div class="copy">
            <p> &copy; 2019 Concept Moodle. All Rights Reserved | Design by <a href="https://concept.shijigroup.com/en/" target="_blank">Concept S.A.</a> </p>
	    </div>
		</div>
		<div class="clearfix"> </div>




       </div>


<?php include '../footer/footer.php'; ?>

<script type="text/javascript">
		var not_anim = 0;

		$("#cont_notifications_amin").slideUp();

		$("#notifications_amin").click(function(e)
		{
			not_anim++;

			if (not_anim % 2 == 1)
			{
				$("#notifications_amin").addClass('fa-chevron-down');
				$("#notifications_amin").removeClass('fa-chevron-right');
			}
			else
			{
				$("#notifications_amin").removeClass('fa-chevron-down');
				$("#notifications_amin").addClass('fa-chevron-right');
			}

			$( "#cont_notifications_amin" ).slideToggle( "slow" );
		});


		var not_user = 0;

		$("#cont_notifications_user").slideUp();

		$("#notifications_user").click(function(e)
		{
			not_user++;

			if (not_user % 2 == 1)
			{
				$("#notifications_user").addClass('fa-chevron-down');
				$("#notifications_user").removeClass('fa-chevron-right');
			}
			else
			{
				$("#notifications_user").removeClass('fa-chevron-down');
				$("#notifications_user").addClass('fa-chevron-right');
			}

			$( "#cont_notifications_user" ).slideToggle( "slow" );
		});


		// bootstrap swicth

		// Privilegios do Admininstrador

		showPrivileges();
		showPrivilegesUser();
  
  
  		function showPrivileges()
  		{
  			var i = 0;
  			var s = "";
  dataValue="&action=4";
  $.ajax({ url:'notifications/action_user.php',
    data:dataValue,
    type:'POST', 
     success:function(data){
     arr=[];
     arr =  JSON.parse(data);
    if (arr == null || arr.length < 1){
     alert('Vazio');
    }
    else {
        	s += '<tr class="action-privileges"><td scope="row">'+arr[i].tipo+'</td><td><input id="home_dashboard-'+arr[i].tipo+'" class="admin_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_dashboard+' data-on-color="success"></td><td><input id="home_site_pages-'+arr[i].tipo+'" class="admin_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages+' data-on-color="success"></td><td><input id="home_site_pages_site_blogs-'+arr[i].tipo+'" class="admin_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_site_blogs+' data-on-color="success"></td><td><input id="home_site_pages_site_badges-'+arr[i].tipo+'" class="admin_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_site_badges+' data-on-color="success"></td><td><input id="home_site_pages_calendar-'+arr[i].tipo+'" class="admin_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_calendar+' data-on-color="success"></td><td><input id="home_site_pages_site_news-'+arr[i].tipo+'" class="admin_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_site_news+' data-on-color="success"></td><td><input id="home_site_pages_main_activities-'+arr[i].tipo+'" class="admin_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_main_activities+' data-on-color="success"></td><td><input id="home_site_pages_main_activities_spa-'+arr[i].tipo+'" class="admin_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_main_activities_spa+' data-on-color="success"></td><td><input id="home_site_pages_main_activities_pos-'+arr[i].tipo+'" class="admin_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_main_activities_pos+' data-on-color="success"></td><td><input id="home_site_pages_main_activities_marketing-'+arr[i].tipo+'" class="admin_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_main_activities_marketing+' data-on-color="success"></td><td><input id="home_site_pages_main_activities_inventory-'+arr[i].tipo+'" class="admin_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_main_activities_inventory+' data-on-color="success"></td><td><input id="home_site_pages_main_activities_golf-'+arr[i].tipo+'" class="admin_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_main_activities_golf+' data-on-color="success"></td><td><input id="home_site_pages_main_activities_user_security-'+arr[i].tipo+'" class="admin_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_main_activities_user_security+' data-on-color="success"></td></tr>';     
        





	            $('#show_privileges').html('<div class="table-responsive"><table class="table" id="tbl"><thead style="background-color: #333; color: #fff;"><tr><th>Username</th><th>Home - Dashboard</th><th>Home - Site Pages</th><th>Home - Site Pages - Site Blogs</th><th>Home - Site Pages - Site Badges</th><th>Home - Site Pages - Calendar</th><th>Home - Site Pages - Site News</th><th>Home - Site Pages - Main Activities</th><th>Home - Site Pages - Main Activities - SPA</th><th>Home - Site Pages - Main Activities - POS</th><th>Home - Site Pages - Main Activities - Marketing</th><th>Home - Site Pages - Main Activities - Inventory</th><th>Home - Site Pages - Main Activities - Golf</th><th>Home - Site Pages - Main Activities - User Security</th></tr></thead><tbody>'+s+'</tbody></table></div><script>$(".bootstrap-switch-label").addClass("disabled");$(".admin_pri_value").on("switchChange.bootstrapSwitch", function(event, state) {menu = this.id;state == true ? is_checked = "checked" : is_checked = "false" ;dataValue = "action=5&tipo="+menu+"&estado="+is_checked; $.ajax({ url:"notifications/action_user.php",data:dataValue,type:"POST",success: function(data){    if (data == 0){alert("Error to change the privileges. Please try gain");} else if (data==1){alert("The privileges was changed sucessfully");}},error: function(){alert("Cannot show the privileges. Please verify wifi connection and try again.");}});});');
    
    
    $(".admin_pri_value").bootstrapSwitch(); 
    
    }
    
    

    },
    error:function(data){
     alert('erro');
    }
  });


	             
	        

	        

  			
  		}




		// Privilegios do User


		function showPrivilegesUser()
  		{
  			var i = 1;
  			var s = "";
  dataValue="&action=4";
  $.ajax({ url:'notifications/action_user.php',
    data:dataValue,
    type:'POST', 
     success:function(data){
     arr=[];
     arr =  JSON.parse(data);
    if (arr == null || arr.length < 1){
     alert('Vazio');
    }
    else {
        
        s += '<tr class="action-privileges"><td scope="row">'+arr[i].tipo+'</td><td><input id="home_dashboard-'+arr[i].tipo+'" class="user_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_dashboard+' data-on-color="success"></td><td><input id="home_site_pages-'+arr[i].tipo+'" class="user_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages+' data-on-color="success"></td><td><input id="home_site_pages_site_blogs-'+arr[i].tipo+'" class="user_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_site_blogs+' data-on-color="success"></td><td><input id="home_site_pages_site_badges-'+arr[i].tipo+'" class="user_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_site_badges+' data-on-color="success"></td><td><input id="home_site_pages_calendar-'+arr[i].tipo+'" class="user_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_calendar+' data-on-color="success"></td><td><input id="home_site_pages_site_news-'+arr[i].tipo+'" class="user_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_site_news+' data-on-color="success"></td><td><input id="home_site_pages_main_activities-'+arr[i].tipo+'" class="user_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_main_activities+' data-on-color="success"></td><td><input id="home_site_pages_main_activities_spa-'+arr[i].tipo+'" class="user_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_main_activities_spa+' data-on-color="success"></td><td><input id="home_site_pages_main_activities_pos-'+arr[i].tipo+'" class="user_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_main_activities_pos+' data-on-color="success"></td><td><input id="home_site_pages_main_activities_marketing-'+arr[i].tipo+'" class="user_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_main_activities_marketing+' data-on-color="success"></td><td><input id="home_site_pages_main_activities_inventory-'+arr[i].tipo+'" class="user_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_main_activities_inventory+' data-on-color="success"></td><td><input id="home_site_pages_main_activities_golf-'+arr[i].tipo+'" class="user_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_main_activities_golf+' data-on-color="success"></td><td><input id="home_site_pages_main_activities_user_security-'+arr[i].tipo+'" class="user_pri_value" type="checkbox" data-size="mini" data-off-color="danger" '+arr[i].home_site_pages_main_activities_user_security+' data-on-color="success"></td></tr>';
	            $('#show_privileges_user').html('<div class="table-responsive"><table class="table" id="tbl"><thead style="background-color: #333; color: #fff;"><tr><th>Username</th><th>Home - Dashboard</th><th>Home - Site Pages</th><th>Home - Site Pages - Site Blogs</th><th>Home - Site Pages - Site Badges</th><th>Home - Site Pages - Calendar</th><th>Home - Site Pages - Site News</th><th>Home - Site Pages - Main Activities</th><th>Home - Site Pages - Main Activities - SPA</th><th>Home - Site Pages - Main Activities - POS</th><th>Home - Site Pages - Main Activities - Marketing</th><th>Home - Site Pages - Main Activities - Inventory</th><th>Home - Site Pages - Main Activities - Golf</th><th>Home - Site Pages - Main Activities - User Security</th></tr></thead><tbody>'+s+'</tbody></table></div><script>$(".bootstrap-switch-label").addClass("disabled");$(".user_pri_value").on("switchChange.bootstrapSwitch", function(event, state) {menu = this.id;state == true ? is_checked = "checked" : is_checked = "false" ;dataValue = "action=5&tipo="+menu+"&estado="+is_checked;  $.ajax({ url:"notifications/action_user.php",data:dataValue,type:"POST",success: function(data){    if (data == 0){alert("Error to change the users privileges. Please try again");} else if (data==1){alert("The Priveleges are changed successfully.");}},error: function(){alert("Cannot chnage the privileges of user. Please verify wifi connection and try again.");}});});');
    $(".user_pri_value").bootstrapSwitch();
    
    }
    
    

    },
    error:function(data){
     alert('erro');
    }
  });  
	        

	         

  			
  		}




</script>
