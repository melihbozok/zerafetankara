<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Zerafet Ankara | Anasayfa</title>
    <link rel="shortcut icon" type="image/png" href="assets/document/favicon.png"/>

    <!--MELİH BOZOK 2018-->
   
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>  
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css"/>
      
    <!--FONTS CSS-->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    
    <!-- Mobile Menu -->
      <script type="text/javascript">
    $(document).ready(function() {
      $('.mobile-menu span').click(function() {
        $('nav ul').slideToggle(300);
      });//end slide toggle

      $(window).resize(function() {		
            if (  $(window).width() > 300 ) {			
                $('nav ul').removeAttr('style');
             }
        });
    });
    </script>
    <!-- Mobile Menu End -->  
      
  </head>
     
      <!-- Mobile Menu -->    
<style>
    .desktop-menu {display:none;}
    .mobile-menu {
        padding: 10px 0px;
        display: none;
        background: #000;
        text-align: right;
    }

    .mobile-menu span {
        width: 35px;
        position: relative;
        right: 20px;
        cursor: pointer;
        background: #eee;
        padding: 2px 8px;
        border-radius: 3px;
        font-size:20px;

    }

    nav {
        background: #171717; 
        border-top: 3px solid #F9A828;
    }

    nav ul {
        text-align: right;
        margin-right: 20px;
    }


    nav li {
        display: inline-block;    
    }

    nav li a {
        display: block;
        padding: 10px 20px;
        color: #fff;
        font-family:'Raleway',sans-serif;
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;    
    }

    nav li a:hover {
        color:#eee;
        text-decoration: none;
    }      
    
    @media (max-width: 767px) {
        .mobile-menu {
            display: block;
        }
        .desktop-menu {
            display: block;
        }
        .menuAlt {
            display:none;
            height:0!important;
        }
        .mobile-search {
            display:flex;
            justify-content: center;
            align-items: center;
            margin: 0 0 25px 0;
        }
        .mobile-search input {
            width:75%;
            padding:5px 10px;
            border-radius:25px;
            font-size:11px;
            border:1px solid #eee;
        }
        .mobile-search i {
            color: #fff;
            border-radius: 50%;
            background: #cf5375;
            padding: 8px;
            margin: 0 0 0 5px;
            border:2px solid #d66483;
            cursor:pointer;
        }
       nav {
            border: none;

        }

        nav ul {
            display: none;
            margin: 0;
            padding-left:0;
        }

        nav li {

           width: 100%; 
        }

        nav li a {        
            padding: 13px;
            text-align: center;
        }
    }
</style>
      
        <div class="mobile-menu">
            <span><i class="fas fa-bars"></i></span>
        </div>
        <div class="desktop-menu">
            <nav>
                <ul>
                    <li><a href="index.html"><img class="logo-mobile" src="assets/document/zerafet_logo.png" class="img-fluid"/></a></li>
                    <hr>
                    <li><a href="index.php">Anasayfa</a></li>
                    <li><a href="kurumsal.php">KURUMSAL</a></li>
                    <li><a href="hizmetler.php">HİZMETLER</a></li>
                    <li><a href="menu.php">Menüler</a></li>
                    <li><a href="galeri.php">Galeri</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="iletisim.php">İLETİŞİM</a></li>
                    <li>
                        <div class="mobile-search"><input type="text" name="search" placeholder="Aramak istediğiniz kelimeyi giriniz.."><i class="fas fa-search"></i></div>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Mobile Menu End -->
      
        <section class="cover">
           <header class="animated rotateIn">
                <div class="container-fluid">
                    <div class="logo">
                        <a href="index.php"><img src="assets/document/zerafet_logo.png"></a>
                    </div>
                    <div class="menu animated">
                        <ul>
                            <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                            <li><a href="kurumsal.php">Kurumsal</a></li>
                            <li><a href="hizmetler.php">HİZMETLER</a></li>
                            <li><a href="menu.php">Menüler</a></li>
                            <li><a href="galeri.php">GALERİ</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="iletisim.php">İLETİŞİM</a></li>
                            <li class="noAfter">
                                <!-- SEARCH -->
                                <div class="ac"><i class="fas fa-search"></i></div>
                                <div class="search-group" style="display: none">
                                    <div class="search-group-left">
                                        <input type="text" name="search" placeholder="Aramak istediğiniz kelimeyi giriniz..">
                                    </div>
                                    <div class="search-group-right"><i class="fas fa-times kapa"></i></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <!-- SEARCH -->
            <video autoplay="autoplay" controls preload="auto" muted loop id="myVideo">
                  <source src="assets/document/dugun-klibi.mp4" type="video/mp4">
                  <!--<source src="assets/document/dugun-klibi.webm" type="video/webm">    
                  <source src="assets/document/dugun-klibi.ogg" type="video/ogg">  
                  Your browser does not support HTML5 video.-->
                </video>
            <!--<div class="pauseButtonCenter">
                <button id="myBtn" onclick="myFunction()"><i class="fa fa-pause"></i></button>
            </div>-->
            
        </section>

        <section id="cover">
            <div class="container">
            </div>
        </section>