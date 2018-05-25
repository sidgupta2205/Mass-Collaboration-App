$('.like').click(function(){
changelike($('.like').attr("src"),$('.post').data());
});

function changelike(str,pqr) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 $('.like').attr("src",xmlhttp.responseText);
            }
        };
        xmlhttp.open("GET","sql2.php?q=str&r=pqr",true);
        xmlhttp.send();
    }
}