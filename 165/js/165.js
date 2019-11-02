$(function () {
  $(document).ready(function() {
    $(".collapse-link").on("click", function () {
      var a = $(this).closest(".x_panel"),
      b = $(this).find("i"),
      c = a.find(".x_content");
      a.attr("style") ? c.slideToggle(200, function () {
        a.removeAttr("style")
      }) : (c.slideToggle(200), a.css("height", "auto")), b.toggleClass("fa-chevron-up fa-chevron-down")
    });
    $('.close-link').click(function () {
      var a = $(this).closest('.x_panel');

      a.hide();
      $('#open').show();
    });

    $('#open').click(function () {
      var a = $(this).next(".x_panel");

      a.show();
      $(this).hide();
    });
  });
});

Vue.directive("tap", {
	bind: function() {
	   alert(21);
	}
});

var type_165 = new Vue({
  el:".type-165",
  data: {
    message: "",
    list: [],
    icons: ["🐱", "🐶", "🐼", "🦁", "🐸", "🐻", "🐹", "🐯", "🐵"],
  },
  methods: {
    addNew: function() {
      let string = this.message.trim();
      if(string != null || string != ''){
        this.list.push(this.message);
      }
    },
  },
  computed: {
    /*randomIcon: function(){
      return Math.floor(Math.random() * this.icons.length;
    }*/
  }
})
