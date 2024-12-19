<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminThread;
use Illuminate\Http\Request;

class AdminThreadController extends Controller
{
    // Menampilkan daftar thread
    public function index()
    {
        $threads = AdminThread::all();
        return view('admin.admin_thread', compact('threads'));
    }

    // Menampilkan detail thread
    public function show($id)
    {
        $thread = AdminThread::findOrFail($id);
        return view('admin.show_thread', compact('thread'));
    }

    // Menampilkan form untuk mengedit thread
    public function edit($id)
    {
        $thread = AdminThread::findOrFail($id);
        return view('admin.edit_thread', compact('thread'));
    }

    // Memperbarui thread
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_user' => 'required|integer',
            'caption' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        $thread = AdminThread::findOrFail($id);
        $thread->update($request->all());

        return redirect()->route('admin.thread.index')->with('success', 'Thread berhasil diperbarui.');
    }

    // Menghapus thread
    public function destroy($id)
    {
        $thread = AdminThread::findOrFail($id);
        $thread->delete();

        return redirect()->route('admin.thread.index')->with('success', 'Thread berhasil dihapus.');
    }
}