<div class="w3-row w3-white">
    <div>
        <div class="w3-container" id="home">
            <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
            <h1 class="w3-xxxlarge w3-text-purple"><b>Sidebar</b></h1>
            <hr class="w3-round">
            <div class="w3-container"><br/>
                <a href="tabs.php" class="w3-right next w3-btn w3-green">Tabs »</a>
                <a href="navigation.php" class="w3-left next w3-btn w3-green">« Navigation</a>
                <br/><br/><br/>
            </div>
        </div><hr/>
        <iframe src="parts/demo_ifr_sidebar.php" style="height:350px;width:100%;border:1px solid #ddd" __idm_frm__="109"></iframe>
        <hr>
        <h2>W3.CSS Vertical Navigation Bars</h2>
        <p>With side navigation, you have several options:</p>
        <ul>
            <li>Always display the navigation pane to the left of the page content</li>
            <li>Use a collapsible, "fully automatic" responsive side navigation</li>
            <li>Open navigation pane over the left part of the page content</li>
            <li>Open navigation pane over all of the page content</li>
            <li>Slide the page content to the right when opening the navigation pane</li>
            <li>Display the navigation pane on the right side instead of the left side</li>
        </ul>
        <hr>

        <h2>Always Display the Sidebar</h2>
        <div class="w3-example">
            <h3>Example</h3>

                <iframe src="parts/demo_ifr_sidebar_always.php" class="ifrtest" __idm_frm__="110"></iframe>

            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-bar-block"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:25%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> style<span class="attributevaluecolor" style="color:mediumblue">="margin-left:25%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>... page content ...<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar" target="_blank">Try It Yourself »</a>
        </div>

        <hr>
        <h2>Open the Sidebar Navigation Over a Part of the Content </h2>
        <div class="w3-example">
            <h3>Example</h3>
            <div>
                <iframe src="parts/demo_ifr_sidebar_part.php" class="ifrtest" __idm_frm__="111"></iframe>
            </div>
            <div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black">
<span class="jskeywordcolor" style="color:mediumblue">function</span> w3_open() {<br><span class="jsnumbercolor" style="color:red">
</span>&nbsp;&nbsp;document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"mySidebar"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> = <span class="jsstringcolor" style="color:brown">"block"</span>;<br>}<br><br>
<span class="jskeywordcolor" style="color:mediumblue">function</span> w3_close() {<br><span class="jsnumbercolor" style="color:red">
</span>  &nbsp; document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"mySidebar"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> = <span class="jsstringcolor" style="color:brown">"none"</span>;<br><span class="jsnumbercolor" style="color:red">
</span>}<span class="jsnumbercolor" style="color:red">
</span> </span></div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_over" target="_blank">Try It Yourself »</a>
        </div>
        <hr>

        <h2>Open the Sidebar Navigation Over the Content</h2>
        <div class="w3-example">
            <h3>Example</h3>
            <div>
                <iframe src="parts/demo_ifr_sidebar_all.php" class="ifrtest" __idm_frm__="112"></iframe>
            </div>
            <div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
</span>  <span class="jskeywordcolor" style="color:mediumblue">function</span> w3_open() {<br>&nbsp;&nbsp;document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"mySidebar"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">width</span> <span class="jsnumbercolor" style="color:red">
</span>  = <span class="jsstringcolor" style="color:brown">"100%"</span>;<br>&nbsp;&nbsp;document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"mySidebar"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> <span class="jsnumbercolor" style="color:red">
</span>  = <span class="jsstringcolor" style="color:brown">"block"</span>;<br>}<br><br><span class="jskeywordcolor" style="color:mediumblue">function</span> w3_close() {<br>&nbsp;&nbsp;document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"mySidebar"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> = <span class="jsstringcolor" style="color:brown">"none"</span>;<br>}<span class="jsnumbercolor" style="color:red">
</span> </span></div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_overall" target="_blank">Try It Yourself »</a>
        </div>
        <hr>

        <h2>Collapsible Responsive Side Navigation</h2>
        <div class="w3-example">
            <h3>Example</h3>
            <div>
                <iframe src="parts/demo_ifr_sidebar_collapse.php" class="ifrtestcoll" __idm_frm__="113"></iframe>
            </div>
            <div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar
  w3-bar-block w3-collapse w3-card"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:200px;"</span> id<span class="attributevaluecolor" style="color:mediumblue">="mySidebar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button w3-hide-large"</span><br>&nbsp;&nbsp;onclick<span class="attributevaluecolor" style="color:mediumblue">="w3_close()"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Close &amp;times;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red">
  href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red">
  href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red">
  href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-main"</span> style<span class="attributevaluecolor" style="color:mediumblue">="margin-left:200px"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-teal
  w3-xlarge"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="w3_open()"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;#9776;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My Page<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>script<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="jscolor" style="color:black"><br><span class="jskeywordcolor" style="color:mediumblue">function</span> w3_open() <span class="jsnumbercolor" style="color:red">
</span>{<br>&nbsp; document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"mySidebar"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> <span class="jsnumbercolor" style="color:red">
</span>= <span class="jsstringcolor" style="color:brown">"block"</span>;<br>}<br><br><span class="jskeywordcolor" style="color:mediumblue">function</span> w3_close() {<br>&nbsp;
document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"mySidebar"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> = <span class="jsstringcolor" style="color:brown">"none"</span>;<br><span class="jsnumbercolor" style="color:red">
</span>}<br></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/script<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_hide&amp;stacked=h" target="_blank">Try It Yourself »</a>
        </div>
        <hr>

        <h2>Slide the Page Content to the Right</h2>
        <div class="w3-example">
            <h3>Example</h3>
            <div>
                <iframe src="parts/demo_ifr_sidebar_shift.php" class="ifrtest" __idm_frm__="114"></iframe>
            </div>
            <div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
</span>  <span class="jskeywordcolor" style="color:mediumblue">function</span> w3_open() {<br>&nbsp; document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"main"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">marginLeft</span> <span class="jsnumbercolor" style="color:red">
</span>  = <span class="jsstringcolor" style="color:brown">"25%"</span>;<br>&nbsp; document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"mySidebar"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">width</span> <span class="jsnumbercolor" style="color:red">
</span>  = <span class="jsstringcolor" style="color:brown">"25%"</span>;<br>&nbsp; document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"mySidebar"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> <span class="jsnumbercolor" style="color:red">
</span>  = <span class="jsstringcolor" style="color:brown">"block"</span>;<br>&nbsp; document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"openNav"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> <span class="jsnumbercolor" style="color:red">
</span>  = <span class="jsstringcolor" style="color:brown">'none'</span>;<br>}<br><br><span class="jsnumbercolor" style="color:red">
</span>  <span class="jskeywordcolor" style="color:mediumblue">function</span> w3_close() {<br>&nbsp; document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"main"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">marginLeft</span> <span class="jsnumbercolor" style="color:red">
</span>  = <span class="jsstringcolor" style="color:brown">"0%"</span>;<br>&nbsp; document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"mySidebar"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> <span class="jsnumbercolor" style="color:red">
</span>  = <span class="jsstringcolor" style="color:brown">"none"</span>;<br>&nbsp; document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"openNav"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> <span class="jsnumbercolor" style="color:red">
</span>  = <span class="jsstringcolor" style="color:brown">"inline-block"</span>;<br>} </span></div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_shift" target="_blank">Try It Yourself »</a>
        </div>
        <hr>

        <h2>Right-sided Side Navigation</h2>
        <div class="w3-example">
            <h3>Example</h3>
            <div>
                <iframe src="parts/demo_ifr_sidebar_right.php" class="ifrtest" __idm_frm__="115"></iframe>
            </div>
            <div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar
   w3-bar-block"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:25%;<strong>right:0</strong>"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h5<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Menu<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h5<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
   w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
   class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
   class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> style<span class="attributevaluecolor" style="color:mediumblue">="margin-right:25%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>... page content ...<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_right" target="_blank">Try It Yourself »</a>
        </div>
        <hr>

        <h2>Right-sided Collapsible Navigation</h2>
        <div class="w3-example">
            <h3>Example</h3>
            <div>
                <iframe src="parts/demo_ifr_sidebar_right_collapse.php" class="ifrtest" __idm_frm__="116"></iframe>
            </div>
            <div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-bar-block w3-collapse"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:200px;right:0"</span>
id<span class="attributevaluecolor" style="color:mediumblue">="mySidebar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-hide-large"</span><br>&nbsp; onclick<span class="attributevaluecolor" style="color:mediumblue">="w3_close()"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Close
                &amp;times;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
                1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
                3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-main"</span> style<span class="attributevaluecolor" style="color:mediumblue">="margin-right:200px"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-teal w3-xlarge
  w3-right w3-hide-large"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="w3_open()"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;#9776;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My Page<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>script<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="jscolor" style="color:black"><br><span class="jskeywordcolor" style="color:mediumblue">function</span> w3_open() <span class="jsnumbercolor" style="color:red">
</span>{<br>&nbsp; document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"mySidebar"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> <span class="jsnumbercolor" style="color:red">
</span>= <span class="jsstringcolor" style="color:brown">"block"</span>;<br>}<br><br><span class="jskeywordcolor" style="color:mediumblue">function</span> w3_close() {<br>&nbsp;
document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"mySidebar"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> = <span class="jsstringcolor" style="color:brown">"none"</span>;<br><span class="jsnumbercolor" style="color:red">
</span>}<br></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/script<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_right_collapse&amp;stacked=h" target="_blank">Try It Yourself »</a>
        </div>
        <hr>

        <h2>Left &amp; Right Side Navigation</h2>
        <div class="w3-example">
            <h3>Example</h3>
            <div>
                <iframe src="parts/demo_ifr_sidebar_left_right.php" class="ifrtest" __idm_frm__="117"></iframe>
            </div>
            <a class="w3-btn w3-green w3-margin-bottom w3-margin-top" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_left_right&amp;stacked=h" target="_blank">Try It Yourself »</a>
        </div>
        <hr>

        <h2>Styling the Side Navigation</h2>
        <p>Add the <strong>w3-<em>color</em></strong> class to the w3-sidebar to change
            the background color. If you want an active/current link, to let the user know which
            page he/she is on, add the w3-<em>color</em> class to one of the links as well:</p>

        <div class="w3-row-padding" style="margin-left:-16px;margin-right:-16px;">
            <div class="w3-third">
                <div class="w3-bar-block w3-light-grey">
                    <a class="w3-bar-item w3-button w3-green" href="javascript:void(0)">Link 1</a>
                    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
                    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
                    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 4</a>
                </div>
                <br>

            </div>
            <div class="w3-third">
                <div class="w3-bar-block w3-blue">
                    <a class="w3-bar-item w3-button w3-green" href="javascript:void(0)">Link 1</a>
                    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
                    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
                    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 4</a>
                </div>
                <br>
            </div>

            <div class="w3-third">
                <div class="w3-bar-block w3-red">
                    <a class="w3-bar-item w3-button w3-green" href="javascript:void(0)">Link 1</a>
                    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
                    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
                    <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 4</a>
                </div>
                <br>
            </div>
        </div>
        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_color" target="_blank">Try It Yourself »</a>
        </div>
        <hr>

        <h2>Bordered Side Navigation</h2>
        <p>Use the <strong>w3-border</strong> class to add a border around the side navigation:</p>
        <div class="w3-bar-block w3-light-grey w3-border" style="width:30%">
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
        </div>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-border"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_border" target="_blank">Try It Yourself »</a>
        </div>

        <p>Add the <strong>w3-border-bottom</strong> class to the links to create link dividers:</p>
        <div class="w3-bar-block w3-light-grey w3-border" style="width:30%">
            <a class="w3-bar-item w3-button w3-border-bottom" href="javascript:void(0)">Link 1</a>
            <a class="w3-bar-item w3-button w3-border-bottom" href="javascript:void(0)">Link 2</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
        </div>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-bar-block"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-border-bottom"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-border-bottom"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_border2" target="_blank">Try It Yourself »</a>
        </div>

        <p>Use the <strong>w3-card</strong> class to display the side navigation as a card:</p>
        <div class="w3-bar-block w3-light-grey w3-card" style="position:relative !important;width:30%;z-index:0;margin-bottom:30px;">
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
        </div>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>nav<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-card"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_card" target="_blank">Try It Yourself »</a>
        </div>

        <hr>
        <h2>Hoverable Links</h2>
        <p>When you mouse over the links inside a bar block, the background color will change to grey.</p>
        <p>If you want a different background color on hover, use any of the <strong>w3-hover-color</strong> classes:</p>
        <div class="w3-bar-block w3-light-grey w3-border" style="width:30%">
            <a class="w3-bar-item w3-button w3-hover-black" href="javascript:void(0)">Link 1</a>
            <a class="w3-bar-item w3-button w3-hover-green" href="javascript:void(0)">Link 2</a>
            <a class="w3-bar-item w3-button w3-hover-blue" href="javascript:void(0)">Link 3</a>
            <a class="w3-bar-item w3-button w3-hover-red" href="javascript:void(0)">Link 4</a>
        </div>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-bar-block"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-hover-black"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-hover-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-hover-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_hover" target="_blank">Try It Yourself »</a>
        </div>

        <p>You can turn off the default hover effect with the <strong>w3-hover-none</strong> class. This is often used when you only want to highlight text color (and not background color) on hover:</p>
        <div class="w3-bar-block w3-black" style="position:relative !important;width:30%;z-index:0;">
            <a class="w3-bar-item w3-button w3-hover-none w3-hover-text-grey" href="javascript:void(0)">Link 1</a>
            <a class="w3-bar-item w3-button w3-hover-none w3-hover-text-green" href="javascript:void(0)">Link 2</a>
            <a class="w3-bar-item w3-button w3-hover-none w3-hover-text-teal" href="javascript:void(0)">Link 3</a>
            <a class="w3-bar-item w3-button w3-padding w3-hover-none w3-hover-text-orange" href="javascript:void(0)">Link 4</a>
        </div>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-bar-block"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-hover-none w3-hover-text-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
                1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-hover-none w3-hover-text-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
                2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-hover-none w3-hover-text-teal"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
                3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_hover_text" target="_blank">Try It Yourself »</a>
        </div>

        <hr>
        <h2>Side Navigation Sizes</h2>
        <p>Increased font-size (w3-large etc):</p>
        <div class="w3-bar-block test w3-green w3-xlarge" style="width:30%">
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 1</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 2</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Link 3</a>
        </div>
        <p>Increased padding (w3-padding etc):</p>
        <div class="w3-bar-block test w3-green" style="width:30%">
            <a class="w3-bar-item w3-button w3-padding-24" href="javascript:void(0)">Link 1</a>
            <a class="w3-bar-item w3-button w3-padding-24" href="javascript:void(0)">Link 2</a>
            <a class="w3-bar-item w3-button w3-padding-24" href="javascript:void(0)">Link 3</a>
        </div>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-bar-block w3-large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_size" target="_blank">Try It Yourself »</a>
        </div>

        <hr>
        <h2>Side Navigation with Icons</h2>
        <div class="w3-bar-block w3-black w3-xxlarge" style="float:left;margin-right:15px;width:68px">
            <a class="w3-bar-item w3-button" href="javascript:void(0)"><i class="fa fa-home"></i></a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)"><i class="fa fa-search"></i></a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)"><i class="fa fa-envelope"></i></a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)"><i class="fa fa-globe"></i></a>
        </div>
        <div class="w3-bar-block w3-light-grey w3-xxlarge" style="float:left;margin-right:15px;width:68px">
            <a class="w3-bar-item w3-button" href="javascript:void(0)"><i class="fa fa-home"></i></a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)"><i class="fa fa-search"></i></a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)"><i class="fa fa-envelope"></i></a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)"><i class="fa fa-globe"></i></a>
        </div>
        <div class="w3-bar-block w3-green w3-xxlarge" style="float:left;margin-right:15px;width:68px">
            <a class="w3-bar-item w3-button" href="javascript:void(0)"><i class="fa fa-home"></i></a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)"><i class="fa fa-search"></i></a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)"><i class="fa fa-envelope"></i></a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)"><i class="fa fa-globe"></i></a>
        </div>
        <div style="clear:both;"></div>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-bar-block w3-black"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:70px"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>i<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="fa fa-home"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/i<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>i<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="fa
fa-search"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/i<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>i<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="fa fa-envelope"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/i<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>i<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="fa fa-globe"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/i<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_icons" target="_blank">Try It Yourself »</a>
        </div>

        <hr>
        <h2>Sidebar with Dropdown</h2>
        <iframe src="parts/demo_ifr_sidebar_dropdown.php" style="height:320px;width:100%;border:none;" class="w3-border" __idm_frm__="118"></iframe>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-bar-block"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>
                &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-hover"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Dropdown
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>i<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="fa fa-caret-down"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/i<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-content w3-bar-block"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
                3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_dropdown" target="_blank">Try It Yourself »</a>
        </div>
        <p><strong>Tip:</strong> When the dropdown menu is "open", the dropdown link gets a grey background color to indicate that it is active. To override this, add a
            <strong>w3-hover-color </strong>class to both the "dropdown"
            &lt;div&gt; and &lt;a&gt;.</p>
        <hr>

        <h2>Sidebar with Accordion</h2>

        <iframe src="parts/demo_ifr_sidebar_accordion.php" style="border:1px solid #ccc;width:100%;height:350px" __idm_frm__="119"></iframe>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-light-grey w3-card"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:200px"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-block w3-left-align"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="myAccFunc()"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Accordion<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
id<span class="attributevaluecolor" style="color:mediumblue">="demoAcc"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-block w3-hide w3-white w3-card-4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-click"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="myDropFunc()"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Dropdown<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
id<span class="attributevaluecolor" style="color:mediumblue">="demoDrop"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-dropdown-content w3-bar-block w3-white w3-card-4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item
  w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
                3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <p>
                <a class="w3-btn w3-green" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_accordion" target="_blank">Try it Yourself »</a>
            </p>
        </div>
        <hr>

        <h2>Animated Sidebar</h2>
        <p>Use any of the <strong>w3-animate-<em>classes</em></strong> to fade, zoom or slide in side navigation:</p>
        <iframe src="parts/demo_ifr_sidebar_animate.php" style="height:250px;width:100%;border:1px solid #ddd" __idm_frm__="120"></iframe>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-animate-left"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_animate" target="_blank">Try It Yourself »</a>
        </div>
        <hr>

        <h2>Sidebar Overlay</h2>
        <p>The <strong>w3-overlay</strong> class can be used to create an overlay effect when opening the sidebar. The w3-overlay class adds a black background with a
            50% opacity to the "page content" - this effect will "highlight" the side navigation.</p>
        <iframe src="parts/demo_ifr_sidebar_overlay.php" style="height:350px;width:100%;border:1px solid #ddd" __idm_frm__="121"></iframe>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="commentcolor" style="color:green">&lt;!-- Sidebar --&gt;</span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-bar-block w3-white w3-animate-left"</span> style<span class="attributevaluecolor" style="color:mediumblue">="display:none;z-index:4"</span> id<span class="attributevaluecolor" style="color:mediumblue">="mySidebar"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red">
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span>
onclick<span class="attributevaluecolor" style="color:mediumblue">="w3_close()"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Close<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link
                1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Link 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="commentcolor" style="color:green">&lt;!-- Overlay --&gt;</span><br>
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-overlay"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="w3_close()"</span> style<span class="attributevaluecolor" style="color:mediumblue">="cursor:pointer"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                <br><span class="commentcolor" style="color:green">&lt;!-- Page content --&gt;</span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>button<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-xxlarge"</span>
  onclick<span class="attributevaluecolor" style="color:mediumblue">="w3_open()"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>&amp;#9776;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/button<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Sidebar Overlay<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Click on the "hamburger" icon to slide
                in the side navigation.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="commentcolor" style="color:green">&lt;!-- JS to
open and close sidebar with overlay effect --&gt;</span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>script<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="jscolor" style="color:black"><br><span class="jskeywordcolor" style="color:mediumblue">function</span>
w3_open() {<br>&nbsp; document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"mySidebar"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> <span class="jsnumbercolor" style="color:red">
</span>= <span class="jsstringcolor" style="color:brown">"block"</span>;<br>&nbsp; document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"myOverlay"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> <span class="jsnumbercolor" style="color:red">
</span>= <span class="jsstringcolor" style="color:brown">"block"</span>;<br>}<br><br><span class="jskeywordcolor" style="color:mediumblue">function</span> w3_close() {<br>&nbsp;
document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"mySidebar"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> = <span class="jsstringcolor" style="color:brown">"none"</span>;<br>&nbsp;
document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"myOverlay"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> = <span class="jsstringcolor" style="color:brown">"none"</span>;<br><span class="jsnumbercolor" style="color:red">
</span>}<br></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/script<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_overlay" target="_blank">Try It Yourself »</a>
        </div>
        <hr>

        <h2>Sidebar Content</h2>
        <p>Add whatever you like inside the side navigation:</p>
        <iframe src="parts/demo_ifr_sidebar_content.php" style="height:650px;width:100%;border:1px solid #ddd" __idm_frm__="122"></iframe>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-sidebar w3-bar-block w3-light-grey"</span> style<span class="attributevaluecolor" style="color:mediumblue">="width:50%"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-container w3-dark-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h4<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Menu<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h4<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_snowtops.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Home<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Projects <br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red">
class<span class="attributevaluecolor" style="color:mediumblue">="w3-tag w3-red w3-round w3-right"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>8<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span> class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>About<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="#"</span>
  class<span class="attributevaluecolor" style="color:mediumblue">="w3-bar-item w3-button"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Contact<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-panel w3-blue-grey
  w3-display-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>span<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-button w3-display-topright"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>X<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/span<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Lorem
                ipsum box...<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
            <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_sidebar_content" target="_blank">Try It Yourself »</a>
        </div>

        <br>
        <div class="w3-clear nextprev">
            <a href="tabs.php" class="w3-right next w3-btn w3-green">Tabs »</a>
            <a href="navigation.php" class="w3-left next w3-btn w3-green">« Navigation</a>
        </div>
    </div>

</div>