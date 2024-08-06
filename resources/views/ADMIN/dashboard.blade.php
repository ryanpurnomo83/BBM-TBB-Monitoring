<!DOCTYPE html>
<html>
<head>
    <title>Oil-Tank-Info</title>
    <link rel="stylesheet" href="{{ asset('ADMIN/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <?php echo file_get_contents(public_path('ADMIN/html/dashboard.html')); ?>
    <script src = "{{ asset('ADMIN/js/dashboard-function.js') }}"></script>
    <script src = "{{ asset('ADMIN/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>