<?php include_once 'header.php' ?>
<main>
  <div class="w-full bg-gray-100 rounded-xl text-xl py-4 ">
    <div class="font-semibold text-stone-500 ml-[120px]">
      <a href="trangchu.html">Trang chủ / </a>
      <a href="thongtintk.html">Giỏ hàng </a>
    </div>
  </div>
  <form action="?act=bill" method="post" class="grid grid-cols-2 gap-12 text-xl my-5">
    <div class=" text-stone-500 ml-[120px]">
      <div class="">
        <h1 class="text-3xl font-semibold text-black">Giỏ hàng của bạn</h1>
        <p class="my-5 text-black">Bạn đang có <span class="text-2xl text-black font-semibold"><?=count($_SESSION['mycart'])?> sản phẩm</span> trong giỏ hàng</p>
      </div>
      <div class="border-2 h-max rounded-md">
        <?php
        $index = 0;
        $tong = 0;
        $updatedProductSizes = array(); 
        foreach ($_SESSION['mycart'] as $cart) :
          $tong_tien = $cart[2] * $cart[3];
          $tong += $tong_tien;     
        ?>
          <div class="flex content-stretch px-2  w-[450px] my-3 gap-5">
            <td><img class="w-[80px] h-[80px] rounded-xl" src="layout/images/products/<?= isset($cart['0']) ? $cart['0'] : "" ?>" alt=""></td>
            <td class="w-[420px]">
              <p class="text-black "><?= isset($cart['1']) ? $cart['1'] : "" ?><br><span class="text-stone-500">Size :<?= isset($cart['4']) ? $cart['4'] : "" ?></span><br><span class="text-stone-500 flex">SL:<input type="number" class="w-[30px]" id="quantity_<?= $index ?>" min='1' value="<?= isset($cart['3']) ? $cart['3'] : ""?>" onchange="updatePrice(<?= $index ?>)"></span></p>
            </td>
            <td class="items-center">
              <p class="hidden" id="hidden_price_<?= $index ?>"><?=$cart['2']?></p>
              <p class="text-[16px] font-semibold text-black "  id="price_<?= $index ?>" data-unit-price="<?= $cart['5'] ?>"><?= number_format($cart['5'],0,',') ?> ₫</p>
            </td>
          </div>
        <?php
        $index++;
        endforeach;
        ?>
      </div>
 
    </div>
    <div class=" text-stone-500 text-xl  gap-5 ">
      <div class="w-[480px]">
        <h2 class="text-3xl font-semibold text-black pr-[200px]">Thông tin đơn hàng</h2>
        <div class="flex justify-between my-5">
          <?php if ($_SESSION['mycart'] != []) : ?>
            <p class="text-xl font-semibold text-black">Tổng tiền:</p>
            <p id="totalPrice" class="text-[#4c9aef] text-3xl font-semibold"><?= number_format($tong, 0, ',') ?>₫</p>
          <?php endif ?>
        </div>
        <p class="">- Phí vận chuyển sẽ được tính ở trang thanh toán.</p>
        <p> - Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>
        <input class="bg-[#4c9aef] cursor-pointer text-white w-[500px] rounded-md my-5 h-[50px] " type="submit" name="" id="" value="THANH TOÁN">
        <p class="bg-[#bcc7d1] text-black px-5 rounded-md w-[500px]">Chính sách giao hàng <br> <span>Hiện chúng tôi chỉ áp dụng thanh toán với đơn hàng có giá trị tối thiểu 150.000₫ trở lên.</span></p>
      </div>
    </div>
  </form>
</main>
<script>
      // Function to update price based on quantity
    function updatePrice(index) {
    var quantityInput = document.getElementById('quantity_' + index);
    var priceElement = document.getElementById('price_' + index);
    var unitPrice = parseFloat(document.getElementById('hidden_price_' + index).textContent);
    var newQuantity = parseInt(quantityInput.value);
    var newPrice = newQuantity * unitPrice;
    priceElement.textContent = newPrice.toLocaleString() + ' ₫';
    // Tính lại tổng giá trị và cập nhật nội dung của phần tử tổng giá trị
    var newTotal = 0;
    var quantityInputs = document.querySelectorAll('[id^="quantity_"]');
    quantityInputs.forEach(function(quantityInput) {
        var index = quantityInput.id.split('_')[1];
        var price = parseFloat(document.getElementById('hidden_price_' + index).textContent);
        var quantity = parseInt(quantityInput.value);
        newTotal += price * quantity;
    });
    var totalPriceElement = document.getElementById('totalPrice');
    totalPriceElement.textContent = newTotal.toLocaleString() + ' ₫';
}
      </script>
<?php include_once 'footer.php' ?>