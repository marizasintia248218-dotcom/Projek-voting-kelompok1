<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            margin: 0px ;
            font-family: 'Poppins', sans-serif;
        }
        .halaman3 { 
            width: auto;
            min-height: 100vh;
            background: linear-gradient(to bottom, #BACFD7, #304E79);
        }

        .tombol { width: 170px; margin-top: 10px; }
        .logout:hover, .tombol:hover, .tombol-voting:hover { background-color: #1a2a4a; }
        .tombol-hasil:hover {background-color: rgba(217, 217, 217, 0.8)}

        .judul{
            font-weight: 700;
            letter-spacing: 3px;
            color: #ffff;
            text-shadow: 4px 4px 5px rgba(0,0,0,0.3);
            -webkit-text-stroke: 1px rgba(0, 0, 0, 0.4);
            font-size: 40px;
            text-align: center;
            margin: 0;
            padding: 0;
            flex-grow: 1;
        }

        .container-isi {
           display: flex;
           align-items: flex-start;
        }

        .border{
            height: 45px;
            background: rgb(255, 255, 255,  0.3);
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding-left: 5px;
            font: solid #000;
            font-size: 20px;
        }
 
        .logoosis{
           height: 39px;
           margin-left: auto;
           display: flex;
           justify-content: flex-end;
           align-items: flex-end;
           padding-right: 8px;
        }

        .box-samping{
          width:140px;
          height: 438px;
          background:rgba(6, 19, 45, 0.42);
          padding:10px;
          display: flex;
          flex-direction: column;
          justify-content: flex-start;
          padding-top: 140px; 
          align-items: center;
          gap: 23px;
          text-shadow: 10px 4px 4px solid #0000;
          position: relative
        }
        
        .tombol-voting {
            width: 125px;
            height: 15px;
            background-color: rgba(217, 217, 217, 0.8);
            padding: 17px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-shadow: 1px 2px 5px rgba(0,0,0,0.3);
            padding-left: 18px;
        }

        .tombol-hasil {
            width: 125px;
            height: 15px;
            background-color: #1a2a4a;
            padding: 17px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-shadow: 1px 2px 5px rgba(0,0,0,0.3);
            padding-left: 18px;
        }

        .nama {
            color: white;
            font-size: 22px;
            margin-top: auto;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .nama p {
            margin: 0;
        }


        .logout {
            width: 130px;
            height: 40px;
            background-color: rgba(6, 19, 45, 0.95);
            border: 1px solid #ffff;
            border-radius: 8px;
            color: #ffff;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
        }

        .logout p {
            color: #fff;
            margin: 0;
            letter-spacing: 2px;
            font-size: 20px;
            font-weight: 600;
        } 

        .container-isi-kandidat{
            display:flex;
            align-items: flex-start;
            justify-content: space-around;
        }

        .container-kandidat{
            width: 245px;
            height: 300px;
            background: linear-gradient(to bottom, #B9CED6, #2E4461);
            border-radius: 15px;
            box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.25);
            display: flex;
            justify-content: center;
            align-items: flex-end;
            margin-top: 20px;
            overflow: hidden;

        }

        .isi-container{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 260px;
        }
        .angka{
            color: rgba(7, 23, 57, 1);
            font-size: 40px;
            font-weight: 600;
            text-shadow: 2px 5px 6px rgba(0, 0, 0, 0.3);
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin: 0;
            padding: 0;
            flex-grow: 1;
        }

        .foto-kandidat {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            width: 85%;
            height: 95%;
            padding-top: 20px;
        }

        .nama-kandidat{
            color: rgba(7, 23, 57, 1);
            font-size: 25px;
            font-weight: 1000;
            text-align: center;
            margin-top: 15px;
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.3);
            text-shadow: 2px 4px 5px rgba(0, 0 , 0, 0.3);
            margin: 0px;
            padding: 0px;
            display: flex;
            align-items: flex-end;
            min-height: 66px;
            letter-spacing: 2px;
        }

        .bottom{
            width: 170px;
            height: 38px;
            font-weight: 600;
            background-color: rgba(6, 19, 45, 0.95);
            border: 1px solid #ffff;
            border-radius: 8px;
            color: #ffff;
            font-size: 20px;
            letter-spacing: 3px;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            padding-bottom: 6px;
        }

        .tombol p {
            display: flex; 
            padding-bottom: 10px;
        }

    </style>
</head>
<body>
    <div class="halaman3">

        <div class="border">
            <img src="logo.png" alt="logo">
            <h5>maderazevot</h5>
            <img src="logoosis.png" alt="logo" class="logoosis">
        </div>

        <div class="container-isi">
        <div class="box-samping">
            <div class="tombol-voting"><h3>Voting</h3></div>
            <div class="tombol-hasil"><h3>Hasil Voting</h3></div>
            <div class="nama"><p>hi ita!</p></div>
            <div class="logout"><p>Log Out</p></div>
        </div>

        <div style="flex-grow: 1;">
            <p class="judul">Daftar Kandidat</p>


        <div class="container-isi-kandidat">
    <div class="isi-container"> 
        <p class="angka">01</p>
        <div class="container-kandidat">
            <img src="foto.angga.png" alt="angga" class="foto-kandidat"></div>
        <p class="nama-kandidat">ANGGA NAUFAL PRATAMA</p>
        <div class="bottom">0%</div>
    </div>

    <div class="isi-container">
        <p class="angka">02</p>
        <div class="container-kandidat">
            <img src="hilmi.png" alt="hilmi" class="foto-kandidat"></div>
        <p class="nama-kandidat">HILMI HAIDAR RASYID</p>
        <div class="bottom">0%</div>
    </div>

    <div class="isi-container">
        <p class="angka">03</p>
        <div class="container-kandidat">
            <img src="fawwaz.png" alt="fawwaz" class="foto-kandidat"></div>
        <p class="nama-kandidat">FAWWAZ MUBARAK</p>
        <div class="bottom">0%</div>
    </div>

        </div>
    </div>
</body>
</html>