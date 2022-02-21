<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MaknaJiwa | {{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- include summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body>
    @include('partials.admin_nav')
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

                        <form action="{{ route('blogartikel.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="title">Judul Artikel</label>
                                <input type="text" class="form-control @error('judul_artikel') is-invalid @enderror"
                                    name="judul_artikel" value="{{ old('judul_artikel') }}" required>

                                <!-- error message untuk title -->
                                @error('judul_artikel')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="deksripsi">Deskripsi</label>
                                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                    name="deskripsi" value="{{ old('deskripsi') }}" required>

                                <!-- error message untuk title -->
                                @error('deksripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea
                                    name="content" id="content"
                                    class="form-control @error('content') is-invalid @enderror"
                                    rows="5"
                                    required>{{ old('content') }}</textarea>

                                <!-- error message untuk content -->
                                @error('content')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <img src="" id="myImage" width="200px">
                                <input type="file" class="form-control @error('gambar') is-invalid @enderror" 
                                id="pictureInput" name="picture" multiple />
                                <textarea id="code" name="gambar" style="display: none"></textarea>

                                <!-- error message untuk title -->
                                @error('gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="penulis">Penulis</label>
                                <input type="text" class="form-control @error('penulis') is-invalid @enderror"
                                    name="penulis" value="{{ old('penulis') }}" required>

                                <!-- error message untuk title -->
                                @error('penulis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Save</button>
                            <a href="{{ route('blogartikel.index') }}" class="btn btn-md btn-secondary">back</a>

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

    <script>
        // demo purposes only
        const codeElem = document.getElementById("code");
        const showImage = document.getElementById("myImage");
        const fileInput = document.getElementById("pictureInput");

        // This is for storing the base64 strings
        let myFiles = {};

        fileInput.addEventListener("change", async (event) => {
        // clean up earliest items
        myFiles = {};
        const inputKey = fileInput.getAttribute("name");
        var files = event.srcElement.files;

        const filePromises = Object.entries(files).map((item) => {
            return new Promise((resolve, reject) => {
            const [index, file] = item;
            const reader = new FileReader();
            reader.readAsBinaryString(file);

            reader.onload = function (event) {
                // if it's multiple upload field then set the object key as picture[0], picture[1]
                // otherwise just use picture
                const fileKey = `${inputKey}${
                files.length > 1 ? `[${index}]` : ""
                }`;

                // Convert Base64 to data URI
                // Assign it to your object
                myFiles[fileKey] = `data:${file.type};base64,${btoa(
                event.target.result
                )}`;

                codeElem.textContent = myFiles['picture'];
                console.log(myFiles['picture']);
                showImage.src = myFiles['picture'];

                resolve();
            };
            reader.onerror = function () {
                console.log("can't read the file");
                reject();
            };
            });
        });
        });
    </script>
</body>

</html>