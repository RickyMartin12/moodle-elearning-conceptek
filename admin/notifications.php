<?php include '../header/header.php'; ?>

<div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">
 	
			    <div class="banner">
			   
					<h2>
					<a href="#">Administrator</a>
					<i class="fa fa-angle-right"></i>
					<span>Notifications</span>
					</h2>
			    </div>





			    <div class="content-top">
					<div class="profile row">
						<div class="col-md-12">
							<div class="col-md-12 profile-bottom w3-row-padding tabs row">
								<div class="w3-panel w3-sand w3-display-container" id="padder">
								  <h3><img src="https://img.icons8.com/material/24/000000/moodle.png" style="margin-top: -5px;">&nbsp;&nbsp;There is newer Moodle version available! <font style="float: right;"><i class="fas fa-chevron-right" id="notifications_amin"></i></font> </h3>
								  <div id="cont_notifications_amin">
								  	<p id="marger"><i class="fas fa-caret-right"></i> Moodle 3.5.2+ (Build: 20180131) Version <strong><a href="#">Download More Info...</a></strong></p>
								  	<p id="marger"><i class="fas fa-caret-right"></i> Moodle 3.4.5+ (Build: 20180131) Version <strong><a href="#">Download More Info...</a></strong></p>
								  	<p id="marger"><i class="fas fa-caret-right"></i> It is strongly recommended that you update your site to the latest version to obtain all recent security and bug fixes.</p>
								  	<br>
								  	<br>
								  	<div style="text-align: center;">
								  		<button class="w3-button w3-purple">Check for available updates</button>
								  	</div>
								  	<br>
								  	<p id="marger"><i class="fas fa-caret-right"></i> Last Check done on 31 October 2018, 11:23</p>


								  </div>




								</div>


								<div class="w3-panel w3-sand w3-display-container" id="padder">								  	
								  	<p id="marger"><i class="fas fa-caret-right"></i> The <strong><a href="#">cron php maintenance script</a></strong> has not been run for at least 24 hours</p>



								</div>




							</div>
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

<?php include '../footer/footer.php'; ?>

<script type="text/javascript">
	var pos_level1 = 0;

		$("#cont_notifications_amin").slideUp();

		$("#notifications_amin").click(function(e)
		{
			pos_level1++;

			if (pos_level1 % 2 == 1)
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



</script>
