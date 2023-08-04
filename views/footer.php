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
    <div class="flex justify-between w-[340px] h-full px-4 uppercase pt-5 bg-slate-100">
        <div class="text-black h-[50px]">
            <p class="uppercase text-[15px]">Giỏ Hàng</p>
            <div class="flex items-center space-x-4 mt-4 px-4">
                <img class="w-[70px] h-[70px] rounded" src="layout/giaodiennguoidung/image/z4535010599483_1e7cd11756e512e4ac96dae048c2c3c9.jpg" alt="Product Image">
                <div class="">
                    <a href="" class="text-black font-medium">Bộ quần áo thể thao nam</a>
                    <div>
                    <button class="text-[11px] text-red:500 font-bold rounded " onclick="removeProduct()">
                    Bỏ sản phẩm 
                    </button>
                    </div>
                </div>
            </div>
            <div class="flex pl-[92px]">
            <button class="cursor-pointer minus-btn" onclick="handleMinuss()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                </svg>
            </button>
            <input class="w-[50px] text-center border" type="number" name="quantity" id="quantity" min="1" max="5" value="1">
            <button class="cursor-pointer plus-btn" onclick="handlePluss()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>
                <p class="text-red-700 font-bold pl-[5px]">560.000 đ</p>
            </div>
            <div class="bg-white w-full p-2 mt-5">
            <div class="flex justify-between">
                <p class="font-bold">Tổng tiền :</p>
                <p class="font-bold">560.000 đ</p> <!-- Replace with actual total amount value -->
            </div>
            <button class="w-full mt-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-600">
                Thanh toán
            </button>
        </div>
        </div>
        <div>
            <button onclick="closegioHang()">
                <div class="icon-container" onmouseenter="addHoverClass()" onmouseleave="removeHoverClass()">
                    <i class="fa-solid fa-xmark text-[20px]" style="color: #333;" id="animated-icon"></i>
                </div>
            </button>
        </div>
        <!-- Total Amount and Checkout Button -->
        
        <!-- End of Total Amount and Checkout Button -->
    </div>
</div>


<div class="fixed z-10 top-0 left-0 bottom-0 right-0 justify-end hidden tim-kiem">
    <div class="flex justify-between w-[340px] h-full px-4 pt-5 bg-slate-100">
        <form action="?act=result_search_products" method="post" class="text-black h-[50px]">
            <p class="uppercase text-[15px] font-[500]">Tìm kiếm sản phẩm</p>
            <div class="mt-10 mb-5 gap-0 flex items-center">
                <input class="border font-[400] h-[36px] w-[250px] pl-2 text-[13px]" placeholder="Search..." type="text" name="results" id="searchInput">
                <button class="bg-red-700 hover:bg-red-600 h-[36px] w-[36px] flex items-center justify-center" type="button" id="searchButton" onclick="searchProduct()">
                    <i class="fa-solid fa-magnifying-glass text-white"></i>
                </button>
            </div>
            <div id="searchResults">
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
            <li class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                <a class="text-red-800 text-[13px] border-b-1" href="?act=main">TRANG CHỦ</a>
            </li>
            <li class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                <a class="hover:text-red-800 text-[13px]" href="">GIỚI THIỆU</a>
            </li>
            <li class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                <a class="hover:text-red-800 text-[13px]" href="">SẢN PHẨM</a>
            </li>
            <li class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                <a class="hover:text-red-800 text-[13px]" href="">LIÊN HỆ</a>
            </li>
            <li class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">
                <a class="hover:text-red-800 text-[13px]" href="">CỘNG TÁC VIÊN</a>
            </li>
            <li class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
                after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-300">

                <?php
                if (!empty($_SESSION['email'])) {
                    echo '<a class="hover:text-red-800 text-[13px]" href="?act=1">THOÁT</a>';
                } else { ?>
                    <a class="hover:text-red-800 text-[13px]" href="?act=login">ĐĂNG NHẬP / </a>
                    <a class="hover:text-red-800 text-[13px]" href="?act=register">ĐĂNG KÝ</a>
                <?php } ?>

            </li>
            <li class="cursor-pointer h-[60px] text-2xl  relative after:absolute after:bottom-0 after:left-0
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
<script>
    let handlePluss = () => {
    const quantityInput = document.getElementById('quantity');
    let currentQuantity = parseInt(quantityInput.value);
    const maxQuantity = parseInt(quantityInput.max);

    if (currentQuantity < maxQuantity) {
        currentQuantity++;
        quantityInput.value = currentQuantity;
    }
}

let handleMinuss = () => {
    const quantityInput = document.getElementById('quantity');
    let currentQuantity = parseInt(quantityInput.value);
    const minQuantity = parseInt(quantityInput.min);

    if (currentQuantity > minQuantity) {
        currentQuantity--;
        quantityInput.value = currentQuantity;
    }
}
</script>
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

    // yêu thích
    var btnvar1 = document.getElementById('btnh1');

    function Toggle1() {
        if (btnvar1.style.color == "red") {
            btnvar1.style.color = "grey"
        } else {
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
    document.addEventListener("DOMContentLoaded", function() {
        const boxes = document.querySelectorAll(".box");
        boxes.forEach(box => {
            const button = box.querySelector(".flex");
            const description = box.querySelector(".des");
            button.addEventListener("click", function() {
                description.classList.toggle("visible");
                button.querySelector("i").classList.toggle("fa-chevron-down");
                button.querySelector("i").classList.toggle("fa-chevron-up");
            });
        });
    });
</script>
<script>
    let amount = 1; // Initial value

    // Function to handle changes in the input field
    let handleInputChange = () => {
        const inputElement = document.getElementById('amount');
        let newValue = parseInt(inputElement.value);

        if (isNaN(newValue) || newValue < parseInt(inputElement.min)) {
            newValue = parseInt(inputElement.min);
        } else if (newValue > parseInt(inputElement.max)) {
            newValue = parseInt(inputElement.max);
        }

        amount = newValue;
        render(amount);
    }

    // Function to handle addition
    let handlePlus = () => {
        const inputElement = document.getElementById('amount');
        amount = Math.min(parseInt(inputElement.max), amount + 1);
        render(amount);
    }

    // Function to handle subtraction
    let handleMinus = () => {
        const inputElement = document.getElementById('amount');
        amount = Math.max(parseInt(inputElement.min), amount - 1);
        render(amount);
    }

    // Function to update the view
    let render = (value) => {
        const inputElement = document.getElementById('amount');
        inputElement.value = value;
    }
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
        xhttp.open("POST", "model/search_product.php", true);

        // Set the request header
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        // Send the AJAX request with the search query as data
        xhttp.send("query=" + encodeURIComponent(searchQuery));
    }
</script>
<script>
    // JavaScript variable to store cart items
let cartItems = [];

// Function to handle adding a product to the cart
function addToCart() {
    // Get product details from the form
    const productId = <?= $_GET['id'] ?>;
    const productName = 'Bộ quần áo thể thao nam'; // Replace with actual product name
    const productPrice = 560000; // Replace with actual product price
    const productThumbnail = 'layout/giaodiennguoidung/image/z4535010599483_1e7cd11756e512e4ac96dae048c2c3c9.jpg'; // Replace with actual product thumbnail URL
    const quantityInput = document.getElementById('quantity');
    const productQuantity = parseInt(quantityInput.value);

    // Create an object for the product
    const product = {
        id: productId,
        name: productName,
        price: productPrice,
        thumbnail: productThumbnail,
        quantity: productQuantity
    };

    // Add the product to the cartItems array
    cartItems.push(product);

    // Update the cart section with the product details
    updateCartSection();

    // Optionally, you can save the cartItems to local storage or send it to the server for further processing.
}

// Function to update the cart section with the product details
function updateCartSection() {
    const cartSection = document.querySelector('.gio-hang');
    cartSection.classList.remove('hidden');

    const cartContent = document.querySelector('.gio-hang .cart-content');
    cartContent.innerHTML = '';

    // Loop through cartItems and add product details to the cart
    cartItems.forEach((product) => {
        const productDiv = document.createElement('div');
        productDiv.classList.add('flex', 'items-center', 'space-x-4', 'mt-4', 'px-4');

        const productImage = document.createElement('img');
        productImage.classList.add('w-[70px]', 'h-[70px]', 'rounded');
        productImage.src = product.thumbnail;
        productImage.alt = product.name;

        const productInfo = document.createElement('div');
        const productNameElement = document.createElement('a');
        productNameElement.classList.add('text-black', 'font-medium');
        productNameElement.href = ''; // Replace with actual product URL
        productNameElement.textContent = product.name;
        productInfo.appendChild(productNameElement);

        const removeButton = document.createElement('button');
        removeButton.classList.add('text-[11px]', 'text-red:500', 'font-bold', 'rounded');
        removeButton.textContent = 'Bỏ sản phẩm';
        removeButton.onclick = () => removeProduct(product.id); // Replace removeProduct with your function to remove the product from the cart
        productInfo.appendChild(removeButton);

        productDiv.appendChild(productImage);
        productDiv.appendChild(productInfo);

        cartContent.appendChild(productDiv);
    });

    // Calculate the total amount and update the Total section (assuming you have a separate element with class 'total-amount')
    const totalAmount = cartItems.reduce((total, product) => total + (product.price * product.quantity), 0);
    const totalAmountElement = document.querySelector('.total-amount');
    totalAmountElement.textContent = `${totalAmount} đ`; // Replace with your actual currency formatting
}

// Call this function to hide the cart initially (assuming you have a button with class 'close-cart')
function closegioHang() {
    const cartSection = document.querySelector('.gio-hang');
    cartSection.classList.add('hidden');
}

// Call this function when the page loads to set up event listeners and other necessary initialization
document.addEventListener('DOMContentLoaded', () => {
    // Set
    setupCartEventListeners();

    // Optionally, you can load cartItems from local storage or the server here if you want to persist the cart data between page reloads.

    // Update the cart section with the initial product details (if there are any products in the cartItems array)
    updateCartSection();
});
</script>
</body>

</html>