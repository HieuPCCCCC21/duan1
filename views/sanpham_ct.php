<?php include("header.php"); ?>
<div class="grid grid-cols-2 ">
    <div class="">
        <ul>
            <li><img src="image/sg-11134201-23010-pz67slqja9lv86-1678845268202.webp" onclick="changImage('one')" id="one" alt=""></li>
            <li><img src="image/sg-11134201-23010-5snzkxp70xlv7e-1678845268202.webp" onclick="changImage('two')" id="two" alt=""></li>
            <li><img src="image/sg-11134201-23010-k83onuyia9lv37-1678845268202.webp" onclick="changImage('three')" id="three" alt=""></li>
            <li><img src="image/sg-11134201-23010-oodwq2p70xlv56-1678845268202.webp" onclick="changImage('for')" id="for" alt=""></li>
            <li></li>
        </ul>
        <div class="" id="main-image">
            <img src="layout/images/products/<?= $listspct['thumbnail'] ?>" alt="" id="img-main">

        </div>
    </div>
    <div class="float-left mt-5 my-3">
        <?php
        if (isset($listspct)) {
            extract($listspct);
            $formatted_price = number_format($listspct['price'], 0, ',');
        }
        ?>
        <p class="font-[600] text-xl my-3"><?= $listspct['name'] ?></p>
        <p class="my-1 text-[18px]"><?= $listspct['title'] ?></p>
        <p class="font-bold text-lg my-1"><?= $formatted_price ?> đ</p>
        <p class="my-1">Kích cỡ</p>
        <form action="?act=show_gh" method="POST">
            <div class="flex gap-2 my-3 justify-start radio-tile-group">
                <?php
                foreach ($list_size as $spct) :
                ?>
                    <div class=" gap-1 my-3 radio-tile-group ">

                        <div class="input-container w-[60px] text-sm h-[40px]">
                            <input class="size-input" id="<?= $spct['name_size'] ?>" type="radio" name="name_size_gh" value="<?= $spct['name_size'] ?>" onclick="showSelectedSize(this.value)">
                            <div class="radio-tile w-20%">
                                <div> <?= $spct['name_size'] ?></div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
            <div class="flex gap-5">
                <div class="buy-amount flex">
                    <button class="cursor-pointer minus-btn" type="button" onclick="handleMinus()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                        </svg>
                    </button>
                    <input class="w-[50px] text-center border" type="number" name="quantity_gh" id="amount" min="1" max="<?= $listspct['quantity'] ?>" oninput="handleInputChange()" value="1">
                    <button class="cursor-pointer plus-btn" type="button" onclick="handlePlus()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                </div>
                <div> 
                     <input type="hidden" value="<?= $_GET['id'] ?>" name="id_sp">
                    <input type="hidden" value="<?= $_GET['id'] ?>" name="id_gh">
                    <input type="hidden" value="<?= $listspct['thumbnail'] ?>" name="thumbnail_gh">
                    <input type="hidden" value="<?= $listspct['title'] ?>" name="title_gh">
                    <input type="hidden" value="<?= $listspct['price'] ?>" name="price_gh">
                </div>
                <div class="flex">
                    <button class="addd border bg-black hover:bg-red-600 uppercase font-semibold 
                     w-[240px] h-[40px] rounded-sm text-white add-to-cart-btn" type="submit" name="button_gh" data-product-id="<?= $product_id ?>" data-product-size="<?= $product_size ?>">thêm vào giỏ</button>
                </div>
        </form>
        <!-- yeu thich -->
        <form action="?act=show_yt" method="POST">
            <div>
                <input type="hidden" value="<?= $_GET['id'] ?>" name="id_ythich">
                <input type="hidden" value="<?= $listspct['name'] ?>" name="name_yt">
                <input type="hidden" value="<?= $listspct['price'] ?>" name="price_yt">
                <input type="hidden" value="<?= $listspct['title'] ?>" name="title_yt">
                <input type="hidden" value="<?= $listspct['thumbnail'] ?>" name="thumbnail_yt">
            </div>
            <button onclick="Toggle1()" id="btnh1" class="btn" type="submit" name="button_yt"><i class="fas fa-heart"></i></button>
        </form>
    </div>
    <div id="boxs">
        <div class="box">
            <button class="flex font-[600] text-[14px] items-center">
                <div class="show my-3  ">Xem Thêm Thông Tin Sản Phẩm</div>
                <div class="pl-[420px]">
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
            </button>
            <div class="des">
                <p class="text-[13px]  italic my-3"><?= $listspct['desciption'] ?></p>
            </div>
        </div>
    </div>
</div>
</div>
<div class="">
    <p class="text-2xl underline capitalize mt-10 text-center"><b>CÓ THỂ BẠN CŨNG THÍCH</b></p>

</div>
<!--silde show-->
<div class="container mx-auto mt-5">
    <div class="splide">
        <div class="splide__arrows">
            <button class="bg-gray-900 shadow splide__arrow splide__arrow--prev">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </button>
            <button class="bg-gray-900 shadow splide__arrow splide__arrow--next">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </button>
        </div>
        <div class="splide__track  grid grid-cols-4">
            <div class="splide__list gap-x-2">
                <?php
                foreach ($all_product_same as $pr) :
                    $formatted_price = number_format($pr['price'], 0, ',');
                ?>
                    <div class="w-full  p-4 shadow splide__slide lg:max-w-lg">
                        <div class="space-y-2">
                            <img src="layout/images/products/<?= $pr['thumbnail'] ?>" alt="">
                            <p class="text-[14px] font-[600] text-red-500"><?= $formatted_price ?> đ</p>
                            <a class="hover:text-red-500 text-[13px] font-[500]" href="?act=sanpham_ct&id=<?= $pr['id'] ?>"><?= $pr['title'] ?></a>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/js/splide.min.js"></script>
<script>
    var splide = new Splide('.splide', {
        type: 'loop',
        speed: 1000,
        autoplay: true,
    });

    splide.mount();
</script>

<div class=" text-center">
    <p class="text-2xl underline capitalize mt-10"><b>SAN PHAM LIEN QUAN</b></p>
</div>
<section class="slider-container">
    <div class="container">
        <div class="swiper card-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="img-box ">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/428/250/products/8147025c-7c57-4bb9-be8d-006fe3d63a01-jpeg.jpg?v=1686125334000" alt="">
                        <p class="">560.000đ</p>
                        <a class="hover:text-red-500 " href="">Bộ Quần Áo Thể Thao Nam Uniqlo Tennis Kei
                            Nishikori</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/428/250/products/7194b4b0-c337-4263-9a68-f94f670bbf32-jpeg.jpg?v=1686139624000" alt="">
                        <p class="">560.000đ</p>
                        <a class="hover:text-red-500 " href="">Bộ Quần Áo Thể Thao Nam Uniqlo Tennis Kei
                            Nishikori</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/428/250/products/vn-11134201-23020-hisuxzlb2lnvac-1676561077053.jpg?v=1677725815020" alt="">
                        <p class="">560.000đ</p>
                        <a class="hover:text-red-500 " href="">Bộ Quần Áo Thể Thao Nam Uniqlo Tennis Kei
                            Nishikori</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/428/250/products/0ede8ea8-8ff1-4446-b236-7bad85524e80-jpeg.jpg?v=1686152614000" alt="">
                        <p class="">560.000đ</p>
                        <a class="hover:text-red-500 " href="">Bộ Quần Áo Thể Thao Nam Uniqlo Tennis Kei
                            Nishikori</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/428/250/products/vn-11134201-23020-hisuxzlb2lnvac-1676561077053.jpg?v=1677725815020" alt="">
                        <p class="">560.000đ</p>
                        <a class="hover:text-red-500 " href="">Bộ Quần Áo Thể Thao Nam Uniqlo Tennis Kei
                            Nishikori</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-box ">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/428/250/products/vn-11134201-23020-hisuxzlb2lnvac-1676561077053.jpg?v=1677725815020" alt="">
                        <p class="">560.000đ</p>
                        <a class="hover:text-red-500 " href="">Bộ Quần Áo Thể Thao Nam Uniqlo Tennis Kei
                            Nishikori</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
<?php include_once 'footer.php' ?>