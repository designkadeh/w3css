<html><head><title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head><body class="w3-white">

<div class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left" style="display: block; z-index: 2; width: 25%;" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close ×</button>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
</div>

<div id="main" style="margin-left: 25%;">

    <div class="w3-teal">
        <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()" id="openNav" style="display: none;">☰</button>
        <div class="w3-container">
            <h1>My Page</h1>
        </div>
    </div>

    <div class="w3-container">
        <p>Click on the "hamburger" symbol to open the sidebar (slides the content to the right).</p>
    </div>

</div>

<script>
    function w3_open() {
        document.getElementById("main").style.marginLeft = "25%";
        document.getElementById("mySidebar").style.width = "25%";
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("openNav").style.display = 'none';
    }
    function w3_close() {
        document.getElementById("main").style.marginLeft = "0%";
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("openNav").style.display = "inline-block";
    }
</script>



</body></html>