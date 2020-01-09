<html><head><title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/w3-rtl.css">
    <style>
        .city {display:none;}
    </style>
</head><body>

<div class="w3-bar w3-black">
    <button class="testbtn w3-bar-item w3-button tablink w3-red w3-right" onclick="openCity(event,'London')">London</button>
    <button class="w3-bar-item w3-button tablink w3-right" onclick="openCity(event,'Paris')">Paris</button>
    <button class="w3-bar-item w3-button tablink w3-right" onclick="openCity(event,'Tokyo')">Tokyo</button>
</div>

<div id="London" class="w3-container city rtl" style="display: block;">
    <h2>London</h2>
    <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="w3-container city rtl" style="display: none;">
    <h2>Paris</h2>
    <p>Paris is the capital of France.</p>
</div>

<div id="Tokyo" class="w3-container city rtl" style="display: none;">
    <h2>Tokyo</h2>
    <p>Tokyo is the capital of Japan.</p>
</div>

<script>
    function openCity(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " w3-red";
    }
</script>

<script>
    var mybtn = document.getElementsByClassName("testbtn")[0];
    mybtn.click();
</script>


</body></html>