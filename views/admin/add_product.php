<?php include_once "header_admin.php" ?>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Thêm sản phẩm</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-description"></p>
                        <form action="?act=save_add_product" class="forms-sample" method="post"  enctype="multipart/form-data">
                        <div class="col-md-4 mb-3">
                        <label for="inputState" class="form-label">Danh mục</label>
                        <select id="inputState" name="id_cate" class="form-select">
                            <?php foreach ($all_categories as $cate) {
                                var_dump($cate);
                                echo '<option value='.$cate['id'].'>'.$cate['name'].'</option>';
                            }?>
                        </select>
                        </div>    
                        <div class="form-group">
                            <label for="exampleInputName1">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Phân loại</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" placeholder="" name="classify">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Số lượng</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="quantity">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Giá</label>
                            <input type="number" class="form-control" id="exampleInputName1" name="price">
                        </div>
                        <div class="form-group">
                            <label>Ảnh</label>
                            <input type="file" name="img" class="file-upload-default">
                            <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                            </span>
                            </div>
                        </div>                  
                        <div class="form-group">
                            <label for="exampleTextarea1">Mô tả</label>
                            <textarea class="form-control" id="exampleTextarea1" name="mota"  rows="4"></textarea>
                        </div>
                        <input type="submit" class="btn btn-gradient-primary me-2" name="add" value="Thêm">
                        <button type="reset" class="btn btn-gradient-primary me-2">Reset</button>
                        <button class="btn btn-secondary">Quay lại</button>
                        </form>
                    </div>
                 </div>
            </div>
          </div>
       
         </div>
      </div>
    </section>
  </main><!-- End #main -->
  <?php include_once "footer_admin.php" ?>