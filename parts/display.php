<div class="w3-container" id="home">
    <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
    <h1 class="w3-xxxlarge w3-text-purple"><b>Display</b></h1>
    <hr class="w3-round">
    <div class="w3-container"><br/>
        <a href="buttons.php" class="w3-right next w3-btn w3-green">Buttons »</a>
        <a href="margin.php" class="w3-left next w3-btn w3-green">« Margins</a>
        <br/><br/><br/>
    </div>
</div><hr/>
<p>The display classes allow you to display HTML elements in specific positions inside other HTML elements:</p>
<div class="w3-display-container w3-green" style="height:250px;">
    <div class="w3-display-topleft w3-padding">Top Left</div>
    <div class="w3-display-topright w3-padding">Top Right</div>
    <div class="w3-display-bottomleft w3-padding">Bottom Left</div>
    <div class="w3-display-bottomright w3-padding">Bottom Right</div>
    <div class="w3-display-left w3-padding">Left</div>
    <div class="w3-display-right w3-padding">Right</div>
    <div class="w3-display-middle w3-padding">Middle</div>
    <div class="w3-display-topmiddle w3-hide-small w3-padding">Top Middle</div>
    <div class="w3-display-bottommiddle w3-hide-small w3-padding">Bottom Middle</div>
</div><hr/>
<h2>W3.CSS Display Classes</h2>
<p>W3.CSS provides the following display classes: </p>
<table class="w3-table-all">
    <tbody><tr>
        <th>Class</th>
        <th>Defines</th>
    </tr>
    <tr>
        <td>w3-display-container</td>
        <td>Container for w3-display-<em>classes</em></td>
    </tr>
    <tr>
        <td>w3-display-topleft</td>
        <td>Displays content at the top left corner of the w3-display-container</td>
    </tr>
    <tr>
        <td>w3-display-topright</td>
        <td>Displays content at the top right corner of the w3-display-container</td>
    </tr>
    <tr>
        <td>w3-display-bottomleft</td>
        <td>Displays content at the bottom left corner of the w3-display-container</td>
    </tr>
    <tr>
        <td>w3-display-bottomright</td>
        <td>Displays content at the bottom right corner of the w3-display-container</td>
    </tr>
    <tr>
        <td>w3-display-left</td>
        <td>Displays content to the left (middle left) of the w3-display-container</td>
    </tr>
    <tr>
        <td>w3-display-right</td>
        <td>Displays content to the right (middle right) of the w3-display-container</td>
    </tr>
    <tr>
        <td>w3-display-middle</td>
        <td>Displays content in the middle (center) of the w3-display-container</td>
    </tr>
    <tr>
        <td>w3-display-topmiddle</td>
        <td>Displays content at the top middle of the w3-display-container</td>
    </tr>
    <tr>
        <td>w3-display-bottommiddle</td>
        <td>Displays content at the bottom middle of the w3-display-container</td>
    </tr>
    <tr>
        <td>w3-display-position</td>
        <td>Displays content at a specified position in the w3-display-container</td>
    </tr>
    <tr>
        <td>w3-display-hover</td>
        <td>Displays content on hover inside the w3-display-container</td>
    </tr>
    <tr>
        <td>w3-left</td>
        <td>Floats an element to the left (float: left)</td>
    </tr>
    <tr>
        <td>w3-right</td>
        <td>Floats an element to the right (float: right)</td>
    </tr>
    <tr>
        <td>w3-show</td>
        <td>Shows an element (display: block)</td>
    </tr>
    <tr>
        <td>w3-hide</td>
        <td>Hides an element (display: none)</td>
    </tr>
    <tr>
        <td>w3-mobile</td>
        <td>Adds mobile-first responsiveness to any element.<br>Displays
            elements as block elements on mobile devices</td>
    </tr>
    </tbody></table>
<hr/>
<h2>Examples</h2>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-container w3-green"</span> style<span class="attributevaluecolor" style="color:mediumblue">="height:300px;"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-topleft"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Top Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-topright"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Top Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-bottomleft"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bottom Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-bottomright"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bottom Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-left"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-right"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-middle"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Middle<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-topmiddle"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Top Mid<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-bottommiddle"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bottom Mid<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_display_div" target="_blank">
        Try It Yourself »</a>
</div>
<p>Same example as above with added padding:</p>
<div class="w3-display-container w3-green" style="height:250px;">
    <div class="w3-padding w3-display-topleft">Top Left</div>
    <div class="w3-padding w3-display-topright">Top Right</div>
    <div class="w3-padding w3-display-bottomleft">Bottom Left</div>
    <div class="w3-padding w3-display-bottomright">Bottom Right</div>
    <div class="w3-padding w3-display-left">Left</div>
    <div class="w3-padding w3-display-right">Right</div>
    <div class="w3-padding w3-display-middle">Middle</div>
    <div class="w3-padding w3-display-topmiddle w3-hide-small">Top Middle</div>
    <div class="w3-padding w3-display-bottommiddle w3-hide-small">Bottom Middle</div>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-container w3-green"</span> style<span class="attributevaluecolor" style="color:mediumblue">="height:300px;"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-topleft"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Top Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-topright"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Top Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-bottomleft"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bottom Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-bottomright"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bottom Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-left"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-right"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-middle"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Middle<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-topmiddle"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Top Mid<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-bottommiddle"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bottom Mid<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <a class="w3-btn w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_display_padded" target="_blank">
        Try It Yourself »</a>
</div>
<h2>Displaying text inside an image:</h2>
<div class="w3-display-container w3-text-white">
    <img src="images/img_lights.jpg" alt="Lights" style="width:100%;max-height:400px">
    <div class="w3-padding w3-display-topleft">Top Left</div>
    <div class="w3-padding w3-display-topright">Top Right</div>
    <div class="w3-padding w3-display-bottomleft">Bottom Left</div>
    <div class="w3-padding w3-display-bottomright">Bottom Right</div>
    <div class="w3-padding w3-display-topmiddle">Top Mid</div>
    <div class="w3-padding w3-display-left">Left</div>
    <div class="w3-padding w3-display-right">Right</div>
    <div class="w3-padding w3-display-middle">Middle</div>
    <div class="w3-padding w3-display-bottommiddle">Bottom Mid</div>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_lights.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Lights"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-topleft"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Top Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-topright"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Top Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-bottomleft"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bottom Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-bottomright"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bottom Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-topmiddle"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Top Mid<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-left"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-right"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-middle"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Middle<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding w3-display-bottommiddle"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bottom Mid<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_display_image" target="_blank">
        Try It Yourself »</a>
</div><hr/>
<h2>Display Hover</h2>
<p class="tags">The <strong>w3-display-hover</strong> class displays content on hover inside a w3-display-container (goes from hidden to shown).</p>
<div class="w3-display-container w3-light-grey" style="height:250px;">
    <div class="w3-display-topleft w3-display-hover">Top Left</div>
    <div class="w3-display-topright w3-display-hover">Top Right</div>
    <div class="w3-display-bottomleft w3-display-hover">Bottom Left</div>
    <div class="w3-display-bottomright w3-display-hover">Bottom Right</div>
    <div class="w3-display-left w3-display-hover">Left</div>
    <div class="w3-display-right w3-display-hover">Right</div>
    <div class="w3-display-middle">Mouse over this box!</div>
    <div class="w3-display-topmiddle w3-display-hover">Top Mid</div>
    <div class="w3-display-bottommiddle w3-display-hover">Bottom Mid</div>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-container w3-light-grey"</span> style<span class="attributevaluecolor" style="color:mediumblue">="height:300px;"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-topleft w3-display-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Top Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-topright w3-display-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Top Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-bottomleft w3-display-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bottom Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-bottomright w3-display-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bottom Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-left w3-display-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-right w3-display-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-middle"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Mouse over this box!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-topmiddle w3-display-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Top Mid<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-bottommiddle w3-display-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bottom Mid<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <a class="w3-btn w3-margin-bottom w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_display_hover" target="_blank">Try It Yourself »</a>
</div>
<p>The <strong>w3-display-hover</strong> classes can be combined with <a href="w3css_effects.asp">effect</a> and
    <a href="w3css_animate.asp">animation</a> classes to create cool hover effects:</p>
<div class="w3-row-padding" style="margin:0 -16px">
    <div class="w3-half">
        <div class="w3-display-container w3-hover-opacity" style="width:100%">
            <img src="images/img_avatar3.png" alt="Avatar" style="width:100%">
            <div class="w3-display-middle w3-display-hover w3-xlarge">
                <button type="button" class="w3-button w3-black">John Doe</button>
            </div>
        </div>
    </div>
    <div class="w3-half">
        <div class="w3-display-container w3-opacity-min w3-hover-opacity-off" style="transition:0.5s;width:100%">
            <img src="images/img_pants.jpg" alt="Pants" style="width:100%">
            <div class="w3-display-topleft w3-display-hover w3-large">
                <button type="button" class="w3-white w3-animate-opacity w3-btn w3-margin w3-round" title="Save"><i class="fa fa-heart w3-text-red"></i></button>
            </div>
            <div class="w3-display-topleft w3-display-hover w3-large" style="left:65px">
                <button type="button" class="w3-white w3-animate-opacity w3-btn w3-margin w3-round" title="Share"><i class="fa fa-paper-plane w3-text-grey"></i></button>
            </div>
            <div class="w3-display-topright w3-display-hover w3-large">
                <button type="button" class="w3-white w3-animate-opacity w3-btn w3-margin w3-round" title="Shopping Cart"><i class="fa fa-shopping-cart w3-text-grey"></i></button>
            </div>
            <div class="w3-display-bottomleft w3-display-hover w3-large w3-text-white">
                <div class="w3-padding w3-animate-opacity">Khaki pants, $19.99</div>
            </div>
            <div class="w3-display-middle w3-display-hover w3-large">
                <button type="button" class="w3-green w3-animate-opacity w3-btn w3-round">Shop Now</button>
            </div>
        </div>
    </div>
</div><br/>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        &nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-container w3-hover-opacity"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_avatar.png"</span>
  alt<span class="attributevaluecolor" style="color:mediumblue">="Avatar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-middle w3-display-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button
  w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>John Doe<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_display_hover_effects" target="_blank">Try It Yourself »</a>
</div>
<p>You will learn more about animations and effects later in this tutorial.</p><hr/>
<h2>Displaying A Flag</h2>
<p>With a little bit of imagination, the w3-display-classes can be used to create a flag:</p><hr/>
<div class="w3-display-container w3-card-4" style="height:200px;width:340px">
    <div class="w3-red w3-display-topleft" style="width:25%;height:40%"></div>
    <div class="w3-red w3-display-topright" style="width:60%;height:40%"></div>
    <div class="w3-red w3-display-bottomleft" style="width:25%;height:40%"></div>
    <div class="w3-red w3-display-bottomright" style="width:60%;height:40%"></div>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-container w3-card-4"</span> style<span class="attributevaluecolor" style="color:mediumblue">="height:200px;width:350px"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-red w3-display-topleft"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:25%;height:40%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-red w3-display-topright"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:60%;height:40%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-red w3-display-bottomleft"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:25%;height:40%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-red w3-display-bottomright"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:60%;height:40%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_display_flag" target="_blank">Try It Yourself »</a>
</div><hr/>
<h2>Floating Classes</h2>
<p>The <strong>w3-left</strong> class floats an element to the left, the <strong>w3-right</strong> class
    floats an element to the right:</p>
<div class="w3-container w3-light-grey" style="padding:0">
    <div class="w3-left w3-red w3-padding">w3-left</div>
    <div class="w3-right w3-blue w3-padding">w3-right</div>
</div><br/>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-left
w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>w3-left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-right w3-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>w3-right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_display_float" target="_blank">Try It Yourself »</a>
</div>
<div class="w3-panel w3-yellow w3-note">
    <p><strong>Note:</strong> Clear floats with the <strong>w3-clear</strong> class or put them inside a <strong>w3-container</strong>, like in the example above (clears floats automatically).</p>
</div>
<hr/>
<h2>Hide and Show</h2>
<p>Force an element to be shown or hidden with the <strong>w3-show</strong> or
    <strong>w3-hide</strong> class.</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-show"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>I am shown (display: block).<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hide"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>I am hidden (display: none).<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_display_show" target="_blank">
        Try It Yourself »</a>
</div>
<p>These classes are often used to toggle between hiding and showing elements:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-white w3-padding w3-padding-16">
        <button onclick="myFunction()" class="w3-btn w3-black" style="box-shadow: none;">Toggle hide and show</button>

        <p id="Demo" class="w3-hide w3-red w3-padding">Hello!</p>
    </div>
    <a class="w3-btn w3-margin-bottom w3-margin-top w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_display_show_toggle" target="_blank">
        Try It Yourself »</a>
</div><hr/>
<h2>The w3-mobile Class</h2>
<p>The <strong>w3-mobile</strong> class adds mobile-first responsiveness to any element.</p>
<p>It adds display:block and width:100% to an element on screens that are less than 600px wide.</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-mobile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_w3-mobile" target="_blank">
        Try It Yourself »</a>
</div>
<div class="w3-container">
    <h2>The w3-mobile Class</h2>
    <p>The <strong>w3-mobile</strong> class adds mobile-first responsivenss to any element.</p>
    <p>It adds display:block and width:100% to an element on screens that are less than 600px wide.</p>

    <p>Resize the browser window to see the effect:</p>
    <button class="w3-button w3-black w3-mobile">Home</button>
    <button class="w3-button w3-black w3-mobile">Link 1</button>
    <button class="w3-button w3-black w3-mobile">Link 2</button>
    <button class="w3-button w3-black w3-mobile">Link 3</button>
</div><br/>
<a href="buttons.php" class="w3-right next w3-btn w3-green">Buttons »</a>
<a href="margin.php" class="w3-left next w3-btn w3-green">« Margins</a>