<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/img/bps.png">
    <title>Reviu Laporan Keuangan</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <script src="/js/init-alpine.js"></script>
    <script src="/js/charts-lines.js" defer></script>
    <script src="/js/charts-pie.js" defer></script>
    @vite('resources/js/theme.js')
    @vite(['resources/css/app.css','resources/js/app.js'])

    @laravelViewsStyles
  </head>

  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >

    @include('partials.sidebar')
    @include('partials.navbar')

    @yield('container')

        </div>
    </div>
    @laravelViewsScripts
  </body>
  
<footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
  <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
  </span>
  <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
      <li>
          <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
      </li>
      <li>
          <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
      </li>
      <li>
          <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
      </li>
      <li>
          <a href="#" class="hover:underline">Contact</a>
      </li>
  </ul>
</footer>


</html>
