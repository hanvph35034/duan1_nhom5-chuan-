<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Đăng nhập</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
            <li class="breadcrumb-item active">Đăng nhập</li>
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
        <div class="col-md-12">
          <!-- jquery Đăng nhập -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Đăng nhập tài khoản</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên đăng nhập</label>
                  <input type="text" name="ten_dang_nhap" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mật khẩu</label>
                  <input type="password" name="mat_khau" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group mb-0">
                  <!-- <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                    <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                  </div> -->
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <input type="submit" class="btn btn-primary" name="dangnhap" id="" value="Đăng nhập">
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
              </div>
            </form>
            <?php
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
              $ten_dang_nhap = $_POST['ten_dang_nhap'];
              $mat_khau = md5($_POST['mat_khau']);
              $loginMess = dangnhap($ten_dang_nhap, $mat_khau);
              if (is_array($loginMess)) {
                $_SESSION['user'] = $loginMess;
                header("location: index.php?act=home");
              } else {
                $thongbao = 'dang nhap that bai! tai khoan khong ton tai';
                // $thongbao = $mat_khau;
              }
            }
            ?>
            <?php
            if (isset($thongbao) && $thongbao != '') {
              echo $thongbao;
            }
            ?>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>