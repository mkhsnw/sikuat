<!DOCTYPE html>
<html lang="en">
<x-head></x-head>
<body class="bg-gray-100">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <x-sidebar></x-sidebar>
    
    <!-- Main Content -->
    <main class="flex-1 p-6">
      <!-- Navbar -->
      <x-navbar></x-navbar>

      <h2 class="text-xl font-bold mb-4">Review Artikel</h2>

      <!-- Daftar Artikel -->
      <div class="bg-white p-6 rounded-lg shadow flex flex-col h-full">
        <div class="overflow-y-auto flex-1 max-h-[50rem]">
          @foreach ($articles as $article)
            <div class="bg-white p-6 rounded-lg shadow mb-4">
              <!-- Artikel Header -->
              <div class="flex items-center mb-4">
                <div class="ml-4">
                  <h2 class="text-lg font-bold">{{ $article->judul }}</h2>
                  <p class="text-gray-500 text-sm">Kategori: {{ $article->nama_kategori }}</p>
                </div>
              </div>

              <!-- Thumbnail -->
              <div class="bg-gray-200 rounded-lg h-32 mb-4 flex items-center justify-center">
                <img src="{{ asset('storage/' . ($article->thumbnail ?? 'default-thumbnail.jpg')) }}" alt="Thumbnail" class="max-h-full object-cover">
              </div>

              <!-- Lihat Lebih Lengkap Button -->
              <div class="flex justify-end">
                <button 
                  class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600" 
                  data-article="{{ json_encode($article) }}"
                  onclick="showArticleDetail(this)">
                  Lihat Lebih Lengkap
                </button>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </main>
  </div>

  <!-- Modal untuk Detail Artikel -->
  <x-bladewind::modal
    size="big"
    title="Detail Artikel"
    name="article-detail-modal"
    close_after_action="true"
    ok_button_action="acceptArticle()"
    ok_button_label="Accept"
    cancel_button_action="rejectArticle()"
    cancel_button_label="Reject">

    <div id="modalContent">
        <!-- Konten Modal akan diisi di sini -->
        <h4 class="text-lg font-bold" id="modalTitle">Judul Artikel</h4>
        <p class="text-gray-500" id="modalCategory">Kategori: </p>

        <div class="bg-gray-200 rounded-lg h-32 mb-4 flex items-center justify-center">
            <img id="modalThumbnail" src="" alt="Thumbnail" class="max-h-full object-cover">
        </div>

        <div class="text-gray-700 text-sm mb-4" id="modalContentText">
            <!-- Isi Artikel akan diisi di sini -->
        </div>

        <p class="text-gray-500 text-sm" id="modalCreatedAt">Created at: </p>
        <p class="text-gray-500 text-sm" id="modalUpdatedAt">Updated at: </p>
    </div>
  </x-bladewind::modal>

  <form id="accept-form" method="POST" style="display: none;">
    @csrf
  </form>

  <form id="reject-form" method="POST" style="display: none;">
    @csrf
  </form>

  <script>
    let currentArticleId;

    // Fungsi untuk menampilkan modal dengan detail artikel
    function showArticleDetail(button) {
        // Ambil data artikel dari atribut data-article
        const article = JSON.parse(button.getAttribute('data-article'));
        currentArticleId = article.id;

        // Menampilkan konten detail artikel di modal
        document.getElementById('modalTitle').innerText = article.judul;
        document.getElementById('modalCategory').innerText = `Kategori: ${article.nama_kategori}`;
        document.getElementById('modalThumbnail').src = `/storage/${article.thumbnail}`;
        document.getElementById('modalContentText').innerHTML = `<p>${article.isi}</p>`;
        document.getElementById('modalCreatedAt').innerText = `Created at: ${new Date(article.created_at).toLocaleDateString()}`;
        document.getElementById('modalUpdatedAt').innerText = `Updated at: ${new Date(article.updated_at).toLocaleDateString()}`;

        // Menampilkan modal
        showModal('article-detail-modal');
    }

    // Fungsi untuk menerima artikel
    function acceptArticle() {
        const form = document.getElementById('accept-form');
        form.action = `/admin/review-article/${currentArticleId}/accept`;
        form.submit();
    }

    // Fungsi untuk menolak artikel
    function rejectArticle() {
        const form = document.getElementById('reject-form');
        form.action = `/admin/review-article/${currentArticleId}/reject`;
        form.submit();
    }

    // Fungsi untuk menutup modal
    function closeModal() {
        hideModal('article-detail-modal');
    }
</script>
</body>
</html>
