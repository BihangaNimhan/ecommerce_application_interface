function windows() {
    window.location = "windows.php"
}

function apple() {
    window.location = "apple.php"
}

function android() {
    window.location = "android.php"
}

function gotohome() {
    window.location = "index.php"
}

function viewdata() {
    window.location = "viewdata.php"
}

function m(x) {
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            var d = document.getElementById("d1");
            d.innerHTML = text;


        }
    };
    r.open("GET", "viewprocess.php?i=" + x, true);
    r.send();
}

function searchp() {

    var contenttag = document.getElementById("c");

    var content = contenttag.value;

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            var d = document.getElementById("d1")
            d.innerHTML = text;


        }
    };
    r.open("POST", "searchprocess.php", true);
    r.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    r.send("co=" + content);
}