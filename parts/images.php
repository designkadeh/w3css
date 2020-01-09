<div>

    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Images</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="inputs.php" class="w3-right next w3-btn w3-green w3-green">Inputs »</a>
            <a href="lists" class="w3-left next w3-btn w3-green w3-green">« Lists</a>
            <br/><br/><br/>
        </div>
    </div><hr/>

    <div class="w3-row-padding" style="margin-left:-16px;margin-right:-16px;">
        <div class="w3-quarter">
            <p>Rounded:</p>
            <img src="images/img_lights.jpg" class="w3-round testsm" alt="Northern Lights" style="width:85%">
        </div>
        <div class="w3-quarter">
            <p>Circle:</p>
            <img src="images/img_forest.jpg" class="w3-circle testsm" alt="Forest" style="width:85%">
        </div>
        <div class="w3-quarter">
            <p>Bordered:</p>
            <img src="images/img_mountains.jpg" class="testsm w3-hover-opacity w3-border" alt="Mountains" style="padding:4px;width:85%">
        </div>
        <div class="w3-quarter">
            <p>Text:</p>
            <div class="w3-display-container">
                <img src="images/img_nature.jpg" alt="Nature" style="width:85%" class="w3-card-4 testsm">
                <div class="w3-display-bottomleft w3-text-white w3-container w3-padding" style="width:85%">Nature</div>
            </div>
        </div>
    </div>
    <div style="clear:both;margin-bottom:28px;"></div>
    <hr>

    <h2>Rounded Image</h2>
    <img src="images/img_snowtops.jpg" class="w3-round" alt="Norway" style="width:35%">
    <p>The <strong>w3-round</strong> class adds rounded corners to an image:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_snowtops.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-round"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Norway"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_images_round" target="_blank">
            Try It Yourself »</a>
    </div>

    <hr>
    <h2>Circled Image</h2>
    <img src="images/img_snowtops.jpg" class="w3-circle" alt="Norway" style="width:35%">
    <p>The <strong>w3-circle</strong> class shapes an image to a circle:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="snowtops.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-circle"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Alps"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_images_circle" target="_blank">
            Try It Yourself »</a>
    </div>
    <hr>

    <h2>Bordered Image</h2>
    <img src="images/img_snowtops.jpg" class="w3-border" alt="Norway" style="padding:4px;width:40%">
    <p>The <strong>w3-border</strong> class adds borders around the image:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="snowtops.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-border w3-padding"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Alps"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_images_border" target="_blank">
            Try It Yourself »</a>
    </div>
    <hr>

    <h2>Image as a Card</h2>
    <p>Wrap any of the <strong>w3-card-*</strong> classes around the &lt;img&gt; element to display it as a card
        (add shadows):</p>

    <div class="w3-row">
        <div class="w3-half">
            <div class="w3-card-4 test" style="width:90%">
                <img src="images/img_lights.jpg" alt="Lights" style="width:100%">
            </div>
            <br>
        </div>
        <div class="w3-half">
            <div class="w3-card-4 test" style="width:60%">
                <img src="images/img_avatar3.png" alt="Person" style="width:100%">
                <div class="w3-container">
                    <h4><b>Simon</b></h4>
                    <p>The boss of all bosses</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-card-4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_avatar.png"</span>
alt<span class="attributevaluecolor" style="color:mediumblue">="Person"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_images_card" target="_blank">
            Try It Yourself »</a>
    </div>

    <hr>
    <h2>Image Text</h2>
    <p>Position the text in an image with the <strong>w3-display-</strong><em><strong>classes</strong></em>:</p>
    <div class="w3-display-container w3-text-white">
        <img src="images/img_lights.jpg" alt="Lights" style="width:100%;height:300px">
        <div class="w3-display-topleft w3-container"><p>Top Left</p></div>
        <div class="w3-display-topright w3-container"><p>Top Right</p></div>
        <div class="w3-display-bottomleft w3-container"><p>Bottom Left</p></div>
        <div class="w3-display-bottomright w3-container"><p>Bottom Right</p></div>
        <div class="w3-display-left w3-container"><p>Left</p></div>
        <div class="w3-display-right w3-container"><p>Right</p></div>
        <div class="w3-display-middle w3-large">Middle</div>
        <div class="w3-display-topmiddle w3-container"><p>Top Middle</p></div>
        <div class="w3-display-bottommiddle w3-container"><p>Bottom Middle</p></div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_lights.jpg"</span>
alt<span class="attributevaluecolor" style="color:mediumblue">="Lights"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-topleft w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Top
            Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-topright w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Top
            Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-bottomleft w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bottom
            Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-bottomright w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bottom
            Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-left w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-right w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-middle w3-large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Middle<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-topmiddle w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Top Middle<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-bottommiddle w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bottom Middle<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_images_text" target="_blank">
            Try It Yourself »</a>
    </div>
    <hr>

    <h2>Responsive Images</h2>
    <p>An image can be set to automatically resize itself to fit the size of its container.</p>
    <p>If you want the image to scale down if it has to, but never scale up to be
        larger than its original size, use the w3-image class.</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_lights.jpg"</span>
alt<span class="attributevaluecolor" style="color:mediumblue">="Lights"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-image"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_images_w3image" target="_blank">Try It Yourself »</a>
    </div>

    <p>If you want the image to scale both up and down on responsiveness, set the
        CSS width property to 100%:</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_lights.jpg"</span>
alt<span class="attributevaluecolor" style="color:mediumblue">="Lights"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_images_responsive" target="_blank">Try It Yourself »</a>
    </div>

    <p>If you want to restrict a responsive image to a maximum size, use the max-width property:</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_lights.jpg"</span>
alt<span class="attributevaluecolor" style="color:mediumblue">="Lights"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%;max-width:400px"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_images_max" target="_blank">Try It Yourself »</a>
    </div>
    <hr>
    <h2>Opacity</h2>
    <p>The <strong>w3-opacity</strong> classes make images transparent:</p>
    <div class="w3-row-padding" style="margin:0 -16px">

        <div class="w3-quarter w3-center">
            <img src="images/img_forest.jpg" style="width:100%">
            <p>Normal</p>
        </div>

        <div class="w3-quarter w3-center">
            <img src="images/img_forest.jpg" class="w3-opacity-min" style="width:100%;">
            <p>w3-opacity-min</p>
        </div>


        <div class="w3-quarter w3-center">
            <img src="images/img_forest.jpg" class="w3-opacity" style="width:100%;">
            <p>w3-opacity</p>
        </div>

        <div class="w3-quarter w3-center">
            <img src="images/img_forest.jpg" class="w3-opacity-max" style="width:100%;">
            <p>w3-opacity-max</p><p>
            </p></div>

    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_forest.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Forest"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-opacity-min"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_forest.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Forest"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-opacity"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_forest.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Forest"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-opacity-max"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_images_opacity" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Grayscale</h2>
    <p>The <strong>w3-grayscale</strong> classes add a grayscale effect to an image:</p>
    <div class="w3-row-padding" style="margin:0 -16px">

        <div class="w3-quarter w3-center">
            <img src="images/img_workshop.jpg" style="width:100%">
            <div class="w3-center w3-container">
                <p>Normal</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-grayscale-min">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-container">
                <p>w3-grayscale-min</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-grayscale">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-container">
                <p>w3-grayscale</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-grayscale-max">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-container">
                <p>w3-grayscale-max</p><p>
                </p></div>
        </div>

    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Table"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-grayscale-min"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Table"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-grayscale"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Table"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-grayscale-max"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_images_grayscale" target="_blank">Try It Yourself »</a>
    </div>

    <div class="w3-note w3-panel">
        <p><strong>Note:</strong> The w3-grayscale classes are not supported in IE 11
            and earlier versions.</p>
    </div>
    <hr>

    <h2>Sepia</h2>
    <p>The <strong>w3-sepia</strong> classes add a sepia effect to an image:</p>
    <div class="w3-row-padding" style="margin:0 -16px">

        <div class="w3-quarter w3-center">
            <img src="images/img_workshop.jpg" style="width:100%">
            <div class="w3-center w3-container">
                <p>Normal</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-sepia-min">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-container">
                <p>w3-sepia-min</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-sepia">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-container">
                <p>w3-sepia</p>
            </div>
        </div>

        <div class="w3-quarter w3-center w3-sepia-max">
            <img src="images/img_workshop.jpg" style="width:100%;">
            <div class="w3-center w3-container">
                <p>w3-sepia-max</p><p>
                </p></div>
        </div>

    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Table"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sepia-min"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Table"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sepia"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Table"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sepia-max"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_images_sepia" target="_blank">Try It Yourself »</a>
    </div>

    <div class="w3-note w3-panel">
        <p><strong>Note:</strong> The w3-sepia classes are not supported in IE 11 and
            earlier versions.</p>
    </div>
    <hr>

    <h2>Hover Effects</h2>
    <p>You can also add special effects on hover/mouse-over.</p>
    <div class="w3-row-padding" style="margin:0 -16px">

        <div class="w3-third w3-center w3-hover-opacity">
            <img src="images/streetart2.jpg" alt="Norway" style="width:100%;margin-bottom:-9px">
            <div class="w3-center w3-container">
                <p>w3-hover-opacity</p>
            </div>
        </div>

        <div class="w3-third w3-center w3-hover-grayscale">
            <img src="images/streetart2.jpg" alt="Norway" style="width:100%;margin-bottom:-9px">
            <div class="w3-center w3-container">
                <p>w3-hover-grayscale</p>
            </div>
        </div>


        <div class="w3-third w3-center w3-hover-sepia">
            <img src="images/streetart2.jpg" alt="Norway" style="width:100%;margin-bottom:-9px">
            <div class="w3-center w3-container">
                <p>w3-hover-sepia</p>
            </div>
        </div>

    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Einstein"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hover-opacity"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Einstein"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hover-grayscale"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="image.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Einstein"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hover-sepia"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_images_hover_eff" target="_blank">
            Try It Yourself »</a>
    </div>
    <hr>

    <h2>Opacity Off</h2>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
            <p>Add transparency on hover:</p>
            <img src="images/img_snow_wide.jpg" class="w3-hover-opacity" alt="Norway" style="width:100%">
        </div>
        <div class="w3-half">
            <p>Remove transparency on hover:</p>
            <img src="images/img_snow_wide.jpg" class="w3-opacity w3-hover-opacity-off" alt="Norway" style="width:100%">
        </div>
    </div>

    <p>The <strong>w3-hover-opacity</strong> class adds transparency to the image on mouse-over, and the
        <strong>w3-hover-opacity-off</strong> class removes transparency on mouse-over.</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="snowtops.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hover-opacity"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Alps"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="snowtops.jpg"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-opacity w3-hover-opacity-off"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Alps"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_images_hover" target="_blank">
            Try It Yourself »</a>
    </div>
    <hr>

    <h2>Constructing a Photo Album</h2>
    <p>In this example we use the W3.CSS Responsive Grid system to create a photo album that looks good on all devices.
        You will learn more about this later.</p>

    <div class="w3-container w3-theme">
        <h1>Summer 2015</h1>
    </div>

    <div class="w3-row-padding w3-margin-top">
        <div class="w3-third">
            <div class="w3-card">
                <img src="images/img_5terre.jpg" style="width:100%">
                <div class="w3-container">
                    <h4>5 Terre</h4>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="images/img_monterosso.jpg" style="width:100%">
                <div class="w3-container">
                    <h4>Monterosso</h4>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="images/img_vernazza.jpg" style="width:100%">
                <div class="w3-container">
                    <h4>Vernazza</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-row-padding w3-margin-top">
        <div class="w3-third">
            <div class="w3-card">
                <img src="images/img_manarola.jpg" style="width:100%">
                <div class="w3-container">
                    <h4>Manarola</h4>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="images/img_corniglia.jpg" style="width:100%">
                <div class="w3-container">
                    <h4>Corniglia</h4>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="images/img_riomaggiore.jpg" style="width:100%">
                <div class="w3-container">
                    <h4>Riomaggiore</h4>
                </div>
            </div>
        </div>
        <br>

    </div>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-third"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-card"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_monterosso.jpg"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
 class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h4<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Monterosso<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h4<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_images_album" target="_blank">
            Try It Yourself »</a>
    </div>

    <br>
    <div class="w3-clear nextprev">
        <a href="inputs.php" class="w3-right next w3-btn w3-green w3-green">Inputs »</a>
        <a href="lists" class="w3-left next w3-btn w3-green w3-green">« Lists</a>
    </div>
</div>