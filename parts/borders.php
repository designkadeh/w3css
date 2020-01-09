<div class="w3-container" id="home">
    <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
    <h1 class="w3-xxxlarge w3-text-purple"><b>Borders</b></h1>
    <hr class="w3-round">
    <div class="w3-container"><br/>
        <a href="cards.php" class="w3-right next w3-btn w3-green">Cards »</a>
        <a href="panels.php" class="w3-left next w3-btn w3-green">« Panels</a>
        <br/><br/><br/>
    </div>
</div><hr/>
<div class="w3-panel w3-border">
    <p>I have borders.</p>
</div>
<div class="w3-panel w3-border-left">
    <p>I have borders.</p>
</div>
<div class="w3-panel w3-border-top w3-border-bottom w3-border-green">
    <p>I have borders.</p>
</div>
<div class="w3-panel w3-border w3-border-blue">
    <p>I have borders.</p>
</div>
<div class="w3-panel w3-leftbar">
    <p>I have a thick left border.</p>
</div>
<div class="w3-panel w3-bottombar w3-topbar w3-border-blue">
    <p>I have a thick blue top and bottom border.</p>
</div>
<div class="w3-panel w3-border w3-border-red w3-hover-border-green">
    <p>Red border that turns green on hover.</p>
</div>
<hr/>
<h2>W3.CSS Border Classes</h2>
<p>W3.CSS provides the following border classes:</p>
<table class="w3-table w3-bordered w3-striped w3-border">
    <tbody><tr>
        <th style="width:30%">Class</th>
        <th>Defines</th>
    </tr>
    <tr>
        <td>w3-border</td>
        <td>Adds borders (top, right, bottom, left) to an element</td>
    </tr>
    <tr>
        <td>w3-border-top</td>
        <td>Adds a top border to an element</td>
    </tr>
    <tr>
        <td>w3-border-right</td>
        <td>Adds a right border to an element</td>
    </tr>
    <tr>
        <td>w3-border-bottom</td>
        <td>Adds a bottom border to an element</td>
    </tr>
    <tr>
        <td>w3-border-left</td>
        <td>Adds a left border to an element</td>
    </tr>
    <tr>
        <td>w3-border-0</td>
        <td>Removes all borders</td>
    </tr>
    <tr>
        <td>w3-border-<em>color</em></td>
        <td>Displays the border in a specified color (like red, blue, etc)</td>
    </tr>
    <tr>
        <td>w3-hover-border-<em>color</em></td>
        <td>Adds a hoverable border color</td>
    </tr>
    <tr>
        <td>w3-bottombar</td>
        <td>Adds a thick bottom border to an element</td>
    </tr>
    <tr>
        <td>w3-leftbar</td>
        <td>Adds a thick left border to an element</td>
    </tr>
    <tr>
        <td>w3-rightbar</td>
        <td>Adds a thick right border to an element</td>
    </tr>
    <tr>
        <td>w3-topbar</td>
        <td>Adds a thick top border to an element</td>
    </tr>
    </tbody></table><hr/>
<h2>Adding Borders</h2>
<p>The <strong>w3-border</strong> classes are used to add borders to any HTML element:</p>
<div class="w3-panel w3-border">
    <p>I have borders.</p>
</div>
<div class="w3-panel w3-border-left">
    <p>I have only a left border.</p>
</div>
<div class="w3-panel w3-border-top w3-border-bottom">
    <p>I have top and bottom borders.</p>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-border"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>I have borders.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-border-left"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>I have only a left border.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-border-top w3-border-bottom"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>I have top and bottom borders.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_borders_side" target="_blank">Try It Yourself »</a>
</div><hr/>
<h2>Border Colors</h2>
<p>The <strong>w3-border<em>-color</em></strong> classes are used to add colors to borders:</p>
<div class="w3-panel w3-border w3-border-red">
    <p>I have red borders.</p>
</div>
<div class="w3-panel w3-border-left w3-border-blue">
    <p>I have a blue left border.</p>
</div>
<div class="w3-panel w3-border-top w3-border-bottom w3-border-green">
    <p>I have a green top and bottom border.</p>
</div>
<div class="w3-panel w3-border-left w3-pale-red w3-border-red">
    <p>I have a red left border and a pale-red background color.</p>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-border w3-border-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>I have red borders.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-border-left w3-border-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>I have a blue left border.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-border-top w3-border-bottom w3-border-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>I have a green top and bottom border.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>  </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_borders_colors" target="_blank">Try It Yourself »</a>
</div><hr/>
<h2>Rounded Borders</h2>
<p>To add rounded borders, add one of the <strong>w3-round<em>-size</em></strong> classes:</p>
<div class="w3-panel w3-border">
    <p>I have normal borders.</p>
</div>
<div class="w3-panel w3-border w3-round-small">
    <p>I have small rounded borders.</p>
</div>
<div class="w3-panel w3-border w3-round">
    <p>I have small rounded borders.</p>
</div>
<div class="w3-panel w3-border w3-round-large">
    <p>I have small rounded borders.</p>
</div>
<div class="w3-panel w3-border w3-round-xlarge">
    <p>I have small rounded borders.</p>
</div>
<div class="w3-panel w3-border w3-round-xxlarge">
    <p>I have small rounded borders.</p>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-border"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My borders are normal.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-border w3-round-small"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My borders are rounded (small).<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel
	w3-border w3-round"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My borders are rounded.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-border w3-round-large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>I have
        large rounded borders.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-border
	w3-round-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>I have xlarge rounded borders.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-border w3-round-xxlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>I have
        xxlarge rounded borders.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    </div>
    <p><a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_borders_rounded" target="_blank">Try It Yourself »</a></p>
</div><hr/>
<h2>Thick Borders</h2>
<p>The <strong>w3-topbar</strong>, <strong>w3-bottombar</strong>, <strong>w3-leftbar</strong>, <strong>
        and w3-rightbar </strong>classes are used to add thick borders to an element:</p>
<div class="w3-panel w3-leftbar">
    <p>I have a thick left border.</p>
</div>
<div class="w3-panel w3-leftbar w3-border-blue">
    <p>I have a thick blue left border.</p>
</div>
<div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue">
    <p>I have a thick blue left border and a pale-blue background color.</p>
</div>
<div class="w3-panel w3-pale-red w3-topbar w3-bottombar w3-border-red">
    <p>I have a thick red top and bottom border and a pale-red background color.</p>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-leftbar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>I have a thick left border.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-leftbar w3-border-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>I have a thick blue left border.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-leftbar w3-border-blue w3-pale-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>I have a thick blue left border and a pale-blue background color.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-topbar w3-bottombar w3-border-red w3-pale-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>I have a thick red top and bottom border and a pale-red background color.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_borders_bars" target="_blank">Try It Yourself »</a>
    </p>
</div><hr/>
<h2>Hoverable Borders</h2>
<p>The <strong>w3-hover-border-<em>color</em></strong> classes change the color of the border on mouse-over:</p>
<div class="w3-panel w3-border w3-hover-border-red">
    <p>Border that turns red on hover.</p>
</div>
<div class="w3-panel w3-border w3-border-red w3-hover-border-green">
    <p>Red border that turns green on hover.</p>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-border w3-hover-border-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Border that turns red on hover<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-border w3-border-red w3-hover-border-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Red border that turns green on hover<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>

    </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_borders_hover" target="_blank">
        Try It Yourself »</a>
</div>
<div class="w3-panel w3-leftbar w3-border-white w3-hover-border-green">
    <p>Thick (invisible) left border that turns green on hover.</p>
</div>
<div class="w3-panel w3-light-grey w3-bottombar w3-border-white w3-hover-border-green">
    <p>Thick (invisible) bottom border that turns green on hover.</p>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-leftbar w3-border-white w3-hover-border-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Thick (invisible) left border that turns green on hover.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-bottombar w3-border-white w3-hover-border-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Thick (invisible) bottom border that turns green on hover.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_borders_hover2" target="_blank">Try It Yourself »</a>
    </p>
</div>
<div style="border:16px solid white" class="w3-panel w3-hover-border-green">
    <p>Thick white (invisible) border that turns green on hover.</p>
</div>
<div style="border:16px solid white" class="w3-panel w3-hover-border-black">
    <p>Thick white (invisible) border that turns black on hover.</p>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> style<span class="attributevaluecolor" style="color:mediumblue">="border:16px solid white"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-hover-border-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Thick (invisible) border that turns green on hover.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> style<span class="attributevaluecolor" style="color:mediumblue">="border:16px solid white"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-hover-border-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Thick (invisible) border that turns black on hover.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_borders_hover1" target="_blank">Try It Yourself »</a>
    </p>
</div><br/>
<a href="cards.php" class="w3-right next w3-btn w3-green">Cards »</a>
<a href="panels.php" class="w3-left next w3-btn w3-green">« Panels</a>