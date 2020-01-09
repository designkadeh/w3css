<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Modal</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="tooltips.php" class="w3-right next w3-btn w3-green">Tooltips »</a>
            <a href="slideshow.php" class="w3-left next w3-btn w3-green">« Slideshow</a>
            <br/><br/><br/>
        </div>
    </div><hr/>
    <p>A modal is a dialog box/popup window that is displayed on top of the current page:</p>
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green">Open Modal</button>
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container w3-red">
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-large w3-red w3-display-topleft">×</span>
                <h2>Modal Header</h2>
            </header>
            <div class="w3-container">
                <p>Hello World!</p>
                <p>Go back to <a class="w3-button w3-black" href="w3css_modal.asp">W3.CSS Modal</a> to learn more!</p>
            </div>
            <footer class="w3-container w3-red w3-display-container">
                <p>Modal Footer <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-red w3-display-left">Close</span></p>
            </footer>
        </div>
    </div>
    <hr>

    <h2>W3.CSS Modal Classes</h2>
    <p>W3.CSS provides the following classes for modal windows:</p>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tbody><tr>
            <th style="width:35%">Class</th>
            <th>Defines</th>
        </tr>
        <tr>
            <td>w3-modal</td>
            <td>The modal container</td>
        </tr>
        <tr>
            <td>w3-modal-content</td>
            <td>The modal content</td>
        </tr>
        </tbody></table>
    <hr>


    <h2>Create A Modal</h2>
    <p>The <strong>w3-modal</strong> class defines a container for a modal.</p>
    <p>The <strong>w3-modal-content</strong> class defines the modal content.</p>
    <p>Modal content can be any HTML element (divs, headings, paragraphs, images, etc.).</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="commentcolor" style="color:green">&lt;!-- Trigger/Open the Modal --&gt;</span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="document.getElementById('id01').style.display='block'"</span><br>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Open Modal<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="commentcolor" style="color:green">&lt;!-- The Modal --&gt;</span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
id<span class="attributevaluecolor" style="color:mediumblue">="id01"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal-content"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="document.getElementById('id01').style.display='none'"</span>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-display-topright"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;times;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Some text in the Modal..<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Some text in the Modal..<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Open a Modal</h2>
    <p>Use any HTML element to open the modal. However, this is often a button or a link.</p>
    <p>Add the <strong>onclick</strong> attribute and point to the id of the modal (<em>id01</em> in our example), using the document.getElementById()
        method.</p>
    <hr>

    <h2>Close a Modal</h2>
    <p>To close a modal, add the <strong>w3-button</strong> class to an element together with an onclick attribute that points to the id of the modal (<em>id01</em>).
        You can also close it by clicking outside of the modal (see example below).</p>
    <div class="w3-panel w3-note">
        <p class="tags"><strong>Tip:</strong> &amp;times; is the preferred HTML entity for close
            icons, rather than the letter "x".</p>
    </div>
    <hr>

    <h2>Modal Header and Footer</h2>
    <p>Use <strong>w3-container</strong> classes to create different sections inside the modal
        content:</p>
    <!-- Trigger the Modal -->
    <button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-dark-grey">Open Modal with Containers</button>

    <!-- The Modal -->
    <div id="id03" class="w3-modal">
        <div class="w3-modal-content">
            <header class="w3-container w3-teal">
                <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-large w3-display-topleft">×</span>
                <h2>Modal Header</h2>
            </header>
            <div class="w3-container">
                <p>Some text..</p>
                <p>Some text..</p>
            </div>
            <footer class="w3-container w3-teal">
                <p>Modal Footer</p>
            </footer>
        </div>
    </div>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="id01"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal-content"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>header<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="document.getElementById('id01').style.display='none'"</span>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-display-topright"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;times;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Modal Header<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/header<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Some text..<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Some text..<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>footer<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container
w3-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Modal Footer<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/footer<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal2" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Modal As a Card</h2>
    <p>To display the modal as a card, add one of the <strong>w3-card-*</strong> classes to the
        <strong>w3-modal-content</strong> container:</p>
    <!-- Trigger the Modal -->
    <button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-dark-grey">Open Modal as a Card</button>

    <!-- The Modal -->
    <div id="id04" class="w3-modal">
        <div class="w3-modal-content w3-card-4">
            <header class="w3-container w3-teal">
                <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-large w3-display-topleft">×</span>
                <h2>Modal Header</h2>
            </header>
            <div class="w3-container">
                <p>Some text..</p>
                <p>Some text..</p>
            </div>
            <footer class="w3-container w3-teal">
                <p>Modal Footer</p>
            </footer>
        </div>
    </div>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal-content w3-card-4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal3" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Animated Modals</h2>
    <p>Use any of the <strong>w3-animate-zoom|top|bottom|right|left</strong> classes to slide in the modal from a specific direction:</p>
    <!-- Trigger the Modal -->
    <button onclick="document.getElementById('zoom').style.display='block'" class="w3-button w3-dark-grey">Zoom In</button>
    <button onclick="document.getElementById('modtop').style.display='block'" class="w3-button w3-dark-grey">Top</button>
    <button onclick="document.getElementById('modbottom').style.display='block'" class="w3-button w3-dark-grey">Bottom</button>
    <button onclick="document.getElementById('modleft').style.display='block'" class="w3-button w3-dark-grey">Left</button>
    <button onclick="document.getElementById('modright').style.display='block'" class="w3-button w3-dark-grey">Right</button>
    <button onclick="document.getElementById('modfade').style.display='block'" class="w3-button w3-dark-grey">Fade In</button>

    <!-- The Modal -->
    <div id="zoom" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom w3-card-4">
            <header class="w3-container w3-teal">
                <span onclick="document.getElementById('zoom').style.display='none'" class="w3-button w3-large w3-display-topleft">×</span>
                <h2>Modal Header</h2>
            </header>
            <div class="w3-container">
                <p>Some text..</p>
                <p>Some text..</p>
            </div>
            <footer class="w3-container w3-teal">
                <p>Modal Footer</p>
            </footer>
        </div>
    </div>

    <!-- The Modal -->
    <div id="modtop" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container w3-teal">
                <span onclick="document.getElementById('modtop').style.display='none'" class="w3-button w3-large w3-display-topleft">×</span>
                <h2>Modal Header</h2>
            </header>
            <div class="w3-container">
                <p>Some text..</p>
                <p>Some text..</p>
            </div>
            <footer class="w3-container w3-teal">
                <p>Modal Footer</p>
            </footer>
        </div>
    </div>

    <!-- The Modal -->
    <div id="modbottom" class="w3-modal">
        <div class="w3-modal-content w3-animate-bottom w3-card-4">
            <header class="w3-container w3-teal">
                <span onclick="document.getElementById('modbottom').style.display='none'" class="w3-button w3-large w3-display-topleft">×</span>
                <h2>Modal Header</h2>
            </header>
            <div class="w3-container">
                <p>Some text..</p>
                <p>Some text..</p>
            </div>
            <footer class="w3-container w3-teal">
                <p>Modal Footer</p>
            </footer>
        </div>
    </div>

    <!-- The Modal -->
    <div id="modright" class="w3-modal">
        <div class="w3-modal-content w3-animate-right w3-card-4">
            <header class="w3-container w3-teal">
                <span onclick="document.getElementById('modright').style.display='none'" class="w3-button w3-large w3-display-topleft">×</span>
                <h2>Modal Header</h2>
            </header>
            <div class="w3-container">
                <p>Some text..</p>
                <p>Some text..</p>
            </div>
            <footer class="w3-container w3-teal">
                <p>Modal Footer</p>
            </footer>
        </div>
    </div>

    <!-- The Modal -->
    <div id="modleft" class="w3-modal">
        <div class="w3-modal-content w3-animate-left w3-card-4">
            <header class="w3-container w3-teal">
                <span onclick="document.getElementById('modleft').style.display='none'" class="w3-button w3-large w3-display-topleft">×</span>
                <h2>Modal Header</h2>
            </header>
            <div class="w3-container">
                <p>Some text..</p>
                <p>Some text..</p>
            </div>
            <footer class="w3-container w3-teal">
                <p>Modal Footer</p>
            </footer>
        </div>
    </div>

    <!-- The Modal -->
    <div id="modfade" class="w3-modal">
        <div class="w3-modal-content w3-animate-opacity w3-card-4">
            <header class="w3-container w3-teal">
                <span onclick="document.getElementById('modfade').style.display='none'" class="w3-button w3-large w3-display-topleft">×</span>
                <h2>Modal Header</h2>
            </header>
            <div class="w3-container">
                <p>Some text..</p>
                <p>Some text..</p>
            </div>
            <footer class="w3-container w3-teal">
                <p>Modal Footer</p>
            </footer>
        </div>
    </div>

    <!-- The Modal -->
    <div id="modfade2" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4">
            <header class="w3-container w3-teal">
                <span onclick="document.getElementById('modfade2').style.display='none'" class="w3-button w3-large w3-display-topleft">×</span>
                <h2>Modal Header</h2>
            </header>
            <div class="w3-container">
                <p>Some text..</p>
                <p>Some text..</p>
            </div>
            <footer class="w3-container w3-teal">
                <p>Modal Footer</p>
            </footer>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal-content w3-animate-zoom"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal-content w3-animate-top"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal-content w3-animate-bottom"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal-content w3-animate-left"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal-content w3-animate-right"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal-content w3-animate-opacity"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal4" target="_blank">Try It Yourself »</a>
    </div>

    <p>You can also fade in the modal's background color by setting the <strong>
            w3-animate-opacity</strong> class on the w3-modal element:</p>

    <button onclick="document.getElementById('modfade2').style.display='block'" class="w3-button w3-dark-grey">Fade in Modal</button>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal w3-animate-opacity"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal_fade" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Modal Image</h2>
    <p>Click on the image to display it as a modal, in full size:</p>
    <img class="w3-hover-opacity" src="images/img_snowtops.jpg" alt="Norway" onclick="document.getElementById('img01').style.display='block'" style="width:30%;cursor:pointer">
    <div id="img01" class="w3-modal" onclick="document.getElementById('img01').style.display='none'">
        <span class="w3-button w3-hover-red w3-xxlarge w3-display-topright">×</span>
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">
            <img src="images/img_snowtops.jpg" alt="Norway" style="width:100%">
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_snowtops.jpg"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="document.getElementById('modal01').style.display='block'"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-hover-opacity"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="modal01"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal w3-animate-zoom"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="this.style.display='none'"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal-content"</span> src<span class="attributevaluecolor" style="color:mediumblue">="img_snowtops.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal_image" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Modal Image Gallery</h2>
    <p>Click on an image to display it in full size:</p>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-container w3-col s4 w3-margin-bottom">
            <img src="images/img_snowtops.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="w3-container w3-col s4 w3-margin-bottom">
            <img src="images/img_lights.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="w3-container w3-col s4 w3-margin-bottom">
            <img src="images/img_mountains.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
        </div>
    </div>

    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xxlarge w3-display-topleft">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-card-4" style="margin-top:50px">
            <img id="img02" style="width:100%">
        </div>
    </div>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row-padding"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-third"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_snowtops.jpg"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="onClick(this)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-third"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red">
 src<span class="attributevaluecolor" style="color:mediumblue">="img_lights.jpg"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="onClick(this)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-third"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red">
 src<span class="attributevaluecolor" style="color:mediumblue">="img_mountains.jpg"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="onClick(this)"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="modal01"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="this.style.display='none'"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-modal-content"</span> id<span class="attributevaluecolor" style="color:mediumblue">="img01"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:100%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>script<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="jscolor" style="color:black"><br><span class="jskeywordcolor" style="color:mediumblue">function</span> <span class="jsnumbercolor" style="color:red">
</span> onClick(element) {<br>&nbsp; document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"img01"</span>).<span class="jspropertycolor" style="color:black">src</span> = element.<span class="jspropertycolor" style="color:black">src</span>;<br>&nbsp; <span class="jsnumbercolor" style="color:red">
</span> document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"modal01"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> = <span class="jsstringcolor" style="color:brown">"block"</span>;<br>}<br></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/script<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal_gallery" target="_blank">Try It Yourself »</a>
    </div>

    <script>
        function onClick(element) {
            document.getElementById("img02").src = element.src;
            document.getElementById('modal01').style.display='block';
        }
    </script>
    <hr>

    <h2>Modal Login Form</h2>
    <p>This example creates a modal for login:</p>


    <div id="loginm" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('loginm').style.display='none'" class="w3-button w3-hover-red w3-xxlarge w3-display-topleft">×</span>
                <img src="images/img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top"></div>
            <div class="w3-container">
                <div class="w3-section">
                    <label><b>Username</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username">
                    <label><b>Password</b></label>
                    <input class="w3-input w3-border" type="password" placeholder="Enter Password">
                    <button class="w3-button w3-block w3-green w3-section">Login</button>
                    <input class="w3-check" type="checkbox" checked="checked"> Remember me
                </div>
            </div>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <button onclick="document.getElementById('loginm').style.display='none'" type="button" class="w3-button w3-red w3-right">Cancel</button>
                <span class="w3-left tags w3-padding w3-hide-small">Forgot <a href="javascript:void(0)">password</a></span>
            </div>

        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-white w3-padding w3-padding-16">
            <button onclick="document.getElementById('loginm').style.display='block'" class="w3-btn w3-padding w3-dark-grey">Open Login Modal</button>
        </div>
        <a class="w3-btn w3-green w3-margin-top w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal_login" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Modal With Tabbed Content</h2>
    <p>This example creates a modal with tabbed content:</p>

    <div id="tabmodal" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">
            <header class="w3-container w3-blue">
                <span onclick="document.getElementById('tabmodal').style.display='none'" class="w3-button w3-hover-red w3-xlarge w3-display-topleft">×</span>
                <h2>Header</h2>
            </header>

            <div class="w3-bar w3-border-bottom">
                <a href="javascript:void(0)" class="tablinkmod w3-bar-item w3-button w3-light-grey w3-right" onclick="openCity(event, 'Londontab')">London</a>
                <a href="javascript:void(0)" class="tablinkmod w3-bar-item w3-button w3-right" onclick="openCity(event, 'Paristab')">Paris</a>
                <a href="javascript:void(0)" class="tablinkmod w3-bar-item w3-button w3-right" onclick="openCity(event, 'Tokyotab')">Tokyo</a>
            </div>

            <div id="Londontab" class="w3-container city" style="display: block;">
                <h1>London</h1>
                <p style="clear:both">London is the most populous city in the United Kingdom, with a metropolitan area of over
                    9 million inhabitants.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <div id="Paristab" class="w3-container city" style="display: none;">
                <h1>Paris</h1>
                <p>Paris is the capital of France.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div id="Tokyotab" class="w3-container city" style="display: none;">
                <h1>Tokyo</h1>
                <p>Tokyo is the capital of Japan.</p><br>
            </div>

            <div class="w3-container w3-light-grey w3-padding">
                <button class="w3-button w3-left w3-white w3-border" onclick="document.getElementById('tabmodal').style.display='none'">Close</button>
            </div>
        </div>
    </div>

    <script>
        document.getElementsByClassName("tablinkmod")[0].click();

        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinkmod");
            for (i = 0; i < x.length; i++) {
                tablinks[i].classList.remove("w3-light-grey");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.classList.add("w3-light-grey");
        }
    </script>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-white w3-padding w3-padding-16">
            <button onclick="document.getElementById('tabmodal').style.display='block'" class="w3-btn w3-padding w3-blue-grey">Open Tabbed Modal</button>
        </div>
        <a class="w3-btn w3-green w3-margin-top w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal_tab" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Close the Modal</h2>
    <p>In the examples above, we use a button to close the modal. However, with a little bit of JavaScript, you can also close the modal when clicking outside of the modal box:</p>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
</span><span class="commentcolor" style="color:green">// Get the modal<br></span><span class="jskeywordcolor" style="color:mediumblue">var</span> modal = document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">'id01'</span>);<br><br><span class="jsnumbercolor" style="color:red">
</span><span class="commentcolor" style="color:green">// When the user clicks anywhere outside of the modal, close it<br></span>
window.<span class="jspropertycolor" style="color:black">onclick</span> = <span class="jskeywordcolor" style="color:mediumblue">function</span>(<span class="jskeywordcolor" style="color:mediumblue">event</span>) {<br>&nbsp;&nbsp;<span class="jskeywordcolor" style="color:mediumblue">if</span> (<span class="jskeywordcolor" style="color:mediumblue">event</span>.<span class="jspropertycolor" style="color:black">target</span> <span class="jsnumbercolor" style="color:red">
</span>== modal) {<br>&nbsp;&nbsp;&nbsp; modal.<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> = <span class="jsstringcolor" style="color:brown">"none"</span>;<br><span class="jsnumbercolor" style="color:red">
</span>&nbsp;&nbsp;}<br>}<br> </span></div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal_close" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2 class="tags">Advanced: Lightbox (Modal Image Gallery)</h2>
    <p>This example shows how to add an image slideshow inside a modal, to create a "lightbox":</p>

    <div id="myModal" class="w3-modal w3-black">
        <span class="w3-text-white w3-xxlarge w3-hover-text-grey w3-container w3-display-topright cursor" title="Close Lightbox" onclick="closeModal()">×</span>
        <div class="w3-modal-content">

            <div class="w3-content" style="max-width:1200px">
                <img class="mySlides" src="images/img_nature_wide.jpg" style="width: 100%; display: block;">
                <img class="mySlides" src="images/img_snow_wide.jpg" style="width: 100%; display: none;">
                <img class="mySlides" src="images/img_mountains_wide.jpg" style="width: 100%; display: none;">
                <div class="w3-row w3-black w3-center">
                    <div class="w3-container w3-display-container">
                        <p id="caption">Nature and sunrise</p>
                        <span class="w3-display-middle w3-hover-text-grey w3-large cursor noselection" style="left:2%" onclick="plusDivs(-1)" title="Previous image">❯</span>
                        <span class="w3-display-middle w3-hover-text-grey w3-large cursor noselection" style="left:98%" onclick="plusDivs(1)" title="Next image">❮</span>
                    </div>

                    <div class="w3-col s4">
                        <img class="demo w3-opacity w3-hover-opacity-off cursor w3-opacity-off" src="images/img_nature_wide.jpg" style="width:100%" onclick="currentDiv(1)" alt="Nature and sunrise">
                    </div>
                    <div class="w3-col s4">
                        <img class="demo w3-opacity w3-hover-opacity-off cursor" src="images/img_snow_wide.jpg" style="width:100%" onclick="currentDiv(2)" alt="French Alps">
                    </div>
                    <div class="w3-col s4">
                        <img class="demo w3-opacity w3-hover-opacity-off cursor" src="images/img_mountains_wide.jpg" style="width:100%" onclick="currentDiv(3)" alt="Mountains and fjords">
                    </div>
                </div> <!-- End row -->
            </div> <!-- End w3-content -->

        </div> <!-- End modal content -->
    </div> <!-- End modal -->

    <script>
        function openModal() {
            document.getElementById('myModal').style.display = "block";
        }

        function closeModal() {
            document.getElementById('myModal').style.display = "none";
        }

        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-opacity-off", "");

            }
            x[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " w3-opacity-off";
            captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-white w3-padding w3-padding-16">
            <span>Click on an image:</span>
            <div class="w3-row-padding" style="margin:16px -16px 0 -16px">
                <div class="w3-col s4">
                    <img src="images/img_nature_wide.jpg" style="width:100%;cursor:pointer" onclick="openModal();currentDiv(1)" class="w3-hover-shadow cursor">
                </div>
                <div class="w3-col s4">
                    <img src="images/img_snow_wide.jpg" style="width:100%;cursor:pointer" onclick="openModal();currentDiv(2)" class="w3-hover-shadow cursor">
                </div>
                <div class="w3-col s4">
                    <img src="images/img_mountains_wide.jpg" style="width:100%;cursor:pointer" onclick="openModal();currentDiv(3)" class="w3-hover-shadow cursor">
                </div>
            </div>

        </div>
        <a class="w3-btn w3-green w3-margin-top w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal_lightbox" target="_blank">Try It Yourself »</a>
    </div>
    <p><strong>Tip:</strong> To learn more about slideshows, visit our <a href="slideshow.php">W3.CSS Slideshow</a> chapter.</p>
    <br>
    <div class="w3-clear nextprev">
        <a href="tooltips.php" class="w3-right next w3-btn w3-green">Tooltips »</a>
        <a href="slideshow.php" class="w3-left next w3-btn w3-green">« Slideshow</a>
    </div>
</div>