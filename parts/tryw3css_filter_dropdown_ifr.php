<html><head><title>W3.CSS</title>

    <style>
        body {
            font-family: Verdana,sans-serif;
            font-size:15px;
        }

        .dropbtn {
            background-color: #ccc;
            xcolor: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition:0.3s;
        }


        #myInput {
            font-size: 16px;
            border: none;
            padding:16px 20px 16px 16px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f6f6f6;
            min-width: 230px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {transition:0.3s;background-color: #ddd}
        .show {display:block;}
    </style>
</head>
<body>

<div class="dropdown">
    <button onclick="myFunction()" class="dropbtn" id="testbtn">Dropdown</button>
    <div id="myDropdown" class="dropdown-content show">
        <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
        <a href="#about">About</a>
        <a href="#base">Base</a>
        <a href="#blog" style="display: none;">Blog</a>
        <a href="#contact">Contact</a>
        <a href="#custom" style="display: none;">Custom</a>
        <a href="#support" style="display: none;">Support</a>
        <a href="#tools" style="display: none;">Tools</a>
    </div>
</div>

<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName('a');
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = '';
            } else {
                a[i].style.display = 'none';
            }
        }
    }

    var mybtn = document.getElementById("testbtn");
    mybtn.click();
</script>




</body></html>