<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Tags</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="icons.php" class="w3-right next w3-btn w3-green w3-green">Icons »</a>
            <a href="badges.php" class="w3-left next w3-btn w3-green w3-green">« Badges</a>
            <br/><br/><br/>
        </div>
    </div><hr/>
    <p>Tags:
        <span class="w3-tag">Done</span>
        <span class="w3-tag w3-blue">New!</span>
        <span class="w3-tag w3-teal">More Later!</span>
    </p>

    <p>Tags as signs:
        <span class="w3-tag w3-round w3-green" style="padding:3px">
<span class="w3-tag w3-round w3-green w3-border w3-border-white">Falcon Ridge Parkway</span>
</span>
        <span class="w3-tag w3-padding w3-round-large w3-red w3-center">STOP!</span>
        <span class="w3-tag w3-xlarge w3-padding w3-orange w3-center"><strong>WATCH OUT!</strong></span>
    </p>
    <hr>

    <h2>W3.CSS Tag Classes</h2>
    <p>W3.CSS provides one class for tags, labels, and signs:</p>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tbody><tr>
            <th style="width:30%">Class</th>
            <th>Defines</th>
        </tr>
        <tr>
            <td>w3-tag</td>
            <td>Rectangular black tag/label</td>
        </tr>
        </tbody></table>
    <hr>

    <h2>Tags, Labels, and Signs</h2>
    <div class="w3-panel w3-note">
        <p>In the W3.CSS world there is no real difference between a tag, a label, or a sign.</p>
    </div>
    <hr>


    <h2>Tags are Rectangular</h2>
    <p>The <strong>w3-tag</strong> class creates a rectangular tag (label or sign).
        The default color is black: </p>
    <p>Status: <span class="w3-tag">Done</span></p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Status: <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Done<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tags" target="_blank">Try It Yourself »</a>
    </div>


    <hr>

    <h2>Colored Tags</h2>
    <p>Use a <strong>w3-<em>color</em></strong> class to change the color of a tag:&nbsp;&nbsp;</p>
    <p><span class="w3-tag w3-blue">New!</span></p>
    <p><span class="w3-tag w3-teal">More Later!</span></p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>New!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>More Later!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tags_color" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Tag Sizes</h2>
    <p>By default, a tag will inherit the size of its container.</p>
    <p>The <strong>w3-<em>size</em></strong> classes
        (w3-tiny, w3-small, w3-large, w3-xlarge, w3-xxlarge, w3-xxxlarge, w3-jumbo)
        can be used to modify the size of a tag:</p>
    <p>
        <span class="w3-tag w3-tiny w3-blue">6</span>
        <span class="w3-tag w3-small w3-blue">6</span>
        <span class="w3-tag w3-blue">6</span>
    </p>
    <p>
        <span class="w3-tag w3-large w3-padding w3-blue">66</span>
        <span class="w3-tag w3-xlarge w3-padding w3-blue">66</span>
        <span class="w3-tag w3-xxlarge w3-padding-large w3-blue">66</span>
    </p>
    <p>
        <span class="w3-tag w3-xxxlarge w3-padding w3-blue">66</span>
        <span class="w3-tag w3-jumbo w3-padding w3-blue">66</span></p>
    <p>
        You might want to add some extra padding to large tags:</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-jumbo w3-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>66<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-jumbo
 w3-blue w3-padding-large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>66<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tags_large" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Letter Tags</h2>
    <div class="w3-xlarge">
        <span class="w3-tag">T</span>
        <span class="w3-tag">A</span>
        <span class="w3-tag">U</span>
        <span class="w3-tag">G</span>
        <span class="w3-tag">U</span>
        <span class="w3-tag">S</span>

    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>A<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>U<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>G<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>U<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>S<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>T<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tags_letters" target="_blank">Try It Yourself »</a>
    </div>

    <span class="w3-tag w3-jumbo w3-red">S</span>
    <span class="w3-tag w3-jumbo">A</span>
    <span class="w3-tag w3-jumbo w3-yellow">L</span>
    <span class="w3-tag w3-jumbo">E</span>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-jumbo w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>S<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-jumbo"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>A<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-jumbo w3-yellow"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>L<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-jumbo"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>E<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span>  </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tags_sale" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Signs</h2>
    <p>Signs are nothing but large tags.</p>
    <div class="w3-tag w3-xxlarge w3-orange"> London Zoo </div>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-xxlarge w3-orange"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>London Zoo<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tags_sign" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Road Signs</h2>
    <div class="w3-tag w3-round w3-green" style="padding:3px">
        <div class="w3-tag w3-round w3-green w3-border w3-border-white">Falcon Ridge Parkway</div>
    </div>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-round w3-green"</span> style<span class="attributevaluecolor" style="color:mediumblue">="padding:3px"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-round w3-green w3-border w3-border-white"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; Falcon
            Ridge Parkway<br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tags_traffic" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Large Signs</h2>
    <p>The <strong>w3-<em>size</em></strong> classes can be used to display large signs:</p>
    <span class="w3-tag w3-xxlarge w3-padding w3-orange w3-center">
<strong>IN CASE OF<br>EMERGENCY:<br>RUN LIKE HELL!</strong></span>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-xxlarge w3-padding w3-orange w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>strong<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>IN CASE OF<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            EMERGENCY:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>RUN LIKE HELL!<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/strong<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tags_signs_large" target="_blank">Try It Yourself »</a>
    </div>

    <div class="w3-tag w3-jumbo w3-green">
        49<span class="w3-xlarge">,99</span>
    </div>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-jumbo w3-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>49<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>,99<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tags_signs_large_49" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Rounded Signs</h2>
    <p>The <strong>w3-round-<em>size</em></strong> classes can be used to add rounded corners to a sign:</p>
    <span class="w3-tag w3-padding w3-round-large w3-red w3-center">DO NOT<br>
BREATHE<br>UNDER WATER</span>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-padding w3-round-large w3-red w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            DO NOT<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            BREATHE<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            UNDER WATER<br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tags_signs_round" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Rotating Tags</h2>
    <p>Use the standard CSS transform property to rotate a sign:</p>
    <span class="w3-tag w3-xlarge w3-padding w3-red" style="transform:rotate(-10deg)">
STOP</span>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-xlarge w3-padding w3-red"</span> style<span class="attributevaluecolor" style="color:mediumblue">="transform:rotate(-5deg)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>STOP<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tags_rotated" target="_blank">Try It Yourself »</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Note:</strong> transform:rotate() does not work in IE 9 and earlier.</p>
    </div>
    <hr>

    <h2>Spinning Tags</h2>
    <p>The <strong>w3-spin</strong> class can be used to let a sign spin 360 degrees:</p>
    <span class="w3-tag w3-spin w3-large">
STOP</span>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-spin w3-large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>STOP<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tags_spin" target="_blank">Try It Yourself »</a>
    </div>

    <br>
    <div class="w3-clear nextprev">
        <a href="icons.php" class="w3-right next w3-btn w3-green w3-green">Icons »</a>
        <a href="badges.php" class="w3-left next w3-btn w3-green w3-green">« Badges</a>
    </div>
</div>