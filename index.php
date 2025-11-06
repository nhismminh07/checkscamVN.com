<?php require_once ('include/head.php'); ?>
<title><?=$site_mota;?></title>
 <style>
    /* Tùy chỉnh ảnh nền cho modal */
    .custom-modal-bg {
      background-image: url('<?=$site['thumb_model'];?>');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      /* Thêm độ mờ nếu bạn muốn */
      /* opacity: 0.7; */
    }
  </style>
  <style>
    @keyframes colorTransition {
      0% { color: red; }
      25% { color: orange; }
      50% { color: yellow; }
      75% { color: green; }
      95% { color: blue; }
    }

    .color-changing-text {
      animation: colorTransition 5s infinite; /* 5s là thời gian của mỗi chu kỳ chuyển đổi, infinite để lặp lại vô hạn */
    }
  </style>
<?php require_once ('include/nav.php');
$don = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `ticket` WHERE `status` = 'scam' ")) ['COUNT(*)'];
?>
<?php
    $baotri = $site['baotri'];
    if($baotri > 0){
        echo "<br><p><strong><center>Website Đang Được Bảo Trì</center></strong></p>";
        echo "<p><strong><center>Vui Lòng Không Truy Cập Website Trong 30p Nữa!!</p></strong></center>";
    }
?>
<body class="" style=""><div id="main" class="main">
    <div class="section-gap section-intro">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <div class="title text-center">
                            <a href="https://<?=$_SERVER['HTTP_HOST']?>">
                                <img src="https://i.imgur.com/T1wSE52.png" alt="checkscam" style="display: block;margin: 0 auto 20px;width:80px;">
                            </a>
                            KIỂM TRA &amp; TỐ CÁO SCAMMER
                        </div>
                        <div class="line"></div>
                        <div class="desc text-center">
                            <p>Kiểm Tra <strong>"SĐT, STK Ngân Hàng, Tên..."</strong> Trước Khi Giao Dịch Bằng Cách Nhập Thông Tin Vào <strong>"Thanh Tìm Kiếm"</strong></p>
                            <p>Với Hơn <strong>10.000 Dữ Liệu Về Các Thông Tin Lừa Đảo Trên Khắp MXH</strong></p>
                            <p>Sẽ giúp bạn mua bán an toàn hơn khi online !!!</p>
                            <a href="https://<?=$_SERVER['HTTP_HOST']?>/trust-services"><strong>"Check Ở Đây Trước Khi Giao Dịch"</strong></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6">
                            <form method="POST" action="/search/scam">
                    <div class="form-group position-relative">
                        <input type="text" class="form-control" name="scam"
                               placeholder="Nhập Sđt Ngân Hàng & Kiểm Tra ">
                                                           <button type="submit">
                            <i class="fa-solid fa-magnifying-glass" style="color: var(--primary-color)"></i>
                        </button>
                    </div>
                     <marquee><h6 style="color: #157DEC">Hiện Nay Có Rất Nhiều Website Giả Mạo Vui Lòng Check Kỹ Trước Khi Giao Dịch!</h6></marquee>
                                <div class="cscam text-center mb-3">
                                    <a href="/scam/create" class="btn-theme btn-theme_primary" style="color: white">
                        <b>GỬI TỐ CÁO LỪA ĐẢO</b>
                    </a>
                    <a href="/trust-services" class="btn-theme btn-theme_success" style="color: white">
                       <b>CHECK QUỸ BẢO HIỂM</b>
                                    </a>
                                </div>
                            </form>
                            <div class="text-center gif">
                                <img src="<?=$site['banner'];?>" alt="ADMIN VIETNAM" class="w-100 img-fluid h-auto" alt="">
                            </div>
                        </div>
                    </div>
                </div>
  
                <div class="col-12">
                        <div class="section-heading">
                    <div class="title">
                        <font color="var(--primary-color)"><?=$don; ?> SCAM BỊ TỐ CÁO: <?=date('d/m/Y'); ?></font>
                    </div>
                        </div>
<?php
$i = 1;
$result = mysqli_query($ketnoi, "SELECT * FROM `ticket` WHERE `status` = 'scam' ORDER BY id desc limit 0, 10");
while ($row = mysqli_fetch_assoc($result))
{ ?>
                    
                            
                          
                      </div>
                      <div class="container">
                      <div class="scam-tn">
                    <div class="scam-list">
                    
                      <div class="scam-item d-flex align-items-center py-3 px-4 border bg-white" style="border-radius: 17px; margin-bottom: 9px">
                            <div class="scam-title">
                                <span class="scam-title_icon">
                                    <i class="fas fa-user-alt" style="color: <?=$site['color'];?>;"></i>
                                </span>
                                <a href="/scams/<?=$row['code']; ?>.html" class="scam-title_link" style="color: black">
                                    ㅤ <?=$row['username']; ?>
                                </a>
                            </div>
                             <div class="scam-info ml-auto">
                                <span class="scam-info_time">
                                    <i class="fas fa-clock fa-spin" style="color: blue"></i>
                                    <?=$row['ngay']; ?></span>
                                    <span class="scam-info_phone">
                                    <i class="fas fa-money-bill-alt" style="color: #85bb65"></i>
                                    <?=$row['ngan_hang']; ?>: <?=$row['stk']; ?> </span>
                                <span class="scam-info_eye">
                                    <i class="fas fa-eye" style="color: green"></i>
                                    <?=$row['view']; ?>
                                </span>
                            </div>
                        </div>
                      </div>
                      </div>
                      
                      
                        
                        <?php
} ?>
                                                    
                                                                        </div>
                </div>
            </div>
        </div>
    </div>
       <div class="section-gap section-service">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <div class="title">
                            Dịch Vụ Nổi Bật
                        </div>
                        <div class="line"></div>
                        <div class="desc">
                            Các tin tức nổi bật về tình trạng scam hiện nay. Hãy đọc tin tức để phòng hờ các kẻ xấu lợi
                            dụng scam
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row row-col-10">
                                                <div class="col-12 col-sm-6 col-lg-3">
                            <div class="service-card">
                                <div class="service-bg_main"></div>
                                <div class="service-bg_before"></div>
                                <div class="service-bg_after"></div>
                                <div class="service-icon">
                                    <i class="far fa-edit"></i>
                                </div>
                                <div class="service-content">
                                    <a href="/" class="service-content_title">
                                        Kiểm Tra Lừa Đảo
                                    </a>
                                    <div class="service-content_desc">
                                        Bạn chỉ cần nhập SDT, STK ngân hàng, thông tin của scammer vào trong ô tìm kiếm sẽ được phơi bày
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="/" class="btn-theme btn-theme_white">
                                        Truy Cập
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                                                    <div class="col-12 col-sm-6 col-lg-3">
                            <div class="service-card">
                                <div class="service-bg_main"></div>
                                <div class="service-bg_before"></div>
                                <div class="service-bg_after"></div>
                                <div class="service-icon">
                                    <i class="fas fa-exclamation-circle"></i>
                                </div>
                                <div class="service-content">
                                    <a href="/scam/create" class="service-content_title">
                                        Tố cáo lừa đảo
                                    </a>
                                    <div class="service-content_desc">
                                        Bạn muốn tố cáo một ai đó đang lừa đảo bạn ,đã đủ chứng cứ để kẻ lừa đảo phải chịu hình phạt
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="/scam/create" class="btn-theme btn-theme_white">
                                        Tố cáo
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                                                    <div class="col-12 col-sm-6 col-lg-3">
                            <div class="service-card">
                                <div class="service-bg_main"></div>
                                <div class="service-bg_before"></div>
                                <div class="service-bg_after"></div>
                                <div class="service-icon">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <div class="service-content">
                                    <a href="/trust-services" class="service-content_title">
                                        Check quỹ bảo hiểm
                                    </a>
                                    <div class="service-content_desc">
                                        Check quỹ bảo hiểm được Admin VietNam đảm bảo xác nhận uy tín trên từng giao dịch
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="/trust-services" class="btn-theme btn-theme_white">
                                        Xem Ngay
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                                                    <div class="col-12 col-sm-6 col-lg-3">
                            <div class="service-card">
                                <div class="service-bg_main"></div>
                                <div class="service-bg_before"></div>
                                <div class="service-bg_after"></div>
                                <div class="service-icon">
                                    <i class="fab fa-edge"></i>
                                </div>
                                <div class="service-content">
                                    <a href="https://trumthenhanh.com" class="service-content_title">
                                        TRUMTHENHANH.COM
                                    </a>
                                    <div class="service-content_desc">
                                        GẠCH THẺ UY TÍN THẤP NHẤT THỊ TRƯỜNG
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="https://trumthenhanh.com" class="btn-theme btn-theme_white">
                                        Nạp Ngay
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                                                </div>
                </div>
            </div>
        </div>
    </div>
    </div></b>
        <div class="section-gap section-article">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <div class="title">
                                <b><font>TIN TỨC NỔI BẬT</font></b>
                            </div>
                        </div>
                    <div class="col-12">
                        <div class="row row-col-10">
                        <?php
$result = mysqli_query($ketnoi, "SELECT * FROM `news` WHERE `status` = 'hoantat' ORDER BY id desc limit 0, 10");
while ($row = mysqli_fetch_assoc($result))
{ ?>
                                                        <div class="col-12 col-sm-6 col-lg-3">
                                <a href="/news/<?=$row['link']; ?>" class="article-card card">
                                    <div class="card-header">
                                        <img src="<?=$row['image-news']; ?>"
                                             class="mw-100 image-cover transition-default">
                                    </div>
                                    <div class="card-body py-0 d-flex flex-column">
                                        <div class="card-meta">
                                           Ngày đăng:&nbsp;<?=$row['ngaydang']; ?>
                                        </div>
                                        <div class="card-title">
                                        <?=$row['tieude']; ?>
                                        </div>
                                        <div class="card-text">
                                            
                                        </div>
                                        <div class="card-link mt-auto">
                                           <center> Xem chi tiết <i class="fa-solid fa-check"></i></center>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
} ?>                                
                        </div>
                    </div>
                </div>
            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
        <div class="modal-content custom-modal-bg">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><div class="color-changing-text">Thông Báo</div></h5>
               <button type="button" class="close" data-dismiss="modal" style="color: #ff0000">&times;</button>
            </div>
            <div class="modal-body">
               <p><p><?=$site['modal']; ?></p></p>
            </div>
            
            <div class="modal-footer">
                        <button type="button" onclick="hidden_noti()" class="btn btn-danger">Đóng</button>
                    </div>
                    
        </div>
    </div>
            </div>
       
<script>
$(document).ready(function() {
$("#staticBackdrop").modal('show');
});
function hidden_noti(){
    $("#staticBackdrop").modal('hide');
}
function hidden_noti_2h(){
document.cookie = 'hidden_noti=1700316234'
$("#staticBackdrop").modal('hide');
};
</script>
<?php require_once ('include/foot.php'); ?>
<?php require_once ('include/last.php'); ?>
<?php require_once ('resources/lienhe.php'); ?>
