@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-900">Edit Artikel</h2>
    </div>

    <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 space-y-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Judul Artikel</label>
                    <input type="text" name="title" value="{{ old('title', $article->title) }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Kategori</label>
                    <input type="text" name="category" value="{{ old('category', $article->category) }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500">
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Penulis</label>
                <input type="text" name="author" value="{{ old('author', $article->author) }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500">
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Ringkasan (Excerpt)</label>
                <textarea name="excerpt" rows="2" class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500">{{ old('excerpt', $article->excerpt) }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Konten Artikel</label>
                <textarea name="body" rows="15" class="w-full px-4 py-2 border border-slate-300 rounded-lg outline-none focus:border-amber-500">{{ old('body', $article->body) }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Gambar Utama</label>
                <input type="file" name="image" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100">
                <p class="text-xs text-slate-500 mt-2">Biarkan kosong jika tidak ingin mengganti gambar.</p>
            </div>
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('admin.articles.index') }}" class="px-6 py-2.5 bg-slate-100 text-slate-600 rounded-lg font-bold">Batal</a>
            <button type="submit" class="px-6 py-2.5 bg-amber-500 text-slate-900 rounded-lg font-bold shadow-lg hover:bg-amber-600 transition-all">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection
