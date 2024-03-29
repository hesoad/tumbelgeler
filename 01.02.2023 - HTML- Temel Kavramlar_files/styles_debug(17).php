/** Path: plugin mod_book .' **/
.path-mod-book .navtop img.icon,
.path-mod-book .navbottom img.icon {
    margin-right: 4px;
    margin-left: 4px;
    border: 0;
    padding: 0;
}

.path-mod-book .navbottom,
.path-mod-book .navtop {
    text-align: right;
}

.path-mod-book .navtop {
    margin-bottom: 0.5em;
}

.path-mod-book .navbottom {
    margin-top: 0.5em;
}

/* == Fake toc block == */
.path-mod-book .book_toc .action-list img.smallicon {
    margin: 0 3px;
}

/* toc style INDENTED*/
.path-mod-book .book_toc ul {
    display: flex;
    flex-direction: column;
}
.path-mod-book .book_toc li {
    flex: 1 1 100%;
}
.path-mod-book .book_toc_indented > ul {
    margin-left: 0;
    padding-left: 0;
}

.path-mod-book .book_toc_indented li {
    list-style: none;
}

/* toc style BULLETED*/
.path-mod-book .book_toc_bullets > ul {
    margin-left: 0;
    padding-left: 1.3rem;
}
.path-mod-book .book_toc_bullets li {
    list-style: disc;
}

/* toc style NUMBERED*/
.path-mod-book .book_toc_numbered > ul {
    margin-left: 0;
    padding-left: 0;
}

.path-mod-book .book_toc_numbered li {
    list-style: none;
}

/* toc style NONE*/
.path-mod-book .book_toc_none ul {
    margin-left: 0;
    padding-left: 0;
}

.path-mod-book .book_toc_none li {
    list-style: none;
}

/* Text style links */
.navtop.navtext .chaptername,
.navbottom.navtext .chaptername {
    font-weight: bolder;
}

.navtop.navtext a,
.navbottom.navtext a {
    display: inline-block;
    max-width: 45%;
}

.navtop.navtext a.bookprev,
.navbottom.navtext a.bookprev {
    float: left;
    text-align: left;
}

@media (max-width: 480px) {
    .path-mod-book .navbottom,
    .path-mod-book .navtop {
        text-align: center;
    }

    .navtop.navtext a,
    .navbottom.navtext a {
        display: block;
        max-width: 100%;
        margin: auto;
    }

    .navtop.navtext a.bookprev,
    .navbottom.navtext a.bookprev {
        float: none;
    }
}


