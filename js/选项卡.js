/**
 * Created by taizi on 2017/9/19.
 */
$(document).ready(function(){
    $("#ul1 li").each(function(index) {
        var linode = $(this);
        linode.mouseover(function () {
            timeoutid = setTimeout(function () {
                $("div.content").removeClass("content");
                $("#tabfirst li.tabin").removeClass("tabin");
                $("div").eq(index).addClass("content");
                linode.addClass("tabin");
            },300);
            }).mouseout(function(){
            clearTimeout(timeoutid)
        })
    })
});