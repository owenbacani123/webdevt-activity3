<!DOCTYPE HTML>
<html>  
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

<style>                                                          /* SSSSSSS Style */
.S {
    padding: 2px;
    background-image: url("https://scontent.fcrk1-1.fna.fbcdn.net/v/t1.6435-9/198821739_4141616829217715_5462070203223998504_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=730e14&_nc_ohc=H64Yd27jvvsAX9nq0mM&_nc_ht=scontent.fcrk1-1.fna&oh=a9a7d40ae3ad4ab44c41780be6931d71&oe=60CDD7DB");  
    background-repeat: 2;
    background-size: 1900px 900px;
}
</style>

<style>
.design {                                                          /* IMAGE and BUTTON Style */
  position: absolute;
  right: 30px;
  left: 30px;
  width: 100%;
  max-width: 800px;
}
.design .B {                                                          /* BUTTON Style */
  position: absolute;
  transform: translate(120%, -140%);
  background-color: #1E90FF;
  color: #FFFF00;
  font-size: 15px;
  padding: 40px 160px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.design .B:hover {
  position: absolute;
  background-color: #FFFF00;
  color: #1E90FF;
}
</style>

<style>                                                          /* TEXTBOX Style */
input[type=text] {
  width: 41%;
  padding: 25px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  background-color: #FFFF00;
  color: #0000CD;
  position: absolute;
  transform: translate(70%, 750%);
  text-align: center;
  font-size: 20px;
}
</style>

<?php                                                                     //$NAME
$name = "";
?>

<div class="S">
<form action="home.php" method="post">
<input type="text" name="name" value="<?php echo $name;?>" placeholder="USERNAME">
  
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br>

<div class="design">
<button class="B"><h1>CLICK TO PLAY</h1></button>
</div>


</body>
</html>