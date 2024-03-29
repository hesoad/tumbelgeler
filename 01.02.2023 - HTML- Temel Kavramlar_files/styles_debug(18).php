/** Path: plugin mod_booking .' **/
.mod-booking .results {
    border-collapse: separate;
}

.mod-booking .results .data {
    border-width: 1px;
    border-style: solid;
    border-color: #999;
}

.mod-booking-inlinetable {
    display: inline;
    background-color: transparent;
    /*float: left;*/
}

tr.mod-booking-booked td.cell {
    background-color: lightgreen;
}

tr.mod-booking-booked.inpast td.cell {
    background-color: #d6f9d9;
}

table.mod-booking-table td.cell {
    border-bottom: 1px solid #cecece;
}

table.mod-booking-table tr.inpast td.cell {
    color: #909090;
}

div.mod-booking-waitlist {
    background-color: orange;
    width: 100%;
    height: auto;
    display: block;
}

tr.mod-booking-watinglist td.cell {
    background-color: orange;
}

tr.mod-booking-invisible {
    visibility: hidden;
    height: 0;
    display: none;
}

/** Styles for teachers.php */
.subscriberdiv,
.subscribertable {
    width: 100%;
    vertical-align: top;
}

.subscribertable tr td {
    vertical-align: top;
}

.subscribertable tr td.actions {
    width: 16%;
    padding-top: 3em;
}

.subscribertable tr td.actions .actionbutton {
    margin: 0.3em 0;
    padding: 0.5em 0;
    width: 100%;
}

.subscribertable tr td.existing,
.subscribertable tr td.potential {
    width: 42%;
}

/** styles for displaying all bookings */
.mod-booking-regular {
    display: table-cell;
    padding: 5px;
}

.mod-booking-waiting {
    display: table-cell;
    padding: 5px;
}

.br-theme-css-stars .br-widget {
    height: 28px;
    white-space: nowrap;
}

.br-theme-css-stars .br-widget a {
    text-decoration: none;
    height: 18px;
    width: 18px;
    float: left;
    font-size: 23px;
    margin-right: 5px;
}

.br-theme-css-stars .br-widget a:after {
    content: "\2605";
    color: #d2d2d2;
}

.br-theme-css-stars .br-widget a.br-active:after {
    color: #edb867;
}

.br-theme-css-stars .br-widget a.br-selected:after {
    color: #edb867;
}

.br-theme-css-stars .br-widget .br-current-rating {
    display: none;
}

.br-theme-css-stars .br-readonly a {
    cursor: default;
}

#booking-instance-description {
    margin-left: 10px;
}

#booking-business-card {
    margin-left: 10px;
    padding: 10px;
    border-radius: 15px;
    border: 1px dashed lightgray;
}


