/** Path: plugin report_completion .' **/
#page-report-completion-index table#completion-progress {
    margin-top: 20px;
    margin-bottom: 30px;
}

#page-report-completion-index .export-actions {
    text-align: center;
    list-style: none;
}

#page-report-completion-index .criterianame,
#page-report-completion-index .criteriaicon,
#page-report-completion-index .completion-progresscell {
    text-align: center;
}

/* Custom CSS for rotated header.. */
#page-report-completion-index .rotated-text-container {
    display: inline-block;
    width: 16px;
}

/*rtl:begin:ignore*/
#page-report-completion-index .rotated-text {
    display: inline-block;
    white-space: nowrap;

    transform: translate(0, 100%) rotate(-90deg);
    transform-origin: 0 0;
    vertical-align: middle;
}

#page-report-completion-index .rotated-text:after {
    content: "";
    float: left;
    margin-top: 100%;
}
/*rtl:end:ignore*/

