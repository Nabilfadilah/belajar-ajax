<!DOCTYPE html>
<html>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 5px;
    }
</style>

<body>

    <!-- event ketika button di klik maka table tampil -->
    <button type="button" onclick="loadXMLDoc()">Get my CD collection</button>
    <br><br>

    <!-- tampilan table dari id = demo -->
    <table id="demo"></table>

    <script>
        function loadXMLDoc() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // memanggil function xml
                    myFunction(this);
                }
            };
            xmlhttp.open("GET", "src/cd_catalog.xml", true);
            xmlhttp.send();
        }

        // memberikan function untuk memanggil xml dan memerikan tampilan table
        function myFunction(xml) {
            var i;
            var xmlDoc = xml.responseXML;
            // atur table row dan table header
            var table = "<tr><th>Artist</th><th>Title</th></tr>";
            // memanggil method getElementsByTagName dari CD
            var x = xmlDoc.getElementsByTagName("CD");
            for (i = 0; i < x.length; i++) {
                table += "<tr><td>" +
                    // mengambil method getElementsByTagName dan array ke-0 
                    x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
                    "</td><td>" +
                    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
                    "</td></tr>";
            }
            // method getElementById demo untuk menampillkan table
            document.getElementById("demo").innerHTML = table;
        }
    </script>

</body>

</html>