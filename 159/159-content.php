<div class="container">
  <div class="row">
    <div class="type-159">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <!--Open Block -->
        <button type="button" class="btn-open btn my-btn">Open</button>
        <div class="x_panel tile fixed_height_320">
          <div class="x_title">
            <h2>App Versions</h2>
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
            <h4>App Usage across versions</h4>
            <div v-for="(progressBar, i) in progressBars" class="widget_summary">
              <div class="w_left w_25">
                <span>{{ progressBar.title }}</span>
              </div>
              <div class="w_center w_55">
                <div class="progress" @click="changeValue(i)">
                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                  aria-valuemin="0" aria-valuemax="100" v-bind:style="{width: progressBar.process + 'px'}">
                  <span class="sr-only">{{ progressBar.value }}% Complete</span>
                </div>
              </div>
            </div>
            <div class="w_right w_20">
              <span>{{ progressBar.value }}K</span>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <button type="button" class="btn-open btn my-btn">Open</button>
      <div class="x_panel tile fixed_height_320 overflow_hidden">
        <div class="x_title">
          <h2>Device Usage</h2>
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
          <canvas id="myChart"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <button type="button" class="btn-open btn my-btn">Open</button>
      <div class="x_panel tile fixed_height_320">
        <div class="x_title">
          <h2>Quick Settings</h2>
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
          <div class="dashboard-widget-content">
            <ul class="quick-list">
              <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
              </li>
              <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
              </li>
              <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
              <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
              </li>
              <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
              <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
              </li>
              <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
              </li>
            </ul>
            <div class="sidebar-widget" id="app">
              <canvas class="chartjs-gauge"></canvas>
              <p>{{ gauge.values[0] }} %</p>
            </div>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn my-btn modal-btn" data-toggle="modal" data-target="#myModal" v-bind:style="{display: gauge.openModal}">Open</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog" >
              <div class="modal-dialog" style="z-index: 9999">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Table VueJS</h4>
                  </div>
                  <div class="modal-body">
                    <p>List data from VueJS and have orders</p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th v-for="column in table.columns" scope="col"><a style="cursor:pointer" href="#">{{column}}</a></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(user,i) in table.users">
                          <th scope="row">{{i + 1}}</th>
                          <td>{{user.name}}</td>
                          <td>{{user.address}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
