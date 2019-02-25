<form id="guardarDatos">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Preguntas</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax_register"></div>
          <div class="form-group">
            <label for="pregunta" class="control-label">Pregunta:</label>
            <input type="text" class="form-control" id="pregunta" name="pregunta" required maxlength="45">
		  </div>
		  <div class="form-group">
            <label for="a" class="control-label">A:</label>
            <input type="text" class="form-control" id="a" name="a" required maxlength="45">
          </div>
		  <div class="form-group">
            <label for="b" class="control-label">B:</label>
            <input type="text" class="form-control" id="b" name="b" required maxlength="45">
          </div>
		  <div class="form-group">
            <label for="c" class="control-label">C:</label>
            <input type="text" class="form-control" id="c" name="c" required maxlength="30"> 
          </div>
		  <div class="form-group">
            <label for="d" class="control-label">D:</label>
            <input type="text" class="form-control" id="d" name="d" required maxlength="45">
          </div>
          
        
      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" >Guardar datos</button>
      </div>
    </div>
  </div>
</div>
</form>