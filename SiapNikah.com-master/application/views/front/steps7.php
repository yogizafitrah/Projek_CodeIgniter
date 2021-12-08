<?php $this->load->view('layout/header'); ?>
<body class="seo_version">

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logos/icon2.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right hidden-md hidden-sm hidden-xs">
                        <?php
                    if( ! $this->session->userdata('authenticated'))
                    {?>
                    <li><a class="btn-light btn-radius btn-brd top-btn" href="<?php echo site_url("welcome/login"); ?>"><i class="fa fa-angle-double-right"></i>Login</a></li>
                    <?php } else {?>
                        <li><a class="btn-light btn-radius btn-brd top-btn" href="<?php echo site_url("welcome/logout"); ?>"><i class="fa fa-angle-double-right"></i>Logout</a></li>
                    <?php }
                        
                    ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right menu-top">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>

                        <li><a class="active" href="<?php echo site_url("welcome/persiapan")?>">Persiapan</a></li>
                        <li><a href="<?php echo site_url("welcome/tips")?>">Tips & Inspirasi</a></li>
                      <li><a  href="<?php echo site_url("welcome/komentar")?>">Komentar & Saran</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="all-page-title" style="background-image:url(<?php echo base_url(); ?>assets/images/pattern-4.png);">
        <div class="container text-center">
            <h1>Terima Kasih sudah menggunakan layanan kami<br> Anda sudah menyelesaikan persiapan pernikahan anda</h1>
            <br>
            <h1>Sudah Saatnya Anda Menikah <br> Selamat atas Pernikahannya</h1>
        </div>

    </div><!-- end section -->

    <div id="support" class="section db">
        <div class="container">

        </div>
    </div>

    <svg id="clouds1" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>
    <script src="<?php echo base_url(); ?>assets/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/portfolio.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/hoverdir.js"></script>   

<?php $this->load->view('layout/footer'); ?>