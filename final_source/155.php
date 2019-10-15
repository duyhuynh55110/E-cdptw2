<!--List private style of this page. Ex: daterangepicker.min.css, boostrap-floater.min.js -->
<?php $styles = ['jquery-ui.min.css'] ?>
<!--List private script of this page. Ex: rocket-load.min.js, pagination.min.js -->
<?php $scripts = ['chart-rain.js','collapse-close.js','datetimepicker.js','highcharts.js','jquery-ui.min.js'] ?>

<!--List module was use in this project -->
<?php $modules = [155]; ?>


<?php include_once 'header.php';?>

<!-- Container is here (include code here) -->
<?php foreach($modules as $module): ?>
    <?php include_once "container/$module-content.php" ?> 
<?php endforeach; ?>

<?php include_once 'footer.php';?>