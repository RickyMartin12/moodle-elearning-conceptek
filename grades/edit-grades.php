<?php
	$header = $_SERVER['DOCUMENT_ROOT']. "/header/header.php";
?>

<?php include $header; ?>


        <div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">
 	
			    <div class="banner">
			   
					<h2>
					<a href="#">Administrator</a>
					<i class="fa fa-angle-right"></i>
					<a href="#">Grades</a>
					<i class="fa fa-angle-right"></i>
					<span>Edit Grades</span>
					</h2>
			    </div>

			    <div class="content-top">
					<div class="profile row">
						<div class="col-md-12">
							<div class="col-md-12 profile-bottom w3-row-padding tabs row">
								<div class="col-md-12 profile-bottom w3-row-padding tabs row">
								  <div class="w3-panel w3-purple w3-display-container" id="padder">
									<h5 id="pri_user"><i class="fas fa-th"></i>&nbsp;&nbsp;Edit Grades<font style="float: right;"><i class="fas fa-chevron-right" id="info_grades_list"></i></font> </h5>


								  </div>

								  <div id="cont_info_grades_list">
										  	  <div id="show_grades_list">




				    						   	
											  </div>
								</div>


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


       <div class="modal fade" id="edit_grades" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title"><i class="fa fa-th"></i> Edit Grade - ID <span id="id_grade"></span> </h4>
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
									      <select class="form-control" id="nome_cursos_edit" onchange="getSubCourse(this.value);">
									      </select>


									</div>
							</div>
							<div class="col-md-6 col-xs-12">
									<div class="form-group">
									      <label for="nome_curso"><i class="fas fa-graduation-cap"></i> Sub Course:</label>
									      <select class="form-control" id="sub_nome_cursos_edit" onchange="getCoursesbyID($('#nome_cursos_edit').val(), this.value);">
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
									      <input type="text" class="form-control" id="grade_media">
									</div>
							</div>

							<div class="col-md-4 col-xs-12">
									<div class="form-group">
									      <label for="grade_curso"><i class="fas fa-exchange-alt"></i> Range:</label>
									      <input type="text" readonly="readonly" class="form-control" id="range">
									</div>
							</div>

							<div class="col-md-4 col-xs-12">
									<div class="form-group">
									      <label for="grade_curso"><i class="fas fa-percentage"></i> Percent:</label>
									      <input type="text" readonly="readonly" class="form-control" id="percent">
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
									      <textarea class="form-control" rows="5" name="feedback" id="feedback"></textarea>
									</div>

				        	</div>
				        </div>



				       

				   





			        </div>
			        <div class="modal-footer">
			        	<p style='text-align:center; margin:0;'><img src="/images/cs.png" class="logo-nav" style="width:68px;"></p>
				        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancel</font></button>
	                    <button title="Guardar as alterações do blogue" type="button" class="btn btn-success" onclick="saveGrade($('#id_grade').html());"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Save</font></button>
			        </div>
			      </div>
			      
			    </div>
			  </div>


<?php include '../footer/footer.php'; ?>

<script type="text/javascript">

var pos_level2 = 0;

		$("#cont_info_grades_list").slideUp();

		$("#info_grades_list").click(function(e)
		{
			pos_level2++;

			if (pos_level2 % 2 == 1)
			{
				$("#info_grades_list").addClass('fa-chevron-down');
				$("#info_grades_list").removeClass('fa-chevron-right');
			}
			else
			{
				$("#info_grades_list").removeClass('fa-chevron-down');
				$("#info_grades_list").addClass('fa-chevron-right');
			}

			$( "#cont_info_grades_list" ).slideToggle( "slow" );
		});


		showGrades();

		function showGrades()
		{
			var s = "";
   		var sa;
  		dataValue="&action=5";
  	$.ajax({ url:'action_grades.php',
    data:dataValue,
    type:'POST', 
     success:function(data){
     arr=[];
     arr =  JSON.parse(data);
    if (arr == null || arr.length < 1){
     $('.debug-url').html('Not Exists Grades Courses');
     $("#mensagem_ko").trigger('click');
     $('#show_category_list').empty();
    }
    else {
      for(i=0;i<arr.length;i++)
      {          
          
          
        s += '<tr class="action-users-'+arr[i].id+'"><td scope="row"><font class="font-1-'+arr[i].id+'" style="color: #000">'+arr[i].cursos+'</font></td><td><font class="font-2-'+arr[i].id+'" style="color: #000">'+arr[i].sub_cursos+'</font></td><td><font class="font-3-'+arr[i].id+'" style="color: #000">'+arr[i].calcular_media+'</font></td><td><font class="font-4-'+arr[i].id+'" style="color: #000">'+arr[i].graus+'</font></td><td><font class="font-5-'+arr[i].id+'" style="color: #000">'+arr[i].percentagem+'</font></td><td><font class="font-6-'+arr[i].id+'" style="color: #000">'+arr[i].feedback+'</font></td><td id="action-'+arr[i].id+'" style="width:80px;"><button title="Edit Grade - '+arr[i].id+'" class="btn btn-info btn-sm" onclick="editModalGrade('+arr[i].id+')" id="edit_filter_'+arr[i].id+'"><span class="glyphicon glyphicon-edit"></span></button>&nbsp;&nbsp;<button title="Apagar Operador" class="btn btn-danger btn-sm" onclick="confirmDeleteGrade('+arr[i].id+')" id="remove_filter_'+arr[i].id+'"><span class="glyphicon glyphicon-trash"></span></button></td></tr>';




          
      }  
      
      
      
      
    $('#show_grades_list').html('<div class="table-responsive"><table class="table" id="tbl2"><thead><tr><th>Course</th><th>Sub Course</th><th>Media</th><th>Range</th><th>Percent</th><th>Feedback</th><th>Actions</th></tr></thead><tbody>'+s+'</tbody></table></div>');

    
    

    }
    
    
    },
    error:function(data){
     $('.debug-url').html('Error to obtain the Grade Courses. Please verify wifi connection and try again.');
     $("#mensagem_ko").trigger('click');
    }
  });
}


function confirmDeleteGrade(id)
{
			bootbox.dialog({
    message: "Are you sure to erase the course media grade <strong>"+id+"</strong>",
    title: "<span style='color:#f0ad4e;'><span class='glyphicon glyphicon-exclamation-sign'></span> Confirm</span>",
    buttons: {
      default: {
        label: "<span class='glyphicon glyphicon-remove-sign'></span> Close",
        className: "btn-default",
      },
      danger: {
        label: "<span class='glyphicon glyphicon-trash'></span> Erase",
        className: "btn-danger",
        callback: function() {
      dataValue='&id='+id+'&action=6';
      $.ajax({
        type: "POST",
        url: "action_grades.php",
        data: dataValue,
        cache:false,
        success: function(data){
          if(data == 2){
            showGrades();
            $('#Modalok .debug-url').html('Grade Course <strong>'+id+'</strong> was deleted sucessfully.');
            $("#Modalok").modal('show');
            setTimeout(function(){  $('#Modalok').modal('hide');}, 2500);
          }
          else
          {
            $('#Modalko .debug-url').html('Grade Course <strong>'+id+'</strong> could not deleted.');
            $("#Modalko").modal('show');
          }
        },
        error:function(data){
          $('#Modalko .debug-url').html('Grade Course <strong>'+id+'</strong> was not deleted, please verify wifi connection and try again.');
          $("#Modalko").modal('show');
        }
    });
        }
      },
    }
  });
}





function getCourses(cursos)
{
	var s = '';
	var s1 = '';

	


	$("#nome_cursos_edit").html(s);
	$("#sub_nome_cursos_edit").html(s1);


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
						
			$("#nome_cursos_edit").html(s);

			$("#nome_cursos_edit").val(cursos);


            
            
            
          }
        },
        error:function(data){
       		}
        });
    
    }, 1000);

}


function getSubCourse(nome_curso, sub_cursos)
{
	var s1 = '';

	$("#sub_nome_cursos_edit").html(s1);


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
						
			$("#sub_nome_cursos_edit").html(s1);
			$("#sub_nome_cursos_edit").val(sub_cursos);


            
            
            
          }
        },
        error:function(data){
       		}
        });
    
    }, 1000);
}


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

function editModalGrade(id)
{
	var edit_grades = $("#edit_grades");

	$("#id_grade").html(id);

	var curso = $('.font-1-'+id).html().replace("&amp;", "&");
	var sub_curso = $('.font-2-'+id).html().replace("&amp;", "&");

	getCourses(curso);

	getSubCourse(curso, sub_curso);

	getCoursesbyID(curso, sub_curso);

	var media = $('.font-3-'+id).html();

	var graus = $('.font-4-'+id).html();

	var percentagem = $('.font-5-'+id).html();

	var feedback = $('.font-6-'+id).html();


	$("#grade_media").val(media);

	$("#range").val(graus);

	$("#percent").val(percentagem);

	$("#feedback").val(feedback);

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


	edit_grades.modal('show');
}


function saveGrade(id)
{
	var edit_grades = $("#edit_grades");

	var id_curso = $("#id_cursos").val();

	var media_grade = $("#grade_media").val();

	var range = $("#range").val();

	var percentagem = $("#percent").val();

	var feedback = $("#feedback").val();

	datav = "action=7&id_cursos="+id_curso+"&calcular_media="+media_grade+"&graus="+range+"&percentagem="+percentagem+"&feedback="+feedback+"&id="+id;


	 $.ajax({ url:'action_grades.php',
			    data:datav,
			    type:'POST',
			    cache:false,
			    success: function(data){
			    arr = [];
		        arr = JSON.parse(data);
			    if (arr.error){
		            $(".debug-url").html("Please, verify:<br><br>"+arr.error+"<br> Correct the error and try again.");
                    $('#Modalko').modal('show');

		          }

			     else if (arr.success == 0)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('The Course Grade '+arr.id+' was not updated.');
                        $('#Modalko').modal('show');
                    }
                    else if (arr.success == 1)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('The Course Grade '+arr.id+' was updated successfully.');

                        $('#Modalok').modal('show');

                        setTimeout(function(){
			          $('#Modalok').modal('hide');},2500);
			          setTimeout(function(){  location.reload();}, 2500);

                        
                    }
			},
			    error:function(){
			        $('.debug-url').html('Course Grade # <strong> ' +id+ ' </strong> was not updated. Please verify wifi connection and try again.');
			        $("#Modalko").modal('show');

			}
			  });


			  
			  
			  
			  

	    		edit_grades.modal('hide');




	edit_grades.modal('hide');
}

	

</script>
