.postbitlegacy .userinfo .postuseravatar, .postbitlegacy .userinfo .postuseravatar img { float: none; text-align: center; }
.stickies li:last-child { border-bottom: 5px solid #ccc; }
.navbit a:hover { border: 1px solid #ccf; }
.navbar { top: -15px; background: none; }
.toplinks form input.textbox { width: 105px; }
.remember { position: absolute; z-index: 999; }
.rank { text-align: center; }
#userinfo .rank { margin-left: 50px; }
.bbcode_code table { margin-bottom: 0; }
.bbcode_code td { border: none; }
pre, code, kbd, samp, tt { line-height: 125%; }

.above_body { 
	margin: 0 20px 10px;
	height: 70px; 
	background: none repeat scroll 0% 0% rgb(114, 146, 168); 
	-webkit-border-radius: 5px; 
	-moz-border-radius: 5px; 
	border-radius: 5px; 
	-moz-box-shadow: -2px 2px 2px #c8c8c8; 
	-webkit-box-shadow: -2px 2px 2px #c8c8c8; 
	box-shadow: -2px 2px 2px #c8c8c8; 
}
.doc_header { min-height: 20px; }

/* css commun pour barre (connect / no connect) */
.toplinks ul.isuser li.popupmenu ul li a:hover,
.toplinks form input,
.toplinks ul.nouser li a,
.toplinks .logindetails { -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; }

/* contenu barre centrale above_body (user connect) */
#toplinks { left: 8px; right: auto; top: 18px; z-index: 10; }
.toplinks ul.isuser li.welcomelink a:hover { border-top: 1px solid #597f97; }
.toplinks ul.isuser li a:hover { background: #597f97; color:rgb(255, 255, 255); }

.toplinks ul.isuser li.welcomelink a:hover, 
.toplinks ul.isuser li a:hover, 
.toplinks .notifications a.popupctrl { -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }

.toplinks ul.isuser li a.active { 
	-webkit-border-top-left-radius: 3px; -moz-border-radius-topleft: 3px; border-top-left-radius: 3px;
	-webkit-border-top-right-radius: 3px; -moz-border-radius-topright: 3px; border-top-right-radius: 3px; 
	-webkit-border-bottom-left-radius: 0px; -moz-border-radius-bottomleft: 0px; border-bottom-left-radius: 0px;
	-webkit-border-bottom-right-radius: 0px; -moz-border-radius-bottomright: 0px; border-bottom-right-radius: 0px; 
}

.toplinks .notifications a.popupctrl:hover, 
.toplinks .nonotifications a.popupctrl:hover, 
.toplinks .nonotifications a.popupctrl.active , 
.toplinks .notifications a.popupctrl, 
.toplinks .notifications a.popupctrl.active { background: #597f97 url(images/misc/arrow.png) no-repeat right center; }

.toplinks ul.isuser .notifications .popupbody, 
.toplinks ul.isuser .nonotifications .popupbody { background: #597f97; border: 1px solid #597f97; }

.toplinks ul.isuser .notifications .popupbody li, 
.toplinks ul.isuser .notifications .popupbody li a{ border-top:1px solid #597f97; }

.toplinks ul.isuser li.popupmenu ul li { color: #ffffff; margin-top: 5px; }

/* contenu barre centrale above_body (user no connect) */
.toplinks ul.nouser { position: relative; top: -3px; left: 0; height: 26px; }
.toplinks form { 
	padding-left: 10px;
	padding-right: 10px;
	margin-left: 10px; 
	border-right: 1px solid rgb(90, 127, 151); 
	border-left: 1px solid rgb(206, 223, 235); 
	background: #597f97 url(images/gradients/selected-tab-gradient-with-top-alpha.png) repeat-x 0 -4px; color: #000000; 
}

.toplinks form input { padding-top: 0px; margin: 4px 5px 0 0; border: 1px solid #c0c0c0; }
.toplinks form input.cb_cookieuser_navbar { margin: 0; }

.toplinks form input.loginbutton, 
.toplinks ul.nouser li a {
	background: none;
	height: 19px;
	margin-right: 0;
	min-width: 70px;
	width: auto !important;
	text-align: center;
	color: rgb(255, 255, 255);
	text-decoration: none;
}

.toplinks form input.loginbutton {
	background:#597f97 url(images/gradients/selected-tab-gradient-with-top-alpha.png) repeat-x 0 -30px;
	-webkit-border-radius: 8px; -moz-border-radius: 8px; border-radius: 8px;
	border: 0;
}
.toplinks form input.loginbutton:hover { background:#597f97 url(images/gradients/selected-tab-gradient-with-top-alpha.png) repeat-x 0 -45px; }

.toplinks form input.loginbutton:hover, 
.toplinks form label:hover { cursor: pointer;  }

.toplinks form label { margin-right: 5px; }

.toplinks .logindetails { padding: 0; text-align: left; background: none; }
.toplinks ul.nouser li a {
	padding: 6px 10px 0 10px;
	border-right: 1px solid rgb(90, 127, 151);
	border-top: 1px solid rgb(206, 223, 235);
	border-left: 1px solid rgb(206, 223, 235);
	background:#597f97 url(images/gradients/selected-tab-gradient-with-top-alpha.png) repeat-x   0 -4px;
	color:#000000;
}
.toplinks ul.nouser li a:hover { background:#597f97 url(images/gradients/selected-tab-gradient-with-top-alpha.png) repeat-x 0 -2px; color:#000000; }

/* contenu barre bas above_body */
ul#navtabs li a.navtab { visibility: hidden; }
ul#navtabs li { border: 0; }
.navtabs > ul.floatcontainer li:hover a.popupctrl { border-color:#a7bec9; background-color: #a7bec9; }
.navtabs > ul.floatcontainer li:hover a.popupctrl.active, .navtabs > ul.floatcontainer li a.popupctrl.active { border-color:#a7bec9; background-color: #a7bec9; }
.navtabs .popupbody { border: 1px solid #a7bec9; background: none repeat scroll 0% 0% #a7bec9; }

/* suppression background profil */
.body_wrapper { background: none !important; }

/* profil block stats */
.userprof #usermenu, .member_summary dl, .userprof .member_blockrow { font-size: 11px; margin-bottom: 5px; }
.member_summary dl.stats dt { width: 100px; font-size: 10px; }
.member_summary dl.stats dd { width: 101px; }

/* Titre des discussions */
#pagetitle { padding: 15px 0px; }

/* autres ajustements */
body a, #forums a.username { color: rgb(50, 80, 120); }
div.author { font-size: 10px; margin-top: 2px; height: 18px; }
div.author span.label { margin-top: 6px; display: inline-block; }
.threadbit .nonsticky { background: white; }
.threadbit .alt { background: #eef; }
.threadbit .sticky { background: white; }
.threadbit .nonsticky a.threadstatus, .threadbit .sticky a.threadstatus { width: 40px; }
.postlistfoot ul.popupbody, .forumfoot ul.popupbody { width: 300px; }
.threadlisthead span.threadinfo, .threadbit .threadinfo { width: 69%; }
.threadlisthead span.threadinfo, .threadbit .threadinfo .inner { padding-bottom:5px; }
.threadlisthead span.threadlastpost, .threadbit .threadlastpost { width: 16%; }
.menusearch.popupmenu .popupbody { width: 280px; max-width: 280px; }
.forumbit_post .foruminfo .forumdata .datacontainer { padding-left: 52px; }
dl.icon_legends dd { margin-bottom: 8px; }
#nrreview .header { float: left; width: 150px; background: #eef; margin-right: 5px; }
#nrreview .header .datetime { float: none; }
#nrreview .header .username { font-weight: bold; }
#nrreview li { clear: both; }
#social_bookmarks_list { padding: 5px; }
#searchtypeswitcher li a { background-color: rgb(133, 166, 188); }

@media screen and (max-width: 1280px) {
  .threadbit .alt, .forumbit_post .forumstats li, .forumbit_post .forumstats_2 li { font-size: 9px; }
}

@media screen and (max-width: 1024px) {
  #vbmenu_community, #threadrating { display: none; }
}

.postbitlegacy .after_content { clear: none; }
#searchbits .threadinfo { width: 60%; }
#searchbits .threadlastpost .time { color:#3e3e3e !important; }
li.activitybit .avatar img { width: 60px; height: 60px; }
.forumlastpost .lastpostby { display: inline-block; }
.forumlastpost .lastpostdate { float: right; margin-right: 10px; }
.forumbit_post .forumrow, .forumhead + .childforum .L2:first-child .forumrow, .forumhead + .L2 .forumrow { background: white; min-height: 1px; }
.forumbit_post .foruminfo { min-height: 30px; }
#usercp_content .threadbit .threadlastpost { width: 16%; }
.threadbit .nonsticky, .threadbit .discussionrow { background: white; }
a.firstunread, a.firstunread:hover { padding-right: 18px !important; }
.moderators h4, .moderators .commalist, .subforums h4, .subforums .commalist { float: none; clear: none; display: inline; }
#pollinfo { margin: 0 0 4px 0; padding:20px; padding-left:120px; background-position:30px 25px; }


form .rightcol { max-width: 700px; }

.content a { text-decoration: underline; }

.kha_extraPanel { z-index: 1; }

#toplinks { z-index: 8; }

/* Nouveau gabarit */
.above_body { margin: -4px 0 10px; position:relative; top:0; }
.above_body {
    position:relative; 
    top:0;
    margin: 0 -.4rem 10px;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
}

.postbitlegacy .postrow.has_after_content { padding-bottom: 0; }

/* Nouveau Design forum pour nouveau gabarit */
#gabarit_pubBB { top:53px; height:0; padding:1px 0!important; }
.above_body {
    height: 44px;
    background: #fff;
    border-top: 0;
	margin-bottom: 100px;
	margin-top:-3px;
}
.doc_header { min-height: 0; }
.navbar { top: 0; margin:0; height:44px; }
.navtabs { background: #293a4e; height:21px; }
.navtabs ul { top:19px; border-top: 1px solid #293a4e; }
.navtabs ul li { padding:0 5px; }
.navtabs ul li:first-child { padding-left:0; margin-left: 8px; }
.navtabs li a.navtab { height:21px; line-height:21px; }
.navtabs > ul.floatcontainer li a, 
.navtabs > ul.floatcontainer li a.popupctrl { color: #293a4e; }
.navtabs > ul.floatcontainer li a.popupctrl { 
	background-image: url(https://forum.developpez.be/images/misc/black_downward_arrow.png); 
	background-position: right center; 
	padding-right:18px;
}
.navtabs > ul.floatcontainer li a:hover { color: #293a4e; }
.navtabs > ul.floatcontainer li:hover a.popupctrl, 
.navtabs > ul.floatcontainer li:hover a.popupctrl.active, 
.navtabs > ul.floatcontainer li a.popupctrl.active { 
	background-image: url(https://forum.developpez.be/images/misc/arrow.png); 
	background-position: right center;
	border-color: #345976; 
	background-color: #345976; 
	color: #fff; 
}
.navtabs .popupbody {
    border: 1px solid #345976;
    background: none repeat scroll 0% 0% #345976;
	border-left-width: 1px;
}
.navtabs .popupbody li {
    padding:0;
}
.navtabs > ul.floatcontainer .popupbody li a:hover {
    color: #fff;
    background: #345976 none;
    text-decoration: none;
}
.globalsearch { width:168px; right:10px; float:none; }
.globalsearch .textboxcontainer { height:21px; border-left: 0; text-align:left; }
.globalsearch .textboxcontainer span { border: 0; padding-top: 3px; width:134px; height:17px; }
.globalsearch ul.navbar_advanced_search { margin-right:4px; }
.navbar_search { right:0; }
.navbar_search input {
    padding: 0px 5px 2px;
    border: 0;
    -moz-border-radius: .1rem;
    -webkit-border-radius: .1rem;
    border-radius: .1rem;
}
.globalsearch .buttoncontainer { height:21px; border: 0; text-align:left; }
.globalsearch .buttoncontainer span { border: 0; padding-top: 1px; height:21px; margin-right:20px; }
.globalsearch input.textbox { height:13px; }
.navbar_advanced_search li a, .navbar_advanced_search li a:hover { line-height:24px; color: #293a4e; }

#toplinks { top: 1px; left:0; font-size:11px; }
.toplinks .notifications a.popupctrl {
    padding-top: 3px;
    padding-bottom: 3px;
    padding-left: 8px;
    padding-right: 20px;
    background: transparent url(https://forum.developpez.be/images/misc/arrow.png) right center no-repeat;
	-moz-border-radius: 0; 
	-webkit-border-radius: 0; 
	border-radius: 0;
}
.toplinks .notifications a.popupctrl:hover, 
.toplinks .nonotifications a.popupctrl:hover, 
.toplinks .nonotifications a.popupctrl.active , 
.toplinks .notifications a.popupctrl.active{
	padding-top: 3px;
    padding-left: 8px;
    padding-right: 20px;
	-moz-border-radius: 0; 
	-webkit-border-radius: 0; 
	border-radius: 0;
}
.toplinks ul.isuser li { height: 21px; line-height: 13px; padding:0 6px; }
.toplinks ul.isuser li a, 
.toplinks ul.isuser li a:hover { padding-left:6px; padding-right:6px; }
.toplinks ul.isuser li.welcomelink { height:19px; font-size: 12px; margin-right: 6px; background-color: #345976; padding: 0 10px; }
.toplinks ul.isuser li.welcomelink a { display:inline-block; padding-top:0; padding-bottom:0; line-height:20px; }
.toplinks ul.isuser li.welcomelink a:hover { border-top:0; background: none; text-decoration: underline; }
.toplinks ul.isuser li.welcomelink a:hover, 
.toplinks ul.isuser li a:hover, 
.toplinks .notifications a.popupctrl { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }
.toplinks ul.isuser li a.active { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }
.toplinks ul.isuser li.popupmenu ul li { margin-top: 10px; }
.toplinks ul.isuser li.popupmenu ul li:first-child { margin-top: 0px; }
.toplinks ul.isuser .notifications .popupbody { padding:2px 2px 11px; }
.toplinks ul.isuser .notifications .popupbody li, .toplinks ul.isuser .notifications .popupbody li a { border-top: 0; }
.toplinks ul.isuser .notifications .popupbody li a { padding: 0 10px 0 30px; line-height: 30px; }
.toplinks ul.isuser .notifications .popupbody li a span { position: absolute; line-height: 30px; left: 8px; }
.toplinks ul.isuser .notifications .popupbody li a:hover {
    color: #000000;
    background: #B9D6E7 none;
    text-decoration: none;
}
.forumhead, .threadlisthead { background: #293a4e; border: 1px solid #293a4e; }
.threadlisthead { font-size: 11px; }
.forumbit_post .forumrow, .forumbit_nopost .forumhead, .forumbit_nopost .forumrow, .forumbit_post .forumhead, .forumbits .forumhead {
    -moz-box-shadow: -2px 2px 2px #e4ebf0;
    -webkit-box-shadow: -2px 2px 2px #e4ebf0;
    box-shadow: -2px 2px 2px #e4ebf0;
}
.forumbit_nopost .forumhead .forumtitle, .forumbit_nopost .forumhead span, .forumbit_nopost .forumhead .collapse, .forumbit_post .forumhead h2 span {
    font-size: 12px;
    padding: 3px 0;
}

.threadbit .sticky, .threadbit .nonsticky { display:flex; }
.threadbit .alt { background: #e3f4ff; }

.stickies li:last-child { border-bottom: 5px solid #aed1e7; }
.threadlisthead span.threadlastpost a img.sortarrow { margin-left:7px; position:relative; top:1px; }

.forumactionlinks .rsslink { background-image:url(https://forum.developpez.be/images/misc/rss_40b2.png); }

.forumbit_post .forumactionlink { height:17px; }
.forumactionlinks .subslink { background-image:url(https://forum.developpez.be/images/misc/subscribed_40b2.png); }

.forumactionlinks .unsubslink { background-image:url(https://forum.developpez.be/images/misc/unsubscribed_40b2.png); }

.forumbit_post .forumrow, .forumhead + .childforum .L2:first-child .forumrow { padding: 2px 0; }

.forumbit_post .forumdescription { padding-top:6px; }

.subforums { padding-top:8px; }

.subforums .commalist { line-height:16px; }

.forumbit_post .foruminfo .forumdata { margin-top:4px; }
.forumbit_post .foruminfo .forumdata .forumtitle, .forumbit_nopost .forumbit_nopost .forumrow .forumtitle { font-size: 14px; }
.forumbit_post .foruminfo .forumdata .forumtitle a, .forumbit_nopost .forumbit_nopost .forumrow .forumtitle a { color:#000; }
.forumbit_post .foruminfo .forumicon{ left:10px; }
.forumbit_post .foruminfo .forumdata .datacontainer { padding-left: 54px; }
 
h2.searchlisthead { background:#293a4e; border-color:#293a4e; -webkit-border-radius: .5rem .5rem 0 0; -moz-border-radius: .5rem .5rem 0 0; border-radius: .5rem .5rem 0 0; }
h2.searchlisthead.stylePlus { -webkit-border-radius: .25rem; -moz-border-radius: .25rem; border-radius: .25rem; margin-bottom:20px; }
#search_inlinemod_form .blockbody #searchbits .date, 
#search_inlinemod_form .blockbody #searchbits .time { color:#fff; }
 
.threadbit .threadtitle img, 
.threadbit .searchtitle img { position:relative; top:2px; margin-right:3px; }
.threadbit .threadtitle img.gotonewpost, 
.threadbit .searchtitle img.gotonewpost { top:3px; }
.threadbit .threaddetails .threaddetailicons img { margin-left:4px; }
.threadbit .threadpostedin { height:auto; }
.threadbit #below_unread { padding:10px 50px; width:100%; background:#dedede; color:#444; text-align:left; }

.threadbit .deleted { display:flex; background: #e5e5e5; }
.threadbit .deleted .threadinfo { position:relative; width:69%; }
.threadbit .deleted .threadinfo .threaddetailicons { position:absolute; top:calc(50% - 9px); right:10px; }
.threadbit .deleted .threaddeleted { width:28%; display:flex; align-items: center; justify-content: center; padding-left:0; }
.threadbit .deleted .threadinfo .threadtitle { margin-top:7px; }
.threadbit .deleted .threadinfo .threadtitle a.title { font-weight: bold; color: #bf4343; }
.threadbit .deleted .managethread { position:absolute; bottom:2px; right:20%; }

.threadbit .nonsticky a.threadstatus, .threadbit .sticky a.threadstatus, .threadbit .deleted .threadstatus { width: 50px; }
.threadbit .threadstatus { background-image: url(https://forum.developpez.be/images/statusicon/thread_old-30b.png); }
.threadbit.lock .threadstatus { background-image: url(https://forum.developpez.be/images/statusicon/thread_lock-30b.png); }
.new .threadstatus { background-image: url(https://forum.developpez.be/images/statusicon/thread_new-30b.png); }
.threadbit.lock.new .threadstatus { background-image: url(https://forum.developpez.be/images/statusicon/thread_lock_new-30b.png); }
.threadbit.dot .threadstatus { background-image: url(https://forum.developpez.be/images/statusicon/thread_dot-30-rightb.png); }
.threadbit.dot.new .threadstatus { background-image: url(https://forum.developpez.be/images/statusicon/thread_dot_new-30-rightb.png); }
.threadbit .deleted .threadstatus { background-image: url(https://forum.developpez.be/images/statusicon/thread_deleted_30-right2.png); }
.threadbit.moved .threadstatus { background-image: url(https://forum.developpez.be/images/statusicon/thread_moved-30b.png); }
.threadinfo.forum a.threadstatus { background-image: url(https://forum.developpez.be/images/search_results/search_results_forum2.png); }
.threadinfo.socialgroup a.threadstatus { background-image:url(https://forum.developpez.be/images/search_results/search_results_socialgroup2.png); }
.threadinfo.socialgroupdiscussion a.threadstatus { background-image:url(https://forum.developpez.be/images/search_results/search_results_socialgroup_discussion2.png); }
.threadinfo.socialgroupmessage a.threadstatus { background-image:url(https://forum.developpez.be/images/search_results/search_results_socialgroup_message2.png); }
.threadinfo.blogentry a.threadstatus { background-image:url(https://forum.developpez.be/images/search_results/search_results_blog2.png); }
.threadbit.dot.lock.new .threadstatus { background-image: url(https://forum.developpez.be/images/statusicon/thread_dot_lock_new-30-right2.png); }
.threadbit.dot.lock .threadstatus { background-image: url(https://forum.developpez.be/images/statusicon/thread_dot_lock-30-right2.png); }
.threadbit.moved.new .threadstatus { background-image: url(https://forum.developpez.be/images/statusicon/thread_moved_new-30b.png); }

.footer { background: #293a4e none; }
.footer select { padding:2px; border-color:#425769; -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }

.postbit .posthead, .postbitlegacy .posthead, .eventbit .eventhead { background: #293a4e; border-color: #293a4e; }

a.firstunread { background: url(https://forum.developpez.be/images/buttons/firstnew3.png) right center no-repeat; padding-right: 16px !important; }
a.firstunread, a.firstunread:hover { padding-right: 16px !important; }

.forum_info .blockhead, 
.thread_info h4, .wgo_block .blockhead { 
	background: #45667e; 
	border-color:#45667e; 
}
.thread_info h4, 
.thread_info .blockbody {
	-moz-box-shadow: -1px 1px 2px #dedbdb;
	-webkit-box-shadow: -1px 1px 2px #dedbdb;
	box-shadow: -1px 1px 2px #dedbdb; 
}
.thread_info h4 { position:relative; }
.blockhead a.collapse { top:4px; right:6px; }
.forum_info .blockbody { padding:4px 0 0; }
.forum_info .blockbody dl.icon_legends dd { padding-top:4px; }
.blockhead img { margin-bottom:-2px; }

#usercp_nav .block, .blockhead {  
	-moz-border-radius-topright: .25rem;
	-moz-border-radius-topleft: .25rem;
	-webkit-border-top-right-radius: .25rem;
	-webkit-border-top-left-radius: .25rem;
	border-top-right-radius: .25rem;
	border-top-left-radius: .25rem;
}
#usercp_nav .blockbody { border-color: #293a4e; }
.blockhead {
	background: #293a4e;
	border-color: #293a4e;
}
.modifStyleExep .threadbit .nonsticky { border-color: #293a4e; margin-left:-1px; }
.blocksubhead { border-top:0; color: #293a4e; background: #e3f4ff none repeat-x; }
.blocksubhead a { color: #293a4e; }
#usercp_nav li a.usercp_folder-left { background: transparent url(https://forum.developpez.be/images/cms/sections2.png) no-repeat 9px 7px; padding-top:2px; }
#usercp_nav .subscription li a.usercp_folder-left { background: transparent url(https://forum.developpez.be/images/cms/sections3.png) no-repeat 10px 4px; }
#usercp_nav .blockrow .active { background-color: #bbe2fc; color: #293a4e; }
#usercp_nav .blockrow * a:hover { background-color: #84ccfc; color: #293a4e; }
#usercp_nav hr { height:auto; border-color: #e3f4ff; }
#forum_icon_legend h5 { 
	background: #293a4e;
	border-color: #293a4e;	
	-moz-border-radius-topright: .25rem;
	-moz-border-radius-topleft: .25rem;
	-webkit-border-top-right-radius: .25rem;
	-webkit-border-top-left-radius: .25rem;
	border-top-right-radius: .25rem;
	border-top-left-radius: .25rem;
}
.formcontrols { border-color: #293a4e; }
#forum_icon_legend div.contenant { padding:10px; border:1px solid #293a4e; border-top:0; }
#forum_icon_legend div.contenant img { margin-right:10px; }
#post_preview blockquote.postcontainer { border:1px solid #293a4e; border-top:0; padding-bottom:10px; }
#reminders .blockrow { border:1px solid #293a4e; border-top:0; padding-bottom:10px; }

.postlist_moderation .blockbody, 
.group-moderation .blockbody, 
.attachment_moderation .blockbody, 
#groups_1 .blockbody, 
#groups_2 .blockbody { border:1px solid #293a4e; border-top:0; }
#groups_1 .blockbody, #groups_2 .blockbody { padding:10px 0; }
.attachment_moderation .attachmentrow { border:1px solid #c4c4c4; border-top:0; }
.group-moderation div.discussionrow { margin-left:0; }
.pt_timeline .blockrow .issuetext img { margin-right: 6px; }

.newcontent_textcontrol {
	background: #293a4e;
	-moz-border-radius: .25rem;
	-webkit-border-radius: .25rem;
	border-radius: .25rem;	
}
.newcontent_textcontrol:hover {
	background: #2b3c51;
	background: -moz-linear-gradient(top,  #2b3c51 0%, #2b3c51 40%, #365172 100%);
	background: -webkit-linear-gradient(top,  #2b3c51 0%,#2b3c51 40%,#365172 100%);
	background: linear-gradient(to bottom, #2b3c51 0%,#365172 40%,#2b3f56 100%)
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2b3c51', endColorstr='#365172',GradientType=0 );
}

#group_discussionlist #above_postlist { top:-40px; }
#above_searchresults .popupgroup, 
#postlist #above_postlist #postlist_popups, 
#group_discussionlist #above_postlist #postlist_popups, 
.threadlist_moderation .popupgroup {  
	background: #237f2f;
	-moz-border-radius: .25rem;
	-webkit-border-radius: .25rem;
	border-radius: .25rem;
	padding: 3px 15px 4px 15px;
	border: 0;
	margin-bottom:8px;
}
.threadlist_moderation .popupgroup { padding-top:2px; margin-bottom:0; }
#above_searchresults .popupgroup .popupctrl, 
#postlist #above_postlist #postlist_popups .popupmenu a.popupctrl, 
.threadlist_moderation .popupgroup .popupctrl, 
#group_discussionlist #above_postlist #postlist_popups .popupctrl {
	color: rgb(255, 255, 255);
	background-image: url(https://forum.developpez.be/images/misc/arrow.png);
	padding-right:18px;
}
#postlist.postlist_moderation #above_postlist { top:-47px; }

.postbit.postbit-lite { 
	-moz-border-radius: .25rem .25rem 0 0;
	-webkit-border-radius: .25rem .25rem 0 0;
	border-radius: .25rem .25rem 0 0;
	border:1px solid #293a4e;
	margin-bottom:10px;
}
.postbit-lite .avatarlink { padding:2px; }
.postbit-lite .postbithead, 
.userprof .userprof_vmleft { 
	margin-left:0; 
	color:#fff; 
	background:#345976 none repeat-x; 
	border-color:#fff; 
	-moz-border-radius: .2rem .2rem 0 0;
	-webkit-border-radius: .2rem .2rem 0 0;
	border-radius: .2rem .2rem 0 0;
}
.userprof .userprof_vmleft { 
	padding: 5px 10px;
	text-align: left;
	border:1px solid #fff;
}
.postbit-lite.userprof { padding:bottom:5px; }
.userprof .userprof_vmleft a { color:#fff !important; }
.postbit-lite .postbithead a { color:#fff; text-decoration:underline; }
.postbit-lite .postbithead .time { color:#fff; }
.postbit-lite dl.stats.groups { margin-top:5px; margin-bottom:-40px; }
.postbit-lite .posttext { padding-left:0; }
.postbit-lite .postbitfoot .postcontrols a { color:#fff; }

.userprof .member_blockrow { font-family: Verdana, sans-serif; font-size: 10pt; margin:0; }
.userprof .member_blockrow .postbit-right { position:absolute; top:5px; right:8px; }
.userprof .member_blockrow .postbit-right span { margin-right:10px; }
.userprof .member_blockrow .time { color:#fff; }
.userprof .userprof_vmright { min-height:60px; padding:6px; }

#userprof_content_container .postbit-lite.userprof { background:#fafafa; }
#userprof_content_container .userprof_headers { background:none; }
#userprof_content_container .userprof_headers_border { border:0; }
#userprof_content_container .floatleft { float:none; color:#fff; }
#userprof_content_container .floatleft .time { color:#fff; }
#userprof_content_container .userprof_vmright { margin-left:0; }
#userprof_content_container .userprof_vmright .vm_blockrow { display: inline-block; width: calc(100% - 70px); margin-top:2px; }
#userprof_content_container .postbit-lite { padding-bottom:0; }
#userprof_content_container .postbit-lite .avatarlink { padding:0; }

.postbit-lite.moderated-picturecomment .postbithead { margin-left:0; }

#group_discussionlist.group-moderation .threadinfo .inner { width: calc(100% - 70px); position:relative; }
#group_discussionlist.group-moderation .threadinfo .inner img.moderated_posts { position:absolute; right:0; }

.pt_issuelist .blocksubhead .ptissuelist_notifications { width:13% !important; }
.pt_issuelist .blockrow .ptissuelist_notifications { width:7% !important; }
.pt_issuelist .blocksubhead .ptissuelist_lastpost { width:16% !important; }
.pt_issuelist .blockrow .ptissuelist_lastpost { width:15% !important; }
.pt_issuelist .blocksubhead .ptissuelist_replies, 
.pt_issuelist .blockrow .ptissuelist_replies { width:8% !important; }

#attachmentlist li.attachmentrow { padding-bottom:0; margin-bottom:10px; }
#attachmentlist li.attachmentrow:first-child { padding-top:15px; }
#attachmentlist li.attachmentrow div { display:inline-block; }
#attachmentlist div.thumbnail_link {
	width:auto;
	min-width:150px;
	margin-right:20px;
	vertical-align:top;
}
#attachmentlist li.attachmentrow .attachment_title { font-size:.9rem; }

#usercp_nav .dvpb4 {
	width: 200px !important;
	height: 610px !important;
	text-align: center;
	padding-top: 10px;
	background: #e9e9e9;
	background: -moz-linear-gradient(left, rgba(232, 240, 245, 0.65) 0%, rgba(227, 240, 247, 0.3) 100%);
	background: -webkit-linear-gradient(left, rgba(232, 240, 245, 0.65) 0%,rgba(227, 240, 247, 0.3) 100%);
	background: linear-gradient(to right, rgba(232, 240, 245, 0.65) 0%, rgba(227, 240, 247, 0.3) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6efefef', endColorstr='#1aefefef',GradientType=1 );
	-moz-border-radius: .25rem;
	-webkit-border-radius: .25rem;
	border-radius: .25rem;
}

#gabarit_pubBB, .contenuPage { background: #e1e1e2; }
.breadcrumb { 
	background-color: #192330;
	padding: 2px 10px;
	color: #fff;
	border-radius: .25rem;
	margin-bottom: 15px; 
	box-shadow: 1px 1px 4px #adadad;
}
.breadcrumb .navbit { background-image: url(https://forum.developpez.be/images/misc/navbit-arrow-right2.png); }
.breadcrumb .navbit > a { color:#fff; }
.breadcrumb .navbit a:hover { border: 1px solid #657994; }

.activitystream_block dd.selected, dd.userprof_module { background-color: #293a4e; border-color: #293a4e; }
.memberprofiletabunder { background: #293a4e; }
.userprof_editor { border:0; }
.userprof_editor .formcontrols { border:0; }
.userprof_editor .formcontrols .blockrow { border:0; }
span.cke_skin_kama { padding:0; }

.toplinks ul.nouser { height:24px; }
.toplinks ul.nouser li a { 
	font-size:.7rem; 
	height: 12px; 
	margin-top:4px; 
	margin-right:16px; 
	padding: 2px 10px; 
	line-height:12px; 
	border:0; 
	background:#55a1dc; 
	background:#00e0ff; 
	color:#000;  
	border-radius:.1rem;
	-webkit-border-radius:.1rem;
	text-shadow: 1px 1px 1px #edf8ff;
	letter-spacing: 0.04rem;
}
.toplinks ul.nouser li a:hover { background: #b65858; color: #fff; text-shadow: 1px 1px 1px #163142; }
.toplinks form { margin-left:1px; padding-left:0; padding-right:10px; border:0; background:none; }
.toplinks .logindetails { height:24px; }
.toplinks form input { 
	font-size:.7rem; 
	padding:0 6px; 
	margin-top:3px; 
	margin-right:-2px; 
	line-height:16px; 
	background: #7feea8;
	border-color: #293a4e;
	color: #fff;
}
.toplinks form input.default-value { color: #06220acc !important; }
.toplinks form input.loginbutton {
	border-radius:0;
	-webkit-border-radius:0;
	margin-left:1px;
	height:auto;
	font-size:.7rem;
	background:#f2c252;
	color:#261705;
	padding:0 12px; 
	border-radius:0 .1rem .1rem 0;
	-webkit-border-radius:0 .1rem .1rem 0;
	font-weight: bold;
	text-shadow: 1px 1px 0px #f9be8f;
}
.toplinks form input.loginbutton:hover { background:#ff9a25; }

#social_bookmarks_list li { display:inline-block; float:none; width:auto; margin-top:8px; }

.postbitlegacy .postfoot .postcontrols, 
.postbit .postfoot .postcontrols, 
.postbitlegacy .postfoot .postlinking, 
.postbit .postfoot .postlinking { height:17px; line-height:17px; }
.postbitlegacy .postfoot .textcontrols a, .postbit .postfoot .textcontrols a { padding-top:1px; padding-bottom:1px; }

#usercp_nav .block, #usercp_content .block { margin-bottom:0; }

.userprof_content .blog_content img { max-width:100%; }