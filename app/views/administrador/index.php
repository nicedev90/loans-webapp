<?php require APPROOT . '/views/administrador/partials/header.php'; ?>

	<?php require APPROOT . '/views/administrador/partials/navbar.php'; ?>

	<div class="w-full md:w-3/4 px-2 mx-auto bg-neutralLight md:border md:h-screen">
		
		<section id="main" class="flex flex-col space-y-2">
			
			<div class="flex flex-col">

				<!-- section add & search -->
				<div class="flex flex-col space-y-2 md:flex-row md:justify-between md:items-center md:w-full border-b py-2">
					<div class="flex w-full md:px-5 md:w-1/2 justify-between">
						<!-- add user -->
						<button class="px-5 py-2 text-white text-lg rounded-xl bg-cta">Nuevo cliente</button>

						<!-- pagination -->
						<div class="flex md:w-auto py-2">
							PAGINA 1 de 5.
						</div>
					</div>

					<!-- search bar -->
					<div class="flex w-full md:w-1/3 px-2 space-x-2 bg-neutral border border-dark">
						<input type="search" class="w-full p-2 outline-none bg-neutral">
		        <button class="w-12 text-xl"><i class="fa-solid fa-search"></i></button>
					</div>
				</div>
						
				<!-- responsive table container -->
				<div class="flex flex-col shadow md:mt-2 md:space-y-0">

					<!-- columnas -->
					<div class="hidden md:flex justify-even text-center text-neutralLight bg-primaryDark">
						<!-- columnas -->
						<div class="w-72 p-1 border-r ">Nombres y Apellidos</div>
						<div class="w-32 p-1 border-r ">DNI</div>
						<div class="w-32 p-1 border-r">Telefono</div>
						<div class="w-56 p-1 border-r">Direccion</div>
						<div class="w-32 p-1 border-r">Situacion</div>
						<div class="w-24 p-1">Acciones</div>

					</div>

					<!-- filas -->
					<div class="flex flex-col space-y-3 py-2 md:py-0 md:space-y-0 ">

						<div class="text-sm text-dark border border-dark odd:bg-neutral even:bg-neutralLight md:flex md:border-none">

							<div class="flex items-center p-1 px-3 border-b border-dark md:p-0 md:w-72 md:border-none">
								<div class="w-1/4 font-bold md:hidden">Nombre :</div>
								<p class="w-3/4 md:text-center md:w-full"> Manuel Fernando Rivadeneyra Torrealva</p>
							</div>

							<div class="flex items-center p-1 px-3 border-b border-dark md:p-0  md:w-32 md:border-none">
								<div class="w-1/4 font-bold md:hidden">DNI :</div>
								<p class="w-3/4 md:text-center md:w-full"> Nr 43238962</p>
							</div>

							<div class="flex items-center p-1 px-3 border-b border-dark md:p-0  md:w-32 md:border-none">
								<div class="w-1/4 font-bold md:hidden">Telefono :</div>
								<p class="w-3/4 md:text-center md:w-full">+501949260 </p>
							</div>

							<div class="flex items-center p-1 px-3 border-b border-dark md:p-0  md:w-56 md:border-none">
								<div class="w-1/4 font-bold md:hidden">Direccion :</div>
								<p class="w-3/4 md:text-center md:w-full">Av. Paseo de la republica n 932</p>
							</div>

							<div class="flex items-center p-1 px-3 border-b border-dark md:p-0 md:w-32 md:border-none">
								<div class="w-1/4 font-bold md:hidden">Situacion :</div>
								<p class="w-3/4 md:text-center md:w-full"> Cuota Vencida. </p>
							</div>
							
							<div class="flex md:w-24">
								<div class="w-1/2 flex items-center hover:bg-ctaDark hover:text-white text-xl justify-center">
									<p class="md:hidden">Eliminar</p>
									<i class="fa-solid fa-trash-can p-2"></i>
								</div>
								<div class="w-1/2 flex items-center justify-center hover:text-white hover:bg-ctaDark text-xl">
									<p class="md:hidden">Editar</p>
									<i class="fa-solid fa-edit p-2"></i>
								</div>
							</div>
						</div>

						<div class="text-sm text-dark border border-dark odd:bg-neutral even:bg-neutralLight md:flex md:border-none">

							<div class="flex items-center p-1 px-3 border-b border-dark md:p-0 md:w-72 md:border-none">
								<div class="w-1/4 font-bold md:hidden">Nombre :</div>
								<p class="w-3/4 md:text-center md:w-full"> Manuel Fernando Rivadeneyra Torrealva</p>
							</div>

							<div class="flex items-center p-1 px-3 border-b border-dark md:p-0  md:w-32 md:border-none">
								<div class="w-1/4 font-bold md:hidden">DNI :</div>
								<p class="w-3/4 md:text-center md:w-full"> Nr 43238962</p>
							</div>

							<div class="flex items-center p-1 px-3 border-b border-dark md:p-0  md:w-32 md:border-none">
								<div class="w-1/4 font-bold md:hidden">Telefono :</div>
								<p class="w-3/4 md:text-center md:w-full">+501949260 </p>
							</div>

							<div class="flex items-center p-1 px-3 border-b border-dark md:p-0  md:w-56 md:border-none">
								<div class="w-1/4 font-bold md:hidden">Direccion :</div>
								<p class="w-3/4 md:text-center md:w-full">Av. Paseo de la republica n 932</p>
							</div>

							<div class="flex items-center p-1 px-3 border-b border-dark md:p-0 md:w-32 md:border-none">
								<div class="w-1/4 font-bold md:hidden">Situacion :</div>
								<p class="w-3/4 md:text-center md:w-full"> Cuota Vencida. </p>
							</div>
							
							<div class="flex md:w-24">
								<div class="w-1/2 flex items-center hover:bg-ctaDark hover:text-white text-xl justify-center">
									<p class="md:hidden">Eliminar</p>
									<i class="fa-solid fa-trash-can p-2"></i>
								</div>
								<div class="w-1/2 flex items-center justify-center hover:text-white hover:bg-ctaDark text-xl">
									<p class="md:hidden">Editar</p>
									<i class="fa-solid fa-edit p-2"></i>
								</div>
							</div>
						</div>

						<div class="text-sm text-dark border border-dark odd:bg-neutral even:bg-neutralLight md:flex md:border-none">

							<div class="flex items-center p-1 px-3 border-b border-dark md:p-0 md:w-72 md:border-none">
								<div class="w-1/4 font-bold md:hidden">Nombre :</div>
								<p class="w-3/4 md:text-center md:w-full"> Manuel Fernando Rivadeneyra Torrealva</p>
							</div>

							<div class="flex items-center p-1 px-3 border-b border-dark md:p-0  md:w-32 md:border-none">
								<div class="w-1/4 font-bold md:hidden">DNI :</div>
								<p class="w-3/4 md:text-center md:w-full"> Nr 43238962</p>
							</div>

							<div class="flex items-center p-1 px-3 border-b border-dark md:p-0  md:w-32 md:border-none">
								<div class="w-1/4 font-bold md:hidden">Telefono :</div>
								<p class="w-3/4 md:text-center md:w-full">+501949260 </p>
							</div>

							<div class="flex items-center p-1 px-3 border-b border-dark md:p-0  md:w-56 md:border-none">
								<div class="w-1/4 font-bold md:hidden">Direccion :</div>
								<p class="w-3/4 md:text-center md:w-full">Av. Paseo de la republica n 932</p>
							</div>

							<div class="flex items-center p-1 px-3 border-b border-dark md:p-0 md:w-32 md:border-none">
								<div class="w-1/4 font-bold md:hidden">Situacion :</div>
								<p class="w-3/4 md:text-center md:w-full"> Cuota Vencida. </p>
							</div>
							
							<div class="flex md:w-24">
								<div class="w-1/2 flex items-center hover:bg-ctaDark hover:text-white text-xl justify-center">
									<p class="md:hidden">Eliminar</p>
									<i class="fa-solid fa-trash-can p-2"></i>
								</div>
								<div class="w-1/2 flex items-center justify-center hover:text-white hover:bg-ctaDark text-xl">
									<p class="md:hidden">Editar</p>
									<i class="fa-solid fa-edit p-2"></i>
								</div>
							</div>
						</div>

					</div>
											
				</div>
			</div>
		</section>
	</div>

<?php require APPROOT . '/views/administrador/partials/footer.php'; ?>