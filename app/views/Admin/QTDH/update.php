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
        <div class="col-md-12">
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
                $i=1;
                foreach ($loadd1 as $row) {
                  extract($row);
                  $linkimg_dai_dien = '../../../public/img/product/' . $img_dai_dien;
                  $tong = $so_luong * $gia_sale;
                ?>
                  <tr>
                    <td><?=$i++ ?></td>
                    <td><?= $tensp ?></td>
                    <td> <img height="50px" width="50px" src="<?= $linkimg_dai_dien ?>" alt=""></td>
                    <td><?= $so_luong ?></td>
                    <td><?= number_format($tong) ?>VND</td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <label>Tổng giá : <?= number_format($tong_gia) ?>VND</label>
            <br>
          </div>

          <!-- General form elements -->

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thông tin người mua </h3>
            </div>

            <form action="index.php?act=updatedh&id=<?=$id?>" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label>Tên người nhận</label>
                  <input type="hidden" name="id" class="" value="<?= $id ?>">
                  <input type="text" name="ten" class="" value="<?= $ten ?>">

                  <label>Địa chỉ</label>
                  <input type="text" value="<?= $diachi ?>" name="diachi" class="">

                  <label>Số điện thoại</label>
                  <input type="text" name="sdt" class="" value="<?= $sdt ?>">
                </div>

                <div class="form-group">
                  <label>Trạng thái đơn hàng</label>
                  <select name="trangthai" id="trangthai">
                    <?php if ($trangthai == 0) : ?>
                      <option value="0">Chờ xác nhận</option>
                      <option value="1">xác nhận</option>
                      <option value="2">Đang vận chuyển</option>
                    <?php elseif ($trangthai == 1) : ?>
                      <option value="1">xác nhận</option>
                      <option value="2">Đang vận chuyển</option>
                      <?php elseif ($trangthai == 2) : ?>
                      <option value="2">Đang vận chuyển</option>
                      <?php elseif ($trangthai == 4) : ?>
                      <option value="4">Đơn hàng đã hủy</option>
                    <?php else : ?>
                      <option value="3">Đã giao thành công</option>
                    <?php endif; ?>

                  </select>

                  <label>ghi trú</label>
                  <input type="text" value="<?= $ghi_chu ?>" name="ghi_chu" class="">
                </div>

                <div class="card-footer">
                  <button type="submit" name="submit" value="submit" class="btn btn-primary">Thực hiện</button>
                  <button type="submit" name="submit" value="submit" class="btn btn-primary">Danh sách đơn hàng</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    document.getElementById('trangthai').onchange = function() {
      var selectedValue = <?= $trangthai ?>;
      // Xóa các giá trị trước đó
      if (selectedValue == 2) {
        // Nếu chọn Đang vận chuyển, mất đi Chờ xác nhận
        document.querySelector('option[value="1"]').style.display = 'none';
      } else if (selectedValue == 3) {
        // Nếu chọn Đã giao thành công, mất đi Chờ xác nhận và Đang vận chuyển
        document.querySelector('option[value="1"]').style.display = 'none';
        document.querySelector('option[value="2"]').style.display = 'none';
      } else {
        // Nếu chọn lại Chờ xác nhận, hiển thị lại tất cả các giá trị
        document.querySelectorAll('option').forEach(function(option) {
          option.style.display = 'block';
        });
      }
    };
  </script>
  <!-- /.content -->
</div>
