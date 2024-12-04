<!DOCTYPE html>
<html lang="en">
<x-head></x-head>
<body class="bg-gray-100">
  <div class="flex">
    <x-sidebar></x-sidebar>
    <main class="flex-1 p-6">
      <x-navbar></x-navbar>
      <div class="bg-white shadow p-6 rounded-lg">
        <x-bladewind::button show-focus-ring="false" color="green">tambah Challange</x-bladewind::button>
        <x-bladewind::table divider="thin">
          <x-slot name=header>
            <th>NO</th>
            <th>Nama Challange</th>
            <th>Kategori</th>
            <th>Tanggal Dibuat</th>
            <th>Point</th>
            <th>Aksi</th>
          </x-slot>

          <tr>
            <td>1</td>
            <td>Push Up</td>
            <td>Angkat Beban</td>
            <td>1990-10-20</td>
            <td>500</td>
            <td>
              <x-bladewind::button onclick="showModal('custom-actions')" color="red">
                Hapus
            </x-bladewind::button>
            
            <x-bladewind::modal
                size="big"
                type="warning"
                title="Confirm User Deletion"
                ok_button_action="alert('as you wish')"
                cancel_button_action="alert('good choice')"
                close_after_action="true"
                name="custom-actions"
                ok_button_label="Yes, delete"
                cancel_button_label="don't delete">
                Are you sure you want to delete this user? This action cannot be undone.
            </x-bladewind::modal>
            </td>
          </tr>

          <tr>
            <td>1</td>
            <td>Push Up</td>
            <td>Angkat Beban</td>
            <td>1990-10-20</td>
            <td>500</td>
            <td>
            <x-bladewind::button onclick="showModal('custom-actions')" color="red">
              Hapus
          </x-bladewind::button>
          
          <x-bladewind::modal
              size="big"
              type="warning"
              title="Confirm User Deletion"
              ok_button_action="alert('as you wish')"
              cancel_button_action="alert('good choice')"
              close_after_action="true"
              name="custom-actions"
              ok_button_label="Yes, delete"
              cancel_button_label="don't delete">
              Are you sure you want to delete this user? This action cannot be undone.
          </x-bladewind::modal>
            </td>
          </tr>

          <tr>
            <td>1</td>
            <td>Push Up</td>
            <td>Angkat Beban</td>
            <td>1990-10-20</td>
            <td>500</td>
            <td>
              <x-bladewind::button onclick="showModal('custom-actions')" color="red">
                Hapus
            </x-bladewind::button>
            
            <x-bladewind::modal
                size="big"
                type="warning"
                title="Confirm User Deletion"
                ok_button_action="alert('as you wish')"
                cancel_button_action="alert('good choice')"
                close_after_action="true"
                name="custom-actions"
                ok_button_label="Yes, delete"
                cancel_button_label="don't delete">
                Are you sure you want to delete this user? This action cannot be undone.
            </x-bladewind::modal>
            </td>
          </tr>
        </x-bladewind::table>
      </div>
    </main>
  </div>
  
</body>
</html>