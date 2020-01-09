<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Animations</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="effects.php" class="w3-right next w3-btn w3-green w3-green">Effects »</a>
            <a href="layout.php" class="w3-left next w3-btn w3-green w3-green">« Layout</a>
            <br/><br/><br/>
        </div>
    </div><hr/>
    <div class="w3-row">
        <div class="w3-col s4">
            <button class="w3-button w3-green w3-margin-bottom" style="width:120px" onclick="startAnim('Top')">Top</button><br>
            <button class="w3-button w3-green w3-margin-bottom" style="width:120px" onclick="startAnim('Bottom')">Bottom</button><br>
            <button class="w3-button w3-green w3-margin-bottom" style="width:120px" onclick="startAnim('Left')">Left</button><br>
            <button class="w3-button w3-green w3-margin-bottom" style="width:120px" onclick="startAnim('Right')">Right</button><br>
            <button class="w3-button w3-green w3-margin-bottom" style="width:120px" onclick="startAnim('Fade')">Fade In</button><br>
            <button class="w3-button w3-green w3-margin-bottom" style="width:120px" onclick="startAnim('Zoom')">Zoom</button><br>
            <button class="w3-button w3-green w3-margin-bottom" style="width:120px" onclick="startAnim('Spin')">Spin</button>
        </div>
        <div class="w3-col s8">
            <div id="Top" class="animTest w3-animate-top" style="display: none;">Animation is Fun!</div>
            <div id="Bottom" class="animTest w3-animate-bottom" style="display: none;">Animation is Fun!</div>
            <div id="Left" class="animTest w3-animate-left" style="display: none;">Animation is Fun!</div>
            <div id="Right" class="animTest w3-animate-right" style="display: none;">Animation is Fun!</div>
            <div id="Fade" class="animTest w3-animate-opacity" style="display: none;">Animation is Fun!</div>
            <div id="Zoom" class="animTest w3-animate-zoom" style="display: none;">Animation is Fun!</div>
            <div id="Spin" class="animTest w3-spin" style="display: none;">Animation is Fun!</div>
            <div id="Normal" class="animTest " style="display: block;">Animation is Fun!</div>
        </div>
    </div>
    <hr>

    <h2>W3.CSS Animation Classes</h2>
    <p>W3.CSS provides the following classes for animations:</p>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tbody><tr>
            <th style="width:30%">Class</th>
            <th>Defines</th>
        </tr>
        <tr>
            <td>w3-animate-top</td>
            <td>Slides in an element from the top (-300px to 0)</td>
        </tr>
        <tr>
            <td>w3-animate-bottom</td>
            <td>Slides in an element from the bottom (-300px to 0)</td>
        </tr>
        <tr>
            <td>w3-animate-left</td>
            <td>Slides in an element from the left (-300px to 0)</td>
        </tr>
        <tr>
            <td>w3-animate-right</td>
            <td>Slides in an element from the right (-300px to 0)</td>
        </tr>
        <tr>
            <td>w3-animate-opacity</td>
            <td>Animates an element's opacity from 0 to 1 in 1.5 seconds</td>
        </tr>
        <tr>
            <td>w3-animate-zoom</td>
            <td>Animates an element from 0 to 100% in size</td>
        </tr>
        <tr>
            <td>w3-animate-fading</td>
            <td>Animates an element's opacity from 0 to 1 and 1 to 0 (fades in + fade out)</td>
        </tr>
        <tr>
            <td>w3-spin</td>
            <td>Spins an element 360 degrees</td>
        </tr>
        </tbody></table>
    <hr>

    <h2>Animate Top</h2>
    <p>The <strong>w3-animate-top</strong> class slides in an element from the top
        (from -300px to 0):</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-center  w3-animate-top"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Animation is Fun!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-top w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_animate-top" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Animate Bottom</h2>
    <p>The <strong>w3-animate-bottom</strong> class slides in an element from the
        bottom
        (from -300px to 0):</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-center  w3-animate-bottom"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Animation is Fun!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-top w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_animate-bottom" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Animate Left</h2>
    <p>The <strong>w3-animate-left</strong> class slides in an element from left (-300px to 0):</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-center  w3-animate-left"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Animation is Fun!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-top w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_animate-left" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Animate Right</h2>
    <p>The <strong>w3-animate-right</strong> class slides in an element from the
        right (-300px to 0):</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-center  w3-animate-right"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Animation is Fun!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-top w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_animate-right" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Fade in Elements</h2>
    <p>The <strong>w3-animate-opacity</strong> class animates an element's opacity
        from 0 to 1 in 0.8 seconds.</p>
    <p>Fade in an element with the <strong>w3-animate-opacity</strong> class:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-animate-opacity"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>..<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-top w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_animate-opacity" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Zoom in Elements</h2>
    <p>The <strong>w3-animate-zoom</strong> class animates an element from 0 to 100%
        in size.</p>
    <p>Zoom in an element with the <strong>w3-animate-zoom</strong> class:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-animate-zoom"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>..<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-top w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_animate-zoom" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Spin Elements</h2>
    <p>The <strong>w3-spin</strong> class spins an element 360 degrees:</p>
    <p>
        <i class="fa fa-spinner w3-spin" style="font-size:64px"></i>
    </p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-spin"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>..<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-top w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_animate-spin" target="_blank">Try It Yourself »</a>
    </div>

    <hr>

    <h2>Fading Infinite</h2>
    <p>The <strong>w3-animate-fading</strong> class fades in and out an element every 10 seconds (continuously):</p>
    <h3 class="w3-animate-fading w3-padding w3-dark-grey">Animate Fade In and Out</h3>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-animate-fading"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>..<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-top w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_animate_fading" target="_blank">Try It Yourself »</a>
    </div>

    <hr>

    <h2>Fade All</h2>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-animate-top"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_01.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-animate-zoom"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_02.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red">
     class<span class="attributevaluecolor" style="color:mediumblue">="w3-animate-left"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_03.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-animate-bottom"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_04.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-top w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_animate_all" target="_blank">Try It Yourself »</a>
    </div>

    <script>
        startAnim("Normal")
        function startAnim(animName) {
            var i;
            var x = document.getElementsByClassName("animTest");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(animName).style.display = "block";
        }
    </script>

    <br>
    <div class="w3-clear nextprev">
        <a href="effects.php" class="w3-right next w3-btn w3-green w3-green">Effects »</a>
        <a href="layout.php" class="w3-left next w3-btn w3-green w3-green">« Layout</a>
    </div>
</div>