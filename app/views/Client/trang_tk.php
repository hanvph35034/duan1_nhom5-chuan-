<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>My account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- my account start  -->
<section class="main_content_area">
    <div class="container">
        <div class="account_dashboard">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list" id="nav-tab">
                            <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Trang Tài Khoản</a></li>
                            <li> <a href="#orders" data-toggle="tab" class="nav-link">Đơn đặt hàng</a></li>
                            <li><a href="#downloads" data-toggle="tab" class="nav-link">Downloads</a></li>
                            <li><a href="#address" data-toggle="tab" class="nav-link">Địa chỉ</a></li>
                            <li><a href="#account-details" data-toggle="tab" class="nav-link">Chi tiết tài khoản</a></li>
                            <li><a href="?act=dangxuat" class="nav-link">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="dashboard">
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <div class="checkout_form">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-4">
                                                    <form action="index.php?act=suatk" method="post">
                                                        <h3>Tài khoản của tôi </h3>
                                                        <div class="row">

                                                            <div class="col-lg-6 mb-20">
                                                                <label>Họ và tên <span>*</span></label>
                                                                <input name="user" type="text" value="<?= $tk['ten_dn'] ?>">
                                                            </div>
                                                            <div class="col-lg-6 mb-20">
                                                                <label>Mat khau<span>*</span></label>
                                                                <input type="password" name="pass" value="<?=$tk['pass']?>">
                                                            </div>
                                                            <!-- <div class="col-12 mb-20">
                                                                <label>Company Name</label>
                                                                <input type="text">
                                                            </div> -->


                                                            <div class="col-12 mb-20">
                                                                <label>Địa chỉ <span>*</span></label>
                                                                <input name="diachi" value="<?= $tk['dia_chi'] ?>" placeholder="House number and street name" type="text">
                                                            </div>
                                                          
                                                        

                                                            <div class="col-lg-6 mb-20">
                                                                <label>Số điện thoại<span>*</span></label>
                                                                <input name ="sdt" value=" <?= $tk['sdt'] ?>" type="text">

                                                            </div>
                                                            <div class="col-lg-6 mb-20">
                                                                <label> Địa chỉ Email <span>*</span></label>
                                                                <input name="email" value="<?= $tk['Email'] ?>" type="text" >

                                                            </div>


                                                            <div class="col-lg-3 mb-6">
                                                                <div class="order">
                                                                    <button name="btn" value="btn" type="submit">Cật nhật tài khoản</button>
                                                                </div>
                                                            </div>
                                                          
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <h3>Orders</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>May 10, 2018</td>
                                            <td><span class="success">Completed</span></td>
                                            <td>$25.00 for 1 item </td>
                                            <td><a href="cart.html" class="view">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>May 10, 2018</td>
                                            <td>Processing</td>
                                            <td>$17.00 for 1 item </td>
                                            <td><a href="cart.html" class="view">view</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="downloads">
                            <h3>Downloads</h3>

                        </div>
                        <div class="tab-pane" id="address">
                            <p>The following addresses will be used on the checkout page by default.</p>
                            <h4 class="billing-address">Billing address</h4>
                            <a href="#" class="view">Edit</a>
                            <p><strong>Bobby Jackson</strong></p>
                            <address>
                                House #15<br>
                                Road #1<br>
                                Block #C <br>
                                Banasree <br>
                                Dhaka <br>
                                1212
                            </address>
                            <p>Bangladesh</p>
                        </div>
                        <div class="tab-pane fade" id="account-details">
                            <h3>Account details </h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account end   -->


<!--call to action start-->

<!--footer area end-->