<style>

.modal-content {
    background: #ddd;}

.modal-body{
background:#FFF;
}

.close{
color:#FFF;
opacity:1;
}

</style>

<input type="hidden" id="mensagem_ok" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modalok">
<div id="Modalok" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#5cb85c;"> <span class='glyphicon glyphicon-ok'></span> Success</h4>
      </div>
      <div class="modal-body">
        <p class="debug-url"></p>
      </div>
      <div class="modal-footer">

    <p style='text-align:center; margin:0;'><img src="/images/cs.png" style="width:120px;"></p>   
 </div>
    </div>
  </div>
</div>

<input type="hidden" id="mensagem_ko" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modalko">
<div id="Modalko" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#d9534f;"><span class='glyphicon glyphicon-warning-sign'></span> Warning</h4>
      </div>
      <div class="modal-body">
        <p class="debug-url"></p>
      </div>
      <div class="modal-footer">

 <p style='text-align:center; margin:0;'><img src="/images/cs.png" style="width:120px;"></p>  

<!--
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class='glyphicon glyphicon-remove-sign'></span> Fechar</button>

-->
      </div>
    </div>
  </div>
</div>