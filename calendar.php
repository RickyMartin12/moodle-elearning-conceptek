<?php include 'header/header.php'; ?>



        <div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">

       			<div class="banner">
			   
					<h2>
					<a href="index.php">Home</a>
					<i class="fa fa-angle-right"></i>
					<a href="#">Site Pages</a> <i class="fa fa-angle-right"></i> <a href="calendar.php">Site Pages</a> <i class="fa fa-angle-right"></i> <span id="dat"></span>
					</h2>
			    </div>

			    <div class="content-top">
					<div class="profile row">
						<div class="col-md-4 profile-bottom w3-row-padding tabs row" id="event-act">
							<div class="col-md-12">
											<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="eve_keys_off"></i><i class="fas fa-chevron-down" id="eve_keys_on"></i></font>
			                                            <span class="fas fa-calendar"></span>&nbsp;&nbsp;Events Key
		                                     </h5>
		                                 </div>

		                                 <div id="eve_cont">
			                                 <div class="centering" id="c_hide">
				                                 <button type="button" class="btn btn-primary" id="des_user"><i class="fas fa-eye-slash"></i> Hide user events</button>
				                            </div>
				                            <div class="centering" id="c_show">
				                                 <button type="button" class="btn btn-primary" id="ena_user"><i class="fas fa-eye"></i> Show user events</button>
				                            </div>
				                        </div>
			                             
						</div>
						<div class="col-md-7 profile-bottom w3-row-padding tabs row" id="calendar-act">

							<div class="col-md-12">
											<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div" ><font style="float: right;"><i class="fas fa-chevron-right" id="eve_calendar_off"></i><i class="fas fa-chevron-down" id="eve_calendar_on"></i></font>
			                                            <span class="fas fa-calendar-alt"></span>&nbsp;&nbsp;Calendar
		                                     </h5>
		                                 </div>

		                     <div id="eve_calendar">
		                      <div class="col-md-12">
		                      	<div id='calendar'></div>
									<div class="row">
										<div class="col-xs-12 col-md-12">

											<div class="centering">
												<button type="button" class="btn btn-primary btn-save" id="add_event"><i class="fas fa-calendar-check"></i> Add Event</button>
											</div>


										</div>
									</div>

									<div class="modal fade" id="cont" role="dialog">
									    <div class="modal-dialog">
									    
									      <!-- Modal content-->
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title">Editar Evento</h4>
									        </div>
									        <div class="modal-body">
										          <div class="row">
										          	<div class="col-xs-12 col-md-6">
										          		<div class="form-group">
										          			<label>Data do Evento: </label>
											                <div class='input-group date' id='data_evento_edit'>
											                    <input type='text' class="form-control" id="data_evento_val_edit" />
											                    <span class="input-group-addon">
											                        <i class="far fa-calendar-alt"></i>
											                    </span>
											                </div>
										            	</div>
										          	</div>
										          	<div class="col-xs-12 col-md-6">
										          		<div class="form-group">
										          			<label>Nome do Evento: </label>
										          			<input type="text" class="form-control" id="required-input">
										          		</div>
										          	</div>
										        </div>
									    	</div>
									          <div class="modal-footer">
									            <p style='text-align:center; margin:0;'><img src="images/cs.png" class="logo-nav" style="width:68px;"></p>
									            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
									            <button class="btn btn-success" id="edit"><i class="fas fa-save"></i><font class="hidden-xs"> Guardar</font></button>
									            <button class="btn btn-danger" id="remove_event"><i class="fa fa-trash"></i><font class="hidden-xs"> Remove Event</font></button>
									        </div>
									        
									      </div>
									      
									    </div>
									  </div>


									<!-- Modal -->
									  <div class="modal fade" id="add_evento_data" role="dialog">
									    <div class="modal-dialog">
									    
									      <!-- Modal content-->
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title">Adicionar Evento</h4>
									        </div>
									        <div class="modal-body">
										          <div class="row">
										          	<div class="col-xs-12 col-md-12">
										          		<div class="form-group">
										          			<label>Nome do Evento: </label>
										          			<input type="text" class="form-control" id="evento_data">
										          		</div>
										          	</div>
										        </div>
									    	</div>
									          <div class="modal-footer">
									            <p style='text-align:center; margin:0;'><img src="images/cs.png" class="logo-nav" style="width:68px;"></p>
									            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
									            <button class="btn btn-success" id="save_event_data"><i class="fas fa-save"></i><font class="hidden-xs"> Guardar</font></button>
									        </div>
									        
									      </div>
									      
									    </div>
									  </div>

									  <div class="modal fade" id="add_evento_modal" role="dialog">
									    <div class="modal-dialog">
									    
									      <!-- Modal content-->
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title">Adicionar Evento com a data</h4>
									        </div>
									        <div class="modal-body">
										          <div class="row">
										          	<div class="col-xs-12 col-md-6">
										          		<div class="form-group">
										          			<label>Data do Evento: </label>
											                <div class='input-group date' id='data_evento'>
											                    <input type='text' class="form-control" id="data_evento_val" />
											                    <span class="input-group-addon">
											                        <i class="far fa-calendar-alt"></i>
											                    </span>
											                </div>
										            	</div>
										          	</div>
										          	<div class="col-xs-12 col-md-6">
										          		<div class="form-group">
										          			<label>Nome do Evento: </label>
										          			<input type="text" class="form-control" id="evento">
										          		</div>
										          	</div>
										        </div>
									    	</div>
									          <div class="modal-footer">
									            <p style='text-align:center; margin:0;'><img src="images/cs.png" class="logo-nav" style="width:68px;"></p>
									            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
									            <button class="btn btn-success" id="save_event"><i class="fas fa-save"></i><font class="hidden-xs"> Guardar</font></button>
									            
									        </div>
									        
									      </div>
									      
									    </div>
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

       <?php include 'footer/footer.php'; ?>

       <script type="text/javascript">

       	function padNumber(number) {
                var string  = '' + number;
                string      = string.length < 2 ? '0' + string : string;
                return string;
            }


	var date_event = '';
	var date_event_end = '';
	var event_name = '';
	var event_date = '';

	var event_color = '';

	var event_id = '';

  var user_id = <?php echo $_COOKIE['id']; ?>

	var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
	    var date = new Date();
	    $('#dat').html(months[date.getMonth()] + ' ' + date.getFullYear());


	$(function() {
  var calendar = $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    editable: true,
    eventLimit: true, 
    defaultView: 'month',
    selectable: true, 
    selectHelper: true, 
    eventClick: function(event, jsEvent, view) {
    	event_name = event.title;
    	event_id = event._id;
    	event_date = moment(event.start).format('YYYY-MM-DD');
    	date_event_end = moment(event.end).format('YYYY-MM-DD');
    	$("#required-input").val(event_name);
    	$("#data_evento_val_edit").val(event_date);
      $("#cont").modal('show').data('event', event);
    },
    select: function(start, end, allDay) {

      var modal_evento = $("#add_evento_data");

      date_event = moment(start).format('YYYY-MM-DD');
      date_event_end = moment(end).format('YYYY-MM-DD');




      modal_evento.modal('show');
    },
    eventResize:function(event)
    {

     var start = moment(event.start).format('YYYY-MM-DD');
      var end = moment(event.end).format('YYYY-MM-DD');
     var title = event.title;
     var id = event.id;
     alert(id);
     $.ajax({
      url:"cal/update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       var obj1 = document.createElement("audio");
              obj1.src = "/Sound/success.mp3";
              obj1.volume = 0.1;
              obj1.autoPlay = false;
              obj1.preLoad = true;
              obj1.controls = true;
              obj1.play();
       $('.debug-url').html('Event Update');
        $('#Modalok').modal('show');
      }
     })
    },

    eventDrop:function(event)
    {
     var start = moment(event.start).format('YYYY-MM-DD');
      var end = moment(event.end).format('YYYY-MM-DD');
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"cal/update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
        var obj1 = document.createElement("audio");
              obj1.src = "/Sound/success.mp3";
              obj1.volume = 0.1;
              obj1.autoPlay = false;
              obj1.preLoad = true;
              obj1.controls = true;
              obj1.play();
       calendar.fullCalendar('refetchEvents');
       $('.debug-url').html('Event Update');
       $('#Modalok').modal('show');
      }
     });
    },

    events: 'cal/load.php'
  });


  $("#edit").click(function(e) {
    e.preventDefault();
    var title = $("#required-input").val().trim();
    var data_evento = $("#data_evento_val_edit").val();
    var date = new Date(data_evento + 'T00:00:00'); // will be in local time
    if (!title) {
      return;
    }
    var event = $("#cont").data('event'),
      isAdd = !event;
    if (isAdd) {
      event = {};
      event.start = $("#data_evento_val_edit").val();
    }
    //event.title = title;
    var start = $("#data_evento_val_edit").val();
    var end = date_event_end;
    var id = event_id;
    //event.allDat = true;
    /*if (isAdd) {
      $('#calendar').fullCalendar('renderEvent', event, true);
    } else {
      $('#calendar').fullCalendar('updateEvent', event);
    }*/

    $.ajax({
      url:"cal/update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       var obj1 = document.createElement("audio");
              obj1.src = "/Sound/success.mp3";
              obj1.volume = 0.1;
              obj1.autoPlay = false;
              obj1.preLoad = true;
              obj1.controls = true;
              obj1.play();
       $('.debug-url').html('Event Update');
       $('#Modalok').modal('show');
      }
     });
    $("#cont").modal('hide').removeData('event');


  });


  var date = new Date();
          d = date.setDate(date.getDate());
          h = date.setHours(date.getHours());

  $("#data_evento").datetimepicker({ ignoreReadonly: true, format: 'YYYY-MM-DD', 
    locale: 'en-US', showTodayButton: true, defaultDate: h, widgetPositioning: { horizontal: 'right', vertical: 'bottom' }});
  $("#data_evento_edit").datetimepicker({ ignoreReadonly: true, format: 'YYYY-MM-DD', 
    locale: 'en-US', showTodayButton: true, defaultDate: h, widgetPositioning: { horizontal: 'right', vertical: 'bottom' }});




  $("#add_event").click(function(e) 
  {

  	var modal_agenda = $("#add_evento_modal");

  	modal_agenda.modal('show');
  });



  $("#save_event").click(function(e) 
  {

  	var modal_agenda = $("#add_evento_modal");

  	var title = $("#evento").val();

  	var data_evento = $("#data_evento_val").val();
  	

  	var date = new Date(data_evento);
    var next_date = new Date(date.setDate(date.getDate() + 1));
    var formatted = next_date.getUTCFullYear() + '-' + padNumber(next_date.getUTCMonth() + 1) + '-' + padNumber(next_date.getUTCDate())

          /*console.log(title + " - " + data_evento);


           	calendar.fullCalendar('renderEvent', 
           	{
	            title: title,
	            start: data_evento,
	            allDay: true
          	});*/

          	$.ajax({
       url:"cal/insert.php",
       type:"POST",
       data:{title:title, start:data_evento, end:formatted},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Added Successfully");
       }
      });


          $("#evento").val('');
          $("#data_evento_val").val('');
      modal_agenda.modal('hide');
  });

  $("#save_event_data").click(function(e)
  {
  	var modal_agenda = $("#add_evento_data");


  	var title = $("#evento_data").val();



  	var start = date_event;
  	var end = date_event_end;


  	//saveEventData (title, start, end);

  	console.log(title + " - " + start + " - " + end);


	$("#evento_data").val('');

	$.ajax({
       url:"cal/insert.php",
       type:"POST",
       data:{title:title, start:start, end:end},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        var obj1 = document.createElement("audio");
              obj1.src = "/Sound/success.mp3";
              obj1.volume = 0.1;
              obj1.autoPlay = false;
              obj1.preLoad = true;
              obj1.controls = true;
              obj1.play();
        $('.debug-url').html('Added Successfully');
        $('#Modalok').modal('show');
       }
      });



      modal_agenda.modal('hide');
  });

  function saveEventData(title, start, end)
  {
  	if (title) {
        calendar.fullCalendar('renderEvent', {
            title: title,
            start: start,
            end: end
          },
          true
        );

      }


      
  }

  $("#remove_event").click(function (e) {
  	//$('#calendar').fullCalendar('removeEvents',event_id);
  	var id = event_id;
      $.ajax({
       url:"cal/delete.php",
       type:"POST",
       data:{id:id},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        var obj1 = document.createElement("audio");
              obj1.src = "/Sound/success.mp3";
              obj1.volume = 0.1;
              obj1.autoPlay = false;
              obj1.preLoad = true;
              obj1.controls = true;
              obj1.play();
        $('.debug-url').html('Event Removed');
        $('#Modalok').modal('show');
       }
      });


  	$('#cont').modal('hide');
  });

  $("#c_show").css('display','none');


  $("#ena_user").css('display','none');

  $("#des_user").click(function (e) {
  	$(".fc-event-container").css('display','none');
  	$("#des_user").css('display','none');
  	$("#ena_user").css('display','block');
  	$("#c_hide").css('display','none');
  	$("#c_show").css('display','block');
  });

  $("#ena_user").click(function (e) {
  	$(".fc-event-container").css('display','block');
  	$("#ena_user").css('display','none');
  	$("#des_user").css('display','block');
  	$("#s_show").css('display','none');
  	$("#c_hide").css('display','block');
  	$("#c_show").css('display','none');
  });



});


  $(function() {
    $('.fc-toolbar').addClass('row');
    $('.fc-left').addClass('col-md-6 col-xs-12');
    $('.fc-center').addClass('col-md-12 col-xs-12');
    $('.fc-right').addClass('col-md-6 col-xs-12');
    $(".fc-view.fc-month-view.fc-basic-view").addClass('table-responsive');


    $("#eve_keys_off").css('display','none');

    $("#eve_keys_on").click(function () 
    {
	  		$("#eve_cont").slideUp("slow");
    		$("#eve_keys_on").css('display', 'none');
    		$("#eve_keys_off").css('display', 'block');
  	});

  	$("#eve_keys_off").click(function () 
    {
	  		$("#eve_cont").slideDown("slow");
    		$("#eve_keys_off").css('display', 'none');
    		$("#eve_keys_on").css('display', 'block');
  	});


  	$("#eve_calendar_off").css('display','none');

    $("#eve_calendar_on").click(function () 
    {
	  		$("#eve_calendar").slideUp("slow");
    		$("#eve_calendar_on").css('display', 'none');
    		$("#eve_calendar_off").css('display', 'block');
  	});

  	$("#eve_calendar_off").click(function () 
    {
	  		$("#eve_calendar").slideDown("slow");
    		$("#eve_calendar_off").css('display', 'none');
    		$("#eve_calendar_on").css('display', 'block');
  	});




    


  });
</script>



