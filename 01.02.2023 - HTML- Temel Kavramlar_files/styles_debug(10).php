/** Path: plugin qtype_multichoice .' **/
.que.multichoice .answer div.r0,
.que.multichoice .answer div.r1 {
    display: flex;
    margin: 0.25rem 0;
    align-items: flex-start;
}

.que.multichoice .answer div.r0 input,
.que.multichoice .answer div.r1 input {
    margin: 0.3rem 0.5rem;
    width: 14px;
    flex-shrink: 0;
}

.que.multichoice .answer .answernumber {
    min-width: 1.5em;
}

.que.multichoice .answer .specificfeedback {
    display: inline;
    padding: 0 0.7em;
    background: #fff3bf;
}

/* Editing form. */
body#page-question-type-multichoice div[id^=fitem_id_][id*=answer_] {
    background: #eee;
    margin-top: 0;
    margin-bottom: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #bbb;
    border-bottom: 0;
}

body#page-question-type-multichoice div[id^=fitem_id_][id*=answer_] .fitemtitle {
    font-weight: bold;
}

body#page-question-type-multichoice div[id^=fitem_id_] .fitemtitle {
    margin-left: 0;
    margin-right: 0;
    padding-left: 6px;
    padding-right: 0;
}

body#page-question-type-multichoice div[id^=fitem_id_][id*=fraction_] {
    background: #eee;
    margin-bottom: 0;
    margin-top: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #bbb;
    border-top: 0;
    border-bottom: 0;
}

body#page-question-type-multichoice div[id^=fitem_id_][id*=feedback_] {
    background: #eee;
    margin-bottom: 2em;
    margin-top: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #bbb;
    border-top: 0;
}


