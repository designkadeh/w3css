<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Tooltips</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="grid.php" class="w3-right next w3-btn w3-green">Grid »</a>
            <a href="modal.php" class="w3-left next w3-btn w3-green">« Modal</a>
            <br/><br/><br/>
        </div>
    </div><hr/>
    <p>Hover over the sentences below:</p>
    <h3 class="w3-tooltip">London
        <span class="w3-text">(<em>9 million inhabitants</em>)</span>
        is the capital of England.</h3>

    <h3 class="w3-tooltip">London
        <span class="w3-text w3-tag"><b>9 million inhabitants</b></span>
        is the capital of England.</h3>
    <hr>

    <h2>W3.CSS Tooltip Classes</h2>
    <p>W3.CSS provides the following tooltip classes:</p>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tbody><tr>
            <th style="width:30%">Class</th>
            <th>Defines</th>
        </tr>
        <tr>
            <td>w3-tooltip</td>
            <td>The tooltip element</td>
        </tr>
        <tr>
            <td>w3-text</td>
            <td>The tooltip text</td>
        </tr>
        </tbody></table>
    <hr>

    <h2>Tooltip Element and Tooltip Text</h2>
    <p>Tooltips display text (or other content) when you hover over an HTML element.</p>
    <p>The <strong>w3-tooltip</strong> class defines the element to hover over (the tooltip container).</p>
    <p>The <strong>w3-text</strong> class defines the tooltip text.</p>
    <p>Hover over the sentence below:</p>
    <p class="w3-tooltip">London
        <span class="w3-text">(<em>9 million inhabitants</em>)</span> is the capital of England.</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tooltip"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>London<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>(<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>em<span class="tagcolor" style="color:mediumblue">&gt;</span></span>9 million inhabitants<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/em<span class="tagcolor" style="color:mediumblue">&gt;</span></span>)<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>is the capital of England.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tooltips" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Tooltip as a Tag</h2>
    <p>Hover over the sentence below:</p>
    <p class="w3-tooltip">London
        <span class="w3-text w3-tag"><b>9 million inhabitants</b></span>
        is the capital of England.</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tooltip"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>London<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-text w3-tag"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>b<span class="tagcolor" style="color:mediumblue">&gt;</span></span>9 million inhabitants<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/b<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>is the capital of England.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tooltips_tag" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Image Tooltip</h2>
    <p>Hover over this picture to see the effect:</p>

    <div class="w3-tooltip" style="width:50%">
        <img src="images/img_car.jpg" alt="Car" style="width:100%">
        <div class="w3-text w3-container" style="width:100%">
            <p>A car is a wheeled, self-powered motor vehicle used for transportation.
                Most definitions of the term specify that cars typically have four wheels.(Wikipedia)</p>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example (text before the picture)</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tooltip"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>A car is a...<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_car.jpg"</span>
  alt<span class="attributevaluecolor" style="color:mediumblue">="Car"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tooltips_image" target="_blank">Try It Yourself »</a>
    </div>

    <div class="w3-example">
        <h3>Example (text after the picture)</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tooltip"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_car.jpg"</span>
  alt<span class="attributevaluecolor" style="color:mediumblue">="Car"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>A car is a...<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tooltips_image_after" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Absolute Positioned Tooltip</h2>
    <p>If you want the tooltip to appear in an absolute position, position the tooltip text with CSS:</p>
    <div class="w3-tooltip w3-show-inline-block">London
        <span style="position:absolute;left:0;bottom:18px" class="w3-text w3-tag">9 million inhabitants</span>
        is the capital of England.</div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tooltip"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>London<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> style<span class="attributevaluecolor" style="color:mediumblue">="position:absolute;left:0;bottom:18px"</span>
<br>class<span class="attributevaluecolor" style="color:mediumblue">="w3-text w3-tag"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>9 million inhabitants<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>is the capital of England.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tooltips_fixed" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Colored Tooltip</h2>
    <p>If you want a colored tooltip, use the <strong>w3-</strong><em><strong>color</strong></em> classes:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-text w3-tag w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>9 million inhabitants<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tooltips_color" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Rounded Tooltip</h2>
    <p>If you want a rounded tooltip, use the <strong>w3-</strong><em><strong>round</strong></em> classes:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-text w3-tag w3-round-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>9 million inhabitants<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tooltips_rounded" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Small Tooltip</h2>
    <p>If you want a small tooltip, use the <strong>w3-small</strong> class:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-text w3-tag w3-small"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>9
            million inhabitants<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tooltips_small" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Tiny Tooltip</h2>
    <p>If you want a tiny tooltip, use the <strong>w3-tiny</strong> class:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-text w3-tag w3-tiny"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>9 million  inhabitants<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tooltips_tiny" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Large Tooltip</h2>
    <p>If you want a large tooltip, use the <strong>w3-</strong><em><strong>large</strong></em> classes:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-text w3-tag w3-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>9 million  inhabitants<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tooltips_large" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Animated Tooltip</h2>
    <p>If you want to fade in the tooltip, use the <strong>w3-animate-opacity</strong> class:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-text w3-tag w3-animate-opacity"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>9 million  inhabitants<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tooltips_animate" target="_blank">Try It Yourself »</a>
    </div>

    <br>
    <div class="w3-clear nextprev">
        <a href="grid.php" class="w3-right next w3-btn w3-green">Grid »</a>
        <a href="modal.php" class="w3-left next w3-btn w3-green">« Modal</a>
    </div>
</div>