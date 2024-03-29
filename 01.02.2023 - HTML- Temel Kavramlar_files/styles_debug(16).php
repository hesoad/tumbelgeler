/** Path: plugin mod_bigbluebuttonbn .' **/
@charset "UTF-8";

/* bigbluebuttonbn resources */
.recording-thumbnail {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 0 0 0 0;
    transition: transform .2s; /* Animation */
    width: 113px;
    height: 64px;
}

.recording-thumbnail:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    transform: scale(2.0); /* (200% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    -moz-transform: scale(2.0); /* Firefox */
    -webkit-transform: scale(2.0); /* Safari and Chrome */
    -o-transform: scale(2.0); /* Opera */
    position: relative;
    display: block;
    z-index: 999;
}

.fa-disabled {
    cursor: not-allowed;
    opacity: 0.2;
}

.fa-invisible {
    cursor: not-allowed;
    visibility: hidden;
}

.bbb_index_form {
    display: inline-block;
}


