<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Makna Jiwa | Sousi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- include summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">

                <!-- Notifikasi menggunakan flash session data -->
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif

                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('solusi.update', $solusi->id_kategori) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id_category" value="{{$solusi->id_kategori}}">
                            <div class="form-group">
                                <label for="ringkas">Ringkasan</label>
                                <textarea
                                    name="ringkas" id="ringkas"
                                    class="form-control @error('ringkas') is-invalid @enderror" name="ringkas" id="ringkas"
                                    rows="5" required>{{ old('ringkas', $solusi->ringkas) }}</textarea>

                                <!-- error message untuk ringkas -->
                                @error('ringkas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="solusi">Solusi</label>
                                <textarea
                                    name="solusi" id="solusi"
                                    class="form-control @error('solusi') is-invalid @enderror" name="solusi" id="solusi"
                                    rows="5" required>{{ old('solusi', $solusi->solusi) }}</textarea>

                                <!-- error message untuk solusi -->
                                @error('solusi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="sebab">Sebab</label>
                                <textarea
                                    name="sebab" id="sebab"
                                    class="form-control @error('sebab') is-invalid @enderror" name="sebab" id="sebab"
                                    rows="5" required>{{ old('sebab', $solusi->sebab) }}</textarea>

                                <!-- error message untuk sebab -->
                                @error('sebab')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="gejala_a">Gejala A</label>
                                <input type="text" class="form-control @error('gejala_a') is-invalid @enderror"
                                    name="gejala_a" value="{{ old('gejala_a', $solusi->gejala_a) }}" required>

                                <!-- error message untuk title -->
                                @error('gejala_a')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="gejala_b">Gejala B</label>
                                <input type="text" class="form-control @error('gejala_b') is-invalid @enderror"
                                    name="gejala_b" value="{{ old('gejala_b', $solusi->gejala_b) }}" required>

                                <!-- error message untuk title -->
                                @error('gejala_b')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="gejala_c">Gejala C</label>
                                <input type="text" class="form-control @error('gejala_c') is-invalid @enderror"
                                    name="gejala_c" value="{{ old('gejala_c', $solusi->gejala_c) }}" required>

                                <!-- error message untuk title -->
                                @error('gejala_c')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="gejala_d">Gejala D</label>
                                <input type="text" class="form-control @error('gejala_d') is-invalid @enderror"
                                    name="gejala_d" value="{{ old('gejala_d', $solusi->gejala_d) }}" required>

                                <!-- error message untuk title -->
                                @error('gejala_d')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="gejala_e">Gejala E</label>
                                <input type="text" class="form-control @error('gejala_e') is-invalid @enderror"
                                    name="gejala_e" value="{{ old('gejala_e', $solusi->gejala_e) }}" required>

                                <!-- error message untuk title -->
                                @error('gejala_e')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <script>
                                document.write('<a href="' + document.referrer + '" class="btn btn-md btn-secondary">Back</a>');
                            </script>
                            {{-- <a href="{{ route('categories.index') }}" class="btn btn-md btn-secondary">back</a> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- include summernote js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 250, //set editable area's height
            });
        })
    </script>
</body>

</html>