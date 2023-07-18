$(document).ready(function() {
    $('.datepicker').datepicker({
        dateFormat: 'yy-mm-dd',
        changeYear: true,
        yearRange: '1950:' + new Date().getFullYear(),
    });
});
