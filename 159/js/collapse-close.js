$(document).ready(function () {
    $(".collapse-link").on("click", function () {
        var a = $(this).closest(".admin-panel"),
                b = $(this).find("i"),
                c = a.find(".admin-content");
        a.attr("style") ? c.slideToggle(200, function () {
            a.removeAttr("style")
        }) : (c.slideToggle(200), a.css("height", "auto")), b.toggleClass("fa-chevron-up fa-chevron-down")
    }), $(".close-link").click(function () {
        var a = $(this).closest(".admin-panel");
        a.remove()
    })
})