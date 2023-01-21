	<!-- navbar -->
	<nav id="navbar" class="hidden md:flex md:justify-between w-3/4 mx-auto px-3 pt-2 bg-primaryDark md:block">
		<div id="logo" class="w-1/4">
			<img class="h-10" src="<?php echo URLROOT; ?>/img/logo.png" alt="">
		</div>
		<div class="flex w-full justify-end space-x-2 text-center items-center">
			<a href="#" class="w-32 text-dark px-5 py-3 rounded-t-xl bg-neutralLight hover:bg-primaryLight hover:text-white hover:font-bold">Clientes</a>
			<a href="#" class="w-32 text-dark px-5 py-3 rounded-t-xl bg-neutralDark hover:bg-primaryLight hover:text-white hover:font-bold">Prestamos</a>
			<a href="#" class="w-32 text-dark px-5 py-3 rounded-t-xl bg-neutralDark hover:bg-primaryLight hover:text-white hover:font-bold">Cobros</a>

			<button id="profile" class="flex justify-around items-center md:w-64 text-white px-5 py-2 rounded-t-xl bg-ctaLight hover:bg-ctaDark hover:text-white">
				<img class="h-8 rounded-full" src="<?php echo URLROOT; ?>/img/anya1.JPG" alt="">
				<p class="">Alejandra Rivanderia</p>
			</button>
		</div>

	</nav>


		<!-- mobile navbar -->
    <nav id="navbar-mobile" class="flex justify-between p-2 bg-primaryDark md:hidden">

      <!-- mobile logo -->
      <div id="logo-mobile" class="w-1/4">
				<img class="h-10" src="<?php echo URLROOT; ?>/img/logo.png" alt="">
			</div>
      <!-- mobile hamburger menu -->
      <button id="menu-btn" class="block hamburger mr-4 md:hidden focus:outline-none">
        <span class="hamburger-top bg-neutralLight"></span>
        <span class="hamburger-middle bg-neutralLight"></span>
        <span class="hamburger-bottom bg-neutralLight"></span>
      </button>
  
    </nav>

    <!-- mobile hamburger menu -->
    <div class="md:hidden">

      <div id="menu" class="hidden absolute bg-primaryDark flex-col items-center text-white w-96 shadow-lg top-14 right-0">
        <a href="#" class="w-full text-center py-4 hover:bg-ctaLight">
        	<img class="h-8 rounded-full" src="<?php echo URLROOT; ?>/img/anya1.JPG" alt="">
        	Perfil
        </a>
        <a href="#" class="w-full text-center py-4 border-t hover:bg-ctaLight">Clientes</a>
        <a href="#" class="w-full text-center py-4 border-t hover:bg-ctaLight">Requerimientos</a>
      </div>
    </div>
