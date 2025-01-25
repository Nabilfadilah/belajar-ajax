<!DOCTYPE html>
<html>

<body>

    <h2>The XMLHttpRequest Object</h2>

    <h3>Start typing a name in the input field below:</h3>

    <!-- pesan dari file html akan tampil disini -->
    <p>Suggestions: <span id="txtHint"></span></p>

    <!-- membuat form input untuk menampilkan data html, mennggunakan onkeup yang mengambil dari value -->
    <p>First name: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

    <script>
        // function untuk menapilkan input dan menampilkan html 
        function showHint(str) {
            var xhttp;
            if (str.length == 0) {
                // method getElementById mengemballikan data html
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // mengsisi element
                    document.getElementById("txtHint").innerHTML = this.responseText; // mengambil response text
                }
            };
            xhttp.open("GET", "src/gethint03d2.html?q=" + str, true);
            xhttp.send();
        }
    </script>

</body>

</html>