<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css">
</head>

<body>
    @include('admin.tools.header')

    <div class="container-fluid">
        <div class="row">
            @include('admin.tools.sidebar')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    <script>
        $(document).ready(function() {
            // Mendengarkan klik pada elemen dengan class note-remove
            $('.note-remove button').on('click', function() {
                // Mendapatkan URL gambar dari editor menggunakan JavaScript murni
                var images = document.querySelectorAll('.note-editor img');
                var imageUrl = images.length > 0 ? images[0].getAttribute('src') : null;

                // Gantilah dengan nilai slug yang sesuai
                var slug = '{{ $slug ?? '' }}';

                // Tambahkan ini untuk memastikan bahwa nilai $slug terdefinisi
                console.log('Slug:', slug);

                // Buat formulir tersembunyi
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = '/admin/english/' + slug + '/remove-image';
                form.style.display = 'none';

                // Tambahkan input untuk imageUrl dan _token
                var inputImageUrl = document.createElement('input');
                inputImageUrl.type = 'hidden';
                inputImageUrl.name = 'imageUrl';
                inputImageUrl.value = imageUrl;

                var inputToken = document.createElement('input');
                inputToken.type = 'hidden';
                inputToken.name = '_token';
                inputToken.value = '{!! csrf_token() !!}';

                // Tambahkan input ke dalam formulir
                form.appendChild(inputImageUrl);
                form.appendChild(inputToken);

                // Tambahkan formulir ke dalam dokumen
                document.body.appendChild(form);

                // Kirim formulir
                form.submit();
            });
        });
    </script>



</body>

</html>
