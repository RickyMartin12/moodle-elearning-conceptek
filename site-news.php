<?php include 'header/header.php'; ?>

<div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">

       			<div class="banner">
			   
					<h2>
					<a href="index.php">Home</a>
					<i class="fa fa-angle-right"></i>
					<a href="#">Site Pages</a> <i class="fa fa-angle-right"></i> <span>Site News</span>
					</h2>
			    </div>

			    
				    <div class="content-top">
						<div class="profile row">

							<div class="col-md-11 profile-bottom w3-row-padding tabs row">

								<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="news_off"></i><i class="fas fa-chevron-down" id="news_on"></i></font>
			                                            <span class="far fa-newspaper"></span>&nbsp;&nbsp;Site News
		                                     </h5>

			                         <div id="news_cont">
										<div class="row">

											<div class="col-md-12">
												<p>General news and announcements</p>
												<br>
												<p>(No announcements have been posted yet.)</p>
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
				




		<div class="copy">
            <p> &copy; 2019 Concept Moodle. All Rights Reserved | Design by <a href="https://concept.shijigroup.com/en/" target="_blank">Concept S.A.</a> </p>
	    </div>
		</div>
		<div class="clearfix"> </div>


       </div>


<?php include 'footer/footer.php'; ?>

<script type="text/javascript">

	$("#news_off").css('display', 'none');
	
	$("#news_on").click(function () {
		$("#news_cont").slideUp('down');
		$("#news_off").css('display', 'block');
		$("#news_on").css('display', 'none');
	});

	$("#news_off").click(function () {
		$("#news_cont").slideDown('down');
		$("#news_off").css('display', 'none');
		$("#news_on").css('display', 'block');
	});

</script>