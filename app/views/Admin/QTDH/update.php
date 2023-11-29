<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý đơn hàng </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div style="text-align: center;" class="container-fluid">
      <div class="row">
        <div class="col-md-14">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Thông tin đơn hàng</h3>
            </div>
            <table id="" class="table table-bordered table-striped">
              <thead>

                <tr>
                  <th>STT</th>
                  <th>Tên sản phẩm</th>
                  <th>Hình ảnh</th>
                  <th>Số lượng</th>
                  <th>Giá</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // echo '<pre>';
                // print_r($loadd1);
                foreach ($loadd1 as $row) {
                  extract($row);
                  $tong = $so_luong * $gia_sale;
                ?>
                  <tr>
                    <td></td>
                    <td><?= $tensp ?></td>
                    <td><?= $img_dai_dien ?></td>
                    <td><?= $so_luong ?></td>
                    <td><?= number_format($tong) ?>VND</td>
                  </tr>
              </tbody>
            <?php } ?>
            </table>
            <label>Tổng giá : <?= number_format($tong_gia) ?>VND</label>
            <br>

          </div>

          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thông tin người mua </h3>
            </div>

            <form action="index.php?act=updatedh" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label>Tên người nhận</label>

                  <input type="text" name="tendm" class="" value="<?= $ten ?>">

                  <label>Địa chỉ</label>
                  <input type="text" value="<?= $diachi?>" name="tendm" class=""  >

                  <label>Số điện thoại</label>
                  <input type="text"  name="tendm" class="" value="<?= $sdt ?>">
                </div>



                <div class="form-group">
                  <label>Trạng thái đơn hàng</label>
                  <select name="quyen" id="">
                    <option value=""> Đang vận chuyển</option>
                    <option value=""> Chờ xác nhận </option>
                    <option value=""> Đã giao thành công</option>


                  </select>
                  <label>ghi trú</label>
                  <input type="text" value="" name="tendm" class="" value="<?= $ghi_chu ?>">
                </div>

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Thực hiện</button>
                  <button type="submit" name="submit" class="btn btn-primary">Danh sách đơn hàng</button>
                </div>
            </form>
          </div>
        </div>
      </div>

    </div>
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>