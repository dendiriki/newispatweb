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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/dashboard.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,
                focus: true,
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather', 'Verdana'],
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                callbacks: {
                    onInit: function() {
                        // Set default table styling on table creation
                        $('#summernote').on('summernote.change', function() {
                            var content = $('#summernote').summernote('code');
                            var $content = $('<div />').html(content);
                            $content.find('table').each(function() {
                                var $table = $(this);
                                // Apply custom classes
                                $table.addClass('custom-table custom-table-bordered');
                                $table.css({
                                    'border': '2px solid #000',
                                    'border-collapse': 'collapse'
                                });
                                $table.find('td').css({
                                    'border': '2px solid #000',
                                    'padding': '0.75pt'
                                });
                                $table.find('thead').css({
                                    'background-color': 'blue',
                                    'color': 'white'
                                });
                                $table.find('th').css({
                                    'background-color': 'blue',
                                    'color': 'white'
                                });

                                $table.find('tr:first').addClass('table-primary');

                                // Wrap table in custom responsive div
                                if (!$table.parent().hasClass('custom-table-responsive')) {
                                    $table.wrap('<div class="custom-table-responsive"></div>');
                                }
                            });
                            $('#summernote').summernote('code', $content.html());
                        });
                    }
                }
            });
        });
    </script>
</body>

</html>
