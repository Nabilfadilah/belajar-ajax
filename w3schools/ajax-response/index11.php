<!DOCTYPE html>
<html>

<body>

    <h2>The XMLHttpRequest Object</h2>

    <p>The getAllResponseHeaders() function returns all the header information of a resource, like length, server-type, content-type, last-modified, etc:</p>

    <!-- ngambil dari id ini -->
    <p id="demo"></p>

    <script>
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML =
                    // memberikan getAllResponseHeader method
                    this.getAllResponseHeaders();
            }
        };
        xhttp.open("GET", "src/ajax_info.txt", true);
        xhttp.send();
    </script>

</body>

</html>