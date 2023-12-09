<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản trị Đơn hàng </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">danh sách Đơn Hàng</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Quản lý Đơn hàng </h3>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Bảng danh sách Đơn hàng</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>STT</th>

                    <th>Mã đơn hàng </th>
                    <th>Ngày đặt </th>
                    <th>Thông tin người nhận</th>
                    <th>Địa chỉ</th>
                    <th>Tổng tiền </th>
                    <th>Trạng thái </th>
                    <th>Xem đơn hàng</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($loaddh as $lisdh) {
                    extract($lisdh);
                    echo '
                          <tr>
                          <td>' . $i++ . '</td>
                          <td>' . $ma_dh . '</td>
                          <td>' . $ngay_dat . '</td>
                          <td>' . $ten . '</td>
                          <td>' . $diachi . '</td>
                          <td>' . number_format(($tong_gia)) . ' VND</td>
                          <td>';

                    if ($trangthai == 0) {
                      echo 'Chờ xác nhận';
                    } elseif ($trangthai == 1) {
                      echo 'Xác nhận';
                    } elseif ($trangthai == 2) {
                      echo 'Đang vận chuyển';
                    } elseif ($trangthai == 3) {
                      echo 'Đã giao thành công';
                    } elseif ($trangthai == 4) {
                      echo 'Khách hủy';
                    } else {
                      echo 'Trạng thái không xác định';
                    }

                    echo '</td>
                         <td><a href="?act=suadh&id=' . $id . '"> xem đơn hàng </a></td>
                        <td>';
                    if ($trangthai == 4) {
                      echo '<a href="?act=deletedh&id=' . $id . '">Xóa</a>';
                    } else {
                      echo '';
                    }
                    echo '</td>
                        </tr>
                          ';
                  }
                  ?>
                </tbody>

              </table>
              <div class="card-footer">
                <button type="submit" class="btn btn-sidebar"><a href="?act=adddh">Thêm đơn hàng</a></button>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->