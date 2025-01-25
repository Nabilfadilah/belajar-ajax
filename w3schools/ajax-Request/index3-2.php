<!DOCTYPE html>
<html>

<body>

    <h2>The XMLHttpRequest Object</h2>

    <button type="button" onclick="loadDoc()">Request data</button>

    <p id="demo"></p>

    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "src/demo_get.html?fname=Henry&lname=Ford", true);
            xhttp.send();
        }
    </script>

</body>

</html>