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

        .tombol { width: 170px; margin-top: 10px; }
        .logout:hover, .tombol:hover, .tombol-voting:hover, .bottom:hover { background-color: #1a2a4a; }
        

        .halaman2 { 
            width: auto;
            height: 632px;
            background: linear-gradient(to bottom, #BACFD7, #304E79);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;

        }

        .border{
            height: 47px;
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
           align-items: center;
           padding-right: 8px;
        }

        .container1{
            position: fixed;
            border: 1px solid white;
            background-color: #05142B;
            color: #ffff;
            padding: 40px 30px;
            border-radius: 30px;
            box-shadow: 5px solid;
            display:flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            text-align: center;
            justify-content: center;
            font-size:36px;
            margin: 20px 5px;
            top: 23%;
            left: 50%;
            bottom: 80px;
            transform: translateX(-50%);
            
        }
        .container{
           display:flex;
        }

        .logout{
            background:#2c3e50;
            color:white;
            border:none;
            padding:8px 15px;
            border-radius:5px;
        }

        button {
            font-size: 38px;
            color: #ffff;
            letter-spacing: 2px;
            display: inline-block;
            text-align: center;
            align-items: flex-end;
            height: 97px;
            width: 263px;
            border: 1px solid #ffff;
            border-radius: 15px;
            position: relative;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.16);
            background-color: rgba(6, 19, 45, 0.95);
            text-decoration: none;
            transition: 0.3s ease all;
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
            width: 105px;
            height: 25px;
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

        
    </style>
</head>
<body>
    <div class="halaman2">
        <div class="border">
            <img src="logo.png" alt="logo">
            <h6>maderazevot</h6>
            <img src="logoosis.png" alt="logo" class="logoosis">
    </div>

        <div class="container-isi">
        <div class="box-samping">
            <div class="tombol-voting"><h3>Voting</h3></div>
            <div class="tombol-voting"><h3>Hasil Voting</h3></div>
            <div class="nama-user"><p>hi ita!</p></div>
            <div class="logout"><p>Log Out</p></div>
        </div>

            <div class="container1">
                <p>NISN dan Kode anda salah,
                 Silahkan coba kembali!</p>
                 <button>Kembali</button>
            </div>

        </div>
    </div>
</body>
</html>