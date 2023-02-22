
<?php include 'header/header.php'; ?>


		<style>
			#modal_edit_blog .modal-header, #modal_edit_blog .modal-footer, #add_comment_blog .modal-header, #add_comment_blog .modal-footer,.bootbox .modal-header, .bootbox .modal-footer, #edit_comment_blog .modal-header, #edit_comment_blog .modal-footer {
    			background: #ddd;
			}

		</style>



        <div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">

       			<div class="banner">
			   
					<h2>
					<a href="index.php">Home</a>
					<i class="fa fa-angle-right"></i>
					<a href="#">Site Pages</a> <i class="fa fa-angle-right"></i> <span>Site Blogs</span>
					</h2>
			    </div>

			    <div class="content-top">

					<div class="profile row">

						

						<div class="col-md-12 profile-bottom w3-row-padding tabs row">

							
										

									
										
											
	                                    	<div id="contennt_blogs">
	                                    	
											</div>


											<div class="col-md-12 col-xs-12 centering">
												<a class="btn btn-info" role="button" onclick="addComment();"><i class="fas fa-comment"></i> Add Comment</a>
												<br><br>
											</div>


											<div class="col-md-12 col-xs-12 centering">
												<a href="add-site-blogs.php" class="btn btn-primary" role="button"><i class="fab fa-blogger"></i> Add Site Blogs</a>
											</div>
										
									
										 

									
							
						</div>

						


       					

       				</div>
       			</div>
 	
			    
			</div>

			<!-- Modelo de Adicionar Comentario do Blogue do Utilizador -->
			  <div class="modal fade" id="add_comment_blog" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title"><i class="fa fa-comment"></i> Add Comment</h4>
			        </div>
			        <div class="modal-body">
						<div class="row">
				        	<div class="col-md-12">
				        		<br>
				        		<div class="col-md-12">
				        			<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"> 
	                                            <i class="fa fa-comment"></i>&nbsp;&nbsp;Comment
	                                 </h5>
	                                 <div class="form-group">
	                                 <label for="blogs"><i class="fa fa-blog"></i> Choose Blog:</label>
	                                 <select class="form-control" id="blogs" onchange="getBlogsByID(this.value);">
									 </select>
									 <input type="hidden" id="blogs_id">
									 </div>

	                                 <div class="form-group">
								      <label for="comment"><i class="fa fa-comment"></i> Comment:</label>
								      <textarea class="form-control" rows="5" id="comm_blog"></textarea>
								    </div>
				        		</div>
				        		<div class="botter2"></div>
				        		 <div class="row">
								</div>
				        	</div>
				        </div>	









			        </div>
			        <div class="modal-footer">
			        	<p style='text-align:center; margin:0;'><img src="images/cs.png" class="logo-nav" style="width:68px;"></p>
				        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancel</font></button>
	                    <button title="Guardar as alterações do blogue" type="button" class="btn btn-success" onclick="saveComment();"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Save</font></button>
			        </div>
			      </div>
			      
			    </div>
			  </div>



			  <div class="modal fade" id="edit_comment_blog" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title"><i class="fa fa-comment"></i> Edit Comment <span id="edit_commentario"></span></h4>
			        </div>
			        <div class="modal-body">
						<div class="row">
				        	<div class="col-md-12">
				        		<br>
				        		<div class="col-md-12">
				        			<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"> 
	                                            <i class="fa fa-comment"></i>&nbsp;&nbsp;Comment
	                                 </h5>


	                                 <div class="form-group">
	                                 <label for="blogs"><i class="fa fa-blog"></i> Choose Blog:</label>
	                                 <select class="form-control" id="blogs_edit" onchange="getBlogsByID_edit(this.value);">
									 </select>
									 <input type="hidden" id="blogs_id_edit">
									 </div>

	                                 <div class="form-group">
								      <label for="comment"><i class="fa fa-comment"></i> Comment:</label>
								      <textarea class="form-control" rows="5" id="edit_comm_blog"></textarea>
								    </div>
				        		</div>
				        		<div class="botter2"></div>
				        		 <div class="row">
								</div>
				        	</div>
				        </div>	






			        </div>
			        <div class="modal-footer">
			        	<p style='text-align:center; margin:0;'><img src="images/cs.png" class="logo-nav" style="width:68px;"></p>
				        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancel</font></button>
	                    <button title="Guardar as alterações do blogue" type="button" class="btn btn-success" onclick="saveCom($('#edit_commentario').html());"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Save</font></button>
			        </div>
			      </div>
			      
			    </div>
			  </div>






			  <!-- Modelo de Editar Blogue do Utilizador -->
			  <div class="modal fade" id="modal_edit_blog" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title"><i class="fas fa-edit"></i> Edit Blog Number <span id="num_blogue_edit"></span> </h4>
			        </div>
			        <div class="modal-body">
			        	<div class="row">
				        	<div class="col-md-12">

				        		<div class="col-md-12">
				        			<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" > <i class="fas fa-heading"></i> Title <font style="float: right;"><i class="fas fa-chevron-right" id="dis_usr"></i><i class="fas fa-chevron-down" id="ena_usr"></i></font> </h5> 
				        		</div>
	                            <div class="botter2"></div>
	                            	<div id="panel_usr">
										<div class="col-md-12">
											<div class="form-group">
	      										<i class="fas fa-heading"></i> <label for="usr"><strong>Blog Title:</strong></label>
	      										<input type="text" class="form-control" id="title_b">
	    									</div>
										</div>
									</div>

							</div>
						</div>




		            	<div class="row">
				        	<div class="col-md-12">

				        		<br>
				        		<div class="col-md-12">
				        			<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"> 
	                                            <i class="fas fa-list-alt"></i>&nbsp;&nbsp;Content <font style="float: right;"><i class="fas fa-chevron-right" id="dis_content"></i><i class="fas fa-chevron-down" id="ena_content"></i></font> 
	                                 </h5>
				        		</div>
				        		 <div class="botter2"></div>
				        		 <div class="row">
				        		 	<br>
				        		 	<br>
					        		<div id="panel_content">
							        		<div id="co">
				                                
											</div>

									</div>
								</div>
							</div>
						</div>

						<div class="row">
				        	<div class="col-md-12">

				        		<br>

				        		<div class="col-md-12">
				        			<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"> 
	                                            <i class="fa fa-file"></i>&nbsp;&nbsp;File(s) <font style="float: right;"><i class="fas fa-chevron-right" id="dis_file"></i><i class="fas fa-chevron-down" id="ena_file"></i></font>
	                                 </h5>
				        		</div>

				        		<div class="botter2"></div>
				        		 <div class="row">


					        		<div id="panel_file">
						        		<div class="col-md-12">
						        			<div class="botter2"></div>




							        		<div id="content_fil_blog">
											</div>


											<div id="content_fil_blog_load">
											</div>



											<input id="files_blogs" name="files_blogs[]" type="file" class="btn-primary btn col-xs-12" multiple="multiple">
											<input id="files_blogs_content" type="hidden" />

											<input id="list_f_blogs" type="hidden" />



										</div>
									</div>
								</div>


				        	</div>
				        </div>	






			        </div>
			        <div class="modal-footer">
			        	<p style='text-align:center; margin:0;'><img src="images/cs.png" class="logo-nav" style="width:68px;"></p>
				        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancel</font></button>
	                    <button title="Guardar as alterações do blogue" type="button" class="btn btn-success" onclick="saveBlog($('#num_blogue_edit').html());"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Save</font></button>
			        </div>
			      </div>
			      
			    </div>
			  </div>

			  <!-- //Modelo de Editar Blogue do Utilizador -->


			  




			  



	 
		<!---->
		<div class="copy">
            <p> &copy; 2019 Concept Moodle. All Rights Reserved | Design by <a href="https://concept.shijigroup.com/en/" target="_blank">Concept S.A.</a> </p>
	    </div>
		</div>
		<div class="clearfix"> </div>


       </div>

       <?php include 'footer/footer.php'; ?>

       <script type="text/javascript">

       	showBlogs();

       	


 









       	function showBlogs()
       	{
       		var s = '';
       		var s_username = '';
  setTimeout(function(){ 
  dataValue='action=2';
    $.ajax({ url:'/blogs/action_blogs.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);
      


          if (arr.length == null || arr.length < 1 )
          {
            
            $('.debug-url').html('Not Exists the content blog. Create First');
            $("#Modalko").modal('show');
             $('.back').fadeOut();

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
          else 
          {
            for(i=0;i<arr.length;i++)
            {

							id = arr[i].id;
							content = arr[i].conteudo;
								
								s+='<p><h2 class="centering">Blog ID:'+id+'</h2></p><br><div class="line-bord"><div class="modal-header title-black"><h4 class="modal-title"><i class="fas fa-heading"></i> <span id="title_blog_'+id+'">'+arr[i].title+'</span> </h4></div><div class="panel-body"><div class="botter2"></div><div class="col-md-12"><h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="usr_details_off_'+id+'"></i><i class="fas fa-chevron-down" id="usr_details_on_'+id+'"></i></font><span class="fa fa-user"></span>&nbsp;&nbsp;User Information - Blog '+id+'</h5></div><br><div id="usr_cont_'+id+'"><div class="botter2"></div><div class="col-md-4 profile-bottom-img"><img src="images/users/'+arr[i].logotipo+'" id="user_logo_'+id+'" width=150" height="150" alt="" style="border-radius: 100px;"><br><br><h5 style="text-align: center; font-weight: bold;" id="user_name_blog_'+id+'">'+arr[i].nome+'</h5></div><div class="botter2"></div><div class="col-md-8"><font class="date-align"><h5 style="text-align: center; font-weight: bold;"><i class="fas fa-calendar"></i>'+arr[i].data_pub+'</h5></font></div><div class="col-md-8"><div class="botter2"></div><font class="date-align"><h5 style="text-align: center; font-weight: bold;"><i class="fas fa-clock"></i>'+arr[i].hora_pub+'</h5></font></div></div><div class="col-md-12"><div class="botter2"></div><h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"><i class="fas fa-list-alt"></i>&nbsp;&nbsp;Content Blog '+id+' <font style="float: right;"><i class="fas fa-chevron-right" id="content_details_off_'+id+'"></i><i class="fas fa-chevron-down" id="content_details_on_'+id+'"></i></font></h5><div id="content_cont_'+id+'"><iframe id="iframe'+id+'" width="100%" height="100%"></iframe></div></div><div class="col-md-12"><div class="botter2"></div><h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"><i class="fa fa-file"></i>&nbsp;&nbsp;File(s) - Blog '+id+' <font style="float: right;"><i class="fas fa-chevron-right" id="file_details_off_'+id+'"></i><i class="fas fa-chevron-down" id="file_details_on_'+id+'"></i></font></h5><div id="file_cont_'+id+'"><p><div id="file_blogger-'+id+'"><div class="fill_blog-'+id+'"></div></div></p></div></div></div><div class="botter2"></div> <div class="row"><div class="col-md-12"><h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"><i class="fas fa-comments"></i>&nbsp;&nbsp;Comments - Blog '+id+' <font style="float: right;"><i class="fas fa-chevron-right" id="comment_details_off_'+id+'"></i><i class="fas fa-chevron-down" id="comment_details_on_'+id+'"></i></font></h5></div><div id="comment_cont_'+id+'" style="margin-top: 80px;"><div id="comment_blog_'+id+'"></div></div></div></div><div class="panel-footer title-black-white"><p style="text-align:right;"><button class="btn btn-info btn-clear" onclick="editar_blog('+id+');" id="editar_blog_'+id+'"><i class="fa fa-edit"></i><font class="hidden-xs"> Edit Blog</font></button> <button class="btn btn-danger" id="remover_blog_'+id+'" onclick="remover_blog('+id+');"><i class="fas fa-trash"></i><font class="hidden-xs"> Erase Blog</font></button></p></div><br><br>';


								s_username = '<h2 class="centering">Lists blogs</h2><br>';




								







 
                
                
                
            

			}
			$("#contennt_blogs").html(s_username + ' ' + s);

			for (i=0; i<arr.length;i++)
			{
				id = arr[i].id;
				content = arr[i].conteudo;


				$('#iframe'+id).contents().find('html').html(content);


				des_act_content(id);
				des_act_file (id);
				des_act_user (id);
				des_act_comment(id);

				if (arr[i].user_id == $("#user_id_logged").val())
						      	{
						      		$("#remover_blog_"+id).prop('disabled', false);
						            $("#editar_blog_"+id).prop('disabled', false);
						      	}
						      	else
						      	{
						      		$("#remover_blog_"+id).prop('disabled', true);
						            $("#editar_blog_"+id).prop('disabled', true);
						      	}
			}


			for (i=0; i<arr.length;i++)
			{
				id = arr[i].id;
				files = arr[i].files;
				list_files (id, files);

			}
			for (i=0; i<arr.length;i++)
			{
				id = arr[i].id;		
				comments_lists (id);
			}
          }
        },
        error:function(data){
            $('.debug-url').html('Was not possible to show the blog content. Please verify wifi connection and try again.');
            $("#Modalko").modal('show');
             $('.back').fadeOut();
          }
        });
    
    }, 10);
       	}


       	function comments_lists(id) {
       		var d = '';
       		var s_username = '';
  setTimeout(function(){ 
  dataValue='action=5&blog_id='+id;
    $.ajax({ url:'/blogs/action_blogs.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();
      arr = JSON.parse(data);
          if (arr.length == null || arr.length < 1 )
          {
            $('#Modalko .debug-url').html('Not exists of content of comment <?php echo $_COOKIE["username"]; ?>. Create first');
            $("#Modalko").modal('show');
             $('.back').fadeOut();
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
          else 
          {
            for(i=0;i<arr.length;i++)
            {
							id_com = arr[i].id;
							d += '<div class="col-md-12"><div class="line-bord"><div class="modal-header title-black"><h4 class="modal-title"><i class="fas fa-comment"></i> RE: <font id="title_comment_'+id_com+'">'+arr[i].title+'</font></h4></div><div class="row"><div class="col-md-12"><br><br><div class="col-md-4 col-xs-12" style="text-align: center"><img src="images/users/'+arr[i].logotipo+'" alt="" width=150" height="150" style="border-radius: 100px;"><br><br><h5 style="font-weight: bold;"><font id="user-acton">'+arr[i].nome+'</font></h5><div class="botter2"></div></div><div class="col-md-8 col-xs-12"><font class="date-align"><h5 style="text-align: center; font-weight: bold;" ><i class="fas fa-calendar"></i> '+arr[i].data_pub+'</h5></font><br><br><font class="date-align"><h5 style="text-align: center; font-weight: bold;"><i class="fas fa-clock"></i>'+arr[i].hora_pub+'</h5></font></div><br><br><div class="col-md-12"><h5 class="col-xs-12 w3-padding-8 w3-card-2 align_div"><i class="fas fa-comment"></i>&nbsp;&nbsp;Comment</h5></div><div class="col-md-12"><font id="comment_acton_'+id_com+'">'+arr[i].com+'</font></div></div></div></div><div class="panel-footer title-black-white"><p style="text-align:right;"><button class="btn btn-info btn-clear" onclick="editar_com('+id_com+');" id="editar_com_'+id_com+'"><i class="fa fa-edit"></i><font class="hidden-xs"> Edit Comment</font></button> <button class="btn btn-danger" id="erase_com_'+id_com+'" onclick="remover_com('+id_com+');"><i class="fas fa-trash"></i><font class="hidden-xs"> Erase Comment</font></button></p></div><div class="botter2"></div></div><br><br>';
							$("#comment_blog_"+id).html(d);
			}
			for (i=0;i<arr.length;i++)
			{
								id_com = arr[i].id;
								if (arr[i].user_id == $("#user_id_logged").val())
						      	{
						      		$("#erase_com_"+id_com).prop('disabled', false);
						            $("#editar_com_"+id_com).prop('disabled', false);
						      	}
						      	else
						      	{
						      		$("#erase_com_"+id_com).prop('disabled', true);
						            $("#editar_com_"+id_com).prop('disabled', true);
						      	}
			}



			
			

			


            
            
            
          }
        },
        error:function(data){
            $('#Modalko .debug-url').html('Was not possible to show the comment content. Please verify wifi connection and try again.');
            $("#Modalko").modal('show');
             $('.back').fadeOut();
          }
        });
    
    }, 10);


  		


       	}


       	function list_files (id, files)
        {
        	var l_files = files;
		    var elem = l_files.split(';');
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
							s_files += "<font id='fil_blog'><i class='fa fa-image'></i> <a href='upload/"+elem[i]+"'><span>" + elem[i] + "</span></a> </font><br>";
						break;                         
						case 'zip':
						case 'rar':
							s_files += "<font id='fil_blog'><i class='fas fa-file-archive'></i> <a href='upload/"+elem[i]+"'><span>" + elem[i] + "</span></a></font><br>";
						break;
						case 'pdf':
							s_files += "<font id='fil_blog'><i class='fas fa-file-pdf'></i><a href='upload/"+elem[i]+"'><span>" + elem[i] + "</span></a></font><br>";
						break;
						default:
							s_files += "<font id='fil_blog'><i class='fas fa-file'></i><a href='upload/"+elem[i]+"'><span>" + elem[i] + "</span></a></font><br>";
						}

			            $('.fill_blog-'+id).append(s_files);
		            }
   			}
        }

        



        $("#dis_usr").css('display', 'none');

        $("#ena_usr").click(function(){
    		$("#panel_usr").slideUp("slow");
    		$("#dis_usr").css('display', 'block');
    		$("#ena_usr").css('display', 'none');
  		});

  		$("#dis_usr").click(function(){
    		$("#panel_usr").slideDown("slow");
    		$("#dis_usr").css('display', 'none');
    		$("#ena_usr").css('display', 'block');
  		});

  		$("#dis_content").css('display', 'none');

        $("#ena_content").click(function(){
    		$("#panel_content").slideUp("slow");
    		$("#dis_content").css('display', 'block');
    		$("#ena_content").css('display', 'none');
  		});

  		$("#dis_content").click(function(){
    		$("#panel_content").slideDown("slow");
    		$("#dis_content").css('display', 'none');
    		$("#ena_content").css('display', 'block');
  		});

  		$("#dis_file").css('display', 'none');

        $("#ena_file").click(function(){
    		$("#panel_file").slideUp("slow");
    		$("#dis_file").css('display', 'block');
    		$("#ena_file").css('display', 'none');
  		});

  		$("#dis_file").click(function(){
    		$("#panel_file").slideDown("slow");
    		$("#dis_file").css('display', 'none');
    		$("#ena_file").css('display', 'block');
  		});




  		var s_files = '';
  		var len = 0;

  		var names = [];
  		var names_init = [];


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
  		
  		$("#files_blogs").change(function() {
		    for (var i = 0; i < $(this).get(0).files.length; ++i) {
		        names.push($(this).get(0).files[i].name);
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
							s += "<i class='fa fa-image'></i><a href='upload/"+files_upl[i]+"'><span>" + files_upl[i] + "</span></a>";
						break;                         
						case 'zip':
						case 'rar':
							s += "<i class='fas fa-file-archive'></i><a href='upload/"+files_upl[i]+"'><span>" + files_upl[i] + "</span></a>";
						break;
						case 'pdf':
							s += "<i class='fas fa-file-pdf'></i><a href='upload/"+files_upl[i]+"'><span>" + files_upl[i] + "</span></a>";
						break;
						default:
							s += "<i class='fas fa-file'></i><a href='upload/"+files_upl[i]+"'><span>" + files_upl[i] + "</span></a>";
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
                        url: 'upload_file_blogs.php', 
                        type: 'POST',
                        contentType: false,
                        data: data,
                        processData: false,
                        cache: false
                    }).done(function(msg) {
                        alert('File(s) was added successfully');
                        var obj = document.createElement("audio");
						  obj.src = "/Sound/success.mp3";
						  obj.volume = 0.1;
						  obj.autoPlay = false;
						  obj.preLoad = true;
						  obj.controls = true;
						  obj.play();
                    });


		});

        // Conteudo de Informação

        function des_act_user (id)
        {
        	$("#usr_details_on_"+id).css('cursor', 'pointer');
        	$("#usr_details_off_"+id).css('cursor', 'pointer');
        	$("#usr_details_on_"+id).hover(function(){
			    $(this).css("opacity", "0.7");
			    }, function(){
			    $(this).css("opacity", "1");
			  });

        	$("#usr_details_off_"+id).hover(function(){
			    $(this).css("opacity", "0.7");
			    }, function(){
			    $(this).css("opacity", "1");
			  });

			$("#usr_details_off_"+id).css('display', 'none');

			var usr = 0;
			var s_usr = 0;

			$("#usr_details_off_"+id).on('click', function(e)
			{
				usr=1;
			    if (usr == 1)
			    {
			       $("#usr_details_on_"+id).css('display','inline-block');
			       $("#usr_details_off_"+id).css('display','none');
			    }
				
				$("#usr_cont_"+id).removeClass('w3-animate-fading');
				$("#usr_cont_"+id).addClass('w3-animate-opacity');
				setTimeout(function(){ $("#usr_cont_"+id).css('display', 'block'); }, 1000);
			});

			$("#usr_details_on_"+id).on('click', function(e)
			{
				s_usr=1;
			    if (s_usr == 1)
			    {
			       $("#usr_details_on_"+id).css('display','none');
			       $("#usr_details_off_"+id).css('display','inline-block');
			    }
			    $("#usr_cont_"+id).removeClass('w3-animate-opacity');
			    $("#usr_cont_"+id).addClass('w3-animate-fading');
			    setTimeout(function(){ $("#usr_cont_"+id).css('display', 'none'); }, 1000);
			});
        }

        function des_act_content (id)
        {

        	$("#content_details_on_"+id).css('cursor', 'pointer');
        	$("#content_details_off_"+id).css('cursor', 'pointer');

        	$("#content_details_on_"+id).hover(function(){
			    $(this).css("opacity", "0.7");
			    }, function(){
			    $(this).css("opacity", "1");
			  });

        	$("#content_details_off_"+id).hover(function(){
			    $(this).css("opacity", "0.7");
			    }, function(){
			    $(this).css("opacity", "1");
			  });

			$("#content_details_off_"+id).css('display', 'none');

			var content = 0;
			var s_content = 0;

			$("#content_details_off_"+id).on('click', function(e)
			{
				content=1;
			    if (content == 1)
			    {
			       $("#content_details_on_"+id).css('display','inline-block');
			       $("#content_details_off_"+id).css('display','none');
			    }
				
				$("#content_cont_"+id).removeClass('w3-animate-fading');
				$("#content_cont_"+id).addClass('w3-animate-opacity');
				setTimeout(function(){ $("#content_cont_"+id).css('display', 'block'); }, 1000);
			});

			$("#content_details_on_"+id).on('click', function(e)
			{
				s_content=1;
			    if (s_content == 1)
			    {
			       $("#content_details_on_"+id).css('display','none');
			       $("#content_details_off_"+id).css('display','inline-block');
			    }
			    $("#content_cont_"+id).removeClass('w3-animate-opacity');
			    $("#content_cont_"+id).addClass('w3-animate-fading');
			    setTimeout(function(){ $("#content_cont_"+id).css('display', 'none'); }, 1000);
			});
        }


        function des_act_file (id)
        {

        	$("#file_details_on_"+id).css('cursor', 'pointer');
        	$("#file_details_off_"+id).css('cursor', 'pointer');

        	$("#file_details_on_"+id).hover(function(){
			    $(this).css("opacity", "0.7");
			    }, function(){
			    $(this).css("opacity", "1");
			  });

        	$("#file_details_off_"+id).hover(function(){
			    $(this).css("opacity", "0.7");
			    }, function(){
			    $(this).css("opacity", "1");
			  });

			$("#file_details_off_"+id).css('display', 'none');

			var file = 0;
			var s_file = 0;

			$("#file_details_off_"+id).on('click', function(e)
			{
				file=1;
			    if (file == 1)
			    {
			       $("#file_details_on_"+id).css('display','inline-block');
			       $("#file_details_off_"+id).css('display','none');
			    }
				
				$("#file_cont_"+id).removeClass('w3-animate-fading');
				$("#file_cont_"+id).addClass('w3-animate-opacity');
				setTimeout(function(){ $("#file_cont_"+id).css('display', 'block'); }, 1000);
			});

			$("#file_details_on_"+id).on('click', function(e)
			{
				s_file=1;
			    if (s_file == 1)
			    {
			       $("#file_details_on_"+id).css('display','none');
			       $("#file_details_off_"+id).css('display','inline-block');
			    }
			    $("#file_cont_"+id).removeClass('w3-animate-opacity');
			    $("#file_cont_"+id).addClass('w3-animate-fading');
			    setTimeout(function(){ $("#file_cont_"+id).css('display', 'none'); }, 1000);
			});
        }

        function des_act_comment (id)
        {

        	$("#comment_details_on_"+id).css('cursor', 'pointer');
        	$("#comment_details_off_"+id).css('cursor', 'pointer');

        	$("#comment_details_on_"+id).hover(function(){
			    $(this).css("opacity", "0.7");
			    }, function(){
			    $(this).css("opacity", "1");
			  });

        	$("#comment_details_off_"+id).hover(function(){
			    $(this).css("opacity", "0.7");
			    }, function(){
			    $(this).css("opacity", "1");
			  });

			$("#comment_details_off_"+id).css('display', 'none');

			var comment = 0;
			var s_comment = 0;

			$("#comment_details_off_"+id).on('click', function(e)
			{
				comment=1;
			    if (comment == 1)
			    {
			       $("#comment_details_on_"+id).css('display','inline-block');
			       $("#comment_details_off_"+id).css('display','none');
			    }
				
				$("#comment_cont_"+id).removeClass('w3-animate-fading');
				$("#comment_cont_"+id).addClass('w3-animate-opacity');
				setTimeout(function(){ $("#comment_cont_"+id).css('display', 'block'); }, 1000);
			});

			$("#comment_details_on_"+id).on('click', function(e)
			{
				s_comment=1;
			    if (s_comment == 1)
			    {
			       $("#comment_details_on_"+id).css('display','none');
			       $("#comment_details_off_"+id).css('display','inline-block');
			    }
			    $("#comment_cont_"+id).removeClass('w3-animate-opacity');
			    $("#comment_cont_"+id).addClass('w3-animate-fading');
			    setTimeout(function(){ $("#comment_cont_"+id).css('display', 'none'); }, 1000);
			});
        }

        


        function file_word (id, content)
        {
        	$("#co").html('<div class="botter2"></div><div id="content_edit_'+id+'"></div><input type="file" name="fileupload" id="fileupload" style="display: none;">')
        	// Editar Blogue
	    	tinymce.init({
	        selector: "#content_edit_"+id,
	        themes: 'modern',
		  	height: 200,
		  	plugins: "image media",
		  	setup: function(ed){
                                ed.on("init",
                                      function(ed) {
                                        tinyMCE.get('content_edit_'+id).setContent(content);
                                        tinyMCE.execCommand('mceRepaint');

                                      }
                                );
                            },
		  	file_picker_callback: function(callback, value, meta) {
		        // File type
		        if (meta.filetype =="media" || meta.filetype =="image") {
		        	// Trigger click on file element
		            jQuery("#fileupload").trigger("click");
		            $("#fileupload").unbind('change');
		            // File selection
		            jQuery("#fileupload").on("change", function() {
		                var file = this.files[0];
		                var reader = new FileReader();
		                // FormData
		                var fd = new FormData();
		                var files = file;
		                fd.append("file",files);
		                fd.append('filetype',meta.filetype);
		                var filename = "";
		                // AJAX
		                jQuery.ajax({
		                    url: "upload.php",
		                    type: "post",
		                    data: fd,
		                    contentType: false,
		                    processData: false,
		                    async: false,
		                    success: function(response){
		                        filename = response;
		                    }
		                });
		                reader.onload = function(e) {
		                    callback("images/uploads/"+filename);
		                };
		                reader.readAsDataURL(file);
		            });
		        }
		    }
	    	});
        }

    	// Activar e Desativar os Users

    	function removeFile(i)
    	{
    		var conf_blog = $("#cont_fil_"+i+" > #fil_blog_edit > a > span").html();
    		removeA(names_init, conf_blog);
    		len--;
    		$('#cont_fil_'+i).empty();
    	}

    	function removeFileEdit(i)
    	{
    		var conf_blog = $("#cont_fil_edit_"+i+" > #fil_blog_edit > a > span").html();
    		removeA(names, conf_blog);
    		var path = "upload/"+conf_blog;
    		len--;
    		$.ajax({
		      url: 'removefile_blogs.php',
		      type: 'post',
		      data: {path: path},
		      success: function(response){
		        // Changing image source when remove
		        if(response == 1){
		          alert('File was removed successfully');
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

    	function editar_blog (id)
    	{
    		var modal_blog = $("#modal_edit_blog");
        	var cont = $("#iframe"+id).contents().find("body").html();
        	var title_cont = $("#title_blog_"+id).html();
			$("#title_b").val(title_cont);
        	$("#num_blogue_edit").html(id);
        	var len = $('.fill_blog-'+id+' > #fil_blog').length;
        	var list_files = '';
        	for (i=0; i<len; i++)
        	{
        		list_files += '<div class="tag"><div id="cont_fil_'+i+'">' + '<font id="fil_blog_edit">' + $($('.fill_blog-'+id+' > #fil_blog')[i]).html() +'</font><button id="btn_file_rem" onclick="removeFile('+i+');"> X</button></div></div>';
        		$("#content_fil_blog").html('<br>' + list_files );
        	}
        	for (i=0; i<len; i++)
        	{
        		names_init.push($("#cont_fil_"+i+" > #fil_blog_edit > a > span").html());
        	}
        	file_word (id, cont);
        	modal_blog.modal('show');
    	}

    	function saveBlog(id)
    	{
    			var modal_blog = $("#modal_edit_blog");
        		var content = tinyMCE.get("content_edit_"+id).getContent();
        		var s_files_upl = '';
	    		for (j=0; j < names_init.length; j++)
	    		{
	    			s_files_upl+=names_init[j]+";";
	    		}
	    		var id_user = <?php echo $_COOKIE['id']; ?>;
	    		for (i=0; i<names.length; i++)
	    		{
	    			s_files_upl += names[i]+";";
	    		}
	    		var files_a = s_files_upl.slice(0, -1);
	    		var title = $("#title_b").val();
	    		datav = "action=3&title="+title+"&conteudo="+escape(content)+"&files="+escape(files_a)+"&id="+id;
	    		$.ajax({ url:'blogs/action_blogs.php',
			    data:datav,
			    type:'POST',
			    cache:false,
			    success: function(data){
			     if (data == 1) {
			     	$('.debug-url').html('Number Blog <strong class="cpt">'+id+'</strong> was updated successfully.');
			          $('#Modalok').modal('show');
			          $('html, body').animate({ scrollTop: 0 }, 500);
			          var obj = document.createElement("audio");
						  obj.src = "/Sound/success.mp3";
						  obj.volume = 0.1;
						  obj.autoPlay = false;
						  obj.preLoad = true;
						  obj.controls = true;
						  obj.play();
			          setTimeout(function(){
			          $('#Modalok').modal('hide');},2500);
			          setTimeout(function(){  location.reload();}, 2500);

			     }
			     else if (data == 0){
			       $('.debug-url').html('Blog #<strong>'+id+'</strong> was not updated!');
			          $("#Modalko").modal('show');
			          setTimeout(function(){  $('#Modalko').modal('hide');}, 2500);
			     }
			},
			    error:function(){
			        $('.debug-url').html('Blog number #<strong> ' +id+ ' </strong> was not updated. Please verify wifi connection and try again.');
			        $("#Modalko").modal('show');
			}
			  });
	    		modal_blog.modal('hide');







    	}




function remover_blog(id){
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
			bootbox.dialog({
			  message: "Are you sure to deleted the blog: #<strong>"+id+"</strong> ?",
			  title: "<span style='color:#b38600;'><span class='glyphicon glyphicon-exclamation-sign'></span> Confirm</span>",
			  buttons: {
			    default: {
			      label: "<span class='glyphicon glyphicon-remove-sign'></span> <span class='hidden-xs'>Close</span>",
			      className: "btn-default",
			    },
			    danger: {
			      label: "<span class='glyphicon glyphicon-trash'></span><span class='hidden-xs'> Erase</span>",
			      className: "btn-danger",
			      callback: function() {
			        dataValue='id='+id+'&action=4';
				     $.ajax({
				      type: "POST",
				      cache:false,
				      url: "blogs/action_blogs.php",
				      data: dataValue,
				      success: function(data){
				        if(data == 2){
				          $('.debug-url').html('Blog number: #<strong>'+id+'</strong> was deleted successfully.');
				          $("#Modalok").modal('show');
				          var obj = document.createElement("audio");
						  obj.src = "/Sound/success.mp3";
						  obj.volume = 0.1;
						  obj.autoPlay = false;
						  obj.preLoad = true;
						  obj.controls = true;
						  obj.play();
				          setTimeout(function(){  $('#Modalok').modal('hide');}, 2500);
				          setTimeout(function(){  location.reload();}, 2500);
				        }
				        else{
				          $('.debug-url').html('Blog number: #<strong>'+id+'</strong> was not deleted.');
				          $("#Modalko").modal('show');
				          setTimeout(function(){  $('#Modalko').modal('hide');}, 2500);

				        }

				      },
				      error:function(data){
				        $('.debug-url').html('Blog number: #<strong>'+id+'</strong> was not deleted. Please verify wifi connection and try again.');
				        $("#Modalko").modal('show');
				      }
				   });
			     

      }
    },
  }
});
}



function getBlogs() {
	var s = '';


	s += '<option value ="">Choose Blog...</option>';


	$("#blogs").html(s);
  setTimeout(function(){ 
  dataValue='action=6';
    $.ajax({ url:'blogs/action_blogs.php',
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
				s +='<option value="'+arr[i].title+'">'+arr[i].title+'</option>';
			}
			$("#blogs").html(s);
          }
        },
        error:function(data){
       		}
        });
    
    }, 1000);
}


function getBlogsByID(name_blog) 
{
	setTimeout(function(){ 
  dataValue='action=7&title='+name_blog;
    $.ajax({ url:'blogs/action_blogs.php',
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
				$("#blogs_id").val(arr[i].id);
			}
          }
        },
        error:function(data){
       		}
        });
    }, 50);
}






function getBlogs_edit(title_blog) {
	var s = '';
	s ='<option value="'+title_blog+'">'+title_blog+'</option>';
	$("#blogs").html(s);
  setTimeout(function(){ 
  dataValue='action=6';
    $.ajax({ url:'blogs/action_blogs.php',
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
				s +='<option value="'+arr[i].title+'">'+arr[i].title+'</option>';
			}
			$("#blogs_edit").html(s);
          }
        },
        error:function(data){
       		}
        });
    
    }, 1000);
}


function getBlogsByID_edit(name_blog) 
{
	setTimeout(function(){ 
  dataValue='action=7&title='+name_blog;
    $.ajax({ url:'blogs/action_blogs.php',
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
				$("#blogs_id_edit").val(arr[i].id);
			}
          }
        },
        error:function(data){
       		}
        });
    
    }, 50);
}



// Comentarios

function addComment ()
{
    		var comment_blog = $("#add_comment_blog");

    		getBlogs();

    		comment_blog.modal('show');
}

        
function saveComment()
    	{
    		var comment_blog = $("#add_comment_blog");

    		var title_blog_id = $("#blogs_id").val();

    		var comentario = $("#comm_blog").val();

    		var user_id = <?php echo $_COOKIE['id']; ?>;

    		datav = "action=8&com="+comentario+"&user_id="+user_id+"&blog_id="+title_blog_id;

    		$('.back').show()
		    $.ajax({
		        type: "POST",
		        url: "blogs/action_blogs.php",
		        data: datav,
		        cache: false,
		        success: function(data) {
		          $('.back').fadeOut();
		          arr = [];
		          arr = JSON.parse(data);
		          if (arr.error){
		            $(".debug-url").html("Please verify:<br><br>"+arr.error+"<br> Correct the erro(s) and try again.");
                    $('#Modalko').modal('show');

		          }
		          else if (arr.success == 0)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('The commment create by username <?php echo $_COOKIE['username'] ?> was not created successfully');
                        $('#Modalko').modal('show');
                    }
                    else if (arr.success == 1)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('The commment create by username <?php echo $_COOKIE['username'] ?> was created successfully');
                        var obj = document.createElement("audio");
						  obj.src = "/Sound/success.mp3";
						  obj.volume = 0.1;
						  obj.autoPlay = false;
						  obj.preLoad = true;
						  obj.controls = true;
						  obj.play();

                        $('#Modalok').modal('show');
                        setTimeout(function(){  location.reload();}, 2500);

                        
                    }
		        },
		        error: function() {
		           $('.debug-url').html("The commment create by username <?php echo $_COOKIE['username'] ?> was not created. Please verify wifi connection and try again.");
            		$('#Modalko').modal('show');
		        }
		    });





    		


    		comment_blog.modal('hide');

    	}
        

function remover_com(id_com)
{
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
	bootbox.dialog({
			  message: "Are you sure to delete the Blog Comment: #<strong>"+id_com+"</strong> ?",
			  title: "<span style='color:#b38600;'><span class='glyphicon glyphicon-exclamation-sign'></span> Confirm</span>",
			  buttons: {
			    default: {
			      label: "<span class='glyphicon glyphicon-remove-sign'></span> <span class='hidden-xs'>Close</span>",
			      className: "btn-default",
			    },
			    danger: {
			      label: "<span class='glyphicon glyphicon-trash'></span><span class='hidden-xs'> Apagar</span>",
			      className: "btn-danger",
			      callback: function() {
			        dataValue='id='+id_com+'&action=9';
				     $.ajax({
				      type: "POST",
				      cache:false,
				      url: "blogs/action_blogs.php",
				      data: dataValue,
				      success: function(data){
				        if(data == 2){
				          $('.debug-url').html('Blog Comment #<strong>'+id+'</strong> was erase successfully');
				          $("#Modalok").modal('show');
				          var obj = document.createElement("audio");
						  obj.src = "/Sound/success.mp3";
						  obj.volume = 0.1;
						  obj.autoPlay = false;
						  obj.preLoad = true;
						  obj.controls = true;
						  obj.play();
				          setTimeout(function(){  $('#Modalok').modal('hide');}, 2500);
				          setTimeout(function(){  location.reload();}, 2500);
				        }
				        else{
				          $('.debug-url').html('Blog Comment number: #<strong>'+id+'</strong> was not erased successfully.');
				          $("#Modalko").modal('show');
				          setTimeout(function(){  $('#Modalko').modal('hide');}, 2500);

				        }

				      },
				      error:function(data){
				        $('.debug-url').html('Blog Comment #<strong>'+id+'</strong> was not erase. Please verify wifi connection and try again.');
				        $("#Modalko").modal('show');
				      }
				   });
			     

      }
    },
  }
});
}

function editar_com(id_com) 
{

	var modal_com_edit = $("#edit_comment_blog");

	$("#edit_commentario").html(id_com);

	var title_blog = $('#title_comment_'+id_com+'').html();

	var coment = $('#comment_acton_'+id_com+'').html();

	$("#edit_comm_blog").val(coment);

	getBlogsByID_edit(title_blog);

	getBlogs_edit(title_blog);


	modal_com_edit.modal('show');
}


function saveCom(id_com)
{
	var modal_com_edit = $("#edit_comment_blog");

	dataValue='action=10&id_com='+id_com+'&blog_id='+$("#blogs_id_edit").val()+'&com='+$("#edit_comm_blog").val();





	$.ajax({ url:'blogs/action_blogs.php',
			    data:dataValue,
			    type:'POST',
			    cache:false,
			    success: function(data){

			     if (data == 1) {
			     	$('.debug-url').html('Blog Number Blog<strong class="cpt">'+id_com+'</strong> was updated sucessfully');
			     	var obj = document.createElement("audio");
						  obj.src = "/Sound/success.mp3";
						  obj.volume = 0.1;
						  obj.autoPlay = false;
						  obj.preLoad = true;
						  obj.controls = true;
						  obj.play();
			          $('#Modalok').modal('show');
			          $('html, body').animate({ scrollTop: 0 }, 500);
			          setTimeout(function(){
			          $('#Modalok').modal('hide');},2500);
			          setTimeout(function(){  location.reload();}, 2500);
			          
			     }
			     else if (data == 0){
			       $('.debug-url').html('Blog Comment #<strong>'+id_com+'</strong> was not updated sucessfully!');
			          $("#Modalko").modal('show');
			          setTimeout(function(){  $('#Modalko').modal('hide');}, 2500);

			     }
			},
			    error:function(){
			        $('.debug-url').html('Blog Comment # <strong> ' +id_com+ ' </strong> was not updated. p.f. Please verify wifi connection and try again.');
			        $("#Modalko").modal('show');

			}
			  });

	    	modal_com_edit.modal('hide');
}


	$("#modal_edit_blog").on('hide.bs.modal', function() {
		$("#content_fil_blog").html('');
		$("#content_fil_blog_load").html('');
		names = [];
		names_init = [];

	});
		
       	

       </script>





     

