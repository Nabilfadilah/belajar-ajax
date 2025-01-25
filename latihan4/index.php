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

    <h3>Latihan 4</h3>

    <input type="text" placeholder="Pencarian" id="keyword">

    <button id="btn">Ambil Data</button>

    <li id="result"></li>

    <script>
        function load_ajax() {
            // variabel ajax
            const ajax = new XMLHttpRequest() // objek ajax yang sudah tertanam di browser

            // textnya akan diambil dari value yang dimasukan user
            let text = document.getElementById('keyword').value

            // membuat key dan value
            let data = "keyword=" + text;

            // memanggil metode open
            // ('method', 'lokasi data text + keyword', asingkronus)
            ajax.open('POST', 'src/data.php', true)
            // menambah header untuk mengambil data
            ajax.setRequestHeader('Content-Type', "application/x-www-form-urlencoded")

            // uji kondisi dari objek ajax
            ajax.onreadystatechange = function() {
                // menguji statusnya
                // apakah requestnya sudah selesai/belum & status nya samadengan 200?
                if (this.readyState === 4 && this.status === 200) {

                    // mengsisi element
                    document.getElementById('result').innerHTML = this.responseText // mengambil response text
                }
            }
            // mengirimkan request ini 
            ajax.send(data);
        }

        // seleksi documentnya dan tambah eventnya
        document.getElementById('btn').onclick = function() {
            load_ajax();
        };
    </script>

</body>

</html>