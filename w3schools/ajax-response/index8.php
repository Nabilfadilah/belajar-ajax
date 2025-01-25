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
            // menambah onreadystatechange property
            xhttp.onreadystatechange = function() {
                // menambahkan properti readyState 4 dan status 200 
                if (this.readyState == 4 && this.status == 200) {
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