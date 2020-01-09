<html><head><title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head><body class="w3-light-grey">

<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close ×</button>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
</div>

<button class="w3-button w3-xxlarge" onclick="w3_open()">☰</button>
<div class="w3-container">
    <h2>Page content..</h2>
    <p>Click on the "hamburger" icon to slide in the side navigation.</p>
</div>

<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>



</body></html>