<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-166">
    <div class="container">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Input Grid <small>form input </small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-12" class="form-control">
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-6" class="form-control">
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-6" class="form-control">
                    </div>


                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-4" class="form-control">
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-4" class="form-control">
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-4" class="form-control">
                    </div>


                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-3" class="form-control">
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-3" class="form-control">
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-3" class="form-control">
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-3" class="form-control">
                    </div>


                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-2" class="form-control">
                    </div>

                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-2" class="form-control">
                    </div>

                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-2" class="form-control">
                    </div>

                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-2" class="form-control">
                    </div>

                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-2" class="form-control">
                    </div>

                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-2" class="form-control">
                    </div>


                    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-1" class="form-control">
                    </div>

                    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-1" class="form-control">
                    </div>

                    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-1" class="form-control">
                    </div>

                    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-1" class="form-control">
                    </div>

                    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-1" class="form-control">
                    </div>

                    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-1" class="form-control">
                    </div>

                    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-1" class="form-control">
                    </div>

                    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-1" class="form-control">
                    </div>

                    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-1" class="form-control">
                    </div>

                    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-1" class="form-control">
                    </div>

                    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-1" class="form-control">
                    </div>

                    <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                        <input type="text" placeholder=".col-md-1" class="form-control">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>