<div class="container-fluid">

    <div class="col-md-12"><h3><?php echo $_GET['topic']; ?></h3><hr></div>
    <div class="row"> <?php $sql = $Db->query('SELECT * FROM gallery WHERE AlbumID =' . $_GET['id'], '');
foreach ($sql AS $row) {
   ?>
        <div class="col-xs-6 col-md-3"> 

            <a href="img/gallery/<?php echo $_GET['AlbumFolder']; ?>/<?php echo $row['GalleryShot']; ?>" data-toggle="lightbox" data-gallery="example-gallery" class="thumbnail">
                <img src="img/gallery/<?php echo $_GET['AlbumFolder']; ?>/<?php echo $row['GalleryShot']; ?>" alt="...">
            </a>
        </div>
<?php } ?>
    </div>
</div>



