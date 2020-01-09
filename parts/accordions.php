<div>

    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>accordions</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="navigation.php" class="w3-right next w3-btn w3-green">Navigation »</a>
            <a href="dropdowns.php" class="w3-left next w3-btn w3-green">« Dropdowns</a>
            <br/><br/><br/>
        </div>
    </div><hr/>
    <p>Click on the "Open Section" buttons below to see how accordions work:</p>
    <button onclick="myFunct('Demo1')" class="w3-button w3-light-grey w3-block w3-left-align" id="clickthis">Open Section 1</button>
    <div id="Demo1" class="w3-hide w3-border">
        <div class="w3-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <button onclick="myFunct('Demo2')" class="w3-button w3-block w3-light-grey w3-left-align">Open Section 2</button>
    <div id="Demo2" class="w3-hide w3-border">
        <a class="w3-button w3-green w3-block w3-white w3-left-align" href="javascript:void(0)">Link 1</a>
        <a class="w3-button w3-green w3-block w3-white w3-left-align" href="javascript:void(0)">Link 2</a>
        <a class="w3-button w3-green w3-block w3-white w3-left-align" href="javascript:void(0)">Link 3</a>
    </div>
    <button onclick="myFunct('Demo3')" class="w3-button w3-block w3-light-grey w3-left-align">Open Section 3</button>
    <div id="Demo3" class="w3-hide w3-border">
        <div class="w3-container">
            <p>Accordion with Images:</p>
            <img src="images/img_snowtops.jpg" style="width:30%;" alt="Alps">
            <p>French Alps</p>
        </div>
    </div>
    <hr>

    <h2>Accordion</h2>
    <p>An accordion is used to show (and hide) HTML content.</p>
    <p>Use the <strong>w3-hide </strong>class to hide the accordion content.</p>
    <p>Use any kind of button to open and close the content:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="myFunction('Demo1')"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-block w3-left-align"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>Open Section 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="Demo1"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container
  w3-hide"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Some text..<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>script<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="jscolor" style="color:black"><br>
<span class="jskeywordcolor" style="color:mediumblue">function</span> myFunction(id) {<br>&nbsp;&nbsp;<span class="jskeywordcolor" style="color:mediumblue">var</span> x =
document.<span class="jspropertycolor" style="color:black">getElementById</span>(id);<br>&nbsp; <span class="jskeywordcolor" style="color:mediumblue">if</span> (x.<span class="jspropertycolor" style="color:black">className</span>.<span class="jspropertycolor" style="color:black">indexOf</span>(<span class="jsstringcolor" style="color:brown">"w3-show"</span>) <span class="jsnumbercolor" style="color:red">
</span>== -<span class="jsnumbercolor" style="color:red">1</span>) {<br>&nbsp;&nbsp;&nbsp; x.<span class="jspropertycolor" style="color:black">className</span> += <span class="jsstringcolor" style="color:brown">" w3-show"</span>;<br>&nbsp; } <span class="jskeywordcolor" style="color:mediumblue">else</span> { <br>&nbsp;&nbsp;&nbsp;
x.<span class="jspropertycolor" style="color:black">className</span> = x.<span class="jspropertycolor" style="color:black">className</span>.<span class="jspropertycolor" style="color:black">replace</span>(<span class="jsstringcolor" style="color:brown">" w3-show"</span>, <span class="jsstringcolor" style="color:brown">""</span>);<br>&nbsp;&nbsp;}<br><span class="jsnumbercolor" style="color:red">
</span>}<br></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/script<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_accordion" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>

    <p>Both the element that is used to open the accordion and the accordion's
        content can be any HTML element.</p>

    <hr>
    <h2>Accordion vs. Dropdown</h2>
    <p>This table shows the difference between an accordion and a dropdown:</p>
    <table class="w3-table-all">
        <tbody><tr><th style="width:50%">Accordion</th><th>Dropdown</th></tr>
        <tr>
            <td>Content pushes the page content down</td>
            <td>Content lays over existing the page content</td>
        </tr>
        <tr>
            <td>Content is often 100% wide</td>
            <td>Content is 160px wide (default)</td>
        </tr>
        <tr>
            <td>Often used to open multiple sections</td>
            <td>Often used to open one section</td>
        </tr>
        </tbody></table>

    <div class="w3-row">
        <div class="w3-half">
            <h4>Accordions</h4>
            <button onclick="myFunc('Demo5')" class="w3-padding-16 w3-button w3-block w3-left-align w3-red w3-hover-pink">Accordion 1 &nbsp;<i class="fa fa-caret-down"></i></button>
            <div id="Demo5" class="w3-hide w3-card">
                <a class="w3-button w3-green w3-block w3-left-align" href="javascript:void(0)">Link 1</a>
                <a class="w3-button w3-green w3-block w3-left-align" href="javascript:void(0)">Link 2</a>
                <a class="w3-button w3-green w3-block w3-left-align" href="javascript:void(0)">Link 3</a>
            </div>
            <button onclick="myFunc('Demo4')" class="w3-padding-16 w3-button w3-block w3-left-align w3-red w3-hover-pink">Accordion 2 &nbsp;<i class="fa fa-caret-down"></i></button>
            <div id="Demo4" class="w3-hide w3-card w3-show">
                <div class="w3-container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
        <div class="w3-half">
            <div class="testmargin">
                <h4>Dropdowns</h4>
                <div class="w3-dropdown-click" style="margin-bottom:73px">
                    <button onclick="myFunction()" class="w3-button w3-red w3-hover-pink w3-padding-16">Dropdown &nbsp;<i class="fa fa-caret-down"></i></button>
                    <div id="myDropdown" class="w3-dropdown-content w3-bar-block w3-card">
                        <a class="w3-bar-item w3-button" style="color:#000" href="javascript:void(0)">Link 1</a>
                        <a class="w3-bar-item w3-button" style="color:#000" href="javascript:void(0)">Link 2</a>
                        <a class="w3-bar-item w3-button" style="color:#000" href="javascript:void(0)">Link 3</a>
                    </div>
                </div>
            </div>

            <script>
                /* When the user clicks on the button,
                toggle between hiding and showing the dropdown content */
                function myFunction() {
                    var x = document.getElementById("myDropdown");
                    if (x.classList) {
                        x.classList.toggle("w3-show");
                    } else {
                        // Fallback for IE9
                        var classes = x.className.split(" ");
                        var i = classes.indexOf("w3-show");

                        if (i >= 0)
                            classes.splice(i, 1);
                        else
                            classes.push("w3-show");
                        x.className = classes.join(" ");
                    }
                }
            </script>
        </div>
    </div>
    <hr>

    <h2>Accordion Buttons</h2>
    <p>You can use any HTML element to open the accordion content. We prefer a button with a
        <strong>w3-block</strong> class, to span the entire width of the page (100%
        width).</p>
    <p>Remember that buttons in W3.CSS are centered by default. Use the <strong>w3-left-align</strong> class if you want
        them left-aligned instead. However, you do not have to follow our approach - an accordion will look good either way:</p>

    <button onclick="myFunc('Demo9')" class="w3-button w3-black">Normal button</button>
    <div id="Demo9" class="w3-hide w3-container w3-light-grey">
        <p>Lorem ipsum...</p>
    </div>
    <button onclick="myFunc('Demo7')" class="w3-button w3-block w3-left-align w3-green">Left aligned and full-width</button>
    <div id="Demo7" class="w3-hide w3-container w3-show">
        <p>Lorem ipsum...</p>
    </div>
    <button onclick="myFunc('Demo8')" class="w3-btn w3-block w3-red">Centered and full-width</button>
    <div id="Demo8" class="w3-hide w3-container w3-center w3-pale-red w3-show">
        <p>Centered content as well!</p>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="myFunc('Demo1')"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>Normal button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="Demo1"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hide"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Lorem ipsum...<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="myFunc('Demo2')"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-block w3-left-align
w3-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>Left aligned and full-width<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="Demo2"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hide"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Lorem ipsum...<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="myFunc('Demo3')"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-block
w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>Centered and full-width<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="Demo3"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-hide w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Centered content as well!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_accordion_buttons" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Active Accordion Buttons</h2>
    <p>Use JavaScript to highlight accordions that are open (clicked on):</p>
    <button onclick="myFuncx('Demo10')" class="w3-button w3-block w3-black w3-left-align">Open Section 1</button>
    <div id="Demo10" class="w3-hide w3-container">
        <p>Some text..</p>
    </div>
    <button onclick="myFuncx('Demo11')" class="w3-button w3-block w3-black w3-left-align">Open Section 2</button>
    <div id="Demo11" class="w3-hide w3-container">
        <p>Some other text..</p>
    </div>

    <script>
        function myFuncx(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className =
                    x.previousElementSibling.className.replace("w3-black", "w3-red");
            } else {
                x.className = x.className.replace(" w3-show", "");
                x.previousElementSibling.className =
                    x.previousElementSibling.className.replace("w3-red", "w3-black");
            }}
    </script>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
</span><span class="commentcolor" style="color:green">// Add the w3-red class to all opened accordions<br></span><span class="jskeywordcolor" style="color:mediumblue">var</span> x =
document.<span class="jspropertycolor" style="color:black">getElementById</span>(id);<br><span class="jskeywordcolor" style="color:mediumblue">if</span> (x.<span class="jspropertycolor" style="color:black">className</span>.<span class="jspropertycolor" style="color:black">indexOf</span>(<span class="jsstringcolor" style="color:brown">"w3-show"</span>) == -<span class="jsnumbercolor" style="color:red">1</span>) {<br>&nbsp;
x.<span class="jspropertycolor" style="color:black">className</span> += <span class="jsstringcolor" style="color:brown">" w3-show"</span>;<br>&nbsp; x.<span class="jspropertycolor" style="color:black">previousElementSibling</span>.<span class="jspropertycolor" style="color:black">className</span> += <span class="jsstringcolor" style="color:brown">"
w3-red"</span>;<br>} <span class="jskeywordcolor" style="color:mediumblue">else</span> { <br>&nbsp; x.<span class="jspropertycolor" style="color:black">className</span> = x.<span class="jspropertycolor" style="color:black">className</span>.<span class="jspropertycolor" style="color:black">replace</span>(<span class="jsstringcolor" style="color:brown">"w3-show"</span>,
<span class="jsstringcolor" style="color:brown">""</span>);<br>&nbsp; x.<span class="jspropertycolor" style="color:black">previousElementSibling</span>.<span class="jspropertycolor" style="color:black">className</span> = <span class="jsnumbercolor" style="color:red">
</span><br>&nbsp; x.<span class="jspropertycolor" style="color:black">previousElementSibling</span>.<span class="jspropertycolor" style="color:black">className</span>.<span class="jspropertycolor" style="color:black">replace</span>(<span class="jsstringcolor" style="color:brown">"w3-red"</span>, <span class="jsstringcolor" style="color:brown">""</span>);<br>} </span></div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_accordion_active" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Accordion Width</h2>
    <p>By default, the width of block is 100%. To override this, change the
        CSS width property of the accordion container:</p>
    <div class="w3-light-grey" style="width:25%">
        <button onclick="myFunc('Demo25')" class="w3-button w3-black w3-block testbtn">
            25%</button>
        <div id="Demo25" class="w3-container w3-hide">
            <p>Some text..</p>
        </div>
    </div>
    <div class="w3-light-grey" style="width:50%">
        <button onclick="myFunc('Demo26')" class="w3-button w3-black w3-block testbtn">
            50%</button>
        <div id="Demo26" class="w3-container w3-hide">
            <p>Some text..</p>
        </div>
    </div>
    <div class="w3-light-grey" style="width:75%">
        <button onclick="myFunc('Demo27')" class="w3-button w3-black w3-block testbtn">
            75%</button>
        <div id="Demo27" class="w3-container w3-hide">
            <p>Some text..</p>
        </div>
    </div>
    <div class="w3-light-grey">
        <button onclick="myFunc('Demo28')" class="w3-button w3-black w3-block testbtn">
            Default (100%)</button>
        <div id="Demo28" class="w3-container w3-hide">
            <p>Some text..</p>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-light-grey"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:50%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="myFunction('Demo1')"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-block"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; 50%<br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="Demo1"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hide"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Some text..<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_accordion_width" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Accordion Content</h2>
    <h5>Accordion with links:</h5>
    <div>
        <button onclick="myFuncx('Demo12')" class="w3-button w3-block w3-left-align testbtn w3-light-grey">
            Accordion</button>
        <div id="Demo12" class="w3-hide w3-show">
            <a class="w3-button w3-green w3-block w3-left-align" href="javascript:void(0)">Link 1</a>
            <a class="w3-button w3-green w3-block w3-left-align" href="javascript:void(0)">Link 2</a>
            <a class="w3-button w3-green w3-block w3-left-align" href="javascript:void(0)">Link 3</a>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="myFunction('Demo1')"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-block w3-left-align"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>Accordion<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="Demo1"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hide"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-block w3-left-align"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-block w3-left-align"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-block w3-left-align"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_accordion_links" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>

    <h5>Accordion as a List:</h5>
    <button onclick="myFuncx('Demo13')" class="w3-button w3-block w3-left-align testbtn w3-light-grey">
        Accordion</button>
    <div id="Demo13" class="w3-hide w3-show">
        <ul class="w3-ul">
            <li>Jill</li>
            <li>Eve</li>
            <li>Adam</li>
        </ul>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="myFunction('Demo1')"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-block w3-left-align"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>Accordion<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="Demo1"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hide"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_accordion_lists" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>

    <h5>Accordion inside a Sidebar (You will learn more about sidebars later):</h5>
    <iframe src="parts/demo_ifr_accordion_sidebar.php" style="border:1px solid #ccc;width:100%;height:350px" __idm_frm__="305"></iframe>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-bar-block w3-light-grey w3-card"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:200px;"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="myAccFunc()"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Accordion<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
id<span class="attributevaluecolor" style="color:mediumblue">="demoAcc"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hide"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-click"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="myDropFunc()"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Dropdown<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
id<span class="attributevaluecolor" style="color:mediumblue">="demoDrop"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-content"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_accordion_sidebar" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Animated Accordions</h2>
    <p>Use any of the w3-animate-<em>classes</em> to fade, zoom or slide in the accordion content:</p>
    <div class="w3-light-grey">
        <button onclick="myFunc('Demo17')" class="w3-padding-16 w3-button w3-block w3-left-align">Accordion</button>
        <div id="Demo17" class="w3-hide w3-animate-zoom">
            <a class="w3-button w3-green w3-block w3-left-align" href="javascript:void(0)">Link 1</a>
            <a class="w3-button w3-green w3-block w3-left-align" href="javascript:void(0)">Link 2</a>
            <a class="w3-button w3-green w3-block w3-left-align" href="javascript:void(0)">Link 3</a>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="Demo1"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hide
w3-animate-zoom"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_accordion_animate" target="_blank">Try it Yourself »</a>
        </p>
    </div>


    <script>
        var mybtn = document.getElementsByClassName("testbtn");
        var i;
        for (i = 0; i < mybtn.length; i++) {
            mybtn[i].click();
        }
    </script>
    <script>
        function myFunct(id) {
            var x = document.getElementById(id);
            if (x.classList) {
                x.classList.toggle("w3-show");
                x.previousElementSibling.classList.toggle("w3-dark-grey");
            } else {
                // Fallback for IE9 and earlier
                if (x.className.indexOf("w3-show") == -1)
                    x.className = x.className + " w3-show";
                else
                    x.className = x.className.replace("w3-show", "");
            }
        }


        function myFunc(id) {
            var x = document.getElementById(id);
            if (x.classList) {
                x.classList.toggle("w3-show");
            } else {
                // Fallback for IE9 and earlier
                if (x.className.indexOf("w3-show") == -1)
                    x.className = x.className + " w3-show";
                else
                    x.className = x.className.replace("w3-show", "");
            }
        }
    </script>

    <br>
    <div class="w3-clear nextprev">
        <a href="navigation.php" class="w3-right next w3-btn w3-green">Navigation »</a>
        <a href="dropdowns.php" class="w3-left next w3-btn w3-green">« Dropdowns</a>
    </div>
</div>