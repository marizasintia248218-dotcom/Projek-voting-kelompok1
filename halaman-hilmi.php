<!DOCTYPE html>
<html lang="en">
<head>
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
           flex-direction: row;
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

        .nama-user {
            color: white;
            font-size: 22px;
            margin-top: auto;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .nama-user p {
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

        .posisi-container {
            margin: 0;
            padding: 0;
            gap: 30px;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .container-kandidat {
            width: 275px;
            height: 375px;
            background: linear-gradient(to bottom, #B9CED6, #2E4461);
            border-radius: 15px;
            box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.25);
            margin-top: 50px;
            margin-left: 40px;
            display: flex;
            align-items: flex-end;
        }

        .grup-nama{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-left: 50px;
        }

        .nama{
            color: rgba(7, 23, 57, 1);
            font-size: 25px;
            font-weight: 1000;
            text-align: center;
            margin-top: 15px;
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.3);
            text-shadow: 2px 4px 5px rgba(0, 0 , 0, 0.3);
            letter-spacing: 2px;
            margin: 0px;
            padding: 0px;
        }

        .foto-kandidat {
            display:flex;
            justify-content: center;
            align-items: center;
            margin-left: 25px;
        }

        .kolom-kiri {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }

        .grup-teks{
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
            flex: 1;
            gap: 20px;
        }

        .teks{
            color: rgba(255, 255, 255, 1);
            -webkit-teks-stroke: rgba(0, 0, 0, 0.1);
            text-shadow: 2px 3px 3px rgba(6, 19, 45, 0.95);
            font-size: 26px;
            display: flex;
            flex-direction: column;
            gap: 30px;
            alignment: left;
            margin: 0;
            flex: 1;
        }

        .kolom-kanan {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 2%;
            max-width: 760px;
        }

        .grup-tombol{
            display:flex;
            align-items: center;
            justify-content: space-around;
            margin-right: 5%;
            margin-top: 5%;
        }

        .tombol{
            width: 175px;
            height: auto;
            background-color: rgba(6, 19, 45, 0.95);
            color: rgb(255, 255, 255);
            font-size: 26px;
            border: 1px solid rgb(255, 255, 255);
            border-radius: 13px;
            padding: 10px;
            text-align: center;
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
            <div class="tombol-voting"><h3>Hasil Voting</h3></div>
            <div class="nama-user"><p>hi ita!</p></div>
            <div class="logout"><p>Log Out</p></div>
        </div>

        <div style="flex-grow: 1;">
            <p class="judul">Detail Kandidat 2</p>

        <div class="posisi-container">
                    
            <div class="kolom-kiri">
                <div class="container-kandidat">
                    <img src="hilmi.png" alt="hilmi" class="foto-kandidat">
                </div>

                <div class="grup-nama">
                    <div class="nama">HILMI HAIDAR RASYID</div>
                    <div class="nama">XI RPL 2</div>
                </div>
            </div>

            <div class="kolom-kanan">
                <div class="teks">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae officiis eos non voluptate? Sint nisi quis accusantium dolores dignissimos incidunt corrupti vel quod pariatur, beatae voluptates reiciendis obcaecati quibusdam deleniti deserunt id maxime dolore ab laudantium? Accusantium tempore, rerum fugiat fugit, sed obcaecati laborum, vero ex in modi beatae architecto eum animi quod ipsum ipsa laboriosam repudiandae culpa qui! Accusamus nihil error repudiandae omnis fugiat labore dignissimos numquam dolore corporis esse, tempore quisquam, illo ullam placeat ab eos quo necessitatibus!</p>
                </div>
                <div class="grup-tombol">
                    <div class="tombol">Kirim Pilihan</div>
                    <div class="tombol">Kembali</div>
                </div>
            </div>


                </div>
            </div>
        </div>
        </div>
</div>
</body>
</html>