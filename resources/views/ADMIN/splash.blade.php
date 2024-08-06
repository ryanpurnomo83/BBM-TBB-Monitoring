<!DOCTYPE html>
<html>
<head>
    <title>Oil-Tank-Info</title>
    <link rel="stylesheet" href="{{ asset('ADMIN/bootstrap/css/bootstrap.min.css') }}">
    <style>
        .image-container {
            position: relative;
        }
        .responsive-img{
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <?php echo file_get_contents(public_path('ADMIN/html/splash.html')); ?>
    <img class="img-fluid responsive-img" src="{{ asset('slide1.jpg') }}" alt="image">
</body>
</html>