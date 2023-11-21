<div class="content-wrapper">
  <section class="content">
    <?php
    if (isset($_SESSION['user'])) {
      extract($_SESSION['user']);
    ?>
      <p>Tên người dùng: <?= $ten_nguoi_dung ?></p>
      <?php
      if ($vai_tro == 1) {
      ?>
        <p>Chức vụ: ADMIN</p>
    <?php
      }else{
        ?>
        <p>Chức vụ: Người bán hàng</p>
        <?php
      }
    }
    ?>
  </section>
</div>