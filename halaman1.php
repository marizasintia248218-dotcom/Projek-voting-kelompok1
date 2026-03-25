<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Page</title>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        .halaman3 { 
            width: 100%;
            min-height: 100vh;
            background: linear-gradient(to bottom, #BACFD7, #304E79);
        }

        /* Navbar / Header */
        .border {
            height: 60px;
            background: rgba(255, 255, 255, 0.3);
            display: flex;
            align-items: center;
            padding: 0 20px;
        }
        .border h5 { margin: 0 10px; font-size: 20px; }
        .logoosis { margin-left: auto; height: 40px; }

        .container-isi {
            display: flex;
        }

        /* Sidebar */
        .box {
            width: 160px;
            min-height: calc(100vh - 60px);
            background: rgba(6, 19, 45, 0.42);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
            gap: 20px;
        }
        .box-voting, .box-hasil {
            width: 130px;
            background-color: rgba(217, 217, 217, 0.8);
            border-radius: 5px;
            text-align: center;
            padding: 10px 0;
            cursor: pointer;
        }
        .box-voting h3, .box-hasil h3 { margin: 0; font-size: 16px; }
        
        .nama-user {
            color: white;
            margin-top: auto;
            margin-bottom: 10px;
            font-weight: 600;
        }
        .logout {
            width: 130px;
            padding: 10px 0;
            background-color: rgba(6, 19, 45, 0.95);
            border: 1px solid #fff;
            border-radius: 8px;
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
            cursor: pointer;
            font-weight: 600;
        }

        /* Konten Utama */
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
        .judul {
            font-weight: 700;
            letter-spacing: 3px;
            color: #fff;
            text-shadow: 4px 4px 5px rgba(0,0,0,0.3);
            font-size: 40px;
            text-align: center;
            margin-bottom: 40px;
        }

        /* Grid Kandidat */
        .container-isi-kandidat {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 20px;
        }

        /* Wrapper per kandidat */
        .wrapper-kandidat {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 260px;
        }

        .angka {
            color: rgba(7, 23, 57, 1);
            font-size: 45px;
            font-weight: 700;
            margin: 0 0 10px 0;
            text-shadow: 2px 5px 6px rgba(0, 0, 0, 0.3);
        }

        /* Kotak Border Foto */
        .container-kandidat {
            width: 100%;
            height: 350px;
            background: rgba(255, 255, 255, 0.1); /* Transparan seperti kaca */
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;
            align-items: flex-end; /* Agar foto menyentuh dasar kotak */
            overflow: hidden;
            margin-bottom: 15px;
        }

        .foto-kandidat {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }

        .nama-kandidat {
            color: rgba(7, 23, 57, 1);
            font-size: 20px;
            font-weight: 700;
            text-align: center;
            margin: 5px 0;
            min-height: 60px; /* Biar sejajar meski nama panjang */
            text-shadow: 1px 1px 2px rgba(255,255,255,0.5);
        }

        /* Tombol Lihat Detail */
        .tombol {
            width: 180px;
            padding: 10px 0;
            font-weight: 600;
            background-color: rgba(6, 19, 45, 0.95);
            border: 1px solid #fff;
            border-radius: 8px;
            color: #fff;
            text-align: center;
            cursor: pointer;
            transition: 0.3s;
        }
        .tombol:hover { background-color: #1a2a4a; }

    </style>
</head>
<body>
    <div class="halaman3">
        <div class="border">
            <img src="logo.png" alt="logo" height="40">
            <h5>maderazevot</h5>
            <img src="logoosis.png" alt="logoosis" class="logoosis">
        </div>

        <div class="container-isi">
            <div class="box">
                <div class="box-voting"><h3>Voting</h3></div>
                <div class="box-hasil"><h3>Hasil Voting</h3></div>
                <div class="nama-user">hi ita!</div>
                <div class="logout">Log Out</div>
            </div>

            <div class="main-content">
                <p class="judul">Daftar Kandidat</p>

                <div class="container-isi-kandidat">
                    <div class="wrapper-kandidat">
                        <p class="angka">01</p>
                        <div class="container-kandidat">
                            <img src="foto.angga.png" alt="angga" class="foto-kandidat">
                        </div>
                        <p class="nama-kandidat">ANGGA NAUFAL<br>PRATAMA</p>
                        <div class="tombol">Lihat detail</div>
                    </div>

                    <div class="wrapper-kandidat">
                        <p class="angka">02</p>
                        <div class="container-kandidat">
                            <img src="foto.hilmi.png" alt="hilmi" class="foto-kandidat">
                        </div>
                        <p class="nama-kandidat">HLMI HAIDAR<br>RASYID</p>
                        <div class="tombol">Lihat detail</div>
                    </div>

                    <div class="wrapper-kandidat">
                        <p class="angka">03</p>
                        <div class="container-kandidat">
                            <img src="foto.fawwaz.png" alt="fawwaz" class="foto-kandidat">
                        </div>
                        <p class="nama-kandidat">FAWWAZ<br>MUBARAK</p>
                        <div class="tombol">Lihat detail</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>