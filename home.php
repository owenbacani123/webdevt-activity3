<!DOCTYPE HTML>
<html>  
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">     <!-- Add icon library -->

<style>
.H {                                                             /* HHHHHHHHH Style */
  background-color: #191970;
  color: white;
  padding: 10px 80px;
  text-decoration: none;
  font-size: 20px;
  cursor: pointer;
}

.H:hover {                  /* Darker background on mouse-over */
  background-color: #7FFFD4;
}
</style>

<style>                                                          /* SSSSSSS Style */
.S {
    padding: 1px;
    background-image: url("https://scontent.fcrk1-1.fna.fbcdn.net/v/t1.6435-9/201775837_4142037832508948_3516273786499423524_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=730e14&_nc_ohc=kQKPMrxp4dAAX-77OHk&_nc_ht=scontent.fcrk1-1.fna&oh=f1796f355822fc40155048503c5b6be9&oe=60CF0057");  
    background-repeat: no-repeat;
    background-size: 1700px 900px;
    color: #FFD170;
}
</style>

<style>
.design {                                                          /* IMAGE and BUTTON Style */
  position: absolute;
  width: 80%;
  max-width: 800px;
}
.design img {                                                        /* IMAGE Style */
  position: absolute;
  transform: translate(100%, -105%);
  width: 100%;
}
.design .B {                                                          /* BUTTON Style */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(15%, -350%);
  background-color: #FFD170;
  color: black;
  font-size: 15px;
  padding: 40px 160px;
  border: none;
  cursor: pointer;
  border-radius: 50px;
  text-align: center;
}
.design .B:hover {
  position: absolute;
  background-color: #00FFFF;
  color: #FF0000;
}
</style>

<?php                                                                     //$NAME
$name = "";
?>

<div class="H">
    <button onclick="location.href='index.php'" class="H"><i class="fa fa-home"></i>Home</button>



<div class="S"> 
<blockquote><blockquote><blockquote>
<p style="font-size:70px" color="white">WELCOME <?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $_POST["name"];?>!!</p>
<p style="font-size:25px"><h2>This a game where you might know something about me</h2></p>
<p style="font-size:25px"><h2>There are 20 questions for you to answer</h2></p>
<p style="font-size:25px"><h2>Just click the START button.</h2></p>
<p style="font-size:25px"><h2>Enjoy and Good luck!!</h2></p>
<p style="font-size:70px">
<b>"LIFE'S A GAME, 
<br> ALL YOU HAVE 
<br> TO DO IS KNOW 
<br> HOW TO PLAY IT"
</b></p>

<div class="design">
  <img src="https://scontent.fmnl17-3.fna.fbcdn.net/v/t1.18169-9/26166492_1463299610435306_1142145639857276617_n.jpg?_nc_cat=110&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=63b-y6t0ovEAX_WQrd2&_nc_ht=scontent.fmnl17-3.fna&oh=548d7c83c49906b50075ebf0e1064234&oe=60CF0FA6" style="width:90%">
  <button class="B" onclick="location.href='questions.php'"><h1>START</h1></button>

</div>
</body>
</html>