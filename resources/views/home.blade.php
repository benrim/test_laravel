@extends('layouts.main')

@section('content')
 <div>
   <div class="banner">
        <img src="{{ asset('img/banner.png') }}" alt="Bannière">
    </div>
    <div class="title-article">
        <h1>A few words about this blog platform, Ghost, and how this site was made</h1>
    </div>
    <div class="banner-description">
        <p>Why Ghost (& Figma) instead of Medium, WordPress or other options?</p>
    </div>
 </div>
 <div>
   <div class="title">
        <h1>All articles</h1>
    </div>
    <div class="article-list">
      
        @foreach ($articles as $article)
        <div class="article">
    <a href="{{ route('article-details', ['id' => $article->id]) }}">
        <img src="{{ asset('storage/' . $article->image) }}" alt="Article 1">
        <p>{{ $article->title }}</p>
    </a>
</div>
        @endforeach
     
    </div>
 </div>
    
@endsection
