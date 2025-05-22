<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? "app" }}</title>
  @vite(["resources/css/app.css", "resources/js/app.js"])
</head>
<body class="flex min-h-screen">

  <div id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-gray-800 text-white transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out">
    <div class="p-6">
      <h1 class="text-2xl font-bold mb-6">Absensi Metschoo</h1>
      <nav class="flex flex-col gap-4">
        <a href="{{ route('dashboard') }}" class="hover:bg-gray-700 p-2 rounded">Dashboard</a>
        <a href="{{ route('superuser') }}" class="hover:bg-gray-700 p-2 rounded">Tambah Akun</a>
        <a href="{{  route("student") }}" class="hover:bg-gray-700 p-2 rounded">Tambah Siswa</a>
        <a href="{{ route('logout') }}" class="hover:bg-gray-700 p-2 rounded">Keluar akun [{{ Auth::user()->name }}]</a>

      </nav>
    </div>
  </div>

  <div class="flex-1 ml-0 md:ml-64 bg-gray-100">
    <div class="flex items-center justify-between bg-white p-4 shadow-md md:hidden">
      <button id="menu-button" class="text-gray-800 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
      <span class="text-xl font-bold">Absensi Metschoo</span>
    </div>

    {{ $slot }}
  </div>

</body>
</html>