<?php 
include __DIR__."/views/header.inc.php";
include __DIR__."/inc/images.inc.php";

?>
        <div class="gallery-container">

        <?php  foreach($imageTitles as $src=>$title): ?>

        <?php 
        
        $image=http_build_query(['image'=>$src]);
         $src=rawurldecode($src);
         $title= htmlspecialchars($title);       
        
        ?>

        <a href="image.php?<?=$image ?>" class="gallery-item">
            <h3><?= $title ?></h3>          
            <img src="./images/<?= $src ?>" alt="<?=$title ?>" />
        </a>
      

        <?php endforeach ?>
  
</div>

<?php include __DIR__."/views/footer.inc.php"  ?>