@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-900">Buat Artikel Baru</h2>
    </div>

    @if($errors->any())
        <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4">
            <p class="text-sm font-bold text-red-700 mb-2">Terdapat kesalahan pada form:</p>
            <ul class="list-disc list-inside text-sm text-red-600 space-y-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 space-y-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label for="title" class="block text-sm font-bold text-slate-700 mb-2">Judul Artikel</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" class="w-full px-4 py-2 border {{ $errors->has('title') ? 'border-red-400' : 'border-slate-300' }} rounded-lg outline-none focus:border-amber-500" placeholder="Contoh: Tips Persiapan Fisik Sebelum Umrah">
                    @error('title')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="category" class="block text-sm font-bold text-slate-700 mb-2">Kategori</label>
                    <select id="category" name="category" class="w-full px-4 py-2 border {{ $errors->has('category') ? 'border-red-400' : 'border-slate-300' }} rounded-lg outline-none focus:border-amber-500">
                        <option value="Tips & Trik" @selected(old('category') == 'Tips & Trik')>Tips & Trik</option>
                        <option value="Berita" @selected(old('category') == 'Berita')>Berita</option>
                        <option value="Panduan Ibadah" @selected(old('category') == 'Panduan Ibadah')>Panduan Ibadah</option>
                    </select>
                    @error('category')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="author" class="block text-sm font-bold text-slate-700 mb-2">Penulis</label>
                <input type="text" id="author" name="author" value="{{ old('author') }}" class="w-full px-4 py-2 border {{ $errors->has('author') ? 'border-red-400' : 'border-slate-300' }} rounded-lg outline-none focus:border-amber-500" placeholder="Kosongkan jika ingin default Admin Fattah Travel">
                @error('author')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="slug_dummy" class="block text-sm font-bold text-slate-700 mb-2">Slug (Otomatis)</label>
                <input type="text" id="slug_dummy" value="Akan dibuat otomatis dari judul" class="w-full px-4 py-2 border border-slate-200 bg-slate-50 text-slate-500 rounded-lg" disabled>
                <p class="text-[10px] text-slate-400 mt-1">Slug di-generate otomatis di server saat artikel disimpan.</p>
            </div>

            <div>
                <label for="excerpt" class="block text-sm font-bold text-slate-700 mb-2">Ringkasan (Excerpt)</label>
                <textarea id="excerpt" name="excerpt" rows="2" class="w-full px-4 py-2 border {{ $errors->has('excerpt') ? 'border-red-400' : 'border-slate-300' }} rounded-lg outline-none focus:border-amber-500" placeholder="Tulis ringkasan singkat untuk tampilan kartu berita...">{{ old('excerpt') }}</textarea>
                @error('excerpt')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="editor" class="block text-sm font-bold text-slate-700 mb-2">Konten Artikel</label>
                <textarea name="body" id="editor" rows="15" class="w-full px-4 py-2 border {{ $errors->has('body') ? 'border-red-400' : 'border-slate-300' }} rounded-lg outline-none focus:border-amber-500" placeholder="Tuliskan isi lengkap artikel di sini...">{{ old('body') }}</textarea>
                <p class="text-[10px] text-slate-400 mt-1">*Tips: Gunakan enter untuk paragraf baru.</p>
                @error('body')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="image-input" class="block text-sm font-bold text-slate-700 mb-2">Gambar Utama (Thumbnail)</label>
                <input id="image-input" type="file" name="image" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100">
                @error('image')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror

                <div id="image-preview-wrapper" class="mt-4 hidden">
                    <p class="text-xs font-semibold text-slate-500 mb-2">Preview Gambar:</p>
                    <img id="image-preview" src="" alt="Preview gambar" class="w-full max-w-sm h-52 object-cover rounded-xl border border-slate-200">
                </div>
            </div>
        </div>

        <div class="flex justify-end gap-3">
            <button type="button" onclick="history.back()" class="px-6 py-2.5 bg-slate-100 text-slate-600 rounded-lg font-bold">Batal</button>
            <button type="submit" class="px-6 py-2.5 bg-amber-500 text-slate-900 rounded-lg font-bold shadow-lg hover:bg-amber-600 transition-all">Terbitkan Artikel</button>
        </div>
    </form>
</div>

<script>
    const imageInput = document.getElementById('image-input');
    const previewWrapper = document.getElementById('image-preview-wrapper');
    const previewImage = document.getElementById('image-preview');

    if (imageInput) {
        imageInput.addEventListener('change', function (event) {
            const file = event.target.files?.[0];

            if (!file) {
                previewWrapper.classList.add('hidden');
                previewImage.src = '';
                return;
            }

            const reader = new FileReader();
            reader.onload = function (e) {
                previewImage.src = e.target.result;
                previewWrapper.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        });
    }
</script>
@endsection