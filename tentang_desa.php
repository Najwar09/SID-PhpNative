<?php 
    require 'header.php';
    require 'function/function.php';

    $query = view("SELECT * FROM tb_profil");
    
 ?>


    <!-- Start Intro -->
    <section class="parallax-bg" style="background-image:url(img/bonea/bg.jpg)" data-stellar-background-ratio="0.5">
        <!-- Section Title -->
        <div class="js-height-full container">
            <div class="intro-content white-color text-center vertical-section">
                <div class="vertical-content">
                    <h4 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.8s">Selamat Datang di</h4>
                    <h1 class="wow zoomIn m-bottom-20" data-wow-duration="1s" data-wow-delay="0.6s">Desa Bonea Timur</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Intro -->

    <!-- Site Content
        ============================================= -->

    <section id="blog-single" class="p-top-80 p-bottom-80">

        <!--Container-->
        <div class="container clearfix">

            <div class="row">

                <div class="col-xs-12">

                    <!--Post Single-->
                    <div class="postSingle">

                        <div class="postTitle">
                            <center>
                                <h1>Sejarah Desa</h1>
                                <div class="divider-small"></div>
                            </center>
                        </div>
                        <!--Post title-->
                        <?php 
                            while($row = mysqli_fetch_array($query)) :
                        ?>

                        <p><?= $row['sejarah'] ?>
                        </p>

                        <div class="postTitle">
                            <center>
                                <h1>Luas Daerah</h1>
                                <div class="divider-small"></div>
                            </center>
                        </div>
                        <!--Post title-->

                        <p>
                            <?= $row['detail'] ?>
                        </p>

                        <div class="postTitle">
                            <center>
                                <h1>Struktur Desa</h1>
                                <div class="divider-small"></div>
                            </center>
                        </div>
                        <!--Post title-->

                        <p>
                            <?= $row['struktural'] ?>
                        </p>

                        <div class="postTitle">
                            <center>
                                <h1>Visi & Misi</h1>
                                <div class="divider-small"></div>
                            </center>
                        </div>

                        <div class="visimisi-row">
                            <div class="visimisi-col">
                                <h3>Visi</h3>
                                <p><?= $row['visi'] ?></p>
                            </div>
                            <div class="visimisi-col">
                                <h3>Misi</h3>
                                <p>
                                    <?= $row['misi'] ?>
                                </p>
                            </div>
                        </div>

                        <?php endwhile; ?>

                        
                    </div>
    </section>


    <?php require 'footer.php' ?>