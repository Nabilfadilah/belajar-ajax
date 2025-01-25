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

    <h3>Latihan 1</h3>
    <p>Menampilkan data json ke browser : </p>
    <li>Nama: <strong id="result"></strong></li>

    <!-- menampilkan semua data -->
    <!-- <ul id="result"></ul> -->

    <script>
        function load_ajax() {
            // variabel ajax
            const ajax = new XMLHttpRequest() // objek ajax yang sudah tertanam di browser

            // memanggil metode open
            // ('method', 'lokasi json', asingkronus)
            ajax.open('GET', 'src/data.json', true)

            // uji kondisi dari objek ajax
            ajax.onreadystatechange = function() {
                // menguji statusnya
                // apakah requestnya sudah selesai/belum & status nya samadengan 200?
                if (this.readyState === 4 && this.status === 200) {
                    // parse data response  
                    console.log('ajax berhasil dilakukan', JSON.parse(this.responseText));
                    // simpan ke variabel data, sebagai data response yang sudah parse
                    let data = JSON.parse(this.responseText)

                    // mengsisi element
                    document.getElementById('result').textContent = data[0].name

                    // Iterasi untuk menampilkan semua nama
                    // let list = '';
                    // data.forEach(item => {
                    //     list += `<li>Nama: <strong>${item.name}</strong></li>`;
                    // });

                    // document.getElementById('result').innerHTML = list;
                }
            }
            // mengirimkan request ini 
            ajax.send();
        }

        load_ajax();
    </script>

</body>

</html>