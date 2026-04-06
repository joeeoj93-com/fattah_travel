@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-2xl border border-slate-100 p-8">
    <h2 class="text-2xl font-bold text-slate-900 mb-4">{{ $article->title }}</h2>
    <p class="text-sm text-slate-500 mb-6">Kategori: {{ $article->category }} • Views: {{ number_format($article->views) }}</p>
    <div class="prose max-w-none">{!! nl2br(e($article->body)) !!}</div>
</div>
@endsection
