<!DOCTYPE html>
<html lang="en">
<x-head></x-head>
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
    </main>
  </div>
</body>
</html>