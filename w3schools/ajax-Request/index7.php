<!DOCTYPE html>
<html>

<body>

    <h2>The XMLHttpRequest Object</h2>

    <p id="demo">Biarkan AJAX mengubah teks ini..</p>

    <button type="button" onclick="loadDoc()">Change Content</button>

    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            // membuat Synchronous Request (false)
            xhttp.open("GET", "src/ajax_info.txt", false);
            xhttp.send();
            document.getElementById("demo").innerHTML = xhttp.responseText;
        }
    </script>

</body>

</html>