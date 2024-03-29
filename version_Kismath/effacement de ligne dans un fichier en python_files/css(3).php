@charset "UTF-8";

/* vB4 Project Tools CSS definitions */

/*
 * These definitions are new for vBulletin or copied / edited from
 * others parts, they need to have their own stylevars
 */

/* Code for all controls in PT - grey bar above all contents */
a.toolbar_text{
	font-size: 11px;
	color: #4e4e4e;
	padding: 0.2em 0.4em;
	border: 0;
	display: block;
	float: left;
	clear: right;
}

.searchprojects.popupmenu .popupbody {
	min-width: 240px;
	max-width: 240px;
	font: ;
	left: -100px;
}

.projectpopups .popupbody .text {
	text-align: left;
}

.searchprojects input.button {
	float: right;
	top: 0;
}

.formsubmit .newissueslink {
	float: left;
	clear: left;
	width: 48%;
	text-align: left;
}

.formsubmit .advancedsearchlink {
	float: right;
	clear: right;
	width: 48%;
}

.formsubmit .newissueslink a {
	background: transparent;
}

.toolsmenu .popupgroup .popupbody .advancedsearchlink a {
	text-align: right;
}

a.firstunread, a.firstunread:hover
{
	color: #3e3e3e;
}

/* Project overview definitions */
.pt_overview {
	margin-top: 5px;
	display: inline-block;
	width: 100%;
}

.pt_overview .blocksubhead div {
	display: inline-block;
}

.pt_overview .blocksubhead .project {
	margin-left: 53px;
}

.pt_overview .blocksubhead .activeissues {
	float: right;
	width: 20%;
}

.pt_overview .blocksubhead .lastpost {
	float: right;
	width: 20%;
}

.pt_overview .blockrow {
	padding: 5px 0;
	border-top: solid 1px #cedfeb;
}

.pt_overview .blockrow div {
	display: inline-block;
}

.pt_overview .settings_form_border > *:first-child {
	border-top:none;
}

.pt_overview .blockrow .projectstatusicon {
	padding: 0 5px;
	vertical-align: middle;
	width: 48px;
}

.pt_overview .blockrow .projecttitle {
	padding: 0 5px;
	vertical-align: middle;
}

.pt_overview .blockrow .projecttitle div {
	display: block;
}

.pt_overview .blockrow .projecttypecounts {
	width: 20%;
	clear: left;
	float: right;
}

.pt_overview .blockrow .projectlastpost {
	font-size: 12px;
	padding-top: 5px;
	width: 20%;
	clear: right;
	float: right;
}

.pt_overview .projectlastpost {
	clear: right;
}

.pt_overview .projectlastpost .lastpostdate {
	font-size: 11px;
}

.pt_overview .blockfoot .group .button {
	margin-top: 5px;
	display: inline-block;
}

/* Project overview definitions */
.pt_timeline {
	margin-top: 5px;
	display: inline-block;
	width: 100%;
}

.pt_timeline .blockhead div {
	/* margins on floats are doubled in ie, don't use them */
	position: absolute;
	right: 65px;
}

.pt_timeline .blocksubhead div {
	display: inline-block;
}

.pt_timeline .blockrow {
	padding-top: 5px;
	padding-bottom: 5px;
	border-top: solid 1px #cedfeb;
}

.pt_timeline .blockrow div {
	display: inline-block;
}

.pt_timeline .blockrow .issuetype_icon {
	padding: 3px 10px 0 10px;
	vertical-align: top;
}

.pt_timeline .blockrow .issuedate {
	padding: 0 5px;
	vertical-align: top;
}

.pt_timeline .blockrow .issuetext {
	padding: 0 5px;
}

/* Project informations */
.pt_project {
	margin-top: 5px;
	display: inline-block;
	width: 100%;
}

.pt_project .blocksubhead div {
	display: inline-block;
}

.pt_project .blocksubhead .stats {
	float: right;
	width: 18%;
}

.pt_project .blockrow div {
	display: inline-block;
}

.pt_project .blockrow div.projectdescription {
	width: 80%;
	overflow: hidden;
}

.pt_project .blockrow .stats {
	float: right;
	width: 18%;
	vertical-align: top;
}

.pt_project .blockfoot .pt_milestonelist {
	float: left;
	margin-top: -4px;
}

/* Project reports list definitions */
.pt_reportlist .blocksubhead div {
	display: inline-block;
}

.pt_reportlist .blocksubhead .ptreportlist_subscribebutton {
	width: 75px;
}

.pt_reportlist .blocksubhead .ptreportlist_submittedby {
	float: right;
	width: 15%;
}

.pt_reportlist .blocksubhead .ptreportlist_delete {
	float: right;
	width: 5%;
}

.pt_reportlist .blockrow {
	padding-left: 0;
	padding-right: 0;
}

.pt_reportlist .blockrow div {
	display: inline-block;
}

.pt_reportlist .blockrow .ptreportlist_checkbox {
	text-align: center;
	width: 80px;
	position: absolute;
}

.pt_reportlist .blockrow .ptreportlist_title {
	margin-left: 90px;
}

.pt_reportlist .blockrow .ptreportlist_submittedby {
	width: 15%;
	float: right;
}

.pt_reportlist .blockrow .ptreportlist_checkbox_del {
	width: 5%;
	float: right;
}

/* Special definition for issue listing - allowing AJAX issue title editing */
.projectissuelist {
	clear: both;
	display: block;
	float: left;
	width: 100%;
}

/* Project issue list definitions */
.pt_issuelist {
	margin-top: 5px;
	display: inline-block;
	width: 100%;
}

.pt_issuelist .blocksubhead div {
	display: inline-block;
}

.pt_issuelist .blocksubhead .ptissuelist_title {
	margin-left: 22px;
}

.pt_issuelist .blocksubhead .ptissuelist_project {
	margin-left: 22px;
}

.pt_issuelist .blocksubhead .ptissuelist_applyversion {
	float: right;
	width: 10%;
}

.pt_issuelist .blocksubhead .ptissuelist_addressversion {
	float: right;
	width: 10%;
}

.pt_issuelist .blocksubhead .ptissuelist_category {
	float: right;
	width: 6%;
}

.pt_issuelist .blocksubhead .ptissuelist_status {
	float: right;
	width: 9%;
}

.pt_issuelist .blocksubhead .ptissuelist_priority {
	float: right;
	width: 5%;
}

.pt_issuelist .blocksubhead .ptissuelist_replies {
	float: right;
	width: 5%;
}

.pt_issuelist .blocksubhead .ptissuelist_issuetype {
	float: right;
	width: 15%;
}

.pt_issuelist .blocksubhead .ptissuelist_lastpost {
	float: right;
	width: 10%;
}

.pt_issuelist .blocksubhead .ptissuelist_notifications {
	float: right;
	width: 12%;
}

.pt_issuelist .issuecontent {
	clear: both;
	display: block;
}

.pt_issuelist .blockrow {
	padding-left: 0;
}

.pt_issuelist .blockrow .ptissuelist_statusicon {
	padding: 0 5px;
	vertical-align: middle;
	display: inline-block;
}

.pt_issuelist .blockrow .ptissuelist_title {
	padding: 0 5px;
	vertical-align: middle;
	display: inline-block;
	max-width: 35%;
}

.pt_issuelist .blockrow .ptissuelist_title .pagination {
	display: inline-block;
	position: relative;
}

.pt_issuelist .blockrow .ptissuelist_title .pagination dd span {
	padding-top: 0;
	padding-bottom: 0;
	margin-top: -3px;
	margin-bottom: -3px;
}

.pt_issuelist .blockrow .ptissuelist_title .pagination a {
	padding: 0 4px;
	-moz-border-radius: 2px;
	-webkit_border-radius: 2px;
	color: #417394;
	font-size: 11px;
	display: inline;
	float: none;
}

.pt_issuelist .blockrow .ptissuelist_deleted_title {
	padding: 0 5px;
	vertical-align: middle;
	display: inline-block;
}

.pt_issuelist .blockrow .ptissuelist_project {
	padding: 0 5px;
	vertical-align: middle;
	display: inline-block;
}

.pt_issuelist .blockrow .ptissuelist_titlesub {
	padding: 0 5px;
	vertical-align: middle;
	display: inline-block;
}

.pt_issuelist .blockrow .ptissuelist_icons {
	padding: 0 5px;
	text-align: right;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_applyversion {
	padding: 0 5px;
	vertical-align: middle;
	width: 10%;
	text-align: right;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_addressversion {
	padding: 0 5px;
	vertical-align: middle;
	width: 10%;
	text-align: right;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_category {
	padding: 0 5px;
	vertical-align: middle;
	width: 6%;
	text-align: right;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_status {
	padding: 0 5px;
	vertical-align: middle;
	width: 9%;
	text-align: right;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_priority {
	padding: 0 5px;
	vertical-align: middle;
	width: 5%;
	text-align: right;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_replies {
	padding: 0 5px;
	vertical-align: middle;
	width: 5%;
	text-align: center;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_issuetype {
	padding: 0 5px;
	vertical-align: middle;
	width: 15%;
	text-align: center;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_lastpost {
	padding: 0 5px;
	vertical-align: middle;
	width: 10%;
	margin-top: -5px;
	text-align: left;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_emptylastpost {
	padding: 0 5px;
	vertical-align: middle;
	width: 10%;
	text-align: left;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_notifications {
	padding: 0 5px;
	vertical-align: middle;
	width: 10%;
	text-align: right;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_checkbox {
	padding: 0 5px;
	vertical-align: middle;
	width: 5%;
	text-align: right;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_deleted {
	padding: 0 5px;
	vertical-align: middle;
	width: 43%;
	text-align: left;
	float: right;
}

.pt_issuelist .deleted {
	background-color: #e5e5e5;
}

.pt_issuelist .blockrow .ptissuelist_icons_search {
	padding: 0 5px;
	width: 5%;
	text-align: right;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_status_search {
	padding: 0 5px;
	vertical-align: middle;
	width: 10%;
	text-align: right;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_priority_search {
	padding: 0 5px;
	vertical-align: middle;
	width: 8%;
	text-align: right;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_replies_search {
	padding: 0 5px;
	vertical-align: middle;
	width: 10%;
	text-align: center;
	float: right;
}

.pt_issuelist .blockrow .ptissuelist_lastpost_search {
	padding: 0 5px;
	vertical-align: middle;
	width: 15%;
	margin-top: -5px;
	text-align: left;
	float: right;
}

.pt_issuelist .actionbuttons .group {
	padding: 10px 0 5px 0;
}

/* Project issue content definitions */
#pt_issue_details {
	float: right;
	width: 210px;
	margin-left: 10px;
	margin-top: 10px;
}

.pt_issue_content .issue_content {
	margin-left:230px; 
}

.pt_issue_content {
	width: 100%;
	float: left;
	margin-left:-230px;
	margin-top: 10px;
}

.pt_issue_content .block {
	width: 100%;
	display: block;
	float: right;
}

.pt_issue_content .blockrow {
	background: #f2f6f8 none   ;
}

.pt_issue_content .issuetext {
	padding-bottom: 26px;
	background: #fafafa none   ;
}

.pt_issue_content .formcontrols .blockrow {
	background: #FFFFFF  bottom repeat-x;
	border-top: solid 1px #cedfeb;
	padding: 10px 5px;
}

.pt_issue_content .blockrow .issue_message {
	padding-bottom: 1em;
}

.pt_issue_content .blockrow .issue_message .shade {
	font-size: 11px;
}

.pt_issue_content .issuefoot {
	background: none repeat scroll 0 0 transparent;
	clear: both;
	display: block;
	float: left;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	position: relative;
	right: 0;
	width: 100%;
	margin-left: -10px;
	margin-right: -20px;
}

.pt_issue_content .issuefoot .textcontrols {
	background: #e9e9e9 none   ;
	display: block;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	height: 16px;
	padding: 3px 20px 7px 0;
	width: 100%;
}

.pt_issue_content .issuefoot .issuecontrols {
	margin-left: 1px;
	position: absolute;
	right: -10px;
}

.pt_issue_content .issuefoot .textcontrols span.separator {
	
		border-right: 1px solid #DADADA;
		display: inline;
		margin: 0 5px;
	
}

.pt_issue_content .issuefoot .textcontrols a.editissue {
	background: url(https://forum.developpez.be/images/buttons/edit_40b.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_content .issuefoot .textcontrols a.editissue:hover {
	background: url(https://forum.developpez.be/images/buttons/edit_40b-hover.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_content .issuefoot .textcontrols a.replyissue {
	background: url(https://forum.developpez.be/images/buttons/reply_40b.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_content .issuefoot .textcontrols a.replyissue:hover {
	background: url(https://forum.developpez.be/images/buttons/reply_40b-hover.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_content .issuefoot .issuelinking {
	margin-left: 0px;
	position: absolute;
	left: 10px;
}

.pt_issue_content .issuefoot .textcontrols a {
	display: inline-block;
}

.pt_issue_content .issuefoot .textcontrols a.issuehistory {
	background: none no-repeat scroll left center transparent;
	padding-left: 0;
	border: 0 solid #A8A8A8;
}

.pt_issue_content .issuefoot .textcontrols a.issuehistory:hover {
	background: none no-repeat scroll left center transparent;
	padding-left: 0;
	border: 0 solid #A8A8A8;
}

.pt_issue_content .issuefoot .textcontrols a.reportissue {
	background: url(https://forum.developpez.be/images/buttons/report-40b.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_content .issuefoot .textcontrols a.reportissue:hover {
	background: url(https://forum.developpez.be/images/buttons/report-40b-hover.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_content .issuefoot .textcontrols a.ipissue {
	background: url(https://forum.developpez.be/images/buttons/ip-40b.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_content .issuefoot .textcontrols a.ipissue:hover {
	background: url(https://forum.developpez.be/images/buttons/ip-40b-hover.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_content .issuefoot .textcontrols a img {
	left: 3px;
	position: absolute;
	top: 2px;
}

.pt_issue_content .issuevote, #pt_issue_content .issueclosed {
	/*background: none repeat scroll 0 0 #FFFFFF;*/
	background:none none   ;
	border-top: 1px solid #D1D1E1; 
	margin-top: 3px; 
	padding: 4px;
	text-align: center;
}

.pt_issue_content img.author_avatar
{
	float: left;
	margin-right: 5px;
}

/* Issue notes */
.pt_issue_note {
	margin-bottom: 15px;
}

.pt_issue_note .blockrow {
	background: #f2f6f8 none   ;
}

.pt_issue_note .formcontrols .blockrow {
	background: #FFFFFF  bottom repeat-x;
	border-top: solid 1px #cedfeb;
	padding: 10px 5px;
}

.pt_issue_note .issuetext {
	padding-bottom: 26px;
	background: #fafafa none   ;
}

.pt_issue_note .blockrow .issue_message {
	padding-bottom: 1em;
}

.pt_issue_note .issuefoot {
	background: #e9e9e9 none   ;
	clear: both;
	display: block;
	float: left;
	font: bold 11px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	position: relative;
	right: 0;
	width: 100%;
	margin-left: -10px;
	margin-right: -20px;
}

.pt_issue_note .issuefoot .textcontrols {
	background: #e9e9e9 none   ;
	display: block;
	font: bold 11px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	height: 16px;
	padding: 3px 20px 7px 0;
	width: 100%;
}

.pt_issue_note .issuefoot .issuecontrols {
	margin-left: 1px;
	position: absolute;
	right: -10px;
}

.pt_issue_note .issuefoot .textcontrols span.separator {
	
		border-right: 1px solid #DADADA;
		display: inline;
		margin: 0 5px;
	
}

.pt_issue_note .issuefoot .textcontrols a {
	display: inline-block;
}

.pt_issue_note .issuefoot .textcontrols a.editissue {
	background: url(https://forum.developpez.be/images/buttons/edit_40b.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_note .issuefoot .textcontrols a.editissue:hover {
	background: url(https://forum.developpez.be/images/buttons/edit_40b-hover.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_note .issuefoot .textcontrols a.replyissue {
	background: url(https://forum.developpez.be/images/buttons/reply_40b.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_note .issuefoot .textcontrols a.replyissue:hover {
	background: url(https://forum.developpez.be/images/buttons/reply_40b-hover.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_note .issuefoot .issuelinking {
	margin-left: 0px;
	position: absolute;
	left: 10px;
}

.pt_issue_note .issuefoot .textcontrols a.issuehistory {
	background: none no-repeat scroll left center transparent;
	padding-left: 0;
	border: 0 solid #A8A8A8;
}

.pt_issue_note .issuefoot .textcontrols a.issuehistory:hover {
	background: none no-repeat scroll left center transparent;
	padding-left: 0;
	border: 0 solid #A8A8A8;
}

.pt_issue_note .issuefoot .textcontrols a.promoteissue {
	background: url(https://forum.developpez.be/images/buttons/project.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0px solid #a8a8a8;
}

.pt_issue_note .issuefoot .textcontrols a.promoteissue:hover {
	background: url(https://forum.developpez.be/images/buttons/project-hover.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0px  ;
}

.pt_issue_note .issuefoot .textcontrols a.reportissue {
	background: url(https://forum.developpez.be/images/buttons/report-40b.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_note .issuefoot .textcontrols a.reportissue:hover {
	background: url(https://forum.developpez.be/images/buttons/report-40b-hover.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_note .issuefoot .textcontrols a.ipissue {
	background: url(https://forum.developpez.be/images/buttons/ip-40b.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_note .issuefoot .textcontrols a.ipissue:hover {
	background: url(https://forum.developpez.be/images/buttons/ip-40b-hover.png) no-repeat scroll left center transparent;
	padding-left: 20px;
	border: 0 solid #A8A8A8;
}

.pt_issue_note .issuefoot .textcontrols a img {
	left: 3px;
	position: absolute;
	top: 2px;
}

.pt_issue_note img.author_avatar
{
	float: left;
	margin-right: 5px;
}

/* Milestones */
.pt_milestone {
	margin-top: 5px;
	display: inline-block;
	width: 100%;
}

.pt_milestone .blockrow .milestone_date {
	float: right;
}

.pt_milestone .blockrow hr {
	border: 0px;
	height: 1px;
	color: #E1E1D1;
	background-color: #E1E1D1;
}

.pt_milestone .blockrow .milestone_total {
	margin-bottom: 0.75em;
}

.pt_milestone .blockrow .milestone_total .milestone_total_content {
	margin-right: 20px;
}

.pt_milestone .blockrow .milestone_table {
	width: 400px;
	height: 15px;
	color: #000000;
	border: 1px solid #0B198C;
}

.pt_milestone .blockrow .milestone_color {
	height: 15px;
	background-color: #B0F0B0;
}

.pt_milestone .blockrow .milestone_percent {
	width: 400px;
	text-align: right;
}

/* Search */
.pt_search_checkboxes
{
	float: none;
	margin-left: 212px;
	height: 150px;
	overflow: auto;
}

/* Popup */
.above_project_controls .projectpopups a.firstunread {
	padding-top: 0.2em;
	padding-bottom: 0.2em;
	border: 0;
}

.pt_popup {
	clear: left;
	display: inline-block;
	width: 100%;
}

.pt_popup .pagenav {
	float: right;
}

.pt_popup .newcontent_textcontrol {
	margin-bottom: 10px;
	margin-top: -20px;
}

.pt_popup .pagenav_button {
	margin-top: 0;
}

/* Issue list popups */
.pt_issuepopup .navpopupmenu.popupmenu.nohovermenu {
	float: left;
	text-align: left;
	margin-top: 12px;
	margin-bottom: 7px;
	margin-left: 0px;
}

.pt_issuepopup .navpopupmenu.popupmenu.nohovermenu a.popupctrl span.ctrlcontainer {
	background: transparent url(https://forum.developpez.be/images/misc/black_downward_arrow.png) no-repeat center right;
	padding-right: 15px;
	padding-left: 0;
}

.pt_issuepopup .navpopupbody {
	overflow: visible;
}

.pt_issuepopup .pagenav {
	margin-bottom: 5px;
}

.pt_issuepopup .below_threadlist {
	padding-bottom: 38px;
}

.popupbody li.searchlinks {
	padding-top: 25px;
}

.popupbody li input.searchbox {
	width: auto;
}

/* Patch */
.chunk_lines {
	color: #000000;
	padding: 0px;
}

.chunk_container {
	padding-left: 0px;
	padding-right: 0px;
	background-color: #ffffff;
}

.line_counter {
	padding-left: 2px;
	color: #707070;
}

.patch_line_added, .patch_line_context, .patch_line_removed {
	margin: 0px;
	margin-left: 3px;
	padding: 0px;
	padding-left: 2px;
	padding-right: 2px;
}

.patch_line_added {
	background-color: #d0ffd0;
}

.patch_line_context {
	background-color: #ffffff;
}

.patch_line_removed {
	background-color: #ffc0c0;
}

.patch_key_box {
	width: 8px;
	height: 8px;
	border: 1px solid #909090;
	margin: 0px;
	padding: 0px;
}

/* List builder box */
.pt_listbuilder_box {
	padding: 5px;
}

/* Search */
#ptsearch_tag_col1, #ptsearch_tag_col2, #ptsearch_assigneduser_col1, #ptsearch_assigneduser_col2, #ptsearch_issuestatusid, #ptsearch_projectid, #ptsearch_milestoneid, #ptsearch_projectcategoryid {
	list-style: none;
	padding: 0px;
	margin: 0px;
}

#ptsearch_assigneduser_col1, #ptsearch_tag_col1 {
	width: 47%;
}

#ptsearch_assigneduser_col2, #ptsearch_tag_col2 {
	float: right;
	width: 47%;
}

div.checkbox_multiselect {
	height: 150px;
	overflow: auto;
	padding: 6px;
	background-color: #FFFFFF;
}

/* Subscriptions management */
#usercp_content .pt_issuelist {
	margin-top: 0;
}

.pt_issuelist .pt_issuelist_foot {
	clear: both;
	display: block;
	height: 2em;
	padding-top: 1em;
	position: relative;
	width: 100%;
}

/* Projects listings in a dropdown */
.pt_listprojects {
	clear: both;
	display: block;
	float: left;
	left: 0;
	margin-bottom: 5px;
	position: relative;
	width: 100%;
}

.pt_listprojects .menu {
	float: right;
	width: 300px;
}

.pt_listprojects .menuissuelist {
	float: right;
}

.pt_listprojects .marginissue1 {
	margin-top: -38px;
}

.pt_listprojects .marginissue2 {
	margin-top: -10px;
	margin-bottom: 5px;
}

/* Post made as issue */
.postbitlegacy .title .ptlink, .postbit .posttitle .ptlink {
	color: #4e4e4e;
	font-style: italic;
	font-weight: normal;
	font-size: 11px;
}

.postbitlegacy .title .ptseparator, .postbit .posttitle .ptseparator {
	display: inline-block;
	color: #4e4e4e;
	font-style: italic;
	font-weight: normal;
	font-size: 11px;
}

.postbitlegacy .postfoot .textcontrols a.promoteissue,
.postbit .postfoot .textcontrols a.promoteissue {
	background: url(https://forum.developpez.be/images/buttons/project.png) no-repeat #e9e9e9 left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px solid #a8a8a8;
}

.postbitlegacy .postfoot .textcontrols a.promoteissue:hover, .postbit .postfoot .textcontrols a.promoteissue:hover  {
	background: url(https://forum.developpez.be/images/buttons/project-hover.png) no-repeat  left;
	padding: 0px 0px 0px 0px;
	padding-left: 20px;
	border: 0px  ;
}

/* Magic Selects */
/* Issue #106 */
/*.vB_MagicSelect, .vB_MagicSelect_hover, .vB_MagicSelect_preload {
	white-space: nowrap;
}*/

.vB_MagicSelectCursor {
	cursor: default;
}

.vB_MagicSelect {
	border: none;
	padding: 1px 0px 0px 0px;
	background-color: transparent;
}

.vB_MagicSelect_margin {
	margin: 0px 0px 2px 0px;
}

.vB_MagicSelect_hover {
	border: 1px solid rgb(34, 84, 177);
	background-color: white;
	margin: 1px -1px 1px -1px;
}

.vB_MagicSelect span, .vB_MagicSelect_hover span {
	display: inline-block;
}

.vB_MagicSelect img, .vB_MagicSelect_hover img {
	vertical-align: middle;
}

.vB_MagicSelect .vB_MagicSelect_button {
	background-color: transparent;
}

.vB_MagicSelect_hover .vB_MagicSelect_button {
	background-color: rgb(215, 231, 253);
}

.vB_MagicSelect_preload {
	border: none;
	padding: 4px 0px;
	background-color: transparent;
}

.vB_MagicSelect_wrappable {
	padding: 0px;
	white-space: normal;
}

/* Activity stream specific values */
#activitylist li.activitybit.project_issuenote ul {
	padding-left: 85px;
} 

/* Overwrite some values */
.above_threadlist .threadpagenav {
	bottom: 5px;
}

.pt_project .actionbuttons .group {
	padding: 10px 0 5px 0;
}

.pagination span.prev_next a, .pagination span.first_last a {
	top: -1px;
}

a.firstunread {
	padding-left: 1px;
	padding-right: 1px;
}

/* Old vB3 Project Tools CSS definitions - we will keep these definitions only */
.smallfont {
	font-size: 11px;
}

.bigtext {
	font-size: 14px;
}

.boldtext, strong {
	font-weight: bold;
}

legend {
	color: #3e3e3e;
}

/* Fix for http://www.vbulletin.org/forum/showthread.php?t=249025 */
.footer_copyright, .footer_morecopyright, .footer_time {
	color: rgb(102, 102, 102);
}


/* CSS Document */
/* TOOLS MENU */
/* convert to stylevars pls */

.toolsmenu {
	background: #e9e9e9 url(images/buttons/newbtn_middle.png) repeat-x  ;
	width: 100%;
	display: block;
	border: 1px solid #cecece;
	float: left;
	clear: both;
	margin: 0.5em 0;
}

.toolsmenu div {
	text-align: right;
	color: #4e4e4e;
	width: 100%;
	clear: both;
	float: left;
}

.toolsmenu h1 {
	font-size:14px;
	font-weight:bold;
	margin-top: 0.25em;
	text-align: left;
	display: inline;
	float: left;
	margin-left: 10px;
}

.toolsmenu h1 a {
	color: #4e4e4e;
}

.toolsmenu ul {
	padding: 5px 0;
	float: right;
	margin-right: 10px;
}

.toolsmenu .nopopupgroup li {
	float: left;
	margin-left: 10px;
}

.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .nopopupgroup li a {
	font-size: 11px;
	color: #4e4e4e;
	display:block;
	_display:inline;
	float: left;
	clear: right;
	padding: 0.2em 0.4em;
}

.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover .popupctrl a.popupctrl.active {
	border: 0;
	color: #4e4e4e;
	padding-right: 15px;
}

.toolsmenu li {
	position: relative;
	display:block;
	clear: right;
}

.toolsmenu .popupgroup ul {
	text-align: left;
	float: left;
}

.toolsmenu .popupgroup .popupbody {
	padding:2px;
}

.toolsmenu .menuimage, .toolsmenu li a.menuimage {
	padding-left: 20px;
	color: #4e4e4e;
}

.toolsmenu .nopopupgroup li a, .toolsmenu .menuimage a.popupctrl {
	color: #4e4e4e;
        font-weight: bold;
}

.toolsmenu .nopopupgroup li a:hover, .toolsmenu .menuimage a.popupctrl:hover {
	color: #417394;
}

.menusearch.popupmenu .popupbody {
	min-width:240px;
	max-width:240px;
	font-size: 11px;
	left: -100px;
}

.menusearch input.button {
	float: right;
	top: 0;
}

.menusearch .submitoptions {
	width: 50%;
	float: left;
	text-align: left;
	clear: right;
}

.menusearch .formsubmit .advancedsearchlink {
	width: 50%;
	float: left;
	clear: right;
}

.toolsmenu .popupgroup .popupbody a, .toolsmenu .popupgroup .popupbody li label {
	font-size: 11px;
}

.toolsmenu .popupgroup .popupbody li {
	width: 100%;
}

.toolsmenu .popupgroup .popupbody form ul  {
	width: 100%;
}