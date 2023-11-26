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
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-7">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thông tin chi tiết đơn hàng</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="index.php?act=updatedh" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label>Tên người nhận</label>
                  <input type="hidden" name="iddm" class="form-control" value="">
                  <input type="text" name="tendm" class="form-control" value="<?= $loadd1['ten_khach_hang']?>">
                </div>
                <div class="form-group">
                  <label>Địa chỉ</label>
                  <input type="text" value="<?= $loadd1['dia_chi_nguoi_nhan']?>" name="tendm" class="form-control" value="">
                </div>
             
              <div class="form-group">
                <label>Số điện thoại</label>
                <input type="text" value="<?= $loadd1['so_dien_thoai']?>" name="tendm" class="form-control" value="">
              </div>

              <div class="form-group">
                <label>Tên Sản phẩm </label>
                <input type="text" value="<?= $loadd1['ten_san_pham']?>" name="tendm" class="form-control" value="">
              </div>

              <div class="form-group">
                <label>Số lượng</label>
                <input type="text" value="<?= $loadd1['so_luong']?>" name="tendm" class="form-control" value="">
              </div>

              <div class="form-group">
                <label>Giá tiền</label>
                <input type="text" value="<?= $loadd1['don_gia']?>" name="tendm" class="form-control" value="">
              </div>

              <div class="form-group">
                <label>Trạng thái đơn hàng</label>
                <input type="text" value="<?= $loadd1['trang_thai_don_hang']?>" name="tendm" class="form-control" value="">
              </div>
              <div class="form-group">
                <label>ghi trú</label><br>
                <textarea value="<?= $loadd1['ghi_chu']?>" name="" id="" cols="40" rows="5"></textarea>
              </div>

              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Lưu</button>
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