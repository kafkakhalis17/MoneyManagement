$(document).ready(function(){
    // if ($(window).width() > 1366){
    //     $(".container").css("width","1448");
    // }
    // else $(".container").css("width","1270");

    $("#DataSiswa").DataTable();

    urlParameter = getUrlParameter('page');
    function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
    
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');
    
            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
    };
   Page(urlParameter);
});

function Page(page) {

    if ($("#"+page).attr("visibility")=="close"){
        window.history.pushState("","","http://localhost/MoneyManagement1?page="+page);
        $("#"+page).removeClass("page-hide");
        $("div.page[visibility='open']").attr("visibility","close").addClass("page-hide");
        $("#"+page).attr("visibility","open");  
      
    }
    else console.log("alredy open")
}


function openmodal() {
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      })
}
