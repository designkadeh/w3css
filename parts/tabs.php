<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Tabs</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="pagination.php" class="w3-right next w3-btn w3-green">Pagination »</a>
            <a href="sidebar.php" class="w3-left next w3-btn w3-green">« Sidebar</a>
            <br/><br/><br/>
        </div>
    </div><hr/>
    <div class="w3-border">
        <div class="w3-bar w3-border-bottom w3-light-grey intronav">
            <a class="w3-bar-item w3-button testbtn w3-dark-grey w3-right" onclick="openCity('London')" id="myLink">London</a>
            <a class="w3-bar-item w3-button testbtn w3-right" onclick="openCity('Paris')">Paris</a>
            <a class="w3-bar-item w3-button testbtn w3-right" onclick="openCity('Tokyo')">Tokyo</a>
        </div>

        <div id="London" class="w3-container city w3-animate-opacity" style="display: block;">
            <h2>London</h2>
            <p>London is the capital of England.</p>
            <p>It is the most populous city in the United Kingdom,
                with a metropolitan area of over 9 million inhabitants.</p>
        </div>

        <div id="Paris" class="w3-container city w3-animate-opacity" style="display: none;">
            <h2>Paris</h2>
            <p>Paris is the capital of France.</p>
            <p>The Paris area is one of the largest population centers in Europe,
                with more than 12 million inhabitants.</p>
        </div>

        <div id="Tokyo" class="w3-container city w3-animate-opacity" style="display: none;">
            <h2>Tokyo</h2>
            <p>Tokyo is the capital of Japan.</p>
            <p>It is the center of the Greater Tokyo Area,
                and the most populous metropolitan area in the world.</p>
        </div>
    </div>

    <hr>

    <h2>Tabbed Navigation</h2>
    <p>Tabbed navigation is a way to navigate around a website.</p>
    <p>Normally, tabbed navigation uses navigation buttons (tabs) arranged together
        with the selected tab highlighted.</p>
    <p>This example uses elements with the same class name ("city" in our example)
        , and changes the style between <strong>display:none</strong> and <strong>
            display:block</strong> to hide and display different content:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="London"</span> class<span class="attributevaluecolor" style="color:mediumblue">="city"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span>London<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>London is the capital
            of England.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="Paris"</span> class<span class="attributevaluecolor" style="color:mediumblue">="city"</span> style<span class="attributevaluecolor" style="color:mediumblue">="display:none"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Paris<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Paris is the capital of France.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
 id<span class="attributevaluecolor" style="color:mediumblue">="Tokyo"</span> class<span class="attributevaluecolor" style="color:mediumblue">="city"</span> style<span class="attributevaluecolor" style="color:mediumblue">="display:none"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Tokyo<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Tokyo is the capital of Japan.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
    </div>

    <p>And some clickable buttons to open the tabbed content:
    </p><div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span>
  onclick<span class="attributevaluecolor" style="color:mediumblue">="openCity('London')"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>London<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="openCity('Paris')"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Paris<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="openCity('Tokyo')"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Tokyo<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    </div>

    <p>And a JavaScript to do the job:
    </p><div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
</span>  <span class="jskeywordcolor" style="color:mediumblue">function</span> openCity(cityName) {<br>&nbsp; <span class="jsnumbercolor" style="color:red">
</span> <span class="jskeywordcolor" style="color:mediumblue">var</span> i;<br>&nbsp;&nbsp;<span class="jskeywordcolor" style="color:mediumblue">var</span> x = document.<span class="jspropertycolor" style="color:black">getElementsByClassName</span>(<span class="jsstringcolor" style="color:brown">"city"</span>);<br><span class="jsnumbercolor" style="color:red">
</span>  &nbsp; <span class="jsnumbercolor" style="color:red">
</span> <span class="jskeywordcolor" style="color:mediumblue">for</span> (i = <span class="jsnumbercolor" style="color:red">0</span>; i &lt; x.<span class="jspropertycolor" style="color:black">length</span>; i++) {<br>&nbsp;&nbsp;&nbsp;&nbsp;x[i].<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> = <span class="jsstringcolor" style="color:brown">"none"</span>; <br><span class="jsnumbercolor" style="color:red">
</span>  &nbsp;&nbsp;}<br>&nbsp;&nbsp;document.<span class="jspropertycolor" style="color:black">getElementById</span>(cityName).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> = <span class="jsstringcolor" style="color:brown">"block"</span>; <br>}<br><span class="jsnumbercolor" style="color:red">
</span> </span></div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tabulators" target="_blank">Try It Yourself »</a>
    </div>

    <h3>JavaScript Explained</h3>
    <p>The <strong>openCity()</strong> function is called when the user clicks on one of the buttons in the menu.</p>
    <p class="tags">The function hides all elements with the class name "city" (<strong>display="none"</strong>),
        and displays the element with the given city name (<strong>display="block"</strong>);</p>
    <hr>

    <h2>Closable Tabs</h2>

    <div class="w3-bar w3-black intronav">
        <a class="w3-bar-item w3-right w3-button testbtn" onclick="openc('l')">London</a>
        <a class="w3-bar-item w3-button w3-right testbtn" onclick="openc('p')">Paris</a>
        <a class="w3-bar-item w3-button testbtn w3-right" onclick="openc('t')">Tokyo</a>
    </div>

    <div id="l" class="w3-container cityclose w3-border w3-display-container">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright" title="Close Tab">×</span>
        <h2>London</h2>
        <p>London is the capital city of England.</p>
    </div>

    <div id="p" class="w3-container cityclose w3-border w3-display-container" style="display:none">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright" title="Close Tab">×</span>
        <h2>Paris</h2>
        <p>Paris is the capital of France.</p>
    </div>

    <div id="t" class="w3-container cityclose w3-border w3-display-container" style="display:none">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright" title="Close Tab">×</span>
        <h2>Tokyo</h2>
        <p>Tokyo is the capital of Japan.</p>
    </div>

    <p>To close a tab, add <strong>onclick="this.parentElement.style.display='none'"</strong>
        to an element inside the tab container:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="London"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="this.parentElement.style.display='none'"</span><br>&nbsp;
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-display-topright"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>X<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span>London<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>London is the capital city of England.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tabulators_close" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Active/Current Tab</h2>
    <iframe src="parts/demo_ifr_tabulators_active.php" style="border:1px solid #ddd;height:160px;width:100%" __idm_frm__="732"></iframe>
    <p>To highlight the current tab/page the user is on, use JavaScript
        and add a color class to the active link. In the example below, we have added a "tablink"
        class to each link. That way, it is easy to get all links that is associated
        with tabs, and give the current tab link a "w3-red" class, to highlight it:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black">
<span class="jskeywordcolor" style="color:mediumblue">function</span> openCity(evt, cityName) {<br>&nbsp;&nbsp;<span class="jskeywordcolor" style="color:mediumblue">var</span> i, x, tablinks;<br>&nbsp;
x = document.<span class="jspropertycolor" style="color:black">getElementsByClassName</span>(<span class="jsstringcolor" style="color:brown">"city"</span>);<br>&nbsp; <span class="jskeywordcolor" style="color:mediumblue">for</span> (i = <span class="jsnumbercolor" style="color:red">
0</span>; i &lt; x.<span class="jspropertycolor" style="color:black">length</span>; i++) {<br>&nbsp;&nbsp;&nbsp; x[i].<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> <span class="jsnumbercolor" style="color:red">
</span>= <span class="jsstringcolor" style="color:brown">"none"</span>;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;tablinks =
document.<span class="jspropertycolor" style="color:black">getElementsByClassName</span>(<span class="jsstringcolor" style="color:brown">"tablink"</span>);<br>&nbsp; <span class="jskeywordcolor" style="color:mediumblue">for</span> (i = <span class="jsnumbercolor" style="color:red">
0</span>; i &lt; x.<span class="jspropertycolor" style="color:black">length</span>; i++) {<br>&nbsp;&nbsp;&nbsp; tablinks[i].<span class="jspropertycolor" style="color:black">className</span> =
tablinks[i].<span class="jspropertycolor" style="color:black">className</span>.<span class="jspropertycolor" style="color:black">replace</span>(<span class="jsstringcolor" style="color:brown">" w3-red"</span>, <span class="jsstringcolor" style="color:brown">""</span>);<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;document.<span class="jspropertycolor" style="color:black">getElementById</span>(cityName).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> =
<span class="jsstringcolor" style="color:brown">"block"</span>;<br>&nbsp;&nbsp;evt.<span class="jspropertycolor" style="color:black">currentTarget</span>.<span class="jspropertycolor" style="color:black">className</span> += <span class="jsstringcolor" style="color:brown">"
w3-red"</span>;<br><span class="jsnumbercolor" style="color:red">
</span>}<br><span class="jsnumbercolor" style="color:red">
</span> </span></div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tabulators_active" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Vertical Tabs</h2>
    <iframe src="parts/demo_ifr_tabulators_sidebar.php" style="border:1px solid #ddd;height:260px;width:100%" __idm_frm__="733"></iframe>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>nav<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-bar-block w3-light-grey"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:130px"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="openCity(event, 'London')"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>London<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="openCity(event, 'Paris')"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Paris<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="openCity(event, 'Tokyo')"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Tokyo<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/nav<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tabulators_sidebar" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Animated Tab Content</h2>
    <p>Use any of the w3-animate-<em>classes</em> to fade, zoom or slide in tab
        content:</p>
    <iframe src="parts/demo_ifr_tabulators_sidebar_ani.php" style="border:1px solid #ddd;height:260px;width:100%" __idm_frm__="734"></iframe>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="London"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container city w3-animate-left"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>London is the capital city of England.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tabulators_animate" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Tabbed Image Gallery</h2>
    <p>Click on an image:</p>
    <div class="w3-row-padding w3-margin-top" style="margin:0 -16px">
        <div class="w3-col s3 w3-container">
            <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Nature');">
                <img src="images/img_nature.jpg" alt="Nature" style="width:100%">
            </a>
        </div>
        <div class="w3-col s3 w3-container">
            <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Snow');">
                <img src="images/img_snowtops.jpg" alt="Snow" style="width:100%">
            </a>
        </div>
        <div class="w3-col s3 w3-container">
            <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Mountains');">
                <img src="images/img_mountains.jpg" alt="Mountains" style="width:100%">
            </a>
        </div>
        <div class="w3-col s3 w3-container">
            <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Lights');">
                <img src="images/img_lights.jpg" alt="Lights" style="width:100%">
            </a>
        </div>
    </div><br>

    <div id="Nature" class="picture w3-display-container" style="display: block;">
        <img src="images/img_nature_wide.jpg" alt="Nature" style="width:100%">
        <span onclick="this.parentElement.style.display='none'" class="w3-display-topright w3-button w3-transparent w3-text-white w3-large">×</span>
        <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Nature</div>
    </div>

    <div id="Snow" class="picture w3-display-container" style="display: none;">
        <img src="images/img_snow_wide.jpg" alt="Snow" style="width:100%">
        <span onclick="this.parentElement.style.display='none'" class="w3-display-topright w3-button w3-transparent w3-text-white w3-large">×</span>
        <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">French Alps</div>
    </div>

    <div id="Mountains" class="picture w3-display-container" style="display: none;">
        <img src="images/img_mountains_wide.jpg" alt="Mountains" style="width:100%">
        <span onclick="this.parentElement.style.display='none'" class="w3-display-topright w3-button w3-transparent w3-large">×</span>
        <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Mountains</div>
    </div>

    <div id="Lights" class="picture w3-display-container" style="display: none;">
        <img src="images/img_lights_wide.jpg" alt="Lights" style="width:100%">
        <span onclick="this.parentElement.style.display='none'" class="w3-display-topright w3-button w3-transparent w3-text-white w3-large">×</span>
        <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Northern Lights</div>
    </div>

    <script>
        openImg("Nature");
        function openImg(imgName) {
            var i, x;
            x = document.getElementsByClassName("picture");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(imgName).style.display = "block";
        }
    </script>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="javascript:void(0)"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hover-opacity"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="openImg('Nature');"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_nature.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Nature"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="Nature"</span> class<span class="attributevaluecolor" style="color:mediumblue">="picture w3-display-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red">
src<span class="attributevaluecolor" style="color:mediumblue">="img_nature_wide.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Nature"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="this.parentElement.style.display='none'"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-topright"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;times;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-bottomleft w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Nature<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tabulators_image" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Tabs in a Grid</h2>
    <p>Using tabs in a third column layout. Note that we add a bottom border to the active tab, instead of a background color:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-white w3-padding">
            <iframe src="parts/tryw3css_tabulators_grid_ifr.php" style="border:none;height:200px;width:100%" __idm_frm__="735"></iframe>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom w3-margin-top" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tabulators_grid&amp;stacked=h" target="_blank">Try It Yourself »</a>
    </div>

    <br>
    <div class="w3-clear nextprev">
        <a href="pagination.php" class="w3-right next w3-btn w3-green">Pagination »</a>
        <a href="sidebar.php" class="w3-left next w3-btn w3-green">« Sidebar</a>
    </div>


    <script>

        var mybtn = document.getElementById("myLink");
        mybtn.click();

        function openc(cityn) {
            var i;
            var x = document.getElementsByClassName("cityclose");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(cityn).style.display = "block";
        }
    </script>

</div>