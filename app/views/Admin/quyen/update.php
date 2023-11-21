<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản trị Khuyến mại</h1>
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
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Update khuyến mại</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="index.php?act=updateq" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <?php
                  if (is_array($loadq)) {
                    extract($loadq);
                  ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tên</label>
                      <input type="hidden" name="id" class="form-control" value="<?php if (isset($id) && ($id != '')) echo $id ?>">
                      <input type="text" name="ten" class="form-control" value="<?php if (isset($ten) && ($ten != '')) echo $ten ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Trạng Thái</label>
                      <input type="text" name="trang_thai" class="form-control" value="<?php if (isset($trang_thai) && ($trang_thai != '')) echo $trang_thai ?>">
                    </div>
                </div>
              </div>
          </div>

        <?php
                  }
        ?>

        <div class="card-footer">
          <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
        </div>
        </form>
        </div>
      </div>

    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>