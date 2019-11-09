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
            var a = $(this).closest(".x_panel");
            a.hide();
            $('#open').show();

        })

    $('#open').click(function() {
        var a = $(this).next(".x_panel");
        a.show();
        $(this).hide();
    });
    $(".close-link1").click(function() {
        var a = $(this).closest(".x_panel");
        a.hide();
        $('#open1').show();

    })
    $('#open1').click(function() {
        var a = $(this).next(".x_panel");
        a.show();
        $(this).hide();
    });
    $(function() {
        $("#sortable").sortable();
        $("#sortable").disableSelection();
    });

    $(".flat").click(function() {
        $('.l').css('color', '#23527c');
    });
    $(".flat1").click(function() {
        $('.l1').css('color', '#23527c');
    });
    $(".flat2").click(function() {
        $('.l2').css('color', '#23527c');
    });
    $(".flat3").click(function() {
        $('.l3').css('color', '#23527c');
    });
    $(".flat4").click(function() {
        $('.l4').css('color', '#23527c');
    });
    $(".flat5").click(function() {
        $('.l5').css('color', '#23527c');
    });
})