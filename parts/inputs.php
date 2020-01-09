<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Inputs</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="badges.php" class="w3-right next w3-btn w3-green w3-green">Badges »</a>
            <a href="images.php" class="w3-left next w3-btn w3-green w3-green">« Images</a>
            <br/><br/><br/>
        </div>
    </div><hr/>

    <div class="w3-container w3-teal">
        <h2>Input Form</h2>
    </div>
    <form class="w3-container w3-card-4">
        <br>
        <p>
            <label class="w3-text-grey">Name</label>
            <input class="w3-input w3-border" type="text" required="">
        </p>
        <p>
            <label class="w3-text-grey">Email</label>
            <input class="w3-input w3-border" type="text" required="">
        </p>
        <p>
            <label class="w3-text-grey">Subject</label>
            <textarea class="w3-input w3-border" style="resize:none"></textarea>
        </p>
        <br>
        <div class="w3-row">
            <div class="w3-half">
                <input id="milk" class="w3-check" type="checkbox" checked="checked">
                <label>Milk</label>
                <br>
                <input id="sugar" class="w3-check" type="checkbox">
                <label>Sugar</label>
                <br>
                <input id="lemon" class="w3-check" type="checkbox" disabled="">
                <label>Lemon (Disabled)</label>
                <br><br>
            </div>

            <div class="w3-half">
                <input id="male" class="w3-radio" type="radio" name="gender" value="male" checked="">
                <label>Male</label>
                <br>
                <input id="female" class="w3-radio" type="radio" name="gender" value="female">
                <label>Female</label>
                <br>
                <input id="unknown" class="w3-radio" type="radio" name="gender" value="" disabled="">
                <label>Don't know (Disabled)</label>
            </div>
        </div>
        <p><button type="button" class="w3-btn w3-padding w3-teal" style="width:120px">Send &nbsp; ❯</button></p>
    </form>
    <hr>

    <div class="w3-row-padding" style="margin-left:-16px;margin-right:-16px">
        <div class="w3-half">
            <h2>Top Labels</h2>
            <div class="w3-border">
                <div class="w3-container w3-blue">
                    <h2>Input Form</h2>
                </div>
                <form class="w3-container">
                    <div class="w3-section">
                        <label>First Name</label>
                        <input class="w3-input" type="text">
                    </div>
                    <div class="w3-section">
                        <label>Last Name</label>
                        <input class="w3-input" type="text">
                    </div>
                </form>
            </div>

            <div class="w3-example">
                <h3>Example</h3>
                <div class="w3-code notranslate htmlHigh">
                    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>First Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                    <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
                </div>
                <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_top" target="_blank">Try It Yourself »</a>
            </div>

        </div>
        <div class="w3-half">
            <h2>Bottom Labels</h2>
            <div class="w3-border">
                <div class="w3-container w3-red">
                    <h2>Input Form</h2>
                </div>
                <form class="w3-container">
                    <div class="w3-section">
                        <input class="w3-input" type="text">
                        <label>First Name</label>
                    </div>
                    <div class="w3-section">
                        <input class="w3-input" type="text">
                        <label>Last Name</label>
                    </div>
                </form>
            </div>
            <div class="w3-example">
                <h3>Example</h3>
                <div class="w3-code notranslate htmlHigh">
                    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>First Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                    <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last
                    Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                    <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
                </div>
                <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_bottom" target="_blank">Try It Yourself »</a>
            </div>

        </div>
    </div>


    <hr>
    <h2>Input Cards</h2>
    <div class="w3-card-4">
        <div class="w3-container w3-theme">
            <h2>Header</h2>
        </div>

        <form class="w3-container">
            <p>
                <label>First Name</label>
                <input class="w3-input" type="text"></p>
            <p>
                <label>Last Name</label>
                <input class="w3-input" type="text"></p>
            <br>
        </form>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-card-4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container
w3-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Header<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br> <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>First Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input"</span>
type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br> <br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input"</span>
type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_card" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Colored Labels</h2>
    <p>Use any of the <strong>w3-text-color</strong> classes to color your labels:</p>
    <form class="w3-container w3-card-4">
        <p>
            <label class="w3-text-blue"><b>First Name</b></label>
            <input class="w3-input w3-border" type="text">
        </p>
        <p>
            <label class="w3-text-blue"><b>Last Name</b></label>
            <input class="w3-input w3-border" type="text">
        </p>
        <p>
            <a class="w3-btn w3-green w3-blue" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_label_colored" target="_blank">Register</a>
        </p>
    </form>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br> <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-text-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>b<span class="tagcolor" style="color:mediumblue">&gt;</span></span>First Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/b<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input w3-border"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;<br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-text-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>b<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/b<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input w3-border"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn
w3-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Register<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_label_colored" target="_blank">Try It Yourself »</a>
    </div>

    <hr>

    <h2>Bordered Input</h2>
    <p>Add the <strong>w3-border</strong> class to create bordered inputs:</p>
    <form class="w3-container w3-card-4 w3-light-grey">
        <p>
            <label>First Name</label>
            <input class="w3-input w3-border" type="text"></p>
        <p>
            <label>Last Name</label>
            <input class="w3-input w3-border" type="text"></p>
        <br>
    </form>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input w3-border"</span>
type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_bordered" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Rounded Borders</h2>
    <p>Use any of the <strong>w3-round</strong> classes to create rounded borders:</p>
    <form class="w3-container w3-card-4 w3-light-grey">
        <p>
            <label>First Name</label>
            <input class="w3-input w3-border w3-round" type="text"></p>
        <p>
            <label>Last Name</label>
            <input class="w3-input w3-border w3-round-large" type="text"></p>
        <br>
    </form>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input w3-border w3-round"</span>
type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br> <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input w3-border
w3-round-large"</span>
type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_rounded" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Borderless Input</h2>
    <p>The w3-input class has a bottom border by default. If you want a borderless input, add the <strong>w3-border-0</strong> class:</p>
    <form class="w3-container w3-card-4 w3-light-grey">
        <p>
            <label>First Name</label>
            <input class="w3-input w3-border-0" type="text"></p>
        <p>
            <label>Last Name</label>
            <input class="w3-input w3-border-0" type="text"></p>
        <br>
    </form>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>First
            Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input w3-border-0"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input
w3-border-0"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_border-none" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Colors</h2>
    <p>Feel free to use your favorite styles and colors:</p>
    <div class="w3-card-4">
        <div class="w3-container w3-teal">
            <h2>Input Form</h2>
        </div>
        <form class="w3-container">
            <p>
                <label class="w3-text-teal"><b>First Name</b></label>
                <input class="w3-input w3-border w3-light-grey" type="text">
            </p>
            <p>
                <label class="w3-text-teal"><b>Last Name</b></label>
                <input class="w3-input w3-border w3-light-grey" type="text">
            </p>
            <p>
                <a class="w3-btn w3-green w3-blue-grey" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_colors" target="_blank">Register</a>
            </p>
        </form>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Input Form<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-text-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>b<span class="tagcolor" style="color:mediumblue">&gt;</span></span>First Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/b<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input w3-border w3-light-grey"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-text-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>b<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/b<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input w3-border w3-light-grey"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-btn w3-blue-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Register<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_colors" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Hoverable inputs</h2>
    <p>The <strong>w3-hover-</strong><em><strong>color</strong></em> classes adds a background color to the input field on mouse-over:</p>
    <form class="w3-panel w3-card-4">
        <h2>Input Form</h2>
        <div class="w3-section">
            <label>First name:</label>
            <input class="w3-input w3-hover-grey" type="text">
        </div>
        <div class="w3-section">
            <label>Last Name:</label>
            <input class="w3-input w3-hover-grey" type="text">
        </div>
        <div class="w3-section">
            <label>Subject:</label>
            <input class="w3-input w3-hover-red" type="text">
        </div>
    </form>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input w3-hover-green"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input
w3-border w3-hover-red"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input
w3-border w3-hover-blue"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_hoverable" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Animated Inputs</h2>
    <p>The <strong>w3-animate-input</strong> class transforms the width of an input field to 100% when it gets focus:</p>
    <p>
        <input class="w3-input w3-animate-input" type="text" style="width:30%;" placeholder="Click on me!"></p>
    <p>
        <input class="w3-input w3-border w3-animate-input" type="text" style="width:30%;" placeholder="Click on me!"></p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input w3-animate-input"</span>
type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:30%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_animate" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <form class="w3-padding w3-card-4">
        <h2>Checkboxes</h2>
        <div>
            <p>
                <input class="w3-check" type="checkbox" checked="checked">
                <label>Milk</label>
            </p>
        </div>
        <div>
            <p>
                <input class="w3-check" type="checkbox">
                <label>Sugar</label>
            </p>
        </div>
        <div>
            <p>
                <input class="w3-check" type="checkbox" disabled="">
                <label>Lemon (Disabled)</label>
            </p>
        </div>
    </form>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-check"</span> type<span class="attributevaluecolor" style="color:mediumblue">="checkbox"</span> checked<span class="attributevaluecolor" style="color:mediumblue">="checked"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Milk<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-check"</span>
type<span class="attributevaluecolor" style="color:mediumblue">="checkbox"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Sugar<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-check"</span> type<span class="attributevaluecolor" style="color:mediumblue">="checkbox"</span> disabled</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Lemon (Disabled)<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_check" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <form class="w3-padding w3-card-4">
        <h2>Radio Buttons</h2>
        <div><p>
                <input class="w3-radio" type="radio" name="gender" value="male" checked="">
                <label>Male</label>
            </p></div>
        <div><p>
                <input class="w3-radio" type="radio" name="gender" value="female">
                <label>Female</label>
            </p></div>
        <div><p>
                <input class="w3-radio" type="radio" name="gender" value="" disabled="">
                <label>Don't know (Disabled)</label>
            </p></div>
    </form>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-radio"</span> type<span class="attributevaluecolor" style="color:mediumblue">="radio"</span> name<span class="attributevaluecolor" style="color:mediumblue">="gender"</span> value<span class="attributevaluecolor" style="color:mediumblue">="male"</span> checked</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Male<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-radio"</span>
type<span class="attributevaluecolor" style="color:mediumblue">="radio"</span> name<span class="attributevaluecolor" style="color:mediumblue">="gender"</span> value<span class="attributevaluecolor" style="color:mediumblue">="female"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Female<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-radio"</span>
type<span class="attributevaluecolor" style="color:mediumblue">="radio"</span> name<span class="attributevaluecolor" style="color:mediumblue">="gender"</span> value<span class="attributevaluecolor" style="color:mediumblue">=""</span> disabled</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Don't know (Disabled)<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_radio" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Select Options</h2>

    <form class="w3-padding w3-card-4" style="height:160px">

        <select class="w3-select" name="option">
            <option value="" disabled="" selected="">Choose your option</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
        </select>
    </form>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>select<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-select"</span> name<span class="attributevaluecolor" style="color:mediumblue">="option"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>option<span class="attributecolor" style="color:red"> value<span class="attributevaluecolor" style="color:mediumblue">=""</span> disabled
selected</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Choose your option<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/option<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>option<span class="attributecolor" style="color:red"> value<span class="attributevaluecolor" style="color:mediumblue">="1"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Option
            1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/option<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>option<span class="attributecolor" style="color:red"> value<span class="attributevaluecolor" style="color:mediumblue">="2"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Option 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/option<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>option<span class="attributecolor" style="color:red">
value<span class="attributevaluecolor" style="color:mediumblue">="3"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Option 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/option<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/select<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_select" target="_blank">Try It Yourself »</a>
    </div>
    <hr>
    <h2>Bordered Select Menu</h2>

    <form class="w3-padding w3-card-4" style="height:160px">

        <select class="w3-select w3-border" name="option">
            <option value="" disabled="" selected="">Choose your option</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
        </select>
    </form>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>select<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-select w3-border"</span> name<span class="attributevaluecolor" style="color:mediumblue">="option"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_select_border" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Form Elements in a Grid</h2>
    <p>In this example, we use W3.CSS' Responsive Grid System to make the inputs appear on the same line (on smaller screens, they will stack horizontally with 100% width).
        You will learn more about this later.</p>

    <div class="w3-row-padding w3-margin-bottom" style="margin:0 -16px">
        <div class="w3-third">
            <input class="w3-input w3-border" type="text" placeholder="One">
        </div>
        <div class="w3-third">
            <input class="w3-input w3-border" type="text" placeholder="Two">
        </div>
        <div class="w3-third">
            <input class="w3-input w3-border" type="text" placeholder="Three">
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row-padding"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-third"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input w3-border"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> placeholder<span class="attributevaluecolor" style="color:mediumblue">="One"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-third"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-input w3-border"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> placeholder<span class="attributevaluecolor" style="color:mediumblue">="Two"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-third"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input
w3-border"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> placeholder<span class="attributevaluecolor" style="color:mediumblue">="Three"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_grid" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Grid with Labels</h2>
    <div class="w3-row-padding w3-margin-bottom" style="margin:0 -16px">
        <div class="w3-half">
            <label>First Name</label>
            <input class="w3-input w3-border" type="text" placeholder="One">
        </div>
        <div class="w3-half">
            <label>Last Name</label>
            <input class="w3-input w3-border" type="text" placeholder="Two">
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row-padding"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-half"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>First Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-input w3-border"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> placeholder<span class="attributevaluecolor" style="color:mediumblue">="Two"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-half"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last
            Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-input
w3-border"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> placeholder<span class="attributevaluecolor" style="color:mediumblue">="Three"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_grid2" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Icon Labels</h2>
    <form class="w3-container w3-card-4 w3-light-grey w3-text-green">
        <h2 class="w3-center">Contact Us</h2>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="nam" type="text" placeholder="Name">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="last" type="text" placeholder="Email">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="email" type="text" placeholder="Phone">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="mess" type="text" placeholder="Message">
            </div>
        </div>

        <br>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_input_contact" target="_blank">Try It Yourself »</a>
    </form>
    <br>

    <br>
    <div class="w3-clear nextprev">
        <a href="badges.php" class="w3-right next w3-btn w3-green w3-green">Badges »</a>
        <a href="images.php" class="w3-left next w3-btn w3-green w3-green">« Images</a>
    </div>
</div>