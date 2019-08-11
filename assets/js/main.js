$(document).ready(function(){
    if ($(window).width() > 1366){
        $(".container").css("width","1448");
    }
    else $(".container").css("width","1270");

    $(".TableData").DataTable();

});