<!DOCTYPE html>
<html lang="en">
<head>
  <title>Recent Updates</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/logo.png') ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- MY CSS -->

  <link type="text/javascript" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <!--<?php// echo base_url('assets/'); ?> css/style.css -->

</head>
<body>
<header class="navbar-fixed-top" role="navigation" style="background-color: rgba(244,241,234,0.5)">
    <div class="siteHeader_topLine gr-box gr-box--withShadow">
        <div class="siteHeader_contents">
            <div class="siteHeader_topLevelItem siteHeader_topLevelItem--searchIcon ">
                <button class="siteheader_searchIcon gr-iconButton fa fa-search" arial-label="Toggle search" type="button">
                </button>
            </div>
            <a href="http://localhost/tubes/?page=home2" class="siteHeader_logo" aria-label="Goodreads" title="Goodreads Home"></a>
            <nav class="siteHeader_primaryNavInline">
               <ul role="menu" class="siteHeader_menuList">
                    <li class="siteHeader_topLevelItem siteHeader_topLevelItem--home">
                        <a href="http://localhost/tubes/?page=home2" class= "siteHeader_topLevelLink">Home</a>
                    </li>
                    <li class="siteHeader_topLevelItem">
                        <a href="#" class= "siteHeader_topLevelLink">My Books</a>
                    </li>
                    <li class="dropdown siteHeader_topLevelItem">
                        <div class="primaryNavMenu primaryNavMenu--siteHeaderBrowseMenu ignore-react-onclickoutside ">
                           <a class="dropdown-toggle primaryNavMenu_trigger primaryNavMenu_trigger--siteHeaderBrowseMenu" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Browse ▾</a> 
                        </div>
                       <div class=" primaryNavMenu_menu gr-box gr-box--withShadowLarge"  role="menu">
                            <div class="dropdown-menu siteHeader_browseMenuDropdown">
                               <ul class="siteHeader_subNav">
                                    <li><a href="#">Page 1-1</a></li>
                                    <li><a href="#">Page 1-2</a></li>
                                    <li><a href="#">Page 1-3</a></li>
                               </ul>
                               <div class="siteHeader_spotlight siteHeader_spotlight--browseMenu"></div> 
                            </div>
                        </div>
                    </li>
                    <li class="siteHeader_topLevelItem siteHeader_topLevelItem--community">
                        <div class="primaryNavMenu ignore-react-onclickoutside">
                            <a class="primaryNavMenu_trigger" href="#" role="button" aria-haspopup="true" aria-expanded="false">Community ▾</a>
                        </div>
                        <div class="dropdown primaryNavMenu_menu gr-box gr-box--withShadowLarge" role="menu">
                            <div class="siteHeader_browseMenuDropdown">
                               <ul class="siteHeader_subNav"></ul>
                            </div>
                        </div>    
                    </li>
               </ul> 
            </nav>
            <div accept-charset="UTF-8" class="searchBox searchBox--navbar">
                <form autocomplete="off" action="/search" class="searchBox_form" role="search" aria-label="Search for books to add to your shelves">
                    <input class="searchBox_input searchBox_input--navbar" autocomplete="off" name="q" type="text" placeholder="Search books" aria-label="Search books" aria-controls="searchResults">
                    <button type="submit" class="searchBox_icon--magnifyingGlass gr-iconButton searchBox_icon searchBox_icon--navbar" aria-label="Search"></button>
                </form>
            </div>
            <div class="siteHeader_personal">
                <ul class="personalNav">
                    <li class="personalNav_listItem">
                        <div class="dropdown dropdown--notifications">
                            <a class="dropdown_trigger dropdown_trigger--notifications dropdown_trigger--personalNav" href="#" role="button" aria-haspopup="true" aria-expanded="false" tittle="Notifications">
                                <span class="headerPersonalNav_icon headerPersonalNav_icon--notifications" aria-label="Notifications">
                                    <img src="<?php echo base_url('assets/navbar/notif.png')?>">
                                </span>
                            </a>
                            <div class="dropdown_menu dropdown_menu--notifications gr-box gr-box--withShadowLarge" role="menu">
                            </div>
                        </div>
                    </li>
                    <li class="personalNav_listItem">
                        <div class="dropdown dropdown--discussions">
                            <a class="dropdown_trigger dropdown_trigger--discussions dropdown_trigger--personalNav" href="#" role="button" aria-haspopup="true" aria-expanded="false" tittle="My group discussions">
                                <span class="headerPersonalNav_icon headerPersonalNav_icon--discussions" aria-label="My group discussions">
                                    <img src="<?php echo base_url('assets/navbar/chat.png')?>">
                                </span>
                            </a>
                            <div class="dropdown_menu dropdown_menu--discussions gr-box gr-box--withShadowLarge" role="menu">
                            </div>
                        </div>
                    </li>
                    <li class="personalNav_listItem">
                        <a href="#" title="Messages" class="headerPersonalNav">
                            <span class="headerPersonalNav_icon headerPersonalNav_icon--inbox" aria-label="Inbox">
                                <img src="<?php echo base_url('assets/navbar/message.png')?>">
                            </span>
                        </a>
                    </li>
                    <li class="personalNav_listItem">
                        <a href="#" title="friends" class="headerPersonalNav">
                            <span class="headerPersonalNav_icon headerPersonalNav_icon--friendRequests" aria-label="Friend Requests">
                                <img src="<?php echo base_url('assets/navbar/friend.png')?>">
                            </span>
                        </a>
                    </li>
                    <li class="personalNav_listItem">
                        <a href="<?= base_url('index.php/UserCo/Profile/')?>" title="profile" class="headerPersonalNav">
                            <span class="headerPersonalNav_icon headerPersonalNav_icon--friendRequests" aria-label="Friend Requests">
                                <img src="<?php echo base_url('assets/navbar/profile.png')?>">
                            </span>
                        </a>
                        <!--<a class="dropdown-toggle dropdown_trigger headerPersonalNav" data-toggle="dropdown" href="<?= base_url('index.php/profile/')?>" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="headerPersonalNav_icon">
                                <img class="circularIcon circularIcon--border" src="<?php echo base_url('assets/navbar/profile.png')?>">
                            </span>
                        </a>
                        <ul class="dropdown_menu dropdown_menu--profileMenu" role="menu">
                            <li><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>-->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
