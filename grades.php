<?php include 'header/header.php'; ?>

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
					<a href="dashboard.php">Dashboard</a> 
					<i class="fa fa-angle-right"></i>
					<span>Grades</span>
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

<?php include 'footer/footer.php'; ?>

<script type="text/javascript">

var inc_d = 0;



function getCourses()
{
	var s = '';
	var s1 = '';

	s += '<option value ="">Choose a Course...</option>';
	s1 += '<option value ="">Choose a SubCourse...</option>';

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
            
            console.log('nada');
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
           console.log('erro');
       		}
        });
    
    }, 1000);

}


function getSubCourse(nome_curso)
{
	var s1 = '';

	s1 += '<option value ="">Choose a SubCourse...</option>';

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
            
            console.log('nada');
          }
          else 
          {
          	console.log(arr);
            for(i=0;i<arr.length;i++)
            {								
				
				s1 +='<option value="'+arr[i].sub_cursos+'">'+arr[i].sub_cursos+'</option>';

			}
						
			$("#sub_nome_cursos").html(s1);


            
            
            
          }
        },
        error:function(data){
           console.log('erro');
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
            
            console.log('nada');
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
           console.log('erro');
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
		        url: "grades/action_grades.php",
		        data: datav,
		        cache: false,
		        success: function(data) {
		          $('.back').fadeOut();
		          console.log(data);
		          arr = [];
		          arr = JSON.parse(data);
		          if (arr.error){
		            $(".debug-url").html("Please, Verify:<br><br>"+arr.error+"<br> Coorect the error and try again.");
                    $('#Modalko').modal('show');

		          }
		          else if (arr.success == 0)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('The media grade '+arr.id+' was not created successfully');
                        $('#Modalko').modal('show');
                    }
                    else if (arr.success == 1)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('The media grade '+arr.id+' was created successfully');
                        $('#Modalok').modal('show');

                        
                    }
		        },
		        error: function() {
		           $('.debug-url').html("The media grade was not created succesfully. Please verify the wifi connection and try again.");
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
    $.ajax({ url:'grades/action_grades.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);
      


          if (arr.length == null || arr.length < 1 )
          {
            
            $('.debug-url').html('Not Exists the courses. Create first');
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

							s+='<div class="row">'+courses+'</div><div class="row"><div class="col-md-12" id="panel_coller"><div id="'+id_courses+'_cont" class="col-md-12"><div id="show_sub_courses_'+id_courses+'"></div></div></div></div><div class="col-md-12"><div class="botter2"></div></div>';

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
            $('.debug-url').html('Was not possible to show the courses. Please verify the wifi connection and try again. ');
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



function show_details_courses_sub(course)
{
	var pos_level1 = 0;

		$('#'+course+'_cont_sub').slideUp();

		$("#info_sub_"+course).click(function(e)
		{
			pos_level1++;

			if (pos_level1 % 2 == 1)
			{
				$("#info_sub_"+course).addClass('fa-chevron-down');
				$("#info_sub_"+course).removeClass('fa-chevron-right');
			}
			else
			{
				$("#info_sub_"+course).removeClass('fa-chevron-down');
				$("#info_sub_"+course).addClass('fa-chevron-right');
			}

			$( '#'+course+'_cont_sub').slideToggle( "slow" );
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

	
	
	setTimeout(function(){ 
  dataValue='action=3&cursos='+escape(cursos);
    $.ajax({ url:'grades/action_grades.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);
      


          if (arr.length == null || arr.length < 1 )
          {
            
            $('.debug-url').html('Não existe nenhum blog na base de dados. Crie primeiro');
            $("#Modalko").modal('show');
             $('.back').fadeOut();

          
          }
          else 
          {
          					
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

							

            for(i=0;i<arr.length;i++)
            {
            	sub_cursos = arr[i].sub_cursos;

            	if(sub_cursos.indexOf("SPA") >= 0){
								id_sub_courses = 'spa_sub_'+inc_sub_spa;


								
    							courses = '<div class="panel-heading">'+sub_cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_sub_'+id_sub_courses+'"></i></font></div>';
    							inc_sub_spa++;

    							
    							
							}
							else if(sub_cursos.indexOf("Point of Sale Solutions") >= 0)
							{
								id_sub_courses = 'pos_sub_'+inc_sub_pos;
    							courses = '<div class="panel-heading">'+sub_cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_sub_'+id_sub_courses+'"></i></font></div>';
    							inc_sub_pos++;
								
							}
							else if(sub_cursos.indexOf("Marketing") >= 0)
							{
								id_sub_courses = 'mak_sub_'+inc_sub_mak;
								courses = '<div class="panel-heading">'+sub_cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_sub_'+id_sub_courses+'"></i></font></div>';
								inc_sub_mak++;
								
							}
							else if(sub_cursos.indexOf("Inventory") >= 0)
							{
								id_sub_courses = 'inv_sub_'+inc_sub_inv;

								courses = '<div class="panel-heading">'+sub_cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_sub_'+id_sub_courses+'"></i></font></div>';


								inc_sub_inv++;
								
							}
							else if(sub_cursos.indexOf("GOLF") >= 0)
							{
								id_sub_courses = 'golf_sub_'+inc_sub_golf;
								courses = '<div class="panel-heading">'+sub_cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_sub_'+id_sub_courses+'"></i></font></div>';


								inc_sub_golf++;
								
							}
							else if(sub_cursos.indexOf("User") >= 0)
							{
								id_sub_courses = 'user_sub_'+inc_sub_user;
								courses = '<div class="panel-heading">'+sub_cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_sub_'+id_sub_courses+'"></i></font></div>';
								inc_sub_user++;
							}
							else
							{
								id_sub_courses = 'other_sub_'+inc_sub;
								courses = '<div class="panel-heading">'+sub_cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_sub_'+id_sub_courses+'"></i></font></div>';
								inc_sub++;
								
								
							
							}

							
							





						d += '<div class="col-md-12" id="col_sub_cat">'+courses+'<div id="'+id_sub_courses+'_cont_sub" class="panel-body"><div id="show_sub_categories_courses_'+id_sub_courses+'"></div></div><div class="panel-footer">'+sub_cursos+'</div></div></div><div class="row"><div class="col-md-12"><div class="botter2"></div></div></div>';


						v += id_sub_courses+" ";

				

			}




			$('#show_sub_courses_'+id_courses).html('<br>' + d);



			var res = v.split(" ");

			for(i = 0; i< res.length; i++){
    			show_details_courses_sub(res[i]);
    		}




			for (i=0; i<arr.length;i++)
			{
				sub_cursos = arr[i].sub_cursos;	
				showCategoryCourses (cursos, sub_cursos);
			} 


			



			
            
          }
        },
        error:function(data){
            $('.debug-url').html('Nao foi possivel mostrar o conteudo da reserva de carros, p.f. verifique a ligação Wi-Fi.');
            $("#Modalko").modal('show');
             $('.back').fadeOut();
          }
        });
    
    }, 10);
}

var inc_sub_spa_cat=0;
var inc_sub_pos_cat=0;
var inc_sub_mak_cat=0;
var inc_sub_inv_cat=0;
var inc_sub_golf_cat=0;
var inc_sub_user_cat=0;
var inc_sub_cat = 0;
		

var inc_cat = 0;
 


function showCategoryCourses (cursos, sub_cursos)
{
	var c = '';
	var suber_cursos = '';
	var id_sub_courses = '';
	var courses = '';
	var categoria = '';

	var id_categoria = '';

	var v = '';

	var p = '';

	setTimeout(function(){ 
		dataValue='action=4&cursos='+escape(cursos)+'&sub_cursos='+escape(sub_cursos);

		if(sub_cursos.indexOf("SPA") >= 0)
        {
			id_sub_courses = 'spa_sub_'+inc_sub_spa_cat;
			inc_sub_spa_cat++;
    	}
		else if(sub_cursos.indexOf("Point of Sale Solutions") >= 0)
							{
								id_sub_courses = 'pos_sub_'+inc_sub_pos_cat;
								inc_sub_pos_cat++;
								
							}
							else if(sub_cursos.indexOf("Marketing") >= 0)
							{
								id_sub_courses = 'mak_sub_'+inc_sub_mak_cat;
								inc_sub_mak_cat++;
	
								
							}
							else if(sub_cursos.indexOf("Inventory") >= 0)
							{
								id_sub_courses = 'inv_sub_'+inc_sub_inv_cat;
								inc_sub_inv_cat++;
				
								
							}
							else if(sub_cursos.indexOf("GOLF") >= 0)
							{
								id_sub_courses = 'golf_sub_'+inc_sub_golf_cat;
								inc_sub_golf_cat++;
								
							}
							else if(sub_cursos.indexOf("User") >= 0)
							{
								id_sub_courses = 'user_sub_'+inc_sub_user_cat;
								inc_sub_user_cat++;
							}
							else
							{
								id_sub_courses = 'other_sub_'+inc_sub_cat;
								inc_sub_cat++;
							}


	$.ajax({ url:'grades/action_grades.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);
      


	          if (arr.length == null || arr.length < 1 )
	          {
	            
	            $('.debug-url').html('Not exists the content in media grades in courses. Create first');
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

            		categoria += '<div class="col-md-6 col-xs-12 w3-padding-8"><div class="panel panel-default"><div class="panel-body" style="border: 0px"><p><strong><i class="fas fa-calculator"></i> Calculated Weight:</strong> '+parseFloat(arr[i].media_sub_cursos).toFixed(2)+'</p></div></div></div><div class="col-md-6 col-xs-12 w3-padding-8"><div class="panel panel-default"><div class="panel-body" style="border: 0px"><p><strong><i class="fas fa-percent"></i> Percentage:</strong> '+Math.round(arr[i].media_sub_cursos)+'%</p></div></div></div><div class="col-md-12 col-xs-12 w3-padding-8"><div class="panel panel-default"><div class="panel-body" style="border: 0px"><p><strong><i class="fas fa-th"></i> Grade:</strong> '+grade+'</p></div></div></div>';
            	}


            	$("#show_sub_categories_courses_"+id_sub_courses).html(categoria);
		

	          }
          },
        error:function(data){
            $('.debug-url').html('Was not possible to show the content media grade in courses. Please verify the wifi conncetion and try again.');
            $("#Modalko").modal('show');
             $('.back').fadeOut();
          }
        });

	}, 10);

}






</script>
