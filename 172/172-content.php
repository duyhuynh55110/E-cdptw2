<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-172">
    <div class="container">
        <div ng-controller="filterOrderByCtrl">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Default Example <small>Users</small></h2>
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
                    <div class="x_content dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <label>
                            <div class="col-sm-6">
                                <label>Show <select>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="dataTables_filter"><label>Search:
                                        <input type="search" class="form-control input-sm" placeholder=""
                                            ng-enter="searchName" ng-model="searchModel">
                                        <i class="fa fa-search" aria-hidden="true"
                                            ng-click="searchName = searchModel"></i>
                                    </label>
                                </div>
                            </div>
                            <table class="table">
                               
                                <tr>
                                    <td><input type="checkbox" ng-model="myCheck"></td>
                                    <td ng-click="sortData('name')" >Name<div ng-class="getSortClass('name')"
                                            ng-show="sortKey=='name'"></div>
                                    </td>
                                    <td ng-click="sortData('Position')">Position<div ng-class="getSortClass('Position')"
                                            ng-show="sortKey1=='Position1'">
                                        </div>
                                    </td>
                                    <td ng-click="sortData('Office')">Office<div ng-class="getSortClass('Office')"
                                            ng-show="sortKey1=='Office1'"></div>
                                    </td>
                                    <td ng-click="sortData('Age')">Age<div ng-class="getSortClass('Age')"
                                            ng-show="sortKey=='Age'">
                                        </div>
                                    </td>
                                    <td ng-click="sortData('Startdate')">Start date<div
                                            ng-class="getSortClass('Startdate')" ng-show="sortKey=='Startdate'">
                                        </div>
                                    </td>
                                    <td ng-click="sortData('Salary')">Salary<div ng-class="getSortClass('Salary')"
                                            ng-show="sortKey=='Salary'"></div>
                                    </td>
                                </tr>
                               

                                <tbody>
                                    <tr class="odd1 mov" ng-repeat="employee in employees | orderBy: sortColumn:reverse | filter:searchName">
                                        <td><input type="checkbox" ng-checked="myCheck"></td>
                                        <td>{{employee.name| lowercase }}</td>
                                        <td>{{employee.Position| lowercase }}</td>
                                        <td>{{employee.Office | lowercase }}</td>
                                        <td>{{employee.Age| lowercase }}</td>
                                        <td>{{employee.Startdate | date: "yyyy/MM/dd" }}</td>
                                        <td>${{employee.Salary| currency:"" }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>