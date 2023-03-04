/** Path: plugin tool_usertours .' **/
div[data-flexitour="backdrop"] {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

span[data-flexitour="container"] .modal-dialog {
    max-width: 400px;
}

span[data-flexitour="container"] .modal-dialog .modal-content .modal-header {
    border-bottom: 0;
}

span[data-flexitour="container"] .modal-dialog .modal-content .modal-footer {
    justify-content: flex-start;
    border-top: 0;
}

span[data-flexitour="container"].orphan {
    position: absolute;
}

span[data-flexitour="container"].orphan div[data-role="arrow"] {
    display: none;
}

body div[data-flexitour="step-background-fader"],
body div[data-flexitour="step-background"] {
    position: absolute;
    background: inherit;
    background-image: none;
}

div[data-flexitour="step-background-fader"],
[data-flexitour="step-backdrop"] > td,
[data-flexitour="step-backdrop"] {
    position: relative;
}

span[data-flexitour="container"].orphan div[data-role="arrow"] {
    display: none;
}

.path-admin-local-usertours .stepcreator .input-append {
    font-size: inherit;
}

.tour-actions > ul {
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}

.tour-actions > ul > li {
    background-color: #f5f5f5;
}

.tour-actions > ul {
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}

.tour-actions > ul > li {
    background-color: #f5f5f5;
    border-radius: 6px;
    border: 1px solid #ccc;
    display: inline-block;
    height: 9em;
    margin: .5em;
    text-align: center;
    width: 13em;
}

.tour-actions > ul > li > a {
    height: 100%;
    display: block;
    padding: 1em;
}

@media (max-width: 575.98px) {
    span[data-flexitour="container"] {
        margin-left: 10px;
    }
    span[data-flexitour="container"] .modal-content {
        overflow-y: initial;
    }
    span[data-flexitour="container"].orphan {
        margin-left: 5px;
        margin-right: 5px;
    }
}


