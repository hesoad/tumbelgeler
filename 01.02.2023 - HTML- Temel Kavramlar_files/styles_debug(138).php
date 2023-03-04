@charset "UTF-8";
/** Pre-SCSS from theme_boost_get_pre_scss **/
/** Pre-SCSS from theme_classic_get_pre_scss **/
@font-face {
  font-family: "FontAwesome";
  src: url("/theme/font.php?theme=classic&component=core&font=fontawesome-webfont.eot?v=4.7.0");
  src: url("/theme/font.php?theme=classic&component=core&font=fontawesome-webfont.eot?#iefix&v=4.7.0") format("embedded-opentype"), url("/theme/font.php?theme=classic&component=core&font=fontawesome-webfont.woff2?v=4.7.0") format("woff2"), url("/theme/font.php?theme=classic&component=core&font=fontawesome-webfont.woff?v=4.7.0") format("woff"), url("/theme/font.php?theme=classic&component=core&font=fontawesome-webfont.ttf?v=4.7.0") format("truetype"), url("/theme/font.php?theme=classic&component=core&font=fontawesome-webfont.svg?v=4.7.0#fontawesomeregular") format("svg");
  font-weight: normal;
  font-style: normal;
}
/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.3333333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.2857142857em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.1428571429em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.1428571429em;
  width: 2.1428571429em;
  top: 0.1428571429em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.8571428571em;
}
.fa-border {
  padding: 0.2em 0.25em 0.15em;
  border: solid 0.08em #eee;
  border-radius: 0.1em;
}
.fa-pull-left {
  float: left;
}
.fa-pull-right {
  float: right;
}
.fa.fa-pull-left {
  margin-right: 0.3em;
}
.fa.fa-pull-right {
  margin-left: 0.3em;
}
/* Deprecated as of 4.4.0 */
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: 0.3em;
}
.fa.pull-right {
  margin-left: 0.3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90, :root .fa-rotate-180, :root .fa-rotate-270, :root .fa-flip-horizontal, :root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x, .fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #fff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: "";
}
.fa-music:before {
  content: "";
}
.fa-search:before {
  content: "";
}
.fa-envelope-o:before {
  content: "";
}
.fa-heart:before {
  content: "";
}
.fa-star:before {
  content: "";
}
.fa-star-o:before {
  content: "";
}
.fa-user:before {
  content: "";
}
.fa-film:before {
  content: "";
}
.fa-th-large:before {
  content: "";
}
.fa-th:before {
  content: "";
}
.fa-th-list:before {
  content: "";
}
.fa-check:before {
  content: "";
}
.fa-remove:before, .fa-close:before, .fa-times:before {
  content: "";
}
.fa-search-plus:before {
  content: "";
}
.fa-search-minus:before {
  content: "";
}
.fa-power-off:before {
  content: "";
}
.fa-signal:before {
  content: "";
}
.fa-gear:before, .fa-cog:before {
  content: "";
}
.fa-trash-o:before {
  content: "";
}
.fa-home:before {
  content: "";
}
.fa-file-o:before {
  content: "";
}
.fa-clock-o:before {
  content: "";
}
.fa-road:before {
  content: "";
}
.fa-download:before {
  content: "";
}
.fa-arrow-circle-o-down:before {
  content: "";
}
.fa-arrow-circle-o-up:before {
  content: "";
}
.fa-inbox:before {
  content: "";
}
.fa-play-circle-o:before {
  content: "";
}
.fa-rotate-right:before, .fa-repeat:before {
  content: "";
}
.fa-refresh:before {
  content: "";
}
.fa-list-alt:before {
  content: "";
}
.fa-lock:before {
  content: "";
}
.fa-flag:before {
  content: "";
}
.fa-headphones:before {
  content: "";
}
.fa-volume-off:before {
  content: "";
}
.fa-volume-down:before {
  content: "";
}
.fa-volume-up:before {
  content: "";
}
.fa-qrcode:before {
  content: "";
}
.fa-barcode:before {
  content: "";
}
.fa-tag:before {
  content: "";
}
.fa-tags:before {
  content: "";
}
.fa-book:before {
  content: "";
}
.fa-bookmark:before {
  content: "";
}
.fa-print:before {
  content: "";
}
.fa-camera:before {
  content: "";
}
.fa-font:before {
  content: "";
}
.fa-bold:before {
  content: "";
}
.fa-italic:before {
  content: "";
}
.fa-text-height:before {
  content: "";
}
.fa-text-width:before {
  content: "";
}
.fa-align-left:before {
  content: "";
}
.fa-align-center:before {
  content: "";
}
.fa-align-right:before {
  content: "";
}
.fa-align-justify:before {
  content: "";
}
.fa-list:before {
  content: "";
}
.fa-dedent:before, .fa-outdent:before {
  content: "";
}
.fa-indent:before {
  content: "";
}
.fa-video-camera:before {
  content: "";
}
.fa-photo:before, .fa-image:before, .fa-picture-o:before {
  content: "";
}
.fa-pencil:before {
  content: "";
}
.fa-map-marker:before {
  content: "";
}
.fa-adjust:before {
  content: "";
}
.fa-tint:before {
  content: "";
}
.fa-edit:before, .fa-pencil-square-o:before {
  content: "";
}
.fa-share-square-o:before {
  content: "";
}
.fa-check-square-o:before {
  content: "";
}
.fa-arrows:before {
  content: "";
}
.fa-step-backward:before {
  content: "";
}
.fa-fast-backward:before {
  content: "";
}
.fa-backward:before {
  content: "";
}
.fa-play:before {
  content: "";
}
.fa-pause:before {
  content: "";
}
.fa-stop:before {
  content: "";
}
.fa-forward:before {
  content: "";
}
.fa-fast-forward:before {
  content: "";
}
.fa-step-forward:before {
  content: "";
}
.fa-eject:before {
  content: "";
}
.fa-chevron-left:before {
  content: "";
}
.fa-chevron-right:before {
  content: "";
}
.fa-plus-circle:before {
  content: "";
}
.fa-minus-circle:before {
  content: "";
}
.fa-times-circle:before {
  content: "";
}
.fa-check-circle:before {
  content: "";
}
.fa-question-circle:before {
  content: "";
}
.fa-info-circle:before {
  content: "";
}
.fa-crosshairs:before {
  content: "";
}
.fa-times-circle-o:before {
  content: "";
}
.fa-check-circle-o:before {
  content: "";
}
.fa-ban:before {
  content: "";
}
.fa-arrow-left:before {
  content: "";
}
.fa-arrow-right:before {
  content: "";
}
.fa-arrow-up:before {
  content: "";
}
.fa-arrow-down:before {
  content: "";
}
.fa-mail-forward:before, .fa-share:before {
  content: "";
}
.fa-expand:before {
  content: "";
}
.fa-compress:before {
  content: "";
}
.fa-plus:before {
  content: "";
}
.fa-minus:before {
  content: "";
}
.fa-asterisk:before {
  content: "";
}
.fa-exclamation-circle:before {
  content: "";
}
.fa-gift:before {
  content: "";
}
.fa-leaf:before {
  content: "";
}
.fa-fire:before {
  content: "";
}
.fa-eye:before {
  content: "";
}
.fa-eye-slash:before {
  content: "";
}
.fa-warning:before, .fa-exclamation-triangle:before {
  content: "";
}
.fa-plane:before {
  content: "";
}
.fa-calendar:before {
  content: "";
}
.fa-random:before {
  content: "";
}
.fa-comment:before {
  content: "";
}
.fa-magnet:before {
  content: "";
}
.fa-chevron-up:before {
  content: "";
}
.fa-chevron-down:before {
  content: "";
}
.fa-retweet:before {
  content: "";
}
.fa-shopping-cart:before {
  content: "";
}
.fa-folder:before {
  content: "";
}
.fa-folder-open:before {
  content: "";
}
.fa-arrows-v:before {
  content: "";
}
.fa-arrows-h:before {
  content: "";
}
.fa-bar-chart-o:before, .fa-bar-chart:before {
  content: "";
}
.fa-twitter-square:before {
  content: "";
}
.fa-facebook-square:before {
  content: "";
}
.fa-camera-retro:before {
  content: "";
}
.fa-key:before {
  content: "";
}
.fa-gears:before, .fa-cogs:before {
  content: "";
}
.fa-comments:before {
  content: "";
}
.fa-thumbs-o-up:before {
  content: "";
}
.fa-thumbs-o-down:before {
  content: "";
}
.fa-star-half:before {
  content: "";
}
.fa-heart-o:before {
  content: "";
}
.fa-sign-out:before {
  content: "";
}
.fa-linkedin-square:before {
  content: "";
}
.fa-thumb-tack:before {
  content: "";
}
.fa-external-link:before {
  content: "";
}
.fa-sign-in:before {
  content: "";
}
.fa-trophy:before {
  content: "";
}
.fa-github-square:before {
  content: "";
}
.fa-upload:before {
  content: "";
}
.fa-lemon-o:before {
  content: "";
}
.fa-phone:before {
  content: "";
}
.fa-square-o:before {
  content: "";
}
.fa-bookmark-o:before {
  content: "";
}
.fa-phone-square:before {
  content: "";
}
.fa-twitter:before {
  content: "";
}
.fa-facebook-f:before, .fa-facebook:before {
  content: "";
}
.fa-github:before {
  content: "";
}
.fa-unlock:before {
  content: "";
}
.fa-credit-card:before {
  content: "";
}
.fa-feed:before, .fa-rss:before {
  content: "";
}
.fa-hdd-o:before {
  content: "";
}
.fa-bullhorn:before {
  content: "";
}
.fa-bell:before {
  content: "";
}
.fa-certificate:before {
  content: "";
}
.fa-hand-o-right:before {
  content: "";
}
.fa-hand-o-left:before {
  content: "";
}
.fa-hand-o-up:before {
  content: "";
}
.fa-hand-o-down:before {
  content: "";
}
.fa-arrow-circle-left:before {
  content: "";
}
.fa-arrow-circle-right:before {
  content: "";
}
.fa-arrow-circle-up:before {
  content: "";
}
.fa-arrow-circle-down:before {
  content: "";
}
.fa-globe:before {
  content: "";
}
.fa-wrench:before {
  content: "";
}
.fa-tasks:before {
  content: "";
}
.fa-filter:before {
  content: "";
}
.fa-briefcase:before {
  content: "";
}
.fa-arrows-alt:before {
  content: "";
}
.fa-group:before, .fa-users:before {
  content: "";
}
.fa-chain:before, .fa-link:before {
  content: "";
}
.fa-cloud:before {
  content: "";
}
.fa-flask:before {
  content: "";
}
.fa-cut:before, .fa-scissors:before {
  content: "";
}
.fa-copy:before, .fa-files-o:before {
  content: "";
}
.fa-paperclip:before {
  content: "";
}
.fa-save:before, .fa-floppy-o:before {
  content: "";
}
.fa-square:before {
  content: "";
}
.fa-navicon:before, .fa-reorder:before, .fa-bars:before {
  content: "";
}
.fa-list-ul:before {
  content: "";
}
.fa-list-ol:before {
  content: "";
}
.fa-strikethrough:before {
  content: "";
}
.fa-underline:before {
  content: "";
}
.fa-table:before {
  content: "";
}
.fa-magic:before {
  content: "";
}
.fa-truck:before {
  content: "";
}
.fa-pinterest:before {
  content: "";
}
.fa-pinterest-square:before {
  content: "";
}
.fa-google-plus-square:before {
  content: "";
}
.fa-google-plus:before {
  content: "";
}
.fa-money:before {
  content: "";
}
.fa-caret-down:before {
  content: "";
}
.fa-caret-up:before {
  content: "";
}
.fa-caret-left:before {
  content: "";
}
.fa-caret-right:before {
  content: "";
}
.fa-columns:before {
  content: "";
}
.fa-unsorted:before, .fa-sort:before {
  content: "";
}
.fa-sort-down:before, .fa-sort-desc:before {
  content: "";
}
.fa-sort-up:before, .fa-sort-asc:before {
  content: "";
}
.fa-envelope:before {
  content: "";
}
.fa-linkedin:before {
  content: "";
}
.fa-rotate-left:before, .fa-undo:before {
  content: "";
}
.fa-legal:before, .fa-gavel:before {
  content: "";
}
.fa-dashboard:before, .fa-tachometer:before {
  content: "";
}
.fa-comment-o:before {
  content: "";
}
.fa-comments-o:before {
  content: "";
}
.fa-flash:before, .fa-bolt:before {
  content: "";
}
.fa-sitemap:before {
  content: "";
}
.fa-umbrella:before {
  content: "";
}
.fa-paste:before, .fa-clipboard:before {
  content: "";
}
.fa-lightbulb-o:before {
  content: "";
}
.fa-exchange:before {
  content: "";
}
.fa-cloud-download:before {
  content: "";
}
.fa-cloud-upload:before {
  content: "";
}
.fa-user-md:before {
  content: "";
}
.fa-stethoscope:before {
  content: "";
}
.fa-suitcase:before {
  content: "";
}
.fa-bell-o:before {
  content: "";
}
.fa-coffee:before {
  content: "";
}
.fa-cutlery:before {
  content: "";
}
.fa-file-text-o:before {
  content: "";
}
.fa-building-o:before {
  content: "";
}
.fa-hospital-o:before {
  content: "";
}
.fa-ambulance:before {
  content: "";
}
.fa-medkit:before {
  content: "";
}
.fa-fighter-jet:before {
  content: "";
}
.fa-beer:before {
  content: "";
}
.fa-h-square:before {
  content: "";
}
.fa-plus-square:before {
  content: "";
}
.fa-angle-double-left:before {
  content: "";
}
.fa-angle-double-right:before {
  content: "";
}
.fa-angle-double-up:before {
  content: "";
}
.fa-angle-double-down:before {
  content: "";
}
.fa-angle-left:before {
  content: "";
}
.fa-angle-right:before {
  content: "";
}
.fa-angle-up:before {
  content: "";
}
.fa-angle-down:before {
  content: "";
}
.fa-desktop:before {
  content: "";
}
.fa-laptop:before {
  content: "";
}
.fa-tablet:before {
  content: "";
}
.fa-mobile-phone:before, .fa-mobile:before {
  content: "";
}
.fa-circle-o:before {
  content: "";
}
.fa-quote-left:before {
  content: "";
}
.fa-quote-right:before {
  content: "";
}
.fa-spinner:before {
  content: "";
}
.fa-circle:before {
  content: "";
}
.fa-mail-reply:before, .fa-reply:before {
  content: "";
}
.fa-github-alt:before {
  content: "";
}
.fa-folder-o:before {
  content: "";
}
.fa-folder-open-o:before {
  content: "";
}
.fa-smile-o:before {
  content: "";
}
.fa-frown-o:before {
  content: "";
}
.fa-meh-o:before {
  content: "";
}
.fa-gamepad:before {
  content: "";
}
.fa-keyboard-o:before {
  content: "";
}
.fa-flag-o:before {
  content: "";
}
.fa-flag-checkered:before {
  content: "";
}
.fa-terminal:before {
  content: "";
}
.fa-code:before {
  content: "";
}
.fa-mail-reply-all:before, .fa-reply-all:before {
  content: "";
}
.fa-star-half-empty:before, .fa-star-half-full:before, .fa-star-half-o:before {
  content: "";
}
.fa-location-arrow:before {
  content: "";
}
.fa-crop:before {
  content: "";
}
.fa-code-fork:before {
  content: "";
}
.fa-unlink:before, .fa-chain-broken:before {
  content: "";
}
.fa-question:before {
  content: "";
}
.fa-info:before {
  content: "";
}
.fa-exclamation:before {
  content: "";
}
.fa-superscript:before {
  content: "";
}
.fa-subscript:before {
  content: "";
}
.fa-eraser:before {
  content: "";
}
.fa-puzzle-piece:before {
  content: "";
}
.fa-microphone:before {
  content: "";
}
.fa-microphone-slash:before {
  content: "";
}
.fa-shield:before {
  content: "";
}
.fa-calendar-o:before {
  content: "";
}
.fa-fire-extinguisher:before {
  content: "";
}
.fa-rocket:before {
  content: "";
}
.fa-maxcdn:before {
  content: "";
}
.fa-chevron-circle-left:before {
  content: "";
}
.fa-chevron-circle-right:before {
  content: "";
}
.fa-chevron-circle-up:before {
  content: "";
}
.fa-chevron-circle-down:before {
  content: "";
}
.fa-html5:before {
  content: "";
}
.fa-css3:before {
  content: "";
}
.fa-anchor:before {
  content: "";
}
.fa-unlock-alt:before {
  content: "";
}
.fa-bullseye:before {
  content: "";
}
.fa-ellipsis-h:before {
  content: "";
}
.fa-ellipsis-v:before {
  content: "";
}
.fa-rss-square:before {
  content: "";
}
.fa-play-circle:before {
  content: "";
}
.fa-ticket:before {
  content: "";
}
.fa-minus-square:before {
  content: "";
}
.fa-minus-square-o:before {
  content: "";
}
.fa-level-up:before {
  content: "";
}
.fa-level-down:before {
  content: "";
}
.fa-check-square:before {
  content: "";
}
.fa-pencil-square:before {
  content: "";
}
.fa-external-link-square:before {
  content: "";
}
.fa-share-square:before {
  content: "";
}
.fa-compass:before {
  content: "";
}
.fa-toggle-down:before, .fa-caret-square-o-down:before {
  content: "";
}
.fa-toggle-up:before, .fa-caret-square-o-up:before {
  content: "";
}
.fa-toggle-right:before, .fa-caret-square-o-right:before {
  content: "";
}
.fa-euro:before, .fa-eur:before {
  content: "";
}
.fa-gbp:before {
  content: "";
}
.fa-dollar:before, .fa-usd:before {
  content: "";
}
.fa-rupee:before, .fa-inr:before {
  content: "";
}
.fa-cny:before, .fa-rmb:before, .fa-yen:before, .fa-jpy:before {
  content: "";
}
.fa-ruble:before, .fa-rouble:before, .fa-rub:before {
  content: "";
}
.fa-won:before, .fa-krw:before {
  content: "";
}
.fa-bitcoin:before, .fa-btc:before {
  content: "";
}
.fa-file:before {
  content: "";
}
.fa-file-text:before {
  content: "";
}
.fa-sort-alpha-asc:before {
  content: "";
}
.fa-sort-alpha-desc:before {
  content: "";
}
.fa-sort-amount-asc:before {
  content: "";
}
.fa-sort-amount-desc:before {
  content: "";
}
.fa-sort-numeric-asc:before {
  content: "";
}
.fa-sort-numeric-desc:before {
  content: "";
}
.fa-thumbs-up:before {
  content: "";
}
.fa-thumbs-down:before {
  content: "";
}
.fa-youtube-square:before {
  content: "";
}
.fa-youtube:before {
  content: "";
}
.fa-xing:before {
  content: "";
}
.fa-xing-square:before {
  content: "";
}
.fa-youtube-play:before {
  content: "";
}
.fa-dropbox:before {
  content: "";
}
.fa-stack-overflow:before {
  content: "";
}
.fa-instagram:before {
  content: "";
}
.fa-flickr:before {
  content: "";
}
.fa-adn:before {
  content: "";
}
.fa-bitbucket:before {
  content: "";
}
.fa-bitbucket-square:before {
  content: "";
}
.fa-tumblr:before {
  content: "";
}
.fa-tumblr-square:before {
  content: "";
}
.fa-long-arrow-down:before {
  content: "";
}
.fa-long-arrow-up:before {
  content: "";
}
.fa-long-arrow-left:before {
  content: "";
}
.fa-long-arrow-right:before {
  content: "";
}
.fa-apple:before {
  content: "";
}
.fa-windows:before {
  content: "";
}
.fa-android:before {
  content: "";
}
.fa-linux:before {
  content: "";
}
.fa-dribbble:before {
  content: "";
}
.fa-skype:before {
  content: "";
}
.fa-foursquare:before {
  content: "";
}
.fa-trello:before {
  content: "";
}
.fa-female:before {
  content: "";
}
.fa-male:before {
  content: "";
}
.fa-gittip:before, .fa-gratipay:before {
  content: "";
}
.fa-sun-o:before {
  content: "";
}
.fa-moon-o:before {
  content: "";
}
.fa-archive:before {
  content: "";
}
.fa-bug:before {
  content: "";
}
.fa-vk:before {
  content: "";
}
.fa-weibo:before {
  content: "";
}
.fa-renren:before {
  content: "";
}
.fa-pagelines:before {
  content: "";
}
.fa-stack-exchange:before {
  content: "";
}
.fa-arrow-circle-o-right:before {
  content: "";
}
.fa-arrow-circle-o-left:before {
  content: "";
}
.fa-toggle-left:before, .fa-caret-square-o-left:before {
  content: "";
}
.fa-dot-circle-o:before {
  content: "";
}
.fa-wheelchair:before {
  content: "";
}
.fa-vimeo-square:before {
  content: "";
}
.fa-turkish-lira:before, .fa-try:before {
  content: "";
}
.fa-plus-square-o:before {
  content: "";
}
.fa-space-shuttle:before {
  content: "";
}
.fa-slack:before {
  content: "";
}
.fa-envelope-square:before {
  content: "";
}
.fa-wordpress:before {
  content: "";
}
.fa-openid:before {
  content: "";
}
.fa-institution:before, .fa-bank:before, .fa-university:before {
  content: "";
}
.fa-mortar-board:before, .fa-graduation-cap:before {
  content: "";
}
.fa-yahoo:before {
  content: "";
}
.fa-google:before {
  content: "";
}
.fa-reddit:before {
  content: "";
}
.fa-reddit-square:before {
  content: "";
}
.fa-stumbleupon-circle:before {
  content: "";
}
.fa-stumbleupon:before {
  content: "";
}
.fa-delicious:before {
  content: "";
}
.fa-digg:before {
  content: "";
}
.fa-pied-piper-pp:before {
  content: "";
}
.fa-pied-piper-alt:before {
  content: "";
}
.fa-drupal:before {
  content: "";
}
.fa-joomla:before {
  content: "";
}
.fa-language:before {
  content: "";
}
.fa-fax:before {
  content: "";
}
.fa-building:before {
  content: "";
}
.fa-child:before {
  content: "";
}
.fa-paw:before {
  content: "";
}
.fa-spoon:before {
  content: "";
}
.fa-cube:before {
  content: "";
}
.fa-cubes:before {
  content: "";
}
.fa-behance:before {
  content: "";
}
.fa-behance-square:before {
  content: "";
}
.fa-steam:before {
  content: "";
}
.fa-steam-square:before {
  content: "";
}
.fa-recycle:before {
  content: "";
}
.fa-automobile:before, .fa-car:before {
  content: "";
}
.fa-cab:before, .fa-taxi:before {
  content: "";
}
.fa-tree:before {
  content: "";
}
.fa-spotify:before {
  content: "";
}
.fa-deviantart:before {
  content: "";
}
.fa-soundcloud:before {
  content: "";
}
.fa-database:before {
  content: "";
}
.fa-file-pdf-o:before {
  content: "";
}
.fa-file-word-o:before {
  content: "";
}
.fa-file-excel-o:before {
  content: "";
}
.fa-file-powerpoint-o:before {
  content: "";
}
.fa-file-photo-o:before, .fa-file-picture-o:before, .fa-file-image-o:before {
  content: "";
}
.fa-file-zip-o:before, .fa-file-archive-o:before {
  content: "";
}
.fa-file-sound-o:before, .fa-file-audio-o:before {
  content: "";
}
.fa-file-movie-o:before, .fa-file-video-o:before {
  content: "";
}
.fa-file-code-o:before {
  content: "";
}
.fa-vine:before {
  content: "";
}
.fa-codepen:before {
  content: "";
}
.fa-jsfiddle:before {
  content: "";
}
.fa-life-bouy:before, .fa-life-buoy:before, .fa-life-saver:before, .fa-support:before, .fa-life-ring:before {
  content: "";
}
.fa-circle-o-notch:before {
  content: "";
}
.fa-ra:before, .fa-resistance:before, .fa-rebel:before {
  content: "";
}
.fa-ge:before, .fa-empire:before {
  content: "";
}
.fa-git-square:before {
  content: "";
}
.fa-git:before {
  content: "";
}
.fa-y-combinator-square:before, .fa-yc-square:before, .fa-hacker-news:before {
  content: "";
}
.fa-tencent-weibo:before {
  content: "";
}
.fa-qq:before {
  content: "";
}
.fa-wechat:before, .fa-weixin:before {
  content: "";
}
.fa-send:before, .fa-paper-plane:before {
  content: "";
}
.fa-send-o:before, .fa-paper-plane-o:before {
  content: "";
}
.fa-history:before {
  content: "";
}
.fa-circle-thin:before {
  content: "";
}
.fa-header:before {
  content: "";
}
.fa-paragraph:before {
  content: "";
}
.fa-sliders:before {
  content: "";
}
.fa-share-alt:before {
  content: "";
}
.fa-share-alt-square:before {
  content: "";
}
.fa-bomb:before {
  content: "";
}
.fa-soccer-ball-o:before, .fa-futbol-o:before {
  content: "";
}
.fa-tty:before {
  content: "";
}
.fa-binoculars:before {
  content: "";
}
.fa-plug:before {
  content: "";
}
.fa-slideshare:before {
  content: "";
}
.fa-twitch:before {
  content: "";
}
.fa-yelp:before {
  content: "";
}
.fa-newspaper-o:before {
  content: "";
}
.fa-wifi:before {
  content: "";
}
.fa-calculator:before {
  content: "";
}
.fa-paypal:before {
  content: "";
}
.fa-google-wallet:before {
  content: "";
}
.fa-cc-visa:before {
  content: "";
}
.fa-cc-mastercard:before {
  content: "";
}
.fa-cc-discover:before {
  content: "";
}
.fa-cc-amex:before {
  content: "";
}
.fa-cc-paypal:before {
  content: "";
}
.fa-cc-stripe:before {
  content: "";
}
.fa-bell-slash:before {
  content: "";
}
.fa-bell-slash-o:before {
  content: "";
}
.fa-trash:before {
  content: "";
}
.fa-copyright:before {
  content: "";
}
.fa-at:before {
  content: "";
}
.fa-eyedropper:before {
  content: "";
}
.fa-paint-brush:before {
  content: "";
}
.fa-birthday-cake:before {
  content: "";
}
.fa-area-chart:before {
  content: "";
}
.fa-pie-chart:before {
  content: "";
}
.fa-line-chart:before {
  content: "";
}
.fa-lastfm:before {
  content: "";
}
.fa-lastfm-square:before {
  content: "";
}
.fa-toggle-off:before {
  content: "";
}
.fa-toggle-on:before {
  content: "";
}
.fa-bicycle:before {
  content: "";
}
.fa-bus:before {
  content: "";
}
.fa-ioxhost:before {
  content: "";
}
.fa-angellist:before {
  content: "";
}
.fa-cc:before {
  content: "";
}
.fa-shekel:before, .fa-sheqel:before, .fa-ils:before {
  content: "";
}
.fa-meanpath:before {
  content: "";
}
.fa-buysellads:before {
  content: "";
}
.fa-connectdevelop:before {
  content: "";
}
.fa-dashcube:before {
  content: "";
}
.fa-forumbee:before {
  content: "";
}
.fa-leanpub:before {
  content: "";
}
.fa-sellsy:before {
  content: "";
}
.fa-shirtsinbulk:before {
  content: "";
}
.fa-simplybuilt:before {
  content: "";
}
.fa-skyatlas:before {
  content: "";
}
.fa-cart-plus:before {
  content: "";
}
.fa-cart-arrow-down:before {
  content: "";
}
.fa-diamond:before {
  content: "";
}
.fa-ship:before {
  content: "";
}
.fa-user-secret:before {
  content: "";
}
.fa-motorcycle:before {
  content: "";
}
.fa-street-view:before {
  content: "";
}
.fa-heartbeat:before {
  content: "";
}
.fa-venus:before {
  content: "";
}
.fa-mars:before {
  content: "";
}
.fa-mercury:before {
  content: "";
}
.fa-intersex:before, .fa-transgender:before {
  content: "";
}
.fa-transgender-alt:before {
  content: "";
}
.fa-venus-double:before {
  content: "";
}
.fa-mars-double:before {
  content: "";
}
.fa-venus-mars:before {
  content: "";
}
.fa-mars-stroke:before {
  content: "";
}
.fa-mars-stroke-v:before {
  content: "";
}
.fa-mars-stroke-h:before {
  content: "";
}
.fa-neuter:before {
  content: "";
}
.fa-genderless:before {
  content: "";
}
.fa-facebook-official:before {
  content: "";
}
.fa-pinterest-p:before {
  content: "";
}
.fa-whatsapp:before {
  content: "";
}
.fa-server:before {
  content: "";
}
.fa-user-plus:before {
  content: "";
}
.fa-user-times:before {
  content: "";
}
.fa-hotel:before, .fa-bed:before {
  content: "";
}
.fa-viacoin:before {
  content: "";
}
.fa-train:before {
  content: "";
}
.fa-subway:before {
  content: "";
}
.fa-medium:before {
  content: "";
}
.fa-yc:before, .fa-y-combinator:before {
  content: "";
}
.fa-optin-monster:before {
  content: "";
}
.fa-opencart:before {
  content: "";
}
.fa-expeditedssl:before {
  content: "";
}
.fa-battery-4:before, .fa-battery:before, .fa-battery-full:before {
  content: "";
}
.fa-battery-3:before, .fa-battery-three-quarters:before {
  content: "";
}
.fa-battery-2:before, .fa-battery-half:before {
  content: "";
}
.fa-battery-1:before, .fa-battery-quarter:before {
  content: "";
}
.fa-battery-0:before, .fa-battery-empty:before {
  content: "";
}
.fa-mouse-pointer:before {
  content: "";
}
.fa-i-cursor:before {
  content: "";
}
.fa-object-group:before {
  content: "";
}
.fa-object-ungroup:before {
  content: "";
}
.fa-sticky-note:before {
  content: "";
}
.fa-sticky-note-o:before {
  content: "";
}
.fa-cc-jcb:before {
  content: "";
}
.fa-cc-diners-club:before {
  content: "";
}
.fa-clone:before {
  content: "";
}
.fa-balance-scale:before {
  content: "";
}
.fa-hourglass-o:before {
  content: "";
}
.fa-hourglass-1:before, .fa-hourglass-start:before {
  content: "";
}
.fa-hourglass-2:before, .fa-hourglass-half:before {
  content: "";
}
.fa-hourglass-3:before, .fa-hourglass-end:before {
  content: "";
}
.fa-hourglass:before {
  content: "";
}
.fa-hand-grab-o:before, .fa-hand-rock-o:before {
  content: "";
}
.fa-hand-stop-o:before, .fa-hand-paper-o:before {
  content: "";
}
.fa-hand-scissors-o:before {
  content: "";
}
.fa-hand-lizard-o:before {
  content: "";
}
.fa-hand-spock-o:before {
  content: "";
}
.fa-hand-pointer-o:before {
  content: "";
}
.fa-hand-peace-o:before {
  content: "";
}
.fa-trademark:before {
  content: "";
}
.fa-registered:before {
  content: "";
}
.fa-creative-commons:before {
  content: "";
}
.fa-gg:before {
  content: "";
}
.fa-gg-circle:before {
  content: "";
}
.fa-tripadvisor:before {
  content: "";
}
.fa-odnoklassniki:before {
  content: "";
}
.fa-odnoklassniki-square:before {
  content: "";
}
.fa-get-pocket:before {
  content: "";
}
.fa-wikipedia-w:before {
  content: "";
}
.fa-safari:before {
  content: "";
}
.fa-chrome:before {
  content: "";
}
.fa-firefox:before {
  content: "";
}
.fa-opera:before {
  content: "";
}
.fa-internet-explorer:before {
  content: "";
}
.fa-tv:before, .fa-television:before {
  content: "";
}
.fa-contao:before {
  content: "";
}
.fa-500px:before {
  content: "";
}
.fa-amazon:before {
  content: "";
}
.fa-calendar-plus-o:before {
  content: "";
}
.fa-calendar-minus-o:before {
  content: "";
}
.fa-calendar-times-o:before {
  content: "";
}
.fa-calendar-check-o:before {
  content: "";
}
.fa-industry:before {
  content: "";
}
.fa-map-pin:before {
  content: "";
}
.fa-map-signs:before {
  content: "";
}
.fa-map-o:before {
  content: "";
}
.fa-map:before {
  content: "";
}
.fa-commenting:before {
  content: "";
}
.fa-commenting-o:before {
  content: "";
}
.fa-houzz:before {
  content: "";
}
.fa-vimeo:before {
  content: "";
}
.fa-black-tie:before {
  content: "";
}
.fa-fonticons:before {
  content: "";
}
.fa-reddit-alien:before {
  content: "";
}
.fa-edge:before {
  content: "";
}
.fa-credit-card-alt:before {
  content: "";
}
.fa-codiepie:before {
  content: "";
}
.fa-modx:before {
  content: "";
}
.fa-fort-awesome:before {
  content: "";
}
.fa-usb:before {
  content: "";
}
.fa-product-hunt:before {
  content: "";
}
.fa-mixcloud:before {
  content: "";
}
.fa-scribd:before {
  content: "";
}
.fa-pause-circle:before {
  content: "";
}
.fa-pause-circle-o:before {
  content: "";
}
.fa-stop-circle:before {
  content: "";
}
.fa-stop-circle-o:before {
  content: "";
}
.fa-shopping-bag:before {
  content: "";
}
.fa-shopping-basket:before {
  content: "";
}
.fa-hashtag:before {
  content: "";
}
.fa-bluetooth:before {
  content: "";
}
.fa-bluetooth-b:before {
  content: "";
}
.fa-percent:before {
  content: "";
}
.fa-gitlab:before {
  content: "";
}
.fa-wpbeginner:before {
  content: "";
}
.fa-wpforms:before {
  content: "";
}
.fa-envira:before {
  content: "";
}
.fa-universal-access:before {
  content: "";
}
.fa-wheelchair-alt:before {
  content: "";
}
.fa-question-circle-o:before {
  content: "";
}
.fa-blind:before {
  content: "";
}
.fa-audio-description:before {
  content: "";
}
.fa-volume-control-phone:before {
  content: "";
}
.fa-braille:before {
  content: "";
}
.fa-assistive-listening-systems:before {
  content: "";
}
.fa-asl-interpreting:before, .fa-american-sign-language-interpreting:before {
  content: "";
}
.fa-deafness:before, .fa-hard-of-hearing:before, .fa-deaf:before {
  content: "";
}
.fa-glide:before {
  content: "";
}
.fa-glide-g:before {
  content: "";
}
.fa-signing:before, .fa-sign-language:before {
  content: "";
}
.fa-low-vision:before {
  content: "";
}
.fa-viadeo:before {
  content: "";
}
.fa-viadeo-square:before {
  content: "";
}
.fa-snapchat:before {
  content: "";
}
.fa-snapchat-ghost:before {
  content: "";
}
.fa-snapchat-square:before {
  content: "";
}
.fa-pied-piper:before {
  content: "";
}
.fa-first-order:before {
  content: "";
}
.fa-yoast:before {
  content: "";
}
.fa-themeisle:before {
  content: "";
}
.fa-google-plus-circle:before, .fa-google-plus-official:before {
  content: "";
}
.fa-fa:before, .fa-font-awesome:before {
  content: "";
}
.fa-handshake-o:before {
  content: "";
}
.fa-envelope-open:before {
  content: "";
}
.fa-envelope-open-o:before {
  content: "";
}
.fa-linode:before {
  content: "";
}
.fa-address-book:before {
  content: "";
}
.fa-address-book-o:before {
  content: "";
}
.fa-vcard:before, .fa-address-card:before {
  content: "";
}
.fa-vcard-o:before, .fa-address-card-o:before {
  content: "";
}
.fa-user-circle:before {
  content: "";
}
.fa-user-circle-o:before {
  content: "";
}
.fa-user-o:before {
  content: "";
}
.fa-id-badge:before {
  content: "";
}
.fa-drivers-license:before, .fa-id-card:before {
  content: "";
}
.fa-drivers-license-o:before, .fa-id-card-o:before {
  content: "";
}
.fa-quora:before {
  content: "";
}
.fa-free-code-camp:before {
  content: "";
}
.fa-telegram:before {
  content: "";
}
.fa-thermometer-4:before, .fa-thermometer:before, .fa-thermometer-full:before {
  content: "";
}
.fa-thermometer-3:before, .fa-thermometer-three-quarters:before {
  content: "";
}
.fa-thermometer-2:before, .fa-thermometer-half:before {
  content: "";
}
.fa-thermometer-1:before, .fa-thermometer-quarter:before {
  content: "";
}
.fa-thermometer-0:before, .fa-thermometer-empty:before {
  content: "";
}
.fa-shower:before {
  content: "";
}
.fa-bathtub:before, .fa-s15:before, .fa-bath:before {
  content: "";
}
.fa-podcast:before {
  content: "";
}
.fa-window-maximize:before {
  content: "";
}
.fa-window-minimize:before {
  content: "";
}
.fa-window-restore:before {
  content: "";
}
.fa-times-rectangle:before, .fa-window-close:before {
  content: "";
}
.fa-times-rectangle-o:before, .fa-window-close-o:before {
  content: "";
}
.fa-bandcamp:before {
  content: "";
}
.fa-grav:before {
  content: "";
}
.fa-etsy:before {
  content: "";
}
.fa-imdb:before {
  content: "";
}
.fa-ravelry:before {
  content: "";
}
.fa-eercast:before {
  content: "";
}
.fa-microchip:before {
  content: "";
}
.fa-snowflake-o:before {
  content: "";
}
.fa-superpowers:before {
  content: "";
}
.fa-wpexplorer:before {
  content: "";
}
.fa-meetup:before {
  content: "";
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
/*!
 * Bootstrap v4.6.0 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
:root {
  --blue: #0f6cbf;
  --indigo: #6610f2;
  --purple: #613d7c;
  --pink: #e83e8c;
  --red: #ca3120;
  --orange: #f0ad4e;
  --yellow: #ff7518;
  --green: #357a32;
  --teal: #20c997;
  --cyan: #008196;
  --white: #fff;
  --gray: #6a737b;
  --gray-dark: #343a40;
  --primary: #0f6cbf;
  --secondary: #ced4da;
  --success: #357a32;
  --info: #008196;
  --warning: #f0ad4e;
  --danger: #ca3120;
  --light: #f8f9fa;
  --dark: #343a40;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}
*, *::before, *::after {
  box-sizing: border-box;
}
html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}
body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.5;
  color: #1d2125;
  text-align: left;
  background-color: #fff;
}
@media (max-width: 1200px) {
  body {
    font-size: calc(0.90375rem + 0.045vw) ;
  }
}
[tabindex="-1"]:focus:not(:focus-visible) {
  outline: 0 !important;
}
hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}
h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}
p {
  margin-top: 0;
  margin-bottom: 1rem;
}
abbr[title], abbr[data-original-title] {
  text-decoration: underline;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
  text-decoration-skip-ink: none;
}
address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}
ol, ul, dl {
  margin-top: 0;
  margin-bottom: 1rem;
}
ol ol, ul ul, ol ul, ul ol {
  margin-bottom: 0;
}
dt {
  font-weight: 700;
}
dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}
blockquote {
  margin: 0 0 1rem;
}
b, strong {
  font-weight: bolder;
}
small {
  font-size: 80%;
}
sub, sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}
sub {
  bottom: -0.25em;
}
sup {
  top: -0.5em;
}
a {
  color: #0f6cbf;
  text-decoration: none;
  background-color: transparent;
}
a:hover {
  color: #094478;
  text-decoration: underline;
}
a:not([href]):not([class]) {
  color: inherit;
  text-decoration: none;
}
a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}
pre, code, kbd, samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em;
}
pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar;
}
figure {
  margin: 0 0 1rem;
}
img {
  vertical-align: middle;
  border-style: none;
}
svg {
  overflow: hidden;
  vertical-align: middle;
}
table {
  border-collapse: collapse;
}
caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6a737b;
  text-align: left;
  caption-side: bottom;
}
th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}
label {
  display: inline-block;
  margin-bottom: 0.5rem;
}
button {
  border-radius: 0;
}
button:focus:not(:focus-visible) {
  outline: 0;
}
input, button, select, optgroup, textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
button, input {
  overflow: visible;
}
button, select {
  text-transform: none;
}
[role="button"] {
  cursor: pointer;
}
select {
  word-wrap: normal;
}
button, [type="button"], [type="reset"], [type="submit"] {
  -webkit-appearance: button;
}
button:not(:disabled), [type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled) {
  cursor: pointer;
}
button::-moz-focus-inner, [type="button"]::-moz-focus-inner, [type="reset"]::-moz-focus-inner, [type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}
input[type="radio"], input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}
textarea {
  overflow: auto;
  resize: vertical;
}
fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}
legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}
@media (max-width: 1200px) {
  legend {
    font-size: calc(0.96rem + 0.72vw) ;
  }
}
progress {
  vertical-align: baseline;
}
[type="number"]::-webkit-inner-spin-button, [type="number"]::-webkit-outer-spin-button {
  height: auto;
}
[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}
output {
  display: inline-block;
}
summary {
  display: list-item;
  cursor: pointer;
}
template {
  display: none;
}
[hidden] {
  display: none !important;
}
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-weight: 300;
  line-height: 1.2;
}
h1, .h1 {
  font-size: 2.34375rem;
}
@media (max-width: 1200px) {
  h1, .h1 {
    font-size: calc(1.044375rem + 1.7325vw) ;
  }
}
h2, .h2 {
  font-size: 1.875rem;
}
@media (max-width: 1200px) {
  h2, .h2 {
    font-size: calc(0.9975rem + 1.17vw) ;
  }
}
h3, .h3 {
  font-size: 1.640625rem;
}
@media (max-width: 1200px) {
  h3, .h3 {
    font-size: calc(0.9740625rem + 0.88875vw) ;
  }
}
h4, .h4 {
  font-size: 1.40625rem;
}
@media (max-width: 1200px) {
  h4, .h4 {
    font-size: calc(0.950625rem + 0.6075vw) ;
  }
}
h5, .h5 {
  font-size: 1.171875rem;
}
@media (max-width: 1200px) {
  h5, .h5 {
    font-size: calc(0.9271875rem + 0.32625vw) ;
  }
}
h6, .h6 {
  font-size: 0.9375rem;
}
@media (max-width: 1200px) {
  h6, .h6 {
    font-size: calc(0.90375rem + 0.045vw) ;
  }
}
.lead {
  font-size: 1.171875rem;
  font-weight: 300;
}
@media (max-width: 1200px) {
  .lead {
    font-size: calc(0.9271875rem + 0.32625vw) ;
  }
}
.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2;
}
@media (max-width: 1200px) {
  .display-1 {
    font-size: calc(1.41rem + 6.12vw) ;
  }
}
.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2;
}
@media (max-width: 1200px) {
  .display-2 {
    font-size: calc(1.36rem + 5.52vw) ;
  }
}
.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2;
}
@media (max-width: 1200px) {
  .display-3 {
    font-size: calc(1.26rem + 4.32vw) ;
  }
}
.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2;
}
@media (max-width: 1200px) {
  .display-4 {
    font-size: calc(1.16rem + 3.12vw) ;
  }
}
hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}
small, .small {
  font-size: 80%;
  font-weight: 400;
}
mark, .mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  list-style: none;
}
.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
.blockquote {
  margin-bottom: 1rem;
  font-size: 1.171875rem;
}
@media (max-width: 1200px) {
  .blockquote {
    font-size: calc(0.9271875rem + 0.32625vw) ;
  }
}
.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6a737b;
}
.blockquote-footer::before {
  content: "— ";
}
.img-fluid {
  max-width: 100%;
  height: auto;
}
.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}
.figure {
  display: inline-block;
}
.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}
.figure-caption {
  font-size: 90%;
  color: #6a737b;
}
code {
  font-size: 87.5%;
  color: #e83e8c;
  word-wrap: break-word;
}
a > code {
  color: inherit;
}
kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #1d2125;
  border-radius: 0.2rem;
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
}
pre {
  display: block;
  font-size: 87.5%;
  color: #1d2125;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container, .container-fluid, .container-sm, .container-md, .container-lg, .container-xl {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 576px) {
  .container, .container-sm {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container, .container-sm, .container-md {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container, .container-sm, .container-md, .container-lg {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1140px;
  }
}
.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
.no-gutters {
  margin-right: 0;
  margin-left: 0;
}
.no-gutters > .col, .no-gutters > [class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}
.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
}
.col {
  flex-basis: 0;
  flex-grow: 1;
  max-width: 100%;
}
.row-cols-1 > * {
  flex: 0 0 100%;
  max-width: 100%;
}
.row-cols-2 > * {
  flex: 0 0 50%;
  max-width: 50%;
}
.row-cols-3 > * {
  flex: 0 0 33.3333333333%;
  max-width: 33.3333333333%;
}
.row-cols-4 > * {
  flex: 0 0 25%;
  max-width: 25%;
}
.row-cols-5 > * {
  flex: 0 0 20%;
  max-width: 20%;
}
.row-cols-6 > * {
  flex: 0 0 16.6666666667%;
  max-width: 16.6666666667%;
}
.col-auto {
  flex: 0 0 auto;
  width: auto;
  max-width: 100%;
}
.col-1 {
  flex: 0 0 8.3333333333%;
  max-width: 8.3333333333%;
}
.col-2 {
  flex: 0 0 16.6666666667%;
  max-width: 16.6666666667%;
}
.col-3 {
  flex: 0 0 25%;
  max-width: 25%;
}
.col-4 {
  flex: 0 0 33.3333333333%;
  max-width: 33.3333333333%;
}
.col-5 {
  flex: 0 0 41.6666666667%;
  max-width: 41.6666666667%;
}
.col-6 {
  flex: 0 0 50%;
  max-width: 50%;
}
.col-7 {
  flex: 0 0 58.3333333333%;
  max-width: 58.3333333333%;
}
.col-8 {
  flex: 0 0 66.6666666667%;
  max-width: 66.6666666667%;
}
.col-9 {
  flex: 0 0 75%;
  max-width: 75%;
}
.col-10 {
  flex: 0 0 83.3333333333%;
  max-width: 83.3333333333%;
}
.col-11 {
  flex: 0 0 91.6666666667%;
  max-width: 91.6666666667%;
}
.col-12 {
  flex: 0 0 100%;
  max-width: 100%;
}
.order-first {
  order: -1;
}
.order-last {
  order: 13;
}
.order-0 {
  order: 0;
}
.order-1 {
  order: 1;
}
.order-2 {
  order: 2;
}
.order-3 {
  order: 3;
}
.order-4 {
  order: 4;
}
.order-5 {
  order: 5;
}
.order-6 {
  order: 6;
}
.order-7 {
  order: 7;
}
.order-8 {
  order: 8;
}
.order-9 {
  order: 9;
}
.order-10 {
  order: 10;
}
.order-11 {
  order: 11;
}
.order-12 {
  order: 12;
}
.offset-1 {
  margin-left: 8.3333333333%;
}
.offset-2 {
  margin-left: 16.6666666667%;
}
.offset-3 {
  margin-left: 25%;
}
.offset-4 {
  margin-left: 33.3333333333%;
}
.offset-5 {
  margin-left: 41.6666666667%;
}
.offset-6 {
  margin-left: 50%;
}
.offset-7 {
  margin-left: 58.3333333333%;
}
.offset-8 {
  margin-left: 66.6666666667%;
}
.offset-9 {
  margin-left: 75%;
}
.offset-10 {
  margin-left: 83.3333333333%;
}
.offset-11 {
  margin-left: 91.6666666667%;
}
@media (min-width: 576px) {
  .col-sm {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-sm-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-sm-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-sm-3 > * {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .row-cols-sm-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-sm-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-sm-6 > * {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-sm-1 {
    flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .col-sm-2 {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-sm-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .col-sm-5 {
    flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .col-sm-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .col-sm-8 {
    flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .col-sm-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .col-sm-11 {
    flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .col-sm-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-sm-first {
    order: -1;
  }
  .order-sm-last {
    order: 13;
  }
  .order-sm-0 {
    order: 0;
  }
  .order-sm-1 {
    order: 1;
  }
  .order-sm-2 {
    order: 2;
  }
  .order-sm-3 {
    order: 3;
  }
  .order-sm-4 {
    order: 4;
  }
  .order-sm-5 {
    order: 5;
  }
  .order-sm-6 {
    order: 6;
  }
  .order-sm-7 {
    order: 7;
  }
  .order-sm-8 {
    order: 8;
  }
  .order-sm-9 {
    order: 9;
  }
  .order-sm-10 {
    order: 10;
  }
  .order-sm-11 {
    order: 11;
  }
  .order-sm-12 {
    order: 12;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.3333333333%;
  }
  .offset-sm-2 {
    margin-left: 16.6666666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.3333333333%;
  }
  .offset-sm-5 {
    margin-left: 41.6666666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.3333333333%;
  }
  .offset-sm-8 {
    margin-left: 66.6666666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.3333333333%;
  }
  .offset-sm-11 {
    margin-left: 91.6666666667%;
  }
}
@media (min-width: 768px) {
  .col-md {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-md-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-md-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-md-3 > * {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .row-cols-md-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-md-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-md-6 > * {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-md-1 {
    flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .col-md-2 {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-md-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-md-4 {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .col-md-5 {
    flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-md-7 {
    flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .col-md-8 {
    flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .col-md-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-md-10 {
    flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .col-md-11 {
    flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .col-md-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-md-first {
    order: -1;
  }
  .order-md-last {
    order: 13;
  }
  .order-md-0 {
    order: 0;
  }
  .order-md-1 {
    order: 1;
  }
  .order-md-2 {
    order: 2;
  }
  .order-md-3 {
    order: 3;
  }
  .order-md-4 {
    order: 4;
  }
  .order-md-5 {
    order: 5;
  }
  .order-md-6 {
    order: 6;
  }
  .order-md-7 {
    order: 7;
  }
  .order-md-8 {
    order: 8;
  }
  .order-md-9 {
    order: 9;
  }
  .order-md-10 {
    order: 10;
  }
  .order-md-11 {
    order: 11;
  }
  .order-md-12 {
    order: 12;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.3333333333%;
  }
  .offset-md-2 {
    margin-left: 16.6666666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.3333333333%;
  }
  .offset-md-5 {
    margin-left: 41.6666666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.3333333333%;
  }
  .offset-md-8 {
    margin-left: 66.6666666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.3333333333%;
  }
  .offset-md-11 {
    margin-left: 91.6666666667%;
  }
}
@media (min-width: 992px) {
  .col-lg {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-lg-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-lg-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-lg-3 > * {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .row-cols-lg-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-lg-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-lg-6 > * {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-lg-1 {
    flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .col-lg-2 {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-lg-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-lg-4 {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .col-lg-5 {
    flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-lg-7 {
    flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .col-lg-8 {
    flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .col-lg-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-lg-10 {
    flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .col-lg-11 {
    flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .col-lg-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-lg-first {
    order: -1;
  }
  .order-lg-last {
    order: 13;
  }
  .order-lg-0 {
    order: 0;
  }
  .order-lg-1 {
    order: 1;
  }
  .order-lg-2 {
    order: 2;
  }
  .order-lg-3 {
    order: 3;
  }
  .order-lg-4 {
    order: 4;
  }
  .order-lg-5 {
    order: 5;
  }
  .order-lg-6 {
    order: 6;
  }
  .order-lg-7 {
    order: 7;
  }
  .order-lg-8 {
    order: 8;
  }
  .order-lg-9 {
    order: 9;
  }
  .order-lg-10 {
    order: 10;
  }
  .order-lg-11 {
    order: 11;
  }
  .order-lg-12 {
    order: 12;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.3333333333%;
  }
  .offset-lg-2 {
    margin-left: 16.6666666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.3333333333%;
  }
  .offset-lg-5 {
    margin-left: 41.6666666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.3333333333%;
  }
  .offset-lg-8 {
    margin-left: 66.6666666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.3333333333%;
  }
  .offset-lg-11 {
    margin-left: 91.6666666667%;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-xl-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-xl-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-xl-3 > * {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .row-cols-xl-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-xl-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-xl-6 > * {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-xl-1 {
    flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .col-xl-2 {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-xl-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xl-4 {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .col-xl-5 {
    flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .col-xl-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xl-7 {
    flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .col-xl-8 {
    flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .col-xl-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xl-10 {
    flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .col-xl-11 {
    flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .col-xl-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-xl-first {
    order: -1;
  }
  .order-xl-last {
    order: 13;
  }
  .order-xl-0 {
    order: 0;
  }
  .order-xl-1 {
    order: 1;
  }
  .order-xl-2 {
    order: 2;
  }
  .order-xl-3 {
    order: 3;
  }
  .order-xl-4 {
    order: 4;
  }
  .order-xl-5 {
    order: 5;
  }
  .order-xl-6 {
    order: 6;
  }
  .order-xl-7 {
    order: 7;
  }
  .order-xl-8 {
    order: 8;
  }
  .order-xl-9 {
    order: 9;
  }
  .order-xl-10 {
    order: 10;
  }
  .order-xl-11 {
    order: 11;
  }
  .order-xl-12 {
    order: 12;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.3333333333%;
  }
  .offset-xl-2 {
    margin-left: 16.6666666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.3333333333%;
  }
  .offset-xl-5 {
    margin-left: 41.6666666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.3333333333%;
  }
  .offset-xl-8 {
    margin-left: 66.6666666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.3333333333%;
  }
  .offset-xl-11 {
    margin-left: 91.6666666667%;
  }
}
.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #1d2125;
}
.table th, .table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}
.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}
.table tbody + tbody {
  border-top: 2px solid #dee2e6;
}
.table-sm th, .table-sm td {
  padding: 0.3rem;
}
.table-bordered {
  border: 1px solid #dee2e6;
}
.table-bordered th, .table-bordered td {
  border: 1px solid #dee2e6;
}
.table-bordered thead th, .table-bordered thead td {
  border-bottom-width: 2px;
}
.table-borderless th, .table-borderless td, .table-borderless thead th, .table-borderless tbody + tbody {
  border: 0;
}
.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.03);
}
.table-hover tbody tr:hover {
  color: #1d2125;
  background-color: rgba(0, 0, 0, 0.075);
}
.table-primary, .table-primary > th, .table-primary > td {
  background-color: #bcd6ed;
}
.table-primary th, .table-primary td, .table-primary thead th, .table-primary tbody + tbody {
  border-color: #82b3de;
}
.table-hover .table-primary:hover {
  background-color: #a8cae8;
}
.table-hover .table-primary:hover > td, .table-hover .table-primary:hover > th {
  background-color: #a8cae8;
}
.table-secondary, .table-secondary > th, .table-secondary > td {
  background-color: #f1f3f5;
}
.table-secondary th, .table-secondary td, .table-secondary thead th, .table-secondary tbody + tbody {
  border-color: #e6e9ec;
}
.table-hover .table-secondary:hover {
  background-color: #e2e6ea;
}
.table-hover .table-secondary:hover > td, .table-hover .table-secondary:hover > th {
  background-color: #e2e6ea;
}
.table-success, .table-success > th, .table-success > td {
  background-color: #c6dac6;
}
.table-success th, .table-success td, .table-success thead th, .table-success tbody + tbody {
  border-color: #96ba94;
}
.table-hover .table-success:hover {
  background-color: #b7d0b7;
}
.table-hover .table-success:hover > td, .table-hover .table-success:hover > th {
  background-color: #b7d0b7;
}
.table-info, .table-info > th, .table-info > td {
  background-color: #b8dce2;
}
.table-info th, .table-info td, .table-info thead th, .table-info tbody + tbody {
  border-color: #7abdc8;
}
.table-hover .table-info:hover {
  background-color: #a6d3db;
}
.table-hover .table-info:hover > td, .table-hover .table-info:hover > th {
  background-color: #a6d3db;
}
.table-warning, .table-warning > th, .table-warning > td {
  background-color: #fbe8cd;
}
.table-warning th, .table-warning td, .table-warning thead th, .table-warning tbody + tbody {
  border-color: #f7d4a3;
}
.table-hover .table-warning:hover {
  background-color: #f9ddb5;
}
.table-hover .table-warning:hover > td, .table-hover .table-warning:hover > th {
  background-color: #f9ddb5;
}
.table-danger, .table-danger > th, .table-danger > td {
  background-color: #f0c5c1;
}
.table-danger th, .table-danger td, .table-danger thead th, .table-danger tbody + tbody {
  border-color: #e3948b;
}
.table-hover .table-danger:hover {
  background-color: #ebb2ac;
}
.table-hover .table-danger:hover > td, .table-hover .table-danger:hover > th {
  background-color: #ebb2ac;
}
.table-light, .table-light > th, .table-light > td {
  background-color: #fdfdfe;
}
.table-light th, .table-light td, .table-light thead th, .table-light tbody + tbody {
  border-color: #fbfcfc;
}
.table-hover .table-light:hover {
  background-color: #ececf6;
}
.table-hover .table-light:hover > td, .table-hover .table-light:hover > th {
  background-color: #ececf6;
}
.table-dark, .table-dark > th, .table-dark > td {
  background-color: #c6c8ca;
}
.table-dark th, .table-dark td, .table-dark thead th, .table-dark tbody + tbody {
  border-color: #95999c;
}
.table-hover .table-dark:hover {
  background-color: #b9bbbe;
}
.table-hover .table-dark:hover > td, .table-hover .table-dark:hover > th {
  background-color: #b9bbbe;
}
.table-active, .table-active > th, .table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}
.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}
.table-hover .table-active:hover > td, .table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.075);
}
.table .thead-dark th {
  color: #fff;
  background-color: #343a40;
  border-color: #454d55;
}
.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6;
}
.table-dark {
  color: #fff;
  background-color: #343a40;
}
.table-dark th, .table-dark td, .table-dark thead th {
  border-color: #454d55;
}
.table-dark.table-bordered {
  border: 0;
}
.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}
.table-dark.table-hover tbody tr:hover {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.075);
}
@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-sm > .table-bordered {
    border: 0;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-md > .table-bordered {
    border: 0;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-lg > .table-bordered {
    border: 0;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-xl > .table-bordered {
    border: 0;
  }
}
.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}
.table-responsive > .table-bordered {
  border: 0;
}
.form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #8f959e;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (max-width: 1200px) {
  .form-control {
    font-size: calc(0.90375rem + 0.045vw) ;
  }
}
@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}
.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}
.form-control:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #495057;
}
.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #5babf2;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(15, 108, 191, 0.75);
}
.form-control::placeholder {
  color: #6a737b;
  opacity: 1;
}
.form-control:disabled, .form-control[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}
input[type="date"].form-control, input[type="time"].form-control, input[type="datetime-local"].form-control, input[type="month"].form-control {
  appearance: none;
}
select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}
.form-control-file, .form-control-range {
  display: block;
  width: 100%;
}
.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}
.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.171875rem;
  line-height: 1.5;
}
@media (max-width: 1200px) {
  .col-form-label-lg {
    font-size: calc(0.9271875rem + 0.32625vw) ;
  }
}
.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.8203125rem;
  line-height: 1.5;
}
.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.375rem 0;
  margin-bottom: 0;
  font-size: 0.9375rem;
  line-height: 1.5;
  color: #1d2125;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}
@media (max-width: 1200px) {
  .form-control-plaintext {
    font-size: calc(0.90375rem + 0.045vw) ;
  }
}
.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}
.form-control-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.8203125rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}
.form-control-lg {
  height: calc(1.5em + 1rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.171875rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}
@media (max-width: 1200px) {
  .form-control-lg {
    font-size: calc(0.9271875rem + 0.32625vw) ;
  }
}
select.form-control[size], select.form-control[multiple] {
  height: auto;
}
textarea.form-control {
  height: auto;
}
.form-group {
  margin-bottom: 1rem;
}
.form-text {
  display: block;
  margin-top: 0.25rem;
}
.form-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}
.form-row > .col, .form-row > [class*="col-"] {
  padding-right: 5px;
  padding-left: 5px;
}
.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}
.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}
.form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
  color: #6a737b;
}
.form-check-label {
  margin-bottom: 0;
}
.form-check-inline {
  display: inline-flex;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}
.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}
.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #357a32;
}
.valid-tooltip {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.8203125rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(53, 122, 50, 0.9);
  border-radius: 0.25rem;
}
.form-row > .col > .valid-tooltip, .form-row > [class*="col-"] > .valid-tooltip {
  left: 5px;
}
.was-validated :valid ~ .valid-feedback, .was-validated :valid ~ .valid-tooltip, .is-valid ~ .valid-feedback, .is-valid ~ .valid-tooltip {
  display: block;
}
.was-validated .form-control:valid, .form-control.is-valid {
  border-color: #357a32;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23357a32' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
  border-color: #357a32;
  box-shadow: 0 0 0 0.2rem rgba(53, 122, 50, 0.25);
}
.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}
.was-validated .custom-select:valid, .custom-select.is-valid {
  border-color: #357a32;
  padding-right: calc(0.75em + 2.3125rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 0.75rem center / 8px 10px no-repeat, #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23357a32' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") center right 1.75rem / calc(0.75em + 0.375rem) calc(0.75em + 0.375rem) no-repeat;
}
.was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
  border-color: #357a32;
  box-shadow: 0 0 0 0.2rem rgba(53, 122, 50, 0.25);
}
.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #357a32;
}
.was-validated .form-check-input:valid ~ .valid-feedback, .was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback, .form-check-input.is-valid ~ .valid-tooltip {
  display: block;
}
.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #357a32;
}
.was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
  border-color: #357a32;
}
.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  border-color: #459e41;
  background-color: #459e41;
}
.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(53, 122, 50, 0.25);
}
.was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #357a32;
}
.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #357a32;
}
.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  border-color: #357a32;
  box-shadow: 0 0 0 0.2rem rgba(53, 122, 50, 0.25);
}
.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #ca3120;
}
.invalid-tooltip {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.8203125rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(202, 49, 32, 0.9);
  border-radius: 0.25rem;
}
.form-row > .col > .invalid-tooltip, .form-row > [class*="col-"] > .invalid-tooltip {
  left: 5px;
}
.was-validated :invalid ~ .invalid-feedback, .was-validated :invalid ~ .invalid-tooltip, .is-invalid ~ .invalid-feedback, .is-invalid ~ .invalid-tooltip {
  display: block;
}
.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #ca3120;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23ca3120' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23ca3120' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
  border-color: #ca3120;
  box-shadow: 0 0 0 0.2rem rgba(202, 49, 32, 0.25);
}
.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}
.was-validated .custom-select:invalid, .custom-select.is-invalid {
  border-color: #ca3120;
  padding-right: calc(0.75em + 2.3125rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 0.75rem center / 8px 10px no-repeat, #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23ca3120' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23ca3120' stroke='none'/%3e%3c/svg%3e") center right 1.75rem / calc(0.75em + 0.375rem) calc(0.75em + 0.375rem) no-repeat;
}
.was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
  border-color: #ca3120;
  box-shadow: 0 0 0 0.2rem rgba(202, 49, 32, 0.25);
}
.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #ca3120;
}
.was-validated .form-check-input:invalid ~ .invalid-feedback, .was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback, .form-check-input.is-invalid ~ .invalid-tooltip {
  display: block;
}
.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #ca3120;
}
.was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
  border-color: #ca3120;
}
.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  border-color: #e04d3d;
  background-color: #e04d3d;
}
.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(202, 49, 32, 0.25);
}
.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #ca3120;
}
.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #ca3120;
}
.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  border-color: #ca3120;
  box-shadow: 0 0 0 0.2rem rgba(202, 49, 32, 0.25);
}
.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}
.form-inline .form-check {
  width: 100%;
}
@media (min-width: 576px) {
  .form-inline label {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0;
  }
  .form-inline .form-group {
    display: flex;
    flex: 0 0 auto;
    flex-flow: row wrap;
    align-items: center;
    margin-bottom: 0;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-plaintext {
    display: inline-block;
  }
  .form-inline .input-group, .form-inline .custom-select {
    width: auto;
  }
  .form-inline .form-check {
    display: flex;
    align-items: center;
    justify-content: center;
    width: auto;
    padding-left: 0;
  }
  .form-inline .form-check-input {
    position: relative;
    flex-shrink: 0;
    margin-top: 0;
    margin-right: 0.25rem;
    margin-left: 0;
  }
  .form-inline .custom-control {
    align-items: center;
    justify-content: center;
  }
  .form-inline .custom-control-label {
    margin-bottom: 0;
  }
}
.btn {
  display: inline-block;
  font-weight: 400;
  color: #1d2125;
  text-align: center;
  vertical-align: middle;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 0.9375rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (max-width: 1200px) {
  .btn {
    font-size: calc(0.90375rem + 0.045vw) ;
  }
}
@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}
.btn:hover {
  color: #1d2125;
  text-decoration: none;
}
.btn:focus, .btn.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(15, 108, 191, 0.75);
}
.btn.disabled, .btn:disabled {
  opacity: 0.65;
}
.btn:not(:disabled):not(.disabled) {
  cursor: pointer;
}
a.btn.disabled, fieldset:disabled a.btn {
  pointer-events: none;
}
.btn-primary {
  color: #fff;
  background-color: #0f6cbf;
  border-color: #0f6cbf;
}
.btn-primary:hover {
  color: #fff;
  background-color: #0c589c;
  border-color: #0b5190;
}
.btn-primary:focus, .btn-primary.focus {
  color: #fff;
  background-color: #0c589c;
  border-color: #0b5190;
  box-shadow: 0 0 0 0.2rem rgba(51, 130, 201, 0.5);
}
.btn-primary.disabled, .btn-primary:disabled {
  color: #fff;
  background-color: #0f6cbf;
  border-color: #0f6cbf;
}
.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #0b5190;
  border-color: #0a4b84;
}
.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(51, 130, 201, 0.5);
}
.btn-secondary {
  color: #1d2125;
  background-color: #ced4da;
  border-color: #ced4da;
}
.btn-secondary:hover {
  color: #1d2125;
  background-color: #b8c1ca;
  border-color: #b1bbc4;
}
.btn-secondary:focus, .btn-secondary.focus {
  color: #1d2125;
  background-color: #b8c1ca;
  border-color: #b1bbc4;
  box-shadow: 0 0 0 0.2rem rgba(179, 185, 191, 0.5);
}
.btn-secondary.disabled, .btn-secondary:disabled {
  color: #1d2125;
  background-color: #ced4da;
  border-color: #ced4da;
}
.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active, .show > .btn-secondary.dropdown-toggle {
  color: #1d2125;
  background-color: #b1bbc4;
  border-color: #aab4bf;
}
.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus, .show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(179, 185, 191, 0.5);
}
.btn-success {
  color: #fff;
  background-color: #357a32;
  border-color: #357a32;
}
.btn-success:hover {
  color: #fff;
  background-color: #295f27;
  border-color: #255623;
}
.btn-success:focus, .btn-success.focus {
  color: #fff;
  background-color: #295f27;
  border-color: #255623;
  box-shadow: 0 0 0 0.2rem rgba(83, 142, 81, 0.5);
}
.btn-success.disabled, .btn-success:disabled {
  color: #fff;
  background-color: #357a32;
  border-color: #357a32;
}
.btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active, .show > .btn-success.dropdown-toggle {
  color: #fff;
  background-color: #255623;
  border-color: #214d1f;
}
.btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus, .show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(83, 142, 81, 0.5);
}
.btn-info {
  color: #fff;
  background-color: #008196;
  border-color: #008196;
}
.btn-info:hover {
  color: #fff;
  background-color: #006070;
  border-color: #005563;
}
.btn-info:focus, .btn-info.focus {
  color: #fff;
  background-color: #006070;
  border-color: #005563;
  box-shadow: 0 0 0 0.2rem rgba(38, 148, 166, 0.5);
}
.btn-info.disabled, .btn-info:disabled {
  color: #fff;
  background-color: #008196;
  border-color: #008196;
}
.btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active, .show > .btn-info.dropdown-toggle {
  color: #fff;
  background-color: #005563;
  border-color: #004a56;
}
.btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus, .show > .btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(38, 148, 166, 0.5);
}
.btn-warning {
  color: #1d2125;
  background-color: #f0ad4e;
  border-color: #f0ad4e;
}
.btn-warning:hover {
  color: #1d2125;
  background-color: #ed9d2b;
  border-color: #ec971f;
}
.btn-warning:focus, .btn-warning.focus {
  color: #1d2125;
  background-color: #ed9d2b;
  border-color: #ec971f;
  box-shadow: 0 0 0 0.2rem rgba(208, 152, 72, 0.5);
}
.btn-warning.disabled, .btn-warning:disabled {
  color: #1d2125;
  background-color: #f0ad4e;
  border-color: #f0ad4e;
}
.btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active, .show > .btn-warning.dropdown-toggle {
  color: #1d2125;
  background-color: #ec971f;
  border-color: #ea9214;
}
.btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus, .show > .btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(208, 152, 72, 0.5);
}
.btn-danger {
  color: #fff;
  background-color: #ca3120;
  border-color: #ca3120;
}
.btn-danger:hover {
  color: #fff;
  background-color: #a9291b;
  border-color: #9e2619;
}
.btn-danger:focus, .btn-danger.focus {
  color: #fff;
  background-color: #a9291b;
  border-color: #9e2619;
  box-shadow: 0 0 0 0.2rem rgba(210, 80, 65, 0.5);
}
.btn-danger.disabled, .btn-danger:disabled {
  color: #fff;
  background-color: #ca3120;
  border-color: #ca3120;
}
.btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active, .show > .btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #9e2619;
  border-color: #932417;
}
.btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus, .show > .btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(210, 80, 65, 0.5);
}
.btn-light {
  color: #1d2125;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}
.btn-light:hover {
  color: #1d2125;
  background-color: #e2e6ea;
  border-color: #dae0e5;
}
.btn-light:focus, .btn-light.focus {
  color: #1d2125;
  background-color: #e2e6ea;
  border-color: #dae0e5;
  box-shadow: 0 0 0 0.2rem rgba(215, 217, 218, 0.5);
}
.btn-light.disabled, .btn-light:disabled {
  color: #1d2125;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}
.btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active, .show > .btn-light.dropdown-toggle {
  color: #1d2125;
  background-color: #dae0e5;
  border-color: #d3d9df;
}
.btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus, .show > .btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(215, 217, 218, 0.5);
}
.btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}
.btn-dark:hover {
  color: #fff;
  background-color: #23272b;
  border-color: #1d2124;
}
.btn-dark:focus, .btn-dark.focus {
  color: #fff;
  background-color: #23272b;
  border-color: #1d2124;
  box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
}
.btn-dark.disabled, .btn-dark:disabled {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}
.btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active, .show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #1d2124;
  border-color: #171a1d;
}
.btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus, .show > .btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
}
.btn-outline-primary {
  color: #0f6cbf;
  border-color: #0f6cbf;
}
.btn-outline-primary:hover {
  color: #fff;
  background-color: #0f6cbf;
  border-color: #0f6cbf;
}
.btn-outline-primary:focus, .btn-outline-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(15, 108, 191, 0.5);
}
.btn-outline-primary.disabled, .btn-outline-primary:disabled {
  color: #0f6cbf;
  background-color: transparent;
}
.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active, .show > .btn-outline-primary.dropdown-toggle {
  color: #fff;
  background-color: #0f6cbf;
  border-color: #0f6cbf;
}
.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(15, 108, 191, 0.5);
}
.btn-outline-secondary {
  color: #ced4da;
  border-color: #ced4da;
}
.btn-outline-secondary:hover {
  color: #1d2125;
  background-color: #ced4da;
  border-color: #ced4da;
}
.btn-outline-secondary:focus, .btn-outline-secondary.focus {
  box-shadow: 0 0 0 0.2rem rgba(206, 212, 218, 0.5);
}
.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
  color: #ced4da;
  background-color: transparent;
}
.btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active, .show > .btn-outline-secondary.dropdown-toggle {
  color: #1d2125;
  background-color: #ced4da;
  border-color: #ced4da;
}
.btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(206, 212, 218, 0.5);
}
.btn-outline-success {
  color: #357a32;
  border-color: #357a32;
}
.btn-outline-success:hover {
  color: #fff;
  background-color: #357a32;
  border-color: #357a32;
}
.btn-outline-success:focus, .btn-outline-success.focus {
  box-shadow: 0 0 0 0.2rem rgba(53, 122, 50, 0.5);
}
.btn-outline-success.disabled, .btn-outline-success:disabled {
  color: #357a32;
  background-color: transparent;
}
.btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active, .show > .btn-outline-success.dropdown-toggle {
  color: #fff;
  background-color: #357a32;
  border-color: #357a32;
}
.btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(53, 122, 50, 0.5);
}
.btn-outline-info {
  color: #008196;
  border-color: #008196;
}
.btn-outline-info:hover {
  color: #fff;
  background-color: #008196;
  border-color: #008196;
}
.btn-outline-info:focus, .btn-outline-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 129, 150, 0.5);
}
.btn-outline-info.disabled, .btn-outline-info:disabled {
  color: #008196;
  background-color: transparent;
}
.btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active, .show > .btn-outline-info.dropdown-toggle {
  color: #fff;
  background-color: #008196;
  border-color: #008196;
}
.btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 129, 150, 0.5);
}
.btn-outline-warning {
  color: #f0ad4e;
  border-color: #f0ad4e;
}
.btn-outline-warning:hover {
  color: #1d2125;
  background-color: #f0ad4e;
  border-color: #f0ad4e;
}
.btn-outline-warning:focus, .btn-outline-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(240, 173, 78, 0.5);
}
.btn-outline-warning.disabled, .btn-outline-warning:disabled {
  color: #f0ad4e;
  background-color: transparent;
}
.btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active, .show > .btn-outline-warning.dropdown-toggle {
  color: #1d2125;
  background-color: #f0ad4e;
  border-color: #f0ad4e;
}
.btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(240, 173, 78, 0.5);
}
.btn-outline-danger {
  color: #ca3120;
  border-color: #ca3120;
}
.btn-outline-danger:hover {
  color: #fff;
  background-color: #ca3120;
  border-color: #ca3120;
}
.btn-outline-danger:focus, .btn-outline-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(202, 49, 32, 0.5);
}
.btn-outline-danger.disabled, .btn-outline-danger:disabled {
  color: #ca3120;
  background-color: transparent;
}
.btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active, .show > .btn-outline-danger.dropdown-toggle {
  color: #fff;
  background-color: #ca3120;
  border-color: #ca3120;
}
.btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(202, 49, 32, 0.5);
}
.btn-outline-light {
  color: #f8f9fa;
  border-color: #f8f9fa;
}
.btn-outline-light:hover {
  color: #1d2125;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}
.btn-outline-light:focus, .btn-outline-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}
.btn-outline-light.disabled, .btn-outline-light:disabled {
  color: #f8f9fa;
  background-color: transparent;
}
.btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active, .show > .btn-outline-light.dropdown-toggle {
  color: #1d2125;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}
.btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}
.btn-outline-dark {
  color: #343a40;
  border-color: #343a40;
}
.btn-outline-dark:hover {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}
.btn-outline-dark:focus, .btn-outline-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}
.btn-outline-dark.disabled, .btn-outline-dark:disabled {
  color: #343a40;
  background-color: transparent;
}
.btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active, .show > .btn-outline-dark.dropdown-toggle {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}
.btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}
.btn-link {
  font-weight: 400;
  color: #0f6cbf;
  text-decoration: none;
}
.btn-link:hover {
  color: #094478;
  text-decoration: underline;
}
.btn-link:focus, .btn-link.focus {
  text-decoration: underline;
}
.btn-link:disabled, .btn-link.disabled {
  color: #6a737b;
  pointer-events: none;
}
.btn-lg, .btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.171875rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}
@media (max-width: 1200px) {
  .btn-lg, .btn-group-lg > .btn {
    font-size: calc(0.9271875rem + 0.32625vw) ;
  }
}
.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.8203125rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 0.5rem;
}
input[type="submit"].btn-block, input[type="reset"].btn-block, input[type="button"].btn-block {
  width: 100%;
}
.fade {
  transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}
.fade:not(.show) {
  opacity: 0;
}
.collapse:not(.show) {
  display: none;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}
.dropup, .dropright, .dropdown, .dropleft {
  position: relative;
}
.dropdown-toggle {
  white-space: nowrap;
}
.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 0.9375rem;
  color: #1d2125;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}
@media (max-width: 1200px) {
  .dropdown-menu {
    font-size: calc(0.90375rem + 0.045vw) ;
  }
}
.dropdown-menu-left {
  right: auto;
  left: 0;
}
.dropdown-menu-right {
  right: 0;
  left: auto;
}
@media (min-width: 576px) {
  .dropdown-menu-sm-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-right {
    right: 0;
    left: auto;
  }
}
@media (min-width: 768px) {
  .dropdown-menu-md-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-right {
    right: 0;
    left: auto;
  }
}
@media (min-width: 992px) {
  .dropdown-menu-lg-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-right {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1200px) {
  .dropdown-menu-xl-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-right {
    right: 0;
    left: auto;
  }
}
.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}
.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}
.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}
.dropright .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}
.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropright .dropdown-toggle::after {
  vertical-align: 0;
}
.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}
.dropleft .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}
.dropleft .dropdown-toggle::after {
  display: none;
}
.dropleft .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}
.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropleft .dropdown-toggle::before {
  vertical-align: 0;
}
.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto;
}
.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef;
}
.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #1d2125;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}
.dropdown-item:hover, .dropdown-item:focus {
  color: #fff;
  text-decoration: none;
  background-color: #0f6cbf;
}
.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #0f6cbf;
}
.dropdown-item.disabled, .dropdown-item:disabled {
  color: #8f959e;
  pointer-events: none;
  background-color: transparent;
}
.dropdown-menu.show {
  display: block;
}
.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.8203125rem;
  color: #6a737b;
  white-space: nowrap;
}
.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #1d2125;
}
.btn-group, .btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}
.btn-group > .btn, .btn-group-vertical > .btn {
  position: relative;
  flex: 1 1 auto;
}
.btn-group > .btn:hover, .btn-group-vertical > .btn:hover {
  z-index: 1;
}
.btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active, .btn-group-vertical > .btn:focus, .btn-group-vertical > .btn:active, .btn-group-vertical > .btn.active {
  z-index: 1;
}
.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}
.btn-toolbar .input-group {
  width: auto;
}
.btn-group > .btn:not(:first-child), .btn-group > .btn-group:not(:first-child) {
  margin-left: -1px;
}
.btn-group > .btn:not(:last-child):not(.dropdown-toggle), .btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:not(:first-child), .btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem;
}
.dropdown-toggle-split::after, .dropup .dropdown-toggle-split::after, .dropright .dropdown-toggle-split::after {
  margin-left: 0;
}
.dropleft .dropdown-toggle-split::before {
  margin-right: 0;
}
.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem;
}
.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}
.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}
.btn-group-vertical > .btn, .btn-group-vertical > .btn-group {
  width: 100%;
}
.btn-group-vertical > .btn:not(:first-child), .btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: -1px;
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle), .btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:not(:first-child), .btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.btn-group-toggle > .btn, .btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0;
}
.btn-group-toggle > .btn input[type="radio"], .btn-group-toggle > .btn input[type="checkbox"], .btn-group-toggle > .btn-group > .btn input[type="radio"], .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}
.input-group > .form-control, .input-group > .form-control-plaintext, .input-group > .custom-select, .input-group > .custom-file {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
  margin-bottom: 0;
}
.input-group > .form-control + .form-control, .input-group > .form-control + .custom-select, .input-group > .form-control + .custom-file, .input-group > .form-control-plaintext + .form-control, .input-group > .form-control-plaintext + .custom-select, .input-group > .form-control-plaintext + .custom-file, .input-group > .custom-select + .form-control, .input-group > .custom-select + .custom-select, .input-group > .custom-select + .custom-file, .input-group > .custom-file + .form-control, .input-group > .custom-file + .custom-select, .input-group > .custom-file + .custom-file {
  margin-left: -1px;
}
.input-group > .form-control:focus, .input-group > .custom-select:focus, .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
  z-index: 3;
}
.input-group > .custom-file .custom-file-input:focus {
  z-index: 4;
}
.input-group > .form-control:not(:first-child), .input-group > .custom-select:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group > .custom-file {
  display: flex;
  align-items: center;
}
.input-group > .custom-file:not(:last-child) .custom-file-label, .input-group > .custom-file:not(:first-child) .custom-file-label {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group:not(.has-validation) > .form-control:not(:last-child), .input-group:not(.has-validation) > .custom-select:not(:last-child), .input-group:not(.has-validation) > .custom-file:not(:last-child) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.has-validation > .form-control:nth-last-child(n + 3), .input-group.has-validation > .custom-select:nth-last-child(n + 3), .input-group.has-validation > .custom-file:nth-last-child(n + 3) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group-prepend, .input-group-append {
  display: flex;
}
.input-group-prepend .btn, .input-group-append .btn {
  position: relative;
  z-index: 2;
}
.input-group-prepend .btn:focus, .input-group-append .btn:focus {
  z-index: 3;
}
.input-group-prepend .btn + .btn, .input-group-prepend .btn + .input-group-text, .input-group-prepend .input-group-text + .input-group-text, .input-group-prepend .input-group-text + .btn, .input-group-append .btn + .btn, .input-group-append .btn + .input-group-text, .input-group-append .input-group-text + .input-group-text, .input-group-append .input-group-text + .btn {
  margin-left: -1px;
}
.input-group-prepend {
  margin-right: -1px;
}
.input-group-append {
  margin-left: -1px;
}
.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #8f959e;
  border-radius: 0.25rem;
}
@media (max-width: 1200px) {
  .input-group-text {
    font-size: calc(0.90375rem + 0.045vw) ;
  }
}
.input-group-text input[type="radio"], .input-group-text input[type="checkbox"] {
  margin-top: 0;
}
.input-group-lg > .form-control:not(textarea), .input-group-lg > .custom-select {
  height: calc(1.5em + 1rem + 2px);
}
.input-group-lg > .form-control, .input-group-lg > .custom-select, .input-group-lg > .input-group-prepend > .input-group-text, .input-group-lg > .input-group-append > .input-group-text, .input-group-lg > .input-group-prepend > .btn, .input-group-lg > .input-group-append > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.171875rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}
@media (max-width: 1200px) {
  .input-group-lg > .form-control, .input-group-lg > .custom-select, .input-group-lg > .input-group-prepend > .input-group-text, .input-group-lg > .input-group-append > .input-group-text, .input-group-lg > .input-group-prepend > .btn, .input-group-lg > .input-group-append > .btn {
    font-size: calc(0.9271875rem + 0.32625vw) ;
  }
}
.input-group-sm > .form-control:not(textarea), .input-group-sm > .custom-select {
  height: calc(1.5em + 0.5rem + 2px);
}
.input-group-sm > .form-control, .input-group-sm > .custom-select, .input-group-sm > .input-group-prepend > .input-group-text, .input-group-sm > .input-group-append > .input-group-text, .input-group-sm > .input-group-prepend > .btn, .input-group-sm > .input-group-append > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.8203125rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}
.input-group-lg > .custom-select, .input-group-sm > .custom-select {
  padding-right: 1.75rem;
}
.input-group > .input-group-prepend > .btn, .input-group > .input-group-prepend > .input-group-text, .input-group:not(.has-validation) > .input-group-append:not(:last-child) > .btn, .input-group:not(.has-validation) > .input-group-append:not(:last-child) > .input-group-text, .input-group.has-validation > .input-group-append:nth-last-child(n + 3) > .btn, .input-group.has-validation > .input-group-append:nth-last-child(n + 3) > .input-group-text, .input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle), .input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > .input-group-append > .btn, .input-group > .input-group-append > .input-group-text, .input-group > .input-group-prepend:not(:first-child) > .btn, .input-group > .input-group-prepend:not(:first-child) > .input-group-text, .input-group > .input-group-prepend:first-child > .btn:not(:first-child), .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.custom-control {
  position: relative;
  z-index: 1;
  display: block;
  min-height: 1.40625rem;
  padding-left: 1.5rem;
  color-adjust: exact;
}
.custom-control-inline {
  display: inline-flex;
  margin-right: 1rem;
}
.custom-control-input {
  position: absolute;
  left: 0;
  z-index: -1;
  width: 1rem;
  height: 1.203125rem;
  opacity: 0;
}
.custom-control-input:checked ~ .custom-control-label::before {
  color: #fff;
  border-color: #0f6cbf;
  background-color: #0f6cbf;
}
.custom-control-input:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(15, 108, 191, 0.75);
}
.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #5babf2;
}
.custom-control-input:not(:disabled):active ~ .custom-control-label::before {
  color: #fff;
  background-color: #8bc3f6;
  border-color: #8bc3f6;
}
.custom-control-input[disabled] ~ .custom-control-label, .custom-control-input:disabled ~ .custom-control-label {
  color: #6a737b;
}
.custom-control-input[disabled] ~ .custom-control-label::before, .custom-control-input:disabled ~ .custom-control-label::before {
  background-color: #e9ecef;
}
.custom-control-label {
  position: relative;
  margin-bottom: 0;
  vertical-align: top;
}
.custom-control-label::before {
  position: absolute;
  top: 0.203125rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  content: "";
  background-color: #fff;
  border: #8f959e solid 1px;
}
.custom-control-label::after {
  position: absolute;
  top: 0.203125rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  content: "";
  background: 50% / 50% 50% no-repeat;
}
.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem;
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e");
}
.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  border-color: #0f6cbf;
  background-color: #0f6cbf;
}
.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
}
.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(15, 108, 191, 0.5);
}
.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(15, 108, 191, 0.5);
}
.custom-radio .custom-control-label::before {
  border-radius: 50%;
}
.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}
.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(15, 108, 191, 0.5);
}
.custom-switch {
  padding-left: 2.25rem;
}
.custom-switch .custom-control-label::before {
  left: -2.25rem;
  width: 1.75rem;
  pointer-events: all;
  border-radius: 0.5rem;
}
.custom-switch .custom-control-label::after {
  top: calc(0.203125rem + 2px);
  left: calc(-2.25rem + 2px);
  width: calc(1rem - 4px);
  height: calc(1rem - 4px);
  background-color: #8f959e;
  border-radius: 0.5rem;
  transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .custom-switch .custom-control-label::after {
    transition: none;
  }
}
.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
  background-color: #fff;
  transform: translateX(0.75rem);
}
.custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(15, 108, 191, 0.5);
}
.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 0.75rem center / 8px 10px no-repeat;
  border: 1px solid #8f959e;
  border-radius: 0.25rem;
  appearance: none;
}
@media (max-width: 1200px) {
  .custom-select {
    font-size: calc(0.90375rem + 0.045vw) ;
  }
}
.custom-select:focus {
  border-color: #5babf2;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(15, 108, 191, 0.75);
}
.custom-select:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}
.custom-select[multiple], .custom-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 0.75rem;
  background-image: none;
}
.custom-select:disabled {
  color: #6a737b;
  background-color: #e9ecef;
}
.custom-select::-ms-expand {
  display: none;
}
.custom-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #495057;
}
.custom-select-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.8203125rem;
}
.custom-select-lg {
  height: calc(1.5em + 1rem + 2px);
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.171875rem;
}
@media (max-width: 1200px) {
  .custom-select-lg {
    font-size: calc(0.9271875rem + 0.32625vw) ;
  }
}
.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin-bottom: 0;
}
.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin: 0;
  overflow: hidden;
  opacity: 0;
}
.custom-file-input:focus ~ .custom-file-label {
  border-color: #5babf2;
  box-shadow: 0 0 0 0.2rem rgba(15, 108, 191, 0.75);
}
.custom-file-input[disabled] ~ .custom-file-label, .custom-file-input:disabled ~ .custom-file-label {
  background-color: #e9ecef;
}
.custom-file-input:lang(en) ~ .custom-file-label::after {
  content: "Browse";
}
.custom-file-input ~ .custom-file-label[data-browse]::after {
  content: attr(data-browse);
}
.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  overflow: hidden;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #8f959e;
  border-radius: 0.25rem;
}
.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: calc(1.5em + 0.75rem);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  content: "Browse";
  background-color: #e9ecef;
  border-left: inherit;
  border-radius: 0 0.25rem 0.25rem 0;
}
.custom-range {
  width: 100%;
  height: 1.4rem;
  padding: 0;
  background-color: transparent;
  appearance: none;
}
.custom-range:focus {
  outline: 0;
}
.custom-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(15, 108, 191, 0.75);
}
.custom-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(15, 108, 191, 0.75);
}
.custom-range:focus::-ms-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(15, 108, 191, 0.75);
}
.custom-range::-moz-focus-outer {
  border: 0;
}
.custom-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #0f6cbf;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .custom-range::-webkit-slider-thumb {
    transition: none;
  }
}
.custom-range::-webkit-slider-thumb:active {
  background-color: #8bc3f6;
}
.custom-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}
.custom-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #0f6cbf;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .custom-range::-moz-range-thumb {
    transition: none;
  }
}
.custom-range::-moz-range-thumb:active {
  background-color: #8bc3f6;
}
.custom-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}
.custom-range::-ms-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: 0;
  margin-right: 0.2rem;
  margin-left: 0.2rem;
  background-color: #0f6cbf;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .custom-range::-ms-thumb {
    transition: none;
  }
}
.custom-range::-ms-thumb:active {
  background-color: #8bc3f6;
}
.custom-range::-ms-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: transparent;
  border-color: transparent;
  border-width: 0.5rem;
}
.custom-range::-ms-fill-lower {
  background-color: #dee2e6;
  border-radius: 1rem;
}
.custom-range::-ms-fill-upper {
  margin-right: 15px;
  background-color: #dee2e6;
  border-radius: 1rem;
}
.custom-range:disabled::-webkit-slider-thumb {
  background-color: #8f959e;
}
.custom-range:disabled::-webkit-slider-runnable-track {
  cursor: default;
}
.custom-range:disabled::-moz-range-thumb {
  background-color: #8f959e;
}
.custom-range:disabled::-moz-range-track {
  cursor: default;
}
.custom-range:disabled::-ms-thumb {
  background-color: #8f959e;
}
.custom-control-label::before, .custom-file-label, .custom-select {
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .custom-control-label::before, .custom-file-label, .custom-select {
    transition: none;
  }
}
.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.nav-link {
  display: block;
  padding: 0.5rem 1rem;
}
.nav-link:hover, .nav-link:focus {
  text-decoration: none;
}
.nav-link.disabled {
  color: #6a737b;
  pointer-events: none;
  cursor: default;
}
.nav-tabs {
  border-bottom: 1px solid #dee2e6;
}
.nav-tabs .nav-link {
  margin-bottom: -1px;
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}
.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #e9ecef #e9ecef #dee2e6;
}
.nav-tabs .nav-link.disabled {
  color: #6a737b;
  background-color: transparent;
  border-color: transparent;
}
.nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
  color: #495057;
  background-color: #fff;
  border-color: #dee2e6 #dee2e6 #fff;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.nav-pills .nav-link {
  border-radius: 0.25rem;
}
.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
  color: #fff;
  background-color: #0f6cbf;
}
.nav-fill > .nav-link, .nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}
.nav-justified > .nav-link, .nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 1rem;
}
.navbar .container, .navbar .container-fluid, .navbar .container-sm, .navbar .container-md, .navbar .container-lg, .navbar .container-xl, .navbar > .container-sm, .navbar > .container-md, .navbar > .container-lg, .navbar > .container-xl {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}
.navbar-brand {
  display: inline-block;
  padding-top: 0.32421875rem;
  padding-bottom: 0.32421875rem;
  margin-right: 1rem;
  font-size: 1.171875rem;
  line-height: inherit;
  white-space: nowrap;
}
@media (max-width: 1200px) {
  .navbar-brand {
    font-size: calc(0.9271875rem + 0.32625vw) ;
  }
}
.navbar-brand:hover, .navbar-brand:focus {
  text-decoration: none;
}
.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}
.navbar-nav .dropdown-menu {
  position: static;
  float: none;
}
.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}
.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.171875rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}
@media (max-width: 1200px) {
  .navbar-toggler {
    font-size: calc(0.9271875rem + 0.32625vw) ;
  }
}
.navbar-toggler:hover, .navbar-toggler:focus {
  text-decoration: none;
}
.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: 50% / 100% 100% no-repeat;
}
.navbar-nav-scroll {
  max-height: 75vh;
  overflow-y: auto;
}
@media (max-width: 575.98px) {
  .navbar-expand-sm > .container, .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm > .container, .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
}
@media (max-width: 767.98px) {
  .navbar-expand-md > .container, .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md > .container, .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
}
@media (max-width: 991.98px) {
  .navbar-expand-lg > .container, .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg > .container, .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
}
@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container, .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl > .container, .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
}
.navbar-expand {
  flex-flow: row nowrap;
  justify-content: flex-start;
}
.navbar-expand > .container, .navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
  padding-right: 0;
  padding-left: 0;
}
.navbar-expand .navbar-nav {
  flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}
.navbar-expand > .container, .navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
  flex-wrap: nowrap;
}
.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}
.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}
.navbar-expand .navbar-toggler {
  display: none;
}
.navbar-light .navbar-brand, .navbar-bootswatch .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-brand:hover, .navbar-bootswatch .navbar-brand:hover, .navbar-light .navbar-brand:focus, .navbar-bootswatch .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-nav .nav-link, .navbar-bootswatch .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.6);
}
.navbar-light .navbar-nav .nav-link:hover, .navbar-bootswatch .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus, .navbar-bootswatch .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-nav .nav-link.disabled, .navbar-bootswatch .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}
.navbar-light .navbar-nav .show > .nav-link, .navbar-bootswatch .navbar-nav .show > .nav-link, .navbar-light .navbar-nav .active > .nav-link, .navbar-bootswatch .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.show, .navbar-bootswatch .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active, .navbar-bootswatch .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-toggler, .navbar-bootswatch .navbar-toggler {
  color: rgba(0, 0, 0, 0.6);
  border-color: rgba(0, 0, 0, 0.1);
}
.navbar-light .navbar-toggler-icon, .navbar-bootswatch .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.6%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-light .navbar-text, .navbar-bootswatch .navbar-text {
  color: rgba(0, 0, 0, 0.6);
}
.navbar-light .navbar-text a, .navbar-bootswatch .navbar-text a {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-text a:hover, .navbar-bootswatch .navbar-text a:hover, .navbar-light .navbar-text a:focus, .navbar-bootswatch .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-dark .navbar-brand {
  color: #fff;
}
.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #fff;
}
.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5);
}
.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: white;
}
.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}
.navbar-dark .navbar-nav .show > .nav-link, .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1);
}
.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5);
}
.navbar-dark .navbar-text a {
  color: #fff;
}
.navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
  color: #fff;
}
.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}
.card > hr {
  margin-right: 0;
  margin-left: 0;
}
.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}
.card > .list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}
.card > .list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}
.card > .card-header + .list-group, .card > .list-group + .card-footer {
  border-top: 0;
}
.card-body {
  flex: 1 1 auto;
  min-height: 1px;
  padding: 1.25rem;
}
.card-title {
  margin-bottom: 0.75rem;
}
.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0;
}
.card-text:last-child {
  margin-bottom: 0;
}
.card-link:hover {
  text-decoration: none;
}
.card-link + .card-link {
  margin-left: 1.25rem;
}
.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}
.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125);
}
.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}
.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0;
}
.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem;
}
.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
  border-radius: calc(0.25rem - 1px);
}
.card-img, .card-img-top, .card-img-bottom {
  flex-shrink: 0;
  width: 100%;
}
.card-img, .card-img-top {
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}
.card-img, .card-img-bottom {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}
.card-deck .card {
  margin-bottom: 0.25rem;
}
@media (min-width: 576px) {
  .card-deck {
    display: flex;
    flex-flow: row wrap;
    margin-right: -0.25rem;
    margin-left: -0.25rem;
  }
  .card-deck .card {
    flex: 1 0 0%;
    margin-right: 0.25rem;
    margin-bottom: 0;
    margin-left: 0.25rem;
  }
}
.card-group > .card {
  margin-bottom: 0.25rem;
}
@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap;
  }
  .card-group > .card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top, .card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom, .card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top, .card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom, .card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}
.card-columns .card {
  margin-bottom: 0.75rem;
}
@media (min-width: 576px) {
  .card-columns {
    column-count: 3;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1;
  }
  .card-columns .card {
    display: inline-block;
    width: 100%;
  }
}
.accordion {
  overflow-anchor: none;
}
.accordion > .card {
  overflow: hidden;
}
.accordion > .card:not(:last-of-type) {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.accordion > .card:not(:first-of-type) {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.accordion > .card > .card-header {
  border-radius: 0;
  margin-bottom: -1px;
}
.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0.25rem 0;
  margin-bottom: 0;
  list-style: none;
  background-color: transparent;
  border-radius: 0.25rem;
}
.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem;
}
.breadcrumb-item + .breadcrumb-item::before {
  float: left;
  padding-right: 0.5rem;
  color: #6a737b;
  content: "/";
}
.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline;
}
.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none;
}
.breadcrumb-item.active {
  color: #6a737b;
}
.pagination {
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
}
.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #0f6cbf;
  background-color: #fff;
  border: 1px solid #dee2e6;
}
.page-link:hover {
  z-index: 2;
  color: #094478;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}
.page-link:focus {
  z-index: 3;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(15, 108, 191, 0.75);
}
.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}
.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}
.page-item.active .page-link {
  z-index: 3;
  color: #fff;
  background-color: #0f6cbf;
  border-color: #0f6cbf;
}
.page-item.disabled .page-link {
  color: #6a737b;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6;
}
.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.171875rem;
  line-height: 1.5;
}
@media (max-width: 1200px) {
  .pagination-lg .page-link {
    font-size: calc(0.9271875rem + 0.32625vw) ;
  }
}
.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}
.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}
.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.8203125rem;
  line-height: 1.5;
}
.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}
.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}
.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .badge {
    transition: none;
  }
}
a.badge:hover, a.badge:focus {
  text-decoration: none;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem;
}
.badge-primary {
  color: #fff;
  background-color: #0f6cbf;
}
a.badge-primary:hover, a.badge-primary:focus {
  color: #fff;
  background-color: #0b5190;
}
a.badge-primary:focus, a.badge-primary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(15, 108, 191, 0.5);
}
.badge-secondary {
  color: #1d2125;
  background-color: #ced4da;
}
a.badge-secondary:hover, a.badge-secondary:focus {
  color: #1d2125;
  background-color: #b1bbc4;
}
a.badge-secondary:focus, a.badge-secondary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(206, 212, 218, 0.5);
}
.badge-success {
  color: #fff;
  background-color: #357a32;
}
a.badge-success:hover, a.badge-success:focus {
  color: #fff;
  background-color: #255623;
}
a.badge-success:focus, a.badge-success.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(53, 122, 50, 0.5);
}
.badge-info {
  color: #fff;
  background-color: #008196;
}
a.badge-info:hover, a.badge-info:focus {
  color: #fff;
  background-color: #005563;
}
a.badge-info:focus, a.badge-info.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 129, 150, 0.5);
}
.badge-warning {
  color: #1d2125;
  background-color: #f0ad4e;
}
a.badge-warning:hover, a.badge-warning:focus {
  color: #1d2125;
  background-color: #ec971f;
}
a.badge-warning:focus, a.badge-warning.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(240, 173, 78, 0.5);
}
.badge-danger {
  color: #fff;
  background-color: #ca3120;
}
a.badge-danger:hover, a.badge-danger:focus {
  color: #fff;
  background-color: #9e2619;
}
a.badge-danger:focus, a.badge-danger.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(202, 49, 32, 0.5);
}
.badge-light {
  color: #1d2125;
  background-color: #f8f9fa;
}
a.badge-light:hover, a.badge-light:focus {
  color: #1d2125;
  background-color: #dae0e5;
}
a.badge-light:focus, a.badge-light.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}
.badge-dark {
  color: #fff;
  background-color: #343a40;
}
a.badge-dark:hover, a.badge-dark:focus {
  color: #fff;
  background-color: #1d2124;
}
a.badge-dark:focus, a.badge-dark.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}
.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem;
}
@media (min-width: 576px) {
  .jumbotron {
    padding: 4rem 2rem;
  }
}
.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0;
}
.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 0 solid transparent;
  border-radius: 0.25rem;
}
.alert-heading {
  color: inherit;
}
.alert-link {
  font-weight: 700;
}
.alert-dismissible {
  padding-right: 3.90625rem;
}
.alert-dismissible .close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 0.75rem 1.25rem;
  color: inherit;
}
.alert-primary {
  color: #083863;
  background-color: #cfe2f2;
  border-color: #bcd6ed;
}
.alert-primary hr {
  border-top-color: #a8cae8;
}
.alert-primary .alert-link {
  color: #041d34;
}
.alert-secondary {
  color: #6b6e71;
  background-color: #f5f6f8;
  border-color: #f1f3f5;
}
.alert-secondary hr {
  border-top-color: #e2e6ea;
}
.alert-secondary .alert-link {
  color: #525557;
}
.alert-success, .environmenttable .ok {
  color: #1c3f1a;
  background-color: #d7e4d6;
  border-color: #c6dac6;
}
.alert-success hr, .environmenttable .ok hr {
  border-top-color: #b7d0b7;
}
.alert-success .alert-link, .environmenttable .ok .alert-link {
  color: #0c1b0b;
}
.alert-info {
  color: #00434e;
  background-color: #cce6ea;
  border-color: #b8dce2;
}
.alert-info hr {
  border-top-color: #a6d3db;
}
.alert-info .alert-link {
  color: #00171b;
}
.alert-warning, .environmenttable .warn {
  color: #7d5a29;
  background-color: #fcefdc;
  border-color: #fbe8cd;
}
.alert-warning hr, .environmenttable .warn hr {
  border-top-color: #f9ddb5;
}
.alert-warning .alert-link, .environmenttable .warn .alert-link {
  color: #573e1c;
}
.alert-danger, .environmenttable .error {
  color: #691911;
  background-color: #f4d6d2;
  border-color: #f0c5c1;
}
.alert-danger hr, .environmenttable .error hr {
  border-top-color: #ebb2ac;
}
.alert-danger .alert-link, .environmenttable .error .alert-link {
  color: #3d0f0a;
}
.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe;
}
.alert-light hr {
  border-top-color: #ececf6;
}
.alert-light .alert-link {
  color: #686868;
}
.alert-dark {
  color: #1b1e21;
  background-color: #d6d8d9;
  border-color: #c6c8ca;
}
.alert-dark hr {
  border-top-color: #b9bbbe;
}
.alert-dark .alert-link {
  color: #040505;
}
@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  display: flex;
  height: 1rem;
  overflow: hidden;
  line-height: 0;
  font-size: 0.703125rem;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}
.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #0f6cbf;
  transition: width 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}
.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}
.progress-bar-animated {
  animation: 1s linear infinite progress-bar-stripes;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    animation: none;
  }
}
.media {
  display: flex;
  align-items: flex-start;
}
.media-body {
  flex: 1;
}
.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: 0.25rem;
}
.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}
.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: #495057;
  text-decoration: none;
  background-color: #f8f9fa;
}
.list-group-item-action:active {
  color: #1d2125;
  background-color: #e9ecef;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}
.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}
.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}
.list-group-item.disabled, .list-group-item:disabled {
  color: #6a737b;
  pointer-events: none;
  background-color: #fff;
}
.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #0f6cbf;
  border-color: #0f6cbf;
}
.list-group-item + .list-group-item {
  border-top-width: 0;
}
.list-group-item + .list-group-item.active {
  margin-top: -1px;
  border-top-width: 1px;
}
.list-group-horizontal {
  flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child {
  border-bottom-left-radius: 0.25rem;
  border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child {
  border-top-right-radius: 0.25rem;
  border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: 1px;
  border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: -1px;
  border-left-width: 1px;
}
@media (min-width: 576px) {
  .list-group-horizontal-sm {
    flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 768px) {
  .list-group-horizontal-md {
    flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 992px) {
  .list-group-horizontal-lg {
    flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
.list-group-flush {
  border-radius: 0;
}
.list-group-flush > .list-group-item {
  border-width: 0 0 1px;
}
.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}
.list-group-item-primary {
  color: #083863;
  background-color: #bcd6ed;
}
.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #083863;
  background-color: #a8cae8;
}
.list-group-item-primary.list-group-item-action.active {
  color: #fff;
  background-color: #083863;
  border-color: #083863;
}
.list-group-item-secondary {
  color: #6b6e71;
  background-color: #f1f3f5;
}
.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #6b6e71;
  background-color: #e2e6ea;
}
.list-group-item-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #6b6e71;
  border-color: #6b6e71;
}
.list-group-item-success {
  color: #1c3f1a;
  background-color: #c6dac6;
}
.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #1c3f1a;
  background-color: #b7d0b7;
}
.list-group-item-success.list-group-item-action.active {
  color: #fff;
  background-color: #1c3f1a;
  border-color: #1c3f1a;
}
.list-group-item-info {
  color: #00434e;
  background-color: #b8dce2;
}
.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #00434e;
  background-color: #a6d3db;
}
.list-group-item-info.list-group-item-action.active {
  color: #fff;
  background-color: #00434e;
  border-color: #00434e;
}
.list-group-item-warning {
  color: #7d5a29;
  background-color: #fbe8cd;
}
.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #7d5a29;
  background-color: #f9ddb5;
}
.list-group-item-warning.list-group-item-action.active {
  color: #fff;
  background-color: #7d5a29;
  border-color: #7d5a29;
}
.list-group-item-danger {
  color: #691911;
  background-color: #f0c5c1;
}
.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #691911;
  background-color: #ebb2ac;
}
.list-group-item-danger.list-group-item-action.active {
  color: #fff;
  background-color: #691911;
  border-color: #691911;
}
.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe;
}
.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #818182;
  background-color: #ececf6;
}
.list-group-item-light.list-group-item-action.active {
  color: #fff;
  background-color: #818182;
  border-color: #818182;
}
.list-group-item-dark {
  color: #1b1e21;
  background-color: #c6c8ca;
}
.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #1b1e21;
  background-color: #b9bbbe;
}
.list-group-item-dark.list-group-item-action.active {
  color: #fff;
  background-color: #1b1e21;
  border-color: #1b1e21;
}
.close {
  float: right;
  font-size: 1.40625rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: 0.5;
}
@media (max-width: 1200px) {
  .close {
    font-size: calc(0.950625rem + 0.6075vw) ;
  }
}
.close:hover {
  color: #000;
  text-decoration: none;
}
.close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
  opacity: 0.75;
}
button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
}
a.close.disabled {
  pointer-events: none;
}
.toast {
  flex-basis: 350px;
  max-width: 350px;
  font-size: 0.875rem;
  color: #fff;
  background-color: rgba(29, 33, 37, 0.95);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
  opacity: 0;
  border-radius: 0.25rem;
}
.toast:not(:last-child) {
  margin-bottom: 0.75rem;
}
.toast.showing {
  opacity: 1;
}
.toast.show {
  display: block;
  opacity: 1;
}
.toast.hide {
  display: none;
}
.toast-header {
  display: flex;
  align-items: center;
  padding: 0.25rem 0.75rem;
  color: #f8f9fa;
  background-color: rgba(255, 255, 255, 0.1);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}
.toast-body {
  padding: 0.75rem;
}
.modal-open {
  overflow: hidden;
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 0;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}
.modal.fade .modal-dialog {
  transition: transform 0.3s ease-out;
  transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}
.modal.show .modal-dialog {
  transform: none;
}
.modal.modal-static .modal-dialog {
  transform: scale(1.02);
}
.modal-dialog-scrollable {
  display: flex;
  max-height: calc(100% - 1rem);
}
.modal-dialog-scrollable .modal-content {
  max-height: calc(100vh - 1rem);
  overflow: hidden;
}
.modal-dialog-scrollable .modal-header, .modal-dialog-scrollable .modal-footer {
  flex-shrink: 0;
}
.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}
.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - 1rem);
}
.modal-dialog-centered::before {
  display: block;
  height: calc(100vh - 1rem);
  height: min-content;
  content: "";
}
.modal-dialog-centered.modal-dialog-scrollable {
  flex-direction: column;
  justify-content: center;
  height: 100%;
}
.modal-dialog-centered.modal-dialog-scrollable .modal-content {
  max-height: none;
}
.modal-dialog-centered.modal-dialog-scrollable::before {
  content: none;
}
.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop.show {
  opacity: 0.5;
}
.modal-header {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #dee2e6;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}
.modal-header .close {
  padding: 1rem 1rem;
  margin: -1rem -1rem -1rem auto;
}
.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}
.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 1rem;
}
.modal-footer {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: flex-end;
  padding: 0.75rem;
  border-top: 1px solid #dee2e6;
  border-bottom-right-radius: calc(0.3rem - 1px);
  border-bottom-left-radius: calc(0.3rem - 1px);
}
.modal-footer > * {
  margin: 0.25rem;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }
  .modal-dialog-scrollable {
    max-height: calc(100% - 3.5rem);
  }
  .modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 3.5rem);
  }
  .modal-dialog-centered {
    min-height: calc(100% - 3.5rem);
  }
  .modal-dialog-centered::before {
    height: calc(100vh - 3.5rem);
    height: min-content;
  }
  .modal-sm {
    max-width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg, .modal-xl {
    max-width: 800px;
  }
}
@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.8203125rem;
  word-wrap: break-word;
  opacity: 0;
}
.tooltip.show {
  opacity: 0.9;
}
.tooltip .arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}
.tooltip .arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}
.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0;
}
.bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
  bottom: 0;
}
.bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
  top: 0;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}
.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem;
}
.bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}
.bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
  right: 0;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}
.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0;
}
.bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
  top: 0;
}
.bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  bottom: 0;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}
.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem;
}
.bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}
.bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
  left: 0;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}
.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem;
}
.popover {
  position: absolute;
  top: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.8203125rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}
.popover .arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
  margin: 0 0.3rem;
}
.popover .arrow::before, .popover .arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}
.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem;
}
.bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
  bottom: calc(-0.5rem - 1px);
}
.bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
  bottom: 0;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
  bottom: 1px;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: #fff;
}
.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem;
}
.bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
  left: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}
.bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
  left: 0;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
  left: 1px;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: #fff;
}
.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem;
}
.bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
  top: calc(-0.5rem - 1px);
}
.bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
  top: 0;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
  top: 1px;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: #fff;
}
.bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f7f7f7;
}
.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem;
}
.bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
  right: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}
.bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
  right: 0;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
  right: 1px;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: #fff;
}
.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 0.9375rem;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}
@media (max-width: 1200px) {
  .popover-header {
    font-size: calc(0.90375rem + 0.045vw) ;
  }
}
.popover-header:empty {
  display: none;
}
.popover-body {
  padding: 0.5rem 0.75rem;
  color: #1d2125;
}
.carousel {
  position: relative;
}
.carousel.pointer-event {
  touch-action: pan-y;
}
.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}
.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  backface-visibility: hidden;
  transition: transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}
.carousel-item.active, .carousel-item-next, .carousel-item-prev {
  display: block;
}
.carousel-item-next:not(.carousel-item-left), .active.carousel-item-right {
  transform: translateX(100%);
}
.carousel-item-prev:not(.carousel-item-right), .active.carousel-item-left {
  transform: translateX(-100%);
}
.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  transform: none;
}
.carousel-fade .carousel-item.active, .carousel-fade .carousel-item-next.carousel-item-left, .carousel-fade .carousel-item-prev.carousel-item-right {
  z-index: 1;
  opacity: 1;
}
.carousel-fade .active.carousel-item-left, .carousel-fade .active.carousel-item-right {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-left, .carousel-fade .active.carousel-item-right {
    transition: none;
  }
}
.carousel-control-prev, .carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev, .carousel-control-next {
    transition: none;
  }
}
.carousel-control-prev:hover, .carousel-control-prev:focus, .carousel-control-next:hover, .carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}
.carousel-control-prev {
  left: 0;
}
.carousel-control-next {
  right: 0;
}
.carousel-control-prev-icon, .carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: 50% / 100% 100% no-repeat;
}
.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
}
.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
}
.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 15;
  display: flex;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}
.carousel-indicators li {
  box-sizing: content-box;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-indicators li {
    transition: none;
  }
}
.carousel-indicators .active {
  opacity: 1;
}
.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
}
@keyframes spinner-border {
  to {
    transform: rotate(360deg);
  }
}
.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  animation: 0.75s linear infinite spinner-border;
}
.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em;
}
@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}
.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  animation: 0.75s linear infinite spinner-grow;
}
.spinner-grow-sm {
  width: 1rem;
  height: 1rem;
}
@media (prefers-reduced-motion: reduce) {
  .spinner-border, .spinner-grow {
    animation-duration: 1.5s;
  }
}
.align-baseline {
  vertical-align: baseline !important;
}
.align-top, [data-filterregion="value"] div:first-of-type {
  vertical-align: top !important;
}
.align-middle, .reportbuilder-table td {
  vertical-align: middle !important;
}
.align-bottom {
  vertical-align: bottom !important;
}
.align-text-bottom {
  vertical-align: text-bottom !important;
}
.align-text-top {
  vertical-align: text-top !important;
}
.bg-primary {
  background-color: #0f6cbf !important;
}
a.bg-primary:hover, a.bg-primary:focus, button.bg-primary:hover, button.bg-primary:focus {
  background-color: #0b5190 !important;
}
.bg-secondary {
  background-color: #ced4da !important;
}
a.bg-secondary:hover, a.bg-secondary:focus, button.bg-secondary:hover, button.bg-secondary:focus {
  background-color: #b1bbc4 !important;
}
.bg-success {
  background-color: #357a32 !important;
}
a.bg-success:hover, a.bg-success:focus, button.bg-success:hover, button.bg-success:focus {
  background-color: #255623 !important;
}
.bg-info {
  background-color: #008196 !important;
}
a.bg-info:hover, a.bg-info:focus, button.bg-info:hover, button.bg-info:focus {
  background-color: #005563 !important;
}
.bg-warning {
  background-color: #f0ad4e !important;
}
a.bg-warning:hover, a.bg-warning:focus, button.bg-warning:hover, button.bg-warning:focus {
  background-color: #ec971f !important;
}
.bg-danger {
  background-color: #ca3120 !important;
}
a.bg-danger:hover, a.bg-danger:focus, button.bg-danger:hover, button.bg-danger:focus {
  background-color: #9e2619 !important;
}
.bg-light {
  background-color: #f8f9fa !important;
}
a.bg-light:hover, a.bg-light:focus, button.bg-light:hover, button.bg-light:focus {
  background-color: #dae0e5 !important;
}
.bg-dark {
  background-color: #343a40 !important;
}
a.bg-dark:hover, a.bg-dark:focus, button.bg-dark:hover, button.bg-dark:focus {
  background-color: #1d2124 !important;
}
.bg-white {
  background-color: #fff !important;
}
.bg-transparent {
  background-color: transparent !important;
}
.border {
  border: 1px solid #dee2e6 !important;
}
.border-top {
  border-top: 1px solid #dee2e6 !important;
}
.border-right {
  border-right: 1px solid #dee2e6 !important;
}
.border-bottom {
  border-bottom: 1px solid #dee2e6 !important;
}
.border-left {
  border-left: 1px solid #dee2e6 !important;
}
.border-0 {
  border: 0 !important;
}
.border-top-0 {
  border-top: 0 !important;
}
.border-right-0 {
  border-right: 0 !important;
}
.border-bottom-0 {
  border-bottom: 0 !important;
}
.border-left-0 {
  border-left: 0 !important;
}
.border-primary {
  border-color: #0f6cbf !important;
}
.border-secondary {
  border-color: #ced4da !important;
}
.border-success {
  border-color: #357a32 !important;
}
.border-info {
  border-color: #008196 !important;
}
.border-warning {
  border-color: #f0ad4e !important;
}
.border-danger {
  border-color: #ca3120 !important;
}
.border-light {
  border-color: #f8f9fa !important;
}
.border-dark {
  border-color: #343a40 !important;
}
.border-white {
  border-color: #fff !important;
}
.rounded-sm {
  border-radius: 0.2rem !important;
}
.rounded {
  border-radius: 0.25rem !important;
}
.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important;
}
.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important;
}
.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}
.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}
.rounded-lg {
  border-radius: 0.3rem !important;
}
.rounded-circle {
  border-radius: 50% !important;
}
.rounded-pill {
  border-radius: 50rem !important;
}
.rounded-0 {
  border-radius: 0 !important;
}
.clearfix::after {
  display: block;
  clear: both;
  content: "";
}
.d-none {
  display: none !important;
}
.d-inline {
  display: inline !important;
}
.d-inline-block {
  display: inline-block !important;
}
.d-block {
  display: block !important;
}
.d-table {
  display: table !important;
}
.d-table-row {
  display: table-row !important;
}
.d-table-cell {
  display: table-cell !important;
}
.d-flex {
  display: flex !important;
}
.d-inline-flex {
  display: inline-flex !important;
}
@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: inline-flex !important;
  }
}
@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
}
@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
}
@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: inline-flex !important;
  }
}
@media print {
  .d-print-none {
    display: none !important;
  }
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: flex !important;
  }
  .d-print-inline-flex {
    display: inline-flex !important;
  }
}
.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden;
}
.embed-responsive::before {
  display: block;
  content: "";
}
.embed-responsive .embed-responsive-item, .embed-responsive iframe, .embed-responsive embed, .embed-responsive object, .embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
.embed-responsive-21by9::before {
  padding-top: 42.8571428571%;
}
.embed-responsive-16by9::before {
  padding-top: 56.25%;
}
.embed-responsive-4by3::before {
  padding-top: 75%;
}
.embed-responsive-1by1::before {
  padding-top: 100%;
}
.flex-row {
  flex-direction: row !important;
}
.flex-column {
  flex-direction: column !important;
}
.flex-row-reverse {
  flex-direction: row-reverse !important;
}
.flex-column-reverse {
  flex-direction: column-reverse !important;
}
.flex-wrap {
  flex-wrap: wrap !important;
}
.flex-nowrap {
  flex-wrap: nowrap !important;
}
.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}
.flex-fill, .reportbuilder-report-container {
  flex: 1 1 auto !important;
}
.flex-grow-0 {
  flex-grow: 0 !important;
}
.flex-grow-1 {
  flex-grow: 1 !important;
}
.flex-shrink-0 {
  flex-shrink: 0 !important;
}
.flex-shrink-1 {
  flex-shrink: 1 !important;
}
.justify-content-start {
  justify-content: flex-start !important;
}
.justify-content-end {
  justify-content: flex-end !important;
}
.justify-content-center {
  justify-content: center !important;
}
.justify-content-between {
  justify-content: space-between !important;
}
.justify-content-around {
  justify-content: space-around !important;
}
.align-items-start {
  align-items: flex-start !important;
}
.align-items-end {
  align-items: flex-end !important;
}
.align-items-center {
  align-items: center !important;
}
.align-items-baseline {
  align-items: baseline !important;
}
.align-items-stretch {
  align-items: stretch !important;
}
.align-content-start {
  align-content: flex-start !important;
}
.align-content-end {
  align-content: flex-end !important;
}
.align-content-center {
  align-content: center !important;
}
.align-content-between {
  align-content: space-between !important;
}
.align-content-around {
  align-content: space-around !important;
}
.align-content-stretch {
  align-content: stretch !important;
}
.align-self-auto {
  align-self: auto !important;
}
.align-self-start {
  align-self: flex-start !important;
}
.align-self-end {
  align-self: flex-end !important;
}
.align-self-center {
  align-self: center !important;
}
.align-self-baseline {
  align-self: baseline !important;
}
.align-self-stretch {
  align-self: stretch !important;
}
@media (min-width: 576px) {
  .flex-sm-row {
    flex-direction: row !important;
  }
  .flex-sm-column {
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-sm-fill {
    flex: 1 1 auto !important;
  }
  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-sm-start {
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    justify-content: center !important;
  }
  .justify-content-sm-between {
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    justify-content: space-around !important;
  }
  .align-items-sm-start {
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    align-items: center !important;
  }
  .align-items-sm-baseline {
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    align-items: stretch !important;
  }
  .align-content-sm-start {
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    align-content: center !important;
  }
  .align-content-sm-between {
    align-content: space-between !important;
  }
  .align-content-sm-around {
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    align-self: auto !important;
  }
  .align-self-sm-start {
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    align-self: center !important;
  }
  .align-self-sm-baseline {
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    align-self: stretch !important;
  }
}
@media (min-width: 768px) {
  .flex-md-row {
    flex-direction: row !important;
  }
  .flex-md-column {
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-md-wrap {
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-md-fill {
    flex: 1 1 auto !important;
  }
  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-md-start {
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    justify-content: center !important;
  }
  .justify-content-md-between {
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    justify-content: space-around !important;
  }
  .align-items-md-start {
    align-items: flex-start !important;
  }
  .align-items-md-end {
    align-items: flex-end !important;
  }
  .align-items-md-center {
    align-items: center !important;
  }
  .align-items-md-baseline {
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    align-items: stretch !important;
  }
  .align-content-md-start {
    align-content: flex-start !important;
  }
  .align-content-md-end {
    align-content: flex-end !important;
  }
  .align-content-md-center {
    align-content: center !important;
  }
  .align-content-md-between {
    align-content: space-between !important;
  }
  .align-content-md-around {
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    align-content: stretch !important;
  }
  .align-self-md-auto {
    align-self: auto !important;
  }
  .align-self-md-start {
    align-self: flex-start !important;
  }
  .align-self-md-end {
    align-self: flex-end !important;
  }
  .align-self-md-center {
    align-self: center !important;
  }
  .align-self-md-baseline {
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    align-self: stretch !important;
  }
}
@media (min-width: 992px) {
  .flex-lg-row {
    flex-direction: row !important;
  }
  .flex-lg-column {
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-lg-fill {
    flex: 1 1 auto !important;
  }
  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-lg-start {
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    justify-content: center !important;
  }
  .justify-content-lg-between {
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    justify-content: space-around !important;
  }
  .align-items-lg-start {
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    align-items: center !important;
  }
  .align-items-lg-baseline {
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    align-items: stretch !important;
  }
  .align-content-lg-start {
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    align-content: center !important;
  }
  .align-content-lg-between {
    align-content: space-between !important;
  }
  .align-content-lg-around {
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    align-self: auto !important;
  }
  .align-self-lg-start {
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    align-self: center !important;
  }
  .align-self-lg-baseline {
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    align-self: stretch !important;
  }
}
@media (min-width: 1200px) {
  .flex-xl-row {
    flex-direction: row !important;
  }
  .flex-xl-column {
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-xl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-xl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    justify-content: center !important;
  }
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    justify-content: space-around !important;
  }
  .align-items-xl-start {
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    align-items: center !important;
  }
  .align-items-xl-baseline {
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    align-items: stretch !important;
  }
  .align-content-xl-start {
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    align-content: center !important;
  }
  .align-content-xl-between {
    align-content: space-between !important;
  }
  .align-content-xl-around {
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    align-self: auto !important;
  }
  .align-self-xl-start {
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    align-self: center !important;
  }
  .align-self-xl-baseline {
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    align-self: stretch !important;
  }
}
.float-left {
  float: left !important;
}
.float-right {
  float: right !important;
}
.float-none {
  float: none !important;
}
@media (min-width: 576px) {
  .float-sm-left {
    float: left !important;
  }
  .float-sm-right {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
}
@media (min-width: 768px) {
  .float-md-left {
    float: left !important;
  }
  .float-md-right {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
}
@media (min-width: 992px) {
  .float-lg-left {
    float: left !important;
  }
  .float-lg-right {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
}
@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important;
  }
  .float-xl-right {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
}
.user-select-all {
  user-select: all !important;
}
.user-select-auto {
  user-select: auto !important;
}
.user-select-none {
  user-select: none !important;
}
.overflow-auto {
  overflow: auto !important;
}
.overflow-hidden {
  overflow: hidden !important;
}
.position-static {
  position: static !important;
}
.position-relative {
  position: relative !important;
}
.position-absolute {
  position: absolute !important;
}
.position-fixed {
  position: fixed !important;
}
.position-sticky {
  position: sticky !important;
}
.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}
.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}
@supports (position: sticky) {
  .sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}
.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
}
.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}
.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}
.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}
.shadow-none {
  box-shadow: none !important;
}
.w-25 {
  width: 25% !important;
}
.w-50 {
  width: 50% !important;
}
.w-75 {
  width: 75% !important;
}
.w-100 {
  width: 100% !important;
}
.w-auto {
  width: auto !important;
}
.h-25 {
  height: 25% !important;
}
.h-50 {
  height: 50% !important;
}
.h-75 {
  height: 75% !important;
}
.h-100 {
  height: 100% !important;
}
.h-auto {
  height: auto !important;
}
.mw-100 {
  max-width: 100% !important;
}
.mh-100 {
  max-height: 100% !important;
}
.min-vw-100 {
  min-width: 100vw !important;
}
.min-vh-100 {
  min-height: 100vh !important;
}
.vw-100 {
  width: 100vw !important;
}
.vh-100 {
  height: 100vh !important;
}
.m-0 {
  margin: 0 !important;
}
.mt-0, .my-0 {
  margin-top: 0 !important;
}
.mr-0, .mx-0 {
  margin-right: 0 !important;
}
.mb-0, .my-0 {
  margin-bottom: 0 !important;
}
.ml-0, .mx-0 {
  margin-left: 0 !important;
}
.m-1 {
  margin: 0.25rem !important;
}
.mt-1, .my-1 {
  margin-top: 0.25rem !important;
}
.mr-1, .mx-1 {
  margin-right: 0.25rem !important;
}
.mb-1, .my-1 {
  margin-bottom: 0.25rem !important;
}
.ml-1, .mx-1 {
  margin-left: 0.25rem !important;
}
.m-2 {
  margin: 0.5rem !important;
}
.mt-2, .my-2 {
  margin-top: 0.5rem !important;
}
.mr-2, .mx-2 {
  margin-right: 0.5rem !important;
}
.mb-2, .my-2 {
  margin-bottom: 0.5rem !important;
}
.ml-2, .mx-2 {
  margin-left: 0.5rem !important;
}
.m-3 {
  margin: 1rem !important;
}
.mt-3, .my-3 {
  margin-top: 1rem !important;
}
.mr-3, .mx-3 {
  margin-right: 1rem !important;
}
.mb-3, .my-3 {
  margin-bottom: 1rem !important;
}
.ml-3, .mx-3 {
  margin-left: 1rem !important;
}
.m-4 {
  margin: 1.5rem !important;
}
.mt-4, .my-4 {
  margin-top: 1.5rem !important;
}
.mr-4, .mx-4 {
  margin-right: 1.5rem !important;
}
.mb-4, .my-4 {
  margin-bottom: 1.5rem !important;
}
.ml-4, .mx-4 {
  margin-left: 1.5rem !important;
}
.m-5 {
  margin: 2rem !important;
}
.mt-5, .my-5 {
  margin-top: 2rem !important;
}
.mr-5, .mx-5 {
  margin-right: 2rem !important;
}
.mb-5, .my-5 {
  margin-bottom: 2rem !important;
}
.ml-5, .mx-5 {
  margin-left: 2rem !important;
}
.m-6 {
  margin: 3rem !important;
}
.mt-6, .my-6 {
  margin-top: 3rem !important;
}
.mr-6, .mx-6 {
  margin-right: 3rem !important;
}
.mb-6, .my-6 {
  margin-bottom: 3rem !important;
}
.ml-6, .mx-6 {
  margin-left: 3rem !important;
}
.p-0 {
  padding: 0 !important;
}
.pt-0, .py-0 {
  padding-top: 0 !important;
}
.pr-0, .px-0 {
  padding-right: 0 !important;
}
.pb-0, .py-0 {
  padding-bottom: 0 !important;
}
.pl-0, .px-0 {
  padding-left: 0 !important;
}
.p-1 {
  padding: 0.25rem !important;
}
.pt-1, .py-1 {
  padding-top: 0.25rem !important;
}
.pr-1, .px-1 {
  padding-right: 0.25rem !important;
}
.pb-1, .py-1 {
  padding-bottom: 0.25rem !important;
}
.pl-1, .px-1 {
  padding-left: 0.25rem !important;
}
.p-2 {
  padding: 0.5rem !important;
}
.pt-2, .py-2 {
  padding-top: 0.5rem !important;
}
.pr-2, .px-2 {
  padding-right: 0.5rem !important;
}
.pb-2, .py-2 {
  padding-bottom: 0.5rem !important;
}
.pl-2, .px-2 {
  padding-left: 0.5rem !important;
}
.p-3 {
  padding: 1rem !important;
}
.pt-3, .py-3 {
  padding-top: 1rem !important;
}
.pr-3, .px-3 {
  padding-right: 1rem !important;
}
.pb-3, .py-3 {
  padding-bottom: 1rem !important;
}
.pl-3, .px-3 {
  padding-left: 1rem !important;
}
.p-4 {
  padding: 1.5rem !important;
}
.pt-4, .py-4 {
  padding-top: 1.5rem !important;
}
.pr-4, .px-4 {
  padding-right: 1.5rem !important;
}
.pb-4, .py-4 {
  padding-bottom: 1.5rem !important;
}
.pl-4, .px-4 {
  padding-left: 1.5rem !important;
}
.p-5 {
  padding: 2rem !important;
}
.pt-5, .py-5 {
  padding-top: 2rem !important;
}
.pr-5, .px-5 {
  padding-right: 2rem !important;
}
.pb-5, .py-5 {
  padding-bottom: 2rem !important;
}
.pl-5, .px-5 {
  padding-left: 2rem !important;
}
.p-6 {
  padding: 3rem !important;
}
.pt-6, .py-6 {
  padding-top: 3rem !important;
}
.pr-6, .px-6 {
  padding-right: 3rem !important;
}
.pb-6, .py-6 {
  padding-bottom: 3rem !important;
}
.pl-6, .px-6 {
  padding-left: 3rem !important;
}
.m-n1 {
  margin: -0.25rem !important;
}
.mt-n1, .my-n1 {
  margin-top: -0.25rem !important;
}
.mr-n1, .mx-n1 {
  margin-right: -0.25rem !important;
}
.mb-n1, .my-n1 {
  margin-bottom: -0.25rem !important;
}
.ml-n1, .mx-n1 {
  margin-left: -0.25rem !important;
}
.m-n2 {
  margin: -0.5rem !important;
}
.mt-n2, .my-n2 {
  margin-top: -0.5rem !important;
}
.mr-n2, .mx-n2 {
  margin-right: -0.5rem !important;
}
.mb-n2, .my-n2 {
  margin-bottom: -0.5rem !important;
}
.ml-n2, .mx-n2 {
  margin-left: -0.5rem !important;
}
.m-n3 {
  margin: -1rem !important;
}
.mt-n3, .my-n3 {
  margin-top: -1rem !important;
}
.mr-n3, .mx-n3 {
  margin-right: -1rem !important;
}
.mb-n3, .my-n3 {
  margin-bottom: -1rem !important;
}
.ml-n3, .mx-n3 {
  margin-left: -1rem !important;
}
.m-n4 {
  margin: -1.5rem !important;
}
.mt-n4, .my-n4 {
  margin-top: -1.5rem !important;
}
.mr-n4, .mx-n4 {
  margin-right: -1.5rem !important;
}
.mb-n4, .my-n4 {
  margin-bottom: -1.5rem !important;
}
.ml-n4, .mx-n4 {
  margin-left: -1.5rem !important;
}
.m-n5 {
  margin: -2rem !important;
}
.mt-n5, .my-n5 {
  margin-top: -2rem !important;
}
.mr-n5, .mx-n5 {
  margin-right: -2rem !important;
}
.mb-n5, .my-n5 {
  margin-bottom: -2rem !important;
}
.ml-n5, .mx-n5 {
  margin-left: -2rem !important;
}
.m-n6 {
  margin: -3rem !important;
}
.mt-n6, .my-n6 {
  margin-top: -3rem !important;
}
.mr-n6, .mx-n6 {
  margin-right: -3rem !important;
}
.mb-n6, .my-n6 {
  margin-bottom: -3rem !important;
}
.ml-n6, .mx-n6 {
  margin-left: -3rem !important;
}
.m-auto {
  margin: auto !important;
}
.mt-auto, .my-auto {
  margin-top: auto !important;
}
.mr-auto, .mx-auto {
  margin-right: auto !important;
}
.mb-auto, .my-auto {
  margin-bottom: auto !important;
}
.ml-auto, .mx-auto {
  margin-left: auto !important;
}
@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important;
  }
  .mt-sm-0, .my-sm-0 {
    margin-top: 0 !important;
  }
  .mr-sm-0, .mx-sm-0 {
    margin-right: 0 !important;
  }
  .mb-sm-0, .my-sm-0 {
    margin-bottom: 0 !important;
  }
  .ml-sm-0, .mx-sm-0 {
    margin-left: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .mt-sm-1, .my-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mr-sm-1, .mx-sm-1 {
    margin-right: 0.25rem !important;
  }
  .mb-sm-1, .my-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-sm-1, .mx-sm-1 {
    margin-left: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .mt-sm-2, .my-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mr-sm-2, .mx-sm-2 {
    margin-right: 0.5rem !important;
  }
  .mb-sm-2, .my-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-sm-2, .mx-sm-2 {
    margin-left: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .mt-sm-3, .my-sm-3 {
    margin-top: 1rem !important;
  }
  .mr-sm-3, .mx-sm-3 {
    margin-right: 1rem !important;
  }
  .mb-sm-3, .my-sm-3 {
    margin-bottom: 1rem !important;
  }
  .ml-sm-3, .mx-sm-3 {
    margin-left: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .mt-sm-4, .my-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mr-sm-4, .mx-sm-4 {
    margin-right: 1.5rem !important;
  }
  .mb-sm-4, .my-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-sm-4, .mx-sm-4 {
    margin-left: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 2rem !important;
  }
  .mt-sm-5, .my-sm-5 {
    margin-top: 2rem !important;
  }
  .mr-sm-5, .mx-sm-5 {
    margin-right: 2rem !important;
  }
  .mb-sm-5, .my-sm-5 {
    margin-bottom: 2rem !important;
  }
  .ml-sm-5, .mx-sm-5 {
    margin-left: 2rem !important;
  }
  .m-sm-6 {
    margin: 3rem !important;
  }
  .mt-sm-6, .my-sm-6 {
    margin-top: 3rem !important;
  }
  .mr-sm-6, .mx-sm-6 {
    margin-right: 3rem !important;
  }
  .mb-sm-6, .my-sm-6 {
    margin-bottom: 3rem !important;
  }
  .ml-sm-6, .mx-sm-6 {
    margin-left: 3rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .pt-sm-0, .py-sm-0 {
    padding-top: 0 !important;
  }
  .pr-sm-0, .px-sm-0 {
    padding-right: 0 !important;
  }
  .pb-sm-0, .py-sm-0 {
    padding-bottom: 0 !important;
  }
  .pl-sm-0, .px-sm-0 {
    padding-left: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .pt-sm-1, .py-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pr-sm-1, .px-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pb-sm-1, .py-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-sm-1, .px-sm-1 {
    padding-left: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .pt-sm-2, .py-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pr-sm-2, .px-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pb-sm-2, .py-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-sm-2, .px-sm-2 {
    padding-left: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .pt-sm-3, .py-sm-3 {
    padding-top: 1rem !important;
  }
  .pr-sm-3, .px-sm-3 {
    padding-right: 1rem !important;
  }
  .pb-sm-3, .py-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pl-sm-3, .px-sm-3 {
    padding-left: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .pt-sm-4, .py-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pr-sm-4, .px-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pb-sm-4, .py-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-sm-4, .px-sm-4 {
    padding-left: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 2rem !important;
  }
  .pt-sm-5, .py-sm-5 {
    padding-top: 2rem !important;
  }
  .pr-sm-5, .px-sm-5 {
    padding-right: 2rem !important;
  }
  .pb-sm-5, .py-sm-5 {
    padding-bottom: 2rem !important;
  }
  .pl-sm-5, .px-sm-5 {
    padding-left: 2rem !important;
  }
  .p-sm-6 {
    padding: 3rem !important;
  }
  .pt-sm-6, .py-sm-6 {
    padding-top: 3rem !important;
  }
  .pr-sm-6, .px-sm-6 {
    padding-right: 3rem !important;
  }
  .pb-sm-6, .py-sm-6 {
    padding-bottom: 3rem !important;
  }
  .pl-sm-6, .px-sm-6 {
    padding-left: 3rem !important;
  }
  .m-sm-n1 {
    margin: -0.25rem !important;
  }
  .mt-sm-n1, .my-sm-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-sm-n1, .mx-sm-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-sm-n1, .my-sm-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-sm-n1, .mx-sm-n1 {
    margin-left: -0.25rem !important;
  }
  .m-sm-n2 {
    margin: -0.5rem !important;
  }
  .mt-sm-n2, .my-sm-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-sm-n2, .mx-sm-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-sm-n2, .my-sm-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-sm-n2, .mx-sm-n2 {
    margin-left: -0.5rem !important;
  }
  .m-sm-n3 {
    margin: -1rem !important;
  }
  .mt-sm-n3, .my-sm-n3 {
    margin-top: -1rem !important;
  }
  .mr-sm-n3, .mx-sm-n3 {
    margin-right: -1rem !important;
  }
  .mb-sm-n3, .my-sm-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-sm-n3, .mx-sm-n3 {
    margin-left: -1rem !important;
  }
  .m-sm-n4 {
    margin: -1.5rem !important;
  }
  .mt-sm-n4, .my-sm-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-sm-n4, .mx-sm-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-sm-n4, .my-sm-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-sm-n4, .mx-sm-n4 {
    margin-left: -1.5rem !important;
  }
  .m-sm-n5 {
    margin: -2rem !important;
  }
  .mt-sm-n5, .my-sm-n5 {
    margin-top: -2rem !important;
  }
  .mr-sm-n5, .mx-sm-n5 {
    margin-right: -2rem !important;
  }
  .mb-sm-n5, .my-sm-n5 {
    margin-bottom: -2rem !important;
  }
  .ml-sm-n5, .mx-sm-n5 {
    margin-left: -2rem !important;
  }
  .m-sm-n6 {
    margin: -3rem !important;
  }
  .mt-sm-n6, .my-sm-n6 {
    margin-top: -3rem !important;
  }
  .mr-sm-n6, .mx-sm-n6 {
    margin-right: -3rem !important;
  }
  .mb-sm-n6, .my-sm-n6 {
    margin-bottom: -3rem !important;
  }
  .ml-sm-n6, .mx-sm-n6 {
    margin-left: -3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mt-sm-auto, .my-sm-auto {
    margin-top: auto !important;
  }
  .mr-sm-auto, .mx-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-auto, .my-sm-auto {
    margin-bottom: auto !important;
  }
  .ml-sm-auto, .mx-sm-auto {
    margin-left: auto !important;
  }
}
@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important;
  }
  .mt-md-0, .my-md-0 {
    margin-top: 0 !important;
  }
  .mr-md-0, .mx-md-0 {
    margin-right: 0 !important;
  }
  .mb-md-0, .my-md-0 {
    margin-bottom: 0 !important;
  }
  .ml-md-0, .mx-md-0 {
    margin-left: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .mt-md-1, .my-md-1 {
    margin-top: 0.25rem !important;
  }
  .mr-md-1, .mx-md-1 {
    margin-right: 0.25rem !important;
  }
  .mb-md-1, .my-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-md-1, .mx-md-1 {
    margin-left: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .mt-md-2, .my-md-2 {
    margin-top: 0.5rem !important;
  }
  .mr-md-2, .mx-md-2 {
    margin-right: 0.5rem !important;
  }
  .mb-md-2, .my-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-md-2, .mx-md-2 {
    margin-left: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .mt-md-3, .my-md-3 {
    margin-top: 1rem !important;
  }
  .mr-md-3, .mx-md-3 {
    margin-right: 1rem !important;
  }
  .mb-md-3, .my-md-3 {
    margin-bottom: 1rem !important;
  }
  .ml-md-3, .mx-md-3 {
    margin-left: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .mt-md-4, .my-md-4 {
    margin-top: 1.5rem !important;
  }
  .mr-md-4, .mx-md-4 {
    margin-right: 1.5rem !important;
  }
  .mb-md-4, .my-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-md-4, .mx-md-4 {
    margin-left: 1.5rem !important;
  }
  .m-md-5 {
    margin: 2rem !important;
  }
  .mt-md-5, .my-md-5 {
    margin-top: 2rem !important;
  }
  .mr-md-5, .mx-md-5 {
    margin-right: 2rem !important;
  }
  .mb-md-5, .my-md-5 {
    margin-bottom: 2rem !important;
  }
  .ml-md-5, .mx-md-5 {
    margin-left: 2rem !important;
  }
  .m-md-6 {
    margin: 3rem !important;
  }
  .mt-md-6, .my-md-6 {
    margin-top: 3rem !important;
  }
  .mr-md-6, .mx-md-6 {
    margin-right: 3rem !important;
  }
  .mb-md-6, .my-md-6 {
    margin-bottom: 3rem !important;
  }
  .ml-md-6, .mx-md-6 {
    margin-left: 3rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .pt-md-0, .py-md-0 {
    padding-top: 0 !important;
  }
  .pr-md-0, .px-md-0 {
    padding-right: 0 !important;
  }
  .pb-md-0, .py-md-0 {
    padding-bottom: 0 !important;
  }
  .pl-md-0, .px-md-0 {
    padding-left: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .pt-md-1, .py-md-1 {
    padding-top: 0.25rem !important;
  }
  .pr-md-1, .px-md-1 {
    padding-right: 0.25rem !important;
  }
  .pb-md-1, .py-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-md-1, .px-md-1 {
    padding-left: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .pt-md-2, .py-md-2 {
    padding-top: 0.5rem !important;
  }
  .pr-md-2, .px-md-2 {
    padding-right: 0.5rem !important;
  }
  .pb-md-2, .py-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-md-2, .px-md-2 {
    padding-left: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .pt-md-3, .py-md-3 {
    padding-top: 1rem !important;
  }
  .pr-md-3, .px-md-3 {
    padding-right: 1rem !important;
  }
  .pb-md-3, .py-md-3 {
    padding-bottom: 1rem !important;
  }
  .pl-md-3, .px-md-3 {
    padding-left: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .pt-md-4, .py-md-4 {
    padding-top: 1.5rem !important;
  }
  .pr-md-4, .px-md-4 {
    padding-right: 1.5rem !important;
  }
  .pb-md-4, .py-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-md-4, .px-md-4 {
    padding-left: 1.5rem !important;
  }
  .p-md-5 {
    padding: 2rem !important;
  }
  .pt-md-5, .py-md-5 {
    padding-top: 2rem !important;
  }
  .pr-md-5, .px-md-5 {
    padding-right: 2rem !important;
  }
  .pb-md-5, .py-md-5 {
    padding-bottom: 2rem !important;
  }
  .pl-md-5, .px-md-5 {
    padding-left: 2rem !important;
  }
  .p-md-6 {
    padding: 3rem !important;
  }
  .pt-md-6, .py-md-6 {
    padding-top: 3rem !important;
  }
  .pr-md-6, .px-md-6 {
    padding-right: 3rem !important;
  }
  .pb-md-6, .py-md-6 {
    padding-bottom: 3rem !important;
  }
  .pl-md-6, .px-md-6 {
    padding-left: 3rem !important;
  }
  .m-md-n1 {
    margin: -0.25rem !important;
  }
  .mt-md-n1, .my-md-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-md-n1, .mx-md-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-md-n1, .my-md-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-md-n1, .mx-md-n1 {
    margin-left: -0.25rem !important;
  }
  .m-md-n2 {
    margin: -0.5rem !important;
  }
  .mt-md-n2, .my-md-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-md-n2, .mx-md-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-md-n2, .my-md-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-md-n2, .mx-md-n2 {
    margin-left: -0.5rem !important;
  }
  .m-md-n3 {
    margin: -1rem !important;
  }
  .mt-md-n3, .my-md-n3 {
    margin-top: -1rem !important;
  }
  .mr-md-n3, .mx-md-n3 {
    margin-right: -1rem !important;
  }
  .mb-md-n3, .my-md-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-md-n3, .mx-md-n3 {
    margin-left: -1rem !important;
  }
  .m-md-n4 {
    margin: -1.5rem !important;
  }
  .mt-md-n4, .my-md-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-md-n4, .mx-md-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-md-n4, .my-md-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-md-n4, .mx-md-n4 {
    margin-left: -1.5rem !important;
  }
  .m-md-n5 {
    margin: -2rem !important;
  }
  .mt-md-n5, .my-md-n5 {
    margin-top: -2rem !important;
  }
  .mr-md-n5, .mx-md-n5 {
    margin-right: -2rem !important;
  }
  .mb-md-n5, .my-md-n5 {
    margin-bottom: -2rem !important;
  }
  .ml-md-n5, .mx-md-n5 {
    margin-left: -2rem !important;
  }
  .m-md-n6 {
    margin: -3rem !important;
  }
  .mt-md-n6, .my-md-n6 {
    margin-top: -3rem !important;
  }
  .mr-md-n6, .mx-md-n6 {
    margin-right: -3rem !important;
  }
  .mb-md-n6, .my-md-n6 {
    margin-bottom: -3rem !important;
  }
  .ml-md-n6, .mx-md-n6 {
    margin-left: -3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mt-md-auto, .my-md-auto {
    margin-top: auto !important;
  }
  .mr-md-auto, .mx-md-auto {
    margin-right: auto !important;
  }
  .mb-md-auto, .my-md-auto {
    margin-bottom: auto !important;
  }
  .ml-md-auto, .mx-md-auto {
    margin-left: auto !important;
  }
}
@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important;
  }
  .mt-lg-0, .my-lg-0 {
    margin-top: 0 !important;
  }
  .mr-lg-0, .mx-lg-0 {
    margin-right: 0 !important;
  }
  .mb-lg-0, .my-lg-0 {
    margin-bottom: 0 !important;
  }
  .ml-lg-0, .mx-lg-0 {
    margin-left: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .mt-lg-1, .my-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mr-lg-1, .mx-lg-1 {
    margin-right: 0.25rem !important;
  }
  .mb-lg-1, .my-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-lg-1, .mx-lg-1 {
    margin-left: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .mt-lg-2, .my-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mr-lg-2, .mx-lg-2 {
    margin-right: 0.5rem !important;
  }
  .mb-lg-2, .my-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-lg-2, .mx-lg-2 {
    margin-left: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .mt-lg-3, .my-lg-3 {
    margin-top: 1rem !important;
  }
  .mr-lg-3, .mx-lg-3 {
    margin-right: 1rem !important;
  }
  .mb-lg-3, .my-lg-3 {
    margin-bottom: 1rem !important;
  }
  .ml-lg-3, .mx-lg-3 {
    margin-left: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .mt-lg-4, .my-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mr-lg-4, .mx-lg-4 {
    margin-right: 1.5rem !important;
  }
  .mb-lg-4, .my-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-lg-4, .mx-lg-4 {
    margin-left: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 2rem !important;
  }
  .mt-lg-5, .my-lg-5 {
    margin-top: 2rem !important;
  }
  .mr-lg-5, .mx-lg-5 {
    margin-right: 2rem !important;
  }
  .mb-lg-5, .my-lg-5 {
    margin-bottom: 2rem !important;
  }
  .ml-lg-5, .mx-lg-5 {
    margin-left: 2rem !important;
  }
  .m-lg-6 {
    margin: 3rem !important;
  }
  .mt-lg-6, .my-lg-6 {
    margin-top: 3rem !important;
  }
  .mr-lg-6, .mx-lg-6 {
    margin-right: 3rem !important;
  }
  .mb-lg-6, .my-lg-6 {
    margin-bottom: 3rem !important;
  }
  .ml-lg-6, .mx-lg-6 {
    margin-left: 3rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .pt-lg-0, .py-lg-0 {
    padding-top: 0 !important;
  }
  .pr-lg-0, .px-lg-0 {
    padding-right: 0 !important;
  }
  .pb-lg-0, .py-lg-0 {
    padding-bottom: 0 !important;
  }
  .pl-lg-0, .px-lg-0 {
    padding-left: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .pt-lg-1, .py-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pr-lg-1, .px-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pb-lg-1, .py-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-lg-1, .px-lg-1 {
    padding-left: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .pt-lg-2, .py-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pr-lg-2, .px-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pb-lg-2, .py-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-lg-2, .px-lg-2 {
    padding-left: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .pt-lg-3, .py-lg-3 {
    padding-top: 1rem !important;
  }
  .pr-lg-3, .px-lg-3 {
    padding-right: 1rem !important;
  }
  .pb-lg-3, .py-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pl-lg-3, .px-lg-3 {
    padding-left: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .pt-lg-4, .py-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pr-lg-4, .px-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pb-lg-4, .py-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-lg-4, .px-lg-4 {
    padding-left: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 2rem !important;
  }
  .pt-lg-5, .py-lg-5 {
    padding-top: 2rem !important;
  }
  .pr-lg-5, .px-lg-5 {
    padding-right: 2rem !important;
  }
  .pb-lg-5, .py-lg-5 {
    padding-bottom: 2rem !important;
  }
  .pl-lg-5, .px-lg-5 {
    padding-left: 2rem !important;
  }
  .p-lg-6 {
    padding: 3rem !important;
  }
  .pt-lg-6, .py-lg-6 {
    padding-top: 3rem !important;
  }
  .pr-lg-6, .px-lg-6 {
    padding-right: 3rem !important;
  }
  .pb-lg-6, .py-lg-6 {
    padding-bottom: 3rem !important;
  }
  .pl-lg-6, .px-lg-6 {
    padding-left: 3rem !important;
  }
  .m-lg-n1 {
    margin: -0.25rem !important;
  }
  .mt-lg-n1, .my-lg-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-lg-n1, .mx-lg-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-lg-n1, .my-lg-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-lg-n1, .mx-lg-n1 {
    margin-left: -0.25rem !important;
  }
  .m-lg-n2 {
    margin: -0.5rem !important;
  }
  .mt-lg-n2, .my-lg-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-lg-n2, .mx-lg-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-lg-n2, .my-lg-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-lg-n2, .mx-lg-n2 {
    margin-left: -0.5rem !important;
  }
  .m-lg-n3 {
    margin: -1rem !important;
  }
  .mt-lg-n3, .my-lg-n3 {
    margin-top: -1rem !important;
  }
  .mr-lg-n3, .mx-lg-n3 {
    margin-right: -1rem !important;
  }
  .mb-lg-n3, .my-lg-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-lg-n3, .mx-lg-n3 {
    margin-left: -1rem !important;
  }
  .m-lg-n4 {
    margin: -1.5rem !important;
  }
  .mt-lg-n4, .my-lg-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-lg-n4, .mx-lg-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-lg-n4, .my-lg-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-lg-n4, .mx-lg-n4 {
    margin-left: -1.5rem !important;
  }
  .m-lg-n5 {
    margin: -2rem !important;
  }
  .mt-lg-n5, .my-lg-n5 {
    margin-top: -2rem !important;
  }
  .mr-lg-n5, .mx-lg-n5 {
    margin-right: -2rem !important;
  }
  .mb-lg-n5, .my-lg-n5 {
    margin-bottom: -2rem !important;
  }
  .ml-lg-n5, .mx-lg-n5 {
    margin-left: -2rem !important;
  }
  .m-lg-n6 {
    margin: -3rem !important;
  }
  .mt-lg-n6, .my-lg-n6 {
    margin-top: -3rem !important;
  }
  .mr-lg-n6, .mx-lg-n6 {
    margin-right: -3rem !important;
  }
  .mb-lg-n6, .my-lg-n6 {
    margin-bottom: -3rem !important;
  }
  .ml-lg-n6, .mx-lg-n6 {
    margin-left: -3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mt-lg-auto, .my-lg-auto {
    margin-top: auto !important;
  }
  .mr-lg-auto, .mx-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-auto, .my-lg-auto {
    margin-bottom: auto !important;
  }
  .ml-lg-auto, .mx-lg-auto {
    margin-left: auto !important;
  }
}
@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important;
  }
  .mt-xl-0, .my-xl-0 {
    margin-top: 0 !important;
  }
  .mr-xl-0, .mx-xl-0 {
    margin-right: 0 !important;
  }
  .mb-xl-0, .my-xl-0 {
    margin-bottom: 0 !important;
  }
  .ml-xl-0, .mx-xl-0 {
    margin-left: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .mt-xl-1, .my-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mr-xl-1, .mx-xl-1 {
    margin-right: 0.25rem !important;
  }
  .mb-xl-1, .my-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-xl-1, .mx-xl-1 {
    margin-left: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .mt-xl-2, .my-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mr-xl-2, .mx-xl-2 {
    margin-right: 0.5rem !important;
  }
  .mb-xl-2, .my-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-xl-2, .mx-xl-2 {
    margin-left: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .mt-xl-3, .my-xl-3 {
    margin-top: 1rem !important;
  }
  .mr-xl-3, .mx-xl-3 {
    margin-right: 1rem !important;
  }
  .mb-xl-3, .my-xl-3 {
    margin-bottom: 1rem !important;
  }
  .ml-xl-3, .mx-xl-3 {
    margin-left: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .mt-xl-4, .my-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mr-xl-4, .mx-xl-4 {
    margin-right: 1.5rem !important;
  }
  .mb-xl-4, .my-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-xl-4, .mx-xl-4 {
    margin-left: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 2rem !important;
  }
  .mt-xl-5, .my-xl-5 {
    margin-top: 2rem !important;
  }
  .mr-xl-5, .mx-xl-5 {
    margin-right: 2rem !important;
  }
  .mb-xl-5, .my-xl-5 {
    margin-bottom: 2rem !important;
  }
  .ml-xl-5, .mx-xl-5 {
    margin-left: 2rem !important;
  }
  .m-xl-6 {
    margin: 3rem !important;
  }
  .mt-xl-6, .my-xl-6 {
    margin-top: 3rem !important;
  }
  .mr-xl-6, .mx-xl-6 {
    margin-right: 3rem !important;
  }
  .mb-xl-6, .my-xl-6 {
    margin-bottom: 3rem !important;
  }
  .ml-xl-6, .mx-xl-6 {
    margin-left: 3rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .pt-xl-0, .py-xl-0 {
    padding-top: 0 !important;
  }
  .pr-xl-0, .px-xl-0 {
    padding-right: 0 !important;
  }
  .pb-xl-0, .py-xl-0 {
    padding-bottom: 0 !important;
  }
  .pl-xl-0, .px-xl-0 {
    padding-left: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .pt-xl-1, .py-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pr-xl-1, .px-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pb-xl-1, .py-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-xl-1, .px-xl-1 {
    padding-left: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .pt-xl-2, .py-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pr-xl-2, .px-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pb-xl-2, .py-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-xl-2, .px-xl-2 {
    padding-left: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .pt-xl-3, .py-xl-3 {
    padding-top: 1rem !important;
  }
  .pr-xl-3, .px-xl-3 {
    padding-right: 1rem !important;
  }
  .pb-xl-3, .py-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pl-xl-3, .px-xl-3 {
    padding-left: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .pt-xl-4, .py-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pr-xl-4, .px-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pb-xl-4, .py-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-xl-4, .px-xl-4 {
    padding-left: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 2rem !important;
  }
  .pt-xl-5, .py-xl-5 {
    padding-top: 2rem !important;
  }
  .pr-xl-5, .px-xl-5 {
    padding-right: 2rem !important;
  }
  .pb-xl-5, .py-xl-5 {
    padding-bottom: 2rem !important;
  }
  .pl-xl-5, .px-xl-5 {
    padding-left: 2rem !important;
  }
  .p-xl-6 {
    padding: 3rem !important;
  }
  .pt-xl-6, .py-xl-6 {
    padding-top: 3rem !important;
  }
  .pr-xl-6, .px-xl-6 {
    padding-right: 3rem !important;
  }
  .pb-xl-6, .py-xl-6 {
    padding-bottom: 3rem !important;
  }
  .pl-xl-6, .px-xl-6 {
    padding-left: 3rem !important;
  }
  .m-xl-n1 {
    margin: -0.25rem !important;
  }
  .mt-xl-n1, .my-xl-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-xl-n1, .mx-xl-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-xl-n1, .my-xl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-xl-n1, .mx-xl-n1 {
    margin-left: -0.25rem !important;
  }
  .m-xl-n2 {
    margin: -0.5rem !important;
  }
  .mt-xl-n2, .my-xl-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-xl-n2, .mx-xl-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-xl-n2, .my-xl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-xl-n2, .mx-xl-n2 {
    margin-left: -0.5rem !important;
  }
  .m-xl-n3 {
    margin: -1rem !important;
  }
  .mt-xl-n3, .my-xl-n3 {
    margin-top: -1rem !important;
  }
  .mr-xl-n3, .mx-xl-n3 {
    margin-right: -1rem !important;
  }
  .mb-xl-n3, .my-xl-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-xl-n3, .mx-xl-n3 {
    margin-left: -1rem !important;
  }
  .m-xl-n4 {
    margin: -1.5rem !important;
  }
  .mt-xl-n4, .my-xl-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-xl-n4, .mx-xl-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-xl-n4, .my-xl-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-xl-n4, .mx-xl-n4 {
    margin-left: -1.5rem !important;
  }
  .m-xl-n5 {
    margin: -2rem !important;
  }
  .mt-xl-n5, .my-xl-n5 {
    margin-top: -2rem !important;
  }
  .mr-xl-n5, .mx-xl-n5 {
    margin-right: -2rem !important;
  }
  .mb-xl-n5, .my-xl-n5 {
    margin-bottom: -2rem !important;
  }
  .ml-xl-n5, .mx-xl-n5 {
    margin-left: -2rem !important;
  }
  .m-xl-n6 {
    margin: -3rem !important;
  }
  .mt-xl-n6, .my-xl-n6 {
    margin-top: -3rem !important;
  }
  .mr-xl-n6, .mx-xl-n6 {
    margin-right: -3rem !important;
  }
  .mb-xl-n6, .my-xl-n6 {
    margin-bottom: -3rem !important;
  }
  .ml-xl-n6, .mx-xl-n6 {
    margin-left: -3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mt-xl-auto, .my-xl-auto {
    margin-top: auto !important;
  }
  .mr-xl-auto, .mx-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-auto, .my-xl-auto {
    margin-bottom: auto !important;
  }
  .ml-xl-auto, .mx-xl-auto {
    margin-left: auto !important;
  }
}
.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  pointer-events: auto;
  content: "";
  background-color: rgba(0, 0, 0, 0);
}
.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}
.text-justify {
  text-align: justify !important;
}
.text-wrap {
  white-space: normal !important;
}
.text-nowrap {
  white-space: nowrap !important;
}
.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.text-left {
  text-align: left !important;
}
.text-right {
  text-align: right !important;
}
.text-center {
  text-align: center !important;
}
@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important;
  }
  .text-sm-right {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}
@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important;
  }
  .text-md-right {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}
@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }
  .text-lg-right {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important;
  }
  .text-xl-right {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}
.text-lowercase {
  text-transform: lowercase !important;
}
.text-uppercase {
  text-transform: uppercase !important;
}
.text-capitalize {
  text-transform: capitalize !important;
}
.font-weight-light {
  font-weight: 300 !important;
}
.font-weight-lighter {
  font-weight: lighter !important;
}
.font-weight-normal {
  font-weight: 400 !important;
}
.font-weight-bold {
  font-weight: 700 !important;
}
.font-weight-bolder {
  font-weight: bolder !important;
}
.font-italic {
  font-style: italic !important;
}
.text-white {
  color: #fff !important;
}
.text-primary {
  color: #0f6cbf !important;
}
a.text-primary:hover, a.text-primary:focus {
  color: #094478 !important;
}
.text-secondary {
  color: #ced4da !important;
}
a.text-secondary:hover, a.text-secondary:focus {
  color: #a2aeb9 !important;
}
.text-success {
  color: #357a32 !important;
}
a.text-success:hover, a.text-success:focus {
  color: #1d441c !important;
}
.text-info {
  color: #008196 !important;
}
a.text-info:hover, a.text-info:focus {
  color: #003f4a !important;
}
.text-warning {
  color: #f0ad4e !important;
}
a.text-warning:hover, a.text-warning:focus {
  color: #df8a13 !important;
}
.text-danger {
  color: #ca3120 !important;
}
a.text-danger:hover, a.text-danger:focus {
  color: #882116 !important;
}
.text-light {
  color: #f8f9fa !important;
}
a.text-light:hover, a.text-light:focus {
  color: #cbd3da !important;
}
.text-dark {
  color: #343a40 !important;
}
a.text-dark:hover, a.text-dark:focus {
  color: #121416 !important;
}
.text-body {
  color: #1d2125 !important;
}
.text-muted {
  color: #6a737b !important;
}
.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important;
}
.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.text-decoration-none {
  text-decoration: none !important;
}
.text-break {
  word-break: break-word !important;
  word-wrap: break-word !important;
}
.text-reset {
  color: inherit !important;
}
.visible {
  visibility: visible !important;
}
.invisible {
  visibility: hidden !important;
}
@media print {
  *, *::before, *::after {
    text-shadow: none !important;
    box-shadow: none !important;
  }
  a:not(.btn) {
    text-decoration: underline;
  }
  abbr[title]::after {
    content: " (" attr(title) ")";
  }
  pre {
    white-space: pre-wrap !important;
  }
  pre, blockquote {
    border: 1px solid #8f959e;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr, img {
    page-break-inside: avoid;
  }
  p, h2, h3 {
    orphans: 3;
    widows: 3;
  }
  h2, h3 {
    page-break-after: avoid;
  }
  body {
    min-width: 992px !important;
  }
  .container {
    min-width: 992px !important;
  }
  .navbar {
    display: none;
  }
  .badge {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td, .table th {
    background-color: #fff !important;
  }
  .table-bordered th, .table-bordered td {
    border: 1px solid #dee2e6 !important;
  }
  .table-dark {
    color: inherit;
  }
  .table-dark th, .table-dark td, .table-dark thead th, .table-dark tbody + tbody {
    border-color: #dee2e6;
  }
  .table .thead-dark th {
    color: inherit;
    border-color: #dee2e6;
  }
}
/**
 * Bootstrap overrides for RTL
 *
 * This file is only for overriding sass from upstream bootstrap, all general rtl fixes for
 * moodle scss should be placed immediately after the definition of the ltr rule.
 */
.breadcrumb-item + .breadcrumb-item::before {
  content: "/";
  /*rtl:remove*/
  content: "/";
  /* stylelint-disable-line declaration-block-no-duplicate-properties */
}
.dir-rtl .custom-select {
  background-position: 0.75rem center;
}
.dir-rtl .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
  transform: translateX(-0.75rem);
}
/**
 * Moodle variables
 *
 * Variables written for Moodle specific components
 *
 * Please do not override any Bootstrap variables here, custom Bootstrap variable should go in
 * preset files instead.
 */
/* core.less */
#region-main {
  overflow-x: auto;
  overflow-y: visible;
  background-color: #fff;
}
@media (min-width: 576px) {
  .context-header-settings-menu, .region-main-settings-menu {
    float: right;
    width: auto;
    max-width: 4em;
    height: 2em;
    display: block;
    margin-top: 4px;
  }
}
@media (max-width: 767.98px) {
  .context-header-settings-menu, .region-main-settings-menu {
    display: flex;
    justify-content: flex-end;
  }
}
.context-header-settings-menu .dropdown-toggle > .icon, #region-main-settings-menu .dropdown-toggle > .icon {
  height: 24px;
  font-size: 24px;
  width: auto;
}
/** Prevent user notifications overlapping with region main settings menu */
#user-notifications {
  display: block;
  overflow: hidden;
}
/** Page layout CSS starts **/
.layout-option-noheader #page-header, .layout-option-nonavbar #page-navbar, .layout-option-nofooter #page-footer, .layout-option-nocourseheader .course-content-header, .layout-option-nocoursefooter .course-content-footer {
  display: none;
}
/** Page layout CSS ends **/
.mdl-left {
  text-align: left;
}
.mdl-right {
  text-align: right;
}
/*rtl:ignore*/
.text-ltr {
  direction: ltr !important;
  /* stylelint-disable-line declaration-no-important */
}
#add, #remove, .centerpara, .mdl-align {
  text-align: center;
}
a.dimmed, a.dimmed:link, a.dimmed:visited, a.dimmed_text, a.dimmed_text:link, a.dimmed_text:visited, .dimmed_text, .dimmed_text a, .dimmed_text a:link, .dimmed_text a:visited, .usersuspended, .usersuspended a, .usersuspended a:link, .usersuspended a:visited, .dimmed_category, .dimmed_category a {
  color: #6a737b;
}
.aalink.focus, a.focus.autolink, .aalink:focus, a.autolink:focus, #page-footer a:not([class]).focus, #page-footer a:not([class]):focus, .arrow_link.focus, .arrow_link:focus, a:not([class]).focus, a:not([class]):focus, .activityinstance > a.focus, .activityinstance > a:focus {
  outline: 0.2rem solid transparent;
  color: #1d2125;
  background-color: #d2e8fb;
  box-shadow: 0 -0.2rem #d2e8fb, 0 0.2rem #343a40;
}
.aalink:focus:hover, a.autolink:focus:hover, #page-footer a:not([class]):focus:hover, .arrow_link:focus:hover, a:not([class]):focus:hover, .activityinstance > a:focus:hover {
  text-decoration: none;
}
.aabtn.focus, .aabtn:focus, .btn-link.focus, .btn-link:focus, .nav-link.focus, .nav-link:focus, .editor_atto_toolbar button.focus, .editor_atto_toolbar button:focus, .editor_atto_toolbar .atto_toolbar_row.focus, .editor_atto_toolbar .atto_toolbar_row:focus, [role="button"].focus, [role="button"]:focus, .list-group-item-action.focus, .list-group-item-action:focus, input[type="checkbox"].focus, input[type="checkbox"]:focus, input[type="radio"].focus, input[type="radio"]:focus, input[type="file"].focus, input[type="file"]:focus, input[type="image"].focus, input[type="image"]:focus, .sr-only-focusable.focus, .sr-only-focusable:focus, a.dropdown-toggle.focus, a.dropdown-toggle:focus, .modal-dialog[tabindex="0"].focus, .modal-dialog[tabindex="0"]:focus, .moodle-dialogue-base .closebutton.focus, .moodle-dialogue-base .closebutton:focus, button.close.focus, button.close:focus, .form-autocomplete-selection.focus, .form-autocomplete-selection:focus, [role="treeitem"]:not([aria-expanded="true"]).focus, [role="treeitem"]:not([aria-expanded="true"]):focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(15, 108, 191, 0.75);
}
.aabtn:focus:hover, .btn-link:focus:hover, .nav-link:focus:hover, .editor_atto_toolbar button:focus:hover, .editor_atto_toolbar .atto_toolbar_row:focus:hover, [role="button"]:focus:hover, .list-group-item-action:focus:hover, input[type="checkbox"]:focus:hover, input[type="radio"]:focus:hover, input[type="file"]:focus:hover, input[type="image"]:focus:hover, .sr-only-focusable:focus:hover, a.dropdown-toggle:focus:hover, .modal-dialog[tabindex="0"]:focus:hover, .moodle-dialogue-base .closebutton:focus:hover, button.close:focus:hover, .form-autocomplete-selection:focus:hover, [role="treeitem"]:not([aria-expanded="true"]):focus:hover {
  text-decoration: none;
}
.modal-dialog[tabindex="0"].focus, .modal-dialog[tabindex="0"]:focus {
  border-radius: 0.3rem;
}
[role="treeitem"][aria-expanded="true"] {
  outline: 0;
}
[role="treeitem"][aria-expanded="true"].focus > *:first-child, [role="treeitem"][aria-expanded="true"]:focus > *:first-child {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(15, 108, 191, 0.75);
}
[role="treeitem"][aria-expanded="true"]:focus:hover {
  text-decoration: none;
}
.form-autocomplete-suggestions li[aria-selected=true] {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(15, 108, 191, 0.75);
}
.safari input[type="checkbox"].focus, .safari input[type="checkbox"]:focus, .safari input[type="radio"].focus, .safari input[type="radio"]:focus {
  outline: auto;
}
.unlist, .unlist li, .inline-list, .inline-list li, .block .list, .block .list li, .section li.movehere, .tabtree li {
  list-style: none;
  margin: 0;
  padding: 0;
}
.section li.movehere a {
  display: block;
  width: 100%;
  height: 2rem;
  border: 2px dashed #343a40;
}
.editing .course-content .hidden.sectionname {
  visibility: hidden;
  display: initial;
}
.inline, .inline-list li {
  display: inline;
}
.notifytiny {
  font-size: 0.703125rem;
}
.notifytiny li, .notifytiny td {
  font-size: 100%;
}
.red, .notifyproblem {
  color: #f0ad4e;
}
.green, .notifysuccess {
  color: #357a32;
}
.highlight {
  color: #008196;
}
.fitem.advanced .text-info {
  font-weight: bold;
}
.reportlink {
  text-align: right;
}
a.autolink.glossary:hover {
  cursor: help;
}
/* Block which is hidden if javascript enabled, prevents fickering visible when JS from footer used! */
.collapsibleregioncaption {
  white-space: nowrap;
  min-height: 1.40625rem;
}
.pagelayout-mydashboard.jsenabled .collapsibleregioncaption {
  cursor: pointer;
}
.pagelayout-mydashboard #region-main {
  border: 0;
  padding: 0;
  background-color: transparent;
  margin-top: -1px;
}
@media (max-width: 767.98px) {
  .pagelayout-mydashboard #region-main-box, .pagelayout-login #region-main-box {
    padding-left: 0;
    padding-right: 0;
  }
}
.collapsibleregioncaption img {
  vertical-align: middle;
}
.jsenabled .hiddenifjs {
  display: none;
}
.visibleifjs {
  display: none;
}
.jsenabled .visibleifjs {
  display: inline;
}
.jsenabled .collapsibleregion {
  overflow: hidden;
  box-sizing: content-box;
}
.jsenabled .collapsed .collapsibleregioninner {
  visibility: hidden;
}
.collapsible-actions {
  display: none;
  text-align: right;
}
.jsenabled .collapsible-actions {
  display: block;
}
.yui-overlay .yui-widget-bd {
  background-color: #ffee69;
  border: 1px solid #a6982b;
  border-top-color: #d4c237;
  color: #000;
  left: 0;
  padding: 2px 5px;
  position: relative;
  top: 0;
  z-index: 1;
}
.clearer {
  background: transparent;
  border-width: 0;
  clear: both;
  display: block;
  height: 1px;
  margin: 0;
  padding: 0;
}
.bold, .warning, .errorbox .title, .pagingbar .title, .pagingbar .thispage {
  font-weight: bold;
}
img.resize {
  height: 1em;
  width: 1em;
}
.action-menu .dropdown-toggle {
  text-decoration: none;
  display: inline-block;
}
.action-menu {
  white-space: nowrap;
  display: inline;
}
.block img.resize {
  height: 0.9em;
  width: 0.8em;
}
/* Icon styles */
img.activityicon {
  height: 24px;
  width: 24px;
  vertical-align: middle;
}
.headermain {
  font-weight: bold;
}
#maincontent {
  display: block;
  height: 1px;
  overflow: hidden;
}
img.uihint {
  cursor: help;
}
#addmembersform table {
  margin-left: auto;
  margin-right: auto;
}
table.flexible .emptyrow {
  display: none;
}
form.popupform, form.popupform div {
  display: inline;
}
.arrow_button input {
  overflow: hidden;
}
.no-overflow {
  overflow: auto;
}
.no-overflow > .generaltable {
  position: relative;
  margin-bottom: 0;
}
.accesshide {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}
span.hide, div.hide, .hidden {
  display: none;
}
a.skip-block, a.skip {
  position: absolute;
  top: -1000em;
  font-size: 0.85em;
  text-decoration: none;
}
a.skip-block:focus, a.skip-block:active, a.skip:focus, a.skip:active {
  position: static;
  display: block;
}
.skip-block-to {
  display: block;
  height: 1px;
  overflow: hidden;
}
.addbloglink {
  text-align: center;
}
.blog_entry .audience {
  text-align: right;
  padding-right: 4px;
}
.blog_entry .tags {
  margin-top: 15px;
}
.blog_entry .content {
  margin-left: 43px;
}
#doc-contents h1 {
  margin: 1em 0 0 0;
}
#doc-contents ul {
  margin: 0;
  padding: 0;
  width: 90%;
}
#doc-contents ul li {
  list-style-type: none;
}
.groupmanagementtable td {
  vertical-align: top;
}
.groupmanagementtable #existingcell, .groupmanagementtable #potentialcell {
  width: 42%;
}
.groupmanagementtable #buttonscell {
  width: 16%;
}
.groupmanagementtable #buttonscell p.arrow_button input {
  width: auto;
  min-width: 80%;
  margin: 0 auto;
  display: block;
}
.groupmanagementtable #removeselect_wrapper, .groupmanagementtable #addselect_wrapper {
  width: 100%;
}
.groupmanagementtable #removeselect_wrapper label, .groupmanagementtable #addselect_wrapper label {
  font-weight: normal;
}
#group-usersummary {
  width: 14em;
}
.groupselector {
  margin-top: 3px;
  margin-bottom: 3px;
  display: inline-block;
}
.groupselector label {
  display: inline-block;
}
.notepost {
  margin-bottom: 1em;
}
.notepost .userpicture {
  float: left;
  margin-right: 5px;
}
.notepost .content, .notepost .footer {
  clear: both;
}
.notesgroup {
  margin-left: 20px;
}
.path-my .coursebox {
  margin: 1rem 0;
  padding: 0;
}
.path-my .coursebox .overview {
  margin: 15px 30px 10px 30px;
}
.path-my .coursebox .info {
  float: none;
  margin: 0;
}
.mod_introbox {
  padding: 10px;
}
table.mod_index {
  width: 100%;
}
.comment-ctrl {
  font-size: 12px;
  display: none;
  margin: 0;
  padding: 0;
}
.comment-ctrl h5 {
  margin: 0;
  padding: 5px;
}
.comment-area {
  max-width: 400px;
  padding: 5px;
}
.comment-area textarea {
  width: 100%;
  overflow: auto;
}
.comment-area textarea.fullwidth {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.comment-area .fd {
  text-align: right;
}
.comment-meta span {
  color: gray;
}
.comment-link img {
  vertical-align: text-bottom;
}
.comment-list {
  font-size: 11px;
  overflow: auto;
  list-style: none;
  padding: 0;
  margin: 0;
}
.comment-list li {
  margin: 2px;
  list-style: none;
  margin-bottom: 5px;
  clear: both;
  padding: 0.3em;
  position: relative;
}
.comment-list li.first {
  display: none;
}
.comment-paging {
  text-align: center;
}
.comment-paging .pageno {
  padding: 2px;
}
.comment-paging .curpage {
  border: 1px solid #ccc;
}
.comment-message .picture {
  float: left;
  margin-right: 0.25rem;
}
.comment-message .text {
  margin: 0;
  padding: 0;
}
.comment-message .text p {
  padding: 0;
  margin: 0 18px 0 0;
}
.comment-delete {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0.3em;
}
.comment-report-selectall {
  display: none;
}
.comment-link {
  display: none;
}
.jsenabled .comment-link {
  display: block;
}
.jsenabled .showcommentsnonjs {
  display: none;
}
.jsenabled .comment-report-selectall {
  display: inline;
}
/**
* Completion progress report
*/
.completion-expired {
  color: #f0ad4e;
}
.completion-expected {
  font-size: 0.703125rem;
}
.completion-sortchoice, .completion-identifyfield {
  font-size: 0.703125rem;
  vertical-align: bottom;
}
.completion-progresscell {
  text-align: right;
}
.completion-expired .completion-expected {
  font-weight: bold;
}
/**
* Tags
*/
img.user-image {
  height: 100px;
  width: 100px;
}
#tag-search-box {
  text-align: center;
  margin: 10px auto;
}
.path-tag .tag-index-items .tagarea {
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  padding: 10px;
  margin-top: 10px;
}
.path-tag .tag-index-items .tagarea h3 {
  display: block;
  padding: 3px 0 10px 0;
  margin: 0;
  font-size: 1.1em;
  font-weight: bold;
  line-height: 20px;
  color: #999;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  text-transform: uppercase;
  word-wrap: break-word;
  border-bottom: solid 1px #e3e3e3;
  margin-bottom: 10px;
}
.path-tag .tagarea .controls::after, .path-tag .tagarea .taggeditems::after {
  display: block;
  clear: both;
  content: "";
}
.path-tag .tagarea .controls, .path-tag .tag-backtoallitems {
  text-align: center;
}
.path-tag .tagarea .controls .gotopage.nextpage {
  float: right;
}
.path-tag .tagarea .controls .gotopage.prevpage {
  float: left;
}
.path-tag .tagarea .controls .exclusivemode {
  display: inline-block;
}
.path-tag .tagarea .controls.controls-bottom {
  margin-top: 5px;
}
.path-tag .tagarea .controls .gotopage.nextpage::after {
  padding-right: 5px;
  padding-left: 5px;
  content: "»";
}
.path-tag .tagarea .controls .gotopage.prevpage::before {
  padding-right: 5px;
  padding-left: 5px;
  content: "«";
}
span.flagged-tag, tr.flagged-tag, span.flagged-tag a, tr.flagged-tag a {
  color: #f0ad4e;
}
.tag-management-table td, .tag-management-table th {
  vertical-align: middle;
  padding: 4px;
}
.tag-management-table .inplaceeditable.inplaceeditingon input {
  width: 150px;
}
.path-admin-tag .addstandardtags {
  float: right;
}
.path-admin-tag .addstandardtags img {
  margin: 0 5px;
}
.path-tag .tag-relatedtags {
  padding-top: 10px;
}
.path-tag .tag-management-box {
  text-align: right;
}
.path-tag .tag-index-toc {
  padding: 10px;
  text-align: center;
}
.path-tag .tag-index-toc li, .path-tag .tag-management-box li {
  margin-left: 5px;
  margin-right: 5px;
}
.path-tag .tag-management-box li a.edittag {
  background-image: url(/theme/image.php?theme=classic&component=core&image=i%2Fsettings);
}
.path-tag .tag-management-box li a.flagasinappropriate {
  background-image: url(/theme/image.php?theme=classic&component=core&image=i%2Fflagged);
}
.path-tag .tag-management-box li a.removefrommyinterests {
  background-image: url(/theme/image.php?theme=classic&component=core&image=t%2Fdelete);
}
.path-tag .tag-management-box li a.addtomyinterests {
  background-image: url(/theme/image.php?theme=classic&component=core&image=t%2Fadd);
}
.path-tag .tag-management-box li a {
  background-repeat: no-repeat;
  background-position: left;
  padding-left: 17px;
}
.tag_feed.media-list .media .itemimage {
  float: left;
}
.tag_feed.media-list .media .itemimage img {
  height: 35px;
  width: 35px;
}
.tag_feed.media-list .media .media-body {
  padding-right: 10px;
  padding-left: 10px;
}
.tag_feed .media .muted a {
  color: #6a737b;
}
.tag_cloud {
  text-align: center;
}
.tag_cloud .inline-list li {
  padding: 0 0.2em;
}
.tag_cloud .tag_overflow {
  margin-top: 1em;
  font-style: italic;
}
.tag_cloud .s20 {
  font-size: 2.7em;
}
.tag_cloud .s19 {
  font-size: 2.6em;
}
.tag_cloud .s18 {
  font-size: 2.5em;
}
.tag_cloud .s17 {
  font-size: 2.4em;
}
.tag_cloud .s16 {
  font-size: 2.3em;
}
.tag_cloud .s15 {
  font-size: 2.2em;
}
.tag_cloud .s14 {
  font-size: 2.1em;
}
.tag_cloud .s13 {
  font-size: 2em;
}
.tag_cloud .s12 {
  font-size: 1.9em;
}
.tag_cloud .s11 {
  font-size: 1.8em;
}
.tag_cloud .s10 {
  font-size: 1.7em;
}
.tag_cloud .s9 {
  font-size: 1.6em;
}
.tag_cloud .s8 {
  font-size: 1.5em;
}
.tag_cloud .s7 {
  font-size: 1.4em;
}
.tag_cloud .s6 {
  font-size: 1.3em;
}
.tag_cloud .s5 {
  font-size: 1.2em;
}
.tag_cloud .s4 {
  font-size: 1.1em;
}
.tag_cloud .s3 {
  font-size: 1em;
}
.tag_cloud .s2 {
  font-size: 0.9em;
}
.tag_cloud .s1 {
  font-size: 0.8em;
}
.tag_cloud .s0 {
  font-size: 0.7em;
}
.tag_list ul {
  display: inline;
}
.tag_list.hideoverlimit .overlimit {
  display: none;
}
.tag_list .tagmorelink {
  display: none;
}
.tag_list.hideoverlimit .tagmorelink {
  display: inline;
}
.tag_list.hideoverlimit .taglesslink {
  display: none;
}
/**
* Web Service
*/
#webservice-doc-generator td {
  text-align: left;
  border: 0 solid black;
}
/**
* Enrol
*/
.userenrolment {
  width: 100%;
  border-collapse: collapse;
}
.userenrolment tr {
  vertical-align: top;
}
.userenrolment td {
  padding: 0;
  height: 41px;
}
.userenrolment .subfield {
  margin-right: 5px;
}
.userenrolment .col_userdetails .subfield {
  margin-left: 40px;
}
.userenrolment .col_userdetails .subfield_picture {
  float: left;
  margin-left: 0;
}
.userenrolment .col_lastseen {
  width: 150px;
}
.userenrolment .col_role {
  width: 262px;
}
.userenrolment .col_role .roles, .userenrolment .col_group .groups {
  margin-right: 30px;
}
.userenrolment .col_role .role {
  float: left;
  padding: 0 3px 3px;
  margin: 0 3px 3px;
  white-space: nowrap;
}
.userenrolment .col_group .group {
  float: left;
  padding: 3px;
  margin: 3px;
  white-space: nowrap;
}
.userenrolment .col_role .role a, .userenrolment .col_group .group a {
  margin-left: 3px;
  cursor: pointer;
}
.userenrolment .col_role .addrole, .userenrolment .col_group .addgroup {
  float: right;
  padding: 3px;
  margin: 3px;
}
.userenrolment .col_role .addrole > a:hover, .userenrolment .col_group .addgroup > a:hover {
  border-bottom: 1px solid #666;
}
.userenrolment .col_role .addrole img, .userenrolment .col_group .addgroup img {
  vertical-align: baseline;
}
.userenrolment .hasAllRoles .col_role .addrole {
  display: none;
}
.userenrolment .col_enrol .enrolment {
  float: left;
  padding: 0 3px 3px;
  margin: 0 3px 3px;
}
.userenrolment .col_enrol .enrolment a {
  float: right;
  margin-left: 3px;
}
#page-enrol-otherusers .userenrolment .col_role .role {
  float: none;
  margin: 3px 3px 3px 0;
  padding: 3px 3px 3px 0;
}
.corelightbox {
  background-color: #ccc;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  text-align: center;
}
.corelightbox img {
  position: fixed;
  top: 50%;
  left: 50%;
}
.mod-indent-outer {
  display: table;
}
.mod-indent {
  display: table-cell;
}
.label .mod-indent {
  float: left;
  padding-top: 20px;
}
@media (min-width: 576px) {
  .que .correctness.correct {
    /* Creates a series of .mod-indent-# rule declarations based on indent size and number of indent levels. */
  }
  .mod-indent-1 {
    width: 30px;
  }
  .mod-indent-2 {
    width: 60px;
  }
  .mod-indent-3 {
    width: 90px;
  }
  .mod-indent-4 {
    width: 120px;
  }
  .mod-indent-5 {
    width: 150px;
  }
  .mod-indent-6 {
    width: 180px;
  }
  .mod-indent-7 {
    width: 210px;
  }
  .mod-indent-8 {
    width: 240px;
  }
  .mod-indent-9 {
    width: 270px;
  }
  .mod-indent-10 {
    width: 300px;
  }
  .mod-indent-11 {
    width: 330px;
  }
  .mod-indent-12 {
    width: 360px;
  }
  .mod-indent-13 {
    width: 390px;
  }
  .mod-indent-14 {
    width: 420px;
  }
  .mod-indent-15 {
    width: 450px;
  }
  .mod-indent-16 {
    width: 480px;
  }
  .mod-indent-huge {
    width: 480px;
  }
}
/* Audio player size in 'block' mode (can only change width, height is hardcoded in JS) */
.resourcecontent .mediaplugin_mp3 object {
  height: 25px;
  width: 600px;
}
.resourcecontent audio.mediaplugin_html5audio {
  width: 600px;
}
/** Large resource images should avoid hidden overflow **/
.resourceimage {
  max-width: 100%;
}
/* Audio player size in 'inline' mode (can only change width, as above) */
.mediaplugin_mp3 object {
  height: 15px;
  width: 300px;
}
audio.mediaplugin_html5audio {
  width: 300px;
}
/* TinyMCE moodle media preview frame should not have padding */
.core_media_preview.pagelayout-embedded #content {
  padding: 0;
}
.core_media_preview.pagelayout-embedded #maincontent {
  height: 0;
}
body#page-lib-editor-tinymce-plugins-moodlemedia-preview {
  padding: 0;
  margin: 0;
  min-width: 0;
  background: none;
}
.path-rating .ratingtable {
  width: 100%;
  margin-bottom: 1em;
}
.path-rating .ratingtable th.rating {
  width: 100%;
}
.path-rating .ratingtable td.rating, .path-rating .ratingtable td.time {
  white-space: nowrap;
  text-align: center;
}
/* Moodle Dialogue Settings (moodle-core-dialogue)  */
.moodle-dialogue-base .moodle-dialogue-lightbox {
  background-color: #495057;
}
.pagelayout-popup .moodle-dialogue-base .moodle-dialogue-lightbox {
  background-color: transparent;
}
.pagelayout-popup .moodle-dialogue-base .moodle-dialogue {
  box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.2);
}
.moodle-dialogue-base .hidden, .moodle-dialogue-base .moodle-dialogue-hidden {
  display: none;
}
.no-scrolling {
  overflow: hidden;
}
.moodle-dialogue-base .moodle-dialogue-fullscreen {
  left: 0;
  top: 0;
  right: 0;
  bottom: -50px;
  position: fixed;
}
.moodle-dialogue-base .moodle-dialogue-fullscreen .moodle-dialogue-content {
  overflow: auto;
}
.moodle-dialogue-base .moodle-dialogue-wrap {
  background-color: #fff;
  border: 1px solid #ccc;
}
.modal.show {
  display: block;
}
.moodle-dialogue-base .moodle-dialogue-wrap .moodle-dialogue-hd {
  display: flex;
  padding: 1rem 1rem;
  border-bottom: 1px solid #dee2e6;
}
.moodle-dialogue-base .moodle-dialogue-wrap .moodle-dialogue-hd.yui3-widget-hd {
  min-height: 3rem;
  color: initial;
  background: initial;
  font-size: 1.5rem;
  line-height: 1.5;
}
.moodle-dialogue-base .moodle-dialogue-wrap .moodle-dialogue-hd h5 {
  font-size: 1.5rem;
  font-weight: 400;
  margin-bottom: 0;
  line-height: 1.5;
}
.moodle-dialogue-base .moodle-dialogue-wrap .moodle-dialogue-hd .yui3-widget-buttons {
  /*rtl:raw:
        left: 0;
        right: auto;
    */
  padding: 0;
  position: relative;
  margin-left: auto;
}
.moodle-dialogue-base .closebutton {
  padding: 1rem 1rem;
  margin: -1rem -1rem -1rem auto;
  position: relative;
  background-color: transparent;
  border: 0;
  background-image: none;
  box-shadow: none;
  opacity: 0.7;
}
.moodle-dialogue-base .closebutton:hover, .moodle-dialogue-base .closebutton:active {
  opacity: 1;
}
.moodle-dialogue-base .closebutton::after {
  content: "×";
}
.moodle-dialogue-base .moodle-dialogue .moodle-dialogue-bd {
  padding: 0.5rem;
}
.moodle-dialogue-base .moodle-dialogue .moodle-dialogue-bd body {
  background-color: #fff;
}
.moodle-dialogue-base .moodle-dialogue-fullscreen .moodle-dialogue-content {
  overflow: auto;
  position: absolute;
  top: 0;
  bottom: 50px;
  left: 0;
  right: 0;
  margin: 0;
  border: 0;
}
.moodle-dialogue-exception .moodle-exception-param label {
  font-weight: bold;
}
.moodle-dialogue-exception .param-stacktrace label {
  background-color: #eee;
  border: 1px solid #ccc;
  border-bottom-width: 0;
}
.moodle-dialogue-exception .param-stacktrace pre {
  border: 1px solid #ccc;
  background-color: #fff;
}
.moodle-dialogue-exception .param-stacktrace .stacktrace-file {
  color: navy;
  font-size: 0.8203125rem;
}
.moodle-dialogue-exception .param-stacktrace .stacktrace-line {
  color: #f0ad4e;
  font-size: 0.8203125rem;
}
.moodle-dialogue-exception .param-stacktrace .stacktrace-call {
  color: #333;
  font-size: 90%;
  border-bottom: 1px solid #eee;
}
.moodle-dialogue-base .moodle-dialogue .moodle-dialogue-content .moodle-dialogue-ft:empty {
  display: none;
}
.moodle-dialogue-base .moodle-dialogue .moodle-dialogue-content .moodle-dialogue-ft.yui3-widget-ft {
  background: initial;
}
.moodle-dialogue-confirm .confirmation-message {
  margin: 0.5rem 0;
}
.moodle-dialogue-confirm .confirmation-dialogue input {
  min-width: 80px;
}
.moodle-dialogue-exception .moodle-exception-message {
  margin: 1em;
}
.moodle-dialogue-exception .moodle-exception-param {
  margin-bottom: 0.5em;
}
.moodle-dialogue-exception .moodle-exception-param label {
  width: 150px;
}
.moodle-dialogue-exception .param-stacktrace label {
  display: block;
  margin: 0;
  padding: 4px 1em;
}
.moodle-dialogue-exception .param-stacktrace pre {
  display: block;
  height: 200px;
  overflow: auto;
}
.moodle-dialogue-exception .param-stacktrace .stacktrace-file {
  display: inline-block;
  margin: 4px 0;
}
.moodle-dialogue-exception .param-stacktrace .stacktrace-line {
  display: inline-block;
  width: 50px;
  margin: 4px 1em;
}
.moodle-dialogue-exception .param-stacktrace .stacktrace-call {
  padding-left: 25px;
  margin-bottom: 4px;
  padding-bottom: 4px;
}
.moodle-dialogue .moodle-dialogue-bd .content-lightbox {
  opacity: 0.75;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: white;
  text-align: center;
  padding: 10% 0;
}
/* Apply a default max-height on tooltip text */
.moodle-dialogue .tooltiptext {
  max-height: 300px;
}
.moodle-dialogue-base .moodle-dialogue.moodle-dialogue-tooltip {
  z-index: 3001;
}
.moodle-dialogue-base .moodle-dialogue.moodle-dialogue-tooltip .moodle-dialogue-bd {
  overflow: auto;
}
/**
 * Chooser Dialogues (moodle-core-chooserdialogue)
 *
 * This CSS belong to the chooser dialogue which should work both with, and
 * without javascript enabled
 */
/* Hide the dialog and it's title */
.chooserdialoguebody, .choosertitle {
  display: none;
}
.moodle-dialogue.chooserdialogue .moodle-dialogue-content .moodle-dialogue-ft {
  margin: 0;
}
.chooserdialogue .moodle-dialogue-wrap .moodle-dialogue-bd {
  padding: 0;
  background: #f2f2f2;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
}
/* Center the submit buttons within the area */
.choosercontainer #chooseform .submitbuttons {
  padding: 0.7em 0;
  text-align: right;
}
/* Fixed for safari browser on iPhone4S with ios7@mixin */
@media (max-height: 639px) {
  .ios .choosercontainer #chooseform .submitbuttons {
    padding: 45px 0;
  }
}
.choosercontainer #chooseform .submitbuttons input {
  min-width: 100px;
  margin: 0 0.5em;
}
/* Various settings for the options area */
.choosercontainer #chooseform .options {
  position: relative;
  border-bottom: 1px solid #bbb;
}
/* Only set these options if we're showing the js container */
.jschooser .choosercontainer #chooseform .alloptions {
  overflow-x: hidden;
  overflow-y: auto;
  max-width: 240px;
}
.jschooser .choosercontainer #chooseform .alloptions .option input[type=radio] {
  display: inline-block;
}
.jschooser .choosercontainer #chooseform .alloptions .option .typename {
  display: inline-block;
  width: 55%;
}
/* Settings for option rows and option subtypes */
.choosercontainer #chooseform .moduletypetitle, .choosercontainer #chooseform .option, .choosercontainer #chooseform .nonoption {
  margin-bottom: 0;
  padding: 0 1.6em 0 1.6em;
}
.choosercontainer #chooseform .moduletypetitle {
  text-transform: uppercase;
  padding-top: 1.2em;
  padding-bottom: 0.4em;
  margin-bottom: 0.5rem;
  font-size: 100%;
}
.choosercontainer #chooseform .option .typename, .choosercontainer #chooseform .nonoption .typename {
  padding: 0 0 0 0.5em;
}
.choosercontainer #chooseform .modicon + .typename {
  padding-left: 0;
}
.choosercontainer #chooseform .option input[type=radio], .choosercontainer #chooseform .option span.typename {
  vertical-align: middle;
}
.choosercontainer #chooseform .option label {
  display: block;
  margin: 0;
  padding: 0.5rem 0;
  border-bottom: 1px solid #fff;
}
.choosercontainer #chooseform .option .icon {
  margin: 0;
  padding: 0 1rem;
}
.choosercontainer #chooseform .nonoption {
  padding-left: 2.7em;
  padding-top: 0.3em;
  padding-bottom: 0.1em;
}
.choosercontainer #chooseform .subtype {
  margin-bottom: 0;
  padding: 0 1.6em 0 3.2em;
}
.choosercontainer #chooseform .subtype .typename {
  margin: 0 0 0 0.2em;
}
/* The instruction/help area */
.jschooser .choosercontainer #chooseform .instruction, .jschooser .choosercontainer #chooseform .typesummary {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 240px;
  margin: 0;
  padding: 1.6em;
  background-color: #fff;
  overflow-x: hidden;
  overflow-y: auto;
  line-height: 2em;
}
/* Selected option settings */
.jschooser .choosercontainer #chooseform .instruction, .choosercontainer #chooseform .selected .typesummary {
  display: block;
}
.choosercontainer #chooseform .selected {
  background-color: #fff;
  margin-top: -1px;
  padding-top: 1px;
}
@media (max-width: 575.98px) {
  .jsenabled .choosercontainer #chooseform .alloptions {
    max-width: 100%;
  }
  .jsenabled .choosercontainer #chooseform .instruction, .jsenabled .choosercontainer #chooseform .typesummary {
    position: static;
  }
}
/**
 * Module chooser dialogue (moodle-core-chooserdialogue)
 *
 * This CSS belong to the chooser dialogue which should work both with, and
 * without javascript enabled
 */
.modchooser .modal-body {
  padding: 0;
  overflow-y: auto;
  min-height: 640px;
  display: flex;
  flex-direction: column;
}
.modchooser .modal-body .searchresultitemscontainer-wrapper {
  min-height: 495px;
}
.modchooser .modal-body .carousel-item.active {
  display: flex;
}
.modchooser .modal-body .chooser-container {
  display: flex;
  flex-direction: column;
  flex: 1 1 auto;
}
.modchooser .modal-body .loading-icon {
  opacity: 1;
}
.modchooser .modal-body .loading-icon .icon {
  display: block;
  font-size: 3em;
  height: 1em;
  width: 1em;
}
.modchooser .modal-body .carousel-item .loading-icon .icon {
  margin: 1em auto;
}
.modchooser .modal-body .searchbar {
  width: 100%;
}
.modchooser .modal-footer {
  height: 70px;
  background: #fff;
}
.modchooser .modal-footer .moodlenet-logo .icon {
  height: 2.5rem;
  width: 6rem;
  margin-bottom: 0.6rem;
}
.modchoosercontainer.noscroll {
  overflow-y: hidden;
}
.modchoosercontainer .optionscontainer, .modchoosercontainer .searchresultitemscontainer {
  overflow-x: hidden;
}
.modchoosercontainer .optionscontainer .option, .modchoosercontainer .searchresultitemscontainer .option {
  flex-basis: calc(50% - 0.5rem);
}
.modchoosercontainer .optionscontainer .option .optionactions .optionaction, .modchoosercontainer .searchresultitemscontainer .option .optionactions .optionaction {
  cursor: pointer;
  color: #6a737b;
}
.modchoosercontainer .optionscontainer .option .optionactions .optionaction i, .modchoosercontainer .searchresultitemscontainer .option .optionactions .optionaction i {
  margin: 0;
}
.modchoosercontainer .optionscontainer .option .optioninfo a, .modchoosercontainer .searchresultitemscontainer .option .optioninfo a {
  color: #495057;
}
.modchoosercontainer .optionscontainer .option .optioninfo a:hover, .modchoosercontainer .searchresultitemscontainer .option .optioninfo a:hover {
  text-decoration: none;
}
.modchooser .modal-body .optionsummary {
  background-color: #fff;
  overflow-x: hidden;
  overflow-y: auto;
  height: 640px;
}
.modchooser .modal-body .optionsummary .content {
  overflow-y: auto;
}
.modchooser .modal-body .optionsummary .content .heading .icon {
  height: 32px;
  width: 32px;
  font-size: 32px;
  padding: 0;
}
.modchooser .modal-body .optionsummary .actions {
  border-top: 1px solid #dee2e6;
  background: #fff;
}
@media (max-width: 575.98px) {
  .path-course-view .modal-dialog.modal-lg, .path-course-view .modal-content, .modchooser .modal-body, .modchooser .modal-body .carousel, .modchooser .modal-body .carousel-inner, .modchooser .modal-body .carousel-item, .modchooser .modal-body .optionsummary, .modchoosercontainer, .optionscontainer, .searchresultitemscontainer {
    min-height: auto;
    height: 100%;
    overflow-y: auto;
  }
  .path-course-view .modal-dialog.modal-lg {
    margin: 0;
  }
  .modchooser .modal-body .searchresultitemscontainer-wrapper {
    min-height: auto;
  }
}
@media (min-width: 576px) {
  .modchoosercontainer .optionscontainer .option, .modchoosercontainer .searchresultitemscontainer .option {
    flex-basis: calc(33.33% - 0.5rem);
  }
}
@media (min-width: 992px) {
  .modchoosercontainer .optionscontainer .option, .modchoosercontainer .searchresultitemscontainer .option {
    flex-basis: calc(16.66% - 0.5rem);
  }
}
/* Form element: listing */
.formlistingradio {
  padding-bottom: 25px;
  padding-right: 10px;
}
.formlistinginputradio {
  float: left;
}
.formlistingmain {
  min-height: 225px;
}
.formlisting {
  position: relative;
  margin: 15px 0;
  padding: 1px 19px 14px;
  background-color: white;
  border: 1px solid #ddd;
  border-radius: 4px;
}
.formlistingmore {
  position: absolute;
  cursor: pointer;
  bottom: -1px;
  right: -1px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  background-color: whitesmoke;
  border: 1px solid #ddd;
  color: #9da0a4;
  border-radius: 4px 0 4px 0;
}
.formlistingall {
  margin: 15px 0;
  padding: 0;
  border-radius: 4px;
}
.formlistingrow {
  cursor: pointer;
  border-bottom: 1px solid;
  border-color: #e1e1e8;
  border-left: 1px solid #e1e1e8;
  border-right: 1px solid #e1e1e8;
  background-color: #f7f7f9;
  border-radius: 0 0 4px 4px;
  padding: 6px;
  top: 50%;
  left: 50%;
  min-height: 34px;
  float: left;
  width: 150px;
}
body.jsenabled .formlistingradio {
  display: none;
}
body.jsenabled .formlisting {
  display: block;
}
a.criteria-action {
  padding: 0 3px;
  float: right;
}
div.criteria-description {
  padding: 10px 15px;
  margin: 5px 0;
  background: none repeat scroll 0 0 #f9f9f9;
  border: 1px solid #eee;
}
ul.badges {
  margin: 0;
  list-style: none;
}
.badges li {
  position: relative;
  display: inline-block;
  padding-top: 1em;
  text-align: center;
  vertical-align: top;
  width: 150px;
}
.badges li .badge-name {
  display: block;
  padding: 5px;
}
.badges li > img {
  position: absolute;
}
.badges li .badge-image {
  width: 100px;
  height: 100px;
  left: 10px;
  top: 0;
  z-index: 1;
}
.badges li .badge-actions {
  position: relative;
}
.badges li .expireimage {
  background-image: url(/theme/image.php?theme=classic&component=core&image=i%2Fexpired);
  background-repeat: no-repeat;
  background-size: 100px 100px;
  width: 100px;
  height: 100px;
  left: 25px;
  top: 15px;
  position: absolute;
  z-index: 10;
  opacity: 0.85;
}
#badge-image {
  background-color: transparent;
  padding: 0;
  position: relative;
  min-width: 100px;
  width: 20%;
  display: inline-block;
  vertical-align: top;
  margin-top: 17px;
  margin-bottom: 20px;
}
#badge-image .expireimage {
  background-image: url(/theme/image.php?theme=classic&component=core&image=i%2Fexpired);
  background-repeat: no-repeat;
  background-size: 100px 100px;
  width: 100px;
  height: 100px;
  left: 0;
  top: 0;
  opacity: 0.85;
  position: absolute;
  z-index: 10;
}
#badge-image .singlebutton {
  padding-top: 5px;
  display: block;
}
#badge-image .singlebutton button {
  margin-left: 4px;
}
#badge-details {
  display: inline-block;
  width: 79%;
}
#badge-overview dl, #badge-details dl {
  margin: 0;
}
#badge-overview dl dt, #badge-overview dl dd, #badge-details dl dt, #badge-details dl dd {
  vertical-align: top;
  padding: 3px 0;
}
#badge-overview dl dt, #badge-details dl dt {
  clear: both;
  display: inline-block;
  width: 20%;
  min-width: 100px;
}
#badge-overview dl dd, #badge-details dl dd {
  display: inline-block;
  width: 79%;
  margin-left: 1%;
}
#badge-criteria li li {
  list-style-type: none;
}
#badge-image-col {
  flex: 0 0 400px;
}
.badge-profile {
  vertical-align: top;
}
.connected {
  color: #357a32;
}
.notconnected {
  color: #ca3120;
}
.connecting {
  color: #f0ad4e;
}
#page-badges-award .recipienttable tr td {
  vertical-align: top;
}
#page-badges-award .recipienttable tr td.actions .actionbutton {
  margin: 0.3em 0;
  padding: 0.5em 0;
  width: 100%;
}
#page-badges-award .recipienttable tr td.existing, #page-badges-award .recipienttable tr td.potential {
  width: 42%;
}
#issued-badge-table .activatebadge {
  display: inline-block;
}
.statusbox.active {
  background-color: #d7e4d6;
}
.statusbox.inactive {
  background-color: #fcefdc;
}
.statusbox {
  text-align: center;
  margin-bottom: 5px;
  padding: 5px;
}
.statusbox .activatebadge {
  display: inline-block;
}
.statusbox .activatebadge input[type=submit] {
  margin: 3px;
}
.activatebadge {
  margin: 0;
  text-align: left;
  vertical-align: middle;
}
img#persona_signin {
  cursor: pointer;
}
.addcourse {
  float: right;
}
.invisiblefieldset {
  display: inline;
  padding: 0;
  border-width: 0;
}
/** Page header */
#page-header h1.h2 {
  font-weight: bold;
}
#page-header .logo {
  margin: 1rem 0;
}
#page-header .logo img {
  max-height: 75px;
}
/** Navbar logo. */
nav.navbar .logo img {
  max-height: 35px;
}
.nav.usernav .nav-item {
  display: flex;
}
.nav.usernav .usermenu .dropdown-toggle {
  padding: 0 0.5rem;
}
/** Header-bar styles **/
.page-context-header {
  overflow: hidden;
  padding: 0.25rem 0;
  display: flex;
}
.page-context-header .page-header-image > a {
  display: inline-block;
}
.page-context-header .page-header-headings, .page-context-header .header-button-group {
  position: relative;
  line-height: 24px;
  vertical-align: middle;
}
.page-context-header .header-button-group {
  display: block;
  float: left;
}
ul.dragdrop-keyboard-drag li {
  list-style-type: none;
}
a.disabled:hover, a.disabled {
  text-decoration: none;
  cursor: default;
  font-style: italic;
  color: #808080;
}
body.lockscroll {
  height: 100%;
  overflow: hidden;
}
.progressbar_container {
  max-width: 500px;
  margin: 0 auto;
}
/* IE10 only fix for calendar titling */
.ie10 .yui3-calendar-header-label {
  display: inline-block;
}
dd:before, dd:after {
  display: block;
  content: " ";
}
dd:after {
  clear: both;
}
.nav-tabs > .active > a[href], .nav-tabs > .active > a[href]:hover, .nav-tabs > .active > a[href]:focus {
  cursor: pointer;
}
.inplaceeditable.inplaceeditingon {
  position: relative;
}
.inplaceeditable.inplaceeditingon .editinstructions {
  margin-top: -30px;
  font-weight: normal;
  margin-right: 0;
  margin-left: 0;
  left: 0;
  right: auto;
  white-space: nowrap;
}
@media (min-width: 576px) {
  .inplaceeditable.inplaceeditingon input {
    width: 330px;
    vertical-align: text-bottom;
    margin-bottom: 0;
  }
}
.inplaceeditable.inplaceeditingon select {
  margin-bottom: 0;
}
.inplaceeditable .quickediticon img {
  opacity: 0.2;
}
.inplaceeditable .quickeditlink {
  color: inherit;
  text-decoration: inherit;
}
.inplaceeditable:hover .quickeditlink .quickediticon img, .inplaceeditable .quickeditlink:focus .quickediticon img {
  opacity: 1;
}
.inplaceeditable.inplaceeditable-toggle .quickediticon {
  display: none;
}
.inplaceeditable.inplaceeditable-autocomplete {
  display: block;
}
h3.sectionname .inplaceeditable.inplaceeditingon .editinstructions {
  margin-top: -20px;
}
/** Chart area. */
.chart-area .chart-table-data {
  display: none;
}
.chart-area .chart-table {
  /** When accessible, we display the table only. */
}
.chart-area .chart-table .chart-output-htmltable caption {
  white-space: nowrap;
}
.chart-area .chart-table.accesshide .chart-table-expand {
  display: none;
}
.chart-area .chart-table.accesshide .chart-table-data {
  display: block;
}
ul {
  padding-left: 1rem;
  -webkit-margin-start: 0.2rem;
  /* stylelint-disable-line */
}
/* YUI 2 Tree View */
/*rtl:raw:
.ygtvtn,
.ygtvtm,
.ygtvtmh,
.ygtvtmhh,
.ygtvtp,
.ygtvtph,
.ygtvtphh,
.ygtvln,
.ygtvlm,
.ygtvlmh,
.ygtvlmhh,
.ygtvlp,
.ygtvlph,
.ygtvlphh,
.ygtvdepthcell,
.ygtvok,
.ygtvok:hover,
.ygtvcancel,
.ygtvcancel:hover {
    background-image: url(/theme/image.php?theme=classic&component=theme&image=yui2-treeview-sprite-rtl);
}
*/
.hover-tooltip-container {
  position: relative;
}
.hover-tooltip-container .hover-tooltip {
  opacity: 0;
  visibility: hidden;
  position: absolute;
  /*rtl:ignore*/
  left: 50%;
  top: calc(-50% - 5px);
  transform: translate(-50%, -50%);
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  box-sizing: border-box;
  padding: 5px;
  white-space: nowrap;
  transition: opacity 0.15s, visibility 0.15s;
  z-index: 1000;
}
.hover-tooltip-container .hover-tooltip:before {
  content: "";
  display: inline-block;
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  border-top: 8px solid rgba(0, 0, 0, 0.2);
  position: absolute;
  bottom: -8px;
  left: calc(50% - 8px);
}
.hover-tooltip-container .hover-tooltip:after {
  content: "";
  display: inline-block;
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-top: 7px solid #fff;
  position: absolute;
  bottom: -6px;
  left: calc(50% - 7px);
  z-index: 2;
}
.hover-tooltip-container:hover .hover-tooltip {
  opacity: 1;
  visibility: visible;
  transition: opacity 0.15s 0.5s, visibility 0.15s 0.5s;
}
#region-flat-nav {
  padding-right: 0;
  padding-left: 0;
}
#region-flat-nav .nav {
  margin-right: 15px;
  background-color: #fff;
}
@media (max-width: 767.98px) {
  #region-flat-nav .nav {
    margin-top: 30px;
    margin-right: 0;
  }
}
.footer-dark a {
  color: #fff;
  text-decoration: underline;
}
.footer-dark a .icon {
  color: #fff;
}
.footer-dark a:focus .icon {
  color: #1d2125;
}
.btn-footer-popover {
  display: none;
  position: fixed;
  bottom: 2rem;
  right: 2rem;
}
.popover.footer .popover-body {
  padding: 0;
}
.popover.footer .popover-body .footer-section a {
  color: #1d2125;
  text-decoration: underline;
}
.popover.footer .popover-body .footer-section a .icon {
  color: #1d2125;
}
.popover.footer .popover-body .footer-section a:focus {
  text-decoration: none;
}
@media (min-width: 576px) {
  .jsenabled #page-footer .footer-content-popover {
    display: none;
  }
  .jsenabled .btn-footer-popover {
    display: block;
    z-index: 1000;
  }
}
.bg-inverse a {
  color: #fff;
  text-decoration: underline;
}
.bg-inverse a .icon {
  color: #fff;
}
.sitelink img {
  width: 112px;
}
.dropdown-item a {
  display: block;
  width: 100%;
  color: #1d2125;
}
.dropdown-item:active, .dropdown-item:hover, .dropdown-item:focus, .dropdown-item:focus-within {
  outline: 0;
  background-color: #0f6cbf;
  color: #fff;
}
.dropdown-item:active a, .dropdown-item:hover a, .dropdown-item:focus a, .dropdown-item:focus-within a {
  color: #fff;
}
.dropdown-item[aria-current="true"] {
  position: relative;
  display: flex;
  align-items: center;
}
.dropdown-item[aria-current="true"]:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "";
  position: absolute;
  left: 0.4rem;
  font-size: 0.7rem;
}
.competency-tree ul {
  padding-left: 1.5rem;
}
.sr-only-focusable:active, .sr-only-focusable:focus {
  z-index: 1031;
  position: fixed;
  background: #fff;
  padding: 7px;
  left: 0;
  top: 0;
}
[data-drag-type="move"] {
  cursor: move;
  touch-action: none;
}
.clickable {
  cursor: pointer;
}
.overlay-icon-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.6);
}
.overlay-icon-container .loading-icon {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.overlay-icon-container .loading-icon .icon {
  height: 30px;
  width: 30px;
  font-size: 30px;
}
.w-auto {
  width: auto;
}
.bg-pulse-grey {
  animation: bg-pulse-grey 2s infinite linear;
}
@keyframes bg-pulse-grey {
  0% {
    background-color: #f8f9fa;
  }
  50% {
    background-color: #e9ecef;
  }
  100% {
    background-color: #f8f9fa;
  }
}
.line-height-0 {
  line-height: 0 !important;
  /* stylelint-disable-line declaration-no-important */
}
.line-height-1 {
  line-height: 0.25rem !important;
  /* stylelint-disable-line declaration-no-important */
}
.line-height-2 {
  line-height: 0.5rem !important;
  /* stylelint-disable-line declaration-no-important */
}
.line-height-3 {
  line-height: 1rem !important;
  /* stylelint-disable-line declaration-no-important */
}
.line-height-4 {
  line-height: 1.5rem !important;
  /* stylelint-disable-line declaration-no-important */
}
.line-height-5 {
  line-height: 2rem !important;
  /* stylelint-disable-line declaration-no-important */
}
.line-height-6 {
  line-height: 3rem !important;
  /* stylelint-disable-line declaration-no-important */
}
.dir-rtl .dir-rtl-hide {
  display: none;
}
.dir-ltr .dir-ltr-hide {
  display: none;
}
.paged-content-page-container {
  min-height: 3.125rem;
}
body.h5p-embed #page-content {
  display: inherit;
}
body.h5p-embed #maincontent {
  display: none;
}
body.h5p-embed .h5pmessages {
  min-height: 230px;
}
#h5pcontenttypes td {
  vertical-align: middle;
}
#page.drawers form#h5peditor, #page.drawers form#coolh5peditor, #page.drawers .core_contentbank_viewcontent {
  max-width: 960px;
  margin: 0 auto;
}
.text-decoration-none {
  text-decoration: none !important;
  /* stylelint-disable-line declaration-no-important */
}
.colour-inherit {
  color: inherit !important;
  /* stylelint-disable-line declaration-no-important */
}
.position-right {
  right: 0 !important;
  /* stylelint-disable-line declaration-no-important */
}
.overflow-hidden {
  overflow: hidden !important;
  /* stylelint-disable-line declaration-no-important */
}
.text-break {
  overflow-wrap: break-word !important;
  /* stylelint-disable-line declaration-no-important */
}
.word-break {
  word-break: break-word !important;
  /* stylelint-disable-line declaration-no-important */
}
.z-index-0 {
  z-index: 0 !important;
  /* stylelint-disable-line declaration-no-important */
}
.z-index-1 {
  z-index: 1 !important;
  /* stylelint-disable-line declaration-no-important */
}
.float-left {
  float: left !important;
  /* stylelint-disable-line declaration-no-important */
}
.float-right {
  float: right !important;
  /* stylelint-disable-line declaration-no-important */
}
.img-responsive {
  max-width: 100%;
  height: auto;
}
input[disabled] {
  cursor: not-allowed;
}
.custom-select {
  width: auto;
}
.fade.in {
  opacity: 1;
}
.clamp-2 {
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
  overflow: hidden;
}
.word-break-all {
  word-break: break-all;
}
.matchtext {
  background-color: #a2cff8;
  color: #1d2125;
  height: 1.5rem;
}
.border-radius {
  border-radius: 0.25rem;
}
.emoji-picker {
  width: 350px;
  height: 400px;
}
.emoji-picker .category-button {
  padding: 0.375rem 0;
  height: 100%;
  width: 38.8888888889px;
  border-top: none;
  border-left: none;
  border-right: none;
  border-bottom: 2px solid transparent;
}
.emoji-picker .category-button.selected {
  border-bottom: 2px solid #0f6cbf;
}
.emoji-picker .emojis-container, .emoji-picker .search-results-container {
  min-width: 280px;
}
.emoji-picker .picker-row {
  height: 40px;
}
.emoji-picker .picker-row .category-name {
  line-height: 40px;
}
.emoji-picker .picker-row .emoji-button {
  height: 40px;
  width: 40px;
  line-height: 40px;
  font-size: 24px;
  overflow: hidden;
}
.emoji-picker .picker-row .emoji-button:hover, .emoji-picker .picker-row .emoji-button:focus {
  color: inherit;
  text-decoration: none;
}
.emoji-picker .emoji-preview {
  height: 40px;
  font-size: 40px;
  line-height: 40px;
}
.emoji-picker .emoji-short-name {
  line-height: 20px;
}
@media (max-width: 575.98px) {
  .emoji-picker {
    width: 320px;
  }
}
.emoji-auto-complete {
  height: 40px;
}
.emoji-auto-complete .btn.btn-link.btn-icon.emoji-button {
  height: 40px;
  width: 40px;
  line-height: 40px;
  font-size: 24px;
}
.emoji-auto-complete .btn.btn-link.btn-icon.emoji-button.active {
  background-color: #e9ecef;
}
.toast-wrapper {
  max-width: 350px;
  max-height: 0;
  z-index: 1051;
}
.toast-wrapper > :first-child {
  margin-top: 1rem;
}
.alert-primary a {
  color: #041d34;
}
.alert-primary .close {
  color: #000305;
  opacity: 0.6;
}
.alert-secondary a {
  color: #525557;
}
.alert-secondary .close {
  color: #393b3d;
  opacity: 0.6;
}
.alert-success a, .environmenttable .ok a {
  color: #0c1b0b;
}
.alert-success .close, .environmenttable .ok .close {
  color: black;
  opacity: 0.6;
}
.alert-info a {
  color: #00171b;
}
.alert-info .close {
  color: black;
  opacity: 0.6;
}
.alert-warning a, .environmenttable .warn a {
  color: #573e1c;
}
.alert-warning .close, .environmenttable .warn .close {
  color: #302310;
  opacity: 0.6;
}
.alert-danger a, .environmenttable .error a {
  color: #3d0f0a;
}
.alert-danger .close, .environmenttable .error .close {
  color: #110403;
  opacity: 0.6;
}
.alert-light a {
  color: #686868;
}
.alert-light .close {
  color: #4e4e4f;
  opacity: 0.6;
}
.alert-dark a {
  color: #040505;
}
.alert-dark .close {
  color: black;
  opacity: 0.6;
}
.alert a {
  font-weight: 700;
}
.breadcrumb:empty {
  padding: 0;
}
@media (max-width: 767.98px) {
  #page-navbar {
    width: 100%;
  }
  .breadcrumb:not(:empty) {
    width: 100%;
    flex-wrap: nowrap;
    margin-bottom: 0.5rem;
  }
  .breadcrumb:not(:empty) .breadcrumb-item {
    padding-top: 0.3333333333rem;
    padding-bottom: 0.3333333333rem;
    display: inline-flex;
    overflow: hidden;
  }
  .breadcrumb:not(:empty) .breadcrumb-item a, .breadcrumb:not(:empty) .breadcrumb-item span {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .mform {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
  }
  .pagination {
    flex-wrap: wrap;
    justify-content: center;
  }
  .custom-select {
    max-width: 100%;
  }
  .card .card-body {
    padding: 0.625rem;
  }
  #page-header .card {
    border: 0;
  }
  #page-header .card .card-body {
    padding: 0;
  }
  .nav-tabs:not(.more-nav), .nav-pills {
    margin: 0;
    border: 0;
    padding: 0.125rem;
    background-color: #e9ecef;
  }
  .nav-tabs:not(.more-nav) .nav-item, .nav-pills .nav-item {
    flex: 1 1 auto;
    text-align: center;
  }
  .nav-tabs:not(.more-nav) .nav-link, .nav-pills .nav-link {
    background: #fff;
    border: 0;
    margin: 0.125rem;
  }
  .nav-tabs:not(.more-nav) .nav-link.active, .nav-pills .nav-link.active {
    color: #6a737b;
    border-color: #6a737b;
    border-color: #6a737b;
  }
  .nav-tabs:not(.more-nav) .nav-link.active:hover, .nav-pills .nav-link.active:hover {
    color: #fff;
    background-color: #6a737b;
    border-color: #6a737b;
  }
  .nav-tabs:not(.more-nav) .nav-link.active:focus, .nav-tabs:not(.more-nav) .nav-link.active.focus, .nav-pills .nav-link.active:focus, .nav-pills .nav-link.active.focus {
    box-shadow: 0 0 0 0.2rem rgba(106, 115, 123, 0.5);
  }
  .nav-tabs:not(.more-nav) .nav-link.active.disabled, .nav-tabs:not(.more-nav) .nav-link.active:disabled, .nav-pills .nav-link.active.disabled, .nav-pills .nav-link.active:disabled {
    color: #6a737b;
    background-color: transparent;
  }
  .nav-tabs:not(.more-nav) .nav-link.active:not(:disabled):not(.disabled):active, .nav-tabs:not(.more-nav) .nav-link.active:not(:disabled):not(.disabled).active, .show > .nav-tabs:not(.more-nav) .nav-link.active.dropdown-toggle, .nav-pills .nav-link.active:not(:disabled):not(.disabled):active, .nav-pills .nav-link.active:not(:disabled):not(.disabled).active, .show > .nav-pills .nav-link.active.dropdown-toggle {
    color: #fff;
    background-color: #6a737b;
    border-color: #6a737b;
  }
  .nav-tabs:not(.more-nav) .nav-link.active:not(:disabled):not(.disabled):active:focus, .nav-tabs:not(.more-nav) .nav-link.active:not(:disabled):not(.disabled).active:focus, .show > .nav-tabs:not(.more-nav) .nav-link.active.dropdown-toggle:focus, .nav-pills .nav-link.active:not(:disabled):not(.disabled):active:focus, .nav-pills .nav-link.active:not(:disabled):not(.disabled).active:focus, .show > .nav-pills .nav-link.active.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(106, 115, 123, 0.5);
  }
}
@media (max-width: 576px) and (max-height: 320px) {
  div#page {
    margin-top: 0;
  }
  .navbar.fixed-top {
    position: relative;
    z-index: inherit;
  }
}
.link-underline {
  text-decoration: underline;
}
.link-underline:focus {
  text-decoration: none;
}
.alert.cta .cta-icon .icon {
  padding: 0.3rem;
}
.alert.cta .cta-icon .icon.fa {
  border-radius: 50%;
  border-style: solid;
  border-width: 0.125rem;
}
.core_payment_gateways_modal .custom-control-label::before, .core_payment_gateways_modal .custom-control-label::after {
  top: 45%;
}
.visual-scroll-x {
  scrollbar-width: thin;
  scrollbar-color: #0f6cbf #a2cff8;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}
.visual-scroll-x::-webkit-scrollbar {
  height: 8px;
  -webkit-appearance: none;
  appearance: none;
}
.visual-scroll-x::-webkit-scrollbar-thumb {
  background-color: #0f6cbf;
  border-right: 1px solid #fff;
}
.visual-scroll-x::-webkit-scrollbar-track {
  background-color: #a2cff8;
  border-right: 1px solid #fff;
}
body.dragging .drop-zone {
  border: 1px dashed #1d2125;
}
body.dragging .drop-up {
  border-top: 1px solid #1d2125;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
body.dragging .drop-down {
  border-bottom: 1px solid #1d2125;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
body.dragging .dragging {
  opacity: 0.6;
}
.dragicon {
  visibility: hidden;
}
.draggable:hover .dragicon {
  visibility: visible;
  cursor: move;
}
.waitstate {
  display: none;
}
.stateready .waitstate {
  display: inherit;
}
.stateready .whilenostate {
  display: none;
}
.collapse-list .collapse-list-item {
  padding: 0.5rem 1rem;
}
.collapse-list .collapse-list-item:hover, .collapse-list .collapse-list-item:focus {
  background-color: #e0f0f2;
  border-color: #b8dce2;
}
.collapse-list .collapse-list-item-content .collapse-list-item {
  padding-left: calc(1rem * 3);
}
.drawers .block_myoverview {
  border: 0;
}
.drawers .block_myoverview > .card-body {
  padding-top: 0 !important;
  /* stylelint-disable-line declaration-no-important */
  padding-left: 0 !important;
  /* stylelint-disable-line declaration-no-important */
  padding-right: 0 !important;
  /* stylelint-disable-line declaration-no-important */
}
.dropdown-toggle::after {
  content: "";
  margin-right: 0;
  margin-left: 4px;
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 9px;
  width: 9px;
  border: 0;
}
.initialbargroups ul {
  -webkit-margin-start: 0;
  /* stylelint-disable-line */
  margin-right: -1px;
}
.initialbargroups .page-item:first-child .page-link {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.initialbargroups .pagination-lg:first-child .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}
.initialbargroups .pagination-sm:first-child .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}
.initialbargroups .page-item:last-child .page-link {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.initialbargroups .pagination-lg:last-child .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}
.initialbargroups .pagination-sm:last-child .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}
.icon {
  font-size: 16px;
  width: 16px;
  height: 16px;
  margin: 0;
  padding: 0;
  box-sizing: content-box;
  margin-right: 0.5rem;
}
.icon.spacer {
  margin-right: 0;
}
.icon.iconsize-big {
  width: 64px;
  height: 64px;
  font-size: 64px;
}
.navbar-dark a .icon {
  color: rgba(255, 255, 255, 0.5) !important;
  /* stylelint-disable-line declaration-no-important */
}
.action-menu-item a:first-of-type > .icon {
  margin-left: 0.5rem;
}
.ygtvcell .icon {
  margin-left: 0 !important;
  /* stylelint-disable-line declaration-no-important */
}
.block_navigation .tree_item .icon, .block_settings .tree_item .icon {
  margin-left: 0;
}
[data-action=toggle-drawer] .icon {
  margin: 0;
}
.icon-no-spacing a > .icon {
  margin: 0;
}
.icon-no-margin .icon {
  margin-left: 0;
  margin-right: 0;
  margin-top: 0;
  margin-bottom: 0;
}
.icon-large > .icon {
  width: 32px;
  height: 32px;
}
.icon-size-0 .icon {
  height: 0 !important;
  /* stylelint-disable-line declaration-no-important */
  width: 0 !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 0 !important;
  /* stylelint-disable-line declaration-no-important */
}
.icon-size-1 .icon {
  height: 4px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 4px !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 4px !important;
  /* stylelint-disable-line declaration-no-important */
}
.icon-size-2 .icon {
  height: 8px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 8px !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 8px !important;
  /* stylelint-disable-line declaration-no-important */
}
.icon-size-3 .icon {
  height: 16px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 16px !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 16px !important;
  /* stylelint-disable-line declaration-no-important */
}
.icon-size-4 .icon {
  height: 24px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 24px !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 24px !important;
  /* stylelint-disable-line declaration-no-important */
}
.icon-size-5 .icon {
  height: 32px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 32px !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 32px !important;
  /* stylelint-disable-line declaration-no-important */
}
.icon-size-6 .icon {
  height: 40px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 40px !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 40px !important;
  /* stylelint-disable-line declaration-no-important */
}
.icon-size-7 .icon {
  height: 48px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 48px !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 48px !important;
  /* stylelint-disable-line declaration-no-important */
}
.helplink .icon {
  margin-left: 0.5rem;
}
.icons-collapse-expand {
  display: flex;
  align-items: center;
}
.icons-collapse-expand .expanded-icon {
  display: flex;
  align-items: center;
}
.icons-collapse-expand .collapsed-icon {
  display: none;
}
.icons-collapse-expand.collapsed .expanded-icon {
  display: none;
}
.icons-collapse-expand.collapsed .collapsed-icon {
  display: flex;
  align-items: center;
}
.activityiconcontainer {
  width: 50px;
  height: 50px;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  background-color: #f8f9fa;
  border-radius: 4px;
  padding: 0.7rem;
}
.activityiconcontainer .activityicon, .activityiconcontainer .icon {
  margin: 0;
  height: 24px;
  width: 24px;
}
.activityiconcontainer.small {
  width: 40px;
  height: 40px;
}
.activityiconcontainer.administration {
  background-color: #5d63f6;
}
.activityiconcontainer.administration .activityicon, .activityiconcontainer.administration .icon {
  filter: brightness(0) invert(1);
}
.activityiconcontainer.assessment {
  background-color: #eb66a2;
}
.activityiconcontainer.assessment .activityicon, .activityiconcontainer.assessment .icon {
  filter: brightness(0) invert(1);
}
.activityiconcontainer.collaboration {
  background-color: #f7634d;
}
.activityiconcontainer.collaboration .activityicon, .activityiconcontainer.collaboration .icon {
  filter: brightness(0) invert(1);
}
.activityiconcontainer.communication {
  background-color: #11a676;
}
.activityiconcontainer.communication .activityicon, .activityiconcontainer.communication .icon {
  filter: brightness(0) invert(1);
}
.activityiconcontainer.content {
  background-color: #399be2;
}
.activityiconcontainer.content .activityicon, .activityiconcontainer.content .icon {
  filter: brightness(0) invert(1);
}
.activityiconcontainer.interface {
  background-color: #a378ff;
}
.activityiconcontainer.interface .activityicon, .activityiconcontainer.interface .icon {
  filter: brightness(0) invert(1);
}
:root {
  --activityadministration: #5d63f6;
  --activityassessment: #eb66a2;
  --activitycollaboration: #f7634d;
  --activitycommunication: #11a676;
  --activitycontent: #399be2;
  --activityinterface: #a378ff;
}
/* admin.less */
.formtable tbody th {
  font-weight: normal;
  text-align: right;
}
.path-admin #assignrole {
  width: 60%;
  margin-left: auto;
  margin-right: auto;
}
.path-admin .admintable .leftalign {
  text-align: left;
}
.path-admin .admintable.environmenttable .name, .path-admin .admintable.environmenttable .info, .path-admin #assignrole .admintable .role, .path-admin #assignrole .admintable .userrole, .path-admin #assignrole .admintable .roleholder {
  white-space: nowrap;
}
.path-admin .incompatibleblockstable td.c0 {
  font-weight: bold;
}
#page-admin-course-category .addcategory {
  padding: 10px;
}
#page-admin-course-index .editcourse {
  margin: 20px auto;
}
#page-admin-course-index .editcourse th, #page-admin-course-index .editcourse td {
  padding-left: 10px;
  padding-right: 10px;
}
.timewarninghidden {
  display: none;
}
#page-admin-report-capability-index #capabilitysearch {
  width: 30em;
}
#page-admin-qtypes #qtypes div, #page-admin-qtypes #qtypes form, #page-admin-qbehaviours #qbehaviours div, #page-admin-qbehaviours #qbehaviours form {
  display: inline;
}
#page-admin-qtypes #qtypes img.spacer, #page-admin-qbehaviours #qbehaviours img.spacer {
  width: 16px;
}
#page-admin-qbehaviours .cell.c3, #page-admin-qtypes .cell.c3 {
  font-size: 0.8203125rem;
}
#page-admin-lang .generalbox, #page-admin-course-index .singlebutton, #page-admin-course-index .addcategory, #page-course-index .buttons, #page-course-index-category .buttons, #page-admin-course-category .addcategory, #page-admin-stickyblocks .generalbox, #page-admin-maintenance .buttons, #page-admin-course-index .buttons, #page-admin-course-category .buttons, #page-admin-index .copyright, #page-admin-index .copyrightnotice, #page-admin-index .adminerror .singlebutton, #page-admin-index .adminwarning .singlebutton, #page-admin-index #layout-table .singlebutton {
  text-align: center;
  margin-bottom: 1em;
}
.path-admin-roles .capabilitysearchui {
  text-align: left;
  margin-left: auto;
  margin-right: auto;
  margin-top: 1rem;
}
#page-admin-roles-define .topfields {
  margin: 1em 0 2em;
}
#page-admin-roles-define .capdefault {
  background-color: rgba(0, 0, 0, 0.075);
}
#page-filter-manage .backlink, .path-admin-roles .backlink {
  margin-top: 1em;
}
#page-admin-roles-explain #chooseuser h3, #page-admin-roles-usersroles .contextname {
  margin-top: 0;
}
#page-admin-roles-explain #chooseusersubmit {
  margin-top: 0;
  text-align: center;
}
#page-admin-roles-usersroles p {
  margin: 0;
}
#page-admin-roles-override .cell.c1, #page-admin-roles-assign .cell.c3, #page-admin-roles-assign .cell.c1 {
  padding-top: 0.75em;
}
#page-admin-roles-override .overridenotice, #page-admin-roles-define .definenotice {
  margin: 1em 10% 2em 10%;
  text-align: left;
}
#page-admin-index .adminwarning.availableupdatesinfo .moodleupdateinfo span {
  display: block;
}
#page-admin-index .updateplugin div {
  margin-bottom: 0.5em;
}
#page-admin-user-user_bulk #users .fgroup {
  white-space: nowrap;
}
#page-admin-report-stats-index .graph {
  text-align: center;
  margin-bottom: 1em;
}
#page-admin-report-courseoverview-index .graph {
  text-align: center;
  margin-bottom: 1em;
}
#page-admin-lang .translator {
  border-width: 1px;
  border-style: solid;
}
.path-admin .roleassigntable {
  width: 100%;
}
.path-admin .roleassigntable td {
  vertical-align: top;
  padding: 0.2em 0.3em;
}
.path-admin .roleassigntable p {
  text-align: left;
  margin: 0.2em 0;
}
.path-admin .roleassigntable #existingcell, .path-admin .roleassigntable #potentialcell {
  width: 42%;
}
.path-admin .roleassigntable #existingcell p > label:first-child, .path-admin .roleassigntable #potentialcell p > label:first-child {
  font-weight: bold;
}
.path-admin .roleassigntable #buttonscell {
  width: 16%;
}
.path-admin .roleassigntable #buttonscell #assignoptions {
  font-size: 0.8203125rem;
}
.path-admin .roleassigntable #removeselect_wrapper, .path-admin .roleassigntable #addselect_wrapper {
  width: 100%;
}
.path-admin table.rolecap tr.rolecap th {
  text-align: left;
  font-weight: normal;
}
.path-admin .rolecap .hiddenrow {
  display: none;
}
.path-admin #defineroletable .rolecap .inherit, .path-admin #defineroletable .rolecap .allow, .path-admin #defineroletable .rolecap .prevent, .path-admin #defineroletable .rolecap .prohibit {
  text-align: center;
  padding: 0;
  min-width: 3.5em;
}
.path-admin .rolecap .cap-name, .path-admin .rolecap .note {
  display: block;
  font-size: 0.8203125rem;
  white-space: nowrap;
  font-weight: normal;
}
.path-admin .rolecap label {
  display: block;
  text-align: center;
  padding: 0.5em;
  margin: 0;
}
.path-admin .header-maxwidth, .path-admin .secondary-navigation, .format-site .header-maxwidth, .format-site .secondary-navigation {
  max-width: none;
}
.path-admin.path-admin-roles:not(.format-site) .header-maxwidth, .path-admin.path-admin-roles:not(.format-site) .secondary-navigation, .path-admin.path-admin-tool-lp .header-maxwidth, .path-admin.path-admin-tool-lp .secondary-navigation {
  max-width: 830px;
}
.plugincheckwrapper {
  width: 100%;
}
.environmentbox {
  margin-top: 1em;
}
#mnetconfig table {
  margin-left: auto;
  margin-right: auto;
}
.environmenttable .cell {
  padding: 0.15em 0.5em;
}
#trustedhosts .generaltable {
  margin-left: auto;
  margin-right: auto;
  width: 500px;
}
#trustedhosts .standard {
  width: auto;
}
#adminsettings legend {
  display: none;
}
#adminsettings fieldset.error {
  margin: 0.2em 0 0.5em 0;
}
#adminsettings fieldset.error legend {
  display: block;
}
#admin-spelllanguagelist textarea, #page-admin-setting-editorsettingstinymce .form-textarea textarea {
  /* rtl:ignore */
  text-align: left;
  /* rtl:ignore */
  direction: ltr;
}
/* Styles for flags on admin settings */
.adminsettingsflags {
  float: right;
}
.adminsettingsflags label {
  margin-right: 7px;
}
.form-description pre, .formsettingheading pre {
  /*rtl:ignore*/
  direction: ltr;
}
.form-item .form-setting .form-htmlarea {
  display: inline;
}
.form-item .form-setting .form-htmlarea .htmlarea {
  width: 640px;
  display: block;
}
.form-item .form-setting .form-multicheckbox ul {
  list-style: none;
  padding: 0;
  margin: 7px 0 0 0;
}
.form-item .form-setting .defaultsnext {
  display: inline;
}
.form-item .form-setting .locked-checkbox {
  margin-right: 0.2em;
  margin-left: 0.5em;
  display: inline;
}
.form-item .form-setting .form-password .unmask, .form-item .form-setting .form-defaultinfo {
  display: inline-block;
}
.form-item .form-setting .form-defaultinfo {
  max-width: 100%;
  word-wrap: break-word;
}
#admin-emoticons td input {
  width: 8em;
}
#admin-emoticons td.c0 input {
  width: 4em;
}
#adminthemeselector .selectedtheme td.c0 {
  border: 1px solid #b8dce2;
  border-right-width: 0;
}
#adminthemeselector .selectedtheme td.c1 {
  border: 1px solid #b8dce2;
  border-left-width: 0;
}
.admin_colourpicker, .admin_colourpicker_preview {
  display: none;
}
.jsenabled .admin_colourpicker_preview {
  display: inline;
}
@media (min-width: 768px) {
  .jsenabled .admin_colourpicker {
    display: block;
    height: 102px;
    width: 410px;
    margin-bottom: 10px;
    box-sizing: content-box;
  }
  .admin_colourpicker .colourdialogue {
    float: left;
    border: 1px solid #8f959e;
  }
  .admin_colourpicker .previewcolour {
    border: 1px solid #8f959e;
    margin-left: 301px;
  }
  .admin_colourpicker .currentcolour {
    border: 1px solid #8f959e;
    margin-left: 301px;
    border-top-width: 0;
  }
}
@media (max-width: 767.98px) {
  .jsenabled .admin_colourpicker {
    height: 150px;
    margin-bottom: 10px;
    display: block;
    position: relative;
  }
  .admin_colourpicker .previewcolour {
    display: none;
  }
  .admin_colourpicker .currentcolour {
    position: absolute;
    border: 1px solid #dee2e6;
    top: 100px;
    left: 0;
  }
}
.admin_colourpicker .loadingicon {
  vertical-align: middle;
  margin-left: auto;
}
#page-admin-index #notice .checkforupdates {
  text-align: center;
}
#page-admin-plugins #plugins-overview-panel .info {
  display: inline-block;
  margin-right: 1em;
}
#page-admin-plugins .checkforupdates {
  margin: 10px 0;
}
#page-admin-plugins .checkforupdates .singlebutton {
  margin: 5px 0;
  padding: 0;
}
#page-admin-plugins .checkforupdates .singlebutton div, #page-admin-plugins .checkforupdates .singlebutton input {
  margin: 0 3px 0 0;
}
#page-admin-plugins .updateavailableinstallall {
  margin: 5px 0;
  padding: 0;
}
#page-admin-plugins .updateavailableinstallall div, #page-admin-plugins .updateavailableinstallall input {
  margin: 0 3px 5px 0;
}
#page-admin-plugins #plugins-control-panel .status-missing td {
  background-color: #fcefdc;
}
#page-admin-plugins #plugins-control-panel .pluginname .componentname {
  font-size: 0.8203125rem;
  color: #6a737b;
  margin-left: 22px;
}
#page-admin-plugins #plugins-control-panel .version .versionnumber {
  font-size: 0.8203125rem;
  color: #6a737b;
}
#page-admin-plugins #plugins-control-panel .uninstall a {
  color: #ca3120;
}
#page-admin-plugins #plugins-control-panel .notes .label {
  margin-right: 3px;
}
#page-admin-plugins #plugins-control-panel .notes .requiredby {
  font-size: 0.8203125rem;
  color: #6a737b;
}
#plugins-check-page #plugins-check .status-missing td, #plugins-check-page #plugins-check .status-downgrade td {
  background-color: #f4d6d2;
}
#plugins-check-page .pluginupdateinfo, #plugins-control-panel .pluginupdateinfo {
  background-color: #cce6ea;
  padding: 5px;
  margin: 10px 0;
  border-radius: 5px;
}
#plugins-check-page .pluginupdateinfo.maturity50, #plugins-control-panel .pluginupdateinfo.maturity50 {
  background-color: #f4d6d2;
}
#plugins-check-page .pluginupdateinfo.maturity100, #plugins-check-page .pluginupdateinfo.maturity150, #plugins-control-panel .pluginupdateinfo.maturity100, #plugins-control-panel .pluginupdateinfo.maturity150 {
  background-color: #fcefdc;
}
#plugins-check-page .pluginupdateinfo .info, #plugins-control-panel .pluginupdateinfo .info {
  display: inline-block;
}
#plugins-check-page .pluginupdateinfo .separator:after, #plugins-control-panel .pluginupdateinfo .separator:after {
  content: " | ";
}
#plugins-check-page .pluginupdateinfo .singlebutton, #plugins-control-panel .pluginupdateinfo .singlebutton {
  margin: 5px 0;
  padding: 0;
}
#plugins-check-page .pluginupdateinfo .singlebutton div, #plugins-check-page .pluginupdateinfo .singlebutton input, #plugins-control-panel .pluginupdateinfo .singlebutton div, #plugins-control-panel .pluginupdateinfo .singlebutton input {
  margin: 0 3px 0 0;
}
.plugins-management-confirm-buttons > div {
  display: inline-block;
  margin: 1em 1em 1em 0;
}
.plugins-management-confirm-buttons .continue {
  padding: 0;
}
.plugins-management-confirm-buttons .continue div, .plugins-management-confirm-buttons .continue input {
  margin: 0;
}
#page-admin-index .upgradepluginsinfo {
  text-align: center;
}
#page-admin-index .adminwarning.availableupdatesinfo .moodleupdateinfo .separator:after {
  content: " | ";
}
/** MNet networking */
#page-admin-mnet-peers .box.deletedhosts {
  margin-bottom: 1em;
  font-size: 0.8203125rem;
}
#core-cache-plugin-summaries table, #core-cache-store-summaries table {
  width: 100%;
}
#core-cache-lock-summary table, #core-cache-definition-summaries table, #core-cache-mode-mappings table {
  margin: 0 auto;
}
#core-cache-store-summaries .default-store td {
  font-style: italic;
}
#core-cache-rescan-definitions, #core-cache-mode-mappings .edit-link, #core-cache-lock-additional-actions .new-instance {
  margin-top: 0.5em;
  text-align: center;
}
.maintenancewarning {
  position: fixed;
  bottom: 0;
  right: 0;
  overflow: hidden;
  z-index: 1000;
}
.modal.modal-in-page {
  z-index: 0;
}
#page-admin-search .adminpagetitle {
  margin-bottom: 0;
  border-bottom: none;
}
#page-admin-search .adminpagepath {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0 0 1.5rem 0;
}
#page-admin-search .adminpagepath li + li:before {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
  content: "/";
}
@media (min-width: 576px) {
  #page-admin-search .container {
    overflow-wrap: break-word;
  }
}
#page-admin-tasklogs .task-class {
  font-size: 0.8203125rem;
  color: #6a737b;
}
.path-admin-tool-uploaduser .uuwarning {
  background-color: #fcefdc;
}
.path-admin-tool-uploaduser .uuerror {
  background-color: #f4d6d2;
}
.path-admin-tool-uploaduser .uuinfo {
  background-color: #d7e4d6;
}
.blockmovetarget .accesshide {
  position: relative;
  left: initial;
}
.block:target {
  padding-top: 0 !important;
  /* stylelint-disable declaration-no-important */
  margin-top: 0 !important;
}
.block_search_forums .searchform {
  /* Override plugin's default. */
  text-align: left;
}
.block.block_navigation .block_tree ul, .block_settings .block_tree ul {
  margin-left: 0;
}
.block .block-controls .dropdown-toggle {
  /* So that the caret takes the colour of the icon. */
  color: #1d2125;
}
[data-region="blocks-column"] {
  width: 360px;
  float: right;
}
/* We put an absolutely positioned div in a relatively positioned div so it takes up no space */
@media (min-width: 576px) {
  #region-main-settings-menu {
    position: relative;
    float: left;
    width: 100%;
  }
  #region-main-settings-menu > div {
    position: absolute;
    right: 0;
    z-index: 100;
    margin: 1rem;
  }
  .region_main_settings_menu_proxy {
    width: 4rem;
    height: 2rem;
    background-color: #fff;
    margin-left: 0.625rem;
    margin-bottom: 0.625rem;
    border-bottom-left-radius: 0.5rem;
    float: right;
  }
}
@media (max-width: 767.98px) {
  #region-main-settings-menu .menubar {
    justify-content: flex-end;
  }
}
#region-main.has-blocks {
  display: inline-block;
  width: calc(100% - 375px);
}
@media (max-width: 1199.98px) {
  #region-main.has-blocks {
    width: 100%;
    /* MDL-63102 - Remove extra space at bottom.
        If modifying make sure block-region is horizontally stacked when in full screen */
    display: block;
  }
}
.header-action #region-main-settings-menu {
  position: unset;
  float: none;
  width: auto;
}
.header-action #region-main-settings-menu > div {
  position: unset;
  right: auto;
  margin: 0;
}
@media (max-width: 1199.98px) {
  [data-region="blocks-column"] {
    width: 100%;
  }
}
.block .empty-placeholder-image-lg {
  height: 5rem;
}
.block .searchbar .icon {
  margin-right: 0;
}
.block .block-cards .course-info-container {
  padding: 0.8rem;
}
.block .block-cards .progress {
  height: 0.5rem;
}
.block .block-cards .course-summaryitem {
  border: 1px solid #dee2e6;
  background-color: #fff;
}
.block .block-cards .icon {
  margin-right: 0;
}
.block .block-cards .card .coursemenubtn {
  margin-top: -0.5rem;
}
.block .block-cards span.categoryname, .block .block-cards .btn-link {
  color: #1d2125;
}
.block .block-cards .progress-text {
  color: #6a737b;
}
.block .block-cards .dashboard-card-footer.menu {
  opacity: 0;
}
.block .block-cards .dashboard-card:hover .dashboard-card-footer.menu, .block .block-cards .dashboard-card:focus .dashboard-card-footer.menu {
  opacity: 1;
}
.block .block-cards .multiline {
  white-space: normal;
}
.block .block-cards .btn.btn-link.btn-icon {
  height: 36px;
  width: 36px;
  padding: 0;
  border-radius: 50%;
}
.block .block-cards .btn.btn-link.btn-icon:hover, .block .block-cards .btn.btn-link.btn-icon:focus {
  background-color: #e9ecef;
}
.dashboard-card-deck.one-row {
  flex-flow: nowrap;
  overflow-x: scroll;
}
.summaryimage {
  height: 5rem;
  width: 5rem;
  background-position: center;
  background-size: cover;
}
.dashboard-list-img {
  height: 5rem;
  width: 20rem;
  background-position: center;
  background-size: cover;
}
@media (max-width: 1199.98px) {
  .dashboard-list-img {
    width: 100%;
  }
}
.course-listitem .menu {
  opacity: 0;
}
.course-listitem:hover .menu, .course-listitem:focus .menu {
  opacity: 1;
}
.dashboard-card-deck .dashboard-card {
  margin-bottom: 0.5rem;
  flex-basis: auto;
  width: 100%;
  flex-grow: 0;
  flex-shrink: 0;
}
.dashboard-card-deck .dashboard-card .dashboard-card-img {
  height: 7rem;
  background-position: center;
  background-size: cover;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.dashboard-card-deck .dashboard-card .dashboard-card-footer {
  padding: 0.8rem;
}
@media (min-width: 576px) {
  .dashboard-card-deck.fixed-width-cards .dashboard-card {
    width: 300px;
    max-width: 100%;
  }
}
@media (min-width: 576px) {
  .dashboard-card-deck:not(.fixed-width-cards) .dashboard-card {
    width: calc(50% - 0.5rem);
  }
}
@media (min-width: 840px) {
  .dashboard-card-deck:not(.fixed-width-cards) .dashboard-card {
    width: calc(33.33% - 0.5rem);
  }
}
#block-region-side-pre .dashboard-card-deck:not(.fixed-width-cards) {
  margin-left: 0;
  margin-right: 0;
}
#block-region-side-pre .dashboard-card-deck:not(.fixed-width-cards) .dashboard-card {
  width: calc(100% - 0.5rem) !important;
}
.block_recentlyaccessedcourses .paging-bar-container {
  margin-top: -2.4rem;
  padding-right: 0.5rem;
  justify-content: flex-end;
}
@media (max-width: 575.98px) {
  .block_recentlyaccessedcourses .paging-bar-container {
    margin-top: 0;
  }
}
#block-region-side-pre .block_recentlyaccessedcourses .paging-bar-container {
  margin-top: 0;
}
.block_recentlyaccesseditems .activityiconcontainer {
  width: 40px;
  height: 40px;
}
aside[id^="block-region-side-"] .block_recentlyaccesseditems .dashboard-card-deck.one-row {
  flex-flow: wrap;
  overflow-x: hidden;
}
aside[id^="block-region-side-"] .block_recentlyaccesseditems .dashboard-card-deck .card:nth-of-type(n+4) {
  display: none;
}
#block-region-content .block_recentlyaccesseditems [data-region="more-items-button-container"] {
  display: none;
}
.block_myoverview .content {
  min-height: 19.35rem;
}
.block_myoverview .paged-content-page-container {
  min-height: 13rem;
}
.block_timeline .paged-content-page-container {
  background-color: #fff;
}
.block_timeline .event-action {
  padding-left: 5.55em;
}
.block_settings .block_tree [aria-expanded="true"], .block_settings .block_tree [aria-expanded="true"].emptybranch, .block_settings .block_tree [aria-expanded="false"], .block_navigation .block_tree [aria-expanded="true"], .block_navigation .block_tree [aria-expanded="true"].emptybranch, .block_navigation .block_tree [aria-expanded="false"] {
  background-image: none;
}
.block_settings .block_tree [aria-expanded="true"] > p:before, .block_navigation .block_tree [aria-expanded="true"] > p:before {
  content: "";
  margin-right: 0;
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 16px;
  width: 16px;
}
.block_settings .block_tree [aria-expanded="false"] > p:before, .block_navigation .block_tree [aria-expanded="false"] > p:before {
  content: "";
  margin-right: 0;
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 16px;
  width: 16px;
}
.dir-rtl .block_settings .block_tree [aria-expanded="false"] > p:before, .dir-rtl .block_navigation .block_tree [aria-expanded="false"] > p:before {
  content: "";
}
.block_navigation .block_tree p.hasicon, .block_settings .block_tree p.hasicon {
  text-indent: -3px;
}
.block_navigation .block_tree p.hasicon .icon, .block_settings .block_tree p.hasicon .icon {
  margin-right: 2px;
}
.block.invisibleblock .card-title {
  color: #6a737b;
}
@media (max-width: 767.98px) {
  .block.card {
    border-left: 0;
    border-right: 0;
  }
}
.block_social_activities li a.movehere, .block_site_main_menu li a.movehere {
  display: block;
  width: 100%;
  height: 2rem;
  border: 2px dashed #343a40;
  margin: 4px 0;
}
.pagelayout-embedded .has-fake-blocks {
  padding: 1rem;
  display: flex;
}
.pagelayout-embedded .has-fake-blocks .embedded-main {
  order: 0;
  width: calc(100% - 360px);
  margin-right: 1rem;
}
.pagelayout-embedded .embedded-blocks {
  order: 1;
  width: 360px;
}
@media (max-width: 767.98px) {
  .pagelayout-embedded .has-fake-blocks {
    display: block;
  }
  .pagelayout-embedded .has-fake-blocks .embedded-main {
    width: 100%;
  }
  .pagelayout-embedded .embedded-blocks {
    width: 100%;
  }
}
/* calendar.less */
.calendar_event_category {
  background-color: #e0cbe0;
}
.calendar_event_category .commands a {
  color: #0d5ca1;
}
.calendar_event_course {
  background-color: #ffd3bd;
}
.calendar_event_course .commands a {
  color: #0d5ca1;
}
.calendar_event_site {
  background-color: #d6f8cd;
}
.calendar_event_site .commands a {
  color: #0d5ca1;
}
.calendar_event_group {
  background-color: #fee7ae;
}
.calendar_event_group .commands a {
  color: #0d5ca1;
}
.calendar_event_user {
  background-color: #dce7ec;
}
.calendar_event_user .commands a {
  color: #0d5ca1;
}
.calendar_event_other {
  background-color: #ced4da;
}
.calendar_event_other .commands a {
  color: #0d5ca1;
}
.calendartable {
  width: 100%;
  table-layout: fixed;
}
.calendartable th, .calendartable td {
  width: 14%;
  vertical-align: top;
  text-align: center;
  border: 0;
}
.calendar-controls .previous, .calendar-controls .next, .calendar-controls .current {
  display: block;
  float: left;
  width: 12%;
}
.calendar-controls .previous {
  text-align: left;
  border: 1px solid transparent;
  width: 25%;
}
.calendar-controls .current {
  text-align: center;
  width: 50%;
}
.calendar-controls .next {
  text-align: right;
  border: 1px solid transparent;
  width: 25%;
}
.calendar-controls .drop-target {
  box-sizing: border-box;
  border: 1px dashed #0f6cbf;
}
.filters table {
  border-collapse: separate;
  border-spacing: 2px;
  width: 100%;
}
#region-main .maincalendar .calendarwrapper td > div {
  height: 11.5em;
  overflow: hidden;
}
.maincalendar {
  vertical-align: top;
  padding: 0;
}
.maincalendar .bottom {
  text-align: left;
  width: 98%;
  margin: 10px auto;
}
.maincalendar .bottom span.footer-link:after {
  content: "•";
  color: #0f6cbf;
}
.maincalendar .bottom span.footer-link:last-child:after {
  content: none;
}
.maincalendar .heightcontainer {
  height: 100%;
  position: relative;
}
.maincalendar .calendarmonth {
  width: 98%;
  margin: 10px auto;
}
.maincalendar .calendarmonth ul {
  margin: 0;
  padding: 0;
}
.maincalendar .calendarmonth ul li[data-event-folded="true"] {
  display: none;
}
.maincalendar .calendarmonth ul li {
  list-style-type: none;
  line-height: 1.2em;
}
.maincalendar .calendarmonth ul li > a {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  max-width: 100%;
  display: inline-block;
}
.maincalendar .calendarmonth ul li > a:hover {
  text-decoration: none;
}
.maincalendar .calendarmonth ul li > a:hover .eventname {
  text-decoration: underline;
}
.maincalendar .calendarmonth ul li a[data-action="view-day-link"] {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.maincalendar .calendarmonth ul li .icon {
  margin-left: 0.25em;
  margin-right: 0.25em;
  vertical-align: initial;
}
.maincalendar .calendarmonth ul li .calendar-circle {
  width: 12px;
  height: 12px;
  border-radius: 6px;
  vertical-align: middle;
  display: inline-block;
}
.maincalendar .calendarmonth ul li .calendar-circle.calendar_event_category {
  background-color: #e0cbe0;
  border: 2px solid #9e619f;
}
.maincalendar .calendarmonth ul li .calendar-circle.calendar_event_course {
  background-color: #ffd3bd;
  border: 2px solid #d34600;
}
.maincalendar .calendarmonth ul li .calendar-circle.calendar_event_site {
  background-color: #d6f8cd;
  border: 2px solid #2b8713;
}
.maincalendar .calendarmonth ul li .calendar-circle.calendar_event_group {
  background-color: #fee7ae;
  border: 2px solid #9a6e02;
}
.maincalendar .calendarmonth ul li .calendar-circle.calendar_event_user {
  background-color: #dce7ec;
  border: 2px solid #4e7c91;
}
.maincalendar .calendarmonth ul li .calendar-circle.calendar_event_other {
  background-color: #ced4da;
  border: 2px solid #687889;
}
.maincalendar .calendarmonth th {
  text-align: left;
  padding-left: 16px;
}
.maincalendar .calendarmonth td a.day:focus {
  display: inline-block;
  border-radius: 50%;
  box-shadow: 0 0 0 0.2rem rgba(15, 108, 191, 0.75);
}
.maincalendar .calendarmonth td .day-number-circle {
  display: inline-block;
  line-height: 0;
  width: 30px;
  height: 30px;
}
.maincalendar .calendarmonth td .day-number-circle .day-number {
  display: inline-block;
  padding: 50% 4px;
  width: 100%;
  text-align: center;
}
.maincalendar .calendarmonth td.today .day-number-circle {
  border-radius: 50%;
  color: #fff;
  background-color: #0f6cbf;
}
.maincalendar .calendarmonth .clickable:hover {
  background-color: #ededed;
}
.maincalendar .controls {
  width: 98%;
  margin: 10px auto;
}
.maincalendar .calendar_event_category:hover a, .maincalendar .calendar_event_course:hover a, .maincalendar .calendar_event_site:hover a, .maincalendar .calendar_event_group:hover a, .maincalendar .calendar_event_user:hover a {
  color: #094478;
  text-decoration: underline;
}
.maincalendar .calendar_event_category {
  border-color: #e0cbe0;
}
.maincalendar .calendar_event_course {
  border-color: #ffd3bd;
}
.maincalendar .calendar_event_site {
  border-color: #d6f8cd;
}
.maincalendar .calendar_event_group {
  border-color: #fee7ae;
}
.maincalendar .calendar_event_user {
  border-color: #dce7ec;
}
.maincalendar .calendar_event_other {
  border-color: #ced4da;
}
.maincalendar .calendartable td, .maincalendar .calendartable li {
  padding: 4px;
}
.maincalendar .calendartable li {
  text-align: left;
}
.maincalendar .header {
  overflow: hidden;
}
.maincalendar .header .buttons {
  float: right;
}
.maincalendar .event .card-header img {
  vertical-align: baseline;
}
.maincalendar .event .location {
  word-break: break-all;
  overflow-wrap: break-word;
}
.maincalendar table#subscription_details_table td {
  vertical-align: middle;
}
.maincalendar table#subscription_details_table td > .btn-group button {
  padding-left: 0;
}
#page-calendar-export .indent {
  padding-left: 20px;
}
.block .bottom {
  width: 98%;
  margin: 10px auto;
}
.block .bottom span.footer-link:after {
  content: "•";
  color: #0f6cbf;
}
.block .bottom span.footer-link:last-child:after {
  content: none;
}
.block .minicalendar {
  max-width: 280px;
  margin: 0 auto;
  width: 100%;
}
.block .minicalendar th, .block .minicalendar td {
  padding: 2px;
  font-size: 0.8em;
  text-align: center;
}
.block .minicalendar td.weekend {
  color: #6a737b;
}
.block .minicalendar td a {
  width: 100%;
  height: 100%;
  display: block;
  color: #0d5ca1;
}
.block .minicalendar td.duration_global {
  border-top: 1px solid #d6f8cd;
  border-bottom: 1px solid #d6f8cd;
}
.block .minicalendar td.duration_global.duration_finish {
  background-color: #d6f8cd;
}
.block .minicalendar td.duration_category {
  border-top: 1px solid #e0cbe0;
  border-bottom: 1px solid #e0cbe0;
}
.block .minicalendar td.duration_category.duration_finish {
  background-color: #e0cbe0;
}
.block .minicalendar td.duration_course {
  border-top: 1px solid #ffd3bd;
  border-bottom: 1px solid #ffd3bd;
}
.block .minicalendar td.duration_course.duration_finish {
  background-color: #ffd3bd;
}
.block .minicalendar td.duration_group {
  border-top: 1px solid #fee7ae;
  border-bottom: 1px solid #fee7ae;
}
.block .minicalendar td.duration_group.duration_finish {
  background-color: #fee7ae;
}
.block .minicalendar td.duration_user {
  border-top: 1px solid #dce7ec;
  border-bottom: 1px solid #dce7ec;
}
.block .minicalendar td.duration_user.duration_finish {
  background-color: #dce7ec;
}
.block .minicalendar td.duration_other {
  border-top: 1px solid #ced4da;
  border-bottom: 1px solid #ced4da;
}
.block .minicalendar td.duration_other.duration_finish {
  background-color: #ced4da;
}
.block .minicalendar caption {
  font-size: inherit;
  font-weight: inherit;
  line-height: inherit;
  text-align: center;
}
.block .calendar_filters ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
.block .calendar_filters li {
  margin-bottom: 0.2em;
}
.block .calendar_filters li span.calendar_event_category i {
  color: #0d5ca1;
}
.block .calendar_filters li span.calendar_event_course i {
  color: #0d5ca1;
}
.block .calendar_filters li span.calendar_event_site i {
  color: #0d5ca1;
}
.block .calendar_filters li span.calendar_event_group i {
  color: #0d5ca1;
}
.block .calendar_filters li span.calendar_event_user i {
  color: #0d5ca1;
}
.block .calendar_filters li span.calendar_event_other i {
  color: #0d5ca1;
}
.block .calendar_filters li span img {
  padding: 0 0.2em;
  margin: 0;
}
.block .calendar_filters li .icon {
  vertical-align: initial;
  margin: 0 0.1rem 0 0.4rem;
}
.block .calendar_filters li > a:hover {
  text-decoration: none;
}
.block .calendar_filters li > a:hover .eventname {
  text-decoration: underline;
}
.block .content h3.eventskey {
  margin-top: 0.5em;
}
.path-course-view .block.block_calendar_month .maincalendar div.header {
  visibility: hidden;
  height: 0;
}
.path-course-view .block.block_calendar_month .maincalendar .calendarwrapper .arrow_text {
  display: none;
}
.path-course-view .block.block_calendar_month .footer .bottom .footer-link {
  display: block;
}
.path-course-view .block.block_calendar_month .footer .bottom .footer-link:after {
  content: none;
}
/* Display month name above the calendar */
table.calendartable caption {
  caption-side: top;
}
@media (min-width: 768px) {
  #page-calender-view .container-fluid, #page-calender-view .container-sm, #page-calender-view .container-md, #page-calender-view .container-lg, #page-calender-view .container-xl {
    min-width: 1024px;
  }
}
@media (min-width: 768px) {
  section:not(#region-main) .block.block_calendar_month .maincalendar div.header {
    visibility: hidden;
    height: 0;
  }
  section:not(#region-main) .block.block_calendar_month .maincalendar .calendarwrapper .current {
    width: 40%;
    font-size: inherit;
    line-height: inherit;
  }
  section:not(#region-main) .block.block_calendar_month .maincalendar .calendarwrapper .previous, section:not(#region-main) .block.block_calendar_month .maincalendar .calendarwrapper .next {
    width: 30%;
    font-size: 0.8em;
  }
  section:not(#region-main) .block.block_calendar_month .maincalendar .calendartable.calendarmonth th, section:not(#region-main) .block.block_calendar_month .maincalendar .calendartable.calendarmonth td {
    border: none;
    text-align: center !important;
    padding: 0;
  }
  section:not(#region-main) .block.block_calendar_month .maincalendar .calendartable.calendarmonth td {
    height: auto;
    font-size: 0.8em;
  }
  section:not(#region-main) .block.block_calendar_month .maincalendar .calendartable.calendarmonth td.hasevent [data-region="day-content"] {
    display: none;
  }
  section:not(#region-main) .block.block_calendar_month .maincalendar .calendartable.calendarmonth td.hasevent .day-number {
    display: inline-block;
    position: relative;
  }
  section:not(#region-main) .block.block_calendar_month .maincalendar .calendartable.calendarmonth td.hasevent .day-number:before {
    content: ".";
    display: inline-block;
    position: absolute;
    bottom: 0.4em;
    left: 0;
    text-align: center;
    width: 100%;
    font-size: 3em;
    color: inherit;
  }
  section:not(#region-main) .block.block_calendar_month .maincalendar .calendartable.calendarmonth td:after {
    content: "";
    display: block;
    margin-top: calc(100% - 26px);
  }
  section:not(#region-main) .block.block_calendar_month .maincalendar .calendartable.calendarmonth td.clickable:hover {
    background-color: inherit;
  }
  section:not(#region-main) .block.block_calendar_month .maincalendar .calendartable.calendarmonth td.clickable:not(.today):hover .day-number-circle {
    border-radius: 50%;
    background-color: #ededed;
  }
  section:not(#region-main) .block.block_calendar_month .bottom {
    border-top: 1px solid rgba(0, 0, 0, 0.125);
    padding-top: 0.5rem;
  }
}
@media (max-width: 768px) {
  .maincalendar .calendartable.calendarmonth th, .maincalendar .calendartable.calendarmonth td {
    border: none;
    text-align: center !important;
    padding: 0;
  }
  .maincalendar .calendartable.calendarmonth td {
    height: auto;
    font-size: inherit;
    padding: 0;
  }
  .maincalendar .calendartable.calendarmonth td.hasevent [data-region="day-content"] {
    display: none;
  }
  .maincalendar .calendartable.calendarmonth td.hasevent .day-number {
    display: inline-block;
    position: relative;
  }
  .maincalendar .calendartable.calendarmonth td.hasevent .day-number:before {
    content: ".";
    display: inline-block;
    position: absolute;
    bottom: 0.4em;
    left: 0;
    text-align: center;
    width: 100%;
    font-size: 3em;
    color: inherit;
  }
  .maincalendar .calendartable.calendarmonth td:after {
    content: "";
    display: block;
    margin-top: calc(100% - 26px);
  }
  .maincalendar .calendartable.calendarmonth td > div {
    height: auto !important;
  }
}
.calendarwrapper {
  position: relative;
}
.day-popover-content:empty + .day-popover-alternate {
  display: block;
}
.location-content {
  overflow-wrap: break-word;
}
.description-content {
  overflow-wrap: break-word;
}
.description-content > p {
  margin: 0;
}
.cal_courses_flt {
  color: #6a737b;
}
.content-bank-container .cb-content-wrapper {
  padding: 0.5rem;
  min-height: 140px;
  max-height: 500px;
  overflow-x: auto;
  flex-wrap: wrap;
}
.content-bank-container .cb-thumbnail {
  width: 24px;
  height: 24px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.content-bank-container.view-grid {
  /* Display a centered eye slash on top of unlisted content icons. */
}
.content-bank-container.view-grid .cb-listitem {
  margin-bottom: 0.5rem;
}
.content-bank-container.view-grid .cb-listitem.cb-unlisted {
  position: relative;
}
@media (max-width: 767.98px) {
  .content-bank-container.view-grid .cb-listitem {
    flex-basis: 50%;
  }
}
@media (min-width: 576px) {
  .content-bank-container.view-grid .cb-listitem {
    max-width: 120px;
    min-width: 120px;
  }
}
.content-bank-container.view-grid .cb-name {
  text-align: center;
}
.content-bank-container.view-grid .cb-file {
  padding: 0.5rem;
}
.content-bank-container.view-grid .cb-thumbnail {
  width: 64px;
  height: 64px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 0.5rem;
}
.content-bank-container.view-grid .cb-unlisted .cb-thumbnail {
  opacity: 0.15;
}
.content-bank-container.view-grid .cb-unlisted::after {
  position: absolute;
  top: 20px;
  left: 0;
  width: 100%;
  content: "";
  font-family: FontAwesome;
  font-size: 26px;
  text-align: center;
  opacity: 0.9;
  text-shadow: 0 0 10px #fff;
}
.content-bank-container.view-grid .cb-heading, .content-bank-container.view-grid .cb-uses, .content-bank-container.view-grid .cb-date, .content-bank-container.view-grid .cb-size, .content-bank-container.view-grid .cb-type, .content-bank-container.view-grid .cb-author {
  display: none;
}
.content-bank-container.view-list .cb-content-wrapper {
  padding: 0 0.5rem;
  flex-direction: column;
  flex-wrap: nowrap;
}
.content-bank-container.view-list .cb-thumbnail {
  margin-right: 0.5rem;
}
.content-bank-container.view-list .cb-listitem, .content-bank-container.view-list .cb-heading {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  border-bottom: 1px solid #dee2e6;
}
.content-bank-container.view-list .cb-column {
  display: flex;
  padding: 0.25rem;
}
.content-bank-container.view-list .cb-column {
  border-right: 1px solid #dee2e6;
}
.content-bank-container.view-list .cb-listitem.cb-unlisted .cb-thumbnail {
  opacity: 0.3;
}
.content-bank-container.view-list .cb-listitem.cb-unlisted .cb-column, .content-bank-container.view-list .cb-listitem.cb-unlisted .cb-column a {
  color: #6a737b;
}
@media (max-width: 767.98px) {
  .content-bank-container.view-list .cb-column {
    flex: 0 0 50%;
    max-width: 50%;
  }
}
@media (min-width: 576px) {
  .content-bank-container.view-list .cb-heading {
    position: sticky;
    top: 0;
    z-index: 1;
  }
  .content-bank-container.view-list .cb-file {
    flex: 0 0 40%;
    max-width: 40%;
  }
  .content-bank-container.view-list .cb-uses, .content-bank-container.view-list .cb-date, .content-bank-container.view-list .cb-size, .content-bank-container.view-list .cb-type, .content-bank-container.view-list .cb-author {
    flex: 0 0 12%;
    max-width: 12%;
  }
  .content-bank-container.view-list .cb-column.last {
    border-right: 0;
  }
}
.content-bank-container.view-list .cb-btnsort span {
  display: none;
}
.content-bank-container.view-list .cb-btnsort .title {
  display: inline;
}
.content-bank-container.view-list .cb-btnsort.dir-none .default, .content-bank-container.view-list .cb-btnsort.dir-asc .asc, .content-bank-container.view-list .cb-btnsort.dir-desc .desc {
  display: inline;
}
.cb-toolbar-container .dropdown-scrollable {
  max-height: 190px;
  overflow-y: auto;
}
.cb-navigation-container .singleselect, .cb-navigation-container .singleselect .custom-select {
  width: 100%;
}
/* course.less */
/* COURSE CONTENT */
.section_add_menus {
  text-align: right;
  clear: both;
}
.section-modchooser {
  clear: both;
  margin-top: 0.25rem;
}
.block_tree .tree_item.branch {
  margin-left: 8px;
}
.section_add_menus .horizontal div, .section_add_menus .horizontal form {
  display: inline;
}
.section_add_menus optgroup {
  font-weight: normal;
  font-style: italic;
}
/*rtl:ignore*/
.section_add_menus .urlselect {
  text-align: left;
  margin-left: 0.4em;
}
/*rtl:ignore*/
.section_add_menus .urlselect select {
  margin-left: 0.2em;
}
.sitetopic ul.section {
  margin: 0;
}
body:not(.editing) .sitetopic ul.section {
  padding-left: 0;
}
body:not(.editing) .sitetopic ul.section .label .mod-indent-outer {
  padding-left: 0;
}
@media (min-width: 576px) {
  .course-content ul.section {
    margin: 1rem;
  }
}
.section .side {
  margin-top: 0.5rem;
}
.section .side.left {
  float: left;
}
.section .side.right {
  float: right;
  clear: right;
}
.section .spinner {
  height: 16px;
  width: 16px;
}
.section .activity {
  list-style: none;
  padding: 0.25rem 0;
  /* The command block for each activity */
}
.section .activity .spinner {
  left: 100%;
  position: absolute;
}
.section .activity .actions {
  position: absolute;
  right: 0;
  top: 0;
  display: flex;
}
.section .activity .contentwithoutlink, .section .activity .activityinstance {
  min-width: 40%;
}
.section .activity .contentwithoutlink > a, .section .activity .activityinstance > a {
  display: inline-flex;
  align-items: center;
}
.section .activity .contentwithoutlink .dimmed .activityicon, .section .activity .activityinstance .dimmed .activityicon {
  opacity: 0.5;
}
.section .activity .stealth {
  color: #6a737b;
}
.section .activity a.stealth, .section .activity a.stealth:hover {
  color: #5babf2 !important;
  /* stylelint-disable-line declaration-no-important */
}
.section .label .contentwithoutlink, .section .label .activityinstance {
  padding-right: 32px;
  display: block;
  height: inherit;
}
@media (min-width: 576px) {
  .section .label .mod-indent-outer {
    padding-left: 24px;
    display: block;
  }
}
.section .filler {
  width: 16px;
  height: 16px;
  padding: 0;
  margin: 0 0.5rem;
  display: inline-block;
}
.section .activity.editor_displayed a.editing_title, .section .activity.editor_displayed .moodle-actionmenu {
  display: none;
}
.section .activity.editor_displayed div.activityinstance {
  padding-right: initial;
}
.section .activity.editor_displayed div.activityinstance input {
  margin-bottom: initial;
  padding-top: initial;
  padding-bottom: initial;
  vertical-align: text-bottom;
}
.section .activity .activityinstance {
  display: inline-flex;
  align-items: center;
  margin-bottom: 1rem;
}
.editing .section .activity .contentwithoutlink, .editing .section .activity .activityinstance {
  padding-right: 200px;
}
.editing .section .activity .editing_move {
  position: absolute;
  display: flex;
  left: 5px;
  top: 5px;
}
.editing .section .activity .mod-indent-outer {
  /**
                 * Add appropriate padding such that nothing overlaps the
                 * absolute positioned move icon.
                 */
  padding-left: 2rem;
}
.editing .activity .editing_move_activity {
  position: absolute;
  display: flex;
  left: 5px;
  top: 5px;
}
.editing .course-content .stateready .section .spinner {
  display: none;
}
.editing .editinprogress {
  position: relative;
}
.editing .editinprogress > * {
  opacity: 0.4;
}
.editing .editinprogress .corelightbox, .editing .editinprogress .lightbox {
  display: none;
}
.editing .editinprogress:after {
  position: absolute;
  font-family: "FontAwesome";
  font-size: 20px;
  color: #6a737b;
  content: "";
  display: flex;
  justify-content: center;
  align-items: center;
  width: 30px;
  height: 30px;
  left: calc(50% - 15px);
  top: calc(50% - 15px);
  animation: editinprogress-rotation 2s infinite linear;
}
.editing .editinprogress .editinprogress:after {
  display: none;
}
@keyframes editinprogress-rotation {
  0% {
    opacity: 0;
    transform: rotate(0deg);
  }
  50% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: rotate(359deg);
  }
}
.editing_show + .editing_assign, .editing_hide + .editing_assign {
  margin-left: 20px;
}
.section .activity .commands {
  white-space: nowrap;
  display: inline-block;
}
.section .activity.modtype_label.label {
  font-weight: normal;
}
.section .activity.modtype_label.label .contentwithoutlink {
  min-height: 0;
}
.section .activity.modtype_label.label.hasinfo p:last-child, .section .activity.modtype_label.label.hasinfo i:last-child {
  margin-bottom: 0;
}
.section li.activity:not(.activity-wrapper) {
  padding: 0.2em;
  clear: both;
}
.section li.activity:not(.activity-wrapper).hasinfo {
  border-bottom: 1px solid #dee2e6;
  padding-top: 1rem;
  padding-bottom: 1rem;
}
.section li.activity:not(.activity-wrapper).hasinfo:last-child {
  border-bottom: 0;
  padding-bottom: 0;
}
.course-content .section.dropready.main.drop-down {
  border-bottom: 1px solid #1d2125;
}
.course-content .section.dropready .course-section-header.dropready.drop-zone {
  margin-top: -2px;
}
.course-content .section.dropready li.activity.dropready.drop-down {
  border-bottom: 1px solid #1d2125;
  margin-bottom: -1px;
}
.course-content .section.dropready li.activity.dropready.drop-up {
  border-top: 1px solid #1d2125;
  margin-top: -1px;
}
.section .activity .activityinstance .groupinglabel {
  padding-left: 30px;
}
.section.main:not(.course-section) .activity .availabilityinfo, .section.main:not(.course-section) .activity .contentafterlink {
  margin-top: 0.5em;
  margin-left: 30px;
}
.section .activity .contentafterlink p {
  margin: 0.5em 0;
}
.editing .section.main:not(.course-section) .activity:hover, .editing .section.main:not(.course-section) .activity.action-menu-shown, .editing .section.main:not(.course-section) .sectionname:hover {
  background-color: rgba(0, 0, 0, 0.03);
}
.course-content .current {
  position: relative;
}
.course-content .current::before {
  border-left: #0f6cbf 3px solid;
  bottom: 0;
  content: "";
  left: -8px;
  position: absolute;
  top: 0;
}
.course-content .section-summary {
  border: 1px solid #dee2e6;
  margin-top: 5px;
  list-style: none;
}
.course-content .section-summary .section-title {
  margin: 2px 5px 10px 5px;
}
.course-content .section-summary .summarytext {
  margin: 2px 5px 2px 5px;
}
.course-content .section-summary .section-summary-activities .activity-count {
  color: #6a737b;
  font-size: 0.8203125rem;
  margin: 3px;
  white-space: nowrap;
  display: inline-block;
}
.course-content .section-summary .summary {
  margin-top: 5px;
}
.course-content .single-section {
  margin-top: 1em;
}
.course-content .single-section .section-navigation {
  display: block;
  padding: 0.5em;
  margin-bottom: -0.5em;
}
.course-content .single-section .section-navigation .title {
  font-weight: bold;
  font-size: 108%;
  clear: both;
}
.course-content .single-section .section-navigation .mdl-left {
  font-weight: normal;
  float: left;
  margin-right: 1em;
}
.course-content .single-section .section-navigation .mdl-left .larrow {
  margin-right: 0.1em;
}
.course-content .single-section .section-navigation .mdl-right {
  font-weight: normal;
  float: right;
  margin-left: 1em;
}
.course-content .single-section .section-navigation .mdl-right .rarrow {
  margin-left: 0.1em;
}
.course-content .single-section .section-navigation .mdl-bottom {
  margin-top: 0;
}
.course-content ul li.section.main:not(.course-section) {
  border-bottom: 1px solid #dee2e6;
  margin-top: 0;
}
.course-content ul li.section.main:not(.course-section):last-child {
  border-bottom: 0;
}
.course-content ul li.section.hidden:not(.course-section) .sectionname > span, .course-content ul li.section.hidden:not(.course-section) .content > div.summary, .course-content ul li.section.hidden:not(.course-section) .activity .activityinstance {
  color: #6a737b;
}
.course-content ul.topics, .course-content ul.weeks {
  padding: 0;
  margin: 0;
  list-style: none;
}
.course-content ul.topics li.section, .course-content ul.weeks li.section {
  padding-top: 1rem;
  padding-bottom: 1rem;
}
.course-content ul.topics li.section .content, .course-content ul.weeks li.section .content {
  margin: 0;
  padding: 0;
}
@media (min-width: 576px) {
  .course-content ul.topics li.section .summary, .course-content ul.topics li.section .content > .availabilityinfo, .course-content ul.weeks li.section .summary, .course-content ul.weeks li.section .content > .availabilityinfo {
    margin-left: 25px;
  }
}
.course-content ul.topics li.section .left, .course-content ul.topics li.section .right, .course-content ul.weeks li.section .left, .course-content ul.weeks li.section .right {
  padding: 0 6px 0;
  text-align: right;
  width: auto;
}
@media (max-width: 767.98px) {
  body:not(.editing) .course-content ul.topics li.section .left, body:not(.editing) .course-content ul.topics li.section .right, body:not(.editing) .course-content ul.weeks li.section .left, body:not(.editing) .course-content ul.weeks li.section .right {
    display: none;
  }
}
.course-content {
  margin-top: 0;
}
.course-content .hidden {
  display: none;
}
@media (max-width: 767.98px) {
  .course-content li.section:not(.course-section) ul {
    padding-left: 0;
  }
}
.course-content li.section:not(.course-section) ul {
  list-style: disc;
}
.course-content li.section:not(.course-section) ul ul {
  list-style: circle;
}
.course-content li.section:not(.course-section) ul ul ul {
  list-style: square;
}
.course-content li.section:not(.course-section) li.activity ul {
  list-style: disc;
}
.course-content li.section:not(.course-section) li.activity ul ul {
  list-style: circle;
}
.course-content li.section:not(.course-section) li.activity ul ul ul {
  list-style: square;
}
.course-content li.section:not(.course-section) .right > .icon:first-child {
  /* Remove the spacer icon. */
  display: none;
}
.path-course-view.editing #region-main > .card-block {
  padding-bottom: 13rem;
}
.jumpmenu .form-inline {
  display: block;
}
.path-course-view .completionprogress {
  margin-left: 25px;
}
.path-course-view .completionprogress {
  display: block;
  float: right;
  height: 20px;
  position: relative;
}
#page-site-index .subscribelink {
  text-align: right;
}
#site-news-forum h2, #frontpage-course-list h2, #frontpage-category-names h2, #frontpage-category-combo h2 {
  margin-bottom: 9px;
}
.path-course-view a.reduce-sections {
  padding-left: 0.2em;
}
.path-course-view .subscribelink {
  text-align: right;
}
.path-course-view .unread {
  margin-left: 30px;
}
.path-course-view .block.drag .header {
  cursor: move;
}
.path-course-view .completionprogress {
  text-align: right;
}
.path-course-view .single-section .completionprogress {
  margin-right: 5px;
}
.path-site li.activity > div:not(.activity-item), .path-course-view li.activity > div:not(.activity-item) {
  position: relative;
  padding: 0 16px 0 0;
  /* to accommodate the floated completion icon with highlighting */
}
.path-course-view li.activity span.autocompletion img {
  vertical-align: text-bottom;
  margin-left: 0;
}
.path-course-view li.activity form.togglecompletion .btn {
  padding: 0;
}
.path-course-view li.activity form.togglecompletion img {
  max-width: none;
  /* The width is 0 so ensure we don't end up with a relative max-width */
}
.path-course-view.editing li.activity span.autocompletion img {
  /* Use the same spacing as the filler. */
  margin-right: 0.5rem;
  margin-left: 0.5rem;
}
.path-course-view li.activity form.togglecompletion .ajaxworking {
  width: 16px;
  height: 16px;
  position: absolute;
  right: 22px;
  top: 3px;
  background: url(/theme/image.php?theme=classic&component=core&image=i%2Fajaxloader) no-repeat;
}
li.section.hidden span.commands a.editing_hide, li.section.hidden span.commands a.editing_show {
  cursor: default;
}
.single-section h3.sectionname {
  text-align: center;
  clear: both;
}
input.titleeditor {
  width: 330px;
  vertical-align: text-bottom;
}
span.editinstructions {
  position: absolute;
  top: 0;
  margin-top: -22px;
  margin-left: 30px;
  font-size: 0.8203125rem;
  padding: 0.1em 0.4em;
  text-decoration: none;
  z-index: 9999;
  border: 0 solid transparent;
  color: #00434e;
  background-color: #cce6ea;
  border-color: #b8dce2;
}
span.editinstructions hr {
  border-top-color: #a6d3db;
}
span.editinstructions .alert-link {
  color: #00171b;
}
/* Course drag and drop upload styles */
#dndupload-status {
  position: fixed;
  left: 0;
  width: 40%;
  margin: 0 30%;
  padding: 6px;
  text-align: center;
  z-index: 1;
  border: 0 solid transparent;
  color: #00434e;
  background-color: #cce6ea;
  border-color: #b8dce2;
}
#dndupload-status hr {
  border-top-color: #a6d3db;
}
#dndupload-status .alert-link {
  color: #00171b;
}
.dndupload-preview {
  padding: 1rem;
  background-color: #0f6cbf;
  color: #fff;
  text-align: center;
  font-size: 1.171875rem;
  max-width: 600px;
  margin: 0 auto;
  border-radius: 0.25rem;
}
.dndupload-hidden {
  display: none;
}
/* COURSES LISTINGS AND COURSE SUMMARY */
#page-course-pending .singlebutton, #page-course-index .singlebutton, #page-course-index-category .singlebutton, #page-course-editsection .singlebutton {
  text-align: center;
}
#page-admin-course-manage #movecourses td img {
  margin: 0 0.22em;
  vertical-align: text-bottom;
}
#coursesearch {
  margin-top: 1em;
  text-align: left;
}
#page-course-pending .pendingcourserequests {
  margin-bottom: 1em;
}
#page-course-pending .pendingcourserequests .singlebutton {
  display: inline;
}
#page-course-pending .pendingcourserequests .cell {
  padding: 0 5px;
}
#page-course-pending .pendingcourserequests .cell.c6 {
  white-space: nowrap;
}
.coursebox {
  display: flex;
  flex-direction: column;
}
.coursebox .info {
  display: flex;
  align-items: center;
}
#frontpage-available-course-list, #frontpage-course-list, .course-search-result {
  margin-top: 0.5rem;
}
#frontpage-available-course-list .coursebox, #frontpage-course-list .coursebox, .course-search-result .coursebox {
  padding: 0.5rem;
  border: 1px solid #dee2e6;
  margin-bottom: 0.5rem;
  border-radius: 0.25rem;
}
.subcategories .coursebox > .info > .coursename a, #frontpage-category-names .coursebox > .info > .coursename a, #frontpage-category-combo .coursebox > .info > .coursename a {
  display: block;
  background-image: url(/theme/image.php?theme=classic&component=core&image=i%2Fcourse);
  background-repeat: no-repeat;
  padding-left: 21px;
  background-position: left 0.2em;
}
.coursebox > .info > .coursename {
  font-size: 0.9375rem;
  font-weight: normal;
  margin: 5px;
  padding: 0;
}
.coursebox .content .teachers li {
  list-style-type: none;
  padding: 0;
  margin: 0;
}
.coursebox .customfieldname, .coursebox .customfieldseparator {
  font-weight: 700;
}
.coursebox .content .courseimage img {
  max-width: 100px;
  max-height: 100px;
}
.coursebox .content .coursecat, .coursebox .content .summary, .coursebox .content .courseimage, .coursebox .content .coursefile, .coursebox .content .teachers, .coursebox.remotecoursebox .remotecourseinfo, .coursebox .content .customfields-container {
  margin: 15px 5px 5px;
  padding: 0;
}
.category-browse .coursebox .content .coursecat, .category-browse .coursebox .content .summary, .category-browse .coursebox .content .courseimage, .category-browse .coursebox .content .coursefile, .category-browse .coursebox .content .teachers, .category-browse .coursebox.remotecoursebox .remotecourseinfo, .category-browse .coursebox .content .customfields-container {
  margin-top: 0;
}
.coursebox.collapsed > .content {
  display: none;
}
.courses > .paging.paging-morelink {
  text-align: center;
  padding: 1rem;
}
.course_category_tree .category .numberofcourse {
  font-size: 0.8203125rem;
}
.course_category_tree .category > .info > .categoryname {
  margin: 5px;
  font-size: 0.9375rem;
  font-weight: normal;
  padding: 2px 18px;
}
.course_category_tree .category.with_children > .info > .categoryname {
  background-image: url(/theme/image.php?theme=classic&component=core&image=t%2Fexpanded);
  background-repeat: no-repeat;
  background-position: center left;
}
.course_category_tree .category.with_children.collapsed > .info > .categoryname {
  background-image: url(/theme/image.php?theme=classic&component=core&image=t%2Fcollapsed);
}
/* rtl:raw:
.course_category_tree .category.with_children.collapsed > .info > .categoryname {
    background-image:url(/theme/image.php?theme=classic&component=core&image=t%2Fcollapsed_rtl);
}
*/
.course_category_tree .category.collapsed > .content {
  display: none;
}
.course_category_tree .category > .content {
  padding-left: 16px;
}
#page-course-index-category .categorypicker {
  margin: 10px 0 20px;
}
/**
 * Course management page
 * Palette
 *
 * Background (reg)         #F5F5F5
 * Background (light        #fafafa
 * Background (highlight)   #ddffaa
 * Borders                  #e1e1e8
 */
#course-category-listings {
  margin-bottom: 0;
  /** Two column layout */
  /** Three column layout */
}
#course-category-listings.columns-2 > #course-listing > div {
  position: relative;
  left: -1px;
}
#course-category-listings.columns-3 > #course-listing > div {
  height: 100%;
}
#course-category-listings > div > div {
  min-height: 300px;
}
#course-category-listings > div > div > ul.ml > li:first-child > div {
  border-top: 0;
}
#course-category-listings h3 {
  margin: 0;
  padding: 0.4rem 0.6rem 0.3rem;
}
#course-category-listings h4 {
  margin: 1rem 0 0;
  padding: 0.6rem 1rem 0.5rem;
}
#course-category-listings .moodle-actionmenu {
  white-space: nowrap;
}
#course-category-listings .listing-actions {
  text-align: center;
}
#course-category-listings .listing-actions > .moodle-actionmenu {
  display: inline-block;
}
#course-category-listings ul.ml {
  list-style: none;
  margin: 1rem 0;
}
#course-category-listings ul.ml ul.ml {
  margin: 0;
}
#course-category-listings .listitem[data-selected="1"] {
  border-left: calc(1px + 5px) solid #0f6cbf;
  padding-left: calc(1.25rem - 5px);
}
#course-category-listings .item-actions {
  margin-right: 1em;
  display: inline-block;
}
#course-category-listings .item-actions.show .menu img {
  width: 12px;
  max-width: none;
}
#course-category-listings .item-actions .menu-action-text {
  vertical-align: inherit;
}
#course-category-listings .listitem > div > .float-left {
  float: left;
}
#course-category-listings .listitem > div > .float-right {
  float: right;
  text-align: right;
}
#course-category-listings .listitem > div .item-actions .action-show {
  display: none;
}
#course-category-listings .listitem > div .item-actions .action-hide {
  display: inline;
}
#course-category-listings .listitem > div .without-actions {
  color: #333;
}
#course-category-listings .listitem > div .idnumber {
  margin-right: 2em;
}
#course-category-listings .listitem[data-visible="0"] {
  color: #6a737b;
}
#course-category-listings .listitem[data-visible="0"] > div > a {
  color: #6a737b;
}
#course-category-listings .listitem[data-visible="0"] > div .item-actions .action-show {
  display: inline;
}
#course-category-listings .listitem[data-visible="0"] > div .item-actions .action-hide {
  display: none;
}
#course-category-listings .listitem.highlight {
  background-color: #fff;
}
#course-category-listings .listitem.highlight > div, #course-category-listings .listitem.highlight > div:hover, #course-category-listings .listitem.highlight[data-selected="1"] > div {
  background-color: rgba(0, 0, 0, 0.075);
}
#course-category-listings #course-listing .listitem .categoryname {
  display: inline-block;
  margin-left: 1em;
  color: #a1a1a8;
}
#course-category-listings #course-listing .listitem .coursename {
  display: inline-block;
}
#course-category-listings #course-listing > .firstpage .listitem:first-child > div .item-actions .action-moveup, #course-category-listings #course-listing > .lastpage .listitem:last-child > div .item-actions .action-movedown {
  display: none;
}
#course-category-listings #course-listing .bulk-action-checkbox {
  margin: -2px 6px 0 0;
}
#course-category-listings #category-listing .listitem.collapsed > ul.ml {
  display: none;
}
#course-category-listings #category-listing .listitem:first-child > div .item-actions .action-moveup, #course-category-listings #category-listing .listitem:last-child > div .item-actions .action-movedown {
  display: none;
}
#course-category-listings #category-listing .course-count {
  color: #a1a1a8;
  margin-right: 2rem;
  min-width: 3.5em;
  display: inline-block;
}
#course-category-listings #category-listing .bulk-action-checkbox {
  margin-right: -3px;
}
#course-category-listings #category-listing .category-listing > ul > .listitem:first-child {
  position: relative;
}
#course-category-listings #category-listing .category-bulk-actions {
  margin: 0 0.5em 0.5em;
  position: relative;
}
#course-category-listings .detail-pair > * {
  display: inline-block;
}
#course-category-listings .detail-pair .pair-key {
  font-weight: bold;
  vertical-align: top;
}
#course-category-listings .detail-pair .pair-key span {
  margin-right: 1rem;
  display: block;
}
#course-category-listings .detail-pair .pair-value select {
  max-width: 100%;
}
#course-category-listings .bulk-actions .detail-pair > * {
  display: block;
  width: 100%;
}
#course-category-listings .listing-pagination {
  text-align: center;
}
#course-category-listings .listing-pagination .yui3-button {
  color: #fff;
  background-color: #008196;
  border-color: #008196;
  border: 0;
  margin: 0.4rem 0.2rem 0.45rem;
  font-size: 10.4px;
}
#course-category-listings .listing-pagination .yui3-button:hover {
  color: #fff;
  background-color: #006070;
  border-color: #005563;
}
#course-category-listings .listing-pagination .yui3-button:focus, #course-category-listings .listing-pagination .yui3-button.focus {
  color: #fff;
  background-color: #006070;
  border-color: #005563;
  box-shadow: 0 0 0 0.2rem rgba(38, 148, 166, 0.5);
}
#course-category-listings .listing-pagination .yui3-button.disabled, #course-category-listings .listing-pagination .yui3-button:disabled {
  color: #fff;
  background-color: #008196;
  border-color: #008196;
}
#course-category-listings .listing-pagination .yui3-button:not(:disabled):not(.disabled):active, #course-category-listings .listing-pagination .yui3-button:not(:disabled):not(.disabled).active, .show > #course-category-listings .listing-pagination .yui3-button.dropdown-toggle {
  color: #fff;
  background-color: #005563;
  border-color: #004a56;
}
#course-category-listings .listing-pagination .yui3-button:not(:disabled):not(.disabled):active:focus, #course-category-listings .listing-pagination .yui3-button:not(:disabled):not(.disabled).active:focus, .show > #course-category-listings .listing-pagination .yui3-button.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(38, 148, 166, 0.5);
}
#course-category-listings .listing-pagination .yui3-button.active-page {
  color: #fff;
  background-color: #0f6cbf;
  border-color: #0f6cbf;
}
#course-category-listings .listing-pagination .yui3-button.active-page:hover {
  color: #fff;
  background-color: #0c589c;
  border-color: #0b5190;
}
#course-category-listings .listing-pagination .yui3-button.active-page:focus, #course-category-listings .listing-pagination .yui3-button.active-page.focus {
  color: #fff;
  background-color: #0c589c;
  border-color: #0b5190;
  box-shadow: 0 0 0 0.2rem rgba(51, 130, 201, 0.5);
}
#course-category-listings .listing-pagination .yui3-button.active-page.disabled, #course-category-listings .listing-pagination .yui3-button.active-page:disabled {
  color: #fff;
  background-color: #0f6cbf;
  border-color: #0f6cbf;
}
#course-category-listings .listing-pagination .yui3-button.active-page:not(:disabled):not(.disabled):active, #course-category-listings .listing-pagination .yui3-button.active-page:not(:disabled):not(.disabled).active, .show > #course-category-listings .listing-pagination .yui3-button.active-page.dropdown-toggle {
  color: #fff;
  background-color: #0b5190;
  border-color: #0a4b84;
}
#course-category-listings .listing-pagination .yui3-button.active-page:not(:disabled):not(.disabled):active:focus, #course-category-listings .listing-pagination .yui3-button.active-page:not(:disabled):not(.disabled).active:focus, .show > #course-category-listings .listing-pagination .yui3-button.active-page.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(51, 130, 201, 0.5);
}
#course-category-listings .listing-pagination-totals {
  text-align: center;
}
#course-category-listings .listing-pagination-totals.dimmed {
  color: #6a737b;
  margin: 0.4rem 1rem 0.45rem;
}
#course-category-listings .select-a-category .notifymessage, #course-category-listings .select-a-category .alert {
  margin: 1em;
}
#course-category-listings #course-listing .listitem .drag-handle {
  display: none;
}
.jsenabled #course-category-listings #course-listing .listitem .drag-handle {
  display: inline-block;
  margin: 0 6px 0 0;
  cursor: pointer;
}
/** Management header styling **/
.coursecat-management-header {
  vertical-align: middle;
}
.coursecat-management-header h2 {
  display: inline-block;
  text-align: left;
}
.coursecat-management-header > div {
  float: right;
}
.coursecat-management-header > div > div {
  margin: 10px 0 10px 1em;
  display: inline-block;
}
.coursecat-management-header select {
  max-width: 300px;
  cursor: pointer;
  padding: 0.4em 0.5em 0.45em 1em;
  vertical-align: baseline;
  white-space: nowrap;
}
.coursecat-management-header .view-mode-selector .moodle-actionmenu {
  white-space: nowrap;
  display: inline-block;
}
.coursecat-management-header .view-mode-selector .moodle-actionmenu[data-enhanced].show .menu a {
  padding-left: 1em;
}
.course-being-dragged-proxy {
  border: 0;
  color: #0f6cbf;
  vertical-align: middle;
  padding: 0 0 0 4em;
}
.course-being-dragged {
  opacity: 0.5;
}
/**
 * Display sizes:
 * Large displays                   1200        +
 * Default displays                  980     1199
 * Tablets                           768      979
 * Small tablets and large phones    481      767
 * Phones                              0      480
 */
@media (min-width: 1200px) and (max-width: 1600px) {
  #course-category-listings.columns-3 {
    background-color: #fff;
    border: 0;
  }
  #course-category-listings.columns-3 #category-listing, #course-category-listings.columns-3 #course-listing {
    width: 50%;
  }
  #course-category-listings.columns-3 #category-listing > div, #course-category-listings.columns-3 #course-listing > div, #course-category-listings.columns-3 #course-detail > div {
    background-color: #fff;
  }
  #course-category-listings.columns-3 #course-detail {
    width: 100%;
    margin-top: 1em;
  }
}
@media (max-width: 1199px) {
  #course-category-listings.columns-2, #course-category-listings.columns-3 {
    border: 0;
  }
  #course-category-listings.columns-2 #category-listing, #course-category-listings.columns-2 #course-listing, #course-category-listings.columns-2 #course-detail, #course-category-listings.columns-3 #category-listing, #course-category-listings.columns-3 #course-listing, #course-category-listings.columns-3 #course-detail {
    width: 100%;
    margin: 0 0 1em;
  }
}
.page-settings-menu .menubar > a > .icon {
  width: auto;
  height: 32px;
  font-size: 32px;
}
.activity-navigation .row {
  align-items: center;
}
.activity-navigation #prev-activity-link, .activity-navigation #next-activity-link {
  white-space: pre-wrap;
}
.automatic-completion-conditions .badge {
  font-size: 100%;
}
.activity-add, .block-add {
  border-radius: 0.25rem;
  color: #0f6cbf;
  background-color: #f5f9fc;
  border-color: #3584c9;
  border-width: 1px;
  width: 100%;
}
.activity-add hr, .block-add hr {
  border-top-color: #3077b5;
}
.activity-add .alert-link, .block-add .alert-link {
  color: #0b5190;
}
.activity-add .pluscontainer, .block-add .pluscontainer {
  border: 1px solid #3584c9;
}
.activity-add:hover, .block-add:hover {
  cursor: pointer;
  background-color: #cfe2f2;
}
.activity-add:hover .activity-add-text, .block-add:hover .activity-add-text {
  text-decoration: underline;
}
.changenumsections {
  border-top: 1px solid #3584c9;
}
.section-collapsemenu .collapseall {
  display: block;
}
.section-collapsemenu .expandall {
  display: none;
}
.section-collapsemenu.collapsed .collapseall {
  display: none;
}
.section-collapsemenu.collapsed .expandall {
  display: block;
}
.course-section {
  list-style: none;
  padding-left: 0;
  border-bottom: 1px solid #dee2e6;
}
.course-section:last-child:not(.section-summary) {
  border-bottom: 0;
}
.course-section .sectionbadges .badge {
  margin-left: 0.5rem;
}
.course-section .course-section-header.draggable {
  cursor: move;
}
.course-section .section_action_menu .dropdown-toggle::after {
  display: none;
}
.course-section .inplaceeditable {
  display: flex;
  align-items: center;
}
.course-section.section-summary {
  padding-left: 1rem;
  padding-right: 1rem;
  margin-bottom: 0.5rem;
  margin-top: 0.5rem;
  border-radius: 0.25rem;
}
.course-section .section-summary-activities .activity-count {
  color: #6a737b;
  font-size: 0.8203125rem;
  margin: 3px;
  white-space: nowrap;
  display: inline-block;
}
.course-section.dndupload-dropzone {
  border: 2px dashed #0f6cbf;
  padding-left: 2px;
  padding-right: 2px;
  position: relative;
}
.course-section.dndupload-dropzone .dndupload-preview-overlay {
  background-color: #fff;
  opacity: 0.8;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.course-section.dndupload-dropzone .dndupload-preview-wrapper {
  position: absolute;
  top: 0;
  padding: 2rem;
  width: 100%;
}
.description .course-description-item {
  font-size: 80%;
  background-color: #f8f9fa;
  padding-left: 1rem;
  padding-right: 1rem;
}
.description .course-description-item .description-inner {
  padding-bottom: 0.5rem;
  padding-top: 0.5rem;
  border-bottom: 1px solid #dee2e6;
}
.description .course-description-item .description-inner p:last-child {
  padding-bottom: 0;
  margin-bottom: 0;
}
.description .course-description-item:first-child {
  margin-top: 1rem;
  padding-top: 1rem;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}
.description .course-description-item:first-child .description-inner {
  padding-top: 0;
}
.description .course-description-item:last-child {
  padding-bottom: 1rem;
  border-bottom-left-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}
.description .course-description-item:last-child .description-inner {
  padding-bottom: 0;
  border-bottom: 0;
}
.activity-item {
  position: relative;
  border-radius: 0.25rem;
  /* Prevent bootstrap strech-link from covering the inplace editable button using z-index. */
}
.activity-item:not(.activityinline) {
  border: 1px solid #dee2e6;
  padding: 1rem;
}
.activity-item.activityinline {
  padding: 1rem 0;
}
.activity-item.hiddenactivity {
  background-color: #f8f9fa;
}
.activity-item.hiddenactivity .description .course-description-item, .activity-item.hiddenactivity .activityiconcontainer, .activity-item.hiddenactivity .badge {
  mix-blend-mode: multiply;
}
.activity-item .activity-actions .actions {
  position: relative;
}
.activity-item .activity-actions .dropdown-toggle::after {
  display: none;
}
.activity-item .inplaceeditable {
  display: flex;
  flex: 0 1 auto;
  max-width: 100%;
}
.activity-item .activityname .afterlink {
  margin-left: 0.5rem;
}
.activity-item .activityname .inplaceeditable .quickeditlink {
  z-index: 2;
  margin-left: 0.5rem;
}
.activity-item .action-menu-item {
  display: flex;
  align-items: center;
}
.activity-item .action-menu-item .filler {
  display: none;
}
.activity-item .no-overflow {
  width: 100%;
}
@media (max-width: 767.98px) {
  .activity-item .badge {
    white-space: normal;
    text-align: left;
  }
}
@media (min-width: 768px) {
  .activity-item .automatic-completion-conditions {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
  }
  .activity-item:not(.activityinline) {
    padding: 1.5rem;
  }
  .activity-item .activity-info, .activity-item .activity-actions {
    margin-left: auto;
    padding-left: 0.5rem;
    align-self: start;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
}
.editing .activity-item {
  cursor: move;
}
.editing .activity-item .a {
  cursor: pointer;
}
.editing .activity-item:hover {
  color: #1d2125;
  background-color: #f5f9fc;
  border-color: #3584c9;
}
.editing .activity-item:hover hr {
  border-top-color: #3077b5;
}
.editing .activity-item:hover .alert-link {
  color: #070808;
}
.editing .activity-item:hover .description .course-description-item, .editing .activity-item:hover .activityiconcontainer, .editing .activity-item:hover .badge {
  mix-blend-mode: multiply;
}
.section .draggable .activity-item .dragicon {
  display: none;
}
.automatic-completion-conditions .badge {
  font-size: 80%;
  padding: 0.5rem;
  margin-top: 0.25rem;
}
.automatic-completion-conditions .badge .icon {
  width: 0.7rem;
  height: 0.7rem;
  font-size: 0.7rem;
}
.automatic-completion-conditions .badge:first-child {
  margin-top: 0;
}
/* Anchor link offset fix. This makes hash links scroll 60px down to account for the fixed header. */
:target {
  scroll-margin-top: 60px;
}
.pagelayout-embedded :target {
  padding-top: initial;
  margin-top: initial;
}
#nav-drawer.closed {
  left: -305px;
}
#nav-drawer[aria-hidden=true] .list-group-item {
  display: none;
}
/* Use a variable for the drawer background colors. */
[data-region="drawer"] {
  position: fixed;
  width: 285px;
  top: 50px;
  height: calc(100% - 50px);
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
  z-index: 999;
  background-color: #f2f2f2;
  transition: right 0.5s ease, left 0.5s ease;
}
@media (prefers-reduced-motion: reduce) {
  [data-region="drawer"] {
    transition: none;
  }
}
@media (min-width: 576px) {
  [data-region="drawer"] {
    padding: 20px 20px;
  }
  .jsenabled .btn-footer-popover {
    transition: 0.2s;
  }
}
@media (min-width: 576px) and (prefers-reduced-motion: reduce) {
  .jsenabled .btn-footer-popover {
    transition: none;
  }
}
#nav-drawer {
  right: auto;
  left: 0;
  /* Override the z-indexes defined in bootstrap/_list-group.scss that
       lead to side effects on the user tours positioning. */
}
#nav-drawer .list-group-item-action.active, #nav-drawer .list-group-item.active {
  z-index: inherit;
}
#nav-drawer .list-group-item-action.active + .list-group-item, #nav-drawer .list-group-item.active + .list-group-item {
  border-top: none;
}
#nav-drawer .list-group ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
#nav-drawer .list-group li {
  margin-bottom: -1px;
}
#nav-drawer .list-group li:last-child {
  margin-bottom: 0;
}
body.drawer-ease {
  transition: margin-left 0.5s ease, margin-right 0.5s ease;
}
@media (prefers-reduced-motion: reduce) {
  body.drawer-ease {
    transition: none;
  }
}
@media (min-width: 768px) {
  body:not(.uses-drawers).drawer-open-left {
    margin-left: 285px;
  }
}
@media (min-width: 768px) {
  body.drawer-open-left #page.drawers {
    margin-left: 285px;
    padding-left: 1rem;
  }
}
@media (min-width: 768px) {
  body.drawer-open-right {
    margin-right: 315px;
  }
}
[data-region=right-hand-drawer] {
  display: flex;
  flex-direction: column;
  transition: right 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  [data-region=right-hand-drawer] {
    transition: none;
  }
}
[data-region=right-hand-drawer].drawer {
  z-index: 1021;
  position: fixed;
  top: 50px;
  right: 0;
  height: calc(100% - 50px);
  width: 320px;
  box-shadow: -2px 2px 4px rgba(0, 0, 0, 0.25);
  padding: 0;
  visibility: visible;
  opacity: 1;
}
[data-region=right-hand-drawer].hidden {
  display: block;
  right: -320px;
  visibility: hidden;
  opacity: 0;
  transition: right 0.2s ease-in-out, visibility 0s ease-in-out 0.2s, opacity 0s ease-in-out 0.2s;
}
@media (prefers-reduced-motion: reduce) {
  [data-region=right-hand-drawer].hidden {
    transition: none;
  }
}
@media (max-width: 767.98px) {
  [data-region=right-hand-drawer].drawer {
    top: 0;
    height: 100%;
    z-index: 1031;
  }
  body.drawer-open-left, body.drawer-open-right {
    overflow: hidden;
  }
}
.dir-rtl [data-region=right-hand-drawer] {
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
}
.drawer {
  transition: left 0.2s ease, right 0.2s ease, top 0.2s ease, bottom 0.2s ease, visibility 0.2s ease;
  background-color: #f8f9fa;
  z-index: 1050;
  position: fixed;
  height: 100vh;
  top: 0;
}
@media (prefers-reduced-motion: reduce) {
  .drawer {
    transition: none;
  }
}
.drawer.not-initialized {
  display: none;
}
.drawer.drawer-right {
  width: 315px;
  max-width: 315px;
  right: calc(-315px + -10px);
  visibility: hidden;
}
.drawer.drawer-right.show {
  right: 0;
  visibility: visible;
}
.drawer.drawer-right .drawertoggle {
  margin-left: auto;
  margin-right: 5px;
}
.drawer.drawer-left {
  width: 285px;
  max-width: 285px;
  left: calc(-285px + -10px);
  visibility: hidden;
}
.drawer.drawer-left.show {
  left: 0;
  visibility: visible;
}
.drawer.drawer-left .drawertoggle {
  margin-right: auto;
  margin-left: 5px;
}
.drawer.drawer-bottom {
  bottom: -110%;
}
.drawer.drawer-bottom.show {
  bottom: 0;
}
@media (min-width: 992px) {
  .drawer {
    z-index: inherit;
  }
  .drawer#theme_boost-drawers-blocks:focus-within {
    position: absolute;
  }
  .drawer#theme_boost-drawers-blocks:focus-within .drawercontent {
    z-index: auto;
  }
  .drawer.not-initialized {
    display: block;
  }
}
.drawer-md, .drawer-sm {
  display: none;
}
.drawerheader {
  padding: 0;
  height: 50px;
  display: flex;
  align-items: center;
}
.drawer.scrolled .drawerheader {
  box-shadow: 0 8px 11px -7px rgba(0, 0, 0, 0.25);
}
@media (max-width: 991.98px) {
  .drawer-md {
    display: block;
    transition: left 0.2s ease, right 0.2s ease, top 0.2s ease, bottom 0.2s ease, visibility 0.2s ease;
    background-color: #f8f9fa;
    z-index: 1050;
    position: fixed;
    height: 100vh;
    top: 0;
  }
  .drawer-md.not-initialized {
    display: none;
  }
  .drawer-md.drawer-right {
    width: 315px;
    max-width: 315px;
    right: calc(-315px + -10px);
    visibility: hidden;
  }
  .drawer-md.drawer-right.show {
    right: 0;
    visibility: visible;
  }
  .drawer-md.drawer-right .drawertoggle {
    margin-left: auto;
    margin-right: 5px;
  }
  .drawer-md.drawer-left {
    width: 285px;
    max-width: 285px;
    left: calc(-285px + -10px);
    visibility: hidden;
  }
  .drawer-md.drawer-left.show {
    left: 0;
    visibility: visible;
  }
  .drawer-md.drawer-left .drawertoggle {
    margin-right: auto;
    margin-left: 5px;
  }
  .drawer-md.drawer-bottom {
    bottom: -110%;
  }
  .drawer-md.drawer-bottom.show {
    bottom: 0;
  }
}
@media (max-width: 991.98px) and (prefers-reduced-motion: reduce) {
  .drawer-md {
    transition: none;
  }
}
@media (max-width: 767.98px) {
  .drawer-sm {
    display: block;
    transition: left 0.2s ease, right 0.2s ease, top 0.2s ease, bottom 0.2s ease, visibility 0.2s ease;
    background-color: #f8f9fa;
    z-index: 1050;
    position: fixed;
    height: 100vh;
    top: 0;
  }
  .drawer-sm.not-initialized {
    display: none;
  }
  .drawer-sm.drawer-right {
    width: 315px;
    max-width: 315px;
    right: calc(-315px + -10px);
    visibility: hidden;
  }
  .drawer-sm.drawer-right.show {
    right: 0;
    visibility: visible;
  }
  .drawer-sm.drawer-right .drawertoggle {
    margin-left: auto;
    margin-right: 5px;
  }
  .drawer-sm.drawer-left {
    width: 285px;
    max-width: 285px;
    left: calc(-285px + -10px);
    visibility: hidden;
  }
  .drawer-sm.drawer-left.show {
    left: 0;
    visibility: visible;
  }
  .drawer-sm.drawer-left .drawertoggle {
    margin-right: auto;
    margin-left: 5px;
  }
  .drawer-sm.drawer-bottom {
    bottom: -110%;
  }
  .drawer-sm.drawer-bottom.show {
    bottom: 0;
  }
}
@media (max-width: 767.98px) and (prefers-reduced-motion: reduce) {
  .drawer-sm {
    transition: none;
  }
}
.drawercontent {
  position: relative;
  z-index: -1;
  height: calc(100% - 50px);
  display: flex;
  flex-direction: column;
  flex-wrap: nowrap;
  overflow-y: auto;
  padding: 0.4rem;
  scrollbar-width: thin;
  scrollbar-color: #6a737b #f8f9fa;
}
.drawercontent .dropdown-menu .dropdown-item {
  width: 220px;
  white-space: normal;
}
.drawercontent::-webkit-scrollbar {
  width: 12px;
}
.drawercontent::-webkit-scrollbar-track {
  background: #f8f9fa;
}
.drawercontent::-webkit-scrollbar-thumb {
  background-color: #6a737b;
  border-radius: 20px;
  border: 3px solid #f8f9fa;
}
.drawercontent::-webkit-scrollbar-thumb:hover {
  background-color: #495057;
}
.fp-content-center {
  height: 100%;
  width: 100%;
  display: table-cell;
  vertical-align: middle;
}
.fp-content-hidden {
  visibility: hidden;
}
.yui3-panel-focused {
  outline: none;
}
.fp-panel-button {
  background: #fff;
  padding: 3px 20px 2px 20px;
  text-align: center;
  margin: 10px;
  border-radius: 10px;
  display: inline-block;
}
.filepicker .yui3-widget-content-expanded {
  height: auto;
}
/* The javascript is adding a style="height: 0px;" to this element - we need to set the min-height so the height is ignored. */
.filepicker .moodle-dialogue-bd {
  min-height: 520px;
}
.file-picker .fp-navbar {
  min-height: 40px;
  padding: 4px;
}
.fp-navbar {
  border-color: #8f959e;
  border-bottom: 0;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.file-picker .fp-content {
  border-top: 0;
  background: #fff;
  clear: none;
  overflow: auto;
  height: 452px;
}
.filepicker.moodle-dialogue-fullscreen .file-picker .fp-content {
  width: 100%;
}
.file-picker .fp-content-loading {
  height: 100%;
  width: 100%;
  display: table;
  text-align: center;
}
.file-picker .fp-content .fp-object-container {
  width: 98%;
  height: 98%;
}
.file-picker .fp-def-search {
  margin-top: 0;
}
.file-picker .fp-list {
  list-style-type: none;
  padding: 0;
  float: left;
  width: 100%;
  margin: 0;
}
.file-picker .fp-list .fp-repo a {
  display: block;
  padding: 0.5em 0.7em;
}
.file-picker .fp-list .fp-repo.active {
  background: #f2f2f2;
}
.file-picker .fp-list .fp-repo-icon {
  padding: 0 7px 0 5px;
  width: 16px;
  height: 16px;
}
.fp-toolbar {
  float: left;
}
.fp-toolbar.empty {
  display: none;
}
.fp-toolbar .disabled {
  display: none;
}
.fp-toolbar div {
  display: block;
  float: left;
  margin-right: 4px;
}
.fp-toolbar img {
  vertical-align: -15%;
  margin-right: 5px;
}
.fp-viewbar:not(.disabled) a.checked {
  background-color: #b1bbc4;
  color: #1d2125;
  border-color: #aab4bf;
}
.fp-viewbar.disabled a {
  pointer-events: none;
  opacity: 0.65;
}
.file-picker .fp-clear-left {
  clear: left;
}
.fp-pathbar.empty {
  display: none;
}
.fp-pathbar .fp-path-folder {
  background: url("/theme/image.php?theme=classic&component=theme&image=fp%2Fpath_folder") left 3px no-repeat;
  background-size: 12px 12px;
  height: 12px;
  margin-left: 12px;
}
/*rtl:raw:
.fp-pathbar .fp-path-folder {
    background-image: url('/theme/image.php?theme=classic&component=theme&image=fp%2Fpath_folder_rtl');
}
*/
.fp-pathbar .fp-path-folder-name {
  margin-left: 24px;
}
.fp-iconview .fp-file {
  float: left;
  text-align: center;
  position: relative;
  margin: 10px 10px 35px;
}
.fp-iconview .fp-thumbnail {
  min-width: 110px;
  min-height: 110px;
  line-height: 110px;
  text-align: center;
  border: 1px solid #fff;
  display: block;
}
.fp-iconview .fp-thumbnail img {
  border: 1px solid #ddd;
  padding: 3px;
  vertical-align: middle;
}
.fp-iconview .fp-thumbnail:hover {
  background: #fff;
  border: 1px solid #ddd;
}
.fp-iconview .fp-filename-field {
  height: 33px;
  margin-top: 3px;
  word-wrap: break-word;
  overflow: hidden;
  position: absolute;
}
.fp-iconview .fp-file:focus .fp-filename-field, .fp-iconview .fp-file:hover .fp-filename-field {
  overflow: visible;
  z-index: 1000;
}
.fp-iconview .fp-file:focus .fp-filename, .fp-iconview .fp-file:hover .fp-filename {
  overflow: inherit;
  white-space: normal;
  text-overflow: inherit;
}
.fp-iconview .fp-filename-field .fp-filename {
  background: #fff;
  padding-top: 5px;
  padding-bottom: 12px;
  min-width: 112px;
}
.file-picker .yui3-datatable table {
  border: 0 solid #bbb;
  width: 100%;
}
.file-picker .ygtvtn, .filemanager .ygtvtn {
  /*rtl:remove*/
  background: url("/theme/image.php?theme=classic&component=core&image=y%2Ftn") 0 0 no-repeat;
  /*rtl:raw:
    background: url('/theme/image.php?theme=classic&component=core&image=y%2Ftn_rtl') 0 0 no-repeat;
    */
  width: 19px;
  height: 32px;
}
.file-picker .ygtvtm, .filemanager .ygtvtm {
  background: url("/theme/image.php?theme=classic&component=core&image=y%2Ftm") 0 10px no-repeat;
  /*rtl:raw:
        background-position: 2px 10px;
    */
  width: 13px;
  height: 12px;
  cursor: pointer;
}
.file-picker .ygtvtmh, .filemanager .ygtvtmh {
  background: url("/theme/image.php?theme=classic&component=core&image=y%2Ftm") 0 10px no-repeat;
  /*rtl:raw:
        background-position: 2px 10px;
    */
  width: 13px;
  height: 12px;
  cursor: pointer;
}
.file-picker .ygtvtp, .filemanager .ygtvtp {
  /*rtl:remove*/
  background: url("/theme/image.php?theme=classic&component=core&image=y%2Ftp") 0 10px no-repeat;
  /*rtl:raw:
    background: url('/theme/image.php?theme=classic&component=core&image=y%2Ftp_rtl') 2px 10px no-repeat;
    */
  width: 13px;
  height: 12px;
  cursor: pointer;
}
.file-picker .ygtvtph, .filemanager .ygtvtph {
  /*rtl:remove*/
  background: url("/theme/image.php?theme=classic&component=core&image=y%2Ftp") 0 10px no-repeat;
  /*rtl:raw:
    background: url('/theme/image.php?theme=classic&component=core&image=y%2Ftp_rtl') 2px 10px no-repeat;
    */
  width: 13px;
  height: 22px;
  cursor: pointer;
}
.file-picker .ygtvln, .filemanager .ygtvln {
  /*rtl:remove*/
  background: url("/theme/image.php?theme=classic&component=core&image=y%2Fln") 0 0 no-repeat;
  /*rtl:raw:
    background: url('/theme/image.php?theme=classic&component=core&image=y%2Fln_rtl') 0 0 no-repeat;
    */
  width: 19px;
  height: 32px;
}
.file-picker .ygtvlm, .filemanager .ygtvlm {
  background: url("/theme/image.php?theme=classic&component=core&image=y%2Flm") 0 10px no-repeat;
  /*rtl:raw:
        background-position: 2px 10px;
    */
  width: 13px;
  height: 12px;
  cursor: pointer;
}
.file-picker .ygtvlmh, .filemanager .ygtvlmh {
  background: url("/theme/image.php?theme=classic&component=core&image=y%2Flm") 0 10px no-repeat;
  /*rtl:raw:
        background-position: 2px 10px;
    */
  width: 13px;
  height: 12px;
  cursor: pointer;
}
.file-picker .ygtvlp, .filemanager .ygtvlp {
  /*rtl:remove*/
  background: url("/theme/image.php?theme=classic&component=core&image=y%2Flp") 0 10px no-repeat;
  /*rtl:raw:
    background: url('/theme/image.php?theme=classic&component=core&image=y%2Flp_rtl') 2px 10px no-repeat;
    */
  width: 13px;
  height: 12px;
  cursor: pointer;
}
.file-picker .ygtvlph, .filemanager .ygtvlph {
  /*rtl:remove*/
  background: url("/theme/image.php?theme=classic&component=core&image=y%2Flp") 0 10px no-repeat;
  /*rtl:raw:
    background: url('/theme/image.php?theme=classic&component=core&image=y%2Flp_rtl') 2px 10px no-repeat;
    */
  width: 13px;
  height: 12px;
  cursor: pointer;
}
.file-picker .ygtvloading, .filemanager .ygtvloading {
  background: transparent url("/theme/image.php?theme=classic&component=core&image=y%2Floading") 0 0 no-repeat;
  width: 16px;
  height: 22px;
}
.file-picker .ygtvdepthcell, .filemanager .ygtvdepthcell {
  background: url("/theme/image.php?theme=classic&component=core&image=y%2Fvline") 0 0 no-repeat;
  /*rtl:raw:
    background-position: 0 0;
    */
  width: 17px;
  height: 32px;
}
.file-picker .ygtvblankdepthcell, .filemanager .ygtvblankdepthcell {
  width: 17px;
  height: 22px;
}
a.ygtvspacer:hover {
  color: transparent;
  text-decoration: none;
}
.ygtvlabel, .ygtvlabel:link, .ygtvlabel:visited, .ygtvlabel:hover {
  background-color: transparent;
  cursor: pointer;
  margin-left: 2px;
  text-decoration: none;
}
.file-picker .ygtvfocus, .filemanager .ygtvfocus {
  background-color: #eee;
}
.fp-filename-icon {
  margin-top: 10px;
  display: block;
  position: relative;
}
.fp-icon {
  float: left;
  margin-top: -7px;
  width: 24px;
  height: 24px;
  margin-right: 10px;
  text-align: center;
  line-height: 24px;
}
.fp-icon img {
  max-height: 24px;
  max-width: 24px;
  vertical-align: middle;
}
.fp-filename {
  padding-right: 10px;
}
.file-picker .fp-login-form {
  height: 100%;
  width: 100%;
  display: table;
}
.file-picker .fp-upload-form {
  height: 100%;
  width: 100%;
  display: table;
}
.file-picker .fp-upload-form table {
  margin: 0 auto;
}
.file-picker.fp-dlg {
  text-align: center;
}
.file-picker.fp-dlg .fp-dlg-buttons {
  margin: 0 20px;
}
.file-picker.fp-msg {
  text-align: center;
}
.file-picker .fp-content-error {
  height: 100%;
  width: 100%;
  display: table;
  text-align: center;
}
.file-picker .fp-nextpage {
  clear: both;
}
.file-picker .fp-nextpage .fp-nextpage-loading {
  display: none;
}
.file-picker .fp-nextpage.loading .fp-nextpage-link {
  display: none;
}
.file-picker .fp-nextpage.loading .fp-nextpage-loading {
  display: block;
  text-align: center;
  height: 100px;
  padding-top: 50px;
}
.fp-select .fp-select-loading {
  text-align: center;
  margin-top: 20px;
}
.fp-select table {
  padding: 0 0 10px;
}
.fp-select table .mdl-right {
  min-width: 84px;
}
.fp-select .fp-reflist .mdl-right {
  vertical-align: top;
}
.fp-select .fp-select-buttons {
  float: right;
}
.fp-select .fp-info {
  font-size: 0.703125rem;
}
.fp-select .fp-thumbnail {
  float: left;
  min-width: 110px;
  min-height: 110px;
  line-height: 110px;
  text-align: center;
  margin: 10px 20px 0 0;
  background: #fff;
  border: 1px solid #ddd;
}
.fp-select .fp-thumbnail img {
  border: 1px solid #ddd;
  padding: 3px;
  vertical-align: middle;
  margin: 10px;
}
.fp-select .fp-fileinfo {
  display: inline-block;
  margin-top: 10px;
}
.file-picker.fp-select .fp-fileinfo {
  max-width: 240px;
}
.fp-select .fp-fileinfo div {
  padding-bottom: 5px;
}
.file-picker.fp-select .uneditable {
  display: none;
}
.file-picker.fp-select .fp-select-loading {
  display: none;
}
.file-picker.fp-select.loading .fp-select-loading {
  display: block;
}
.file-picker.fp-select.loading form {
  display: none;
}
.fp-select .fp-dimensions.fp-unknown {
  display: none;
}
.fp-select .fp-size.fp-unknown {
  display: none;
}
.filemanager-loading {
  display: none;
}
.jsenabled .filemanager-loading {
  display: block;
  margin-top: 100px;
}
.filemanager.fm-loading .filemanager-toolbar, .filemanager.fm-loading .fp-pathbar, .filemanager.fm-loading .filemanager-container, .filemanager.fm-loaded .filemanager-loading, .filemanager.fm-maxfiles .fp-btn-add, .filemanager.fm-maxfiles .dndupload-message, .filemanager.fm-noitems .fp-btn-download, .filemanager.fm-noitems .fp-btn-delete, .filemanager .fm-empty-container, .filemanager.fm-noitems .filemanager-container .fp-content {
  display: none;
}
.filemanager .fp-img-downloading {
  display: none;
  padding-top: 7px;
}
.filemanager .filemanager-updating {
  display: none;
  text-align: center;
}
.filemanager.fm-updating .filemanager-updating {
  display: block;
  margin-top: 37px;
}
.filemanager.fm-updating .fm-content-wrapper, .filemanager.fm-nomkdir .fp-btn-mkdir, .fitem.disabled .filemanager .filemanager-toolbar, .fitem.disabled .filemanager .fp-pathbar, .fitem.disabled .filemanager .fp-restrictions, .fitem.disabled .filemanager .fm-content-wrapper {
  display: none;
}
.filemanager .fp-restrictions {
  text-align: right;
}
.filemanager-toolbar {
  padding: 4px;
  overflow: hidden;
}
.filemanager .fp-pathbar.empty {
  display: none;
}
.filepicker-filelist, .filemanager-container {
  min-height: 140px;
  border: 1px solid #8f959e;
  border-radius: 0.25rem;
}
.filemanager .fp-content {
  overflow: auto;
  max-height: 472px;
  min-height: 157px;
}
.filemanager-container, .filepicker-filelist {
  overflow: hidden;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.file-picker .yui3-datatable-header {
  /*rtl:raw:
    text-align: right;
    */
  background: initial;
}
.fitem.disabled .filepicker-filelist, .fitem.disabled .filemanager-container {
  background-color: #ebebe4;
}
.fitem.disabled .fp-btn-choose {
  color: #6a737b;
}
.fitem.disabled .filepicker-filelist .filepicker-filename {
  display: none;
}
.fp-iconview .fp-reficons1 {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
}
.fp-iconview .fp-reficons2 {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
}
.fp-iconview .fp-file.fp-hasreferences .fp-reficons1 {
  background: url("/theme/image.php?theme=classic&component=theme&image=fp%2Flink") no-repeat;
  /*rtl:raw:
    transform: scaleX(-1);
    */
  /*rtl:ignore*/
  background-position: bottom right;
  background-size: 16px 16px;
}
.fp-iconview .fp-file.fp-isreference .fp-reficons2 {
  background: url("/theme/image.php?theme=classic&component=theme&image=fp%2Falias") no-repeat;
  /*rtl:raw:
    transform: scaleX(-1);
    */
  /*rtl:ignore*/
  background-position: bottom left;
  background-size: 16px 16px;
}
.filemanager .fp-iconview .fp-file.fp-originalmissing .fp-thumbnail img {
  display: none;
}
.filemanager .fp-iconview .fp-file.fp-originalmissing .fp-thumbnail {
  background: url(/theme/image.php?theme=classic&component=core&image=s%2Fdead) no-repeat;
  background-position: center center;
}
.filemanager .yui3-datatable table {
  border: 0 solid #bbb;
  width: 100%;
}
/* Override YUI default styling */
/* stylelint-disable declaration-no-important */
.filemanager .yui3-datatable-header {
  /*rtl:raw:
        text-align: right;
        */
  background: #fff !important;
  border-bottom: 1px solid #ccc !important;
  border-left: 0 solid #fff !important;
  color: #555 !important;
}
.filemanager .yui3-datatable-odd .yui3-datatable-cell {
  background-color: #f6f6f6 !important;
  border-left: 0 solid #f6f6f6;
}
.filemanager .yui3-datatable-even .yui3-datatable-cell {
  background-color: #fff !important;
  border-left: 0 solid #fff;
}
/* stylelint-enable */
.filemanager .fp-filename-icon.fp-hasreferences .fp-reficons1 {
  background: url("/theme/image.php?theme=classic&component=theme&image=fp%2Flink_sm") no-repeat 0 0;
  height: 100%;
  width: 100%;
  /*rtl:raw:
    transform: scaleX(-1);
    */
  position: absolute;
  top: 8px;
  left: 17px;
  background-size: 16px 16px;
}
.filemanager .fp-filename-icon.fp-isreference .fp-reficons2 {
  background: url("/theme/image.php?theme=classic&component=theme&image=fp%2Falias_sm") no-repeat 0 0;
  height: 100%;
  width: 100%;
  /*rtl:raw:
    transform: scaleX(-1);
    */
  position: absolute;
  top: 9px;
  left: -6px;
  background-size: 16px 16px;
}
.filemanager .fp-contextmenu {
  display: none;
}
.filemanager .fp-iconview .fp-folder.fp-hascontextmenu .fp-contextmenu {
  position: absolute;
  right: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}
.filemanager .fp-treeview .fp-folder.fp-hascontextmenu .fp-contextmenu, .filemanager .fp-tableview .fp-folder.fp-hascontextmenu .fp-contextmenu {
  display: inline;
  position: absolute;
  left: 14px;
  margin-right: -20px;
  top: 6px;
}
.filepicker-filelist .filepicker-container, .filemanager.fm-noitems .fm-empty-container {
  display: block;
  position: absolute;
  top: 10px;
  bottom: 10px;
  left: 10px;
  right: 10px;
  border: 2px dashed #bbb;
  padding-top: 85px;
  text-align: center;
}
.filepicker-filelist .dndupload-target, .filemanager-container .dndupload-target {
  background: #fff;
  position: absolute;
  top: 10px;
  bottom: 10px;
  left: 10px;
  right: 10px;
  border: 2px dashed #fb7979;
  padding-top: 85px;
  text-align: center;
}
.filepicker-filelist.dndupload-over .dndupload-target, .filemanager-container.dndupload-over .dndupload-target {
  background: #fff;
  position: absolute;
  top: 10px;
  bottom: 10px;
  left: 10px;
  right: 10px;
  border: 2px dashed #6c8cd3;
  padding-top: 85px;
  text-align: center;
}
.dndupload-message {
  display: none;
}
.dndsupported .dndupload-message {
  display: inline;
}
.dnduploadnotsupported-message {
  display: none;
}
.dndnotsupported .dnduploadnotsupported-message {
  display: inline;
}
.dndupload-target {
  display: none;
}
.dndsupported .dndupload-ready .dndupload-target {
  display: block;
}
.dndupload-uploadinprogress {
  display: none;
  text-align: center;
}
.dndupload-uploading .dndupload-uploadinprogress {
  display: block;
}
.dndupload-arrow {
  width: 100%;
  height: 80px;
  position: absolute;
  top: 5px;
  color: #8f959e;
}
.fitem.disabled .filepicker-container, .fitem.disabled .fm-empty-container {
  display: none;
}
.dndupload-progressbars {
  padding: 10px;
  display: none;
}
.dndupload-inprogress .dndupload-progressbars {
  display: block;
}
.dndupload-inprogress .fp-content {
  display: none;
}
.filemanager.fm-noitems .dndupload-inprogress .fm-empty-container {
  display: none;
}
.filepicker-filelist.dndupload-inprogress .filepicker-container {
  display: none;
}
.filepicker-filelist.dndupload-inprogress a {
  display: none;
}
.filemanager.fp-select .fp-select-loading {
  display: none;
}
.filemanager.fp-select.loading .fp-select-loading {
  display: block;
}
.filemanager.fp-select.loading form {
  display: none;
}
.filemanager.fp-select.fp-folder .fp-license, .filemanager.fp-select.fp-folder .fp-author, .filemanager.fp-select.fp-file .fp-file-unzip, .filemanager.fp-select.fp-folder .fp-file-unzip, .filemanager.fp-select.fp-file .fp-file-zip, .filemanager.fp-select.fp-zip .fp-file-zip {
  display: none;
}
.filemanager.fp-select .fp-file-setmain, .filemanager.fp-select .fp-file-setmain-help {
  display: none;
}
.filemanager.fp-select.fp-cansetmain .fp-file-setmain, .filemanager.fp-select.fp-cansetmain .fp-file-setmain-help {
  display: inline-block;
}
.filemanager .fp-mainfile .fp-filename {
  font-weight: bold;
}
.filemanager.fp-select.fp-folder .fp-file-download {
  display: none;
}
.fm-operation {
  font-weight: bold;
}
.filemanager.fp-select .fp-original.fp-unknown, .filemanager.fp-select .fp-original .fp-originloading {
  display: none;
}
.filemanager.fp-select .fp-original.fp-loading .fp-originloading {
  display: inline;
}
.filemanager.fp-select .fp-reflist.fp-unknown, .filemanager.fp-select .fp-reflist .fp-reflistloading {
  display: none;
}
.filemanager.fp-select .fp-reflist.fp-loading .fp-reflistloading {
  display: inline;
}
.filemanager.fp-select .fp-reflist .fp-value {
  background: #f9f9f9;
  border: 1px solid #bbb;
  padding: 8px 7px;
  margin: 0;
  max-height: 75px;
  overflow: auto;
}
.filemanager.fp-select .fp-reflist .fp-value li {
  padding-bottom: 7px;
}
.filemanager.fp-mkdir-dlg {
  text-align: center;
}
.filemanager.fp-mkdir-dlg .fp-mkdir-dlg-text {
  text-align: left;
  margin: 20px;
}
.filemanager.fp-dlg {
  text-align: center;
}
.file-picker div.bd {
  text-align: left;
}
.fp-formset {
  padding: 10px;
}
.fp-formset input[type="file"] {
  line-height: inherit;
}
.fp-forminset {
  padding: 0 10px;
}
.fp-fileinfo .fp-value {
  display: inline-block;
  padding-left: 5px;
}
/** The message area **/
.hidden {
  display: none;
}
.preferences-container .container-fluid, .preferences-container .container-sm, .preferences-container .container-md, .preferences-container .container-lg, .preferences-container .container-xl {
  padding: 0;
}
.preferences-container .container-fluid .col-md-6, .preferences-container .container-sm .col-md-6, .preferences-container .container-md .col-md-6, .preferences-container .container-lg .col-md-6, .preferences-container .container-xl .col-md-6 {
  min-height: 20px;
}
.preferences-container .align-bottom {
  vertical-align: bottom;
}
.preferences-container .preference-table {
  border: 1px solid #ddd;
}
.preferences-container .preference-table thead th {
  text-align: center;
}
.preferences-container .preference-table thead th .config-warning {
  display: none;
}
.preferences-container .preference-table thead th.unconfigured .config-warning {
  display: inline-block;
}
.preferences-container .preference-table tr th {
  border-left: 1px solid #dee2e6;
}
.preferences-container .preference-table tr td:not(:first-child) {
  width: 150px;
  text-align: center;
}
.preferences-container .preference-table tr td:nth-child(even) {
  border: 1px solid #dee2e6;
}
.preferences-container .preference-table .preference-row .hover-tooltip-container {
  display: inline-block;
}
.preferences-container .preference-table .preference-row .preference-name {
  vertical-align: middle;
}
.preferences-container .preference-table .preference-row .disabled-message {
  text-align: center;
  height: 30px;
  line-height: 30px;
}
.preferences-container .preference-table .preference-row.loading .preference-name .loading-icon {
  display: block;
}
.disabled-message {
  display: none;
}
.disabled .disabled-message {
  display: block;
}
.disabled .disabled-message + form {
  display: none;
}
.general-settings-container .loading-icon {
  display: none;
}
.general-settings-container .loading .loading-icon {
  display: inline-block;
}
.general-settings-container label {
  display: inline-block;
}
.processor-container {
  position: relative;
}
.processor-container .loading-container {
  display: none;
  position: absolute;
  width: 100%;
  height: 100%;
  text-align: center;
  background-color: rgba(255, 255, 255, 0.5);
}
.processor-container .loading-container .vertical-align {
  height: 100%;
  width: 0%;
  display: inline-block;
  vertical-align: middle;
}
.processor-container.loading .loading-container {
  display: block;
}
.preferences-page-container .checkbox-container {
  margin: 30px 5px;
  line-height: 20px;
}
.preferences-page-container .checkbox-container input {
  line-height: 20px;
  margin: 0;
}
.preferences-page-container .checkbox-container .loading-icon {
  display: none;
}
.preferences-page-container .checkbox-container.loading .loading-icon {
  display: inline-block;
}
.notification-area {
  height: 600px;
  box-sizing: border-box;
  border-radius: 4px;
  margin-bottom: 30px;
  border: 1px solid #e3e3e3;
}
@media (max-height: 670px) {
  .notification-area {
    height: 500px;
  }
}
.notification-area .control-area {
  box-sizing: border-box;
  display: inline-block;
  width: 300px;
  height: 100%;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  border-right: 1px solid #e3e3e3;
}
.notification-area .control-area .content {
  position: relative;
}
.notification-area .control-area .content .content-item-container {
  cursor: pointer;
}
.notification-area .control-area .content:empty + .empty-text {
  display: block;
}
.notification-area .control-area .loading-icon {
  display: none;
}
.notification-area .control-area .empty-text {
  display: none;
  text-align: center;
  padding-top: 20px;
}
.notification-area .control-area.loading .loading-icon {
  display: block;
  text-align: center;
  box-sizing: border-box;
  padding: 5px;
}
.notification-area .control-area.loading .content:empty + .empty-text {
  display: none;
}
.notification-area .content-area {
  box-sizing: border-box;
  display: inline-block;
  width: calc(100% - 300px);
  float: right;
}
.notification-area .content-area .toggle-mode {
  display: none;
}
.notification-area .content-area .header {
  height: 50px;
  box-sizing: border-box;
  border-bottom: 1px solid #e3e3e3;
  padding: 5px;
}
.notification-area .content-area .header .image-container {
  display: inline-block;
  height: 25px;
  width: 24px;
  float: left;
}
.notification-area .content-area .header .subject-container {
  display: inline-block;
  max-width: calc(100% - 24px);
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  height: 25px;
  padding-left: 5px;
  box-sizing: border-box;
}
.notification-area .content-area .header .timestamp {
  font-size: 10px;
  line-height: 10px;
  margin: 0;
  color: #666;
  margin-left: 30px;
}
.notification-area .content-area .header:empty {
  display: none;
}
.notification-area .content-area > .content {
  height: 500px;
  box-sizing: border-box;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  padding: 15px;
}
@media (max-height: 670px) {
  .notification-area .content-area > .content {
    height: 400px;
  }
}
.notification-area .content-area > .content:empty {
  display: none;
}
.notification-area .content-area > .content:empty + .empty-text {
  display: block;
  text-align: center;
  padding-top: 100px;
}
.notification-area .content-area .empty-text {
  display: none;
}
.notification-area .content-area .footer {
  height: 50px;
  box-sizing: border-box;
  text-align: center;
}
.notification-area .content-area .footer a {
  line-height: 50px;
}
.notification-area .content-area .footer:empty {
  display: none;
}
@media (max-width: 979px) {
  .notification-area {
    position: relative;
    overflow: hidden;
  }
  .notification-area .control-area {
    border-right: none;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 1;
    visibility: visible;
    transition: left 0.25s;
  }
  .notification-area .content-area {
    width: 100%;
    position: absolute;
    top: 0;
    right: -100%;
    opacity: 0;
    visibility: hidden;
    transition: right 0.25s, opacity 0.25s, visibility 0.25s;
  }
  .notification-area .content-area .toggle-mode {
    display: inline-block;
    float: left;
    width: 70px;
    height: 50px;
    line-height: 50px;
    box-sizing: border-box;
    border-right: 1px solid #e3e3e3;
    border-bottom: 1px solid #e3e3e3;
  }
  .notification-area .content-area .header {
    display: inline-block;
    width: calc(100% - 70px);
  }
  .notification-area.show-content-area .control-area {
    left: -100%;
    opacity: 0;
    visibility: hidden;
    transition: left 0.25s, opacity 0.25s, visibility 0.25s;
  }
  .notification-area.show-content-area .content-area {
    right: 0;
    opacity: 1;
    visibility: visible;
    transition: right 0.25s;
  }
}
.drawer .message-app {
  height: 100%;
}
.drawer .message-app .icon-back-in-app {
  display: none;
}
.drawer .message-app .icon-back-in-drawer {
  display: inherit;
}
.message-app {
  display: flex;
  flex-direction: column;
  background-color: #eff1f3;
}
.message-app .icon-back-in-drawer {
  display: none;
}
.message-app.main {
  min-height: 400px;
}
.message-app .header-container {
  flex-shrink: 0;
}
.message-app .overflow-y {
  overflow-y: auto;
}
@media (max-height: 320px) {
  .message-app .header-container [data-region="view-overview"]:not(.hidden) {
    display: flex;
    align-items: center;
  }
  .message-app .footer-container [data-region="view-overview"] {
    display: none;
  }
  .message-app .overflow-y {
    overflow-y: unset;
  }
}
.message-app .body-container {
  flex: 1;
  overflow: hidden;
}
.message-app .body-container > * {
  position: absolute;
  right: 0;
  left: 0;
  top: 0;
  bottom: 0;
  overflow: auto;
}
.message-app .footer-container {
  flex-shrink: 0;
}
.message-app .footer-container textarea {
  direction: ltr;
}
.message-app .contact-status {
  position: absolute;
  left: 39px;
  top: 39px;
  width: 10px;
  height: 10px;
  border-radius: 50%;
}
.message-app .contact-status.online {
  border: 1px solid #fff;
  background-color: #357a32;
}
.message-app .message p {
  margin: 0;
}
.message-app .clickable {
  cursor: pointer;
}
.message-app .clickable:hover {
  filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.3));
}
.message-app a, .message-app .btn-link {
  color: inherit;
}
.message-app .btn-link:hover, .message-app .btn-link:focus {
  background-color: rgba(0, 0, 0, 0.035);
  text-decoration: none;
}
.message-app .icon {
  margin-right: 0;
}
.message-app .overview-section-toggle .collapsed-icon-container {
  display: none;
}
.message-app .overview-section-toggle .expanded-icon-container {
  display: inline-block;
}
.message-app .overview-section-toggle.collapsed .collapsed-icon-container {
  display: inline-block;
}
.message-app .overview-section-toggle.collapsed .expanded-icon-container {
  display: none;
}
.message-app .btn.btn-link.btn-icon {
  height: 16px;
  width: 16px;
  padding: 0;
  border-radius: 50%;
  flex-shrink: 0;
}
.message-app .btn.btn-link.btn-icon:hover, .message-app .btn.btn-link.btn-icon:focus {
  background-color: #e9ecef;
}
.message-app .btn.btn-link.btn-icon.icon-size-0 {
  height: 20px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 20px !important;
  /* stylelint-disable-line declaration-no-important */
}
.message-app .btn.btn-link.btn-icon.icon-size-1 {
  height: 24px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 24px !important;
  /* stylelint-disable-line declaration-no-important */
}
.message-app .btn.btn-link.btn-icon.icon-size-2 {
  height: 28px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 28px !important;
  /* stylelint-disable-line declaration-no-important */
}
.message-app .btn.btn-link.btn-icon.icon-size-3 {
  height: 36px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 36px !important;
  /* stylelint-disable-line declaration-no-important */
}
.message-app .btn.btn-link.btn-icon.icon-size-4 {
  height: 44px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 44px !important;
  /* stylelint-disable-line declaration-no-important */
}
.message-app .btn.btn-link.btn-icon.icon-size-5 {
  height: 52px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 52px !important;
  /* stylelint-disable-line declaration-no-important */
}
.message-app .btn.btn-link.btn-icon.icon-size-6 {
  height: 60px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 60px !important;
  /* stylelint-disable-line declaration-no-important */
}
.message-app .btn.btn-link.btn-icon.icon-size-7 {
  height: 68px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 68px !important;
  /* stylelint-disable-line declaration-no-important */
}
.message-app .view-overview-body .section {
  display: block;
}
.message-app .view-overview-body .section.expanded {
  display: flex;
}
.message-app .view-overview-body .section div[data-region="toggle"] {
  padding: 0.1rem;
}
.message-app .view-conversation .content-message-container img {
  max-width: 100%;
}
.message-app .list-group {
  border-radius: 0;
}
.message-app .list-group .list-group-item {
  border-left: 0;
  border-right: 0;
}
.message-app .list-group .list-group-item:hover {
  color: #fff;
  background-color: #0f6cbf;
}
.message-app .list-group .list-group-item:hover .badge-primary {
  background-color: #fff;
  color: #0f6cbf;
}
.message-app .list-group .list-group-item:first-child {
  border-top: 0;
}
.message-app .list-group .list-group-item:last-child {
  border-bottom: 0;
}
.message-app .list-group .list-group-item.list-group-item-action {
  margin: 0.1rem;
  width: auto;
  text-align: inherit;
}
.message-app .last-message {
  min-height: 1.5rem;
}
.message-app .section .collapsing {
  overflow: hidden;
}
.message-app .message.send {
  background-color: #dee2e6;
  color: #1d2125;
}
.message-app .message.send .time {
  color: #1d2125;
}
.message-app .message.send .tail {
  right: 0;
  margin-right: -0.5rem;
  border-bottom-color: #dee2e6;
}
.message-app .message.received {
  background-color: #fff;
  color: #1d2125;
}
.message-app .message.received .time {
  color: #616466;
}
.message-app .message.received .tail {
  left: 0;
  margin-left: -0.5rem;
  border-bottom-color: #fff;
}
.message-app .message .tail {
  content: "";
  bottom: 0;
  width: 0;
  height: 0;
  border: 0.5rem solid transparent;
  position: relative;
}
.message-app .day {
  color: #1d2125;
}
.message-app .lazy-load-list {
  overflow-y: auto;
}
#page-message-index #page-header {
  display: none;
}
#page-message-index #region-main {
  height: 100%;
  margin-top: 0;
}
#page-message-index #region-main .conversationcontainer .section {
  max-height: calc(100vh - 50px);
}
#page-message-index #region-main div[role="main"] {
  height: 100%;
}
#page-message-index #region-main div[role="main"] #maincontent {
  margin-top: -1px;
}
#page-message-index #region-main div[role="main"] .message-app.main {
  height: 100%;
}
.dir-rtl .message-drawer {
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.08);
}
.message-app .emoji-picker-container {
  position: absolute;
  top: -5px;
  right: 5px;
  transform: translateY(-100%);
}
.message-app .emoji-picker-container .emoji-picker .picker-row .emoji-button {
  height: 40px;
  width: 40px;
}
@media (max-width: 575.98px) {
  .message-app .emoji-picker-container {
    right: -0.5rem;
  }
}
@media (max-height: 495px) {
  .message-app .emoji-picker-container {
    position: fixed;
    top: 0;
    transform: none;
  }
}
.message-app .emoji-auto-complete-container {
  overflow: auto;
  max-height: 90px;
  transition: max-height 0.15s ease-in-out;
  visibility: visible;
}
.message-app .emoji-auto-complete-container.hidden {
  display: block;
  max-height: 0;
  visibility: hidden;
  overflow: hidden;
  transition: max-height 0.15s ease-in-out, visibility 0s linear 0.15s, overflow 0s linear 0.15s;
}
/* Question */
.questionbank h2 {
  margin-top: 0;
}
.questioncategories h3 {
  margin-top: 0;
}
#chooseqtypebox {
  margin-top: 1em;
}
#chooseqtype h3 {
  margin: 0 0 0.3em;
}
#chooseqtype .instruction {
  display: none;
}
#chooseqtype .fakeqtypes {
  border-top: 1px solid silver;
}
#chooseqtype .qtypeoption {
  margin-bottom: 0.5em;
}
#chooseqtype label {
  display: block;
}
#chooseqtype .qtypename img {
  padding: 0 0.3em;
}
#chooseqtype .qtypename {
  display: inline-table;
  width: 16em;
}
#chooseqtype .qtypesummary {
  display: block;
  margin: 0 2em;
}
#chooseqtype .submitbuttons {
  margin: 0.7em 0;
  text-align: center;
}
#qtypechoicecontainer {
  display: none;
}
#qtypechoicecontainer_c.yui-panel-container.shadow .underlay {
  background: none;
}
#qtypechoicecontainer.yui-panel .hd {
  color: #333;
  letter-spacing: 1px;
  text-shadow: 1px 1px 1px #fff;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border: 1px solid #ccc;
  border-bottom: 1px solid #bbb;
  background-image: linear-gradient(to bottom, #fff 0%, #ccc 100%);
  background-repeat: repeat-x;
}
#qtypechoicecontainer {
  font-size: 12px;
  color: #333;
  background: #f2f2f2;
  border-radius: 10px;
  border: 1px solid #ccc;
  border-top: 0 none;
}
#qtypechoicecontainer #chooseqtype {
  width: 40em;
}
#chooseqtypehead h3 {
  margin: 0;
  font-weight: normal;
}
#chooseqtype .qtypes {
  position: relative;
  border-bottom: 1px solid #bbb;
  padding: 0.24em 0;
}
#chooseqtype .alloptions {
  overflow-x: hidden;
  overflow-y: auto;
  max-height: calc(100vh - 15em);
  width: 60%;
}
#chooseqtype .qtypeoption {
  margin-bottom: 0;
  padding: 0.3em 0.3em 0.3em 1.6em;
}
#chooseqtype .qtypeoption img {
  vertical-align: text-bottom;
  padding-left: 1em;
  padding-right: 0.5em;
}
#chooseqtype .selected {
  background-color: #fff;
}
#chooseqtype .instruction, #chooseqtype .qtypesummary {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 60%;
  margin: 0;
  overflow-x: hidden;
  overflow-y: auto;
  padding: 1.5em 1.6em;
  background-color: #fff;
}
#chooseqtype .instruction, #chooseqtype .selected .qtypesummary {
  display: block;
}
#categoryquestions {
  margin: 0;
}
#categoryquestions td, #categoryquestions th {
  padding: 0 0.2em;
  max-width: 40vw;
}
#categoryquestions th {
  text-align: left;
  font-weight: normal;
}
#categoryquestions > tbody > tr.r1 {
  background-color: rgba(0, 0, 0, 0.03);
}
#categoryquestions > tbody > tr.highlight {
  border: 1px solid #008196;
}
#categoryquestions .checkbox {
  padding-left: 5px;
}
#categoryquestions .checkbox input[type="checkbox"] {
  margin-left: 0;
  float: none;
}
#categoryquestions .iconcol {
  padding: 3px;
  box-sizing: content-box;
}
#categoryquestions .iconcol .icon {
  margin: 0;
  width: 12px;
  height: 12px;
}
#categoryquestions label {
  margin: 0;
  display: block;
}
#categoryquestions .header {
  text-align: left;
}
#page-mod-quiz-edit div.questionbankwindow div.header {
  margin: 0;
}
#page-mod-quiz-edit div.questionbankwindow.block {
  padding: 0;
}
.questionbank .singleselect {
  margin: 0;
}
/* Question editing form */
#combinedfeedbackhdr div.fhtmleditor {
  padding: 0;
}
#combinedfeedbackhdr div.fcheckbox {
  margin-bottom: 1em;
}
#multitriesheader div.fitem_feditor {
  margin-top: 1em;
}
#multitriesheader div.fitem_fgroup {
  margin-bottom: 1em;
}
#multitriesheader div.fitem_fgroup fieldset.felement label {
  margin-left: 0.3em;
  margin-right: 0.3em;
}
body.path-question-type {
  /* Hacks to display the labels within a form group. */
}
body.path-question-type .form-group .col-form-label.sr-only:not(legend):not([for="id_category"]) {
  position: static;
  width: auto;
  height: auto;
  padding: 0;
  margin: 0 0.5rem 0 0;
  overflow: visible;
  clip: auto;
  clip-path: none;
  border: 0;
}
.que {
  clear: left;
  text-align: left;
  margin: 0 auto 1.8em auto;
}
.que .info {
  float: left;
  width: 7em;
  padding: 0.5em;
  margin-bottom: 1.8em;
  background-color: #f8f9fa;
  border: 1px solid #cad0d7;
  border-radius: 2px;
}
.que h3.no {
  margin: 0;
  font-size: 0.8em;
  line-height: 1;
}
.que span.qno {
  font-size: 1.5em;
  font-weight: bold;
}
.que .info > div {
  font-size: 0.8em;
  margin-top: 0.7em;
}
.que .info .questionflag.editable {
  cursor: pointer;
}
.que .info .editquestion img, .que .info .questionflag img, .que .info .questionflag input {
  vertical-align: bottom;
}
.que .content {
  margin: 0 0 0 8.5em;
}
.que .formulation, .que .outcome, .que .comment {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 0 solid transparent;
  border-radius: 0.25rem;
}
.que .outcome, .que .comment {
  color: #8e662e;
  background-color: #fcefdc;
  border-color: #fbe8cd;
  /* stylelint-disable-line max-line-length */
}
.que .outcome hr, .que .comment hr {
  border-top-color: #f9ddb5;
}
.que .outcome .alert-link, .que .comment .alert-link {
  color: #674a22;
}
.que .outcome a, .que .comment a {
  color: #041c31;
}
.que .formulation {
  color: #001a1e;
  background-color: #e7f3f5;
  border-color: #b8dce2;
  /* stylelint-disable-line max-line-length */
}
.que .formulation hr {
  border-top-color: #a6d3db;
}
.que .formulation .alert-link {
  color: black;
}
.que.multichoice .answer div.r0 .icon.fa-check, .que.multichoice .answer div.r1 .icon.fa-check, .que.multichoice .answer div.r0 .icon.fa-remove, .que.multichoice .answer div.r1 .icon.fa-remove {
  text-indent: 0;
}
.formulation input[type="text"], .formulation select {
  width: auto;
  vertical-align: baseline;
}
.que.multianswer .formulation .yui3-widget-positioned {
  box-sizing: content-box;
}
.que.multianswer .formulation .yui3-widget-positioned .feedbackspan {
  width: inherit;
  max-width: inherit;
}
.path-mod-quiz input[size] {
  width: auto;
  max-width: 100%;
}
.que .comment {
  color: #1c3f1a;
  background-color: #d7e4d6;
  border-color: #c6dac6;
  /* stylelint-disable-line max-line-length */
}
.que .comment hr {
  border-top-color: #b7d0b7;
}
.que .comment .alert-link {
  color: #0c1b0b;
}
.que .ablock {
  margin: 0.7em 0 0.3em 0;
}
.que .im-controls {
  margin-top: 0.5em;
  text-align: left;
}
.que .specificfeedback, .que .generalfeedback, .que .numpartscorrect .que .rightanswer, .que .im-feedback, .que .feedback, .que p {
  margin: 0 0 0.5em;
}
.que .correctness.correct {
  color: #fff;
  background-color: #357a32;
}
a.que .correctness.correct:hover, a.que .correctness.correct:focus {
  color: #fff;
  background-color: #255623;
}
a.que .correctness.correct:focus, a.que .correctness.correct.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(53, 122, 50, 0.5);
}
.que .correctness.partiallycorrect {
  color: #1d2125;
  background-color: #f0ad4e;
}
a.que .correctness.partiallycorrect:hover, a.que .correctness.partiallycorrect:focus {
  color: #1d2125;
  background-color: #ec971f;
}
a.que .correctness.partiallycorrect:focus, a.que .correctness.partiallycorrect.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(240, 173, 78, 0.5);
}
.que .correctness.notanswered, .que .correctness.incorrect {
  color: #fff;
  background-color: #ca3120;
}
a.que .correctness.notanswered:hover, a.que .correctness.incorrect:hover, a.que .correctness.notanswered:focus, a.que .correctness.incorrect:focus {
  color: #fff;
  background-color: #9e2619;
}
a.que .correctness.notanswered:focus, a.que .correctness.incorrect:focus, a.que .correctness.notanswered.focus, a.que .correctness.incorrect.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(202, 49, 32, 0.5);
}
.que .qtext {
  margin-bottom: 1.5em;
}
.que .validationerror {
  color: #ca3120;
}
.que .grading, .que .comment, .que .commentlink, .que .history {
  margin-top: 0.5em;
}
.que .history h3 {
  margin: 0 0 0.2em;
  font-size: 1em;
}
.que .history table {
  width: 100%;
  margin: 0;
}
.que .history .current {
  font-weight: bold;
}
.que .questioncorrectnessicon {
  vertical-align: text-bottom;
}
body.jsenabled .questionflag input[type=checkbox] {
  display: none;
}
.que .questionflagimage {
  padding-right: 3px;
  height: 16px;
  width: 16px;
}
.importerror {
  margin-top: 10px;
  border-bottom: 1px solid #555;
}
.mform .que.comment .fitemtitle {
  width: 20%;
}
#page-question-preview #techinfo {
  margin: 1em 0;
}
#page-question-preview .collapsibleregion .collapsibleregioncaption, #page-question-preview .collapsibleregion .collapsibleregionextracontent {
  display: inline-block;
}
#page-mod-quiz-edit ul.slots .activityinstance > a {
  display: flex;
  max-width: 100%;
  align-items: center;
  text-indent: 0;
  padding-left: 0;
}
#page-mod-quiz-edit ul.slots .activityinstance img.activityicon {
  margin-left: 0;
  width: 16px;
  height: 16px;
  padding-right: 4px;
}
#page-mod-quiz-edit .activity img.activityicon {
  vertical-align: text-top;
}
#page-mod-quiz-edit .box.generalbox.questionbank {
  padding: 0.5em;
}
#page-mod-quiz-edit .questionbank .categorypagingbarcontainer, #page-mod-quiz-edit .questionbank .categoryquestionscontainer, #page-mod-quiz-edit .questionbank .choosecategory {
  padding: 0;
}
#page-mod-quiz-edit .questionbank .choosecategory select {
  width: 100%;
}
#page-mod-quiz-edit div.questionbank .categoryquestionscontainer {
  background: transparent;
}
#page-mod-quiz-edit .questionbankwindow div.header {
  color: #444;
  text-shadow: none;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  margin: 0 -10px 0 -10px;
  padding: 2px 10px 2px 10px;
  background: transparent;
  /* Old browsers */
}
#page-mod-quiz-edit .questionbankwindow div.header a:link, #page-mod-quiz-edit .questionbankwindow div.header a:visited {
  color: #0f6cbf;
}
#page-mod-quiz-edit .questionbankwindow div.header a:hover {
  color: #094478;
}
#page-mod-quiz-edit .createnewquestion {
  padding: 0.3em 0;
}
#page-mod-quiz-edit .createnewquestion div, #page-mod-quiz-edit .createnewquestion input {
  margin: 0;
}
#page-mod-quiz-edit .questionbankwindow div.header .title {
  color: #1d2125;
}
#page-mod-quiz-edit div.container div.generalbox {
  background-color: transparent;
  padding: 1.5em;
}
#page-mod-quiz-edit .categoryinfo {
  background-color: transparent;
  border-bottom: none;
}
#page-mod-quiz-edit .createnewquestion .singlebutton input {
  margin-bottom: 0;
}
#page-mod-quiz-edit div.questionbank .categorysortopotionscontainer, #page-mod-quiz-edit div.questionbank .categoryselectallcontainer {
  padding: 0 0 1.5em 0;
}
#page-mod-quiz-edit div.questionbank .categorypagingbarcontainer {
  background-color: transparent;
  margin: 0;
  border-top: 0;
  border-bottom: 0;
}
#page-mod-quiz-edit div.questionbank .categorypagingbarcontainer .paging {
  padding: 0 0.3em;
}
#page-mod-quiz-edit div.question div.content div.questioncontrols {
  background-color: #fff;
}
#page-mod-quiz-edit div.question div.content div.points {
  margin-top: -0.5em;
  padding-bottom: 0;
  border: none;
  background-color: #fff;
  position: static;
  width: 12.1em;
  float: right;
  margin-right: 60px;
}
#page-mod-quiz-edit div.question div.content div.points br {
  display: none;
}
#page-mod-quiz-edit div.question div.content div.points label {
  display: inline-block;
}
#page-mod-quiz-edit div.quizpage .pagecontent .pagestatus {
  background-color: #fff;
}
#page-mod-quiz-edit .quizpagedelete, #page-mod-quiz-edit .quizpagedelete img {
  background-color: transparent;
}
#page-mod-quiz-edit div.quizpage .pagecontent {
  border: 1px solid #ddd;
  border-radius: 2px;
  overflow: hidden;
}
#page-mod-quiz-edit div.questionbank .categoryinfo {
  padding: 0.3em 0;
}
.questionbankwindow .module {
  width: auto;
}
.questionbankwindow .form-autocomplete-selection {
  margin-left: 0;
}
#page-mod-quiz-edit div.editq div.question div.content {
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 2px;
  overflow: hidden;
}
#page-mod-quiz-edit ul.slots .activityinstance img.activityicon {
  margin-top: 0;
  padding-right: 4px;
}
.path-mod-quiz .statedetails {
  display: block;
  font-size: 0.9em;
}
a#hidebankcmd {
  color: #0f6cbf;
}
.que.shortanswer .answer {
  padding: 0;
}
.que label {
  display: inline;
}
.que .content .answer div[data-region="answer-label"] .mediaplugin {
  width: 400px;
}
body.path-question-type .mform fieldset.hidden {
  padding: 0;
  margin: 0.7em 0 0;
}
.que.ddwtos, .que.ddwtos .drop {
  box-sizing: content-box;
}
.tag-condition-container {
  position: relative;
}
@media (max-width: 767.98px) {
  .que .info {
    float: none;
    width: auto;
  }
  .que .content {
    margin: 0;
  }
}
@media (max-width: 991.98px) {
  #categoryquestions td, #categoryquestions th {
    max-width: 75vw;
  }
}
/* user.less */
.userprofile .fullprofilelink {
  text-align: center;
  margin: 10px;
}
.userprofile .page-context-header {
  margin-bottom: 10px;
  column-count: 1;
}
.userprofile .description {
  margin-top: 10px;
  margin-bottom: 30px;
}
.userprofile .profile_tree {
  column-count: 2;
}
#participantsform .no-overflow {
  overflow: visible;
}
.userprofile dl.list > dd + dt {
  clear: left;
}
.user-box {
  margin: 8px;
  width: 115px;
  height: 160px;
  text-align: center;
  float: left;
  clear: none;
}
#page-user-profile .node_category ul, .path-user .node_category ul {
  margin: 0;
  list-style: none;
  padding-left: 0;
}
#page-user-profile .node_category li, .path-user .node_category li {
  margin-top: 5px;
}
#page-user-profile .node_category .editprofile, #page-user-profile .node_category .viewmore, .path-user .node_category .editprofile, .path-user .node_category .viewmore {
  text-align: right;
}
.ajax-contact-button {
  box-sizing: border-box;
  position: relative;
}
.ajax-contact-button.loading .loading-icon {
  display: block;
}
.ajax-contact-button .loading-icon {
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.7);
}
.ajax-contact-button .loading-icon .icon {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
@media (max-width: 480px) {
  .userprofile .profile_tree {
    /** Display the profile on one column on phones@mixin  */
    column-count: 1;
  }
}
.userlist #showall {
  margin: 10px 0;
}
.userlist .buttons {
  text-align: center;
}
.userlist .buttons label {
  padding: 0 3px;
}
.userlist table#participants {
  text-align: center;
}
.userlist table#participants td {
  text-align: left;
  padding: 4px;
  vertical-align: middle;
}
.userlist table#participants th {
  text-align: left;
  padding: 4px;
}
.userlist table.controls {
  width: 100%;
}
.userlist table.controls tr {
  vertical-align: top;
}
.userlist table.controls .right {
  text-align: right;
}
.userlist table.controls .groupselector {
  margin-bottom: 0;
  margin-top: 0;
}
.userlist table.controls .groupselector label {
  display: block;
}
.userinfobox {
  width: 100%;
  border: 1px solid;
  border-collapse: separate;
  padding: 10px;
}
.userinfobox .left, .userinfobox .side {
  width: 100px;
  vertical-align: top;
}
.userinfobox .userpicture {
  width: 100px;
  height: 100px;
}
.userinfobox .content {
  vertical-align: top;
}
.userinfobox .links {
  width: 100px;
  padding: 5px;
  vertical-align: bottom;
}
.userinfobox .links a {
  display: block;
}
.userinfobox .list td {
  padding: 3px;
}
.userinfobox .username {
  padding-bottom: 20px;
  font-weight: bold;
}
.userinfobox td.label {
  text-align: right;
  white-space: nowrap;
  vertical-align: top;
  font-weight: bold;
}
.group-edit {
  position: absolute;
  right: 0;
  margin-right: 0.6em;
}
.group-image {
  display: block;
  float: left;
  margin-right: 1em;
}
.group-image .grouppicture {
  border-radius: 50%;
}
.groupinfobox .left {
  padding: 10px;
  width: 100px;
  vertical-align: top;
}
.course-participation #showall {
  text-align: center;
  margin: 10px 0;
}
#user-policy .noticebox {
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 10px;
  width: 80%;
  height: 250px;
}
#user-policy #policyframe {
  width: 100%;
  height: 100%;
}
.iplookup #map {
  margin: auto;
}
.userselector select {
  width: 100%;
}
.userselector div {
  margin-top: 0.2em;
}
.userselector div label {
  margin-right: 0.3em;
}
/* Next style does not work in all browsers but looks nicer when it does */
.userselector .userselector-infobelow {
  font-size: 0.8em;
}
#userselector_options .collapsibleregioncaption {
  font-weight: bold;
}
#userselector_options p {
  margin: 0.2em 0;
  text-align: left;
}
/** user full profile */
#page-user-profile .messagebox {
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}
/** user course profile */
#page-course-view-weeks .messagebox {
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}
.profileeditor > .singleselect {
  margin: 0 0.5em 0 0;
}
.profileeditor > .singlebutton {
  display: inline-block;
  margin: 0 0 0 0.5em;
}
.profileeditor > .singlebutton div, .profileeditor > .singlebutton input {
  margin: 0;
}
.userlist h3 .action-icon {
  display: none;
}
#page-enrol-users .popover {
  max-width: none;
}
.user-enroller-panel {
  width: 600px;
}
[data-filterverbfor], [data-filterregion="filter"]:last-child [data-filterregion="joinadverb"] {
  display: none;
}
[data-filterverb="0"] [data-filterverbfor="0"], [data-filterverb="1"] [data-filterverbfor="1"], [data-filterverb="2"] [data-filterverbfor="2"] {
  display: block;
}
#page-user-contactsitesupport .supporticon i {
  font-size: 35px;
}
.search-results .result {
  margin-left: 0;
  margin-right: 0;
}
.search-results .result .result-content {
  margin: 7px 0;
}
.search-results .result .filename {
  font-style: italic;
}
.simplesearchform .input-group input.form-control {
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}
.simplesearchform .btn {
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}
.simplesearchform .btn .icon {
  margin: 0;
}
.simplesearchform .btn-submit {
  border-color: #8f959e;
  color: #6a737b;
}
.simplesearchform .btn-close, .simplesearchform .btn-clear {
  position: absolute;
  top: 0;
  right: 0;
  color: #6a737b;
  z-index: 4;
}
.simplesearchform .btn-close {
  right: 2.2rem;
}
.simplesearchform .btn-submit {
  background-color: #f8f9fa;
}
.simplesearchform .withclear {
  padding-right: 2rem;
}
.simplesearchform .searchinput {
  display: flex;
  flex: 1 1 auto;
}
.simplesearchform .collapsing {
  height: inherit;
  transition: none;
  width: inherit;
}
.simplesearchform .collapse.show, .simplesearchform .collapsing {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  display: flex;
  background-color: #fff;
  z-index: 1060;
  height: 50px;
}
.simplesearchform .collapse.show .form-inline, .simplesearchform .collapsing .form-inline {
  width: auto;
  margin-left: auto;
  margin-right: auto;
}
.search-areas-actions {
  margin-bottom: 1rem;
}
.search-areas-actions > div {
  margin-right: 1rem;
  display: inline-block;
}
#core-search-areas .lastcol li {
  margin-left: 24px;
  text-indent: -24px;
}
#core-search-areas .lastcol li > i {
  text-indent: 0;
}
/**
 * Moodle forms HTML isn't changeable via renderers (yet?) so this
 * .less file imports styles from the bootstrap $variables file and
 * adds them to the existing Moodle form CSS ids and classes.
 *
 */
.jsenabled .mform .containsadvancedelements .advanced {
  display: none;
}
.mform .containsadvancedelements .advanced.show {
  display: flex;
}
#adminsettings span.error {
  display: inline-block;
  border: 1px solid #f0c5c1;
  border-radius: 4px;
  background-color: #f4d6d2;
  padding: 4px;
  margin-bottom: 4px;
}
.mform .form-inline .form-control, .mform .form-inline .custom-select {
  max-width: 100%;
}
.mform .form-inline textarea.form-control {
  width: 100%;
}
.mform .form-inline .form-group {
  margin: 0.1rem 0.25rem 0.1rem 0;
}
.mform .form-inline br + label {
  justify-content: flex-start;
  width: 100%;
  margin-right: 0;
}
.unresponsive.mform .form-inline, .unresponsive.mform .form-inline label {
  display: inline-flex;
}
#jump-to-activity.custom-select {
  width: 100%;
}
.mform fieldset {
  margin-bottom: 0.5rem;
  border-bottom: 1px solid #dee2e6;
}
#adminsettings .form-control[size] {
  width: auto;
}
#adminsettings .error {
  color: #ca3120;
}
.mform ul.file-list {
  padding: 0;
  margin: 0;
  list-style: none;
}
.mform label .req, .mform label .adv {
  cursor: help;
}
/*rtl:ignore*/
input#id_externalurl {
  direction: ltr;
}
#portfolio-add-button {
  display: inline;
}
.form-defaultinfo, .form-label .form-shortname {
  color: #6a737b;
}
.form-label .form-shortname {
  font-size: 0.703125rem;
  display: block;
}
.form-item .form-inline {
  display: inline;
}
.form-inline label:not(.sr-only):not(.accesshide) + select {
  margin-left: 0.5rem;
}
.formsettingheading .form-horizontal {
  color: #6a737b;
}
.no-felement.fstatic {
  color: #6a737b;
  padding-top: 5px;
}
.no-fitem .fstaticlabel {
  font-weight: bold;
}
.form-item .form-setting .defaultsnext > input {
  display: inline-block;
}
.form-item .form-setting .form-checkbox.defaultsnext {
  margin-top: 5px;
  display: inline-block;
}
#adminsettings h3 {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 1.5;
  font-size: 1.171875rem;
  line-height: 3;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
/* rtl:ignore */
.mform .fitem .felement input[name="email"], .mform .fitem .felement input[name="email2"], .mform .fitem .felement input[name="url"], .mform .fitem .felement input[name="idnumber"], .mform .fitem .felement input[name="phone1"], .mform .fitem .felement input[name="phone2"] {
  text-align: left;
  direction: ltr;
}
.que.match .mediaplugin {
  width: 50vw;
}
/* rtl:ignore */
#page-admin-grade-edit-scale-edit .error input#id_name {
  margin-right: 170px;
}
#page-grade-edit-outcome-course .courseoutcomes {
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
#page-grade-edit-outcome-course .courseoutcomes td {
  text-align: center;
}
/* Install Process' text fields Forms, should always be justified to the left */
/* rtl:ignore */
#installform #id_wwwroot, #installform #id_dirroot, #installform #id_dataroot, #installform #id_dbhost, #installform #id_dbname, #installform #id_dbuser, #installform #id_dbpass, #installform #id_prefix {
  direction: ltr;
}
.mdl-right > label {
  display: inline-block;
}
.singleselect {
  max-width: 100%;
}
.form-item .form-label label {
  margin-bottom: 0;
}
div#dateselector-calendar-panel {
  z-index: 3100;
  /* Set higher than the z-index of the filemanager - see MDL-39047. */
}
fieldset.coursesearchbox label {
  display: inline;
}
/**
 * Show the labels above text editors and file managers except on wide screens.
 */
/* Section and module editing forms contain special JS components for the
   availability system (if enabled). */
#id_availabilityconditionsjson[aria-hidden=true], .availability-field [aria-hidden=true] {
  display: none;
}
.availability-field label {
  display: inline-flex;
}
.availability-field .availability-group label {
  vertical-align: top;
}
.availability-eye {
  clear: left;
  float: left;
}
.availability-inner, .availability-plugincontrols {
  float: left;
  border-radius: 0.25rem;
  border: 1px solid rgba(0, 0, 0, 0.125);
  padding: 1rem;
  margin-top: 0.5rem;
}
.availability-plugincontrols, .availability-childlist .availability-inner {
  margin-left: 0.625rem;
}
.availability-field .availability-plugincontrols .availability-group select {
  max-width: 12rem;
}
/* Custom styles for autocomplete form element */
/* These styles reserve a standard amount of space in the DOM to avoid flicker when the original select element is replaced */
[data-fieldtype=autocomplete] select, [data-fieldtype=tags] select, .form-autocomplete-original-select {
  visibility: hidden;
  overflow: hidden;
  width: 15rem;
  height: 44px;
  margin: 0;
  padding: 0;
  border: 0;
  margin-top: 1.65625rem;
  vertical-align: bottom;
}
.form-autocomplete-selection {
  margin: 0.25rem;
  min-height: 2.375rem;
}
.form-autocomplete-selection [role=option] {
  cursor: pointer;
  white-space: inherit;
  word-break: break-word;
  line-height: 1.4;
  text-align: left;
}
.form-autocomplete-suggestions {
  position: absolute;
  background-color: white;
  border: 1px solid #8f959e;
  min-width: 206px;
  max-height: 20em;
  overflow: auto;
  margin: 0.125rem 0 0;
  padding: 0.5rem 0;
  z-index: 2;
}
.form-autocomplete-suggestions li {
  list-style-type: none;
  padding: 0.25rem 1.5rem;
  margin: 0;
  cursor: pointer;
  color: #1d2125;
}
.form-autocomplete-suggestions li:hover, .form-autocomplete-suggestions li:focus, .form-autocomplete-suggestions li[aria-selected="true"] {
  background-color: #0f6cbf;
  color: #fff;
}
.form-autocomplete-suggestions li::before {
  content: "​";
}
.form-autocomplete-downarrow {
  color: #1d2125;
  top: 0.2rem;
  right: 0.5rem;
  cursor: pointer;
}
.form-autocomplete-downarrow .loading-icon {
  position: absolute;
  top: 0;
  left: 0;
  background-color: #fff;
}
/** Undo some bootstrap things */
.form-autocomplete-selection + input.form-control {
  width: auto;
  display: inline-block;
  vertical-align: middle;
}
.form-autocomplete-selection [data-active-selection=true] {
  padding: 0.5em;
  font-size: large;
}
select.form-control[size], select.form-control[multiple] {
  padding-right: 0;
}
select.form-control[size] option, select.form-control[multiple] option {
  width: fit-content;
}
/* Non-bootstrap selects with a size show their contents outside of the element.
 * Remove when we update to stable bootstrap 4. (MDL-56511) */
select[size], select[multiple] {
  overflow: auto;
}
select[size="1"] {
  overflow: visible;
}
textarea[data-auto-rows] {
  overflow-x: hidden;
  resize: none;
}
/** Display elements under labels in vertical forms regardless of the screen size. */
.mform.full-width-labels .fitem.row {
  margin-left: 0;
  margin-right: 0;
}
.mform.full-width-labels .fitem.row > .col-md-3, .mform.full-width-labels .fitem.row > .col-md-9 {
  flex: 0 0 100%;
  max-width: 100%;
  width: inherit;
  padding-right: 0;
  padding-left: 0;
}
.mform.full-width-labels .fitem.row.femptylabel > .col-md-3 {
  display: none;
}
.mform.full-width-labels .fitem.row .form-control {
  width: 100%;
}
.mform .col-form-label .form-label-addon {
  margin-left: 0.25rem;
}
@media (min-width: 576px) {
  .mform:not(.full-width-labels) .col-form-label .form-label-addon {
    margin-left: auto;
  }
}
/** Allow wrapping an mform in a div with the form-inline class to have an inline, responsive form. */
@media (min-width: 768px) {
  .form-inline .col-md-9, .form-inline .col-md-3 {
    margin-bottom: 1rem;
    width: auto;
  }
  .form-inline .col-md-9 label, .form-inline .col-md-3 label {
    margin-left: 1rem;
  }
}
[data-fieldtype="modgrade"] .form-group {
  padding-bottom: 0.375rem;
}
[data-fieldtype="modgrade"] {
  background-color: #fff;
  border-radius: 0.25rem;
  border: 1px solid rgba(0, 0, 0, 0.125);
  padding: 1.25rem;
  margin-left: 15px;
  max-width: 30rem;
}
[data-filetypesbrowserbody] [aria-expanded="false"] > [role="group"], [data-filetypesbrowserbody] [aria-expanded="false"] [data-filetypesbrowserfeature="hideifcollapsed"], [data-filetypesbrowserbody] [aria-expanded="true"] [data-filetypesbrowserfeature="hideifexpanded"] {
  display: none;
}
.form-inline[data-fieldtype="autocomplete"], .form-inline[data-fieldtype="tags"] {
  display: block;
}
[data-fieldtype="editor"] > div {
  flex-grow: 1;
}
@media (min-width: 768px) {
  .mform fieldset .fcontainer.collapseable .col-form-label {
    padding-left: 2.5rem;
  }
}
@media (min-width: 576px) {
  .mform .form-inline .fdefaultcustom label {
    justify-content: initial;
  }
}
.collapsemenu .collapseall {
  display: block;
}
.collapsemenu .expandall {
  display: none;
}
.collapsemenu.collapsed .collapseall {
  display: none;
}
.collapsemenu.collapsed .expandall {
  display: block;
}
.input-group.form-inset .form-inset-item {
  position: absolute;
  padding-top: calc(0.375rem + 1px);
  z-index: 3;
}
.input-group.form-inset.form-inset-left .form-control {
  padding-left: 1.5rem;
}
.input-group.form-inset.form-inset-right .form-control {
  padding-right: 1.5rem;
}
.input-group.form-inset.form-inset-right .form-inset-item {
  right: 0;
}
.pagelayout-login #region-main {
  border: 0;
  background-color: inherit;
}
.pagelayout-login #page {
  background: #f8f9fa;
  background-image: linear-gradient(to right, #f8f9fa 0%, #dee2e6 100%);
  background-repeat: repeat-x;
}
.pagelayout-login #page div[role="main"] {
  height: 100%;
}
.login-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
}
.login-container {
  background-color: #fff;
  padding: 3rem;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  margin-bottom: 2rem;
}
.login-container .login-languagemenu {
  display: flex;
  justify-content: flex-start;
}
.login-container .login-languagemenu .dropdown-menu {
  max-height: 300px;
  overflow-y: auto;
}
.login-container .login-logo {
  display: flex;
  justify-content: center;
  margin-bottom: 1rem;
}
.login-container .login-divider {
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
  border-top: 1px solid #dee2e6;
}
.login-container h1.login-heading {
  font-size: 1.875rem;
}
.login-container h2.login-heading {
  font-size: 1.40625rem;
}
.login-container .login-identityproviders .login-identityprovider-btn {
  border: 1px solid #dee2e6;
}
.login-container .divider {
  width: 1px;
  background-color: #dee2e6;
  height: 1.875rem;
}
.login-container .action-menu-trigger a {
  margin: 0.5rem 0;
}
@media (min-width: 768px) {
  .login-container {
    max-width: 600px;
    border-radius: 0.25rem;
  }
}
/* modules.less */
select {
  width: auto;
}
.path-mod .activity-header:not(:empty) {
  background-color: #f8f9fa;
  margin-bottom: 1rem;
  padding-left: 1rem;
  padding-right: 1rem;
  border-radius: 0.25rem;
}
.path-mod .activity-header:not(:empty) > div:last-child > div:last-child {
  border-bottom: 0;
}
.path-mod .activity-information .activity-dates {
  padding-top: 1rem;
  padding-bottom: 1rem;
  border-bottom: 1px solid #dee2e6;
}
.path-mod .activity-information .completion-info {
  padding-top: 1rem;
  padding-bottom: 1rem;
  border-bottom: 1px solid #dee2e6;
}
.path-mod .activity-description {
  padding-top: 1rem;
  padding-bottom: 1rem;
}
.path-mod .activity-description > .box.py-3 {
  padding-top: 0 !important;
  /* stylelint-disable-line declaration-no-important */
  padding-bottom: 0 !important;
  /* stylelint-disable-line declaration-no-important */
}
.path-mod .activity-description > .box.py-3:empty {
  display: none;
}
.path-mod .automatic-completion-conditions .badge {
  font-size: 80%;
  padding: 0.5rem;
  margin-top: 0.25rem;
  mix-blend-mode: multiply;
}
.path-mod .automatic-completion-conditions .badge.badge-light {
  background-color: #e9ecef !important;
  /* stylelint-disable-line declaration-no-important */
}
.path-mod .automatic-completion-conditions .badge .icon {
  width: 0.7rem;
  height: 0.7rem;
  font-size: 0.7rem;
}
.path-mod .automatic-completion-conditions .badge:first-child {
  margin-top: 0;
}
.path-mod .activity-description .no-overflow p:last-child {
  padding-bottom: 0;
  margin-bottom: 0;
}
.path-mod-choice .horizontal .choices .option {
  display: inline-block;
}
.path-mod-choice .choices .option label {
  vertical-align: top;
}
.path-mod-forum .forumsearch input, .path-mod-forum .forumsearch .helptooltip {
  margin: 0 3px;
}
.path-mod-forum .forumheaderlist, .path-mod-forum .forumheaderlist td {
  border: none;
}
.path-mod-forum .forumheaderlist thead .header, .path-mod-forum .forumheaderlist tbody .discussion td {
  white-space: normal;
  vertical-align: top;
  padding-left: 0.5em;
  padding-right: 0.5em;
}
.path-mod-forum .forumheaderlist thead .header {
  white-space: normal;
  vertical-align: top;
}
.path-mod-forum .forumheaderlist thead .header.replies {
  text-align: center;
}
.path-mod-forum .forumheaderlist thead .header.lastpost {
  text-align: right;
}
.path-mod-forum .forumheaderlist thead .header th.discussionsubscription, .path-mod-forum .forumheaderlist tbody .discussion td.discussionsubscription {
  width: 16px;
  padding-left: 0.5em;
  padding-right: 0.5em;
}
.path-mod-forum .forumheaderlist .discussion .replies, .path-mod-forum .forumheaderlist .discussion .lastpost {
  white-space: normal;
}
.path-mod-forum .forumheaderlist .discussion .discussionsubscription, .path-mod-forum .forumheaderlist .discussion .replies {
  text-align: center;
}
.path-mod-forum .forumheaderlist .discussion .topic, .path-mod-forum .forumheaderlist .discussion .discussionsubscription, .path-mod-forum .forumheaderlist .discussion .topic.starter, .path-mod-forum .forumheaderlist .discussion .replies, .path-mod-forum .forumheaderlist .discussion .lastpost {
  vertical-align: top;
}
.path-mod-forum .discussion-list .topic {
  font-weight: inherit;
}
.discussion-settings-container .custom-select {
  width: 100%;
}
.discussion-settings-container input {
  max-width: 100%;
}
.forumpost {
  border: 1px solid #dee2e6;
  display: block;
  padding: 6px;
}
.forumpost .header {
  margin-bottom: 3px;
}
.forumpost .picture img {
  margin: 3px;
}
.forumpost .picture img.userpicture {
  margin-left: 3px;
  margin-right: 10px;
}
.forumpost .content .posting.fullpost {
  margin-top: 8px;
}
.forumpost .row {
  display: block;
}
.forumpost .row .topic, .forumpost .row .content-mask, .forumpost .row .options {
  margin-left: 48px;
}
.forumpost .row.side {
  clear: both;
}
.forumpost .row .left {
  width: 48px;
}
.forumpost .options .commands {
  margin-left: 0;
}
.forumpost .subject {
  font-weight: bold;
}
.forumsearch input[type=text] {
  margin-bottom: 0;
}
#page-mod-forum-view table .fit-content {
  width: 1px;
  white-space: nowrap;
}
#page-mod-forum-view table .limit-width {
  max-width: 200px;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}
#page-mod-forum-view table .limit-width .author-info {
  max-width: calc(100% - 35px - .5rem);
}
#page-mod-forum-discuss .discussioncontrols {
  width: auto;
  margin: 0;
}
#page-mod-forum-discuss .discussioncontrols .form-inline input {
  margin-top: -1px;
}
/** Gently highlight the selected post by changing it's background to blue and then fading it out. */
@keyframes background-highlight {
  from {
    background-color: rgba(0, 123, 255, 0.5);
  }
  to {
    background-color: inherit;
  }
}
.path-mod-forum .nested-v2-display-mode, .path-mod-forum.nested-v2-display-mode {
  /** Reset the badge styling back to pill style. */
  /** Style the ratings like a badge. */
  /** Don't show the discussion locked alert in this mode because it's already indicated with a badge. */
  /** Fix muted text contrast ratios for accessibility. */
  /** Make the tag list text screen reader visible only */
}
.path-mod-forum .nested-v2-display-mode .discussionsubscription, .path-mod-forum.nested-v2-display-mode .discussionsubscription {
  margin-top: 0;
  text-align: inherit;
  margin-bottom: 0;
}
.path-mod-forum .nested-v2-display-mode .preload-subscribe, .path-mod-forum .nested-v2-display-mode .preload-unsubscribe, .path-mod-forum.nested-v2-display-mode .preload-subscribe, .path-mod-forum.nested-v2-display-mode .preload-unsubscribe {
  display: none;
}
.path-mod-forum .nested-v2-display-mode .post-message, .path-mod-forum.nested-v2-display-mode .post-message {
  line-height: 1.6;
}
.path-mod-forum .nested-v2-display-mode .indent, .path-mod-forum.nested-v2-display-mode .indent {
  margin-left: 0;
}
.path-mod-forum .nested-v2-display-mode .badge, .path-mod-forum.nested-v2-display-mode .badge {
  font-size: inherit;
  font-weight: inherit;
  padding-left: 0.5rem;
  padding-right: 0.5rem;
  border-radius: 10rem;
}
.path-mod-forum .nested-v2-display-mode .badge-light, .path-mod-forum.nested-v2-display-mode .badge-light {
  background-color: #f6f6f6;
  color: #5b5b5b;
}
.path-mod-forum .nested-v2-display-mode .rating-aggregate-container, .path-mod-forum.nested-v2-display-mode .rating-aggregate-container {
  background-color: #f6f6f6;
  color: #5b5b5b;
  padding: 0.25em 0.5em;
  line-height: 1;
  margin-right: 0.5rem;
  vertical-align: middle;
  border-radius: 10rem;
  text-align: center;
}
.path-mod-forum .nested-v2-display-mode .ratinginput, .path-mod-forum.nested-v2-display-mode .ratinginput {
  padding: 0.25em 1.75rem 0.25em 0.75em;
  line-height: 1;
  height: auto;
  border-radius: 10rem;
}
@media (max-width: 767.98px) {
  .path-mod-forum .nested-v2-display-mode .ratinginput, .path-mod-forum.nested-v2-display-mode .ratinginput {
    margin-top: 0.5rem;
  }
}
.path-mod-forum .nested-v2-display-mode .group-image, .path-mod-forum.nested-v2-display-mode .group-image {
  width: 35px;
  height: 35px;
  margin-right: 0;
  float: none;
  display: inline-block;
}
.path-mod-forum .nested-v2-display-mode .alert.discussionlocked, .path-mod-forum.nested-v2-display-mode .alert.discussionlocked {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}
.path-mod-forum .nested-v2-display-mode .text-muted, .path-mod-forum .nested-v2-display-mode .dimmed_text, .path-mod-forum.nested-v2-display-mode .text-muted, .path-mod-forum.nested-v2-display-mode .dimmed_text {
  color: #707070 !important;
  /* stylelint-disable-line declaration-no-important */
}
.path-mod-forum .nested-v2-display-mode .author-header, .path-mod-forum.nested-v2-display-mode .author-header {
  font-style: italic;
}
.path-mod-forum .nested-v2-display-mode .author-header .author-name, .path-mod-forum.nested-v2-display-mode .author-header .author-name {
  font-style: normal;
}
.path-mod-forum .nested-v2-display-mode .tag_list > b, .path-mod-forum.nested-v2-display-mode .tag_list > b {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}
.path-mod-forum .nested-v2-display-mode :target > .focus-target, .path-mod-forum.nested-v2-display-mode :target > .focus-target {
  animation-name: background-highlight;
  animation-duration: 1s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: 1;
}
.path-mod-forum .nested-v2-display-mode .forum-post-container .replies-container .forum-post-container, .path-mod-forum.nested-v2-display-mode .forum-post-container .replies-container .forum-post-container {
  border-top: 1px solid #dee2e6;
  padding-top: 1.5rem;
}
.path-mod-forum .nested-v2-display-mode .forum-post-container .replies-container .forum-post-container .replies-container .forum-post-container, .path-mod-forum.nested-v2-display-mode .forum-post-container .replies-container .forum-post-container .replies-container .forum-post-container {
  border-top: none;
  padding-top: 0;
}
.path-mod-forum .nested-v2-display-mode .forum-post-container .replies-container .inline-reply-container .reply-author, .path-mod-forum.nested-v2-display-mode .forum-post-container .replies-container .inline-reply-container .reply-author {
  display: none;
}
.path-mod-forum .nested-v2-display-mode .forum-post-container .post-message p:last-of-type, .path-mod-forum.nested-v2-display-mode .forum-post-container .post-message p:last-of-type {
  margin-bottom: 0;
}
.path-mod-forum .nested-v2-display-mode .forum-post-container .author-image-container, .path-mod-forum.nested-v2-display-mode .forum-post-container .author-image-container {
  width: 70px;
  margin-right: 24px;
  flex-shrink: 0;
}
.path-mod-forum .nested-v2-display-mode .forum-post-container .inline-reply-container textarea, .path-mod-forum.nested-v2-display-mode .forum-post-container .inline-reply-container textarea {
  border: 0;
  resize: none;
}
.path-mod-forum .nested-v2-display-mode .forum-post-container .indent, .path-mod-forum.nested-v2-display-mode .forum-post-container .indent {
  /**
             * The first post and first set of replies have a larger author image so offset the 2nd
             * set of replies by the image width + margin to ensure they align.
             */
}
.path-mod-forum .nested-v2-display-mode .forum-post-container .indent .indent, .path-mod-forum.nested-v2-display-mode .forum-post-container .indent .indent {
  padding-left: 94px;
  /**
                 * Reduce the size of the the author image for all second level replies (and below).
                 */
  /**
                 * Adjust the indentation offset for all 3rd level replies and below for the smaller author image.
                 */
}
.path-mod-forum .nested-v2-display-mode .forum-post-container .indent .indent .author-image-container, .path-mod-forum.nested-v2-display-mode .forum-post-container .indent .indent .author-image-container {
  width: 30px;
  margin-right: 8px;
  padding-top: 3px;
}
.path-mod-forum .nested-v2-display-mode .forum-post-container .indent .indent .indent, .path-mod-forum.nested-v2-display-mode .forum-post-container .indent .indent .indent {
  padding-left: 38px;
  /**
                     * Stop indenting the replies after the 5th reply.
                     */
}
.path-mod-forum .nested-v2-display-mode .forum-post-container .indent .indent .indent .indent .indent .indent, .path-mod-forum.nested-v2-display-mode .forum-post-container .indent .indent .indent .indent .indent .indent {
  padding-left: 0;
}
/** Extra small devices (portrait phones, less than 576px). */
@media (max-width: 767.98px) {
  #page-mod-forum-discuss.nested-v2-display-mode .forum-post-container .author-image-container {
    width: 30px;
    margin-right: 8px;
  }
  #page-mod-forum-discuss.nested-v2-display-mode .forum-post-container .indent .indent {
    padding-left: 38px;
  }
  #page-mod-forum-discuss.nested-v2-display-mode .forum-post-container .indent .indent .indent .indent {
    padding-left: 0;
  }
  #page-mod-forum-discuss.nested-v2-display-mode .group-image {
    width: 30px;
    height: 30px;
  }
}
.filter-scrollable {
  overflow-y: auto;
  max-height: 25em;
  margin-bottom: 1em;
}
.filter-dates-popover {
  width: 100%;
  max-width: 41.5em;
}
/* stylelint-disable-line max-line-length */
@keyframes expandSearchButton {
  from {
    height: 36px;
    width: 36px;
    border-radius: 18px;
    background-color: #e9ecef;
  }
  to {
    width: 100%;
    height: calc(1.5em + 1rem + 2px);
    border-radius: 0;
    background-color: #fff;
    border-color: #8f959e;
    padding-left: calc(0.5rem + 8px);
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    font-size: 1.171875rem;
    line-height: 1.5;
    right: 0;
  }
  @media (max-width: 1200px) {
    to {
      font-size: calc(0.9271875rem + 0.32625vw) ;
    }
  }
}
@keyframes collapseSearchButton {
  from {
    width: 100%;
    height: calc(1.5em + 1rem + 2px);
    border-radius: 0;
    background-color: #fff;
    border-color: #8f959e;
    padding-left: calc(0.5rem + 8px);
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    font-size: 1.171875rem;
    line-height: 1.5;
    right: 0;
  }
  @media (max-width: 1200px) {
    from {
      font-size: calc(0.9271875rem + 0.32625vw) ;
    }
  }
  to {
    height: 36px;
    width: 36px;
    border-radius: 18px;
    background-color: #e9ecef;
  }
}
.path-mod-forum .unified-grader .navbar {
  max-height: none;
  z-index: 1;
}
.path-mod-forum .unified-grader .body-container {
  overflow: auto;
}
.path-mod-forum .unified-grader .body-container.hidden {
  display: none !important;
  /* stylelint-disable-line declaration-no-important */
}
.path-mod-forum .unified-grader .userpicture {
  height: 60px;
  width: 60px;
}
.path-mod-forum .unified-grader .grader-grading-panel {
  top: 0;
  position: absolute;
  height: 100%;
  z-index: 0;
  width: 430px;
}
.path-mod-forum .unified-grader .grader-grading-panel.hidden {
  right: -430px;
}
.path-mod-forum .unified-grader .grader-grading-panel .grading-icon {
  width: 36px;
}
.path-mod-forum .unified-grader .grader-grading-panel .user-picker-container .user-full-name {
  max-width: 240px;
}
.path-mod-forum .unified-grader .grader-grading-panel .user-picker-container .page-link {
  width: 36px;
  height: 36px;
  display: flex;
  text-align: center;
  align-items: center;
  justify-content: center;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container {
  height: 65px;
  position: relative;
  overflow: hidden;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .info-container {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  width: 100%;
  height: 100%;
  padding: 0.5rem;
  padding-right: calc(36px + 0.5rem);
  opacity: 1;
  visibility: visible;
  transition: left 0.3s ease-in-out;
  z-index: 1;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .toggle-search-button.expand {
  animation-name: expandSearchButton;
  animation-duration: 0.3s;
  animation-timing-function: ease-in-out;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .toggle-search-button.collapse {
  display: block;
  animation-name: collapseSearchButton;
  animation-duration: 0.3s;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .user-search-container {
  overflow: hidden;
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  z-index: 2;
  width: 100%;
  height: 100% !important;
  /* stylelint-disable-line declaration-no-important */
  padding: 0.5rem;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .user-search-container .search-input-container {
  position: relative;
  overflow: visible;
  flex-wrap: nowrap;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .user-search-container .search-input-container input {
  padding-left: calc(0.5rem + 0.5rem + 34px);
  padding-right: calc(0.5rem + 36px);
  opacity: 1;
  visibility: visible;
  transition: opacity 0s linear 0.3s, visibility 0s linear;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .user-search-container .search-input-container .search-icon {
  position: absolute;
  top: 50%;
  left: 0.5rem;
  transform: translateY(-50%);
  color: #495057;
  height: 36px;
  width: 34px;
  background-color: #fff;
  opacity: 1;
  visibility: visible;
  transition: opacity 0s linear 0.3s, visibility 0s linear 0.3s;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .user-search-container .search-input-container .toggle-search-button {
  position: absolute;
  top: 50%;
  right: 0.5rem;
  transform: translateY(-50%);
  z-index: 1;
  color: inherit;
  text-align: left;
  padding-left: 9px;
  transition: right 0s linear 0.3s;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .user-search-container .search-input-container .toggle-search-button .expanded-icon {
  opacity: 1;
  visibility: visible;
  max-width: 50px;
  max-height: 50px;
  transition: opacity 0s linear 0.3s, max-height 0s linear 0.3s, max-width 0s linear 0.3s, visibility 0s linear 0.3s;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .user-search-container .search-input-container .toggle-search-button .collapsed-icon {
  opacity: 0;
  visibility: hidden;
  max-height: 0;
  max-width: 0;
  overflow: hidden;
  transition: opacity 0s linear 0.3s, max-height 0s linear 0.3s, max-width 0s linear 0.3s, visibility 0s linear 0.3s;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .user-search-container.collapsed {
  width: calc(36px + 0.5rem + 0.5rem);
  transition: width 0.3s ease-in-out;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .user-search-container.collapsed .search-input-container {
  flex-wrap: nowrap;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .user-search-container.collapsed .search-input-container input, .path-mod-forum .unified-grader .grader-grading-panel .header-container .user-search-container.collapsed .search-input-container .search-icon {
  opacity: 0;
  visibility: hidden;
  transition: opacity 0s linear, visibility 0s linear;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .user-search-container.collapsed .search-input-container input {
  padding-left: 0;
  padding-right: 0;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .user-search-container.collapsed .search-input-container .toggle-search-button .expanded-icon {
  opacity: 0;
  visibility: hidden;
  max-height: 0;
  max-width: 0;
  overflow: hidden;
  transition: opacity 0s linear, max-height 0s linear, max-width 0s linear, visibility 0s linear;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .user-search-container.collapsed .search-input-container .toggle-search-button .collapsed-icon {
  opacity: 1;
  visibility: visible;
  max-width: 50px;
  max-height: 50px;
  transition: opacity 0s linear, max-height 0s linear, max-width 0s linear, visibility 0s linear;
}
.path-mod-forum .unified-grader .grader-grading-panel .header-container .user-search-container:not(.collapsed) + .info-container {
  opacity: 0;
  visibility: hidden;
  left: calc(100% * -1);
  transition: left 0.3s ease-in-out, opacity 0s linear 0.3s, visibility 0s linear 0.3s, padding 0s linear 0.3s;
}
.path-mod-forum .unified-grader .grader-module-content {
  overflow-y: auto;
  margin-right: 430px;
  transition: margin-right 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .path-mod-forum .unified-grader .grader-module-content {
    transition: none;
  }
}
.path-mod-forum .unified-grader .drawer-button {
  position: relative;
}
.path-mod-forum .unified-grader .drawer-button.active::after {
  content: "";
  position: absolute;
  bottom: calc(-0.5rem - 1px);
  left: 0;
  width: 100%;
  height: 3px;
  background-color: #0f6cbf;
}
.path-mod-forum .unified-grader .drawer-button .icon {
  font-size: 20px;
  height: 20px;
  width: 20px;
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container:last-of-type > hr {
  display: none;
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container:last-of-type > hr {
  display: none;
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container .parent-container {
  position: relative;
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container .parent-container .show-content-button {
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  padding-left: calc(1rem + 45px);
  text-align: left;
  z-index: 1;
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container .parent-container .show-content-button:not(.collapsed) {
  display: none;
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container .parent-container .content {
  display: block;
  height: auto !important;
  /* stylelint-disable-line declaration-no-important */
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container .parent-container .content .header {
  transition: margin-bottom 0.3s ease-in-out;
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container .parent-container .content .header div + div {
  opacity: 1;
  visibility: visible;
  max-height: none;
  transition: opacity 0.3s linear, visibility 0s linear;
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container .parent-container .content .body-content-container {
  opacity: 1;
  visibility: visible;
  max-height: none;
  transition: opacity 0.3s linear, visibility 0s linear;
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container .parent-container .content .forum-post-core {
  opacity: 1;
  visibility: visible;
  max-height: none;
  transition: opacity 0.3s linear, visibility 0s linear;
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container .parent-container .show-content-button.collapsed + .content {
  opacity: 0.3;
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container .parent-container .show-content-button.collapsed + .content .header {
  margin-bottom: 0 !important;
  /* stylelint-disable-line declaration-no-important */
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container .parent-container .show-content-button.collapsed + .content .header div + div {
  opacity: 0;
  visibility: hidden;
  max-height: 0;
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container .parent-container .show-content-button.collapsed + .content .body-content-container {
  opacity: 0;
  visibility: hidden;
  max-height: 0;
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container .parent-container .show-content-button.collapsed + .content .forum-post-core {
  opacity: 0;
  visibility: hidden;
  max-height: 0;
}
.path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container .parent-container .show-content-button.collapsed:hover + .content, .path-mod-forum .unified-grader .grader-module-content-display .discussion-container .posts-container .parent-container .show-content-button.collapsed:focus + .content {
  opacity: 1;
}
.path-mod-forum .unified-grader .grader-module-content-display .no-post-container .icon {
  height: 250px;
  width: 250px;
  margin-right: 0;
}
.path-mod-forum .unified-grader .grader-module-content-display .nested-v2-display-mode .discussion-container .posts-container .parent-container .show-content-button {
  padding-left: 94px;
}
.path-mod-forum .unified-grader .no-search-results-container .icon {
  height: 250px;
  width: 250px;
  margin-right: 0;
}
.path-mod-forum .unified-grader .nested-v2-display-mode .view-context-button {
  margin-left: 94px;
  border-radius: 0.3rem;
}
.path-mod-forum .unified-grader .nested-v2-display-mode .parent-container .author-image-container {
  position: relative;
}
.path-mod-forum .unified-grader .nested-v2-display-mode .parent-container .author-image-container:after {
  position: absolute;
  top: calc(70px + 0.5rem);
  content: "";
  background-color: #e9ecef;
  width: 2px;
  height: calc(100% - 70px + 0.5rem);
}
.path-mod-forum .unified-grader .nested-v2-display-mode .parent-container + .post-container .author-image-container img {
  width: 30px !important;
  /* stylelint-disable-line declaration-no-important */
}
.path-mod-forum .unified-grader .nested-v2-display-mode .post-subject, .path-mod-forum .modal .nested-v2-display-mode .post-subject {
  display: none;
}
@media (max-width: 575.98px) {
  .path-mod-forum .unified-grader .grader-grading-panel {
    width: 100%;
    position: fixed;
    height: calc(100vh - 50px);
    overflow: scroll;
    top: 50px;
  }
  .path-mod-forum .unified-grader .body-container {
    overflow: visible;
  }
}
.maincalendar .calendarmonth td, .maincalendar .calendarmonth th {
  border: 1px dotted #dee2e6;
}
.path-grade-report-grader h1 {
  text-align: inherit;
}
#page-mod-chat-gui_basic input#message {
  max-width: 100%;
}
#page-mod-data-view #singleimage {
  width: auto;
}
.template_heading {
  margin-top: 10px;
}
.breadcrumb-button {
  margin-top: 4px;
}
.breadcrumb-button .singlebutton {
  float: left;
  margin-left: 4px;
}
.langmenu form {
  margin: 0;
}
canvas {
  -ms-touch-action: auto;
}
div#dock {
  display: none;
}
/** General styles (scope: all of lesson) **/
.path-mod-lesson .invisiblefieldset.fieldsetfix {
  display: block;
}
.path-mod-lesson .answeroption .checkbox label p {
  display: inline;
}
.path-mod-lesson .form-inline label.form-check-label {
  display: inline-block;
}
.path-mod-lesson .slideshow {
  overflow: auto;
  padding: 15px;
}
#page-mod-lesson-view .branchbuttoncontainer .singlebutton button[type="submit"] {
  white-space: normal;
}
#page-mod-lesson-view .vertical .singlebutton {
  display: block;
}
#page-mod-lesson-view .vertical .singlebutton + .singlebutton {
  margin-left: 0;
  margin-top: 1rem;
}
#page-mod-lesson-view .fitem .felement .custom-select {
  align-self: flex-start;
}
.path-mod-lesson .generaltable td {
  vertical-align: middle;
}
.path-mod-lesson .generaltable td label {
  margin-bottom: 0;
}
.path-mod-lesson .generaltable td .highlight {
  display: inline-block;
  margin-left: 0.25rem;
}
.path-mod-lesson .generaltable td input[type="checkbox"] {
  display: block;
}
.path-mod-wiki .wiki_headingtitle, .path-mod-wiki .midpad, .path-mod-wiki .wiki_headingtime {
  text-align: inherit;
}
.path-mod-wiki .wiki_contentbox {
  width: 100%;
}
.path-mod-survey .surveytable > tbody > tr:nth-of-type(even) {
  background-color: rgba(0, 0, 0, 0.03);
}
.path-mod-survey .surveytable .rblock label {
  text-align: center;
}
.nav .caret {
  margin-left: 4px;
}
.nav .divider {
  overflow: hidden;
  width: 0;
}
.userloggedinas .usermenu .usertext, .userswitchedrole .usermenu .usertext, .loginfailures .usermenu .usertext {
  float: left;
  text-align: right;
  margin-right: 0.5rem;
  height: 35px;
}
.userloggedinas .usermenu .usertext .meta, .userswitchedrole .usermenu .usertext .meta, .loginfailures .usermenu .usertext .meta {
  font-size: 0.8203125rem;
  align-items: center;
}
.userloggedinas .usermenu .avatar img, .userswitchedrole .usermenu .avatar img, .loginfailures .usermenu .avatar img {
  margin: 0;
}
.userloggedinas .usermenu .userbutton .avatars {
  position: relative;
  display: inline-block;
}
.userloggedinas .usermenu .userbutton .avatars .avatar.current {
  display: inline-block;
  position: absolute;
  bottom: 0;
  right: 0;
  width: 20px;
  height: 20px;
  border-radius: 50%;
}
.userloggedinas .usermenu .userbutton .avatars .avatar.current img {
  vertical-align: baseline;
}
.userloggedinas .usermenu .userbutton .avatars .avatar.current .userinitials.size-35 {
  width: 20px;
  height: 20px;
  border: 1px solid #dee2e6;
  background-color: #fff;
  font-size: 0.5625rem;
}
.userloggedinas .usermenu .userbutton .avatars .avatar img {
  width: inherit;
  height: inherit;
}
.userloggedinas .usermenu .userbutton .avatars .realuser {
  width: 35px;
  height: 35px;
  display: inline-block;
}
.userinitials {
  background-color: #e9ecef;
  vertical-align: middle;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  color: #343a40;
  font-weight: normal;
  margin-right: 0.25rem;
}
.userinitials.size-16, .userinitials.size-30 {
  font-size: 0.7rem;
  width: 30px;
  height: 30px;
}
.userinitials.size-35 {
  width: 35px;
  height: 35px;
}
.userinitials.size-100 {
  width: 100px;
  height: 100px;
  font-size: 1.875rem;
}
img.userpicture {
  margin-right: 0.25rem;
}
@media (max-width: 767.98px) {
  .usertext {
    display: none;
  }
}
.path-mod-quiz .mod-quiz-edit-content {
  margin-bottom: 10rem;
}
#page-mod-quiz-mod #id_reviewoptionshdr .col-md-3, #page-mod-quiz-mod #id_reviewoptionshdr .col-md-9 {
  width: auto;
  max-width: none;
}
#page-mod-quiz-mod #id_reviewoptionshdr .form-group {
  float: left;
  width: 20rem;
  display: inline-block;
  min-height: 12rem;
}
#page-mod-quiz-mod #id_reviewoptionshdr .btn-link {
  line-height: 1.5;
  vertical-align: bottom;
}
#page-mod-quiz-mod #id_reviewoptionshdr .form-inline {
  float: left;
  clear: left;
}
#page-mod-quiz-mod #id_reviewoptionshdr .form-check {
  width: auto;
  height: 22px;
  justify-content: flex-start;
}
#page-mod-quiz-mod #id_reviewoptionshdr .review_option_item {
  width: 90%;
  height: 22px;
}
.path-mod-quiz #mod_quiz_navblock .qnbutton {
  text-decoration: none;
  font-size: 14px;
  line-height: 20px;
  font-weight: normal;
  background-color: #fff;
  background-image: none;
  height: 40px;
  width: 30px;
  border-radius: 3px;
  border: 0;
  overflow: visible;
  margin: 0 6px 6px 0;
}
.path-mod-quiz #mod_quiz_navblock span.qnbutton {
  cursor: default;
  background-color: #e9ecef;
  color: #495057;
}
.path-mod-quiz #mod_quiz_navblock a.qnbutton:hover, .path-mod-quiz #mod_quiz_navblock a.qnbutton:active, .path-mod-quiz #mod_quiz_navblock a.qnbutton:focus {
  text-decoration: underline;
}
.path-mod-quiz #mod_quiz_navblock .qnbutton .thispageholder {
  border: 1px solid;
  border-radius: 3px;
  z-index: 1;
}
.path-mod-quiz #mod_quiz_navblock .qnbutton.thispage .thispageholder {
  border-width: 3px;
}
.path-mod-quiz #mod_quiz_navblock .allquestionsononepage .qnbutton.thispage .thispageholder {
  border-width: 1px;
}
.path-mod-quiz #mod_quiz_navblock .qnbutton.flagged .thispageholder {
  background: transparent url(/theme/image.php?theme=classic&component=theme&image=mod%2Fquiz%2Fflag-on) 15px 0 no-repeat;
}
.path-mod-quiz #mod_quiz_navblock .qnbutton .trafficlight {
  border: 0;
  background: #fff none center / 10px no-repeat scroll;
  height: 20px;
  margin-top: 20px;
  border-radius: 0 0 3px 3px;
}
.path-mod-quiz #mod_quiz_navblock .qnbutton.notyetanswered .trafficlight, .path-mod-quiz #mod_quiz_navblock .qnbutton.invalidanswer .trafficlight {
  background-color: #fff;
}
.path-mod-quiz #mod_quiz_navblock .qnbutton.invalidanswer .trafficlight {
  background-image: url(/theme/image.php?theme=classic&component=theme&image=mod%2Fquiz%2Fwarningtriangle);
}
.path-mod-quiz #mod_quiz_navblock .qnbutton.correct .trafficlight {
  background-image: url(/theme/image.php?theme=classic&component=theme&image=mod%2Fquiz%2Fcheckmark);
  background-color: #357a32;
}
.path-mod-quiz #mod_quiz_navblock .qnbutton.blocked .trafficlight {
  background-image: url(/theme/image.php?theme=classic&component=core&image=t%2Flocked);
  background-color: #e9ecef;
}
.path-mod-quiz #mod_quiz_navblock .qnbutton.notanswered .trafficlight, .path-mod-quiz #mod_quiz_navblock .qnbutton.incorrect .trafficlight {
  background-color: #ca3120;
}
.path-mod-quiz #mod_quiz_navblock .qnbutton.partiallycorrect .trafficlight {
  background-image: url(/theme/image.php?theme=classic&component=theme&image=mod%2Fquiz%2Fwhitecircle);
  background-color: #f0ad4e;
}
.path-mod-quiz #mod_quiz_navblock .qnbutton.complete .trafficlight, .path-mod-quiz #mod_quiz_navblock .qnbutton.answersaved .trafficlight, .path-mod-quiz #mod_quiz_navblock .qnbutton.requiresgrading .trafficlight {
  background-color: #6a737b;
}
#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmarkcontainer form input {
  height: 1.4em;
  vertical-align: middle;
}
#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmarkcontainer {
  padding: 0;
  margin: 0 0.4em;
}
/* Countdown timer. */
#page-mod-quiz-attempt #region-main {
  overflow-x: inherit;
}
#quiz-timer-wrapper {
  display: none;
  position: sticky;
  justify-content: end;
  top: 55px;
  z-index: 1020;
}
#quiz-timer-wrapper #quiz-timer {
  border: 1px solid #ca3120;
  background-color: #fff;
}
.pagelayout-embedded #quiz-timer-wrapper {
  top: 5px;
}
#quiz-timer-wrapper #quiz-timer.timeleft0 {
  background-color: #ca3120;
  color: #fff;
}
#quiz-timer-wrapper #quiz-timer.timeleft1 {
  background-color: #d73422;
  color: #fff;
}
#quiz-timer-wrapper #quiz-timer.timeleft2 {
  background-color: #dd3d2b;
  color: #fff;
}
#quiz-timer-wrapper #quiz-timer.timeleft3 {
  background-color: #e04938;
  color: #fff;
}
#quiz-timer-wrapper #quiz-timer.timeleft4 {
  background-color: #e25546;
  color: #fff;
}
#quiz-timer-wrapper #quiz-timer.timeleft5 {
  background-color: #e46153;
  color: #fff;
}
#quiz-timer-wrapper #quiz-timer.timeleft6 {
  background-color: #e66d60;
  color: #fff;
}
#quiz-timer-wrapper #quiz-timer.timeleft7 {
  background-color: #e8796d;
  color: #1d2125;
}
#quiz-timer-wrapper #quiz-timer.timeleft8 {
  background-color: #ea867a;
  color: #1d2125;
}
#quiz-timer-wrapper #quiz-timer.timeleft9 {
  background-color: #ec9288;
  color: #1d2125;
}
#quiz-timer-wrapper #quiz-timer.timeleft10 {
  background-color: #ee9e95;
  color: #1d2125;
}
#quiz-timer-wrapper #quiz-timer.timeleft11 {
  background-color: #f0aaa2;
  color: #1d2125;
}
#quiz-timer-wrapper #quiz-timer.timeleft12 {
  background-color: #f2b6af;
  color: #1d2125;
}
#quiz-timer-wrapper #quiz-timer.timeleft13 {
  background-color: #f4c2bc;
  color: #1d2125;
}
#quiz-timer-wrapper #quiz-timer.timeleft14 {
  background-color: #f7ceca;
  color: #1d2125;
}
#quiz-timer-wrapper #quiz-timer.timeleft15 {
  background-color: #f9dad7;
  color: #1d2125;
}
#quiz-timer-wrapper #quiz-timer.timeleft16 {
  background-color: #fbe6e4;
  color: #1d2125;
}
.path-mod-assign [data-region="grade-actions-panel"] [data-region="grade-actions"] .collapse-buttons {
  top: auto;
}
.path-mod-assign #page-content [data-region="grade-panel"] .mform:not(.unresponsive) .fcontainer .fitem.popout .felement {
  height: calc(100% - 4rem);
}
.path-mod-assign [data-region="grade-panel"] {
  padding-top: 1rem;
}
.path-mod-assign [data-region="grade-panel"] .fitem > .col-md-3, .path-mod-assign [data-region="grade-panel"] .fitem > .col-md-9 {
  width: 100%;
  padding: 0;
  max-width: 100%;
  flex: none;
}
.path-mod-assign [data-region="grade-panel"] fieldset, .path-mod-assign [data-region="grade-panel"] .fitem.row {
  margin: 0;
}
.path-mod-assign [data-region="grade-panel"] .mform .fitem.has-popout .felement {
  width: 100%;
}
.path-mod-assign [data-region="grade-panel"] .mform .fitem .felement {
  width: auto;
}
.path-mod-assign [data-region="grade-panel"] .popout {
  background-color: #fff;
}
.path-mod-assign [data-region="grade-panel"] .fitem.has-popout {
  background-color: #fff;
  border-radius: 0.25rem;
  border: 1px solid rgba(0, 0, 0, 0.125);
  padding: 1.25rem;
  margin-bottom: 1rem;
}
.path-mod-assign [data-region="grade-panel"] .has-popout .col-md-3 {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  margin-bottom: 1rem;
}
.path-mod-assign [data-region="grade-panel"] .popout > .col-md-3 {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  font-size: 1.40625rem;
}
.path-mod-assign [data-region="grade-panel"] .popout [data-region="popout-button"] {
  margin-top: 0;
}
.path-mod-assign [data-region="assignment-info"] {
  overflow-y: hidden;
}
.path-mod-assign [data-region="grading-navigation"] {
  padding: 6px;
}
.path-mod-assign [data-region="grade-actions"] {
  padding: 10px;
}
.path-mod-assign [data-region="user-info"] .img-rounded {
  margin-top: 0;
}
.path-mod-assign [data-region="grading-navigation-panel"] {
  height: 85px;
}
@media (max-width: 767px) {
  .path-mod-assign [data-region="grading-navigation-panel"] {
    height: auto;
  }
  .path-mod-assign [data-region="user-info"] {
    margin-top: 1rem;
  }
}
.path-mod-assign [data-region="grading-navigation"] [data-region="input-field"] input {
  width: auto;
  display: inline-block;
}
/**
 * Assign feedback.
 */
.assignfeedback_editpdf_widget * {
  box-sizing: content-box;
}
.assignfeedback_editpdf_widget button {
  box-sizing: border-box;
}
.assignfeedback_editpdf_widget .commentcolourbutton img {
  border-width: 0;
}
.assignfeedback_editpdf_widget .label {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 0 solid transparent;
  border-radius: 0.25rem;
  color: #00434e;
  background-color: #cce6ea;
  border-color: #b8dce2;
  /* stylelint-disable-line max-line-length */
}
.assignfeedback_editpdf_widget .label hr {
  border-top-color: #a6d3db;
}
.assignfeedback_editpdf_widget .label .alert-link {
  color: #00171b;
}
.assignfeedback_editpdf_menu {
  padding: 0;
}
.path-mod-assign [data-region="grade-panel"] .gradingform_guide .remark .commentchooser {
  float: none;
}
.path-mod-assign [data-region="grade-panel"] .gradingform_guide .markingguideremark {
  width: 100%;
}
.path-mod-assign [data-region="grade-panel"] .mform .fitem .felement[data-fieldtype="grading"] {
  padding-left: 1rem;
  padding-right: 1rem;
}
.path-mod-assign [data-region="grade-panel"] .showmarkerdesc, .path-mod-assign [data-region="grade-panel"] .showstudentdesc {
  background-color: #fff;
}
/**
 * Mod LTI.
 */
.path-admin-mod-lti .btn .loader img, .path-admin-mod-lti #tool-list-loader-container .loader img {
  height: auto;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax {
  background-color: #fff;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax .yui-layout-unit div.yui-layout-bd-nohd, .yui-skin-sam .yui-layout.path-mod-chat-gui_ajax .yui-layout-unit div.yui-layout-bd-noft, .yui-skin-sam .yui-layout.path-mod-chat-gui_ajax .yui-layout-unit div.yui-layout-bd, .yui-skin-sam .yui-layout.path-mod-chat-gui_ajax .yui-layout-unit-right, .yui-skin-sam .yui-layout.path-mod-chat-gui_ajax .yui-layout-unit-bottom {
  border: 0;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax .yui-layout-unit-right, .yui-skin-sam .yui-layout.path-mod-chat-gui_ajax .yui-layout-unit-bottom {
  border-radius: 0;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax .yui-layout-unit div.yui-layout-bd {
  background-color: transparent;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax .yui-layout-unit.yui-layout-unit-center div.yui-layout-bd {
  background-color: #f8f9fa;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax #chat-input-area.py-3 {
  padding: 0 !important;
  /* stylelint-disable-line declaration-no-important */
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax #chat-input-area table.generaltable, .yui-skin-sam .yui-layout.path-mod-chat-gui_ajax #chat-input-area table.generaltable td.cell {
  border: 0;
  padding: 3px 15px;
  white-space: nowrap;
  margin-bottom: 0;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax #chat-userlist {
  padding: 10px 5px;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax #chat-userlist #users-list {
  border-top: 1px solid #dee2e6;
  border-bottom: 1px solid #fff;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax #chat-userlist #users-list li {
  border-top: 1px solid #fff;
  border-bottom: 1px solid #dee2e6;
  padding: 5px 10px;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax #chat-userlist #users-list img {
  margin-right: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  max-width: none;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax #chat-messages {
  margin: 20px 25px;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax #chat-messages .chat-event.course-theme {
  text-align: center;
  margin: 10px 0;
  font-size: 0.8203125rem;
  color: #495057;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax #chat-messages .chat-message.course-theme {
  margin-bottom: 0.75rem;
  border-radius: 0.25rem;
  border: 1px solid rgba(0, 0, 0, 0.125);
  padding: 1.25rem;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax #chat-messages .chat-message.course-theme .time {
  float: right;
  font-size: 11px;
  color: #495057;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax #chat-messages .chat-message.course-theme {
  background-color: #fff;
}
.yui-skin-sam .yui-layout.path-mod-chat-gui_ajax #chat-messages .chat-message.course-theme .user {
  font-weight: bold;
}
/* reports.less */
#page-report-participation-index .participationselectform div label {
  display: inline-block;
  margin: 0 5px;
}
#page-report-participation-index .participationselectform div label[for=menuinstanceid] {
  margin-left: 0;
}
.path-backup .mform {
  /* These are long labels with checkboxes on the right. */
}
.path-backup .mform .grouped_settings {
  clear: both;
  overflow: hidden;
  /* Use card styles but avoid extend because that brings in too much. */
}
.path-backup .mform .grouped_settings.section_level {
  background-color: #fff;
  border-radius: 0.25rem;
  border: 1px solid rgba(0, 0, 0, 0.125);
  padding: 1.25rem;
  margin-bottom: 1.25rem;
}
.path-backup .mform .grouped_settings.section_level::after {
  display: block;
  clear: both;
  content: "";
}
.path-backup .mform .include_setting {
  width: 50%;
  display: inline-block;
  float: left;
  padding: 0.3rem;
}
.path-backup .mform .normal_setting {
  width: 50%;
  display: inline-block;
  float: left;
  padding: 0.3rem;
}
.path-backup {
  /* Bold section labels */
}
.path-backup .section_level {
  font-weight: bold;
}
.path-backup .section_level .activity_level {
  font-weight: normal;
}
.path-backup .proceedbutton {
  margin-left: auto;
}
/* Override the columns width to leave more room for the labels. */
.path-backup .mform .root_setting, .path-backup .mform .grouped_settings {
  /* Striped rows like a table */
}
.path-backup .mform .root_setting:nth-of-type(odd), .path-backup .mform .grouped_settings:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.03);
}
.path-backup .mform .root_setting:nth-of-type(even), .path-backup .mform .grouped_settings:nth-of-type(even) {
  background-color: #fff;
}
.path-backup .mform .root_setting .form-group, .path-backup .mform .grouped_settings .form-group {
  /* These checkboxes with no label on the left. */
}
.path-backup .mform .root_setting .form-group .col-md-3.checkbox, .path-backup .mform .grouped_settings .form-group .col-md-3.checkbox {
  width: 0%;
}
.path-backup .mform .root_setting .form-group .col-md-9.checkbox, .path-backup .mform .grouped_settings .form-group .col-md-9.checkbox {
  width: 100%;
  left: 0;
}
/* Detail pair is (usually) some short label with a longer value */
.path-backup .detail-pair .detail-pair-label {
  width: 25%;
  float: left;
  clear: left;
}
.path-backup .detail-pair .detail-pair-value {
  width: 75%;
  float: left;
}
.path-backup .backup-restore .singlebutton {
  float: right;
}
/* Make these bits full width and work with the detail-pair */
.path-backup .backup-section {
  /* Fix for nested table headers */
  /* Add card styles to backup sections */
  background-color: #fff;
  border-radius: 0.25rem;
  border: 1px solid rgba(0, 0, 0, 0.125);
  padding: 1.25rem;
  margin-bottom: 1.25rem;
}
.path-backup .backup-section .sub-header, .path-backup .backup-section .backup-sub-section, .path-backup .backup-section .singlebutton, .path-backup .backup-section .header {
  width: 100%;
  float: left;
  clear: both;
}
.path-backup .backup-section th.header {
  width: auto;
  float: none;
}
.path-backup .backup-section ::after {
  content: "";
  display: table;
  clear: both;
}
.path-backup .backup-section::after {
  display: block;
  clear: both;
  content: "";
}
.path-backup .notification.dependencies_enforced {
  color: #ca3120;
  font-weight: bold;
}
.path-backup .backup_progress {
  margin-top: 1rem;
  margin-bottom: 1rem;
}
.path-backup .backup_progress .backup_stage {
  color: #6a737b;
}
.path-backup .backup_progress .backup_stage.backup_stage_current {
  font-weight: bold;
  color: inherit;
}
.path-backup .backup_progress span.backup_stage.backup_stage_complete {
  color: inherit;
}
#page-backup-restore .filealiasesfailures {
  background-color: #f4d6d2;
}
#page-backup-restore .filealiasesfailures .aliaseslist {
  background-color: #fff;
}
.path-backup .wibbler {
  width: 500px;
  margin: 0 auto 10px;
  border-bottom: 1px solid black;
  border-right: 1px solid black;
  border-left: 1px solid black;
  position: relative;
  min-height: 4px;
}
.path-backup .wibbler .wibble {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  height: 4px;
}
.path-backup .wibbler .state0 {
  background: #eee;
}
.path-backup .wibbler .state1 {
  background: #ddd;
}
.path-backup .wibbler .state2 {
  background: #ccc;
}
.path-backup .wibbler .state3 {
  background: #bbb;
}
.path-backup .wibbler .state4 {
  background: #aaa;
}
.path-backup .wibbler .state5 {
  background: #999;
}
.path-backup .wibbler .state6 {
  background: #888;
}
.path-backup .wibbler .state7 {
  background: #777;
}
.path-backup .wibbler .state8 {
  background: #666;
}
.path-backup .wibbler .state9 {
  background: #555;
}
.path-backup .wibbler .state10 {
  background: #444;
}
.path-backup .wibbler .state11 {
  background: #333;
}
.path-backup .wibbler .state12 {
  background: #222;
}
.generaltable {
  width: 100%;
  margin-bottom: 1rem;
  color: #1d2125;
}
.generaltable th, .generaltable td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}
.generaltable thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}
.generaltable tbody + tbody {
  border-top: 2px solid #dee2e6;
}
.generaltable tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.03);
}
.generaltable.table-sm th, .generaltable.table-sm td {
  padding: 0.3rem;
}
.generaltable tbody tr:hover {
  color: #1d2125;
  background-color: rgba(0, 0, 0, 0.075);
}
.generaltable tbody tr:hover.dimmed_text a:not(.menu-action) {
  color: #1d2125;
}
table caption {
  font-size: 24px;
  font-weight: bold;
  line-height: 42px;
  text-align: left;
  caption-side: top;
}
.table-dynamic .loading-icon {
  position: absolute;
  left: calc(50% - 1.5rem);
  top: 200px;
}
.table-dynamic .loading-icon .icon {
  height: 3rem;
  width: 3rem;
  font-size: 3rem;
}
.singlebutton {
  display: inline-block;
}
.singlebutton + .singlebutton {
  margin-left: 0.5rem;
}
.continuebutton {
  text-align: center;
}
p.arrow_button {
  margin-top: 5em;
  text-align: center;
}
#addcontrols {
  margin-top: 11.25rem;
  text-align: center;
  margin-bottom: 3em;
}
#addcontrols label {
  display: inline;
}
#addcontrols input, #removecontrols input {
  width: 100%;
  margin: auto;
}
.btn-lineup {
  margin: 0 0 10px 5px;
}
.btn.btn-icon {
  height: 36px;
  width: 36px;
  font-size: 16px;
  line-height: 16px;
  padding: 0;
  border-radius: 50%;
  flex-shrink: 0;
}
.btn.btn-icon:hover, .btn.btn-icon:focus {
  background-color: #e9ecef;
}
.btn.btn-icon.icon-size-0 {
  height: 20px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 20px !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 0 !important;
  /* stylelint-disable-line declaration-no-important */
  line-height: 0 !important;
  /* stylelint-disable-line declaration-no-important */
}
.btn.btn-icon.icon-size-1 {
  height: 24px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 24px !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 4px !important;
  /* stylelint-disable-line declaration-no-important */
  line-height: 4px !important;
  /* stylelint-disable-line declaration-no-important */
}
.btn.btn-icon.icon-size-2 {
  height: 28px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 28px !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 8px !important;
  /* stylelint-disable-line declaration-no-important */
  line-height: 8px !important;
  /* stylelint-disable-line declaration-no-important */
}
.btn.btn-icon.icon-size-3 {
  height: 36px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 36px !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 16px !important;
  /* stylelint-disable-line declaration-no-important */
  line-height: 16px !important;
  /* stylelint-disable-line declaration-no-important */
}
.btn.btn-icon.icon-size-4 {
  height: 44px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 44px !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 24px !important;
  /* stylelint-disable-line declaration-no-important */
  line-height: 24px !important;
  /* stylelint-disable-line declaration-no-important */
}
.btn.btn-icon.icon-size-5 {
  height: 52px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 52px !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 32px !important;
  /* stylelint-disable-line declaration-no-important */
  line-height: 32px !important;
  /* stylelint-disable-line declaration-no-important */
}
.btn.btn-icon.icon-size-6 {
  height: 60px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 60px !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 40px !important;
  /* stylelint-disable-line declaration-no-important */
  line-height: 40px !important;
  /* stylelint-disable-line declaration-no-important */
}
.btn.btn-icon.icon-size-7 {
  height: 68px !important;
  /* stylelint-disable-line declaration-no-important */
  width: 68px !important;
  /* stylelint-disable-line declaration-no-important */
  font-size: 48px !important;
  /* stylelint-disable-line declaration-no-important */
  line-height: 48px !important;
  /* stylelint-disable-line declaration-no-important */
}
.btn-primary:focus, .btn-primary.focus {
  outline: 0.2rem solid #000102;
  box-shadow: inset 0 0 0 2px #fff;
}
.btn-secondary:focus, .btn-secondary.focus {
  outline: 0.2rem solid #5f6e7d;
  box-shadow: inset 0 0 0 2px #fff;
}
.btn-success:focus, .btn-success.focus {
  outline: 0.2rem solid black;
  box-shadow: inset 0 0 0 2px #fff;
}
.btn-info:focus, .btn-info.focus {
  outline: 0.2rem solid black;
  box-shadow: inset 0 0 0 2px #fff;
}
.btn-warning:focus, .btn-warning.focus {
  outline: 0.2rem solid #694109;
  box-shadow: inset 0 0 0 2px #fff;
}
.btn-danger:focus, .btn-danger.focus {
  outline: 0.2rem solid #1a0604;
  box-shadow: inset 0 0 0 2px #fff;
}
.btn-light:focus, .btn-light.focus {
  outline: 0.2rem solid #8193a5;
  box-shadow: inset 0 0 0 2px #fff;
}
.btn-dark:focus, .btn-dark.focus {
  outline: 0.2rem solid black;
  box-shadow: inset 0 0 0 2px #fff;
}
.btn-outline-primary:focus, .btn-outline-primary.focus {
  outline: 0.2rem solid #000102;
  box-shadow: inset 0 0 0 2px #343a40;
}
.btn-outline-secondary:focus, .btn-outline-secondary.focus {
  outline: 0.2rem solid #5f6e7d;
  box-shadow: inset 0 0 0 2px #343a40;
}
.btn-outline-success:focus, .btn-outline-success.focus {
  outline: 0.2rem solid black;
  box-shadow: inset 0 0 0 2px #343a40;
}
.btn-outline-info:focus, .btn-outline-info.focus {
  outline: 0.2rem solid black;
  box-shadow: inset 0 0 0 2px #343a40;
}
.btn-outline-warning:focus, .btn-outline-warning.focus {
  outline: 0.2rem solid #694109;
  box-shadow: inset 0 0 0 2px #343a40;
}
.btn-outline-danger:focus, .btn-outline-danger.focus {
  outline: 0.2rem solid #1a0604;
  box-shadow: inset 0 0 0 2px #343a40;
}
.btn-outline-light:focus, .btn-outline-light.focus {
  outline: 0.2rem solid #8193a5;
  box-shadow: inset 0 0 0 2px #343a40;
}
.btn-outline-dark:focus, .btn-outline-dark.focus {
  outline: 0.2rem solid black;
  box-shadow: inset 0 0 0 2px #343a40;
}
.gradetreebox h4 {
  font-size: 0.9375rem;
}
.gradetreebox th.cell, .gradetreebox input[type=text] {
  width: auto;
}
.gradetreebox input[type=text], .gradetreebox select {
  margin-bottom: 0;
}
.core_grades_notices .singlebutton {
  display: inline-block;
}
.path-grade-report #maincontent + .urlselect {
  position: absolute;
  left: 40vw;
}
.path-grade-report-grader #region-main {
  overflow-x: visible;
  min-width: 100%;
  width: auto;
  display: flex;
  flex-direction: column;
}
.path-grade-report-grader #region-main > .card {
  width: auto;
  overflow-x: initial;
}
.path-grade-report-grader #region-main div[role="main"] {
  flex: 1 1 auto;
}
.path-grade-report-grader [data-region="blocks-column"] {
  width: 100%;
  clear: both;
}
.path-grade-report-grader .gradepass, .path-grade-report-user .gradepass {
  color: #357a32;
}
.path-grade-report-grader .gradefail, .path-grade-report-user .gradefail {
  color: #ca3120;
}
#page-grade-grading-manage #activemethodselector label {
  display: inline-block;
}
#page-grade-grading-manage #activemethodselector .helptooltip {
  margin-right: 0.5em;
}
#page-grade-grading-manage .actions {
  display: block;
  text-align: center;
  margin-bottom: 1em;
}
#page-grade-grading-manage .actions .action {
  display: inline-block;
  position: relative;
  vertical-align: top;
  width: 150px;
  text-align: center;
  overflow: hidden;
  margin: 0.5em;
  padding: 1em;
  border: 1px solid #aaa;
}
#page-grade-grading-manage .actions .action .action-text {
  position: relative;
  top: 0.4em;
  font-size: 14px;
  white-space: normal;
}
#page-grade-grading-form-rubric-edit .gradingform_rubric_editform .status {
  font-size: 70%;
}
.gradingform_rubric {
  margin-bottom: 1em;
}
.gradingform_rubric.evaluate .criterion .levels .level:hover, .gradingform_rubric.evaluate .criterion .levels .level.checked {
  background: #dff0d8;
}
.gradingform_rubric.evaluate .criterion .levels .level.checked {
  border: none;
  border-left: 1px solid #dee2e6;
}
.gradingform_rubric .criterion .description {
  vertical-align: top;
  padding: 6px;
}
.gradingform_rubric .criterion .description textarea {
  margin-bottom: 0;
  height: 115px;
}
.gradingform_rubric .criterion .definition textarea {
  width: 80%;
  margin-bottom: 0;
}
.gradingform_rubric .criterion .score {
  margin-top: 5px;
  margin-right: 28px;
  font-style: italic;
  font-weight: bold;
  color: #2d662a;
}
.gradingform_rubric .criterion .score input {
  margin-bottom: 0;
}
.gradingform_rubric .criterion .level {
  vertical-align: top;
  padding: 6px;
}
.gradingform_rubric .criterion .level.currentchecked {
  background: #fff0f0;
}
.gradingform_rubric .criterion .level.checked {
  background: #d0ffd0;
  border: 1px solid #555;
}
.gradingform_rubric .criterion .level .delete {
  position: relative;
  width: 32px;
  height: 32px;
  margin-top: -32px;
  clear: both;
  float: right;
}
.gradingform_rubric .criterion .level .delete input {
  display: block;
  position: absolute;
  right: 0;
  bottom: 0;
  height: 24px;
  width: 24px;
  margin: 0;
}
.gradingform_rubric .criterion .level .delete input:hover {
  background-color: #ddd;
}
.gradingform_rubric .criterion .scorevalue input {
  float: none;
  width: 2em;
}
.gradingform_rubric .criterion .scorevalue input.hiddenelement, .gradingform_rubric .criterion .scorevalue input.pseudotablink {
  width: 0;
}
.gradingform_rubric .criterion .addlevel {
  vertical-align: top;
  padding-top: 6px;
}
.gradingform_rubric .criterion .addlevel input {
  height: 30px;
  line-height: 1rem;
}
.gradingform_rubric .addcriterion {
  margin-left: 5px;
  padding: 0;
  margin-bottom: 1em;
}
.gradingform_rubric .addcriterion input {
  margin: 0;
  color: inherit;
  text-shadow: inherit;
  border: 0 none;
  line-height: inherit;
  background: transparent url(/theme/image.php?theme=classic&component=core&image=t%2Fadd) no-repeat 7px 8px;
  padding-left: 26px;
}
.gradingform_rubric .options {
  clear: both;
}
.gradingform_rubric .options .option label {
  margin: 0;
  padding: 0;
  font-size: inherit;
  font-weight: normal;
  line-height: 2em;
  color: inherit;
  text-shadow: none;
  background-color: transparent;
}
.gradingform_rubric .options .option input {
  margin-left: 5px;
  margin-right: 12px;
}
.grade-display .description {
  font-size: 1rem;
}
.criterion .description {
  font-size: 1rem;
}
.criterion .criterion-toggle .expanded-icon {
  display: block;
}
.criterion .criterion-toggle .collapsed-icon {
  display: none;
}
.criterion .criterion-toggle.collapsed .expanded-icon {
  display: none;
}
.criterion .criterion-toggle.collapsed .collapsed-icon {
  display: block;
}
.path-grade-edit-tree .setup-grades h4 {
  margin: 0;
}
.path-grade-edit-tree .setup-grades .column-rowspan {
  padding: 0;
  width: 24px;
  min-width: 24px;
  max-width: 24px;
}
.path-grade-edit-tree .setup-grades .category td.column-name {
  padding-left: 0;
}
.path-grade-edit-tree .setup-grades td.column-name {
  padding-left: 24px;
}
.path-grade-edit-tree .setup-grades td.movehere {
  padding: 0;
}
.path-grade-edit-tree .setup-grades td.movehere a.movehere {
  display: block;
  width: 100%;
  height: 2rem;
  border: 2px dashed #343a40;
}
.path-grade-edit-tree .setup-grades .category input[type="text"], .path-grade-edit-tree .setup-grades .category .column-range, .path-grade-edit-tree .setup-grades .categoryitem, .path-grade-edit-tree .setup-grades .courseitem {
  font-weight: bold;
}
.path-grade-edit-tree .setup-grades .emptyrow {
  display: none;
}
.path-grade-edit-tree .setup-grades .gradeitemdescription {
  font-weight: normal;
  padding-left: 24px;
}
.path-grade-edit-tree .setup-grades .column-weight {
  white-space: nowrap;
}
.path-grade-edit-tree .setup-grades .column-weight.level3 {
  padding-left: 37px;
}
.path-grade-edit-tree .setup-grades .column-weight.level4 {
  padding-left: 66px;
}
.path-grade-edit-tree .setup-grades .column-weight.level5 {
  padding-left: 95px;
}
.path-grade-edit-tree .setup-grades .column-weight.level6 {
  padding-left: 124px;
}
.path-grade-edit-tree .setup-grades .column-weight.level7 {
  padding-left: 153px;
}
.path-grade-edit-tree .setup-grades .column-weight.level8 {
  padding-left: 182px;
}
.path-grade-edit-tree .setup-grades .column-weight.level9 {
  padding-left: 211px;
}
.path-grade-edit-tree .setup-grades .column-weight.level10 {
  padding-left: 240px;
}
.path-grade-edit-tree .setup-grades .column-range.level2 {
  padding-left: 37px;
}
.path-grade-edit-tree .setup-grades .column-range.level3 {
  padding-left: 66px;
}
.path-grade-edit-tree .setup-grades .column-range.level4 {
  padding-left: 95px;
}
.path-grade-edit-tree .setup-grades .column-range.level5 {
  padding-left: 124px;
}
.path-grade-edit-tree .setup-grades .column-range.level6 {
  padding-left: 153px;
}
.path-grade-edit-tree .setup-grades .column-range.level7 {
  padding-left: 182px;
}
.path-grade-edit-tree .setup-grades .column-range.level8 {
  padding-left: 211px;
}
.path-grade-edit-tree .setup-grades .column-range.level9 {
  padding-left: 240px;
}
.path-grade-edit-tree .setup-grades .column-range.level10 {
  padding-left: 269px;
}
.path-grade-edit-tree .setup-grades.generaltable .levelodd {
  background-color: rgba(0, 0, 0, 0.03);
}
/**
 * Grader report.
 */
.path-grade-report-grader .gradeparent tr .cell, .path-grade-report-grader .gradeparent .floater .cell {
  background-color: #fff;
}
.path-grade-report-grader .gradeparent table, .path-grade-report-grader .gradeparent .cell {
  border-color: #dee2e6;
}
.path-grade-report-grader .gradeparent .userrow.odd .cell, .path-grade-report-grader .gradeparent .floater .cell.odd, .path-grade-report-grader .gradeparent .heading .cell, .path-grade-report-grader .gradeparent .cell.category, .path-grade-report-grader .gradeparent .avg .cell {
  background-color: #f8f9fa;
}
.path-grade-report-grader .gradeparent table .clickable {
  cursor: pointer;
}
.path-grade-report-grader .gradeparent tr.heading {
  position: sticky;
  top: 0;
  z-index: 1;
}
.path-grade-report-grader .gradeparent tr.lastrow {
  position: sticky;
  bottom: 0;
  z-index: 1;
}
.path-grade-report-grader .gradeparent tr.lastrow td, .path-grade-report-grader .gradeparent tr.lastrow th {
  border-top: 1px solid #dee2e6;
}
.path-grade-report-grader .gradeparent th.header {
  position: sticky;
  left: -3rem;
}
.path-grade-report-grader .gradeparent td.noborder {
  border-right: transparent;
}
.path-grade-report-grader .show-drawer-left .gradeparent th.header {
  left: -1rem;
}
/**
 * User report.
 */
.path-grade-report-user .user-grade {
  border: none;
}
.path-grade-report-user .user-grade.generaltable .levelodd {
  background-color: rgba(0, 0, 0, 0.03);
}
.path-grade-report-user .user-grade .column-contributiontocoursetotal, .path-grade-report-user .user-grade .column-range, .path-grade-report-user .user-grade .column-percentage, .path-grade-report-user .user-grade .column-weight {
  /*rtl:ignore*/
  direction: ltr;
}
/**
 * Single view.
 */
.path-grade-report-singleview input[name^="finalgrade"] {
  width: 80px;
}
.columns-autoflow-1to1to1 {
  column-count: 3;
}
@media (max-width: 767px) {
  .columns-autoflow-1to1to1 {
    column-count: 1;
  }
}
/* some very targetted corrections to roll back nameclashes between
 * Moodle and Bootstrap like .row, .label, .content, .controls
 *
 * Mostly relies on these styles being more specific than the Bootstrap
 * ones in order to overule them.
 */
li.activity.label, .file-picker td.label {
  background: inherit;
  color: inherit;
  border: inherit;
  text-shadow: none;
  white-space: normal;
  display: block;
  font-size: inherit;
  line-height: inherit;
  text-align: inherit;
}
.file-picker td.label {
  display: table-cell;
  text-align: right;
  padding: 8px;
}
.choosercontainer #chooseform .option {
  font-size: 12px;
}
/* block.invisible vs .invisible
 * block.hidden vs .invisible
 *
 * uses .invisible where the rest of Moodle uses @mixin dimmed
 * fixible in block renderer?
 *
 * There's seems to be even more naming confusion here since,
 * blocks can be actually 'visible' (or not) to students,
 * marked 'visible' but really just dimmed to indicate to editors
 * that students can't see them or  'visible' to the user who
 * collapses them, 'visible' if you have the right role and in
 * different circumstances different sections of a block can
 * be 'visible' or not.
 *
 * currently worked around in renderers.php function block{}
 * by rewriting the class name "invisible" to "dimmed",
 * though the blocks don't look particularly different apart
 * from their contents disappearing. Maybe try .muted? or
 * dimming all the edit icons apart from unhide, might be a
 * nice effect, though they'd still be active. Maybe reverse
 * it to white?
 */
li.section.hidden, .block.hidden, .block.invisible {
  visibility: visible;
  display: block;
}
/* .row vs .row
 *
 * very tricky to track down this when it goes wrong,
 * since the styles are applied to generated content
 *
 * basically if you see things shifted left or right compared
 * with where they should be check for a .row
 */
.forumpost .row {
  margin-left: 0 !important;
  /* stylelint-disable-line declaration-no-important */
}
.forumpost .row:before, .forumpost .row:after {
  content: none;
}
/* fieldset.hidden vs .hidden
 *
 * Moodle uses fieldset.hidden for mforms, to signify a collection of
 * form elements that don't have a box drawn round them. Bootstrap
 * uses hidden for stuff that is hidden in various responsive modes.
 *
 * Relatedly, there is also fieldset.invisiblefieldset which hides the
 * border and sets the display to inline.
 *
 * Originally this just set block and visible, but it is used
 * in random question dialogue in Quiz,
 * that dialogue is hidden and shown, so when hidden the
 * above workaround leaves you with a button floating around
 */
fieldset.hidden {
  display: inherit;
  visibility: inherit;
}
/* .container vs .container
 *
 * bootstrap uses .container to set the width of the layout at 960px or so, Moodle uses it
 * in the Quiz to contain the questions to add. If you don't overule the Bootstrap code,
 * it becomes near unuseable.
 */
#questionbank + .container {
  width: auto;
}
body:not(.jsenabled) .dropdown:hover > .dropdown-menu {
  display: block;
  margin-top: -6px;
}
body:not(.jsenabled) .langmenu:hover > .dropdown-menu, .langmenu.open > .dropdown-menu {
  display: block;
  max-height: 150px;
  overflow-y: auto;
}
.navbar.fixed-top .dropdown .dropdown-menu {
  max-height: calc(100vh - 50px);
  overflow-y: auto;
}
.page-item.active .page-link, .page-item.active .page-link:hover, .page-item.active .page-link:focus {
  z-index: inherit;
}
/* Force positioning of popover arrows.
 *
 * The Css prefixer used in Moodle does not support complex calc statements used
 * in Bootstrap 4 CSS. For example:
 * calc((0.5rem + 1px) * -1); is stripped out by lib/php-css-parser/Parser.php.
 * See MDL-61879. For now the arrow positions of popovers are fixed until this is resolved.
 */
.bs-popover-right .arrow, .bs-popover-auto[x-placement^="right"] .arrow {
  left: -9px;
}
.bs-popover-left .arrow, .bs-popover-auto[x-placement^="left"] .arrow {
  right: -9px;
}
.bs-popover-top .arrow, .bs-popover-auto[x-placement^="top"] .arrow {
  bottom: -9px;
}
.bs-popover-bottom .arrow, .bs-popover-auto[x-placement^="bottom"] .arrow {
  top: -9px;
}
.custom-select {
  word-wrap: normal;
}
/* Add commented out carousel transistions back in.
 *
 * The Css prefixer used in Moodle breaks on @supports syntax, See MDL-61515.
 */
.carousel-item-next.carousel-item-left, .carousel-item-prev.carousel-item-right {
  transform: translateX(0);
}
.carousel-item-next, .active.carousel-item-right {
  transform: translateX(100%);
}
.carousel-item-prev, .active.carousel-item-left {
  transform: translateX(-100%);
}
/**
 * Reset all of the forced style on the page.
 * - Remove borders on header and content.
 * - Remove most of the vertical padding.
 * - Make the content region flex grow so it pushes things like the
 *   next activity selector to the bottom of the page.
 */
body.behat-site .fixed-top {
  position: absolute;
}
body.behat-site .dropdown-item {
  margin-top: 4px !important;
  /* stylelint-disable declaration-no-important */
}
body.behat-site.drawer-ease {
  -webkit-transition: initial;
  -moz-transition: initial;
  transition: initial;
}
body.behat-site [data-region="drawer"] {
  -webkit-transition: initial;
  -moz-transition: initial;
  transition: initial;
  position: absolute;
}
body.behat-site .custom-control, body.behat-site .custom-switch {
  padding-left: 0;
}
body.behat-site .custom-control-input {
  position: static;
  z-index: 0;
  opacity: 1;
  width: auto;
}
body.behat-site .custom-control-label::before, body.behat-site .custom-control-label::after {
  content: none;
}
body.behat-site [data-region="message-drawer"] {
  padding-right: 10px;
}
body.behat-site.jsenabled #page-footer .footer-content-popover {
  display: block;
}
body.behat-site.path-grade-report-grader .gradeparent tr.heading, body.behat-site.path-grade-report-grader .gradeparent tr.lastrow, body.behat-site.path-grade-report-grader .gradeparent th.header {
  position: relative;
  left: auto;
}
body.behat-site.path-grade-report-grader .gradeparent tr.heading {
  top: auto;
}
.phpinfo table, .phpinfo th, .phpinfo h2 {
  margin: auto;
}
.phpinfo .e, .phpinfo .v, .phpinfo .h {
  border: 1px solid #000;
  font-size: 0.8em;
  vertical-align: baseline;
  color: #000;
  background-color: #ccc;
}
.phpinfo .e {
  background-color: #ccf;
  font-weight: bold;
}
.phpinfo .h {
  background-color: #99c;
  font-weight: bold;
}
body > .debuggingmessage {
  margin-top: 50px;
}
body > .debuggingmessage ~ .debuggingmessage {
  margin-top: 0.5rem;
}
/**
 * This file contains the styles required to make the footer sticky.
 */
html, body {
  height: 100%;
}
@media (min-width: 576px) {
  #page-wrapper {
    height: 100%;
    display: flex;
    flex-direction: column;
  }
  #page-wrapper #page {
    display: flex;
    flex-direction: column;
  }
  #page-wrapper #page:not(.drawers) {
    flex: 1 0 auto;
  }
  #page-wrapper #page #page-content {
    flex: 1 0 auto;
  }
  #page-wrapper #page-footer {
    flex-shrink: 0;
  }
}
@media (max-width: 767.98px) {
  #page-wrapper {
    height: 100%;
    display: flex;
    flex-direction: column;
  }
  #page-wrapper #page {
    display: flex;
    flex-direction: column;
  }
  #page-wrapper #page:not(.drawers) {
    flex: 1 0 auto;
  }
}
.popover-region {
  position: relative;
}
.popover-region.collapsed .popover-region-toggle:before, .popover-region.collapsed .popover-region-toggle:after {
  display: none;
}
.popover-region.collapsed .popover-region-container {
  opacity: 0;
  visibility: hidden;
  height: 0;
  overflow: hidden;
  transition: height 0.25s, opacity 101ms 0.25s, visibility 101ms 0.25s;
}
.popover-region-toggle {
  cursor: pointer;
}
.popover-region-toggle::before {
  content: "";
  display: inline-block;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #ddd;
  position: absolute;
  bottom: 0;
  right: 7px;
}
.popover-region-toggle::after {
  content: "";
  display: inline-block;
  border-left: 9px solid transparent;
  border-right: 9px solid transparent;
  border-bottom: 9px solid #fff;
  position: absolute;
  bottom: -1px;
  right: 8px;
  z-index: 2;
}
.count-container {
  padding: 2px;
  border-radius: 2px;
  background-color: #ca3120;
  color: white;
  font-size: 11px;
  line-height: 11px;
  position: absolute;
  top: 5px;
  right: 0;
}
.popover-region-container {
  opacity: 1;
  visibility: visible;
  position: absolute;
  right: 0;
  top: 0;
  height: 500px;
  width: 380px;
  border: 1px solid #ddd;
  transition: height 0.25s;
  background-color: #fff;
  z-index: 1;
}
.popover-region-header-container {
  height: 25px;
  line-height: 25px;
  padding-left: 5px;
  padding-right: 5px;
  border-bottom: 1px solid #ddd;
  box-sizing: border-box;
}
.popover-region-footer-container {
  height: 30px;
  text-align: center;
  border-top: 1px solid #ddd;
  background-color: #fff;
  padding-top: 3px;
}
.popover-region-header-text {
  float: left;
  margin: 0;
  font-size: 14px;
  line-height: 25px;
}
.popover-region-header-actions {
  float: right;
}
.popover-region-header-actions > * {
  margin-left: 10px;
  min-width: 20px;
  display: inline-block;
}
.popover-region-header-actions .loading-icon {
  display: none;
  height: 12px;
  width: 12px;
}
.popover-region-header-actions .newmessage-link {
  margin-right: 10px;
}
.popover-region-header-actions label {
  display: inline-block;
  text-align: center;
  margin-bottom: 0;
}
.popover-region-content-container {
  height: calc(100% - 55px);
  width: 100%;
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
}
.popover-region-content-container > .loading-icon {
  display: none;
  text-align: center;
  padding: 5px;
  box-sizing: border-box;
}
.popover-region-content-container .empty-message {
  display: none;
  text-align: center;
  padding: 10px;
}
.popover-region-content-container.loading > .loading-icon {
  display: block;
}
.popover-region-content-container.loading .empty-message {
  display: none;
}
.navbar-nav .popover-region .icon {
  font-weight: bolder;
}
.navbar .popover-region.collapsed .popover-region-container {
  opacity: 0;
  visibility: hidden;
  height: 0;
  overflow: hidden;
  transition: height 0.25s, opacity 101ms 0.25s, visibility 101ms 0.25s;
}
.navbar .count-container {
  padding: 2px;
  border-radius: 2px;
  background-color: #ca3120;
  color: white;
  font-size: 11px;
  line-height: 11px;
  position: absolute;
  top: 12.5px;
  right: 0;
}
.navbar .popover-region-container {
  top: 50px;
}
.content-item-container {
  width: 100%;
  border-bottom: 1px solid #ddd;
  box-sizing: border-box;
  padding: 5px;
  position: relative;
  margin: 0;
  display: block;
  color: inherit;
  text-decoration: none;
}
.content-item-container:hover {
  color: #fff;
  background-color: #0f6cbf;
}
.content-item-container:hover .content-item-footer .timestamp {
  color: #fff;
}
.content-item-container:hover .view-more {
  color: inherit;
}
.content-item-container.unread {
  margin: 0;
  background-color: #f4f4f4;
}
.content-item-container.unread:hover {
  color: #fff;
  background-color: #0f6cbf;
}
.content-item-container.unread .content-item-body .notification-message {
  font-weight: 600;
}
.content-item-container .context-link {
  color: inherit;
  text-decoration: none;
}
.content-item-container .content-item-body {
  box-sizing: border-box;
  margin-bottom: 5px;
}
.content-item-container .content-item-footer {
  text-align: left;
  box-sizing: border-box;
}
.content-item-container .content-item-footer .timestamp {
  font-size: 10px;
  line-height: 10px;
  margin: 0;
  color: inherit;
  margin-left: 24px;
}
.content-item-container .view-more {
  position: absolute;
  bottom: 5px;
  right: 5px;
  font-size: 12px;
  line-height: 12px;
}
.content-item-container .view-more:hover {
  color: inherit;
}
.content-item-container.notification .content-item-body .notification-image {
  display: inline-block;
  width: 24px;
  height: 24px;
  float: left;
}
.content-item-container.notification .content-item-body .notification-image img {
  height: 75%;
}
.content-item-container.notification .content-item-body .notification-message {
  display: inline-block;
  font-size: 12px;
  width: calc(100% - 24px);
}
.content-item-container.selected {
  background-color: #4f94cd;
  color: #fff;
  border-color: #4f94cd;
}
.content-item-container.selected .content-item-footer .timestamp {
  color: #fff;
}
.popover-region-notifications .popover-region-header-container .mark-all-read-button .normal-icon {
  display: inline-block;
}
.popover-region-notifications .popover-region-header-container .mark-all-read-button.loading .normal-icon {
  display: none;
}
.popover-region-notifications .popover-region-header-container .mark-all-read-button.loading .loading-icon {
  display: inline-block;
}
.popover-region-notifications .all-notifications {
  opacity: 1;
  visibility: visible;
  height: auto;
  overflow: hidden;
}
.popover-region-notifications .all-notifications:empty + .empty-message {
  display: block;
}
.popover-region-notifications .notification-image {
  display: inline-block;
  width: 8%;
  vertical-align: top;
}
.popover-region-notifications .notification-image img {
  height: 75%;
}
.popover-region-notifications .notification-message {
  display: inline-block;
  font-size: 12px;
}
.popover-region-notifications .popover-region-content-container.loading .all-notifications:empty + .empty-message {
  display: none;
}
.popover-region-messages .mark-all-read-button .normal-icon {
  display: inline-block;
}
.popover-region-messages .mark-all-read-button.loading .normal-icon {
  display: none;
}
.popover-region-messages .mark-all-read-button.loading .loading-icon {
  display: inline-block;
}
.popover-region-messages .popover-region-content-container.loading .popover-region-content .messages:empty + .empty-message {
  display: none;
}
.popover-region-messages .messages:empty + .empty-message {
  display: block;
}
.popover-region-messages .content-item-container.unread .content-item-body {
  font-weight: 600;
  width: calc(90% - 30px);
}
.popover-region-messages .content-item-container.unread .unread-count-container {
  display: inline-block;
  width: 10%;
  text-align: center;
  float: right;
}
.popover-region-messages .content-item {
  height: 100%;
  width: 100%;
  box-sizing: border-box;
}
.popover-region-messages .profile-image-container {
  width: 30px;
  display: inline-block;
  text-align: center;
  float: left;
}
.popover-region-messages .profile-image-container img {
  width: 100%;
  display: inline-block;
  vertical-align: middle;
  border-radius: 50%;
}
.popover-region-messages .content-item-body {
  display: inline-block;
  box-sizing: border-box;
  width: calc(100% - 30px);
  font-size: 12px;
  padding-left: 10px;
  overflow: hidden;
}
.popover-region-messages .content-item-body h3 {
  font-size: 12px;
  line-height: 12px;
  margin: 0;
  width: 100%;
}
.popover-region-messages .content-item-body p {
  margin: 0;
}
.popover-region-messages .unread-count-container {
  display: none;
}
@media (max-width: 767px) {
  .navbar .popover-region .popover-region-container {
    right: -70px;
  }
}
@media (max-width: 480px) {
  .navbar .popover-region .popover-region-container {
    position: fixed;
    top: 46px;
    right: 0;
    left: 0;
    bottom: 0;
    width: auto;
    height: auto;
  }
}
/**
 * Tour step must sit above all other UI components.
 * The backdrop is the lowest point in the tour.
 * Everything else is in the container, and the target background should be at the same z-index.
 * ----- moodle
 *  ---- step backdrop
 *   --- step container
 *   --- step target background
 */
div[data-flexitour="backdrop"] {
  background-color: #000;
  opacity: 0.5;
  z-index: 1040;
}
div[data-flexitour="step-background-fader"], div[data-flexitour="step-background"] {
  border-radius: 0.3rem;
  padding: 10px;
  z-index: 1041;
}
span[data-flexitour="container"], div[data-flexitour="step-background-fader"], [data-flexitour="step-backdrop"] > td, [data-flexitour="step-backdrop"] {
  z-index: 1042;
}
span[data-flexitour="container"] .modal-dialog {
  /**
         * Remove all margins to:
         * 1) ensure that the arrow touches the target; and
         * 2) ensure that the focus border touches the modal.
         */
  margin: 0;
}
span[data-flexitour="container"] div[data-role="arrow"] {
  border-width: 1rem;
}
span[data-flexitour="container"] div[data-role="arrow"], span[data-flexitour="container"] div[data-role="arrow"]:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
  border-width: 1rem;
}
span[data-flexitour="container"][x-placement="top"], span[data-flexitour="container"][x-placement="top-start"] {
  margin-bottom: 1rem;
}
span[data-flexitour="container"][x-placement="top"] div[data-role="arrow"], span[data-flexitour="container"][x-placement="top-start"] div[data-role="arrow"] {
  bottom: -1rem;
  left: 50%;
  margin-left: -1rem;
  border-bottom-width: 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}
span[data-flexitour="container"][x-placement="top"] div[data-role="arrow"]:after, span[data-flexitour="container"][x-placement="top-start"] div[data-role="arrow"]:after {
  bottom: 1px;
  margin-left: -1rem;
  content: " ";
  border-bottom-width: 0;
  border-top-color: #fff;
}
span[data-flexitour="container"][x-placement="bottom"], span[data-flexitour="container"][x-placement="bottom-start"] {
  margin-top: 1rem;
}
span[data-flexitour="container"][x-placement="bottom"] div[data-role="arrow"], span[data-flexitour="container"][x-placement="bottom-start"] div[data-role="arrow"] {
  top: -1rem;
  left: 50%;
  margin-left: -1rem;
  border-top-width: 0;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}
span[data-flexitour="container"][x-placement="bottom"] div[data-role="arrow"]:after, span[data-flexitour="container"][x-placement="bottom-start"] div[data-role="arrow"]:after {
  top: 1px;
  margin-left: -1rem;
  content: " ";
  border-top-width: 0;
  border-bottom-color: #fff;
}
span[data-flexitour="container"][x-placement="left"], span[data-flexitour="container"][x-placement="left-start"] {
  margin-right: 1rem;
}
span[data-flexitour="container"][x-placement="left"] div[data-role="arrow"], span[data-flexitour="container"][x-placement="left-start"] div[data-role="arrow"] {
  right: -1rem;
  top: 50%;
  margin-top: -1rem;
  border-right-width: 0;
  border-left-color: rgba(0, 0, 0, 0.25);
}
span[data-flexitour="container"][x-placement="left"] div[data-role="arrow"]:after, span[data-flexitour="container"][x-placement="left-start"] div[data-role="arrow"]:after {
  right: 1px;
  margin-top: -1rem;
  content: " ";
  border-right-width: 0;
  border-left-color: #fff;
}
span[data-flexitour="container"][x-placement="right"], span[data-flexitour="container"][x-placement="right-start"] {
  margin-left: 1rem;
}
span[data-flexitour="container"][x-placement="right"] div[data-role="arrow"], span[data-flexitour="container"][x-placement="right-start"] div[data-role="arrow"] {
  left: -1rem;
  top: 50%;
  margin-top: -1rem;
  border-left-width: 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}
span[data-flexitour="container"][x-placement="right"] div[data-role="arrow"]:after, span[data-flexitour="container"][x-placement="right-start"] div[data-role="arrow"]:after {
  left: 1px;
  margin-top: -1rem;
  content: " ";
  border-left-width: 0;
  border-right-color: #fff;
}
[data-region="drawer"] [data-flexitour="container"] {
  /*rtl:ignore*/
  margin-left: -15px;
  width: 275px;
}
@media print {
  body.drawer-open-left.jsenabled, body.drawer-open-right.jsenabled {
    margin: 0;
  }
  .container {
    width: auto;
  }
}
.modal .modal-body > .loading-icon {
  display: block;
  position: relative;
  width: 100%;
  height: 100%;
}
.modal .modal-body > .loading-icon .icon {
  position: absolute;
  top: 50%;
  /*rtl:ignore*/
  left: 50%;
  transform: translate(-50%, -50%);
}
.modal .close {
  margin: -0.8rem -0.8rem -0.8rem auto;
}
.modal .close:not(:disabled):not(.disabled):hover, .modal .close:not(:disabled):not(.disabled):focus {
  opacity: inherit;
}
.layout.fullscreen {
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  transition: 0.5s;
  width: 100vw;
  margin: 0;
  opacity: 1;
  background-color: #fff;
}
@media (prefers-reduced-motion: reduce) {
  .layout.fullscreen {
    transition: none;
  }
}
.layout.fullscreen > div {
  height: 100%;
  width: 100%;
}
.layout.fullscreen .loading-icon {
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  display: inline-block;
  width: 100%;
  top: 40%;
  position: fixed;
}
.layout.fullscreen .loading-icon .icon {
  width: 1em;
  height: 1em;
  font-size: 4em;
}
#page.drawers {
  margin-top: 50px;
  scrollbar-width: thin;
  scrollbar-color: #6a737b #f8f9fa;
}
#page.drawers::-webkit-scrollbar {
  width: 12px;
}
#page.drawers::-webkit-scrollbar-track {
  background: #f8f9fa;
}
#page.drawers::-webkit-scrollbar-thumb {
  background-color: #6a737b;
  border-radius: 20px;
  border: 3px solid #f8f9fa;
}
#page.drawers::-webkit-scrollbar-thumb:hover {
  background-color: #495057;
}
#page.drawers .main-inner {
  max-width: 100%;
  width: 100%;
  margin: 0 auto;
  border-radius: 0.25rem;
  background-color: #fff;
  padding: 1.5rem 0.5rem;
  margin-top: 0.5rem;
  margin-bottom: 3rem;
  flex: 1 0 auto;
}
#page.drawers .activity-header {
  margin-left: 15px;
  margin-right: 15px;
}
@media (min-width: 768px) {
  .pagelayout-standard #page.drawers .main-inner, body.limitedwidth #page.drawers .main-inner {
    max-width: 830px;
  }
  .pagelayout-standard #page.drawers .footer-popover, body.limitedwidth #page.drawers .footer-popover {
    max-width: 830px;
    width: 100%;
    margin: 0 auto;
    border-radius: 0.25rem;
  }
  .header-maxwidth {
    max-width: 830px;
    margin: 0 auto;
    padding-left: 15px;
    padding-right: 15px;
  }
  .header-maxwidth .header-inner {
    padding-left: 0;
    padding-right: 0;
  }
}
.drawer-toggles .drawer-toggler {
  position: fixed;
  top: calc(50px + 0.7rem);
  z-index: 2;
}
.drawer-toggles .drawer-toggler .btn {
  border-radius: 200px;
  padding: 16px;
  background-color: #dee2e6;
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
  transition: padding 200ms;
}
.drawer-toggles .drawer-toggler .btn .icon {
  width: auto;
  height: auto;
}
.drawer-toggles .drawer-toggler .btn:focus {
  box-shadow: 0 0 0 0.2rem rgba(15, 108, 191, 0.75);
}
.drawer-toggles .drawer-left-toggle {
  left: 0;
}
.drawer-toggles .drawer-left-toggle .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  padding-right: 14px;
  padding-left: 10px;
}
.drawer-toggles .drawer-left-toggle .btn:hover {
  padding-left: 20px;
}
.drawer-toggles .drawer-right-toggle {
  right: 0;
}
.drawer-toggles .drawer-right-toggle .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  padding-right: 10px;
  padding-left: 14px;
}
.drawer-toggles .drawer-right-toggle .btn:hover {
  padding-right: 20px;
}
#page.drawers.show-drawer-left .drawer-left-toggle {
  display: none;
}
#page.drawers.show-drawer-right .drawer-right-toggle {
  display: none;
}
@media (max-width: 767.98px) {
  .drawer-toggles {
    z-index: 100;
  }
  .drawer-toggles .drawer-right-toggle, .drawer-toggles .drawer-left-toggle {
    top: calc(99vh - (50px * 2.5));
  }
  #page.drawers.scroll-down .drawer-right-toggle {
    transform: translateX(150%);
    pointer-events: auto;
    visibility: hidden;
  }
  #page.drawers.scroll-down .drawer-left-toggle {
    transform: translateX(-150%);
    pointer-events: auto;
    visibility: hidden;
  }
}
@media (min-width: 576px) {
  #page.drawers .main-inner {
    margin-top: 1.5rem;
  }
}
@media (min-width: 768px) {
  #page.drawers {
    padding-left: 3rem;
    padding-right: 3rem;
  }
  #page.drawers .main-inner {
    padding: 1.5rem 0.5rem;
  }
  #page.drawers div[role="main"] {
    padding-left: 15px;
    padding-right: 15px;
  }
}
@media (min-width: 992px) {
  .drawer-left, .drawer-right {
    top: 50px;
    height: calc(100vh - 50px);
  }
  #page.drawers {
    position: relative;
    overflow-y: auto;
    transition: 0.2s;
    height: calc(100vh - 50px);
    left: 0;
    right: 0;
  }
  #page.drawers.show-drawer-left {
    margin-left: 285px;
    margin-right: 0;
    padding-left: 1rem;
  }
  #page.drawers.show-drawer-right {
    margin-left: 0;
    margin-right: 315px;
    padding-right: 1rem;
  }
  .jsenabled #page.drawers.show-drawer-right .btn-footer-popover {
    right: calc(315px + 2rem);
  }
  #page.drawers.show-drawer-left.show-drawer-right {
    margin-left: 285px;
    margin-right: 315px;
  }
}
@media (min-width: 992px) and (prefers-reduced-motion: reduce) {
  #page.drawers {
    transition: none;
  }
}
.drawercontrolbuttons {
  margin-top: 92px;
}
.drawercontrolbuttons .buttons {
  z-index: 1;
}
.form-control:-ms-input-placeholder {
  color: #6a737b;
}
.custom-select {
  -webkit-appearance: none;
  -moz-appearance: none;
}
.custom-range {
  -webkit-appearance: none;
  -moz-appearance: none;
}
.custom-range::-webkit-slider-thumb, .custom-range::-moz-range-thumb, .custom-range::-ms-thumb {
  -webkit-appearance: none;
  -moz-appearance: none;
}
input[type="date"].form-control, input[type="time"].form-control, input[type="datetime-local"].form-control, input[type="month"].form-control {
  -webkit-appearance: none;
  -moz-appearance: none;
}
@media (min-width: 576px) {
  .card-columns {
    -webkit-column-gap: 1.25rem;
    -moz-column-gap: 1.25rem;
  }
}
.carousel-item {
  -webkit-backface-visibility: hidden;
}
.card {
  -webkit-background-clip: border-box;
}
.carousel-indicators li, .dropdown-menu, .form-control, .modal-content, .popover, .toast {
  -webkit-background-clip: padding-box;
}
.btn {
  -webkit-user-select: none;
  -ms-user-select: none;
}
.user-select-all {
  -webkit-user-select: all !important;
  /* stylelint-disable-line declaration-no-important */
  -ms-user-select: none;
}
.user-select-auto {
  -webkit-user-select: auto !important;
  /* stylelint-disable-line declaration-no-important */
  -ms-user-select: none;
}
.user-select-none {
  -webkit-user-select: none !important;
  /* stylelint-disable-line declaration-no-important */
  -ms-user-select: none;
}
.editor_atto_content_wrap {
  background-color: white;
  color: #333;
}
.editor_atto_content {
  padding: 4px;
  resize: vertical;
  overflow: auto;
}
.editor_atto_content_wrap, .editor_atto + textarea {
  width: 100%;
  padding: 0;
}
.editor_atto + textarea {
  border-radius: 0;
  resize: vertical;
  margin-top: -1px;
}
div.editor_atto_toolbar {
  display: block;
  background: #f2f2f2;
  min-height: 35px;
  border: 1px solid #8f959e;
  width: 100%;
  padding: 0 0 9px 0;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}
div.editor_atto_toolbar button {
  padding: 4px 9px;
  background: none;
  border: 0;
  margin: 0;
  border-radius: 0;
  cursor: pointer;
}
div.editor_atto_toolbar .menuplaceholder {
  display: inline-block;
}
div.editor_atto_toolbar button + button, div.editor_atto_toolbar .menuplaceholder + button {
  border-left: 1px solid #ccc;
}
div.editor_atto_toolbar button[disabled] {
  opacity: 0.45;
  background: none;
  cursor: default;
}
.editor_atto_toolbar button:hover {
  background-image: radial-gradient(ellipse at center, #fff 60%, #dfdfdf 100%);
  background-color: #ebebeb;
}
.editor_atto_toolbar button:active, .editor_atto_toolbar button.highlight {
  background-image: radial-gradient(ellipse at center, #fff 40%, #dfdfdf 100%);
  background-color: #dfdfdf;
}
/* Make firefox button sizes match other browsers */
div.editor_atto_toolbar button::-moz-focus-inner {
  border: 0;
  padding: 0;
}
div.editor_atto_toolbar button .icon {
  padding: 0;
  margin: 2px 0;
}
div.editor_atto_toolbar div.atto_group {
  display: inline-block;
  border: 1px solid #ccc;
  border-bottom: 1px solid #b3b3b3;
  border-radius: 4px;
  margin: 9px 0 0 9px;
  background: #fff;
}
div.editor_atto_toolbar .atto_toolbar_row {
  margin: 6px 0 -3px 5px;
  display: table;
}
div.editor_atto_toolbar .atto_toolbar_row div.atto_group {
  margin: 3px 5px 3px 4px;
}
.editor_atto_content img {
  resize: both;
  overflow: auto;
}
.atto_hasmenu {
  /* IE8 places the images on top of each other if that is not set. */
  white-space: nowrap;
}
.atto_menuentry .icon {
  width: 16px;
  height: 16px;
}
.atto_menuentry {
  clear: left;
}
.atto_menuentry h1, .atto_menuentry h2, .atto_menuentry p {
  margin: 4px;
}
/*.atto_form label.sameline {
    display: inline-block;
    min-width: 10em;
}*/
.atto_form textarea.fullwidth, .atto_form input.fullwidth {
  width: 100%;
}
.atto_form {
  padding: 0.5rem;
}
/*.atto_form label {
    display: block;
    margin: 0 0 5px 0;
}*/
.atto_control {
  position: absolute;
  right: -6px;
  bottom: -6px;
  display: none;
  cursor: pointer;
}
.atto_control .icon {
  background-color: white;
}
div.editor_atto_content:focus .atto_control, div.editor_atto_content:hover .atto_control {
  display: block;
}
.editor_atto_menu.yui3-menu-hidden {
  display: none;
}
/* Get broken images back in firefox */
.editor_atto_content img:-moz-broken {
  -moz-force-broken-image-icon: 1;
  min-width: 24px;
  min-height: 24px;
}
/* Atto menu styling */
.moodle-dialogue-base .editor_atto_menu .moodle-dialogue-content .moodle-dialogue-bd {
  padding: 0;
  z-index: 1000;
}
.editor_atto_menu .dropdown-menu > li > a {
  margin: 3px 14px;
}
.editor_atto_menu .open ul.dropdown-menu {
  padding-top: 5px;
  padding-bottom: 5px;
}
.editor_atto_wrap {
  position: relative;
}
/*rtl:ignore*/
.editor_atto_wrap textarea {
  direction: ltr;
}
.editor_atto_notification .atto_info, .editor_atto_notification .atto_warning {
  display: inline-block;
  background-color: #f2f2f2;
  padding: 0.5em;
  padding-left: 1em;
  padding-right: 1em;
  border-bottom-left-radius: 1em;
  border-bottom-right-radius: 1em;
}
.editor_atto_notification .atto_info {
  background-color: #f2f2f2;
}
.editor_atto_notification .atto_warning {
  background-color: #ffd700;
}
.editor_atto_toolbar, .editor_atto_content_wrap, .editor_atto + textarea {
  box-sizing: border-box;
}
.editor_atto_content.form-control {
  width: 100%;
  border-top: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
/** Atto fields do not have form-control because that would break the layout of the editor.
    So they need these extra styles to highlight the editor when there is a validation error. */
.has-danger .editor_atto_content.form-control .invalid-feedback, .has-danger .editor_atto_content.form-control-danger .invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #ca3120;
}
.has-danger .editor_atto_content.form-control .invalid-tooltip, .has-danger .editor_atto_content.form-control-danger .invalid-tooltip {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.8203125rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(202, 49, 32, 0.9);
  border-radius: 0.25rem;
}
.form-row > .col > .has-danger .editor_atto_content.form-control .invalid-tooltip, .form-row > [class*="col-"] > .has-danger .editor_atto_content.form-control .invalid-tooltip, .form-row > .col > .has-danger .editor_atto_content.form-control-danger .invalid-tooltip, .form-row > [class*="col-"] > .has-danger .editor_atto_content.form-control-danger .invalid-tooltip {
  left: 5px;
}
.was-validated .has-danger .editor_atto_content.form-control:invalid ~ .invalid-feedback, .was-validated .has-danger .editor_atto_content.form-control:invalid ~ .invalid-tooltip, .has-danger .editor_atto_content.form-control.is-invalid ~ .invalid-feedback, .has-danger .editor_atto_content.form-control.is-invalid ~ .invalid-tooltip, .was-validated .has-danger .editor_atto_content.form-control-danger:invalid ~ .invalid-feedback, .was-validated .has-danger .editor_atto_content.form-control-danger:invalid ~ .invalid-tooltip, .has-danger .editor_atto_content.form-control-danger.is-invalid ~ .invalid-feedback, .has-danger .editor_atto_content.form-control-danger.is-invalid ~ .invalid-tooltip {
  display: block;
}
.was-validated .has-danger .editor_atto_content.form-control .form-control:invalid, .has-danger .editor_atto_content.form-control .form-control.is-invalid, .was-validated .has-danger .editor_atto_content.form-control-danger .form-control:invalid, .has-danger .editor_atto_content.form-control-danger .form-control.is-invalid {
  border-color: #ca3120;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23ca3120' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23ca3120' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .has-danger .editor_atto_content.form-control .form-control:invalid:focus, .has-danger .editor_atto_content.form-control .form-control.is-invalid:focus, .was-validated .has-danger .editor_atto_content.form-control-danger .form-control:invalid:focus, .has-danger .editor_atto_content.form-control-danger .form-control.is-invalid:focus {
  border-color: #ca3120;
  box-shadow: 0 0 0 0.2rem rgba(202, 49, 32, 0.25);
}
.was-validated .has-danger .editor_atto_content.form-control textarea.form-control:invalid, .has-danger .editor_atto_content.form-control textarea.form-control.is-invalid, .was-validated .has-danger .editor_atto_content.form-control-danger textarea.form-control:invalid, .has-danger .editor_atto_content.form-control-danger textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}
.was-validated .has-danger .editor_atto_content.form-control .custom-select:invalid, .has-danger .editor_atto_content.form-control .custom-select.is-invalid, .was-validated .has-danger .editor_atto_content.form-control-danger .custom-select:invalid, .has-danger .editor_atto_content.form-control-danger .custom-select.is-invalid {
  border-color: #ca3120;
  padding-right: calc(0.75em + 2.3125rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 0.75rem center / 8px 10px no-repeat, #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23ca3120' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23ca3120' stroke='none'/%3e%3c/svg%3e") center right 1.75rem / calc(0.75em + 0.375rem) calc(0.75em + 0.375rem) no-repeat;
}
.was-validated .has-danger .editor_atto_content.form-control .custom-select:invalid:focus, .has-danger .editor_atto_content.form-control .custom-select.is-invalid:focus, .was-validated .has-danger .editor_atto_content.form-control-danger .custom-select:invalid:focus, .has-danger .editor_atto_content.form-control-danger .custom-select.is-invalid:focus {
  border-color: #ca3120;
  box-shadow: 0 0 0 0.2rem rgba(202, 49, 32, 0.25);
}
.was-validated .has-danger .editor_atto_content.form-control .form-check-input:invalid ~ .form-check-label, .has-danger .editor_atto_content.form-control .form-check-input.is-invalid ~ .form-check-label, .was-validated .has-danger .editor_atto_content.form-control-danger .form-check-input:invalid ~ .form-check-label, .has-danger .editor_atto_content.form-control-danger .form-check-input.is-invalid ~ .form-check-label {
  color: #ca3120;
}
.was-validated .has-danger .editor_atto_content.form-control .form-check-input:invalid ~ .invalid-feedback, .was-validated .has-danger .editor_atto_content.form-control .form-check-input:invalid ~ .invalid-tooltip, .has-danger .editor_atto_content.form-control .form-check-input.is-invalid ~ .invalid-feedback, .has-danger .editor_atto_content.form-control .form-check-input.is-invalid ~ .invalid-tooltip, .was-validated .has-danger .editor_atto_content.form-control-danger .form-check-input:invalid ~ .invalid-feedback, .was-validated .has-danger .editor_atto_content.form-control-danger .form-check-input:invalid ~ .invalid-tooltip, .has-danger .editor_atto_content.form-control-danger .form-check-input.is-invalid ~ .invalid-feedback, .has-danger .editor_atto_content.form-control-danger .form-check-input.is-invalid ~ .invalid-tooltip {
  display: block;
}
.was-validated .has-danger .editor_atto_content.form-control .custom-control-input:invalid ~ .custom-control-label, .has-danger .editor_atto_content.form-control .custom-control-input.is-invalid ~ .custom-control-label, .was-validated .has-danger .editor_atto_content.form-control-danger .custom-control-input:invalid ~ .custom-control-label, .has-danger .editor_atto_content.form-control-danger .custom-control-input.is-invalid ~ .custom-control-label {
  color: #ca3120;
}
.was-validated .has-danger .editor_atto_content.form-control .custom-control-input:invalid ~ .custom-control-label::before, .has-danger .editor_atto_content.form-control .custom-control-input.is-invalid ~ .custom-control-label::before, .was-validated .has-danger .editor_atto_content.form-control-danger .custom-control-input:invalid ~ .custom-control-label::before, .has-danger .editor_atto_content.form-control-danger .custom-control-input.is-invalid ~ .custom-control-label::before {
  border-color: #ca3120;
}
.was-validated .has-danger .editor_atto_content.form-control .custom-control-input:invalid:checked ~ .custom-control-label::before, .has-danger .editor_atto_content.form-control .custom-control-input.is-invalid:checked ~ .custom-control-label::before, .was-validated .has-danger .editor_atto_content.form-control-danger .custom-control-input:invalid:checked ~ .custom-control-label::before, .has-danger .editor_atto_content.form-control-danger .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  border-color: #e04d3d;
  background-color: #e04d3d;
}
.was-validated .has-danger .editor_atto_content.form-control .custom-control-input:invalid:focus ~ .custom-control-label::before, .has-danger .editor_atto_content.form-control .custom-control-input.is-invalid:focus ~ .custom-control-label::before, .was-validated .has-danger .editor_atto_content.form-control-danger .custom-control-input:invalid:focus ~ .custom-control-label::before, .has-danger .editor_atto_content.form-control-danger .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(202, 49, 32, 0.25);
}
.was-validated .has-danger .editor_atto_content.form-control .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .has-danger .editor_atto_content.form-control .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before, .was-validated .has-danger .editor_atto_content.form-control-danger .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .has-danger .editor_atto_content.form-control-danger .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #ca3120;
}
.was-validated .has-danger .editor_atto_content.form-control .custom-file-input:invalid ~ .custom-file-label, .has-danger .editor_atto_content.form-control .custom-file-input.is-invalid ~ .custom-file-label, .was-validated .has-danger .editor_atto_content.form-control-danger .custom-file-input:invalid ~ .custom-file-label, .has-danger .editor_atto_content.form-control-danger .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #ca3120;
}
.was-validated .has-danger .editor_atto_content.form-control .custom-file-input:invalid:focus ~ .custom-file-label, .has-danger .editor_atto_content.form-control .custom-file-input.is-invalid:focus ~ .custom-file-label, .was-validated .has-danger .editor_atto_content.form-control-danger .custom-file-input:invalid:focus ~ .custom-file-label, .has-danger .editor_atto_content.form-control-danger .custom-file-input.is-invalid:focus ~ .custom-file-label {
  border-color: #ca3120;
  box-shadow: 0 0 0 0.2rem rgba(202, 49, 32, 0.25);
}
.open.atto_menu > .dropdown-menu {
  display: block;
}
div.editor_atto_toolbar button .icon {
  color: #495057;
}
.toast {
  border-radius: 0.25rem;
}
.toast.toast-success {
  background-color: rgba(215, 228, 214, 0.95);
  color: #1c3f1a;
}
.toast.toast-success .toast-header {
  color: #1c3f1a;
}
.toast.toast-success .toast-body:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin: 2px 5px 0 0;
  content: "";
}
.toast.toast-danger {
  background-color: rgba(244, 214, 210, 0.95);
  color: #691911;
}
.toast.toast-danger .toast-header {
  color: #691911;
}
.toast.toast-danger .toast-body:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin: 2px 5px 0 0;
  content: "";
}
.toast.toast-info {
  background-color: rgba(204, 230, 234, 0.95);
  color: #00434e;
}
.toast.toast-info .toast-header {
  color: #00434e;
}
.toast.toast-info .toast-body:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin: 2px 5px 0 0;
  content: "";
}
.toast.toast-warning {
  background-color: rgba(252, 239, 220, 0.95);
  color: #7d5a29;
}
.toast.toast-warning .toast-header {
  color: #7d5a29;
}
.toast.toast-warning .toast-body:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin: 2px 5px 0 0;
  content: "";
}
.toast .close {
  color: inherit;
}
.navbar.fixed-top {
  padding-top: 0;
  padding-bottom: 0;
  box-shadow: none;
  border-bottom: #dee2e6 1px solid;
  align-items: stretch;
  height: 51px;
}
.navbar.fixed-top .navbar-brand .logo {
  max-height: calc(50px - (0.25rem * 2));
}
.navbar.fixed-top .nav-link {
  height: 100%;
  display: flex;
  align-items: center;
  white-space: nowrap;
}
.navbar.fixed-top .divider {
  width: 1px;
  background-color: #dee2e6;
}
.navbar.fixed-top #usernavigation .nav-link {
  padding: 0 0.5rem;
}
.navbar.fixed-top .login {
  display: flex;
  align-items: center;
}
.navbar.fixed-top .usermenu {
  display: flex;
}
.navbar.fixed-top .usermenu .action-menu {
  display: flex;
  align-items: center;
}
.navbar.fixed-top .usermenu .dropdown {
  display: flex;
  align-items: center;
}
.navbar.fixed-top .usermenu .dropdown .dropdown-toggle {
  padding-top: 0;
  padding-bottom: 0;
  border-radius: 0;
  display: flex;
  align-items: center;
  height: 100%;
}
.navbar.fixed-top .usermenu .dropdown-menu {
  min-width: 235px;
}
.navbar.fixed-top .usermenu .dropdown-menu .carousel-navigation-link > * {
  pointer-events: none;
}
.navbar.fixed-top .usermenu .dropdown-menu .dropdown-item {
  padding: 0.25rem 1.75rem 0.25rem 0.75rem;
}
.navbar.fixed-top .usermenu .dropdown-menu .dropdown-item.carousel-navigation-link::after {
  font-family: FontAwesome;
  content: "";
  font-size: 1rem;
  right: 0.75rem;
  position: absolute;
}
.navbar.fixed-top .usermenu .dropdown-menu .submenu .header {
  padding: 0.25rem 0.75rem;
  font-size: 0.975rem;
}
.navbar.fixed-top .usermenu .dropdown-menu .submenu .header .icon {
  font-size: 20px;
  height: 20px;
  width: 20px;
  margin: 0;
}
.navbar.fixed-top .usermenu .dropdown-menu .submenu .items .dropdown-item[aria-current="true"]::before {
  font-family: FontAwesome;
  content: "";
  font-size: 0.75rem;
  padding-left: 0.25rem;
}
.navbar.fixed-top .usermenu .login {
  display: flex;
  align-items: center;
}
.navbar.fixed-top .usermenu .dropdown, .navbar.fixed-top .langmenu .dropdown {
  display: flex;
  align-items: center;
  height: 100%;
}
.navbar.fixed-top .usermenu .dropdown .dropdown-toggle, .navbar.fixed-top .langmenu .dropdown .dropdown-toggle {
  padding-top: 0;
  padding-bottom: 0;
  border-radius: 0;
  display: flex;
  align-items: center;
  height: 100%;
}
.navbar.fixed-top .langmenu .dropdown-menu .dropdown-item[aria-current="true"]::before {
  content: "";
  font-size: 0.75rem;
  padding-left: 0.25rem;
}
@media (max-width: 767.98px) {
  .navbar.fixed-top .langmenu .langbutton {
    display: none;
  }
}
.navbar.fixed-top .moodle-actionmenu .menubar, .navbar.fixed-top .action-menu-trigger .dropdown {
  height: 100%;
  display: flex;
}
.dir-rtl .navbar.fixed-top .usermenu .dropdown-menu .dropdown-item.carousel-navigation-link::after {
  content: "";
}
.dir-rtl .navbar.fixed-top .usermenu .dropdown-menu .carousel .carousel-inner .carousel-item-prev.carousel-item-right, .dir-rtl .navbar.fixed-top .usermenu .dropdown-menu .carousel .carousel-inner .carousel-item-next.carousel-item-left {
  transform: translateX(0);
}
.dir-rtl .navbar.fixed-top .usermenu .dropdown-menu .carousel .carousel-inner .carousel-item-next, .dir-rtl .navbar.fixed-top .usermenu .dropdown-menu .carousel .carousel-inner .carousel-item-right.active {
  transform: translateX(-100%);
}
.dir-rtl .navbar.fixed-top .usermenu .dropdown-menu .carousel .carousel-inner .carousel-item-prev, .dir-rtl .navbar.fixed-top .usermenu .dropdown-menu .carousel .carousel-inner .carousel-item-left.active {
  transform: translateX(100%);
}
#page {
  margin-top: 50px;
}
.pagelayout-embedded #page {
  margin-top: 0;
}
/**
* Reportbuilder.
*/
/* Table */
.reportbuilder-table .action-menu .menubar {
  justify-content: end;
}
/* Filters */
.reportbuilder-wrapper .filters-dropdown {
  width: 27rem;
  padding: 0;
  z-index: 1050;
  overflow: hidden;
}
@media (max-width: 767.98px) {
  .reportbuilder-wrapper .filters-dropdown {
    width: 100%;
  }
}
.reportbuilder-wrapper .filters-dropdown .reportbuilder-filters-sidebar {
  max-height: calc(100vh - 50px - 1rem);
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: #6a737b #fff;
}
.reportbuilder-wrapper .filters-dropdown .reportbuilder-filters-sidebar::-webkit-scrollbar {
  width: 12px;
}
.reportbuilder-wrapper .filters-dropdown .reportbuilder-filters-sidebar::-webkit-scrollbar-track {
  background: #fff;
}
.reportbuilder-wrapper .filters-dropdown .reportbuilder-filters-sidebar::-webkit-scrollbar-thumb {
  background-color: #6a737b;
  border-radius: 20px;
  border: 3px solid #fff;
}
.reportbuilder-wrapper .filters-dropdown .reportbuilder-filters-sidebar::-webkit-scrollbar-thumb:hover {
  background-color: #495057;
}
.reportbuilder-wrapper .reportbuilder-filters-wrapper .mform.full-width-labels .fitem.row > .col-md-3, .reportbuilder-wrapper .reportbuilder-filters-wrapper .mform.full-width-labels .fitem.row > .col-md-9, .reportbuilder-wrapper .reportbuilder-conditions-list .mform.full-width-labels .fitem.row > .col-md-3, .reportbuilder-wrapper .reportbuilder-conditions-list .mform.full-width-labels .fitem.row > .col-md-9 {
  flex: 0 0 100%;
  max-width: 100%;
}
.reportbuilder-wrapper .reportbuilder-filters-wrapper .mform.full-width-labels .fitem.row .fdate_selector, .reportbuilder-wrapper .reportbuilder-conditions-list .mform.full-width-labels .fitem.row .fdate_selector {
  flex-wrap: wrap;
}
.reportbuilder-wrapper .reportbuilder-filters-wrapper .mform .form-group, .reportbuilder-wrapper .reportbuilder-conditions-list .mform .form-group {
  margin-bottom: 0;
  max-width: 100%;
}
.reportbuilder-wrapper .reportbuilder-filters-wrapper .mform .form-group > span, .reportbuilder-wrapper .reportbuilder-conditions-list .mform .form-group > span {
  max-width: 100%;
}
.reportbuilder-wrapper .reportbuilder-filters-wrapper .filter .filter-header, .reportbuilder-wrapper .reportbuilder-conditions-list .filter .filter-header {
  font-size: 1.171875rem;
}
.reportbuilder-wrapper .reportbuilder-filters-wrapper .filter .filter-header .filter-name, .reportbuilder-wrapper .reportbuilder-conditions-list .filter .filter-header .filter-name {
  font-size: 1rem;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  padding-right: 1rem;
}
.reportbuilder-wrapper .reportbuilder-filters-wrapper .filter .filter-header .filter-name:hover, .reportbuilder-wrapper .reportbuilder-conditions-list .filter .filter-header .filter-name:hover {
  white-space: normal;
  text-overflow: clip;
  word-break: break-all;
}
/**
* Custom Reports.
*/
.reportbuilder-report-container {
  min-width: 0;
}
.reportbuilder-editor-table-container {
  overflow-x: auto;
}
/* Custom table headers */
.reportbuilder-table th button[data-action="report-remove-column"] .icon, .reportbuilder-table th span[data-drag-type="move"] .icon {
  width: 12px;
  height: 12px;
  font-size: 12px;
  vertical-align: text-top;
  color: #1d2125;
}
.reportbuilder-table th button[data-action="report-remove-column"] .icon {
  margin-right: 0;
}
/* Sidebar menu */
@media (min-width: 992px) {
  .reportbuilder-sidebar-menu {
    width: 250px;
    flex-shrink: 0;
  }
}
.reportbuilder-sidebar-menu .card-body .list-group-item {
  padding: 0.75rem;
}
.reportbuilder-sidebar-menu .card-body .list-group-item .icon {
  width: 12px;
  height: 12px;
  font-size: 12px;
}
.reportbuilder-sidebar-menu-cards {
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: #6a737b #f8f9fa;
}
.reportbuilder-sidebar-menu-cards::-webkit-scrollbar {
  width: 12px;
}
.reportbuilder-sidebar-menu-cards::-webkit-scrollbar-track {
  background: #f8f9fa;
}
.reportbuilder-sidebar-menu-cards::-webkit-scrollbar-thumb {
  background-color: #6a737b;
  border-radius: 20px;
  border: 3px solid #f8f9fa;
}
.reportbuilder-sidebar-menu-cards::-webkit-scrollbar-thumb:hover {
  background-color: #495057;
}
/* Settings sidebar */
.reportbuilder-sidebar-settings {
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: #6a737b #f8f9fa;
}
.reportbuilder-sidebar-settings::-webkit-scrollbar {
  width: 12px;
}
.reportbuilder-sidebar-settings::-webkit-scrollbar-track {
  background: #f8f9fa;
}
.reportbuilder-sidebar-settings::-webkit-scrollbar-thumb {
  background-color: #6a737b;
  border-radius: 20px;
  border: 3px solid #f8f9fa;
}
.reportbuilder-sidebar-settings::-webkit-scrollbar-thumb:hover {
  background-color: #495057;
}
@media (min-width: 992px) {
  .reportbuilder-sidebar-settings {
    width: 350px;
    flex-shrink: 0;
  }
}
.reportbuilder-sidebar-settings .list-group-item {
  padding: 0.75rem;
}
.reportbuilder-sidebar-settings .list-group-item .icon {
  width: 12px;
  height: 12px;
  font-size: 12px;
  color: #1d2125;
}
.reportbuilder-sidebar-settings .list-group-item button[data-action="report-remove-filter"] .icon, .reportbuilder-sidebar-settings .list-group-item button[data-action="report-remove-condition"] .icon {
  margin-right: 0;
  vertical-align: text-top;
}
.reportbuilder-sidebar-settings .list-group-item span[data-drag-type="move"] .icon {
  vertical-align: text-top;
}
.reportbuilder-sidebar-settings div[data-region="settings-sorting"] .list-group-item span[data-drag-type="move"] .icon {
  vertical-align: middle;
}
.reportbuilder-sidebar-settings div[data-region="settings-cardview"] form .col-md-3, .reportbuilder-sidebar-settings div[data-region="settings-cardview"] form .col-md-9 {
  flex: 1 1;
  max-width: initial;
}
.reportbuilder-sidebar-settings div[data-region="settings-cardview"] form div[data-fieldtype="submit"] {
  flex-basis: auto;
}
.reportbuilder-sidebar-settings .inplaceeditable.inplaceeditingon input {
  width: 100%;
}
/* Add button styles when a toggle button is active. */
.reportbuilder-wrapper button.btn-outline-secondary[data-toggle="collapse"]:not(.collapsed), .reportbuilder-wrapper .dropdown.show button.btn-outline-secondary[data-toggle="dropdown"] {
  color: #fff;
  background-color: #6a737b;
  border-color: #6a737b;
}
/* Drag&drop styles. */
.reportbuilder-sortable-list li.sortable-list-current-position, .reportbuilder-table th.sortable-list-current-position, .reportbuilder-conditions-list .condition.sortable-list-current-position {
  background-color: #a2cff8;
}
.reportbuilder-sortable-list li.sortable-list-is-dragged, .reportbuilder-table th.sortable-list-is-dragged, .reportbuilder-conditions-list .condition.sortable-list-is-dragged {
  background-color: #fff;
  opacity: 0.85;
}
/* Reportbuilder full page styles. */
@media (min-width: 992px) {
  .path-admin-reportbuilder.pagelayout-popup.behat-site .fixed-top {
    position: fixed;
  }
  .path-admin-reportbuilder.pagelayout-popup #region-main {
    border: none;
    padding: 0;
  }
  .path-admin-reportbuilder.pagelayout-popup #maincontent {
    visibility: hidden;
  }
  .path-admin-reportbuilder.pagelayout-popup .dynamictabs .nav-tabs {
    position: fixed;
    z-index: 1030;
    width: calc(100% - 35px);
    padding-top: 1.25rem;
    background-color: #fff;
    box-shadow: 0 1.25rem 0 #fff;
  }
  .path-admin-reportbuilder.pagelayout-popup .dynamictabs .tab-content {
    padding-top: 83px;
  }
  .path-admin-reportbuilder.pagelayout-popup .reportbuilder-sidebar-menu {
    position: fixed;
  }
  .path-admin-reportbuilder.pagelayout-popup .reportbuilder-sidebar-menu .reportbuilder-sidebar-menu-cards {
    max-height: calc(100vh - 153px - 52px);
  }
  .path-admin-reportbuilder.pagelayout-popup .reportbuilder-sidebar-settings {
    position: fixed;
    right: 30px;
    max-height: calc(100vh - 153px);
  }
  .path-admin-reportbuilder.pagelayout-popup .reportbuilder-report[data-editing] .reportbuilder-report-container {
    max-height: calc(100vh - 153px);
    overflow-y: auto;
    scrollbar-width: thin;
    scrollbar-color: #6a737b #f8f9fa;
    margin-left: calc(250px + 1rem);
    margin-right: calc(350px + 1rem);
  }
  .path-admin-reportbuilder.pagelayout-popup .reportbuilder-report[data-editing] .reportbuilder-report-container::-webkit-scrollbar {
    width: 12px;
  }
  .path-admin-reportbuilder.pagelayout-popup .reportbuilder-report[data-editing] .reportbuilder-report-container::-webkit-scrollbar-track {
    background: #f8f9fa;
  }
  .path-admin-reportbuilder.pagelayout-popup .reportbuilder-report[data-editing] .reportbuilder-report-container::-webkit-scrollbar-thumb {
    background-color: #6a737b;
    border-radius: 20px;
    border: 3px solid #f8f9fa;
  }
  .path-admin-reportbuilder.pagelayout-popup .reportbuilder-report[data-editing] .reportbuilder-report-container::-webkit-scrollbar-thumb:hover {
    background-color: #495057;
  }
  .path-admin-reportbuilder.pagelayout-popup .reportbuilder-audiences-container {
    margin-left: calc(250px + 1rem);
  }
}
#page-admin-reportbuilder-edit #page {
  overflow-y: auto;
}
/* Toggle cards. */
.reportbuilder-toggle-card .card-header {
  border-bottom: none;
}
.reportbuilder-toggle-card .card-body {
  border-top: 1px solid rgba(0, 0, 0, 0.125);
}
.reportbuilder-toggle-card .toggle-card-button i.toggle-card-icon {
  color: #6a737b;
  font-size: 1.5em;
  font-weight: 700;
}
.reportbuilder-toggle-card .toggle-card-button .collapsed-icon-container {
  display: none;
}
.reportbuilder-toggle-card .toggle-card-button .expanded-icon-container {
  display: inline-block;
}
.reportbuilder-toggle-card .toggle-card-button.collapsed .collapsed-icon-container {
  display: inline-block;
}
.reportbuilder-toggle-card .toggle-card-button.collapsed .expanded-icon-container {
  display: none;
}
/**
* Audiences.
*/
.reportbuilder-audiences-container {
  /* 'OR' separator. */
  /* Card action icons. */
}
.reportbuilder-audiences-container .audience-separator {
  text-transform: uppercase;
}
.reportbuilder-audiences-container .audience-separator::before, .reportbuilder-audiences-container .audience-separator::after {
  content: "";
  flex: 1;
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
.reportbuilder-audiences-container .audience-separator:not(:empty)::before {
  margin-right: 1rem;
}
.reportbuilder-audiences-container .audience-separator:not(:empty)::after {
  margin-left: 1rem;
}
.reportbuilder-audiences-container .instance-card .card-header i.icon {
  margin-right: 0;
}
/* Report table card view styles */
/* Report table card view for small screens */
@media (max-width: 575.98px) {
  .reportbuilder-report[data-report-type="0"]:not([data-editing]) table.reportbuilder-table thead {
    display: none;
  }
  .reportbuilder-report[data-report-type="0"]:not([data-editing]) table.reportbuilder-table tr {
    display: flex;
    flex-direction: column;
    margin: 0.5rem 0;
    padding: 0.25rem 0.5rem 0 0.5rem;
    background-color: #fff !important;
    /* stylelint-disable-line declaration-no-important */
    word-wrap: break-word;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
  }
  .reportbuilder-report[data-report-type="0"]:not([data-editing]) table.reportbuilder-table tr:hover {
    background-color: #fff !important;
    /* stylelint-disable-line declaration-no-important */
  }
  .reportbuilder-report[data-report-type="0"]:not([data-editing]) table.reportbuilder-table tr.emptyrow {
    display: none;
  }
  .reportbuilder-report[data-report-type="0"]:not([data-editing]) table.reportbuilder-table tr:not(.show) td[data-cardviewhidden] {
    display: none;
  }
  .reportbuilder-report[data-report-type="0"]:not([data-editing]) table.reportbuilder-table tr td {
    display: block;
    min-height: 3.6rem;
    padding: 0.5rem 0.25rem;
    border: none;
  }
  .reportbuilder-report[data-report-type="0"]:not([data-editing]) table.reportbuilder-table tr td::before {
    content: attr(data-cardtitle);
    display: block;
    text-transform: uppercase;
    font-size: 70%;
    color: #343a40;
  }
  .reportbuilder-report[data-report-type="0"]:not([data-editing]) table.reportbuilder-table tr td:not([data-cardtitle]) {
    min-height: 3rem;
  }
  .reportbuilder-report[data-report-type="0"]:not([data-editing]) table.reportbuilder-table tr td:not(:first-child):not(.card-toggle) {
    border-top: 1px solid rgba(0, 0, 0, 0.125);
  }
  .reportbuilder-report[data-report-type="0"]:not([data-editing]) table.reportbuilder-table tr td:first-child {
    padding-right: 2rem;
  }
  .reportbuilder-report[data-report-type="0"]:not([data-editing]) table.reportbuilder-table tr td.card-toggle {
    display: block !important;
    /* stylelint-disable-line declaration-no-important */
    position: absolute;
    right: 10px;
  }
  .reportbuilder-report[data-report-type="0"]:not([data-editing]) table.reportbuilder-table tr td.card-toggle button {
    padding: 0 0.5rem;
    color: #6a737b;
  }
  .reportbuilder-report[data-report-type="0"]:not([data-editing]) table.reportbuilder-table tr td.card-toggle button i {
    font-size: 1.5em;
    font-weight: bold;
  }
}
.courseindex .courseindex-item {
  padding: 0.5rem 0.5rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}
.courseindex .courseindex-item.courseindex-section-title a {
  font-weight: bold;
}
.courseindex .courseindex-item .icons-collapse-expand {
  padding-right: 4px;
}
.courseindex .courseindex-item .courseindex-link, .courseindex .courseindex-item .courseindex-chevron {
  color: #495057;
}
.courseindex .courseindex-item .courseindex-link:hover, .courseindex .courseindex-item .courseindex-link:focus, .courseindex .courseindex-item .courseindex-chevron:hover, .courseindex .courseindex-item .courseindex-chevron:focus {
  color: black;
  text-decoration: none;
}
.courseindex .courseindex-item:hover, .courseindex .courseindex-item:focus {
  color: black;
}
.courseindex .courseindex-item:hover .courseindex-link, .courseindex .courseindex-item:hover .courseindex-chevron, .courseindex .courseindex-item:focus .courseindex-link, .courseindex .courseindex-item:focus .courseindex-chevron {
  color: black;
  cursor: pointer;
}
.courseindex .courseindex-item:hover.dimmed, .courseindex .courseindex-item:focus.dimmed {
  color: black;
}
.courseindex .courseindex-item:hover.dimmed .courseindex-link, .courseindex .courseindex-item:hover.dimmed .courseindex-chevron, .courseindex .courseindex-item:focus.dimmed .courseindex-link, .courseindex .courseindex-item:focus.dimmed .courseindex-chevron {
  color: black;
}
.courseindex .courseindex-item:hover.draggable, .courseindex .courseindex-item:focus.draggable {
  cursor: pointer;
}
.courseindex .courseindex-item.dragging {
  border: 1px solid #b8dce2;
  background-color: #e0f0f2;
}
.courseindex .courseindex-item.active {
  background-color: #f8f9fa;
  border-color: #dee2e6;
}
.courseindex .courseindex-item.dimmed {
  color: #6a737b;
}
.courseindex .courseindex-item.dimmed .courseindex-link, .courseindex .courseindex-item.dimmed .courseindex-chevron {
  color: #6a737b;
}
.courseindex .courseindex-item.dimmed.pageitem {
  color: #fff;
}
.courseindex .courseindex-item.dimmed.pageitem a {
  color: #fff;
}
.courseindex .courseindex-item .courseindex-locked {
  display: none;
}
.courseindex .courseindex-item.restrictions .courseindex-locked {
  display: block;
}
.courseindex .courseindex-item.pageitem {
  background-color: #0f6cbf;
  color: #fff;
  scroll-margin: 6rem;
}
.courseindex .courseindex-item.pageitem a {
  color: #fff;
}
.courseindex .courseindex-item.pageitem:hover, .courseindex .courseindex-item.pageitem:focus {
  background-color: #0c589c;
  color: #e6e6e6;
}
.courseindex .courseindex-item.pageitem:hover .courseindex-link, .courseindex .courseindex-item.pageitem:hover .courseindex-chevron, .courseindex .courseindex-item.pageitem:focus .courseindex-link, .courseindex .courseindex-item.pageitem:focus .courseindex-chevron {
  color: #e6e6e6;
}
.courseindex .courseindex-item .completioninfo {
  min-width: 24px;
}
.courseindex .courseindex-item .completioninfo.completion_complete {
  color: #357a32;
}
.courseindex .courseindex-item .completioninfo.completion_fail {
  color: #ca3120;
}
.courseindex .courseindex-section {
  border-left: solid 3px transparent;
}
.courseindex .courseindex-section.dragging {
  border: 1px solid #b8dce2;
  background-color: #e0f0f2;
}
.courseindex .courseindex-section .current-badge {
  line-height: 1.5;
  display: none;
}
.courseindex .courseindex-section.current {
  border-left: solid 3px #0f6cbf;
}
.courseindex .courseindex-section.current .current-badge {
  display: inline-block;
}
.courseindex .courseindex-section.dropready .courseindex-item-content {
  /* Extra dropzone space */
  padding-bottom: 1em;
}
.courseindex .courseindex-section .courseindex-sectioncontent .courseindex-item {
  padding-left: 0.5rem;
}
.courseindex .icon {
  font-size: 12px;
}
.courseindex .d-flex-noedit {
  display: none;
}
.courseindex.editing .d-flex-noedit {
  display: flex;
}
.courseindex .media-list .rounded-circle {
  height: 1rem;
  width: 1rem;
}
.courseindex .media-list .w-100 {
  height: 1rem;
  margin: 0.5rem 0;
}
.moremenu {
  opacity: 0;
  height: 50px;
}
.moremenu.observed {
  opacity: 1;
}
.moremenu .nav-link {
  height: 50px;
  display: flex;
  align-items: center;
  border-right: none;
  border-bottom: solid 3px transparent;
  border-left: none;
  border-top: none;
}
.moremenu .nav-link:hover, .moremenu .nav-link:focus {
  border-color: transparent;
  background-color: #f8f9fa;
}
.moremenu .nav-link.active {
  background-color: #f8f9fa;
  border-color: transparent;
  border-bottom-color: #0f6cbf;
}
.moremenu .nav-link.active:focus, .moremenu .nav-link.active:hover {
  background-color: #f8f9fa;
  border-bottom-color: #0f6cbf;
}
.moremenu .nav-link.focus, .moremenu .nav-link:focus {
  position: relative;
}
.moremenu .nav-link[data-toggle="tab"] {
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.moremenu .nav-link[data-toggle="tab"]::after {
  content: attr(data-text) / "";
  height: 0;
  visibility: hidden;
  overflow: hidden;
  user-select: none;
  pointer-events: none;
  font-weight: bold;
}
@media speech {
  .moremenu .nav-link[data-toggle="tab"]::after {
    display: none;
  }
}
.moremenu .nav-tabs {
  margin-left: 0;
  background-color: #fff;
}
.moremenu .show > .nav-link, .moremenu .active > .nav-link, .moremenu .nav-link.show, .moremenu .nav-link.active {
  background: transparent;
}
.moremenu .dropdownmoremenu > .dropdown-menu > .dropdown-item {
  padding: 0;
}
.moremenu .dropdownmoremenu > .dropdown-menu .dropdown-menu {
  position: static;
  padding: 0;
  border: 0;
}
.moremenu .dropdownmoremenu > .dropdown-menu .dropdown-menu.show {
  display: block;
}
.moremenu .dropdownmoremenu > .dropdown-menu .dropdown-menu .dropdown-item {
  background-color: #f8f9fa;
}
.moremenu .dropdownmoremenu > .dropdown-menu .dropdown-menu .dropdown-item:hover, .moremenu .dropdownmoremenu > .dropdown-menu .dropdown-menu .dropdown-item:focus {
  color: #fff;
  background-color: #0f6cbf;
}
.moremenu .dropdownmoremenu > .dropdown-menu .dropdown-menu .dropdown-divider {
  display: none;
}
.moremenu .dropdown-item[aria-current="true"], .moremenu .dropdown-item.active {
  background-color: transparent;
  color: #1d2125;
}
.moremenu .dropdown-item[aria-current="true"]:focus-within, .moremenu .dropdown-item[aria-current="true"]:hover, .moremenu .dropdown-item.active:focus-within, .moremenu .dropdown-item.active:hover {
  background-color: #0f6cbf;
  color: #fff;
}
.moremenu .dropdown-item[aria-current="true"]:focus-within a, .moremenu .dropdown-item[aria-current="true"]:hover a, .moremenu .dropdown-item.active:focus-within a, .moremenu .dropdown-item.active:hover a {
  color: #fff;
}
.moremenu .dropdown-item[aria-current="true"]:before, .moremenu .dropdown-item.active:before {
  content: "";
}
.primary-navigation .navigation {
  height: 50px;
}
.primary-navigation .navigation .nav-link {
  height: 50px;
  color: #1d2125;
  border-top: 3px solid transparent;
}
@media (max-width: 767.98px) {
  .primary-navigation {
    display: none;
  }
  .editmode-switch-form label {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
  }
}
.editmode-switch-form .custom-control-input {
  width: 100%;
  z-index: 1;
}
.drawer-primary .drawercontent {
  padding: 0;
}
.drawer-primary .drawercontent .list-group {
  border-radius: 0;
  margin-top: -1px;
}
.drawer-primary .drawercontent .list-group .list-group-item {
  border-left: 0;
  border-right: 0;
}
.secondary-navigation {
  max-width: 830px;
  margin: 0 auto;
  padding-bottom: 15px;
}
.secondary-navigation .navigation {
  border-top: 1px solid #dee2e6;
  border-bottom: 1px solid #dee2e6;
  height: calc(50px + 2px);
  background-color: #fff;
}
.secondary-navigation .navigation .nav-tabs {
  border: none;
}
.secondary-navigation .navigation .nav-tabs .nav-link {
  border-radius: initial;
}
@media (min-width: 768px) {
  .secondary-navigation {
    padding: 0 15px 15px;
  }
}
.tertiary-navigation {
  padding-top: 10px;
}
.tertiary-navigation .navitem {
  display: flex;
  margin-bottom: 25px;
}
.tertiary-navigation > a.btn, .tertiary-navigation > div.urlselect {
  margin-bottom: 25px;
}
.tertiary-navigation .row {
  column-gap: 20px;
}
@media (max-width: 767.98px) {
  .tertiary-navigation .mform {
    padding-left: initial;
  }
}
@media print {
  .tertiary-navigation {
    display: none;
  }
}
img.userpicture {
  margin-right: 0.5rem;
}
.path-mod-forum .subscriptionmode {
  color: #1d2125;
}
.path-mod-forum .activesetting {
  color: #1d2125;
  font-weight: bold;
}
body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.navbar {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
}
.userpicture {
  border-radius: 50%;
}
.block {
  background-color: #f8f9fa;
}
#page-my-index {
  background-color: #fff;
}
.btn-outline-secondary {
  color: #6a737b;
  border-color: #6a737b;
  border-color: #6a737b;
}
.btn-outline-secondary:hover {
  color: #fff;
  background-color: #6a737b;
  border-color: #6a737b;
}
.btn-outline-secondary:focus, .btn-outline-secondary.focus {
  box-shadow: 0 0 0 0.2rem rgba(106, 115, 123, 0.5);
}
.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
  color: #6a737b;
  background-color: transparent;
}
.btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active, .show > .btn-outline-secondary.dropdown-toggle {
  color: #fff;
  background-color: #6a737b;
  border-color: #6a737b;
}
.btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(106, 115, 123, 0.5);
}
.btn-outline-info {
  color: #1f7e9a;
  border-color: #1f7e9a;
}
.btn-outline-info:hover {
  color: #fff;
  background-color: #1f7e9a;
  border-color: #1f7e9a;
}
.btn-outline-info:focus, .btn-outline-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(31, 126, 154, 0.5);
}
.btn-outline-info.disabled, .btn-outline-info:disabled {
  color: #1f7e9a;
  background-color: transparent;
}
.btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active, .show > .btn-outline-info.dropdown-toggle {
  color: #fff;
  background-color: #1f7e9a;
  border-color: #1f7e9a;
}
.btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(31, 126, 154, 0.5);
}
.btn-outline-warning {
  color: #a6670e;
  border-color: #a6670e;
}
.btn-outline-warning:hover {
  color: #fff;
  background-color: #a6670e;
  border-color: #a6670e;
}
.btn-outline-warning:focus, .btn-outline-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(166, 103, 14, 0.5);
}
.btn-outline-warning.disabled, .btn-outline-warning:disabled {
  color: #a6670e;
  background-color: transparent;
}
.btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active, .show > .btn-outline-warning.dropdown-toggle {
  color: #fff;
  background-color: #a6670e;
  border-color: #a6670e;
}
.btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(166, 103, 14, 0.5);
}
.path-grade-report-grader .gradeparent tr.heading {
  top: 50px;
}
.path-grade-report-grader .gradeparent th.header {
  left: 0;
}
@media (max-width: 767.98px) {
  .blockcolumn, .region-main {
    flex: 0 0 100%;
    max-width: 100%;
    padding: 0 1rem;
    margin-bottom: 1rem;
  }
}
@media (min-width: 768px) {
  #page-content {
    display: flex;
  }
  #page-content .region-main {
    flex: 0 0 100%;
    padding: 0 1rem;
    max-width: 100%;
  }
  #page-content.blocks-pre .columnleft {
    flex: 0 0 32%;
    order: -1;
    padding: 0 1rem;
    max-width: 32%;
  }
  #page-content.blocks-pre .region-main {
    flex: 0 0 68%;
    max-width: 68%;
    padding: 0 1rem 0 0;
  }
  #page-content.blocks-pre .region-main #region-main {
    border: 1px solid rgba(0, 0, 0, 0.125);
    padding: 1.25rem;
    border-radius: 0.25rem;
  }
  #page-content.blocks-post .region-main {
    flex: 0 0 68%;
    max-width: 68%;
    padding: 0 0 0 1rem;
  }
  #page-content.blocks-post .columnright {
    flex: 0 0 32%;
    padding: 0 1rem;
    max-width: 32%;
  }
  #page-content.blocks-pre.blocks-post .region-main {
    flex: 0 0 36%;
    max-width: 36%;
    padding: 0;
  }
  #page-content [data-region="blocks-column"] {
    width: 100%;
  }
  .empty-region-side-pre.used-region-side-post #page-content .region-main {
    flex: 0 0 68%;
    max-width: 68%;
    padding-left: 1rem;
  }
  .empty-region-side-pre.used-region-side-post #page-content .columnright {
    flex: 0 0 32%;
    padding: 0 1rem;
    max-width: 32%;
  }
  .empty-region-side-post.used-region-side-pre #page-content .region-main {
    flex: 0 0 68%;
    max-width: 68%;
    padding-right: 1rem;
  }
  .empty-region-side-post.used-region-side-pre #page-content .columnleft {
    flex: 0 0 32%;
    order: -1;
    padding: 0 1rem;
    max-width: 32%;
  }
  .used-region-side-post.used-region-side-pre #page-content .region-main {
    flex: 0 0 36%;
    max-width: 36%;
    padding: 0;
  }
  .used-region-side-post.used-region-side-pre #page-content .columnleft {
    flex: 0 0 32%;
    order: -1;
    padding: 0 1rem;
    max-width: 32%;
  }
  .used-region-side-post.used-region-side-pre #page-content .columnright {
    flex: 0 0 32%;
    padding: 0 1rem;
    max-width: 32%;
  }
}
@media (min-width: 992px) {
  #page-content {
    display: flex;
  }
  #page-content .region-main {
    flex: 0 0 100%;
    padding: 0 1rem;
    max-width: 100%;
  }
  #page-content.blocks-pre .columnleft {
    flex: 0 0 25%;
    order: -1;
    padding: 0 1rem;
    max-width: 25%;
  }
  #page-content.blocks-pre .region-main {
    flex: 0 0 75%;
    max-width: 75%;
    padding: 0 1rem 0 0;
  }
  #page-content.blocks-pre .region-main #region-main {
    border: 1px solid rgba(0, 0, 0, 0.125);
    padding: 1.25rem;
    border-radius: 0.25rem;
  }
  #page-content.blocks-post .region-main {
    flex: 0 0 75%;
    max-width: 75%;
    padding: 0 0 0 1rem;
  }
  #page-content.blocks-post .columnright {
    flex: 0 0 25%;
    padding: 0 1rem;
    max-width: 25%;
  }
  #page-content.blocks-pre.blocks-post .region-main {
    flex: 0 0 50%;
    max-width: 50%;
    padding: 0;
  }
  #page-content [data-region="blocks-column"] {
    width: 100%;
  }
  .empty-region-side-pre.used-region-side-post #page-content .region-main {
    flex: 0 0 75%;
    max-width: 75%;
    padding-left: 1rem;
  }
  .empty-region-side-pre.used-region-side-post #page-content .columnright {
    flex: 0 0 25%;
    padding: 0 1rem;
    max-width: 25%;
  }
  .empty-region-side-post.used-region-side-pre #page-content .region-main {
    flex: 0 0 75%;
    max-width: 75%;
    padding-right: 1rem;
  }
  .empty-region-side-post.used-region-side-pre #page-content .columnleft {
    flex: 0 0 25%;
    order: -1;
    padding: 0 1rem;
    max-width: 25%;
  }
  .used-region-side-post.used-region-side-pre #page-content .region-main {
    flex: 0 0 50%;
    max-width: 50%;
    padding: 0;
  }
  .used-region-side-post.used-region-side-pre #page-content .columnleft {
    flex: 0 0 25%;
    order: -1;
    padding: 0 1rem;
    max-width: 25%;
  }
  .used-region-side-post.used-region-side-pre #page-content .columnright {
    flex: 0 0 25%;
    padding: 0 1rem;
    max-width: 25%;
  }
}
@media (min-width: 1200px) {
  #page-content {
    display: flex;
  }
  #page-content .region-main {
    flex: 0 0 100%;
    padding: 0 1rem;
    max-width: 100%;
  }
  #page-content.blocks-pre .columnleft {
    flex: 0 0 20%;
    order: -1;
    padding: 0 1rem;
    max-width: 20%;
  }
  #page-content.blocks-pre .region-main {
    flex: 0 0 80%;
    max-width: 80%;
    padding: 0 1rem 0 0;
  }
  #page-content.blocks-pre .region-main #region-main {
    border: 1px solid rgba(0, 0, 0, 0.125);
    padding: 1.25rem;
    border-radius: 0.25rem;
  }
  #page-content.blocks-post .region-main {
    flex: 0 0 80%;
    max-width: 80%;
    padding: 0 0 0 1rem;
  }
  #page-content.blocks-post .columnright {
    flex: 0 0 20%;
    padding: 0 1rem;
    max-width: 20%;
  }
  #page-content.blocks-pre.blocks-post .region-main {
    flex: 0 0 60%;
    max-width: 60%;
    padding: 0;
  }
  #page-content [data-region="blocks-column"] {
    width: 100%;
  }
  .empty-region-side-pre.used-region-side-post #page-content .region-main {
    flex: 0 0 80%;
    max-width: 80%;
    padding-left: 1rem;
  }
  .empty-region-side-pre.used-region-side-post #page-content .columnright {
    flex: 0 0 20%;
    padding: 0 1rem;
    max-width: 20%;
  }
  .empty-region-side-post.used-region-side-pre #page-content .region-main {
    flex: 0 0 80%;
    max-width: 80%;
    padding-right: 1rem;
  }
  .empty-region-side-post.used-region-side-pre #page-content .columnleft {
    flex: 0 0 20%;
    order: -1;
    padding: 0 1rem;
    max-width: 20%;
  }
  .used-region-side-post.used-region-side-pre #page-content .region-main {
    flex: 0 0 60%;
    max-width: 60%;
    padding: 0;
  }
  .used-region-side-post.used-region-side-pre #page-content .columnleft {
    flex: 0 0 20%;
    order: -1;
    padding: 0 1rem;
    max-width: 20%;
  }
  .used-region-side-post.used-region-side-pre #page-content .columnright {
    flex: 0 0 20%;
    padding: 0 1rem;
    max-width: 20%;
  }
}
@media print {
  #page-content .region-main {
    max-width: 100% !important;
    /* stylelint-disable-line declaration-no-important */
    flex: 0 0 100% !important;
    /* stylelint-disable-line declaration-no-important */
    padding: 0 1rem 0 !important;
    /* stylelint-disable-line declaration-no-important */
  }
}
@media (min-width: 576px) {
  .dashboard-card-deck:not(.fixed-width-cards) .dashboard-card {
    width: calc(50% - 0.5rem);
  }
}
@media (min-width: 768px) {
  .dashboard-card-deck:not(.fixed-width-cards) .dashboard-card {
    width: calc(50% - 0.5rem);
  }
  .blocks-post .dashboard-card-deck .dashboard-card, .blocks-pre .dashboard-card-deck .dashboard-card {
    width: calc(100% - 0.5rem);
  }
}
@media (min-width: 992px) {
  .dashboard-card-deck:not(.fixed-width-cards) .dashboard-card {
    width: calc(33.33% - 0.5rem);
  }
  .blocks-post .dashboard-card-deck .dashboard-card, .blocks-pre .dashboard-card-deck .dashboard-card {
    width: calc(50% - 0.5rem);
  }
}
@media (min-width: 1200px) {
  .dashboard-card-deck:not(.fixed-width-cards) .dashboard-card {
    width: calc(25% - 0.5rem);
  }
  .blocks-post .dashboard-card-deck .dashboard-card, .blocks-pre .dashboard-card-deck .dashboard-card {
    width: calc(33.33% - 0.5rem);
  }
}
@media (min-width: 1360px) {
  .dashboard-card-deck:not(.fixed-width-cards) .dashboard-card {
    width: calc(20% - 0.5rem);
  }
  .blocks-post .dashboard-card-deck .dashboard-card, .blocks-pre .dashboard-card-deck .dashboard-card {
    width: calc(25% - 0.5rem);
  }
}
@media (min-width: 768px) {
  .blockcolumn .dashboard-card-deck {
    margin-left: 0;
    margin-right: 0;
  }
  .blockcolumn .dashboard-card-deck .dashboard-card {
    width: calc(100% - 0.5rem) !important;
    /* stylelint-disable-line declaration-no-important */
  }
}
.block_navigation .block_tree.list > li > ul, .block_settings .block_tree.list > li > ul {
  padding-left: 0;
}
.block_navigation .block_tree .tree_item.branch, .block_settings .block_tree .tree_item.branch {
  margin-left: 5px;
  padding-left: 0.75rem;
}
.block_navigation .block_tree p.hasicon, .block_settings .block_tree p.hasicon {
  text-indent: 0;
  padding-left: 0.75rem;
}
.block_navigation .block_tree ul, .block_settings .block_tree ul {
  margin-left: 0.25rem;
  padding-left: 1rem;
}
.block_navigation .block_tree p.hasicon .icon, .block_settings .block_tree p.hasicon .icon {
  margin-right: 5px;
}
.root_node, .navigation_node {
  margin-left: 0 !important;
  /* stylelint-disable-line declaration-no-important */
  padding-left: 0 !important;
  /* stylelint-disable-line declaration-no-important */
}
.block.block_settings #settingsnav {
  padding-top: 0 !important;
  /* stylelint-disable-line declaration-no-important */
}
.navbar-bootswatch {
  /** Extra SCSS from theme_boost_get_extra_scss **/
  /** Extra SCSS from theme_classic_get_extra_scss **/
  background-color: #fff;
}
/*# sourceMappingURL=data:application/json,%7B%22version%22%3A3%2C%22sources%22%3A%5B%22https%3A%2F%2Fonline.wisequarter.com%2F(stdin)%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Ffontawesome.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Ffontawesome%2F_core.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Ffontawesome%2F_larger.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Ffontawesome%2F_fixed-width.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Ffontawesome%2F_list.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Ffontawesome%2F_bordered-pulled.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Ffontawesome%2F_animated.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Ffontawesome%2F_rotated-flipped.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Ffontawesome%2F_stacked.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Ffontawesome%2F_icons.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Ffontawesome%2F_screen-reader.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Ffontawesome%2F_mixins.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_root.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_reboot.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fvendor%2F_rfs.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_hover.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_type.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_images.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_code.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_grid.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_breakpoints.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_grid-framework.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_grid.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_tables.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_table-row.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_forms.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_transition.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_forms.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_buttons.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_buttons.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_transitions.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_dropdown.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_caret.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_button-group.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_input-group.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_custom-forms.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_nav.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_navbar.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_card.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_breadcrumb.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_pagination.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_pagination.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_badge.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_badge.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_jumbotron.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_alert.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_alert.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_progress.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_media.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_list-group.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_list-group.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_close.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_toasts.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_modal.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_tooltip.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_popover.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_carousel.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_clearfix.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_spinners.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_align.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_background-variant.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_background.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_borders.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_display.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_embed.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_flex.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_float.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_interactions.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_overflow.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_position.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_screenreaders.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_screen-reader.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_shadows.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_sizing.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_spacing.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_stretched-link.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_text.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Fmixins%2F_text-emphasis.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2Futilities%2F_visibility.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fbootstrap%2F_print.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fbootstrap-rtl.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fcore.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Ficons.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fadmin.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fblocks.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fcalendar.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fcontentbank.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fcourse.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fdrawer.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Ffilemanager.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fmessage.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fquestion.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fuser.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fsearch.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fforms.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Flogin.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fmodules.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fchat.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Freports.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fbackup-restore.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Ftables.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fbuttons.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fgrade.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Ftemplates.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fundo.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fdebug.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fsticky-footer.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fpopover-region.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Ftool_usertours.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fprint.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fmodal.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Flayout.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fprefixes.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fatto.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Ftoasts.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fnavbar.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Freportbuilder.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fcourseindex.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fmoremenu.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fprimarynavigation.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Fsecondarynavigation.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2F..%2F..%2Fboost%2Fscss%2Fmoodle%2Ftertiarynavigation.scss%22%2C%22https%3A%2F%2Fonline.wisequarter.com%2Ftheme%2Fclassic%2Fscss%2Fmoodle.scss%22%5D%2C%22names%22%3A%5B%5D%2C%22mappings%22%3A%22%3BAACA%3BAAAA%3BACGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BADHA%3BAAAA%3BAAAA%3BAAAA%3BAEEA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAFFA%3BAGGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BACVA%3BAAAA%3BAAAA%3BAAAA%3BACCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAEF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BACZF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BANbF%3BAMiBA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BACpBF%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAACE%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMF%3BAACE%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC1BF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BACVA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BATlBA%3BAAAA%3BAUEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BACjxBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC%2BCE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAZjDF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAaDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACkBA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACkIQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAD9GR%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAgBA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAE7KE%3BAAAA%3BAAAA%3BAAAA%3BAF6LF%3BAAAA%3BAAAA%3BAAAA%3BAE7LE%3BAAAA%3BAAAA%3BAAAA%3BAF4MF%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAiBA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAaI%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAeA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC9OQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAD0PR%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAG3dA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAFgKQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAE%2FJR%3BAAAA%3BAAAA%3BAF%2BJQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAE9JR%3BAAAA%3BAAAA%3BAF8JQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAE7JR%3BAAAA%3BAAAA%3BAF6JQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAE5JR%3BAAAA%3BAAAA%3BAF4JQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAE3JR%3BAAAA%3BAAAA%3BAF2JQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAEzJR%3BAAAA%3BAAAA%3BAAAA%3BAFyJQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAEnJR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAFmJQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAE9IR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAF8IQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAEzIR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAFyIQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAEpIR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAFoIQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAEzHR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAWF%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAFgEQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAE3DR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKE%3BAAAA%3BAAAA%3BAClHF%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAeA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BACrCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAMF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQF%3BAAAA%3BAAAA%3BAAAA%3BACtCE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACsDE%3BADzCE%3BAAAA%3BAAAA%3BAAAA%3BACyCF%3BADzCE%3BAAAA%3BAAAA%3BAAAA%3BACyCF%3BADzCE%3BAAAA%3BAAAA%3BAAAA%3BACyCF%3BADzCE%3BAAAA%3BAAAA%3BAAAA%3BAA6BJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAAA%3BAEnDF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAA0BI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC%2BBJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BADjBI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BADXR%3BAC3BE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC%2BBJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BADjBI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BADXR%3BAC3BE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC%2BBJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BADjBI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BADXR%3BAC3BE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC%2BBJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BADjBI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BADXR%3BAC3BE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC%2BBJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BADjBI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAEnEZ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAWF%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAQF%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAR9DA%3BAAAA%3BAAAA%3BAAAA%3BASNE%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BATDJ%3BAAAA%3BAAAA%3BASmBM%3BAAAA%3BAAAA%3BAAzBJ%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BATDJ%3BAAAA%3BAAAA%3BASmBM%3BAAAA%3BAAAA%3BAAzBJ%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BATDJ%3BAAAA%3BAAAA%3BASmBM%3BAAAA%3BAAAA%3BAAzBJ%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BATDJ%3BAAAA%3BAAAA%3BASmBM%3BAAAA%3BAAAA%3BAAzBJ%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BATDJ%3BAAAA%3BAAAA%3BASmBM%3BAAAA%3BAAAA%3BAAzBJ%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BATDJ%3BAAAA%3BAAAA%3BASmBM%3BAAAA%3BAAAA%3BAAzBJ%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BATDJ%3BAAAA%3BAAAA%3BASmBM%3BAAAA%3BAAAA%3BAAzBJ%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BATDJ%3BAAAA%3BAAAA%3BASmBM%3BAAAA%3BAAAA%3BAAzBJ%3BAAAA%3BAAAA%3BATMF%3BAAAA%3BAAAA%3BASmBM%3BAAAA%3BAAAA%3BADkFJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKE%3BAAAA%3BAAAA%3BARpIF%3BAAAA%3BAAAA%3BAAAA%3BAK6DE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAGyGI%3BAAAA%3BAAAA%3BAAAA%3BAHzGJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAGyGI%3BAAAA%3BAAAA%3BAAAA%3BAHzGJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAGyGI%3BAAAA%3BAAAA%3BAAAA%3BAHzGJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAGyGI%3BAAAA%3BAAAA%3BAAAA%3BAARJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQI%3BAAAA%3BAAAA%3BAE5KR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAXyKQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAY3JF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BADOJ%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAEpBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAF6BA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAYF%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAXuEQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAWhER%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAXmDQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAWvCN%3BAAAA%3BAAAA%3BAAAA%3BAAeF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAXgBQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAWNN%3BAAAA%3BAAAA%3BAAMF%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAAA%3BAAYF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAMF%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAEzMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAiBE%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAA5CA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAA8DE%3BAAAA%3BAAAA%3BAAAA%3BAA9DF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAwFE%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAUF%3BAAAA%3BAAAA%3BAAKE%3BAAAA%3BAAAA%3BAAAA%3BAArIN%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAiBE%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAA5CA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAA8DE%3BAAAA%3BAAAA%3BAAAA%3BAA9DF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAwFE%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAUF%3BAAAA%3BAAAA%3BAAKE%3BAAAA%3BAAAA%3BAAAA%3BAFiGR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQE%3BAAAA%3BAAAA%3BAL9NE%3BAKoOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAGhVJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAdyKQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAY3JF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAXRJ%3BAAAA%3BAAAA%3BAAAA%3BAacA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAeF%3BAAAA%3BAAAA%3BAAWE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAbrDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAcKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUE%3BAAAA%3BAAAA%3BADaF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAbrDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAcKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUE%3BAAAA%3BAAAA%3BADaF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAbrDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAcKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUE%3BAAAA%3BAAAA%3BADaF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAbrDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAcKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUE%3BAAAA%3BAAAA%3BADaF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAbrDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAcKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUE%3BAAAA%3BAAAA%3BADaF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAbrDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAcKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUE%3BAAAA%3BAAAA%3BADaF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAbrDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAcKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUE%3BAAAA%3BAAAA%3BADaF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAbrDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAcKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUE%3BAAAA%3BAAAA%3BADmBF%3BAAAA%3BAAAA%3BAAAA%3BAb3DA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAc6DA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BADpBF%3BAAAA%3BAAAA%3BAAAA%3BAb3DA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAc6DA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BADpBF%3BAAAA%3BAAAA%3BAAAA%3BAb3DA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAc6DA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BADpBF%3BAAAA%3BAAAA%3BAAAA%3BAb3DA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAc6DA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BADpBF%3BAAAA%3BAAAA%3BAAAA%3BAb3DA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAc6DA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BADpBF%3BAAAA%3BAAAA%3BAAAA%3BAb3DA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAc6DA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BADpBF%3BAAAA%3BAAAA%3BAAAA%3BAb3DA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAc6DA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BADpBF%3BAAAA%3BAAAA%3BAAAA%3BAb3DA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAc6DA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BADTJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAbtEE%3BAAAA%3BAAAA%3BAAAA%3BAagFA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAcF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAdgEQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAc5DR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAKE%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAE1IF%3BAAAA%3BAAAA%3BAJoBM%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAIjBJ%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAJMM%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAKnBN%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BACqBI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAA4BA%3BAAAA%3BAAAA%3BADzCJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAjB%2BJQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAiBtIJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAXcA%3BAWnBA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAXcA%3BAWnBA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAXcA%3BAWnBA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAXcA%3BAWnBA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC3BE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAA4BA%3BAAAA%3BAAAA%3BADYF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACxCE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAA4BA%3BAAAA%3BAAAA%3BADsBA%3BAAAA%3BAAAA%3BAAOF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACzDE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAeE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASF%3BAAAA%3BAAAA%3BADuCA%3BAAAA%3BAAAA%3BAASF%3BAAAA%3BAAAA%3BAAAA%3BAAUF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAhB1GE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAgByIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYF%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAExLA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAAA%3BAlBGA%3BAAAA%3BAAAA%3BAkBME%3BAAAA%3BAAAA%3BAASJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKE%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAkBF%3BAAAA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAsBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKE%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAoBA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACrJJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUE%3BAAAA%3BAAAA%3BAAQF%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAeJ%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAQF%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BApB6DQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAoB7CN%3BAAAA%3BAAAA%3BAAYF%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BApB4BQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAoBhBR%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAC%2FLA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUE%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAWN%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAeA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAkBA%3BAAAA%3BAAAA%3BAAKE%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAWF%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAWJ%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BATvKE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BASoLF%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAaJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BArB7CQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAqB8DN%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUE%3BAAAA%3BAAAA%3BAAAA%3BAAWF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BArBnHQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAqBgIR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASE%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAkBE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAwBF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BAAKE%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAGF%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BATjYI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAS4YF%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAT5ZI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BASsaF%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BATtbI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BASmcF%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BATrfM%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAUfN%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BArBGE%3BAAAA%3BAAAA%3BAqBOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWF%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BArBrBA%3BAAAA%3BAAAA%3BAqB8BE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BACnGF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAwBF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAvB4HQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC%2FJN%3BAAAA%3BAAAA%3BAsBsDF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAWF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAeA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAvB0DQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC%2FJN%3BAAAA%3BAAAA%3BAsBoHF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAjBpEI%3BAiBkFI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAjB%2FFJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAiBoHI%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOF%3BAAAA%3BAAAA%3BAAeA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAjB%2FIJ%3BAiBkFI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAjB%2FFJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAiBoHI%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOF%3BAAAA%3BAAAA%3BAAeA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAjB%2FIJ%3BAiBkFI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAjB%2FFJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAiBoHI%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOF%3BAAAA%3BAAAA%3BAAeA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAjB%2FIJ%3BAiBkFI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAjB%2FFJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAiBoHI%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOF%3BAAAA%3BAAAA%3BAAeA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAA%2FDJ%3BAAAA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAqBA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOF%3BAAAA%3BAAAA%3BAAeA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAeN%3BAAAA%3BAAAA%3BAtBvNA%3BAAAA%3BAAAA%3BAsBgOE%3BAAAA%3BAAAA%3BAtBhOF%3BAAAA%3BAAAA%3BAsBuOI%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAQF%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAEE%3BAAAA%3BAAAA%3BAtB%2FPF%3BAAAA%3BAAAA%3BAsB2QA%3BAAAA%3BAAAA%3BAtB3QA%3BAAAA%3BAAAA%3BAsBoRE%3BAAAA%3BAAAA%3BAtBpRF%3BAAAA%3BAAAA%3BAsB2RI%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAQF%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAEE%3BAAAA%3BAAAA%3BAtBnTF%3BAAAA%3BAAAA%3BAuBZF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYE%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQF%3BAAAA%3BAAAA%3BAAMF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAvBpDE%3BAAAA%3BAAAA%3BAuB6DA%3BAAAA%3BAAAA%3BAASF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAUF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAASE%3BAAAA%3BAAAA%3BAlB9FE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAkBwGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAkBF%3BAAAA%3BAAAA%3BAlB1HE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAkBmIA%3BAAAA%3BAAAA%3BAAAA%3BAAKE%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAOF%3BAAAA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAiBR%3BAAAA%3BAAAA%3BAlBvLE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAkBiMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYJ%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BACxRJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaE%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcF%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BACtCF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACjDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA3B4KM%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA2BpKF%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAbJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQI%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BACXN%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAhBeM%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAXJJ%3BAAAA%3BAAAA%3BA2BQA%3BAAAA%3BAAAA%3BAAMF%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWE%3BAAAA%3BAAAA%3BAAAA%3BA3BlCA%3BAAAA%3BAAAA%3BAAAA%3BA4BNE%3BAAAA%3BAAAA%3BAAAA%3BADwCF%3BAAAA%3BAAAA%3BAAAA%3BA3BlCA%3BAAAA%3BAAAA%3BAAAA%3BA4BNE%3BAAAA%3BAAAA%3BAAAA%3BADwCF%3BAAAA%3BAAAA%3BAAAA%3BA3BlCA%3BAAAA%3BAAAA%3BAAAA%3BA4BNE%3BAAAA%3BAAAA%3BAAAA%3BADwCF%3BAAAA%3BAAAA%3BAAAA%3BA3BlCA%3BAAAA%3BAAAA%3BAAAA%3BA4BNE%3BAAAA%3BAAAA%3BAAAA%3BADwCF%3BAAAA%3BAAAA%3BAAAA%3BA3BlCA%3BAAAA%3BAAAA%3BAAAA%3BA4BNE%3BAAAA%3BAAAA%3BAAAA%3BADwCF%3BAAAA%3BAAAA%3BAAAA%3BA3BlCA%3BAAAA%3BAAAA%3BAAAA%3BA4BNE%3BAAAA%3BAAAA%3BAAAA%3BADwCF%3BAAAA%3BAAAA%3BAAAA%3BA3BlCA%3BAAAA%3BAAAA%3BAAAA%3BA4BNE%3BAAAA%3BAAAA%3BAAAA%3BADwCF%3BAAAA%3BAAAA%3BAAAA%3BA3BlCA%3BAAAA%3BAAAA%3BAAAA%3BA4BNE%3BAAAA%3BAAAA%3BAAAA%3BACVJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAxB4DI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAwBhDJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACRA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAgBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC3CA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BADuCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC3CA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BADuCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC3CA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BADuCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC3CA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BADuCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC3CA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BADuCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC3CA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BADuCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC3CA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BADuCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC3CA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BACPA%3BAACE%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BArBCM%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAqBWN%3BAAAA%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACzCN%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BACDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAgBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAlCJE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAkCiBA%3BAAAA%3BAAAA%3BAAAA%3BAAWF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASE%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAgBA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAAA%3BA7BzDN%3BA6BmCA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA7BzDN%3BA6BmCA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA7BzDN%3BA6BmCA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA7BzDN%3BA6BmCA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAgBV%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BACxIF%3BAAAA%3BAAAA%3BAAAA%3BAnCaA%3BAAAA%3BAAAA%3BAAAA%3BAmCHI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAVJ%3BAAAA%3BAAAA%3BAAAA%3BAnCaA%3BAAAA%3BAAAA%3BAAAA%3BAmCHI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAVJ%3BAAAA%3BAAAA%3BAAAA%3BAnCaA%3BAAAA%3BAAAA%3BAAAA%3BAmCHI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAVJ%3BAAAA%3BAAAA%3BAAAA%3BAnCaA%3BAAAA%3BAAAA%3BAAAA%3BAmCHI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAVJ%3BAAAA%3BAAAA%3BAAAA%3BAnCaA%3BAAAA%3BAAAA%3BAAAA%3BAmCHI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAVJ%3BAAAA%3BAAAA%3BAAAA%3BAnCaA%3BAAAA%3BAAAA%3BAAAA%3BAmCHI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAVJ%3BAAAA%3BAAAA%3BAAAA%3BAnCaA%3BAAAA%3BAAAA%3BAAAA%3BAmCHI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAVJ%3BAAAA%3BAAAA%3BAAAA%3BAnCaA%3BAAAA%3BAAAA%3BAAAA%3BAmCHI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACbN%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BArC%2BKQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACnKN%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAoCYF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BACrCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BACrCA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAAA%3BAAOF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAkBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQE%3BAAAA%3BAAAA%3BAAAA%3BA3BvBI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA2B2BJ%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAAA%3BAAIE%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAkBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUE%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQE%3BAAAA%3BAAAA%3BAAAA%3BAAQF%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYE%3BAAAA%3BAAAA%3BAAMF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAjClII%3BAiC6IF%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAUF%3BAAAA%3BAAAA%3BAAAA%3BAjCvKE%3BAiC2KF%3BAAAA%3BAAAA%3BAAAA%3BAjC3KE%3BAiCkLF%3BAAAA%3BAAAA%3BAAAA%3BAC7OF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaE%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASJ%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAwBJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC3GA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAmBE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWJ%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYF%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAME%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAyBJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAzCuBQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAyCdN%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAAA%3BACzJA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACpBE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAD2BF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA9BRM%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA8BkBN%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAWE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA9BrDI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA8BkEN%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA9BlEM%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAXJJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAyC8FF%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA9B1II%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA8B4JJ%3BAAAA%3BAAAA%3BAAUF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAEtLA%3BAACE%3BAAAA%3BAAAA%3BAAAA%3BAAGF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAACE%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAME%3BAACE%3BAAAA%3BAAAA%3BAAAA%3BACzDJ%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BACFE%3BAAAA%3BAAAA%3BA7CWA%3BAAAA%3BAAAA%3BA6CXA%3BAAAA%3BAAAA%3BA7CWA%3BAAAA%3BAAAA%3BA6CXA%3BAAAA%3BAAAA%3BA7CWA%3BAAAA%3BAAAA%3BA6CXA%3BAAAA%3BAAAA%3BA7CWA%3BAAAA%3BAAAA%3BA6CXA%3BAAAA%3BAAAA%3BA7CWA%3BAAAA%3BAAAA%3BA6CXA%3BAAAA%3BAAAA%3BA7CWA%3BAAAA%3BAAAA%3BA6CXA%3BAAAA%3BAAAA%3BA7CWA%3BAAAA%3BAAAA%3BA6CXA%3BAAAA%3BAAAA%3BA7CWA%3BAAAA%3BAAAA%3BA8CJF%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BACVA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BALvEE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAMUI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA3CiDF%3BA2CjDE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA3CiDF%3BA2CjDE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA3CiDF%3BA2CjDE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA3CiDF%3BA2CjDE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUN%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACrBJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAoBE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACxBA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BA7CYA%3BA6ClDA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BA7CYA%3BA6ClDA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BA7CYA%3BA6ClDA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BA7CYA%3BA6ClDA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BAC1CA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BA9CoDA%3BA8CtDA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BA9CoDA%3BA8CtDA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BA9CoDA%3BA8CtDA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BA9CoDA%3BA8CtDA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BACLF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACtBF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACoBE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACtBF%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BACCI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BACTQ%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAtDPA%3BAsDlDI%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAtDPA%3BAsDlDI%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAtDPA%3BAsDlDI%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAtDPA%3BAsDlDI%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAbA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAC9DF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BACCF%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQI%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAxDqCA%3BAwDvCA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BAxDqCA%3BAwDvCA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BAxDqCA%3BAwDvCA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BAxDqCA%3BAwDvCA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BACvCE%3BAAAA%3BAAAA%3BA9DWA%3BAAAA%3BAAAA%3BA8DXA%3BAAAA%3BAAAA%3BA9DWA%3BAAAA%3BAAAA%3BA8DXA%3BAAAA%3BAAAA%3BA9DWA%3BAAAA%3BAAAA%3BA8DXA%3BAAAA%3BAAAA%3BA9DWA%3BAAAA%3BAAAA%3BA8DXA%3BAAAA%3BAAAA%3BA9DWA%3BAAAA%3BAAAA%3BA8DXA%3BAAAA%3BAAAA%3BA9DWA%3BAAAA%3BAAAA%3BA8DXA%3BAAAA%3BAAAA%3BA9DWA%3BAAAA%3BAAAA%3BA8DXA%3BAAAA%3BAAAA%3BA9DWA%3BAAAA%3BAAAA%3BA6DkCF%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAACA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAEA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAEjEA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BACCE%3BAACE%3BAAAA%3BAAAA%3BAAAA%3BAAWE%3BAAAA%3BAAAA%3BAAUF%3BAAAA%3BAAAA%3BAAeA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAMF%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAQF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAhFpIJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAiFOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAjFlBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAkFkBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA7DyCI%3BA6DlCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA7D%2BCA%3BA6DnCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAlF5CA%3BAkFmDA%3BAAAA%3BAAAA%3BAAAA%3BAlFnDA%3BAkFyDA%3BAAAA%3BAAAA%3BAlFzDA%3BAkFmEA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAlFvEA%3BAkF4EA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAA0BI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAyBA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAIQ%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAASQ%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAlFlQJ%3BAkFuQA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA7DxMI%3BA6DkNI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAlFhXA%3BAkFqXA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAlF7qBA%3BAAAA%3BAAAA%3BAkFmrBA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAlFrsBA%3BAAAA%3BAAAA%3BAkF2sBA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAxB5tBE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAwBgvBF%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAlFt9BA%3BAAAA%3BAAAA%3BAkF69BA%3BAAAA%3BAAAA%3BAAAA%3BAlF79BA%3BAAAA%3BAAAA%3BAkFq%2BBA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BA7DriCI%3BAAAA%3BAAAA%3BAAAA%3BA6DijCI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAlFjnCJ%3BAkFunCA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAlF5nCA%3BAkFgoCA%3BAAAA%3BAAAA%3BAlFhoCA%3BAkFooCA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAlFzoCA%3BAkF6oCA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAlFrqCA%3BAkF4qCA%3BAAAA%3BAAAA%3BAAOQ%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAlFz3CA%3BAkFo4CA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAlF34CJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAkFu5CA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAlFh6CA%3BAkFu6CA%3BAAAA%3BAAAA%3BAAAA%3BAlFv6CA%3BAkF66CA%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAlFn7CA%3BAkFw7CA%3BAAAA%3BAAAA%3BAAAA%3BAlFx7CA%3BAkF67CA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMQ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAlFv8CR%3BAkF88CA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAlFlgDA%3BAkFsgDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAlFtgDA%3BAkFshDA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA7Dn9CI%3BA6D29CA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAlFviDJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAkFmjDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAIQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAIQ%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAQhB%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAGQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASR%3BAAAA%3BAAAA%3BAAAA%3BA7D5kDA%3BA6DmlDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BA7DjnDA%3BA6DunDA%3BAAAA%3BAAAA%3BAAAA%3BA7DvnDA%3BA6D%2BnDA%3BAAAA%3BAAAA%3BAAAA%3BAlF1rDJ%3BAkFksDA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAeA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAiBA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAlFl9DA%3BAkF09DI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAlF%2F9DR%3BAkFs%2BDA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAlF9%2BDJ%3BAkFo%2FDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWQ%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAlFliEA%3BAkFwiEA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA7DvgEJ%3BA6DihEQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAlF%2FmEA%3BAkFsnEI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAACI%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAQZ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAlF3oEA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAkFyqEA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAiBI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BA7DzpEA%3BA6D8pEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaJ%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAGQ%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BA7DxtEZ%3BA6DiuEA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWJ%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAACI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAgBA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAlEhjFN%3BAAAA%3BAAAA%3BAAAA%3BAkE8jFE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BA7D3gFA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA6DohFJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAJA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAJA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAJA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAJA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAJA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAJA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAJA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BA7D9jFI%3BA6DmkFA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAKR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAlE3rFV%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAc6DA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BAAAA%3BAoDonFJ%3BAACI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQZ%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAqCA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAlEt0FF%3BAAAA%3BAAAA%3BAAAA%3BAkE80FM%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQY%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAC93FZ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAAA%3BAAOQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAFJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAFJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAFJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAFJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAFJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAnF9JA%3BAoFAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAkBA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAmBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAMQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BApFlTA%3BAoF2TA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BA%2FDxUI%3BA%2BD6UA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA%2FDhVA%3BA%2BDwVA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAOQ%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAgBA%3BAAAA%3BAAAA%3BAAWR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAASR%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BApF7kBA%3BAoFklBA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOR%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BACpqBJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAAA%3BArF5BA%3BAqB2DI%3BAgEtBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAhEsBA%3BAgEVA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAhEII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAgEQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAhEbJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAgE6BJ%3BAAAA%3BAAAA%3BAAMQ%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAKQ%3BAAAA%3BAAAA%3BAAKR%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BArEvIF%3BAAAA%3BAAAA%3BAqEmJF%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAhErGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAgE%2BGJ%3BAAAA%3BAAAA%3BAAKQ%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAhErJJ%3BAgE2JQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASR%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BAAIJ%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAhE9KA%3BAgEqLI%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAhEtRI%3BAgE2RA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUI%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAACI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BArF1YR%3BAsFwBA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAiBJ%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWY%3BAAAA%3BAAAA%3BAAAA%3BAAUhB%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAlFA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAqFA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAQZ%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAWQ%3BAAAA%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAASR%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAnTA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAoTA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKY%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAUR%3BAAAA%3BAAAA%3BAAaI%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAtFhjBpB%3BAsF0jBA%3BAAAA%3BAAAA%3BAAuBA%3BAAEQ%3BAAAA%3BAAAA%3BAAAA%3BAAMR%3BAAKoB%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAKQ%3BAAAA%3BAAAA%3BAAhEhC%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAkEwB%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAUpB%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWhB%3BAAIgB%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMQ%3BAAAA%3BAAAA%3BAAtHpB%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAwHY%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAASpB%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAC%2FtBI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAACI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAlEqDJ%3BAkEhDQ%3BAAAA%3BAAAA%3BAAAA%3BAlEmCR%3BAkE7BQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAlEtCJ%3BAkE4CQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAlEzDR%3BAkEgEQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAASZ%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAvFtKA%3BAAAA%3BAwFGA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAxFtBA%3BAwF2BA%3BAAAA%3BAAAA%3BAAAA%3BAxF3BA%3BAwFgCA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAnEiBA%3BAmEXA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAACI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAnEtDJ%3BAmE6DQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUI%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUZ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASY%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAkBI%3BAAAA%3BAAAA%3BAAOZ%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAUR%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAUJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAnE9XJ%3BAmEoYQ%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAnE7XJ%3BAmE2YY%3BAAAA%3BAAAA%3BAAAA%3BAAShB%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAnExZI%3BAmE%2BZQ%3BAAAA%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAASZ%3BAAAA%3BAAAA%3BAAAA%3BAAQZ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAMQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAzCtnBE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BA%2FCRF%3BAwF6oBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAzCzoBE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAyCspBF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAxFzqBA%3BAwF8qBA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAYI%3BAAAA%3BAAAA%3BAAWJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAxFzzBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAwFi0BA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAxFz0BA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAwFs1BA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKQ%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAMQ%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAIQ%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAOZ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAxE9iCN%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAcKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUE%3BAAAA%3BAAAA%3BA0D4gCQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAxEpjCV%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAcKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUE%3BAAAA%3BAAAA%3BA0DkhCA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAxFxlCA%3BAwF%2BlCA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAxF3oCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAwFwpCA%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOR%3BAACI%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAWJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAzCrtCE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAyCstCE%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAUR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAnE32CA%3BAmEg3CI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAnE73CJ%3BAmEo4CI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYR%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAzCx9CF%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAyCu9CM%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAxFt%2FCJ%3BAyFYA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAzFzBA%3BAyFgCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA9DbM%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BANwCF%3BAoEdA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BA9D7BE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA8DiCN%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BA9DjEM%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BANwCF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAoEkDJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA9D1FM%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA8D%2BFF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA9D5GE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BANqDF%3BAoEqEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAA6DJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA9DpMM%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA8DoJF%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BApEtJJ%3BAoEkKA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BApElLI%3BAoEuLA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAxFA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BA9D9LF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BANqDF%3BAoE%2BLA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAhGA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BA9D9LF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA8D2PN%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUI%3BAAAA%3BAAAA%3BAAAA%3BAPs%2FEA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAQ5xFJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BA1F5BA%3BA0FiCA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA1F7IA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA0F0JA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWI%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAUI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BA1FnrBA%3BAAAA%3BA0F4rBI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BA1F3sBJ%3BA0FktBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAeA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BA1F19BA%3BA2FeA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAIQ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOQ%3BAAAA%3BAAAA%3BAASpB%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAOZ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAOZ%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAoBR%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA3EteF%3BAAAA%3BAAAA%3BA2EkfU%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAKR%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASJ%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAIQ%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASY%3BAAAA%3BAAAA%3BAAAA%3BAtExkBZ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAsEolBA%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA3F3qBR%3BA4FAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAeA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BA5F5MA%3BA4FgNA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA7CxSE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BA6CwSE%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA7CjTE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BA6CiTF%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA7C%2FUE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BA6C%2BUF%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAWI%3BAAAA%3BAAAA%3BAAAA%3BA5E5VF%3BAAAA%3BAAAA%3BAAAA%3BA4BNE%3BAAAA%3BAAAA%3BAAAA%3BAgDqWA%3BAAAA%3BAAAA%3BAAAA%3BA5E%2FVF%3BAAAA%3BAAAA%3BAAAA%3BA4BNE%3BAAAA%3BAAAA%3BAAAA%3BAgDwWA%3BAAAA%3BAAAA%3BAAAA%3BA5ElWF%3BAAAA%3BAAAA%3BAAAA%3BA4BNE%3BAAAA%3BAAAA%3BAAAA%3BAgD8WJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAvE5jBI%3BAuEikBA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAvErkBA%3BAuE4kBI%3BAAAA%3BAAAA%3BAAAA%3BA5FppBR%3BA6FAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAKQ%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASR%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAOZ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BA7FpPA%3BA6FwPA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BA7FhQA%3BA6FqQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA7FrQA%3BA6F2QA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAcQ%3BAAAA%3BAAAA%3BAClUR%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMQ%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BA9FxFA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA%2BFMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BA%2FFrEA%3BA%2BF0EA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA%2FFjIA%3BA%2BFgJA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BA%2FF3JA%3BA%2BFgKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BA%2FF1KA%3BAAAA%3BA%2BF%2BKA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BA%2FF5MA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA%2BFuNA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BA%2FFrPA%3BAAAA%3BA%2BF2PA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA%2FFxTJ%3BA%2BFiUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BA%2FFhVR%3BAAAA%3BA%2BFwVA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BA%2FFjWA%3BA%2BFwWI%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BA1EjUI%3BA0EsUA%3BAAAA%3BAAAA%3BAAAA%3BA%2FFjYJ%3BAqB2DI%3BA0E8UI%3BAAAA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAASZ%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWI%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BA1EvXI%3BA0E4XA%3BAAAA%3BAAAA%3BAAAA%3BA1E5XA%3BA0EqYY%3BAAAA%3BAAAA%3BAAAA%3BAASZ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BACveZ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BA3EZJ%3BA2EmBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAhG9EJ%3BAiGMA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQI%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAOQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAWJ%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAMQ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAOZ%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAjG1PJ%3BAiGqQA%3BAACI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA5ErPA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA4EgQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASQ%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAjGzapB%3BAqBwEI%3BA4E8WQ%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAOZ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAjGrdA%3BAiGmeA%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAlF5TI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAkF2UR%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAlF5UI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAkFyVJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUI%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAgBI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAgBA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAeR%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAgBhB%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAtEhuBE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAsEsuBF%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUQ%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAASR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWY%3BAAAA%3BAAAA%3BAAUhB%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAUZ%3BAAAA%3BAAAA%3BA5E12BA%3BA4Ei3BI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAjG9%2BBA%3BAiGu%2FBA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAYQ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAWI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAAA%3BAAIQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BA5EzlCI%3BA4E8lCA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAeA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAjGhzCA%3BAiGszCA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAACI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAjGn7CA%3BAAAA%3BAAAA%3BAiG27CA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAlDn8CE%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAkDw8CF%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAjG99CA%3BAAAA%3BAAAA%3BAiGu%2BCI%3BAAAA%3BAAAA%3BACt%2BCJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASR%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAlGnFZ%3BAmGKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BACXA%3BAAAA%3BAAAA%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA1CLN%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA0CgBE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BApGtCJ%3BAoG6CI%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BApG3DZ%3BAoGqEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BApGhFA%3BAoGoFA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA1CpGF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA0CkHF%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BACxMJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BArFdN%3BAAAA%3BAAAA%3BAAAA%3BAqFwBc%3BAAAA%3BAAAA%3BAASZ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC1DJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAtFxBE%3BAAAA%3BAAAA%3BAsFsCM%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC7DA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAQI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWR%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAMQ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAASR%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYJ%3BAAAA%3BAAAA%3BAAIQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAASR%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAASR%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAvGzZR%3BAAAA%3BAAAA%3BAuGwaQ%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAvGzdJ%3BAAAA%3BAAAA%3BAuGieA%3BAAAA%3BAAAA%3BAAIQ%3BAAAA%3BAAAA%3BAASJ%3BAAAA%3BAAAA%3BAAAA%3BAvG9eJ%3BAAAA%3BAAAA%3BAuG0fA%3BAAAA%3BAAAA%3BACzfA%3BAAAA%3BAAAA%3BAAIA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAxGPJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAyGQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAzG7BA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAyGwDA%3BAAAA%3BAAAA%3BAAAA%3BAzGxDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAyGyEA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAzG7EA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAyGgGA%3BAAAA%3BAAAA%3BAAAA%3BAzGhGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAyG4GA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAzFzGE%3BAAAA%3BAAAA%3BAhBtBF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAyGmJA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAzGrKA%3BAAAA%3BAAAA%3BAAAA%3BAyG6KA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAzGrLA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA0GII%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAASJ%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BA1GlGA%3BAAAA%3BAAAA%3BA2GGA%3BAAAA%3BAAAA%3BAtFwDI%3BAsFlDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAACI%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAAA%3BAtFiDJ%3BAsF1CA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BACdZ%3BAAAA%3BAAAA%3BAAKY%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUR%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAcA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWI%3BAAAA%3BAAAA%3BAAAA%3BAAKQ%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAACI%3BAAAA%3BAAAA%3BAAaI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMQ%3BAAAA%3BAAAA%3BAAUA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAOZ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAQY%3BAAAA%3BAAAA%3BAAUR%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAUQ%3BAAAA%3BAAAA%3BAASZ%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAKJ%3BAAGY%3BAAAA%3BAAAA%3BAAAA%3BAAOZ%3BAAGY%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA5GveZ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA6GWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAkCI%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAVJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAVJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAVJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYZ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC5GA%3BAAEI%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BACNI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWR%3BAAAA%3BAAAA%3BA%2FFHF%3BAAAA%3BAAAA%3BAgGfE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BArFmBE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAqFPE%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASZ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA9B4uFI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BA8BvvFA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BA3FWA%3BA2FDQ%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAOZ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BA3FjEI%3BA2FuEA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA3FlGJ%3BA2F2GA%3BAAAA%3BAAAA%3BAAAA%3BA3F3GA%3BA2FmHA%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA3FzHJ%3BA2FiIA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BArFnMF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAqF0MN%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAChOJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BA5FoCA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA4FvBJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAC5DJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAlHhEA%3BAkHuEA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAlHrHA%3BAAAA%3BAAAA%3BAAAA%3BAkHgIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAlHrIA%3BAAAA%3BAAAA%3BAAAA%3BAkH8IA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAlH%2FJA%3BAkHoKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAlHpKA%3BAkH2KA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAlHzLA%3BAkH6LA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAlH1NA%3BAAAA%3BA4B2CE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAiBE%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAA5CA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAA8DE%3BAAAA%3BAAAA%3BAAAA%3BAA9DF%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAwFE%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAGE%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAUF%3BAAAA%3BAAAA%3BAAKE%3BAAAA%3BAAAA%3BAAAA%3BAsFwDR%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAC9NA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAARA%3BAAAA%3BAAAA%3BAAUI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAfA%3BAAAA%3BAAAA%3BAAiBI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAtBA%3BAAAA%3BAAAA%3BAAwBI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAA7BA%3BAAAA%3BAAAA%3BAA%2BBI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BACxCJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASQ%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASJ%3BAAAA%3BAAAA%3BAAGQ%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASA%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUhB%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAaI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BA%2FF7CZ%3BA%2BFqDQ%3BAAAA%3BAAAA%3BAAAA%3BAAKR%3BAAAA%3BAAAA%3BAAAA%3BAAUY%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAASpB%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BApHtKA%3BAAAA%3BAAAA%3BAAAA%3BAqHQI%3BAAAA%3BAAAA%3BArHRJ%3BAqHeI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAhGyDA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAgGjDI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAnCuvFJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAmC1vFgB%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKR%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BArH9DhB%3BAAAA%3BAAAA%3BAqH%2BEA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BArHpFA%3BAqH4FQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQJ%3BAAAA%3BAAAA%3BArHpGJ%3BAqB2DI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAgGoDA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAnCspFI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAlF5xFJ%3BAqH8HA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAnCgpFI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BA7DjuFA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAgG0EA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQI%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BArHrKJ%3BAqH4KI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BArH5KJ%3BAqHwLI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BArH3LJ%3BAqB2DI%3BAgG4II%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAQA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAnCuiFJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAmC9iFI%3BAAAA%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BArHpPA%3BAqH0PI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BArHjRZ%3BAAAA%3BAAAA%3BAqH4RA%3BAAAA%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BArHhTZ%3BAAAA%3BAqBwEI%3BAgGkPI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAUI%3BAAAA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAClUhB%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAtG3CN%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAsGEM%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAAA%3BAAkCI%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAtG%2FFV%3BAAAA%3BAAAA%3BAAAA%3BAsGsGc%3BAAAA%3BAAAA%3BAAQR%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAtGA%3BAAAA%3BAAAA%3BAAAA%3BAA4GI%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BACjMR%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAvGUF%3BAAAA%3BAAAA%3BAAAA%3BAuGEM%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAMJ%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMZ%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAASI%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAvG5DV%3BAAAA%3BAAAA%3BAAAA%3BAuGmEU%3BAAAA%3BAAAA%3BAAMR%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAIJ%3BAAAA%3BAAAA%3BACpGJ%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAnGsEJ%3BAmG7DA%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKJ%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAC%2FBR%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAEI%3BAAAA%3BAAAA%3BApGiDR%3BAoGzCA%3BAAAA%3BAAAA%3BAAAA%3BACnBJ%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BArG4DA%3BAqGrDI%3BAAAA%3BAAAA%3BAAAA%3BAAMR%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BACxBJ%3BAAAA%3BAAAA%3BAAMI%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BA3HgHJ%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAgB3IE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAc6DA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BA9BiEJ%3BAAAA%3BAAAA%3BAAAA%3BAgBhJE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAc6DA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BA9BqEJ%3BAAAA%3BAAAA%3BAAAA%3BAgBpJE%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAc6DA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOE%3BAAAA%3BAAAA%3BA9B%2BLA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAqBrNA%3BArB4NA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAqBzOA%3BArB6GA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAQQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAqBnNZ%3BArB6GA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAQQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAqBnNZ%3BArB6GA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAII%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOJ%3BAAAA%3BAAAA%3BAAQQ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAYA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAKA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAA4ChB%3BAACI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAqBhQA%3BArBwQA%3BAAAA%3BAAAA%3BAAAA%3BAqBxQA%3BArB8QA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAqBnRJ%3BArB0RA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAqB%2FRJ%3BArBsSA%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAAMR%3BAACI%3BAAAA%3BAAAA%3BAAKI%3BAAAA%3BAAAA%3BAAAA%3BAqBvTJ%3BArB%2BTI%3BAAAA%3BAAAA%3BAAAA%3BAAGI%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAWJ%3BAAAA%3BAAAA%3BAAGA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAIA%3BAAAA%3BAAAA%3BAAAA%3BAAOR%3BAAAA%3BAAAA%3BAAMA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAAA%3BAAOI%3BAAAA%3BAAAA%3BAAAA%3BAASJ%3BAAAA%3BAAAA%3BAAAA%3BAAAA%22%7D */