<html><head><title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head><body>

<div class="w3-bar w3-black">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" href="javascript:void(0)" onclick="myFunction()">☰</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button">Home</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hide-small">Link 1</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hide-small">Link 2</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hide-small">Link 3</a>
</div>

<div id="demo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
    <a href="#" class="w3-bar-item w3-button">Link 1</a>
    <a href="#" class="w3-bar-item w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<div class="w3-container">
    <p>Resize the browser window to see the effect.</p>
</div>

<script>
    function myFunction() {
        var x = document.getElementById("demo");
        if (x.classList) {
            x.classList.toggle("w3-show");
        } else {
            // Fallback for IE9 and earlier
            if (x.className.indexOf("w3-show") == -1)
                x.className += " w3-show";
            else
                x.className = x.className.replace(" w3-show", "");
        }
    }
</script>



</body></html>