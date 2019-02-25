<form id="actualidarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar Preguta:</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>
          <div class="form-group">
            <label for="codigo" class="control-label">Id:</label>
            <input type="text" class="form-control" id="id" name="id" required maxlength="2">
			<input type="hidden" class="form-control" id="id" name="id">
          </div>
		  <div class="form-group">
            <label for="pregunta" class="control-label">Pregunta:</label>
            <input type="text" class="form-control" id="Pregunta" name="pregunta" required maxlength="45">
          </div>
		  <div class="form-group">
            <label for="a" class="control-label">A:</label>
            <input type="text" class="form-control" id="a" name="a" required maxlength="3">
          </div>
		  <div class="form-group">
            <label for="b" class="control-label">B</label>
            <input type="text" class="form-control" id="b" name="b" required maxlength="30"> 
          </div>
		  <div class="form-group">
            <label for="c" class="control-label">C:</label>
            <input type="text" class="form-control" id="c" name="c" required maxlength="15">
          </div>
           <div class="form-group">
            <label for="d" class="control-label">D:</label>
            <input type="text" class="form-control" id="d" name="d" required maxlength="15">
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>