<div>

    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Tables</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="lists.php" class="w3-right next w3-btn w3-green w3-green">Lists »</a>
            <a href="alerts.php" class="w3-left next w3-btn w3-green w3-green">« Alerts</a>
            <br/><br/><br/>
        </div>
    </div><hr/>

    <table class="w3-table w3-bordered w3-striped w3-border test w3-hoverable">
        <tbody><tr class="w3-green">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        </tbody><tbody>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
        <tr>
            <td>Bo</td>
            <td>Nilsson</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Mike</td>
            <td>Ross</td>
            <td>35</td>
        </tr>
        </tbody>
    </table>
    <hr>

    <h2>W3.CSS Table Classes</h2>
    <p>W3.CSS provides the following classes for tables:</p>
    <table class="w3-table-all">
        <tbody><tr>
            <th>Class</th>
            <th>Defines</th>
        </tr>
        <tr>
            <td>w3-table</td>
            <td>Container for an HTML table</td>
        </tr>
        <tr>
            <td>w3-striped</td>
            <td>Striped table</td>
        </tr>
        <tr>
            <td>w3-border</td>
            <td>Bordered table</td>
        </tr>
        <tr>
            <td>w3-bordered</td>
            <td>Bordered lines</td>
        </tr>
        <tr>
            <td>w3-centered</td>
            <td>Centered table content</td>
        </tr>
        <tr>
            <td>w3-hoverable</td>
            <td>Hoverable table</td>
        </tr>
        <tr>
            <td>w3-table-all</td>
            <td>All properties set</td>
        </tr>
        </tbody></table>
    <hr>

    <h2>Basic Table</h2>
    <p>The <strong>w3-table</strong> class is used to display a basic table:</p>
    <table class="w3-table">
        <tbody><tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>tr<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>th<span class="tagcolor" style="color:mediumblue">&gt;</span></span>First Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/th<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>th<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/th<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>th<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Points<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/th<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/tr<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>tr<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>td<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Jill<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/td<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>td<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Smith<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/td<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>td<span class="tagcolor" style="color:mediumblue">&gt;</span></span>50<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/td<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/tr<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/table<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables" target="_blank">Try It Yourself »</a>
    </div>
    <hr>
    <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
        <!-- MidContent -->

        <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
        <div id="snhb-mid_content-0" data-google-query-id="CKHC54CGhuMCFVQq4Aodiq8C7g"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_0" title="3rd party ad content" name="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_0" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="f" data-load-complete="true"></iframe></div></div>

    </div>
    <hr>
    <h2>Striped Table</h2>
    <p>The <strong>w3-striped</strong> class is used to add zebra-stripes to a table:</p>
    <table class="w3-table w3-striped">
        <tbody><tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
        </tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table w3-striped"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_striped" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Bordered Table</h2>
    <p>The <strong>w3-bordered</strong> class adds a bottom border to each table row:</p>
    <table class="w3-table w3-bordered">
        <tbody>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
        </tbody>
    </table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table w3-bordered"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_bordered" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Striped Bordered Table</h2>
    <p>Combine the <strong>w3-striped</strong> class and the <strong>w3-bordered</strong> class to create a striped bordered table:</p>
    <table class="w3-table w3-bordered w3-striped">
        <tbody>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
        </tbody>
    </table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table w3-striped w3-bordered"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_bordered_striped" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Border Around a Table</h2>
    <p>The <strong>w3-border</strong> class is used to display a border around a table:</p>
    <table class="w3-table w3-striped w3-border">
        <tbody>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
        </tbody>
    </table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table w3-striped w3-border"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_border" target="_blank">Try It Yourself »</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Tip:</strong> The <strong>w3-border</strong> class is not only for tables. It can be used on any HTML element!</p>
    </div>
    <hr>

    <h2>Displaying it All</h2>
    <p>The <strong>w3-table-all</strong> class combines all of the classes
        above:</p>
    <table class="w3-table-all">
        <tbody>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>

        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
        </tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table-all"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_all" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Flipping the Stripes</h2>
    <p>To flip the stripes (start with the light-grey color), add a &lt;thead&gt; element around the table header row.
        You must also define a color to be used for the table header row:</p>
    <table class="w3-table-all">
        <thead>
        <tr class="w3-light-grey">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        </thead>
        <tbody><tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
        <tr>
            <td>Bo</td>
            <td>Nilson</td>
            <td>35</td>
        </tr>
        </tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>thead<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>tr<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-light-grey"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>th<span class="tagcolor" style="color:mediumblue">&gt;</span></span>First Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/th<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>th<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/th<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>th<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Points<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/th<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/tr<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/thead<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_flipped" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Centering all Content</h2>
    <p>The <strong>w3-centered</strong> class centers the content of the table:</p>
    <table class="w3-table-all w3-centered">
        <tbody><tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table-all w3-centered"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_centered" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Centering one Column</h2>
    <p>The <strong>w3-center</strong> class centers the content of a column:</p>
    <table class="w3-table-all">
        <tbody><tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th class="w3-center">Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td class="w3-center">50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td class="w3-center">94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td class="w3-center">67</td>
        </tr></tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table-all"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>tr<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>th<span class="tagcolor" style="color:mediumblue">&gt;</span></span>First
            Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/th<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>th<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/th<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>th<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-center"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Points<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/th<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/tr<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_center" target="_blank">Try It Yourself »</a>
    </div>
    <hr>
    <h2>Right Align one Column</h2>
    <p>The <strong>w3-right-align</strong> class right aligns the content of a
        column:</p>
    <table class="w3-table-all">
        <tbody><tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th class="w3-right-align">Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td class="w3-right-align">50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td class="w3-right-align">94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td class="w3-right-align">67</td>
        </tr></tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table-all"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>tr<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>th<span class="tagcolor" style="color:mediumblue">&gt;</span></span>First Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/th<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>th<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/th<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>th<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-right-align"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Points<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/th<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/tr<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_right" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Hoverable Table</h2>
    <p>The <strong>w3-hoverable</strong> class adds a grey background color on
        mouse-over:</p>
    <table class="w3-table w3-bordered w3-striped w3-border w3-hoverable">
        <thead>
        <tr class="w3-light-grey">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        </thead>
        <tbody><tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
        </tbody></table>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table-all
 w3-hoverable"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_hoverable" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Hover Colors</h2>
    <p>If you want a specific hover color, add any of the <strong>w3-hover-<em>color</em></strong> classes
        to each &lt;tr&gt; element:</p>
    <table class="w3-table w3-bordered w3-striped w3-border w3-hoverable">
        <thead>
        <tr class="w3-light-grey w3-hover-red">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        </thead>
        <tbody><tr class="w3-hover-green">
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr class="w3-hover-blue">
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr class="w3-hover-black">
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
        </tbody></table>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>tr<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-hover-green"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_hoverable2" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Combining W3.CSS Classes</h2>
    <p>Many W3.CSS classes can be used on all HTML elements.</p>
    <p>For example: border classes, color classes, font classes, card classes, and
        more.</p>

    <hr>
    <h2>&nbsp;Colored Table Header</h2>
    <p>Use any of the <strong>w3-<em>color</em></strong> classes to display a colored row:</p>
    <table class="w3-table w3-striped w3-border">
        <thead>
        <tr class="w3-red">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        </thead>

        <tbody><tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>tr<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-red"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>th<span class="tagcolor" style="color:mediumblue">&gt;</span></span>First Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/th<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>th<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last
            Name<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/th<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp;&nbsp;<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>th<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Points<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/th<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/tr<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_colored_heading" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Colored Table</h2>
    <p>Use any of the <strong>w3-<em>color</em></strong> classes to display a colored table:</p>
    <table class="w3-table w3-blue">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        </thead>

        <tbody><tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table w3-blue"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> <br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_color" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Responsive Table</h2>
    <p>The <strong>w3-responsive</strong> class creates a responsive table. The
        table will then scroll horizontally on small screens. When viewing on large
        screens, there is no difference.</p>
    <p>Resize the screen to see the effect on the table below:</p>

    <div class="w3-responsive">
        <table class="w3-table w3-striped w3-bordered xw3-large"><tbody><tr>
                <th>First&nbsp;Name</th>
                <th>Last&nbsp;Name</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
                <th>Points</th>
            </tr>

            <tr>
                <td>Jill</td>
                <td>Smith</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
                <td>5000</td>
            </tr>
            <tr>
                <td>Eve</td>
                <td>Jackson</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
                <td>9400</td>
            </tr>
            <tr>
                <td>Adam</td>
                <td>Johnson</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
                <td>6700</td>
            </tr></tbody></table>
    </div>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-responsive"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table-all"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            &nbsp;&nbsp;&nbsp;
            ... table content ...<br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/table<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_responsive" target="_blank">Try It Yourself »</a>
    </div>

    <hr>
    <h2>Table as a Card</h2>
    <p>Use a <strong>w3-card</strong> class to display a table as a card:</p>
    <table class="w3-table-all w3-card-4">
        <tbody><tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table-all w3-card-4"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_card" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Tiny Table</h2>
    <p>Use the <strong>w3-tiny</strong> class to display a tiny table:</p>
    <table class="w3-table-all w3-tiny"><tbody><tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
        </tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table-all w3-tiny"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_tiny" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Small Table</h2>
    <p>Use the <strong>w3-small</strong> class to display a small table:</p>
    <table class="w3-table-all w3-small"><tbody><tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr>
        </tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table-all w3-small"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_small" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Large Table</h2>
    <p>Use the <strong>w3-large</strong> class to display a large table:</p>
    <table class="w3-table-all w3-large">
        <tbody><tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table-all w3-large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_large" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>XLarge Table</h2>
    <p>Use the <strong>w3-xlarge</strong> class to display an xlarge table:</p>
    <table class="w3-table-all w3-xlarge">
        <tbody><tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table-all w3-xlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_xlarge" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>XXLarge Table</h2>
    <p>Use the <strong>w3-xxlarge</strong> class to display an xxlarge table:</p>
    <table class="w3-table-all w3-xxlarge">
        <tbody>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table-all w3-xxlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_xxlarge" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>XXXLarge Table</h2>
    <p>Use the <strong>w3-xxxlarge</strong> class to display an xxxlarge table:</p>
    <table class="w3-table-all w3-xxxlarge">
        <tbody>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
        </tr></tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table-all w3-xxxlarge"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_xxxlarge" target="_blank">Try It Yourself »</a>
    </div>
    <hr>

    <h2>Jumbo Table</h2>
    <p>Use the <strong>w3-jumbo</strong> class to display a jumbo large table:</p>
    <table class="w3-table-all w3-jumbo">
        <tbody>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
        </tr>
        <tr>
            <td>Adam</td>
            <td>Johnson</td>
        </tr></tbody></table>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate htmlHigh">
            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>table<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="w3-table-all w3-jumbo"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_jumbo" target="_blank">Try It Yourself »</a>
    </div>

    <br>
    <div class="w3-clear nextprev">
        <a href="lists.php" class="w3-right next w3-btn w3-green w3-green">Lists »</a>
        <a href="alerts.php" class="w3-left next w3-btn w3-green w3-green">« Alerts</a>
    </div>
</div>