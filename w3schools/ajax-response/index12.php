<html>

<body>

    <h2>The XMLHttpRequest Object</h2>

    <p>The getResponseHeader() function is used to return specific header information from a resource, like length, server-type, content-type, last-modified, etc:</p>

    <!-- mengambil dari id, yang hanya waktu terakhir saja -->
    <p>Last modified: <span id="demo"></span></p>

    <script>
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML =
                    // memberikan getResponseHeader() method
                    this.getResponseHeader("Last-Modified");
            }
        };
        xhttp.open("GET", "src/ajax_info.txt", true);
        xhttp.send();
    </script>

</body>

</html>