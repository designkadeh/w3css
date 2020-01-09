<div class="w3-container" id="home">
    <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
    <h1 class="w3-xxxlarge w3-text-purple"><b>Cards</b></h1>
    <hr class="w3-round">
    <div class="w3-container"><br/>
        <a href="fonts.php" class="w3-right next w3-btn w3-green">Fonts »</a>
        <a href="borders.php" class="w3-left next w3-btn w3-green">« Borders</a>
        <br/><br/><br/>
    </div>
</div><hr/>
<div class="w3-row w3-margin-top">
    <div class="w3-half">
        <div class="w3-card-4 card-test test">
            <img src="images/img_avatar3.png" alt="Avatar">
            <div class="w3-container">
                <h4><b>John</b></h4>
                <p>Architect and engineer</p>
            </div>
        </div>
        <br>
    </div>
    <div class="w3-half w3-hide-small">
        <div class="w3-card-4 test w3-hide-small-card">
            <header class="w3-container w3-blue">
                <h1>Header</h1>
            </header>
            <div class="w3-container">
                <p>Some text.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <footer class="w3-container w3-blue">
                <h5>Footer</h5>
            </footer>

        </div>
    </div>
</div><hr/>
<h2>W3.CSS Card Classes</h2>
<p>W3.CSS provides the following classes for displaying paper-like cards:</p>
<table class="w3-table-all">
    <tbody><tr>
        <th>Class</th>
        <th>Defines</th>
    </tr>
    <tr>
        <td>w3-card</td>
        <td>Same as w3-card-2</td>
    </tr>
    <tr>
        <td>w3-card-2</td>
        <td>Container for any HTML content (2px bordered shadow)</td>
    </tr>
    <tr>
        <td>w3-card-4</td>
        <td>Container for any HTML content (4px bordered shadow)</td>
    </tr>
    </tbody></table>
<hr/>
<h2>Colored Cards</h2>
<p>To display colored cards, just add <strong>w3-<em>color</em></strong> class:</p>
<div class="w3-row-padding" style="margin:0 -16px">
    <div class="w3-third">
        <div style="height:100px" class="w3-card w3-container w3-yellow w3-margin-bottom"><p>w3-card</p></div>
    </div>
    <div class="w3-third">
        <div style="height:100px" class="w3-card-2 w3-container w3-margin-bottom"><p>w3-card-2</p></div>
    </div>
    <div class="w3-third">
        <div style="height:100px" class="w3-card-4 w3-container w3-yellow w3-margin-bottom"><p>w3-card-4</p></div>
    </div>
</div>
<div class="w3-example">
    <h3>Example (White Cards)</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-card"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>w3-card<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_cards" target="_blank">Try It Yourself »</a>
</div>
<div class="w3-example">
    <h3 class="tags">Example (Yellow Cards)</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-card w3-yellow"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>w3-card<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_cards_yellow" target="_blank">Try It Yourself »</a>
</div>
<hr/>
<h2>Card Content</h2>
<div class="w3-row">
    <div class="w3-card-4 xtest w3-col m8">
        <header class="w3-container w3-blue">
            <h1>Header</h1>
        </header>
        <div class="w3-container">
            <p>Some text.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <footer class="w3-container w3-blue">
            <h5>Footer</h5>
        </footer>

    </div>
</div>
<p>Add containers inside the card to create different sections:</p>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-card-4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>header<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container
w3-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Header<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/header<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Lorem ipsum...<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>footer<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container
w3-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h5<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Footer<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h5<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/footer<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_cards_depth" target="_blank">Try It Yourself »</a>
</div><hr/>
<h2>Photo Card</h2>
<div class="w3-card-4 test" style="width:50%;max-width:400px">
    <img src="images/img_snowtops.jpg" alt="Alps" style="width:100%">
    <div class="w3-container w3-center w3-padding">
        <p>The Italian / Austrian Alps</p>
    </div>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-card-4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_snowtops.jpg"</span>
alt<span class="attributevaluecolor" style="color:mediumblue">="Alps"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>The Italian / Austrian Alps<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_cards_photo" target="_blank">Try It Yourself »</a>
</div><hr/>
<h2>Hover Effect</h2>
<p class="tags">The<strong> w3-hover-shadow</strong> class adds a shadow effect on hover - this will make any element look like a card on mouse-over (same style as w3-card-4).</p>
<div class="w3-green w3-hover-shadow w3-padding-32 w3-center w3-container test" style="width:40%">
    <p>Hover over me!</p>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-green w3-hover-shadow w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hover over
        me!<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_cards_hover" target="_blank">Try It Yourself »</a>
</div><hr/>
<h2>More Examples</h2>
<div class="w3-card-4 test w3-dark-grey" style="width:50%;max-width:400px">

    <div class="w3-container w3-center">
        <h3>Friend Request</h3>
        <img src="images/img_avatar3.png" alt="Avatar" style="width:80%">
        <h4>John Doe</h4>
        <br>

        <button class="w3-button w3-green" style="width:49%">Accept</button>
        <button class="w3-button w3-red" style="width:49%">Decline</button><br><br>
    </div>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-card-4 w3-dark-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container
w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h3<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Friend request<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h3<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_avatar3.png"</span>
alt<span class="attributevaluecolor" style="color:mediumblue">="Avatar"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:80%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h5<span class="tagcolor" style="color:mediumblue">&gt;</span></span>John
        Doe<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h5<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Accept<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Decline<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_cards_buttons" target="_blank">Try It Yourself »</a>
</div>
<div class="w3-card-4 test" style="width:50%;max-width:450px">
    <header class="w3-container w3-light-grey">
        <h3>John Doe</h3>
    </header>

    <div class="w3-container">
        <p>1 new friend request</p>
        <hr>
        <img src="images/img_avatar3.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <p>CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.</p>
        <br>
    </div>
    <button class="w3-button w3-block w3-dark-grey">+ Connect</button>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-card-4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>header<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h3<span class="tagcolor" style="color:mediumblue">&gt;</span></span>John Doe<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h3<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/header<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>1 new friend request<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>hr<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_avatar3.png"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Avatar"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-left w3-circle"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>President/CEO at Mighty Schools...<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button
  w3-block
w3-dark-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>+ Connect<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_cards_buttons2" target="_blank">Try It Yourself »</a>
</div><hr/>
<h2>Weather Widget</h2>
<div class="w3-card-4" style="width:50%">
    <div class="w3-display-container w3-text-white">
        <img src="images/img_london.jpg" alt="Lights" style="width:100%">
        <div class="w3-xlarge w3-display-bottomright w3-padding">LONDON 60° F</div>
    </div>
    <div class="w3-row w3-margin-right">
        <div class="w3-third w3-right w3-center">
            <h3>MON</h3>
            <img src="images/img_weather_sun.jpg" alt="sun">
        </div>
        <div class="w3-third w3-right w3-center">
            <h3>TUE</h3>
            <img src="images/img_weather_cloud.jpg" alt="sun cloud">
        </div>
        <div class="w3-third w3-right w3-center w3-margin-bottom">
            <h3>WED</h3>
            <img src="images/img_weather_clouds.jpg" alt="cloud">
        </div>
    </div>
</div>
<div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-card-4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
 class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-container w3-text-white"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_london.jpg"</span>
 alt<span class="attributevaluecolor" style="color:mediumblue">="Lights"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-xlarge w3-display-bottomleft
 w3-padding"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>LONDON 60&amp;deg; F<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        &nbsp;&nbsp;&nbsp;
        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-third w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h3<span class="tagcolor" style="color:mediumblue">&gt;</span></span>MON<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h3<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_weather_sun.jpg"</span>
 alt<span class="attributevaluecolor" style="color:mediumblue">="sun"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-third w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h3<span class="tagcolor" style="color:mediumblue">&gt;</span></span>TUE<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h3<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red">
 src<span class="attributevaluecolor" style="color:mediumblue">="img_weather_cloud.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="cloud"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-third
 w3-center w3-margin-bottom"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h3<span class="tagcolor" style="color:mediumblue">&gt;</span></span>WED<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h3<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_weather_clouds.jpg"</span>
 alt<span class="attributevaluecolor" style="color:mediumblue">="clouds"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_cards_widget" target="_blank">Try It Yourself »</a>
</div><br/>
<a href="fonts.php" class="w3-right next w3-btn w3-green">Fonts »</a>
<a href="borders.php" class="w3-left next w3-btn w3-green">« Borders</a>