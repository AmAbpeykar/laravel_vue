var i = 0;
var counter = 1
var test = document.getElementById('myBar')
if(test.visible == true){

    if (i == 0) {
        i = 1;
        var elem = document.getElementById("myBar");
        var count = document.getElementById("number")
        var width = 1;
        var id = setInterval(frame, 10);
        function frame() {
            if (width >= 100) {
                clearInterval(id);
                i = 0;
                counter = 0;
            } else {
                width++;
                counter++;
                elem.style.width = width + "%";
                count.innerHTML = counter + "%";
            }
        }
    }
}

