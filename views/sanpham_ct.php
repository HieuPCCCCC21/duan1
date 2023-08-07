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

        <div class="flex gap-2 my-3 justify-start radio-tile-group">
            <?php
            foreach ($list_size as $spct) :
            ?>
                <div class=" gap-1 my-3 radio-tile-group ">

                    <div class="input-container w-[60px] text-sm h-[40px]">
                        <input class="size-input" id="<?= $spct['name_size'] ?>"  type="radio" name="radio" value="<?= $spct['name_size'] ?>" onclick="showSelectedSize(this.value)">
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
                <button class="cursor-pointer minus-btn" onclick="handleMinus()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                    </svg>
                </button>
                <input class="w-[50px] text-center border" type="number" name="amount" id="amount" min="1" max="<?= $listspct['quantity'] ?>" oninput="handleInputChange()" value="1">
                <button class="cursor-pointer plus-btn" onclick="handlePlus()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </div>
            <div class="flex">
                <button class="addd border bg-black hover:bg-red-600 uppercase font-semibold 
                     w-[240px] h-[40px] rounded-sm text-white" type="button" onclick="cartAction('<?php echo $_GET['id'] ?>', '<?php echo $listspct['thumbnail'] ?>', '<?php echo $listspct['title'] ?>', '<?php echo $listspct['quantity'] ?>', '<?php echo $listspct['price'] ?>');">thêm vào giỏ</button>
            </div>
            <script>
                // Ham Ajax add html view cart
                function cartAction(v_id, v_img, v_title, v_quatiny, v_price) {
                    
                    const amountInput = document.getElementById("amount");
                    const amountValue = amountInput.value;
                    // Khai bao bien
                    var queryString = "";
                    // Neu id > 0 thi xu ly tiep
                    if (v_id > 0) {
                        // Gan array post
                        queryString = 'v_id=' + v_id + '&v_img=' + v_img + '&v_title=' + v_title + '&v_quatiny=' + v_quatiny + '&v_price=' + v_price;
                        tongtien= amountValue*v_price;   
                    }
                    jQuery.ajax({
                        // Link call    
                        url: "?act=addtocart",
                        // Data
                        data: queryString,
                        // Phuong thuc
                        type: "POST",
                        // Neu thanh cong thi add HTML
                        success: function(data) {
                            v_html = '<div class="flex items-center space-x-4 mt-4 px-4">';
                            v_html += '<img class="w-[70px] h-[70px] rounded" src="layout/images/products/' + v_img + '" >';
                            v_html += '<div class="">';
                            v_html += '<a href="" class="text-black font-medium">' + v_title + '<span id ="selected-size"></span></a>';
                            v_html += '<div>';
                            v_html += "<button class='text-[11px] text-red:500 font-bold rounded' onclick='removeProduct()'>Bỏ sản phẩm </button>";
                            v_html += '</div>';
                            v_html += '</div>';
                            v_html += '</div>';
                            v_html += '<div class="flex pl-[92px]">';
                            v_html += '<button class="cursor-pointer minus-btn" onclick="handleMinuss()">';
                            v_html += '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">';
                            v_html += '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />';
                            v_html += '</svg>';
                            v_html += ' </button>';
                            v_html += '<input class="w-[50px] text-center border" type="number" name="quantity" id="quantity"  oninput="handleInputChange()" min="1" max="' + v_quatiny + '" value = "'+amountValue+'">';
                            v_html += ' <button class="cursor-pointer plus-btn" onclick="handlePluss()">';
                            v_html += '  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">';
                            v_html += ' <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />';
                            v_html += ' </svg>';
                            v_html += ' </button>';
                            v_html += ' <p class="text-red-700 font-bold pl-[5px]">giá:<span id ="price">' + v_price + '</span>đ</p>'
                            v_html += '</div>';
                            v_html += '<div class="bg-white w-full p-2 mt-5">';
                            v_html += '<div class="flex justify-between">';
                            v_html += '<p  class="font-bold">Tổng tiền : </p>';
                            v_html += '<span id="totalPrice" class="font-bold">'+tongtien+'</span>';
                            v_html += '</div>';
                            v_html += '</div>';
                            // Add HTML vao view
                            $("#cart-item").html(v_html);
                        },
                        // Neu that bai thi tra ve ket qua fail
                        error: function() {}
                    });
                }
            </script>
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