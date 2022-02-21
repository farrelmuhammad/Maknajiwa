<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo-web.png">
    <title>Makna Jiwa | Detail</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('detail.css') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
      @include('partials.navbar')
      
      <div class="container">
        @foreach ($body as $blog)
        <div class="cs-blog-detail">
            <div class="cs-main-post">
                <figure><img alt="{{ $blog->judul_artikel }}" src="{{ $blog->gambar }}"></figure>
            </div>
            <div class="cs-post-title">
                <div class="cs-author">
                    <div class="cs-text">
                        <h5>By: {{ $blog->penulis }}</h5>
                    </div>
                </div>
                <div class="post-option">
                    <span class="post-date">{{ $blog->created_at }}</span>
                </div>
            </div>
            {!! $blog->content !!}
           
        </div>
        @endforeach
        </div>
</section>

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>