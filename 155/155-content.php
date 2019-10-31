<div class="type-155">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="admin-panel">
                    <div class="admin-title">
                        <h2>
                            Transaction Summary
                            <small>Weekly progress</small>
                        </h2>
                        <div class="filter-time">
                            <div class="show-calendar">
                                <i class="fa fa-calendar"></i> <input type="text" id="datepicker" placeholder="Click view date">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="admin-content">
                        <div class="col-md-9">
                            <div id="chartRainContainer"></div>
                            <div class="total-chart">
                                <div class="col-chart col-md-4 col-sm-4 col-xs-12">
                                    <span>Total Sessions</span>
                                    <h2>231,809</h2>
                                    <div id="chartCoalContainer2"></div>
                                </div>
                                <div class="col-chart col-md-4 col-sm-4 col-xs-12">
                                    <span>Total Revenue</span>
                                    <h2>231,809</h2>
                                    <div id="chartCoalContainer3"></div>
                                </div>
                                <div class="col-chart col-md-4 col-sm-4 col-xs-12">
                                    <span>Total Sessions</span>
                                    <h2>231,809</h2>
                                    <div id="chartCoalContainer4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="admin-title">
                                <h2>Top Profiles</h2>
                                <ul class="profile-user">
                                    <li>
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Settings 1</a></li>
                                            <li><a href="#">Settings 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="close-link">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>

                            </div>
                            <ul class="profiles-user">
                                <li v-for="(user, i) in users" d
                                    raggable="true" 
                                    @dragstart="dragStart(i, $event)" 
                                    @dragover.prevent 
                                    @dragenter="dragEnter" 
                                    @dragleave="dragLeave" 
                                    @dragend="dragEnd" 
                                    @drop="dragFinish(i, $event)">
                                    <a class="profile-thumb">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <div class="profile-comment">
                                        <a class="title" href="#">
                                            {{ user.name }}
                                        </a>
                                        <p>
                                            <strong>${{ user.money }}. </strong>
                                            <span>{{ user.note }}</span>
                                        </p>
                                        <p>
                                            <small>{{ user.sales }} Sales Today</small>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>