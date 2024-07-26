<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Simple MVC PHP</title>
    <!-- Bootstrap core CSS -->
    <link href="/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/css/mystyle.css" rel="stylesheet">
    <script src="/public/js/jquery-3.3.1.js"></script>
    <!-- Custom fonts for this template -->
    <link href="/public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="/public/css/clean-blog.min.css" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="public/img/a.ico" type="image/x-icon"> -->
</head>
<body>
<!-- Main Content -->
<div class="container">

    <!-- INCLUDE -->
    <!-- include ROOT . DS . 'views' . DS . $template_file; -->
    <?php $a = "/views/"; ?>
    <?php include ROOT . $a . $template_file; ?>

<!-- Bootstrap core JavaScript -->
<script src="/public/vendor/jquery/jquery.min.js"></script>
<script src="/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="/public/js/clean-blog.min.js"></script>
</body>
</html>
