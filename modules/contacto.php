<div class="contacto">
	<div class="col-sm-4 col-sm-offset-1 logo">
		<img src="images/logo-grande-2.png" alt="" class="img-responsive">
	</div>
	<div class="col-sm-offset-1 col-sm-6 contenedor-form-contacto">
		<div class="col-sm-12 form-contacto">
			<div class="row titulo text-center">
				Comparte tus experiencias con nosotros
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label for="nombre">Nombre (requerido)</label>
				</div>
				<div class="col-sm-12">
					<input type="text" name="nombre" id="nombre">
				</div>
				<div class="col-sm-12">
					<span id="helpNombre" class="help-block help-error">* Favor de completar este dato.</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label for="cumple">Fecha de Cumpleaños</label>
				</div>
				<div class="col-sm-12">
					<input type="date" name="cumple" id="cumple">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label for="mail">Correo Electrónico (requerido)</label>
				</div>
				<div class="col-sm-12">
					<input type="text" name="mail" id="mail">
				</div>
				<div class="col-sm-12">
					<span id="helpMail" class="help-block help-error">* Favor de capturar un email válido.</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label for="comentarios">Escribe tus comentarios</label>
				</div>
				<div class="col-sm-12">
					<textarea type="text" cols="40" rows="10" name="comentarios" id="comentarios"></textarea>
				</div>
				<div class="col-sm-12">
					<span id="helpComentarios" class="help-block help-error">* Favor de completar este dato.</span>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="botonEnviar pull-right text-center" id="btnEnviarContacto">
				ENVIAR
			</div>
		</div>
	</div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmación</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->