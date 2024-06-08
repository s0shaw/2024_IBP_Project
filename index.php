<?php
session_start();//PHP oturumu başlatır.
?>

<!DOCTYPE html><!--HTML belgesinin başlangıcıdır.-->
<html lang="tr"><!-- Belge dilini Türkçe olarak belirtir.-->
<head><!--Belge başlığı bölümüdür. Burada metin karakter kodlaması ve görünümün boyutlandırılması belirtilmiştir. Ayrıca sayfanın başlığı, Bootstrap CSS dosyalarının yüklenmesi ve özelleştirilmiş stil dosyalarının yüklenmesi sağlanmıştır.-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Who Am I?</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="custom.css">
</head>
<body>

<!-- Bu satır, kullanıcının oturumunun açık olduğu durumda kullanıcı adını görüntülemesini sağlar.-->
<h4>Welcome 
    
    <?php 
    if(empty($_SESSION["username"])){
        echo '';
    }
    else {
        echo $_SESSION["username"]; 
    }
   


?></h4>

<?php require 'modules/_nav.php' ?><!-- Bu satır, _nav.php adlı dosyayı sayfaya dahil eder. Bu dosya, genellikle üst menü içerir.-->
<?php require 'modules/_about.php' ?><!-- Bu satır, _about.php adlı dosyayı sayfaya dahil eder. Bu dosya, genellikle "Hakkımda" bölümünü içerir..-->
<?php require 'modules/_resume.php' ?><!-- Bu satır, _resume.php adlı dosyayı sayfaya dahil eder.Bu dosya, genellikle "Özgeçmiş" bölümünü içerir.-->
<?php require 'modules/_city.php' ?><!-- Bu satır, _city.php adlı dosyayı sayfaya dahil eder. Bu dosya, genellikle "Şehir" bölümünü içerir.-->
<?php require 'modules/_culture.php' ?><!-- Bu satır, _culture.php adlı dosyayı sayfaya dahil eder. Bu dosya, genellikle "Kültür" bölümünü içerir..-->
<?php require 'modules/_heritage.php' ?><!-- Bu satır, _heritage.php adlı dosyayı sayfaya dahil eder.  Bu dosya, genellikle "Miras" bölümünü içerir.-->
<?php require 'modules/_footer.php' ?><!-- Bu satır, _footer.php adlı dosyayı sayfaya dahil eder. Bu dosya, genellikle alt kısmı içerir.-->









<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script><!--Bu satır, Bootstrap JS dosyasının yüklenmesini sağlar.-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script><!--Bu satır, jQuery dosyasının yüklenmesini sağlar.-->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script><!--Bu satır, jQuery validation dosyasının yüklenmesini sağlar.-->
<script src="js/form-validation.js"></script><!--Bu kod satırı, form-validation.js adlı JavaScript dosyasını sayfaya dahil eder. -->
</body><!--body kapatıldı-->
</html><!--HTML kodu sonlandırıldı-->