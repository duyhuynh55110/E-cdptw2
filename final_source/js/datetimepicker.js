/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function () {
    $.datepicker.setDefaults(
            $.extend($.datepicker.regional[''])
            );
    $('#datepicker').datepicker();
});
