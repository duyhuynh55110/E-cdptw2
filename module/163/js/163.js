$(document).ready(function() {
    $(".collapse-link").on("click", function() {
            var a = $(this).closest(".x_panel"),
                b = $(this).find("i"),
                c = a.find(".x_content");
            a.attr("style") ? c.slideToggle(200,
                function() {
                    a.removeAttr("style")
                }) : (c.slideToggle(200),
                a.css("height", "auto")), b.toggleClass("fa-chevron-up fa-chevron-down")
        }),
        $(".close-link").click(function() {
            var a = $(this).closest(".x1");
            a.hide();
            $('#open').show();

        });

    $('#open').click(function() {
        var a = $(this).next(".x1");
        a.show();
        $(this).hide();
    });
    $(".close-link1").click(function() {
        var a = $(this).closest(".x2");
        a.hide();
        $('#open1').show();

    });

    $('#open1').click(function() {
        var a = $(this).next(".x2");
        a.show();
        $(this).hide();
    });
    $(".close-link2").click(function() {
        var a = $(this).closest(".x3");
        a.hide();
        $('#open2').show();

    });

    $('#open2').click(function() {
        var a = $(this).next(".x3");
        a.show();
        $(this).hide();
    });

})