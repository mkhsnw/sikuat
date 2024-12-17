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
      <div class="grid grid-cols-4 gap-6 mb-6">
        <div class="bg-white shadow p-6 rounded-lg">
          <h3 class="text-gray-500">Total Views</h3>
          <p class="text-2xl font-bold">$3.456K</p>
          <span class="text-green-500 text-sm">+0.43%</span>
        </div>
        <div class="bg-white shadow p-6 rounded-lg">
          <h3 class="text-gray-500">Total Profit</h3>
          <p class="text-2xl font-bold">$45.2K</p>
          <span class="text-green-500 text-sm">+4.35%</span>
        </div>
        <div class="bg-white shadow p-6 rounded-lg">
          <h3 class="text-gray-500">Total Product</h3>
          <p class="text-2xl font-bold">2.450</p>
          <span class="text-green-500 text-sm">+2.59%</span>
        </div>
        <div class="bg-white shadow p-6 rounded-lg">
          <h3 class="text-gray-500">Total Users</h3>
          <p class="text-2xl font-bold">3.456</p>
          <span class="text-red-500 text-sm">-0.95%</span>
        </div>
      </div>

      <!-- Charts -->
      <div class="grid grid-cols-2 gap-6">
        <div class="bg-white shadow p-6 rounded-lg">
        <x-bladewind::card title="User`s Age Ratio">

          <x-bladewind::horizontal-line-graph
              label="Above 60: "
              percentage="33"
              color="cyan" />
  
          <x-bladewind::horizontal-line-graph
              label="Between 40 - 60: "
              percentage="43"
              color="purple"
              class="py-3" />
  
          <x-bladewind::horizontal-line-graph
              label="Under 40: "
              percentage="24"
              color="gray" />
  
      </x-bladewind::card>
    </div>
  
        <div class="bg-white shadow p-6 rounded-lg flex justify-between">
          <x-bladewind::progress-circle
percentage="58"
show_label="true"
show_percent="true"
size="big" />
<x-bladewind::progress-circle
percentage="50"
show_label="true"
show_percent="true"
size="big" 
color="cyan"/>
<x-bladewind::progress-circle
percentage="48"
show_label="true"
show_percent="true"
size="big" 
color="yellow" />
        </div>
      </div>
    </main>
  </div>
</body>
</html>
