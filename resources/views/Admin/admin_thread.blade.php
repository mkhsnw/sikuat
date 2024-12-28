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
          <x-slot name="header">
            <th>NO</th>
            <th>Caption</th>
            <th>Isi</th>
            <th>Like</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>
          </x-slot>

          @foreach ($threads as $index => $thread)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $thread->caption }}</td>
            <td>{{ $thread->isi }}</td>
            <td>{{ $thread->like }}</td>
            <td>{{ $thread->created_at }}</td>
            <td>
              <x-bladewind::button onclick="showThreadDetail({{ $thread->id }})">
                Lihat Detail
              </x-bladewind::button>
              <x-bladewind::button onclick="deleteThread({{ $thread->id }})" color="red">
                Hapus
              </x-bladewind::button>
            </td>
          </tr>
          @endforeach
        </x-bladewind::table>
      </div>
    </main>
  </div>

  <script>
    function showThreadDetail(threadId) {
      window.location.href = `/detail_threads/${threadId}`;
    }


    function deleteThread(threadId) {
      if (confirm('Apakah Anda yakin ingin menghapus thread ini?')) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `/admin/thread/${threadId}`;
        form.innerHTML = `
          @csrf
          @method('DELETE')
        `;
        document.body.appendChild(form);
        form.submit();
      }
    }
  </script>
</body>
</html>