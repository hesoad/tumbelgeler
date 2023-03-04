/** Path: plugin filter_poodll .' **/

/*
Base Media skin Setting Integration
*/

.poodll_mediarecorderholder_standard {
    position: relative;
}

.poodll_mediarecorderholder_standard .settingsicon {
    position: absolute;
    right: -5px;
    bottom: -5px;

}

.poodll_mediarecorderholder_standard .settingsicon button {
    border: none;
    background: transparent;
}

.poodll_mediarecorderholder_standard .settingsicon button i {
    font-size: 18px !important;
    color: #333;
}

.poodll_mediarecorderholder_standard .settingsicon button:focus {
    border: none;
    background: transparent;
}

.poodll_mediarecorderholder_standard .settingsicon button i:hover {
    cursor: pointer;
}

/*end*/

/*
	Settings Draft
*/
.poodll_dialogue_box .devicesettings_select {
    text-align: left;
}

.poodll_dialogue_box .select_settings_video {
    width: 100%;
    padding: 10px;
}

.devicesettings_select span {
    margin-left: 5px;
}

.devicesettings_select .select_settings_audio {
    width: 100%;
    padding: 10px;
    text-overflow: ellipsis !important;
    white-space: nowrap;
    word-break: break-all;
    word-wrap: break-word;
    overflow: hidden;
    overflow-x: hidden;
    overflow-y: hidden;
}

.select_settings_audio option {
    overflow: hidden;
    overflow-x: hidden;
    overflow-y: hidden;
    width: 100% !important;
    text-overflow: ellipsis !important;
    white-space: nowrap;
    word-break: break-all;
    word-wrap: break-word;
}

.poodll_close_modal {
    text-align: right;
    cursor: pointer;
    padding: 5px 10px;
}

.poodll_close_modal i {
    font-size: 21px;
    color: #333;
}

.poodll_dialogue_box {
    border: 1px solid #333;
    height: 20px;
    position: absolute;
    width: 100%;
    left: 0px;
    height: 100%;
    top: 0px;
    z-index: 999999;
    background: #e6e8ed;
}

.poodll_dialogue_box .poodll_dialogue_content {
    padding: 3px;
    text-align: center;
    background: #333;
    color: #fff;
    margin-bottom: 10px;
}

.poodll_dialogue_box .poodll_dialogue_content h6 {
    margin-bottom: 0px;
}
/* Screen Recorder */
.screen-main-wrapper {
    position: relative;
}

.screen-main-wrapper .settingsicon {
    position: absolute;
    right: -3px;
    bottom: -13px;
}

.screen-main-wrapper .settingsicon button {
    border: none;
    background: transparent;
}

.screen-main-wrapper .settingsicon button i {
    font-size: 18px !important;
    color: brown;
}

.screen-main-wrapper .settingsicon button:focus {
    border: none;
    background: transparent;
}

.screen-main-wrapper .settingsicon button i:hover {
    cursor: pointer;
}

.poodll_mediarecorder_size_small .screen-wrap button {
    height: 60px !important;
    width: 25% !important;
}

.poodll_mediarecorder_size_small .screen-wrap button i.fa {
    font-size: 35px;
    color: #333;
}

@media (max-width: 768px) {

    .video_preview_screen {
        height: 150px;
    }
}

.screen-main-wrapper .screen-wrap {
    text-align: center;
}

.screen-main-wrapper {
    width: 320px;
}

.screen-main-wrapper .screen-wrap button {
    height: 60px !important;
    width: 30% !important;
}

.screen-main-wrapper .task-helper {
    display: inline-flex;
    width: 100%;
}

.screen-main-wrapper .task-helper p {
    width: 33%;
    float: left;
    font-size: 18px;
    margin-bottom: 0px;
}

.screen-main-wrapper .task-helper i.fa {
    color: green;
    font-size: 45px;
}

.screen-main-wrapper .task-helper p.step-1 {
    margin-left: 5px;
}

.screen-main-wrapper .task-helper p.step-3 {
    margin-right: 5px;
}

.screen-main-wrapper .screen-wrap button i.fa {
    font-size: 45px;
    color: #333;
}


.poodll_mediarecorderbox_standard .poodll_mediarecorderholder_screen .pmr_disabled {
    background: rgba(194, 194, 194, 0.7);
    color: #333 !important;
    opacity: 1 !important;
}

.poodll_mediarecorderholder_screen {
    width: 300px;
    padding: 20px;
    border: 3px solid #333;
}

.poodll_mediarecorder_button_screen {
    width: 83% !important;
    margin: 5px auto;
    border: 3px solid #333;
    background: none !important;
    color: #333 !important;
    text-shadow: 1px 2px 1px #c2c2c2;
}

.poodll_mediarecorderbox_screen .poodll_preview_screen {
    border: 3px solid #333;
    background-color: transparent;
    width: 100%;
    margin-bottom: 10px;
}

.poodll_mediarecorderbox_screen .poodll_status_screen {
    text-align: center;
    margin-bottom: 10px;
    width: 100%;
    border: 3px solid #333;
}

.poodll_mediarecorderholder_screen input[type="checkbox"] {
    width: 30px;
    height: 15px;
    margin-top: 10px;

}

.poodll_mediarecorderbox_screen .poodll_status_standard {
    background-color: rgba(0, 0, 0, 0.4);
    height: 40px;
    width: 100%;
    border-radius: 20px;
    color: #fff;
    border: 2px solid seagreen;
    font-weight: 900;
    text-shadow: 1px 2px 1px #ccc;
    font-size: 20px;
    line-height: 35px;
}

.poodll_mediarecorderbox_screen .poodll_mediarecorder_button_standard {
    padding: 0px 10px;
    border: none;
    background-color: #fff;
    border-radius: 0px !important;
    color: red;
    margin-top: 20px;
    margin-bottom: 20px;
    height: 40px;
}

.poodll_mediarecorderbox_screen .poodll_save-recording_standard {
    height: 40px;
    background-color: #fff;
    border: none;
    width: 100% !important;
}

.poodll_mediarecorderbox_screen button.pmr_disabled {
    color: #BBB;
}

.poodll_mediarecorderbox_screen .poodll_mediarecorderbox_standard {
    width: 280px !important;
}

.poodll_mediarecorderbox_screen .poodll_preview_standard {
    width: 100% !important;
}


/* One Two Three Recorder */

.one-two-three-main-wrapper {
    position: relative;
}

.one-two-three-main-wrapper .settingsicon {
    position: absolute;
    right: -3px;
    bottom: -13px;
}

.one-two-three-main-wrapper .settingsicon button {
    border: none;
    background: transparent;
}

.one-two-three-main-wrapper .settingsicon button i {
    font-size: 18px !important;
    color: brown;
}

.one-two-three-main-wrapper .settingsicon button:focus {
    border: none;
    background: transparent;
}

.one-two-three-main-wrapper .settingsicon button i:hover {
    cursor: pointer;
}

/*
	End
*/

/*
	Thee One Button Recorders
*/
@font-face {
    font-family: 'Indie Flower';
    src: url('https://fonts.googleapis.com/css?family=Indie+Flower');
}

.poodll_mediarecorderholder_gold .poodll_preview_gold {
    height: 100px;
    width: 100px;
    border: none;
    border-radius: 50%;
    z-index: 2;
    position: absolute;
    left: 135px;
    top: 22px;
    cursor: pointer;
}

.poodll_mediarecorderholder_gold {
    position: relative;
}

.poodll_mediarecorderholder_gold .settingsicon {
    position: absolute;
    bottom: 75px;
    right: 250px;
}

.poodll_mediarecorderholder_gold .settingsicon button {
    border: none !important;
    background: transparent !important;
}

.poodll_mediarecorderholder_gold .settingsicon button i {
    font-size: 18px !important;
    color: #333 !important;
}

.poodll_mediarecorderholder_gold .settingsicon button:focus {
    border: none;
    background: transparent;
}

.poodll_mediarecorderholder_gold .settingsicon button i:hover {
    cursor: pointer;
}

.poodll_mediarecorder_audio .poodll_mediarecorderbox_gold {
    text-align: center;
}

.poodll_mediarecorderbox_gold button {
    font-size: 32px;
    transition: filter 0.5s ease;

}

.poodll_mediarecorderbox_gold button:hover {
    cursor: pointer;
    filter: brightness(120%);
}

.poodll_mediarecorderbox_gold .poodll_start-recording_gold {
    background-color: #93c47d;
}

.poodll_mediarecorderbox_gold .poodll_stop-recording_gold {
    background-color: #ea9999;
}

.poodll_mediarecorderbox_gold .poodll_play-recording_gold {
    background-color: #9fc5f8;
}

.gold-save-button-wrapper {
    width: 100%;
    margin-bottom: 10px;
}

.gold-save-button-wrapper .poodll_save-recording_gold {
    width: 20%;
    color: #333;
    background-color: #93c47d;
    border: #333;
    font-weight: 600;
    -webkit-box-shadow: 1px 2px 3px #333;
    box-shadow: 1px 2px 3px #333;
    text-shadow: 1px 2px 2px #ccc;
    text-transform: capitalize;
}

.gold-restart-button-wrapper {
    width: 30%;
    margin: 0 auto;
}

.gold-restart-button-wrapper .poodll_restart_gold {
    background: transparent;
    border: none;
    text-transform: capitalize;
    font-size: 20px;
    color: #0c5394;
    font-weight: 400;
}

.poodll_mediarecorderbox_gold canvas {
    margin-bottom: 10px;
}

.poodll_mediarecorderholder_gold .poodll_mediarecorderbox_gold button {
    position: absolute;
    left: 130px;
    top: 8%;
    height: 100px;
    width: 100px;
    border-radius: 50%;
    border: none;
    box-shadow: none !important;
}

.poodll_mediarecorderbox_gold .gold-save-button-wrapper a.pmr_disabled {
    display: block !important;
    margin: 0 auto;
    background-color: #c2c2c2;
    pointer-events: none;
}

.poodll_mediarecorderbox_gold .gold-restart-button-wrapper a.pmr_disabled {
    display: block !important;
    margin: 0 auto;
    color: #c2c2c2;
    pointer-events: none;
}

.poodll_status_gold {
    display: none;
}

.poodll_mediarecorderholder_gold .poodll_mediarecorderbox_gold {
    position: relative;
}

.poodll_mediarecorderholder_gold .poodll_mediarecorderbox_gold .pmr_disabled {
    display: none;
}

.poodll_mediarecorderholder_gold .poodll_mediarecorderbox_gold button:focus {
    outline-style: none;
}

/*********************************************END****************************************/

/*
	The PUSH Audio Recorder
*/

.poodll_mediarecorderholder_push {
    position: relative;
}

.poodll_mediarecorderholder_push .settingsicon {
    position: absolute;
    bottom: 75px;
    right: 250px;
}

.poodll_mediarecorderholder_push .settingsicon button {
    border: none !important;
    background: transparent !important;
}

.poodll_mediarecorderholder_push .settingsicon button i {
    font-size: 18px !important;
    color: #333 !important;
}

.poodll_mediarecorderholder_push .settingsicon button:focus {
    border: none;
    background: transparent;
}

.poodll_mediarecorderholder_push .settingsicon button i:hover {
    cursor: pointer;
}

.poodll_mediarecorder_audio .poodll_mediarecorder_playcanvas_push {
    /* dimensions need to be declared on component */
    /* height: 180px; */
    /* width: 50px; */

}

.poodll_mediarecorder_audio .poodll_mediarecorder_caption_push {
    font-size: 1.2em;
    /*font-weight: normal;*/
}

.poodll_mediarecorder_audio .poodll_mediarecorder_caption_push:before {
    font-family: FontAwesome;
    content: "\F130";
    padding-right: 0.5em;
}

.poodll_mediarecorderbox_push.poodll_mediarecorder_push_testbuttonready {
    color: #444;
    background: #CBF2DC;
    border-color: #3e7327;
}

.poodll_mediarecorderbox_push.poodll_mediarecorder_push_testbuttonrecording {
    color: #444;
    background: #CBF2DC;
    border-color: #3e7327;
}

.poodll_mediarecorderbox_push.poodll_mediarecorder_push_startbuttonready {
    color: #fffa90;
    background: #3ea8ef;
    border-color: #2b78e4;
}

.poodll_mediarecorderbox_push.poodll_mediarecorder_push_startbuttoncountdown {
    color: #fffa90;
    background: #3ea8ef;
    border-color: #2b78e4;
}

.poodll_mediarecorderbox_push.poodll_mediarecorder_push_startbuttonrecording {
    color: #fffa90;
    background: #e06c6c;
    border-color: #e41426;
}

.poodll_mediarecorderbox_push.poodll_mediarecorder_push_uploading {
    color: #444;
    background: #eeeeee;
    border-color: #3e7327;
}

.poodll_mediarecorderbox_push.poodll_mediarecorder_push_allfinished {
    color: #444;
    background: #eeeeee;
    border-color: #3e7327;
}

/* div button styling */
.poodll_mediarecorder_audio .poodll_mediarecorderbox_push {
    display: flex;
    border-style: solid;
    border-width: 2px;
    border-radius: 5px;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 5px -1px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    vertical-align: middle;
    padding: 5px;
    text-align: center;
    max-width: 210px;
    min-width: 210px;
    max-height: 45px;
    min-height: 45px;
}

.poodll_mediarecorder_audio .poodll_mediarecorderbox_push.push_canclick:active {
    box-shadow: 0 0 5px -1px rgba(0, 0, 0, 0.6);
    font-weight: bold;
    cursor: pointer;
}

.poodll_mediarecorder_audio .poodll_mediarecorderbox_push.push_canclick:hover {
    /* -webkit-transform: scale(1.1); */
    box-shadow: 0 0 5px -1px rgba(0, 0, 0, 0.6);
    font-weight: bold;
    cursor: pointer;
}

/* end of button styling */

.poodll_mediarecorderbox_push canvas {
    margin-bottom: 5px;
}

button.poodll_mediarecorder_button_push {
    transition: filter 0.5s ease;
    margin: auto;
    width: 180px;
    color: #fff;
    background-color: #00acdf;
    border-color: #00acdf;
    background-image: none;
    display: inline-block;
    font-weight: 400;
    line-height: 1.25;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .5rem 1rem;
    font-size: 0.6rem;
    border-radius: .25rem;
}

.poodll_mediarecorderholder_push .poodll_mediarecorderbox_push {
    position: relative;
}

.poodll_mediarecorderholder_push .poodll_mediarecorderbox_push .pmr_disabled {
    display: none;
}

.poodll_mediarecorderholder_push .poodll_mediarecorderbox_push button:focus {
    outline-style: none;
}

/* dialog */
.poodll_mediarecorderbox_push .poodll_dialogue_box .poodll_dialogue_content {
    display: none;
}

.poodll_mediarecorderbox_push .poodll_dialogue_box span.devicesettings_select_label, .poodll_mediarecorderbox_push .poodll_dialogue_box .devicesettings_select {
    font-size: small;
    padding: 0px;
    margin: 0px;
}

.poodll_mediarecorderbox_push .poodll_close_modal {
    height: 25px;
}

.poodll_mediarecorderbox_push .filter_poodll_errordisplay {
    font-size: 10px;
    margin-top: 5px;
}

/*********************************************END****************************************/

/*********************************************END****************************************/

/*
	The Read Seed Audio Recorders
*/

.poodll_mediarecorderholder_readseed {
    position: relative;
}

.poodll_mediarecorderholder_readseed .settingsicon {
    position: absolute;
    bottom: 75px;
    right: 250px;
}

.poodll_mediarecorderholder_readseed .settingsicon button {
    border: none !important;
    background: transparent !important;
}

.poodll_mediarecorderholder_readseed .settingsicon button i {
    font-size: 18px !important;
    color: #333 !important;
}

.poodll_mediarecorderholder_readseed .settingsicon button:focus {
    border: none;
    background: transparent;
}

.poodll_mediarecorderholder_readseed .settingsicon button i:hover {
    cursor: pointer;
}

.poodll_mediarecorder_audio .poodll_mediarecorder_playcanvas_readseed {
    /* dimensions need to be declared on component */
    /* height: 180px; */
    /* width: 50px; */

}

.poodll_mediarecorder_audio .poodll_mediarecorder_caption_readseed {
    /* nothing to do yet */
}

.poodll_mediarecorderbox_readseed.poodll_mediarecorder_readseed_testbuttonready {
    color: #444;
    font-size: xx-large;
    background: #CBF2DC;
    border-color: #3e7327;
}

.poodll_mediarecorderbox_readseed.poodll_mediarecorder_readseed_testbuttonrecording {
    color: #444;
    background: #CBF2DC;
    border-color: #3e7327;
}

.poodll_mediarecorderbox_readseed.poodll_mediarecorder_readseed_startbuttonready {
    color: #fffa90;
    font-size: xx-large;
    background: #3ea8ef;
    border-color: #2b78e4;
}

.poodll_mediarecorderbox_readseed.poodll_mediarecorder_readseed_startbuttoncountdown {
    color: #fffa90;
    background: #3ea8ef;
    border-color: #2b78e4;
}

.poodll_mediarecorderbox_readseed.poodll_mediarecorder_readseed_startbuttonrecording {
    color: #fffa90;
    background: #e06c6c;
    border-color: #e41426;
}

.poodll_mediarecorderbox_readseed.poodll_mediarecorder_readseed_uploading {
    color: #444;
    background: #eeeeee;
    border-color: #3e7327;
}

.poodll_mediarecorderbox_readseed.poodll_mediarecorder_readseed_allfinished {
    color: #444;
    background: #eeeeee;
    border-color: #3e7327;
}

/* div button styling */
.poodll_mediarecorder_audio .poodll_mediarecorderbox_readseed {
    display: flex;
    border-style: solid;
    border-width: 2px;
    border-radius: 5px;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 5px -1px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    vertical-align: middle;
    padding: 5px;
    text-align: center;
    max-width: 210px;
    min-width: 210px;
    max-height: 80px;
    min-height: 80px;
}

.poodll_mediarecorder_audio .poodll_mediarecorderbox_readseed.readseed_canclick:active {
    box-shadow: 0 0 5px -1px rgba(0, 0, 0, 0.6);
    font-weight: bold;
    cursor: pointer;
}

.poodll_mediarecorder_audio .poodll_mediarecorderbox_readseed.readseed_canclick:hover {
    /* -webkit-transform: scale(1.1); */
    box-shadow: 0 0 5px -1px rgba(0, 0, 0, 0.6);
    font-weight: bold;
    cursor: pointer;
}

/* end of button styling */

.poodll_mediarecorderbox_readseed canvas {
    margin-bottom: 5px;
}

button.poodll_mediarecorder_button_readseed {

    transition: filter 0.5s ease;
    margin: auto;
    width: 180px;
    color: #fff;
    background-color: #00acdf;
    border-color: #00acdf;
    background-image: none;
    display: inline-block;
    font-weight: 400;
    line-height: 1.25;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .5rem 1rem;
    font-size: 1rem;
    border-radius: .25rem;
}

.poodll_mediarecorderholder_readseed .poodll_mediarecorderbox_readseed {
    position: relative;
}

.poodll_mediarecorderholder_readseed .poodll_mediarecorderbox_readseed .pmr_disabled {
    display: none;
}

.poodll_mediarecorderholder_readseed .poodll_mediarecorderbox_readseed button:focus {
    outline-style: none;
}

/* dialog */
.poodll_mediarecorderbox_readseed .poodll_dialogue_box .poodll_dialogue_content {
    display: none;
}

.poodll_mediarecorderbox_readseed .poodll_dialogue_box span.devicesettings_select_label, .poodll_mediarecorderbox_readseed .poodll_dialogue_box .devicesettings_select {
    font-size: small;
    padding: 0px;
    margin: 0px;
}

.poodll_mediarecorderbox_readseed .poodll_close_modal {
    height: 25px;
}

.poodll_mediarecorderbox_readseed .filter_poodll_errordisplay {
    font-size: 10px;
    margin-top: 5px;
}

/*********************************************END****************************************/

/*********************************************END****************************************/

/*
	The Read Aloud Audio Recorders
*/

.poodll_mediarecorderholder_readaloud {
    position: relative;
}

.poodll_mediarecorderholder_readaloud .settingsicon {
    position: absolute;
    bottom: 75px;
    right: 250px;
}

.poodll_mediarecorderholder_readaloud .settingsicon button {
    border: none !important;
    background: transparent !important;
}

.poodll_mediarecorderholder_readaloud .settingsicon button i {
    font-size: 18px !important;
    color: #333 !important;
}

.poodll_mediarecorderholder_readaloud .settingsicon button:focus {
    border: none;
    background: transparent;
}

.poodll_mediarecorderholder_readaloud .settingsicon button i:hover {
    cursor: pointer;
}

.poodll_mediarecorder_audio .poodll_mediarecorderbox_readaloud {
    text-align: center;
}

.poodll_mediarecorderbox_readaloud button:hover {
    cursor: pointer;
    filter: brightness(120%);
}

.poodll_mediarecorderbox_readaloud .poodll_start-recording_readaloud {
    background-color: #93c47d;
}

.poodll_mediarecorderbox_readaloud .poodll_stop-recording_readaloud {
    background-color: #ea9999;
}

.poodll_mediarecorderbox_readaloud .poodll_test-recording_readaloud {
    background-color: #9fc5f8;
}

.poodll_mediarecorderbox_readaloud canvas {
    margin-bottom: 5px;
}

button.poodll_mediarecorder_button_readaloud {

    transition: filter 0.5s ease;
    margin: auto;
    width: 200px;
    color: #fff;
    background-color: #00acdf;
    border-color: #00acdf;
    background-image: none;
    display: inline-block;
    font-weight: 400;
    line-height: 1.25;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .5rem 1rem;
    font-size: 1rem;
    border-radius: .25rem;
}

.poodll_mediarecorderholder_readaloud .poodll_mediarecorderbox_readaloud {
    position: relative;
}

.poodll_mediarecorderholder_readaloud .poodll_mediarecorderbox_readaloud .pmr_disabled {
    display: none;
}

.poodll_mediarecorderholder_readaloud .poodll_mediarecorderbox_readaloud button:focus {
    outline-style: none;
}

/*********************************************END****************************************/

/*
	The Warning Recorder
*/

.poodll_mediarecorder_audio .poodll_mediarecorderbox_warning,
.poodll_mediarecorder_video .poodll_mediarecorderbox_warning {
    text-align: center;
    border: 1px solid #CCCCCC;
    border-radius: 5px;
    padding: 5px;
    max-width: 320px;
    min-width: 320px;
    background-color: white;
}

div.poodll_mediarecorder_video canvas.poodll_mediarecorder_uploadcanvas_warning {
    margin: auto;
    display: block;
}

/*********************************************END****************************************/

/*
	The Upload Recorder
*/

.poodll_mediarecorderbox_upload canvas.poodll-can-do-drag-drop {
    background-color: white;
    outline: 2px dashed black;
    outline-offset: -10px;
}

.poodll_mediarecorderbox_upload canvas.is-poodll-drag-over {
    background-color: grey;
}

.poodll_mediarecorder_audio .poodll_mediarecorderbox_upload,
.poodll_mediarecorder_video .poodll_mediarecorderbox_upload {
    text-align: center;
    border: 1px solid #CCCCCC;
    border-radius: 5px;
    padding: 5px;
    max-width: 320px;
    min-width: 320px;
    background-color: white;
}

.poodll_mediarecorderbox_upload canvas {
    margin-bottom: 5px;
}

div.poodll_mediarecorder_video canvas.poodll_mediarecorder_uploadcanvas_upload {
    margin: auto;
    display: block;
}

/*********************************************END****************************************/

/*
	The Once Recorder
*/

.poodll_mediarecorderholder_once {
    position: relative;
}

.poodll_mediarecorderholder_once .settingsicon {
    position: absolute;
    bottom: 0px;
    right: 0px;
}

.poodll_mediarecorderholder_once .settingsicon button {
    border: none !important;
    background: transparent !important;
}

.poodll_mediarecorderholder_once .settingsicon button i {
    font-size: 18px !important;
    color: #333 !important;
}

.poodll_mediarecorderholder_once .settingsicon button:focus {
    border: none;
    background: transparent;
}

.poodll_mediarecorderholder_once .settingsicon button i:hover {
    cursor: pointer;
}

.poodll_mediarecorder_audio .poodll_mediarecorderbox_once,
.poodll_mediarecorder_video .poodll_mediarecorderbox_once {
    text-align: center;
    border: 1px solid #CCCCCC;
    border-radius: 5px;
    padding: 5px;
    max-width: 320px;
    min-width: 320px;
}

.poodll_mediarecorderbox_once button:hover {
    cursor: pointer;
    filter: brightness(120%);
}

.poodll_mediarecorderbox_once .poodll_start-recording_once {
    background-color: #93c47d;
}

.poodll_mediarecorderbox_once .poodll_stop-recording_once {
    background-color: #ea9999;
}

.poodll_mediarecorderbox_once .poodll_test-recording_once {
    background-color: #9fc5f8;
}

.poodll_mediarecorderbox_once canvas {
    margin-bottom: 5px;
}

button.poodll_mediarecorder_button_once {

    transition: filter 0.5s ease;
    margin: auto;
    width: 200px;
    color: #fff;
    background-color: #00acdf;
    border-color: #00acdf;
    background-image: none;
    display: block;
    font-weight: 400;
    line-height: 1.25;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .5rem 1rem;
    font-size: 1rem;
    border-radius: .25rem;
}

.poodll_mediarecorderbox_once {
    background-color: white;
}

.poodll_mediarecorderholder_once .poodll_mediarecorderbox_once {
    position: relative;
}

.poodll_mediarecorderholder_once .poodll_mediarecorderbox_once .pmr_disabled {
    display: none;
}

.poodll_mediarecorderholder_once .poodll_mediarecorderbox_once button:focus {
    outline-style: none;
}

.poodll_mediarecorderbox_once .poodll_status_once {
    font-size: 2em;
    font-family: georgia;
    margin-top: 2px;
    margin-bottom: 20px;
}

video.poodll_preview_once {
    width: 280px;
    height: 210px;
}

div.poodll_mediarecorder_video canvas.poodll_mediarecorder_uploadcanvas_once {
    margin: auto;
    display: block;
}

div.poodll_mediarecorder_video div.poodll_status_once {
    position: absolute;
    background-color: #eee;
    opacity: 0.5;
    top: 16px;
    left: 50%;
    transform: translate(-50%, -50%);
}

/*********************************************END****************************************/

/*

Integration

*/

.hp_slide {
    width: 100%;
    border: 3px solid #333;
    position: relative;
    height: 24px;
    display: none;
    margin-bottom: 10px;
}

.hp_timer {
    width: 100%;
    position: absolute;
    text-align: center;
    color: #333;
    font-size: 14px;
    z-index: 99;
}

.hp_range {
    height: 18px;
    width: 100%;
    position: absolute;
    display: block;
}

.audio_preview_123 {
    display: none !important;
}

.hide {
    display: none;
}

.filter_poodll_download_button {
    border: 1px solid #333;
    padding: 5px;
    background-color: #ccc;
    color: #fff;
}

.filter_poodll_mp3skinned_recorder {
    width: 240px;
    height: 205px;
}

.filter_poodll_mp3skinned_recorder_small_80 {
    height: 80px;
}

.filter_poodll_unregistered {
    font-weight: bold;
    border-style: double;
    border-width: thin;
    border-color: red;
    padding: 3px;
}

/* For HTML5 Uploads */
.p_progress p {
    display: none;
    width: 240px;
    padding: 2px 5px;
    margin: 2px 0;
    border: 1px inset #446;
    border-radius: 5px;
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=progress) 100% 0 repeat-y;
}

.p_progress p.success {
    background: #0c0 none 0 0 no-repeat;
}

.p_progress p.failed {
    background: #c00 none 0 0 no-repeat;
}

.p_messages {
    float: left;
}

.p_btn {
    display: inline-block;
    cursor: pointer;
    padding: 7px 10px;
    font-weight: 700;
    line-height: 1;
    color: white;
    background: #345;
    border: 0;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}

.w_btn {
    display: inline-block;
    float: right;
}

.whiteboard-wrapper .p_btn {
    float: right;
}

.p_btn_wrapper {
    display: inline-block;
    margin: 0;
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

.p_btn_wrapper [type="file"] {
    position: absolute;
    top: 0;
    left: 0;
    height: 45px;
    filter: alpha(opacity=0);
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    opacity: 0;
    cursor: pointer;
}

.p_scrollbox {
    position: relative;
}

.xaxis {
    white-space: pre;
    display: inline-block;
}

.p_scrollboxcontainer {
    overflow: hidden;
    border: 1px solid black;
    padding: 3px;
    position: relative;
}

.p_scroll_btn_wrapper {
    position: absolute;
    z-index: 10;
    top: 50%;
    left: 50%;
}

.p_scroll_btn_wrapper .p_btn {
    background: #E20022;
    position: relative;
    top: -50%;
    left: -50%;

}

.os_version_warning {
    border: 1px solid #ff0000;
    font-size: 14px;
    font-weight: bold;
    margin: 10px;
}

.fs-container {
    margin: auto;
    margin-top: 8px;
}

.literally {
    width: 100%;
    height: 100%;
}

/* Drawingboard.js */
.drawing-board, .drawing-board * {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box
}

.drawing-board-utils-hidden, .drawing-board-controls-hidden {
    display: none !important
}

.drawing-board {
    position: relative;
    display: block
}

.drawing-board-canvas-wrapper {
    position: relative;
    margin: 0;
    border: 1px solid #ddd
}

.drawing-board-canvas {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 10;
    width: auto
}

.drawing-board-canvas {
    cursor: crosshair;
    z-index: 20
}

.drawing-board-cursor {
    position: absolute;
    top: 0;
    left: 0;
    pointer-events: none;
    border-radius: 50%;
    background: #ccc;
    background: rgba(0, 0, 0, .2);
    z-index: 30
}

.drawing-board-control > button, .drawing-board-control-colors-rainbows, .drawing-board-control-size .drawing-board-control-inner, .drawing-board-control-size-dropdown {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    overflow: hidden;
    border: 0;
    background-color: #eee;
    padding: 2px 4px;
    border: 1px solid #ccc;
    box-shadow: 0 1px 3px -2px #121212, inset 0 2px 5px 0 rgba(255, 255, 255, .3);
    -webkit-box-shadow: 0 1px 3px -2px #121212, inset 0 2px 5px 0 rgba(255, 255, 255, .3);
    height: 28px
}

.drawing-board-control > button {
    cursor: pointer;
    min-width: 28px;
    line-height: 14px
}

.drawing-board-control > button:hover, .drawing-board-control > button:focus {
    background-color: #ddd
}

.drawing-board-control > button:active, .drawing-board-control > button.active {
    box-shadow: inset 0 1px 2px 0 rgba(0, 0, 0, .2);
    -webkit-box-shadow: inset 0 1px 2px 0 rgba(0, 0, 0, .2);
    background-color: #ddd
}

.drawing-board-control > button[disabled] {
    color: gray
}

.drawing-board-control > button[disabled]:hover, .drawing-board-control > button[disabled]:focus, .drawing-board-control > button[disabled]:active, .drawing-board-control > button[disabled].active {
    background-color: #eee;
    box-shadow: 0 1px 3px -2px #121212, inset 0 2px 5px 0 rgba(255, 255, 255, .3);
    -webkit-box-shadow: 0 1px 3px -2px #121212, inset 0 2px 5px 0 rgba(255, 255, 255, .3);
    cursor: default
}

.drawing-board-controls {
    margin: 0 auto;
    text-align: center;
    font-size: 0;
    display: table;
    border-spacing: 9.33333px 0;
    position: relative;
    min-height: 28px
}

.drawing-board-controls[data-align=left] {
    margin: 0;
    left: -9.33333px
}

.drawing-board-controls[data-align=right] {
    margin: 0 0 0 auto;
    right: -9.33333px
}

.drawing-board-canvas-wrapper + .drawing-board-controls, .drawing-board-controls + .drawing-board-canvas-wrapper {
    margin-top: 5px
}

.drawing-board-controls-hidden {
    height: 0;
    min-height: 0;
    padding: 0;
    margin: 0;
    border: 0
}

.drawing-board-control {
    display: table-cell;
    border-collapse: separate;
    vertical-align: middle;
    font-size: 16px;
    height: 100%
}

.drawing-board-control-inner {
    position: relative;
    height: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.drawing-board-control > button {
    margin: 0;
    vertical-align: middle
}

.drawing-board-control-colors {
    font-size: 0;
    line-height: 0
}

.drawing-board-control-colors-current {
    border: 1px solid #ccc;
    cursor: pointer;
    display: inline-block;
    width: 26px;
    height: 26px
}

.drawing-board-control-colors-rainbows {
    display: inline-block;
    margin-left: 5px;
    position: absolute;
    left: 0;
    top: 33px;
    margin-left: 0;
    z-index: 100;
    width: 250px;
    height: auto;
    padding: 4px
}

.drawing-board-control-colors-rainbow {
    height: 18px
}

.drawing-board-control-colors-picker:first-child {
    margin-right: 5px
}

.drawing-board-control-colors-picker {
    display: inline-block;
    width: 18px;
    height: 18px;
    cursor: pointer
}

.drawing-board-control-colors-picker[data-color="rgba(255, 255, 255, 1)"] {
    width: 16px;
    height: 17px;
    border: 1px solid #ccc;
    border-bottom: 0
}

.drawing-board-control-colors-picker:hover {
    width: 16px;
    height: 16px;
    border: 1px solid #555
}

.drawing-board-control-drawingmode > button {
    margin-right: 2px
}

.drawing-board-control-drawingmode > button:last-child {
    margin-right: 0
}

.drawing-board-control-drawingmode-pencil-button {
    overflow: hidden;
    *text-indent: -9999px;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAe9JREFUeNpiZAACVlFRBhYREQZcQPnbNwa3N28YlL5+ZfgLFfvPwGD9m4FhIgsDHuAO0gTUDNKIBvyBmqt/MTDMY8Gl0f31azD7L6oUIxCnAzWmAPHBfwwM01AMUAV6JfPQIVwOYgVqqPnFyOjz6///O38YGKpAgmAD1OXlGdTk5PD5hgeouZudj8/uy9evP/78/dsFFPsJNiAoKIiBABAHap4oLi9v8fTNm48//v7NBwbgWZgkE7rqt8DY+A8JZRBW+cfIuEDT0NDlzadP3z98/doPFDuCrB7TAGFhBqCNIGwM9OcKUzs7+xdv3355+f79VqDYAiTDwZgJh7ONgYpnOvn4GL949erT7UePdgL5JVCD4fgBLBBxaX74+PG789evnwby0/8jKXgExIeB+CG6Af///1e9Ki9vFSAkZPzoyZPPJy9evA9MB77/sWiEARZkzV+/fvXYtGnTpG3btj28EBT0BqjZ5D8OjXCwPksUhA1Wpggf/PHjx/9169Y9EBERaUlgZmaIAcrLE4rk5sIqBqDmlefnRPzfWGX5EaSZm5ubgRloADGA5QZ3RgK7gESY4PMNn9ZtObPpzZvfU4DiYkiB/RcHG+S7fyxAMH/lFU2GOZd2bLx18/cEUMoD4j9I+DcS/RtJHGTYf4AAAwAxaOMYHjxKFwAAAABJRU5ErkJggg==');
    background-position: 50% 50%;
    background-repeat: no-repeat
}

.drawing-board-control-drawingmode-pencil-button:before {
    content: "";
    display: block;
    width: 0;
    height: 100%
}

.drawing-board-control-drawingmode-eraser-button {
    overflow: hidden;
    *text-indent: -9999px;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAkpJREFUeNp0kk+IElEcx39vFBc9+OfQRTAwzFt4CaYOKStj6MoeculStzoIQSB4kCVckmDx4iGCXWYJIqjoVOzO1l4qT1F7WfBWHvxzDPyTB3XUmXn93suRybUffHmP997n9/cRsFgwGARJkiAcDsPlwgEIeEZQAhCRAkgAlOD6SQP4rgMFDWVnYCAQgFgsBqFQCBwOByzZNQOotPHx1RNCCCipu6bfb+zSnslkeOQVILPrBkAirbws9btdTEWAzZPXpfepOzaeGMBXwe/3w3+MwTc3Dl+UeghTiskbBvR6Pbh18mZHB0jjmxvCKhIfR37s3r+Sevf8ca/T4TBF2HTSODuDxP7uNjrZFFbBk8lEzOVyspa4ykGYw2zfbTb/7ilvok1YhlVVFfP5vDydTkHXdXDdlhZOOnPY4/HA0YPtp3h6LFjh8XgsFgoFGTPgsKm1zDr8ajTQh8Fh5eGjZzjGI8yjKlgjF4tFGdd/YKYmRja24hw+zu3sYe2HiH3hYzQjl8tleTQanWtou93G6Qngdrth6+1+9h6hTULJZ/PeziJXKhV5OByeg1ut1gJOp9NZTdNOcQ419ot+ggp1qoLdBFmqVmNpm3A8Huewy+Wq1RH8QH9zmBlJJpMRdCIqiiIPBgN+2MCGsW/r8/kgGo1m0fmpzWarseayHlmNeL1eFiWC0cRqtSr3+/3FpSiKHMZtjU1glbFyfKgLTqfzEka9OJvNeDnzz1JnCaFmqOl8ZdJY1SiDOXCiXKg1NtG5DIt0y6ov3dE/AgwAENFWYYLj4mYAAAAASUVORK5CYII=');
    background-position: 50% 50%;
    background-repeat: no-repeat
}

.drawing-board-control-drawingmode-eraser-button:before {
    content: "";
    display: block;
    width: 0;
    height: 100%
}

.drawing-board-control-drawingmode-filler-button {
    overflow: hidden;
    *text-indent: -9999px;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAnNJREFUeNp0k0trE1EUx89MJpNJooYYXBgDNtCKdRPwlbqoCKUtaNVNA0Uo7UbMxoVPEARTXEi+QWfnwn6DEAlEkrSLttTGRiULEQlJ8yChmbzI++E50yTUJA78uMy953/u/557LmOz2WDEZ2m1WrckSRJSqdR2tVrdHQyYebwHtVoNuFHqTqczhQnWKaBYLDoKhcIuzgHDMKBSqeD20qd+LNdsNocSoFhRr9ctpVLJigl4xIIJQizLAmG4cAPa7bYcy9Iug5TL5UYikbD6/X7Rbre/IUcYe3WUW5ZsnQQzW9LpNOPz+UQc5aBM5mgdh7vI9FCCAesW2tnr9YqZTAby+bw8f3AQRP6853n+Ph5hemSCntjj8YjZbFYWx2IxeS2RSEMwuA87O79eqdXquVolK+GxnP0EPbHb7RZJSGABIR6PA11zJHKIR2MhHA5DIPDj7eH3j95KpfK60Wg8Yntil8slkqgnpioLghacTidoNDpEC3q9HnheCc3s1jZeLcW943pirPw/4lKpBkqlDubnl/riycnLsLy88EKj0fhzuRyZv8RFo1E6wpBYkiqy7Z54YmIcVlYeyOKC4mYwJ0nHRaQuM5vNT6hB/iceG7sIq6sPnwmC4MerDkby40AOCCoiddie1Wp92W7zQ2KTyQSLizNP8T0EsPLBbxEDnCj0GkM2qIEwyZRCobizsfH5A1ZXFhuN52F29vpz3HkL574mk8lj24Y5wsHkvjjoX0BOIWc5jruHzbK2ufmzEwpFO3jnDhQv4JoROYdoERVyGjEgZ8iBDlF3FzXo4go6utZ9lftY4N/dXisjR0i1G0ublv8KMAA0ZoUlicxrhwAAAABJRU5ErkJggg==');
    background-position: 50% 50%;
    background-repeat: no-repeat
}

.drawing-board-control-drawingmode-filler-button:before {
    content: "";
    display: block;
    width: 0;
    height: 100%
}

.drawing-board-control-navigation > button {
    font-family: Helvetica, Arial, sans-serif;
    font-size: 14px;
    font-weight: 700;
    margin-right: 2px
}

.drawing-board-control-navigation > button:last-child {
    margin-right: 0
}

.drawing-board-control-size[data-drawing-board-type=range] .drawing-board-control-inner {
    width: 75px
}

.drawing-board-control-size[data-drawing-board-type=dropdown] .drawing-board-control-inner {
    overflow: visible
}

.drawing-board-control-size-range-input {
    position: relative;
    width: 100%;
    z-index: 100;
    margin: 0;
    padding: 0;
    border: 0
}

.drawing-board-control-size-range-current, .drawing-board-control-size-dropdown-current span, .drawing-board-control-size-dropdown span {
    display: block;
    background: #333;
    opacity: .8
}

.drawing-board-control-size-range-current {
    display: inline-block;
    opacity: .15;
    position: absolute;
    pointer-events: none;
    left: 50%;
    top: 50%;
    z-index: 50
}

.drawing-board-control-size-dropdown-current {
    display: block;
    height: 100%;
    width: 40px;
    overflow: hidden;
    position: relative
}

.drawing-board-control-size-dropdown-current span {
    position: absolute;
    left: 50%;
    top: 50%
}

.drawing-board-control-size-dropdown {
    position: absolute;
    left: -6px;
    top: 33px;
    height: auto;
    list-style-type: none;
    margin: 0;
    padding: 0;
    z-index: 100
}

.drawing-board-control-size-dropdown li {
    display: block;
    padding: 4px;
    margin: 3px 0;
    min-height: 16px
}

.drawing-board-control-size-dropdown li:hover {
    background: #ccc
}

.drawing-board-control-size-dropdown span {
    margin: 0 auto
}

.drawing-board-control-download-button {
    overflow: hidden;
    *text-indent: -9999px;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAoBJREFUeNqMkr9PU1EUx7/vR1tQ3yu10hAmTawtBSYSy2YccFOcnDQm/gewOLnj5GYMg4sdXFxkMca4OBAwdUBe/ZkIGFp+9tHXvh/3/fTcAm01aLzJybnn3nM+95tzrnDl6Tb+sibuTmWUWj3C6/Juk+LySUmyvt0FCKKA02ryOCy6LBiu15ngMbZ5DDCNBqIw6gKM+n4nECUJru3glKry8CpjQaHVYmC2rVH82DIMMMdGGARdwJ+SPNdFS9chx+MXDNMp/NzagWNatk/nQU/hiYAoih6FYTBCBs9zUXMCbAhx2OYOv351lPOJ3EwH4LteL6Dcp/Rfu3FrstDyIizt+agpaYxNDU0M9gl4v7Ck+TYrCYLQqZHUyTtdQBiutPSGUflczSXHs5lVKwZdSOBMvwztxVvN0RtzsiyXBFHsAvL5PBSnCpXV2getILFiE2SjspYbuZzPiDSZ2vOXmlvX5yQqTmMfg9ZXqtls1wnT09OHEyAq0aFLg/gSXsSWq9wWk+p9PrCoYTwcijdLOfE7UsEufN9HGIYnT4EnTGIXe1KqtNNIvuNnGamxfi7SgQD/nIJCTbzOPQ/SQh1pud7T4M6W/8qFIw/5WAr5m7Ozsw9UVc069Fls2yJzSC5/lnc9RhaHZVnfSqUnEgXP2oBqtYqBgYG2+mKxmOVADnAcB4yxHgD1RzehKKns/LyV4gUHBweQy+UyRkdH6UKJ6fQDFxcXoWkaXJeRuTgUGCdLQJ9bx72lGZimGWs2m+083oN+2iiFQiGxvLy8RrDzudyltgrG3N8U2G8CrPz4sGYYRqJSqWR4H/jNWbJhUjAWi8XG8R/L87yPpGCVttVfAgwAVpZR+8tZC08AAAAASUVORK5CYII=');
    background-position: 50% 50%;
    background-repeat: no-repeat
}

.drawing-board-control-download-button:before {
    content: "";
    display: block;
    width: 0;
    height: 100%
}

/* literally canvas */
.literally .button-style-1 {
    border: 2px solid transparent;
    border-radius: 3px
}

.literally .button-style-1 {
    text-decoration: none;
    cursor: pointer
}

.literally .button-style-1.selected:not(.disabled) {
    background-color: #a1d9fe
}

.literally .button-style-1:hover:not(.disabled) {
    border-color: #a1d9fe
}

.literally .button-style-1.disabled {
    cursor: default;
    opacity: 0.3
}

.literally.toolbar-at-top .lc-drawing {
    bottom: 0;
    top: 31px
}

.literally.toolbar-at-top .lc-options {
    top: 0;
    border-bottom: 1px solid #555
}

.literally.toolbar-at-bottom .lc-drawing {
    bottom: 31px;
    top: 0
}

.literally.toolbar-at-bottom .lc-options {
    bottom: 0;
    border-top: 1px solid #555
}

.literally.toolbar-hidden .lc-drawing {
    left: 0;
    right: 0;
    bottom: 0;
    top: 0
}

.literally.toolbar-hidden .lc-options, .literally.toolbar-hidden .lc-picker {
    display: none
}

.literally {
    position: relative;
    background-color: #ddd;
    min-height: 400px;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -ms-touch-action: none;
    user-select: none
}

.literally, .literally * {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box
}

.literally > * {
    position: absolute
}

.literally .lc-picker {
    top: 0;
    left: 0;
    bottom: 0;
    width: 61px;
    background-color: #e6e6e6
}

.literally .lc-drawing {
    right: 0;
    left: 61px;
    cursor: default
}

.literally .lc-drawing > * {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0
}

.literally .lc-drawing .polygon-toolbar {
    top: auto;
    height: 31px
}

.literally .lc-drawing .polygon-toolbar .polygon-toolbar-button {
    float: left
}

.literally .lc-drawing .text-tool-input:focus {
    outline: none
}

.literally .lc-picker {
    z-index: 2;
    border-right: 1px solid #555
}

.literally .lc-picker .toolbar-button {
    width: 26px;
    height: 26px;
    line-height: 26px;
    margin: 2px;
    padding: 0;
    cursor: pointer;
    text-align: center;
    border: 2px solid transparent;
    border-radius: 3px
}

.literally .lc-picker .toolbar-button {
    text-decoration: none;
    cursor: pointer
}

.literally .lc-picker .toolbar-button.selected:not(.disabled) {
    background-color: #a1d9fe
}

.literally .lc-picker .toolbar-button:hover:not(.disabled) {
    border-color: #a1d9fe
}

.literally .lc-picker .toolbar-button.disabled {
    cursor: default;
    opacity: 0.3
}

.literally .lc-picker .thin-button {
    cursor: pointer;
    float: left;
    position: relative
}

.literally .lc-picker .fat-button {
    clear: both;
    width: 56px
}

.literally .lc-picker .lc-pick-tool, .literally .lc-picker .lc-undo, .literally .lc-picker .lc-redo, .literally .lc-picker .lc-zoom-in, .literally .lc-picker .lc-zoom-out {
    background-size: 100% auto;
    background-repeat: no-repeat;
    background-position: center center
}

.literally .color-well {
    font-size: 10px;
    float: left;
    width: 60px
}

.literally .color-well.open {
    background-color: #a1d9fe
}

.literally .color-well-color-container {
    border: 2px solid transparent;
    border-radius: 3px;
    border: 1px solid #aaa;
    position: relative;
    width: 28px;
    height: 28px;
    margin: 1px auto;
    overflow: visible
}

.literally .color-well-color-container {
    text-decoration: none;
    cursor: pointer
}

.literally .color-well-color-container.selected:not(.disabled) {
    background-color: #a1d9fe
}

.literally .color-well-color-container:hover:not(.disabled) {
    border-color: #a1d9fe
}

.literally .color-well-color-container.disabled {
    cursor: default;
    opacity: 0.3
}

.literally .color-well-color-container .color-well-checker {
    position: absolute;
    width: 50%;
    height: 50%;
    background-color: black
}

.literally .color-well-color-container .color-well-checker-top-left {
    border-top-left-radius: 3px
}

.literally .color-well-color-container .color-well-checker-bottom-right {
    border-bottom-right-radius: 3px
}

.literally .color-well-color-container .color-well-color {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 3px
}

.literally .color-picker-popup {
    position: absolute;
    z-index: 1;
    background-color: white;
    border: 1px solid #555;
    left: 60px;
    bottom: 31px
}

.literally .color-picker-popup .color-row {
    clear: both
}

.literally .color-picker-popup .color-row .color-cell {
    cursor: pointer;
    width: 20px;
    height: 20px;
    line-height: 20px;
    float: left
}

.literally .color-picker-popup .color-row .color-cell:hover, .literally .color-picker-popup .color-row .color-cell.selected {
    border: 1px solid #555;
    line-height: 18px
}

.literally .color-picker-popup .color-row .color-cell.transparent-cell {
    width: 100%
}

.literally .horz-toolbar {
    height: 31px;
    background-color: #e6e6e6
}

.literally .horz-toolbar label {
    line-height: 30px;
    margin: 0 0.25em 0 0.25em;
    font-size: 12px;
    float: left
}

.literally .horz-toolbar .square-toolbar-button {
    border: 2px solid transparent;
    border-radius: 3px;
    margin: 1px;
    border: 1px solid #aaa;
    width: 28px;
    height: 28px;
    float: left;
    position: relative
}

.literally .horz-toolbar .square-toolbar-button {
    text-decoration: none;
    cursor: pointer
}

.literally .horz-toolbar .square-toolbar-button.selected:not(.disabled) {
    background-color: #a1d9fe
}

.literally .horz-toolbar .square-toolbar-button:hover:not(.disabled) {
    border-color: #a1d9fe
}

.literally .horz-toolbar .square-toolbar-button.disabled {
    cursor: default;
    opacity: 0.3
}

.literally .horz-toolbar .square-toolbar-button img {
    max-width: 100%;
    max-height: 100%
}

.literally .horz-toolbar .square-toolbar-button label {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    line-height: 26px;
    margin: auto;
    float: none;
    text-align: center
}

.literally .polygon-toolbar {
    border-top: 1px solid #555
}

.literally .lc-options {
    z-index: 1;
    right: 0;
    left: 61px
}

.literally .lc-options .lc-font-settings {
    height: 30px;
    line-height: 31px;
    padding-left: 4px;
    background-color: #f5f5f5
}

.literally .lc-options .lc-font-settings input {
    margin: 0 0.5em 0 0
}

.literally .lc-options .lc-font-settings input[type=checkbox] {
    margin: 0 0.5em 0 0.5em
}

/*owl carousel flashcards*/
.filter_poodll_flashcards_owl .owl-item a {
    text-decoration: none;
}

.filter_poodll_dragdropsquare {
    width: 130px;
    height: 25px;
    line-height: 25px;
    text-align: center;
    border-radius: 5px;
    color: #73AD21;
    border: 1px solid #73AD21;
    padding: 1px 1px 1px 1px;
    background-color: #CBF2DC;
    margin-top: 5px;
    float: right;
}

div.filter_poodll_dragging {
    border: 2px dashed #0000FF;
}

a.filter_poodll_mobilerecorderlink {
    float: left;
    margin: 3px;
    -moz-box-shadow: inset 0px -3px 7px 0px #29bbff;
    -webkit-box-shadow: inset 0px -3px 7px 0px #29bbff;
    box-shadow: inset 0px -3px 7px 0px #29bbff;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #2dabf9), color-stop(1, #0688fa));
    background: -moz-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
    background: -webkit-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
    background: -o-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
    background: -ms-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
    background: linear-gradient(to bottom, #2dabf9 5%, #0688fa 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2dabf9', endColorstr='#0688fa', GradientType=0);
    background-color: #2dabf9;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: 1px solid #0b0e07;
    /*display:inline-block;*/
    cursor: pointer;
    color: #ffffff;
    font-family: Arial;
    font-size: 13px;
    padding: 9px 23px;
    text-decoration: none;
    text-shadow: 0px 1px 0px #263666;
}

a.filter_poodll_mobilerecorderlink:hover {
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #0688fa), color-stop(1, #2dabf9));
    background: -moz-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
    background: -webkit-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
    background: -o-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
    background: -ms-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
    background: linear-gradient(to bottom, #0688fa 5%, #2dabf9 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0688fa', endColorstr='#2dabf9', GradientType=0);
    background-color: #0688fa;
}

a.filter_poodll_mobilerecorderlink:active {
    position: relative;
    top: 1px;
}

a.filter_poodll_uploadafilelink {
    float: left;
    margin: 3px;
    -moz-box-shadow: inset 0px -3px 7px 0px #3e7327;
    -webkit-box-shadow: inset 0px -3px 7px 0px #3e7327;
    box-shadow: inset 0px -3px 7px 0px #3e7327;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77b55a), color-stop(1, #72b352));
    background: -moz-linear-gradient(top, #77b55a 5%, #72b352 100%);
    background: -webkit-linear-gradient(top, #77b55a 5%, #72b352 100%);
    background: -o-linear-gradient(top, #77b55a 5%, #72b352 100%);
    background: -ms-linear-gradient(top, #77b55a 5%, #72b352 100%);
    background: linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#77b55a', endColorstr='#72b352', GradientType=0);
    background-color: #77b55a;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: 1px solid #4b8f29;
    /*display:inline-block;*/
    cursor: pointer;
    color: #ffffff;
    font-family: Arial;
    font-size: 13px;
    padding: 9px 23px;
    text-decoration: none;
    text-shadow: 0px 1px 0px #5b8a3c;
}

a.filter_poodll_uploadafilelink:hover {
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #72b352), color-stop(1, #77b55a));
    background: -moz-linear-gradient(top, #72b352 5%, #77b55a 100%);
    background: -webkit-linear-gradient(top, #72b352 5%, #77b55a 100%);
    background: -o-linear-gradient(top, #72b352 5%, #77b55a 100%);
    background: -ms-linear-gradient(top, #72b352 5%, #77b55a 100%);
    background: linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#72b352', endColorstr='#77b55a', GradientType=0);
    background-color: #72b352;
}

a.filter_poodll_uploadafilelink:active {
    position: relative;
    top: 1px;
}

.poodll_take-snapshot {
    margin-top: 5px;
}

.poodll_cancel-snapshot {
    margin-top: 5px;
}

.filter_poodll_chooseopenapp_button {

}

.filter_poodll_chooseupload_button {

}

.poodll_save-recording {
    clear: both;
    width: 320px;
}

/* ONETWOTHREE Recorder Skin */
.poodll_preview_onetwothree {
    border: black;
    border-style: solid;
    border-width: 2px;
    background-color: #DDD;
    clear: both;
    width: 320px;
}

audio.poodll_preview_onetwothree {
    height: 37px;
}

.poodll_preview_onetwothree.poodll_recording {
    border: red;
}

button.poodll_mediarecorder_button_onetwothree {
    width: 100%;
}

/* MEDIA RECORDER STANDARD SKIN .. need to remove '_standard' */
.poodll_preview_standard {
    border: black;
    border-style: solid;
    border-width: 2px;
    background-color: #DDD;
    clear: both;
    width: 100%;
}

audio.poodll_preview_standard {
    height: 37px;
}

.poodll_preview_standard.poodll_recording {
    border: red;
}

.poodll_save-recording_standard {
    clear: both;
    width: 320px;
}

.poodll_mediarecorderbox_standard {
    width: 370px;
    text-align: center;
}

.poodll_mediarecorder_button_standard {
    margin: 5px;
}

.poodll_status_standard {
    border: black;
    border-style: solid;
    border-width: 2px;
    background-color: #DDD;
    clear: both;
    width: 320px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 8px;
}

.poodll_status_standard.poodll_recording {
    color: red;
    border: red;
}

@media (max-width: 768px) {

    .poodll_mediarecorderbox_standard {
        width: 100%;

    }
}

/* MEDIA RECORDER Split SKIN */

.poodll_mediarecorder_button_split {
    max-width: 370px;
    width: 100%;
    border: 3px solid #555;
    height: 50px;
    border-radius: 20px;
}

.poodll_mediarecorderholder_split .poodll_mediarecorderbox_split h1.poodll_recordTimer {
    font-size: 14px;
    text-align: center;
    margin-top: 20px;
    color: #fff;
    text-shadow: 1px 1px 1px #c2c2c2;
}

.poodll_mediarecorderholder_split_recordcolor, .poodll_mediarecorderholder_split_recordcolor .fa-microphone {
    color: #ff0000;
}

div.poodll_mediarecorderholder_split {
    max-width: 370px;
    width: 100%;
    height: auto;
    margin: auto;
}

div.poodll_mediarecorder_split_topsplit {
    display: block;
    margin: auto;
    /* width: 370px; */
}

.poodll_mediarecorderbox_split hr {
    border: none;
}

.poodll_mediarecorderbox_split {
    /* width: 370px; */
    text-align: left;
}

.poodll_status_split {
    margin-top: 5px;
    width: 100%;
    max-width: 370px;
    height: 30px;
    margin-bottom: 8px;
    text-align: center;
    position: relative;
    /*
	border: black;
	border-style:solid;
	border-width: 2px;
	*/
}

.split_range {
    height: 30px;

    width: 100%;
    max-width: 370px;
    position: absolute;
    display: block;
}

.poodll_statusholder_split {
    position: relative;
    background-color: #EEE;
}

/* MEDIA RECORDER Shadow SKIN */

.marker i {
    margin-left: -40px;
    font-size: 50px;
    color: #333;
    width: 85%;
    background: #f2f2f2;
}

.poodll_mediarecorderholder_shadow {
    width: 370px !important;
    min-height: 220px;
    height: auto;
    margin: 0 auto;
}

.poodll_preview_shadow {
    border: black;
    border-style: solid;
    border-width: 2px;
    background-color: #DDD;
    clear: both;
    width: 100%;
}

.poodll_mediarecorderbox_shadow button {
    width: 27%;
    height: 150px;
    margin-bottom: 10px;
    border-radius: 5%;
    border: 0;
    background-color: #0040ad;
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
    float: left;
}

.poodll_mediarecorderbox_shadow hr {
    border: none;
}

button.poodll_mediarecorder_button_shadow.poodll_play-resource_shadow {
    background-color: #009e0f;
}

button.poodll_mediarecorder_button_shadow.poodll_stop-resource_shadow {
    background-color: #009e0f;
}

button.poodll_mediarecorder_button_shadow.poodll_start-recording_shadow {
    background-color: #2b78e4;
}

button.poodll_mediarecorder_button_shadow.poodll_stop-recording_shadow {
    background-color: #cc0000;
}

button.poodll_mediarecorder_button_shadow.poodll_playback-recording_shadow {
    background-color: #ff00ff;
}

button.poodll_mediarecorder_button_shadow.poodll_stopplayback-recording_shadow {
    background-color: #ff00ff;
}

/* ANIMATION */
.shadow-active {
    -webkit-animation: POODLL-BUTTON-ANIMATION 1s infinite;
    -moz-animation: POODLL-BUTTON-ANIMATION 1s infinite;
    -o-animation: POODLL-BUTTON-ANIMATION 1s infinite;
    animation: POODLL-BUTTON-ANIMATION 1s infinite;
}

@-webkit-keyframes POODLL-BUTTON-ANIMATION {
    0%, 49% {
        background-color: rgba(0, 64, 173, 1);
        border: 3px solid rgba(212, 116, 41, 1);
    }
    50%, 100% {
        background-color: rgba(212, 116, 41, 1);
        border: 3px solid rgba(0, 64, 173, 1);
    }
}

audio.poodll_preview_shadow {
    height: 37px;
}

.poodll_preview_shadow.poodll_recording {
    border: red;
}

.poodll_save-recording_shadow {
    clear: both;
    width: 320px;
}

.poodll_mediarecorderbox_shadow {
    width: 370px;
    text-align: center;
}

.poodll_mediarecorder_button_shadow {
    margin: 5px;
}

.poodll_status_shadow {
    background-color: #DDD;
    clear: both;
    width: 320px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 8px;
}

.poodll_status_standard.poodll_recording {
    color: red;
    border: red;
}

/* MEDIA RECORDER FluencyBuilder SKIN */
.poodll_preview_fluencybuilder {
    border: black;
    border-style: solid;
    border-width: 2px;
    background-color: #DDD;
    clear: both;
    width: 100%;
}

audio.poodll_preview_fluencybuilder {
    height: 37px;
}

.poodll_preview_fluencybuilder.poodll_recording {
    border: red;
}

.poodll_save-recording_fluencybuilder {
    clear: both;
    width: 320px;
}

.poodll_mediarecorderbox_fluencybuilder {
    width: 370px;
    text-align: center;
}

.poodll_mediarecorder_button_fluencybuilder {
    margin: 5px;
}

.poodll_status_fluencybuilder {
    border: black;
    border-style: solid;
    border-width: 2px;
    background-color: #DDD;
    clear: both;
    width: 320px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 8px;
}

.poodll_status_standard.poodll_recording {
    color: red;
    border: red;
}

/* MEDIA RECORDER GOLD SKIN .. */
.poodll_preview_gold {
    border: black;
    border-style: solid;
    border-width: 2px;
    background-color: #DDD;
    clear: both;
    width: 320px;
}

audio.poodll_preview_gold {
    height: 37px;
}

.poodll_preview_gold.poodll_recording {
    border: red;
}

.poodll_save-recording_gold {
    clear: both;
    width: 320px;
}

.poodll_mediarecorderbox_gold {
    width: 370px;
    text-align: center;
}

.poodll_mediarecorder_button_gold {
    margin: 5px;
}

.poodll_status_gold {
    border: black;
    border-style: solid;
    border-width: 2px;
    background-color: #DDD;
    clear: both;
    width: 320px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 8px;
}

.poodll_status_gold.poodll_recording {
    color: red;
    border: red;
}

/* MEDIA RECORDER SKIN BURNT ROSE*/
.poodll_mediarecorderbox_burntrose .poodll_mic {
    margin-top: 30px !important;
}

.poodll_mediarecorderbox_burntrose .poodll_savebtn {
    /* margin-top: 165px !important; */
}

.poodll_mediavideobox {
    background: black !important;
    background-image: none !important;
}

.poodll_mediavideobox2 > .poodll_savebtn {
    margin-left: 152px !important;
    margin-top: 5px !important;
}

.poodll_preview_burntrose {
    border: black;
    border-style: solid;
    border-width: 2px;
    background-color: #DDD;
    clear: both;
    width: 320px;
}

.poodll_mediarecorderbox_burntrose {
    background: black !important;
    width: 352px !important;
    height: 120px !important;
    background-image: none !important;
}

.poodll_status_burntrose {
    clear: both;
    color: #fff;
    margin-left: 130px;
    margin-top: 14px !important;
    position: absolute;
    width: 30px !important;
}

.poodll_mic {
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=mic1) 100% no-repeat;
    height: 31px !important;
    margin-left: 197px !important;
    margin-top: 38px !important;
    position: absolute;
    width: 15px !important;
}

.poodll_savebtn {
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=save1) 100% no-repeat;
    height: 34px !important;
    margin-left: 155px !important;
    margin-top: 77px !important;
    position: absolute;
    width: 99px !important;
}

.poodll_start-recording {
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=arrec) 100% no-repeat;
    height: 45px !important;
    margin-left: 3px !important;
    margin-top: 32px !important;
    position: absolute;
    width: 64px !important;
    background-position: 0px 0px !important;
}

.poodll_start-recording:hover,
.poodll_start-recording:focus {
    background-position: 0px 0px !important;
    outline: none !important;
}

.poodll_play-recording {
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=arplay) 100% no-repeat;
    height: 45px !important;
    margin-left: 59px !important;
    border: none;
    margin-top: 32px !important;
    position: absolute;
    width: 67px !important;
    background-position: 0px 0px !important;
}

.poodll_play-recording:hover,
.poodll_play-recording:focus {
    background-position: 0px 0px !important;
    outline: none !important;
}

.poodll_stop-recording {
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=arstop) 100% no-repeat;
    height: 46px !important;
    width: 64px !important;
    background-position: 0px 0px !important;
    position: absolute;
    margin-left: 0px !important;
    margin-top: 32px !important;
}

.poodll_stop-recording:hover,
.poodll_stop-recording:focus {
    background-position: 0px 0px !important;
    outline: none !important;
}

.poodll_pause-recording {
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=arpause) 100% no-repeat;
    height: 45px !important;
    width: 67px !important;
    border: none;
    margin-top: 32px !important;
    background-position: 0px 0px !important;
    position: absolute;
    margin-left: 59px !important;
}

.poodll_pause-recording:hover,
.poodll_pause-recording:focus {
    background-position: 0px 0px !important;
    outline: none !important;
}

.poodll_resume-recording {
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=arresume) 100% no-repeat;
    height: 45px !important;
    width: 67px !important;
    border: none;
    margin-top: 32px !important;
    background-position: 0px 0px !important;
    position: absolute;
    margin-left: 59px !important;
}

.poodll_resume-recording:hover,
.poodll_resume-recording:focus {
    background-position: 0px 0px !important;
    outline: none !important;
}

.poodll_save-recording_burntrose {
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=save2) 100% no-repeat !important;
    height: 33px !important;
    border: none;
    width: 94px !important;
    margin-left: 155px !important;
    margin-top: 77px !important;

    background-position: 0px 0px !important;
    position: absolute
}

.poodll_save-recording_burntrose:hover,
.poodll_save-recording_burntrose:focus {
    background-position: 0px 0px !important;
    outline: none !important;
}

.poodll_playsave {
    height: 46px !important;
    width: 67px !important;
    border: none !important;
    margin-top: 32px !important;
    background-position: 0px 0px !important;
    position: absolute;
    margin-left: 60px !important;
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=arplaysave) 100% 0 no-repeat;

}

.poodll_playsave:hover,
.poodll_playsave:focus {
    background-position: 0px 0px !important;
    outline: none !important;
}

.poodll_savebtn:hover,
.poodll_savebtn:focus {
    background-position: 0px 0px !important;
    outline: none !important;
}

.poodll_savedsuccessfully {
    background-image: url(pix/savesuccess.png);

    height: 49px !important;
    border: none !important;
    width: 103px !important;
    margin-left: 152px !important;
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=savesuccess) 100% no-repeat;
    margin-top: 69px !important;

    background-position: 0px 0px !important;
    position: absolute
}

.poodll_savedsuccessfully:hover,
.poodll_savedsuccessfully:focus {
    background-position: 0px 0px !important;
    outline: none !important;
}

.poodll_mic:hover,
.poodll_mic:focus {
    background-position: 0px 0px !important;
    outline: none !important;
}

.poodll_recmic {
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=mic3) 100% no-repeat;
    border: none;
    height: 31px !important;
    margin-left: 197px !important;
    width: 19px !important;
    margin-top: 38px !important;
    background-position: 0px 0px !important;
    position: absolute;
}

.poodll_recmic:hover,
.poodll_recmic:focus {
    background-position: 0px 0px !important;
    outline: none !important;
}

.poodll_line {
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=line) 100% 0 repeat;
}

.poodll_resume_mic {
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=mic2) 100% no-repeat;
    border: none;
    height: 34px !important;
    margin-left: 197px !important;
    width: 19px !important;
    margin-top: 39px !important;
    background-position: 0px 0px !important;
    position: absolute;
}

.poodll_resume_mic:hover,
.poodll_resume_mic:focus {
    background-position: 0px 0px !important;
    outline: none !important;
}

.poodll_mediarecorderbox_burntrose > .poodll_status_burntrose {
    margin-left: 176px !important;
    /*margin-top: 263px !important;*/
    position: absolute;
}

.poodll_mediavideobox2 > .poodll_savebtn {
    margin-left: 152px !important;
    margin-top: 39px !important;
}

.poodll_mediavideobox2 > .poodll_start-recording {

    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=arrec) 100% no-repeat;
    height: 49px !important;
    width: 57px !important;
    margin-top: 2px !important;
    margin-left: 3px !important;
}

.poodll_mediavideobox2 > .poodll_stop-recording {
    margin-top: 2px !important;
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=arstop) 100% no-repeat;
    height: 49px !important;
    margin-left: 0px !important;
    width: 59px !important;
}

.poodll_mediavideobox2 > .poodll_pause-recording {
    margin-top: 1px !important;
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=vrpause12) 100% no-repeat;
    height: 45px !important;
    width: 54px !important;
    margin-left: 60px !important;

}

.poodll_mediavideobox2 > .poodll_resume-recording {
    margin-top: 1px !important;
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=vrresume12) 100% no-repeat;
    height: 45px !important;
    width: 54px !important;
    margin-left: 60px !important;
}

.poodll_mediavideobox2 > .poodll_play-recording {

    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=arplay1) 100% no-repeat;
    height: 48px !important;
    margin-left: 60px !important;
    width: 54px !important;
    margin-top: 1px !important;
}

.poodll_mediavideobox2 > .poodll_playsave {

    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=arplaysave2) 100% no-repeat;
    height: 45px !important;
    margin-top: 2px !important;
    width: 54px !important;
    margin-left: 60px !important;

}

.poodll_mediavideobox2 {
    background: #eee url(/theme/image.php?theme=classic&component=filter_poodll&image=vc13) 100% no-repeat;
    width: 323px !important;
    height: 96px !important;
}

.poodll_mediavideobox2 > .poodll_save-recording_burntrose {
    margin-left: 152px !important;
    margin-top: 39px !important;
}

.poodll_mediavideobox2 > .poodll_preview_burntrose {
    width: 278px !important;
}

.poodll_mediavideobox2 > .poodll_savedsuccessfully {
    margin-left: 152px !important;
    margin-top: 40px !important;
}

#messageAlert {
    /*text-align:left*/
}

.filter_poodll_recorder_placeholder {
    display: inline-block;
}

/*
Default skin for Poodll standard media recorder
*/
/*
.filter_poodll_recorder_placeholder{
    background-color: #333;
}
*/
.poodll_mediarecorderbox_standard .charcoal.poodll_mediarecorderholder_standard {
    padding: 20px;
    background-color: #333;
}

.poodll_mediarecorderbox_standard .charcoal .poodll_status_standard {
    padding: 5px;
    background-color: #fff;
}

.poodll_mediarecorderbox_standard .charcoal .poodll_mediarecorder_button_standard {
    background: #fff;
    border: none;
    padding: 5px 10px;
    margin-bottom: 20px;
    color: red;
}

.poodll_mediarecorderbox_standard .charcoal .poodll_save-recording_standard {
    padding: 5px;
    background-color: #fff;
    border: none;
    color: red;
    width: 100%;
}

.poodll_mediarecorderbox_standard .charcoal button.pmr_disabled {
    color: #BBB;
}

.poodll_mediarecorderbox_standard .messages_charcoal.p_messages {
    color: #333;
}

/*-----end-----*/

/*
Flame skin for Poodll standard media recorder
 */

.poodll_mediarecorderholder_standard .flame {
    padding: 0px;
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=flame);
    background-size: 100%;
}

.poodll_mediarecorderholder_standard .flame .poodll_status_standard {
    padding: 30px;
    border: 1px solid #333;
    background-color: #333;
    height: 40px;
    padding: 10px;
    background-color: #fff;
}

.poodll_mediarecorderholder_standard .flame .poodll_mediarecorder_button_standard {
    padding: 0px 10px;
    border: none;
    background-color: #fff;
    border-radius: 0px !important;
    color: red;
    margin-top: 20px;
    margin-bottom: 20px;
    height: 40px;
}

.poodll_mediarecorderholder_standard .flame .poodll_save-recording_standard {
    height: 40px;
    background-color: #fff;
    border: none;
}

.poodll_mediarecorderholder_standard .flame .poodll_mediarecorderbox_standard {
    padding: 30px;
    border: 1px solid;
    background-color: #333;
}

.poodll_mediarecorderholder_standard .flame .poodll_status_standard {
    margin-bottom: 15px;
}

#page-mod-assign-editsubmission .flame .poodll_mediarecorderbox_standard {
    width: 600px !important;
    padding: 20px;
    height: 300px;
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=flame);
    background-size: 100%;
}

#page-mod-assign-editsubmission .poodll_mediarecorderholder_standard .flame .poodll_status_standard {
    height: 10px;
    width: 90%;
    line-height: 10px;
    background-color: transparent;
    color: red;
    font-size: 25px;
    border: none;
}

#page-mod-assign-editsubmission .poodll_mediarecorderholder_standard .flame .poodll_preview_standard {
    width: 50% !important;
    float: left;
    margin-left: 20px;
    height: 155px;
}

.poodll_mediarecorderholder_standard .flame .poodll_save-recording_standard {
    height: 40px;
    background-color: #fff;
    border: none;
    width: 40% !important;
    margin-top: 20px;
    background: transparent;
    color: red;
    opacity: 1;
    border: 1px solid red;
    border-radius: 0px;
    box-shadow: 0px 0px 10px 0px #c2c2c2;
    text-shadow: 1px 2px 1px;
}

#page-mod-assign-editsubmission .poodll_mediarecorderholder_standard .flame .poodll_mediarecorder_button_standard {
    border-radius: 3px !important;
    background: transparent;
    text-shadow: 1px 1px 1px #ccc;
    border: none;
    box-shadow: none;
}

#page-mod-assign-editsubmission .poodll_mediarecorderholder_standard .flame .poodll_preview_standard {
    background: rgba(255, 255, 255, 0.2);
    border: 1px solid #ccc;
}

/*
    child skin for Poodll standard media recorder
*/

.poodll_mediarecorderbox_standard .child .poodll_status_standard {
    background-color: rgba(0, 0, 0, 0.4);
    height: 40px;
    width: 100%;
    border-radius: 20px;
    color: #fff;
    border: 2px solid seagreen;
    font-weight: 900;
    text-shadow: 1px 2px 1px #ccc;
    font-size: 20px;
    line-height: 35px;
}

.poodll_mediarecorderbox_standard .child .poodll_mediarecorder_button_standard {
    padding: 0px 10px;
    border: none;
    background-color: #fff;
    border-radius: 0px;
    color: red;
    margin-top: 20px;
    margin-bottom: 20px;
    height: 40px;
}

.poodll_mediarecorderbox_standard .child .poodll_mediarecorderbox_standard {
    width: 280px;
}

.poodll_mediarecorderbox_standard .child .poodll_preview_standard {
    width: 100%;
}

.poodll_mediarecorderbox_standard .child .poodll_save-recording_standard {
    height: 40px;
    background-color: #fff;
    border: none;
    width: 100%;
}

.poodll_mediarecorderbox_standard .child {
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=child);
    padding: 10px;
    background-size: cover;
}

.poodll_mediarecorderbox_standard .filter_poodll_recorder_placeholder > .child .poodll_mediarecorder_button_standard {
    border: none;
    border-radius: 0px;
    border-radius: 50%;
    margin-bottom: 20px;
    height: 40px;
    width: 40px;
    font-size: 8px;
    color: #fff;
    font-weight: 600;
    background-color: rgba(0, 0, 0, 0.7);
    padding: 0px;
    border: 2px solid seagreen;
    text-shadow: 1px 2px 1px #ccc;
    font-size: 8px;
    font-weight: 900;
}

.poodll_mediarecorderbox_standard .child .poodll_save-recording_standard {
    border-radius: 20px;
    width: 150px;
    color: #fff;
    background-color: rgba(0, 0, 0, 0.4);
    border: 2px solid seagreen;
    text-shadow: 1px 2px 1px #ccc;
}

/***--end--***/

/* standard player overwrite for atto html editor / pop up */

#atto_poodll_container .poodll_mediarecorderbox_standard {
    width: 330px;
}

/*end*/

/*--tinymce--*/
#tinymce_poodll_container > form > div {
    margin-top: 20px !important;
}

.poodll_mediarecorderbox_standard .poodll_mediarecorderholder_onetwothree .pmr_disabled {
    background: rgba(194, 194, 194, 0.7);
    color: #333 !important;
    opacity: 1 !important;
}

/*
    123 recorders skins
*/

.poodll_mediarecorderholder_onetwothree {
    width: 300px;
    padding: 20px;
    border: 3px solid #333;
}

.poodll_mediarecorder_button_onetwothree {
    width: 83% !important;
    margin: 5px auto;
    border: 3px solid #333;
    background: none !important;
    color: #333 !important;
    text-shadow: 1px 2px 1px #c2c2c2;
}

.poodll_mediarecorderbox_onetwothree .poodll_preview_onetwothree {
    border: 3px solid #333;
    background-color: transparent;
    width: 100%;
    margin-bottom: 10px;
}

.poodll_mediarecorderbox_onetwothree .poodll_status_onetwothree {
    text-align: center;
    margin-bottom: 10px;
    width: 100%;
    border: 3px solid #333;
}

.poodll_mediarecorderholder_onetwothree input[type="checkbox"] {
    width: 30px;
    height: 15px;
    margin-top: 10px;

}

.poodll_mediarecorderbox_onetwothree .poodll_status_standard {
    background-color: rgba(0, 0, 0, 0.4);
    height: 40px;
    width: 100%;
    border-radius: 20px;
    color: #fff;
    border: 2px solid seagreen;
    font-weight: 900;
    text-shadow: 1px 2px 1px #ccc;
    font-size: 20px;
    line-height: 35px;
}

.poodll_mediarecorderbox_onetwothree .poodll_mediarecorder_button_standard {
    padding: 0px 10px;
    border: none;
    background-color: #fff;
    border-radius: 0px !important;
    color: red;
    margin-top: 20px;
    margin-bottom: 20px;
    height: 40px;
}

.poodll_mediarecorderbox_onetwothree .poodll_save-recording_standard {
    height: 40px;
    background-color: #fff;
    border: none;
    width: 100% !important;
}

.poodll_mediarecorderbox_onetwothree button.pmr_disabled {
    color: #BBB;
}

.poodll_mediarecorderbox_onetwothree .poodll_mediarecorderbox_standard {
    width: 280px !important;
}

.poodll_mediarecorderbox_onetwothree .poodll_preview_standard {
    width: 100% !important;
}

/* this is global  ... not just 123 player */
.p_messages {
    color: #333;
    width: 100% !important;
}

.p_progress {
    width: 100%;
    margin: 0 auto;
}

/*one two three fixes*/
.poodll_mediarecorderholder_onetwothree {
    background-image: none !important;
    background: #fff !important;
}

.poodll_mediarecorderholder_onetwothree .poodll_mediarecorderbox_onetwothree {
    background-image: none !important;
    background: #fff !important;
}

.pmr_disabled {
    opacity: 0.4 !important;
}


/*
Editor Fixes
*/

#page-lib-editor-atto-plugins-poodll-dialog-poodll {
    background-color: transparent !important;
}

#atto_poodll_container > div {
    text-align: left !important;
}

#page-lib-editor-atto-plugins-poodll-dialog-poodll .poodll_mediavideobox2 {
    width: 100% !important;
}

#page-lib-editor-atto-plugins-poodll-dialog-poodll .poodll_savebtn {
    margin-top: 55px !important;
}

#page-lib-editor-atto-plugins-poodll-dialog-poodll .filter_poodll_recorder_placeholder {

}

#page-lib-editor-atto-plugins-poodll-dialog-poodll .poodll_mediarecorderbox_burntrose .poodll_savebtn {
    margin-top: 80px !important;
    margin-left: 160px !important;
}

#page-lib-editor-atto-plugins-poodll-dialog-poodll .poodll_mediavideobox2 .poodll_recmic {
    margin-top: 5px !important;
}

/*=================START OF FRESH ===============*/

.poodll_mediarecorderholder_fresh .poodll_dialogue_box {
    background: rgba(0, 0, 0, 0.8);
}

.poodll_mediarecorderholder_fresh .poodll_close_modal i {
    font-size: 18px;
    color: #fff;
}

.poodll_mediarecorderholder_fresh .devicesettings_select span {
    margin-left: 5px;
    text-align: center;
    display: block;
    color: #fff;
    font-family: 'Roboto', sans-serif;
    margin-bottom: 10px;
}

.poodll_mediarecorderholder_fresh .poodll_dialogue_box .poodll_dialogue_content {
    display: none;
}

.poodll_mediarecorderholder_fresh .devicesettings_select .select_settings_audio {
    margin: 20px auto;
    padding-left: 15px;
    height: 45px;
    outline: none;
    border-radius: 5px;
    border: none;
    background-color: #ffffff;
    position: relative;
    width: 95%;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=poodll_fresh_arrow_select);
    background-repeat: no-repeat;
    background-position-x: calc(100% - 10px);
    background-position-y: 15px;
    display: block;
    font-size: 12px;
    padding-right: 40px;
}

.poodll_mediarecorderholder_fresh .filter_poodll_mediadevices {
    margin: 30px 0;
}

.poodll_mediarecorderholder_fresh.poodll_mediarecorder_size_auto {
    background-color: #fff;
    border: 1px solid #E3E4F1;
    box-sizing: border-box;
    border-radius: 5px;
    width: 100%;
    padding: 15px 0;
    position: relative;
    overflow: hidden;
    max-width: 370px;
}

.poodll_mediarecorderbox_bmr
.poodll_mediarecorderholder_fresh .settingsicon {
    position: absolute;
    right: -15px;
    bottom: -10px;
}

.poodll_mediarecorderholder_fresh .settingsicon button {
    border: none;
    background: transparent;
}

.poodll_mediarecorderholder_fresh .settingsicon button i {
    font-size: 18px !important;
    color: #333;
}

.poodll_mediarecorderholder_fresh .settingsicon button:focus {
    border: none;
    background: transparent;
}

.poodll_mediarecorderholder_fresh .settingsicon button i:hover {
    cursor: pointer;
}

.poodll_preview_fresh {
    border: black;
    border-style: solid;
    border-width: 2px;
    background-color: #DDD;
    clear: both;
    width: 320px;
}

audio.poodll_preview_fresh {
    height: 37px;
}

.poodll_preview_fresh.poodll_recording {
    border: red;
}

.poodll_save-recording_fresh {
    clear: both;
    width: 320px;
}

.poodll_mediarecorderbox_fresh {
    width: 100%;
    text-align: center;
}

.poodll_mediarecorder_button_fresh {
    margin: 5px;
}

.fresh_range,
.poodll_fresh_playcanvas {
    height: 50px;
    width: 100%;
    position: absolute;
    display: block;
}

.fresh_range {
    display: none !important;
}

.poodll_statusholder_fresh {
    position: relative;
}

.poodll_status_fresh {
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    font-size: 24px;
    text-align: center;
    color: #333333;
    position: relative;
    margin: 0 auto 10px;
    width: 270px;
}

.poodll_status_fresh:before {
    content: '';
    left: -30px;
    top: calc(50% - 9px);
    width: 14px;
    height: 18px;
    position: absolute;
    -webkit-clip-path: polygon(100% 50%, 0 0, 0 100%);
    clip-path: polygon(100% 50%, 0 0, 0 100%);
    /* background-color: #6DDC6F; */
    transition: all 0.3s ease;
}

.poodll_status_fresh.poodll_playing:before {
    background-color: #6DDC6F;
}

.poodll_status_fresh.poodll_recording:before {
    left: -33px;
    width: 18px;
    height: 18px;
    -webkit-clip-path: none;
    clip-path: none;
    background-color: #E24949;
    border-radius: 50%;
}

.poodll_fresh_musik_line {
    margin-bottom: 10px;
    height: 50px;
    display: flex;
}

.poodll_fresh_wave {
    width: 100%;
    position: relative;
    height: 50px;
    /* display: flex; */
    align-items: center;
    justify-content: space-between;
    padding: 0 4px;
    box-sizing: border-box;
    display: none;
}

.poodll_controllbar_playmode .poodll_fresh_wave {
    display: flex;
}

.poodll_controllbar_playmode .fresh_range {
    display: none !important;
}

.poodll_fresh_point {
    width: 2px;
    height: 50px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

.poodll_fresh_stick {
    width: 100%;
    height: 8px;
    background: linear-gradient(32.58deg, #77DB7B 2.3%, #57DA54 126.01%), linear-gradient(32.58deg, #C471ED 2.3%, #EB4A34 126.01%), #C4C4C4;
    transition: height 0.1s ease-in-out;
    position: relative;
    z-index: 5;
}

.poodll_controllbar_pausemode .poodll_fresh_stick {
    height: 4px !important;
    transition: height 0.6s ease;
}

.poodll_fresh_stick_back {
    position: absolute;
    display: block;
    width: 2px;
    background: radial-gradient(34.00px at 50% 50%, #E5E6F2 0%, rgba(255, 255, 255, 0) 100%);
    transition: height 0.3s ease-in-out;
    left: 0;
    top: 50%;
    transform: translateY(-50px);
    z-index: 1;

}

.poodll_fresh_progress_bar {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 2px;
    height: 45px;
    background: linear-gradient(0deg, #4E4A5A, #4E4A5A), linear-gradient(3.4deg, #C471ED 11.02%, #EB4A34 120.06%), #C4C4C4;
    left: 50%;
    z-index: 10;
}

.poodll_fresh_progress_bar:before {
    content: '';
    display: block;
    width: 10px;
    height: 10px;
    background: #4E4A5A;
    border-radius: 100%;
    top: -4px;
    left: -4px;
    position: absolute;
}

.poodll_fresh_progress_bar:after {
    content: '';
    display: block;
    width: 10px;
    height: 10px;
    background: #4E4A5A;
    border-radius: 100%;
    bottom: -4px;
    left: -4px;
    position: absolute;
}

.poodll_fresh_control {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 10px 0;
}

.poodll_fresh_control > div:hover {
    opacity: 0.8;
    transition: all 0.3s ease;
    cursor: pointer;
}

.poodll_fresh_txt_control {
    font-family: 'Roboto', sans-serif;
    font-weight: normal;
    font-size: 12px;
    color: #333333;
    width: 75px;
    text-align: left;
}

.poodll_fresh_settings_btn {
    border: 1px solid #E5E5F2;
    background-color: #FAFBFE;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=poodll_fresh_settings);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.poodll_fresh_main_btn {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #6DDC6F;
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=poodll_fresh_microphone);
    background-repeat: no-repeat;
    background-position: center center;
    position: relative;
    background-size: 20px;
    cursor: pointer;
    transition: 0.3s;
    border: 1px solid transparent;
}

.poodll_fresh_main_btn.bmr_disabled {
    background-color: #fafbfe;
    pointer-events: none;
    border-color: #e6e6f2;
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=poodll_fresh_microphone_grey);
}

.poodll_fresh_main_btn.poodll_in_progress {
    background-color: #E24949;
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=poodll_fresh_square_white);
}

.poodll_fresh_stop_btn {
    border: 1px solid #E5E5F2;
    background-color: #FAFBFE;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=poodll_fresh_square_green);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 15px;
    cursor: pointer;
    transition: 0.3s;
}

.poodll_fresh_pause_btn {
    border: 1px solid #E5E5F2;
    background-color: #FAFBFE;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=poodll_fresh_rectangle_green);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 15px;
    cursor: pointer;
    transition: 0.3s;
}

.poodll_fresh_pause_btn.bmr_disabled {
    background-color: #E5E5F2;
    border-color: #D2D1E4;
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=poodll_fresh_rectangle);
    background-repeat: no-repeat;
    background-position: center center;
}

.poodll_fresh_stop_btn.bmr_disabled {
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=poodll_fresh_square);
}

.poodll_fresh_play_btn {
    background-color: #6DDC6F;
    border: 1px solid #6DDC6F;
    margin-left: 22px;
    width: 50px;
    height: 50px;
    cursor: pointer;
    transition: 0.3s;
    position: relative;
    border-radius: 100%;
}

.poodll_fresh_play_btn:after {
    content: '';
    left: calc(50% - 6px);
    top: calc(50% - 11px);
    width: 18px;
    height: 22px;
    position: absolute;
    -webkit-clip-path: polygon(100% 50%, 0 0, 0 100%);
    clip-path: polygon(100% 50%, 0 0, 0 100%);
    background-color: #fff;
}

.poodll_stop_green {
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=poodll_fresh_square_white);
    background-size: 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.poodll_stop_green:after {
    background-color: transparent;
}

.poodll_fresh_play_btn.bmr_disabled {
    border-color: #D2D1E4 !important;
    background-color: #fff !important;
}

.poodll_fresh_play_btn.bmr_disabled:after {
    background-color: #D2D1E4 !important;
}

.poodll_fresh_play_btn.poodll_play_green {
    background-color: #6ddc6f;
    border: 1px solid #6ddc6f;
}

.poodll_fresh_play_btn.poodll_play_green:after {
    background-color: #fff;
}

.poodll_fresh_play_btn.poodll_play_pause {
    background-color: #E5E5F2;
    border-color: #D2D1E4;
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=poodll_fresh_rectangle);
    background-repeat: no-repeat;
    background-position: center center;
}

.poodll_fresh_play_btn.poodll_play_pause:after {
    background-color: transparent;
}

.poodll_fresh_bottom_btns {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 10px 0;
    margin: 10px 0 0;
    flex-wrap: wrap;
}

.poodll_fresh_bottom_btns a {
    height: 40px;
    width: calc(50% - 5px);
    background-color: #6DDC6F;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Roboto', sans-serif;
    font-weight: normal;
    font-size: 14px;
    text-align: center;
    color: #FFFFFF;
    padding-right: 30px;
    position: relative;
    box-sizing: border-box;
    text-decoration: none;
}

.poodll_fresh_bottom_btns a:before {
    content: "";
    right: 0;
    top: 0;
    position: absolute;
    height: 100%;
    width: 35px;
    background-color: rgba(51, 51, 51, 0.1);
    border-radius: 0px 5px 5px 0px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 16px;
}

a.poodll_fresh_upload_btn:before {
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=poodll_fresh_upload);
}

a.poodll_fresh_record_btn:before {
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=poodll_fresh_record);
}

a.poodll_fresh_upload_btn.bmr_disabled:before {
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=poodll_fresh_upload_grey);
}

a.poodll_fresh_record_btn.bmr_disabled:before {
    background-image: url(/theme/image.php?theme=classic&component=filter_poodll&image=poodll_fresh_record_grey);
}

.poodll_fresh_bottom_btns a.bmr_disabled {
    background-color: #EFEFF6;
    color: #D2D1E4;
    pointer-events: none;
}

.poodll_mediarecorder_button_fresh {
    height: 60px;
    width: 60px;
    border: none;
    z-index: 99999;
    border: 3px solid #f5f5f5;
    border-radius: 50%;
    font-size: 12px;
    padding: 0px;
    position: relative;
    color: transparent;
}

.poodll_mediarecorder_button_fresh i.fa {
    position: absolute;
    left: 11px;
    font-size: 36px;
    top: 9px;
    color: black; /* #333; */
    transition: visibility 0s, opacity 0.5s linear;
}

.poodll_mediarecorderbox_fresh .pmr_disabled {
    display: none !important;
}

.poodll_mediarecorderbox_fresh audio.poodll_preview_fresh {
    display: none !important;
}

.poodll_mediarecorder_button_fresh .floating {
    width: 50%;
    float: right;
    text-align: center;
    color: #fff;
    font-size: 45px;
}

.bmr_disabled {
    pointer-events: none;
}

/* I class */
.poodll_start-recording_fresh i.fa.fa-microphone, .poodll_resume-recording_fresh i.fa.fa-microphone {
    font-size: 42px;
    left: 13px;
    top: 7px;
    color: red;
}

.poodll_start-recording_fresh i.fa.fa-video-camera, .poodll_resume-recording_fresh i.fa.fa-video-camera {
    font-size: 40px;
    left: 8px;
    top: 7px;
    color: red;
}

.poodll_play-recording_fresh i.fa {
    position: absolute;
    left: 14px;
    font-size: 40px;
    top: 7px;
    color: #333;
}

.poodll_mediarecorderbox_fresh .fresh_disabled {
    display: inline-block;
    /*color: transparent;*/
    background-color: rgba(126, 126, 126, 0.7);
}

.poodll_mediarecorderbox_fresh .fresh_disabled i {
    color: rgba(0, 0, 0, 0.7);
}

.poodll_mediarecorderbox_fresh .poodll_resume-recording_fresh {
    display: none;
}

@media (max-width: 768px) {

    .poodll_videorecorderholder_fresh .poodll_mediarecorderbox_fresh {
        padding: 0;
        background-color: transparent;

    }

    .poodll_videorecorderholder_fresh video.poodll_preview_fresh {
        width: 100% !important;
    }

    .poodll_mediarecorderbox_fresh {
        padding: 20px 40px;
        width: 100%;

    }

    .poodll_mediarecorder_button_fresh {
        height: 30px;
        width: 30px;
    }

    .poodll_mediarecorder_button_fresh i.fa {
        left: 5px;
        font-size: 17px;
        top: 3px;
    }

    .poodll_play-recording_fresh i.fa {
        left: 6px;
        font-size: 20px;
        top: 3px;
    }

    .poodll_start-recording_fresh i.fa.fa-microphone, .poodll_resume-recording_fresh i.fa.fa-microphone {
        font-size: 19px;
        left: 6px;
        top: 3px;
        color: red;
    }

    .poodll_start-recording_fresh i.fa.fa-video-camera, .poodll_resume-recording_fresh i.fa.fa-video-camera {
        font-size: 17px;
        left: 4px;
        top: 3px;
        color: red;
    }

}

/*=================END OF FRESH ===============*/

/* MEDIA RECORDER BMR SKIN .. */

.poodll_mediarecorderholder_bmr {
    position: relative;
}

.poodll_mediarecorderholder_bmr .settingsicon {
    position: absolute;
    right: -15px;
    bottom: -10px;
}

.poodll_mediarecorderholder_bmr .settingsicon button {
    border: none;
    background: transparent;
}

.poodll_mediarecorderholder_bmr .settingsicon button i {
    font-size: 18px !important;
    color: #333;
}

.poodll_mediarecorderholder_bmr .settingsicon button:focus {
    border: none;
    background: transparent;
}

.poodll_mediarecorderholder_bmr .settingsicon button i:hover {
    cursor: pointer;
}

.poodll_preview_bmr {
    border: black;
    border-style: solid;
    border-width: 2px;
    background-color: #DDD;
    clear: both;
    width: 320px;
}

audio.poodll_preview_bmr {
    height: 37px;
}

.poodll_preview_bmr.poodll_recording {
    border: red;
}

.poodll_save-recording_bmr {
    clear: both;
    width: 320px;
}

.poodll_mediarecorderbox_bmr {
    width: 370px;
    text-align: center;
}

.poodll_mediarecorder_button_bmr {
    margin: 5px;
}

.bmr_range {
    height: 40px;
    width: 100%;
    position: absolute;
    display: block;
}

.poodll_statusholder_bmr {
    position: relative;
    background-color: #EEE;
}

.poodll_status_bmr {
    border: black;
    border-style: solid;
    border-width: 2px;
    clear: both;
    width: 320px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 8px;
    position: relative;
}

.poodll_status_bmr.poodll_recording {
    color: red;
    border: red;
}

.poodll_mediarecorder_button_bmr {
    height: 60px;
    width: 60px;
    border: none;
    z-index: 99999;
    border: 3px solid #f5f5f5;
    border-radius: 50%;
    font-size: 12px;
    padding: 0px;
    position: relative;
    color: transparent;
}

.poodll_mediarecorder_button_bmr i.fa {
    position: absolute;
    left: 11px;
    font-size: 36px;
    top: 9px;
    color: black; /* #333; */
    transition: visibility 0s, opacity 0.5s linear;
}

.poodll_mediarecorderbox_bmr {
    border: 1px solid #333;
    padding: 20px;
    background-color: #333;
    text-align: center;
    height: auto;
}

.poodll_mediarecorderbox_bmr .pmr_disabled {
    display: none !important;
}

.poodll_status_bmr {
    display: block;
    text-align: center !important;
    width: 100%;
    padding: 10px 0px;
}

.poodll_mediarecorderbox_bmr audio.poodll_preview_bmr {
    display: none !important;
}

.poodll_save-recording_bmr {
    padding: 10px 0;
    margin-top: 20px;
    border: 0;
    width: 100%;
}

.poodll_mediarecorder_button_bmr .floating {
    width: 50%;
    float: right;
    text-align: center;
    color: #fff;
    font-size: 45px;
}

/* I class */
.poodll_start-recording_bmr i.fa.fa-microphone, .poodll_resume-recording_bmr i.fa.fa-microphone {
    font-size: 42px;
    left: 13px;
    top: 7px;
    color: red;
}

.poodll_start-recording_bmr i.fa.fa-video-camera, .poodll_resume-recording_bmr i.fa.fa-video-camera {
    font-size: 40px;
    left: 8px;
    top: 7px;
    color: red;
}

.poodll_play-recording_bmr i.fa {
    position: absolute;
    left: 14px;
    font-size: 40px;
    top: 7px;
    color: #333;
}

.poodll_mediarecorderbox_bmr .bmr_disabled {
    display: inline-block;
    /*color: transparent;*/
    background-color: rgba(126, 126, 126, 0.7);
}

.poodll_mediarecorderbox_bmr .bmr_disabled i {
    color: rgba(0, 0, 0, 0.7);
}

.poodll_mediarecorderbox_bmr .poodll_resume-recording_bmr {
    display: none;
}

@media (max-width: 768px) {

    /*
	BMR - NEW BURNT ROSE
	*/
    .poodll_videorecorderholder_bmr .poodll_mediarecorderbox_bmr {
        padding: 10px;

    }

    .poodll_videorecorderholder_bmr video.poodll_preview_bmr {
        width: 100% !important;
    }

    .poodll_mediarecorderbox_bmr {
        padding: 20px 40px;
        width: 100%;

    }

    .poodll_mediarecorder_button_bmr {
        height: 30px;
        width: 30px;
    }

    .poodll_mediarecorder_button_bmr i.fa {
        left: 5px;
        font-size: 17px;
        top: 3px;
    }

    .poodll_play-recording_bmr i.fa {
        left: 6px;
        font-size: 20px;
        top: 3px;
    }

    .poodll_start-recording_bmr i.fa.fa-microphone, .poodll_resume-recording_bmr i.fa.fa-microphone {
        font-size: 19px;
        left: 6px;
        top: 3px;
        color: red;
    }

    .poodll_start-recording_bmr i.fa.fa-video-camera, .poodll_resume-recording_bmr i.fa.fa-video-camera {
        font-size: 17px;
        left: 4px;
        top: 3px;
        color: red;
    }

    /**---end---**/

}

/*
	New 123 Recorder
*/

@media (max-width: 768px) {

    /*
		onetwothree
	*/
    .video_preview_123 {
        height: 150px;
    }

}

.one-two-three-main-wrapper .one-two-three-wrap {
    text-align: center;
}

.one-two-three-main-wrapper {
    width: 320px;
}

.one-two-three-main-wrapper .one-two-three-wrap button {
    height: 60px !important;
    width: 30% !important;
}

.one-two-three-main-wrapper .task-helper {
    display: inline-flex;
    width: 100%;
}

.one-two-three-main-wrapper .task-helper p {
    width: 33%;
    float: left;
    font-size: 18px;
    margin-bottom: 0px;
}

.one-two-three-main-wrapper .task-helper i.fa {
    color: green;
    font-size: 45px;
}

.one-two-three-main-wrapper .task-helper p.step-1 {
    margin-left: 5px;
}

.one-two-three-main-wrapper .task-helper p.step-3 {
    margin-right: 5px;
}

.one-two-three-main-wrapper .one-two-three-wrap button i.fa {
    font-size: 45px;
    color: #333;
}

/*
	recorder-small
*/
.poodll_mediarecorder_size_small {
    width: 300px;
    margin: 0 auto;
    padding: 10px;
}

.poodll_mediarecorder_size_small .one-two-three-wrap button {
    height: 60px !important;
    width: 25% !important;
}

.poodll_mediarecorder_size_small .one-two-three-wrap button i.fa {
    font-size: 35px;
    color: #333;
}

.poodll_mediarecorder_size_small .task-helper i.fa {
    font-size: 24px;
}

.poodll_mediarecorder_size_small .task-helper p {
    font-size: 14px;
}

.poodll_mediarecorder_size_small .task-helper p.step-3 {
    margin-right: 25px;
}

.poodll_mediarecorder_size_small .task-helper p.step-1 {
    margin-left: 25px;
}

.poodll_mediarecorder_size_small .poodll_preview_burntrose {
    width: 280px;
}

.poodll_mediarecorder_size_small .poodll_mediarecorderbox_standard {
    width: 285px !important;
}

.poodll_mediarecorder_size_small .child {
    background-size: cover;
}

/*
	recorder-auto
*/
.filter_poodll_recorder_placeholder {
    max-width: 100%;
    width: 100%;
}

.poodll_mediarecorder_size_auto {
    width: auto;
    max-width: 500px;
}

.poodll_mediarecorder_size_auto .poodll_preview_burntrose {
    width: 100%;
}

.poodll_mediarecorder_size_auto .poodll_mediavideobox2 {
    width: 90% !important;
    margin: 0 auto;
    background-color: transparent !important;
    background: none;
}

.poodll_mediarecorder_size_auto .poodll_status_burntrose {
    width: 600px !important;
    text-align: center;
    margin: 0 auto;
}

.poodll_mediarecorder_size_auto .one-two-three-wrap {
    min-width: 200px;
    max-width: 100%;
}

/*
	Standard - Charcoal Skin
*/

.poodll_mediarecorder_size_auto .poodll_mediarecorderbox_standard button {
    padding: 5px 7px;
}

.poodll_mediarecorderholder_standard .poodll_mediarecorderbox_standard .charcoal {
    background-color: #333;
    padding: 20px;
}

.poodll_mediarecorderbox_standard .poodll_status_standard {
    width: 100% !important;
}

.poodll_mediarecorder_size_small .poodll_status_standard .poodll_preview_standard {
    width: 100% !important;
}

.poodll_mediarecorder_size_small .poodll_mediarecorderbox_standard button {
    padding: 5px;
}

.poodll_mediarecorder_size_small .poodll_mediarecorderbox_standard .charcoal {
    padding: 15px;
}

.poodll_mediarecorder_size_small .poodll_save-recording_standard {
    width: 100%;
}

.poodll_mediarecorder_size_small {
    border: 1px solid #333;
}

.poodll_mediarecorder_size_small .poodll_mediarecorderbox_standard {
    width: 100% !important;
}

.poodll_mediarecorder_size_auto {
    border: 1px solid #333;
    padding: 20px;
}

.poodll_mediarecorder_size_auto .poodll_mediarecorderbox_standard {
    width: 100%;
}

.poodll_mediarecorder_size_auto .poodll_save-recording_standard {
    width: 100%;
}

/*FBMEDIA*/

.poodll_mediarecorderholder_fluencybuilder {
    width: 120px;
    padding: 20px;
    margin: 20px 0px;
    background-color: rgba(0, 0, 0, 1);
}

.poodll_mediarecorderbox_fluencybuilder {
    width: 100%;
}

.fb_bwrapper {
    border: 0px !important
}

.fb_bwrapper button {
    -webkit-appearance: button;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: none;
    font-size: 30px;
    padding: 0px;
    color: #333;
}

.mod_fluencybuilder_autobutton_inactive {
    color: #c2c2c2;
}

.mod_fluencybuilder_autobutton_active button {
    box-shadow: inset 0 0 50px #fff, /* inner white */ inset 20px 0 80px #f0f, /* inner left magenta short */ inset -20px 0 80px #0ff, /* inner right cyan short */ inset 20px 0 300px #f0f, /* inner left magenta broad */ inset -20px 0 300px #0ff, /* inner right cyan broad */ 0 0 50px #fff, /* outer white */ -10px 0 80px #f0f, /* outer left magenta */ 10px 0 80px #0ff;
    color: #fff;
}

.mod_fluencybuilder_dialogcontentbox button i.fa {
    font-size: 50px;
    color: #333;
}

.mod_fluencybuilder_me_play {
    margin-right: 20px;
}

.mod_fluencybuilder_dialogcontentbox button.mod_fluencybuilder_me_ok {
    border: 0px;
    background-color: transparent
}

.mod_fluencybuilder_dialogcontentbox button.mod_fluencybuilder_me_ng {
    border: 0px;
    background-color: transparent;
}

.mod_fluencybuilder_dialogcontentbox .mod_fluencybuilder_dbutton i.fa:hover {
    color: cadetblue;
    -webkit-transition: color 1s ease-out;
    -moz-transition: color 1s ease-out;
    -o-transition: color 1s ease-out;
    transition: color 1s ease-out;
}

.mod_fluencybuilder_dialogcontentbox .mod_fluencybuilder_me_play {
    border: 2px solid;
    margin-right: 50px;
}

.mod_fluencybuilder_dialogcontentbox .mod_fluencybuilder_me_play:hover {
    border-color: cadetblue;
    -webkit-transition: border-color 1s ease-out;
    -moz-transition: border-color 1s ease-out;
    -o-transition: border-color 1s ease-out;
    transition: border-color 1s ease-out;
}


/* Poodll Super Audio Player */

.poodll-super-player {
    border: 1px solid black;
    border-radius:5px;
}

.poodll-super-player-time,
.poodll-super-player-image,
.poodll-super-player-waveform,
.poodll-super-player-captions,
.poodll-super-player-controls,
.poodll-super-player-speed-controls
{
    background-color: #f5f5f5;
    box-sizing: border-box;
}

.poodll-super-player-time {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 40px;
    border-bottom: 1px solid black;
    font-size: 24px;
    font-weight: bold;
}

.poodll-super-player-image {
    justify-content: center;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    height: 300px;
}

.poodll-super-player-captions {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 20px;
    height: 50px;
    border-bottom: 1px solid black;
    font-size: 20px;
}

.poodll-super-player-waveform {
    border-bottom: 1px solid black;
    background-image: url('https://misc.poodll.com/pr/mod/wordcards/pix/spinner.gif');
    background-position: center;
    background-repeat: no-repeat;
}

.poodll-super-player-controls {
    display: flex;
    align-items: center;
    justify-content: center;
}

.poodll-super-player-speed-controls {
    display: flex;
    align-items: center;
    justify-content: center;
}

.poodll-super-player-ctrl {
    border-radius: 10px;
    border: 1px solid black;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    margin: 5px;
    cursor: pointer;
    box-shadow: inset 0 -0.6em 1em -0.35em rgba(0,0,0,0.17),inset 0 0.6em 2em -0.3em rgba(255,255,255,0.15),inset 0 0 0em 0.05em rgba(255,255,255,0.12);
}

.poodll-super-player-ctrl:active {
    box-shadow: inset 0 0.6em 2em -0.3em rgba(0,0,0,0.15),inset 0 0 0em 0.05em rgba(255,255,255,0.12);
}

.poodll-super-player-ctrl-small {
    border-radius: 5px;
    border: 1px solid black;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 25px;
    cursor: pointer;
    box-shadow: inset 0 -0.6em 1em -0.35em rgba(0,0,0,0.17),inset 0 0.6em 2em -0.3em rgba(255,255,255,0.15),inset 0 0 0em 0.05em rgba(255,255,255,0.12);
    margin: 5px;
}

.poodll-super-player-ctrl-small:active {
    box-shadow: inset 0 0.6em 2em -0.3em rgba(0,0,0,0.15),inset 0 0 0em 0.05em rgba(255,255,255,0.12);
}

.poodll-super-player-play {
    width: 100px;
}

.poodll-super-player-playback-rate {
    margin-left: 10px;
}
/* Poodll Super Audio Player END */

/* Poodll Once Player start */
.poodll_onceplayer_progress {
    width:100%;
    background-color:grey;
    position:relative;
}

.poodll_onceplayer_progress_inner {
    position:absolute;
    left:0;
    top:0;
    bottom:0;
    right:0;
    background-color:green;
}

.poodll_onceplayer {
    border: 3px solid blue;
    /* Safari 3-4, iOS 1-3.2, Android 1.6- */
    -webkit-border-radius: 12px;
    /* Firefox 1-3.6 */
    -moz-border-radius: 12px;
    /* Opera 10.5, IE 9, Safari 5, Chrome, Firefox 4, iOS 4, Android 2.1+ */
    border-radius: 12px;
    background-color: white;
    width: 200px;
    height: 110px;
    text-align: center;
}
.poodll_onceplayer_time {
    padding: 3px;
}
.poodll_onceplayer_button {
    border: 1px solid;
    width: 50px;
    height: 42px;
    margin-top: 5px;
    margin-top: 5px;
}

/* Poodll Once Player END */
/* Poodll Multi Player start */
.poodll_multiplayer{
    border: 3px solid #333;
    width: 250px;
    height: 120px;
    text-align: center;
    /* margin-bottom: 100px; */
    padding: 10px;
    background-color: #333;
    color: #fff;
    position: relative;
}
.poodll_multiplayer  .skin {
    height: 200px;
    background-repeat: no-repeat;
    background-size: 100%;
}
.poodll_multiplayer   .poodll_multiplayer_button {
    border: none;
    width: 50px;
    height: 42px;
}
.poodll_multiplayer .custom-pause:before {

    content: "\f04b";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;


}
.poodll_multiplayer .vol-but {
    width: 25px;
    float: right;
    padding: 0px;
}
.poodll_multiplayer .volume-control .vol-up:before {
    content: "\f028";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
}
.poodll_multiplayer .volume-control .vol-down:before {
    content: "\f027";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
}
.poodll_multiplayer .meter {
    width: 130px;
    height: 15px;
    border: 1px solid #333;
    margin-top: 5px;
    float: right;
    margin-left: 5px;
}
.poodll_multiplayer .indicator {
    height: 100%;
    width: 20%;
    background-color: red;
    min-width: 0%;
    max-width: 100%;
}
.poodll_multiplayer .button-wrapper {
    width: 30%;
    float: left;
}
.poodll_multiplayer .state-wrapper {
    width: 70%;
    float: left;
}
.poodll_multiplayer .volume-control {
    position: absolute;
    text-align: center;
    bottom: 20px;
}

/* Poodll Multi Player END */

/* Poodll Mini Player START */
.mini_player_container {
    max-width: 70px;
    min-width: 70px;
    max-height: 70px;
}
.mini_player_holder {
    overflow: hidden;
    transform: scale(0.5);
    width: 140px;
    height: 140px;
    padding: 0;
    margin: 0;
    display: inline-block;
    transform-origin: top left;
}

.mini_player_loading {
    pointer-events: none;
    opacity: 0.5;
}

.progress-circle {
    font-size: 20px;
    margin: 20px;
    position: relative; /* so that children can be absolutely positioned */
    padding: 0;
    width: 5em;
    height: 5em;
    background-color: #F2E9E1;
    border-radius: 50%;
    line-height: 5em;
}

.progress-circle:after {
    border: none;
    position: absolute;
    top: 0.35em;
    left: 0.35em;
    text-align: center;
    display: block;
    border-radius: 50%;
    width: 4.3em;
    height: 4.3em;
    background-color: white;
    content: " ";
}
/* Text inside the control */
.progress-circle .play-btn {
    position: absolute;
    color: #53777A;
    z-index: 2;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
    font-size: 50px;
    cursor: pointer;
}
.left-half-clipper {
    /* a round circle */
    border-radius: 50%;
    width: 5em;
    height: 5em;
    position: absolute; /* needed for clipping */
    clip: rect(0, 5em, 5em, 2.5em); /* clips the whole left half*/
}
/* when p>50, don't clip left half*/
.progress-circle.over50 .left-half-clipper {
    clip: rect(auto,auto,auto,auto);
}
.value-bar {
    /*This is an overlayed square, that is made round with the border radius,
    then it is cut to display only the left half, then rotated clockwise
    to escape the outer clipping path.*/
    position: absolute; /*needed for clipping*/
    clip: rect(0, 2.5em, 5em, 0);
    width: 5em;
    height: 5em;
    border-radius: 50%;
    border: 0.45em solid #53777A; /*The border is 0.35 but making it larger removes visual artifacts */
    /*background-color: #4D642D;*/ /* for debug */
    box-sizing: border-box;

}
/* Progress bar filling the whole right half for values above 50% */
.progress-circle.over50 .first50-bar {
    /*Progress bar for the first 50%, filling the whole right half*/
    position: absolute; /*needed for clipping*/
    clip: rect(0, 5em, 5em, 2.5em);
    background-color: #53777A;
    border-radius: 50%;
    width: 5em;
    height: 5em;
}
.progress-circle:not(.over50) .first50-bar{ display: none; }


/* Progress bar rotation position */
.progress-circle.p0 .value-bar { display: none; }
.progress-circle.p1 .value-bar { transform: rotate(4deg); }
.progress-circle.p2 .value-bar { transform: rotate(7deg); }
.progress-circle.p3 .value-bar { transform: rotate(11deg); }
.progress-circle.p4 .value-bar { transform: rotate(14deg); }
.progress-circle.p5 .value-bar { transform: rotate(18deg); }
.progress-circle.p6 .value-bar { transform: rotate(22deg); }
.progress-circle.p7 .value-bar { transform: rotate(25deg); }
.progress-circle.p8 .value-bar { transform: rotate(29deg); }
.progress-circle.p9 .value-bar { transform: rotate(32deg); }
.progress-circle.p10 .value-bar { transform: rotate(36deg); }
.progress-circle.p11 .value-bar { transform: rotate(40deg); }
.progress-circle.p12 .value-bar { transform: rotate(43deg); }
.progress-circle.p13 .value-bar { transform: rotate(47deg); }
.progress-circle.p14 .value-bar { transform: rotate(50deg); }
.progress-circle.p15 .value-bar { transform: rotate(54deg); }
.progress-circle.p16 .value-bar { transform: rotate(58deg); }
.progress-circle.p17 .value-bar { transform: rotate(61deg); }
.progress-circle.p18 .value-bar { transform: rotate(65deg); }
.progress-circle.p19 .value-bar { transform: rotate(68deg); }
.progress-circle.p20 .value-bar { transform: rotate(72deg); }
.progress-circle.p21 .value-bar { transform: rotate(76deg); }
.progress-circle.p22 .value-bar { transform: rotate(79deg); }
.progress-circle.p23 .value-bar { transform: rotate(83deg); }
.progress-circle.p24 .value-bar { transform: rotate(86deg); }
.progress-circle.p25 .value-bar { transform: rotate(90deg); }
.progress-circle.p26 .value-bar { transform: rotate(94deg); }
.progress-circle.p27 .value-bar { transform: rotate(97deg); }
.progress-circle.p28 .value-bar { transform: rotate(101deg); }
.progress-circle.p29 .value-bar { transform: rotate(104deg); }
.progress-circle.p30 .value-bar { transform: rotate(108deg); }
.progress-circle.p31 .value-bar { transform: rotate(112deg); }
.progress-circle.p32 .value-bar { transform: rotate(115deg); }
.progress-circle.p33 .value-bar { transform: rotate(119deg); }
.progress-circle.p34 .value-bar { transform: rotate(122deg); }
.progress-circle.p35 .value-bar { transform: rotate(126deg); }
.progress-circle.p36 .value-bar { transform: rotate(130deg); }
.progress-circle.p37 .value-bar { transform: rotate(133deg); }
.progress-circle.p38 .value-bar { transform: rotate(137deg); }
.progress-circle.p39 .value-bar { transform: rotate(140deg); }
.progress-circle.p40 .value-bar { transform: rotate(144deg); }
.progress-circle.p41 .value-bar { transform: rotate(148deg); }
.progress-circle.p42 .value-bar { transform: rotate(151deg); }
.progress-circle.p43 .value-bar { transform: rotate(155deg); }
.progress-circle.p44 .value-bar { transform: rotate(158deg); }
.progress-circle.p45 .value-bar { transform: rotate(162deg); }
.progress-circle.p46 .value-bar { transform: rotate(166deg); }
.progress-circle.p47 .value-bar { transform: rotate(169deg); }
.progress-circle.p48 .value-bar { transform: rotate(173deg); }
.progress-circle.p49 .value-bar { transform: rotate(176deg); }
.progress-circle.p50 .value-bar { transform: rotate(180deg); }
.progress-circle.p51 .value-bar { transform: rotate(184deg); }
.progress-circle.p52 .value-bar { transform: rotate(187deg); }
.progress-circle.p53 .value-bar { transform: rotate(191deg); }
.progress-circle.p54 .value-bar { transform: rotate(194deg); }
.progress-circle.p55 .value-bar { transform: rotate(198deg); }
.progress-circle.p56 .value-bar { transform: rotate(202deg); }
.progress-circle.p57 .value-bar { transform: rotate(205deg); }
.progress-circle.p58 .value-bar { transform: rotate(209deg); }
.progress-circle.p59 .value-bar { transform: rotate(212deg); }
.progress-circle.p60 .value-bar { transform: rotate(216deg); }
.progress-circle.p61 .value-bar { transform: rotate(220deg); }
.progress-circle.p62 .value-bar { transform: rotate(223deg); }
.progress-circle.p63 .value-bar { transform: rotate(227deg); }
.progress-circle.p64 .value-bar { transform: rotate(230deg); }
.progress-circle.p65 .value-bar { transform: rotate(234deg); }
.progress-circle.p66 .value-bar { transform: rotate(238deg); }
.progress-circle.p67 .value-bar { transform: rotate(241deg); }
.progress-circle.p68 .value-bar { transform: rotate(245deg); }
.progress-circle.p69 .value-bar { transform: rotate(248deg); }
.progress-circle.p70 .value-bar { transform: rotate(252deg); }
.progress-circle.p71 .value-bar { transform: rotate(256deg); }
.progress-circle.p72 .value-bar { transform: rotate(259deg); }
.progress-circle.p73 .value-bar { transform: rotate(263deg); }
.progress-circle.p74 .value-bar { transform: rotate(266deg); }
.progress-circle.p75 .value-bar { transform: rotate(270deg); }
.progress-circle.p76 .value-bar { transform: rotate(274deg); }
.progress-circle.p77 .value-bar { transform: rotate(277deg); }
.progress-circle.p78 .value-bar { transform: rotate(281deg); }
.progress-circle.p79 .value-bar { transform: rotate(284deg); }
.progress-circle.p80 .value-bar { transform: rotate(288deg); }
.progress-circle.p81 .value-bar { transform: rotate(292deg); }
.progress-circle.p82 .value-bar { transform: rotate(295deg); }
.progress-circle.p83 .value-bar { transform: rotate(299deg); }
.progress-circle.p84 .value-bar { transform: rotate(302deg); }
.progress-circle.p85 .value-bar { transform: rotate(306deg); }
.progress-circle.p86 .value-bar { transform: rotate(310deg); }
.progress-circle.p87 .value-bar { transform: rotate(313deg); }
.progress-circle.p88 .value-bar { transform: rotate(317deg); }
.progress-circle.p89 .value-bar { transform: rotate(320deg); }
.progress-circle.p90 .value-bar { transform: rotate(324deg); }
.progress-circle.p91 .value-bar { transform: rotate(328deg); }
.progress-circle.p92 .value-bar { transform: rotate(331deg); }
.progress-circle.p93 .value-bar { transform: rotate(335deg); }
.progress-circle.p94 .value-bar { transform: rotate(338deg); }
.progress-circle.p95 .value-bar { transform: rotate(342deg); }
.progress-circle.p96 .value-bar { transform: rotate(346deg); }
.progress-circle.p97 .value-bar { transform: rotate(349deg); }
.progress-circle.p98 .value-bar { transform: rotate(353deg); }
.progress-circle.p99 .value-bar { transform: rotate(356deg); }
.progress-circle.p100 .value-bar { transform: rotate(360deg); }
/* Poodll MINI Player END */
.filter_poodll_skeleton_box {
    background-color: #DDDBDD;
    color: grey;
    -webkit-mask: linear-gradient(-60deg,#000 30%,#0005,#000 70%) right/300% 100%;
    background-repeat: no-repeat;
    animation: filterpoodllshimmer 2.5s infinite;

}
@keyframes filterpoodllshimmer {
    100% {-webkit-mask-position:left}
}
