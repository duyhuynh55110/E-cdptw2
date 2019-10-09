<!--List private style of this page. Ex: daterangepicker.min.css, boostrap-floater.min.js -->
<?php $styles = [] ?>
<!--List private script of this page. Ex: rocket-load.min.js, pagination.min.js -->
<?php $scripts = [] ?>

<!--List module was use in this project -->
<?php $modules = []; ?>


<?php include_once 'header.php';?>

<!-- Container is here (include code here) -->
<?php foreach($modules as $module): ?>
    <link href="container/<?php echo $module ?>-content.php" rel="stylesheet"> 
<?php endforeach; ?>
    
<?php include_once 'footer.php';?>