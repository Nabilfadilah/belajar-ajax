<!DOCTYPE html>
<html>

<body>

    <div id="demo">

        <h2>The XMLHttpRequest Object</h2>

        <!-- menjalankan function callback dengan  -->
        <button type="button" onclick="loadDoc('src/ajax_info.txt', myFunction)">Change Content
        </button>
    </div>

    <script>
        function loadDoc(url, cFunction) {
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    cFunction(this);
                }
            };
            xhttp.open("GET", url, true);
            xhttp.send();
        }

        // memberikan callback function untuk button
        function myFunction(xhttp) {
            document.getElementById("demo").innerHTML =
                xhttp.responseText;
        }
    </script>
</body>

</html>