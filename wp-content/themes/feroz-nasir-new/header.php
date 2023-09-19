<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/css/icons.css"> -->
    <!-- <link href='https://css.gg/menu-right.css' rel='stylesheet'> -->

    <!-- <link rel="stylesheet" href="/input.css"> -->
    <!-- <script src="/js/jquery.js"></script> -->
    <?php wp_head(); ?>
    <title>Feroz Nasir</title>
</head>

<body>
    <header class="bg-black h-20">
        <div class="header bg-black h-20">
            <div class="container h-full flex justify-between w-[90vw] m-auto sm:w-[80vw] sm:m-auto">
                <div class="logo self-center left">
                <a href="<?php echo site_url() ?>">
                    <h1 class="text-white cursor-pointer hover:text-yellow-400"
                        style="font-family: 'Syne Tactile', cursive;">FEROZ NASIR</h1> </a>
                        <!-- <a href="<?php echo site_url() ?>"><img class="w-10" src="<?php echo get_template_directory_uri() ?>/all-img/LOGO.jpg" alt=""></a> -->
                </div>

                <nav class="right self-center">

                    <div id="ham-icon" class=" hamburger flex space-x-2 cursor-pointer h-full md:hidden">
                        <!-- <img id="ham-icon" class="from-black cursor-pointer hover:via-yellow-500w-400" src="images/icons8_menu.ico" alt=""> -->
                        <div class="icons self-center h-8 pt-4">
                            <i class="gg-menu-right text-white self-center cursor-pointer "></i>
                        </div>
                        <h3 class="text-white self-center cursor-pointer hover:text-yellow-300">Menu</h3>
                    </div>

                    <ul class="hidden md:flex space-x-8 text-white">
                    <li <?php if(is_page('home')) echo 'class = "current-item"' ?>><a class="hover:text-yellow-300 link-underline" href="<?php echo site_url() ?>">Home</a></li>
                        <li <?php if(is_page('books')) echo 'class = "current-item"' ?> ><a class="hover:text-yellow-300 link-underline" href="<?php echo site_url('/books') ?>">Books</a></li>
                        <!-- <li><a class="hover:text-yellow-300 link-underline" href="#">Urdu Bazar</a></li> -->
                        <li <?php if(is_page('contact')) echo 'class = "current-item"' ?>><a class="hover:text-yellow-300 link-underline" href="<?php echo site_url('/contact') ?>">Contact us</a></li>
                        <li <?php if(is_page('about')) echo 'class = "current-item"' ?>><a class="hover:text-yellow-300 link-underline" href="<?php echo site_url('/about') ?>">About us</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="links bg-gray-100 hidden md:hidden py-6 relative z-[2]">
            <ul class="flex flex-col items-center text-xl space-y-10 text-black">
            <li <?php if(is_page('home')) echo 'class = "current-item"' ?>><a class="hover:text-yellow-300 link-underline" href="<?php echo site_url() ?>">Home</a></li>
            <li <?php if(is_page('books')) echo 'class = "current-item"' ?> ><a class="hover:text-yellow-300 link-underline" href="<?php echo site_url('/books') ?>">Books</a></li>
                <!-- <li><a class="hover:text-yellow-400" href="#">Urdu Bazar</a></li> -->
                <!-- <li><a class="hover:text-yellow-400" href="#">Home</a></li> -->
                <li <?php if(is_page('contact')) echo 'class = "current-item"' ?>><a class="hover:text-yellow-300 link-underline" href="<?php echo site_url('/contact') ?>">Contact us</a></li>
                <li <?php if(is_page('about')) echo 'class = "current-item"' ?>><a class="hover:text-yellow-300 link-underline" href="<?php echo site_url('/about') ?>">About us</a></li>
            </ul>
        </div>

    </header>