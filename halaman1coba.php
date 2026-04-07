<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register-halaman1</title>
    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" />
    <style>
        body{
            margin: 0px;
        }
        .bc{
            background: linear-gradient(to bottom, #BACFD7, #304E79);
            color: white;
            height: 570px;
            width: 1272px;
        }
        .halaman1{
            height: 47px;
            width: 100%;
            background: rgb(255, 255, 255,  0.3);
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding-left: 5px;
            font-size: 20px;
        }
        .nama{
            color: #000;
            margin-left: 10px;
        }
        .logosis{
            margin-left: 83%;
        }
        h1{
            font-size: 2.5rem;
            padding-bottom: 0px;
            margin-bottom: 0px;
            text-shadow: 5px 2px 2px rgba(0,0,0,0.3);
            display: flex;
            justify-content: center;
            padding-bottom: 0px;

        }
        .namanya{
            padding-top: 0px;
            margin-top: 0px;
        }
        .login{
            background: rgba(0, 0, 0, 0.1);
            width: 500px;
            height: 300px;
            padding: 10px;
            border: 1px solid #9b9b9b;
            border-radius: 50px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            gap: 5px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-left: 30%;
            margin-top: 25px;
        }
        form {
          display: flex;
          flex-direction: column;
          gap: 10px;
          width: 200px;
          padding-top:50px;
        }

        input {
          padding: 15px;
          margin-left: 1px;
          padding:15px;
          border: none;
          border-radius: 5px;
          background: rgba(255, 255, 255, 0.2);
          color: white;
          width:
    
        }
        .gbr{
            align-items:start;
        }
        .btn{
        }
    </style>
</head>
<body>
<div class= "bc">
        <div class= "halaman1">
            <img src="logo-removebg-preview.png">
            <string class= "nama">maderaze.vot</string>
            <img class="logosis" width="40px" height="40px" src="osis-removebg-preview.png">
        </div>
    <h1>Pemilihan Ketua OSIS</h1>
    <h1 class="namanya" >SMK N 1 Kandeman</h1>


    <div class="login">
        <img class="gbr" width="200px" src="dda7a62c-7720-421d-a871-4ee55ec47588 1.png">
                <form action="login.php" method="POST">
                    <input type="text" name="nisn" placeholder="Masukkan NISN" >
                    <input type="text" name="kode" placeholder="Masukkan Kode" >
                
                </form>
 </div>
</body>
</html>