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
});

//Duy code - list column, sort column, process bar
var table_projects = new Vue({
    el: ".type-171",
    data: {
        status: 'asc',
        projects: [
            { id: 1, name: "Duy Project", team_member: 4, process: 17, status: "success", created_at: "04.01.2015" },
            { id: 2, name: "Trang Project", team_member: 2, process: 22, status: "success", created_at: "07.01.2015" },
            { id: 3, name: "Cong Project", team_member: 12, process: 32, status: "success", created_at: "01.01.2015" },
            { id: 4, name: "Thuy Project", team_member: 5, process: 32, status: "success", created_at: "01.01.2015" },
        ],
        timer: null,
        sortDirection: "DESC"
    },
    mounted() {
        this.timer = setInterval(() => {
            this.projects.forEach(project => (project.process = 25 + Math.floor(Math.random() * 75)))
        }, 2000)
    },
    methods: {
        //hàm s?p x?p d?a vào id
        sortBy: function(column) {
            if (status == 'asc') {
                status = 'desc';
                switch (column) {
                    case "id":
                        this.projects.sort(function(a, b) {
                            return a.id < b.id;
                        });
                        break;
                    case "name":
                        this.projects.sort(function(a, b) {
                            return a.name < b.name;
                        });
                        break;

                }

            } else {
                status = 'asc';
                switch (column) {
                    case "id":
                        this.projects.sort(function(a, b) {
                            return a.id > b.id;
                        });
                        break;
                    case "name":
                        this.projects.sort(function(a, b) {
                            return a.name > b.name;
                        });
                        break;

                };
            }

        }
    }
})