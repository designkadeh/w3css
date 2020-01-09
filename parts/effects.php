<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Effects</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="bars.php" class="w3-right next w3-btn w3-green w3-green">Bars »</a>
            <a href="animations.php" class="w3-left next w3-btn w3-green w3-green">« Animations</a>
            <br/><br/><br/>
        </div>
    </div><hr/>

    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-quarter w3-center">
            <img src="images/img_workshop.jpg" style="width:100%">
            <div class="w3-center w3-red w3-container">
                <p>Normal</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-opacity">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-red w3-container">
                <p>w3-opacity</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-grayscale-max">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-red w3-container">
                <p>w3-grayscale-max</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-sepia-max">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-red w3-container">
                <p>w3-sepia-max</p><p>
                </p></div>
        </div>

    </div>
    <hr>

    <h2>W3.CSS Effect Classes</h2>
    <p>W3.CSS provides the following effects classes:</p>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tbody><tr>
            <th style="width:30%">Class</th>
            <th>Defines</th>
        </tr>
        <tr>
            <td>w3-opacity</td>
            <td>Adds opacity/transparency to an element (opacity: 0.6)</td>
        </tr>
        <tr>
            <td>w3-opacity-min</td>
            <td>Adds opacity/transparency to an element (opacity: 0.75)</td>
        </tr>
        <tr>
            <td>w3-opacity-max</td>
            <td>Adds opacity/transparency to an element (opacity: 0.25)</td>
        </tr>
        <tr>
            <td>w3-grayscale</td>
            <td>Adds a grayscale effect to an element (grayscale: 75%)</td>
        </tr>
        <tr>
            <td>w3-grayscale-min</td>
            <td>Adds a grayscale effect to an element (grayscale: 50%)</td>
        </tr>
        <tr>
            <td>w3-grayscale-max</td>
            <td>Adds a grayscale effect to an element (grayscale: 100%)</td>
        </tr>
        <tr>
            <td>w3-sepia</td>
            <td>Adds a sepia effect to an element (sepia: 75%)</td>
        </tr>
        <tr>
            <td>w3-sepia-min</td>
            <td>Adds a sepia effect to an element (sepia: 50%)</td>
        </tr>
        <tr>
            <td>w3-sepia-max</td>
            <td>Adds a sepia effect to an element (sepia: 100%)</td>
        </tr>
        <tr>
            <td>w3-hover-opacity</td>
            <td>Adds transparency to an element on hover (opacity: 0.6)</td>
        </tr>
        <tr>
            <td>w3-hover-grayscale</td>
            <td>Adds a grayscale effect to an element on hover (grayscale: 100%)</td>
        </tr>
        <tr>
            <td>w3-hover-sepia</td>
            <td>Adds a sepia effect to an element on hover</td>
        </tr>
        </tbody></table>
    <hr>

    <h2>Opacity</h2>
    <p>The <strong>w3-opacity</strong> classes add transparency to an element:</p>
    <div class="w3-row-padding" style="margin:0 -16px">

        <div class="w3-quarter w3-center">
            <img src="images/img_workshop.jpg" style="width:100%">
            <div class="w3-center w3-red w3-container">
                <p>Normal</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-opacity-min">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-red w3-container">
                <p>w3-opacity-min</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-opacity">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-red w3-container">
                <p>w3-opacity</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-opacity-max">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-red w3-container">
                <p>w3-opacity-max</p><p>
                </p></div>
        </div>

    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-opacity-min"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-opacity"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-opacity-max"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_effects_opacity2" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Grayscale</h2>
    <p>The <strong>w3-grayscale</strong> classes add a grayscale effect to an element:</p>
    <div class="w3-row-padding" style="margin:0 -16px">

        <div class="w3-quarter w3-center">
            <img src="images/img_workshop.jpg" style="width:100%">
            <div class="w3-center w3-red w3-container">
                <p>Normal</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-grayscale-min">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-red w3-container">
                <p>w3-grayscale-min</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-grayscale">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-red w3-container">
                <p>w3-grayscale</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-grayscale-max">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-red w3-container">
                <p>w3-grayscale-max</p><p>
                </p></div>
        </div>

    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-grayscale-min"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-grayscale"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-grayscale-max"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_effects_grayscale" target="_blank">Try It Yourself »</a>
    </div>

    <div class="w3-note w3-yellow w3-panel">
        <p><strong>Note:</strong> The w3-grayscale classes are not supported in IE 11
            and earlier versions.</p>
    </div>
    <hr>

    <h2>Sepia</h2>
    <p>The <strong>w3-sepia</strong> classes add a sepia effect to an element:</p>
    <div class="w3-row-padding" style="margin:0 -16px">

        <div class="w3-quarter w3-center">
            <img src="images/img_workshop.jpg" style="width:100%">
            <div class="w3-center w3-red w3-container">
                <p>Normal</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-sepia-min">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-red w3-container">
                <p>w3-sepia-min</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-sepia">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-red w3-container">
                <p>w3-sepia</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-sepia-max">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-red w3-container">
                <p>w3-sepia-max</p><p>
                </p></div>
        </div>

    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sepia-min"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sepia"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sepia-max"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_effects_sepia" target="_blank">Try It Yourself »</a>
    </div>

    <div class="w3-note w3-yellow w3-panel">
        <p><strong>Note:</strong> The w3-sepia classes are not supported in IE 11 and
            earlier versions.</p>
    </div>
    <hr>

    <h2>Hover Effects</h2>
    <p>You can also add special effects on hover/mouse-over.</p>
    <div class="w3-row-padding" style="margin:0 -16px">

        <div class="w3-third w3-center w3-hover-opacity">
            <img src="images/streetart2.jpg" alt="Norway" style="width:100%;margin-bottom:-9px">
            <div class="w3-center w3-teal w3-container">
                <p>w3-hover-opacity</p>
            </div>
        </div>

        <div class="w3-third w3-center w3-hover-grayscale">
            <img src="images/streetart2.jpg" alt="Norway" style="width:100%;margin-bottom:-9px">
            <div class="w3-center w3-teal w3-container">
                <p>w3-hover-grayscale</p>
            </div>
        </div>


        <div class="w3-third w3-center w3-hover-sepia">
            <img src="images/streetart2.jpg" alt="Norway" style="width:100%;margin-bottom:-9px">
            <div class="w3-center w3-teal w3-container">
                <p>w3-hover-sepia</p>
            </div>
        </div>

    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hover-opacity"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hover-grayscale"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hover-sepia"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_effects_hover" target="_blank">
            Try It Yourself »</a>
    </div>
    <hr>

    <h2>Hover Opacity Color</h2>
    <p>You can also combine any <strong>w3-hover-color</strong> classes with <strong>w3-hover-opacity</strong> to create a slightly "lighter" background color on hover:</p>

    <div class="w3-panel w3-border w3-hover-red w3-padding">
        <p>w3-hover-red</p>
    </div>

    <div class="w3-panel w3-border w3-hover-opacity w3-hover-red w3-padding">
        <p>w3-hover-red with w3-hover-opacity</p>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-border w3-hover-opacity w3-hover-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>w3-hover-red with w3-hover-opacity<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_effects_hover_color" target="_blank">
            Try It Yourself »</a>
    </div>

    <br>
    <div class="w3-clear nextprev">
        <a href="bars.php" class="w3-right next w3-btn w3-green w3-green">Bars »</a>
        <a href="animations.php" class="w3-left next w3-btn w3-green w3-green">« Animations</a>
    </div>
</div>