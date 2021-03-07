<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
  
<?php
    if ($_SESSION['logged']['permission_id']) {
        switch ($_SESSION['logged']['permission_id']) {
            case '1':
                echo "Strona użytkownika";
                break;            
                
            case '2':
                echo "Strona moderatora";
                break;            
                
            case '3':
                echo "Strona admin";
                break;
        }
    }
  ?>
  
  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>