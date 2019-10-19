/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function init_gauge() {
    if ("undefined" != typeof Gauge) {
        console.log("init_gauge [" + $(".gauge-chart").length + "]"), console.log("init_gauge");
        var a = {
            lines: 12,
            angle: 0,
            lineWidth: .4,
            pointer: {
                length: .75,
                strokeWidth: .042,
                color: "#1D212A"
            },
            limitMax: "false",
            colorStart: "#1ABC9C",
            colorStop: "#1ABC9C",
            strokeColor: "#F0F3F3",
            generateGradient: !0
        };
        if ($("#chart_gauge_01").length)
            var b = document.getElementById("chart_gauge_01"),
                    c = new Gauge(b).setOptions(a);
        if ($("#gauge-text").length && (c.maxValue = 6e3, c.animationSpeed = 32, c.set(3200), c.setTextField(document.getElementById("gauge-text"))), $("#chart_gauge_02").length)
            var d = document.getElementById("chart_gauge_02"),
                    e = new Gauge(d).setOptions(a);
        $("#gauge-text2").length && (e.maxValue = 9e3, e.animationSpeed = 32, e.set(2400), e.setTextField(document.getElementById("gauge-text2")))
    }
}

function init_skycons() {
    if ("undefined" != typeof Skycons) {
        console.log("init_skycons");
        var c, a = new Skycons({
            color: "#73879C"
        }),
                b = ["clear-day", "clear-night", "partly-cloudy-day", "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind", "fog"];
        for (c = b.length; c--; )
            a.set(b[c], b[c]);
        a.play()
    }
}

$(document).ready(function () {
    init_skycons(), init_gauge()
});