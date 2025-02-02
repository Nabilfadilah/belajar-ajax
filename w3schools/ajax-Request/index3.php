<!DOCTYPE html>
<html>

<body>

    <h2>The XMLHttpRequest Object</h2>

    <button type="button" onclick="loadDoc()">Request data</button>

    <p>Click the button several times to see if the time changes, or if the file is cached.</p>

    <p id="demo"></p>

    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "src/demo_get.html?t=" + Math.random(), true);
            xhttp.send();
        }
    </script>

</body>

</html>