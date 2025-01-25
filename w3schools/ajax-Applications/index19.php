<!DOCTYPE html>
<html>

<body>

    <!-- menampilkan data catalog -->
    <div id='showCD'></div><br>

    <!-- memberikan tombol navigasi -->
    <input type="button" onclick="previous()" value="<<">
    <input type="button" onclick="next()" value=">>">

    <script>
        // dispay catalog dimulai dari data ke-0
        var i = 0,
            len;
        displayCD(i);

        function displayCD(i) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // memanggil function 
                    myFunction(this, i);
                }
            };
            xmlhttp.open("GET", "src/cd_catalog.xml", true);
            xmlhttp.send();
        }

        function myFunction(xml, i) {
            var xmlDoc = xml.responseXML;
            // memanggil method getElementsByTagName dari CD
            x = xmlDoc.getElementsByTagName("CD");
            len = x.length;
            document.getElementById("showCD").innerHTML =
                "Artist: " +
                // mengambil method getElementsByTagName dan array ke-0 
                x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
                "<br>Title: " +
                x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
                "<br>Year: " +
                x[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue;
        }

        // navigasi selanjutnya
        function next() {
            if (i < len - 1) {
                i++;
                displayCD(i);
            }
        }

        // navigasi sebelumnya
        function previous() {
            if (i > 0) {
                i--;
                displayCD(i);
            }
        }
    </script>

</body>

</html>