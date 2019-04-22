<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
<div class="container"  style="background-color: rgba(244,241,234,0.5)">
  <div class="row">
    <div class="col-sm-3">
      <div class="homeLeftColumn ">
      <section class="gr-homePageRailContainer u-paddingBottomMedium">
        <div>
          <section class="currentlyReadingShelf">
            <h3 class="gr-h3 grh3--noTopMargin">Currently Reading</h3>
            <div class="gr-mediaFlexbox gr-mediaFlexbox--alignItemsCenter">
              <img class="gr-mediaFlexbox_media" src="<?php echo base_url('assets/home/books2.png')?>" border="0">
              <div class="gr-mediaFlexbox_desc">What are you reading?</div>
            </div>
          </section>
          <footer>
            <div class="u-marginTopXsmall">
              <div accept-charset="UTF-8" class="searchBox searchBox--navbar">
                <form autocomplete="off" action="/search" class="searchBox_form" role="search" aria-label="Search for books to add to your shelves">
                    <input class="searchBox_input searchBox_input--navbar" autocomplete="off" name="q" type="text" placeholder="Search books" aria-label="Search books" aria-controls="searchResults">
                    <button type="submit" class="searchBox_icon--magnifyingGlass gr-iconButton searchBox_icon searchBox_icon--navbar" aria-label="Search"></button>
                </form>
              </div>
            </div>
            <div class="currentlyReadingShelf_discoveryLinks">
              <span>Recommendations · General update</span>
            </div>
          </footer>
        </div>  
      </section>
      <section class="gr-homePageRailContainer u-paddingBottomMedium showForLargeWidth">
        <div class="readingChallenge">
          <h3 class="gr-h3 grh3--noTopMargin">2019 Reading Challenge</h3>
          <div class="readingChallenge_edit">
            <div class="u-marginBottomSmall">Challenge yourself to read more this year!</div>
            <div class="gr-mediaBox">
              <div class="gr-mediaBox_media u-marginRightMedium">
                <img class="gr-mediaFlexbox_media" src="<?php echo base_url('assets/home/readingChallenge.png')?>">
              </div>
              <div class="gr-mediaBox_desc">
                <div class="u=marginBottomXSmall">I want to read</div>
                <input type="number" autocomplete="off" placeholder="12" class="u-marginBottomXSmall" aria-label="Number of books you want to read in 2019">
                <div class="u-marginBottomXSmall">
                  <span>books in 2019</span>
                  <button class="gr-button" aria-label="Start your 2019 reading challenge">Start Challenge</button>
                </div>
              </div>
              <small class="u-displayBloack u-marginTopTiny">You can change your goal at any time</small>
            </div>
          </div>
        </div>
      </section>
      <section class="gr-homePageRailContainer u-paddingBottomMedium showForLargeWidth">
        <h3 class="gr-h3 grh3--noTopMargin">Want to Read</h3>
        <div class="shelfDisplay">
          <div class="gr-mediaFlexbox gr-mediaFlexbox--alignItemsCenter">
            <img class="gr-mediaFlexbox_media" src="<?php echo base_url('assets/home/booksread.png')?>">
            <div class="gr-mediaFlexbox_desc">What do you want to read next?</div>
          </div>          
          <div class="u-marginTopMedium">
              <a href="#">Recommendations</a>
          </div>
        </div>
      </section>
      <section class="showForLargeWidth">
        <h3 class="gr-h3 grh3--noTopMargin">Bookshelves<h3>
        <div data-react-class="ReactCOmponents.UserShelvesBookCounts">
          <div class="userShelvesBookCounts">
            <div class="userShelvesBookCounts_counts">
              <a class="u-displayBlock" aria-label="Want to Read shelf.0 books." href="#">0</a>
              <a class="u-displayBlock" aria-label="Curently Reading shelf.0 books." href="#">0</a>
              <a class="u-displayBlock" aria-label="Read shelf.0 books." href="#">0</a>
              <a class="u-displayBlock" aria-label="try shelf.0 books." href="#">0</a>
            </div>
            <div>
              <a class="userShelvesBookCounts_nameLink" href="#" aria-label="Want to Read shelf.0 books.">Want to Read</a>
              <a class="userShelvesBookCounts_nameLink" href="#" aria-label="Currently Reading shelf.0 books.">Currently Reading</a>
              <a class="userShelvesBookCounts_nameLink" href="#" aria-label="Read.0 books.">Read</a>
              <a class="userShelvesBookCounts_nameLink" href="#" aria-label="try shelf.0 books.">try</a>
            </div>
            <div class="userShelvesBookConts_buffer"></div>
          </div>
        </div>
      </section>
      <hr class="hidden-sm hidden-md hidden-lg"> 
      </div>
    </div>
    <div class="col-sm-6" style="margin-top: 12px;">
      <div class="gr-newsfeed u-defaultType">
        <h3 class="gr-h3 gr-newsfeed_title">Updates</h3>
        <div class="u-positionRelative">
          <button class="gr-iconButton u-floatRight" aria-label="Customize updates feed preferences" aria-haspopup="true" aria-expanded="false" aria-controls="grNewsfeedPreferences">
            <span class="gr-iconButton_innerWrapper">
              <img class="gr-settingsIcon" src="<?php echo base_url('assets/home/settings.png')?>">
              <span class="gr-iconButton_textLabel">Customized</span>
            </span>
          </button>
        </div>
        <div class="u-clearBoth">
          <div class="gr-newsfeed_loadMore">
            <span>No More Updates</span>
          </div>
        </div>
      </div>  
    </div>
    <div class="col-sm-3">
      <section class="gr-homePageRailContainer u-paddingBottomMedium">
        <section class="gr-editorialBlogPost">
          <article>
            <h3 class="gr-h3">News & Interviews</h3>
            <a>The Best Young Adult Books of April</a>
            <img src="<?php echo base_url('assets/home/newsbooks.png')?>">
            <div class="gr-editorialBlogPost_likesAndComments">
              <span class="gr-metaText">17 likes · 3 comments</span>
            </div>
          </article>
        </section>
      </section>
      <section class="gr-homePageRailContainer u-paddingBottomMedium">
        <h3 class="gr-h3" style="margin-top: 0;">Recommendations</h3>
        <img src="<?php echo base_url('assets/home/recommendation.png')?>">
      </section>
      <section class="gr-homePageRailContainer u-paddingBottomMedium">
        <h3 class="gr-h3">Improve Recommendations</h3>
        <div class="u-marginBottomXSmall">
          <span>Rating at least 20 books improves your recommendations</span>
        </div>
        <div class="gr-progressBar">
          <progress value="7" max="20" style="width:80%;" role="progressbar" aria-valuenow="7" aria-valuemax="20"></progress>
        </div>
        <div class="gr-metaText u-marginTopTiny">7/20 (35%) </div>
        <a href="#" class="u-displayBlock u-marginTopXSmall">Rate more books</a>
      </section>
      <section class="gr-homePageRailContainer u-paddingBottomMedium">
        <img src="<?php echo base_url('assets/home/choice.png')?>">
      </section>
      <footer>
        <div class="gr-footer_siteLinks">
          <div class="gr-footer_firstLinkColumn">
            <h3 class="gr-h3">Company</h3>
            <a class="gr-footer_firstLinkColumn gr-hyperlink gr-hyperlink--black">About us</a>      
            <a class="gr-footer_firstLinkColumn gr-hyperlink gr-hyperlink--black">Careers</a>
            <a class="gr-footer_firstLinkColumn gr-hyperlink gr-hyperlink--black">Terms</a>
            <a class="gr-footer_firstLinkColumn gr-hyperlink gr-hyperlink--black">Privacy</a>
            <a class="gr-footer_firstLinkColumn gr-hyperlink gr-hyperlink--black">Help</a>                           
          </div>
          <div class="gr-footer_secondLinkColumn">
            <h3 class="gr-h3">Work with us</h3>
            <div><a class="gr-footer_firstLinkColumn gr-hyperlink gr-hyperlink--black">Authors</a></div>      
            <div><a class="gr-footer_firstLinkColumn gr-hyperlink gr-hyperlink--black">Advertise</a></div>
            <div><a class="gr-footer_firstLinkColumn gr-hyperlink gr-hyperlink--black">Authors & ads blog</a></div>
            <div><a class="gr-footer_firstLinkColumn gr-hyperlink gr-hyperlink--black">API</a></div>                           
          </div>
        </div>
        <h3 class="gr-h3">Connect</h3>
        <a class="gr-footer_socialLink"><img src="<?php echo base_url('assets/home/facebook.png')?>"></a>
        <a class="gr-footer_socialLink"><img src="<?php echo base_url('assets/home/twitter.png')?>"></a>
        <a class="gr-footer_socialLink"><img src="<?php echo base_url('assets/home/instagram.png')?>"></a>
        <a class="gr-footer_socialLink"><img src="<?php echo base_url('assets/home/linkedin.png')?>"></a>
        <div class="gr-footer_applinks">
          <a  style="margin-right: 16px;"><img src="<?php echo base_url('assets/home/appstore.png')?>"></a>
          <a><img src="<?php echo base_url('assets/home/googleplay.png')?>"></a>
          <p>
            <a class="gr-hyperlink gr-hyperlink--black gr-footer_layoutLink gr-footer_layoutLink--mobile">Mobile Version</a>
          </p>
          <p>
            <small>© 2019 Goodreads, Inc.</small>
          </p>
        </div>
      </footer>
    </div>
  </div>
</div>
</body>
</html>