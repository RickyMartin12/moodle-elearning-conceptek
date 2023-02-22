</div>
	<script src="https://moodle-elearning-conceptek-production.up.railway.app/js/bootstrap.min.js"> </script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.4.1/tinymce.min.js"></script>
	<script src="https://moodle-elearning-conceptek-production.up.railway.app/js/bootbox.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.0/fullcalendar.min.css">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://moodle-elearning-conceptek-production.up.railway.app/css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="https://moodle-elearning-conceptek-production.up.railway.app/css/bootstrap-datetimepicker-standalone.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.0/fullcalendar.min.js "></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="https://moodle-elearning-conceptek-production.up.railway.app/js/bootstrap-switch.min.js"></script>


	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>

  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>


	


	<script>

		$("#contact").click(function()
			{
				$("#aaa").modal('show');
			});
		var count = 0;

		$(".dropdown-toggle.dropdown-at").on('click', function(e)
		{
			count++;
			if (count % 2 == 1)
			{
				$(".dropdown-menu").slideDown("slow");
			}
			else
			{
				$(".dropdown-menu").slideUp("slow");
			}

		});


		$('.flip-card').click(function() {
    		$(this).toggleClass('hover');
		});

		link = '';

		$("#info").click(function(){
			var link = 'https://concept.shijigroup.com/en/contact-us/';
    		window.open(link);
    		return false;
  		});

  		function openCity(evt, cityName) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(cityName).style.display = "block";
		  evt.currentTarget.className += " active";
		}

		function openCity2(evt, cityName) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent2");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks2");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(cityName).style.display = "block";
		  evt.currentTarget.className += " active";
		}


		$("#menu_click").on('click', function(e)
		{
			$('.sum').addClass('w3-center w3-animate-left');
			$(".tab2").addClass('w3-center w3-animate-left');
		});

		$("#home_click").on('click', function(e)
		{
			$('.s').addClass('w3-center w3-animate-left');
			$(".tab").addClass('w3-center w3-animate-left');
		});

		$("#anim, #anim2, #anim3, #anim4, #anim5, #anim6").css('display', 'none');

		$("#prog").on('click', function(e)
		{
			$("#anim, #anim2, #anim3, #anim4, #anim5, #anim6").addClass('fadeIn');
			setTimeout(function(){ $("#anim").addClass('w3-animate-top'); }, 1000);
			setTimeout(function(){ $("#anim2").addClass('w3-animate-top'); }, 1000);
			setTimeout(function(){ $("#anim3").addClass('w3-animate-top'); }, 1000);
			setTimeout(function(){ $("#anim4").addClass('w3-animate-top'); }, 1000);
			setTimeout(function(){ $("#anim5").addClass('w3-animate-top'); }, 1000);
			setTimeout(function(){ $("#anim6").addClass('w3-animate-top'); }, 1000);
		});

		//Pagination
		pageSize = 3;

		showPage = function(page) {
		    $(".line-content").hide();
		    $(".line-content").each(function(n) {
		        if (n >= pageSize * (page - 1) && n < pageSize * page)
		            $(this).show();
		    });        
		}
	    
		showPage(1);

		$("#pagin li a").click(function() {
		    $("#pagin li a").removeClass("current");
		    $(this).addClass("current");
		    showPage(parseInt($(this).text())) 
		});

		// Activar e Desativar o Perfil do Utilizador

		$("#perf_act").css('display','none');

		var c_com_som = 0;
		var s_com_som = 0;

		$("#perfil").css('display', 'none');
		$("#perf_in").on('click', function(e)
		{
			c_com_som=1;
		    if (c_com_som == 1)
		    {
		       $("#perf_act").css('display','inline-block');
		       $("#perf_in").css('display','none');
		    }
			
			$("#perfil").removeClass('w3-animate-fading');
			$("#perfil").addClass('w3-animate-opacity');
			setTimeout(function(){ $("#perfil").css('display', 'block'); }, 1000);
		});

		$("#perf_act").on('click', function(e)
		{
			s_com_som=1;
		    if (s_com_som == 1)
		    {
		       $("#perf_act").css('display','none');
		       $("#perf_in").css('display','inline-block');
		    }
		    $("#perfil").removeClass('w3-animate-opacity');
		    $("#perfil").addClass('w3-animate-fading');
		    setTimeout(function(){ $("#perfil").css('display', 'none'); }, 1000);
		});

		// Activar e Desativar o calendário

		$("#caln").css('display','none');
		$("#calendar_act").css('display','none');

		var calendario = 0;
		var s_calendario = 0;

		$("#calendar_in").on('click', function(e)
		{
			calendario=1;
		    if (calendario == 1)
		    {
		       $("#calendar_act").css('display','inline-block');
		       $("#calendar_in").css('display','none');
		    }
			
			$("#caln").removeClass('w3-animate-fading');
			$("#caln").addClass('w3-animate-opacity');
			setTimeout(function(){ $("#caln").css('display', 'block'); }, 1000);
		});

		$("#calendar_act").on('click', function(e)
		{
			s_calendario=1;
		    if (s_calendario == 1)
		    {
		       $("#calendar_act").css('display','none');
		       $("#calendar_in").css('display','inline-block');
		    }
		    $("#caln").removeClass('w3-animate-opacity');
		    $("#caln").addClass('w3-animate-fading');
		    setTimeout(function(){ $("#caln").css('display', 'none'); }, 1000);
		});

		$(".blank22 > p").html("");

		// Activar e Desativar os Ficheiros Privados

		$("#file-down").css('display', 'none');
		$("#file-cont").css('display','none');

		var file_1 = 0;
		var s_file_1 = 0;

		$("#file-left").on('click', function(e)
		{
			file_1=1;
		    if (file_1 == 1)
		    {
		       $("#file-down").css('display','inline-block');
		       $("#file-left").css('display','none');
		    }
			
			$("#file-cont").removeClass('w3-animate-fading');
			$("#file-cont").addClass('w3-animate-opacity');
			setTimeout(function(){ $("#file-cont").css('display', 'block'); }, 1000);
		});

		$("#file-down").on('click', function(e)
		{
			s_file_1=1;
		    if (s_file_1 == 1)
		    {
		       $("#file-down").css('display','none');
		       $("#file-left").css('display','inline-block');
		    }
		    $("#file-cont").removeClass('w3-animate-opacity');
		    $("#file-cont").addClass('w3-animate-fading');
		    setTimeout(function(){ $("#file-cont").css('display', 'none'); }, 1000);
		});

		// Activar e Desativar os Crachas Privados

		$("#bag_act").css('display', 'none');
		$("#badge-cont").css('display','none');


		var bag = 0;
		var s_bag = 0;

		$("#bag_in").on('click', function(e)
		{
			bag=1;
		    if (bag == 1)
		    {
		       $("#bag_act").css('display','inline-block');
		       $("#bag_in").css('display','none');
		    }
			
			$("#badge-cont").removeClass('w3-animate-fading');
			$("#badge-cont").addClass('w3-animate-opacity');
			setTimeout(function(){ $("#badge-cont").css('display', 'block'); }, 1000);
		});

		$("#bag_act").on('click', function(e)
		{
			s_bag=1;
		    if (s_bag == 1)
		    {
		       $("#bag_act").css('display','none');
		       $("#bag_in").css('display','inline-block');
		    }
		    $("#badge-cont").removeClass('w3-animate-opacity');
		    $("#badge-cont").addClass('w3-animate-fading');
		    setTimeout(function(){ $("#badge-cont").css('display', 'none'); }, 1000);
		});

		// Activar e Desativar os Eventos

		$("#eve_act").css('display', 'none');
		$("#eve-cont").css('display','none');


		var eve = 0;
		var s_eve = 0;

		$("#eve_in").on('click', function(e)
		{
			eve=1;
		    if (eve == 1)
		    {
		       $("#eve_act").css('display','inline-block');
		       $("#eve_in").css('display','none');
		    }
			
			$("#eve-cont").removeClass('w3-animate-fading');
			$("#eve-cont").addClass('w3-animate-opacity');
			setTimeout(function(){ $("#eve-cont").css('display', 'block'); }, 1000);
		});

		$("#eve_act").on('click', function(e)
		{
			s_eve=1;
		    if (s_eve == 1)
		    {
		       $("#eve_act").css('display','none');
		       $("#eve_in").css('display','inline-block');
		    }
		    $("#eve-cont").removeClass('w3-animate-opacity');
		    $("#eve-cont").addClass('w3-animate-fading');
		    setTimeout(function(){ $("#eve-cont").css('display', 'none'); }, 1000);
		});

		// Activar e Desativar os Users


		$("#usr_act").css('display', 'none');
		$("#usr-cont").css('display', 'none');

		var usr = 0;
		var s_usr = 0;

		$("#usr_in").on('click', function(e)
		{
			usr=1;
		    if (usr == 1)
		    {
		       $("#usr_act").css('display','inline-block');
		       $("#usr_in").css('display','none');
		    }
			
			$("#usr-cont").removeClass('w3-animate-fading');
			$("#usr-cont").addClass('w3-animate-opacity');
			setTimeout(function(){ $("#usr-cont").css('display', 'block'); }, 1000);
		});

		$("#usr_act").on('click', function(e)
		{
			s_usr=1;
		    if (s_usr == 1)
		    {
		       $("#usr_act").css('display','none');
		       $("#usr_in").css('display','inline-block');
		    }
		    $("#usr-cont").removeClass('w3-animate-opacity');
		    $("#usr-cont").addClass('w3-animate-fading');
		    setTimeout(function(){ $("#usr-cont").css('display', 'none'); }, 1000);
		});

		var name_img = $("#logged_username_img").attr("src");


		var file=name_img.split('/').pop();

		var s = file;





		// Reports 

		$("#report-down").css('display', 'none');
		$("#report-cont").css('display', 'none');

		var report = 0;
		var s_report = 0;

		$("#report-left").on('click', function(e)
		{
			report=1;
		    if (report == 1)
		    {
		       $("#report-down").css('display','inline-block');
		       $("#report-left").css('display','none');
		    }
			
			$("#report-cont").removeClass('w3-animate-fading');
			$("#report-cont").addClass('w3-animate-opacity');
			setTimeout(function(){ $("#report-cont").css('display', 'block'); }, 1000);
		});

		$("#report-down").on('click', function(e)
		{
			s_report=1;
		    if (s_report == 1)
		    {
		       $("#report-down").css('display','none');
		       $("#report-left").css('display','inline-block');
		    }
		    $("#report-cont").removeClass('w3-animate-opacity');
		    $("#report-cont").addClass('w3-animate-fading');
		    setTimeout(function(){ $("#report-cont").css('display', 'none'); }, 1000);
		});

		$(".login-user").html('<div class="centering"><img src="images/users/'+s+'" class="img-responsive" style="width: 150px; height: 150px; margin: auto;"><br><strong> Usrname: </strong>'+$("#perfil_nome_user").html()+'<br><i class="fas fa-calendar-day"></i><strong> Session Date:</strong> <?php echo $_COOKIE['data_login'];  ?><br> <i class="fas fa-clock"></i><strong> Session Hour:</strong> <?php echo $_COOKIE['hora_login'];  ?></div>');





		//-------------------------------------------------------------------------------------

		var count_line_minus = 0;

		$("#spa_cot").slideUp();

		$("#line_minus").click(function(e)
		{
			count_line_minus++;
			if (count_line_minus % 2 == 1)
			{
				$("#line_minus").addClass('fa-minus');
				$("#line_minus").removeClass('fa-plus');
			}
			else
			{
				$("#line_minus").removeClass('fa-minus');
				$("#line_minus").addClass('fa-plus');
			}

			$( "#spa_cot" ).slideToggle( "slow" );
		});

		//line_minus_pos

		var count_line_minus_pos = 0;

		$("#pos_cot").slideUp();

		$("#line_minus_pos").click(function(e)
		{
			count_line_minus_pos++;

			if (count_line_minus_pos % 2 == 1)
			{
				$("#line_minus_pos").addClass('fa-minus');
				$("#line_minus_pos").removeClass('fa-plus');
			}
			else
			{
				$("#line_minus_pos").removeClass('fa-minus');
				$("#line_minus_pos").addClass('fa-plus');
			}

			$( "#pos_cot" ).slideToggle( "slow" );
		});

		var count_line_minus_mem = 0;

		$("#mem_cot").slideUp();

		$("#line_minus_mem").click(function(e)
		{
			count_line_minus_mem++;

			if (count_line_minus_mem % 2 == 1)
			{
				$("#line_minus_mem").addClass('fa-minus');
				$("#line_minus_mem").removeClass('fa-plus');
			}
			else
			{
				$("#line_minus_mem").removeClass('fa-minus');
				$("#line_minus_mem").addClass('fa-plus');
			}

			$( "#mem_cot" ).slideToggle( "slow" );
		});

		var count_line_minus_inv = 0;

		$("#inv_cot").slideUp();

		$("#line_minus_inv").click(function(e)
		{
			count_line_minus_inv++;

			if (count_line_minus_inv % 2 == 1)
			{
				$("#line_minus_inv").addClass('fa-minus');
				$("#line_minus_inv").removeClass('fa-plus');
			}
			else
			{
				$("#line_minus_inv").removeClass('fa-minus');
				$("#line_minus_inv").addClass('fa-plus');
			}

			$( "#inv_cot" ).slideToggle( "slow" );
		});



		var count_line_minus_golf = 0;

		$("#golf_cot").slideUp();

		$("#line_minus_golf").click(function(e)
		{
			count_line_minus_golf++;

			if (count_line_minus_golf % 2 == 1)
			{
				$("#line_minus_golf").addClass('fa-minus');
				$("#line_minus_golf").removeClass('fa-plus');
			}
			else
			{
				$("#line_minus_golf").removeClass('fa-minus');
				$("#line_minus_golf").addClass('fa-plus');
			}

			$( "#golf_cot" ).slideToggle( "slow" );
		});

		var count_line_minus_user_security = 0;

		$("#user_security_cot").slideUp();

		$("#line_minus_user_security").click(function(e)
		{
			count_line_minus_user_security++;

			if (count_line_minus_user_security % 2 == 1)
			{
				$("#line_minus_user_security").addClass('fa-minus');
				$("#line_minus_user_security").removeClass('fa-plus');
			}
			else
			{
				$("#line_minus_user_security").removeClass('fa-minus');
				$("#line_minus_user_security").addClass('fa-plus');
			}

			$( "#user_security_cot" ).slideToggle( "slow" );
		});




		$("#mil_act").css('display', 'none');
		$("#mil-cont").css('display', 'none');

		var report = 0;
		var s_report = 0;

		$("#mil_in").on('click', function(e)
		{
			mil=1;
		    if (mil == 1)
		    {
		       $("#mil_act").css('display','inline-block');
		       $("#mil_in").css('display','none');
		    }
			
			$("#mil-cont").removeClass('w3-animate-fading');
			$("#mil-cont").addClass('w3-animate-opacity');
			setTimeout(function(){ $("#mil-cont").css('display', 'block'); }, 1000);
		});

		$("#mil_act").on('click', function(e)
		{
			s_mil=1;
		    if (s_mil == 1)
		    {
		       $("#mil_act").css('display','none');
		       $("#mil_in").css('display','inline-block');
		    }
		    $("#mil-cont").removeClass('w3-animate-opacity');
		    $("#mil-cont").addClass('w3-animate-fading');
		    setTimeout(function(){ $("#mil-cont").css('display', 'none'); }, 1000);
		});


		$("#course_act").css('display', 'none');
		$("#course-cont").css('display', 'none');

		var report = 0;
		var s_report = 0;

		$("#course_in").on('click', function(e)
		{
			course=1;
		    if (course == 1)
		    {
		       $("#course_act").css('display','inline-block');
		       $("#course_in").css('display','none');
		    }
			
			$("#course-cont").removeClass('w3-animate-fading');
			$("#course-cont").addClass('w3-animate-opacity');
			setTimeout(function(){ $("#course-cont").css('display', 'block'); }, 1000);
		});

		$("#course_act").on('click', function(e)
		{
			s_course=1;
		    if (s_course == 1)
		    {
		       $("#course_act").css('display','none');
		       $("#course_in").css('display','inline-block');
		    }
		    $("#course-cont").removeClass('w3-animate-opacity');
		    $("#course-cont").addClass('w3-animate-fading');
		    setTimeout(function(){ $("#course-cont").css('display', 'none'); }, 1000);
		});


		// Grades



		var spa_level1 = 0;

		$("#spa_level1_cont").slideUp();

		$("#spa_level1").click(function(e)
		{
			spa_level1++;

			if (spa_level1 % 2 == 1)
			{
				$("#spa_level1").addClass('fa-chevron-down');
				$("#spa_level1").removeClass('fa-chevron-right');
			}
			else
			{
				$("#spa_level1").removeClass('fa-chevron-down');
				$("#spa_level1").addClass('fa-chevron-right');
			}

			$( "#spa_level1_cont" ).slideToggle( "slow" );
		});




		var spa_level2 = 0;

		$("#spa_level2_cont").slideUp();

		$("#spa_level2").click(function(e)
		{
			spa_level2++;

			if (spa_level2 % 2 == 1)
			{
				$("#spa_level2").addClass('fa-chevron-down');
				$("#spa_level2").removeClass('fa-chevron-right');
			}
			else
			{
				$("#spa_level2").removeClass('fa-chevron-down');
				$("#spa_level2").addClass('fa-chevron-right');
			}

			$( "#spa_level2_cont" ).slideToggle( "slow" );
		});


		var spa_level3 = 0;

		$("#spa_level3_cont").slideUp();

		$("#spa_level3").click(function(e)
		{
			spa_level3++;

			if (spa_level3 % 2 == 1)
			{
				$("#spa_level3").addClass('fa-chevron-down');
				$("#spa_level3").removeClass('fa-chevron-right');
			}
			else
			{
				$("#spa_level3").removeClass('fa-chevron-down');
				$("#spa_level3").addClass('fa-chevron-right');
			}

			$( "#spa_level3_cont" ).slideToggle( "slow" );
		});





		var pos_level1 = 0;

		$("#pos_level1_cont").slideUp();

		$("#pos_level1").click(function(e)
		{
			pos_level1++;

			if (pos_level1 % 2 == 1)
			{
				$("#pos_level1").addClass('fa-chevron-down');
				$("#pos_level1").removeClass('fa-chevron-right');
			}
			else
			{
				$("#pos_level1").removeClass('fa-chevron-down');
				$("#pos_level1").addClass('fa-chevron-right');
			}

			$( "#pos_level1_cont" ).slideToggle( "slow" );
		});




		var pos_level2 = 0;

		$("#pos_level2_cont").slideUp();

		$("#pos_level2").click(function(e)
		{
			pos_level2++;

			if (pos_level2 % 2 == 1)
			{
				$("#pos_level2").addClass('fa-chevron-down');
				$("#pos_level2").removeClass('fa-chevron-right');
			}
			else
			{
				$("#pos_level2").removeClass('fa-chevron-down');
				$("#pos_level2").addClass('fa-chevron-right');
			}

			$( "#pos_level2_cont" ).slideToggle( "slow" );
		});


		var pos_level3 = 0;

		$("#pos_level3_cont").slideUp();

		$("#pos_level3").click(function(e)
		{
			pos_level3++;

			if (pos_level3 % 2 == 1)
			{
				$("#pos_level3").addClass('fa-chevron-down');
				$("#pos_level3").removeClass('fa-chevron-right');
			}
			else
			{
				$("#pos_level3").removeClass('fa-chevron-down');
				$("#pos_level3").addClass('fa-chevron-right');
			}

			$( "#pos_level3_cont" ).slideToggle( "slow" );
		});



		var inv_level1 = 0;

		$("#inv_level1_cont").slideUp();

		$("#inv_level1").click(function(e)
		{
			inv_level1++;

			if (inv_level1 % 2 == 1)
			{
				$("#inv_level1").addClass('fa-chevron-down');
				$("#inv_level1").removeClass('fa-chevron-right');
			}
			else
			{
				$("#inv_level1").removeClass('fa-chevron-down');
				$("#inv_level1").addClass('fa-chevron-right');
			}

			$( "#inv_level1_cont" ).slideToggle( "slow" );
		});


		var mem_level1 = 0;

		$("#mem_level1_cont").slideUp();

		$("#mem_level1").click(function(e)
		{
			mem_level1++;

			if (mem_level1 % 2 == 1)
			{
				$("#mem_level1").addClass('fa-chevron-down');
				$("#mem_level1").removeClass('fa-chevron-right');
			}
			else
			{
				$("#mem_level1").removeClass('fa-chevron-down');
				$("#mem_level1").addClass('fa-chevron-right');
			}

			$( "#mem_level1_cont" ).slideToggle( "slow" );
		});


		var golf_level1 = 0;

		$("#golf_level1_cont").slideUp();

		$("#golf_level1").click(function(e)
		{
			golf_level1++;

			if (golf_level1 % 2 == 1)
			{
				$("#golf_level1").addClass('fa-chevron-down');
				$("#golf_level1").removeClass('fa-chevron-right');
			}
			else
			{
				$("#golf_level1").removeClass('fa-chevron-down');
				$("#golf_level1").addClass('fa-chevron-right');
			}

			$( "#golf_level1_cont" ).slideToggle( "slow" );
		});



		// Courses

		$("#pre_off").css('display','none');

	    $("#pre_on").click(function () 
	    {
		  		$("#pre_cont").slideUp("slow");
	    		$("#pre_on").css('display', 'none');
	    		$("#pre_off").css('display', 'block');
	  	});

	  	$("#pre_off").click(function () 
	    {
		  		$("#pre_cont").slideDown("slow");
	    		$("#pre_off").css('display', 'none');
	    		$("#pre_on").css('display', 'block');
	  	});

		// Edit Profile


		var name_img_pre = $("#logged_username_img").attr("src");



		

		var file_pre=name_img_pre.split('/').pop();

		var s_pre = file_pre;

		$(document).ready(function()
		{
				$("#image_prof_pre").on('change', function (e){
				  e.preventDefault();
				  var image = $("#image_prof_pre").prop("files")[0];
				  createFormData_2(image);
				 });
		});


		function createFormData_2(image)
		{
		 var formImage = new FormData();
		 formImage.append('userImage', image);
		 uploadFormData_2(formImage);
		}

		function uploadFormData_2(formData) 
		{
		 $.ajax({
		 url: "upload_images_user.php",
		 type: "POST",
		 data: formData,
		 contentType:false,
		 cache: false,
		 processData: false,
		 success: function(data){
		 	s_pre = data;
		  $("#logo_user_perf_pre").html('<img id="logged_username_img" style="width: 150px; height: 150px;" src="images/users/'+data+'" class="img-responsive"><br>');
		 }});
		}


		function chPermission_def()
			{
			    $("#tipo_utilizador_perfil_pre").val();
			    
			    if ($("#tipo_utilizador_perfil_pre").val() == 'Administrator')
			    {
			        $("#pri_utilizador_perfil_pre").val(1);
			    }
			    if ($("#tipo_utilizador_perfil_pre").val() == 'User')
			    {
			        $("#pri_utilizador_perfil_pre").val(2);
			    }
			}



		$("#change_perfil").click(function(e)
		{
			var perfil_user_edit_pre = $("#perfil_user_edit_pre");
			var username = $("#logged_username_name").html();
			var departamento = $("#logged_perfil_dep_user").val();
			var email = $("#logged_perfil_email_user").val();
			var hab = $("#logged_perfil_hab_user").val();
			var pais = $("#logged_perfil_pais_user").val();
			var tipo_utilizador = $("#tipo_utilizador_perfil_usr").val();
			var pri_utilizador = $("#pri_utilizador_perfil_usr").val();
			$("#nome_utilizador_perfil_pre").val(username);
			$("#edit_perfil_username_pre").html(username);
			$("#nome_departament_perfil_pre").val(departamento);
			$("#nome_country_perfil_pre").val(pais);
			$("#nome_skills_perfil_pre").val(hab);
			$("#nome_email_perfil_pre").val(email);
			$("#tipo_utilizador_perfil_pre").val(tipo_utilizador);
			$("#pri_utilizador_perfil_pre").val(pri_utilizador);
			$("#logo_user_perf_pre").html('<img src="images/users/'+s_pre+'" class="img-responsive"><br>');
			perfil_user_edit_pre.modal('show');
		});

		$("#edit_utilizador_pre").click(function(e)
		{
			var perfil_user_edit_pre = $("#perfil_user_edit_pre");
			var user_name_prof = $("#nome_utilizador_perfil_pre").val();
			var dep = $("#nome_departament_perfil_pre").val();
			var email = $("#nome_email_perfil_pre").val();
			var pais = $("#nome_country_perfil_pre").val();
			var hab = $("#nome_skills_perfil_pre").val();
			var tipo_utilizador = $("#tipo_utilizador_perfil_pre").val();
			var pri_utilizador = $("#pri_utilizador_perfil_pre").val();
			datav="action=1&utilizador="+user_name_prof+"&pais="+pais+"&email="+email+"&tipo_utilizador="+tipo_utilizador+"&privilegios="+pri_utilizador+"&departament="+dep+"&skills="+hab+"&img_logo="+s_pre+"&id="+<?php echo $_COOKIE['id'] ?>;
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
			         $('.debug-url').html('The User Profile <strong class="cpt">'+<?php echo $_COOKIE['id']; ?>+'</strong> was updated sucessfully');
	                  $("#Modalok").modal('show');
	                  $('html, body').animate({ scrollTop: 0 }, 500);
	                  setTimeout(function(){
	                  $('#Modalok').modal('hide');},2500);
	                  setTimeout(function(){  location.reload();}, 2500);
		          }
		          else
		          {
		          	  $('.debug-url').html('User Profile #<strong>'+<?php echo $_COOKIE['id']; ?>+'</strong> was not updated sucessfully');
	                  $("#Modalko").modal('show');
	                  setTimeout(function(){  $('#Modalko').modal('hide');}, 2500);
			       }
		        },
		        error: function() {
		        	 $('.debug-url').html("The User Profile was not updated successfully. Verify the wifi connection and try again");
		            $("#Modalko").modal('show');
		        }
		    });
			perfil_user_edit_pre.modal('hide');

			
		});

		// Mudar de Password

		$(document).ready(function() {
		    $("#show_hide_password a").on('click', function(event) {
		        event.preventDefault();
		        if($('#show_hide_password input').attr("type") == "text"){
		            $('#show_hide_password input').attr('type', 'password');
		            $('#show_hide_password i').addClass( "fa-eye-slash" );
		            $('#show_hide_password i').removeClass( "fa-eye" );
		        }else if($('#show_hide_password input').attr("type") == "password"){
		            $('#show_hide_password input').attr('type', 'text');
		            $('#show_hide_password i').removeClass( "fa-eye-slash" );
		            $('#show_hide_password i').addClass( "fa-eye" );
		        }
		    });

		    $("#show_hide_password_conf a").on('click', function(event) {
		        event.preventDefault();
		        if($('#show_hide_password_conf input').attr("type") == "text"){
		            $('#show_hide_password_conf input').attr('type', 'password');
		            $('#show_hide_password_conf i').addClass( "fa-eye-slash" );
		            $('#show_hide_password_conf i').removeClass( "fa-eye" );
		        }else if($('#show_hide_password_conf input').attr("type") == "password"){
		            $('#show_hide_password_conf input').attr('type', 'text');
		            $('#show_hide_password_conf i').removeClass( "fa-eye-slash" );
		            $('#show_hide_password_conf i').addClass( "fa-eye" );
		        }
		    });
		});


		$("#change_password").click(function(e)
		{
			var password_change_modal = $("#password_change_modal");
			$("#nova_passord_pre").val('');
			$("#conf_nova_passord_pre").val('');
			password_change_modal.modal('show');
		});

		$("#salvar_password").click(function(e)
		{
			e.preventDefault();
			var password_change_modal = $("#password_change_modal");
			var nova_passord_pre = $("#nova_passord_pre").val();
			var conf_nova_passord_pre = $("#conf_nova_passord_pre").val();
			datav="action=2&password="+nova_passord_pre+"&conf_password="+conf_nova_passord_pre+"&id="+<?php echo $_COOKIE['id'] ?>;
			$('.back').show();
		    e.preventDefault();
		    $.ajax({
		        type: "POST",
		        url: "profile/action_profile.php",
		        data: datav,
		        cache: false,
		        success: function(data) {
		          $('.back').fadeOut();
		          arr = [];
		          arr = JSON.parse(data);
		          if (arr.error){
		            $(".debug-url").html("Please, Verify:<br><br>"+arr.error+"<br> Correct the error and try again");
                    $('#Modalko').modal('show');
		          }
		          else if (arr.success == 0)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('The User Password <?php echo $_COOKIE['username'] ?> was not actualized successfully');
                        $('#Modalko').modal('show');
                    }
                    else if (arr.success == 1)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('The User Password <?php echo $_COOKIE['username'] ?> was actualized successfully');
                        $('#Modalok').modal('show');
                        setTimeout(function(){  window.location = 'logout.php'; }, 2500);
                    }
		        },
		        error: function() {
		        	 $('.debug-url').html("The User Password <?php echo $_COOKIE['username'] ?> was not actualized successfully. Verify the wifi connection and try again");
		            $("#Modalko").modal('show');
		        }
		    });
		    password_change_modal.modal('hide');
		});

		$("#quest_click").on('click', function(e)
		{
			var quest_modal = $("#quest_modal");
			quest_modal.modal('show');
		});


		function saveQuest()
		{
			var quest_modal = $("#quest_modal");
			var per_3 = $("#sel_per_3").val().replace(/\n/g, "<br />");
			var per_1 = $('input[name=sel_per_1]:checked').val();
			var per_2 = $('input[name=sel_per_2]:checked').val();
			var obs_per_1 = $("#obs_perg_1").val();
			var obs_per_2 = $("#obs_perg_2").val();
		        if ($('#sel_per_1_1').is(":checked") == false && $('#sel_per_1_2').is(":checked") == false) {
		            per_1 = '';
		        }
		        if ($('#sel_per_2_1').is(":checked") == false && $('#sel_per_2_2').is(":checked") == false) {
		            per_2 = '';
		        }
			dataValue = "per_1="+per_1+"&obs_per_1="+obs_per_1+"&per_2="+per_2+"&obs_per_2="+obs_per_2+"&per_3="+per_3;
			$.ajax({ url:'footer/action_quest.php',
			data:dataValue,
			    type:'POST', 
			    cache: false,
			    success:function(data){
			       if(data == 0)
			      {
			            $(".back").hide();
			            $(".load").show();
			            $('.debug-url').html("The Questionnaire was submitted successfully");
			            $("#Modalok").modal('show');
			            setTimeout(function(){
			                $('#Modalok').modal('hide');},2500
                        );
			     }
			     else
			     {
			      $(".back").hide();
			      $(".load").show();
			      $('.debug-url').html("Please verify the following fields:<br><br>"+data+"<br> and try again.");
			        $('#Modalko').modal('show');
			     }
			   },
			 error:function(){
			     $(".back").hide();
			     $(".load").show();
			     $('.debug-url').html("The Questionnaire was not submitted successfully. Verify the wifi connection and try again");
			        $('#Modalko').modal('show');
			    }
             });
			quest_modal.modal('hide');
		}
	</script>


</body>
</html>