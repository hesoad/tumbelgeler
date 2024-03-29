/** Path: plugin qtype_ddmarker .' **/
.que.ddmarker .qtext {
    margin-bottom: 0.5em;
    display: block;
}

.que.ddmarker .droparea {
    display: inline-block;
    position: relative;
}

.que.ddmarker .droparea .dropzones,
.que.ddmarker .droparea .markertexts {
    position: absolute;
    top: 0;
    left: 0;
}

.que.ddmarker .draghomes .marker,
.que.ddmarker .droparea .marker {
    vertical-align: top;
    cursor: move;
}

.que.ddmarker .draghomes.readonly .marker,
.que.ddmarker .droparea.readonly .marker {
    cursor: auto;
}

.que.ddmarker .droparea .marker {
    position: absolute;
}

.que.ddmarker .draghomes .marker {
    position: relative;
    display: inline-block;
    margin: 10px;
}

.que.ddmarker .draghomes .marker.dragplaceholder {
    display: none;
}

.que.ddmarker .draghomes .marker.dragplaceholder.active {
    visibility: hidden;
    display: inline-block;
}

.que.ddmarker div.ddarea,
form.mform fieldset#id_previewareaheader div.ddarea {
    text-align: center;
}

form.mform fieldset#id_previewareaheader div.ddarea .markertexts {
    min-height: 80px;
}

.que.ddmarker .dropbackground,
form.mform fieldset#id_previewareaheader .dropbackground {
    margin: 0 auto;
    border: 1px solid black;
}

form.mform fieldset#id_previewareaheader .dropbackground {
    max-width: none;
}

.que.ddmarker div.dragitems div.draghome,
.que.ddmarker div.dragitems div.dragitem,
form.mform fieldset#id_previewareaheader div.draghome,
form.mform fieldset#id_previewareaheader div.drag {
    font: 13px/1.231 arial, helvetica, clean, sans-serif;
}

.que.ddmarker .droparea .marker span.markertext,
.que.ddmarker .draghomes .marker span.markertext,
.que.ddmarker div.markertexts span.markertext,
form.mform fieldset#id_previewareaheader div.markertexts span.markertext {
    margin: 0 5px;
    z-index: 3;
    background-color: white;
    border: 2px solid black;
    padding: 5px;
    display: inline-block;
    zoom: 1;
    border-radius: 10px;
    color: black;
    opacity: 0.6;
}

.que.ddmarker .droparea .marker span.markertext,
.que.ddmarker .draghomes .marker span.markertext {
    white-space: nowrap;
}

.que.ddmarker div.markertexts span.markertext {
    z-index: 2;
    background-color: yellow;
    border: 2px solid khaki;
    position: absolute;
    white-space: nowrap;
}

.que.ddmarker span.wrongpart {
    background-color: yellow;
    border: 2px solid khaki;
    padding: 5px;
    border-radius: 10px;
    opacity: 0.6;
    margin: 5px;
    display: inline-block;
}

.que.ddmarker .droparea .marker img.target,
.que.ddmarker .draghomes .marker img.target {
    position: absolute;
    left: -7px; /* This must be half the size of the target image, minus 0.5. */
    top: -7px;  /* In other words, this works for a 15x15 cross-hair. */
}

.que.ddmarker div.dragitems div.draghome img.target {
    display: none;
}

.que.ddmarker .marker.beingdragged {
    position: absolute;
}

.que.ddmarker .marker.beingdragged span.markertext {
    z-index: 3;
    box-shadow: 3px 3px 4px #000;
}

/* Styles for the preview on the editing form. */
.que.ddmarker .dropzone .shape {
    fill: #fff;
    fill-opacity: 0.5;
    stroke: black;
    stroke-width: 1;
}
.que.ddmarker .dropzone.active .shape {
    stroke-width: 2;
}
.que.ddmarker .dropzone.color0 .shape {
    fill: #fff;
}
.que.ddmarker .dropzone.color1 .shape {
    fill: #b0c4de;
}
.que.ddmarker .dropzone.color2 .shape {
    fill: #dcdcdc;
}
.que.ddmarker .dropzone.color3 .shape {
    fill: #d8bfd8;
}
.que.ddmarker .dropzone.color4 .shape {
    fill: #87cefa;
}
.que.ddmarker .dropzone.color5 .shape {
    fill: #daa520;
}
.que.ddmarker .dropzone.color6 .shape {
    fill: #ffd700;
}
.que.ddmarker .dropzone.color7 .shape {
    fill: #f0e68c;
}

.que.ddmarker .dropzone .shapeLabel {
    text-anchor: middle;
}

.que.ddmarker .dropzone .handle {
    fill: #fff;
    fill-opacity: 0.1; /* Need a small amount of opacity of the handle can't be grabbed. */
    stroke-width: 1;
    display: none;
    cursor: move;
}
.que.ddmarker .dropzone .handle.move {
    stroke: #800;
}
.que.ddmarker .dropzone .handle.edit {
    stroke: #008;
}
.que.ddmarker .dropzone.active .handle {
    display: inherit;
}

/* Editing form. Style repeated elements*/
/*Top*/
body#page-question-type-ddmarker div[id^=fitem_id_][id*=hint_] {
    background: #eee;
    margin-top: 0;
    margin-bottom: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #bbb;
    border-bottom: 0;
}

body#page-question-type-ddmarker div[id^=fitem_id_][id*=hint_] .fitemtitle {
    font-weight: bold;
}
/* Middle */
body#page-question-type-ddmarker div[id^=fitem_id_][id*=hintoptions_],
body#page-question-type-ddmarker div[id^=fitem_id_][id*=hintshownumcorrect_] {
    background: #eee;
    margin-bottom: 0;
    margin-top: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #bbb;
    border-top: 0;
    border-bottom: 0;
}
/* Bottom */
body#page-question-type-ddmarker div[id^=fitem_id_][id*=hintclearwrong_] {
    background: #eee;
    margin-bottom: 2em;
    margin-top: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #bbb;
    border-top: 0;
}

body#page-question-type-ddmarker #fitem_id_penalty {
    margin-bottom: 2em;
}

body#page-question-type-ddmarker .ddarea.que.ddmarker {
    overflow-y: scroll;
}


