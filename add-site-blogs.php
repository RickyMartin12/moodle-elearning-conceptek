
<?php include 'header/header.php'; ?>


		

        <div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">

       			<div class="banner">
			   
					<h2>
					<a href="/index.php">Home</a>
					<i class="fa fa-angle-right"></i>
					<a href="#">Site Pages</a> <i class="fa fa-angle-right"></i> <a href="site-blogs.php">Site Blogs</a> <i class="fa fa-angle-right"></i> <span>Add Blog</span>
					</h2>
			    </div>

			    <div class="content-top">
					<div class="profile row">

						

						<div class="col-md-12 profile-bottom w3-row-padding tabs row">

							<div class="line-bord">
						  		<div class="modal-header title-blog">
	        						<h4 class="modal-title"><i class="fas fa-plus"></i> Add New Blog</span> </h4>
								</div>

								<form id="submit_new_blog">	


								<div class="panel-body">

									<div class="botter2"></div>
									<div class="row">
											<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="title_off"></i><i class="fas fa-chevron-down" id="title_on"></i></font>
		                                            <span class="fas fa-heading"></span>&nbsp;&nbsp;Titulo do Blog
		                                     </h5>
		                             </div>

		                                 <div id="title_cont">

		                                 	<div class="col-md-12">
												<div class="form-group">
		      										<i class="fas fa-heading"></i> <label for="usr"><strong>Blog Title:</strong></label>
		      										<input type="text" class="form-control" id="title_blog">
		    									</div>
											</div>

		                                 </div>


		                                 <div class="row">
													<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"> 
			                                            <i class="fas fa-list-alt"></i>&nbsp;&nbsp;Content <font style="float: right;"><i class="fas fa-chevron-right" id="content_off"></i><i class="fas fa-chevron-down" id="content_on"></i></font>
			                                    	</h5>
		                                </div>

	                                    <div class="col-md-12">
	                                    	<div id="content_cont">
												<div id="content_blog">
												</div>
												<input type='file' name='fileupload' id='fileupload' style='display: none;'>
											</div>
										</div>



										<div class="col-md-12">
											<div class="botter2"></div>
						        			<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"> 
			                                            <i class="fa fa-file"></i>&nbsp;&nbsp;File(s) <font style="float: right;"><i class="fas fa-chevron-right" id="file_off"></i><i class="fas fa-chevron-down" id="file_on"></i></font>
			                                 </h5>
						        		</div>


		                                 <div class="botter2"></div>
							        		 <div class="row">

							        		 	<div class="col-md-12">
								        		<div id="panel_file">
									        		<div class="col-md-12">
									        			<div class="botter2"></div>

														<!-- Carregamento de ficheiros -->
														<div id="file_cont">

															<div id="content_fil_blog_load">
								                                


															</div>

															<input id="files_blogs" name="file" type="file" class="btn-primary btn col-xs-12" multiple="multiple">
															<input id="files_blogs_content" type="hidden" />

															<input id="list_f_blogs" type="hidden" />
															</div>
													</div>
												</div>
											  </div>
											</div>

								</div>

								<div class="panel-footer title-black-white">
	                                <p style="text-align:right;">
                                    	<button type="reset" class="btn btn-default btn-clear"><i class="fa fa-eraser"></i><font class="hidden-xs"> Clear</font></button>
                                    	<button type="button" id="submit-new" class="btn btn-success"><i class="fas fa-save"></i><font class="hidden-xs"> Save</font></button>
                                	</p>
                            	</div>

                            	</form>


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



       <?php include 'footer/footer.php'; ?>


       <script type="text/javascript">

       	$("#title_off").css('display', 'none');

        $("#title_on").click(function(){
    		$("#title_cont").slideUp("slow");
    		$("#title_off").css('display', 'block');
    		$("#title_on").css('display', 'none');
  		});

  		$("#title_off").click(function(){
    		$("#title_cont").slideDown("slow");
    		$("#title_off").css('display', 'none');
    		$("#title_on").css('display', 'block');
  		});

  		$("#content_off").css('display', 'none');

        $("#content_on").click(function(){
    		$("#content_cont").slideUp("slow");
    		$("#content_off").css('display', 'block');
    		$("#content_on").css('display', 'none');
  		});

  		$("#content_off").click(function(){
    		$("#content_cont").slideDown("slow");
    		$("#content_off").css('display', 'none');
    		$("#content_on").css('display', 'block');
  		});

  		$("#file_off").css('display', 'none');

        $("#file_on").click(function(){
    		$("#file_cont").slideUp("slow");
    		$("#file_off").css('display', 'block');
    		$("#file_on").css('display', 'none');
  		});

  		$("#file_off").click(function(){
    		$("#file_cont").slideDown("slow");
    		$("#file_off").css('display', 'none');
    		$("#file_on").css('display', 'block');
  		});



  		tinymce.init({
		  	selector: '#content_blog',
		  	themes: 'modern',
		  	height: 200,
		  	plugins: "image media",
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

  		var names = [];

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
	    	$("#content_fil_blog_load").empty();
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
						case 'zip':
						case 'rar':
							s += "<i class='fas fa-file-archive'></i><span>" + files_upl[i] + "</span>";
						break;
						case 'pdf':
							s += "<i class='fas fa-file-pdf'></i><span>" + files_upl[i] + "</span>";
						break;
						default:
							s += "<i class='fas fa-file'></i><span>" + files_upl[i] + "</span>";
					}


					list_files += '<div id="cont_fil_'+i+'">' + '<font id="fil_blog">' + s +'</font><button id="btn_file_rem" onclick="removeFile('+i+');"> X</button></div>';

		        }
		        $("#content_fil_blog_load").append(list_files);


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
                        $('.debug-url').html('File was added successfully');
			          $('#Modalok').modal('show');
                    });





		});

		function removeFile(i)
    	{
    		var conf_blog = $("#cont_fil_"+i+" > #fil_blog > span").html();
    		removeA(names, conf_blog);

    		var path = "upload/"+conf_blog;
    		$.ajax({
		      url: 'removefile_blogs.php',
		      type: 'post',
		      data: {path: path},
		      success: function(response){
		        // Changing image source when remove
		        if(response == 1){
		          $('.debug-url').html('File was removed successfully');
			      $('#Modalok').modal('show');
		        }
		      }
		    });
    		$('#cont_fil_'+i).empty();


    	}


    	$("#submit-new").on('click', function(e)
    	{
    		var i = 0;
    		var len_edit = $('[id=fil_blog]').length;
    		e.preventDefault();

    		var d = new Date();
			var strDate = d.getDate() + "/" + (d.getMonth()+1) + "/" + d.getFullYear();
			var strTime = d.getHours() + ":" + d.getMinutes();

        	var s = '';
        	var t = '';
        	var ssa = '';
        	for (i=0; i<len_edit; i++)
        	{
        		s = $($("[id='fil_blog']")[i]).html();
        		t += s;
        	}

        	$("#list_f_blogs").val(t);


        	for (i=0; i<names.length; i++)
	    		{
	    			ssa += names[i]+";";
	    		}
	    		var files_a = ssa.slice(0, -1);
	    		

    	
    		var username = $("#logged_username_name").html();
    		var logo_username = $("#logged_username_img").attr("src");
    		var file_image=logo_username.split('/').pop();
    		var title = $("#title_blog").val();
    		var conteudo_blog = tinyMCE.editors[$('#content_blog').attr('id')].getContent();
    		var user_id = <?php echo $_COOKIE['id']; ?>; 

    		datav = "action=1&title="+title+"&user_id="+user_id+"&conteudo="+escape(conteudo_blog)+"&ficheiros="+escape(files_a);

    		$('.back').show()
		    e.preventDefault();
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
		            $(".debug-url").html("Please, verify:<br><br>"+arr.error+"<br> Correct the error and please try again");
                    $('#Modalko').modal('show');

		          }
		          else if (arr.success == 0)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('Blog on User <?php echo $_COOKIE['username'] ?> was not created sucessfully');
                        $('#Modalko').modal('show');
                    }
                    else if (arr.success == 1)
                    {
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('Blog on User <?php echo $_COOKIE['username'] ?> was created successfully');
                        $('#Modalok').modal('show');
                    }
		        },
		        error: function() {
		           $('.debug-url').html("Blog on User <?php echo $_COOKIE['username'] ?> was not created sucessfully. Please Verify the connection Wifi");
            		$('#Modalko').modal('show');
		        }
		    });
    	});

    	$(".btn-clear").on('click', function(e)
    	{
    		tinymce.activeEditor.execCommand('mceCleanup');
    		$('#content_blog').each(function(k, v) {
				tinyMCE.get(k).setContent('');
			});

    	});



       

       </script>





     

