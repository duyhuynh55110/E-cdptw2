$(document).ready(function() {
    $(".collapse-link").on("click", function() {
        var a = $(this).closest(".admin-panel"),
            b = $(this).find("i"),
            c = a.find(".admin-content");
        a.attr("style") ? c.slideToggle(200, function() {
            a.removeAttr("style")
        }) : (c.slideToggle(200), a.css("height", "auto")), b.toggleClass("fa-chevron-up fa-chevron-down")
    }), $(".close-link").click(function() {
        var a = $(this).closest(".admin-panel");
        a.remove()
    })
})

var a = [{
        title: "Escudor Wireless 1.0 This sis",
        name: "SSD",
        process: 89,
        device: "Mobile"
    },
    {
        title: "Escudor Wireless 1.0 This sis",
        name: "SSD",
        process: 89,
        device: "Mobile"
    },
    {
        title: "Escudor Wireless 1.0 This sis",
        name: "SSD",
        process: 89,
        device: "Mobile"
    }
]
mounted() {
    this.timer = setInterval(() => {
        a => (a.process = 25 + Math.floor(Math.random() * 75))
    }, 2000)
}


var template = React.createElement("div", null, " ", React.createElement("div", {
    style: "margin-top: 15px; margin-bottom: 10px;"
}, React.createElement("span", null, "Escudor Wireless 1.0"), React.createElement("span", null, "This sis")), React.createElement("div", {
    className: "col-xs-2"
}, React.createElement("span", null, "SSD")), React.createElement("div", {
    className: "col-xs-8"
}, React.createElement("div", {
    className: "progress"
}, React.createElement("div", {
    className: "progress-bar",
    style: "width: 89%"
}))), React.createElement("div", {
    className: "col-xs-2"
}, React.createElement("span", null, "89%")));

ReactDOM.render(template, document.getElementById("progress"));