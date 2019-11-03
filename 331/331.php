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
    $less->compileFile('less/331.less', 'css/331.css');

?>
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>331</title>
    <link rel="stylesheet" href="css/bootstrap-v3.3.6.min.css">
    <link rel="stylesheet" href="css/font-awesome-v4.6.3.min.css">
    <link rel="stylesheet" href="css/331.css">
</head>

<body>
    <?php include $dir_block.'/331-content.php'; ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/vue.min.js"></script>
    <script src="js/331.js"></script>
</body>
</html>
