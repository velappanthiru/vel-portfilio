<?php 


    function url(){
        return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            $_SERVER['REQUEST_URI']
        );
    }
  
    define('SITE_URL', url());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo SITE_URL ?>public/images/icon/favicon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo SITE_URL ?>public/images/icon/favicon.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo SITE_URL ?>public/images/icon/favicon.png" />
    <title>Vel | Portfolio</title>
    <!-- Bootstrap 5 Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Font Awesome --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Google Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Css Style Link -->
    <link rel="stylesheet" href="<?php echo SITE_URL ?>public/css/style.min.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" class="scrollspy-example" tabindex="0">
  
    <header>
        <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand fw-800" href="#">
                    <span class="text-white px-2"><i class="fa-solid fa-angle-left text-white"></i> v</span>elappan
                    /
                    <i class="fa-solid fa-angle-right"></i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars text-white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#about">
                                <span>About</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#resume">
                                <span>Resume</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">
                                <span>Service</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blogs">
                                <span>My Blogs</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>