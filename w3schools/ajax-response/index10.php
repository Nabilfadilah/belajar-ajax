<!DOCTYPE html>
<html>

<body>

    <div id="demo">
        <h2>The XMLHttpRequest Object</h2>
        <button type="button" onclick="loadDoc()">Change Content</button>
    </div>

    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // response text property dari getElementById
                    document.getElementById("demo").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("GET", "src/ajax_info.txt", true);
            xhttp.send();
        }
    </script>

</body>

</html>