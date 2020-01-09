<html><head><title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head><body class="w3-light-grey">

<div class="w3-sidebar w3-bar-block w3-white w3-animate-left" style="display: block; z-index: 5;" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-bar-item w3-large">Close ×</a>
    <a href="#" class="w3-button w3-bar-item">Link 1</a>
    <a href="#" class="w3-button w3-bar-item">Link 2</a>
    <a href="#" class="w3-button w3-bar-item">Link 3</a>
    <a href="#" class="w3-button w3-bar-item">Link 4</a>
    <a href="#" class="w3-button w3-bar-item">Link 5</a>
</div>

<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor: pointer; display: block;" id="myOverlay"></div>

<div>
    <button class="w3-button w3-light-grey w3-xxlarge" onclick="w3_open()">☰</button>
    <div class="w3-container">
        <h2>Sidebar Overlay</h2>
        <p>The w3-overlay class can be used to create an overlay effect, when opening the sidebar. The w3-overlay class adds a black background with a 50% opacity to the "page content" - this effect will "highlight" the side navigation</p>
        <p>Click on the "hamburger menu" to see the effect.</p>
    </div>
</div>

<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>



</body></html>