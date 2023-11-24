

  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản trị Đơn hàng</h1>
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
                <h3 class="card-title">Thêm mới Đơn hàng</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=adddh" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Ngày lên đơn</label>
                    <input type="date" name="ngay_dat" id="ngay_dat" class="form-control"  placeholder="Ngày lên đơn">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tổng Giá</label>
                    <input type="text" name="tong_gia" id="tong_gia" class="form-control"  placeholder="Tổng Giá">
                  </div>
                    
                  <div class="form-group">
                    <label for="exampleInputEmail1">Trạng thái đơn hàng</label>
                    <input type="text" name="trang_thai" id="trang_thai" class="form-control"  placeholder="Trạng thái đơn hàng">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Trạng thái đơn hàng</label>
                    <input type="text" name="id_kh" id="id_kh" class="form-control"  placeholder="ID khách hàng">
                  </div>
                  </div>
                </div>
          

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="adddh" >Thêm mới </button>
                </div>
              </form>
            </div>
          </div>
         
        </div>
       
      </div>
    </section>
    <!-- /.content -->
  </div>

