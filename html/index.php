<html>
  <head>
    <meta content="text/html; charset=windows-1252" http-equiv="content-type">

      <title>WELCOME TO MY WEBSITE</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <style>
            .mySlides {display:none;}
            
            div {
    border: 1px solid black;
    margin: 100px 150px 100px 80px;
    background-color: lightblue;
                
    div {
    max-width: 500px;
    height: 1000px;
    background-color: powderblue;

}
        </style>
    <script>
            var bleep = new Audio ();
            bleep.src="home.mp3";
            
             var bleep = new Audio ();
            bleep.src="contact.mp3";
            
             var bleep = new Audio ();
            bleep.src="gallery.mp3";
            
             var bleep = new Audio ();
            bleep.src="about.mp3";
        </script>
  </head>
  <body bgcolor="lightgrey"> <marquee behavior="scroll" direction="left" onmouseover="this.stop();"
      onmouseout="this.start();">
      <h1>WELCOME TO MY WEBSITE</h1>
    </marquee> <a href="index.php" onmousedown="home.play()">HOME</a> <a target="_top"
      title="j" href="contact.php" onmousedown="contact.play()">CONTACT </a> <a
      href="gallery.php" onmousedown="gallery.play()">GALLERY</a> <a href="about.php"
      onmousedown="about.play()">ABOUT US</a><br>
    <br>
    <br>
    <br>
    <audio autoplay="autoplay" preload="none" src="home.mp3"></audio><br>
    <h2 class="w3-center"></h2>
    <div class="w3-content w3-section" style="max-width:1400px"> <img class="mySlides"
        src="images/IMG-20150825-WA0002.jpg" style="width:100%"> <img class="mySlides"
        src="images/IMG-20150826-WA0001.jpg" style="width:100%"> <img class="mySlides"
        src="images/IMG-20150828-WA0001.jpg" style="width:100%"> <img class="mySlides"
        src="images/IMG-20150829-WA0002.jpg" style="width:100%"> </div>
    <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>  </body>
</html>
