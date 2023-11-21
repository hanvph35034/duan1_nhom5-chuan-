<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm người dùng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Thêm người dùng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title">Thêm người dùng</h3>
            </div>
            <!-- index.php?act=addnguoidung -->
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="tennguoidung">Tên người dùng</label>
                        <input name="tennguoidung" type="text" class="form-control" id="tennguoidung" placeholder="Tên người dùng">
                    </div>
                    <div class="form-group">
                        <label for="tendangnhap">Tên đăng nhập người dùng</label>
                        <input name="tendangnhap" type="text" class="form-control" id="tendangnhap" placeholder="Tên đăng nhập người dùng">
                    </div>
                    <div class="form-group">
                        <label for="matkhau">Mật khẩu</label>
                        <input name="matkhau" type="password" class="form-control" id="matkhau" placeholder="Mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="img">Ảnh đại diện người dùng</label>
                        <div class="input-group">
                            <input name="img" type="file" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email người dùng</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email người dùng">
                    </div>
                    <div class="form-group">
                        <label for="sdt">Sdt người dùng</label>
                        <input name="sdt" type="number" class="form-control" id="sdt" placeholder="Sdt người dùng">
                    </div>
                    <div class="form-group">
                        <label for="vaitro">Vai trò người dùng</label>
                        <input name="vaitro" type="number" class="form-control" id="vaitro" placeholder="Vai trò người dùng">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="add" id="" value="Thêm người dùng">
                </div>
                <?php
                if (isset($thongbao) && ($thongbao) != "") {
                    echo $thongbao;
                }
                ?>
            </form>

    </section>
    <!-- /.content -->
</div>