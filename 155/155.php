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
$less->compileFile('less/155.less', 'css/155.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>155</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/155.css" rel="stylesheet" type="text/css" />

    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/155.less', 'css/155.css');
    ?>
</head>

<body>
    <?php include './155-content.php'; ?>
</body>


<script src="js/google-chart.min.js"></script>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- Vue -->
<script src="js/vue.min.js"></script>
<script src="js/155.js"></script>

</html>