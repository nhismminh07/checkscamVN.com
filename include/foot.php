
<?php 

?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-item">
                                <div class="footer-item_text footer-item_decor">
                                    <b>DATA CENTER ADMINISTRATOR VIETNAM</b>
                                </div>
                                <div class="footer-item_link">
                                    <b>SĐT:
                                    <a href="tel:<?=$site_sdt_momo;?>"><?=$site_sdt_momo;?></a></b>
                                </div>
                                <div class="footer-item_link">
                                    <b>Gmail: <?=$gmail_ad;?></b>
                                </div>
                                <div class="footer-item_link">
                                <b>Facebook: <a href="<?=$facebook;?>"><?=$facebook;?></a></b>
                                </div>
                                <div class="footer-item_link">
                                <b>Địa Chỉ: Vietnam</b>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-6">
                            <div class="footer-item">
                                <div class="footer-item_text footer-item_decor">
                                    <b>DỊCH VỤ NỔI BẬT</b>
                                </div>
                                <b><ul class="footer-item_list">
                                    <li>
                                        <a href="/trust-services">Quỹ Bảo Hiểm</a>
                                    </li>
                                    <li>
                                        <a href="/scam/create">Tố Cáo Lừa Đảo </a>
                                    </li>
                                    <li>
                                        <a href="https://scam.vn/check-website?domain=chongscamer.me">Kiểm Tra WEBSITE</a>
                                    </li>
                                </ul></b>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-6">
                            <div class="footer-item">
                                <div class="footer-item_text footer-item_decor">
                                    <b>ĐỐI TÁC </b>
                                </div>
                                <b><ul class="footer-item_list">
<?php
$result = mysqli_query($ketnoi, "SELECT * FROM `dttc` ORDER BY id desc limit 0, 10");
while ($row = mysqli_fetch_assoc($result))
{ ?>
 <li>
<a href="<?=$row['url']; ?>"><?=$row['link']; ?></a>
</li>  
                                    <?php
} ?>                            
                                </ul></b>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-6">
                            <div class="footer-item">
                                <div class="footer-item_text footer-item_decor">
                                    CỘNG ĐỒNG
                                </div>
                                <ul class="list-unstyled mb-0 footer-item_social">
                                    <li class="facebook">
                                        <a href="<?=$facebook;?>">
                                            <i class="fab fa-facebook" style="color: #3366FF;"></i>
                                        </a>
                                    </li>
                                    <li class="telegram">
                                        <a href="#">
                                            <i class="fab fa-telegram" style="color: #00BFFF;"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-facebook-messenger"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#">
                                            <i class="fa fa-youtube" style="color: red;" ></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <center>
<br>
<img src="<?=$site_logo;?>" height="80" alt="DichVuRight.Com">
</br> 
</center>
</footer>
<div class="float-buttons">
    <a href="/scam/create" class="btn-theme btn-theme_primary">TỐ CÁO LỪA ĐẢO<span></span></a>
    <a href="/trust-services" class="btn-theme btn-theme_success">CHECK UY TÍN<span></span></a>
</div>
</body>
</html>