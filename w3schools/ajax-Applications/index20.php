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

    <p>Click on a CD to display album information.</p>
    <!-- menampilkan data catalog ketika di klik di table-->
    <p id='showCD'></p>

    <!-- menampikan table -->
    <table id="demo"></table>

    <script>
        var x, xmlhttp, xmlDoc
        xmlhttp = new XMLHttpRequest();

        // akan membuka data catalog
        xmlhttp.open("GET", "src/cd_catalog.xml", false);
        xmlhttp.send();

        xmlDoc = xmlhttp.responseXML;
        // memanggil method getElementsByTagName dari CD
        x = xmlDoc.getElementsByTagName("CD");

        // meberikan table row dan table header
        table = "<tr><th>Artist</th><th>Title</th></tr>";
        for (i = 0; i < x.length; i++) {
            // pada kolom artis di klik, maka akan menampilkan data cd nya
            table += "<tr onclick='displayCD(" + i + ")'><td>";
            table += x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue;
            table += "</td><td>";
            table += x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue;
            table += "</td></tr>";
        }
        document.getElementById("demo").innerHTML = table;

        function displayCD(i) {
            // memanggil getElementById dari showCD ketika sudah klik kolom artis
            document.getElementById("showCD").innerHTML =
                "Artist: " +
                // memanggil method getElementsByTagName dari CD
                x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
                "<br>Title: " +
                x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
                "<br>Year: " +
                x[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue;
        }
    </script>

</body>

</html>