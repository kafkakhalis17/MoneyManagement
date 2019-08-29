$(document).ready(function(){
    
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
    form = getUrlParameter('form');
    urlParameter = getUrlParameter('page');
    Page(urlParameter,form);

    // if ($(window).width() > 1366){
    //     $(".container").css("width","1448");
    // }
    // else $(".container").css("width","1270");
    $(".select-nama").select2();
    $("#DataSiswa").DataTable();
    $(".DataTable").DataTable();
    $(".Data-Form").DataTable(
        {
            "scrollX": true
        }
    )

    
    
  
});


function Page(page,form) {
    if ($("#"+page).attr("visibility")=="close"){
        window.history.pushState("","","http://localhost/MoneyManagement1/?page="+page);
        $("#"+page).fadeIn(900).removeClass("page-hide");
        $("div.page[visibility='open']").attr("visibility","close").addClass("page-hide").fadeOut(50);
        $("#"+page).attr("visibility","open");  
        if(form !== 'undifined'){
            window.history.pushState("","","http://localhost/MoneyManagement1/?page="+page+"&form="+form);
            $("#"+form).removeClass('form-hide');
            $("div.form-page[visibility='open']").attr("visibility","close").addClass("form-hide");
            $("#"+form).attr("visibility","open");  
        }
    }
    else console.log("alredy open");
}


function openmodal() {
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      })
}
