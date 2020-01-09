<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Progress Bar</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="slideshow.php" class="w3-right next w3-btn w3-green">Slideshow »</a>
            <a href="pagination.php" class="w3-left next w3-btn w3-green">« Pagination</a>
            <br/><br/><br/>
        </div>
    </div><hr/>

    <p>A progress bar can be used to show how far along a user is in a process:</p>
    <div class="w3-border">
        <div id="myBar" class="w3-container w3-padding w3-green" style="width:20%">
            <div class="w3-center" id="demo">20%</div>
        </div>
    </div>
    <br>
    <button class="w3-button w3-green" onclick="move()">Click Me</button>
    <hr>

    <h2>Basic Progress Bar</h2>
    <p>A normal &lt;div&gt; element can be used for a progress bar.</p>
    <p>The CSS width property can be used to set the height and width of a progress
        bar.</p>

    <div class="w3-border">
        <div class="w3-container w3-gray" style="height:24px;width:35%"></div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-border"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-grey"</span> style<span class="attributevaluecolor" style="color:mediumblue">="height:24px;width:20%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_progressbar" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>

    <hr>
    <h2>Progress Bar Width</h2>
    <p>Change the width of a progress bar with the CSS <strong>width</strong> property (from 0 to 100%):</p>

    <div class="w3-light-grey">
        <div class="w3-container w3-grey" style="height:24px;width:25%"></div>
    </div><br>
    <div class="w3-light-grey">
        <div class="w3-container w3-grey" style="height:24px;width:50%"></div>
    </div><br>
    <div class="w3-light-grey">
        <div class="w3-container w3-grey" style="height:24px;width:75%"></div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-grey"</span> style<span class="attributevaluecolor" style="color:mediumblue">="height:24px;width:50%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_progressbar_size" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>

    <hr>

    <h2>Progress Bar Colors</h2>
    <p>Use the <strong>w3-<em>color</em></strong> classes to change the color of a
        progress bar:</p>

    <div class="w3-light-grey">
        <div class="w3-container w3-green" style="height:24px;width:25%"></div>
    </div><br>
    <div class="w3-light-grey">
        <div class="w3-container w3-red" style="height:24px;width:50%"></div>
    </div><br>
    <div class="w3-light-grey">
        <div class="w3-container w3-blue" style="height:24px;width:75%"></div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-blue"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:75%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_progressbar_color" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Progress Bar Labels</h2>
    <p>Add text inside a <strong>w3-container</strong> element to add a label to the progress bar.</p>
    <p>Use the <strong>w3-center</strong> class to center the label. If omitted, it will be left aligned.</p>

    <div class="w3-light-gray">
        <div class="w3-container w3-green" style="width:25%">
            <div class="w3-center w3-text-white">25%</div>
        </div>
    </div><br>

    <div class="w3-light-gray">
        <div class="w3-container w3-red" style="width:50%">
            <div class="w3-center w3-text-white">50%</div>
        </div>
    </div><br>
    <div class="w3-light-gray">
        <div class="w3-container w3-blue" style="width:75%">
            <div class="w3-center w3-text-white">75%</div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-green w3-center"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:25%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>25%<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_progressbar_labels" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Progress Bar Text Size</h2>
    <p>Use the <strong>w3-</strong><em><strong>size</strong></em> classes to change the text size in the container:</p>

    <div class="w3-light-gray w3-tiny">
        <div class="w3-container w3-green" style="width:50%">50%</div>
    </div><br>

    <div class="w3-light-gray w3-large">
        <div class="w3-container w3-green" style="width:50%">50%</div>
    </div><br>

    <div class="w3-light-gray w3-xlarge">
        <div class="w3-container w3-green" style="width:50%">50%</div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-light-grey w3-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-green"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:50%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>50%<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_progressbar_size2" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>

    <hr>
    <h2>Progress Bar Padding</h2>
    <p>Use the <strong>w3-padding</strong> classes to add padding to the container.</p>

    <div class="w3-light-gray">
        <div class="w3-container w3-padding-small w3-red" style="width:25%">
            <div class="w3-center w3-text-white">25%</div>
        </div>
    </div><br>

    <div class="w3-light-gray">
        <div class="w3-container w3-padding w3-red" style="width:25%">
            <div class="w3-center w3-text-white">25%</div>
        </div>
    </div><br>
    <div class="w3-light-gray">
        <div class="w3-container w3-padding-large w3-red" style="width:25%">
            <div class="w3-center w3-text-white">25%</div>
        </div>
    </div>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-red w3-padding w3-center"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:25%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>25%<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_progressbar_padding" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Rounded Progress Bars</h2>
    <p>Use the <strong>w3-round</strong> classes to add rounded corners to a progress bar:</p>

    <div class="w3-light-gray w3-round">
        <div class="w3-container w3-round w3-blue" style="width:25%">25%</div>
    </div><br>

    <div class="w3-light-gray w3-round-large">
        <div class="w3-container w3-round-large w3-blue" style="width:25%">25%</div>
    </div><br>

    <div class="w3-light-gray w3-round-xlarge">
        <div class="w3-container w3-round-xlarge w3-blue" style="width:25%">25%</div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-light-grey w3-round"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-round w3-blue"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:25%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>25%<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_progressbar_round" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Dynamic Progress Bar</h2>
    <p>Use JavaScript to create a dynamic progress bar:</p>

    <div class="w3-light-grey">
        <div id="myBar2" class="w3-container w3-green" style="height:28px;width:1%"></div>
    </div>
    <br>

    <button class="w3-button w3-light-grey" onclick="move2()">Click Me</button>

    <script>
        function move2() {
            var elem = document.getElementById("myBar2");
            var width = 1;
            var id = setInterval(frame, 10);
            function frame() {
                if (width == 100) {
                    clearInterval(id);
                } else {
                    width++;
                    elem.style.width = width + '%';
                }
            }
        }
    </script>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="myBar"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-green"</span>
style<span class="attributevaluecolor" style="color:mediumblue">="height:24px;width:1%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-light-grey"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="move()"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Click Me<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>script<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="jscolor" style="color:black"><br>
<span class="jskeywordcolor" style="color:mediumblue">function</span> move() {<br><span class="jsnumbercolor" style="color:red">
</span>&nbsp;&nbsp;<span class="jskeywordcolor" style="color:mediumblue">var</span> elem =
document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"myBar"</span>); <br>&nbsp;&nbsp;<span class="jskeywordcolor" style="color:mediumblue">var</span> width = <span class="jsnumbercolor" style="color:red">
1</span>;<br>&nbsp;&nbsp;<span class="jskeywordcolor" style="color:mediumblue">var</span> id = setInterval(frame, <span class="jsnumbercolor" style="color:red">10</span>);<br>&nbsp;&nbsp;<span class="jskeywordcolor" style="color:mediumblue">function</span> frame() {<br><span class="jsnumbercolor" style="color:red">
</span>  &nbsp;&nbsp;&nbsp;
<span class="jskeywordcolor" style="color:mediumblue">if</span> (width &gt;= <span class="jsnumbercolor" style="color:red">100</span>) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
clearInterval(id);<br>&nbsp;&nbsp;&nbsp;&nbsp;} <span class="jskeywordcolor" style="color:mediumblue">else</span> {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width++; <br><span class="jsnumbercolor" style="color:red">
</span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
elem.<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">width</span> = width + <span class="jsstringcolor" style="color:brown">'%'</span>; <br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;}<br>}<br></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/script<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_progressbar_js" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Dynamic Progress Bar with Labels</h2>

    <p>Centered label:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-white w3-container w3-padding-32 notranslate">
            <div class="w3-light-grey">
                <div id="myBar1" class="w3-container w3-green w3-center" style="width:20%">20%</div>
            </div>
            <br>
            <button class="w3-button w3-light-grey" onclick="move1()">Click Me</button>
            <script>
                function move1() {
                    var elem = document.getElementById("myBar1");
                    var width = 20;
                    var id = setInterval(frame, 10);
                    function frame() {
                        if (width >= 100) {
                            clearInterval(id);
                        } else {
                            width++;
                            elem.style.width = width + '%';
                            elem.innerHTML = width * 1  + '%';
                        }
                    }
                }
            </script>
        </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_progressbar_labels_js" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>

    <p>Left-aligned label:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-white w3-container w3-padding-32 notranslate">
            <div class="w3-light-grey">
                <div id="myBar3" class="w3-container w3-green" style="width:20%">20%</div>
            </div>
            <br>

            <button class="w3-button w3-light-grey" onclick="move3()">Click Me</button>

            <script>
                function move3() {
                    var elem = document.getElementById("myBar3");
                    var width = 20;
                    var id = setInterval(frame, 10);
                    function frame() {
                        if (width >= 100) {
                            clearInterval(id);
                        } else {
                            width++;
                            elem.style.width = width + '%';
                            elem.innerHTML = width * 1  + '%';
                        }
                    }
                }
            </script>
        </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_progressbar_labels_js2" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>

    <p>Label outside of the progress bar:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-white w3-container w3-padding-32 notranslate">
            <div class="w3-light-grey">
                <div id="myBar4" class="w3-container w3-green" style="height:24px;width:20%">
                </div>
            </div>
            <p id="demo4">20%</p>

            <button class="w3-button w3-light-grey" onclick="move4()">Click Me</button>

            <script>
                function move4() {
                    var elem = document.getElementById("myBar4");
                    var width = 20;
                    var id = setInterval(frame, 10);
                    function frame() {
                        if (width >= 100) {
                            clearInterval(id);
                        } else {
                            width++;
                            elem.style.width = width + '%';
                            document.getElementById("demo4").innerHTML = width * 1  + '%';
                        }
                    }
                }
            </script>
        </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_progressbar_labels_js3" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>

    <p class="tags">Another example (advanced):</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-white w3-container w3-padding-32 notranslate">
            <div class="w3-light-grey">
                <div id="myBar5" class="w3-container w3-green" style="height:24px;width:0%">
                </div>
            </div>

            <p id="myP">Added <span id="demo5">0</span> of 10 photos</p>

            <button class="w3-button w3-light-grey" onclick="move5();this.disabled='true'">Upload Photos</button>
            <script>
                function move5() {
                    var elem = document.getElementById("myBar5");
                    var width = 0;
                    var id = setInterval(frame, 50);
                    function frame() {
                        if (width >= 100) {
                            clearInterval(id);
                            document.getElementById("myP").className = "w3-text-green w3-animate-opacity";
                            document.getElementById("myP").innerHTML = "Successfully uploaded 10 photos!";
                        } else {
                            width++;
                            elem.style.width = width + '%';
                            var num = width * 1 / 10;
                            num = num.toFixed(0)
                            document.getElementById("demo5").innerHTML = num;
                        }
                    }
                }</script>
        </div>
        <p>
            <a target="_blank" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_progressbar_labels_js4" class="w3-btn w3-green">Try it Yourself »</a>
        </p>
    </div>
    <br>

    <div class="w3-clear nextprev">
        <a href="slideshow.php" class="w3-right next w3-btn w3-green">Slideshow »</a>
        <a href="pagination.php" class="w3-left next w3-btn w3-green">« Pagination</a>>
    </div>
</div>