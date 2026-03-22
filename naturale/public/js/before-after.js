function initComparisons() {
    var x, i;
    x = document.getElementsByClassName("img-comp-overlay");
    for (i = 0; i < x.length; i++) {
        compareImages(x[i]);
    }
    function compareImages(img) {
        var slider, img, clicked = 0, w, h;
        w = img.offsetWidth;
        h = img.offsetHeight;
        img.style.clipPath = "inset(0 50% 0 0)";

        slider = document.createElement("DIV");
        slider.setAttribute("class", "img-comp-slider");

        img.parentElement.insertBefore(slider, img);

        var sliderH = slider.offsetHeight;
        var sliderW = slider.offsetWidth;

        slider.style.top = (h / 2) - (sliderH / 2) + "px";
        slider.style.left = (w / 2) - (sliderW / 2) + "px";

        var line = document.createElement("DIV");
        line.setAttribute("class", "img-comp-line");
        line.style.position = "absolute";
        line.style.width = "3px";
        line.style.height = h + "px";
        line.style.backgroundColor = "white";
        line.style.left = "50%";
        line.style.top = -(h / 2) + (sliderH / 2) + "px";
        line.style.transform = "translateX(-50%)";
        line.style.pointerEvents = "none";
        slider.appendChild(line);

        slider.addEventListener("mousedown", slideReady);
        window.addEventListener("mouseup", slideFinish);
        slider.addEventListener("touchstart", slideReady);
        window.addEventListener("touchend", slideFinish);

        function slideReady(e) {
            e.preventDefault();
            clicked = 1;
            window.addEventListener("mousemove", slideMove);
            window.addEventListener("touchmove", slideMove);
        }

        function slideFinish() {
            clicked = 0;
        }

        function slideMove(e) {
            var pos;
            if (clicked == 0) return false;
            pos = getCursorPos(e);
            if (pos < 0) pos = 0;
            if (pos > w) pos = w;
            slide(pos);
        }

        function getCursorPos(e) {
            var a, x = 0;
            e = (e.changedTouches) ? e.changedTouches[0] : e;
            a = img.getBoundingClientRect();
            x = e.pageX - a.left;
            x = x - window.pageXOffset;
            return x;
        }

        function slide(x) {
            img.style.clipPath = `inset(0 ${w - x}px 0 0)`;
            slider.style.left = x - (sliderW / 2) + "px";
        }
    }
}

window.addEventListener("load", initComparisons);