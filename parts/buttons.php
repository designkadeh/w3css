<div class="w3-container" id="home">
    <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
    <h1 class="w3-xxxlarge w3-text-purple"><b>Buttons</b></h1>
    <hr class="w3-round">
    <div class="w3-container"><br/>
        <a href="notes.php" class="w3-right next w3-btn w3-green">Notes »</a>
        <a href="display.php" class="w3-left next w3-btn w3-green">« Display</a>
        <br/><br/><br/>
    </div>
</div><hr/>
<div class="w3-section">
    <button class="w3-btn w3-ripple w3-red">Button</button>
    <button class="w3-btn w3-ripple w3-blue">Button</button>
    <button class="w3-btn w3-ripple w3-green">Button</button>
    <button class="w3-btn w3-ripple w3-orange">Button</button>
    <button class="w3-btn w3-ripple w3-teal">Button</button>
    <button class="w3-btn w3-ripple w3-black">Button</button>
    <button class="w3-btn w3-black w3-disabled">Disabled</button>
</div>
<div class="w3-section">
    <button class="w3-button w3-red">Button</button>
    <button class="w3-button w3-blue">Button</button>
    <button class="w3-button w3-green">Button</button>
    <button class="w3-button w3-orange">Button</button>
    <button class="w3-button w3-teal">Button</button>
    <button class="w3-button w3-black">Button</button>
    <button class="w3-button w3-black w3-disabled">Disabled</button>
</div>
<div class="w3-section">
    <button class="w3-btn w3-white w3-border">Button</button>
    <button class="w3-btn w3-grey w3-round">Button</button>
    <button class="w3-btn w3-white w3-border w3-border-blue w3-round">Button</button>
    <button class="w3-btn w3-white w3-border w3-border-red w3-text-red w3-round-large">Button</button>
    <button class="w3-btn w3-white w3-border w3-border-green w3-round-xlarge">Button</button>
    <button class="w3-btn w3-red" style="text-shadow:1px 1px 0 #444"><b>Shadow</b></button>
    <button class="w3-btn w3-black w3-padding-large w3-hover-red">Button</button>
</div>
<div class="w3-section">
    <a class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-black" style="z-index:0">+</a>
    <a class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-teal" style="z-index:0">+</a>
    <a class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-grey" style="z-index:0">+</a>
</div>
<div class="w3-bar">
    <button class="w3-bar-item w3-button w3-black w3-right">Button1</button>
    <button class="w3-bar-item w3-button w3-teal w3-right">Button2</button>
    <button class="w3-bar-item w3-button w3-dark-grey w3-right">Button3</button>
</div>
<div class="w3-section">
    <button class="w3-button w3-block w3-black">Button</button>
    <button class="w3-button w3-block w3-teal">Button</button>
</div><hr/>
<h2>W3.CSS Button Classes</h2>
<p>W3.CSS provides the following classes for buttons:</p>
<table class="w3-table w3-bordered w3-striped w3-border">
    <tbody><tr>
        <th style="width:170px">Class</th>
        <th>Defines</th>
    </tr>
    <tr>
        <td>w3-btn</td>
        <td>A rectangular button with a shadow hover effect.<br>
            Default color is black.</td>
    </tr>
    <tr>
        <td>w3-button</td>
        <td>
            A rectangular button with a gray hover effect.<br>
            Default color is light-gray
            in W3.CSS version 3.<br>Default color is inherited from parent element in version 4.</td>
    </tr>
    <tr>
        <td>w3-bar</td>
        <td>
            A horizontal bar that can be used to group buttons together.<br>
            (Perfect for horizontal navigation menus)</td>
    </tr>
    <tr>
        <td>w3-block</td>
        <td>
            Class that can be used to define a full width (100%) button.</td>
    </tr>
    <tr>
        <td>w3-circle</td>
        <td>Can be used to define a circular button.</td>
    </tr>
    <tr>
        <td>w3-ripple</td>
        <td>Can be used to create a ripple effect.</td>
    </tr>
    </tbody></table><hr/>
<h2>Buttons</h2>
<p>Both the <strong>w3-button</strong> class and the <strong>w3-btn</strong>
    class add button-behavior to any HTML elements.</p>
<p class="tags">The most common elements to use are
    &lt;input type="button"&gt;, &lt;button&gt;, and &lt;a&gt;:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-black"</span> type<span class="attributevaluecolor" style="color:mediumblue">="button"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Input Button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="https://www.w3schools.com"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-black"</span> type<span class="attributevaluecolor" style="color:mediumblue">="button"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Input Button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="https://www.w3schools.com"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <p><a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_all" target="_blank">Try It Yourself »</a></p>
</div><hr/>
<h2>Button Colors</h2>
<p>
    <button class="w3-button w3-black">Black</button>
    <button class="w3-button w3-khaki">Khaki</button>
    <button class="w3-button w3-yellow">Yellow</button>
    <button class="w3-button w3-red">Red</button>
    <button class="w3-button w3-purple">Purple</button>
    <button class="w3-button w3-aqua">Aqua</button>
    <button class="w3-button w3-blue">Blue</button>
    <button class="w3-button w3-indigo">Indigo</button>
    <button class="w3-button w3-green">Green</button>
    <button class="w3-button w3-teal">Teal</button>
</p>
<p>All the <strong>w3-<em>color</em></strong> classes is used to add color to buttons:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Black<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-khaki"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Khaki<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-yellow"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Yellow<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Red<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-purple"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Purple<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <p><a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_colors" target="_blank">Try It Yourself »</a></p>
</div><hr/>
<h2>Hover Colors</h2>
<p>Hover effects also come in all colors. Here are some:</p>
<p>
    <button class="w3-button w3-black w3-hover-white">White</button>
    <button class="w3-button w3-black w3-hover-red">Red</button>
    <button class="w3-button w3-black w3-hover-purple">Purple</button>
    <button class="w3-button w3-black w3-hover-aqua">Aqua</button>
    <button class="w3-button w3-black w3-hover-blue">Blue</button>
    <button class="w3-button w3-black w3-hover-green">Green</button>
    <button class="w3-button w3-black w3-hover-teal">Teal</button>
</p><hr/>
<h2>Button Shapes</h2>
<p>
    <button class="w3-button w3-black">Normal</button>
    <button class="w3-button w3-black w3-round">Round</button>
    <button class="w3-button w3-black w3-round-large">Rounder</button>
    <button class="w3-button w3-black w3-round-xlarge">and Rounder</button>
    <button class="w3-button w3-black w3-round-xxlarge">and Rounder</button>
</p>
<p>
    <button class="w3-btn w3-black">Normal</button>
    <button class="w3-btn w3-black w3-round">Round</button>
    <button class="w3-btn w3-black w3-round-large">Rounder</button>
    <button class="w3-btn w3-black w3-round-xlarge">and Rounder</button>
    <button class="w3-btn w3-black w3-round-xxlarge">and Rounder</button>
</p>
<p>The <strong>w3-round-<em>size</em></strong> classes are used to add rounded
    borders to buttons:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-round"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Round<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-round-large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Rounder<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-round-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>and Rounder<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-round-xxlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>and Rounder<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-round"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Round<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-round-large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Rounder<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-round-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>and Rounder<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-round-xxlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>and Rounder<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_shapes" target="_blank">
        Try It Yourself »</a>
</div><hr/>
<h2>Button Sizes</h2>
<p>
    <button class="w3-button w3-tiny w3-black">Tiny</button>
    <button class="w3-button w3-small w3-black">Small</button>
    <button class="w3-button w3-medium w3-black">Medium</button>
    <button class="w3-button w3-large w3-black">Large</button>
    <button class="w3-button w3-xlarge w3-black">XLarge</button>
</p>
<p>The <strong>w3-<em>size</em></strong> classes can be used to define different text sizes:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-tiny"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Tiny<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-small"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Small<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-medium"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Medium<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Large<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>xLarge<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-xxlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>XXLarge<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-xxxlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>XXXLarge<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-jumbo"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jumbo<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_sizes" target="_blank">Try It Yourself »</a>
    </p>
</div><hr/>
<h2>Button Borders</h2>
<p>
    <button class="w3-button w3-white w3-border">Button</button>
    <button class="w3-button w3-white w3-border w3-border-blue">Button</button>
    <button class="w3-button w3-yellow w3-border">Button</button>
    <button class="w3-button w3-white w3-border w3-border-red w3-round-large">Button</button>
</p>
<p>
    <button class="w3-btn w3-white w3-border">Button</button>
    <button class="w3-btn w3-white w3-border w3-border-blue">Button</button>
    <button class="w3-btn w3-yellow w3-border">Button</button>
    <button class="w3-btn w3-white w3-border w3-border-red w3-round-large">Button</button>
</p>
<p>The <strong>w3-border</strong> class can be used to add borders to buttons.</p>
<p>The <strong>w3-border-<em>color</em> </strong>classes are used to define the color of the border:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-white w3-border"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-white w3-border w3-border-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-yellow w3-border"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-white w3-border w3-border-red w3-round-large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_borders" target="_blank">Try It Yourself »</a>
    </p>
</div>
<div class="w3-panel w3-yellow w3-note">
    <p><strong>Tip:</strong> Add the <strong>w3-round-<em>size</em></strong> class to add rounded borders.</p>
</div><hr/>
<h2>Buttons With Different Text Effects</h2>
<p>Buttons can use a wider text effects:</p>
<p>
    <button class="w3-button w3-black">Normal</button>
    <button class="w3-button w3-wide w3-black">Wide</button>
</p>
<p>The <strong>w3-wide</strong> class adds a wider text effect:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Normal<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-wide"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Wide<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_text_effects3" target="_blank">Try It Yourself »</a>
    </p>
</div>
<p>Buttons can have italic and bold text effects:</p>
<p>
    <button class="w3-button w3-black">Normal</button>
    <button class="w3-button w3-black"><i>Italic</i></button>
    <button class="w3-button w3-black"><b>Bold</b></button>
</p>
<p>Use standard HTML tags (&lt;i&gt; and &lt;b&gt;) to add italic or bold effect to the
    button text:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>i<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Italic<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/i<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>b<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Bold<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/b<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_text_effects1" target="_blank">Try It Yourself »</a>
    </p>
</div><hr/>
<h2>Buttons With Padding</h2>
<p>
    <button class="w3-button w3-padding-small w3-black">Button</button>
    <button class="w3-button w3-black">Button</button>
    <button class="w3-button w3-padding-large w3-black">Button</button>
</p>
<p>
    <button class="w3-btn w3-black w3-padding-small">Button</button>
    <button class="w3-btn w3-black">Button</button>
    <button class="w3-btn w3-black w3-padding-large">Button</button>
</p>
<p>The <strong>w3-padding-<em>size</em></strong> classes is used to add extra
    padding around the button text:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-padding-small"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-padding-large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-padding-small"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-padding-large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_padding" target="_blank">Try It Yourself »</a>
    </p>
</div><hr>
<h2>Full-width Buttons</h2>
<p>To create a full-width button, add the <strong>w3-block</strong> class to the button.</p>
<p>Full-width buttons have a width of 100%, and spans the entire width of the parent element:</p>
<p><button class="w3-button w3-block w3-black">Button</button></p>
<p><button class="w3-button w3-block w3-teal">Button</button></p>
<p><button class="w3-button w3-block w3-red w3-left-align">Button</button></p>
<p><button class="w3-btn w3-block w3-black">Button</button></p>
<p><button class="w3-btn w3-block w3-teal">Button</button></p>
<p><button class="w3-btn w3-block w3-red w3-left-align">Button</button></p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-block"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-block w3-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-block w3-red w3-left-align"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-block"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-block w3-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-block w3-red w3-left-align"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_fullwidth" target="_blank">Try It Yourself »</a>
    </p>
</div>
<div class="w3-panel w3-note w3-yellow">
    <p><strong>Tip:</strong> Align the button text with the <strong>w3-left-align</strong>
        class or the <strong>w3-right-align</strong> class.</p>
</div>
<p class="tags">The size of the a block can be defined using <strong>style="width:"</strong>.</p>
<p>
    <button class="w3-button w3-block w3-black" style="width:30%">Button</button>
    <button class="w3-button w3-block w3-teal" style="width:50%">Button</button>
    <button class="w3-button w3-block w3-red" style="width:80%">Button</button>
</p><hr/>
<h2>Disabled Buttons</h2>
<p>Buttons stand out with a shadow effect and the cursor turns into a hand when mousing over them.</p>
<p class="tags">Disabled buttons are opaque (semi-transparent) and display a "no parking sign":</p>
<p>
    <button class="w3-button w3-teal">Button</button>
    <button class="w3-button w3-teal w3-disabled">Disabled</button>
    <input type="button" class="w3-button w3-black" value="Button">
    <input type="button" class="w3-button w3-black" value="Disabled" disabled="">
</p>
<p>
    <button class="w3-btn w3-teal">Button</button>
    <button class="w3-btn w3-teal w3-disabled">Disabled</button>
    <input type="button" class="w3-btn w3-black" value="Button">
    <input type="button" class="w3-btn w3-black" value="Disabled" disabled="">
</p>
<p class="tags">The <strong>w3-disabled</strong> class is used to create a disabled button
    (if the element support the standard HTML disabled attribute, you can use the
    disabled attribute instead):</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-disabled"</span> href<span class="attributevaluecolor" style="color:mediumblue">="https://www.w3schools.com"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span> disabled</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="button"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Button"</span> disabled</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-disabled"</span> href<span class="attributevaluecolor" style="color:mediumblue">="https://www.w3schools.com"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn"</span> disabled</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="button"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Button"</span> disabled</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_disabled" target="_blank">Try It Yourself »</a>
    </p>
</div>
<hr/>
<h2>Button Bars</h2>
<p>Buttons can be grouped together in a horizontal bar using the <strong>w3-bar</strong> class:</p>
<div class="w3-bar">
    <button class="w3-button w3-black">Button</button>
    <button class="w3-button w3-teal">Button</button>
    <button class="w3-button w3-red">Button</button>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_bar" target="_blank">Try It Yourself »</a>
    </p>
</div>
<div class="w3-panel w3-note w3-yellow">
    <p>The w3-bar class was introduced in W3.CSS version 2.93 / 2.94.</p>
</div>
<p>Buttons can be grouped together without a space between them by using <strong>w3-bar-item</strong> class:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_bar_item" target="_blank">Try It Yourself »</a>
    </p>
</div>
<div class="w3-center">
    <p>Buttons bars can be centered using the <strong>w3-center</strong> class:</p>
    <div class="w3-bar">
        <button class="w3-button w3-black">Button</button>
        <button class="w3-button w3-teal">Button</button>
        <button class="w3-button w3-dark-grey" disabled="">Button</button>
    </div>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-disabled"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_bar_center" target="_blank">Try It Yourself »</a>
    </p>
</div>
<p>To show two (or more) button bars on the same line, add the <strong>w3-show-inline-block</strong> class:</p>
<div class="w3-show-inline-block">
    <div class="w3-bar">
        <button class="w3-bar-item w3-button w3-black">Button</button>
        <button class="w3-bar-item w3-button w3-teal">Button</button>
        <button class="w3-bar-item w3-button w3-dark-grey" disabled="">Button</button>
    </div>
</div>
<div class="w3-show-inline-block">
    <div class="w3-bar">
        <button class="w3-bar-item w3-button w3-black">Button</button>
        <button class="w3-bar-item w3-button w3-teal">Button</button>
        <button class="w3-bar-item w3-button w3-dark-grey" disabled="">Button</button>
    </div>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-show-inline-block"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn
w3-disabled"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-show-inline-block"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn
w3-disabled"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_bar_inline" target="_blank">Try It Yourself »</a>
    </p>
</div><hr/>
<h2>Navigation Bars</h2>
<p>Button bars can easily be used as navigation bars:</p>
<div class="w3-bar w3-black">
    <button class="w3-bar-item w3-button w3-right">Button</button>
    <button class="w3-bar-item w3-button w3-right">Button</button>
    <button class="w3-bar-item w3-button w3-right">Button</button>
</div><br/>
<div class="w3-bar w3-green">
    <button class="w3-bar-item w3-button w3-right">Button</button>
    <button class="w3-bar-item w3-button w3-right">Button</button>
    <button class="w3-bar-item w3-button w3-right">Button</button>
</div><br/>
<div class="w3-bar w3-red">
    <button class="w3-bar-item w3-button w3-right">Button</button>
    <button class="w3-bar-item w3-button w3-right">Button</button>
    <button class="w3-bar-item w3-button w3-right">Button</button>
</div><br>
<div class="w3-bar w3-border">
    <button class="w3-bar-item w3-button w3-right">Button</button>
    <button class="w3-bar-item w3-button w3-right">Button</button>
    <button class="w3-bar-item w3-button w3-right">Button</button>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_bar_nav" target="_blank">Try It Yourself »</a>
    </p>
</div>
<p class="tags">The size of each items can be defined by using <strong>style="width:"</strong>:</p>
<div class="w3-bar">
    <button class="w3-bar-item w3-button w3-black" style="width:33.3%">Button</button>
    <button class="w3-bar-item w3-button w3-teal" style="width:33.3%">Button</button>
    <button class="w3-bar-item w3-button w3-red" style="width:33.3%">Button</button>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span>
style<span class="attributevaluecolor" style="color:mediumblue">="width:33.3%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button
w3-teal"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:33.3%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-red"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:33.3%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_bar_size" target="_blank">Try It Yourself »</a>
    </p>
</div>
<div class="w3-panel w3-note w3-yellow">
    <p>You will learn more about navigation later in this tutorial.</p>
</div><hr/>
<h2>Left and Right Buttons</h2>
<p>Use the <strong>.w3-left</strong> class and the <strong>.w3-right</strong> class to float buttons
    to the left or to the right:</p>
<div class="w3-bar w3-black">
    <button class="w3-bar-item w3-button w3-left">Left</button>
    <button class="w3-bar-item w3-button w3-right">Right</button>
</div>
<p>Used to create "previous/next" buttons:</p>
<div class="w3-bar">
    <button class="w3-bar-item w3-button w3-left w3-light-grey">Previous » </button>
    <button class="w3-bar-item w3-button w3-right w3-green">« Next </button>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-left"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Left<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-right"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Right<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_leftright" target="_blank">Try It Yourself »</a>
    </p>
</div><hr/>
<h2>Buttons With Ripple Effects</h2>
<p class="tags">The <strong>w3-ripple</strong> class creates a ripple effect on buttons (when they are clicked on):</p>
<p>
    <button class="w3-button w3-black w3-ripple">Button</button>
    <button class="w3-button w3-ripple w3-red">Button</button>
    <button class="w3-button w3-ripple w3-yellow">Button</button>
</p>
<p>
    <button class="w3-btn w3-black w3-ripple">Button</button>
    <button class="w3-btn w3-ripple w3-red">Button</button>
    <button class="w3-btn w3-ripple w3-yellow">Button</button>
</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-ripple"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-ripple w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button
w3-ripple w3-yellow"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Button<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_ripple" target="_blank">Try It Yourself »</a>
    </p>
</div>
<hr/>
<h2>All Elements Can Be Buttons</h2>
<p>With W3.CSS, all elements can be a button:</p>
<div class="w3-row-padding" style="margin:0 -16px">
    <div class="w3-half">
        <div class="w3-button w3-white w3-ripple" style="margin:0;padding:0">
            <img src="images/img_snowtops.jpg" style="width:100%">
            <p>A picture can be a w3-button</p>
        </div>
    </div>
    <div class="w3-half">
        <div class="w3-btn w3-white w3-ripple" style="margin:0;padding:0">
            <img src="images/img_snowtops.jpg" style="width:100%">
            <p>A picture can be a w3-btn</p>
        </div>
    </div>
</div>
<br/><br/>
<div class="w3-button w3-green w3-ripple">
    <p>Any div, header, footer or other containers can be a <strong>w3-button</strong>!</p>
</div>
<div class="w3-btn w3-green w3-ripple">
    <p>Any div, header, footer or other containers can be a <strong>w3-btn</strong>!</p>
</div>
<hr/>
<h2>Circular Buttons</h2>
<p>The w3-circle class can be used to create circular buttons:</p>
<p>
    <a class="w3-button w3-xlarge w3-circle w3-black">+</a>
    <a class="w3-button w3-xlarge w3-circle w3-teal">+</a>
</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-circle w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>+<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-circle w3-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>+<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_circle" target="_blank">Try It Yourself »</a>
    </p>
</div>
<p>Square buttons:</p>
<p>
    <a class="w3-button w3-xlarge w3-black">+</a>
    <a class="w3-button w3-xlarge w3-teal">+</a>
</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>+<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>+<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    </div>
    <p>
        <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_buttons_square" target="_blank">Try It Yourself »</a>
    </p>
</div>
<a href="notes.php" class="w3-right next w3-btn w3-green">Notes »</a>
<a href="display.php" class="w3-left next w3-btn w3-green">« Display</a>