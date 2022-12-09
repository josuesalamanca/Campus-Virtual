<div id="bar" class="w-24 h-screen shadow-md bg-red-doc px-1 transform hover:w-52 z-20">
    <div id="icons" class="w-full h-full flex flex-col items-center pt-7">
        <img class="w-8/12 h-auto " src="{{ URL('images\landing\icono-bar.png') }}" alt="">
        <img class="w-5/12 h-auto mt-5" src="{{ URL('images\landing\icono-menu.png') }}" alt="">
    </div>
    <div id="menu" class="w-full h-full hidden flex-col justify-cente items-center">

      <img class="w-4/12 h-auto mt-10" src="{{ URL('images\landing\icono-bar.png') }}" alt="">

      <ul class="relative w-full mt-5 ">

        <li class="relative">
            <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-200 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100  transition duration-300 ease-in-out" href="/" data-mdb-ripple="true" data-mdb-ripple-color="dark">Home</a>
          </li>
        <li class="relative">
          <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-200 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100  transition duration-300 ease-in-out" href="/login" data-mdb-ripple="true" data-mdb-ripple-color="dark">Admin</a>
        </li>
        <li class="relative">
          <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-200 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out" href="/insights-list" data-mdb-ripple="true" data-mdb-ripple-color="dark">Noticias</a>
        </li>
        <li class="relative">
          <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-200 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out" href="/virtual-resources" data-mdb-ripple="true" data-mdb-ripple-color="dark">Plataformas</a>
        </li>
        <li class="relative">
          <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-200 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="dark">Contactanos</a>
        </li>

      </ul>
    </div>

</div>
