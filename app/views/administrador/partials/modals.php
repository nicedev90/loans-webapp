	<!-- modal section -->
	<div id="modal-register" class="hidden fixed w-full h-screen bg-dark px-2 py-5 bg-opacity-70">
		<form class="flex flex-col w-full mx-auto md:max-w-2xl bg-white shadow rounded-lg" action="<?php echo URLROOT; ?>/administrador/register" method="post">
			<!-- modal title -->
			<div class="flex justify-between py-2 px-3 border-b md:px-6">
				<h2 class="text-dark text-lg font-bold text-center">
					Registrar Nuevo Cliente
				</h2>
				<button id="btn-close" class="text-xl"><i class="fa-solid fa-cancel"></i></button>
			</div>

			<!-- start modal body -->
			<div class="flex flex-col w-full p-3 space-y-2">
				<!-- nombres apellidos row -->
				<div class="flex flex-col space-y-2 md:flex-row md:space-y-0">
					<div class="flex flex-col text-dark md:px-3 md:w-full">
						<label for="nombres" class="md:w-full">Nombres *</label>
						<input type="text" name="nombres" class="p-2 border outline-none rounded md:w-full">
					</div>
					<div class="flex flex-col text-dark md:px-3 md:w-full">
						<label for="apellidos" class="md:w-full">Apellidos *</label>
						<input type="text" name="apellidos" class="p-2 border outline-none rounded md:w-full">
					</div>
				</div>

				
				<div class="flex flex-col space-y-2 md:flex-row md:space-y-0">
					<div class="flex flex-col text-dark md:px-3 md:w-full">
						<label for="dni" class="md:w-full">Número DNI *</label>
						<input type="text" name="dni" class="p-2 border outline-none rounded md:w-full">
					</div>
					<div class="flex flex-col text-dark md:px-3 md:w-full">
						<label for="fecha_nac" class="md:w-full">Fecha Nacimiento *</label>
						<input type="date" name="fecha_nac" class="p-2 border outline-none rounded w-full">
					</div>
				</div>

				
				<div class="flex flex-col space-y-2 md:flex-row md:space-y-0">
					<div class="flex text-dark flex-col md:px-3 md:w-full">
						<label for="telefono" class="md:w-full">Teléfono *</label>
						<input type="text" name="telefono" class="p-2 border outline-none rounded md:w-full">
					</div>
					<div class="flex text-dark flex-col md:px-3 md:w-full">
						<label for="email" class="md:w-full">Email *</label>
						<input type="email" name="email" class="p-2 border outline-none rounded md:w-full">
					</div>
				</div>

				<div class="flex flex-col space-y-2 md:flex-row md:space-y-0">
					<div class="flex text-dark flex-col md:px-3 md:w-full">
						<label for="password" class="md:w-full">Contraseña *</label>
						<input type="password" name="password" class="p-2 border outline-none rounded md:w-full">
					</div>
					<div class="flex text-dark flex-col md:px-3 md:w-full">
						<label for="password_confirm" class="md:w-full">Confirmar Contraseña *</label>
						<input type="password" name="passwor-confirm" class="p-2 border outline-none rounded md:w-full">
					</div>
				</div>

				<div class="flex flex-col items-center pt-5 space-y-4 text-white text-lg font-bold md:flex-row md:justify-around md:space-y-0">
					<button type="submit" class="w-full p-3 rounded-xl shadow bg-ctaLight hover:bg-ctaDark md:w-56">Registrar</button>
				</div>

			</div>
			<!-- end modal body -->

		</form>
	</div>