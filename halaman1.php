<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    background: linear-gradient(to bottom, #BACFD7, #304E79);
    color: white;
    height: 580px;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right:0px;
    margin-left:0px;
    padding: 0px;
    margin-top:0px;
}

.halaman1 {
    text-align: center;
    width: 800px;
}

h1 {
    font-size: 2.5rem;
    margin-bottom: 30px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.login {
    background: rgba(0, 0, 0, 0.1);
    width: 800px;
    height: 200px;
    border: 1px solid #a6a3a3;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 30px;
    flex-wrap: wrap;
    justify-content: center;
    
}

form {
    display: flex;
    flex-direction: column;
    gap: 20px;
    width: 300px;
}

input {
    padding: 15px;
    border: none;
    border-radius: 5px;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    
}
.design-by {
    margin-top: 30px;
}
.halaman2{
    height: 47px;
    background: rgb(255, 255, 255,  0.3);
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding-left: 5px;
    font: solid #000;
    font-size: 20px;
}
.btn{
    display:flex;
    align-items: center;
}

</style>
</head>
<body>
<div class = "bc">
    <div class="halaman1">
        <div class="halaman2">
             <div class= "gmbr"> 
                <img src="">
                <string><b>maderaze.vot</b></string>
             </div>

            <div class="gmbr1">
                <img src="">
            </div>
        </div>

        <h1>Pemilihan Ketua OSIS<br>SMK N 1 Kandeman</h1>
        <div class="login">
            <div class="inputan">
                <form action="login.php" method="POST">
                    <input type="text" name="nisn" placeholder="Masukkan NISN" >
                    <input type="text" name="kode" placeholder="Masukkan Kode" >
                
                </form>
           </div>

            <div class= "btn">
             <p class="text-center mt-6"><a href="./halaman2.php" class="text-[#7C3AED] font-bold">MASUK</a></p>
            </div>

        </div>
        <p class="design-by">design by maderaze.vot.smkn1kandeman</p>
    </div>
</div>
</body>
</html>