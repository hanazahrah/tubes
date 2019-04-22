<?php
?><!DOCTYPE html>
<html>
	<head>
		
	</head>

	<body>
      <div class='main_container'>
        <div class='main_content'>
          <div class="main_contentfloat">
            <div id="leadercol">
                  <div id="review_list_error_message" 
                        class="review_list_error_message" style="display: none;">
                  </div>
                  <div id="header" style="float: left">
                        <h1>
                              <a href="">My Books</a>
                        </h1>
                  </div>
                  <div id="controls" class="uitext right">
                        <span class="controlGroup uitext">
                        <span class="bookMeta">
                        <div class="myBooksSearch">
                              <form id="myBooksSearchForm" class="inlineblock" 
                                    action="" 
                                    accept-charset="UTF-8" method="get">
                                    <input name="utf8" type="hidden" value="✓">
                                    <input id="sitesearch_field" size="22" class="smallText" placeholder="Search and add books" type="text" name="search[query]">
                              </form>
                              <a class="myBooksSearchButton" href="" onclick="$j('#myBooksSearchForm').submit(); return false;">
                                    <img title="my books search" alt="search" src="https://s.gr-assets.com/assets/layout/magnifying_glass-a2d7514d50bcee1a0061f1ece7821750.png">
                              </a>
                        </div>
                        <div class="myBooksNav">
                              <ul>
                                    <li>
                                    <a id="batchEditLink" class="actionLinkLite controlLink" href="" onclick="toggleControl(this, {afterOpen: startEditing, afterClose: stopEditing});; return false;">Batch Edit</a>
                                    </li>
                                    <li>
                                    <a id="shelfSettingsLink" class="actionLinkLite controlLink" href="" onclick="toggleControl(this); return false;">Settings</a>
                                    </li>
                                    <li>
                                    <a class="actionLinkLite controlLink" href="">Stats</a>
                                    </li>
                                    <li>
                                    <a class="actionLinkLite controlLink" target="_blank" rel="noopener noreferrer" href="">Print</a>
                                    </li>
                                    <li>
                                    <span class="greyText">&nbsp;|&nbsp;</span>
                                    </li>
                              </ul>
                        </div>
                        </span>
                        </span>
                  </div>
                  <div 
                        class="clear">
                  </div>
            </div>
            <div class="main_container">
                  <div id='left_container' class="container">
                        <div id="side">
                              <div id="shelvesSection">
                                    <div class="sectionHeader">
                                          Bookshelves <a class="smallText" href="">(Edit)</a>
                                    </div>
                                    <a class="selectedShelf" href="">All (1)</a>
                                    <div id="paginatedShelfList" class="stacked">
                                          <div class="userShelf">
                                                <a title="Rahmat's Read shelf" class="actionLinkLite" href="">Read  ‎(0)</a>
                                          </div>
                                          <div class="userShelf">
                                                <a title="Rahmat's Currently Reading shelf" class="actionLinkLite" href="">Currently Reading  ‎(0)</a>
                                          </div>
                                          <div class="userShelf">
                                                <a title="Rahmat's Want to Read shelf" class="actionLinkLite" href="">Want to Read  ‎(1)</a>
                                          </div>
                                          <div class="horizontalGreyDivider"></div>
                                          <div class="userShelf">
                                                <a title="Rahmat's 123 shelf" class="actionLinkLite" href="">123  ‎(0)</a>
                                          </div>
                                    </div>
                                    <div class="stacked">
                                    </div>
                              </div><br>
                              <div id="toolsSection" class="actionLinkLites">
                                    <div class="sectionHeader">
                                          Your reading activity
                                    </div>
                                    <a class="annotatedBooksPageLink" href="">Kindle Notes &amp; Highlights</a>
                                    <br>
                                    <a href="">Reading Challenge</a>
                                    <br>
                                    <a href="">Year in Books</a>
                                    <br>
                                    <a rel="nofollow" href="">Reading stats</a>
                              </div><br>
                              <div id="toolsSection" class="actionLinkLites">
                                    <div class="sectionHeader">
                                          Add books
                                    </div>
                                    <a href="">Recommendations</a>
                                    <br>
                                    <a href="">Explore</a>
                              </div><br>
                              <div id="toolsSection" class="actionLinkLites">
                                    <div class="sectionHeader">
                                          Tools
                                    </div>
                                    <a href="">Owned books</a>
                                    <br>
                                    <a href="">Find duplicates</a>
                                    <br>
                                    <a rel="nofollow" href="">Widgets</a>
                                    <br>
                                    <a href="">Import and export</a>
                              </div>
                        </div>

                  </div>
                  <div id='right_container' class="container">
                        <div class="value">        
                              <div class="js-dataTooltip" data-use-wtr-tooltip="true">
                                    <div class="js-tooltipTrigger tooltipTrigger" data-resource-type="Book" data-resource-id="2767052">
                                          <a href="/book/show/2767052-the-hunger-games">
                                                <img alt="The Hunger Games (The Hunger Games, #1)" 
                                                id="cover_review_2761452938" 
                                                src="https://images.gr-assets.com/books/1447303603m/2767052.jpg">
                                          </a>
          
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
                   
	</body>
      <style>
            .mainc_ontainer{
                  width: 100%;
                  text-align: center;
                  padding-bottom: 25px;
            }
            div{
                  display:block;
            }
            .main_tcontent{
                  margin: 0px auto;
                  text-align: left;
                  width: 970px;
                  background: #FFFFFF;
            }
            .maint_contentfloat{
                  float: left;
                  width: 960px;
                  margin-top: 15px;
                  margin-left: 5px;
                  font-size: 12px;
                  min-height: 400px;
                  background: #FFFFFF;
            }
            #leadercol{
                  width: 960px;
                  border-bottom: 1px solid #EBE8D5;
                  color: #BBB596;
                  margin-bottom: 10px;
                  padding-bottom: 5px;
                  display: block;
                  list-style-type: disc;
                  margin-block-start: 1em;
                  margin-block-end: 1em;
                  margin-inline-start: 0px;
                  margin-inline-end: 0px;
                  padding-inline-start: 40px;
            }
            #leadercol h1 {
                  padding: 0;
                  margin: 0;
                  line-height: 1.3;
                  background-color: transparent;
            }

            element.style {
                  float: left;
            }
            div{
                  display:block;
            }
            a {
                  color: #00635d;
                  text-decoration: none;
            }
            br.clear, div.clear {
                  clear: both;
                  display: block;
                  height: 0;
                  margin: 0;
                  font-size: 1px;
                  line-height: 0;
            }
            #controls{
                  padding-bottom: 2px;
                  display: block;
                  list-style-type: disc;
                  margin-block-start: 1em;
                  margin-block-end: 1em;
                  margin-inline-start: 0px;
                  margin-inline-end: 0px;
                  padding-inline-start: 40px;
            }
            .controlGroup {
                  margin-left: 10px;
            }
            .myBooksSearch {
                  float: left;
                  margin-right: -30px;
            }
            #controls form {
                  display: inline;
            }
            .inlineblock {
                  display: inline-block;
                  zoom: 1;
                  *display: inline;
            }
            form {
                  display: block;
                  margin-top: 0em;
                  margin-bottom: 0;
            }
            .myBooksSearch input {
                  background-color: white;
                  border: 1px solid #e3dfc9;
                  border-radius: 5px;
                  font-size: 12px;
                  padding: 4px 30px 4px 5px;
                  width: 155px;
            }
            #sitesearch_field {
                  resize: none;
            }
            .myBooksSearch .myBooksSearchButton {
                  background-color: transparent;
                  border: none;
                  position: relative;
                  right: 30px;
            }
            
            .controlGroup a {
                  outline: none;
                  padding: 5px;
                  border: 1px solid transparent;
            }
            .myBooksNav {
                  bottom: 4px;
                  float: right;
                  position: relative;
            }
            .myBooksNav ul li {
                  display: inline;
                  height: 18px;
                  max-width: 180px;
                  text-align: right;
            }
            ul, menu, dir  {
                  display: block;
                  list-style-type: disc;
                  margin-block-start: 1em;
                  margin-block-end: 1em;
                  margin-inline-start: 0px;
                  margin-inline-end: 0px;
                  padding-inline-start: 40px;
            }
            .uitext, .uitext th, .uitext td, 
            .uitext ul, .uitext ol, .uitext li {
                  font-family: "Lato", "Helvetica Neue", "Helvetica", sans-serif;
            }
            .right {
                  float: right;
            }
            .main_container{
                  font-size: 14px;
            }
            #left_container{
                  width: 200px;
            }
            .container{
                  float: left;
                  margin-right: 10px;
            }
            #side{
                  padding-right: 10px;
                  margin-right: 10px;
            }
            #shelvesSection .sectionHeader, #toolsSection .sectionHeader {
                  font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
                  font-size: 14px;
                  font-weight: bold;
            }
            .stacked {
                  margin-bottom: 10px;
            }
            #toolsSection {
                  margin: 10px 0 15px;
            }
            #userShelf, #toolsSection {
                  line-height: 21px;
            }
            #right_container {
            width: 750px;
            }
      </style>

</html>
