
    <div>
        <div class="w3-container" id="home">
            <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
            <h1 class="w3-xxxlarge w3-text-purple"><b>Slideshow</b></h1>
            <hr class="w3-round">
            <div class="w3-container"><br/>
                <a href="modal.php" class="w3-right next w3-btn w3-green">Modal »</a>
                <a href="progressbar.php" class="w3-left next w3-btn w3-green">« Progress Bars</a>
                <br/><br/><br/>
            </div>
        </div><hr/>

        <div class="w3-content w3-display-container" style="max-width:900px;">

            <!-- Slideshow -->
            <div class="w3-display-container mySlides w3-animate-opacity" style="display: none;">
                <img src="images/workbench.jpg" style="width:100%">
                <div class="w3-display-middle w3-text-white w3-container w3-padding-32 w3-hide-small">
                    <span class="w3-white w3-padding-large">Caption text</span>
                </div>
            </div>
            <div class="w3-display-container mySlides w3-animate-opacity" style="display: block;">
                <img src="images/coffee.jpg" style="width:100%">
                <div class="w3-display-topleft w3-text-white w3-container w3-padding-32 w3-hide-small">
                    <span class="w3-white w3-padding-large">Caption text</span>
                </div>
            </div>
            <div class="w3-display-container mySlides w3-animate-opacity" style="display: none;">
                <img src="images/sound.jpg" style="width:100%">
                <div class="w3-display-topright w3-text-white w3-container w3-padding-32 w3-hide-small">
                    <span class="w3-white w3-padding-large">Caption text</span>
                </div>
            </div>
            <button class="w3-button w3-light-grey noselection w3-display-left" onclick="plusDivs(-1)">❯</button>
            <button class="w3-button w3-light-grey noselection w3-display-right" onclick="plusDivs(+1)">❮</button>
        </div>

        <hr>
        <h2>Manual Slideshow</h2>
        <p>Displaying a manual slideshow with W3.CSS is very easy.</p>
        <p>Just create many elements with the same class name:</p>
        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_snowtops.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_lights.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_mountains.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_forest.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            </div>
        </div>

        <p>And two buttons to scroll the images:
        </p><div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-display-left"</span>&nbsp;onclick<span class="attributevaluecolor" style="color:mediumblue">="plusDivs(-1)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;#10094;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-display-right"</span>&nbsp;onclick<span class="attributevaluecolor" style="color:mediumblue">="plusDivs(+1)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;#10095;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            </div>
        </div>

        <p>And add a JavaScript to select images:
        </p><div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
</span> <span class="jskeywordcolor" style="color:mediumblue">var</span> slideIndex = <span class="jsnumbercolor" style="color:red">1</span>;<br>showDivs(slideIndex);<br><br><span class="jskeywordcolor" style="color:mediumblue">function</span> plusDivs(n) {<br>&nbsp;&nbsp;showDivs(slideIndex <span class="jsnumbercolor" style="color:red">
</span> += n);<br>}<br><br><span class="jskeywordcolor" style="color:mediumblue">function</span> showDivs(n) {<br>&nbsp; <span class="jsnumbercolor" style="color:red">
</span> <span class="jskeywordcolor" style="color:mediumblue">var</span> i;<br>&nbsp; <span class="jskeywordcolor" style="color:mediumblue">var</span> x = document.<span class="jspropertycolor" style="color:black">getElementsByClassName</span>(<span class="jsstringcolor" style="color:brown">"mySlides"</span>);<br>&nbsp; <span class="jskeywordcolor" style="color:mediumblue">if</span> <span class="jsnumbercolor" style="color:red">
</span> (n &gt; x.<span class="jspropertycolor" style="color:black">length</span>) {slideIndex = <span class="jsnumbercolor" style="color:red">1</span>} <br>&nbsp; <span class="jskeywordcolor" style="color:mediumblue">if</span> (n &lt; <span class="jsnumbercolor" style="color:red">1</span>) {slideIndex = <span class="jsnumbercolor" style="color:red">
</span> x.<span class="jspropertycolor" style="color:black">length</span>} ;<br>&nbsp; <span class="jskeywordcolor" style="color:mediumblue">for</span> (i = <span class="jsnumbercolor" style="color:red">0</span>; i &lt; x.<span class="jspropertycolor" style="color:black">length</span>; i++) {<br>&nbsp;&nbsp;&nbsp;&nbsp;x[i].<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> = <span class="jsstringcolor" style="color:brown">"none"</span>; <br><span class="jsnumbercolor" style="color:red">
</span>  &nbsp;&nbsp;}<br>&nbsp; <span class="jsnumbercolor" style="color:red">
</span> x[slideIndex-<span class="jsnumbercolor" style="color:red">1</span>].<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> = <span class="jsstringcolor" style="color:brown">"block"</span>; <br>}<br><span class="jsnumbercolor" style="color:red">
</span> </span></div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_self" target="_blank">Try It Yourself »</a>
        </div>

        <h3>JavaScript Explained</h3>
        <p>First, set the <strong>slideIndex</strong> to 1. (First picture)</p>
        <p>Then call <strong>showDivs()</strong> to display the first image.</p>
        <p>When the user clicks one of the buttons call <strong>plusDivs()</strong>.</p>
        <p>The plusDivs() function <strong>subtracts</strong> one or&nbsp; <strong>adds</strong>
            one to the slideIndex.</p>
        <p>The <strong>showDiv()</strong> function hides (<strong>display="none"</strong>)
            all elements with the class name "mySlides", and displays (<strong>display="block"</strong>)
            the element with the given slideIndex. </p>
        <p>If the slideIndex is <strong>higher than</strong> the number of elements (x.length),
            the slideIndex is set to zero.</p>
        <p class="tags">If the slideIndex is <strong>less than</strong> 1 it is set to number of elements
            (x.length).</p>
        <hr>

        <h2>Automatic Slideshow</h2>

        <div class="w3-content w3-section" style="max-width:1000px">
            <img class="mySlides6" src="images/img_la.jpg" style="width: 100%; display: none;">
            <img class="mySlides6" src="images/img_ny.jpg" style="width: 100%; display: none;">
            <img class="mySlides6" src="images/img_chicago.jpg" style="width: 100%; display: block;">
        </div>

        <p>To display an automatic slideshow is even simpler.</p>
        <p>You only need a little different
            JavaScript: </p>
        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
</span> <span class="jskeywordcolor" style="color:mediumblue">var</span> slideIndex = <span class="jsnumbercolor" style="color:red">0</span>;<br>carousel();<br><br><span class="jskeywordcolor" style="color:mediumblue">function</span> carousel() {<br>&nbsp; <span class="jsnumbercolor" style="color:red">
</span> <span class="jskeywordcolor" style="color:mediumblue">var</span> i;<br>&nbsp; <span class="jskeywordcolor" style="color:mediumblue">var</span> x = document.<span class="jspropertycolor" style="color:black">getElementsByClassName</span>(<span class="jsstringcolor" style="color:brown">"mySlides"</span>);<br>&nbsp;&nbsp;<span class="jskeywordcolor" style="color:mediumblue">for</span> (i = <span class="jsnumbercolor" style="color:red">0</span>; i &lt; x.<span class="jspropertycolor" style="color:black">length</span>; i++) {<br><span class="jsnumbercolor" style="color:red">
</span>  &nbsp;&nbsp;&nbsp; x[i].<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> <span class="jsnumbercolor" style="color:red">
</span> = <span class="jsstringcolor" style="color:brown">"none"</span>; <br>&nbsp;&nbsp;}<br>&nbsp; slideIndex++;<br>&nbsp; <span class="jsnumbercolor" style="color:red">
</span> <span class="jskeywordcolor" style="color:mediumblue">if</span> (slideIndex &gt; x.<span class="jspropertycolor" style="color:black">length</span>) {slideIndex = <span class="jsnumbercolor" style="color:red">1</span>} <br>&nbsp; <span class="jsnumbercolor" style="color:red">
</span> x[slideIndex-<span class="jsnumbercolor" style="color:red">1</span>].<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> = <span class="jsstringcolor" style="color:brown">"block"</span>; <br>&nbsp;&nbsp;setTimeout(carousel, <span class="jsnumbercolor" style="color:red">
</span> <span class="jsnumbercolor" style="color:red">2000</span>); <span class="commentcolor" style="color:green">// Change image every 2 seconds<br></span>}<br><span class="jsnumbercolor" style="color:red">
</span> </span></div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_rr" target="_blank">
                Try It Yourself »</a>
        </div>
        <hr>
        <h2>HTML Slides</h2>
        <p>The slides do not have to be images.</p>
        <p>They can be any HTML content:</p>

        <div class="mySlides7 w3-container w3-red w3-center" style="display: block;">
            <h1><b>Slide 1</b></h1>
            <h1><i>Lorem ipsum</i></h1>
        </div>

        <div class="mySlides7 w3-container w3-teal w3-center" style="display: none;">
            <h1><b>Slide 2</b></h1>
            <h1><i>Lorem ipsum</i></h1>
        </div>

        <div class="mySlides7 w3-container w3-blue w3-center" style="display: none;">
            <h1><b>Slide 3</b></h1>
            <h1><i>Lorem ipsum</i></h1>
        </div>


        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>b<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Did You Know?<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/b<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>i<span class="tagcolor" style="color:mediumblue">&gt;</span></span>We plan to sell trips to the
                moon in the 2020s<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/i<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_auto" target="_blank">
                Try It Yourself »</a>
        </div>
        <hr>

        <h2>Slideshow Caption</h2>

        <div class="w3-content w3-display-container" style="max-width:800px;">

            <div class="w3-display-container mySlides2" style="display: block;">
                <img src="images/img_snowtops.jpg" style="width:100%">
                <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                    Snow, Norway
                </div>
            </div>

            <div class="w3-display-container mySlides2" style="display: none;">
                <img src="images/img_lights.jpg" style="width:100%">
                <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
                    Northern Lights, Norway
                </div>
            </div>

            <div class="w3-display-container mySlides2" style="display: none;">
                <img src="images/img_mountains.jpg" style="width:100%">
                <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
                    Beautiful Mountains
                </div>
            </div>

            <div class="w3-display-container mySlides2" style="display: none;">
                <img src="images/img_forest.jpg" style="width:100%">
                <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
                    The Rain Forest
                </div>
            </div>

            <div class="w3-display-container mySlides2" style="display: none;">
                <img src="images/img_mountains.jpg" style="width:100%">
                <div class="w3-display-middle w3-padding-large w3-xxlarge w3-container w3-black w3-text-white">
                    Mountains!
                </div>
            </div>

            <button class="w3-button w3-black w3-display-left noselection" onclick="plusDivsnew(-1)">❯</button>
            <button class="w3-button w3-black w3-display-right noselection" onclick="plusDivsnew(1)">❮</button>
        </div>

        <p>Add a caption text for each image slide with the <strong>w3-display-*</strong>
            classes (topleft, topmiddle, topright, bottomleft, bottommiddle, bottomright,
            left, right or middle):</p>
        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-container mySlides"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_snowtops.jpg"</span>
style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-bottomleft w3-container
w3-padding-16 w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; French Alps<br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_caption" target="_blank">Try It Yourself »</a>
        </div>
        <hr>

        <h2>Slideshow Indicators</h2>
        <p>An example of using buttons to indicate how many slides there are in the slideshow, and which slide the user is currently viewing.</p>
        <div class="w3-content" style="max-width:1000px">
            <img class="mySlides3" src="images/img_nature_wide.jpg" style="width: 100%; display: block;">
            <img class="mySlides3" src="images/img_snow_wide.jpg" style="width: 100%; display: none;">
            <img class="mySlides3" src="images/img_mountains_wide.jpg" style="width: 100%; display: none;">
        </div>

        <div class="w3-center">
            <div class="w3-section">
                <button class="w3-button w3-light-grey" onclick="plusDivs3(-1)">❮ Prev</button>
                <button class="w3-button w3-light-grey" onclick="plusDivs3(1)">Next ❯</button>
            </div>
            <button class="w3-button demo w3-red" onclick="currentDiv(1)">1</button>
            <button class="w3-button demo" onclick="currentDiv(2)">2</button>
            <button class="w3-button demo" onclick="currentDiv(3)">3</button>
        </div>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="plusDivs(-1)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;#10094;
                Prev<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="plusDivs(1)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Next
                &amp;#10095;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button demo"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="currentDiv(1)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
                <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button demo"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="currentDiv(2)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
                <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button demo"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="currentDiv(3)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
                <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_dots" target="_blank">Try It Yourself »</a>
        </div>

        <p>Another example:</p>
        <div class="w3-content w3-display-container noselection" style="max-width:1000px">
            <img class="mySlides4" src="images/img_nature_wide.jpg" style="width: 100%; display: block;">
            <img class="mySlides4" src="images/img_snow_wide.jpg" style="width: 100%; display: none;">
            <img class="mySlides4" src="images/img_mountains_wide.jpg" style="width: 100%; display: none;">
            <div class="w3-center w3-container w3-section w3-xlarge w3-text-white w3-display-bottomleft" style="width:100%">
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs4(-1)">❯</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs4(1)">❮</div>
                <span class="w3-badge demo4 w3-border w3-hover-white w3-white" onclick="currentDiv4(1)"></span>
                <span class="w3-badge demo4 w3-border w3-hover-white" onclick="currentDiv4(2)"></span>
                <span class="w3-badge demo4 w3-border w3-hover-white" onclick="currentDiv4(3)"></span>
            </div>
        </div>
        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-content w3-display-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides"</span>
src<span class="attributevaluecolor" style="color:mediumblue">="img_nature.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_snowtops.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_mountains.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-center w3-display-bottommiddle"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-left"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="plusDivs(-1)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;#10094;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-right"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="plusDivs(1)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;#10095;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge demo w3-border"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="currentDiv(1)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge demo w3-border"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="currentDiv(2)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge demo w3-border"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="currentDiv(3)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_dots2" target="_blank">Try It Yourself »</a>
        </div>
        <hr>

        <h2>Images as Indicators</h2>
        <p>An example of using images as indicators:</p>
        <div class="w3-content" style="max-width:1000px">
            <img class="mySlides5" src="images/img_nature_wide.jpg" style="width: 100%; display: block;">
            <img class="mySlides5" src="images/img_snow_wide.jpg" style="width: 100%; display: none;">
            <img class="mySlides5" src="images/img_mountains_wide.jpg" style="width: 100%; display: none;">

            <div class="w3-row-padding w3-section" style="margin:0 -16px">
                <div class="w3-col s4">
                    <img class="demo5 w3-opacity w3-hover-opacity-off w3-opacity-off" src="images/img_nature_wide.jpg" style="width:100%" onclick="currentDiv5(1)">
                </div>
                <div class="w3-col s4">
                    <img class="demo5 w3-opacity w3-hover-opacity-off" src="images/img_snow_wide.jpg" style="width:100%" onclick="currentDiv5(2)">
                </div>
                <div class="w3-col s4">
                    <img class="demo5 w3-opacity w3-hover-opacity-off" src="images/img_mountains_wide.jpg" style="width:100%" onclick="currentDiv5(3)">
                </div>
            </div>
        </div>
        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-content"</span> style<span class="attributevaluecolor" style="color:mediumblue">="max-width:1200px"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides"</span>
src<span class="attributevaluecolor" style="color:mediumblue">="img_nature_wide.jpg"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides"</span>
src<span class="attributevaluecolor" style="color:mediumblue">="img_snow_wide.jpg"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides"</span>
src<span class="attributevaluecolor" style="color:mediumblue">="img_mountains_wide.jpg"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-row-padding w3-section"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col
s4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="demo w3-opacity"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_nature_wide.jpg"</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="currentDiv(1)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col s4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="demo
w3-opacity"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_snow_wide.jpg"</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  style<span class="attributevaluecolor" style="color:mediumblue">="width:100%;display:none"</span>
onclick<span class="attributevaluecolor" style="color:mediumblue">="currentDiv(2)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col s4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="demo
w3-opacity"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_mountains_wide.jpg"</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  style<span class="attributevaluecolor" style="color:mediumblue">="width:100%;display:none"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="currentDiv(3)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_imgdots" target="_blank">Try It Yourself »</a>
        </div>

        <hr>
        <h2>Multiple Slideshows on the Same Page</h2>
        <p>To operate multiple slideshows on one page, you must class the members of
            each slideshow group with different classes:</p>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-content"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides1"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_snowtops.jpg"</span>
  style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides1"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_lights.jpg"</span>
  style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides1"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_mountains.jpg"</span>
  style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides1"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_forest.jpg"</span>
  style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-content"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="mySlides2"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_la.jpg"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="mySlides2"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_ny.jpg"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="mySlides2"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_chicago.jpg"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_two" target="_blank">Try It Yourself »</a>
        </div>

        <hr>
        <h2>Animated Slides</h2>
        <p>Slide or fade in an element from the top, bottom, left or right of the screen with the w3-animate-* classes.</p>
        <div class="w3-content w3-section" style="max-width:600px">
            <img class="myRover w3-animate-top" src="images/img_rr_01.jpg" style="width: 100%; display: block;">
            <img class="myRover w3-animate-top" src="images/img_rr_03.jpg" style="width: 100%; display: none;">
            <img class="myRover w3-animate-bottom" src="images/img_rr_04.jpg" style="width: 100%; display: none;">
        </div>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides w3-animate-top"</span>&nbsp;&nbsp;&nbsp; src<span class="attributevaluecolor" style="color:mediumblue">="img_01.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides
 w3-animate-bottom"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_02.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides w3-animate-top"</span>&nbsp;&nbsp;&nbsp; src<span class="attributevaluecolor" style="color:mediumblue">="img_03.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides w3-animate-bottom"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_04.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_animated" target="_blank">Try It Yourself »</a>
        </div>

        <hr>
        <h2>Faded Animation</h2>

        <p class="tags">The <strong>w3-animate-fading</strong> class fades an element in and out (takes about 10 seconds).</p>

        <div class="w3-content w3-section" style="max-width:500px">

            <img class="myFading w3-animate-fading" src="images/img_rr_01.jpg" style="width: 100%; display: block;">
            <img class="myFading w3-animate-fading" src="images/img_rr_03.jpg" style="width: 100%; display: none;">
            <img class="myFading w3-animate-fading" src="images/img_rr_04.jpg" style="width: 100%; display: none;">

        </div>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides w3-animate-fading"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_01.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides
 w3-animate-fading"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_02.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides
 w3-animate-fading"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_03.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="mySlides
 w3-animate-fading"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_04.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_fading" target="_blank">Try It Yourself »</a>
        </div>

        <br>
        <div class="w3-clear nextprev">
            <a href="modal.php" class="w3-right next w3-btn w3-green">Modal »</a>
            <a href="progressbar.php" class="w3-left next w3-btn w3-green">« Progress Bars</a>
        </div>

        <script>
            // First automatic slideshow (band photos)
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides6");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}
                x[myIndex-1].style.display = "block";
                setTimeout(carousel, 2000);
            }

            // Second automatic slideshow (html slides)
            var slideIndex = 0;
            carousel2();

            function carousel2() {
                var i;
                var x = document.getElementsByClassName("mySlides7");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > x.length) {slideIndex = 1}
                x[slideIndex-1].style.display = "block";
                setTimeout(carousel2, 3000);
            }

            // First manual slideshow
            var slideIndexMan = 1;
            showDivs(slideIndexMan);

            function plusDivs(n) {
                showDivs(slideIndexMan += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {slideIndexMan = 1}
                if (n < 1) {slideIndexMan = x.length}
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndexMan-1].style.display = "block";
            }
            showDivs(1);

            // With captions
            var slideIndexCap = 1;

            function plusDivsnew(n) {
                slideIndexCap = slideIndexCap + n;
                showDivsnew(slideIndexCap);
            }

            function showDivsnew(n) {
                var x = document.getElementsByClassName("mySlides2");
                if (n > x.length) {slideIndexCap = 1}
                if (n < 1) {slideIndexCap = x.length} ;
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndexCap-1].style.display = "block";
            }

            showDivsnew(1);

            // Dots with next/prev buttons and red active buttons
            var slideActiveBtn = 1;
            showDivs3(slideActiveBtn);

            function plusDivs3(n) {
                showDivs3(slideActiveBtn += n);
            }

            function currentDiv(n) {
                showDivs3(slideActiveBtn = n);
            }

            function showDivs3(n) {
                var i;
                var x = document.getElementsByClassName("mySlides3");
                var dots = document.getElementsByClassName("demo");
                if (n > x.length) {slideActiveBtn = 1}
                if (n < 1) {slideActiveBtn = x.length} ;
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" w3-red", "");
                }
                x[slideActiveBtn-1].style.display = "block";
                dots[slideActiveBtn-1].className += " w3-red";
            }

            // Dots with next/prev arrows and white active badges
            var slideBadge = 1;
            showDivs4(slideBadge);

            function plusDivs4(n) {
                showDivs4(slideBadge += n);
            }

            function currentDiv4(n) {
                showDivs4(slideBadge = n);
            }

            function showDivs4(n) {
                var i;
                var x = document.getElementsByClassName("mySlides4");
                var dots = document.getElementsByClassName("demo4");
                if (n > x.length) {slideBadge = 1}
                if (n < 1) {slideBadge = x.length} ;
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" w3-white", "");
                }
                x[slideBadge-1].style.display = "block";
                dots[slideBadge-1].className += " w3-white";
            }

            // Img indicators
            var slideImgInd = 1;
            showDivs5(slideImgInd);

            function plusDivs5(n) {
                showDivs5(slideImgInd += n);
            }

            function currentDiv5(n) {
                showDivs5(slideImgInd = n);
            }

            function showDivs5(n) {
                var i;
                var x = document.getElementsByClassName("mySlides5");
                var dots = document.getElementsByClassName("demo5");
                if (n > x.length) {slideImgInd = 1}
                if (n < 1) {slideIndex = x.length} ;
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                }
                x[slideImgInd-1].style.display = "block";
                dots[slideImgInd-1].className += " w3-opacity-off";
            }

            // Range rovers automatic animations
            var RoverIndex = 0;
            RoverCarousel();

            function RoverCarousel() {
                var i;
                var x = document.getElementsByClassName("myRover");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                RoverIndex++;
                if (RoverIndex > x.length) {RoverIndex = 1}
                x[RoverIndex-1].style.display = "block";
                setTimeout(RoverCarousel, 3000);
            }

            // Range rover fading animate
            var fadeRover = 0;
            fadeCarousel();

            function fadeCarousel() {
                var i;
                var x = document.getElementsByClassName("myFading");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                fadeRover++;
                if (fadeRover > x.length) {fadeRover = 1}
                x[fadeRover-1].style.display = "block";
                setTimeout(fadeCarousel, 9000);
            }
        </script>

    </div>


