<!DOCTYPE html>
<html>

<body>

    <h2>The XMLHttpRequest Object</h2>

    <p id="demo"></p>

    <script>
        var xhttp, xmlDoc, txt, x, i;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                xmlDoc = this.responseXML;
                txt = "";
                // getElementsByTagName
                x = xmlDoc.getElementsByTagName("ARTIST");
                for (i = 0; i < x.length; i++) {
                    txt = txt + x[i].childNodes[0].nodeValue + "<br>";
                }
                document.getElementById("demo").innerHTML = txt;
            }
        };
        xhttp.open("GET", "src/cd_catalog.xml", true);
        xhttp.send();
    </script>

</body>

</html>