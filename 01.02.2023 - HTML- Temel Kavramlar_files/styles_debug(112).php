/** Path: plugin assignfeedback_poodll .' **/
.assignfeedback_poodll_whiteboardwidth{
 max-width: 80%;
}
.assignfeedback_poodll_snapshotwidth{
 max-width: 80%;
}


.assignfeedback_poodll_video {
 position: absolute;
 top: 0;
 left: 0;
 width: 100%;
 height: 100%;
}

.assignfeedback_poodll_video_cont {
 position: relative;
 height: 0;
 max-width: 480px;
 min-width: 240px;
}


.assignfeedback_poodll_audio {
 width: 100%;
 min-width: 240px;
}


@supports (padding-top: min(540px,150%)) {

.assignfeedback_poodll_video_cont {
  padding-bottom: min(360px,75%);
 }
}
@supports not (padding-top: min(540px,150%)) {

 .assignfeedback_poodll_video_cont {
  padding-bottom: 360px;
 }
}

@media screen and (max-width: 667px) {

 .assignfeedback_poodll_video_cont {
  padding-bottom: 75%;
 }
}

/* this is not set on some themes and can collapse our responsive stuff */
.form-control-static {
 width: 100%;
}

