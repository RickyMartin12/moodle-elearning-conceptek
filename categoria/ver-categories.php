<?php include '../header/header.php'; ?>

<div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">
 	
			    <div class="banner">
			   
					<h2>
					<a href="/index.php">Home</a>
					<i class="fa fa-angle-right"></i>
					<span>Visualize Categories</span>
					</h2>
			    </div>

			     <div class="content-top">
					<div class="profile row">
						<div class="col-md-12">
							<div class="col-md-12 profile-bottom w3-row-padding tabs row">
							  <div class="w3-panel w3-purple w3-display-container" id="padder">
								<h5 id="pri_user"><i class="fas fa-tag"></i>&nbsp;&nbsp;List Categories <font style="float: right;"><i class="fas fa-chevron-right" id="info_category_list"></i></font> </h5>


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


			<div class="modal fade" id="info_content_function" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title title_act"></h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-xs-12 col-md-12">
                    <p class="info_act"></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-md-12">
                    <div class="video_act">
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <p style="text-align:center; margin:0;">
                  <img src="/images/cs.png" class="logo-nav" style="width:68px;">
                </p>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  <i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancel</font>
                </button>
              </div>
            </div>
          </div>
        </div>

<?php include '../footer/footer.php'; ?>


<script type="text/javascript">

var inc_d = 0;

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



showCoursesSection();


coursesArray = [];
subCoursesArray = [];
function showCoursesSection()
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
    $.ajax({ url:'action/action_categoria.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);
      


          if (arr.length == null || arr.length < 1 )
          {
            
            $('.debug-url').html("Not Exists Courses Category's. Create First");
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
    							courses = '<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"><span class="fas fa-spa"></span>&nbsp;&nbsp;'+cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_'+id_courses+'"></i></font></h5>';
    							
    							
							}
							else if(cursos == "Point of Sale Solutions")
							{
								id_courses = 'pos';
								coursesArray.push(id_courses);
								courses = '<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"><span class="fa fa-credit-card"></span>&nbsp;&nbsp;'+cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_'+id_courses+'"></i></font></h5>';
								
							}
							else if(cursos == "Membership Marketing")
							{
								id_courses = 'mak';
								coursesArray.push(id_courses);
								courses = '<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"><span class="fab fa-markdown"></span>&nbsp;&nbsp;'+cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_'+id_courses+'"></i></font></h5>';
								
							}
							else if(cursos == "Inventory")
							{
								id_courses = 'inv';
								coursesArray.push(id_courses);
								courses = '<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"><span class="fas fa-warehouse"></span>&nbsp;&nbsp;'+cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_'+id_courses+'"></i></font></h5>';
								
							}
							else if(cursos == "Golf Management")
							{
								id_courses = 'golf';
								coursesArray.push(id_courses);
								courses = '<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"><span class="fas fa-golf-ball"></span>&nbsp;&nbsp;'+cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_'+id_courses+'"></i></font></h5>';
								
							}
							else if(cursos == "User Security")
							{
								id_courses = 'user';
								coursesArray.push(id_courses);
								courses = '<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"><span class="fas fa-user"></span>&nbsp;&nbsp;'+cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_'+id_courses+'"></i></font></h5>';
								
							}
							else
							{
								id_courses = 'other_'+inc;
								coursesArray.push(id_courses);
								courses = '<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div"><span class="fas fa-file"></span>&nbsp;&nbsp;'+cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_'+id_courses+'"></i></font></h5>';
								inc++;
								
								
							
							}

							s+='<div class="row"><div class="col-md-12">'+courses+'</div></div><div id="'+id_courses+'_cont"><div id="show_sub_courses_'+id_courses+'"></div></div>';

			}

			$("#show_category_list").html(s);

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
            $('.debug-url').html("Was not possible to show Courses Category's. Please Verifi wifi connection and try again.");
            $("#Modalko").modal('show');
             $('.back').fadeOut();
          }
        });
    
    }, 10);

}

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





var inc_sub = 0;
	var inc_sub_spa=0;
	var inc_sub_pos=0;
	var inc_sub_mak=0;
	var inc_sub_inv=0;
	var inc_sub_golf=0;
	var inc_sub_user=0;

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
    $.ajax({ url:'action/action_categoria.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);
      


          if (arr.length == null || arr.length < 1 )
          {
            
            $('.debug-url').html('Not Exists Sub Courses in Courses. Create First.');
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
    							courses = '<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><span class="fas fa-spa"></span>&nbsp;&nbsp;'+sub_cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_sub_'+id_sub_courses+'"></i></font></h5>';
    							inc_sub_spa++;

    							
    							
							}
							else if(sub_cursos.indexOf("Point of Sale Solutions") >= 0)
							{
								id_sub_courses = 'pos_sub_'+inc_sub_pos;
    							courses = '<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><span class="fas fa-credit-card"></span>&nbsp;&nbsp;'+sub_cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_sub_'+id_sub_courses+'"></i></font></h5>';
    							inc_sub_pos++;
								
							}
							else if(sub_cursos.indexOf("Marketing") >= 0)
							{
								id_sub_courses = 'mak_sub_'+inc_sub_mak;
								courses = '<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><span class="fas fa-credit-card"></span>&nbsp;&nbsp;'+sub_cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_sub_'+id_sub_courses+'"></i></font></h5>';
								inc_sub_mak++;
								
							}
							else if(sub_cursos.indexOf("Inventory") >= 0)
							{
								id_sub_courses = 'inv_sub_'+inc_sub_inv;

								courses = '<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><span class="fas fa-warehouse"></span>&nbsp;&nbsp;'+sub_cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_sub_'+id_sub_courses+'"></i></font></h5>';


								inc_sub_inv++;
								
							}
							else if(sub_cursos.indexOf("GOLF") >= 0)
							{
								id_sub_courses = 'golf_sub_'+inc_sub_golf;
								courses = '<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div" ><span class="fas fa-golf-ball"></span>&nbsp;&nbsp;'+sub_cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_sub_'+id_sub_courses+'"></i></font></h5>';


								inc_sub_golf++;
								
							}
							else if(sub_cursos.indexOf("User") >= 0)
							{
								id_sub_courses = 'user_sub_'+inc_sub_user;
								courses = '<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div"><span class="fas fa-user"></span>&nbsp;&nbsp;'+sub_cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_sub_'+id_sub_courses+'"></i></font></h5>';
								inc_sub_user++;
							}
							else
							{
								id_sub_courses = 'other_sub_'+inc_sub;
								courses = '<h5 class="col-xs-12 mylabel2 w3-padding-8 w3-card-2 align_div"><span class="fas fa-file"></span>&nbsp;&nbsp;'+sub_cursos+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_sub_'+id_sub_courses+'"></i></font></h5>';
								inc_sub++;
								
								
							
							}

							
							





						d += '<div class="col-md-12"><div class="row"><div class="col-md-12">'+courses+'</div></div><div id="'+id_sub_courses+'_cont_sub"><div id="show_sub_categories_courses_'+id_sub_courses+'"></div></div></div>';


						v += id_sub_courses+" ";

				

			}



			$('#show_sub_courses_'+id_courses).html(d);



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
            $('.debug-url').html('Was not possible to show SubCourses. Please verify wifi connection and try again.');
            $("#Modalko").modal('show');
             $('.back').fadeOut();
          }
        });
    
    }, 10);
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


var inc_sub_spa_cat=0;
var inc_sub_pos_cat=0;
var inc_sub_mak_cat=0;
var inc_sub_inv_cat=0;
var inc_sub_golf_cat=0;
var inc_sub_user_cat=0;
var inc_sub_cat = 0;
		

var inc_cat = 0;

function showCategoryCourses(cursos, sub_cursos)
{
	var c = '';
	var suber_cursos = '';
	var id_sub_courses = '';
	var courses = '';
	var categoria = '';

	var id_categoria = '';

	var v = '';

	var p = '';

	var content_cat = '';


	

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


	$.ajax({ url:'action/action_categoria.php',
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
            		id_categoria = 'cat_g_'+inc_cat;
            		categoria = arr[i].categoria;
            		c = '<h6 class="col-xs-12 w3-padding-8 w3-card-2 align_div" ><span class="fas fa-book"></span>&nbsp;&nbsp;'+categoria+'<font style="float: right;"><i class="fas fa-chevron-right" id="info_cat_'+id_categoria+'"></i></font></h6>';
					inc_cat++;
					content_cat += '<div class="col-md-12"><div class="row"><div class="col-md-12">'+c+'</div></div><div id="'+id_categoria+'_cont_cat"><div id="show_cat_'+id_categoria+'"></div></div></div>';

            		p += id_categoria+" ";
            	}

            	$("#show_sub_categories_courses_"+id_sub_courses).html(content_cat);

            	var res = p.split(" ");

				for(i = 0; i< res.length; i++){
	    			show_details_categories(res[i]);
	    		}

	    		for (i=0; i<arr.length;i++)
				{
					categoria = arr[i].categoria;
					showCategoryFunctionsCourses (cursos, sub_cursos, categoria);
				}

	          }
          },
        error:function(data){
          }
        });

	}, 10);

}


function show_details_categories(cat)
{
	var pos_level1 = 0;

		$('#'+cat+'_cont_cat').slideUp();

		$("#info_cat_"+cat).click(function(e)
		{
			pos_level1++;

			if (pos_level1 % 2 == 1)
			{
				$("#info_cat_"+cat).addClass('fa-chevron-down');
				$("#info_cat_"+cat).removeClass('fa-chevron-right');
			}
			else
			{
				$("#info_cat_"+cat).removeClass('fa-chevron-down');
				$("#info_cat_"+cat).addClass('fa-chevron-right');
			}

			$( '#'+cat+'_cont_cat').slideToggle( "slow" );
		});
}


var inc_cat_cou = 0;

function showCategoryFunctionsCourses (cursos, sub_cursos, categoria)
{
	var id_categoria = '';
	var cat = '';


	setTimeout(function(){ 

		dataValue='action=5&cursos='+escape(cursos)+'&sub_cursos='+escape(sub_cursos)+"&categoria="+escape(categoria);


		id_categoria = 'cat_g_'+inc_cat_cou;
		inc_cat_cou++;


		$.ajax({ url:'action/action_categoria.php',
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
            			var da = arr[i].ficheiro;

	            		var aaa = da.split(";");

	            		var fileExtension2 = da.substr((da.lastIndexOf('.') + 1));

	            		switch(fileExtension2) 
							{
								case 'jpg':
								case 'png':
								case 'gif':
									cat += '<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="function_content('+arr[i].id+');"><i id="icon_file" class="fas fa-image"></i> '+arr[i].funcoes+' </button><br>';
								break;                         
								case 'mp4':
								case 'mov':
								case 'vob':
								case 'avi':
								case 'flv':
								case 'webm':
								case 'wmv':
								case 'm4v':
									cat += '<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="function_content('+arr[i].id+');"><i id="icon_file" class="fas fa-film"></i> '+arr[i].funcoes+' </button><br>';

								break;
								
								default:
									cat += '<i class="fas fa-caret-right"></i> <button type="button" class="btn button_vid" onclick="function_content('+arr[i].id+');"><i id="icon_file" class="fas fa-file"></i> '+arr[i].funcoes+' </button><br>';
							}
	            		

	            		/*for(var j=0; j< aaa.length; j++)
		        		{
		        			var fileExtension = aaa[j].substr((aaa[j].lastIndexOf('.') + 1));
		        			
		        		}*/


            		
            	}

            	$("#show_cat_"+id_categoria).html(cat);

            	

				

	          }
          },
        error:function(data){
          }
        });





		


	}, 10);



}



function function_content(id)
{
	var info_content = $("#info_content_function");
	var j = '';
	var v_img = '';


	setTimeout(function(){ 

		dataValue='action=6&id='+id;
		


		$.ajax({ url:'action/action_categoria.php',
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

	            		var da = arr[i].ficheiro;

	            		var aaa = da.split(";");

	            		

	            		for(var j=0; j< aaa.length; j++)
		        		{
		        			var fileExtension = aaa[j].substr((aaa[j].lastIndexOf('.') + 1));
		        			switch(fileExtension) 
							{
								case 'jpg':
								case 'png':
								case 'gif':
									$(".title_act").html('<i class="fas fa-image"></i> ' + arr[i].funcoes);
								break;                         
								case 'mp4':
								case 'mov':
								case 'vob':
								case 'avi':
								case 'flv':
								case 'webm':
								case 'wmv':
								case 'm4v':
									$(".title_act").html('<i class="fas fa-film"></i> ' + arr[i].funcoes);
								break;
								
								default:
									$(".title_act").html('<i class="fas fa-file"></i> ' + arr[i].funcoes);
							}
		        		}

	            		
	            		

	            		$(".info_act").html(arr[i].contexto);

	            		var ficheiro_vid_img = arr[i].ficheiro;

	            		var files_upl = ficheiro_vid_img.split(";");



	            		for(var i=0; i< files_upl.length; i++)
		        		{
		        			var fileExtension = files_upl[i].substr((files_upl[i].lastIndexOf('.') + 1));
		        			switch(fileExtension) 
							{
								
								case 'jpg':
								case 'png':
								case 'gif':
									v_img += '<div class="w3-content w3-section row" style="max-width:100%"><div class="mySlides row"><div class="col-xs-12"><img src="https://upload-moodle-test-cat-production.up.railway.app/cat/'+files_upl[i]+'" style="width:100%"><br></div></div>';	
								break;                         
								case 'mp4':
								case 'mov':
								case 'vob':
								case 'avi':
								case 'flv':
								case 'webm':
								case 'wmv':
								case 'm4v':
									v_img += '<video class="embed-responsive-item img-responsive" source src="https://upload-moodle-test-cat-production.up.railway.app/cat/'+files_upl[i]+'" type="video/mp4" controls></video>';
								break;
								
								default:
									v_img += "";
							}
		        		}

	            		$(".video_act").html(v_img);

	            					var myIndex = 0;
									carousel();

									function carousel() {
									  var i;
									  var s = $(".video_act > .w3-content > .row").hasClass( "mySlides" ).toString();
									  if (s == 'true')
									  {
									  		var x = document.getElementsByClassName("mySlides");
										  for (i = 0; i < x.length; i++) {
										    x[i].style.display = "none";  
										  }
										  myIndex++;
										  if (myIndex > x.length) {myIndex = 1}    
										  x[myIndex-1].style.display = "block";  
										  setTimeout(carousel, 2000); // Change image every 2 seconds
									  }
									  
									}


	            	}

	            	

	            	

					

		          }

     		},
	        error:function(data){
	          }

  });



	});


	


	info_content.modal('show');
}


</script>