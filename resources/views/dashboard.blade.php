<x-layout title="Dashboard">
<div class="p-6 space-y-6">
    <!-- Title -->
    <div>
      <h1 class="text-3xl font-bold text-gray-800">Admin Dashboard</h1>
      <p class="text-gray-500 text-sm mt-1">Overview of system statistics and logs</p>
    </div>
  
    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- User Count Card -->
      <div class="bg-white rounded-2xl shadow p-6 flex flex-col justify-between">
        <div>
          <h2 class="text-xl font-semibold mb-2">Total Akun</h2>
          <p class="text-3xl font-bold text-blue-600">{{ $user_count }}</p>
        </div>
        <div class="text-sm text-gray-500 mt-4">Last updated 5 mins ago</div>
      </div>
  
      <!-- Migration Count Card -->
      <div class="bg-white rounded-2xl shadow p-6 flex flex-col justify-between">
        <div>
          <h2 class="text-xl font-semibold mb-2">Total Siswa</h2>
          <p class="text-3xl font-bold text-green-600">{{ $student_count }}</p>
        </div>
        <div class="text-sm text-gray-500 mt-4">Last migration 2 days ago</div>
      </div>

      <div class="bg-white rounded-2xl shadow p-6 flex flex-col justify-between">
        <div>
          <h2 class="text-xl font-semibold mb-2">Migrations</h2>
          <p class="text-3xl font-bold text-green-600">{{ $mig_count }}</p>
        </div>
        <div class="text-sm text-gray-500 mt-4">Last migration 2 days ago</div>
      </div>
  
      <!-- Admin Log Card -->
      <div class="bg-white rounded-2xl shadow p-6">
        <h2 class="text-xl font-semibold mb-4">Admin Logs</h2>
        <ul class="space-y-3 text-sm text-gray-700 max-h-40 overflow-y-auto">
          <li>📝 Admin created a new user - <span class="text-gray-500">10 mins ago</span></li>
          <li>⚙️ Ran migration script - <span class="text-gray-500">2 hours ago</span></li>
          <li>🔐 Password reset for user123 - <span class="text-gray-500">Yesterday</span></li>
          <li>🧹 Cleared cache - <span class="text-gray-500">2 days ago</span></li>
        </ul>
      </div>
    </div>
</div>
</x-layout>