<!-- CONTACT -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 contactBox">
                        <div class="corporate-top galery-top text-center">
                            <div class="corporetTopTitleMain">ADRES</div>
                            <p>Beştepe Mahallesi Yaşam Caddesi<br/> No: 7/6 AK Plaza Söğütözü / ANKARA</p>
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-whatsapp"></i>
                            <i class="fab fa-youtube"></i>
                            <i class="fab fa-google-plus-g"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form">
                            <div class="corporate-top galery-top text-center">
                                <div class="corporetTopTitleMain">BİZE ULAŞIN</div>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Adınız *" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Telefon *" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Mesajınız *"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8 justify-content-center">
                                        <div class="form-group">
                                            <button class="form-control buton">GÖNDER</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 contactBox">
                        <div class="corporate-top galery-top text-center">
                            <div class="corporetTopTitleMain">İLETİŞİM</div>
                            <ul>
                                <li>info@zerafetankara.com</li>
                                <li>+90 312 219 20 60</li>
                                <li>+90 545 853 06 06</li>
                                <li>+90 219 20 60</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        <!-- FOOTER -->
        <section class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="footer-logo">
                            <img src="assets/document/logo-footer.png" width="60" height="50" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="index.php">ANASAYFA</a></li>
                                <li><a href="kurumsal.php">KURUMSAL</a></li>
                                <li><a href="hizmetler.php">HİZMETLER</a></li>
                                <li><a href="menu.php">MENÜLER</a></li>
                                <li><a href="galeri.php">GALERİ</a></li>
                                <li><a href="blog.php">BLOG</a></li>
                                <li><a href="iletisim.php">İLETİŞİM</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2018 <span>Zerafet Ankara</span> | Tüm Hakları Saklıdır.</p>
            </div>
        </section>
        
        <!-- AÇILIR KUTU -->
<div class="kapali animated bounceInDown">
    <div class="form randevuKutusuForm">
        <h6 class="text-center pink">RANDEVU OLUŞTURUN</h6>
        <hr/>
        <form>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input class="form-control" placeholder="Ad Soyad *" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input class="form-control" placeholder="Telefon *" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-posta *" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="date" class="form-control" placeholder="Tarih *" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Mesajınız *"></textarea>
                    </div>
                </div>
                <div class="col-md-12 justify-content-center">
                    <div class="form-group">
                        <button class="form-control buton">GÖNDER</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<button class="acik btn btn-secondary animated lightSpeedIn">
        <i class="far fa-calendar-alt"></i>Randevu Al
        </button>
<!-- AÇILIR KUTU END -->
      
        <!-- FANCYBOX -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.mousewheel-3.0.4.pack.js"></script>
        <script type="text/javascript" src="assets/js/jquery.fancybox-1.3.4.pack.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox-1.3.4.css" media="screen" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                 *   Examples - images
                 */

                $("a#example1").fancybox();

                $("a#example2").fancybox({
                    'overlayShow': false,
                    'transitionIn': 'elastic',
                    'transitionOut': 'elastic'
                });

                $("a#example3").fancybox({
                    'transitionIn': 'none',
                    'transitionOut': 'none'
                });

                $("a#example4").fancybox({
                    'opacity': true,
                    'overlayShow': false,
                    'transitionIn': 'elastic',
                    'transitionOut': 'none'
                });

                $("a#example5").fancybox();

                $("a#example6").fancybox({
                    'titlePosition': 'outside',
                    'overlayColor': '#000',
                    'overlayOpacity': 0.9
                });

                $("a#example7").fancybox({
                    'titlePosition': 'inside'
                });

                $("a#example8").fancybox({
                    'titlePosition': 'over'
                });

                $("a[rel=example_group]").fancybox({
                    'transitionIn': 'none',
                    'transitionOut': 'none',
                    'titlePosition': 'over',
                    'titleFormat': function(title, currentArray, currentIndex, currentOpts) {
                        return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                    }
                });

                /*
                 *   Examples - various
                 */

                $("#various1").fancybox({
                    'titlePosition': 'inside',
                    'transitionIn': 'none',
                    'transitionOut': 'none'
                });

                $("#various2").fancybox();

                $("#various3").fancybox({
                    'width': '75%',
                    'height': '75%',
                    'autoScale': false,
                    'transitionIn': 'none',
                    'transitionOut': 'none',
                    'type': 'iframe'
                });

                $("#various4").fancybox({
                    'padding': 0,
                    'autoScale': false,
                    'transitionIn': 'none',
                    'transitionOut': 'none'
                });
            });
        </script>
    
        <!-- SEARCH -->
        <script type="text/javascript">
            $(function() {

                $(".ac").click(function() {

                    $(".search-group").fadeToggle();

                });

                $(".kapa").click(function() {

                    $(".search-group").fadeToggle();

                });

            })
        </script>
        
        <!-- AÇILIR KUTU -->
    <script>
                $(".acik").click(function() {
                $(".kapali").slideToggle("fast");
                });
    </script>
        
        <!-- VIDEO -->
        <script>
            var video = document.getElementById("myVideo");
            var btn = document.getElementById("myBtn");

            function myFunction() {
                if (video.paused) {
                    video.play();
                    btn.innerHTML = '<i class="fas fa-pause">';
                } else {
                    video.pause();
                    btn.innerHTML = '<i class="fas fa-play">';
                }
            }
        </script>