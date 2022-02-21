<!DOCTYPE html>
<!-- Designed by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="icon" href="./img/logo-web.png">
      <title>Makna Jiwa</title>
      <link rel="stylesheet" href="{{ asset('style.css')}}"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <!--<title> Responsive FAQ Accordion | CodingLab </title>-->
    <link rel="stylesheet" href="{{ asset('faq.css')}}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   </head>
<body>
  @include('partials.navbar')

  <div class="accordion">
    <div class="image-box">
      <!--<img src="images/mainImg.png" alt="Accordion Image">-->
    </div>
    <div class="accordion-text">
      <div class="title mt-4">FAQ</div>
    <ul class="faq-text">
      <li>
        <div class="question-arrow">
          <span class="question">Apa yang saya lakukan jika menurut saya kondisi memburuk?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Coba lah membuka diri dan menenangkan pikiran.<br> segera pergi konsultasi ke mentor yang profesional.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Jika keadaan saya mengancam kehidupan saya, Apa yang harus saya lakukan?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Layanan ini tidak direkomendasikan.<br> Silahkan menghubungi <span style="font-weight: bold; color: red;">119<span>.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Bagaimana cara mengikuti tes?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Anda bisa menuju halaman utama, tuju ke halaman paling bawah untuk membaca panduan tes.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Apa saya yang bisa saya lakukan di website ini?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Di website ini ada beberapa fitur awal seperti mengikuti tes diagnosa, membaca artikel terbaru tentang kesehatan mental, dan musik relaksasi di halaman utama.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Metode apa yang digunakan untuk mendiagnosa?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Sementara ini kami menggunakan metode forward chaining dengan rata - rata nilai pada jawaban dengan beberapa kategori yang umum.</p>
        <span class="line"></span>
      </li>
    </ul>
    </div>
  </div>

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

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>

