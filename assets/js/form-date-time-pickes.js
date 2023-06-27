$(function () {
    "use strict";

    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: true
    }),
        $('.timepicker').pickatime()

    $('#date-time').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD HH:mm'
    });


    $('#date-month').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD'
    });

    $('#date').bootstrapMaterialDatePicker({
        time: false
    });
    $('#time').bootstrapMaterialDatePicker({
        date: false,
        format: 'HH:mm'
    });



});