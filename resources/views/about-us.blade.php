<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo-web.png">
    <title>Makna Jiwa | About Us</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="about-us.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
  @include('partials.navbar')
      
      <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div
            class="left-col d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <p class="text-capt">About Us</p>
            <h1 class="title-text-big">
              <b>Makna Jiwa</b><br class="d-lg-block d-none" />
              Mental Illness Platform
            </h1>
            <p class="text-capt-down">Platform Edukasi Kesehatan Mental <br>
            Disini kami menyediakan berbagai fasilitas untuk penjelajah dunia maya, sebagai media edukasi seberapa pentingnya kesehatan mental dalam diri anda masing - masing.<br>
            </p>
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-twitter"></a>
            </div>
          </div>
          <!-- Right Column -->
          <div class="right-col text-center d-flex justify-content-center pe-0">
            <img id="img-fluid" class="h-auto mw-100 rounded-circle"
              src="./img/selfie.png"
              alt="" />
          </div>
        </div>
      </div>
    </div>

    <div class="content-3-1 container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
    <h1 class="text-title text-center">TIM KAMI</h1>  
    <div class="d-flex flex-lg-row flex-column align-items-center">
        <!-- Left Column -->
        <div class="img-hero text-center justify-content-center d-flex">
          <img id="hero" class="img-fluid rounded-circle"
            src="./img/farrel.png"
            alt="" />
        </div>

        <!-- Right Column -->
        <div
            class="right-col d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <h1 class="title-text-big">
              <b>Hello!</b>  I'm<br class="d-lg-block d-none" />
              Farrel Muhammad
            </h1>
            <p class="text-capt-down">UI/UX Designer and Frontend Developer <br>
            <img src="./img/untag.png" alt="" class="logo-kampus">
            Universitas 17 Agustus 1945 Surabaya<br>
            
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
            <a href="https://www.instagram.com/farrelmuhammaad/" class="fa fa-instagram"></a>
            <a href="https://www.linkedin.com/in/farrelmuhammad/" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-twitter"></a>
            </div>
          </div>
      </div>
    </div>

    <div class="content-3-1 container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="d-flex flex-lg-row flex-column align-items-center">
        <!-- Left Column -->
        <div class="img-hero text-center justify-content-center d-flex">
          <img id="hero" class="img-fluid rounded-circle"
            src="./img/dwi.jpg"
            alt="" />
        </div>

        <!-- Right Column -->
        <div
            class="right-col d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <h1 class="title-text-big">
              <b>Hello!</b>  I'm<br class="d-lg-block d-none" />
              Muhammad Dwi Prasetyo
            </h1>
            <p class="text-capt-down">Frontend Developer and Backend Developer<br>
            <img src="./img/stiki.png" alt="" class="logo-kampus">
            STIKI Malang<br>
            
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
            <a href="https://www.instagram.com/prasetyo_dwi81/" class="fa fa-instagram"></a>
            <a href="https://www.linkedin.com/in/muhammad-dwi-prasetyo-33203721b/" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-twitter"></a>
            </div>
          </div>
      </div>
    </div>
    
    @include('partials.footer')
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>