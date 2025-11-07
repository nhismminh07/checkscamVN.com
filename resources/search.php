<?php require_once('../include/head.php'); ?>
<?php require_once('../include/nav.php'); ?>
<?php
$don = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `ticket` WHERE `status` = 'scam' ")) ['COUNT(*)'];
if (isset($_POST['scam'])) {
$search = htmlspecialchars($_POST['scam']);
$sql = mysqli_query($ketnoi, "SELECT * FROM `ticket` WHERE (`stk` like '%$search%') OR (`sdt` like '%$search%') AND `status` = 'scam' ");
$num = mysqli_num_rows($sql);
?>
<title>Tìm thấy <?=$num;?> scammer</title>
<?php require_once('../include/tk.php'); ?>
                        <div class="col-lg-6">
                            <div class="intro-image">
                                <img src="/storage/userfiles/images/bg-scam.png" class="w-100 img-fluid h-auto" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="section-heading mt-4">
                        <div class="desc">
                            <h4>Tìm thấy <?=$num;?> thông tin lừa đảo liên quan đến: "<?=$search;?>"</h4>
                        </div>
                    </div>
<?php
$i=1;
foreach( $sql as $row ) { 
?>
                    <div class="scam-item d-flex align-items-center py-3 px-4 border bg-white" style="border-radius: 20px; margin-bottom: 9px">
                            <div class="scam-title">
                                <span class="scam-title_icon">
                                    <i class="fas fa-user-alt" style="color: <?=$site['color'];?>;"></i>
                                </span>
                                <a href="/scamer/<?=$row['code']; ?>" class="scam-title_link" style="color: black">
                                    ㅤ <?=$row['username']; ?>
                                </a>
                            </div>
                            <div class="scam-info ml-auto">
                                <span class="scam-info_time">
                                    <i class="fas fa-clock" style="color: blue"></i>
                                    <?=$row['ngay']; ?></span>
                                    <span class="scam-info_time">
                                    <i class="fas fa-money-bill-alt" style="color: #28af0e"></i>
                                    <?=$row['ngan_hang']; ?></span>
                                <span class="scam-info_eye">
                                    <i class="fas fa-eye" style="color: green"></i>
                                    <?=$row['view']; ?>
                                </span>
                            </div>
                        </div>
                        <?php
                        //CODE DEV BỞI NGUYỄN HOÀNG MẠNH | VUI LÒNG MUA CODE CHÍNH CHỦ ZALO 0777165380 | NẾU XOÁ DÒNG NÀY CODE SẼ LỖI
} ?>
                                                    
                                                                        </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once('../include/foot.php'); } ?>