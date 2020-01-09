<html><head><title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/w3-rtl.css">
    <style>
        .city {display:none;}
    </style>
</head><body>

<div class="w3-panel">
    <div class="w3-row">
        <a href="javascript:void(0)" id="testbtn" onclick="openCity(event, 'London');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding w3-right">London</div>
        </a>
        <a href="javascript:void(0)" onclick="openCity(event, 'Paris');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding w3-border-red w3-right">Paris</div>
        </a>
        <a href="javascript:void(0)" onclick="openCity(event, 'Tokyo');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding w3-right">Tokyo</div>
        </a>
    </div>

    <div id="London" class="w3-container city" style="display: none;">
        <h2>London</h2>
        <p>London is the capital city of England.</p>
    </div>

    <div id="Paris" class="w3-container city" style="display: block;">
        <h2>Paris</h2>
        <p>Paris is the capital of France.</p>
    </div>

    <div id="Tokyo" class="w3-container city" style="display: none;">
        <h2>Tokyo</h2>
        <p>Tokyo is the capital of Japan.</p>
    </div>
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
            tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.firstElementChild.className += " w3-border-red";
    }
</script>
<script>
    var mybtn = document.getElementById("testbtn");
    mybtn.click();
</script>


</body></html>