<?php require_once('../include/head.php'); ?>
<title>Dịch Vụ Uy Tín - <?=$site_tenweb;?></title>
<head>
<audio src="<?=$site['music']?>" autoplay="autoplay"></audio>
</head>
<?php require_once('../include/nav.php'); ?>
<div id="main" class="main">
        <div class="section-gap section-shield">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <a href="https://<?=$_SERVER['HTTP_HOST']?>">
                            <img src="https://i.imgur.com/T1wSE52.png" alt="checkscam" style="display: block; margin: 0 auto 20px; width: 80px;">
                            </a>
                        <div class="title">
                          </i>QUỸ BẢO HIỂM ADMIN</i>
                        </div>
                        <br>
                   <div class="col-12">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6">
                            <form method="POST" action="/">
                    <div class="form-group position-relative">
                        <input type="text" class="form-control" name="scam"
                               placeholder="Tìm Kiếm Admin">
                                            
                    </div>
                </div>
                </div>
                <div class="line"></div>
                <div class="tab">
                    <ul class="nav nav-tabs tab-theme" role="tablist">
                        <li class="nav-item">
                            <a id="all-tab" class="nav-link active" data-toggle="tab" href="#cate-index" role="tab" aria-controls="cate-index" aria-selected="true">
                                Tất cả
                            </a>
                        </li>
<?PHP foreach($ketnoi->query("SELECT * FROM `category` ORDER BY `id` desc") as $cate){ ?>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#cate-<?=$cate['id'];?>" role="tab" aria-controls="cate-<?=$cate['id'];?>" aria-selected="false">
                                        <?=ucfirst($cate['code']);?>
                                    </a>
                                </li>
<?PHP } ?>                                                                    
                            </ul></div></div>
               
                                                            
                            
                 <marquee><h6 style="color: #157DEC">Chúng Tôi Không Hoàn Trả Về Việc Bạn Giao Dịch Với Fake Nên Vui Lòng Check Kĩ AD Nhé !</h6></marquee>
                                                
                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="cate-index" role="tabpanel" aria-labelledby="cate-index-tab">
<?PHP foreach($ketnoi->query("SELECT * FROM `category` ORDER BY id asc") as $lmg){ ?>
                                           <div class="shield-inner" style="border: 1px solid #d2d27c;">                                    
                                        <div class="shield-list">
                                            <div class="shield-title">
                                                <i class="fa-solid fa-star fa-spin" <font style="color: var(--primary-color);"></i>
                                                <?=$lmg['code'];?>
                                                <i class="fa-solid fa-star fa-spin" <font style="color: var(--primary-color);"></i>
                                            </div>
<?php
$i = 1;
foreach($ketnoi->query("SELECT * FROM `cards` ORDER BY id asc") as $check){
    if($check['dich_vu'] == $lmg['code']) {
?>
                                                    <div class="shield-item">
                                                        <a href="HTTPS://<?=$_SERVER['HTTP_HOST']?>/profile/<?=$check['code'];?>" class="shield-item_link">
                                                            <img src="<?=$check['image']?>" alt="">
                                                            <?=sprintf('%02d', $i++); ?>. <?=$check['username']?>
                                                        </a>
                                                    </div>
    <?php  } } ?>                                                
                                        </div>
                                    </div>
                                    <?php } ?>
                        </div>
                        <?php
$i = 1;
                        
                        foreach($ketnoi->query("SELECT * FROM `category` ORDER BY `id` desc") as $cate){ ?>
                        <div class="tab-pane fade" id="cate-<?=$cate['id'];?>" role="tabpanel" aria-labelledby="cate-<?=$cate['id'];?>-tab">
                            <div class="shield-inner ut"  style="border: 1px solid #d2d27c;">       
                                <div class="shield-list">
                                    <div class="shield-title">
                                        <i class="fa-solid fa-star fa-spin" <font style="color: var(--primary-color);"></i>
                                        <?=$cate['code'];?>
                                        <i class="fa-solid fa-star fa-spin" <font style="color: var(--primary-color);"></i>
                                    </div>
                                <?PHP $catee = $cate['code'];  foreach($ketnoi->query("SELECT * FROM `cards` WHERE `dich_vu` = '$catee' ORDER BY `id` asc") as $userr){ ?>    
                                    <div class="shield-item">
                                        <a href="/trust-services/<?=$userr['code'];?>" class="shield-item_link">
                                            <img src="<?=$userr['image'];?>" alt="" />
                                            <?=sprintf('%02d', $i++); ?>. 
                                            <?=$userr['username']?>
                                        </a>
                                    </div>
                                <?PHP } ?>    
                                </div>
                            </div>
                        </div>
                        <?PHP } ?>                         
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
// Lắng nghe sự kiện click trên các tab DVCC
document.querySelectorAll('.nav-link').forEach(tab => {
    tab.addEventListener('click', () => {
        const dvcc = tab.getAttribute('data-dvcc'); // Lấy giá trị DVCC từ tab

        // Lặp qua tất cả các hồ sơ và ẩn/hiện dựa trên DVCC
        document.querySelectorAll('.shield-item').forEach(profile => {
            const profileDvcc = profile.getAttribute('data-dvcc');

            if (dvcc === 'all' || profileDvcc === dvcc) {
                profile.style.display = 'block';
            } else {
                profile.style.display = 'none';
            }
        });
    });
});
// Lắng nghe sự kiện khi thẻ "Tất cả" được nhấn
    const allTab = document.getElementById('all-tab');
    allTab.addEventListener('click', () => {
        // Hiển thị tất cả các hồ sơ
        document.querySelectorAll('.shield-item').forEach(profile => {
            profile.style.display = 'block';
        });
    });
</script>
<?php require_once('../include/foot.php'); ?>
<?php include('last.php');?>
<?php require_once('../resources/lienhe.php'); ?>