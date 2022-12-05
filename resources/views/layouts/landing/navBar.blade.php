<div id="bar" class="w-24 h-full shadow-md bg-red-doc px-1 transform hover:w-56 z-20">
    <div id="icons" class="w-full h-full flex flex-col items-center pt-7">
        <img class="w-8/12 h-auto " src="{{ URL('images\landing\icono-bar.png') }}" alt="">
        <img class="w-5/12 h-auto mt-5" src="{{ URL('images\landing\icono-menu.png') }}" alt="">
    </div>
    <ul id="menu" class="relative mt-5 hidden">

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
