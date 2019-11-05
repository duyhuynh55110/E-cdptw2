<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/158.less', 'css/158.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>330</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="<?php echo $url_path ?>/css/nprogress.css" rel="stylesheet">
    <link href="<?php echo $url_path ?>/css/158.css" rel="stylesheet" type="text/css" />

    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/158.less', 'css/158.css');
    ?>
</head>

<body>
    <?php include './158-content.php'; ?>
</body>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap-progressbar.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/jquery.flot.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<script src="js/nprogress.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/158.js"></script>

</html>