<?php include_once "header.php"?>
<main class="text-center my-10">
    <div class="header">
        <div class="mt-3">
            <div class="parallax bg-[url(https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/cat-banner-1.jpg?1681911001649)] my-10 h-[700px]  float-left bg-cover bg-no-repeat bg-center bg-fixed 
                w-[100vw] relative left-[calc(-50vw+50%)]">
            </div>
        </div>
    </div>
    <div class="">
        <p>Trang chủ / Danh mục đồ nam </p>
        <div class="flex justify-between bg-slate-100">
            <ul class=" bg-gray-100 rounded-xl py-4 ">
                <li class="font-semibold flex text-stone-500 ">
                    <div class="box">
                        <p class="flex" href="trangchu.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5L7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                            </svg>
                            <button class="mx-3 text-xl show">Sắp xếp theo</button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        <div class=" border chitiet ahihi mr-5 text-xl">
                            <div class="mr-[60px]">
                                <input type="checkbox" value="coding">
                                <label for="">Tên A-Z</label>
                            </div>
                            <div class="mr-[60px]">
                                <input type="checkbox" value="coding">
                                <label for=""> Tên Z-A</label>
                            </div>
                            <div class="mr-[42px]">
                                <input type="checkbox" value="coding">
                                <label for="">Hàng mới</label>
                            </div>
                            <div class="mr-[16px]">
                                <input type="checkbox" value="coding">
                                <label for="">Giá tăng dần</label>
                            </div>
                            <div class="mr-[14px]">
                                <input type="checkbox" value="coding">
                                <label for="">Giá giảm dần</label>
                            </div>
                        </div>
                        </p>
                    </div>
                    <div class="box">
                        <p class="flex mx-10" href="thongtintk.html"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                            <button class="mx-3 text-xl show">Thương hiệu</button>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        <div class=" border chitiet ahihi mr-5 text-xl">
                            <div class="mr-[67px]">
                                <input type="checkbox" value="coding">
                                <label for="">lacoste</label>
                            </div>
                            <div class="mr-[72px]">
                                <input type="checkbox" value="coding">
                                <label for="">Uniqlo</label>
                            </div>

                        </div>
                        </p>
                    </div>
                    <div class="box">
                        <p class="flex" href="donhang.html"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                            <button class="mx-3 text-xl show">Loại sản phẩm</button>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        <div class=" border chitiet ahihi  mr-5 text-xl">
                            <div class="mr-[60px]">
                                <input type="checkbox" value="coding">
                                <label for="">Đồ Bộ Thể Thao</label>
                            </div>

                        </div>
                        </p>
                    </div>
                </li>
            </ul>

        </div>
    </div>
    <section class="slider-container">
        <div class="container">
            <div class="swiper card-slider">
                <div class="swiper-wrapper grid grid-cols-4 ">
                    <?php
                    foreach ($list_nam as $nam) :                 
                    ?>
                        <div class="swiper-slide mt-5">
                            <div class="img-box ">
                                <img src="layout/images/products/<?= $nam['thumbnail'] ?>" alt="">
                                <p class="font-[600] text-[14px]"><?= $formatted_price = number_format($nam['price'], 0, ',')?> đ</p>
                                <a class="hover:text-red-500 font-[500] text-[13px]" href="?act=sanpham_ct&id=<?= $nam['id'] ?>"><?= $nam['title'] ?></a>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>

                </div>

            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".card-slider", {

            slidesPerView: 4,
            speed: 1000,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <!--Thương hiệu nổi bật-->
    <div class="flex   justify-around">
        <div><img class="w-[100px] h-[100px]" src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/partner_1.jpg?1681911001649" alt=""></div>
        <div><img class="w-[100px] h-[100px]" src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/partner_2.jpg?1681911001649" alt=""></div>
        <div><img class="w-[100px] h-[100px]" src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/partner_4.jpg?1681911001649" alt=""></div>
        <div><img class="w-[100px] h-[100px]" src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/partner_5.jpg?1681911001649" alt=""></div>
        <div><img class="w-[100px] h-[100px]" src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/partner_7.jpg?1681911001649" alt=""></div>
    </div>
</main>
<?php include_once "footer.php"?>