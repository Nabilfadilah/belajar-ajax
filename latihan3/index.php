<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Ajax</title>
    <style>
        body {
            margin: 5%;
            font-family: sans-serif;
            border: 0;
        }
    </style>
</head>

<body>

    <h3>Latihan 2</h3>

    <button id="btn">Ambil Data</button>

    <p>Menampilkan text ke browser : </p>
    <li>Text: <strong id="result"></strong></li>

    <script>
        function load_ajax() {
            // variabel ajax
            const ajax = new XMLHttpRequest() // objek ajax yang sudah tertanam di browser

            // memanggil metode open
            // ('method', 'lokasi data text', asingkronus)
            ajax.open('GET', 'src/data.txt', true)

            // uji kondisi dari objek ajax
            ajax.onreadystatechange = function() {
                // menguji statusnya
                // apakah requestnya sudah selesai/belum & status nya samadengan 200?
                if (this.readyState === 4 && this.status === 200) {

                    // mengsisi element
                    document.getElementById('result').textContent = this.responseText // mengambil response text
                }
            }
            // mengirimkan request ini 
            ajax.send();
        }

        // seleksi documentnya dan tambah eventnya
        document.getElementById('btn').onclick = function() {
            load_ajax();
        };
    </script>

</body>

</html>