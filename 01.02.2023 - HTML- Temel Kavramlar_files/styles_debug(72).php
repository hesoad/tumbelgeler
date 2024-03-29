/** Path: plugin format_flexpage .' **/
/**
 * Flexpage
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
 * @package format_flexpage
 * @author Mark Nielsen
 */

.site-index-flexpage .block_adminblock,
#page-course-view-flexpage .block_adminblock,
#format_flexpage_condition_templates,
#format_flexpage_addpages_template {
    display: none;
}

/* Show admin block on participants and course category admin pages */
#page-course-view-flexpage.path-user .block_adminblock,
#page-course-index-category .block_adminblock {
    display: inherit;
}

#page-course-index-category #moodle-blocks {
    visibility: visible;
    height: auto;
}

/* Prevents actionbar sub-menus from displaying until the menu is ready */
.format_flexpage_actionbar .javascript-disabled .yui3-menu {
    display: none;
}

.format_flexpage_addpages_wrapper {
    margin-bottom: 20px;
}

.format_flexpage_add_button {
    vertical-align: bottom;
    padding-left: 25px;
    text-align: right;
    font-weight: bold;
}

.format_flexpage_add_button button {
    font-weight: bold;
}

.format_flexpage_addpages_elements {
    white-space: nowrap;
    padding-top: 3px;
    padding-bottom: 2px;
}

.format_flexpage_box {
    display: table;
}

.format_flexpage_row {
    display: table-row;
}

.format_flexpage_cell {
    display: table-cell;
}

#flexpage_actionbar #custommenu {
    padding: 0;
}

#format_flexpage_actionbar_nav {
    float: right;
    padding-right: 10px;
}

#format_flexpage_actionbar_nav #format_flexpage_jumptopage .singleselect {
    display: inline-block;
}

#format_flexpage_actionbar_nav #format_flexpage_prevpage {
    padding-right: 5px;
}

#format_flexpage_actionbar_nav #format_flexpage_nextpage {
    padding-left: 5px;
}

#format_flexpage_actionbar_help {
    cursor: pointer;
    vertical-align: middle;
    margin-left: 10px;
}

#actionhelpbuttonpanel ul li {
    margin-bottom: 10px;
}

#format_flexpage_movingtext {
    padding-right: 5px;
}

.format_flexpage_movepage_wrapper #menumove {
    margin-right: 5px;
}

.format_flexpage_addactivity_heading {
    font-weight: bold;
}

.format_flexpage_addactivity_group li {
    list-style: none;
}

#format_flexpage_region_radios {
    margin-top: 5px;
    margin-bottom: 10px;
    margin-right: 20px;
    white-space: nowrap;
}

.format_flexpage_existing_activity_list li {
    padding-bottom: 5px;
}

#format_flexpage_addblock_links ul li {
    list-style: none;
    white-space: nowrap;
    padding-bottom: 5px;
}

.format_flexpage_conditions {
    width: 100%;
    margin-bottom: -5px;
}

.format_flexpage_condition_completion,
.format_flexpage_condition_grade,
.format_flexpage_form .format_flexpage_cell {
    padding-bottom: 5px;
}

.format_flexpage_conditions .format_flexpage_cell {
    padding-bottom: 0;
}

.format_flexpage_form .cell0 {
    text-align: right;
    padding-right: 5px;
}

.format_flexpage_conditions .cell0 {
    text-align: left;
    padding-right: 0;
}

.format_flexpage_error_bg {
    background-color: #F9A0A0;
}

/* Fixes bleeding of completion check boxes when modals are up */
.site-index-flexpage.yui-skin-sam li.activity span.autocompletion,
.site-index-flexpage.yui-skin-sam li.activity form.togglecompletion,
#page-course-view-flexpage.yui-skin-sam li.activity span.autocompletion,
#page-course-view-flexpage.yui-skin-sam li.activity form.togglecompletion {
    z-index: 2;
}

.format_flexpage_box_managepages .format_flexpage_cell {
    padding: 6px 5px 6px 5px;
    border-top: 1px solid #CCCCCC;
}

.format_flexpage_box_managepages .format_flexpage_navigation_cell li.yui-button-selectedmenuitem,
.format_flexpage_box_managepages .format_flexpage_display_cell li.yui-button-selectedmenuitem {
    font-weight: bold;
}

.format_flexpage_navigation_cell .yui-menu-button button,
.format_flexpage_display_cell .yui-menu-button button {
    width: 17em;
    text-align: left;
    display: block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    -o-text-overflow: ellipsis;
}

.format_flexpage_navigation_cell .yui-menu-button button {
    width: 18em;
}

#managepagespanel .bd {
    padding-right: 30px;
}

.format_flexpage_box_managepages .format_flexpage_box_headers .format_flexpage_cell {
    font-weight: bold;
    border-top: none;
}

.format_flexpage_box_managepages .format_flexpage_cell {
    vertical-align: middle;
}

.format_flexpage_box_managepages .format_flexpage_name_cell {
    vertical-align: top;
}

.format_flexpage_box_managepages .format_flexpage_name_cell .availabilityinfo {
    max-width: 500px;
}

.format_flexpage_deletepage {
    padding: 15px 0;
}

.format_flexpage_page_availability .format_flexpage_cell {
    padding: 10px 0;
}

.format_flexpage_page_availability .format_flexpage_pagename {
    font-weight: bold;
}

#format_flexpage_previous_page.yui-link-button a:hover,
#format_flexpage_next_page.yui-link-button a:hover {
    text-decoration: none;
}


