<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo-web.png">
    <title>Makna Jiwa | Result</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="result.css"/>
    <link rel="stylesheet" href="faq.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
      .progress-bar {
        width: {{ round($totalScore, 2) }}%;
      }
    </style>
</head>
<body>
<section class="h-100 w-100 bg-white" style="box-sizing: border-box; ">
    <div class="container-xxl mx-auto p-0  position-relative header-2-1" style="font-family: 'Poppins', sans-serif">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="{{ url('/') }}">
          <img style="margin-right: 0.75rem"
            src="./img/logo.png" alt="" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
          aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-white border-0">
              <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin') }}">Admin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/rmpty-state') }}">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">About Us</a>
                  </li>
                </ul>
              </div>
              <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                <a class="btn btn-fill text-white" href="#category">Let Us Help You</a>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/admin') }}">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/empty-state') }}">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">About Us</a>
            </li>
          </ul>
          <div class="gap-3">
            <a class="btn btn-fill text-white" href="#test">Let Us Help You</a>
          </div>
        </div>
      </nav>
    </section>

    <!-- Hasil Tes -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #f2f6ff">
    <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative"
      style="font-family: 'Poppins', sans-serif">
      <div class="container mx-auto">
        <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
          <h2 class="title-text">Hasil Tes Kecemasan Anda.</h2>
          <p class="caption-text mx-auto">
            Pertanyaan didasarkan pada alat skrining berbasis bukti tetapi<br />
            hanya indikatif dan tidak membentuk diagnosis formal.
          </p>
        </div>

        <div class="progress">
          <div class="progress-bar progress-bar-striped bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">{{ round($totalScore, 2) }}%</div>
        </div>

        <div class="d-flex flex-wrap">
          @foreach ($body as $result)          
          <div class="mx-auto card-item position-relative">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
              <h2 class="price-title">{{$result->solusi}}</h2>
              <h2 class="price-value d-flex align-items-center">
                <span>{{$result->hasil}}</span>
                <span class="price-duration">point</span>
              </h2>
              <p class="price-caption">
                Anda termasuk dalam kategori ini<br />
                Tanda - tandanya seperti dibawah ini :
              </p>
              <div class="price-list">
                @include('for_solusi')
              </div>
              <a href="#solusi" class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                Cek Solusi
              </a>
            </div>
          </div>
          @endforeach
          </div>
        </div>
      </div>
    </div>
    </section>

    @foreach ($solusi as $solusi)  
    <div id="solusi" class="accordion">
    <div class="image-box">
      <!--<img src="images/mainImg.png" alt="Accordion Image">-->
    </div>
    <div class="accordion-text">
      <div class="title">Yang Perlu Kamu Ketahui</div>
    <ul class="faq-text">
      <li>
        <div class="question-arrow">
          <span class="question">Apa Itu {{$solusi->kategori}} ?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>{{$solusi->ringkas}}</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Apa Yang Harus Saya Lakukan ?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>{{$solusi->solusi}}</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Apa Yang Mempengaruhi {{$solusi->kategori}} ?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>{{$solusi->sebab}}</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Jika Memburuk, Apa Yang Harus Saya Lakukan ?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Coba lah membuka diri dan menenangkan pikiran.<br> segera pergi konsultasi ke mentor yang profesional.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Jika Anda sedang mengalami krisis psikologis yang mengancam hidup Anda.</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Layanan ini tidak direkomendasikan.<br> Silahkan menghubungi <span style="font-weight: bold; color: red;">119<span>.</p>
        <span class="line"></span>
      </li>
    </ul>
    </div>
  </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Footer -->
  @include('partials.footer')

  <script>
    let li = document.querySelectorAll(".faq-text li");
    for (var i = 0; i < li.length; i++) {
      li[i].addEventListener("click", (e)=>{
        let clickedLi;
        if(e.target.classList.contains("question-arrow")){
          clickedLi = e.target.parentElement;
        }else{
          clickedLi = e.target.parentElement.parentElement;
        }
       clickedLi.classList.toggle("showAnswer");
      });
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>