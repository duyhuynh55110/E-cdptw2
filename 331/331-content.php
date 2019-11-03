<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-331">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <button id="open" type="button" class="btn my-btn">Open</button>
        <div class="x_panel">
          <div class="x_title">
            <h2>Table Design <small>Custom Design</small></h2>
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
            <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>
            <div class="table-responsive">
              <!-- Show Table -->
              <table class="table">
                <thead class="title">
                  <tr>
                    <td><input type="checkbox" id="checkAll" v-model="all"> {{ allChecked }} </td>
                    <td v-for="(item,i) in columns" @click="sortList(item)">{{ item }} <i class="success fa fa-long-arrow-up"></i><i class="error fa fa-long-arrow-down"></i></td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(item,i) in list" class="pointer" v-bind:class="classObject(i)">
                    <td>
                      <input type="checkbox" class="flat" name="table_records" class="checkbox" v-model="item.checked">
                    </td>
                    <td>{{ item.invoice }}</td>
                    <td>{{ item.invoicedate }} </td>
                    <td>{{ item.order }}</td>
                    <td>{{ item.billtoname }}</td>
                    <td>{{ item.status }}</td>
                    <td class="a-right a-right ">${{ item.amount }}</td>
                    <td class=" last"><a href="#" @click="deleteItem(i)" class=" btn delete-btn">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>

              <!-- Export Table -->
              <table id="tableList" style="display: none" class="table">
                <thead class="title">
                  <tr>
                    <td v-for="(item,i) in columns" @click="sortList(item)">{{ item }} <i class="success fa fa-long-arrow-up"></i><i class="error fa fa-long-arrow-down"></i></td>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(item,i) in list" class="pointer" v-bind:class="classObject(i)" v-if="item.checked == 1">
                    <td class=" ">{{ item.invoice }}</td>
                    <td class=" ">{{ item.invoicedate }} </td>
                    <td class=" ">{{ item.order }}</td>
                    <td class=" ">{{ item.billtoname }}</td>
                    <td class=" ">{{ item.status }}</td>
                    <td class="a-right a-right ">${{ item.amount }}</td>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px">
                  <button id="export" type="button" class="btn" @click="tableToExcel('tableList','My Table')">Export</button>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px">
                <div class="form-group">
                  <p>Create New: </p>
                  <p class="text-danger">{{error}}</p>
                  <input type="text" class="form-control" placeholder="Order">
                  <input type="text" class="form-control" placeholder="Bill to name">
                  <input type="text" class="form-control" placeholder="Status">
                  <input type="text" class="form-control" placeholder="Amount">
                  <button id="create" type="button" class="btn" @click="createNew">Create</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
