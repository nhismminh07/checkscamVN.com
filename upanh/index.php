<?php
$title = 'Công Cụ Up Ảnh Không Giới Hạn';
?>
   	<div class="c-layout-page" style="margin-top: 20px;">
    <div class="container">



                



   <div class="c-content-box c-size-md c-bg-white">
	<div class="container">

        <div class="row">

            <div class="col-sm-12" style="visibility: visible; animation-name: fadeInRight; opacity: 1;">
                <div class="c-content-client-logos-1">
                    <!-- Begin: Title 1 component -->
                    <div class="c-content-title-1">
                        <h3 class="c-center c-font-uppercase c-font-bold">DỊCH VỤ UP ẢNH MIỄN PHÍ</h3>
                        <div class="c-line-center c-theme-bg"></div>
                    </div>
                    <!-- End-->
                    <div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
                    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-info" role="alert">
  <title>Upload Ảnh Miễn Phí</title>
  <style>
body {
	background-image: url("https://wallpaperplay.com/walls/full/9/7/0/145562.jpg");
} 

</style>

  <meta name="description" content="Upload ảnh miễn phí, upload ảnh cực nhanh" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="HandheldFriendly" content="true" />
  <meta name="MobileOptimized" content="width" />
  <style>
  body{
    max-width: 400px;
    background: #fff;
    margin: auto;
    padding: 2%;
  }
  .header{
    padding: 8px;
    font-size: 15px;
    color: #2146CC;
    background: #9ED5E0;
    border: 3px solid #2146CC;
    border-radius: 8px;
    margin: 20px auto;
    font-weight: bold;
    text-align: center;
  }
  input{
    width: 100%;
    padding: 6px;
    overflow: hidden;
    margin: 10px auto;
    outline: none;
    border: 3px solid #70C3CD;
    margin: auto;
  }
  input[type=submit]{
    width: 100%;
    outline: none;
    border: 3px solid #52B3EB;
    background: #52B3EB;
    font-weight: bold;
    color: #fff;
  }
  input[type=file]{
    border:0;
  }
  </style>
</head>
<body>
<div class="header">Upload Ảnh Miễn Phí</div>

<div class="main">
<form id="imageform" method="post" enctype="multipart/form-data" action="lib_uploadimage.php">
<p><input type="file" name="file" /></p>
<p><input type="submit" name="photoimg" value="Upload Ảnh"/></p>

<?
function er($text)
{
  return '<div style="width: 95%; padding: 6px; border-radius: 5px;background: #D7C042;"><b style="color: red">Lỗi:</b>' . $text . '</div>';
}
if($_GET['er']==7) $error = er("Bạn hãy chọn ảnh để upload nhé!!!");
if($_GET['er']==2) $error = er("Ảnh Quá Lớn, vui lòng chọn file < 20MB");
if($_GET['er']==3) $error = er("Có Vẻ Ảnh Bạn Chọn Không Phải Là Ảnh");
if($_GET['er']==4) $error = er("Chiều dài và rộng của ảnh quá lớn. Hãy upload ảnh nhỏ hơn 20000x20000 px");
if($_GET['er']==5) $error = er("Định Dạng Ảnh Không Được Phép Upload");
if($_GET['er']==6) $error = er("Không thể upload ảnh của bạn, hãy thử lại!");
if($_GET['er']==1) $error = er("Hành động của bạn không hợp lệ !!!");
if(isset($error)){ echo $error;} else if(isset($_GET['link'])){ echo '<p>Copy Link Ảnh Này Của Bạn Dán Vào Nơi bạn cần<br><input value="' . base64_decode($_GET['link']) . '"></p>';}
?>
</form>
</div>
</body>
</html>
</script>
	</div>
	</div>