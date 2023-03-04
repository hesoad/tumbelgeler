/** Path: plugin mod_feedback .' **/
/* styles using by feedback */
.path-mod-feedback span.feedback_info {
    font-weight: bold;
}

.path-mod-feedback div.feedback_is_dependent {
    background: #ddd;
}

.path-mod-feedback span.feedback_depend {
    color: #f00;
}

.path-mod-feedback hr.feedback_pagebreak {
    height: 4px;
    color: #aaa;
    background-color: #aaa;
    border: 0;
    margin: 0;
}

.path-mod-feedback .drag_target_active {
    opacity: .25;
}

.path-mod-feedback .drag_item_active {
    opacity: .5;
}

.path-mod-feedback .feedback_bar_image {
    height: 10px;
}

.path-mod-feedback #analysis-form label {
    display: inline;
}

.path-mod-feedback .templateslist td.cell.action,
.path-mod-feedback .templateslist th.header.action {
    width: 10%;
}

.path-mod-feedback .feedback_form .itemactions {
    display: inline-block;
    margin: 0 .5em;
}

/* Analysis page */
.path-mod-feedback table.analysis {
    width: 100%;
    border-top: 1px solid #aaa;
    margin-top: 10px;
}

.path-mod-feedback table.analysis tr:first-child th {
    padding-top: 10px;
}

.path-mod-feedback table.analysis tr:hover {
    background: #f5f5f5;
}

.path-mod-feedback table.analysis td.singlevalue:before,
.path-mod-feedback table.analysis td.optionname:before {
    content: '- ';
}

.path-mod-feedback table.analysis.itemtype_textarea td {
    padding: 4px 0;
}

.path-mod-feedback table.analysis tr.isempty {
    display: none;
}

/* Responses list */
.path-mod-feedback #showentrytable td.cell.completed_timemodified,
.path-mod-feedback #showentryanontable td.cell.random_response {
    font-weight: bold;
}

.path-mod-feedback #showentrytable td.cell.userpic,
.path-mod-feedback #showentrytable td.cell.deleteentry,
.path-mod-feedback #showentryanontable td.cell.deleteentry {
    width: 10px;
}

/* Responses navigation */
.path-mod-feedback .response_navigation {
    margin: .5em 0;
}

.path-mod-feedback .response_navigation a {
    display: block;
}

.path-mod-feedback .response_navigation a.back_to_list {
    text-align: center;
}

.path-mod-feedback .response_navigation .prev_response:before {
    /*rtl:raw:
    content: ' ► ';
    */
    /*rtl:remove*/
    content: ' ◄ ';
}

.path-mod-feedback .response_navigation .next_response:after {
    /*rtl:raw:
    content: ' ◄ ';
    */
    /*rtl:remove*/
    content: ' ► ';
}

.path-mod-feedback .response_navigation .next_response {
    text-align: right;
}

.path-mod-feedback .response_navigation .prev_response {
    text-align: left;
}


