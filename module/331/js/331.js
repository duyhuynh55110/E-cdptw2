$(function () {
$(document).ready(function() {
  $(".collapse-link").on("click", function () {
    var a = $(this).closest(".x_panel"),
    b = $(this).find("i"),
    c = a.find(".x_content");

    a.attr("style") ? c.slideToggle(200, function () {
      a.removeAttr("style")
    }) : fixCollap(c.css('height')), b.toggleClass("fa-chevron-up fa-chevron-down");

  });

  $('.dropdown-toggle').on('click', function(){
    var dropdown = $('.dropdown-menu');
    if(dropdown.css('display') == 'none'){
      dropdown.show();
    }else{
      dropdown.hide();
    }
  });

  $('.close-link').click(function () {
    var $BOX_PANEL = $(this).closest('.x_panel');

    $BOX_PANEL.hide();
    $('#open').show();
  });

  $('#open').on('click', function(){
    $(this).next().show();
    $(this).hide();
  });
});


var type_331 = new Vue({
  el: ".type-331",
  data: {
    all: false,
    error: "",
    columns: ['Invoice','Invoice Date','Order','Bill to Name','Status','Amount'],
    list: [
      {checked: 0, invoice: 121000040, invoicedate: "11/09/2019", order: 121000210, billtoname: "Mr. L", status: "Paid", amount: 7.45},
      {checked: 0, invoice: 121000045, invoicedate: "02/03/2019", order: 121000211, billtoname: "Blank", status: "Paid", amount: 9.00},
      {checked: 0, invoice: 121000042, invoicedate: "10/03/2019", order: 121000252, billtoname: "John", status: "Unpaid", amount: 2},
      {checked: 0, invoice: 121000043, invoicedate: "09/03/2019", order: 121000252, billtoname: "John", status: "Unpaid", amount: 2},
    ],
    sort: 'id',
    sortDisc: 'asc',
  },
  methods: {
    classObject: function(i){
      if(i%2 == 0){
        return {'odd': true};
      }else{
        return {'even': true};
      }
    },
    sortList: function(s){
      let column = s.replace( /\s/g, '').toLowerCase();

      sortByKey(this.list,column, this.sortDisc);

      this.sortDisc = (this.sortDisc == "asc")?"desc":"asc";
    },
    createNew: function(){
      var now = new Date();

      let strings = document.getElementsByClassName('form-control');

      for(string of strings){
        if(string.value.trim() == null || string.value.trim() == ''){
          this.error = "* Input all field are required";
          return;
        }
      }
      this.error = "";

      this.list.push({
        checked: 0,
        invoice: getRandom(9),
        invoicedate: now.toLocaleDateString(),
        order: strings[0].value,
        billtoname: strings[1].value,
        status: strings[2].value,
        amount: strings[3].value
      });
    },
    deleteItem: function(i){
      this.list.splice(i, 1);

    },
    tableToExcel: (function() {
      var uri = 'data:application/vnd.ms-excel;base64,'
        , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>'
        , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
        , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
      return function(table, name) {
        if (!table.nodeType) table = document.getElementById(table)
        var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
        window.location.href = uri + base64(format(template, ctx))
      }
    })()

  },
  computed: {
      allChecked: function(){
          for(let i = 0; i < this.list.length;i++){
              this.list[i].checked = this.all;
          }
      }
  }
});

  //sort object array
  function sortByKey(array, key, type = "asc") {
    if(type == 'asc'){
      return array.sort(function(a, b) {
        var x = a[key]; var y = b[key];
        return ((x < y) ? -1 : ((x > y) ? 1 : 0));
      });
    }
    else{
      return array.sort(function(a, b) {
        var x = a[key]; var y = b[key];
        return ((x > y) ? - 1 : ((x < y) ? 1 : 0));
      });
    }
  }

  //random id invoice
  function getRandom(length) {
    return Math.floor(Math.pow(10, length-1) + Math.random() * 9 * Math.pow(10, length-1));

  }

  function fixCollap(height){

      if(height == '0px'){
        $('.x_content').css('height','auto');
      }
      else{
        $('.x_content').css('height','0px');
      }
  }
});
