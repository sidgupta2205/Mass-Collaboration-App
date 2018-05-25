<html>
<head>
<title>
ssss
</title>
<script type="text/javascript" src="../script/jquery-2.1.4.js"></script>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
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
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","sql2.php?q="+str,true);
        xmlhttp.send();
    }
}

function showDate(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
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
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","sql3.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<ul>
<li id="1">jjj</li>
<li id="2">ssss</li>
<li id="3">ssssss</li>
Select date<input type="date" class="datep">
<script>
$(function() {
  $(".datep").on("change",function() {
var j = $(".datep").val();
//var n = j.toString();
showDate(j);
 });
});
</script>
<div id="txtHint"><b>Person info will be listed here...</b></div>
<script>
$(function() {
  $("li").on("click",function() {
  showUser(this.id);
  });
});
</script>
</ul>
