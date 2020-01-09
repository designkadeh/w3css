<div>
    <div class="w3-container" id="home">
        <h1 class="w3-jumbo parentheses"><b>W3.CSS Tutorial</b></h1>
        <h1 class="w3-xxxlarge w3-text-purple"><b>Filters</b></h1>
        <hr class="w3-round">
        <div class="w3-container"><br/>
            <a href="code.php" class="w3-right next w3-btn w3-green">Code »</a>
            <a href="index.php" class="w3-left next w3-btn w3-green">« Home</a>
            <br/><br/><br/>
        </div>
    </div><hr/>
    <p class="intro">With a little bit of JavaScript, all components in W3.CSS can be filtered.</p>
    <hr>
    <h2>Filter Tables</h2>

    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-white w3-padding w3-padding-16">

            <input class="w3-input w3-border w3-padding" type="text" placeholder="Search for names.." id="myInput" onkeyup="myFunction2()">

            <table class="w3-table w3-striped w3-bordered w3-border w3-margin-top" id="myTable">
                <tbody><tr>
                    <th style="width:60%;">Name</th>
                    <th style="width:40%;">Country</th>
                </tr>
                <tr style="">
                    <td>Alfreds Futterkiste</td>
                    <td>Germany</td>
                </tr>
                <tr style="">
                    <td>Berglunds snabbkop</td>
                    <td>Sweden</td>
                </tr>
                <tr style="">
                    <td>Island Trading</td>
                    <td>UK</td>
                </tr>
                <tr style="">
                    <td>Koniglich Essen</td>
                    <td>Germany</td>
                </tr>
                <tr style="">
                    <td>Laughing Bacchus Winecellars</td>
                    <td>Canada</td>
                </tr>
                <tr style="">
                    <td>Magazzini Alimentari Riuniti</td>
                    <td>Italy</td>
                </tr>
                <tr style="">
                    <td>North/South</td>
                    <td>UK</td>
                </tr>
                <tr style="">
                    <td>Paris specialites</td>
                    <td>France</td>
                </tr>
                </tbody></table>

            <script>
                function myFunction2() {
                    var input, filter, table, tr, td, i;
                    input = document.getElementById('myInput');
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName('tr');
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName('td')[0];
                        if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = '';
                            } else {
                                tr[i].style.display = 'none';
                            }
                        }
                    }
                }
            </script>

        </div>
        <a class="w3-btn w3-green w3-margin-bottom w3-margin-top" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_filters_table" target="_blank">
            Try It Yourself »</a>
    </div>

    <hr>

    <h2>Filter Lists</h2>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-white w3-padding w3-padding-16">
            <input class="w3-input w3-border w3-padding" type="text" placeholder="Search for names.." id="myInput2" onkeyup="myFunction5()">
            <ul class="w3-ul w3-margin-top" id="myUL">
                <li style="display: none;">Adele</li>
                <li>Agnes</li>

                <li style="display: none;">Billy</li>
                <li style="display: none;">Bob</li>

                <li style="display: none;">Calvin</li>
                <li>Christina</li>
                <li style="display: none;">Cindy</li>
            </ul>

            <script>
                function myFunction5() {
                    var input, filter, ul, li, a, i;
                    input = document.getElementById('myInput2');
                    filter = input.value.toUpperCase();
                    ul = document.getElementById("myUL");
                    li = ul.getElementsByTagName('li');
                    for (i = 0; i < li.length; i++) {
                        if (li[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                            li[i].style.display = '';
                        } else {
                            li[i].style.display = 'none';
                        }
                    }
                }
            </script>
        </div>
        <a class="w3-btn w3-green w3-margin-bottom w3-margin-top" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_filters_list" target="_blank">
            Try It Yourself »</a>
    </div>
    <hr>

    <h2>Filter Dropdowns</h2>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-white w3-padding">
            <iframe src="parts/tryw3css_filter_dropdown_ifr.php" style="width:100%;border:none;height:418px;" __idm_frm__="1290"></iframe>
        </div>
        <a class="w3-btn w3-green tags w3-margin-bottom w3-margin-top" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_filters_dropdown_hover" target="_blank">
            Try It Yourself (Hover) »</a>
        <a class="w3-btn tags w3-green w3-margin-bottom w3-margin-top" href="https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_filters_dropdown" target="_blank">
            Try It Yourself (Click) »</a>
    </div>
    <br>

    <div class="w3-clear nextprev">
        <a href="code.php" class="w3-right next w3-btn w3-green">Code »</a>
        <a href="index.php" class="w3-left next w3-btn w3-green">« Home</a>
    </div>
</div>
