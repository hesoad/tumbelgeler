/** Path: plugin gradingform_rubric .' **/
/*
.gradingform_rubric.editor[.frozen|.editable]
  .criteria
    .criterion[.first][.last][.odd|.even]
        .controls
            .moveup
                [input type=submit]
            .delete
                [input type=submit]
            .movedown
                [input type=submit]
        .description
        .levels
            td.level[.first][.last][.odd|.even]
                div.level-wrapper
                    .definition
                        [textarea]
                    .score
                        span
                            [input type=text]
                    .delete
                        [input type=submit]
        .addlevel
            [input type=submit]
        .remark
            textarea
    .addcriterion
        [input type=submit]
  .options
    .optionsheading
    .option.OPTIONNAME

.gradingform_rubric[.review][.evaluate[.editable|.frozen]]
  .criteria
    .criterion[.first][.last][.odd|.even]
        .description
        .levels
            td.level[.first][.last][.odd|.even]
                div.level-wrapper
                    div.radio
                        input
                    .definition
                    .score
                        span

*/

.gradingform_rubric_editform .status {
    font-weight: normal;
    text-transform: uppercase;
    font-size: 60%;
    padding: 0.25em;
    border: 1px solid #eee;
}

.gradingform_rubric_editform .status.ready {
    background-color: #e7f1c3;
    border-color: #aea;
}

.gradingform_rubric_editform .status.draft {
    background-color: #f3f2aa;
    border-color: #ee2;
}

.gradingform_rubric {
    padding-bottom: 1.5em;
}

.gradingform_rubric.editor .criterion .controls,
.gradingform_rubric .criterion .description,
.gradingform_rubric .criterion .levels,
.gradingform_rubric.editor .criterion .addlevel,
.gradingform_rubric .criterion .remark,
.gradingform_rubric .criterion .levels .level {
    vertical-align: top;
}

.gradingform_rubric.editor .criterion .controls,
.gradingform_rubric .criterion .description,
.gradingform_rubric.editor .criterion .addlevel,
.gradingform_rubric .criterion .remark,
.gradingform_rubric .criterion .levels .level {
    padding: 3px;
}

.gradingform_rubric .criteria {
    height: 100%;
    display: flex;
    width: 100%;
    overflow: auto;
}

.gradingform_rubric .criterion {
    border: 1px solid #ddd;
    overflow: hidden;
}

.gradingform_rubric .criterion.even {
    background: #f0f0f0;
}

.gradingform_rubric .criterion .description {
    min-width: 150px;
    font-weight: bold;
}

.gradingform_rubric .criterion .levels table {
    width: 100%;
    height: 100%;
}

.gradingform_rubric .criterion .levels,
.gradingform_rubric .criterion .levels table,
.gradingform_rubric .criterion .levels table tbody {
    padding: 0;
    margin: 0;
}

.gradingform_rubric .criterion .levels .level {
    border-left: 1px solid #ddd;
    max-width: 150px;
}

.gradingform_rubric .criterion .levels .level .level-wrapper {
    position: relative;
}

.gradingform_rubric .criterion .levels .level.last {
    border-right: 1px solid #ddd;
}

.gradingform_rubric .plainvalue.empty {
    font-style: italic;
    color: #aaa;
}

/* Make invisible the buttons 'Move up' for the first criterion and
   'Move down' for the last, because those buttons will make no change */
.gradingform_rubric.editor .criterion.first .controls .moveup input,
.gradingform_rubric.editor .criterion.last .controls .movedown input {
    display: none;
}

/* replace buttons with images */
.gradingform_rubric.editor .delete input,
.gradingform_rubric.editor .duplicate input,
.gradingform_rubric.editor .moveup input,
.gradingform_rubric.editor .movedown input {
    text-indent: -1000em;
    cursor: pointer;
    border: none;
}

.gradingform_rubric.editor .criterion .controls .delete input {
    width: 12px;
    height: 12px;
    background: transparent url(/theme/image.php?theme=classic&component=core&image=t%2Fdelete) no-repeat center top;
    margin: .3em .3em 0 .3em;
}

.gradingform_rubric.editor .criterion .controls .duplicate input {
    width: 12px;
    height: 12px;
    background: transparent url(/theme/image.php?theme=classic&component=core&image=t%2Fcopy) no-repeat center top;
    margin: .3em .3em 0 .3em;
}

.gradingform_rubric.editor .levels .level .delete input {
    width: 12px;
    height: 16px;
    background: transparent url(/theme/image.php?theme=classic&component=core&image=t%2Fdelete) no-repeat center center;
}

.gradingform_rubric.editor .moveup input {
    width: 12px;
    height: 12px;
    background: transparent url(/theme/image.php?theme=classic&component=core&image=t%2Fup) no-repeat center top;
    margin: .3em .3em 0 .3em;
}

.gradingform_rubric.editor .movedown input {
    width: 12px;
    height: 12px;
    background: transparent url(/theme/image.php?theme=classic&component=core&image=t%2Fdown) no-repeat center top;
    margin: .3em .3em 0 .3em;
}

.gradingform_rubric.editor .addcriterion input,
.gradingform_rubric.editor .addlevel input {
    background: #fff url(/theme/image.php?theme=classic&component=core&image=t%2Fadd) no-repeat 7px 8px;
    display: block;
    color: #555;
    font-weight: bold;
    text-decoration: none;
}

.gradingform_rubric.editor .addcriterion input {
    height: 30px;
    line-height: 29px;
    margin-bottom: 14px;
    padding-left: 20px;
    padding-right: 10px;
}

.gradingform_rubric.editor .addlevel input {
    padding-left: 24px;
    padding-right: 8px;
}

.gradingform_rubric .options .optionsheading {
    font-weight: bold;
    font-size: 1.1em;
    padding-bottom: 5px;
}

.gradingform_rubric .options .option {
    padding-bottom: 2px;
}

.gradingform_rubric .options .option label {
    margin-left: 5px;
}

.gradingform_rubric .options .option .value {
    margin-left: 5px;
    font-weight: bold;
}

.gradingform_rubric .criterion .levels.error {
    border: 1px solid red;
}

.gradingform_rubric .criterion .description.error,
.gradingform_rubric .criterion .levels .level .definition.error,
.gradingform_rubric .criterion .levels .level .score.error {
    background: #fdd;
}

.gradingform_rubric-regrade {
    padding: 10px;
    background: #fdd;
    border: 1px solid #f00;
    margin-bottom: 10px;
}

.gradingform_rubric-restored {
    padding: 10px;
    background: #ffd;
    border: 1px solid #ff0;
    margin-bottom: 10px;
}

.gradingform_rubric-error {
    color: red;
    font-weight: bold;
}

/* special classes for elements created by rubriceditor.js */
.gradingform_rubric.editor .hiddenelement {
    display: none;
}

.gradingform_rubric.editor .pseudotablink {
    background-color: transparent;
    border: 0 solid;
    height: 1px;
    width: 1px;
    color: transparent;
    padding: 0;
    margin: 0;
    position: relative;
    float: right;
}

.gradingpanel-gradingform_rubric [aria-checked="true"] {
    border: 1px solid black;
}


