/** Path: plugin mod_videotime .' **/
.course-content li.section li.activity.videotime ul.nav.nav-tabs {
    list-style: none;
}

.videotime-small-view {
    display: none;
}

div.videotimetab-resize {
    min-width: 16.6667%;
    max-width: 83.3333%;
}

@media (max-width: 768px) {
    .videotime-small-view {
        display: block;
    }
    .videotimetab-resize-handle,
    .vimeo-video-description,
    .videotime-large-view {
        display: none;
    }
    div.videotimetab-resize {
        width: 100%;
    }
}

.videotimetab-resize-handle {
    width: 5px;
    cursor: w-resize;
}
.videotimetab-resize-handle:hover {
    background: grey;
}
.videotime-tab-instance-cover {
    position: absolute;
    display: none;
}

.videotime-highlight {
    font-weight: bold;
}

.videotime-size-3,
.videotime-size-6,
.videotime-size-9 {
    position: relative;
}

.videotime-size-3 {
    width: 25%;
}
.videotime-size-6 {
    width: 50%;
}
.videotime-size-9 {
    width: 75%;
}

.videotime-tab-instance {
    width: 100%;
}

.modtype_videotime.label_mode,
.modtype_videotime.label_mode .mod-indent-outer,
.modtype_videotime.label_mode .contentwithoutlink {
    display: block !important; /* stylelint-disable-line declaration-no-important */
}

/** Compatible with non-Bootstrap 4 themes **/
.path-mod-videotime .btn-dark {
    color: white !important; /* stylelint-disable-line declaration-no-important */
    background-color: #373a3c;
    border-color: #373a3c;
}

.path-mod-videotime .modal-xl {
    max-width: 95% !important; /* stylelint-disable-line declaration-no-important */
}

.path-mod-videotime .badge-dark {
    background-color: #373a3c !important; /* stylelint-disable-line declaration-no-important */
}

.path-mod-videotime .img-hover img {
    -webkit-transition: all .3s ease; /* Safari and Chrome */
    -moz-transition: all .3s ease; /* Firefox */
    -o-transition: all .3s ease; /* IE 9 */
    -ms-transition: all .3s ease; /* Opera */
    transition: all .3s ease;
    position: relative;
}

.path-mod-videotime .img-hover img:hover {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform: translateZ(0) scale(5) translate(22px, 0); /* Safari and Chrome */
    -moz-transform: translateZ(0) scale(5) translate(22px, 0); /* Firefox */
    -ms-transform: translateZ(0) scale(5) translate(22px, 0); /* IE 9 */
    -o-transform: translateZ(0) scale(5) translate(22px, 0); /* Opera */
    transform: translateZ(0) scale(5) translate(22px, 0);
    z-index: 999;
}

.path-mod-videotime .video-search {
    max-width: 380px;
}

.path-mod-videotime .cursor-pointer {
    cursor: pointer;
}

.activity.videotime .video-image-preview {
    position: relative;
    display: inline-block;
}

.activity.videotime .video-image-preview .video-duration {
    position: absolute;
    right: 10px;
    bottom: 15px;
}

.activity.videotime .video-image-preview .video-progress {
    border: none;
    box-shadow: none;
    border-radius: 0;
    height: 10px;
}

.activity.videotime.preview_mode .actions {
    display: none;
}

body.editing .activity.videotime.preview_mode .actions {
    display: block;
}

.path-course-view li.activity.videotime.preview_mode > div {
    padding: 0;
}

.path-course-view li.activity.videotime.preview_mode {
    clear: none;
    float: left;
}


.path-course-view li.activity.videotime.preview_mode.previewfull {
    float: none;
}

body.editing.path-course-view li.activity.videotime.preview_mode {
    width: 100%;
}

.path-course-view li.activity.videotime.preview_mode .panel {
    min-height: 440px;
}

/** IE backwards compatibility **/
body.ie .video-image-preview .img-responsive {
    width: 100%;
    max-height: 500px;
}

/* Totara styling */
[data-action=jump-page] {
    display: inline;
}

/* Select2 styles */
.select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
}

.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 28px;
    user-select: none;
    -webkit-user-select: none;
}

.select2-container .select2-selection--single .select2-selection__rendered {
    display: block;
    padding-left: 8px;
    padding-right: 20px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.select2-container .select2-selection--single .select2-selection__clear {
    position: relative;
}

.select2-container[dir="rtl"] .select2-selection--single .select2-selection__rendered {
    padding-right: 8px;
    padding-left: 20px;
}

.select2-container .select2-selection--multiple {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    min-height: 32px;
    user-select: none;
    -webkit-user-select: none;
}

.select2-container .select2-selection--multiple .select2-selection__rendered {
    display: inline-block;
    overflow: hidden;
    padding-left: 8px;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.select2-container .select2-search--inline {
    float: left;
}

.select2-container .select2-search--inline .select2-search__field {
    box-sizing: border-box;
    border: none;
    font-size: 100%;
    margin-top: 5px;
    padding: 0;
}

.select2-container .select2-search--inline .select2-search__field::-webkit-search-cancel-button {
    -webkit-appearance: none;
}

.select2-dropdown {
    background-color: white;
    border: 1px solid #aaa;
    border-radius: 4px;
    box-sizing: border-box;
    display: block;
    position: absolute;
    left: -100000px;
    width: 100%;
    z-index: 1051;
}

.select2-results {
    display: block;
}

.select2-results__options {
    list-style: none;
    margin: 0;
    padding: 0;
}

.select2-results__option {
    padding: 6px;
    user-select: none;
    -webkit-user-select: none;
}

.select2-results__option[aria-selected] {
    cursor: pointer;
}

.select2-container--open .select2-dropdown {
    left: 0;
}

.select2-container--open .select2-dropdown--above {
    border-bottom: none;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.select2-container--open .select2-dropdown--below {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.select2-search--dropdown {
    display: block;
    padding: 4px;
}

.select2-search--dropdown .select2-search__field {
    padding: 4px;
    width: 100%;
    box-sizing: border-box;
}

.select2-search--dropdown .select2-search__field::-webkit-search-cancel-button {
    -webkit-appearance: none;
}

.select2-search--dropdown.select2-search--hide {
    display: none;
}

.select2-close-mask {
    border: 0;
    margin: 0;
    padding: 0;
    display: block;
    position: fixed;
    left: 0;
    top: 0;
    min-height: 100%;
    min-width: 100%;
    height: auto;
    width: auto;
    opacity: 0;
    z-index: 99;
    background-color: #fff;
}

.select2-hidden-accessible {
    border: 0 !important; /* stylelint-disable-line declaration-no-important */
    clip: rect(0 0 0 0) !important; /* stylelint-disable-line declaration-no-important */
    -webkit-clip-path: inset(50%) !important; /* stylelint-disable-line declaration-no-important */
    clip-path: inset(50%) !important; /* stylelint-disable-line declaration-no-important */
    height: 1px !important; /* stylelint-disable-line declaration-no-important */
    overflow: hidden !important; /* stylelint-disable-line declaration-no-important */
    padding: 0 !important; /* stylelint-disable-line declaration-no-important */
    position: absolute !important; /* stylelint-disable-line declaration-no-important */
    width: 1px !important; /* stylelint-disable-line declaration-no-important */
    white-space: nowrap !important; /* stylelint-disable-line declaration-no-important */
}

.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 28px;
}

.select2-container--default .select2-selection--single .select2-selection__clear {
    cursor: pointer;
    float: right;
    font-weight: bold;
}

.select2-container--default .select2-selection--single .select2-selection__placeholder {
    color: #999;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 26px;
    position: absolute;
    top: 1px;
    right: 1px;
    width: 20px;
}

.select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #888 transparent transparent transparent;
    border-style: solid;
    border-width: 5px 4px 0 4px;
    height: 0;
    left: 50%;
    margin-left: -4px;
    margin-top: -2px;
    position: absolute;
    top: 50%;
    width: 0;
}

.select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__clear {
    float: left;
}

.select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__arrow {
    left: 1px;
    right: auto;
}

.select2-container--default.select2-container--disabled .select2-selection--single {
    background-color: #eee;
    cursor: default;
}

.select2-container--default.select2-container--disabled .select2-selection--single .select2-selection__clear {
    display: none;
}

.select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
    border-color: transparent transparent #888 transparent;
    border-width: 0 4px 5px 4px;
}

.select2-container--default .select2-selection--multiple {
    background-color: white;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: text;
}

.select2-container--default .select2-selection--multiple .select2-selection__rendered {
    box-sizing: border-box;
    list-style: none;
    margin: 0;
    padding: 0 5px;
    width: 100%;
}

.select2-container--default .select2-selection--multiple .select2-selection__rendered li {
    list-style: none;
}

.select2-container--default .select2-selection--multiple .select2-selection__clear {
    cursor: pointer;
    float: right;
    font-weight: bold;
    margin-top: 5px;
    margin-right: 10px;
    padding: 1px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #e4e4e4;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: default;
    float: left;
    margin-right: 5px;
    margin-top: 5px;
    padding: 0 5px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    color: #999;
    cursor: pointer;
    display: inline-block;
    font-weight: bold;
    margin-right: 2px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
    color: #333;
}

.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice,
.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-search--inline {
    float: right;
}

.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
    margin-left: 5px;
    margin-right: auto;
}

.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
    margin-left: 2px;
    margin-right: auto;
}

.select2-container--default.select2-container--focus .select2-selection--multiple {
    border: solid black 1px;
    outline: 0;
}

.select2-container--default.select2-container--disabled .select2-selection--multiple {
    background-color: #eee;
    cursor: default;
}

.select2-container--default.select2-container--disabled .select2-selection__choice__remove {
    display: none;
}

.select2-container--default.select2-container--open.select2-container--above .select2-selection--single,
.select2-container--default.select2-container--open.select2-container--above .select2-selection--multiple {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.select2-container--default.select2-container--open.select2-container--below .select2-selection--single,
.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.select2-container--default .select2-search--dropdown .select2-search__field {
    border: 1px solid #aaa;
}

.select2-container--default .select2-search--inline .select2-search__field {
    background: transparent;
    border: none;
    outline: 0;
    box-shadow: none;
    -webkit-appearance: textfield;
}

.select2-container--default .select2-results > .select2-results__options {
    max-height: 200px;
    overflow-y: auto;
}

.select2-container--default .select2-results__option[role=group] {
    padding: 0;
}

.select2-container--default .select2-results__option[aria-disabled=true] {
    color: #999;
}

.select2-container--default .select2-results__option[aria-selected=true] {
    background-color: #ddd;
}

.select2-container--default .select2-results__option .select2-results__option {
    padding-left: 1em;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__group {
    padding-left: 0;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -1em;
    padding-left: 2em;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option
.select2-results__option {
    margin-left: -2em;
    padding-left: 3em;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option
.select2-results__option .select2-results__option {
    margin-left: -3em;
    padding-left: 4em;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option
.select2-results__option .select2-results__option .select2-results__option {
    margin-left: -4em;
    padding-left: 5em;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option
.select2-results__option .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -5em;
    padding-left: 6em;
}

.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #5897fb;
    color: white;
}

.select2-container--default .select2-results__group {
    cursor: default;
    display: block;
    padding: 6px;
}

.select2-container--classic .select2-selection--single {
    background-color: #f7f7f7;
    border: 1px solid #aaa;
    border-radius: 4px;
    outline: 0;
    background-image: linear-gradient(to bottom, #fff 50%, #eee 100%);
    background-repeat: repeat-x;
}

.select2-container--classic .select2-selection--single:focus {
    border: 1px solid #5897fb;
}

.select2-container--classic .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 28px;
}

.select2-container--classic .select2-selection--single .select2-selection__clear {
    cursor: pointer;
    float: right;
    font-weight: bold;
    margin-right: 10px;
}

.select2-container--classic .select2-selection--single .select2-selection__placeholder {
    color: #999;
}

.select2-container--classic .select2-selection--single .select2-selection__arrow {
    background-color: #ddd;
    border: none;
    border-left: 1px solid #aaa;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    height: 26px;
    position: absolute;
    top: 1px;
    right: 1px;
    width: 20px;
    background-image: linear-gradient(to bottom, #eee 50%, #ccc 100%);
    background-repeat: repeat-x;
}

.select2-container--classic .select2-selection--single .select2-selection__arrow b {
    border-color: #888 transparent transparent transparent;
    border-style: solid;
    border-width: 5px 4px 0 4px;
    height: 0;
    left: 50%;
    margin-left: -4px;
    margin-top: -2px;
    position: absolute;
    top: 50%;
    width: 0;
}

.select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__clear {
    float: left;
}

.select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__arrow {
    border: none;
    border-right: 1px solid #aaa;
    border-radius: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    left: 1px;
    right: auto;
}

.select2-container--classic.select2-container--open .select2-selection--single {
    border: 1px solid #5897fb;
}

.select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow {
    background: transparent;
    border: none;
}

.select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow b {
    border-color: transparent transparent #888 transparent;
    border-width: 0 4px 5px 4px;
}

.select2-container--classic.select2-container--open.select2-container--above .select2-selection--single {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-image: linear-gradient(to bottom, #fff 0%, #eee 50%);
    background-repeat: repeat-x;
}

.select2-container--classic.select2-container--open.select2-container--below .select2-selection--single {
    border-bottom: none;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    background-image: linear-gradient(to bottom, #eee 50%, #fff 100%);
    background-repeat: repeat-x;
}

.select2-container--classic .select2-selection--multiple {
    background-color: white;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: text;
    outline: 0;
}

.select2-container--classic .select2-selection--multiple:focus {
    border: 1px solid #5897fb;
}

.select2-container--classic .select2-selection--multiple .select2-selection__rendered {
    list-style: none;
    margin: 0;
    padding: 0 5px;
}

.select2-container--classic .select2-selection--multiple .select2-selection__clear {
    display: none;
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice {
    background-color: #e4e4e4;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: default;
    float: left;
    margin-right: 5px;
    margin-top: 5px;
    padding: 0 5px;
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice__remove {
    color: #888;
    cursor: pointer;
    display: inline-block;
    font-weight: bold;
    margin-right: 2px;
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice__remove:hover {
    color: #555;
}

.select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
    float: right;
    margin-left: 5px;
    margin-right: auto;
}

.select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
    margin-left: 2px;
    margin-right: auto;
}

.select2-container--classic.select2-container--open .select2-selection--multiple {
    border: 1px solid #5897fb;
}

.select2-container--classic.select2-container--open.select2-container--above .select2-selection--multiple {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.select2-container--classic.select2-container--open.select2-container--below .select2-selection--multiple {
    border-bottom: none;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.select2-container--classic .select2-search--dropdown .select2-search__field {
    border: 1px solid #aaa;
    outline: 0;
}

.select2-container--classic .select2-search--inline .select2-search__field {
    outline: 0;
    box-shadow: none;
}

.select2-container--classic .select2-dropdown {
    background-color: #fff;
    border: 1px solid transparent;
}

.select2-container--classic .select2-dropdown--above {
    border-bottom: none;
}

.select2-container--classic .select2-dropdown--below {
    border-top: none;
}

.select2-container--classic .select2-results > .select2-results__options {
    max-height: 200px;
    overflow-y: auto;
}

.select2-container--classic .select2-results__option[role=group] {
    padding: 0;
}

.select2-container--classic .select2-results__option[aria-disabled=true] {
    color: grey;
}

.select2-container--classic .select2-results__option--highlighted[aria-selected] {
    background-color: #3875d7;
    color: #fff;
}

.select2-container--classic .select2-results__group {
    cursor: default;
    display: block;
    padding: 6px;
}

.select2-container--classic.select2-container--open .select2-dropdown {
    border-color: #5897fb;
}


