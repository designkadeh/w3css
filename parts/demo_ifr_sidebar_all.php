<html><head><title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head><body class="w3-white">

<div class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left" style="display:none;z-index:2" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close ×</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
</div>

<div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
    <div class="w3-container">
        <h2>My Page</h2>
    </div>
</div>

<div class="w3-container">
    <p>Click on the "hamburger" symbol to open the Sidebar (overlays the page content).</p>
</div>

<script>
    function w3_open() {
        document.getElementById("mySidebar").style.width = "100%";
        document.getElementById("mySidebar").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>



</body></html>