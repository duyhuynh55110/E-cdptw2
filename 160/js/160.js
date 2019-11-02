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



var template = React.createElement("div", null, " ", React.createElement("div", {
    style: "margin-top: 15px; margin-bottom: 10px;"
}, React.createElement("span", null, { a.title }), React.createElement("span", null, "This sis")), React.createElement("div", {
    className: "col-xs-2"
}, React.createElement("span", null, { a.SSD })), React.createElement("div", {
    className: "col-xs-8"
}, React.createElement("div", {
    className: "progress"
}, React.createElement("div", {
    className: "progress-bar",
    style: "width: {a.process}+%"
}))), React.createElement("div", {
    className: "col-xs-2"
}, React.createElement("span", null, "{a.process}+%")));

var table_projects = new Vue({
    el: ".type-171",
    data: {
        status: 'asc',
        projects: [{
                id: 1,
                name: "Duy Project",
                team_member: 4,
                process: 17,
                status: "success",
                created_at: "04.01.2015"
            },
            {
                id: 2,
                name: "Trang Project",
                team_member: 2,
                process: 22,
                status: "success",
                created_at: "07.01.2015"
            },
            {
                id: 3,
                name: "Cong Project",
                team_member: 12,
                process: 32,
                status: "success",
                created_at: "01.01.2015"
            },
            {
                id: 4,
                name: "Thuy Project",
                team_member: 5,
                process: 32,
                status: "success",
                created_at: "01.01.2015"
            },
        ],
        timer: null,
        sortDirection: "DESC"
    },
    mounted() {
        this.timer = setInterval(() => {
            this.projects.forEach(project => (project.process = 25 + Math.floor(Math.random() * 75)))
        }, 2000)
    }
})