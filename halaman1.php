<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0px ;
            font-family: 'Poppins', sans-serif;
        }

        .halaman{
            width: auto;
            height: 633px;
            background: linear-gradient(to bottom,  #BACFD7, #304E79);
        }

        .border{
            height: 45px;
            background-color: rgb(255, 255, 255,  0.3);
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
        }

        .judul {
            color: #ffff;
            -webkit-teks-stroke: 5px solid rgba(0, 0, 0, 0.2);
            font-size: 40px;
            font-weight: 550;
            letter-spacing: 3%;
            line-height: 47px;
            text-shadow: 8px 8px 8px rgba(0, 0, 0, 0.35);
            display: flex;
            justify-content: center;
            text-align: center;
            padding-top: 25px;
        }


        .grup-login{
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 50px;
        }

        
        .containerlogin{
            width: 730px;
            height: 370px;
            margin-top: 1%;
            background-color: rgba(0, 0, 0, 0.1);
            box-shadow: 8px 10px 8px rgba(0, 0, 0, 0.45);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.35);
            display: flex;
            align-items: center;
            overflow: visible;
        }


        .grup-teks {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 25px;
        }
        

        .border-nisn {
            width: 350px;
            height: 50px;
            background: rgba(217, 217, 217, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 10px;
            font-size: 25px;
            font-weight: 540;
            color: rgba(255, 255, 255, 0.54);
            letter-spacing: 3px;
            padding-left: 60px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
        }


        .border-kode {
            width: 350px;
            height: 50px;
            background: rgba(217, 217, 217, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 10px;
            font-size: 25px;
            color: rgba(255, 255, 255, 0.54);
            letter-spacing: 3px;
            padding-left: 60px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
        }


        .masuk{
            width: 410px;
            height: 55px;
            border-radius: 10px;
            background: rgba(6, 19, 45, 0.95);
            border: 1px solid rgba(255, 255, 255, 1);
            font-size: 28px;
            color: rgba(255, 255, 255, 1);
            letter-spacing: 2px;
            margin-top: 70px;
            margin-bottom: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        
        .gambar {
            margin: 0;
            padding:0;
            display: flex;
            justify-content: flex-start;
            align-items: flex-end;
            height: 100%;
        }


        .maderazevot {
            font-size: 24px;
            font-weight: 600;
            letter-spacing: 5%;
            color: rgba(0, 0, 0, 1);
            display: flex;
            justify-content: center;
            align-items: flex-end;
            margin-top: 35px;
        }

    </style>
</head>
<body>
    <div class="halaman">

        <div class="border">
            <img src="logo.png" alt="logo">
            <h5>maderazevot</h5>
            <img src="logoosis.png" alt="logo" class="logoosis">
        </div>

            <div class="judul">Pemilihan Ketua OSIS SMK Negeri 1 Kandeman</div>

            <div class="grup-login">
            <div class="containerlogin">
                <div class="gambar"><img src="hal1.png" alt="gambar orang"></div>

            <div class="area-login">
                <div class="grup-teks">
                    <div class="border-nisn">Masukkan NISN</div>
                    <div class="border-kode">Masukkan Kode</div>
                </div>
                <div class="masuk">Masuk</div>
            </div>

            </div>
            </div>
            <div class="maderazevot">Design by maderaze.vot.smkn1kandeman</div>

    </div>
</body>
</html>