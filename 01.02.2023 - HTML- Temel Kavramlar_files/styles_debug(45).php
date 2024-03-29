/** Path: plugin block_course_appointments .' **/
/*
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

 Author:  Mark Johnson <mark.johnson@tauntons.ac.uk>
Copyright  2011 Tauntons College, UK
Licence:  http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

.block_course_appointments .mform fieldset {
    margin: 0px;
    padding: 0px;
}

.block_course_appointments .mform fieldset > div {
    margin: .2em 0em;
}

.block_course_appointments .mform .fitem .fitemtitle {
    width: 60%;
    text-align: left;
}

.block_course_appointments .mform .fitem.required .felement,
.block_course_appointments .mform .fitem .felement.fsubmit,
.block_course_appointments .mform .fitem.required .fitemtitle {
    text-align: left;
    width: 100%;
    margin-left: 0px;
}

.block_course_appointments .mform .fitem.required .fitemtitle {
    float: none;
}

.block_course_appointments .fdescription.required {
    display: none;
}

.block_course_appointments fieldset > select + label + select {
    width: 4em;
}

.block_course_appointments fieldset > select + label + select + label + select {
    width: auto;
}


