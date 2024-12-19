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
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Tanggal Upload</th>
            <th>Email</th>
            <th>Aksi</th>
          </x-slot>

          @foreach ($articles as $index => $article)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $article->nama_lengkap }}</td>
            <td>{{ $article->username }}</td>
            <td>{{ $article->tanggal_upload }}</td>
            <td>{{ $article->email }}</td>
            <td>
              <x-bladewind::button onclick="showArticleDetail({{ $article->id }})">
                Lihat Detail
              </x-bladewind::button>
            </td>
          </tr>
          @endforeach
        </x-bladewind::table>
      </div>
    </main>
  </div>

  <script>
    function showArticleDetail(articleId) {
      // Implementasi fungsi untuk menampilkan detail artikel
      window.location.href = `/admin/review-article/${articleId}`;
    }
  </script>
</body>
</html>