<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/154.less', 'css/154.css');
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Module 154</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo $url_path ?>/css/font-awesome-v4.6.3.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/bootstrap-v3.3.6.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/154.css" rel="stylesheet" type="text/css" />

    <script src="<?php echo $url_path ?>/js/jquery-v2.2.4.min.js"></script>
    <script src="<?php echo $url_path ?>/js/bootstrap-v3.3.2.min.js"></script>


</head>

<body>
    <?php include $dir_block.'/154-content.php'; ?>


</body>
<script src="<?php echo $url_path ?>/js/react-with-addons.js"></script>
<script src="<?php echo $url_path ?>/js/react-dom.js"></script>
<script src="<?php echo $url_path ?>/js/154.js"></script>

</html>