<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Layouts</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="animations.php" class="w3-right next w3-btn w3-green w3-green">Animations »</a>
            <a href="responsive.php" class="w3-left next w3-btn w3-green w3-green">« Responsive</a>
            <br/><br/><br/>
        </div>
    </div><hr/>


    <div class="w3-cell-row w3-margin-top">
        <div class="w3-container w3-black w3-cell">
            <p>Hello W3.CSS Layout.</p>
            <p>Hello W3.CSS Layout.</p>
            <p>Hello W3.CSS Layout.</p>
            <p>Hello W3.CSS Layout.</p>
        </div>
        <div class="w3-container w3-dark-grey w3-cell w3-cell-middle">
            <p>Hello W3.CSS Layout.</p>
        </div>
        <div class="w3-container w3-blue-grey w3-cell w3-cell-bottom">
            <p>Hello W3.CSS Layout.</p>
        </div>
    </div>

    <hr>

    <h2>W3.CSS Layout Classes</h2>
    <p>W3.CSS version 2.90 / 2.91 introduced the following classes for "column-like" layout:</p>
    <table class="w3-table-all">
        <tbody><tr>
            <th style="width:30%">Class</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>w3-cell-row</td>
            <td>Container for cells (columns).</td>
        </tr>
        <tr>
            <td>w3-cell</td>
            <td>Layout cell (column).</td>
        </tr>
        <tr>
            <td>w3-cell-top</td>
            <td>Aligns content at the top of a cell (column).</td>
        </tr>
        <tr>
            <td>w3-cell-middle</td>
            <td>Aligns content at the vertical middle of a cell (column).</td>
        </tr>
        <tr>
            <td>w3-cell-bottom</td>
            <td>Aligns content at the bottom of a cell (column).</td>
        </tr>
        <tr>
            <td>w3-mobile</td>
            <td>Adds mobile-first responsiveness to a cell (column).<br>Displays
                elements as block elements on mobile devices.</td>
        </tr>
        </tbody></table>

    <div class="w3-panel w3-note">
        <p>The layout classes replace deprecated layout classes.</p>
        <p>The new layout classer are more versatile and easier to use.</p>
        <p>The deprecated layout classes are listed at the bottom of this page.</p>
    </div>
    <hr>

    <h2>HTML Block Elements</h2>
    <p>Originally, HTML block elements (like &lt;div&gt; elements) display as vertical blocks:</p>
    <div class="w3-container w3-red">
        <p>Hello W3.CSS Layout.</p>
    </div>
    <div class="w3-container w3-green">
        <p>Hello W3.CSS Layout.</p>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_layout_div" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Layout Cells</h2>
    <p>The <strong>w3-cell</strong> class redefines block elements to display horizontally (like table cells):</p>
    <div class="w3-container w3-red w3-cell">
        <p>Hello W3.CSS Layout.</p>
    </div>
    <div class="w3-container w3-green w3-cell">
        <p>Hello W3.CSS Layout.</p>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-red w3-cell"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-green w3-cell"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_layout_cell" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Layout Container</h2>
    <p>The <strong>w3-cell-row</strong> is a container for cells (columns).</p>
    <p>The width of the w3-cell-row container defines the total width of all the
        contained
        cells.</p>
    <p>The default width is 100%:</p>
    <div class="w3-cell-row">
        <div class="w3-container w3-red w3-cell">
            <p>Hello W3.CSS Layout.</p>
        </div>
        <div class="w3-container w3-green w3-cell">
            <p>Hello W3.CSS Layout.</p>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-cell-row"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-red w3-cell"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-green w3-cell"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_layout_container" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <p>If you change the width of the cell container, it will reduce the total
        width of the contained cells:</p>
    <div class="w3-cell-row" style="width:75%">
        <div class="w3-container w3-red w3-cell">
            <p>Hello W3.CSS Layout.</p>
        </div>
        <div class="w3-container w3-green w3-cell">
            <p>Hello W3.CSS Layout.</p>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-cell-row"</span>
  style<span class="attributevaluecolor" style="color:mediumblue">="width:75%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-red w3-cell"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-green w3-cell"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_layout_container_width" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Layout Cells are Self Adjusting</h2>
    <p>The <strong>w3-cell</strong> class has a very nice built-in self
        adjusting standard.
        Side-by-side elements will automatically adjust to the necessary width:</p>

    <div class="w3-container w3-red w3-cell">
        <p>Hello W3.CSS Layout.</p>
    </div>
    <div class="w3-container w3-green w3-cell">
        <p>Hello W3.CSS Layout. Hello W3.CSS Layout.</p>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-red w3-cell"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-green w3-cell"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout. Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_layout_cell_width" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Layout Cells Adjust to Equal Height</h2>
    <p>Side-by-side <strong>w3-cell</strong> elements will
        also automatically self-adjust to equal height:</p>

    <div class="w3-container w3-red w3-cell">
        <p>Hello W3.CSS Layout.</p>
    </div>
    <div class="w3-container w3-green w3-cell">
        <p>Hello W3.CSS Layout.</p>
        <p>Hello W3.CSS Layout.</p>
        <p>Hello W3.CSS Layout.</p>
        <p>Hello W3.CSS Layout.</p>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-red w3-cell"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-green w3-cell"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_layout_cell_height" target="_blank">Try It Yourself »</a>
        </p>
    </div>

    <hr>

    <h2>Responsive Layout</h2>
    <p>The <strong>w3-mobile </strong>class adds mobile first responsiveness to any
        HTML element.</p>
    <p>Used together with w3-cell it will display the layout columns vertically on small screens/mobile phones and horizontally on medium/large screens.</p>

    <div class="w3-border w3-padding-24 w3-padding">
        <p style="margin-top:-8px">On medium and large screens:</p>
        <div class="w3-cell-row">
            <div class="w3-container w3-red w3-cell">
                <p>Hello W3.CSS Layout.</p>
            </div>
            <div class="w3-container w3-green w3-cell">
                <p>Hello W3.CSS Layout.</p>
            </div>
            <div class="w3-container w3-blue w3-cell">
                <p>Hello W3.CSS Layout.</p>
            </div>
        </div>

        <p>On small screens:</p>
        <div class="w3-cell-row">
            <div class="w3-container w3-red">
                <p>Hello W3.CSS Layout.</p>
            </div>
            <div class="w3-container w3-green">
                <p>Hello W3.CSS Layout.</p>
            </div>
            <div class="w3-container w3-blue">
                <p>Hello W3.CSS Layout.</p>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-red
  w3-cell w3-mobile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-green w3-cell
  w3-mobile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-blue w3-cell w3-mobile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello
            W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_layout_col" target="_blank">Try It Yourself »</a>
        </p>
    </div>

    <hr>


    <h2>Easy Alignment</h2>
    <p>The <strong>w3-cell</strong> class makes it very easy to align text.</p>
    <p>There are 3 different alignment classes:</p>
    <ul class="w3-ul w3-border">
        <li>w3-cell-top (default)</li>
        <li>w3-cell-middle</li>
        <li>w3-cell-bottom</li>
    </ul>
    <br>
    <div class="w3-container w3-red w3-cell">
        <p>Hello W3.CSS Layout.</p>
        <p>Hello W3.CSS Layout.</p>
        <p>Hello W3.CSS Layout.</p>
        <p>Hello W3.CSS Layout.</p>
    </div>
    <div class="w3-container w3-green w3-cell w3-cell-middle">
        <p>Hello W3.CSS Layout.</p>
    </div>
    <div class="w3-container w3-blue w3-cell w3-cell-bottom">
        <p>Hello W3.CSS Layout.</p>
    </div>


    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-red w3-cell"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-green w3-cell
  w3-cell-middle"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-blue w3-cell
  w3-cell-bottom"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_layout_align" target="_blank">Try It Yourself »</a>
        </p>
    </div>

    <p>The <strong>w3-cell-row</strong> class stretches the elements to fit the page width:</p>

    <div class="w3-cell-row">
        <div class="w3-container w3-red w3-cell">
            <p>Hello W3.CSS Layout.</p>
            <p>Hello W3.CSS Layout.</p>
            <p>Hello W3.CSS Layout.</p>
            <p>Hello W3.CSS Layout.</p>
        </div>
        <div class="w3-container w3-green w3-cell w3-cell-middle">
            <p>Hello W3.CSS Layout.</p>
        </div>
        <div class="w3-container w3-blue w3-cell w3-cell-bottom">
            <p>Hello W3.CSS Layout.</p>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-cell-row"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-red w3-cell"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-green w3-cell
  w3-cell-middle"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-blue w3-cell
  w3-cell-bottom"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Hello W3.CSS Layout.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <p>
            <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_layout_align_all" target="_blank">Try It Yourself »</a>
        </p>
    </div>
    <hr>

    <h2>Deprecated W3.CSS Table Layout Classes</h2>
    <table class="w3-table-all">
        <tbody><tr>
            <td>w3-layout-container</td>
            <td>Use w3-cell-row instead.</td>
        </tr>
        <tr>
            <td>w3-layout-row</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>w3-layout-cell</td>
            <td>Use w3-cell instead.</td>
        </tr>
        <tr>
            <td>w3-layout-top</td>
            <td>Use w3-cell-top instead.</td>
        </tr>
        <tr>
            <td>w3-layout-middle</td>
            <td>Use w3-cell-middle instead.</td>
        </tr>
        <tr>
            <td>w3-layout-bottom</td>
            <td>Use w3-cell-bottom instead.</td>
        </tr>
        <tr>
            <td>w3-layout-col</td>
            <td>Use w3-mobile instead.</td>
        </tr>
        </tbody></table>
    <div class="w3-panel w3-note">
        <p>Deprecated classes will be removed from W3.CSS in version 4.0.</p>
    </div>

    <br>
    <div class="w3-clear nextprev">
        <a href="animations.php" class="w3-right next w3-btn w3-green w3-green">Animations »</a>
        <a href="responsive.php" class="w3-left next w3-btn w3-green w3-green">« Responsive</a>
    </div>
</div>