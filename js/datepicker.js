$(function() {
    $("#my_date_picker").datepicker({ minDate: new Date(1910, 4, 18), maxDate: new Date(2004, 4, 18), changeMonth: true,
        changeYear: true, yearRange: "-100:-16", monthRange: "1:12", numberOfMonths: 1 });
    
});