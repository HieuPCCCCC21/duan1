<footer>
            <div class=" grid grid-cols-4 gap-5 bg-slate-100 px-10 leading-[50px]">
                <div class="">
                    <img class="w-[200px]"
                        src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/footer-logo.png?1681911001649"
                        alt="">
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
                    <img src="https://scontent.fhan17-1.fna.fbcdn.net/v/t39.30808-6/340968158_764848581834419_5670796682879734898_n.png?stp=dst-png_s403x403&_nc_cat=100&ccb=1-7&_nc_sid=dd9801&_nc_ohc=DoB29IUrJUgAX8Nk0DL&_nc_ht=scontent.fhan17-1.fna&edm=ADwmN6EEAAAA&oh=00_AfA8KokMm8bRUXMzcd0f9F5ZsMbnYnNZKHaaQwo7uScoYA&oe=64A0917B"
                        alt="">
                </div>
            </div>
            <div class=" bg-red-800 my-10 h-[100px] flex justify-between items-center  ">
                <div>
                    <p class="text-white pl-[300px] text-base">Nhận thông tin khuyến mãi mới nhất từ Thể Thao Store</p>
                </div>
                <div class="pr-[300px]">
                    <form class="border rounded-md" action="">
                        <input class="text-xl pl-5 h-[50px] max-w-[300px]" type="text" placeholder="Địa Chỉ Email">
                        <button class="text-white ">Đăng ký</button>
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
                        <button class="bg-red-700 hover:bg-red-600 h-[60px] w-[80px]" type="submit "><i
                                class="fa-solid fa-magnifying-glass fa-2xl "></i></button>
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
                    <li
                        class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                        <a class="text-red-800 border-b-1" href="?act=index">TRANG CHỦ</a>
                    </li>
                    <li
                        class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                        <a class="hover:text-red-800" href="">GIỚI THIỆU</a>
                    </li>
                    <li
                        class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                        <a class="hover:text-red-800" href="">SẢN PHẨM</a>
                    </li>
                    <li
                        class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                        <a class="hover:text-red-800" href="">LIÊN HỆ</a>
                    </li>
                    <li
                        class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                        <a class="hover:text-red-800" href="">CỘNG TÁC VIÊN</a>
                    </li>
                    <li
                        class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                        <a class="hover:text-red-800" href="?act=register">ĐĂNG KÝ</a>/
                        <a class="hover:text-red-800" href="dangky.php">ĐĂNG NHẬP</a>
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
    </script>
     <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
         var swiper = new Swiper(".card-slider", {
            
      slidesPerView: 4,
      speed:1000,
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
</body>

</html>