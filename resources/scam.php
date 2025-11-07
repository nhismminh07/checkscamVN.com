<?php
require_once('../include/head_scam.php');
if (isset($_GET['code'])) {
    $code = $_GET['code'];
}
$result = $ketnoi->query("SELECT * FROM `ticket` WHERE `code` = '$code' AND `status` = 'scam' ");
while($row = mysqli_fetch_assoc($result)){
mysqli_query($ketnoi, "UPDATE `ticket` SET view = view + 1 WHERE `code` = '$code' ");
?>
<title><?=$row['username'];?> | Đã Bị Tố Cáo Tại Duykhanh.vn</title>
<?php require_once('../include/config.php'); ?>
<?php require_once('../include/nav.php'); ?>
<div id="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Trang Chủ</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Lừa Đảo</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Lừa Đảo - <?=$row['username'];?></a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="section-gap section-scammer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="scammer-box">
                        <div class="scammer-box_title">
                            <i class="fas fa-exclamation"></i>
                            Thông Tin Lừa Đảo
                        </div>
                        <div class="scammer-box_wrap">
                            <div class="scammer-item">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-user-alt"></i>
                                    Họ Và Tên 
                                </div>
                                <div class="scammer-item_content">
                                    <?=$row['username'];?>
                                </div>
                            </div>
                            <div class="scammer-item">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-phone-alt"></i>
                                    Số Điện Thoại
                                </div>
                                <div class="scammer-item_content">
                                    <?=$row['sdt'];?>
                                    <a href="javascript:void(0)" class="copy-text" data-text="<?=$row['sdt'];?>">
                                        <i class="fas fa-copy"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="scammer-item">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-credit-card"></i>
                                    Số Tài Khoản 
                                </div>
                                <div class="scammer-item_content">
                                    <?=$row['stk'];?>
                                    <a href="javascript:void(0)" class="copy-text" data-text="<?=$row['stk'];?>">
                                        <i class="fas fa-copy"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="scammer-item">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-university"></i>
                                    Ngân Hàng 
                                </div>
                                <div class="scammer-item_content">
                                    <?=$row['ngan_hang'];?>
                                </div>
                            </div>
                            <div class="scammer-item flex-wrap flex-md-nowrap">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-images"></i>
                                    Ảnh Chụp Bằng Chứng
                                </div>
                                <div class="scammer-item_content">
                                    <div class="scammer-item_content__image">
    <?php $img = mysqli_query($ketnoi,"SELECT * FROM `bangchung` WHERE `code` = '$code' ORDER BY id desc");while($bc = mysqli_fetch_assoc($img)) { ?>
                                        <div class="scammer-item_content__image-item">
                                            <a href="<?=$bc['image'];?>" data-fancybox="image-scammer">
                                                <img src="<?=$bc['image'];?>" alt="" />
                                            </a>
                                        </div>
    <?php } ?>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="scammer-item flex-wrap flex-md-nowrap">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-pen-square"></i>
                                    Mô Tả Sự Việc
                                </div>
                                <div class="scammer-item_content">
                                    <?=$row['ly_do'];?><br>
                                    <b>Nguồn tố cáo</b>
                                    <a href="https://<?=$_SERVER['HTTP_HOST']?>/scams/<?=$row['code']; ?>.html">
                                        https://<?=$_SERVER['HTTP_HOST']?>/scams/<?=$row['code']; ?>.html
                                    </a>
                                    <a href="javascript:void(0)" class="copy-text" data-text="https://<?=$_SERVER['HTTP_HOST']?>/scams/<?=$row['code']; ?>.html">
                                        <i class="fas fa-copy"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="scammer-box">
                        <div class="scammer-box_title">
                            <i class="fas fa-user-alt"></i>
                            Người Tố Cáo
                        </div>
                        <div class="scammer-box_wrap">
                            <div class="scammer-item">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-user-alt"></i>
                                    Họ Và Tên
                                </div>
                                <div class="scammer-item_content">
                                    <?=substr($row['hoten_np'], 0, 6).'*******';?>
                                </div>
                            </div>
                            <div class="scammer-item">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-phone-alt"></i>
                                    Liên Hệ
                                </div>
                                <div class="scammer-item_content">
                                    <?=substr($row['sdt_np'], 0, 4).'******';?>
                                </div>
                            </div>
                            <div class="scammer-item">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-link"></i>
                                    Link phốt MXH
                                </div>
                                <div class="scammer-item_content">
                                    <?=hideCharactersInURL($row['link_report']);?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scammer-box">
                        <div class="scammer-box_title">
                            <i class="fas fa-list-alt"></i>
                            Danh Sách Lừa Đảo 
                        </div>
<?php
$i = 1;
$result = mysqli_query($ketnoi, "SELECT * FROM `ticket` WHERE `status` = 'scam' ORDER BY id desc limit 0, 10");
while ($row = mysqli_fetch_assoc($result))
{ ?>
                              <div class="scam-item d-flex align-items-center py-3 px-4 bg-white scammer-box_wrap">
                            <div class="scam-title">
                                <span class="scam-title_icon">
                                    <i class="fas fa-user-alt" style="color: red"></i>
                                </span>
                                <a href="/scamer/<?=$row['code']; ?>" class="scam-title_link" style="color: black">
                                    ㅤ<b><?=$row['username']; ?></b>
                                </a>
                            </div>
                            <div class="scam-info ml-auto">
                                <span class="scam-info_time">
                                    <i class="fas fa-clock" style="color: blue"></i>
                                  <?=$row['ngay']; ?>ㅤ-ㅤ</span>
                                    <span class="scam-info_time">
                                    <i class="fas fa-money-bill-alt" style="color: #F4E06D"></i>
                                    <?=$row['ngan_hang']; ?>ㅤ-ㅤ</span>
                                <span class="scam-info_eye">
                                    <i class="fas fa-eye" style="color: green"></i>
                                    <?=$row['view']; ?>
                                </span>
                            </div>
                        </div>
                        <?php 
} ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../include/foot.php'); } ?>
