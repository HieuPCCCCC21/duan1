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
            <div class=" bg-red-800 mt-10 h-[100px] flex justify-between items-center  ">
                <div>
                    <p class="text-white pl-[100px] text-base">Nhận thông tin khuyến mãi mới nhất từ Thể Thao Store</p>
                </div>
                <div class="pr-[100px]">
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
        <div class="fixed z-10 top-0 left-0 bottom-0 right-0 justify-end hidden tim-kiem">
            <div class="flex justify-between w-[340px] h-full px-4 pt-5 bg-slate-100">
              <form action="?act=result_search_products" method="post" class="text-black h-[50px]">
                    <p class="uppercase text-[15px] font-[500]">Tìm kiếm sản phẩm</p>
                    <div class="mt-10 mb-5 gap-0 flex items-center">
                            <input class="border font-[400] h-[36px] w-[250px] pl-2 text-[13px]" placeholder="Search..." type="text" name="results"
                            id="searchInput">
                            <button class="bg-red-700 hover:bg-red-600 h-[36px] w-[36px] flex items-center justify-center"
                            type="button" id="searchButton" onclick="searchProduct()">
                            <i class="fa-solid fa-magnifying-glass text-white"></i>
                        </button>
                    </div >
                    <div  id="searchResults">
                        <!-- <div class="flex items-center ">
                            <div class="flex items-center space-x-4 mt-4 px-4">
                                <img class="w-[70px] h-[70px] rounded" src="layout/giaodiennguoidung/image/z4535010599483_1e7cd11756e512e4ac96dae048c2c3c9.jpg"
                                alt="Product Image">
                            </div>
                            <div class="">
                                <a href="" class="text-black font-medium">Bộ quần áo thể thao nam</a>
                                <p class="text-red-700 font-bold">560.000 đ</p>
                            </div>
                        </div> 
                        <div class="text-c">
                            <a href="#">Xem tất cả</a>
                        </div>           -->
                    </div>
                </form>
              <div class="">
                <button onclick="closeTimkiem()">
                        <div class="icon-container" onmouseenter="addHoverClass()" onmouseleave="removeHoverClass()">
                            <i class="fa-solid fa-xmark text-[20px]" style="color: #333;" id="animated-icon"></i>
                        </div>
                </button>
              </div>
            </div>
        </div>
        <div class="fixed top-0 left-0 bottom-0 right-0 justify-start hidden nav-bar">
            <div class="flex justify-between w-[310px] h-full px-4 uppercase pt-5 bg-black ">
                <ul class="text-white h-[50px] ">
                    <li
                        class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                        <a class="text-red-800 text-[13px] border-b-1" href="?act=main">TRANG CHỦ</a>
                    </li>
                    <li
                        class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                        <a class="hover:text-red-800 text-[13px]"  href="">GIỚI THIỆU</a>
                    </li>
                    <li
                        class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                        <a class="hover:text-red-800 text-[13px]" href="">SẢN PHẨM</a>
                    </li>
                    <li
                        class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                        <a class="hover:text-red-800 text-[13px]" href="">LIÊN HỆ</a>
                    </li>
                    <li
                        class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                        <a class="hover:text-red-800 text-[13px]" href="">CỘNG TÁC VIÊN</a>
                    </li>
                    <li
                        class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                        <a class="hover:text-red-800 text-[13px]" href="?act=register">ĐĂNG KÝ</a>/
                        <a class="hover:text-red-800 text-[13px]" href="?act=login">ĐĂNG NHẬP</a>
                    </li>
                    <li
                        class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                        <a class="hover:text-red-800 text-[13px]" href="">YÊU THÍCH</a>
                    </li>
                </ul>
                <div class="">
                    <button onclick="closeMenu()">
                        <div class="icon-container" onmouseenter="addHoverClass()" onmouseleave="removeHoverClass()">
                            <i class="fa-solid fa-xmark text-[20px]" style="color: #ecf3fd;" id="animated-icon"></i>
                        </div>
                    </button>
                </div>
            </div>
        </div>
               <!--End footer-->
    </div>

    <script>const menuhidden = document.querySelector('.gio-hang');
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
        let amountElement = document.getElementById('amount');
        let amount = amountElement.value;
        // console.log(amount);
        let render = (amount) => {
            amountElement.value = amount
        }
        //Xử lý tăng
        let handlePlus = () => {
            console.log(amount);
            amount++
            render(amount);
        }
        //Xử lý trừ
        let handleMinus = () => {
            if (amount > 1) {
                amount--;
            }
            render(amount);
        }
        amountElement.addEventListener('input', () => {
            amount = amountElement.value;
            amount = parseInt(amount);
            amount = (isNaN(amount) || amount == 0) ? 1 : amount;
            render(amount);
            console.log(amount);

        });
        // yêu thích
        var btnvar1 = document.getElementById('btnh1');

        function Toggle1() {
            if (btnvar1.style.color == "red") {
                btnvar1.style.color = "grey"
            }
            else {
                btnvar1.style.color = "red"
            }
        };
        //cônjg số lượng
        let cart = document.querySelector('.cart');
        let cartfield = document.querySelector('.cart-field');
        let add = document.getElementsByClassName('addd');
        for (let but of add) {
            but.onclick = e => {
                let item = Number(cart.getAttribute('data-count') || 0);
                cart.setAttribute('data-count', item + 1);
                cart.classList.add('on');
            }

        }
        function addHoverClass() {
        document.getElementById("animated-icon").classList.add("hovered");
        }

        function removeHoverClass() {
        document.getElementById("animated-icon").classList.remove("hovered");
        }
        // chi tiết sản phẩm
        document.addEventListener("DOMContentLoaded", function () {
        const boxes = document.querySelectorAll(".box");

        boxes.forEach(box => {
            const button = box.querySelector(".flex");
            const description = box.querySelector(".des");

            button.addEventListener("click", function () {
            description.classList.toggle("visible");
            button.querySelector("i").classList.toggle("fa-chevron-down");
            button.querySelector("i").classList.toggle("fa-chevron-up");
            });
        });
        });
    </script>
    <script>
        // JavaScript code to continuously change the placeholder text with slower effect
        document.addEventListener('DOMContentLoaded', function() {
          const inputElement = document.getElementById('searchInput');
      
          const placeholderTexts = [
            "Nhập tên sản phẩm ...",
            "Áo khoác ",
            "Áo thun",
            "Quần ",
            "Bộ đồ nam"
          ];
      
          let currentPlaceholderIndex = 0;
          let currentPlaceholderChar = 0;
          let isRetracting = false;
      
          function animatePlaceholder() {
            const targetPlaceholder = placeholderTexts[currentPlaceholderIndex];
      
            if (!isRetracting && currentPlaceholderChar < targetPlaceholder.length) {
              inputElement.placeholder = targetPlaceholder.slice(0, currentPlaceholderChar + 1);
              currentPlaceholderChar++;
            } else if (isRetracting && currentPlaceholderChar > 0) {
              inputElement.placeholder = targetPlaceholder.slice(0, currentPlaceholderChar);
              currentPlaceholderChar--;
            } else {
              isRetracting = !isRetracting;
              if (!isRetracting) {
                currentPlaceholderIndex = (currentPlaceholderIndex + 1) % placeholderTexts.length;
              }
            }
            const delay = isRetracting ? 60 : 80; // Adjust the delay here (500ms for appearance, 1500ms for retraction)
            setTimeout(animatePlaceholder, delay);
          }
      
          // Call animatePlaceholder function initially
          animatePlaceholder();
        });
      </script>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // JavaScript function to handle the search
    function searchProduct() {
    // Get the search query from the input field
    var searchQuery = document.getElementById("searchInput").value;
    localStorage.setItem("searchQuery", searchQuery);
    // Create a new XMLHttpRequest object
    var xhttp = new XMLHttpRequest();

    // Configure the AJAX request
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // On successful response, update the search results
            document.getElementById("searchResults").innerHTML = this.responseText;
        }
    };

    // Open the AJAX request
    xhttp.open("POST","model/search_product.php", true);

    // Set the request header
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Send the AJAX request with the search query as data
    xhttp.send("query=" + encodeURIComponent(searchQuery));
    }
    </script>
</body>

</html>