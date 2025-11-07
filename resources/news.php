<?php require_once('../include/head.php'); ?>
<title>Bài Viết</title>
<?php require_once('../include/nav.php'); 
?>
<div id="main" class="main">
                <div class="section-gap section-article">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <div class="title">
                                Tin Tức Nổi Bật 
                            </div>
                            <div class="line"></div>
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
                                            <center>Xem chi tiết <i class="fa-solid fa-check"></i></center>
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
    <?php require_once('../include/foot.php'); ?>