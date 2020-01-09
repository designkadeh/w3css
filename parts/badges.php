<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Badges</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="tags.php" class="w3-right next w3-btn w3-green w3-green">Tags »</a>
            <a href="inputs.php" class="w3-left next w3-btn w3-green w3-green">« Inputs</a>
            <br/><br/><br/>
        </div>
    </div><hr/>
    <p>
        <span class="w3-badge">9</span>
        <span class="w3-badge w3-green">6</span>
        <span class="w3-badge w3-red">8</span>
        <span class="w3-badge w3-large w3-padding">33</span>
        <span class="w3-badge w3-xlarge w3-padding w3-green">66</span>
        <span class="w3-badge w3-xxxlarge w3-padding w3-red">99</span>
    </p>
    <hr>

    <h2>W3.CSS Badge Classes</h2>
    <p>W3.CSS provides only one class for badges:</p>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tbody><tr>
            <th style="width:30%">Class</th>
            <th>Defines</th>
        </tr>
        <tr>
            <td>w3-badge</td>
            <td>Circular black badge </td>
        </tr>
        </tbody></table>
    <hr>

    <h2>Badges</h2>
    <p>The <strong>w3-badge</strong> class creates a circular badge. The default color is black.</p>
    <p>Updates <span class="w3-badge">9</span></p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Updates <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>9<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
            <br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_badge" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Colored Badges</h2>
    <p>Use a <strong>w3-<em>color</em></strong> class to change the color of a badge:</p>
    <p>News <span class="w3-badge w3-green w3-margin-right">6</span>Comments <span class="w3-badge w3-red">8</span></p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>News <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge
w3-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>6<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Comments <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge
w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>8<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_badges" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Badges in Buttons</h2>
    <p>The <strong>w3-badge</strong> class can be used inside other elements:</p>

    <p><button class="w3-btn w3-black">Button<span class="w3-badge w3-margin-left w3-white">1</span></button></p>
    <p><button class="w3-btn w3-red">Button<span class="w3-badge w3-margin-left">2</span></button></p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge w3-margin-left
w3-white"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn
w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge w3-margin-left"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_badges_button" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Badges in Lists</h2>
    <ul class="w3-ul">
        <li><span class="w3-badge">1</span> Jill</li>
        <li><span class="w3-badge">2</span> Eve</li>
        <li><span class="w3-badge">3</span> Adam</li>
    </ul>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span> Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span> Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red">
 class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span> Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_badges_list_numbers" target="_blank">
            Try It Yourself »</a>
    </div>
    <p>The <strong>w3-right</strong> class floats an element to the right.</p>
    <p>This is perfect for lists with badges:</p>
    <ul class="w3-ul w3-border">
        <li>Jill <span class="w3-badge w3-right w3-margin-right">1</span></li>
        <li>Eve <span class="w3-badge w3-right w3-margin-right">2</span></li>
        <li>Adam <span class="w3-badge w3-right w3-margin-right">3</span></li>
    </ul>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul w3-border"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge w3-right w3-margin-right"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge w3-right w3-margin-right"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge w3-right w3-margin-right"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_badges_list" target="_blank">
            Try It Yourself »</a>
    </div>

    <hr>
    <h2>Badges in Tables</h2>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tbody><tr class="w3-green">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        </tbody><tbody>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson <span class="w3-badge">1</span></td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson <span class="w3-badge">2</span></td>
            <td>67</td>
        </tr>
        <tr>
            <td>Bo</td>
            <td>Nilsson</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Mike</td>
            <td>Ross</td>
            <td>35</td>
        </tr>
        </tbody>
    </table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>tr<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>td<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/td<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>td<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jackson <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red">
 class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/td<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>td<span class="tagcolor" style="color:mediumblue">&gt;</span></span>94<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/td<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/tr<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>tr<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>td<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/td<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>td<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Johnson <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/td<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>td<span class="tagcolor" style="color:mediumblue">&gt;</span></span>67<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/td<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/tr<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_badges_table" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Badge Sizes</h2>
    <p>By default, a badge will inherit the size of its container.</p>
    <p>The <strong>w3-<em>size</em></strong> classes
        (w3-tiny, w3-small, w3-large, w3-xlarge, w3-xxlarge, w3-xxxlarge, w3-jumbo)
        can be used to modify the size of a badge:</p>
    <p>
        <span class="w3-badge w3-tiny w3-red">6</span>
        <span class="w3-badge w3-small w3-red">6</span>
        <span class="w3-badge w3-red">6</span>
    </p>
    <p>
        <span class="w3-badge w3-large w3-padding w3-red">66</span>
        <span class="w3-badge w3-xlarge w3-padding w3-red">66</span>
        <span class="w3-badge w3-xxlarge w3-padding w3-red">66</span>
    </p>
    <p>
        <span class="w3-badge w3-xxxlarge w3-padding w3-red">66</span>
        <span class="w3-badge w3-jumbo w3-padding w3-red">66</span></p>
    <p>
        You might want to add some extra padding to large badges:</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge w3-jumbo w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>66<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-badge w3-jumbo
 w3-red w3-padding"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>66<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_badges_large" target="_blank">Try It Yourself »</a>
    </div>

    <hr>

    <h2>UTF-8 Badges</h2>
    <p>Since HTML5 supports the UTF-8 character set, you can use
        <a href="/charsets/ref_utf_dingbats.asp">Dingbats</a> for single digit badges.</p>

    <div class="w3-xxlarge">
        ❶ ❷ ❸ ❹ ❺ ➅ ➆ ➇ ➈ ➉
    </div>

    <div class="w3-xxlarge w3-text-red">
        ❶ ❷ ❸ ❹ ❺ ➅ ➆ ➇ ➈ ➉
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-xxlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&amp;#x2776; &amp;#x2777; &amp;#x2778; &amp;#x2779; &amp;#x277A; &amp;#x2785; &amp;#x2786; &amp;#x2787; &amp;#x2788; &amp;#x2789;<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-xxlarge w3-text-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&amp;#x2776; &amp;#x2777; &amp;#x2778; &amp;#x2779; &amp;#x277A; &amp;#x2785; &amp;#x2786; &amp;#x2787; &amp;#x2788; &amp;#x2789;<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_badges_utf8" target="_blank">Try It Yourself »</a>
    </div>

    <br>
    <div class="w3-clear nextprev">
        <a href="tags.php" class="w3-right next w3-btn w3-green w3-green">Tags »</a>
        <a href="inputs.php" class="w3-left next w3-btn w3-green w3-green">« Inputs</a>
    </div>
</div>