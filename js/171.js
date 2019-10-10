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
            a.remove()
        })
})

var table_projects = new Vue({
    el: ".type-335",
    data: {
        projects: [
            {id: 1, name: "Duy Project", team_member: 4, process: 17, status: "success" , created_at: "04.01.2015"},
            {id: 2, name: "Trang Project", team_member: 2, process: 22, status: "success" , created_at: "07.01.2015"},
            {id: 3, name: "Cong Project", team_member: 3, process: 32, status: "success" , created_at: "01.01.2015"},
            {id: 4, name: "Thuy Project", team_member: 5, process: 32, status: "success" , created_at: "01.01.2015"},
        ],
        timer: null
    },
    mounted() {
            this.timer = setInterval(() => {
              this.projects.forEach(project => (project.process = 25 + Math.floor(Math.random() * 75)))
            }, 2000)
    }
})