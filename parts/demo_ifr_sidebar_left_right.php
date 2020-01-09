<html><head><title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        @media screen and (max-width:420px){.w3-sidebar {
            width:150px !important;
        }
        }
        @media screen and (max-width:350px){.w3-sidebar {
            width:100px !important;
        }
        }

    </style>

</head><body class="w3-white">

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none;z-index:2" id="leftMenu">
    <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Close ×</button>
    <a class="w3-bar-item w3-button" href="#">Link 1</a>
    <a class="w3-bar-item w3-button" href="#">Link 2</a>
    <a class="w3-bar-item w3-button" href="#">Link 3</a>
</div>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;z-index:2" id="rightMenu">
    <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close ×</button>
    <a class="w3-bar-item w3-button" href="#">Link 1</a>
    <a class="w3-bar-item w3-button" href="#">Link 2</a>
    <a class="w3-bar-item w3-button" href="#">Link 3</a>
</div>

<div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge" onclick="openLeftMenu()">☰</button>
    <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()">☰</button>
    <div class="w3-container">
        <h2>My Page</h2>
    </div>
</div>

<div class="w3-container">
    <p>Click on the "hamburger" symbol to open the sidebar.</p>
</div>

<script>
    function openLeftMenu() {
        document.getElementById("leftMenu").style.display = "block";
    }
    function closeLeftMenu() {
        document.getElementById("leftMenu").style.display = "none";
    }

    function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
    }
    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
    }
</script>





</body></html>