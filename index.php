<?php

// Deklarasi variabel
$namaPacar = "Kanjeng Ratu Nimas Ayu Dini Nurul Aeidah"; // Ganti dengan nama pacar Anda
$usiaPacar = 19; // Ganti dengan usia pacar Anda
$tanggalHariIni = date("Y-m-d");

// Buat ucapan
$ucapan = "Sayang,

Aku ingin meminta maaf dari lubuk hatiku yang terdalam karena telah membuatmu marah. Aku sadar bahwa tindakan dan kata-kataku telah menyakiti perasaanmu, dan aku benar-benar menyesal telah menyebabkan rasa sakit itu.

Aku sangat menghargai hubungan kita dan tidak ingin ada masalah di antara kita. Aku mengerti bahwa apa yang telah aku lakukan salah, dan aku berjanji akan belajar dari kesalahan ini. Aku ingin menjadi pasangan yang lebih baik untukmu, seseorang yang selalu membuatmu bahagia, bukan sebaliknya.

Tolong beri aku kesempatan untuk memperbaiki kesalahan ini dan menunjukkan bahwa aku bisa berubah. Aku mencintaimu dan tidak ingin kehilanganmu karena kesalahan yang aku buat.

Maafkan aku, sayang.";

// Tampilkan ucapan, gambar, dan pemutar audio dengan desain menarik
echo "<style>
    /* Tambahkan efek bayangan */
    img {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
    }

    /* Atur efek bayangan saat dihover */
    img:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
      transform: scale(1.2); /* Perbesar gambar saat dihover */
    }

    body {
      background-image: url('love.gif');
      background-size: 50%; /* Ubah ukuran gambar menjadi 50% */
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center; /* Posisikan gambar di tengah halaman */
      color: black; /* Warna teks menjadi hitam */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Ganti jenis font */
    }

    /* Desain khusus untuk ucapan */
    .ucapan {
      margin: 50px auto;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.7); /* Transparan putih */
      max-width: 600px;
      text-align: center;
      border-radius: 10px; /* Membuat sudut ucapan menjadi bulat */
    }

    .ucapan h1 {
      font-size: 24px;
      color: red; /* Warna teks merah */
    }

    .ucapan p {
      font-size: 18px;
      line-height: 1.6;
    }

    /* Desain untuk pemutar audio */
    audio {
      margin-top: 20px;
      width: 300px; /* Atur lebar pemutar audio */
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    audio::-webkit-media-controls-panel {
      background-color: rgba(255, 255, 255, 0.7); /* Transparan putih untuk panel kontrol */
      border-radius: 10px; /* Membuat sudut panel kontrol menjadi bulat */
    }

    audio::-webkit-media-controls-play-button {
      background: url('play.png') no-repeat center; /* Mengganti ikon tombol play */
      background-size: 50%; /* Ubah ukuran ikon tombol play */
    }

    audio::-webkit-media-controls-volume-slider {
      background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang slider volume */
    }

    audio::-webkit-media-controls-seek-back-button,
    audio::-webkit-media-controls-seek-forward-button {
      background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang tombol mundur/maju */
      border-radius: 50%; /* Membuat sudut tombol menjadi bulat */
    }
  </style>";

echo "<div class='ucapan'>";
echo "<h1>Untuk Sayangku <span style='color: red;'>Kanjeng Ratu Nimas Ayu Dini Nurul Aeidah</span></h1>"; // Mengubah kata "Selamat Hari Ini" menjadi "Untuk Sayangku Christina"
echo "<p>$ucapan</p>";
echo "<img src='sayang.jpg' width='200px' height='200px'>";
echo "<audio autoplay controls><source src='lagu.mp3' type='audio/mpeg'></audio>"; // Pemutar audio
echo "</div>";
?>
