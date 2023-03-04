/** Path: plugin mod_forum .' **/
/**
 * Structure of a forum post
 * div.forumpost(.read.unread)
 *     div.header.row
 *         div.picture.left
 *         div.topic(.starter)
 *             div.subject
 *             div.author
 *     div.row
 *         div.side.left
 *         div.content-mask
 *             div.content
 *                 div.attachments
 *                 div.posting(.shortenedpost|.fullpost)
 *                     // message
 *                 div.attachedimages
 *                     // attachedimages
 *     div.row
 *         div.left
 *         div.options
 *             div.commands
 *             div.post-word-count
 *             div.forum-post-rating
 *             div.link
 *             div.footer
 */

.forumpost {
    display: block;
    position: relative;
    margin: 0 0 1em 0;
    padding: 0;
    border: 1px solid #000;
    max-width: 100%;
}

.forumpost .row {
    width: 100%;
    position: relative;
}

.forumpost .row .left {
    float: left;
    width: 43px;
    overflow: hidden;
}

.forumpost .row .left .grouppictures a {
    text-align: center;
    display: block;
    margin: 6px 2px 0 2px;
}

.forumpost .row .left .grouppicture {
    width: 20px;
    height: 20px;
}

.forumpost .row .topic,
.forumpost .row .content-mask,
.forumpost .row .options {
    margin-left: 43px;
}

.forumpost .picture img {
    margin: 4px;
}

.forumpost .options .commands,
.forumpost .content .attachments,
.forumpost .options .footer,
.forumpost .options .link {
    text-align: right;
}

.forumpost .options .forum-post-rating {
    float: left;
}

.forumpost .content .posting {
    overflow: auto;
    max-width: 100%;
}

.forumpost .content .attachedimages img {
    max-width: 100%;
}

.forumpost .post-word-count {
    font-size: .85em;
    font-style: italic;
}

.forumpost .shortenedpost .post-word-count {
    display: inline;
    padding: 0 .3em;
}

.path-mod-forum .forumolddiscuss,
#page-mod-forum-search .c0 {
    text-align: right;
}

.path-mod-forum .indent {
    margin-left: 3%;
}

.path-mod-forum .forumheaderlist {
    width: 100%;
    border-width: 1px;
    border-style: solid;
    border-collapse: separate;
    margin-top: 10px;
}

.path-mod-forum .forumheaderlist td {
    border-width: 1px 0 0 1px;
    border-style: solid;
}

.path-mod-forum .forumheaderlist th.header.replies .iconsmall {
    margin: 0 .3em;
}

.path-mod-forum .forumheaderlist .discussion .starter {
    vertical-align: middle;
}

.path-mod-forum .forumheaderlist .discussion .pinned img {
    padding: 5px;
}

.path-mod-forum .forumheaderlist .discussion .lastpost {
    white-space: nowrap;
    text-align: right;
}

.path-mod-forum .forumheaderlist .replies {
    white-space: nowrap;
}

.path-mod-forum .forumheaderlist thead .discussionsubscription {
    text-align: center;
}

/** Styles for subscribers.php */
#page-mod-forum-subscribers .subscriberdiv,
#page-mod-forum-subscribers .subscribertable {
    width: 100%;
    vertical-align: top;
}

#page-mod-forum-subscribers .subscribertable tr td {
    vertical-align: top;
}

#page-mod-forum-subscribers .subscribertable tr td.actions {
    width: 16%;
    padding-top: 3em;
}

#page-mod-forum-subscribers .subscribertable tr td.actions .actionbutton {
    margin: 0.3em 0;
    padding: 0.5em 0;
    width: 100%;
}

#page-mod-forum-subscribers .subscribertable tr td.existing,
#page-mod-forum-subscribers .subscribertable tr td.potential {
    width: 42%;
}

/** Styles for discuss.php **/
#page-mod-forum-discuss .discussioncontrols {
    width: 100%;
    margin: 5px;
}

#page-mod-forum-discuss .discussioncontrols .controlscontainer {
    width: 100%;
    float: right;
}

#page-mod-forum-discuss .discussioncontrols .discussioncontrol {
    float: left;
}

#page-mod-forum-discuss .discussioncontrol.exporttoportfolio {
    text-align: left;
}

#page-mod-forum-discuss .discussioncontrol.displaymode {
    padding-right: 10px;
}

#page-mod-forum-discuss .discussioncontrol.movediscussion {
    padding-right: 10px;
}

/** Styles for view.php **/
#page-mod-forum-view .forumaddnew {
    margin-bottom: 20px;
}

#page-mod-forum-view .groupmenu {
    float: left;
    text-align: left;
    white-space: nowrap;
}

#page-mod-forum-index .subscription,
#page-mod-forum-view .subscription {
    float: right;
    text-align: right;
    white-space: nowrap;
    margin: 5px 0;
}

.discussion-list .userpicture,
.discussion-list .grouppicture {
    height: 35px;
    width: 35px;
}

/** Styles for search.php */
#page-mod-forum-search .introcontent {
    padding: 15px;
    font-weight: bold;
}

.path-mod-forum span.unread a:first-child {
    padding-right: 10px;
}

.path-mod-forum span.unread img {
    margin-left: 5px;
}

/** Unknown Styles ??? */
#email .unsubscribelink {
    margin-top: 20px;
}

/* Forumpost unread
-------------------------*/
.forumpost.unread .row.header,
.path-course-view .unread,
span.unread {
    background-color: #ffd;
}

.forumpost.unread .row.header {
    border-bottom: 1px solid #ddd;
}

/* Forumpost hash anchor target */
.path-mod-forum :target > .forumpost:before {
    display: block;
    content: '';
    width: 4px;
    position: absolute;
    background: #0070a8;
    left: -1px;
    top: -1px;
    bottom: -1px;
}

/* Discussion navigation */
.path-mod-forum .discussion-nav {
    margin: .5em 0;
}

.path-mod-forum .discussion-nav ul {
    margin: 0;
    list-style: none;
    padding-left: 0;
}

.path-mod-forum .discussion-nav .next-discussion {
    float: right;
}

.path-mod-forum .discussion-nav .prev-discussion {
    float: left;
}

.path-mod-forum .preload-subscribe {
    background: url(/theme/image.php?theme=classic&component=mod_forum&image=t%2Fsubscribed) no-repeat -9999px -9999px;
}

.path-mod-forum .preload-unsubscribe {
    background: url(/theme/image.php?theme=classic&component=mod_forum&image=t%2Funsubscribed) no-repeat -9999px -9999px;
}

.path-mod-forum .discussionsubscription,
.path-mod-forum .discussion-settings-menu,
.path-mod-forum .discussionsubscription {
    margin-top: -10px;
    text-align: right;
    margin-bottom: 10px;
}

.path-mod-forum .discussionsubscription > a > img,
.path-mod-forum .discussionlock > a > img,
.path-mod-forum .favourite-discussion > a > img,
.path-mod-forum .discussion-settings-menu > a > img {
    width: 12px;
    padding: 0 4px;
}

#page-mod-forum-view img.timedpost {
    margin-right: 5px;
}

.path-mod-forum article .nav .nav-link:first-of-type {
    margin-left: auto;
}
.path-mod-forum.dir-rtl article .nav .nav-link:first-of-type {
    margin-left: 0;
    margin-right: auto;
}

.path-mod-forum article .nav .nav-link + .nav-link {
    border-left: 1px solid #ddd;
}

.privatereplyinfo {
    font-size: 80%;
}

.forum-post-container:focus {
    outline: 0;
}

/* This style is copied directly from the Bootstrap reboot file which adds button outline */
/* stylelint-disable declaration-block-no-duplicate-properties */
.post-actions .btn:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
}

.forum-post-container:focus > .focus-target {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
}
/* stylelint-enable declaration-block-no-duplicate-properties */

/* Forum grading non striked through line */
.hr-sect {
    display: flex;
    flex-basis: 100%;
    font-weight: bold;
    align-items: center;
    margin: 8px 0;
}
.hr-sect::before,
.hr-sect::after {
    content: "";
    flex-grow: 1;
    background: rgba(0, 0, 0, 0.35);
    height: 1px;
    font-size: 0;
    line-height: 0;
}
.hr-sect::before {
    margin-right: 15px;
}

.hr-sect::after {
    margin-left: 15px;
}


