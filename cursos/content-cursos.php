<?php include '../header/header.php'; ?>


<div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">
 	
			    <div class="banner">
			   
					<h2>
					<a href="#">Administrator</a>
					<i class="fa fa-angle-right"></i>
					<span>Courses / Types of Courses</span>
					</h2>
			    </div>


			    <div class="content-top">
					<div class="profile row">
						<div class="col-md-12">
							<div class="col-md-12 profile-bottom w3-row-padding tabs row">
								<div class="w3-panel w3-purple w3-display-container" id="padder">
								  	<h5 id="pri_user"><i class="fas fa-graduation-cap"></i>&nbsp;&nbsp;Lists Courses <font style="float: right;"><i class="fas fa-chevron-right" id="info_cursos"></i></font> </h5>
								  </div>
								  <div id="cont_info_cursos">
									  	  <div id="show_cursos">




			    						   	
										  </div>

										  <div class="botter2"></div>

										  <div class="col-md-6 col-xs-12 centering">
												<a class="btn btn-info" role="button" onclick="addCourseName();"><i class="fas fa-graduation-cap"></i> Add Course Name</a>
												<br><br>
											</div>

											<div class="col-md-6 col-xs-12 centering">
												<a class="btn btn-info" role="button" onclick="addCourseSubNome();"><i class="fas fa-graduation-cap"></i> Add SubCourse Name</a>
												<br><br>
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


			  <div class="modal fade" id="add_course_name" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title"><i class="fas fa-graduation-cap"></i> Add Course</h4>
			        </div>
			        <div class="modal-body">
						<div class="row">
				        	<div class="col-md-12">  
		                            <div class="form-group">
									      <label for="nome_curso"><i class="fas fa-graduation-cap"></i> Course:</label>
									      <input type="text" class="form-control" name="nome_curso" id="nome_curso">
									</div>
				        		<div class="botter2"></div>
				        		 <div class="row">
								</div>
				        	</div>
				        </div>	



			        </div>
			        <div class="modal-footer">
			        	<p style='text-align:center; margin:0;'><img src="https://moodle-elearrning.herokuapp.com/images/cs.png" class="logo-nav" style="width:68px;"></p>
				        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancel</font></button>
	                    <button title="Guardar as alterações do blogue" type="button" class="btn btn-success" onclick="saveCourse();"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Save</font></button>
			        </div>
			      </div>
			      
			    </div>
			  </div>


			  <div class="modal fade" id="add_course_sub_name" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title"><i class="fas fa-graduation-cap"></i> Add Course and SubCourse</h4>
			        </div>
			        <div class="modal-body">
						<div class="row">
				        	<div class="col-md-12">  
		                            <div class="form-group">
									      <label for="nome_curso"><i class="fas fa-graduation-cap"></i> Course:</label>
									      <select class="form-control" id="nome_cursos">
									      	
									      </select>
									</div>
				        	</div>
				        	<div class="col-md-12">  
		                            <div class="form-group">
									      <label for="nome_curso"><i class="fas fa-graduation-cap"></i> Sub Course:</label>
									      <input type="text" class="form-control" name="sub_nome_curso" id="sub_nome_curso">
									</div>
				        	</div>
				        </div>	



			        </div>
			        <div class="modal-footer">
			        	<p style='text-align:center; margin:0;'><img src="https://moodle-elearrning.herokuapp.com/images/cs.png" class="logo-nav" style="width:68px;"></p>
				        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancel</font></button>
	                    <button title="Guardar as alterações do blogue" type="button" class="btn btn-success" onclick="saveSubNomeCourse();"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Save</font></button>
			        </div>
			      </div>
			      
			    </div>
			  </div>





<?php include '../footer/footer.php'; ?>

<script type="text/javascript">
	var pos_level1 = 0;

		$("#cont_info_cursos").slideUp();

		$("#info_cursos").click(function(e)
		{
			pos_level1++;

			if (pos_level1 % 2 == 1)
			{
				$("#info_cursos").addClass('fa-chevron-down');
				$("#info_cursos").removeClass('fa-chevron-right');
			}
			else
			{
				$("#info_cursos").removeClass('fa-chevron-down');
				$("#info_cursos").addClass('fa-chevron-right');
			}

			$( "#cont_info_cursos" ).slideToggle( "slow" );
		});


		showCourses();


		function showCourses()
		{
			var s = "";
   		var sa;
  		dataValue="&action=1";
  	$.ajax({ url:'action/action_cursos.php',
    data:dataValue,
    type:'POST', 
     success:function(data){
     arr=[];
     arr =  JSON.parse(data);
    if (arr == null || arr.length < 1){
     $('.debug-url').html('No Exists Courses');
     $("#mensagem_ko").trigger('click');
     $('#show_users').empty();
    }
    else {
      for(i=0;i<arr.length;i++)
      {

          
          
          
        s += '<tr class="action-cursos-'+arr[i].id+'"><td scope="row"><input type="text" value="'+arr[i].cursos+'" id="col-1-'+arr[i].id+'" style="display: none" class="frm-item form-control"/><font class="font-1-'+arr[i].id+'" style="color: #000">'+arr[i].cursos+'</font></td><td><input type="text" value="'+arr[i].sub_cursos+'" id="col-2-'+arr[i].id+'" style="display: none" class="frm-item form-control"/><font class="font-2-'+arr[i].id+'" style="color: #000">'+arr[i].sub_cursos+'</font></td><td id="action-'+arr[i].id+'" style="width:80px;"><button title="Editar Utilizador - '+arr[i].id+'" class="btn btn-info btn-sm" onclick="editCourse('+arr[i].id+')" ><span class="glyphicon glyphicon-edit"></span></button>&nbsp;&nbsp;<button class="btn btn-danger btn-sm" onclick="confirmCourses('+arr[i].id+')"><span class="glyphicon glyphicon-trash"></span></button></td></tr>';




          
      }  
      
      
      
      
    $('#show_cursos').html('<div class="table-responsive"><table class="table"><thead><tr><th>Course name</th><th>SubCourse Name</th><th>Actions</th></tr></thead><tbody>'+s+'</tbody></table></div>');


    

    
    

    }
    
    
    },
    error:function(data){
     $('.debug-url').html('Error to obtain the courses, please verify the wifi connection.');
     $("#mensagem_ko").trigger('click');
    }
  });
}

function confirmCourses(id)
{
	bootbox.dialog({
    message: "Are you sure to delete the Course <strong>"+id+"</strong>",
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
      dataValue='&id='+id+'&action=2';
      $.ajax({
        type: "POST",
        url: "action/action_cursos.php",
        data: dataValue,
        cache:false,
        success: function(data){
          if(data == 2){
            showCourses();
            $('#Modalok .debug-url').html('Course <strong>'+id+'</strong> was deleted succesfully.');
            $("#Modalok").modal('show');
            setTimeout(function(){  $('#Modalok').modal('hide');}, 2500);
          }
          else
          {
            $('#Modalko .debug-url').html('Course <strong>'+id+'</strong> was not deleted.');
            $("#Modalko").modal('show');
          }
        },
        error:function(data){
          $('#Modalko .debug-url').html('Course <strong>'+id+'</strong> was not deleted. Please verify wifi connection and try again.');
          $("#Modalko").modal('show');
        }
    });
        }
      },
    }
  });
}

function addCourseName()
{
	var novo_nome_curso = $("#add_course_name");


	novo_nome_curso.modal('show');
}

function saveCourse()
{
	var nome_curso = $("#nome_curso").val();

	var novo_nome_curso = $("#add_course_name");

	datav = "action=3&nome_curso="+escape(nome_curso);



    		$('.back').show()
		    $.ajax({
		        type: "POST",
		        url: "action/action_cursos.php",
		        data: datav,
		        cache: false,
		        success: function(data) {
		          $('.back').fadeOut();
		          arr = [];
		          arr = JSON.parse(data);
		          if (arr.error){
		            $(".debug-url").html("Please, Verify:<br><br>"+arr.error+"<br> Correct the error and try again.");
                    $('#Modalko').modal('show');

		          }
		          else if (arr.success == 0)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('Course name '+nome_curso+' was not created.');
                        $('#Modalko').modal('show');
                    }
                    else if (arr.success == 1)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('Course name '+nome_curso+' was created sucessfully.');
                          var obj = document.createElement("audio");
						  obj.src = "https://moodle-elearrning.herokuapp.com/Sound/success.mp3";
						  obj.volume = 0.1;
						  obj.autoPlay = false;
						  obj.preLoad = true;
						  obj.controls = true;
						  obj.play();

                        $('#Modalok').modal('show');
                        showCourses();

                        
                    }
		        },
		        error: function() {
		           $('.debug-url').html('Course name '+nome_curso+' was not created. Please verify wifi connection and try again.');
            		$('#Modalko').modal('show');
		        }
		    });

	novo_nome_curso.modal('hide');
}

function getCourses()
{
	var s = '';

	s += '<option value ="">Choose Course...</option>';

	$("#nome_cursos").html(s);
  setTimeout(function(){ 
  dataValue='action=4';
    $.ajax({ url:'action/action_cursos.php',
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

function editCourse(id)
{
	for (i=1; i<3; i++)
      {
          $("#col-"+i+"-"+id).css('display', 'block');
          $(".font-"+i+"-"+id).css('display', 'none');
      }
      
      $("#action-"+id).html('<button title="Submit Course - '+id+'" class="btn btn-success btn-sm" onclick="saveCoursesFilters('+id+')"><span class="glyphicon glyphicon-save-file"></span></button>&nbsp;&nbsp;<button title="Cancelar Edit Course - '+id+'" class="btn btn-default btn-sm" onclick="cancelCoursesFilters('+id+')" id="cancel_users"><span class="glyphicon glyphicon-remove-sign"></span></button>');
}

function cancelCoursesFilters(id)
  {
  	for (i=1; i<3; i++)
      {
          $("#col-"+i+"-"+id).css('display', 'none');
           $(".font-"+i+"-"+id).css('display', 'block');
      }
      $("#action-"+id).html('<button title="Edit Course - '+id+'" class="btn btn-info btn-sm" onclick="editCourse('+id+')"><span class="glyphicon glyphicon-edit"></span></button>&nbsp;&nbsp;<button title="Erase Course - '+id+'" class="btn btn-danger btn-sm" onclick="confirmCourses('+id+')"><span class="glyphicon glyphicon-trash"></span></button>');
  }


function saveCoursesFilters(id)
{
	var dataValue='';
      for(i=1;i<3;i++){
        dataValue+="col_"+i+"_"+id+"="+escape($("#col-"+i+"-"+id).val())+"&";
      }
      dataValue+="id="+id+"&action=5";

      $.ajax({
		        type: "POST",
		        url: "action/action_cursos.php",
		        data: dataValue,
		        cache: false,
		        success:function(data){
				      if (data == 2){
				        $('.debug-url').html('Error this course # <b>'+id+'</b> exists in database!');
				        $("#Modalko").modal('show');
				     }
				    else if (data == 22){
				        $('.debug-url').html('Error while updating course #<b>'+id+'</b>!');
				        $("#Modalko").trigger('click');
				     }
				    else if(data == 1){
				      showCourses();
				      $('.debug-url').html('Course # <b>'+id+'</b> was updating sucessfully.');
				      $("#Modalok").modal('show');
				      setTimeout(function(){  $('#Modalok').modal('hide');}, 2500);
				     }
				    },
				    error:function(){
				      $('.debug-url').html('Course # <b>'+id+'</b> was not updating, please verify the wifi connection.');
				      $("#Modalko").modal('show');
				    }
		    });
}



function addCourseSubNome()
{
	
	var add_course_sub_name = $("#add_course_sub_name");

	getCourses();

	add_course_sub_name.modal('show');


}

function saveSubNomeCourse()
{
	var nome_curso = $("#nome_cursos").val();

	var sub_nome_curso = $("#sub_nome_curso").val();

	var novo_nome_curso = $("#add_course_sub_name");

	datav = "action=6&nome_curso="+escape(nome_curso)+"&sub_nome_curso="+escape(sub_nome_curso);



    		$('.back').show()
		    $.ajax({
		        type: "POST",
		        url: "action/action_cursos.php",
		        data: datav,
		        cache: false,
		        success: function(data) {
		          $('.back').fadeOut();
		          arr = [];
		          arr = JSON.parse(data);
		          if (arr.error){
		            $(".debug-url").html("Please Verify:<br><br>"+arr.error+"<br> Correct the error(s) and try again.");
                    $('#Modalko').modal('show');

		          }
		          else if (arr.success == 0)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('The creation of course and subcourse '+nome_curso+' was not added.');
                        $('#Modalko').modal('show');
                    }
                    else if (arr.success == 1)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('The creation of course and subcourse '+nome_curso+' was added sucessfully.');
                        $('#Modalok').modal('show');
                        showCourses();

                        
                    }
		        },
		        error: function() {
		           $('.debug-url').html("The Course and subCourse was not added. Please verify the wifi connection and try again.");
            		$('#Modalko').modal('show');
		        }
		    });

	novo_nome_curso.modal('hide');
}






</script>