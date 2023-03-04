/** Path: plugin block_private_files .' **/
/* Rule so that the table tree view works with word-wrap: break-word. */
.block_private_files .content table {
    table-layout: fixed;
    width: 100%;
}

.block_private_files .content .footer {
    padding: 10px 0 0;
    margin-top: .5em;
}

.block_private_files ul[role="tree"] {
    margin: 0;
    padding: 0;
}
.block_private_files ul,
.block_private_files li {
    list-style: none;
}

.block_private_files [role="treeitem"] {
    padding-left: 22px;
    cursor: pointer;
}

.block_private_files [role="treeitem"] p {
    margin-bottom: 0;
}

.block_private_files [role="treeitem"][aria-expanded] {
    padding-left: 0;
}

.block_private_files [role="treeitem"][aria-expanded="false"] > p::before {
    /*rtl:remove*/
    content: url('/theme/image.php?theme=classic&component=core&image=t%2Fcollapsed');
    /*rtl:raw:
        content: url('/theme/image.php?theme=classic&component=core&image=t%2Fcollapsed_rtl');
    */
    vertical-align: sub;
    margin-right: 5px;
}

.block_private_files [role="treeitem"][aria-expanded="true"] > p::before {
    content: url('/theme/image.php?theme=classic&component=core&image=t%2Fexpanded');
    vertical-align: sub;
    margin-right: 5px;
}

.block_private_files [role="treeitem"]:not([aria-expanded]) {
    background-image:
        repeating-linear-gradient(
            to right,
            rgba(0, 0, 0, .5) 0,
            rgba(0, 0, 0, .5) 1px,
            rgba(255, 255, 255, 0) 1px,
            rgba(255, 255, 255, 0) 2px
        ),
        repeating-linear-gradient(
            to top,
            rgba(0, 0, 0, 0.5) 0,
            rgba(0, 0, 0, 0.5) 1px,
            rgba(255, 255, 255, 0) 1px,
            rgba(255, 255, 255, 0) 2px
        );
    background-repeat: no-repeat, no-repeat;
    /*rtl:remove*/
    background-position: left 10px top 50%, left 8px top 0;
    /*rtl:raw:
        background-position: right 10px top 50%, right 8px top 0;
    */
    background-size: 11px 1px, 1px 100%;
}

.block_private_files [role="treeitem"]:not([aria-expanded]):last-child {
    background-size: 11px 1px, 1px 50%;
}

.block_private_files [role="group"] {
    background-image:
        repeating-linear-gradient(
            to top,
            rgba(0, 0, 0, 0.5) 0,
            rgba(0, 0, 0, 0.5) 1px,
            rgba(255, 255, 255, 0) 1px,
            rgba(255, 255, 255, 0) 2px
        );
    background-repeat: no-repeat;
    background-position: left 8px top 100%;
    background-size: 1px 100%;
    margin-left: 0;
}

.block_private_files [aria-hidden="true"]:not(.icon) {
    display: none;
}


