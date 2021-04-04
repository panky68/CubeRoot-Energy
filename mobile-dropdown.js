//Mobile Navigation toggle
$(document).ready(function(){
    $(".menu-icon").click(function(){                       //on menu-icon click event
        if($(".nav-list").hasClass("nav-list-hide")){       //if nav-list has class nav-list-hide
            $(".nav-list").removeClass("nav-list-hide");    //remove class nav-list-hide from nav-list
            $(".nav-list").addClass("nav-list-show");       //and add .nav-list-show to nav-list
        }else{                                              //if nav-list does not have class nav-list-hide, ie class nav-list-show
            $(".nav-list").addClass("nav-list-hide");       //add class nav-list-hide to nav-list
            $(".nav-list").removeClass("nav-list-show");    //remove class nav-list-show from nav-list
        }
    });
});

//For solar panel dropdown menu in mobile view
$(document).ready(function(){
    $(".solar-panel-link").click(function(){                //on solar-panel-link click event
        if($(".dropdown1").hasClass("dropdown1-hide")){
            $(".dropdown1").removeClass("dropdown1-hide");
            $(".dropdown1").addClass("dropdown1-show");
        }else{
            $(".dropdown1").addClass("dropdown1-hide");
            $(".dropdown1").removeClass("dropdown1-show");
        }
    });
});

//For Boiler dropdown menu in mobile view
$(document).ready(function(){                               //on boiler-link click event
    $(".boiler-link").click(function(){
        if($(".dropdown2").hasClass("dropdown2-hide")){
            $(".dropdown2").removeClass("dropdown2-hide");
            $(".dropdown2").addClass("dropdown2-show");
        }else{
            $(".dropdown2").addClass("dropdown2-hide");
            $(".dropdown2").removeClass("dropdown2-show");
        }
    });
});

//For Heatpumps dropdown menu in mobile view
$(document).ready(function(){
    $(".heatpumps-link").click(function(){                  //on heatpumps-link click event
        if($(".dropdown3").hasClass("dropdown3-hide")){
            $(".dropdown3").removeClass("dropdown3-hide");
            $(".dropdown3").addClass("dropdown3-show");
        }else{
            $(".dropdown3").addClass("dropdown3-hide");
            $(".dropdown3").removeClass("dropdown3-show");
        }
    });
});