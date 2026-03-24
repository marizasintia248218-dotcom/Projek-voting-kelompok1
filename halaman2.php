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
        .halaman2 { 
            width: auto;
            height: 632px;
            background: linear-gradient(to bottom, #BACFD7, #304E79);
            image: url('bg.orang.png');
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

        button:hover, button:focus {
            background-color:rgba(91, 113, 159, 0.95);
        }
    </style>
</head>
<body>
    <div class="halaman2">
        <div class="border">
            <img src="logo.png" alt="logo">
            <h6>maderazevot</h6>
            <img src="logoosis.png" alt="logo" class="logoosis">
            <div class="container1">
                <p>NISN dan Kode anda salah,
                 Silahkan coba kembali!</p>
                 <button>Kembali</button>
            </div>
        </div>
    </div>
</body>
</html>