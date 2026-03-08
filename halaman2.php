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

        .button{
            background-color: #05142B;
            color: #ffff;
            padding: 40px 50px;
            border-radius: 30px;
            box-shadow: 5px solid;
            display:flex;
            text-decoration: none;
            text-align: center;
            justify-content: center;
            font-size:36px;
            margin: 10px 5px;
            transition-duration: 0.4s;
            top: 50%;
            left: 50%;
            bottom: 50px;
        }

        .button1 {border: 1px solid white;}
        .button1:hover {
            background-color: #73839b;
            color: #05142B;
        }

    </style>
</head>
<body>
    <div class="halaman2">
        <div class="border">
            <img src="logo.png" alt="logo">
            <h6>maderazevot</h6>
            <img src="logo.osis.png" alt="logo" class="logoosis">
            <button class= "button button1">NISN dan Kode anda salah,
                 Silahkan coba kembali!
            </button>
        </div>
    </div>
</body>
</html>