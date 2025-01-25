<!DOCTYPE html>
<html>

<body>

    <h2>The XMLHttpRequest Object</h2>

    <p id="demo">Biarkan AJAX mengubah teks ini.</p>

    <button type="button" onclick="loadDoc()">Change Content</button>

    <script>
        function loadDoc() {
            var xhttp;
            if (window.XMLHttpRequest) {
                // code dari browsers modern
                xhttp = new XMLHttpRequest();
            } else {
                // code dari IE6, IE5
                xhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "src/ajax_info.txt", true);
            xhttp.send();
        }
    </script>

</body>

</html>