<?php include '../header/header.php'; ?>

<style type="text/css">
	td i
	{
		color: #000;
	}
</style>

<div id="page-wrapper" class="gray-bg dashbard-1">
		<div class="content-main">
			    <div class="banner">
			   
					<h2>
					<a href="#">Administrator</a>
					<i class="fa fa-angle-right"></i>
					<span>Edit Categories</span>
					</h2>
			    </div>


			    <div class="content-top">
					<div class="profile row">
						<div class="col-md-12">
							<div class="col-md-12 profile-bottom w3-row-padding tabs row">
							  <div class="w3-panel w3-purple w3-display-container" id="padder">
								<h5 id="pri_user"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit Categories <font style="float: right;"><i class="fas fa-chevron-right" id="info_category_list"></i></font> </h5>


							  </div>

							  <div id="cont_info_category_list">
									  	  <div id="show_category_list">




			    						   	
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



<div class="modal fade" id="edit_category" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title"><i class="fas fa-tag"></i> Edit Category - Number <span id="id_cat"></span></h4>
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
			                         <span class="fas fa-info-circle"></span>&nbsp;&nbsp;Course Details
			                    </h5>

		                	</div>

				        </div>

				        <div class="row">
				        	<div class="col-md-6 col-xs-12">
									<div class="form-group">
									      <label for="nome_curso"><i class="fas fa-th-list"></i> Category:</label>
									      <input type="text" class="form-control" id="category_course_edit" placeholder="Adicione categoria">
									</div>
							</div>

							<div class="col-md-6 col-xs-12">
									<div class="form-group">
									      <label for="nome_curso"><i class="fas fa-cog"></i> Functions:</label>
									      <input type="text" class="form-control" id="funcoes_course_edit" placeholder="Adicione Função">
									</div>
							</div>

				        </div>



				       

				        <div class="row">
				        	<div class="col-md-12 col-xs-12">
									<div class="form-group">
									      <label for="nome_curso"><i class="far fa-file-alt"></i> Contest:</label>
									      <textarea class="form-control" rows="5" name="contexto_course" id="contexto_course" placeholder="Adicione um contexto"></textarea>
									</div>
							</div>

				        </div>

				        <div class="botter2"></div>

				        <div class="row">
				        	<div class="col-md-12 col-xs-12">

				        	<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" >
		                         <span class="fas fa-video"></span> / <span class="fas fa-image"></span>&nbsp;&nbsp;Video and Images Files
		                    </h5>

		                    <div id="content_fil_blog">
							</div>


							<div id="content_fil_blog_load">
							</div>



							<input id="files_blogs" name="files_blogs[]" type="file" class="btn-primary btn col-xs-12" multiple="multiple" accept="video/*,image/*">
							<input id="files_blogs_content" type="hidden" />

							<input id="list_f_blogs" type="hidden" />
							</div>
				        </div>





			        </div>
			        <div class="modal-footer">
			        	<p style='text-align:center; margin:0;'><img src="/images/cs.png" class="logo-nav" style="width:68px;"></p>
				        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancel</font></button>
	                    <button title="Guardar as alterações do blogue" type="button" class="btn btn-success" onclick="saveCategory($('#id_cat').html());"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Save</font></button>
			        </div>
			      </div>
			      
			    </div>
			  </div>



<?php include '../footer/footer.php'; ?>

<script type="text/javascript">
	

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



showCategories();


function showCategories()
{
	var s = "";
   		var sa;
  		dataValue="&action=7";
  	$.ajax({ url:'action/action_categoria.php',
    data:dataValue,
    type:'POST', 
     success:function(data){
     arr=[];
     arr =  JSON.parse(data);
    if (arr == null || arr.length < 1){
     $('.debug-url').html('Not Exists Categories in Database. Create First.');
     $("#mensagem_ko").trigger('click');
     $('#show_category_list').empty();
    }
    else {
      for(i=0;i<arr.length;i++)
      {

        nome = "'"+arr[i].nome+"'";


          
          
        s += '<tr class="action-users-'+arr[i].id+'"><td scope="row"><font class="font-1-'+arr[i].id+'" style="color: #000">'+arr[i].cursos+'</font></td><td><font class="font-2-'+arr[i].id+'" style="color: #000">'+arr[i].sub_cursos+'</font></td><td><font class="font-3-'+arr[i].id+'" style="color: #000">'+arr[i].categoria+'</font></td><td><font class="font-4-'+arr[i].id+'" style="color: #000">'+arr[i].funcoes+'</font></td><td><font class="font-5-'+arr[i].id+'" style="color: #000">'+arr[i].contexto+'</font></td><td><font class="font-6-'+arr[i].id+'" style="color: #000">'+arr[i].ficheiro+'</font></td><td id="action-'+arr[i].id+'" style="width:80px;"><button title="Editar Utilizador - '+arr[i].id+'" class="btn btn-info btn-sm" onclick="editModalCategories('+arr[i].id+')" id="edit_filter_'+arr[i].id+'"><span class="glyphicon glyphicon-edit"></span></button>&nbsp;&nbsp;<button title="Apagar Operador" class="btn btn-danger btn-sm" onclick="confirmDeleteCategory('+arr[i].id+')" id="remove_filter_'+arr[i].id+'"><span class="glyphicon glyphicon-trash"></span></button></td></tr>';




          
      }  
      
      
      
      
    $('#show_category_list').html('<div class="table-responsive"><table class="table" id="tbl2"><thead><tr><th>Course</th><th>SubCourse</th><th>Categoria</th><th>Function</th><th>Content</th><th>Files</th><th>Actions</th></tr></thead><tbody>'+s+'</tbody></table></div>');

    
    

    }
    
    
    },
    error:function(data){
     $('.debug-url').html('Error to obtain the category. Please verify wifi connection and try again.');
     $("#mensagem_ko").trigger('click');
    }
  });
}

function confirmDeleteCategory(id)
{
	bootbox.dialog({
    message: "Are you sure to delete the category <strong>"+id+"</strong>",
    title: "<span style='color:#f0ad4e;'><span class='glyphicon glyphicon-exclamation-sign'></span> Confirm</span>",
    buttons: {
      default: {
        label: "<span class='glyphicon glyphicon-remove-sign'></span> Close",
        className: "btn-default",
      },
      danger: {
        label: "<span class='glyphicon glyphicon-trash'></span> Delete",
        className: "btn-danger",
        callback: function() {
      dataValue='&id='+id+'&action=8';
      $.ajax({
        type: "POST",
        url: "action/action_categoria.php",
        data: dataValue,
        cache:false,
        success: function(data){
          if(data == 2){
            showCategories();
            $('#Modalok .debug-url').html('The Category <strong>'+id+'</strong> was deleted sucessfully.');
            $("#Modalok").modal('show');
            setTimeout(function(){  $('#Modalok').modal('hide');}, 2500);
          }
          else
          {
            $('#Modalko .debug-url').html('The Category <strong>'+id+'</strong> was not deleted.');
            $("#Modalko").modal('show');
          }
        },
        error:function(data){
          $('#Modalko .debug-url').html('The Category <strong>'+id+'</strong> was not deleted. Please verify wifi connection and try again.');
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


var names_init = [];
var names = [];


function lister_files (id, files)
        {
        	var l_files = files;
        	if (l_files != "")
        	{	
        		var elem = l_files.split(';');
			    var list_files = '';
			    for(var i=0; i< elem.length; i++)
			    {
			        var s_files = "";
			        var extension = elem[i].substr( (elem[i].lastIndexOf('.') +1) );
			        if (extension != "")
			        {
						switch(extension) {
							case 'jpg':
							case 'png':
							case 'gif':
								s_files += "<font id='fil_blog'><i class='fa fa-image'></i> <a href='https://upload-moodle-cats.onrender.com/cat/"+elem[i]+"'><span>" + elem[i] + "</span></a> </font> ";
							break;                         
							case 'mp4':
							case 'mov':
							case 'vob':
							case 'avi':
							case 'flv':
							case 'webm':
							case 'wmv':
							case 'm4v':
								s_files += "<font id='fil_blog'><i class='fas fa-film'></i> <a href='https://upload-moodle-cats.onrender.com/cat/"+elem[i]+"'><span>" + elem[i] + "</span></a></font> ";
							break;
							default:
								s_files += "<font id='fil_blog'><i class='fas fa-file'></i><a href='https://upload-moodle-cats.onrender.com/cat/"+elem[i]+"'><span>" + elem[i] + "</span></a></font> ";
							}

				            list_files += '<div class="tag"><div id="cont_fil_'+i+'">' + s_files +'<button id="btn_file_rem" onclick="removeFile('+i+');"> X</button></div></div>';
	        				$("#content_fil_blog").html('<br>' + list_files );
			            }
	   			}


	   			for (i=0; i < elem.length; i++)
	        	{
	        		names_init.push($("#cont_fil_"+i+" > #fil_blog > a > span").html());
	        	}
        	}
        	else
        	{
        		$("#content_fil_blog").html('');
        		$("#content_fil_blog_load").html('');
        	}
		    
        }

        function removeA(arr) {
		    var what, a = arguments, L = a.length, ax;
		    while (L > 1 && arr.length) {
		        what = a[--L];
		        while ((ax= arr.indexOf(what)) !== -1) {
		            arr.splice(ax, 1);
		        }
		    }
		    return arr;
		}


        function removeFile(i)
        {
        	var conf_blog = $("#cont_fil_"+i+" > #fil_blog > a > span").html();
    		removeA(names_init, conf_blog);
    		$('#cont_fil_'+i).empty();



        }


		$("#files_blogs").change(function() {
		    for (var i = 0; i < $(this).get(0).files.length; ++i) {
		        names.push($(this).get(0).files[i].name);
		    }
		    var list_files = '';
		    $("#files_blogs_content").val(names);
		   	var files_upl = $("#files_blogs_content").val().split(",");

		   	en = 0;

		        for(var i=0; i< files_upl.length; i++)
		        {

					var extension = files_upl[i].substr( (files_upl[i].lastIndexOf('.') +1) );
					s = '';
					switch(extension) 
					{
						case 'jpg':
						case 'png':
						case 'gif':
							s += "<i class='fa fa-image'></i><span>" + files_upl[i] + "</span>";
						break;                         
						case 'mp4':
						case 'mov':
						case 'vob':
						case 'avi':
						case 'flv':
						case 'webm':
						case 'wmv':
						case 'm4v':
							s += "<i class='fas fa-film'></i><span>" + files_upl[i] + "</span>";
						break;
						
						default:
							s += "<i class='fas fa-file'></i><span>" + files_upl[i] + "</span>";
					}


					list_files += '<div id="cont_fil_edit_'+i+'">' + '<font id="fil_blog_edit">' + s +'</font><button id="btn_file_rem" onclick="removeFileEdit('+i+');"> X</button></div>';

		        }
		        $("#content_fil_blog_load").html(list_files);


		        var myfiles = document.getElementById("files_blogs");
                    var files = myfiles.files;
                    var data = new FormData();

                    for (i = 0; i < files.length; i++) {
                        data.append('file' + i, files[i]);
                    }

                    $.ajax({
                        url: 'https://upload-moodle-cats.onrender.com/upload_file_category.php', 
                        type: 'POST',
                        contentType: false,
                        data: data,
                        processData: false,
                        cache: false
                    }).done(function(msg) {
                        alert('File was added successfully');
                    });





		});

		function removeFileEdit(i)
    	{
    		var conf_blog = $("#cont_fil_edit_"+i+" > #fil_blog_edit > span").html();
    		removeA(names, conf_blog);

    		var path = "https://upload-moodle-cats.onrender.com/cat/"+conf_blog;
    		$.ajax({
		      url: 'https://upload-moodle-cats.onrender.com/removefiles_category.php',
		      type: 'post',
		      data: {path: path},
		      success: function(response){
		        if(response == 1){
		          alert('File was removed successfully');
		        }
		      }
		    });
    		$('#cont_fil_edit_'+i).empty();


    	}


function editModalCategories(id)
{

	var edit_category = $("#edit_category");
	$("#id_cat").html(id);
	var curso = $('.font-1-'+id).html().replace(/\&amp;/g, "&");
	var sub_curso = $('.font-2-'+id).html().replace(/\&amp;/g, "&");

	var categoria = $('.font-3-'+id).html().replace(/\&amp;/g, "&");

	var funcao = $('.font-4-'+id).html().replace(/\&amp;/g, "&");

	var contexto = $('.font-5-'+id).html();

	$("#category_course_edit").val(categoria);

	$("#funcoes_course_edit").val(funcao);



	$("#contexto_course").val(contexto.replace(/\<br\>/g, "\n").replace(/\<br \/\>/g, "\n").replace(/\<i class="fas fa-caret-right"><\/\i>/g, "-").replace(/\&amp;/g, "&"));

	var ficheiro = $('.font-6-'+id).html();




	getCourses(curso);

	getSubCourse(curso, sub_curso);

	getCoursesbyID(curso, sub_curso);

	lister_files (id, ficheiro);




	



	edit_category.modal('show');






}


function saveCategory(id)
{
	var edit_category = $("#edit_category");


	var categoria = $("#category_course_edit").val();

	var funcao = $("#funcoes_course_edit").val();

	var id_curso = $("#id_cursos").val();

	var myTextareaVal = $('#contexto_course').val();

	var c = myTextareaVal.replace(/\-/g, '<i class="fas fa-caret-right"></i>').replace(/\n/g, "<br />");



	
	// ficheiros
	var s_files_upl = '';
	    		for (j=0; j < names_init.length; j++)
	    		{
	    			s_files_upl+=names_init[j]+";";
	    			
	    		}
	    		for (i=0; i<names.length; i++)
	    		{
	    			s_files_upl += names[i]+";";
	    		}
	    		var files_a = s_files_upl.slice(0, -1);

	    		



	 /*datav = "action=9&id_cursos="+id_curso+"&category_course="+escape(categoria)+"&funcoes_course="+escape(funcao)+"&ficheiros="+files_a+"&contexto_course="+c+"&id="+id;*/


	 var datav = new FormData();
     datav.append( 'id_cursos', id_curso );
     datav.append( 'category_course', categoria );
     datav.append( 'funcoes_course', funcao );
     datav.append( 'ficheiros', files_a );
     datav.append( 'contexto_course', c );
     datav.append( 'id', id );
     datav.append( 'action', 9 );

	 $.ajax({ url:'action/action_categoria.php',
			    
			    cache:false,
			    contentType: false,
			    processData: false,
			    data:datav,
			    type:'POST',
			    success: function(data){
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
                        $('.debug-url').html('The Course Category by id '+arr.id+' was not updated.');
                        $('#Modalko').modal('show');
                    }
                    else if (arr.success == 1)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('The Course Category by id '+arr.id+' was updated successfully.');

                        $('#Modalok').modal('show');

                        setTimeout(function(){
			          $('#Modalok').modal('hide');},2500);
			          setTimeout(function(){  location.reload();}, 2500);

                        
                    }
			},
			    error:function(){
			        $('.debug-url').html('Course Category # <strong> ' +id+ ' </strong> was not updated. Please verify wifi connection and try again.');
			        $("#Modalko").modal('show');

			}
			  });



	    		edit_category.modal('hide');
	    		



	   	




}


$("#edit_category").on('hide.bs.modal', function() {
		$("#content_fil_blog").html('');
		$("#content_fil_blog_load").html('');
		names = [];
		names_init = [];

	});


</script>