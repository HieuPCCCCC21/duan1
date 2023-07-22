<?php require_once "views/header.php"?>
      <style>
            .img-box img{
                max-width: 100%;
            }
            .slider-container .container{
                padding: 0 15px;
                max-width: 1280px;
                margin: 0 auto;
            }
            .card-slider{
                padding: 50px 0;
            }
        </style>
        <ul class="w-full bg-red-200 rounded-xl py-4 ">
            <li class="font-semibold text-stone-500 indent-80">
                <a href="trangchu.html">Trang chủ / </a>
                <a href="">Đăng ký tài khoản </a>
            </li>
        </ul> 
        
        <div class="min-h-screen py-16" style="background-image: linear-gradient(115deg, #ffffff00, #ffffff)">
          <!-- login container -->
          <div class="container mx-auto">
             <!-- form -->
            <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-gray-100 rounded-2xl mx-auto shadow-lg overflow-hidden">
              <!-- image -->
              <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center rounded-2xl" style="background-image: url('image/anh2.jpg');">
                <h1 class="text-white text-3xl mb-3">QUYỀN LỢI THÀNH VIÊN</h1>
                <div>
                  <p class="text-white">Mua hàng khắp thế giới cực dễ dàng, nhanh chóng
                    Theo dõi chi tiết đơn hàng, địa chỉ thanh toán dễ dàng
                    Nhận nhiều chương trình ưu đãi hấp dẫn từ chúng tôi !</a></p>l.lo;lo.lô9o
                </div>
              </div>
              <div class="w-full lg:w-1/2 py-16 px-12">
                <h2  class="font-bold text-2xl text-[#002D74] ">Đăng ký</h2>
                <p class="text-lg mt-6 text-[#002D74]">
                  Tạo tài khoản của bạn. Nó miễn phí và chỉ mất một phút
                </p>
                <form action="?act=register_add"  method="post">
                  <div class="mt-5">
                    <input type="text" placeholder="Họ và tên" class="border border-gray-400 py-1 px-2 rounded-xl w-full" name="fullname"
                    value="<?=isset($_POST['fullname'])?$_POST['fullname']:''?>">
                    <?php 
                      if(!empty($error['fullname']))
                      echo "<p class='error'>{$error['fullname']}</p>"
                    ?>
                  </div>
                  <div class="mt-5">
                    <input type="text" placeholder="Email" class="border border-gray-400 py-1 px-2 rounded-xl w-full" 
                    name="email"   value="<?=isset($_POST['email'])?$_POST['email']:''?>">
                    <?php 
                      if(!empty($error['email']))
                      echo "<p class='error'>{$error['email']}</p>"
                    ?>
                  </div>
                  <div class="mt-5">
                    <input type="text" placeholder="Số điện thoại"
                     class="border border-gray-400 py-1 px-2 rounded-xl w-full" name="phone"
                      value="<?=isset($_POST['phone'])?$_POST['phone']:''?>">
                    <?php 
                      if(!empty($error['phone']))
                      echo "<p class='error'>{$error['phone']}</p>"
                    ?>
                  </div>
                  <div class="mt-5">
                    <input type="password" placeholder="Mật khẩu" class="border border-gray-400 py-1 px-2 rounded-xl w-full" 
                    name="password" value="<?=isset($_POST['password'])?$_POST['password']:''?>">
                    <?php 
                      if(!empty($error['password']))
                      echo "<p class='error'>{$error['password']}</p>"
                    ?>
                  </div>
                  <div class="mt-5">
                    <input type="password" placeholder="Xác nhận mật khẩu" class="border border-gray-400 py-1 px-2 rounded-xl w-full"
                     name="password1" value="<?=isset($_POST['password1'])?$_POST['password1']:''?>">
                    <?php 
                      if(!empty($error['password1']))
                      echo "<p class='error'>{$error['password1']}</p>"
                    ?>
                  </div>
                  <div class="mt-5">
                    <input type="checkbox" class="border border-gray-400">
                    <span>
                      Tôi chấp nhận <a href="#" class="text-purple-500 font-semibold">Điều khoản sử dụng</a> &  <a href="#" class="text-purple-500 font-semibold">Quyền riêng tư</a> 
                    </span>
                  </div>
                  <div class="mt-5">
                    <button class="w-full bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-100" name="btn_register">Đăng ký ngay</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
<?php include_once "views/footer.php"?>    

   
           