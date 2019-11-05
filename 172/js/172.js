
$(document).ready(function() {
  $('.collapse-link').on('click', function() {
      var $BOX_PANEL = $(this).closest('.x_panel'),
          $ICON = $(this).find('i'),
          $BOX_CONTENT = $BOX_PANEL.find('.x_content');
      
      // fix for some div with hardcoded fix class
      if ($BOX_PANEL.attr('style')) {
          $BOX_CONTENT.slideToggle(200, function(){
              $BOX_PANEL.removeAttr('style');
          });
      } else {
          $BOX_CONTENT.slideToggle(200); 
          $BOX_PANEL.css('height', 'auto');  
      }

      $ICON.toggleClass('fa-chevron-up fa-chevron-down');
  });

  $('.close-link').click(function () {
      var $BOX_PANEL = $(this).closest('.x_panel');

      $BOX_PANEL.remove();
  });
});
(function () {
  
  var app = angular.module('app', []);

  app.controller('filterOrderByCtrl', filterOrderByCtrl);

  filterOrderByCtrl.$inject = ['$scope'];


  function filterOrderByCtrl($scope) {
    var employees = [
      { name: 'Airi Satou', Position: 'Accountant', Office: 'Tokyo', Age: '33', Startdate: new Date('2008/11/28'), Salary: 162700 },
      { name: 'Angelica Ramos', Position: 'Chief Executive Officer (CEO)', Office: 'London', Age: '47', Startdate: new Date('2009/10/09'), Salary: 1200000 },
      { name: 'Ashton Cox', Position: 'Junior Technical Author', Office: 'San Francisco', Age: '66', Startdate: new Date('2009/01/12'), Salary: 86000 },
      { name: 'Bradley Greer', Position: 'Software Engineer', Office: 'London', Age: '41', Startdate: new Date('2012/10/13'), Salary: 132000 },
      { name: 'Brenden Wagner', Position: 'Software Engineer', Office: 'San Francisco', Age: '28', Startdate: new Date('2011/06/07'), Salary: 206850 },
      { name: 'Brielle Williamson', Position: 'Integration Specialist', Office: 'New York', Age: '61', Startdate: new Date('2012/12/02'), Salary: 372000 },
      { name: 'Bruno Nash', Position: 'Software Engineer', Office: 'London', Age: '38', Startdate: new Date('2011/05/03'), Salary: 163500 },
      { name: 'Caesar Vance', Position: 'Pre-Sales Support', Office: 'New York', Age: '21', Startdate: new Date('2011/12/12'), Salary: 106450 },
      { name: 'Cara Stevens', Position: 'Sales Assistant', Office: 'New York', Age: '46', Startdate: new Date('2011/12/06'), Salary: 145600 },
      { name: 'Cedric Kelly', Position: 'Senior Javascript Developer', Office: 'Edinburgh', Age: '22', Startdate: new Date('2012/03/29'), Salary: 433060 },

    ];
    $scope.employees = employees;
    $scope.sortColumn = 'name';
    $scope.searchName = '';
    $scope.reverse = false;


    $scope.sortData = function (column) {
      if ($scope.sortColumn == column) {
        $scope.reverse = !$scope.reverse;
      }
      else {
        $scope.reverse = false;
      }
      $scope.sortColumn = column;

    }
    $scope.getSortClass = function (column) {
      if ($scope.sortColumn == column) {
        return $scope.reverse ? 'arrow-up' : 'arrow-down';
      }
      return '';
    }

  }

})(window.angular)



