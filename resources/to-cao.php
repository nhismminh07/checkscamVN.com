<?php require_once('../include/head.php'); ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/min/dropzone.min.css">
<script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/min/dropzone.min.js"></script>
<style>
  .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        justify-content: center;
        align-items: center;
        overflow: auto;
    }

    .modal-content {
        max-width: 90%;
        max-height: 90%;
        margin: auto;
        overflow: auto;
    }
    .preview-image-container {
        position: relative;
        display: inline-block;
        margin: 5px;
        width: 100px; /* Kích thước ô vuông */
        height: 100px; /* Kích thước ô vuông */
        overflow: hidden;
    }

    .preview-image {
        max-width: 100%; /* Đảm bảo ảnh không vượt quá kích thước ô vuông */
        max-height: 100%; /* Đảm bảo ảnh không vượt quá kích thước ô vuông */
        display: block;
        margin: auto; /* Canh giữa ảnh trong ô vuông */
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
    }
    .delete-button {
        position: absolute;
        top: 0;
        right: 0;
        background-color: none;
        color: red;
        border: none;
        padding: 2px 5px;
        cursor: pointer;
    }
</style>
<title>TỐ CÁO LỪA ĐẢO - <?=$site_tenweb;?></title>
<?php require_once('../include/nav.php'); ?>
<?php
$time = date("h:i:s");
$site = $_SERVER['SERVER_NAME'];
if (isset($_POST["submit"])) {
    $name = [];
    $tmp_name = [];
    $error = [];
    $ext = [];
    $size = [];
    
$recaptchaSecret = '6LdygC0pAAAAAHHr0s4TTApHQUCfpCJbqbIl1Ba0';
$response = $_POST['g-recaptcha-response'];
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = [
    'secret' => $recaptchaSecret,
    'response' => $response,
];

$options = [
    'http' => [
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data),
    ],
];

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$jsonResult = json_decode($result);
    
    foreach ($_FILES['file']['name'] as $file) {
        $name[] = $file;
    }
    foreach ($_FILES['file']['tmp_name'] as $file) {
        $tmp_name[] = $file;
    }

    for ($i = 0; $i < count($name); $i++) {
        $number_random = random('1234567890', 5);
        $hoten = htmlspecialchars($_POST['hoten']);
        $sdt = htmlspecialchars($_POST['sdt']);
        $nganhang = htmlspecialchars($_POST['nganhang']);
        $stk = htmlspecialchars($_POST['stk']);
        $lydo = htmlspecialchars($_POST['lydo']);
        $nguoi_phot = htmlspecialchars($_POST['hotennp']);
        $link_report = htmlspecialchars($_POST['link_report']);
        $sdt_nguoip = $_POST['sdtnp'];

        if (!$hoten || !$sdt || !$nganhang || !$stk || !$lydo || !$nguoi_phot || !$sdt_nguoip) {
            die('<script>swal.fire("Thông Báo", "Vui Lòng Nhập Đầy Đủ Thông Tin", "error");setTimeout(function(){ location.href = "/scam/create" },2000);</script>');
        }

        $ngay = date('d-m-Y');
        $random = random('1234567890', 1);
        $code = xoadau($hoten);

        $temp = preg_split('/[\/\\\\]+/', $name[$i]);
        $filename = $temp[count($temp) - 1];
        $upload_dir = "../storage/bangchung/";
        $upload_file = $upload_dir . "BC_" . $number_random . ".png";
        if (file_exists($upload_file)) {
            die('<script>swal.fire("Thông Báo", "Ảnh Đã Tồn Tại Trên Hệ Thống", "error");setTimeout(function(){ location.href = "/scam/create" },2000);</script>');
        }
        if (move_uploaded_file($tmp_name[$i], $upload_file)) {
            $duong_lik = "/storage/bangchung/BC_" . $number_random . ".png";
            $getanh = explode(PHP_EOL, $duong_lik);
            $countupdate = 0;

            foreach ($getanh as $row) {
            $ketnoi->query("INSERT INTO `bangchung` SET 
            `code` = '$code',
            `image` = '$row' ");
                $countupdate++;
            }
        }
    }
    if ($jsonResult->success) {
    $create = $ketnoi->query("INSERT INTO `ticket` SET 
        `username` = '".$hoten."',
        `ly_do` = '".$lydo."',
        `status` = 'xuly',
        `sdt` = '".$sdt."',
        `ngan_hang` = '".$nganhang."',
        `stk` = '".$stk."',
        `code` = '$code',
        `hoten_np` = '".$nguoi_phot."',
        `sdt_np` = '".$sdt_nguoip."',
        `link_report` = '".$link_report."',
        `view` = '0',
        `ngay` = '".$ngay."' ");
    sendTele(templateTele(' Vị Thiếu Hiệp ' . $hoten . ' Bị Tố Cáo Bởi ' . $nguoi_phot.' Vì Lý Do ' . $lydo));

    die('<script>swal.fire("Thông Báo", "Đã Gửi Thông Tin Thành Công ! Chờ Duyệt", "success");setTimeout(function(){ location.href = "/scam/create" },2000);</script>');
    } else {
die('<script>swal.fire("Thông Báo", "Vui Lòng Xác Thực Captcha", "error");setTimeout(function(){ location.href = "/scam/create" },2000);</script>');    
}
}
?>
<div id="main" class="main">
        <div class="section-gap section-report">
        <form method="post" class="form-theme" enctype="multipart/form-data">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-heading">
                            <div class="title">
                                THÔNG TIN KẺ LỪA ĐẢO
                            </div>
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-8">
                        <div class="row row-col-10">
                            <div class="col-md-6 col-12">
                                <div class="form-theme_item">
                                    <input type="text" value="" class="form-theme_item__input"
                                           name="hoten" required>
                                    <label class="form-theme_item__label" for="">
                                        Họ Và Tên <span class="font-weight-bold text-danger">*</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-theme_item">
                                    <input type="text" value="" class="form-theme_item__input"
                                           name="sdt" required>
                                    <label class="form-theme_item__label" for="">
                                        Số Điện Thoại <span class="font-weight-bold text-danger">*</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-theme_item">
                                    <input type="text" class="form-theme_item__input" name="stk" required>
                                    <label class="form-theme_item__label" for="">
                                        Số Tài Khoản <span class="font-weight-bold text-danger">*</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-theme_item">
                                    <input type="text" class="form-theme_item__input" name="nganhang" required>
                                    <label class="form-theme_item__label" for="">
                                        Ngân Hàng <span class="font-weight-bold text-danger">*</span>
                                    </label>
                                </div>
                            </div>
<div class="col-md-12 col-12">
    <div class="form-theme_item">
       
            <div class="form-theme_item__upload-images">
              
            <div class="dropzone" id="dropfile">
               <div class="dz-message needsclick">
                                                    <i class="fas fa-file-image text-danger"></i>
                                                    <i class="fas fa-file-image text-primary"></i>
                                                    <i class="far fa-file-image text-success"></i>
                                                    <i class="fas fa-file-image text-secondary"></i>
                                                    <p style="font-size: 13px;">Kéo hoặc click vào đây để upload</p>
                                                </div>
                                                <div class="form-theme_item__upload-desc" style="text-align: center;">
                                            <i class="far fa-images"></i>
                                            Upload Bill chuyển tiền &amp; ảnh đoạn chát lừa đảo.
                                        </div>
            </div>
          <div id="dropzone_files">
                    <input type="file" name="file[]" id="uploadfile" multiple style="display: none;" onchange="previewImages(this)" />
                </div>
                <div class="preview-container" id="image-preview"></div>
            </div>
    </div>
</div>
<div class="modal" id="imageModal">
    <span class="modal-content" id="modalContent"></span>
</div>
                            <div class="col-12 py-0">
                                <div class="form-theme_item">
                                    <div class="form-theme_item__desc px-1 text-muted">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-theme_item">
                                     <textarea class="form-theme_item__input"
                                               name="lydo" rows="4"></textarea>
                                    <label class="form-theme_item__label" for="" required>
                                        Nội Dung Tố Cáo <span class="font-weight-bold text-danger">*</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="section-heading">
                            <div class="title">
                                THÔNG TIN CỦA BẠN
                            </div>
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-8">
                        <div class="row row-col-10">
                            <div class="col-md-6 col-12 py-md-0">
                                <div class="form-theme_item">
                                    <input type="text" class="form-theme_item__input"
                                           name="hotennp" required>
                                    <label class="form-theme_item__label" for="">
                                        Họ & Tên <span class="font-weight-bold text-danger">*</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 py-md-0">
                                <div class="form-theme_item">
                                    <input type="text" class="form-theme_item__input" name="sdtnp" required>
                                    <label class="form-theme_item__label" for="">
                                        SĐT Liên Hệ Hoặc Zalo <span class="font-weight-bold text-danger">*</span>
                                    </label>
                      <div class="form-theme_item__desc p-1 pb-0 text-muted">Đơn Tố Cáo Sẽ Không Được Duyệt Nếu Như Zalo Ảo
                                    </div>
                                </div>
                            </div>
                                 <div class="col-12"> <div class="form-theme_item"> <input type="text" value="" class="form-theme_item__input" name="link_report"> <label class="form-theme_item__label" for=""> Link phốt trên group (nếu có) </label> <div class="form-theme_item__desc p-1 pb-0 text-muted"> Có thể bỏ trống. </div> </div>
                                 <div class="g-recaptcha" data-sitekey="6LdygC0pAAAAAJkNBG3eTGki_eA1FrQrmBuYYpFk"></div></div> 
                                 
                                
                            <div class="col-12 mt-4">
                                <div class="form-theme_item text-center">
                                    <button type="submit" name="submit" class="btn-theme btn-theme_primary">
                                        GỬI DUYỆT
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script>
        function previewImages(input) {
            var previewContainer = document.getElementById('image-preview');
            previewContainer.innerHTML = ''; // Clear previous previews

            if (input.files) {
                var filesAmount = input.files.length;

                for (var i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        var imgContainer = document.createElement('div');
                        imgContainer.className = 'preview-image-container';

                        var img = document.createElement('img');
                        img.className = 'preview-image';
                        img.src = e.target.result;

                        var deleteButton = document.createElement('button');
                        deleteButton.innerHTML = 'x';
                        deleteButton.className = 'delete-button';
                        deleteButton.onclick = function () {
                            imgContainer.remove();
                        };

                        imgContainer.appendChild(img);
                        imgContainer.appendChild(deleteButton);

                        img.addEventListener('click', function () {
                            openModal(img.src);
                        });

                        previewContainer.appendChild(imgContainer);
                    };

                    reader.readAsDataURL(input.files[i]);
                }
            }
        }

        function openModal(imageSrc) {
            $.fancybox.open({
                src: imageSrc,
                type: 'image',
                opts: {
                    animationEffect: 'fade',
                    transitionEffect: 'fade',
                    clickOutside: 'close',
                    smallBtn: false,
                },
            });
        }
    </script>
<?php require_once('../include/foot.php'); ?>