<?php
    $HOST = "localhost";
    $USER = "root";
    $PASS ="";
    $DATABASE = "my-portfolio";
    $conn = new mysqli($HOST, $USER, $PASS, $DATABASE);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/nav.css">
  <link rel="stylesheet" type="text/css" href="css/intro.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style type="text/css">
    * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
/* form style */
input[type=text],#txtMessage {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

#form-container{
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
  </style>
    <title>My Portfolio</title>
    
</head>
<body>
<h1>GEORGE S. MBEWE </h1>
<div class="ul">
    <div class="li"><a class="active" href="index.php">Home</a></div>
    <div class="li"><a href="services.php">Services</a></div>
    <div class="li"><a href="about.php">About</a></div>
    <div class="li"><a href="contact/message.html">Contacts</a></div>
    <div class="li"><a href="skills.php">Skills</a></div>
    <div class="li"><a href="Projects.php">Projects</a></div>
</div>

<center>
    <div class="containers">
        
    </div>
</center>
<?php
    $query ="SELECT * FROM projects";
    $result = mysqli_query($conn, $query);
    $n=1;
    if(mysqli_num_rows($result)>0){
        echo "<table><thead><tr><td>#</td><td>Project title</td><td>Project Description</td></tr></thead><tbody>";
       while($row = mysqli_fetch_assoc($result)){
           $title = $row['project_title'];
           $desc = $row['project_description'];

           echo "<tr><td>$n</td><td>$title</td><td>$desc</td></tr>";
           $n++;
       }
       echo "<tbody></table>";
    }else{
        echo "No projects found";
    }
?>
  <img src="images/DSC_0211.jpg" style="width:40%">


<!--<div class="slideshow-container">

<div class="mySlides fade1">
  <img src="images/DSC_0211.jpg" style="width:40%">
  
</div>

<div class="mySlides fade1">
  <img src="images/1685477062179.jpg" style="width:40%">
</div>

<div class="mySlides fade1">
  <img src="images/DSC_0211.jpg" style="width:40%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>-->

<button class="accordion">Introduction</button>
<div class="panel">
 
 <p>My name is George S. Mbewe i am young Malawian man aged 31 years and married with 2 kids. I am a level 2 ICT student at Mzuzu University, I hail from Thyolo T/A Chimaliro </p>
    <p>I am a web developer. During my free time i usually practice and experimiting with HTML,CSS and Javascript,I am experienced in both web front end and back end development.</p>
    <p>I am also an expert in computer networks and adminstration</p>    
</div>
    
<div>
  <h2>featured projects</h2>
  <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="slider (1).png" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="slider (2).png" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="slider (3).png" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

</div>
<div id="form-container">
  <form action="#">
    <label for="fname">Name</label></br>
    <input type="text" id="name" name="name" placeholder="Your name.."><br>

    <label for="email">Email</label><br>
    <input type="text" id="mail" name="mail" placeholder="Your last name.."><br>
    <p>
<label for="message">Message</label><br>
<textarea name="txtMessage" id="txtMessage" cols="25" rows="5" placeholder="Type your message here"></textarea>
</p>

  
    <input type="submit" value="Submit">
  </form>
</div>



<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">

    
      <a href="#" class="accordiona">Projects</a>
      <div class="panel">
    <p>Portfolio project</p>
    <a href="index.html">My portfolio</a>
</div>

    <a class="accordiona" href="#">Skills</a>
    <div class="panel">
     <ul>
        <li><span style="font-size: 30px;">&#9758;</span>html</li>
        <li><span style="font-size: 30px;">&#9758;</span>web design</li>
        <li><span style="font-size: 30px;">&#9758;</span>javascript</li>
        <li><span style="font-size: 30px;">&#9758;</span>web deloment</li>
        <li><span style="font-size: 30px;">&#9758;</span>css</li>
        <li><span style="font-size: 30px;">&#9758;</span>networking</li>
    </ul> 
    </div>
    <a href="#" class="accordiona">Tools</a>
    <div class="panel">
      <ul>
        <li><span style="font-size: 30px;">&#9758;</span>sublime text</li>
        <li><span style="font-size: 30px;">&#9758;</span>browser</li>
        <li><span style="font-size: 30px;">&#9758;</span>google web disigner</li>
        <li><span style="font-size: 30px;">&#9758;</span>adobe photoshop</li>
        <li><span style="font-size: 30px;">&#9758;</span>wireshark</li>
    </ul>
    </div>

    <a href="#" class="accordiona">Technologies</a>
    <div class="panel">
      <ul>
        <li><span style="font-size: 30px;">&#9758;</span>html and css</li>
        <li><span style="font-size: 30px;">&#9758;</span>Programming languages</li>
        <li><span style="font-size: 30px;">&#9758;</span>protocals</li>
        <li><span style="font-size: 30px;">&#9758;</span>data formats</li>
        <li><span style="font-size: 30px;">&#9758;</span>wireless network</li>
    </ul>
    </div>
  </div>
</div>    
    

  

<button class="open-button" onclick="openNav()">MENU</button>
    

<footer>
    <div class="social-links">
      <a href="#" target="_blank">
        <img src="icons/face.png" width="30px">
      </a>
      <a href="#" target="_blank">
      <img src="icons/twitter.png" width="30px">
      </a>
      <a href="#" target="_blank">
      <img src="icons/insta.png" width="30px">
      </a>
      <a href="#" target="_blank">
      <img src="icons/wap.png" width="30px">
      </a>
      <a href="#" target="_blank">
      <img src="icons/email.png" width="30px">
      </a>
    </div>
    
    </div>
    <span>
      George s. mbwewe &copy 2023 - +265999312947
    </span>
  </footer>


<script src="javascript/nav.js"></script>
<script src="javascript/greeting.js"></script>
<script src="javascript/intro.js"></script>  
<script src="javascript/script.js"></script>
  
</body>
</html>