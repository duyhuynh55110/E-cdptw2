
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="type-150">
                <div class="dashboard_graph">
                    <div class="row x_title">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <h3 style="line-height: 29px;">Network Activities <small>Graph title sub-title</small></h3>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="filter-time">
                                <div class="show-calendar">
                                    <i class="fa fa-calendar"></i> <input type="text" id="datepicker" placeholder="Click view date">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <line-chart></line-chart>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                        <div class="x_title">
                            <h2>Top Campaign Performance</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div v-for="social in socials" class="row-social">
                            <p>{{ social.name }}</p>
                            <div class="">
                                <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"
                                    aria-valuenow="79" v-bind:style="{width: social.process +'%'}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</div>
