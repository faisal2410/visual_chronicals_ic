<?php
include __DIR__ . "/views/header.inc.php";
include __DIR__ . "/inc/images.inc.php";

?>


<?php 
if(!empty($_GET['image']) && isset($imageTitles[$_GET['image']])): 

  $image=$_GET['image'];
  $imageTitle=htmlspecialchars($imageTitles[$image]);
 $imageSource="./images/". rawurlencode($image);
  $description=htmlspecialchars($imageDescription[$image]);

?>
<h2><?= $imageTitle ?></h2>
<img src="<?=$imageSource ?> " />
<p><?= $description ?></p>

<?php else: ?>

<div class="notice">
        This image could not be found.
    </div>

  <?php endif; ?>


<a href="gallery.php">Back to gallery</a>
<br /><br /><br /><br /><br />


<?php include __DIR__ . "/views/footer.inc.php"  ?>