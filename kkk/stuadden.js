function changeNo(str) {
    if (str == "") {
        document.getElementById("maintable").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("maintable").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","sql2.php?q="+str,true);
        xmlhttp.send();
    }
}

function showDate(str) {
    if (str == "") {
        document.getElementById("maintable").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("maintable").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","sql3.php?q="+str,true);
        xmlhttp.send();
    }
}

function changesub(str) {
    if (str == "") {
        document.getElementById("maintable").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("maintable").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","sql1.php?q="+str,true);
        xmlhttp.send();
    }
}

$(function() {
  $("#datep").on("change",function() {
var j = $("#datep").val();
showDate(j);
 });
  $("#dropdown li").on("click",function() {
  changeNo(this.id);
  });
   $("#dropdown1 li").on("click",function() {
  changesub($(this).text());
  });
});

