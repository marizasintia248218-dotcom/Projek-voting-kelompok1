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
            position: fixed;
            border: 1px solid white;
            background-color: #05142B;
            color: #ffff;
            padding: 40px 30px;
            border-radius: 30px;
            box-shadow: 5px solid;
            display:flex;
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

        .sidebar{
            width:200px;
            background:#d9dee7;
            padding:20px;
            height:100vh;
        }

        .sidebar a{
            display:block;
            padding:10px;
            margin:10px 0;
            background:white;
            text-decoration:none;
            color:black;
            border-radius:5px;
        }

        .logout{
            background:#2c3e50;
            color:white;
            border:none;
            padding:8px 15px;
            border-radius:5px;
        }
    </style>
</head>
<body>
    <div class="halaman3">
        <div class="border">
            <img src="logo.png" alt="logo">
            <h6>maderazevot</h6>
            <img src="logoosis.png" alt="logo" class="logoosis">
            <div class="button">
                <p>NISN dan Kode anda salah,
                 Silahkan coba kembali!</p>
            </div>
        </div>
        <div class="container">
            <!-- Siedbar -->
             <div class="siedbar">
                <h3>Voting</h3>

                <a href="#">Voting</a>
                <a href="#">Hasil Voting </a>

                <div class="User">
                    <p>Hai Ita</P>
                    <button class="loguot">Log Out</button>
                </div>
             </div>
        </div>
    </div>
</body>
</html>