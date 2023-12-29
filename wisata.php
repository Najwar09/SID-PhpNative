<?php
require 'header1.php';
require 'function/function.php';

$id =
    $query_wisata = view("SELECT * FROM tb_wisata ");

?>


<!-- Section Title Portfolio -->
<div class="section-title-bg text-center">
    <h2 class="wow fadeInDown no-margin" data-wow-duration="1s" data-wow-delay="0.6s"><strong>WISATA</strong></h2>
    <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
    <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">WISATA-WISATA YANG ADA DI
        DESA
        BONEA TIMUR</p>
</div>




<!-- Start Portfolio -->
<section id="portfolio" class="p-top-80 p-bottom-80">
    <div class="container">

        <!-- Portfolio -->
        <div class="portfolio portfolio-isotope col-4 gutter">

            <!-- Portfolio Item -->
            <?php while ($row = mysqli_fetch_assoc($query_wisata)) : ?>

                <div class="pf-item">

                    <a href="wisata_detail.php?id=<?= $row['id_wisata'] ?>" class="pf-style">
                        <div class="pf-image">
                            <img src="img/bonea/wisata/<?= $row['gambar_utama'] ?>" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="pf-info white-color">
                                            <h4 class="pf-title"><?= $row['judul'] ?></h4>
                                            <p>Wisata Desa</p>
                                        </div> <!-- .pf-info -->
                                    </div> <!-- .overlay-content -->
                                </div> <!-- .overlay-caption -->
                            </div> <!-- .overlay -->
                        </div> <!-- .pf-image -->

                    </a> <!-- .pf-style -->

                </div>
            <?php endwhile; ?>



        </div> <!-- Portfolio -->

    </div> <!-- /.container -->
</section>
<!-- End Portfolio -->


<?php require 'footer.php' ?>