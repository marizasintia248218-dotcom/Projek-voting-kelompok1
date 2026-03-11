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
        .container{
           display:flex;
        }

        body{
          margin:0;
          font-family:Arial;
        }

        .sidebar{
          width:200px;
          height:100vh;
          background:rgba(6, 19, 45, 0.42);
          padding:15px;
        }

        .menu a{
          display:block;
          text-decoration:none;
          padding:12px;
          margin-bottom:10px;
          border-radius:6px;
          text-align:center;
        }

        .voting{
          background:#D9D9D9;
          color:black;
          display: flex;
          align-items: center;
        }

        .hasil-voting{
          background:#D9D9D9;
          color:black;
          display: flex;
          align-items: center;
        }

        .user{
          position:absolute;
          bottom:50px;
        }

        .user button{
           background: #06132D;
           color:white;
           border:none;
           padding:8px 15px;
           border-radius:6px;
           display: flex;
           justify-content: center;
           align-items: center;
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
         <div class="sidebar">
           
           <div class="menu">
           <a href="#" class="voting">Voting</a>
           <a href="#" class="hasil-voting">Hasil Voting</a>
           </div>

           <div class="user bottom">
           <p>Hi, Ita!</p>
           <button>Log Out</button>
           </div>

         </div>
    </div>
</body>
</html>