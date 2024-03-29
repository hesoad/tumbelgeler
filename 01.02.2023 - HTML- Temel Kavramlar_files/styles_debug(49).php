/** Path: plugin block_flexpagenav .' **/
/**
 * Flexpage Navigation Block
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
 * @package block_flexpagenav
 * @author Mark Nielsen
 */

.block_flexpagenav_movelink .format_flexpage_cell {
    padding: 5px;
}

.block_flexpagenav_exclude_cell ul {
    margin-top: 0;
    margin-bottom: 0;
}

.block_flexpagenav_exclude_firstul {
    margin-left: 0;
}

.block_flexpagenav_exclude_cell ul li {
    list-style-type: none;
}

.block_flexpagenav_exclude_cell label {
    padding-left: 5px;
}

.block_flexpagenav_add_button {
    text-align: center;
    margin: 10px 0;
}

#managemenuspanel .hd,
#managelinkspanel .hd {
    padding-right: 40px;
}

#page-course-view-flexpage.yui3-skin-sam .yui3-menuitem-content.dimmed_text,
#page-course-view-flexpage.yui3-skin-sam .yui3-menu .yui3-menu .yui3-menuitem-content.dimmed_text {
    color: #AAAAAA;
}

.block_flexpagenav_error {
    color: red;
}

/** BELOW COPIED FROM blocks/settings/styles.css **/
/** Renamed .block_settings to .block_flexpagenav **/

/** JavaScript state rules **/
.jsenabled .block_flexpagenav.dock_on_load,
.jsenabled .block_flexpagenav .block_tree_box .requiresjs {display:inline;}

/** General display rules **/
.block_flexpagenav .block_tree {margin:5px;padding-left:0;overflow:visible;}
.block_flexpagenav .block_tree li ul {padding-left:16px;margin:0;}

.block_flexpagenav .block_tree li.item_with_icon > p {position:relative;}
.block_flexpagenav .block_tree li.item_with_icon > p img {vertical-align:middle;position:absolute;left:0;top:3px;height:16px}

.block_flexpagenav .block_tree .tree_item {padding-left: 18px;margin:3px 0;text-align:left;}

.block_flexpagenav .block_tree .root_node.leaf {padding-left:0;}
.block_flexpagenav .block_tree .active_tree_node {font-weight:bold;}
.jsenabled .block_flexpagenav .block_tree .tree_item.branch {cursor:pointer;}

/** Internet explorer specific rules **/
.ie6 .block_flexpagenav .block_tree .tree_item {width:100%;}

/** Override for RTL layout **/
.dir-rtl .block_flexpagenav .block_tree {padding-right:0;}
.dir-rtl .block_flexpagenav .block_tree li ul {padding-left:0;padding-right: 7px;}
.dir-rtl .block_flexpagenav .block_tree li.item_with_icon > p img,
.dir-rtl .block_navigation .block_tree .type_activity > .tree_item.branch img {left:auto;right:0;}
.dir-rtl .block_flexpagenav .block_tree .tree_item {padding-right: 18px;text-align:right;}
.dir-rtl .block_flexpagenav .block_tree .tree_item.branch {background-position: center right;}
.dir-rtl .block_flexpagenav .block_tree .root_node.leaf {padding-right:0;}

.block_flexpagenav [aria-expanded="false"] > [role="group"] {
    display: none;
}

.block_flexpagenav  [aria-expanded="true"] .tree_item.branch {
    background-image: url('/theme/image.php?theme=classic&component=core&image=t%2Fexpanded');
    background-repeat: no-repeat;
}

.block_flexpagenav [aria-expanded="false"] .tree_item.branch {
    background-image: url('/theme/image.php?theme=classic&component=core&image=t%2Fcollapsed');
    background-repeat: no-repeat;
}

