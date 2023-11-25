
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <!-- customer login start -->
    <div class="customer_login mt-32">
        <div class="container">
            <div class="row">
                <!-- register area start-->
                <div class="col-lg-6 col-md-7">
                    <div class="account_form register">
                        <h2>Đăng kí</h2>
                        <form action="index.php?act=dangki" method="post">
                            
                            <p>
                                <label>Tên tài khoản <span>*</span></label>
                                <input name="user"  type="text">
                          <span style="color: red;"> <?= is_error('user') ?></span>
                            </p>
                            <p>
                                <label>Tên người dùng <span>*</span></label>
                                <input name="ten" type="text">
                                <span style="color: red;"> <?= is_error('ten') ?></span>
                            </p>
                            <p>
                                <label>Email<span>*</span></label>
                                <input name="email" type="text">
                                <span style="color: red;"> <?= is_error('email') ?></span>
                            </p>
                            <p>
                                <label>Mật khẩu<span>*</span></label>
                                <input name ="pass" type="password">
                                <span style="color: red;">  <?= is_error('pass') ?></span>
                            </p>
                            <p>
                                <label>Số điện thoại<span>*</span></label>
                                <input  name ="sdt" type="password">
                                <span style="color: red;">  <?= is_error('sdt') ?></span>
                            </p>  <p>
                                <label>địa chỉ<span>*</span></label>
                                <input name ="diachi" type="password">
                                <span style="color: red;">  <?= is_error('diachi') ?></span>
                            </p>
                            <div class="login_submit">
                                <button value="btn" name="btn" type="submit">Đăng Kí</button>
                            </div>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
                <!-- customer login end -->

                <!--call to action start -->