<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo-web.png">
    <title>Makna Jiwa | Quiz</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('quiz.css') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

  @include('partials.navbar')

    <!-- quiz box -->
    <div class="box">
        <header>
            <div class="title">Kuisioner</div>
        </header>
        <section>
          <form action="{{ route('result.store') }}" method="post">
            @csrf
            <input type="hidden" name="category_id" value="{{ $category_id }}" />
            <?php $i = 1; ?>
            @foreach ($body as $quiz)
              <div class="que_text">
                  <span>{{$i++}}. {{$quiz->soal}}</span>
              </div>
              <div class="option_list">
                  <div class="option form-check-inline ms-5">
                    <input type="radio" value="1" class="btn-check" name="options_{{$quiz->id}}" id="option_{{$quiz->id}}_1">
                    <label class="btn btn-outline-success" for="option_{{$quiz->id}}_1">{{$quiz->opsi_a}}</label>
                  </div>
                  <div class="option form-check-inline">
                    <input type="radio" value="2" class="btn-check" name="options_{{$quiz->id}}" id="option_{{$quiz->id}}_2">
                    <label class="btn btn-outline-success" for="option_{{$quiz->id}}_2">{{$quiz->opsi_b}}</label>
                  </div>
                  <div class="option form-check-inline">
                    <input type="radio" value="3" class="btn-check" name="options_{{$quiz->id}}" id="option_{{$quiz->id}}_3">
                    <label class="btn btn-outline-success" for="option_{{$quiz->id}}_3">{{$quiz->opsi_c}}</label>
                  </div>
                  <div class="option form-check-inline">
                    <input type="radio" value="4" class="btn-check" name="options_{{$quiz->id}}" id="option_{{$quiz->id}}_4">
                    <label class="btn btn-outline-success" for="option_{{$quiz->id}}_4">{{$quiz->opsi_d}}</label>
                  </div>
                  <div class="option form-check-inline">
                    <input type="radio" value="5" class="btn-check" name="options_{{$quiz->id}}" id="option_{{$quiz->id}}_5">
                    <label class="btn btn-outline-success" for="option_{{$quiz->id}}_5">{{$quiz->opsi_e}}</label>
                  </div>
              </div>  
            @endforeach
            <div class="col text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>   
          </form>
        </section>
    </div>
        
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>