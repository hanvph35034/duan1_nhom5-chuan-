
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Quản lý chức vụ</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">danh sách Chức vụ</li>
         
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
                  <h3 class="card-title">Quản lý chức vụ </h3>
                </div>
              </div>
              <!-- /.card -->

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Bảng danh sách chức vụ</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Tên chức vụ</th>
                        <th>trạng thái</th>
                        <th>Sửa chức vụ</th>
                        <th>Xóa chức vụ (xóa mềm) </th>
                        <th>Xóa chức vụ (xóa cứng) </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        foreach($loadquyen as $lisdm){
                          extract($lisdm);
                          echo'
                          <tr>
                          <td>'.$id.'</td>
                          <td>'.$ten.'</td>
                          <td>'.$trang_thai.'</td>
                          <td><a href="?act=suaq&&id='.$id.'"> Sửa chức vụ </a></td>
                          <td> <a href="?act=deleteq&&id='.$id.'"> Xóa chức vụ <br> (xóa mềm)</a> </td>
                          <td><a href=""> Xóa chức vụ <br> (xóa cứng)</a> </td>
                        </tr>
                          ';
                        
                        }
                      ?>
                    </tbody>
                 
                  </table>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-sidebar"><a href="?act=addq">Thêm quyền</a></button>
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
  