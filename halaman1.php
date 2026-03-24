<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maderazevot - Kandidat</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom, #BACFD7, #304E79);
            min-height: 100vh;
        }

        .judul-halaman {
            text-align: center;
            color: white;
            font-size: 40px;
            font-weight: 700;
            margin: 40px 0;
            letter-spacing: 3px;
            text-shadow: 4px 4px 5px rgba(0,0,0,0.3);
        }

        /* Container utama agar kartu berjejer ke samping */
        .wrapper-kandidat {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 60px; /* Jarak antar kandidat */
            padding: 50px;
            flex-wrap: wrap;
        }

        /* Container per orang (Wrapper Luar) */
       

        /* Angka di atas container */
        .angka {
            font-size: 55px;
            font-weight: 700;
            color: #071739;
            margin: 0;
            position: absolute;
            top: -40px; 
            z-index: 2;
        }

        /* Container Card (Hanya sebagai background/bingkai) */
        .card-bg {
            width: 257px;
            height: 357px;
            background: linear-gradient(to bottom, #B9CED6, #2E4461);
            border-radius: 15px;
            box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.25);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: visible; /* Penting agar elemen luar tidak terpotong */
        }

        /* Foto kandidat (Tanpa border) */
        .foto-kandidat {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px; /* Mengikuti bentuk card */
        }

        /* Nama di bawah container */
        .nama-kandidat {
            color: #071739;
            font-size: 22px;
            font-weight: 700;
            text-align: center;
            margin-top: 15px;
            letter-spacing: 1px;
            width: 120%; /* Sedikit lebih lebar dari card agar terlihat standout */
        }

        /* Tombol di bawah nama */
        .tombol-detail {
            margin-top: 15px;
            width: 160px;
            height: 45px;
            background-color: rgba(6, 19, 45, 0.95);
            border: 1px solid #ffff;
            border-radius: 8px;
            color: #ffff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
            font-size: 16px;
        }

        .tombol-detail:hover {
            background-color: #fff;
            color: #06132d;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <h1 class="judul-halaman">DAFTAR KANDIDAT</h1>

    <div class="wrapper-kandidat">
        
        <div class="kandidat-item">
            <p class="angka">01</p>
            <div class="card-bg">
                <img src="https://via.placeholder.com/257x357" alt="Angga" class="foto-kandidat">
            </div>
            <p class="nama-kandidat">ANGGA NAUFAL PRATAMA</p>
            <div class="tombol-detail">Lihat detail</div>
        </div>

        <div class="kandidat-item">
            <p class="angka">02</p>
            <div class="card-bg">
                <img src="https://via.placeholder.com/257x357" alt="Hilmi" class="foto-kandidat">
            </div>
            <p class="nama-kandidat">HILMI HAIDAR RASYID</p>
            <div class="tombol-detail">Lihat detail</div>
        </div>

        <div class="kandidat-item">
            <p class="angka">03</p>
            <div class="card-bg">
                <img src="https://via.placeholder.com/257x357" alt="Fawwaz" class="foto-kandidat">
            </div>
            <p class="nama-kandidat">FAWWAZ MUBARAK</p>
            <div class="tombol-detail">Lihat detail</div>
        </div>

    </div>

</body>
</html>