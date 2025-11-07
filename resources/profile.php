<?php
require_once '../include/header.php';
require_once '../include/nav.php';
if (isset($_GET['code'])) {
    $id = $_GET['code'];
}
$result = mysqli_query($ketnoi,"SELECT * FROM `cards` WHERE `code` = '".$id."' ORDER BY id desc limit 0, 1");
while($row = mysqli_fetch_assoc($result))
{
?>
<title> [ ADMIN ] Administrator VietNam BH |<?=$row['username'];?></title>
<div id="main" class="main">
        <div class="section-gap section-profile">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="profile-inner">
                        <div class="profile-avatar">
                            <img src="<?=$row['image'];?> alt="">
                        </div>
                        <div class="profile-title">
                            <?=$row['username'];?> <img src="https://i.imgur.com/pdF33Fl.gif" alt="Đã Xác Minh" style="height: 30px;">
                        </div>
                        <div class="profile-buttons">
                            <div class="btn-checkmess">
                                <a href="https://m.me/<?=$row['id_fb'];?>/" class="btn-theme btn-theme_primary" target="_blank">
                                    <i class="fab fa-facebook-messenger"></i>
                                    Check Mess
                                    <span></span>
                                </a>
                                <a href="http://m.me/<?=$row['id_fb'];?>/" class="description-hidden">
                                    <span>Ấn vào "Check Mess" nhắn tin cho GDV để chắc chắn rằng bạn đang giao dịch với Real</span>
                                    <button>
                                        Ok
                                    </button>
                                </a>
                                <div class="description-overlay"></div>
                            </div>
                            <a href="https://facebook.com/<?=$row['id_fb'];?>/" class="btn-theme btn-theme_primary" target="_blank">
                                    <i class="fab fa-facebook-f "></i>
                                    Check Facebook
                                <span style="top: -28.9062px; left: 424.172px;"></span>
                            </a>
                        </div>
                        <br> 
                         <b> <div class="container" style=" margin-right: auto; margin-bottom: 10px; background-color: var(--primary-color); border-radius: 20px; padding: 5px; color: white;"> <center>Thông Tin Bảo Hiểm</center> </div> </b> <div class="container">
                        
                        <div class="profile-boxs">
                            <div class="row row-col-15">
                                <div class="col-md-6">
                                    <div class="profile-box" style="border: 1px solid #d2d27c;">
                                        <div class="profile-box_content">
                                            <div class="profile-box_content__title">
                                                 Thông tin liên Hệ Của <font color="red">"<?=$row['username'];?>" : <img src="https://i.imgur.com/WYCzeyR.gif" alt="Đã Xác Minh" style="height: 30px;"> </font>
                                                <ul class="pl-3 mb-0">
                                            </div>
                                            <div class="profile-box_content__list">
                                                <p>
                                                    <span>
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1200px-Facebook_Logo_%282019%29.png" alt="">
                                                    </span>
                                                    Check Facebook:
                                                    <a href="https://fb.com/<?=$row['id_fb'];?>" target="_blank">
                                                        <?=$row['id_fb'];?>
                                                    </a>
                                                    
                                                </p>
                                                <p>
                                                    <span>
                                                    
                                                    <img src="https://i.imgur.com/4DLPvxt.png" alt="">
                                                    </span>
                                                    Check Instagram:
                                                    <a href="https://www.instagram.com/<?=$row['id_inta'];?>" target="_blank">
                                                        <?=$row['id_inta'];?>
                                                    </a>
                                                    
                                                </p>
                                                <p>
                                                    <span>
                                                        
                                                        <img src="https://cdn.haitrieu.com/wp-content/uploads/2022/01/Logo-Zalo-Arc.png" alt="https://cdn.haitrieu.com/wp-content/uploads/2022/01/Logo-Zalo-Arc.png">
                                                    </span>
                                                    Check Zalo:
                                                    <a href="https://zalo.me/<?=$row['sdt'];?>/" target="_blank">
                                                        <?=$row['sdt'];?>
                                                    </a>
                                                    
                                                </p>
                                                <p>
                                                <span>
                                                        <img src="https://i.imgur.com/6yUbPAX.png" alt"dichvuright"
                                                    </span>
                                                    Check Tele:
                                                    <a href="https://t.me/<?=$row['telegram'];?>/" target="_blank">
                                                        <?=$row['telegram'];?>
                                                    </a>
                                                    
                                                </p>
                                                <p>
                                                    <span>
                                                          <img src="https://seeklogo.com/images/G/google-chrome-logo-95B6A0B483-seeklogo.com.png" alt="https://seeklogo.com/images/G/google-chrome-logo-95B6A0B483-seeklogo.com.png">
                                                    </span>
                                                    Website:
                                                    <a href="//<?=$row['website'];?>/">
                                                        <?=$row['website'];?>
                                                    </a>
                                                    
                                                </p>
                                            </div>
                                            <div class="profile-box_content__image">
                                                 <img src="https://chart.googleapis.com/chart?chs=96x96&cht=qr&chl=https://www.facebook.com/<?=$row['id_fb'];?>" alt="" style="height: 550px;">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="profile-box" style="border: 1px solid #d2d27c;">
                                        <div class="profile-box_content">
                                            <div class="profile-box_content__title">
                                                Quỹ Bảo Hiểm <font color="red"><?=$site_tenweb;?> </font><img src="https://i.imgur.com/XKSCBhJ.gif" alt="Đã Xác Minh" style="height: 20px;">
                                            </div>
                                            <div class="profile-box_content__desc"><b>Từ Ngày</b><strong class="text-danger"> <?=$row['ngay'];?></strong>
                                                <b>Khách hàng sẽ được <b><strong class="text-success"><?=$site_tenweb;?></strong></b>  bảo hiểm an toàn giao dịch với số
                                                    tiền trong quỹ bảo hiểm 
                                                    <strong class="text-danger""><?=format_cash($row['money']);?> VND</strong> của <strong> <strong class="text-danger""><?=$row['username'];?></strong></p>
                                            </div>
                                            <div class="profile-box_content__image">
                                                <img src="https://i.imgur.com/3LRgYby.png" alt="Đã Xác Minh" style="height: 140px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <div class="profile-boxs">
                        <div class="profile-box profile-box_nopr" style="border: 1px solid #d2d27c;">
                                <div class="profile-box_content">
                                    <div class="profile-box_content__title">
Vui lòng kiểm tra kỹ thông tin trước khi giao dịch tránh
                                        Fake:
                                    </div>
                                    <div class="profile-box_content__subtitle">
                                        
<strong>Số Tài Khoản Của</strong> <strong class="text-danger"">"<?=$row['username'];?>"</strong> <img src="https://i.imgur.com/xFS9UOM.gif" alt="Đã Xác Minh" style="height: 30px;">
</div>
                                    
                                   <b><ul class="pl-3 mb-0">
<?php
 if($row['status_momo'] > 0){
?>
<li class="oo9gr5id" dir="auto"> <img src="https://i.imgur.com/1FQtorr.png" height="15"> MOMO : <font style="color: var(--ditme)"><?=$row['momo'];?></font> <font color="#000000"> <a href="javascript:void(0)" class="copy-text" data-text="<?=$row['momo'];?>"><i class="fas fa-copy" onclick="alert('Copy Thành Công Momo')"> </i></a>
<?php } ?>

<?php
 if($row['status_mb'] > 0){
?>
<li class="oo9gr5id" dir="auto"> <img src="https://i.imgur.com/ftwE7Es.png" height="15"> MB Bank : <font style="color: var(--ditme)"><?=$row['mb'];?></font> <font color="#000000"> <a href="javascript:void(0)" class="copy-text" data-text="<?=$row['mb'];?>"><i class="fas fa-copy" onclick="alert('Copy Thành Công MB Bank')"></i></a>
<?php } ?>

<?php
 if($row['status_bidv'] > 0){
?>
<li class="oo9gr5id" dir="auto"> <img src="https://i.imgur.com/LEmCjng.png" height="15"> BIDV : <font style="color: var(--ditme)"><?=$row['bidv'];?></font> <font color="#000000"> <a href="javascript:void(0)" class="copy-text" data-text="<?=$row['bidv'];?>"><i class="fas fa-copy" onclick="alert('Copy Thành Công BIDV')"></i></a>
<?php } ?>

<?php
 if($row['status_zalop'] > 0){
?>
<li class="oo9gr5id" dir="auto"> <img src="https://i.imgur.com/Bqe2xw5.png" height="15"> ZALO PAY : <font style="color: var(--ditme)"><?=$row['zalop'];?></font>  <font color="#000000"> <a href="javascript:void(0)" class="copy-text" data-text="<?=$row['zalop'];?>"> <i class="fas fa-copy" onclick="alert('Copy Thành Công Zalo Pay')"></i></a>
<?php } ?>

<?php
 if($row['status_scb'] > 0){
?>
<li class="oo9gr5id" dir="auto"> <img src="https://i.imgur.com/nKqvckY.png" height="15">  SCB : <font style="color: var(--ditme)"><?=$row['scb'];?></font> <font color="#000000"> <a href="javascript:void(0)" class="copy-text" data-text="<?=$row['scb'];?>"> <i class="fas fa-copy" onclick="alert('Copy Thành Công SCB')"></i></a>
<?php } ?>

<?php
 if($row['status_vcb'] > 0){
?>
<li class="oo9gr5id" dir="auto"> <img src="https://i.imgur.com/DoAAoml.png" height="15"> VCB : <font style="color: var(--ditme)"><?=$row['vcb'];?></font> <font color="#000000"> <a href="javascript:void(0)" class="copy-text" data-text="<?=$row['vcb'];?>"> <i class="fas fa-copy" onclick="alert('Copy Thành Công VCB')"></i></a>
<?php } ?>

<div class="profile-box_content_watermark">
<img src="<?=$site_logo;?>" alt="">
</div>

<?php
 if($row['status_agri'] > 0){
?>
<li class="oo9gr5id" dir="auto"> <img src="https://i.imgur.com/LUoNgQX.png" height="15"> AGRIBANK : <font style="color: var(--ditme)"><?=$row['agri'];?><font color="#000000"> <a href="javascript:void(0)" class="copy-text" data-text="<?=$row['agri'];?>"> <i class="fas fa-copy" onclick="alert('Copy Thành Công AGRIBANK')"></i></a>
<?php } ?>

<?php
 if($row['status_tsr'] > 0){
?>
<li class="oo9gr5id" dir="auto"> <img src="https://i.imgur.com/yaaWIHf.png" height="15"> THESIEURE : <font style="color: var(--ditme)"> <?=$row['tsr'];?></font> <font color="#000000"> <a href="javascript:void(0)" class="copy-text" data-text="<?=$row['tsr'];?>"><i class="fas fa-copy" onclick="alert('Copy Thành Công THESIEURE')"></i></a>
<?php } ?>

<?php
 if($row['status_gt1s'] > 0){
?>
<li class="oo9gr5id" dir="auto"> <img src="https://i.imgur.com/jnN4Daf.png" height="15">  GACHTHE1S : <font style="color: var(--ditme)"><?=$row['gt1s'];?></font> <font color="#000000"> <a href="javascript:void(0)" class="copy-text" data-text="<?=$row['gt1s'];?>"> <i class="fas fa-copy" onclick="alert('Copy Thành Công GACHTHE1S')"></i></a>
<?php } ?>

<?php
 if($row['status_tpbank'] > 0){
?>
<li class="oo9gr5id" dir="auto"> <img src="https://i.imgur.com/VMDqAEz.png" height="15">  TP BANK : <font style="color: var(--ditme)"><?=$row['tpbank'];?></font> <font color="#000000"> <a href="javascript:void(0)" class="copy-text" data-text="<?=$row['tpbank'];?>"> <i class="fas fa-copy" onclick="alert('Copy Thành Công TP BANK')"></i></a>
<?php } ?>

<?php
 if($row['status_vtbank'] > 0){
?>
<li class="oo9gr5id" dir="auto"> <img src="https://i.imgur.com/3glZrQx.png" height="15">  VIETTINBANK : <font style="color: var(--ditme)"><?=$row['vtbank'];?></font> <font color="#000000"> <a href="javascript:void(0)" class="copy-text" data-text="<?=$row['vtbank'];?>"> <i class="fas fa-copy" onclick="alert('Copy Thành Công VIETTINBANK')"></i></a>
<?php } ?>

<?php
 if($row['status_acb'] > 0){
?>
<li class="oo9gr5id" dir="auto"> <img src="https://i.imgur.com/F2SA7Ju.png" height="15">  ACB : <font style="color: var(--ditme)"><?=$row['acb'];?></font> <font color="#000000"> <a href="javascript:void(0)" class="copy-text" data-text="<?=$row['acb'];?>"> <i class="fas fa-copy" onclick="alert('Copy Thành Công ACB')"></i></a>
<?php } ?>

<?php
 if($row['status_tcb'] > 0){
?>
<li class="oo9gr5id" dir="auto"> <img src="https://i.imgur.com/Fwe8AU1.png" height="15">  TECHCOMBANK : <font style="color: var(--ditme)"><?=$row['tcb'];?></font> <font color="#000000"> <a href="javascript:void(0)" class="copy-text" data-text="<?=$row['tcb'];?>"> <i class="fas fa-copy"onclick="alert('Copy Thành Công ACB')"></i></a>
<?php } ?>
</ul></b>
          <br>    
    <div class="profile-box_content">
    <div class="profile-box_content__subtitle">
<strong>Dịch Vụ Trung Gian Của</strong> <strong class="text-danger"">"<?=$row['username'];?>"</strong> <img src="https://i.imgur.com/VA1hrMv.gif" alt="Đã Xác Minh" style="height: 25px;">
</div>
 <b><ul class="pl-3 mb-0">
                                            <li class="oo9gr5id" dir="auto"><font style="color: var(--dvtg);"> <strong>10,000 - 199,000 : </strong></font><b><font style="color: var(--ditme)"><?=$row['tg1'];?></b></font>
    <li class="oo9gr5id" dir="auto"> <font style="color: var(--dvtg);"><strong>200,000 - 1,000,000 : </strong></font><b><font style="color: var(--ditme)"><?=$row['tg2'];?></b></font>
    <li class="oo9gr5id" dir="auto"> <font style="color: var(--dvtg);"><strong>1,000,000 - 2,000,000 : </strong></font><b><font style="color: var(--ditme)"><?=$row['tg3'];?></b></font>
    <li class="oo9gr5id" dir="auto"><font style="color: var(--dvtg);"><strong>2,000,000 - 5,000,000 : </strong></font><b><font style="color: var(--ditme)"><?=$row['tg4'];?></b></font>
    <li class="oo9gr5id" dir="auto"> <font style="color: var(--dvtg);"><strong>5,000,000 trở lên : </strong></font><b><font style="color: var(--ditme)"><?=$row['tg5'];?></b></font>
                                            
                                    </ul></b>
        </div>
        </div>
        </div>
<div class="profile-boxs">
<div class="profile-box profile-box_nopr" style="border: 1px solid #d2d27c;">
<div class="profile-box_content">
<div class="profile-box_content__title">Mô Tả: <img src="https://i.imgur.com/UVwzWMn.gif" alt="Đã Xác Minh" style="height: 30px;"></div> 
<b><ul class="pl-3 mb-0">
     <li><p><span style="font-weight: bold; color: rgb(230, 126, 34);"> Điều hành trang Data Center </span><b style=""><font color="--primary-color"><?=$site_tenweb;?></font></b></a><span style="font-weight: bold; color: rgb(230, 126, 34);"> có quyền quyết định sử phạt tất cả các vi phạm về điều khoản.</span></p></li>
     <li><p><span style="color:#e67e22"> Có quyền trích quỹ hoàn trả toàn bộ số tiền quỹ bảo hiểm lại cho nạn nhận nếu giao dịch với </span><font color="--primary-color"><b><?=$site_tenweb;?></b></font></a><span style="color:#e67e22"> xảy ra sự cố không mong muốn.</span></p><br></li>                               
                                    </ul></b>
</div>
</div>
</div>
</div><br>
                        
              

                       <div class="profile-desc">
                            <p class="cc"><b>⚠️ <u>LƯU Ý KHI GIAO DỊCH</u>:</b> Hãy luôn tuân thủ <b><a href="/post/dieukhoan.html" target="_blank">Nội Quy Giao Dịch</a></b>. Để tránh gặp Fake, Scam. Bạn nhớ Kiểm Tra Kỹ "<b>Link BH</b>, <b>Link fb ad</b>, <b>Sđt</b>, <b>Stk</b>" hoặc gửi vào <b><a href="https://dichvuright.com" target="_blank">Cộng đồng DichVuRight</a></b>. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../include/foot.php'); ?>
    <?php include('last.php');?>
    <br>
    <br>
    <br>
<?php } ?>
  
   
