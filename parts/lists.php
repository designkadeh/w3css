<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Lists</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="images.php" class="w3-right next w3-btn w3-green w3-green">Images »</a>
            <a href="tables.php" class="w3-left next w3-btn w3-green w3-green">« Tables</a>
            <br/><br/><br/>
        </div>
    </div><hr/>

    <ul class="w3-ul w3-card-4">
        <li class="w3-bar">
            <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-left">×</span>
            <img src="images/img_avatar2.png" class="w3-bar-item w3-circle w3-hide-small w3-right" style="width:85px">
            <div class="w3-bar-item w3-right">
                <span class="w3-large">Mike</span><br>
                <span>Web Designer</span>
            </div>
        </li>

        <li class="w3-bar">
            <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-left">×</span>
            <img src="images/img_avatar5.png" class="w3-bar-item w3-circle w3-hide-small w3-right" style="width:85px">
            <div class="w3-bar-item w3-right">
                <span class="w3-large">Jill</span><br>
                <span>Support</span>
            </div>
        </li>

        <li class="w3-bar">
            <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-left">×</span>
            <img src="images/img_avatar6.png" class="w3-bar-item w3-circle w3-hide-small w3-right" style="width:85px">
            <div class="w3-bar-item w3-right">
                <span class="w3-large">Jane</span><br>
                <span>Accountant</span>
            </div>
        </li>
    </ul>

    <hr>

    <h2>Basic List</h2>
    <p>The <strong>w3-ul</strong> class is used to display a basic list:</p>
    <ul class="w3-ul">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists" target="_blank">
            Try It Yourself »</a>
    </div>
    <hr>

    <h2>Bordered List</h2>
    <p>The <strong>w3-border</strong> class adds a border around the list:</p>
    <ul class="w3-ul w3-border">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul w3-border"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_border" target="_blank">
            Try It Yourself »</a>
    </div>
    <hr>
    <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
        <!-- MidContent -->

        <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
        <div id="snhb-mid_content-0" data-google-query-id="CNeMpuyGhuMCFQgEiwodoccDmA"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_0" title="3rd party ad content" name="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_0" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="f" data-load-complete="true"></iframe></div></div>

    </div>
    <hr>
    <h2>List Header</h2>
    <p>An example of how to add a heading element inside the list item:</p>
    <ul class="w3-ul w3-border">
        <li><h2>Names</h2></li>
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul w3-border"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Names<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_header" target="_blank">
            Try It Yourself »</a>
    </div>
    <hr>

    <h2>List as a Card</h2>
    <p>The <strong>w3-card-<em>number</em></strong> classes can be used to show a list as a card:</p>
    <ul class="w3-ul w3-card-4" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul w3-card-4"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:50%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_card" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Centered List</h2>
    <p>The <strong>w3-center</strong> class can be used to center the list items in a list:</p>
    <ul class="w3-ul w3-center">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_center" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Colored List</h2>
    <p>The <strong>w3-<em>color</em></strong> classes can be used to add a color to the list:</p>
    <ul class="w3-ul w3-red">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_red" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Colored List Item</h2>
    <p>The <strong>w3-<em>color</em></strong> classes can be used to add a color to the list item:</p>
    <ul class="w3-ul">
        <li class="w3-blue">Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_blue" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Hoverable List</h2>
    <p>The <strong>w3-hoverable</strong> class adds a grey background color to each list item on mouse-over:</p>
    <ul class="w3-ul w3-hoverable">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul w3-hoverable"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_hoverable" target="_blank">Try It Yourself »</a>
    </div>

    <p>If you want a specific hover color, add any of the <strong>w3-hover-<em>color</em></strong>
        classes to each &lt;li&gt; element:</p>
    <ul class="w3-ul">
        <li class="w3-hover-red">Jill</li>
        <li class="w3-hover-blue">Eve</li>
        <li class="w3-hover-green">Adam</li>
    </ul>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hover-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hover-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hover-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_hoverable2" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Closable List Item</h2>
    <p>Click on the "x" to close/hide a list item:</p>
    <ul class="w3-ul w3-card-4" style="width:50%">
        <li class="w3-display-container">Jill <span onclick="this.parentElement.style.display='none'" class="w3-button w3-transparent w3-medium w3-display-right">×</span></li>
        <li class="w3-display-container">Adam <span onclick="this.parentElement.style.display='none'" class="w3-button w3-transparent w3-medium w3-display-right">×</span></li>
        <li class="w3-display-container">Eve <span onclick="this.parentElement.style.display='none'" class="w3-button w3-transparent w3-medium w3-display-right">×</span></li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-display-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="this.parentElement.style.display='none'"</span>
<br>&nbsp; class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-display-right"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;times;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_close" target="_blank">Try It Yourself »</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Tip:</strong> The HTML &amp;times; entity is the preferred icon for close buttons
            (rather than the letter "X").</p>
    </div>
    <hr>

    <h2>List With Padding</h2>
    <p>The <strong>w3-padding</strong> classes can be used to add
        padding to list items:&nbsp;</p>

    <div class="w3-row">
        <div class="w3-half">
            <ul class="w3-ul w3-border" style="width:90%">
                <li class="w3-padding-small">Jill</li>
                <li class="w3-padding-small">Eve</li>
                <li class="w3-padding-small">Adam</li>
            </ul>
        </div>
        <div class="w3-half">
            <ul class="w3-ul w3-border" style="width:90%">
                <li class="w3-padding-large">Jill</li>
                <li class="w3-padding-large">Eve</li>
                <li class="w3-padding-large">Adam</li>
            </ul>
        </div>
    </div>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding-small"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding-small"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-padding-small"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_padding" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Avatar List</h2>
    <ul class="w3-ul w3-card-4">
        <li class="w3-bar">
            <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-left">×</span>
            <img src="images/img_avatar2.png" class="w3-bar-item w3-circle w3-hide-small w3-right" style="width:85px">
            <div class="w3-bar-item w3-right">
                <span class="w3-large">Mike</span><br>
                <span>Web Designer</span>
            </div>
        </li>

        <li class="w3-bar">
            <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-left">×</span>
            <img src="images/img_avatar5.png" class="w3-bar-item w3-circle w3-hide-small w3-right" style="width:85px">
            <div class="w3-bar-item w3-right">
                <span class="w3-large">Jill</span><br>
                <span>Support</span>
            </div>
        </li>

        <li class="w3-bar">
            <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-left">×</span>
            <img src="images/img_avatar6.png" class="w3-bar-item w3-circle w3-hide-small w3-right" style="width:85px">
            <div class="w3-bar-item w3-right">
                <span class="w3-large">Jane</span><br>
                <span>Accountant</span>
            </div>
        </li>
    </ul>
    <br>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> onclick<span class="attributevaluecolor" style="color:mediumblue">="this.parentElement.style.display='none'"</span>
  <br>&nbsp; class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-xlarge w3-right"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;times;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_avatar2.png"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-circle"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:85px"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Mike<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Web
            Designer<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_avatar" target="_blank">Try It Yourself »</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Tip:</strong> You will learn more about the w3-bar classes in our <a href="w3css_bars.asp">W3.CSS Bars</a> and <a href="w3css_navigation.asp">W3.CSS Navigation</a> chapters.</p>
    </div>

    <hr>

    <h2>List Width</h2>
    <p>Lists have a 100% width by default. Use the width property to change this.</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:30%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_width" target="_blank">Try It Yourself »</a>
    </div>

    <p>30% width:</p>
    <ul class="w3-ul w3-border" style="width:30%">
        <li>Jill</li>
        <li>Adam</li>
    </ul>

    <p>50% width:</p>
    <ul class="w3-ul w3-border" style="width:50%">
        <li>Jill</li>
        <li>Adam</li>
    </ul>

    <p>80% width:</p>
    <ul class="w3-ul w3-border" style="width:80%">
        <li>Jill</li>
        <li>Adam</li>
    </ul>
    <hr>

    <h2>Tiny List</h2>
    <p>Use the <strong>w3-tiny</strong> class to display a tiny list:&nbsp;</p>

    <ul class="w3-ul w3-tiny" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul w3-tiny"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_tiny" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Small List</h2>
    <p>Use the <strong>w3-small</strong> class to display a small list:&nbsp;&nbsp;</p>

    <ul class="w3-ul w3-small" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul w3-small"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_small" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Large List</h2>
    <p>Use the <strong>w3-large</strong> class to display a large list:&nbsp;</p>

    <ul class="w3-ul w3-large" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul w3-large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_large" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>XLarge List</h2>
    <p>Use the <strong>w3-xlarge</strong> class to display an extra large list:&nbsp;&nbsp;</p>

    <ul class="w3-ul w3-xlarge" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul w3-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_xlarge" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>XXLarge List</h2>
    <p>Use the <strong>w3-xxlarge</strong> class to display an XXLarge list:&nbsp;&nbsp;</p>

    <ul class="w3-ul w3-xxlarge" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul w3-xxlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_xxlarge" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>XXXLarge List</h2>
    <p>Use the <strong>w3-xxxlarge</strong> class to display an XXXLarge list:&nbsp;&nbsp;</p>

    <ul class="w3-ul w3-xxxlarge" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul w3-xxxlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_xxxlarge" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Jumbo List</h2>
    <p>Use the <strong>w3-jumbo</strong> class to display an enormous "jumbo"
        list:&nbsp;&nbsp;</p>

    <ul class="w3-ul w3-jumbo" style="width:50%">
        <li>Jill</li>
        <li>Eve</li>
        <li>Adam</li>
    </ul>
    <br>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>ul<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-ul w3-jumbo"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Eve<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>li<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Adam<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/li<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/ul<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_lists_jumbo" target="_blank">Try It Yourself »</a>
    </div>

    <br>
    <div class="w3-clear nextprev">
        <a href="images.php" class="w3-right next w3-btn w3-green w3-green">Images »</a>
        <a href="index.php" class="w3-left next w3-btn w3-green w3-green">« Home</a>
    </div>
</div>