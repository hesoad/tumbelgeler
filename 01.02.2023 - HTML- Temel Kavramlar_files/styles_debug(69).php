/** Path: plugin filter_mediaplugin .' **/
/**
 * Filters
 */
.mediaplugin {
    display: block;
    margin-top: 5px;
    margin-bottom: 5px;
    text-align: center;
}

.mediaplugin,
.mediaplugin video {
    /* Make videos as wide as possible without being wider than their containers */
    width: 100%;
    max-width: 100%;
}

.mediaplugin > div {
    margin: auto;
}

/* This is needed to display videos in an adequate size and without too much space
   withing the specific mod assign table views. */
.path-mod-assign .gradingtable .mediaplugin,
.path-mod-assign .submissionsummarytable .mediaplugin {
    width: 400px;
    height: auto;
}

/* Make media plugin behave properly in mod summaries and labels */
.mod-indent-outer .mediaplugin {
    display: table-cell;
}


