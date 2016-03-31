<div class="contacto col-sm-12">
	<div class="col-sm-4 col-sm-offset-1 logo">
		<img src="images/logo-grande-silueta.png" alt="" class="img-responsive">
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
					<select name="dia" id="dia" class="select-dia">
						<option value="">DIA</option>
						<?php for($i = 1; $i <= 31; $i++){
							echo '<option value="'.$i.'">'.$i.'</option>';
						} ?>
					</select>
					<select name="mes" id="mes" class="select-mes">
						<option value="">MES</option>
						<option value="Enero">Enero</option>
						<option value="Febrero">Febrero</option>
						<option value="Marzo">Marzo</option>
						<option value="Abril">Abril</option>
						<option value="Mayo">Mayo</option>
						<option value="Junio">Junio</option>
						<option value="Julio">Julio</option>
						<option value="Agosto">Agosto</option>
						<option value="Septiembre">Septiembre</option>
						<option value="Octubre">Octubre</option>
						<option value="Noviembre">Noviembre</option>
						<option value="Diciembre">Diciembre</option>
					</select>
					<select name="anio" id="anio" class="select-anio">
						<option value="">AÑO</option>
						<?php for($i = date("Y"); $i >= date("Y")-100; $i--){
							echo '<option value="'.$i.'">'.$i.'</option>';
						} ?>
					</select>
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