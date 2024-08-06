<!DOCTYPE html>
<html>
<head>
    <title>Oil-Tank-Info</title>
    <link rel="stylesheet" href="{{ asset('ADMIN/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <!-- <h1>Hello, @php echo 'World'; @endphp!</h1> -->

    <?php
    $htmlContent = file_get_contents(public_path('ADMIN/html/monitoring.html'));
    
    $dataRows = '
            
    ';

    foreach($monitoring as $m){
            $dataRows .= "<td>" . $m->nik . "</td>";
            $dataRows .= "<td>" . $m->level . "</td>";
            $dataRows .= "<td>" . $m->jarak . "</td>";
            $dataRows .= "<td>" . $m->timestamp . "</td>";
    }

    $htmlContent = str_replace('<h1>makan</h1>', $dataRows, $htmlContent);
    echo $htmlContent;
    ?>
</body>
</html>