/** Path: plugin qtype_ddwtos .' **/
.que.ddwtos .qtext {
    margin-bottom: 0.5em;
    display: block;
}

.que.ddwtos .draghome {
    margin-bottom: 1em;
}

.que.ddwtos .answertext {
    margin-bottom: 0.5em;
}

.que.ddwtos .drop.active {
    display: inline-block;
    text-align: center;
    border: 1px solid #000;
    margin-bottom: 2px;
}

.que.ddwtos .drop {
    display: none;
}

.que.ddwtos .drags {
    height: 0;
}

.que.ddwtos .draghome {
    display: inline-block;
    text-align: center;
    background: transparent;
    border: 1px solid #000;
    cursor: move;
}

.que.ddwtos.qtype_ddwtos-readonly .draghome {
    cursor: default;
}

.que.ddwtos .draghome.beingdragged {
    z-index: 3;
    box-shadow: 3px 3px 4px #000;
    position: absolute;
}

.que.ddwtos .draghome.dragplaceholder {
    display: none;
}

.que.ddwtos .draghome.dragplaceholder.active {
    visibility: hidden;
    display: inline-block;
}

.que.ddwtos .draghome.placed {
    margin-bottom: 2px;
}

.que.ddwtos .drop:focus,
.que.ddwtos .drop.valid-drag-over-drop,
.que.ddwtos .draghome.placed:focus:not(.beingdragged),
.que.ddwtos .draghome.placed.valid-drag-over-drop {
    border-color: #0a0;
    box-shadow: 0 0 5px 5px rgba(255, 255, 150, 1);
}

.que.ddwtos span.incorrect {
    background-color: #faa;
}

.que.ddwtos span.correct {
    background-color: #afa;
}

.que.ddwtos .group1 {
    background-color: #fff;
}

.que.ddwtos .group2 {
    background-color: #dcdcdc;
    border-radius: 10px 0 0 0;
}

.que.ddwtos .group3 {
    background-color: #b0c4de;
    border-radius: 0 10px 0 0;
}

.que.ddwtos .group4 {
    background-color: #d8bfd8;
    border-radius: 0 0 10px 0;
}

.que.ddwtos .group5 {
    background-color: #87cefa;
    border-radius: 0 0 0 10px;
}

.que.ddwtos .group6 {
    background-color: #daa520;
    border-radius: 0 10px 10px 0;
}

.que.ddwtos .group7 {
    background-color: #ffd700;
    border-radius: 10px 0 0 10px;
}

.que.ddwtos .group8 {
    background-color: #f0e68c;
    border-radius: 10px 10px 10px 10px;
}

.que.ddwtos sub,
.que.ddwtos sup {
    font-size: 80%;
    position: relative;
    vertical-align: baseline;
}

.que.ddwtos sup {
    top: -0.4em;
}

.que.ddwtos sub {
    bottom: -0.2em;
}


