
function loimg(){
if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("llk").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","sql4.php");
        xmlhttp.send();
}




$(function() {
loimg();
});
