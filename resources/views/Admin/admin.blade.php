<!DOCTYPE html>
<html lang="en">
<x-head>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</x-head>
<body class="bg-gray-100">
  <div class="flex">
    <!-- Sidebar -->
    <x-sidebar></x-sidebar>

    <!-- Main Content -->
    <main class="flex-1 p-6">

      <x-navbar></x-navbar>
      <!-- Stats -->
      <div class="bg-white shadow p-6 rounded-lg">
        <div class="grid grid-cols-4 gap-6">
          <div class="bg-white shadow p-6 rounded-lg">
            <h3 class="text-gray-500">Total Challenge</h3>
            <p class="text-2xl font-bold">{{ $totalChallenges }}</p>
          </div>
          <div class="bg-white shadow p-6 rounded-lg">
            <h3 class="text-gray-500">Total Thread Hari ini</h3>
            <p class="text-2xl font-bold">{{ $totalThreadsToday }}</p>
          </div>
          <div class="bg-white shadow p-6 rounded-lg">
            <h3 class="text-gray-500">Artikel Perlu Review</h3>
            <p class="text-2xl font-bold">{{ $articlesForReview }}</p>
          </div>
          <div class="bg-white shadow p-6 rounded-lg">
            <h3 class="text-gray-500">Total Users</h3>
            <p class="text-2xl font-bold">{{ $totalUsers }}</p>
          </div>
        </div>
      </div>

      <!-- Pie Chart -->
      <div class="bg-white shadow p-6 rounded-lg flex justify-center items-center relative mt-6">
        <div class="bg-white shadow p-6 rounded-lg">
        <h3 class="text-gray-500">User Challenge Clearance Today</h3>
        <x-bladewind::progress-circle
          percentage="{{ number_format(($totalUserClearanceToday / $totalUsers) * 100,2) }}"
          show_label="true"
          show_percent="true"
          size="big" 
          color="green" />
          </div>
      </div>
    </main>
  </div>
</body>
</html>