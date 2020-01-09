<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Grid</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="code.php" class="w3-right next w3-btn w3-green">Code »</a>
            <a href="tooltips.php" class="w3-left next w3-btn w3-green">« Tooltips</a>
            <br/><br/><br/>
        </div>
    </div><hr/>
    <h2>Responsive Grid</h2>
    <p>W3.CSS supports a 12 column responsive fluid grid.</p>
    <p class="w3-large">Resize the page to see the effect!</p>
    <div class="w3-border">

        <div class="w3-row">
            <div class="w3-col m1 w3-center w3-grey">1</div>
            <div class="w3-col m1 w3-center">2</div>
            <div class="w3-col m1 w3-center w3-grey">3</div>
            <div class="w3-col m1 w3-center">4</div>
            <div class="w3-col m1 w3-center w3-grey">5</div>
            <div class="w3-col m1 w3-center">6</div>
            <div class="w3-col m1 w3-center w3-grey">7</div>
            <div class="w3-col m1 w3-center">8</div>
            <div class="w3-col m1 w3-center w3-grey">9</div>
            <div class="w3-col m1 w3-center">10</div>
            <div class="w3-col m1 w3-center w3-grey">11</div>
            <div class="w3-col m1 w3-center">12</div>
        </div>

        <div class="w3-row">
            <div class="w3-col w3-container m4 l3 w3-blue" style="height:230px">

                <p>This part will occupy 12 columns on a small screen,
                    4 on a medium screen, and 3 on a large screen.</p>
            </div>
            <div class="w3-col m8 l9 w3-container w3-green" style="height:230px">
                <p>This part will occupy 12 columns on a small screen,
                    8 on a medium screen, and 9 on a large screen.</p>
            </div>
        </div>

        <div class="w3-row">
            <div class="w3-col m1 w3-center w3-grey">1</div>
            <div class="w3-col m1 w3-center">2</div>
            <div class="w3-col m1 w3-center w3-grey">3</div>
            <div class="w3-col m1 w3-center">4</div>
            <div class="w3-col m1 w3-center w3-grey">5</div>
            <div class="w3-col m1 w3-center">6</div>
            <div class="w3-col m1 w3-center w3-grey">7</div>
            <div class="w3-col m1 w3-center">8</div>
            <div class="w3-col m1 w3-center w3-grey">9</div>
            <div class="w3-col m1 w3-center">10</div>
            <div class="w3-col m1 w3-center w3-grey">11</div>
            <div class="w3-col m1 w3-center">12</div>
        </div>
    </div>
    <br>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col m4 l3"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>12 columns on a small screen, 4
            on a medium screen, and 3 on a large screen.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col m8 l9"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>12 columns on a small screen, 8
            on a medium screen, and 9 on a large screen.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_grid_example&amp;stacked=h" target="_blank">Try It Yourself »</a>
    </div>

    <h2>Responsive Rows</h2>
    <p>W3.CSS's grid system is responsive. The columns will re-arrange automatically depending on the screen size: On a big screen it might look better with the content organized in three columns, but on a small screen it
        might be better if the content were stacked on top of each other.</p>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tbody><tr>
            <th style="width:20%">Class</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>w3-row</td>
            <td>Container for responsive classes, with no padding</td>
        </tr>
        <tr>
            <td>w3-row-padding</td>
            <td>Container for responsive classes, with 8px left and right padding</td>
        </tr>
        <tr>
            <td>w3-col</td>
            <td>Defines one column in a 12-column responsive grid</td>
        </tr>
        </tbody></table>

    <p>w3-col has the following sub classes:</p>

    <h3 class="tags">Columns for small screens (typical smart phones):</h3>

    <table class="w3-table w3-bordered w3-striped w3-border">
        <tbody><tr>
            <th style="width:20%">Class</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>s1</td>
            <td>Defines 1 of 12 columns (width:08.33%) for small screens </td>
        </tr>
        <tr>
            <td>s2</td>
            <td>Defines 2 of 12 columns (width:16.66%) for small screens</td>
        </tr>
        <tr>
            <td>s3</td>
            <td>Defines 3 of 12 columns (width:25.00%) for small screens</td>
        </tr>
        <tr>
            <td>s4</td>
            <td>Defines 4 of 12 columns (width:33.33%) for small screens</td>
        </tr>
        <tr>
            <td>s5-s11</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>s12</td>
            <td>Defines 12 of 12 columns (width:100%). Default for small screens</td>
        </tr>
        </tbody></table>
    <h3 class="tags">Columns for medium screens (typical tablets):</h3>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tbody><tr>
            <th style="width:20%">Class</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>m1</td>
            <td>Defines 1 of 12 columns (width:08.33%) for medium screens</td>
        </tr>
        <tr>
            <td>m2</td>
            <td>Defines 2 of 12 columns (width:16.66%) for medium screens</td>
        </tr>
        <tr>
            <td>m3</td>
            <td>Defines 3 of 12 columns (width:25.00%) for medium screens</td>
        </tr>
        <tr>
            <td>m4</td>
            <td>Defines 4 of 12 columns (width:33.33%) for medium screens</td>
        </tr>
        <tr>
            <td>m5-m11&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>m12</td>
            <td>Defines 12 of 12 columns (width:100%). Default for medium screens</td>
        </tr>
        </tbody></table>
    <h3 class="tags">Columns for large screens (typical laptops and desktops):</h3>
    <table class="w3-table w3-bordered w3-striped w3-border">
        <tbody><tr>
            <th style="width:20%">Class</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>l1</td>
            <td>Defines 1 of 12 columns (width:08.33%) for large screens</td>
        </tr>
        <tr>
            <td>l2</td>
            <td>Defines 2 of 12 columns (width:16.66%) for large screens</td>
        </tr>
        <tr>
            <td>l3</td>
            <td>Defines 3 of 12 columns (width:25.00%) for large screens</td>
        </tr>
        <tr>
            <td>l4</td>
            <td>Defines 4 of 12 columns (width:33.33%) for large screens</td>
        </tr>
        <tr>
            <td>l5-l11</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>l12</td>
            <td>Defines 12 of 12 columns (width:100%). Default for large screens)</td>
        </tr>
        </tbody></table>
    <p>The classes above can be combined to create more dynamic and flexible layouts.
    </p>
    <p>Each class scales up, so if you wish to set the same width for small, medium and large screens, you only
        need to specify the <strong>small</strong> class. And if you want the same width on medium and large screens, you only need to
        specify the medium class.</p>
    <p>However, if you only use medium and/or large classes, the width will always
        transform to 100% on small screens.</p>
    <p><strong>Note:</strong> The number of columns should always add up to 12 for
        each row (6+6, 3+3+6, 9+3, etc)!</p>

    <hr>
    <h2>Two Equal Columns</h2>
    <p>Two equal-width columns (50%/50%) on all screen sizes:</p>
    <div class="w3-row">
        <div class="w3-col s6 w3-green w3-center">
            <p>s6</p>
        </div>
        <div class="w3-col s6 w3-dark-grey w3-center">
            <p>s6</p>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col s6 w3-green w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>s6<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col
s6 w3-dark-grey w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>s6<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_grid_two_equal&amp;stacked=h" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Two Unequal Columns</h2>
    <p>Two columns of unequal width (25%/75%) on all screen sizes:</p>
    <div class="w3-row">
        <div class="w3-col s3 w3-green w3-center">
            <p>s3</p>
        </div>
        <div class="w3-col s9 w3-dark-grey w3-center">
            <p>s9</p>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col s3 w3-green w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>s3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col
s9 w3-dark-grey w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>s9<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_grid_two_unequal&amp;stacked=h" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Three Equal Columns</h2>
    <p>Three equal-width columns (33.3%/33.3%/33.3%) on all screen sizes:</p>
    <div class="w3-row">
        <div class="w3-col s4 w3-green w3-center">
            <p>s4</p>
        </div>
        <div class="w3-col s4 w3-dark-grey w3-center">
            <p>s4</p>
        </div>
        <div class="w3-col s4 w3-red w3-center">
            <p>s4</p>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col s4 w3-green w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>s4<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col s4 w3-dark-grey w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>s4<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col s4
w3-red w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>s4<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_grid_three_equal&amp;stacked=h" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Three Unequal Columns</h2>
    <p>Three various-width columns (25%/50%/25%) on tablets, laptops and desktops. On mobile phones, the columns will automatically stack (100% width):</p>
    <div class="w3-row">
        <div class="w3-col m3 w3-green w3-center">
            <p>m3</p>
        </div>
        <div class="w3-col m6 w3-dark-grey w3-center">
            <p>m6</p>
        </div>
        <div class="w3-col m3 w3-red w3-center">
            <p>m3</p>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col m3 w3-green w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>m3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col
m6 w3-dark-grey w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>m6<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col
m3
w3-red w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>m3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_grid_three_unequal&amp;stacked=h" target="_blank">Try It Yourself »</a>
    </div>
    <p><strong>Note:</strong> This example is the same as using w3-quarter (m3), w3-half (m6), w3-quarter (m3), which you learned in the <a href="responsive.php">W3.CSS Responsive</a> chapter.</p>
    <hr>

    <h2>Six Columns</h2>
    <p class="tags">Six equal-width columns (16% each) on tablets, laptops and desktops. On mobile phones, the columns will automatically stack (100% width):</p>
    <div class="w3-row">
        <div class="w3-col m2 w3-green w3-center">
            <p>m2</p>
        </div>
        <div class="w3-col m2 w3-red w3-center">
            <p>m2</p>
        </div>
        <div class="w3-col m2 w3-blue w3-center">
            <p>m2</p>
        </div>
        <div class="w3-col m2 w3-dark-grey w3-center">
            <p>m2</p>
        </div>
        <div class="w3-col m2 w3-black w3-center">
            <p>m2</p>
        </div>
        <div class="w3-col m2 w3-purple w3-center">
            <p>m2</p>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col m2 w3-green
w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>m2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col m2 w3-red
w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>m2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col m2 w3-blue
w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>m2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col m2 w3-dark-grey
w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>m2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col m2 w3-black
w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>m2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col m2 w3-purple
w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>m2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_grid_six_col&amp;stacked=h" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Mixed: Mobile and Laptops</h2>
    <p class="tags">You can combine classes to create a dynamic and flexible layout. This example
        will produce a two column layout with a 83.34%/16.66% (l10, l2) split on large screens and a 50%/50%
        (s6, s6)
        split on small screens:</p>

    <div class="w3-row">
        <div class="w3-col l10 s6 w3-green w3-center"><p>l10 s6</p></div>
        <div class="w3-col l2 s6 w3-dark-grey w3-center"><p>l2 s6</p></div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col l10 s6 w3-pink
w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>l10 s6<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col l2 s6
w3-dark-grey w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>l2 s6<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_grid_mixed&amp;stacked=h" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Mixed: Mobile, Tablets and Laptops</h2>
    <p>This example will produce a three column layout with a 25%/58.34%/16.66% (l3, l7, l2) split on large screens, 50%/25%/25% (m6, m3, m3) split on medium screens and a 33.3%/33.3%/33.3% (s4, s4, s4)split on small screens:</p>

    <div class="w3-row">
        <div class="w3-col l3 m6 s4 w3-green w3-center"><p>l3 m6 s4</p></div>
        <div class="w3-col l7 m3 s4 w3-dark-grey w3-center"><p>l7 m3 s4</p></div>
        <div class="w3-col l2 m3 s4 w3-red w3-center"><p>l2 m3 s4</p></div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col l3 m6 s4 w3-green w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>l3 m6 s4<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col l7 m3 s4
w3-dark-grey w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>l7 m3 s4<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col l2
m3 s4 w3-red w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>l2 m3 s4<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_grid_mixed2&amp;stacked=h" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Difference between w3-row and w3-row-padding</h2>
    <p>The w3-row class defines a padded-less container, while the w3-row-padding class adds a 8px left and right padding to each column:</p>

    <div class="w3-row">
        <p>w3-row:</p>
        <div class="w3-col s4">
            <img src="images/img_lights.jpg" style="width:100%">
        </div>
        <div class="w3-col s4">
            <img src="images/img_nature.jpg" style="width:100%">
        </div>
        <div class="w3-col s4">
            <img src="images/img_snowtops.jpg" style="width:100%">
        </div>
    </div>

    <div class="w3-row-padding">
        <p>w3-row-padding:</p>
        <div class="w3-col s4">
            <img src="images/img_lights.jpg" style="width:100%">
        </div>
        <div class="w3-col s4">
            <img src="images/img_nature.jpg" style="width:100%">
        </div>
        <div class="w3-col s4">
            <img src="images/img_snowtops.jpg" style="width:100%">
        </div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col s4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_lights.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col s4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_nature.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col s4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_snowtops.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row-padding"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col s4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_lights.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col s4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_nature.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col s4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_snowtops.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_grid_row_padding" target="_blank">Try It Yourself »</a>
    </div>

    <hr>

    <h2>Using w3-rest</h2>
    <p>The <strong>w3-rest</strong> class is a powerful and flexible class that will use what's left of the grid column.</p>
    <div class="w3-row">
        <div class="w3-col w3-container w3-blue" style="width:150px"><p>150px</p></div>
        <div class="w3-rest w3-container w3-green"><p>rest</p></div>
    </div>
    <br>
    <div class="w3-row">
        <div class="w3-col w3-right w3-container w3-blue" style="width:75px"><p>75px</p></div>
        <div class="w3-rest w3-container w3-green"><p>rest</p></div>
    </div>
    <br>
    <div class="w3-row">
        <div class="w3-col w3-left w3-container w3-blue" style="width:100px"><p>100px</p></div>
        <div class="w3-col w3-right w3-container w3-blue" style="width:100px"><p>100px</p></div>
        <div class="w3-rest w3-container w3-green"><p>rest</p></div>
    </div>
    <br>
    <div class="w3-row">
        <div class="w3-quarter w3-container w3-red"><p>quarter</p></div>
        <div class="w3-half">
            <div class="w3-row">
                <div class="w3-col w3-container w3-blue" style="width:80px"><p>80px</p></div>
                <div class="w3-rest w3-container w3-green"><p>rest</p></div>
            </div>
        </div>
        <div class="w3-quarter w3-container w3-purple"><p>quarter</p></div>
    </div>
    <br>

    <div class="w3-row">
        <div class="w3-quarter w3-container w3-red"><p>quarter</p></div>
        <div class="w3-quarter w3-container w3-purple"><p>quarter</p></div>
        <div class="w3-half">
            <div class="w3-row">
                <div class="w3-col w3-container w3-blue" style="width:35%"><p>35%</p></div>
                <div class="w3-rest w3-container w3-green"><p>rest</p></div>
            </div>
        </div>
    </div>

    <div class="w3-example">
        <h3>Example using rest</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:150px"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>150px<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-rest"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>rest<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_grid_rest&amp;stacked=h" target="_blank">Try It Yourself »</a>
    </div>
    <div class="w3-panel w3-note">
        <p>The element using class="w3-rest" must always be the last element in the source code.</p>
    </div>
    <hr>

    <h2>Using Percent</h2>
    <p>Use the CSS width property to determine a specific width of the columns.</p>
    <div class="w3-row">
        <div class="w3-col w3-green w3-container" style="width:20%"><p>20%</p></div>
        <div class="w3-col w3-blue w3-container" style="width:60%"><p>60%</p></div>
        <div class="w3-col w3-red w3-container" style="width:20%"><p>20%</p></div>
    </div>
    <br>
    <div class="w3-row">
        <div class="w3-col w3-green w3-container" style="width:45%"><p>45%</p></div>
        <div class="w3-col w3-dark-grey w3-container" style="width:55%"><p>55%</p></div>
    </div>
    <br>
    <div class="w3-row">
        <div class="w3-col w3-green w3-container" style="width:15%"><p>15%</p></div>
        <div class="w3-col w3-dark-grey w3-container" style="width:35%"><p>35%</p></div>
        <div class="w3-col w3-red w3-container" style="width:10%"><p>10%</p></div>
        <div class="w3-col w3-blue w3-container" style="width:30%"><p>30%</p></div>
        <div class="w3-col w3-purple w3-container" style="width:10%"><p>10%</p></div>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-row"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-col
w3-container w3-green"</span>
style<span class="attributevaluecolor" style="color:mediumblue">="width:20%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>20%<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-col w3-container w3-blue"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:60%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>60%<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-col w3-container w3-red"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:20%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>20%<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_grid_percent&amp;stacked=h" target="_blank">Try It Yourself »</a>
    </div>

    <br>
    <div class="w3-clear nextprev">
        <a href="code.php" class="w3-right next w3-btn w3-green">Code »</a>
        <a href="tooltips.php" class="w3-left next w3-btn w3-green">« Tooltips</a>
    </div>
</div>