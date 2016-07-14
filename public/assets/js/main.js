$(document).ready(function(){
    $(".menumain").click(function(){
        $(".primarymenu").fadeIn('fast');
    });
});

$(document).ready(function(){
    $(".fa-times").click(function(){
        $(".primarymenu").fadeOut('fast');
    });
});

$(document).ready(function(){
    $(".searchmain").click(function(){
        $(".search_project").fadeIn('fast');
    });
});
