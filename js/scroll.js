var allowScroll = true;

function allowScrolling(){
    allowScroll = true;
}

function initScrolls(){
    var links = $("[to]");
    links.on("click",function(){
        to($(this).attr("to"));
    });
}

function to(element){
    if(allowScroll) {
        allowScroll = false;
        $("html, body").animate({
            scrollTop: $("#" + element).offset().top - 60
        }, 500);
        setTimeout(allowScrolling,500);
    }
    return false;
}

