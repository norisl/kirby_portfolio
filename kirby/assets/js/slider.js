var tl = new TimelineLite({ onUpdate: updateSlider }),
    circle = document.getElementById("questionmark");

tl.to(circle, 1, { morphSVG: "#cross" }, "+=1");

/* controls */

$("#slider").slider({
        range: false,
        min: 0,
        max: 1,
        step: .001,
        slide: function(event, ui) {
            tl.progress(ui.value).pause();
        },
        stop: function() {
            tl.play();
        }
    });

function updateSlider() {
    $("#slider").slider("value", tl.progress());
}
