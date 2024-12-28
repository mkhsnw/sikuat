<!DOCTYPE html>
<html lang="en">
<x-head></x-head>
<body class="bg-gray-100">
  <div class="flex">
    <x-sidebar></x-sidebar>
    <main class="flex-1 p-6">
      <x-navbar></x-navbar>
      <div class="bg-white shadow p-6 rounded-lg">
        <!-- Tombol Tambah Challenge -->
        <x-bladewind::button show-focus-ring="false" color="green" onclick="showModal('add-challenge-modal')">
          Tambah Challenge
        </x-bladewind::button>

        <!-- Tabel Data -->
        <x-bladewind::table divider="thin">
          <x-slot name="header">
            <th>NO</th>
            <th>Nama Challenge</th>
            <th>Deskripsi</th>
            <th>Tanggal Dibuat</th>
            <th>Point</th>
            <th>Aksi</th>
          </x-slot>

          @foreach ($challenges as $index => $challenge)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $challenge->nama_challenge }}</td>
            <td>{{ $challenge->deskripsi }}</td>
            <td>{{ $challenge->created_at->format('Y-m-d') }}</td>
            <td>{{ $challenge->poin }}</td>
            <td>
              <!-- Tombol Edit -->
              <x-bladewind::button onclick="showModal('edit-modal-{{ $challenge->id }}')" color="blue">
                  Edit
              </x-bladewind::button>
          
              <!-- Tombol Hapus -->
              <x-bladewind::button onclick="showModal('delete-modal-{{ $challenge->id }}')" color="red">
                  Hapus
              </x-bladewind::button>
          
              <!-- Modal Konfirmasi Hapus -->
              <x-bladewind::modal
                  size="big"
                  type="warning"
                  title="Konfirmasi Hapus Challenge"
                  ok_button_action="document.getElementById('delete-form-{{ $challenge->id }}').submit()"
                  cancel_button_action="hideModal('delete-modal-{{ $challenge->id }}')"
                  close_after_action="true"
                  name="delete-modal-{{ $challenge->id }}"
                  ok_button_label="Yes, Delete"
                  cancel_button_label="Cancel">
                  Apakah Anda yakin ingin menghapus challenge <b>{{ $challenge->nama_challenge }}</b>? Tindakan ini tidak dapat dibatalkan.
              </x-bladewind::modal>
          
              <!-- Form Hapus -->
              <form id="delete-form-{{ $challenge->id }}" method="POST" action="{{ route('admin.challenge.destroy', $challenge->id) }}">
                  @csrf
                  @method('DELETE')
              </form>
          
              <x-bladewind::modal
                  size="big"
                  title="Edit Challenge"
                  name="edit-modal-{{ $challenge->id }}"
                  close_after_action="true"
                  ok_button_action="document.getElementById('edit-form-{{ $challenge->id }}').submit()"
                  ok_button_label="Simpan"
                  cancel_button_label="Batal">

                  <form id="edit-form-{{ $challenge->id }}" action="{{ route('admin.challenge.update', $challenge->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <div class="mb-3">
                          <label>Nama Challenge</label>
                          <input type="text" name="nama_challenge" value="{{ $challenge->nama_challenge }}" class="form-control" required>
                      </div>
                      <div class="mb-3">
                          <label>Deskripsi</label>
                          <textarea name="deskripsi" class="form-control" rows="3" required>{{ $challenge->deskripsi }}</textarea>
                      </div>
                      <div class="mb-3">
                          <label>Poin</label>
                          <input type="number" name="poin" value="{{ $challenge->poin }}" class="form-control" required>
                      </div>
                  </form>
              </x-bladewind::modal>
          </td>
          
          </tr>
          @endforeach
        </x-bladewind::table>
      </div>
    </main>
  </div>

  <x-bladewind::modal
    size="big"
    title="Tambah Challenge"
    name="add-challenge-modal"
    close_after_action="true"
    ok_button_action="document.getElementById('add-challenge-form').submit()"
    ok_button_label="Simpan"
    cancel_button_label="Batal">

    <form id="add-challenge-form" action="{{ route('admin.challenge.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Challenge</label>
            <input type="text" name="nama_challenge" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label>Poin</label>
            <input type="number" name="poin" class="form-control" required>
        </div>
    </form> 
  </x-bladewind::modal>
</body>
</html>