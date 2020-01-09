<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Navigation</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="sidebar.php" class="w3-right next w3-btn w3-green">sidebar »</a>
            <a href="accordions.php" class="w3-left next w3-btn w3-green">« Accordions</a>
            <br/><br/><br/>
        </div>
    </div><hr/>
    <div class="testmedia">
        <div class="w3-row">

            <div class="w3-col m4">
                <p>Vertical:</p>
                <div class="w3-bar-block w3-light-grey w3-mobile" style="width:85%">
                    <a class="w3-bar-item w3-button w3-green w3-padding" href="javascript:void(0)">Home</a>
                    <a class="w3-bar-item w3-button w3-padding" style="color:#000 !important;" href="javascript:void(0)">Link 2</a>
                    <a class="w3-bar-item w3-button w3-padding" style="color:#000 !important;" href="javascript:void(0)">Link 3</a>
                    <a class="w3-bar-item w3-button w3-padding" style="color:#000 !important;" href="javascript:void(0)">Link 4</a>
                    <a class="w3-bar-item w3-button w3-padding" style="color:#000 !important;" href="javascript:void(0)">Link 5</a>
                </div>
            </div>

            <div class="w3-col m8">
                <p>Horizontal:</p>
                <div class="w3-bar w3-light-grey">
                    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-green">Home</a>
                    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hide-small">Link 1</a>
                    <div class="w3-dropdown-hover">
                        <button class="w3-button">
                            Dropdown <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
                            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-text-black">Link 1</a>
                            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-text-black">Link 2</a>
                            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-text-black">Link 3</a>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>
                </div>
                <br class="w3-hide-small">

                <div class="w3-bar w3-dark-grey" style="margin-top:15px">
                    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-black">Home</a>
                    <a href="javascript:void(0)" class="w3-bar-item w3-button">Link 1</a>
                    <div class="w3-dropdown-hover w3-hide-small">
                        <button class="w3-button">
                            Dropdown <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
                            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-text-black">Link 1</a>
                            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-text-black">Link 2</a>
                            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-text-black">Link 3</a>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>
                </div>
                <br class="w3-hide-small">
                <div class="w3-bar w3-blue-grey w3-border" style="margin-top:15px">
                    <a href="javascript:void(0)" class="w3-bar-item w3-button">Home</a>
                    <a href="javascript:void(0)" class="w3-bar-item w3-button">Link 1</a>
                    <input type="text" class="w3-bar-item w3-input w3-white w3-hide-small" placeholder="Input" style="width:35%">
                    <span class="w3-bar-item">Text</span>
                </div>

            </div>

        </div>
    </div>
    <hr>

    <h2>W3.CSS Navigation Bar Classes</h2>
    <p>W3.CSS provides the following classes for navigation bars:</p>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tbody><tr>
            <th style="width:30%">Class</th>
            <th>Defines</th>
        </tr>
        <tr>
            <td>w3-bar</td>
            <td>Horizontal container for HTML elements</td>
        </tr>
        <tr>
            <td>w3-bar-block</td>
            <td>Vertical container for HTML elements</td>
        </tr>
        <tr>
            <td>w3-bar-item</td>
            <td>Container bar elements</td>
        </tr>
        <tr>
            <td>w3-sidebar</td>
            <td>Vertical sidebar for HTML elements</td>
        </tr>
        <tr>
            <td>w3-mobile</td>
            <td>Makes any bar element mobile-first responsive</td>
        </tr>
        <tr>
            <td>w3-dropdown-hover</td>
            <td>Hoverable dropdown element</td>
        </tr>
        <tr>
            <td>w3-dropdown-click</td>
            <td>Clickable dropdown element (instead of hover)</td>
        </tr>
        </tbody></table>
    <hr>

    <h2>Basic Navigation</h2>
    <p>The <strong>w3-bar</strong> class is a container for displaying HTML elements horizontally.</p>
    <p>The <strong>w3-bar-item</strong> class defines the container elements.</p>
    <p>It is a perfect tool for creating navigation bars:</p>

    <div class="w3-bar w3-black">
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-hide-small" href="javascript:void(0)">Link 3</a>
    </div>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navigation_bar" target="_blank">Try It Yourself »</a>
        </p>
    </div>

    <hr>
    <h2>Responsive Navigation</h2>
    <p>The <strong>w3-mobile</strong> class makes any bar elements responsive
        (horizontal on large screens and vertical on small).</p>

    <div class="w3-row-padding" style="margin:-16px -16px 0">
        <div class="w3-half">
            <p>Medium and large screens:</p>
            <div class="w3-bar w3-black">
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Home</a>
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
            </div>
        </div>
        <div class="w3-half">
            <p>Small screens:</p>
            <div class="w3-bar-block w3-black w3-center">
                <a class="w3-bar-item w3-button w3-center" href="javascript:void(0)">Home</a>
                <a class="w3-bar-item w3-button w3-center" href="javascript:void(0)">Link 1</a>
                <a class="w3-bar-item w3-button w3-center" href="javascript:void(0)">Link 2</a>
            </div>
        </div>
    </div>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-mobile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-mobile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-mobile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-mobile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navigation_bar_mobile" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Colored Navigation Bars</h2>
    <p>Use a <strong><em>w3-color</em></strong> class to add a color to the navigation
        bar:</p>
    <div class="w3-bar w3-light-grey">
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-hide-small" href="javascript:void(0)">Link 3</a>
    </div>
    <br>
    <div class="w3-bar w3-green">
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-hide-small" href="javascript:void(0)">Link 3</a>
    </div>
    <br>
    <div class="w3-bar w3-blue">
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-hide-small" href="javascript:void(0)">Link 3</a>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_color" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Bordered Navigation Bars</h2>
    <p>Use a <strong>w3-border</strong> or <strong>w3-card</strong> class to add borders around the navigation bar, or to display it as a card:</p>
    <div class="w3-bar w3-light-grey w3-border">
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-hide-small" href="javascript:void(0)">Link 3</a>
    </div>
    <br>
    <div class="w3-bar w3-light-grey w3-border">
        <a class="w3-bar-item w3-button w3-border-right" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button w3-border-right" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button w3-border-right" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-border-right w3-hide-small" href="javascript:void(0)">Link 3</a>
    </div>
    <br>
    <div class="w3-bar w3-light-grey w3-card-4">
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-hide-small" href="javascript:void(0)">Link 3</a>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-border w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-border w3-card-4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_border" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Active/Current Link</h2>
    <p>Add a <strong><em>w3-color</em></strong> class to a link to highlight it:</p>
    <div class="w3-bar w3-border w3-light-grey">
        <a class="w3-bar-item w3-button w3-green" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-hide-small" href="javascript:void(0)">Link 3</a>
    </div>
    <br>
    <div class="w3-bar w3-border w3-light-grey">
        <a class="w3-bar-item w3-button w3-text-teal" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-hide-small" href="javascript:void(0)">Link 3</a>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-border w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_active" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Hoverable Links</h2>
    <p>When you mouse over a button, the background color will change to grey.</p>
    <p>If you want a different background color on hover, use any of the <strong>w3-hover-</strong><em><strong>color</strong></em> classes:</p>

    <div class="w3-bar w3-border w3-light-grey">
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button w3-hover-green" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button w3-hover-blue" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-hover-teal w3-hide-small" href="javascript:void(0)">Link 3</a>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-border w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-hover-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-hover-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-hover-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_hover" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <p>If you want to change the text color instead, turn off the default hover effect with the
        <strong>w3-hover-none</strong> class, and add a <strong>w3-hover-text</strong> class.</p>

    <div class="w3-bar w3-border w3-black">
        <a class="w3-bar-item w3-button w3-hover-none w3-text-grey w3-hover-text-white" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button w3-hover-none w3-text-grey w3-hover-text-white" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button w3-hover-none w3-text-grey w3-hover-text-white" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-hover-none w3-text-grey w3-hover-text-white w3-hide-small" href="javascript:void(0)">Link 3</a>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-border w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Default<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-hover-none w3-text-grey
  w3-hover-text-white"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button w3-hover-none w3-text-grey w3-hover-text-white"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-hover-none w3-text-grey
  w3-hover-text-white"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>  </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_hover1" target="_blank">Try It Yourself »</a>
        </p>
    </div>

    <p>Spend some time to play around with different hover effects:</p>

    <div class="w3-bar">
        <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-black">Link 1</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-black">Link 2</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-black">Link 3</a>
    </div>
    <br>
    <div class="w3-bar">
        <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green">Link 1</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green">Link 2</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-green">Link 3</a>
    </div>
    <br>
    <div class="w3-bar">
        <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-blue w3-hover-text-blue">Link 1</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-blue w3-hover-text-blue">Link 2</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-blue w3-hover-text-blue">Link 3</a>
    </div>
    <br>
    <div class="w3-bar">
        <a href="#" style="border:5px solid white" class="w3-bar-item w3-button w3-hover-none w3-hover-border-green">Link 1</a>
        <a href="#" style="border:5px solid white" class="w3-bar-item w3-button w3-hover-none w3-hover-border-red">Link 2</a>
        <a href="#" style="border:5px solid white" class="w3-bar-item w3-button w3-hover-none w3-hover-border-blue">Link 3</a>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>  </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_hover2" target="_blank">Try It Yourself »</a>
        </p>
    </div>

    <hr>

    <h2>Right-Aligned Links</h2>
    <p>Use the <strong>w3-right</strong> class on a list item to right-align a specific link:</p>

    <div class="w3-bar w3-border w3-light-grey">
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button w3-hide-small" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-green w3-right" href="javascript:void(0)">Link 3</a>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-border w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-green w3-right"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_right" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Navigation Bar Size</h2>
    <p>Use a <strong><em>w3-size</em></strong> class to change the font-size of the links inside the navbar:</p>
    <div class="w3-bar w3-border w3-green w3-large">
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-hide-small" href="javascript:void(0)">Link 3</a>
    </div>
    <br>
    <div class="w3-bar w3-border w3-green w3-xlarge">
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button w3-hide-small" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-hide-small" href="javascript:void(0)">Link 3</a>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-green w3-large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-green w3-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_sizes" target="_blank">Try It Yourself »</a>
        </p>
    </div>

    <p>Use a <strong><em>w3-padding</em></strong> class to change the padding of each link inside the navbar:</p>
    <div class="w3-bar w3-border w3-green">
        <a class="w3-bar-item w3-button w3-padding-16" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button w3-padding-16" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button w3-padding-16" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-padding-16 w3-hide-small" href="javascript:void(0)">Link 3</a>
    </div>
    <br>
    <div class="w3-bar w3-border w3-green">
        <a class="w3-bar-item w3-button w3-padding-24" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button w3-padding-24" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button w3-padding-24" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button w3-padding-24 w3-hide-small" href="javascript:void(0)">Link 3</a>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-border w3-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-padding-16"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-padding-16"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-padding-16"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-padding-16"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_sizes2" target="_blank">Try It Yourself »</a>
        </p>
    </div>

    <p><strong>Note:</strong> You can also add padding to the navigation bar, instead of each
        button. However, if you do this, note that the links do not get full padding on hover:</p>

    <div class="w3-bar w3-border w3-green w3-padding-16">
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-green w3-padding-16"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_sizes2" target="_blank">Try It Yourself »</a>
        </p>
    </div>

    <p>Customize the width of the links with the CSS width property</p>
    <p>(<strong>Note</strong>: Use <strong>w3-mobile</strong> to transform the links
        to 100% width on small screens):</p>
    <div class="w3-bar w3-dark-grey">
        <a class="w3-bar-item w3-button w3-mobile w3-green" style="width:33.3%" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button w3-mobile" style="width:33.3%" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button w3-mobile" style="width:33.4%" href="javascript:void(0)">Link 2</a>
    </div>
    <br>
    <div class="w3-bar w3-dark-grey">
        <a class="w3-bar-item w3-button w3-mobile w3-green" style="width:25%" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button w3-mobile" style="width:25%" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button w3-mobile" style="width:25%" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button w3-mobile" style="width:25%" href="javascript:void(0)">Link 1</a>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
  <span lang="no-bok"><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-dark-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-mobile w3-green"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:33%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-mobile"</span>
  style<span class="attributevaluecolor" style="color:mediumblue">="width:33%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button w3-mobile"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:33%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_width" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Navigation Bar with Icons</h2>
    <div class="w3-bar w3-light-grey w3-border w3-large">
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-green"><i class="fa fa-home"></i></a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-search"></i></a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-globe"></i></a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-sign-in"></i></a>
    </div>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-light-grey w3-border"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>i<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="fa fa-home"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/i<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>i<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="fa fa-search"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/i<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>i<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="fa fa-envelope"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/i<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>i<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="fa fa-globe"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/i<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>i<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="fa fa-sign-in"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/i<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_icons" target="_blank">Try It Yourself »</a>
    </div>

    <div class="w3-panel w3-note">
        <p>The "fa fa" classes in the example above display "Font Awesome" icons.</p>
        <p>Learn more about how to display icons in the chapter <a href="w3css_icons.asp">W3.CSS Icons</a>.</p>
    </div>
    <hr>

    <h2>Navigation Bar Text</h2>
    <p>If you want text instead of buttons inside the navigation bar,
        use the <strong>w3-bar-item</strong> class to get the same padding as the buttons.</p>
    <div class="w3-bar w3-black">
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Home</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button">Link 1</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hide-small">Link 2</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hide-small">Link 3</a>
        <span class="w3-bar-item">Text</span>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
            1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Text<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navigation_item" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Navbar with Inputs and Buttons</h2>
    <div class="w3-bar w3-light-grey w3-border">
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Home</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Link 1</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Link 2</a>
        <input type="text" class="w3-bar-item w3-input w3-white w3-mobile" placeholder="Search..">
        <button class="w3-bar-item w3-button w3-green w3-mobile">Go</button>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
            1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-input"</span> placeholder<span class="attributevaluecolor" style="color:mediumblue">="Search.."</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Go<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_input" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Navigation Bar with Dropdown</h2>
    <p>Move the mouse over the "Dropdown" link:</p>
    <div class="w3-bar w3-light-grey">
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-green">Home</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hide-small">Link 1</a>
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
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Dropdown<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-content w3-bar-block w3-card-4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
            2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_dropdown" target="_blank">Try It Yourself »</a>
    </div>
    <hr>
    <!--
    <p><strong>Note:</strong> When the dropdown menu is "open", the dropdown link gets a grey background color to indicate that it is active. To override this, add a
    <strong>w3-hover-<em>color</em></strong> class to both the "dropdown" container and
    the button:</p>
    <p><strong>Tip:</strong> If you want a dropdown symbol next to the dropdown
    text, add a suitable icon (like <i class="fa fa-caret-down"></i>):</p>
      <div class="w3-bar w3-light-grey">
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-green">Home</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button  w3-hide-small">Link 1</a>
        <div class="w3-dropdown-hover w3-hover-red">
          <button class="w3-button w3-hover-red" onclick="myFunction()">
            Dropdown <i class="fa fa-caret-down"></i>
          </button>
          <div class="w3-dropdown-content w3-white w3-card-4">
            <a href="javascript:void(0)" class="w3-text-black">Link 1</a>
            <a href="javascript:void(0)" class="w3-text-black">Link 2</a>
            <a href="javascript:void(0)" class="w3-text-black">Link 3</a>
          </div>
        </div>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>
      </div>

    <div class="w3-example">
    <h3>Example</h3>
    <div class="w3-code notranslate htmlHigh">
    &lt;div class=&quot;w3-dropdown-hover
    w3-hover-orange&quot;&gt;<br>&nbsp;&nbsp;&lt;button class=&quot;w3-button w3-hover-orange&quot;&gt;Dropdown
    &lt;i class=&quot;fa fa-caret-down&quot;&gt;&lt;/i&gt;&lt;/button&gt;<br>&nbsp;&nbsp;&lt;div class=&quot;w3-dropdown-content w3-white w3-card-4&quot;&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href=&quot;#&quot;&gt;Link 1&lt;/a&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href=&quot;#&quot;&gt;Link
    2&lt;/a&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href=&quot;#&quot;&gt;Link 3&lt;/a&gt;<br>&nbsp;&nbsp;&lt;/div&gt;<br>&lt;/div&gt;</div>
    <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_dropdown2" target="_blank">Try It Yourself &raquo;</a>
    </div>
    <hr>
    -->
    <h2>Clickable Dropdown</h2>
    <p>Use <strong>w3-dropdown-click</strong> if you prefer to click on the dropdown link instead of hover:</p>


    <div class="w3-bar w3-light-grey">
        <a href="javascript:void(0)" class="w3-green w3-bar-item w3-button">Home</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hide-small">Link 1</a>
        <div class="w3-dropdown-click">
            <button class="w3-button" onclick="myFunction()">
                Dropdown <i class="fa fa-caret-down"></i>
            </button>
            <div id="demodr" class="w3-dropdown-content w3-bar-block w3-card-4">
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
            </div>
        </div>
    </div>


    <script>
        function myFunction() {
            var x = document.getElementById("demodr");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-click"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="myFunction()"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; Dropdown
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>i<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="fa fa-caret-down"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/i<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="demo"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-content w3-bar-block w3-card-4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_dropdown3" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Horizontal Dropdown Menu</h2>
    <p>Remove the w3-bar-block class from the dropdown container if you want the dropdown links to display horizontally instead of vertically:</p>
    <div class="w3-bar w3-light-grey">
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-green">Home</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button  w3-hide-small">Link 1</a>
        <div class="w3-dropdown-hover">
            <button class="w3-button">
                Dropdown <i class="fa fa-caret-down"></i>
            </button>
            <div class="w3-dropdown-content w3-card-4">
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
                <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Dropdown<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-content w3-card-4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
            2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_dropdown_hor" target="_blank">Try It Yourself »</a>
    </div>
    <hr>


    <h2>Responsive Navbar with Responsive Dropdown</h2>
    <p>Use the w3-mobile class on all links including the dropdown container to create a responsive navbar with responsive dropdown links.</p>
    <p>Resize the browser window to see the effect:</p>
    <div class="w3-bar w3-black">
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile w3-green">Home</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Link 1</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Link 2</a>
        <div class="w3-dropdown-hover w3-mobile">
            <button class="w3-button">Dropdown <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-light-grey">
                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Link 1</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Link 2</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Link 3</a>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            &nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button w3-mobile w3-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-mobile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-mobile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-hover w3-mobile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Dropdown <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>i<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="fa fa-caret-down"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/i<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-content w3-bar-block w3-dark-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-mobile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-mobile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-mobile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_responsive_drop" target="_blank">Try It Yourself »</a>
    </div>
    <hr>


    <h2>Fixed Navigation Bar</h2>
    <p>To force the navigation bar to stay at the top or at the bottom of the page,
        even when the user scrolls the page, wrap a &lt;div&gt; element around the bar and add the <strong>w3-top</strong> or <strong>w3-bottom</strong> class:</p>

    <div class="width94">
        <iframe src="parts/tryw3css_navbar_fixed_top_ifr.php" style="height:262px;width:100%;border:1px solid #ccc;" __idm_frm__="375"></iframe>

        <div class="w3-example">
            <h3>Fixed Top</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-top"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; ...<br>&nbsp;&nbsp;&nbsp; ...<br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <p>
                <a target="_blank" class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_fixed_top">Try it Yourself »</a>
            </p>
        </div>
    </div>

    <div class="width94">
        <iframe src="parts/tryw3css_navbar_fixed_bottom_ifr.php" style="height:262px;width:100%;border:1px solid #ccc;" __idm_frm__="376"></iframe>

        <div class="w3-example">
            <h3>Fixed Bottom</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bottom"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; ...<br>&nbsp;&nbsp;&nbsp; ...<br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a target="_blank" class="w3-btn w3-margin-bottom w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_fixed_bottom">Try it Yourself »</a>
        </div>
    </div>
    <hr>

    <h2>Vertical Navigation Bar</h2>
    <p>The <strong>w3-bar-block</strong> class is a container for displaying HTML elements vertically.</p>

    <div class="w3-bar-block w3-light-grey">
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Home</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
        <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-block w3-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
            1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_bar_block" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Collapsing the Navigation Bar</h2>
    <p>When the navigation bar takes up too much space on a small screen, and you do not want to display it vertically by default, you
        can use hide and show classes on specific links in the navigation bar.</p>
    <p>In the example below, the navigation bar is replaced with a button (☰) in the top right corner when shown on tablets and mobile devices. When the button is clicked, the
        links in the navigation bar will vertically stack:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-white">

            <iframe src="parts/demo_navbar_hide_iframe.php" style="height:230px;width:100%;border:none" __idm_frm__="377"></iframe>

        </div>
        <a class="w3-btn w3-green w3-margin-bottom w3-margin-top" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_hide" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Side Navigation</h2>
    <p>The <strong>w3-sidebar</strong> class creates a side navigation:</p>
    <iframe src="parts/demo_ifr_sidebar.php" style="height:350px;width:100%;border:none;" class="w3-border" __idm_frm__="378"></iframe>
    <p>Go to the <a href="w3css_sidebar.asp">next chapter</a> to learn more about the side navigation.</p>

    <br>
    <div class="w3-clear nextprev">
        <a href="sidebar.php" class="w3-right next w3-btn w3-green">sidebar »</a>
        <a href="accordions.php" class="w3-left next w3-btn w3-green">« Accordions</a>
    </div>
</div>