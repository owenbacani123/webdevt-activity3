<html>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.H {
  background-color: #191970;
  color: white;
  padding: 12px 90;
  text-decoration: none;
  font-size: 20px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.H:hover {
  background-color: #7FFFD4;
}
</style>

<style>
.QC {
  color: white;
  font-size: 30px;
}
</style>

<style>                                                       /* SSSSSSS Style */
.S {
    padding: 1px;
    background-image: url("https://scontent.fcrk1-3.fna.fbcdn.net/v/t1.6435-9/200546746_4138492949530103_960395032217333419_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=730e14&_nc_ohc=2MVGO6I7VvoAX_pnxRe&_nc_ht=scontent.fcrk1-3.fna&oh=f5d78dad5c54bf70010455d722e99367&oe=60CC34A9");
    background-repeat: 2;
    background-size: 1750px 1000px;
    color: #00FFFF;
}
</style>

<style>
.btn {                                                        /* BTN STYLE */
  size: 120 px;
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #008080;
  cursor: pointer;
  font-size: 18px;
  color: #000000:
}

.active, .btn:hover {                                          /* BTN HOVER */
  background-color: #FFFACD;
  color: #000000;
  pointer-events: visiblePainted;
}
</style>

<style>
.BR {                                                        /* B start Style */
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 280px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.BR span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.BR span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.BR:hover span {
  padding-right: 25px;
}

.BR:hover span:after {                                        /* B end Style */
  opacity: 1;
  right: 0;
}
</style>

<style>
.Photo2 img {                                                   /* IMAGE 2 */
  <position: absolute; 
  transform: translate(120%, -80%);
}
</style>

<style>
.Photo4 img {                                                   /* IMAGE 4 */
  <position: inherit;    
  transform: translate(110%, -90%);
}
</style>

<style>
.Photo6 img {                                                   /* IMAGE 6 */
  <position: absolute; 
  transform: translate(110%, -85%);
}
</style>

<style>
.Photo8 img {                                                   /* IMAGE 8 */
  <position: inherit;    
  transform: translate(110%, -90%);
}
</style>

<style>
.Photo10 img {                                                   /* IMAGE 10 */
  <position: absolute; 
  transform: translate(110%, -85%);
}
</style>

<style>
.Photo12 img {                                                   /* IMAGE 12 */
  <position: inherit;    
  transform: translate(110%, -90%);
}
</style>

<style>
.Photo14 img {                                                   /* IMAGE 14 */
  <position: absolute; 
  transform: translate(135%, -85%);
}
</style>

<style>
.Photo16 img {                                                   /* IMAGE 16 */
  <position: inherit;    
  transform: translate(110%, -90%);
}
</style>

<style>
.Photo18 img {                                                   /* IMAGE 18 */
  <position: ; 
  transform: translate(135%, -80%);
}
</style>

<style>
.Photo20 img {                                                   /* IMAGE 20*/
  <position: inherit;    
  transform: translate(95%, -90%);
}
</style>

<style>
.ins {
  color: red;
}
</style>

<div class="H">
    <button onclick="location.href='home.php'" class="H"><i class="fa fa-home"></i>Home</button>


<div class="S"> 
<blockquote><blockquote><blockquote>


<div class="QC">
<blockquote><blockquote><blockquote><blockquote>
<br><br>
<div class ="ins">
<b>!!CLICK THE DOT BEFORE THE CHOICES TO ANSWER!!</b>
<br><br><br><br>
</div>

<?php
  echo "1. What is my favorite color?"
?>  


<form method="post" action="result.php">
  <p class="btn" style="width:50%">
  <input type="radio" name="Q1" <?php if (isset($Q1)) echo "checked";?> value="0">A) red</p>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q1" <?php if (isset($Q1)) echo "checked";?> value="1">B) blue</p>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q1" <?php if (isset($Q1)) echo "checked";?> value="0">C) black</p>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q1" <?php if (isset($Q1)) echo "checked";?> value="0">D) pink</p> 
<br><br><br><br>

<?php
  echo "2. What is my favorite netflix series?"
?>

<form method="post" action="result.php">
  <p class="btn" style="width:50%">
  <input type="radio" name="Q2" <?php if (isset($Q2)) echo "checked";?> value="1">A) Prison Break</p>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q2" <?php if (isset($Q2)) echo "checked";?> value="0">B) El Chapo</p>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q2" <?php if (isset($Q2)) echo "checked";?> value="0">C) 13 Commandments</p>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q2" <?php if (isset($Q2)) echo "checked";?> value="0">D) Designated Survivor</p> 

  <div class="Photo2">
  <img src="https://i.pinimg.com/originals/25/ae/6c/25ae6c3bbc39e96c2948e863e6fe61c4.gif"
       style="width:550px">
  </div>

<?php
  echo "3. What is my sport?"
?>

<form method="post" action="question4.php"> 
  <p class="btn" style="width:50%">
  <input type="radio" name="Q3" <?php if (isset($Q3)) echo "checked";?> value="0">A) Basketball</p>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q3" <?php if (isset($Q3)) echo "checked";?> value="1">B) El Volleyball</p>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q3" <?php if (isset($Q3)) echo "checked";?> value="0">C) 13 Football</p>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q3" <?php if (isset($Q3)) echo "checked";?> value="0">D) Tennis</p> 
  <br><br><br><br>

<?php
  echo "4. What is my favorite moblie game?"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q4" <?php if (isset($Q4)) echo "checked";?> value="0">A) AOV</p>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q4" <?php if (isset($Q4)) echo "checked";?> value="0">B) LOL mobile</p>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q4" <?php if (isset($Q4)) echo "checked";?> value="1">C) Mobile Legends</p>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q4" <?php if (isset($Q4)) echo "checked";?> value="0">D) ROS mobile</p> 

  <div class="Photo4">
  <img src="https://cdn.techinasia.com/wp-content/uploads/2016/07/Hero-Moba-game.gif"
       style="width:600px">
  </div>

<?php
  echo "5. What is my Course?"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q5" <?php if (isset($Q5)) echo "checked";?> value="0">A) Game Design</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q5" <?php if (isset($Q5)) echo "checked";?> value="0">B) Interior Design</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q5" <?php if (isset($Q5)) echo "checked";?> value="0">C) Industrial Design</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q5" <?php if (isset($Q5)) echo "checked";?> value="1">D) Information Systems</p> 
<br><br><br><br>

<?php
  echo "6. Where do I live?"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q6" <?php if (isset($Q6)) echo "checked";?> value="0">A) City of San Fernando</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q6" <?php if (isset($Q6)) echo "checked";?> value="1">B) Pampanga</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q6" <?php if (isset($Q6)) echo "checked";?> value="0">C) Manila</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q6" <?php if (isset($Q6)) echo "checked";?> value="0">D) Makati</p> 

  <div class="Photo10">
  <img src="https://img.buzzfeed.com/buzzfeed-static/static/2017-06/9/13/asset/buzzfeed-prod-fastlane-02/anigif_sub-buzz-22180-1497030194-1.gif"
       style="width:600px">
  </div>

<?php
  echo "7. What is my jersey number?"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q7" <?php if (isset($Q7)) echo "checked";?> value="0">A) 18</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q7" <?php if (isset($Q7)) echo "checked";?> value="0">B) 17</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q7" <?php if (isset($Q7)) echo "checked";?> value="1">C) 7</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q7" <?php if (isset($Q7)) echo "checked";?> value="0">D) 8</p> 
<br><br><br><br>

<?php
  echo "8. What is my favorite social media app?"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q8" <?php if (isset($Q8)) echo "checked";?> value="0">A) facebook</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q8" <?php if (isset($Q8)) echo "checked";?> value="0">B) tiktok</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q8" <?php if (isset($Q8)) echo "checked";?> value="1">C) instagram</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q8" <?php if (isset($Q8)) echo "checked";?> value="0">D) twitter</p> 

  <div class="Photo10">
  <img src="https://buxlead.s3.amazonaws.com/wp-content/uploads/2018/01/02000505/delete-apps.w1200.h630.gif"
       style="width:600px">
  </div>

<?php
  echo "9. What is my favorite anime series?"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q9" <?php if (isset($Q9)) echo "checked";?> value="1">A) Yowamushi Pedal</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q9" <?php if (isset($Q9)) echo "checked";?> value="1">B) Haikyu</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q9" <?php if (isset($Q9)) echo "checked";?> value="0">C) Naruto</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q9" <?php if (isset($Q9)) echo "checked";?> value="0">D) All of the above</p> 
<br><br><br><br>

<?php
  echo "10. How many seasons I played is the NCAA?"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q10" <?php if (isset($Q10)) echo "checked";?> value="0">A) 2</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q10" <?php if (isset($Q10)) echo "checked";?> value="0">B) 3</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q10" <?php if (isset($Q10)) echo "checked";?> value="0">C) 4</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q10" <?php if (isset($Q10)) echo "checked";?> value="1">D) 5</p> 

  <div class="Photo10">
  <img src="http://contents.spin.ph/image/2017/01/31/Johnvic-de-Guzman-DP.jpg"
       style="width:600px">
  </div>

<?php
  echo "11. What is my favorite drink?"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q11" <?php if (isset($Q11)) echo "checked";?> value="1">A) Water</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q11" <?php if (isset($Q11)) echo "checked";?> value="1">B) Beer</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q11" <?php if (isset($Q11)) echo "checked";?> value="0">C) Energy drink</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q11" <?php if (isset($Q11)) echo "checked";?> value="0">D) Juice</p> 
<br><br><br><br>

<?php
  echo "12. What is my favorite programming language?"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q12" <?php if (isset($Q12)) echo "checked";?> value="1">A) php</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q12" <?php if (isset($Q12)) echo "checked";?> value="0">B) C#</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q12" <?php if (isset($Q12)) echo "checked";?> value="0">C) java</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q12" <?php if (isset($Q12)) echo "checked";?> value="0">D) html</p> 

  <div class="Photo12">
  <img src="https://technical.ly/philly/wp-content/uploads/sites/2/2018/07/code.gif"
       style="width:600px">
  </div>

<?php
  echo "13. Who is my celebrity crush?"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q13" <?php if (isset($Q13)) echo "checked";?> value="0">A)Marian Rivera</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q13" <?php if (isset($Q13)) echo "checked";?> value="0">B) Angel Locsin</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q13" <?php if (isset($Q13)) echo "checked";?> value="0">C) Michelle Vito</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q13" <?php if (isset($Q13)) echo "checked";?> value="1">D) Gabi Gracia</p> 
<br><br><br><br>

<?php
  echo "14. Favorite pet?"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q14" <?php if (isset($Q14)) echo "checked";?> value="0">A) Cat</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q14" <?php if (isset($Q14)) echo "checked";?> value="0">B) Dog</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q14" <?php if (isset($Q14)) echo "checked";?> value="1">C) Dove</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q14" <?php if (isset($Q14)) echo "checked";?> value="0">D) Dragon</p> 

  <div class="Photo14">
  <img src="https://specials-images.forbesimg.com/imageserve/5fd923dbd382798152158991/960x0.jpg?fit=scale"
       style="width:500px">
  </div>

<?php
  echo "15. Best answer to this joke (What do you call a bear with no teeth??)"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q15" <?php if (isset($Q15)) echo "checked";?> value="1">A) Teddy bear</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q15" <?php if (isset($Q15)) echo "checked";?> value="1">B) Ice cold bear</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q15" <?php if (isset($Q15)) echo "checked";?> value="1">C) Gummy bear</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q15" <?php if (isset($Q15)) echo "checked";?> value="1">D) Septem Bear</p> 
<br><br><br><br>

<?php
  echo "16. Favorite local movie"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q16" <?php if (isset($Q16)) echo "checked";?> value="0">A) Ang pangarap kong holdap</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q16" <?php if (isset($Q16)) echo "checked";?> value="1">B) Once upon a time in Manila</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q16" <?php if (isset($Q16)) echo "checked";?> value="0">C) Ang kuya kong siga</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q16" <?php if (isset($Q16)) echo "checked";?> value="1">D) Four sister and a wedding</p> 

  <div class="Photo16">
  <img src="https://i.pinimg.com/originals/84/f4/82/84f482c1431fb6d914884e7f07c99340.gif"
       style="width:600px">
  </div>

<?php
  echo "17. Favorite Filipino content creator"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q17" <?php if (isset($Q17)) echo "checked";?> value="1">A) Cong TV</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q17" <?php if (isset($Q17)) echo "checked";?> value="0">B) Ivana Alawi</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q17" <?php if (isset($Q17)) echo "checked";?> value="0">C) Ninong Ry</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q17" <?php if (isset($Q17)) echo "checked";?> value="0">D) Alexis Lingad</p> 
<br><br><br><br>

<?php
  echo "18. facebook page I have with most followers"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q18" <?php if (isset($Q18)) echo "checked";?> value="0">A) O-Plus</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q18" <?php if (isset($Q18)) echo "checked";?> value="1">B) justmeme</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q18" <?php if (isset($Q18)) echo "checked";?> value="0">C) The Craft House</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q18" <?php if (isset($Q18)) echo "checked";?> value="0">D) AB-Compound Vapers</p> 

  <div class="Photo18">
  <img src="https://scontent.fcrk1-1.fna.fbcdn.net/v/t1.6435-9/201045778_4139886599390738_3344980225570684149_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=730e14&_nc_ohc=-K-mHLtH6AEAX9mG7Tm&_nc_oc=AQmirExioLFGgxTAoNnG00GHJjnURKVURbLzTLsps5p7uFQgYctu51w1MWIvHT_8bbk&tn=oo5b0WJrI8TXD7Gb&_nc_ht=scontent.fcrk1-1.fna&oh=b9a94d2c94a9f9db7fb29a5e5c0f01ed&oe=60CE1584"
       style="width:500px">
  </div>

<?php
  echo "19. Favorite Local Band"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q19" <?php if (isset($Q19)) echo "checked";?> value="0"> Kamikazee</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q19" <?php if (isset($Q19)) echo "checked";?> value="1">B) Parokya ni Edgar</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q19" <?php if (isset($Q19)) echo "checked";?> value="1">C) Ben&Ben</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q19" <?php if (isset($Q19)) echo "checked";?> value="0">D) X Batallion</p> 
<br><br><br><br>

<?php
  echo "20. Volleyball position"
?>

  <p class="btn" style="width:50%">
  <input type="radio" name="Q20" <?php if (isset($Q20)) echo "checked";?> value="1">A) Open Spiker</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q20" <?php if (isset($Q20)) echo "checked";?> value="0">B) Middle</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q20" <?php if (isset($Q20)) echo "checked";?> value="0">C) Libero</p> 

  <p class="btn" style="width:50%">
  <input type="radio" name="Q20" <?php if (isset($Q20)) echo "checked";?> value="0">D) Coach</p> 

  <blockquote><blockquote><blockquote><blockquote><blockquote>
  <button class="BR" style="vertical-align:middle"><span>SUBMIT</span></button>

  <div class="photo20">
  <img src="https://www.daytimeview.com/wp-content/gallery/1-csb-vs-sscr-ncaa-men-beach-mar-4/Owen-Bacani-IMG_9818.JPG" style="width:500px">
  </div>

</div>
</div>
</body>
</html>