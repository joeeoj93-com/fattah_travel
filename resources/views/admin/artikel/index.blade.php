@extends('layouts.admin')

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-slate-900">Kelola Artikel</h2>
        <a href="{{ route('admin.articles.create') }}" class="px-4 py-2.5 bg-amber-500 text-slate-900 rounded-lg font-bold hover:bg-amber-600 transition">+ Artikel Baru</a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 rounded-lg bg-green-50 text-green-700 border border-green-200 text-sm">{{ session('success') }}</div>
    @endif

    <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 text-slate-600">
                <tr>
                    <th class="text-left px-4 py-3">Judul</th>
                    <th class="text-left px-4 py-3">Kategori</th>
                    <th class="text-left px-4 py-3">Views</th>
                    <th class="text-left px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($articles as $article)
                    <tr class="border-t border-slate-100">
                        <td class="px-4 py-3 font-medium text-slate-800">{{ $article->title }}</td>
                        <td class="px-4 py-3 text-slate-600">{{ $article->category }}</td>
                        <td class="px-4 py-3 text-slate-600">{{ number_format($article->views) }}</td>
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-2">
                                <a href="{{ route('admin.articles.edit', $article) }}" class="px-3 py-1.5 rounded-md bg-blue-50 text-blue-700 font-semibold">Edit</a>
                                <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" onsubmit="return confirm('Hapus artikel ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1.5 rounded-md bg-red-50 text-red-700 font-semibold">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-8 text-center text-slate-500">Belum ada artikel.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-5">
        {{ $articles->links() }}
    </div>
</div>
@endsection
