<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTechnology | An IT Company Theme</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media.css">
</head>
<body>
    <header class="header">
        <div class="container-fluid">
            <div class="top-header">
                    <a href="index.php" class="logo"><img src="assets/medias/logo.png" alt=""></a>
                <div class="header-info-wrap">
                    <ul class="top-info topbar-ul">
                        <li class="topbar-li">
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="text-uppercase">address:</span> lorem ipsum
                        </li>
                        <li class="topbar-li">
                            <i class="fas fa-phone"></i>
                            <span class="text-uppercase">Call:</span> +91 1234567890
                        </li>
                        <li class="topbar-li">
                            <i class="fas fa-envelope"></i>
                            <a href="" class="topbar-items">
                            <span class="text-uppercase">email:</span>abc@gmail.com</a>
                        </li>
                        <a href="" class="get-btn" >get a quote</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-nav-bar">
            <div class="container-fluid">
                <div class="header-nav-wrap">
                    <nav class="nav">
                        <ul class="nav-ul">
                            <li class="nav-li">
                                <a href="index.php" class="nav-items <?php echo $link1; ?>">home</a>
                            </li>
                            <li class="nav-li">
                                <a href="about.php" class="nav-items <?php echo $link2; ?>">about</a>
                            </li>
                            <li class="nav-li">
                                <a href="what-we-do.php" class="nav-items <?php echo $link3; ?>">what we do</a>
                            </li>
                            <li class="nav-li">
                                <a href="blog.php" class="nav-items <?php echo $link4; ?>">blog</a>
                            </li>
                            <li class="nav-li">
                                <a href="contact.php" class="nav-items <?php echo $link5; ?>">contact us</a>
                            </li>
                        </ul>
                    </nav>
                    <ul class="nav-ul">  
                        <li class="nav-li mr-24">
                            <a href="" class="nav-items px-0">
                                <i class="fas fa-user mr-8"></i>log in/sign in
                            </a>
                        </li>
                        <li class="nav-li">
                            <a href="" class="nav-items px-0"><i class="fa fa-search"></i></a>
                        </li>
                    </ul>
                    <div class="burger" id="burger" onclick="toggle()">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>