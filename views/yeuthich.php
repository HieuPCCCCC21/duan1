<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yêu thích</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/css/splide.min.css">
    <script src="https://kit.fontawesome.com/7af42783d2.js" crossorigin="anonymous"></script>
</head>

<body style="font-family: 'Segoe UI', sans-serif;
">
    <div class="container w-[1280px] m-auto">
        <!--header-->
        <div class="header">
            <div class="flex justify-between mt-5 items-center">
                <div class="evo-header-flex-item header-fill">
                    <div class="" onclick="openMenu()">
                        <img class="hover:bg-slate-950 hover:bg-opacity-20 " src="./image/Vector.png" alt="">
                    </div>
                </div>
                <div class="evo-header-flex-item header-logo">
                    <a href="/" class="logo-wrapper" title="thethaostore.vn">
                        <img src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/logo.png?1681911001649" alt="">
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
        </div>
    </div>
    <ul class="w-full bg-slate-100 py-4 ">
        <li class="font-semibold text-stone-500 indent-80">
            <a href="trangchu.html">Trang chủ / </a>
            <a href="diachi.html">Yêu thích</a>
        </li>
    </ul> <br>
    <div class="container ">
        <div class="  ml-[300px] ">

            <div class="w-full shadow  p-4  grid grid-cols-4 gap-4">
                <?php $i = 0; ?>
                <?php
                foreach ($_SESSION['love'] as $item) :
                ?>
                    <div class="space-y-2">
                        <img src="layout/images/products/<?= isset($item[3]) ? $item[3] : "" ?>" alt="">
                        <p><?= isset($item[1]) ? $item[1] : "" ?></p>
                        <a class="hover:text-red-500" href=""><?= isset($item[2]) ? $item[2] : "" ?></a>

                        <a href="?act=yeu_thich_del&id_yt=<?= $i ?>">
                            <div class="btns float-right   ">
                                <Button onclick="Toggle1()" id="btnh1" class="btn"><i class="fa-solid fa-heart fa-xl" style="color: #f20707;"></i></Button>
                            </div>
                        </a>
                    </div>
                    <?php $i++?>
                <?php
                endforeach;
                ?>


                <!-- <div class="space-y-2">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/428/250/products/c6016700-2a47-48f2-8cf2-506a7c42fab3-jpeg.jpg?v=1686122778000" alt="">
                    <p>560.000đ</p>
                    <a class="hover:text-red-500" href="">Bộ Quần Áo Thể Thao Nam Uniqlo Tennis Kei
                        Nishikori</a>
                    <div class="btns float-right   ">
                        <Button onclick="Toggle1()" id="btnh1" class="btn"><i class="fa-solid fa-heart fa-xl" style="color: #f20707;"></i></Button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
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
    <!-- END TOP SẢN PHẨM CHẠY-->
    <!--Thương hiệu nổi bật-->
    <div class="text-center">
        <p class="text-2xl underline  mt-10"><b>THƯƠNG HIỆU NỔI BẬT</p>
    </div>
    <div class="flex   justify-around">
        <div><img class="w-[100px] h-[100px]" src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/partner_1.jpg?1681911001649" alt=""></div>
        <div><img class="w-[100px] h-[100px]" src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/partner_2.jpg?1681911001649" alt=""></div>
        <div><img class="w-[100px] h-[100px]" src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/partner_4.jpg?1681911001649" alt=""></div>
        <div><img class="w-[100px] h-[100px]" src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/partner_5.jpg?1681911001649" alt=""></div>
        <div><img class="w-[100px] h-[100px]" src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/partner_7.jpg?1681911001649" alt=""></div>
    </div>
    </main>
    <!--End Main-->

    <!--footer-->
    <footer>
        <div class=" grid grid-cols-4 gap-5 bg-slate-100 px-10 leading-[50px]">
            <div class="">
                <img class="w-[200px]" src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/footer-logo.png?1681911001649" alt="">
                <p>Địa chỉ: 20 Nghĩa Đô - Q.Cầu Giấy - TP.Hà Nội</p>
                <p>Email:</p>
                <p>Điện thoại: 0835 588 555</p>
                <p>Zalo: 0835 588 555</p>
            </div>
            <div>
                <p>Sản phẩm</p>
                <p>Trang chủ</p>
                <p>Giới thiệu</p>
                <p>Sản phẩm</p>
                <p>Liên hệ</p>
                <p>Cộng Tác Viên</p>
            </div>
            <div>
                <p>Hỗ trợ khách hàng</p>
                <p>Chính sách thanh toán</p>
                <p>Chính sách vận chuyển </p>
                <p>Chính sách bảo mật</p>
            </div>
            <div>
                <p>Fanpage</p>
                <img src="https://scontent.fhan17-1.fna.fbcdn.net/v/t39.30808-6/340968158_764848581834419_5670796682879734898_n.png?stp=dst-png_s403x403&_nc_cat=100&ccb=1-7&_nc_sid=dd9801&_nc_ohc=DoB29IUrJUgAX8Nk0DL&_nc_ht=scontent.fhan17-1.fna&edm=ADwmN6EEAAAA&oh=00_AfA8KokMm8bRUXMzcd0f9F5ZsMbnYnNZKHaaQwo7uScoYA&oe=64A0917B" alt="">
            </div>
        </div>
        <div class=" bg-red-800 my-10 h-[100px] flex justify-between items-center  ">
            <div>
                <p class="text-white pl-[300px] text-base">Nhận thông tin khuyến mãi mới nhất từ Thể Thao Store</p>
            </div>
            <div class="pr-[300px]">
                <form class="border rounded-md" action="">
                    <input class="text-xl pl-5 h-[50px] max-w-[300px]" type="text" placeholder="Địa Chỉ Email">
                    <button class="text-white w-[115px]">Đăng ký</button>
                </form>
            </div>
        </div>


    </footer>
    <div class="fixed top-0 left-0 bottom-0 right-0 justify-end hidden gio-hang">
        <div class="flex justify-between w-1/4 h-full px-4 uppercase pt-5 bg-slate-100 ">
            <ul class="text-black h-[50px]">
                <p class="uppercase text-2xl">Giỏ Hàng</p>
                <!-- <div class="mt-10 gap-0">
                    
                        <input class="border h-[60px] w-[400px] pl-5 text-xl" type="text" name="" id="">
                        <button class="bg-red-700 hover:bg-red-600 h-[60px] w-[80px]" type="submit "><i class="fa-solid fa-magnifying-glass fa-2xl " ></i></button>
                </div> -->
            </ul>
            <div class="">
                <button onclick="closegioHang() ">
                    <i class="fa-solid fa-xmark fa-2xl" style="color: #27282b;"></i>
                </button>
            </div>
        </div>
    </div>
    </script>
    <div class="fixed top-0 left-0 bottom-0 right-0 justify-end hidden tim-kiem">
        <div class="flex justify-between w-1/4 h-full px-4 uppercase pt-5 bg-slate-100 ">
            <ul class="text-black h-[50px]">
                <p class="uppercase text-2xl">Tìm kiếm sản phẩm</p>
                <div class="mt-10 gap-0">

                    <input class="border h-[60px] w-[300px] pl-5 text-xl" type="text" name="" id="">
                    <button class="bg-red-700 hover:bg-red-600 h-[60px] w-[80px]" type="submit "><i class="fa-solid fa-magnifying-glass fa-2xl "></i></button>
                </div>
            </ul>
            <div class="">
                <button onclick="closeTimkiem() ">
                    <i class="fa-solid fa-xmark fa-2xl" style="color: #27282b;"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="fixed top-0 left-0 bottom-0 right-0 justify-start hidden nav-bar">
        <div class="flex justify-between w-1/4 h-full px-4 uppercase pt-5 bg-black ">
            <ul class="text-white h-[50px]">
                <li class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                    <a class="text-red-800 border-b-1" href="trangchu.html">TRANG CHỦ</a>
                </li>
                <li class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                    <a class="hover:text-red-800" href="gioithieu.html">GIỚI THIỆU</a>
                </li>
                <li class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                    <a class="hover:text-red-800" href="">SẢN PHẨM</a>
                </li>
                <li class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                    <a class="hover:text-red-800" href="">LIÊN HỆ</a>
                </li>
                <li class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                    <a class="hover:text-red-800" href="">YÊU THÍCH</a>
                </li>


                <li class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
            after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                    <a class="hover:text-red-800" href="dangky.html">ĐĂNG KÝ/ĐĂNG NHẬP</a>
                </li>
            </ul>
            <div class="">
                <button onclick="closeMenu()">
                    <i class="fa-solid fa-xmark fa-2xl " style="color: #ecf3fd;"></i>
                </button>
            </div>
        </div>
    </div>




    <!--End footer-->
    </div>

    <script>
        const menuhidden = document.querySelector('.gio-hang');
        const menuhidden2 = document.querySelector('.tim-kiem');
        const menuhidden1 = document.querySelector('.nav-bar');

        const opengioHang = () => {
            menuhidden.classList.remove('hidden');
            menuhidden.classList.add('flex');
        };
        const closegioHang = () => {
            menuhidden.classList.remove('flex');
            menuhidden.classList.add('hidden');
        };

        const openMenu = () => {
            menuhidden1.classList.remove('hidden');
            menuhidden1.classList.add('flex');
        };
        const closeMenu = () => {
            menuhidden1.classList.remove('flex');
            menuhidden1.classList.add('hidden');
        };

        const openTimkiem = () => {
            menuhidden2.classList.remove('hidden');
            menuhidden2.classList.add('flex');
        };
        const closeTimkiem = () => {
            menuhidden2.classList.remove('flex');
            menuhidden2.classList.add('hidden');
        };
        var btnvar1 = document.getElementById('btnh1');

        function Toggle1() {
            if (btnvar1.style.color == "red") {
                btnvar1.style.color = "gray"
            } else {
                btnvar1.style.color = "red"
            }
        };
    </script>
</body>

</html>