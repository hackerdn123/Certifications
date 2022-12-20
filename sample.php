<!DOCTYPE html>
<html>
<head>
<title>WWW.TODAYONEGRAB.COM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: monaco,Consolas,Lucida Console,monospace;}
.menu {display: none}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("123.jpeg");
  min-height: 90%;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button">HOME</a>
    <a href="#menu" class="w3-bar-item w3-button">MENU</a>
    <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#myMap" class="w3-bar-item w3-button">CONTACT</a>
  </div>
</div>
  
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Open from 10am to 12pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-BLACK w3-hide-small" style="font-size:50px"><br> T O D A Y O N E G R A B </span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>thin<br>CRUST PIZZA</b></span>
    <p><a href="#menu" class="w3-button w3-xxlarge w3-black"> GET READY TO DIG IN </a></p>
  </div>
</header>

<!-- Menu Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">THE MENU</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">BREAKFAST</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">LUNCH</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">DINNER</div>
      </a>
    </div>

    <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>IDLY</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₹10-20</span></h1>
      <p class="w3-text-grey">PODI IDLY,GHEE IDLY,SAMBAR IDLY</p>
      <hr>
   
      <h1><b>DOSA</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₹10-30</span></h1>
      <p class="w3-text-grey">PODI DOSA,ONION UTHAPPAM,GHEE ROAST,PLAIN</p>
      <hr>
      
      <h1><b>PONGAL</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₹15-25</span></h1>
      <p class="w3-text-grey">VEN PONGAL,SAKARA PONGAL</p>
      <hr>

      <h1><b>POORI</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₹10-20</span></h1>
      <p class="w3-text-grey">POORI KILANGU,POORI VADACURRY</p>
      <hr>

      <h1><b>APPAM</b> <span class="w3-tag w3-red w3-round">Hot!</span><span class="w3-right w3-tag w3-dark-grey w3-round">₹10-30</span></h1>
      <p class="w3-text-grey">NOOLU IDIYAPPAM,APPAM</p>
      <hr>

      <h1><b></b>VADA <span class="w3-tag w3-grey w3-round">New</span><span class="w3-right w3-tag w3-dark-grey w3-round">₹10-20</span></h1>
      <p class="w3-text-grey">MASALA VADA,MEDHU VADA,KEERA VADA</p>
    </div>

    <div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>BRIYANI</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">₹80-120</span></h1>
      <p class="w3-text-grey">MUTTON BIRIYANI,CHICKEN BIRIYANI,BEEF BRIYANI</p>
      <hr>
   
      <h1><b>FRIED RICE</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₹80-120</span></h1>
      <p class="w3-text-grey">CHICKEN RICE ,EGG RICE,VEG RICE</p>
      <hr>
      <h1><b>NOODLES</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₹80-100</span></h1>
      <p class="w3-text-grey">CHICKEN NOODLES,BEEF NOODLES,VEG NOODLES</p>
      <hr>

      <h1><b>MEALS</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₹70-90</span></h1>
      <p class="w3-text-grey">VEG MEALS,NON-VEG MEALS</p>
    </div>


    <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>PAROTTA</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">₹10-80</span></h1>
      <p class="w3-text-grey">CHILLY PAROTTA,KIZHI PAROTTA,KOTHU PAROTTA</p>
      <hr>
   
      <h1><b>CHAPATHI</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₹10-50</span></h1>
      <p class="w3-text-grey">BUTTER NAAN,PHULKA,NAAN</p>
      <hr>
      
      <h1><b>SHAWARMA</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₹60-80</span></h1>
      <p class="w3-text-grey">CHICKEN SHAWARMA,ITALIAN SHAWARMA,PLATE SHAWARMA</p>
      <hr>
      
      <h1><b>STARTER CHICKEN</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₹100-200</span></h1>
      <p class="w3-text-grey">BBQ CHICKEN,GRILL CHICKEN,TANDOORI CHICKEN</p>
    </div><br>

  </div>
</div>

<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px"> ABOUT OUR RESTAURANT </h1>
    <p>Our fast food restaurant is the perfect place to grab a quick and delicious meal on the go. We offer a wide variety of burgers, fries, and shakes, all made with high-quality ingredients and cooked to perfection. Our menu is designed to cater to everyone's tastes, with options ranging from classic burgers and fries to vegetarian options and salads.Our restaurant is bright and welcoming, with a modern and upbeat atmosphere. We have plenty of seating available, both indoors and outdoors, so you can enjoy your meal in comfort. We also offer takeout options for those who are in a hurry.At our fast food restaurant, we pride ourselves on providing fast and friendly service. Our team is dedicated to making sure every customer leaves satisfied, whether they are dining in or taking their meal to go. We hope you'll visit us soon and enjoy the delicious food and great service that we have to offer.</p>
    <p><strong>TODAYONEGRAB</strong> A TASTE YOU'LL REMEMBER.</p>
    <p>We are proud of our interiors.</p>
    <img src="logo6.jpg" style="width:100%" class="w3-margin-top w3-margin-bottom" alt="Restaurant">
    <h1><b>Opening Hours</b></h1>
    
    <div class="w3-row">
      <div class="w3-col s6">
        <p>SPECIAL DINING AVAILABLE </p>
        <p>READY TO SERVE ALL DAYS</p>
        <p>Monday,Tuesday,Wednesday,Thursday,Friday</p>
        <p>TIMINGS 06.00AM - 10.00PM</p>
      </div>
      <div class="w3-col s6">
        <p>       Saturday 10.00AM - 11.00PM</p>
        <p>       Sunday special 02.00PM - 02.00AM</p>
      </div>
    </div>
    
  </div>
</div>

<!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;" id="myMap">

<!-- Contact -->
<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">CONTACT</h1>
    <p>Find us at some address at some place or call us at +919384617354</p>
    <p><b>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggest criteria of them all, both look and taste.</b></p>
    <p class="w3-xxlarge"><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
    <form action="action_page.php" method="post" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2022-12-17T12:14"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-block" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>Powered by <a href="logo_display.html" title="W3.CSS" target="_blank" class="w3-hover-text-green"> N A R I K O O T A M </a></p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
