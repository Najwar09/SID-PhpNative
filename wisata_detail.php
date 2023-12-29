<?php
require 'header1.php';
require 'function/function.php';

$id = $_GET['id'];
$query_detail = view("SELECT * FROM tb_wisata WHERE id_wisata = $id");
?>
<!-- Site Content
        ============================================= -->

<section id="blog-single" class="p-top-80 p-bottom-80">

    <!--Container-->
    <div class="container clearfix">

        <div class="row">

            <div class="col-xs-12">

                <!--Post Single-->
                <div class="postSingle">

                    <?php while ($row = mysqli_fetch_array($query_detail)) : ?>
                        <div class="postMedia">
                            <img alt="" src="img/bonea/wisata/<?= $row['gambar_utama'] ?>">
                        </div>


                        <div class="postTitle">
                            <center>
                                <h1><?= $row['judul'] ?></h1>
                                <div class="divider-small"></div>
                            </center>
                        </div>
                        <!--Post title-->

                        <p>
                            <?= $row['deskripsi'] ?>
                        </p>
                    <?php endwhile; ?>

                </div>
            </div>
        </div>

        <hr>



    </div>
</section>

<div class="container">
    <div class="row">

        <?php
        $query_sub = view("SELECT * FROM tb_wisata LIMIT 3");
        while ($row = mysqli_fetch_array($query_sub)) :
            $cut_info = substr($row['deskripsi'], 0, 50);

        ?>
            <!-- Sub Informasi -->



            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="img/bonea/wisata/<?= $row['gambar_utama'] ?>" alt="...">
                    <div class="caption">
                        <h6><?= $row['judul'] ?></h6>
                        <p><?= $cut_info ?></p>
                        <p><a href="wisata_detail.php?id=<?= $row['id_wisata'] ?>" class="btn btn-primary" role="button">Cek Selengkapnya</a></p>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>


    </div>
</div>

<?php require 'footer.php'; ?>