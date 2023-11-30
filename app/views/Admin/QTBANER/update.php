<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản trị BANNER</h1>
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
              <h3 class="card-title">UPDATE BANNER</h3>
            </div>

            <form action="index.php?act=updatebn" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <?php
                  if (is_array($banner)) {
                    extract($banner);
                    $linkimg = '../../views/Admin/img/' . $img;
                  ?>
                    <div class="form-group">

                      <label for="exampleInputEmail1">Update</label>
                      <input type="hidden" name="id" class="form-control" value="<?php if (isset($id) && ($id != '')) echo $id ?>">
                      <label for="img">Ảnh banner</label><br>
                     
                        <img src="../../../public/img/bg/<?= $img; ?>" alt="product" width="100">
                     
                      <input type="file" name="img" id="img">
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên</label>
                        <input name="ten" type="text" class="form-control" value="<?php if (isset($tieu_de) && ($tieu_de != '')) echo $tieu_de ?>">
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên</label>
                          <input name="tieu_de1" type="text" class="form-control" value="<?php if (isset($tieu_de1) && ($tieu_de1 != '')) echo $tieu_de1 ?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">link</label>
                          <input name="link" type="text" class="form-control" value="<?php if (isset($limk) && ($limk != '')) echo $limk ?>">
                        </div>
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
            <?php
            if (isset($thongbao) && ($thongbao) != "") {
              echo $thongbao;
            }
            ?>
            </form>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->