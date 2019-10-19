<!--List private style of this page. Ex: daterangepicker.min.css, boostrap-floater.min.js -->
<?php $styles = ['nprogress.css'] ?>
<!--List private script of this page. Ex: rocket-load.min.js, pagination.min.js -->
<?php $scripts = ['bootstrap-progressbar.min.js','jquery.sparkline.min.js','jquery.flot.js','nprogress.js','chart.min.js'] ?>

<!--List module was use in this project -->
<?php $modules = [158]; ?>


<?php include_once 'header.php';?>

<!-- Container is here (include code here) -->
<?php foreach($modules as $module): ?>
    <?php include_once "container/$module-content.php" ?> 
<?php endforeach; ?>
    
<?php include_once 'footer.php';?>