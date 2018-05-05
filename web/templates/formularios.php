<!-- FORMULARIO -->	
<form method="POST" id="contact-form-tour-menos" name="contact-form-tourmenos" class="formulario">
	<input type="hidden" name="page" value="<?php global $pageActual; echo $pageActual; ?>">

	<div class="form-group">
		<label for="school">Nombre del colegio</label>
		<input type="text" id="school" name="school" placeholder="Nombre del colegio">
	</div>

	<div class="form-group">
		<label for="trip-year">Año de viaje</label>
		<input type="number" id="trip-year" name="trip-year" placeholder="Año de viaje">
	</div>

	<div class="form-group">
		<label for="number-students">Cantidad de Alumnos</label>
		<input type="number" id="number-students" name="number-students" placeholder="Cantidad de Alumnos">
	</div>
	
	<div class="form-group">
		<label for="name">Tu nombre y apellido</label>
		<input type="text" id="name" name="name" placeholder="Tu nombre y apellido">
	</div>

	<div class="form-group">
		<label for="charge">Sos alumno/padre/madre/otro</label>
		<input type="text" id="charge" name="charge" placeholder="Sos alumno/padre/madre/otro">
	</div>

	<div class="form-group">
		<label for="telephone">Teléfono movil</label>
		<input type="number" id="telephone" name="telephone" placeholder="Teléfono movil" required>	
	</div>

	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" id="email" name="email" required placeholder="E-mail">
	</div>

	<div class="form-group-col-2">
		<span class="url-form">baxtter.tur.ar</span>
		<input type="submit" value="Enviar" class="btn-form">	
	</div>

</form><!-- // formulario -->
