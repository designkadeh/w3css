<html><head><title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head><body class="w3-white">

<div class="w3-sidebar w3-bar-block w3-collapse w3-white w3-card w3-animate-left" style="width: 200px; z-index: 2; display: block;" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-hide-large">Close ×</button>
    <h5 class="w3-bar-item w3-hide-medium w3-hide-small">Menu</h5>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
</div>

<div class="w3-main" style="margin-left:200px">

    <div class="w3-teal">
        <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
        <div class="w3-container">
            <h2>My Page</h2>
        </div>
    </div>

    <div class="w3-container">
        <p>This Sidebar is always displayed on screens wider than 992px, and hidden on small screens (replaced with a clickable menu icon (☰).</p>
    </div>

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