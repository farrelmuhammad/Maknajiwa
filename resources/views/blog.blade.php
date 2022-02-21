<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo-web.png">
    <title>Makna Jiwa | Blog</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('blog.css') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
@include('partials.navbar')

    <div class="article-top text-center">
      <h1 class="title-text fs-1">
        <b>Artikel ASAP</b><br class="d-lg-block d-none"/>
      </h1>
    </div>

    <div class="site-container">
      <div class="article-container">
      @foreach ($body as $article)
        <article class="article-card">
          <figure class="article-image">
            <img src="{{ $article->gambar }}" href="{{ url('/detail-blog/'.$article->id_artikel) }}" alt="image"/>
          </figure>
          <div class="article-content">
            <a href="{{ url('/detail-blog/'.$article->id_artikel) }}" class="card-category">By {{ $article->penulis }}</a>
            <h3 class="card-title">{{ $article->judul_artikel }}</h3>
            <p class="card-excerpt">{{ $article->deskripsi }}</p>
          </div>
        </article>
        @endforeach
      </div>
    </div>


  @include('partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>