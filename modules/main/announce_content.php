<div class="container">
    <div class="row">
        <div class="col-md-12" style="align-content:  center;">
            <?php
            $sql = $Db->where('id', $_GET['id']);
            $sql = $Db->query('', 'announce');
            foreach ($sql as $row) {
                ?>

                <div class="col-md-12">  <h3><?php echo $row['topic'] ?></h3> </div>       
                <div class="col-md-12"> <img  src="img/announce/<?php echo $row['image'] ?>" </div>
                <div class="col-md-12"><?php echo $row['content'] ?> </div>
                </header>

            <?php } ?>


        </div>
    </div>
  
</div> 
</div>