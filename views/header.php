<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/css/splide.min.css">
    <script src="https://kit.fontawesome.com/7af42783d2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./layout/giaodiennguoidung/asset/style.css">
    <style>
        @keyframes rotateClockwise {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
        }
        @keyframes rotateCounterclockwise {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(-360deg);
        }
        }
        .icon-container:hover #animated-icon {
        animation: rotateClockwise 1s linear infinite;
        }
        .icon-container:not(:hover) #animated-icon {
        animation: rotateCounterclockwise 2s linear infinite;
        }
    </style>

</head>
<script>
    function changImage(id) {
        let imagePath = document.getElementById(id).getAttribute('src');
        document.getElementById('img-main').setAttribute('src', imagePath);
    }
</script>
<style>
    body {
        margin: 0;
        padding: 0px;

    }
</style>

<body style="font-family: 'Segoe UI', sans-serif;                                  
">
    <div class="container w-[1280px] m-auto">
        <!--header-->
        <div class="header">
            <div class="flex justify-between mt-5 items-center">
                <div class="evo-header-flex-item header-fill">
                    <div class="" onclick="openMenu()">
                        <img class="hover:bg-slate-950 hover:bg-opacity-20 h-[30px]" src="layout/images/logo.jpg" alt="" width="40px" >
                    </div>
                </div>
                <div class="evo-header-flex-item header-logo">
                    <a href="?act=main" class="logo-wrapper" title="thethaostore.vn">
                        <img src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/logo.png?1681911001649" class="w-[200px] h-[53px]" alt="">
                    </a>
                </div>
                <div class=" flex ">
                    <div class="" onclick="openTimkiem()">
                        <i class="fa-solid fa-magnifying-glass text-[25px] mr-5"></i>
                    </div>

                    <div onclick="opengioHang()">
                        <i class="fa-solid fa-bag-shopping text-[25px]"></i>
                    </div>

                </div>

            </div>