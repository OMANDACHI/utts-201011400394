<!DOCTYPE html>
<html>
<head>
    <title>Album Foto</title>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <style>
        body{
            background-color:  #E0E9F0;
        }
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E0E9F0;
        }
        
        .navbar {
            background-color: #2F4F4F;
            color: #fff;
            padding: 10px;
        }
        
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        
        .navbar li {
            margin: 0 10px;
        }
        
        .navbar a {
            text-decoration: none;
            color: white;
        }
        .btn-container {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }

        .gallery img {
            width: 300px;
            height: 300px;
            object-fit: cover;
            margin: 10px;
        }
        .search-container {
            position: Absolute;
            display: inline-block;
            top: 10px;
            right: 10px;
        }

        .search-input {
            padding: 8px;
            border: none;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-size: 14px;
        }

        .search-button {
            position: absolute;
            top: 0;
            right: 0;
            padding: 8px;
            border: none;
            background-color: #333;
            color: #fff;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }
        .image-gallery {
            display: flex;
            flex-wrap: wrap;
        }

        .image-gallery img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin: 10px;
        }
       
    </style>
    <script>
        function performSearch() {
            var searchTerm = document.getElementById('search-input').value;
            // Lakukan operasi pencarian sesuai kebutuhan
            console.log('Pencarian:', searchTerm);
        }
        function performSearch() {
            var searchTerm = document.getElementById('search-input').value;
            var apiKey = '229ff157f9b90eb273aca2f89b9d8bfa'; // Ganti dengan kunci API Anda

            // URL API pencarian gambar
            var apiUrl = 'https://pixabay.com/api/?key=' + apiKey + '&q=' + encodeURIComponent(searchTerm);

            // Mengirim permintaan GET ke API menggunakan Fetch API
            fetch(apiUrl)
                .then(function(response) {
                    return response.json();
                })
                .then(function(data) {
                    // Menampilkan gambar hasil pencarian
                    displayImages(data.hits);
                })
                .catch(function(error) {
                    console.log('Terjadi kesalahan:', error);
                });
        }

        function displayImages(images) {
            var gallery = document.getElementById('image-gallery');
            gallery.innerHTML = '';

            images.forEach(function(image) {
                var imgElement = document.createElement('img');
                imgElement.src = image.webformatURL;
                imgElement.alt = image.tags;
                gallery.appendChild(imgElement);
            });
        }
        function goBack() {
            window.history.back();
        }
        function performSearch() {
        // Mendapatkan nilai input pencarian
        var searchInput = document.getElementById("search-input").value.toLowerCase();

        // Mendapatkan semua elemen gambar dalam div dengan kelas "gallery"
        var gallery = document.getElementsByClassName("gallery")[0];
        var images = gallery.getElementsByTagName("img");

        // Melakukan iterasi pada setiap elemen gambar
        for (var i = 0; i < images.length; i++) {
            var altText = images[i].getAttribute("alt").toLowerCase();

            // Memeriksa apakah nilai pencarian cocok dengan teks alternatif gambar
            if (altText.includes(searchInput)) {
                // Jika cocok, tampilkan gambar
                images[i].style.display = "block";
            } else {
                // Jika tidak cocok, sembunyikan gambar
                images[i].style.display = "none";
            }
        }
    }
    function goBack() {
        var searchInput = document.getElementById("search-input").value.toLowerCase();
        var gallery = document.getElementsByClassName("gallery")[0];
        var images = gallery.getElementsByTagName("img");

        // Menampilkan semua gambar yang mungkin disembunyikan karena pencarian sebelumnya
        for (var i = 0; i < images.length; i++) {
            images[i].style.display = "block";
        }

        // Mereset nilai input pencarian
        document.getElementById("search-input").value = "";

        // Kembali ke halaman galeri
        window.scrollTo(0, gallery.offsetTop);
    }
    </script>
</head>
<body>
<div class="navbar">
        <ul>
            <li><a href="admin.php">Beranda</a></li>
            <li><a href="tentang.php">Tentang</a></li>
            <li><a href="Galerry.php">Galerry</a></li>
            <li><a href="kontak.php">Kontak</a></li>
        </ul>
    </div>
    <h1>Dachi_shop</h1>
    <div class="search-container">
    <input type="text" id="search-input" class="search-input" placeholder="Cari...">
    <button onclick="performSearch()" class="search-button">Cari</button>
</div>


<div class="gallery">
    <img src="show1.jpg" alt="Foto 1">
    <img src="show2.jpeg" alt="Foto 2">
    <img src="show3.jpg" alt="Foto 3">
    <img src="show4.png" alt="Foto 4">
    <img src="show5.gif" alt="Foto 5">
    <img src="show6.jpg" alt="Foto 6">
    <img src="show7.jpg" alt="Foto 7">
    <img src="show8.jpg" alt="Foto 8">
    <img src="show9.jpg" alt="Foto 9">
    <img src="show10.jpg" alt="Foto 10">
    <!-- Tambahkan lebih banyak gambar sesuai kebutuhan -->
</div>

    <a href="admin.php" class="btn">back to</a>
    <a href="tentang.php" class="btn">next</a>
</body>
</html>
