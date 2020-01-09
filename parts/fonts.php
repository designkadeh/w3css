<div class="w3-container" id="home">
    <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
    <h1 class="w3-xxxlarge w3-text-purple"><b>Fonts</b></h1>
    <hr class="w3-round">
    <div class="w3-container"><br/>
        <a href="text.php" class="w3-right next w3-btn w3-green">Text »</a>
        <a href="cards.php" class="w3-left next w3-btn w3-green">« Cards</a>
        <br/><br/><br/>
    </div>
</div><hr/>
<h2>Easy to Read</h2>
<p>W3.CSS pages are easy to read, even for people with slight reading disabilities.</p>
<ul>
    <li>W3.CSS default font-size is 15px</li>
    <li>The default font is Verdana, which has a good letter spacing</li>
    <li>The default line-spacing (1.5) is also very good</li>
</ul><hr/>
<h2 class="tags">HTML Headings &lt;h1&gt; - &lt;h6&gt;</h2>
<p>By default, W3.CSS styles HTML headings this way:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate">
        <h1>&lt;h1&gt;Heading 1 (36px)&lt;/h1&gt;</h1>
        <h2>&lt;h2&gt;Heading 2 (30px)&lt;/h2&gt;</h2>
        <h3>&lt;h3&gt;Heading 3 (24px)&lt;/h3&gt;</h3>
        <h4>&lt;h4&gt;Heading 4 (20px)&lt;/h4&gt;</h4>
        <h5>&lt;h5&gt;Heading 5 (18px)&lt;/h5&gt;</h5>
        <h6>&lt;h6&gt;Heading 6 (16px)&lt;/h6&gt;</h6>
    </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_fonts_headings" target="_blank">Try It Yourself »</a>
</div><hr/>
<h2>Font-Size Classes</h2>
<p>Headings should be used for what they are: Headings.</p>
<p style="margin-bottom:10px;">With W3.CSS, font sizes can be set by the
    following <strong>w3-<em>size</em></strong> classes:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate">
        <div class="w3-tiny">w3-tiny</div>
        <div class="w3-small">w3-small</div>
        <div class="w3-medium">w3-medium (Default)</div>
        <div class="w3-large">w3-large</div>
        <div class="w3-xlarge">w3-xlarge</div>
        <div class="w3-xxlarge">w3-xxlarge</div>
        <div class="w3-xxxlarge">w3-xxxlarge</div>
        <div class="w3-jumbo">w3-jumbo</div>
    </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_fonts_size" target="_blank">Try It Yourself »</a>
</div><hr/>
<h2>Overriding the W3.CSS Defaults</h2>
<p>Overriding the W3.CSS default settings is very easy.</p>
<p>You have at least three options:</p>
<ol>
    <li>Override the default settings in the &lt;head&gt; section of your page</li>
    <li>Add your own CSS file after W3.CSS</li>
    <li>Download and change the content of the W3.CSS file</li>
</ol>
<div class="w3-example">
    <h3 class="tags">Override in&lt;head&gt;</h3>
    <div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
 h1<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red">font-size<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span>64px<span class="cssdelimitercolor" style="color:black">;</span></span></span><span class="cssdelimitercolor" style="color:black">}</span><br>
 h2<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red">font-size<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span>48px<span class="cssdelimitercolor" style="color:black">;</span></span></span><span class="cssdelimitercolor" style="color:black">}</span><br>
 h3<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red">font-size<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span>36px<span class="cssdelimitercolor" style="color:black">;</span></span></span><span class="cssdelimitercolor" style="color:black">}</span><br>h4<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red">font-size<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span>24px<span class="cssdelimitercolor" style="color:black">;</span></span></span><span class="cssdelimitercolor" style="color:black">}</span><br>
 h5<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red">font-size<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span>20px<span class="cssdelimitercolor" style="color:black">;</span></span></span><span class="cssdelimitercolor" style="color:black">}</span><br>h6<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red">font-size<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span>18px<span class="cssdelimitercolor" style="color:black">;</span></span></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_fonts_override" target="_blank">Try It Yourself »</a>
</div>
<div class="w3-example">
    <h3>Add your own CSS</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>link<span class="attributecolor" style="color:red"> rel<span class="attributevaluecolor" style="color:mediumblue">="stylesheet"</span> href<span class="attributevaluecolor" style="color:mediumblue">="https://www.w3schools.com/w3css/4/w3.css"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>link<span class="attributecolor" style="color:red"> rel<span class="attributevaluecolor" style="color:mediumblue">="stylesheet"</span>
 href<span class="attributevaluecolor" style="color:mediumblue">="myStyle.css"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<div class="w3-example">
    <h3>Change W3.CSS</h3>
    <div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
h1<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red">font-size<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span>36px</span></span><span class="cssdelimitercolor" style="color:black">}</span> h2<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red">font-size<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span>30px</span></span><span class="cssdelimitercolor" style="color:black">}</span> h3<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red">font-size<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span>24px</span></span><span class="cssdelimitercolor" style="color:black">}</span> h4<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red">font-size<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span>20px</span></span><span class="cssdelimitercolor" style="color:black">}</span> h5<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red">font-size<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span>18px</span></span><span class="cssdelimitercolor" style="color:black">}</span> h6<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red">font-size<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span>16px</span></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
</div><hr/>
<h2>Changing the Default Page Font</h2>
<p>In the head of your web page (or in your style sheet), after loading W3.CSS, change the style of html and body:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>link<span class="attributecolor" style="color:red"> rel<span class="attributevaluecolor" style="color:mediumblue">="stylesheet"</span> href<span class="attributevaluecolor" style="color:mediumblue">="https://www.w3schools.com/w3css/4/w3.css"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>style<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="cssselectorcolor" style="color:brown"><br>
 html, body, h1, h2, h3, h4, h5, h6 <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; font-family<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> "Comic Sans MS", cursive, sans-serif<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span><br>
 </span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/style<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_fonts_page" target="_blank">
        Try It Yourself »</a>
</div><hr/>
<h2>W3.CSS External Fonts</h2>
<div class="w3-tangerine w3-xxxlarge">
    Making the web beautiful!
</div>
<p>With W3.CSS it is extremely easy to add new fonts to a web page.</p>
<ul>
    <li>Very easy to use (only CSS and HTML)</li>
    <li>Unlimited use of external font libraries (Like Google Fonts)</li>
    <li>Works in all modern browsers</li>
</ul><hr/>
<h2>Using a Font Class</h2>
<div class="w3-myfont">
    Making the Web!
</div>
<p>In the head of your web page (or in your style sheet), create a font class:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-myfont"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Making the Web!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_fonts_class" target="_blank">
        Try It Yourself »</a>
</div>
<hr>
<h2>Using External Fonts</h2>
<p>In the head of your web page, include an external font, and give the font a class name:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>link<span class="attributecolor" style="color:red"> rel<span class="attributevaluecolor" style="color:mediumblue">="stylesheet"</span> href<span class="attributevaluecolor" style="color:mediumblue">="https://fonts.googleapis.com/css?family=Tangerine"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>style<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="cssselectorcolor" style="color:brown"><br>.w3-tangerine <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; font-family<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 'Tangerine', serif<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span><br>
 </span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/style<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<p>In the body of your web page, use the class name:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-tangerine"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Making the Web Beautiful!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_fonts_intro" target="_blank">
        Try It Yourself »</a>
</div><hr/>
<h2 class="w3-xxxlarge">More Examples</h2>
<div class="w3-lobster w3-xxxlarge">
    Making the Web!
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>link<span class="attributecolor" style="color:red"> rel<span class="attributevaluecolor" style="color:mediumblue">="stylesheet"</span><br>href<span class="attributevaluecolor" style="color:mediumblue">="https://fonts.googleapis.com/css?family=Lobster"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_fonts_lobster" target="_blank">Try It Yourself »</a>
</div>
<div class="w3-lobster font-effect-brick-sign w3-xxlarge">
    Making the Web!</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>link<span class="attributecolor" style="color:red"> rel<span class="attributevaluecolor" style="color:mediumblue">="stylesheet"</span><br>href<span class="attributevaluecolor" style="color:mediumblue">="https://fonts.googleapis.com/css?family=Lobster&amp;effect=brick-sign"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_fonts_effects" target="_blank">Try It Yourself »</a>
</div>
<div class="w3-allerta w3-black w3-center w3-xxxlarge">
    Making the Web!</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>link<span class="attributecolor" style="color:red"> rel<span class="attributevaluecolor" style="color:mediumblue">="stylesheet"</span><br>href<span class="attributevaluecolor" style="color:mediumblue">="https://fonts.googleapis.com/css?family=Allerta+Stencil"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_fonts_allerta" target="_blank">Try It Yourself »</a>
</div>
<div class="w3-panel w3-note w3-yellow">
    <p>Font effects does not work in Internet Explorer 9 and earlier.</p>
</div>
<a href="text.php" class="w3-right next w3-btn w3-green">Text »</a>
<a href="cards.php" class="w3-left next w3-btn w3-green">« Cards</a>