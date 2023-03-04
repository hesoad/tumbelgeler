/** Path: plugin block_flexpagemod .' **/
/**
 * Flexpage Activity Block
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see http://opensource.org/licenses/gpl-3.0.html.
 *
 * @copyright Copyright (c) 2009 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license http://opensource.org/licenses/gpl-3.0.html GNU Public License
 * @package block_flexpagemod
 * @author Mark Nielsen
 */

/* Error text */
.block_flexpagemod_error {
    color: red;
}

/* The default mod display, this is the <ul> element */
.block_flexpagemod_default.course-content ul.section {
    margin: 0;
}

/* The default mod display, no list style */
.block_flexpagemod_default li.activity {
    list-style: none;
}

/* The default mod display, no indenting */
.block_flexpagemod_default .mod-indent {
    margin-left: 0;
}

/* Remove default padding to the right */
.editing #region-post .block_flexpagemod_default.course-content .section .activity .activityinstance,
.editing #region-pre .block_flexpagemod_default.course-content .section .activity .activityinstance {
    padding-right: 0;
    display: block;
    margin-top: 45px;
    height: 100%;
}

/* The default mod display, no move or edit title widgets */
.block_flexpagemod_default .section .activity .moodle-actionmenu[data-enhanced] .menu > li > a.editing_moveleft,
.block_flexpagemod_default .section .activity .moodle-actionmenu[data-enhanced] .menu > li > a.editing_moveright,
.block_flexpagemod_default .editing_move {
    display: none;
}

/* Have module edit widgets dimmed and hidden content */
.block_flexpagemod .dimmed_text,
.editing .block_flexpagemod_default li.activity .commands,
.editing .block_flexpagemod_commands .commands {
    opacity: 0.25;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=25%)";
    filter: alpha(opacity=25);
    z-index: 2;
}

/* Have module edit widgets show without dim on hover */
.editing .block_flexpagemod_default li:hover.activity .commands,
.editing .block_flexpagemod_commands_wrapper:hover .commands {
    opacity: 1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100%)";
    filter: alpha(opacity=100);
}

/* Made room for the edit widgets for labels */
.editing .block_flexpagemod_label .block_flexpagemod_default.course-content ul.section li.activity {
    padding-bottom: 1.5em;
}

/* For page module */
.block_flexpagemod_page .modified {
    font-size: 0.6em;
}

/* For embedded content in iframes */
.block_flexpagemod_iframe {
    width: 100%;
    height: 400px;
}

/* For embedded content in object tags */
.block_flexpagemod_object {
    width: 100%;
    height: 600px;
}


