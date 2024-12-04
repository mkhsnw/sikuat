<header class="flex justify-between items-center mb-6">
    <input
      type="text"
      placeholder="Search..."
      class="border border-gray-300 rounded-lg p-2 w-1/3"
    />
    <div class="flex items-center space-x-4">
      <button class="bg-gray-200 rounded-full p-2">
        <x-bladewind::bell animate_dot="true" />
      </button>
      <x-bladewind::dropmenu>

    <x-slot:trigger>
        <div class="flex space-x-2 items-center rounded-md">
            <div class="grow">
                <x-bladewind::avatar image="/assets/...jpg" size="medium" />
            </div>
            <div>
                <x-bladewind::icon name="chevron-down" class="!h-4 !w-4" />
            </div>
        </div>
    </x-slot:trigger>

    <x-bladewind::dropmenu-item header="true">
        <div class="grow">
            <div><strong>Jane A. Doe</strong></div>
            <div class="text-sm">@jane-the-coder</div>
            <div class="text-sm">jane@bladewindui.com</div>
        </div>
    </x-bladewind::dropmenu-item>

    <x-bladewind::dropmenu-item hover="false">
        <x-bladewind::button color="" radius="small" size="small" class="w-full">
            Sign Out
        </x-bladewind::button>
    </x-bladewind::dropmenu-item>

</x-bladewind::dropmenu>
     
    </div>
  </header>