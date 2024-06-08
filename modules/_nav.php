<?php 

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}


echo '

<!-- Navigation Bar -->
<!-- HTML elemanları kullanılarak Header page oluşturuldu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Who Am I?</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#about">Hakkımda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#resume">Geçmişim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#city">Şehir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">Şehrimizin Önemli Yanları</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#heritage">Kültürel Mirasımız</a>
                </li>';


                if(!$loggedin){
                    echo '<li class="nav-item"><a class="nav-link" href="pages/login.php">Giriş Yap / Kayıt Ol</a></li>';
                }
                if($loggedin) {
                    echo '<li class="nav-item"><a class="nav-link" href="pages/logout.php">Çıkış Yap</a></li>';
                }

                echo '<li class="nav-item">
                <a class="nav-link" href="#contact">İletişim</a>
            </li>';


echo '
            </ul>
        </div>
    </div>
</nav>

';


?>