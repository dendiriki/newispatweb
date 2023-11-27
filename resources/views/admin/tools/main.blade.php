<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        (function () {
            // Ganti HOST dengan URL endpoint Anda
            var HOST = "http://10.164.247.84:8085/admin/english/" + slug + "/images";



            document.addEventListener("trix-attachment-add", function (event) {
                if (event.attachment.file) {
                    uploadFileAttachment(event.attachment);
                }
            });

            function uploadFileAttachment(attachment) {
                uploadFile(attachment.file, setProgress, setAttributes);

                function setProgress(progress) {
                    attachment.setUploadProgress(progress);
                }

                function setAttributes(attributes) {
                    // Mengganti 'content' dengan URL penyimpanan yang benar
                    attachment.setAttributes({
                        url: attributes.url,
                        href: attributes.url,  // Menggunakan url sebagai URL gambar
                        content: attributes.url // Menggunakan url sebagai URL gambar
                    });
                }
            }

            function uploadFile(file, progressCallback, successCallback) {
                var key = createStorageKey(file);
                var formData = createFormData(key, file);
                var xhr = new XMLHttpRequest();

                xhr.open("PUT", HOST, true);


                xhr.upload.addEventListener("progress", function (event) {
                    var progress = (event.loaded / event.total) * 100;
                    progressCallback(progress);
                });

                xhr.addEventListener("load", function (event) {
                    if (xhr.status === 200) { // Ganti ke 200 karena umumnya status 200 menunjukkan berhasil
                        var response = JSON.parse(xhr.responseText);
                        var attributes = {
                            url: HOST + response.key,
                            href: HOST + response.key + "?content-disposition=attachment"
                        };
                        successCallback(attributes);
                    }
                });

                xhr.send(formData);
            }

            function createStorageKey(file) {
                var date = new Date();
                var day = date.toISOString().slice(0, 10);
                var name = date.getTime() + "-" + file.name;
                return ["tmp", day, name].join("/");
            }

            function createFormData(key, file) {
                var data = new FormData();
                data.append("key", key);
                data.append("Content-Type", file.type);
                data.append("file", file);
                return data;
            }
        })();
    </script>

</body>

</html>
