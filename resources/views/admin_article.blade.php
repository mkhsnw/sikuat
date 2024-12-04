<!DOCTYPE html>
<html lang="en">
<x-head></x-head>
<body class="bg-gray-100">
  <div class="flex">
    <x-sidebar></x-sidebar>
    <main class="flex-1 p-6">
      <x-navbar></x-navbar>

      <div class="bg-white shadow p-6 rounded-lg">
        <x-bladewind::table divider="thin">
          <x-slot name=header>
            <th>NO</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Tanggal Upload</th>
            <th>Email</th>
            <th>Aksi</th>
          </x-slot>

          <tr>
            <td>1</td>
            <td>Budiman</td>
            <td>Budi</td>
            <td>1990-10-20</td>
            <td>budi@me.com</td>
            <td>
              <x-bladewind::button>
                Lihat Detail
              </x-bladewind::button>
            </td>
          </tr>

          <tr>
            <td>1</td>
            <td>Budiman</td>
            <td>Budi</td>
            <td>1990-10-20</td>
            <td>budi@me.com</td>
            <td>
              <x-bladewind::button>
                Lihat Detail
              </x-bladewind::button>
            </td>
          </tr>

          <tr>
            <td>1</td>
            <td>Budiman</td>
            <td>Budi</td>
            <td>1990-10-20</td>
            <td>budi@me.com</td>
            <td>
              <x-bladewind::button>
                Lihat Detail
              </x-bladewind::button>
            </td>
          </tr>
        </x-bladewind::table>
      </div>
    </main>
  </div>
  
</body>
</html>