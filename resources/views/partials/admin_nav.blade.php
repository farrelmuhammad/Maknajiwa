<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo.png')}}" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ ($title === "Category") ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('categories') }}">Categories</a>
        </li>
        <li class="nav-item {{ ($title === "Blog Artikel") ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('blogartikel') }}">Artikel</a>
        </li>
      </ul>
    <a class="btn btn-outline-danger my-2 my-sm-0" href="{{ url('/login') }}">Logout</a>
    </div>
  </nav>