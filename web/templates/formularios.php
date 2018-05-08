<?php 

switch ($data) {
	case 'reunion': ?>
		<!-- reunion-form -->
		<form method="POST" name="reunion-form" id="reunion-form">
			<div class="loader"></div>
			
			<div class="title-form">
				<h2 class="titulo-seccion">
					Pedí tu reunión
				</h2>

				<legend class="subtitulo-seccion">
					Completá el form y nos ponemos en contacto
				</legend>

			</div>

			<div class="inner-wrapper-form margin-right">

				<div class="form-group">
					<input type="text" name="name-school">
					<label for="name-school">Nombre del colegio</label>
					<span class="msj-error-input">
						ste campo nos ayuda a comunicarnos
					</span>
				</div>

				<div class="form-group">
					<input type="number" name="alumnos">
					<label for="alumnos">Cantidad de alumnos</label>
					<span class="msj-error-input">
						Debería escribir sólo números, no utilice separadores
					</span>
				</div>

				<div class="form-group">
					<input type="text" name="charge">
					<label for="charge">Sos Alumno / padre / madre / otro</label>
					<span class="icon-input"></span>
					<span class="msj-error-input">
						Este campo nos ayuda a comunicarnos
					</span>
				</div>

				<div class="form-group">
					<input type="email" name="email" required>
					<label for="email">Email</label>
					<span class="msj-error-input">
						Formato de email inválido
					</span>
				</div>

			</div><!-- //.inner-wrapper-form -->

			<div class="inner-wrapper-form margin-left">

				<div class="form-group">
					<input type="number" name="year-trip">
					<label for="year-trip">Año de viaje</label>
					<span class="msj-error-input">
						Debería escribir sólo números, no utilice separadores
					</span>
				</div>

				<div class="form-group">
					<input type="text" name="name" class="text-uppercase">
					<label for="name" class="text-uppercase">Tu nombre y apellido</label>
					<span class="icon-input"></span>
					<span class="msj-error-input">
						Este campo nos resulta de mucha utilidad
					</span>
				</div>

				<div class="form-group">
					<input type="number" name="tel">
					<label for="tel">Teléfono Movil</label>
					<span class="icon-input"></span>
					<span class="msj-error-input">
						El teléfono es necesario para comunicarnos (no use separadores)
					</span>
				</div>

				<button type="submit" class="btn-submit">Enviar</button>

			</div><!-- //.inner-wrapper-form -->

		</form><!-- //reunion-form -->
	<?php break;
	
	case 'default': ?>
		<!-- default-form -->
		<form method="POST" name="default-form" id="default-form">
			<div class="loader"></div>
			<div class="inner-wrapper-form">

				<div class="form-group">
					<input type="text" name="name" class="text-uppercase">
					<label for="name" class="text-uppercase">Tu nombre y apellido</label>
					<span class="msj-error-input">
						Este campo nos ayuda a comunicarnos
					</span>
				</div>

				<div class="form-group">
					<input type="number" name="year-trip">
					<label for="year-trip" class="">Año de viaje</label>
					<span class="msj-error-input">
						Debería escribir sólo números, no utilice separadores
					</span>
				</div>

				<div class="form-group">
					<input type="number" name="tel">
					<label for="tel">Teléfono Movil</label>
					<span class="msj-error-input">
						El teléfono es necesario para comunicarnos (no use separadores)
					</span>
				</div>

				<div class="form-group">
					<input type="email" name="email" required>
					<label for="email">Email</label>
					<span class="msj-error-input">
						Formato de email inválido
					</span>
				</div>

				
				<button type="submit" class="btn-submit">Enviar</button>
				
				
			</div><!-- //.inner-wrapper-form -->

		</form><!-- //default-form -->
	<?php break;
}
