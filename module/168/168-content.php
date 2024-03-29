<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-168">
    <div class="container title">
        <div class="page-title">
            <div class="title_left">
                <h3>General Elements</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <div class="clearfix"></div>

        <div class="col-md-6 col-sm-6 col-xs-12 show">
            <button id="open" type="button" class="btn my-btn">Open</button>
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Tabs <small>Float left</small></h2>
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
                    <div role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab"
                                    data-toggle="tab" aria-expanded="true">Home</a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab"
                                    data-toggle="tab" aria-expanded="false">Profile</a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2"
                                    data-toggle="tab" aria-expanded="false">Profile</a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                                aria-labelledby="home-tab">
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                    stumptown
                                    aliqua,
                                    retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan
                                    helvetica.
                                    Reprehenderit butcher retro keffiyeh dreamcatcher
                                    synth. Cosby sweater eu banh mi, qui irure terr.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid.
                                    Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson
                                    artisan four
                                    loko farm-to-table craft beer twee. Qui photo
                                    booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid.
                                    Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson
                                    artisan four
                                    loko farm-to-table craft beer twee. Qui photo
                                    booth letterpress, commodo enim craft beer mlkshk </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 right">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Tabs <small>Float right</small></h2>
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

                    <div class="tab" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab1" class="nav nav-tabs bar_tabs r" role="tablist">
                            <li role="presentation" class="active"><a href="#tab_content11" id="home-tabb" role="tab"
                                    data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content22" role="tab" id="profile-tabb"
                                    data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content33" role="tab" id="profile-tabb3"
                                    data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a>
                            </li>
                        </ul>
                        <div id="myTabContent2" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content11"
                                aria-labelledby="home-tab">
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                    stumptown
                                    aliqua,
                                    retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan
                                    helvetica.
                                    Reprehenderit butcher retro keffiyeh dreamcatcher
                                    synth. Cosby sweater eu banh mi, qui irure terr.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content22" aria-labelledby="profile-tab">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid.
                                    Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson
                                    artisan four
                                    loko farm-to-table craft beer twee. Qui photo
                                    booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content33" aria-labelledby="profile-tab">
                                <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                    squid.
                                    Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson
                                    artisan four
                                    loko farm-to-table craft beer twee. Qui photo
                                    booth letterpress, commodo enim craft beer mlkshk </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Vertical Tabs <small>Float left</small></h2>
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

                    <div class="col-xs-3">
                        <!-- required for floating -->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-left">
                            <li class="active"><a href="#home" data-toggle="tab">Home</a>
                            </li>
                            <li><a href="#profile" data-toggle="tab">Profile</a>
                            </li>
                            <li><a href="#messages" data-toggle="tab">Messages</a>
                            </li>
                            <li><a href="#settings" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xs-9">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                <p class="lead">Home tab</p>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                    stumptown
                                    aliqua,
                                    retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan
                                    helvetica.
                                    Reprehenderit butcher retro keffiyeh dreamcatcher
                                    synth. Cosby sweater eu banh mi, qui irure terr.</p>
                            </div>
                            <div class="tab-pane" id="profile">Profile Tab.</div>
                            <div class="tab-pane" id="messages">Messages Tab.</div>
                            <div class="tab-pane" id="settings">Settings Tab.</div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Vertical Tabs <small>Float right</small></h2>
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

                    <div class="col-xs-9">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home-r">
                                <p class="lead">Home tab</p>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                    stumptown
                                    aliqua,
                                    retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan
                                    helvetica.
                                    Reprehenderit butcher retro keffiyeh dreamcatcher
                                    synth. Cosby sweater eu banh mi, qui irure terr.</p>
                            </div>
                            <div class="tab-pane" id="profile-r">Profile Tab.</div>
                            <div class="tab-pane" id="messages-r">Messages Tab.</div>
                            <div class="tab-pane" id="settings-r">Settings Tab.</div>
                        </div>
                    </div>

                    <div class="col-xs-3">
                        <!-- required for floating -->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-right">
                            <li class="active"><a href="#home-r" data-toggle="tab">Home</a>
                            </li>
                            <li><a href="#profile-r" data-toggle="tab">Profile</a>
                            </li>
                            <li><a href="#messages-r" data-toggle="tab">Messages</a>
                            </li>
                            <li><a href="#settings-r" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> Collapsible / Accordion <small>Sessions</small></h2>
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

                    <!-- start accordion -->
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                <h4 class="panel-title">Collapsible Group Items #1</h4>
                            </a>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <h4 class="panel-title">Collapsible Group Items #2</h4>
                            </a>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p><strong>Collapsible Item 2 data</strong>
                                    </p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf
                                    moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                    laborum eiusmod.
                                    Brunch 3 wolf moon tempor,
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                <h4 class="panel-title">Collapsible Group Items #3</h4>
                            </a>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p><strong>Collapsible Item 3 data</strong>
                                    </p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf
                                    moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                    laborum eiusmod.
                                    Brunch 3 wolf moon tempor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> Collapsible / Accordion <small>Sessions</small></h2>
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

                    <!-- start accordion -->
                    <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse"
                                data-parent="#accordion1" href="#collapseOne1" aria-expanded="true"
                                aria-controls="collapseOne">
                                <h4 class="panel-title">Collapsible Group Item #1</h4>
                            </a>
                            <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <a class="panel-heading collapsed" role="tab" id="headingTwo1" data-toggle="collapse"
                                data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <h4 class="panel-title">Collapsible Group Item #2</h4>
                            </a>
                            <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p><strong>Collapsible Item 2 data</strong>
                                    </p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf
                                    moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                    laborum eiusmod.
                                    Brunch 3 wolf moon tempor,
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <a class="panel-heading collapsed" role="tab" id="headingThree1" data-toggle="collapse"
                                data-parent="#accordion1" href="#collapseThree1" aria-expanded="false"
                                aria-controls="collapseThree">
                                <h4 class="panel-title">Collapsible Group Item #3</h4>
                            </a>
                            <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p><strong>Collapsible Item 3 data</strong>
                                    </p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf
                                    moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                    laborum eiusmod.
                                    Brunch 3 wolf moon tempor
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end of accordion -->


                </div>

            </div>

        </div>
        <div class="clearfix"></div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tooltips <small>Hover to view</small></h2>
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

                    <p>Add small overlays of content for housing secondary information.</p>
                    <!-- start pop-over -->
                    <div class="bs-example-popovers">
                        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover"
                            data-placement="left"
                            data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                            data-original-title="" title="">
                            Left
                        </button>
                        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover"
                            data-placement="top"
                            data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                            data-original-title="" title="">
                            Top
                        </button>
                        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover"
                            data-placement="bottom"
                            data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            Bottom
                        </button>
                        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover"
                            data-placement="right"
                            data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            Right
                        </button>
                    </div>
                    <!-- end pop-over -->

                </div>
            </div>
        </div>



        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tooltips <small>Hover to view</small></h2>
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
                    <p>Hover over the links below to see tooltips:</p>

                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left"
                        title="Tooltip left">Tooltip left</button>

                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top"
                        title="Tooltip top">Tooltip top</button>

                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom"
                        title="Tooltip bottom">Tooltip bottom</button>

                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right"
                        title="Tooltip right">Tooltip right</button>

                </div>
            </div>
        </div>
    </div>
</div>