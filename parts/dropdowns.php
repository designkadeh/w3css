<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Dropdowns</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="accordions.php" class="w3-right next w3-btn w3-green">Accordions »</a>
            <a href="bars.php" class="w3-left next w3-btn w3-green">« Bars</a>
            <br/><br/><br/>
        </div>
    </div><hr/>
    <div class="w3-dropdown-hover">
        <button class="w3-button w3-light-grey">Hover Over Me!</button>
        <div class="w3-dropdown-content w3-bar-block w3-border">
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
        </div>
    </div>
    <hr>
    <h2>W3.CSS Dropdown Classes</h2>
    <p>W3.CSS provides the following dropdown classes:</p>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tbody><tr>
            <th style="width:30%">Class</th>
            <th>Defines</th>
        </tr>
        <tr>
            <td>w3-dropdown-hover</td>
            <td>A hoverable dropdown element</td>
        </tr>
        <tr>
            <td>w3-dropdown-content</td>
            <td>The dropdown part to be displayed</td>
        </tr>
        <tr>
            <td>w3-dropdown-click</td>
            <td>A clickable dropdown element</td>
        </tr>
        </tbody></table>
    <hr>

    <h2>Dropdown Elements</h2>

    <p>The <strong>w3-dropdown-hover</strong> class defines a hoverable dropdown
        element.</p>

    <p>The <strong>w3-dropdown-content</strong> class defines the dropdown content to be
        displayed.</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hover Over Me!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-content w3-bar-block w3-border"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_dropdown_hover" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>

    <p>Both the hoverable element and the dropdown content element can be any HTML element.</p>
    <p class="tags">In the example above the hover element was a &lt;button&gt;, and the dropdown
        content a &lt;div&gt;.</p>
    <p class="tags">In the next example the hover element is a &lt;p&gt;, and the
        dropdown content is a &lt;span&gt;:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hover over me!<br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-content w3-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello World!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_dropdown_hover_p" target="_blank">Try it Yourself »</a>
        </p>
    </div>

    <hr>
    <h2>Menu Dropdowns</h2>
    <p>The <strong>w3-dropdown-hover</strong> class is perfect for creating navigation
        bars with dropdown menues:</p>

    <div class="w3-bar w3-light-grey">
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Home</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button  w3-hide-small">Link 1</a>
        <div class="w3-dropdown-hover">
            <button class="w3-button">
                Dropdown <i class="fa fa-caret-down"></i>
            </button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
            1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Dropdown<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-content w3-bar-block w3-card-4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
            2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_dropdown" target="_blank">Try It Yourself »</a>
    </div>
    <div class="w3-note w3-panel">
        <p>Note: You will learn more about <a href="w3css_navigation.asp">Navigation Bars</a> later in this tutorial.</p>
    </div>
    <hr>
    <h2>Clickable Dropdowns</h2>
    <p>The <strong>w3-dropdown-click</strong> class creates a clickable dropdown
        element.</p>
    <p>With this class, the dropdown is opened by JavaScript:</p>
    <div class="w3-dropdown-click">
        <button onclick="myFunction()" class="w3-button w3-light-grey">Click Me</button>
        <div id="myDropdown" class="w3-dropdown-content w3-bar-block w3-border">
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-click"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="myFunction()"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Click Me!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="Demo"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-content
  w3-bar-block w3-border"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>script<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="jscolor" style="color:black"><br><span class="jskeywordcolor" style="color:mediumblue">function</span> myFunction() {<br>&nbsp;&nbsp;<span class="jskeywordcolor" style="color:mediumblue">var</span> x = document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"Demo"</span>);<br><span class="jsnumbercolor" style="color:red">
</span>  &nbsp; <span class="jskeywordcolor" style="color:mediumblue">if</span> (x.<span class="jspropertycolor" style="color:black">className</span>.<span class="jspropertycolor" style="color:black">indexOf</span>(<span class="jsstringcolor" style="color:brown">"w3-show"</span>) <span class="jsnumbercolor" style="color:red">
</span>== -<span class="jsnumbercolor" style="color:red">1</span>) {&nbsp; <br>&nbsp;&nbsp;&nbsp;&nbsp;x.<span class="jspropertycolor" style="color:black">className</span> += <span class="jsstringcolor" style="color:brown">" w3-show"</span>;<br><span class="jsnumbercolor" style="color:red">
</span>  &nbsp; <span class="jsnumbercolor" style="color:red">
	</span>} <span class="jskeywordcolor" style="color:mediumblue">else</span> { <br>&nbsp;&nbsp;&nbsp; x.<span class="jspropertycolor" style="color:black">className</span> = x.<span class="jspropertycolor" style="color:black">className</span>.<span class="jspropertycolor" style="color:black">replace</span>(<span class="jsstringcolor" style="color:brown">" w3-show"</span>, <span class="jsstringcolor" style="color:brown">""</span>);<br><span class="jsnumbercolor" style="color:red">
</span>  &nbsp;&nbsp;}<br>}<br></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/script<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_dropdown_click" target="_blank">Try it Yourself »</a>
        </p>
    </div>

    <hr>
    <h2>Image Dropdowns</h2>

    <p>Move the mouse over the image:</p>

    <div class="w3-dropdown-hover" style="display:inline"><img src="images/img_snowtops.jpg" alt="Monterosso" style="width:15%;">
        <div class="w3-dropdown-content" style="width:425px"><br>
            <img src="images/img_snowtops.jpg" alt="Norway" style="width:100%">
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_snowtops.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Norway"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:20%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-content"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:300px"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_snowtops.jpg"</span>
alt<span class="attributevaluecolor" style="color:mediumblue">="Norway"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_dropdown_pic" target="_blank">Try it Yourself »</a>
        </p>
    </div>

    <hr>
    <h2>Card Dropdowns</h2>

    <p>Move the mouse over one of the cities below:</p>

    <div class="w3-dropdown-hover">London
        <div class="w3-dropdown-content w3-card-4" style="width:250px">
            <img src="images/img_london.jpg" alt="London" style="width:100%">
            <div class="w3-container">
                <p>London is the capital city of England.</p>
                <p>It is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.</p>
            </div>
        </div>
    </div>

    <div class="w3-dropdown-hover">Tokyo
        <div class="w3-dropdown-content w3-card-4" style="width:250px">
            <img src="images/img_tokyo.jpg" alt="Tokyo" style="width:100%">
            <div class="w3-container">
                <p>Tokyo is the capital city of Japan.</p>
                <p>13 million inhabitants.</p>
            </div>
        </div>
    </div>


    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>London<br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-content
 w3-card-4"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:250px"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_london.jpg"</span>
 alt<span class="attributevaluecolor" style="color:mediumblue">="London"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
 class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>London is the
            capital city of England.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>It is the
            most populous city in the UK.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br> </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_dropdown_card" target="_blank">Try it Yourself »</a>
        </p>
    </div>
    <hr>
    <h2>Animated Dropdown</h2>
    <p>Use any of the <strong>w3-animate-</strong><em><strong>classes</strong></em> to fade, zoom or slide in the dropdown content:</p>
    <div class="w3-dropdown-click">
        <button onclick="myFunction2()" class="w3-button w3-light-grey">Click Me</button>
        <div id="myDropdown2" class="w3-dropdown-content w3-bar-block w3-card-4 w3-animate-zoom">
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-click"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="myFunction()"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Click Me<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="Demo"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-content w3-bar-block w3-animate-zoom"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
            1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br> </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_dropdown_animate" target="_blank">Try it Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Right-aligned Dropdown</h2>
    <p class="tags">Use the <strong>w3-right</strong> class to float the dropdown to the right. Use CSS
        to position the dropdown content (<strong>right:0</strong> will make the dropdown menu go from
        right to left instead of left to right):</p>

    <div class="w3-dropdown-hover w3-right">
        <button class="w3-button w3-light-grey">Hover Over Me</button>
        <div class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
        </div>
    </div>

    <div class="w3-clear"></div>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-hover w3-right"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Dropdown<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-content
  w3-bar-block w3-border"</span> style<span class="attributevaluecolor" style="color:mediumblue">="right:0"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_dropdown_right" target="_blank">Try it Yourself »</a>
        </p>
    </div>

    <br>
    <div class="w3-clear nextprev">
        <a href="accordions.php" class="w3-right next w3-btn w3-green">Accordions »</a>
        <a href="bars.php" class="w3-left next w3-btn w3-green">« Bars</a>
    </div>
    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            var x = document.getElementById("myDropdown");
            if (x.classList) {
                x.classList.toggle("w3-show");
            } else {
                // Fallback for IE9 and earlier
                if (x.className.indexOf("w3-show") == -1)
                    x.className = x.className + " w3-show";
                else
                    x.className = x.className.replace("w3-show", "");
            }
        }

        function myFunction2() {
            var x = document.getElementById("myDropdown2");
            if (x.classList) {
                x.classList.toggle("w3-show");
            } else {
                // Fallback for IE9 and earlier
                if (x.className.indexOf("w3-show") == -1)
                    x.className = x.className + " w3-show";
                else
                    x.className = x.className.replace("w3-show", "");
            }
        }
    </script>
</div>