
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản trị danh mục</h1>
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
                <h3 class="card-title">Thêm mới danh mục</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=adddm" method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Thêm mới</label>
                    <input name="addm" type="text" class="form-control"  placeholder="Thêm danh mục mới">
                  </div>
                  </div>
                 
                </div>
              
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
                <span style="color: red;"> <?= is_error('addm') ?></span>
              </form>
            </div>
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
