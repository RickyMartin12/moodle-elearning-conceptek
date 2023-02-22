<?php
	$header = $_SERVER['DOCUMENT_ROOT']. "/header/header.php";
	$footer = $_SERVER['DOCUMENT_ROOT']. "/footer/footer.php";
?>

<?php include $header; ?>

		<style type="text/css">
			.panel-heading, .panel-footer
			{
				color: #fff;
    			background-color: #337ab7;
    			border-color: #337ab7;
    			border-radius: 0px;
			}

			

		</style>



        <div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">
 	
			    <div class="banner">
			   
					<h2>
					<a href="/index.php">Home</a>
					<i class="fa fa-angle-right"></i>
					<span>Ver Grades</span>
					</h2>
			    </div>

			    <div class="content-top">
					<div class="profile row" style="padding: 0px;">
						<div class="col-md-12">
							<div class="col-md-12 profile-bottom w3-row-padding tabs row">
								<div class="row">

									<h2 class="centering">Grades Courses</h2>
									<br>

									<div id="show_grades_courses">

									</div>

									<div class="botter2"></div>


									<?php if ($_COOKIE['privilegios'] == 'Administrator' ) { ?>
									<div class="col-md-12 col-xs-12 centering">
												<a class="btn btn-info" role="button" onclick="addGrade();"><i class="fa fa-th"></i> Add Grade</a>
												<br><br>
											</div>

									<?php } ?>
									
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



       <div class="modal fade" id="add_grades" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title"><i class="fa fa-th"></i> Add Grade</h4>
			        </div>
			        <div class="modal-body">
			        	 <div class="row">

				        	<div class="col-md-12 col-xs-12">

					        	<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" >
			                         <span class="fas fa-graduation-cap"></span></span>&nbsp;&nbsp;Course e Sub-Course
			                    </h5>

		                	</div>

				        </div>

						<div class="row">
				        	<div class="col-md-6 col-xs-12">  
		                            <div class="form-group">
									      <label for="nome_curso"><i class="fas fa-graduation-cap"></i> Course:</label>
									      <select class="form-control" id="nome_cursos" onchange="getSubCourse(this.value);">
									      </select>


									</div>
							</div>
							<div class="col-md-6 col-xs-12">
									<div class="form-group">
									      <label for="nome_curso"><i class="fas fa-graduation-cap"></i> Sub Course:</label>
									      <select class="form-control" id="sub_nome_cursos" onchange="getCoursesbyID($('#nome_cursos').val(), this.value);">
									      </select>


									</div>
							</div>



							<input type="hidden" id="id_cursos">
				        	

				        	<div class="botter2"></div>
				        	
				        </div>

				        <div class="botter2"></div>



				        <div class="row">

				        	<div class="col-md-12 col-xs-12">

					        	<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" >
			                         <span class="fas fa-percent"></span>&nbsp;&nbsp;Percent Details
			                    </h5>

		                	</div>

				        </div>

				        <div class="row">
				        	<div class="col-md-4 col-xs-12">
									<div class="form-group">
									      <label for="nome_curso"><i class="fas fa-sort-numeric-up"></i> Grade Media:</label>
									      <input type="text" class="form-control" id="grade_media" placeholder="Insert Grade Media">
									</div>
							</div>

							<div class="col-md-4 col-xs-12">
									<div class="form-group">
									      <label for="grade_curso"><i class="fas fa-exchange-alt"></i> Range:</label>
									      <input type="text" readonly="readonly" class="form-control" id="range" placeholder="Range">
									</div>
							</div>

							<div class="col-md-4 col-xs-12">
									<div class="form-group">
									      <label for="grade_curso"><i class="fas fa-percentage"></i> Percent:</label>
									      <input type="text" readonly="readonly" class="form-control" id="percent" placeholder="Percent">
									</div>
							</div>

							<div class="botter2"></div>

				        </div>


				        <div class="botter2"></div>

				        <div class="row">

				        	<div class="col-md-12 col-xs-12">

					        	<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" >
			                         <i class="fas fa-info-circle"></i>&nbsp;&nbsp;Feedback
			                    </h5>

		                	</div>

				        </div>

				        <div class="row">
				        	<div class="col-md-12 col-xs-12">

				        		<div class="form-group">
									      <label for="grade_curso"><i class="fas fa-comment"></i> Feedback:</label>
									      <textarea class="form-control" rows="5" name="feedback" id="feedback" placeholder="Adicione um contexto"></textarea>
									</div>

				        	</div>
				        </div>



				       

				   





			        </div>
			        <div class="modal-footer">
			        	<p style='text-align:center; margin:0;'><img src="/images/cs.png" class="logo-nav" style="width:68px;"></p>
				        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancel</font></button>
	                    <button title="Guardar as alterações do blogue" type="button" class="btn btn-success" onclick="saveGrades();"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Save</font></button>
			        </div>
			      </div>
			      
			    </div>
			  </div>

<?php include $footer; ?>

<script type="text/javascript">

var inc_d = 0;



function getCourses()
{
	var s = '';
	var s1 = '';

	s += '<option value ="">Choose Course Name..</option>';
	s1 += '<option value ="">Choose Sub Course Name...</option>';

	$("#sub_nome_cursos").prop('disabled', true);

	$("#nome_cursos").html(s);
	$("#sub_nome_cursos").html(s1);


  setTimeout(function(){ 
  dataValue='action=4';
    $.ajax({ url:'/cursos/action/action_cursos.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);

          if (arr.length == null || arr.length < 1 )
          {
            
          }
          else 
          {
            for(i=0;i<arr.length;i++)
            {								
				
				s +='<option value="'+arr[i].cursos+'">'+arr[i].cursos+'</option>';

			}
						
			$("#nome_cursos").html(s);


            
            
            
          }
        },
        error:function(data){
       		}
        });
    
    }, 1000);

}


function getSubCourse(nome_curso)
{
	var s1 = '';

	s1 += '<option value ="">Choose Sub Course Name...</option>';

	$("#sub_nome_cursos").prop('disabled', false);

	$("#sub_nome_cursos").html(s1);


  setTimeout(function(){ 
  dataValue='action=7&nome_curso='+escape(nome_curso);
    $.ajax({ url:'/cursos/action/action_cursos.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);

          if (arr.length == null || arr.length < 1 )
          {
            
          }
          else 
          {
            for(i=0;i<arr.length;i++)
            {								
				
				s1 +='<option value="'+arr[i].sub_cursos+'">'+arr[i].sub_cursos+'</option>';

			}
						
			$("#sub_nome_cursos").html(s1);


            
            
            
          }
        },
        error:function(data){
       		}
        });
    
    }, 1000);
}

	var pos_level1 = 0;

		$("#cont_info_category").slideUp();

		$("#info_category").click(function(e)
		{
			pos_level1++;

			if (pos_level1 % 2 == 1)
			{
				$("#info_category").addClass('fa-chevron-down');
				$("#info_category").removeClass('fa-chevron-right');
			}
			else
			{
				$("#info_category").removeClass('fa-chevron-down');
				$("#info_category").addClass('fa-chevron-right');
			}

			$( "#cont_info_category" ).slideToggle( "slow" );
		});


		var pos_level2 = 0;

		$("#cont_info_category_list").slideUp();

		$("#info_category_list").click(function(e)
		{
			pos_level2++;

			if (pos_level2 % 2 == 1)
			{
				$("#info_category_list").addClass('fa-chevron-down');
				$("#info_category_list").removeClass('fa-chevron-right');
			}
			else
			{
				$("#info_category_list").removeClass('fa-chevron-down');
				$("#info_category_list").addClass('fa-chevron-right');
			}

			$( "#cont_info_category_list" ).slideToggle( "slow" );
		});


function getCoursesbyID(nome_curso, sub_nome_curso)
{
  setTimeout(function(){ 
  dataValue='action=8&nome_curso='+escape(nome_curso)+'&sub_nome_curso='+escape(sub_nome_curso);
    $.ajax({ url:'/cursos/action/action_cursos.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);

          if (arr.length == null || arr.length < 1 )
          {
            
          }
          else 
          {
            for(i=0;i<arr.length;i++)
            {								
				$("#id_cursos").val(arr[i].id);

			}
						

            
            
            
          }
        },
        error:function(data){
       		}
        });
    
    }, 1000);
}
	
function addGrade() 
{

	var add_grades = $("#add_grades");

	getCourses();
	$("#grade_media").blur(function(){
    	if ($("#grade_media").val() >= 0 && $("#grade_media").val() <= 100)
    	{

    		var round_perc = Math.round($("#grade_media").val());
    		$("#percent").val(round_perc);


    		if (round_perc >= 0 && round_perc <= 29)
    		{
    			$("#range").val('0-29');
    		}
    		else if (round_perc >= 30 && round_perc <= 49)
    		{
    			$("#range").val('30-49');
    		}
    		else if (round_perc >= 50 && round_perc <= 69)
    		{
    			$("#range").val('50-69');
    		}
    		else if (round_perc >= 70 && round_perc <= 79)
    		{
    			$("#range").val('70-79');
    		}
    		else if (round_perc >= 80 && round_perc <= 89)
    		{
    			$("#range").val('80-89');
    		}
    		else
    		{
    			$("#range").val('90-100');
    		}
    	}
    	else
    	{
    		$("#range").val('');
    		$("#percent").val('');
    	}
  	});



	add_grades.modal('show');
	
}


function saveGrades()
{
	var add_grades = $("#add_grades");


	var id_cursos = $("#id_cursos").val();

	var grades_media = $("#grade_media").val();

	var range = $("#range").val();

	var percent = $("#percent").val();

	var feedback = $("#feedback").val();
	

	datav = "action=1&id_cursos="+id_cursos+"&grades_media="+grades_media+"&range="+range+"&percent="+percent+"&feedback="+feedback;



	$.ajax({
		        type: "POST",
		        url: "/grades/action_grades.php",
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
                        $('.debug-url').html('Course Media '+arr.id+' was not created.');
                        $('#Modalko').modal('show');
                    }
                    else if (arr.success == 1)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('Course Media '+arr.id+' was created successfully.');
                        $('#Modalok').modal('show');

                        setTimeout(function(){  location.reload();}, 2500);


                        
                    }
		        },
		        error: function() {
		           $('.debug-url').html('Course Media was not created. Please verify wifi connection and try again.');
            		$('#Modalko').modal('show');
		        }
		    });



	add_grades.modal('hide');
}


showCourses();

coursesArray = [];

function showCourses()
{
	var s = '';
	var courses = '';
	var id_courses = '';
	var inc_spa=0;
	var inc_pos=0;
	var inc_mem=0;
	var inc_inv=0;
	var inc_golf=0;
	var inc_usr=0;
	var inc = 0;
  setTimeout(function(){ 
  dataValue='action=2';
    $.ajax({ url:'action_grades.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);
      


          if (arr.length == null || arr.length < 1 )
          {
            
            $('.debug-url').html('Not exists Courses in content. Create first.');
            $("#Modalko").modal('show');
             $('.back').fadeOut();

          
          }
          else 
          {
            for(i=0;i<arr.length;i++)
            {

							cursos = arr[i].cursos;



							if(cursos == "SPA & LEISURE"){
								id_courses = 'spa';
								coursesArray.push(id_courses);
    							courses = '<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2"><span class="fas fa-spa"></span>&nbsp;&nbsp;'+cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_'+id_courses+'"></i></font></h5>';
    							
    							
							}
							else if(cursos == "Point of Sale Solutions")
							{
								id_courses = 'pos';
								coursesArray.push(id_courses);
								courses = '<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2"><span class="fa fa-credit-card"></span>&nbsp;&nbsp;'+cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_'+id_courses+'"></i></font></h5>';
								
							}
							else if(cursos == "Membership Marketing")
							{
								id_courses = 'mak';
								coursesArray.push(id_courses);
								courses = '<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2"><span class="fab fa-markdown"></span>&nbsp;&nbsp;'+cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_'+id_courses+'"></i></font></h5>';
								
							}
							else if(cursos == "Inventory")
							{
								id_courses = 'inv';
								coursesArray.push(id_courses);
								courses = '<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2"><span class="fas fa-warehouse"></span>&nbsp;&nbsp;'+cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_'+id_courses+'"></i></font></h5>';
								
							}
							else if(cursos == "Golf Management")
							{
								id_courses = 'golf';
								coursesArray.push(id_courses);
								courses = '<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2"><span class="fas fa-golf-ball"></span>&nbsp;&nbsp;'+cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_'+id_courses+'"></i></font></h5>';
								
							}
							else if(cursos == "User Security")
							{
								id_courses = 'user';
								coursesArray.push(id_courses);
								courses = '<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2"><span class="fas fa-user"></span>&nbsp;&nbsp;'+cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_'+id_courses+'"></i></font></h5>';
								
							}
							else
							{
								id_courses = 'other_'+inc;
								coursesArray.push(id_courses);
								courses = '<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2"><span class="fas fa-file"></span>&nbsp;&nbsp;'+cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_'+id_courses+'"></i></font></h5>';
								inc++;
								
								
							
							}

							s+='<div class="row">'+courses+'</div><div class="row"><div class="col-md-12" id="panel_coller"><div id="'+id_courses+'_cont" class="col-md-12"><div id="show_sub_courses_'+id_courses+'" class="row"></div></div></div></div><div class="col-md-12"><div class="botter2"></div></div>';

			}

			$("#show_grades_courses").html(s);

			for (i=0; i<coursesArray.length; i++)
			{
				show_details_courses(coursesArray[i]);
			}


			for (i=0; i<arr.length;i++)
			{
				cursos = arr[i].cursos;		
				showSubCoursesSection (cursos);
			} 


			
			

			


            
            
            
          }
        },
        error:function(data){
            $('.debug-url').html('Was not possible to show the content courses. Please verify wifi connection and try again.');
            $("#Modalko").modal('show');
             $('.back').fadeOut();
          }
        });
    
    }, 10);
}

var inc_sub = 0;
	var inc_sub_spa=0;
	var inc_sub_pos=0;
	var inc_sub_mak=0;
	var inc_sub_inv=0;
	var inc_sub_golf=0;
	var inc_sub_user=0;


function show_details_courses(course)
{
	var pos_level1 = 0;

		$('#'+course+'_cont').slideUp();

		$("#info_"+course).click(function(e)
		{
			pos_level1++;

			if (pos_level1 % 2 == 1)
			{
				$("#info_"+course).addClass('fa-chevron-down');
				$("#info_"+course).removeClass('fa-chevron-right');
			}
			else
			{
				$("#info_"+course).removeClass('fa-chevron-down');
				$("#info_"+course).addClass('fa-chevron-right');
			}

			$( '#'+course+'_cont').slideToggle( "slow" );
		});
}


function showSubCoursesSection(cursos)
{
	var d = '';
	var id_courses = '';
	var sub_cursos = '';
	
	var id_sub_courses = '';


	var courses = '';





var v = '';
var t=0;

							if(cursos == "SPA & LEISURE")
          					{
								id_courses = 'spa';
    									
							}
							else if(cursos == "Point of Sale Solutions")
							{
								id_courses = 'pos';
								
							}
							else if(cursos == "Membership Marketing")
							{
								id_courses = 'mak';
	
								
							}
							else if(cursos == "Inventory")
							{
								id_courses = 'inv';
				
								
							}
							else if(cursos == "Golf Management")
							{
								id_courses = 'golf';
								
							}
							else if(cursos == "User Security")
							{
								id_courses = 'user';
							}
							else
							{
								id_courses = 'other_'+inc_d;
								inc_d++;
							}

	
	
	setTimeout(function(){ 
  dataValue='action=8&cursos='+escape(cursos);
    $.ajax({ url:'action_grades.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);
      


          if (arr.length == null || arr.length < 1 )
          {
            
            $('.debug-url').html('Not Exists sub courses content. Create First');
            $("#Modalko").modal('show');
             $('.back').fadeOut();

          
          }
          else 
          {

          	for(i=0;i<arr.length;i++)
            {
            		var grade = '';

            		var round_perc = Math.round(arr[i].media_sub_cursos);
		    		if (round_perc >= 0 && round_perc <= 29)
		    		{
		    			grade = '0-29';
		    		}
		    		else if (round_perc >= 30 && round_perc <= 49)
		    		{
		    			grade = '30-49';
		    		}
		    		else if (round_perc >= 50 && round_perc <= 69)
		    		{
		    			grade = '50-69';
		    		}
		    		else if (round_perc >= 70 && round_perc <= 79)
		    		{
		    			grade = '70-79';
		    		}
		    		else if (round_perc >= 80 && round_perc <= 89)
		    		{
		    			grade = '80-89';
		    		}
		    		else
		    		{
		    			grade = '90-100';
		    		}

		    		d += '<div class="col-md-6 col-xs-12 w3-padding-8"><div class="panel panel-default"><div class="panel-body" style="border: 0px"><p><strong><i class="fas fa-calculator"></i> Calculated Weight:</strong> '+parseFloat(arr[i].media_sub_cursos).toFixed(2)+'</p></div></div></div><div class="col-md-6 col-xs-12 w3-padding-8"><div class="panel panel-default"><div class="panel-body" style="border: 0px"><p><strong><i class="fas fa-percent"></i> Percentage:</strong> '+Math.round(arr[i].media_sub_cursos)+'%</p></div></div></div><div class="col-md-12 col-xs-12 w3-padding-8"><div class="panel panel-default"><div class="panel-body" style="border: 0px"><p><strong><i class="fas fa-th"></i> Grade:</strong> '+grade+'</p></div></div></div>';
            }
          		$('#show_sub_courses_'+id_courses).html('<br>' + d);
            
          }
        },
        error:function(data){
            $('.debug-url').html('Was not possible to show the content sub courses. Please verify wifi connection and try again.');
            $("#Modalko").modal('show');
             $('.back').fadeOut();
          }
        });
    
    }, 10);
}








</script>
