@foreach ($solusi as $item)
                @if ($result->hasil == '0-30')
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>{{$item->gejala_a}}
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>{{$item->gejala_b}}
                </p>
                <p class="d-flex align-items-center no-check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-3.png"
                      alt="" /> </span>{{$item->gejala_c}}
                </p>
                <p class="d-flex align-items-center no-check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-3.png"
                      alt="" /> </span>{{$item->gejala_d}}
                </p>
                <p class="d-flex align-items-center no-check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-3.png"
                      alt="" /> </span>{{$item->gejala_e}}
                </p>  
                @endif

                @if ($result->hasil == '31-60')
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>{{$item->gejala_a}}
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>{{$item->gejala_b}}
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>{{$item->gejala_c}}
                </p>
                <p class="d-flex align-items-center no-check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-3.png"
                      alt="" /> </span>{{$item->gejala_d}}
                </p>
                <p class="d-flex align-items-center no-check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-3.png"
                      alt="" /> </span>{{$item->gejala_e}}
                </p>  
                @endif

                @if ($result->hasil == '61-100')
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>{{$item->gejala_a}}
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>{{$item->gejala_b}}
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>{{$item->gejala_c}}
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>{{$item->gejala_d}}
                </p>
                <p class="d-flex align-items-center check">
                  <span class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                    <img class="img-fluid"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                      alt="" /> </span>{{$item->gejala_e}}
                </p>  
                @endif
                @endforeach