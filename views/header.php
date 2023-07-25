
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/css/splide.min.css">
    <link rel="stylesheet" href="asset/style.css">
    <script src="https://kit.fontawesome.com/7af42783d2.js" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;700&family=Inter&family=Kanit:wght@400;700&family=Play:wght@700&family=Roboto+Mono&display=swap"
        rel="stylesheet">
    
</head>

<body style="font-family: 'DM Sans', sans-serif;
font-family: 'Inter', sans-serif;
font-family: 'Kanit', sans-serif;
font-family: 'Play', sans-serif;
font-family: 'Roboto Mono', monospace;
">
    <div class="container w-[1280px] m-auto">
        <!--header-->
        <div class="header">
            <div class="flex justify-between mt-5 items-center">
                <div class="evo-header-flex-item header-fill">
                    <div class="" onclick="openMenu()">
                        <img class="hover:bg-slate-950 hover:bg-opacity-20 " src="layout/images/logo.jpg" alt="" width="30%">
                    </div>
                </div>
                <div class="evo-header-flex-item header-logo">
                    <a href="/" class="logo-wrapper" title="thethaostore.vn">
                        <img src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/logo.png?1681911001649"
                            alt="">
                    </a>
                </div>
                <div class=" flex ">
                    <div class="" onclick="openTimkiem()">
                        <i class="fa-solid fa-magnifying-glass fa-2xl mr-5"></i>
                    </div>

                    <div onclick="opengioHang()">
                        <i class="fa-solid fa-bag-shopping fa-2xl"></i>
                    </div>

                </div>

            </div>