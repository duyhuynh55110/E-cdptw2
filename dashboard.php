<!--List module was use in this project -->
<?php $modules = []; ?>
<?php include_once 'header.php';?>

<!-- Container is here (include code here) -->
<!-- Ex: include_once 'container/290-content.php' -->
<?php foreach($modules as $module): ?>
    <link href="container/<?php echo $module ?>-content.php" rel="stylesheet"> 
<?php endforeach; ?>
   
<?php include_once 'footer.php';?>