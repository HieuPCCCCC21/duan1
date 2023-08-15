<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/css/splide.min.css">

    <script src="https://kit.fontawesome.com/7af42783d2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asset/style.css">
    <link href="https://fonts.cdnfonts.com/css/segoe-ui-4?styles=18006,18005,18004,18003" rel="stylesheet">

    <style>
        @import url('https://fonts.cdnfonts.com/css/segoe-ui-4?styles=18006,18005,18004,18003');
    </style>
</head>

<body style="font-family: 'Segoe UI', sans-serif; 
">
    <form action="?act=bill_cart" method="post">
        <div class="container w-[1280px]  m-auto">
            <img class="w-1/3 flex flex-col ml-[500px]  my-5" src="https://bizweb.dktcdn.net/100/428/250/themes/822996/assets/logo.png?1681911001649" alt="">
            <div class=" grid grid-cols-3 gap-10 ">
                <?php
                // if (isset($_SESSION['email'])) {
                //     $fullname =     $_SESSION['email']['fullname'];
                //     $email =      $_SESSION['email']['email'];
                //     $phone =    $_SESSION['email']['phone'];
                //     $address =    $_SESSION['email']['address'];
                //     $id_users = $_SESSION['email']['id'];
                // } 
                // else {
                //     $fullname = "";
                //     $email = "";
                //     $phone = "";
                //     $address = "";
                //     $id_users = 1;
                // }
                $fullname =    isset($_SESSION['email']['fullname']) ? $_SESSION['email']['fullname'] : "";
                $email =    isset($_SESSION['email']['email']) ? $_SESSION['email']['email'] : "";
                $phone =    isset($_SESSION['email']['phone']) ? $_SESSION['email']['phone'] : "";
                $address =    isset($_SESSION['email']['address']) ? $_SESSION['email']['address'] : "";
                $id =    isset($_SESSION['email']['id']) ? $_SESSION['email']['id'] : 1;
                ?>
                <input type="hidden" name="id" value="<?= $id ?>">
                <div>
                    <div class="flex justify-between">
                        <p class="text-2xl ">Thông tin nhận hàng</p>
                    </div>
                    <div class=" grid grid-cols-1 ">
                        <p></p>
                        <input class="border  h-[55px] w-[470px] pl-5 rounded-md my-2" placeholder="Email" type="text" value="<?= $email ?>" name="email">
                        <p></p>
                        <input class="border h-[55px] w-[470px] pl-5 rounded-md my-2" placeholder="Họ và Tên" type="text" value="<?= $fullname ?>" name="fullname">
                        <p></p>
                        <input class="border h-[55px] w-[470px] pl-5 rounded-md my-2" placeholder="Số điện thoại" type="number" value="<?= $phone ?>" name="phone">
                        <p></p>
                        <input class="border h-[55px] w-[470px] pl-5 rounded-md my-2" placeholder="Địa chỉ tùy chọn" type="text" value="<?= $address ?>" name="address">
                        <p></p>
                        <textarea class="border h-[55px] w-[470px] pl-5 rounded-md my-2" name="note" id="" cols="25" rows="10" placeholder="Ghi chú"></textarea>
                    </div>
                </div>
                <div>
                    <p class="text-2xl mt-10 mb-2">Thanh Toán</p>
                    <input class="mt-[40px]" type="radio" value="2" name="pttt" id="a" required /> Thanh toán khi giao hàng (COD) <i class="fa-solid  fa-money-bill " style="color: #0e8ac8;"></i>
                </div>
                <div class="bg-gray-100 h-[730px] border-1  pl-5 w-[650px]">
                    <p class="border-b-2 text-3xl flex items-center h-[80px]">Đơn hàng (<?= count($_SESSION['mycart']) ?> sản phẩm)</p>
                    <tbody>
                        <?php $tong = 40000;
                        ?>
                        <?php
                        foreach ($_SESSION['mycart'] as  $cart) :
                        ?>
                            <div class="flex content-stretch w-[550px] my-3 gap-5">
                                <tr>
                                    <td><img class="w-[70px] rounded-xl" src="layout/images/products/<?= isset($cart['0']) ? $cart['0'] : "" ?>" alt=""></td>
                                    <td class="w-[420px]">
                                        <p class="text-black "><?= isset($cart['1']) ? $cart['1'] : "" ?><br>
                                            <span class="text-stone-500">size:<?= isset($cart['4']) ? $cart['4'] : "" ?></span>
                                            <span class="text-stone-500">SL:<?= isset($cart['3']) ? $cart['3'] : "" ?></span>
                                        </p>
                                    </td>
                                    <td class="flex items-center">
                                        <p class="text-xl"><?= isset($cart['5']) ? $cart['5'] : "" ?>₫</p>
                                    </td>
                                </tr>
                            </div>
                            <?php $tong_tien = $cart[2] * $cart[3];
                            $tong += $tong_tien;
                            ?>
                            <input type="hidden" value="<?= $cart[3] ?>" name="sl" />
                            <input type="hidden" value="<?= $cart[4] ?>" name="size" />
                            <!-- <input type="hidden" value="<?= $item[8] ?>" name="tre_em" />
                            <input type="hidden" value="<?= $item[10] ?>" name="ngay_dat_hang" />
                            <input type="hidden" value="<?= $tong + 40000 ?>" name="tong_tien" /> -->

                        <?php
                        endforeach;
                        ?>

                    </tbody>


                    <!-- <div class="flex content-stretch w-[550px] my-3 gap-5">
            <div class="">
                <img class="w-[70px] rounded-xl" src="https://bizweb.dktcdn.net/thumb/medium/100/428/250/products/sg-11134201-23010-wwmzgn1raylvd3-1678845287927.jpg" alt="">
            </div>
            <div class="w-[420px]">
                <p class="text-black ">Quần Dài Thể Thao Unisex Ống Xuông Adidas Firebird Track Pants Navy - GF0214 - Lẻ Quần / L </p>
                <p class="text-stone-500">Bộ Xanh / S</p>
            </div>
            <div class="flex items-center">
                <p class="text-xl">360.000₫</p>
            </div>
        </div> -->

                    <div class="border-t-2">
                        <p>Phí ship:40,000đ</p>
                        <div class="flex  my-3">
                            <p class="text-xl">Tổng cộng</p>
                            <p id="tongdonhang" class="text-3xl pl-[340px] text-[#4c9aef]">
                                <?php
                                if ($_SESSION['mycart'] != []) :
                                ?>
                                    <?php echo number_format($tong); ?>
                                    <input type="hidden" value="<?= $tong ?>" name="tong_tien">
                                <?php
                                endif
                                ?>
                                ₫
                            </p>
                        </div>
                    </div>
                    <div class="flex mt-7">
                        <a href="#" class="cursor-pointer text-[#4991ee;] text-xl"><i class="fa-solid fa-angle-left" style="color: #4688fb;"></i> Quay về giỏ hàng</a>
                        <button class="bg-[#4c9aef] text-white w-[130px] ml-[250px] h-[55px] rounded-md text-xl" name="btn_dh">ĐẶT HÀNG</button>
                    </div>
                    <div>

                    </div>
                </div>
            </div>

        </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function(result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Id);
            }
            citis.onchange = function() {
                district.length = 1;
                ward.length = 1;
                if (this.value != "") {
                    const result = data.filter(n => n.Id === this.value);

                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Id);
                    }
                }
            };
            district.onchange = function() {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Id);
                    }
                }
            };
        }
        tongdonhang();

        function tongdonhang() {
            var giohang = document.getElementById("");
        }
    </script>
</body>

</html>