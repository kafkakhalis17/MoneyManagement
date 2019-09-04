$(document).ready(function(){
    $("#DataSiswa").DataTable();
    $(".DataTable").DataTable();
    $(".Data-Form").DataTable(
        {
            "scrollX": true
        }
    )

    
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
    if (getUrlParameter('alert')=='alert') {
        swal({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success",
          });

          
    }
    // Page(urlParameter,form);

    // if ($(window).width() > 1366){
    //     $(".container").css("width","1448");
    // }
    // else $(".container").css("width","1270");
    
    $(".select-nama").chosen();
    $(".num").css("color", getRandomColor());
    
    
$('.btn-right').click(function () {
    var container = $('.grid-status-child');
    SideScroll(container,'right',25,100,10);
});  

$('.btn-left').click(function () {
    var container = $('.grid-status-child');
    SideScroll(container,'left',25,100,10);
}); 
  
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


function SideScroll(element,direction,speed,distance,step) {
    scrollAmount = 0;
    var slideTimer = setInterval(function(){
        if(direction == 'left'){
            element.scrollLeft -= step;
        } else {
            element.scrollLeft += step;
        }
        scrollAmount += step;
        if(scrollAmount >= distance){
            window.clearInterval(slideTimer);
        }
    }, speed);
}

