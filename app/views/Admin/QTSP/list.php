
   <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Quản trị sản phẩm</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">danh sách </li>
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
                  <h3 class="card-title">Quản trị sản phẩm </h3>
                </div>
              </div>
              <!-- /.card -->

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Bảng danh sách sản phẩm</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Mô tả</th> 
                        <th>Giá</th>
                        <th>Hình ảnh</th>
                         <th>Ngày nhập</th>
                        <th> <a href="">Sửa</a> </th>
                        <th> <a href="">Xóa (xóa mềm)</a> </th>
                        <th> <a href="">Xóa (xóa cứng)</a> </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Sơ mi nam</td>
                        <td>chất lươbg châu âu</td>
                          <td>100000</td>
                          <td><img src="images/product/1.jpg" alt="product" width="100"></td>
                          <td>2020-01-01</td>
                        <td><a href="./update.php"> Sửa danh mục </a></td>
                        <td> <a href=""> Xóa danh mục <br> (xóa mềm)</a> </td>
                        <td><a href=""> Xóa danh mục <br> (xóa cứng)</a> </td>
                      </tr>
                    </tbody>
                 
                  </table>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-sidebar"><a href="?act=adddm">Thêm danh mục</a></button>
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
  