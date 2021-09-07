<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Shouts Upload</title>
    <style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .imgPreview img {
            padding: 8px;
            max-width: 100px;
        } 
    </style>
</head>

<body>

    <div class="container mt-5">
        <h3 class="text-center mb-5">Shouts Upload</h3>
        <form action="{{route('shoutUpload')}}" method="post" enctype="multipart/form-data">
            @csrf
           

            <div class="user-image mb-3 text-center">
                <div class="imgPreview"> </div>
            </div>            

            <div class="custom-file">
                <input type="file" name="File[]" class="custom-file-input" id="images" multiple="multiple">
                <label class="custom-file-label" for="images">Choose Shouts</label>
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Upload Shouts
            </button>
        </form>
    </div>
  
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }


        };

        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
        });    
    </script>
</body>
</html>