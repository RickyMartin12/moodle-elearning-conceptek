<?php include '../header/header.php'; ?>

<div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">
 	
			    <div class="banner">
			   
					<h2>
					<a href="#">Administrator</a>
					<i class="fa fa-angle-right"></i>
					<span>Users Lists</span>
					</h2>
			    </div>



			    <div class="content-top">
					<div class="profile row">
						<div class="col-md-12">
							<div class="col-md-12 profile-bottom w3-row-padding tabs row">
								<div class="w3-panel w3-purple w3-display-container" id="padder">
								  	<h5 id="pri_user"><i class="fas fa-users"></i>&nbsp;&nbsp;Users Lists <font style="float: right;"><i class="fas fa-chevron-right" id="info_user"></i></font> </h5>
								  </div>
								  <div id="cont_info_user">
									  	  <div id="show_users">
			    						   	
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

<?php include '../footer/footer.php'; ?>

<script type="text/javascript">


	var pos_level1 = 0;

		$("#cont_info_user").slideUp();

		$("#info_user").click(function(e)
		{
			pos_level1++;

			if (pos_level1 % 2 == 1)
			{
				$("#info_user").addClass('fa-chevron-down');
				$("#info_user").removeClass('fa-chevron-right');
			}
			else
			{
				$("#info_user").removeClass('fa-chevron-down');
				$("#info_user").addClass('fa-chevron-right');
			}

			$( "#cont_info_user" ).slideToggle( "slow" );
		});

	showUsers();


	function showUsers() 
	{
		var s = "";
   		var sa;
  		dataValue="&action=6";
  	$.ajax({ url:'notifications/action_user.php',
    data:dataValue,
    type:'POST', 
     success:function(data){
     arr=[];
     arr =  JSON.parse(data);
    if (arr == null || arr.length < 1){
     $('.debug-url').html('Not Exists Users');
     $("#mensagem_ko").trigger('click');
     $('#show_users').empty();
    }
    else {
      for(i=0;i<arr.length;i++)
      {

        nome = "'"+arr[i].nome+"'";
          
          
          
        s += '<tr class="action-users-'+arr[i].id+'"><td scope="row"><input type="text" value="'+arr[i].nome+'" id="col-1-'+arr[i].id+'" style="display: none" class="frm-item form-control"/><font class="font-1-'+arr[i].id+'" style="color: #000">'+arr[i].nome+'</font></td><td><input type="password" style="display: none" id="col-2-'+arr[i].id+'" class="frm-item form-control" placeholder="******""><font class="font-2-'+arr[i].id+'" style="color: #000"> ******* </font></td><td><input type="text" style="display: none" id="col-3-'+arr[i].id+'" class="frm-item form-control" value="'+arr[i].email+'"><font class="font-3-'+arr[i].id+'" style="color: #000">'+arr[i].email+'</font></td><td><select class="form-control" style="display: none" id="col-4-'+arr[i].id+'" onchange="changePermission('+arr[i].id+')"><option value="'+arr[i].tipo+'">'+arr[i].tipo+'</option><option value="Administrator">Administrator</option><option value="User">User</option></select><font class="font-4-'+arr[i].id+'" style="color: #000">'+arr[i].tipo+'</font></td><td><input type="text" readonly value="'+arr[i].privilegios+'" id="col-5-'+arr[i].id+'" style="display: none" class="frm-item form-control"/><font class="font-5-'+arr[i].id+'" style="color: #000">'+arr[i].privilegios+'</font></td> <td><input type="text" value="'+arr[i].country+'" id="col-6-'+arr[i].id+'" style="display: none" class="frm-item form-control"/><font class="font-6-'+arr[i].id+'" style="color: #000">'+arr[i].country+'</font></td><td><input type="text" value="'+arr[i].departament+'" id="col-7-'+arr[i].id+'" style="display: none" class="frm-item form-control"/><font class="font-7-'+arr[i].id+'" style="color: #000">'+arr[i].departament+'</font></td><td><input type="text" value="'+arr[i].skills+'" id="col-8-'+arr[i].id+'" style="display: none" class="frm-item form-control"/><font class="font-8-'+arr[i].id+'" style="color: #000">'+arr[i].skills+'</font></td> <td><input type="file" readonly value="'+arr[i].logotipo+'" id="col-9-'+arr[i].id+'" accept="image/*" style="display: none" class="frm-item form-control" onchange="uploadImage('+arr[i].id+');"/><img id="logged_username_img" style="width: 150px; height: 150px;" src="https://moodle-elearrning.herokuapp.com/images/users/'+arr[i].logotipo+'" class="img-responsive font-9-'+arr[i].id+'"></td>    <td id="action-'+arr[i].id+'" style="width:80px;"><button title="Edit User - '+arr[i].id+'" class="btn btn-info btn-sm" onclick="editUsersFilters('+arr[i].id+')" id="edit_filter_'+arr[i].id+'"><span class="glyphicon glyphicon-edit"></span></button>&nbsp;&nbsp;<button title="Erase User - '+arr[i].id+'" class="btn btn-danger btn-sm" onclick="confirmDeleteUsername('+arr[i].id+')" id="remove_filter_'+arr[i].id+'"><span class="glyphicon glyphicon-trash"></span></button></td></tr>';




          
      }  
      
      
      
      
    $('#show_users').html('<div class="table-responsive"><table class="table" id="tbl2"><thead><tr><th>Username</th><th>Password</th><th>Email</th><th>Users Type</th><th>Priveleges</th><th>Country</th><th>Department</th><th>Skills</th><th>Image</th><th>Actions</th></tr></thead><tbody>'+s+'</tbody></table></div>');


    for(i=0;i<arr.length;i++)
      {
      	if ($("#user_id_logged").val() == arr[i].id)
      	{
      		$('#edit_filter_'+arr[i].id).prop('disabled', true);
      		$('#remove_filter_'+arr[i].id).prop('disabled', true);
      	}
      	else
      	{
      		$('#edit_filter_'+arr[i].id).prop('disabled', false);
      		$('#remove_filter_'+arr[i].id).prop('disabled', false);
      	}
      }

    
    

    }
    
    
    },
    error:function(data){
     $('.debug-url').html('Error to show usesr. Please verify wifi connection and try again.');
     $("#mensagem_ko").trigger('click');
    }
  });
}

function changePermission(id)
{
    var tipo = $("#col-4-"+id).val();
    
    if ( tipo == "Administrator")
    {
        $("#col-5-"+id).val('1');
    }
    if ( tipo == "User")
    {
        $("#col-5-"+id).val('2');
    }
}

var image_upl = '';

function uploadImage(id)
{
	var image = $("#col-9-"+id).prop("files")[0];
	createFormData(image);
}

function createFormData(image)
		{
		 var formImage = new FormData();
		 formImage.append('userImage', image);
		 uploadFormData(formImage);
		}

		function uploadFormData(formData) 
		{
		 $.ajax({
		 url: "https://moodle-elearrning.herokuapp.com/upload_images_user.php",
		 type: "POST",
		 data: formData,
		 contentType:false,
		 cache: false,
		 processData: false,
		 success: function(data){
		 	image_upl = data;
		 }});
		}

function editUsersFilters(id)
  {
      for (i=1; i<10; i++)
      {
          $("#col-"+i+"-"+id).css('display', 'block');
          $(".font-"+i+"-"+id).css('display', 'none');
      }
      
      $("#action-"+id).html('<button title="Submit User - '+id+'" class="btn btn-success btn-sm" onclick="saveUsersFilters('+id+')"><span class="glyphicon glyphicon-save-file"></span></button> <button title="Cancel Edit User - '+id+'" class="btn btn-default btn-sm" onclick="cancelUsersFilters('+id+')" id="cancel_users"><span class="glyphicon glyphicon-remove-sign"></span></button>');
  }

  function cancelUsersFilters(id)
  {
  	for (i=1; i<10; i++)
      {
          $("#col-"+i+"-"+id).css('display', 'none');
           $(".font-"+i+"-"+id).css('display', 'block');
      }
      $("#action-"+id).html('<button title="Edit User - '+id+'" class="btn btn-info btn-sm" onclick="editUsersFilters('+id+')"><span class="glyphicon glyphicon-edit"></span></button>&nbsp;&nbsp;<button title="Erase User - '+id+'" class="btn btn-danger btn-sm" onclick="confirmDeleteUsername('+id+')"><span class="glyphicon glyphicon-trash"></span></button>');
  }

  function saveUsersFilters(id)
  {
  	 nome = $("#col-1-"+id).val();
      var dataValue='';
      for(i=1;i<10;i++){
        dataValue+="col_"+i+"_"+id+"="+$("#col-"+i+"-"+id).val()+"&";
      }
      dataValue+="logotipo="+image_upl+"&id="+id+"&action=7";
      $.ajax({
		        type: "POST",
		        url: "notifications/action_user.php",
		        data: dataValue,
		        cache: false,
		        success:function(data){
				      if (data == 2){
				        $('.debug-url').html('Error, There are exist the same username <b>'+nome+'</b> in database!');
				        $("#Modalko").modal('show');
				     }
				    else if (data == 22){
				        $('.debug-url').html('Error to change user information <b>'+nome+'</b>!');
				        $("#Modalko").trigger('click');
				     }
				    else if(data == 11 || data == 1){
				      showUsers();
				      $('.debug-url').html('The administrator <b>'+nome+'</b> was modified successfully.');
				      $("#Modalok").modal('show');
				      setTimeout(function(){  $('#Modalok').modal('hide');}, 2500);
				     }
				    },
				    error:function(){
				      $('.debug-url').html('The administrator <b>'+nome+'</b> was not modified. Please verify the wifi connection and try again.');
				      $("#Modalko").modal('show');
				    }
		    });
  }

   function confirmDeleteUsername(id)
  {
    bootbox.dialog({
    message: "Tem a certeza que pretende apagar o utilizador <strong>"+id+"</strong>",
    title: "<span style='color:#f0ad4e;'><span class='glyphicon glyphicon-exclamation-sign'></span> Confirmar</span>",
    buttons: {
      default: {
        label: "<span class='glyphicon glyphicon-remove-sign'></span> Fechar",
        className: "btn-default",
      },
      danger: {
        label: "<span class='glyphicon glyphicon-trash'></span> Apagar",
        className: "btn-danger",
        callback: function() {
      dataValue='&id='+id+'&action=8';
      $.ajax({
        type: "POST",
        url: "notifications/action_user.php",
        data: dataValue,
        cache:false,
        success: function(data){
          if(data == 2){
            showUsers();
            $('#Modalok .debug-url').html('O Utilizador <strong>'+nome+'</strong> foi apagado com sucesso.');
            $("#Modalok").modal('show');
            setTimeout(function(){  $('#Modalok').modal('hide');}, 2500);
          }
          else
          {
            $('#Modalko .debug-url').html('O Utilizador <strong>'+nome+'</strong> nao se consegue apagar.');
            $("#Modalko").modal('show');
          }
        },
        error:function(data){
          $('#Modalko .debug-url').html('O Utilizador <strong>'+nome+'</strong> não foi apagado, p.f. verifique a ligação Wi-Fi.');
          $("#Modalko").modal('show');
        }
    });
        }
      },
    }
  });
  }
	


</script>
