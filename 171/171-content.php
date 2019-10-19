<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-171">
    <div class="page-title">
        <div class="title_left">
            <h3>Projects <small>Listing design</small></h3>
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
    
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Projects</h2>
                    <ul class="navUL navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                    <p>Simple table with project listing with progress and editing options</p>

                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%" v-on:click="sortBy('id')"><a href="#">#</a></th>
                                <th style="width: 20%" v-on:click="sortBy('name')"><a href="#">Project Name</a></th>
                                <th>Team Members</th>
                                <th>Project Progress</th>
                                <th>Status</th>
                                <th style="width: 20%">#Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="project in projects">
                                <td>{{project.id}} </td>
                                <td>
                                    <a>{{project.name}}</a>
                                    <br />
                                    <small>Created {{project.created_at}}</small>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li v-for="n in project.team_member">
                                            <img src="images/user.png" class="avatar" alt="Avatar">
                                        </li>
                                    </ul>
                                </td>
                                <td class="project_progress">
                                    <div class="progress progress_sm">
                                        <div class="progress-bar progress-bar-success" 
                                             role="progressbar" 
                                             aria-valuenow="40" 
                                             aria-valuemin="0" 
                                             aria-valuemax="100" 
                                             v-bind:style="{width: project.process + '%'}">

                                        </div>
                                    </div>
                                    <small>{{project.process}}% Complete</small>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-xs">Success</button>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i>
                                        View </a>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>
                                        Edit </a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>
                                        Delete </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>