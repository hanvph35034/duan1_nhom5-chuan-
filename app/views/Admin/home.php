<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Đây là trang chu</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Quản trị admin </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Admin xin chào </h3>
                        </div>
                    </div>
                    
    <?php
    if (isset($_SESSION['user'])) {
      extract($_SESSION['user']);
    ?>
      <p>Tên người dùng: <?= $ten_dn?></p>
      <?php
      if ($id_quyen == 1) {
      ?>
        <p>Chức vụ: ADMIN</p>
    <?php
      }  
      else{
        ?>
        <p>Chức vụ: Nhân viên</p>
        <?php
      }
    }
    ?>
  </section>
                    
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