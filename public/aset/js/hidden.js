var m = 0;

function more() {
    if (m == 0) {
        document.getElementById("more").style.visibility = "visible";
        m = 1;
    }else {
        document.getElementById("more").style.visibility = "hidden";
        m = 0;
    }
}