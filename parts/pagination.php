<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Pagination</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="progressbar.php" class="w3-right next w3-btn w3-green">Progress Bar »</a>
            <a href="tabs.php" class="w3-left next w3-btn w3-green">« Tabs</a>
            <br/><br/><br/>
        </div>
    </div><hr/>

    <div class="w3-bar">
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right">«</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-red w3-right">1</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right">2</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right">3</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right">4</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right">5</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right">6</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right">»</a>
    </div>
    <hr>

    <h2>Basic Pagination</h2>

    <p>If you have a web site with many pages, you may want to use some sort of pagination.</p>


    <p class="tags">To create a basic pagination, use buttons (<strong>w3-button</strong>) in a
        bar (<strong>w3-bar</strong>).</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>4<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>5<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_pagination" target="_blank">Try It Yourself »</a>
        </p>
    </div>

    <p>To remove the space between the buttons add a <strong>w3-bar-item</strong>
        class:</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;laquo;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>4<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>5<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;raquo;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_pagination_items" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Pagination Arrows</h2>
    <p>Use HTML entities or icons from an icon library to add pagination arrows:</p>

    <div class="w3-bar">
        <a href="javascript:void(0)" class="w3-button">«</a>
        <a href="javascript:void(0)" class="w3-button">1</a>
        <a href="javascript:void(0)" class="w3-button">2</a>
        <a href="javascript:void(0)" class="w3-button">3</a>
        <a href="javascript:void(0)" class="w3-button">4</a>
        <a href="javascript:void(0)" class="w3-button">»</a>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;laquo;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>4<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>5<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;raquo;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_pagination_arrows" target="_blank">Try It Yourself »</a>
        </p>
    </div>

    <hr>
    <h2>Active/Current Link</h2>

    <div class="w3-bar">
        <a href="javascript:void(0)" class="w3-button">«</a>
        <a href="javascript:void(0)" class="w3-button w3-green">1</a>
        <a href="javascript:void(0)" class="w3-button">2</a>
        <a href="javascript:void(0)" class="w3-button">3</a>
        <a href="javascript:void(0)" class="w3-button">4</a>
        <a href="javascript:void(0)" class="w3-button">»</a>
    </div>
    <p>Use one of the <strong>w3-<em>color</em></strong> classes to indicate which page the user is on:</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;laquo;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>4<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;raquo;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_pagination_active" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Hover Color</h2>

    <div class="w3-bar">
        <a href="javascript:void(0)" class="w3-button w3-hover-purple">«</a>
        <a href="javascript:void(0)" class="w3-button w3-hover-green">1</a>
        <a href="javascript:void(0)" class="w3-button w3-hover-red">2</a>
        <a href="javascript:void(0)" class="w3-button w3-hover-blue">3</a>
        <a href="javascript:void(0)" class="w3-button w3-hover-black">4</a>
        <a href="javascript:void(0)" class="w3-button w3-hover-orange">»</a>
    </div>

    <p>By default, when you move the mouse over the pagination links, they get a grey background color. Use any of the <strong>w3-hover-<em>color</em></strong> classes to change the hover color:</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-hover-purple"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;laquo;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red">
  href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-hover-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-hover-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button
  w3-hover-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-hover-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>4<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-hover-orange"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;raquo;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>  </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_pagination_hover" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Pagination Sizing</h2>
    <div class="w3-bar w3-small">
        <a href="javascript:void(0)" class="w3-button">«</a>
        <a href="javascript:void(0)" class="w3-button">1</a>
        <a href="javascript:void(0)" class="w3-button">2</a>
        <a href="javascript:void(0)" class="w3-button">3</a>
        <a href="javascript:void(0)" class="w3-button">4</a>
        <a href="javascript:void(0)" class="w3-button">»</a>
    </div>
    <div class="w3-bar w3-xlarge">
        <a href="javascript:void(0)" class="w3-button">«</a>
        <a href="javascript:void(0)" class="w3-button">1</a>
        <a href="javascript:void(0)" class="w3-button">2</a>
        <a href="javascript:void(0)" class="w3-button">3</a>
        <a href="javascript:void(0)" class="w3-button">4</a>
        <a href="javascript:void(0)" class="w3-button">»</a>
    </div>

    <p>Use <strong>w3-tiny</strong>, <strong>w3-small</strong>, <strong>w3-large</strong>, <strong>w3-xlarge</strong>, <strong>w3-xxlarge</strong> or
        <strong>w3-xxxlarge</strong> to size the pagination:</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar
w3-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_pagination_size" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Centered Pagination</h2>
    <div class="w3-center">
        <div class="w3-bar w3-large">
            <a href="javascript:void(0)" class="w3-button">«</a>
            <a href="javascript:void(0)" class="w3-button">1</a>
            <a href="javascript:void(0)" class="w3-button">2</a>
            <a href="javascript:void(0)" class="w3-button">3</a>
            <a href="javascript:void(0)" class="w3-button">4</a>
            <a href="javascript:void(0)" class="w3-button">»</a>
        </div>
    </div>
    <p>To center the pagination, put the "w3-bar" element inside a "w3-center" element:</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;laquo;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>4<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;raquo;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_pagination_center" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Bordered Pagination</h2>

    <div class="w3-show-inline-block">
        <div class="w3-bar w3-border">
            <a class="w3-bar-item w3-button w3-right" href="#">«</a>
            <a class="w3-bar-item w3-button w3-green w3-right" href="#">1</a>
            <a class="w3-bar-item w3-button w3-right" href="#">2</a>
            <a class="w3-bar-item w3-button w3-right" href="#">3</a>
            <a class="w3-bar-item w3-button w3-right" href="#">4</a>
            <a class="w3-bar-item w3-button w3-right" href="#">5</a>
            <a class="w3-bar-item w3-button w3-right" href="#">»</a>
        </div>
    </div>

    <p>Add the <strong>w3-border</strong> class to create a pagination with borders:</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar
w3-border"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_pagination_border" target="_blank">Try It Yourself »</a>
        </p>
    </div>

    <h3>Rounded Borders</h3>
    <div class="w3-show-inline-block">
        <div class="w3-bar w3-border w3-round">
            <a class="w3-bar-item w3-button w3-right" href="#">«</a>
            <a class="w3-bar-item w3-button w3-green w3-right" href="#">1</a>
            <a class="w3-bar-item w3-button w3-right" href="#">2</a>
            <a class="w3-bar-item w3-button w3-right" href="#">3</a>
            <a class="w3-bar-item w3-button w3-right" href="#">4</a>
            <a class="w3-bar-item w3-button w3-right" href="#">5</a>
            <a class="w3-bar-item w3-button w3-right" href="#">»</a>
        </div>
    </div>

    <p>Add the <strong>w3-round</strong> class next to w3-border for rounded borders:</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar
w3-border w3-round"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_pagination_border_round" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Other Pagination Examples</h2>
    <p>The w3-bar class can also be used to create next/previous buttons:</p>
    <div class="w3-bar w3-border w3-round">
        <a href="javascript:void(0)" class="w3-button w3-left"> Previous ❯</a>
        <a href="javascript:void(0)" class="w3-button w3-right">❮ Next </a>
    </div>
    <br>
    <div class="w3-bar w3-border">
        <a href="javascript:void(0)" class="w3-button w3-border-right w3-left">❯</a>
        <a href="javascript:void(0)" class="w3-button w3-border-left w3-right">❮</a>
    </div>

    <div class="w3-example">
        <h3>Next/previous Example</h3>
        <div class="w3-code notranslate htmlHigh">

            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-border w3-round"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;#10094; Previous<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button
  w3-right"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Next &amp;#10095;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_pagination_prevnext" target="_blank">Try It Yourself »</a>
        </p>
    </div>

    <div class="w3-show-inline-block">
        <div class="w3-bar w3-light-grey">
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-dark-grey w3-right">Home</a>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right">Link 1</a>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right">Link 2</a>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right">Link 3</a>
        </div>
    </div>

    <div class="w3-example">
        <h3>Inline Menu Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-show-inline-block"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-dark-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red">
  href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_pagination_menu" target="_blank">Try It Yourself »</a>
        </p>
    </div>

    <br>
    <div class="w3-clear nextprev">
        <a href="progressbar.php" class="w3-right next w3-btn w3-green">Progress Bar »</a>
        <a href="tabs.php" class="w3-left next w3-btn w3-green">« Tabs</a>
    </div>
</div>