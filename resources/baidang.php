<?php
require_once('../include/head.php');
if (isset($_GET['code'])) {
    $code = $_GET['code'];
}
$result = $ketnoi->query("SELECT * FROM `news` WHERE `link` = '$code' AND `status` = 'hoantat' ");
while($row = mysqli_fetch_assoc($result)){
mysqli_query($ketnoi, "UPDATE `news` SET luotxem = luotxem + 1 WHERE `link` = '$code' ");
?>
<title> <?=$row['tieude']; ?> </title>
<?php require_once('../include/nav.php'); ?>
<div id="main" class="main"> 
   <div class="container"> 
    <div class="row"> 
     <div class="col-12"> 
      <div class="section-breadcrumb"> 
       <ol class="breadcrumb">
        <li class="breadcrumb-item"> <a href="/">Trang Chủ</a> </li> 
        <li class="breadcrumb-item"> <a href="/news">Tin Tức</a> </li> 
       </ol> 
      </div> 
     </div> 
    </div> 
   </div>
   <div class="container"> 
    <div class="section-page section-detail_article"> 
     <div class="bg-white section-detail_article__inner"> 
      <div class="row"> 
       <div class="col-md-12"> 
        <div class="section-info"> 
         <div class="section-info_name"> 
                            <h1><?=$row['tieude']; ?></h1>
                        </div>
                        <div class="section-info_meta">
                            <div class="section-info_meta__view">
                                <i class="fas fa-eye"></i>
                                <b> <?=$row['luotxem']; ?></b> Đã xem
                            </div>
                            <div class="section-info_meta__day">
                                <i class="fas fa-calendar-alt"></i>
                                <?=$row['ngaydang']; ?>
                            </div></div>
                    </div>
                    
                </div>
                        <div class="col-md-12"> 
        <div class="article-content"> 
                    <?=$row['noidung']; ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php require_once('../include/foot.php'); } ?>
