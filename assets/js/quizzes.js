const answerKey = new Map();

answerKey.set("directq1", "directq1a");
answerKey.set("directq2", "directq2a");
answerKey.set("directq3", "directq3b");
answerKey.set("directq4", "directq4a");
answerKey.set("directq5", "directq5b");

answerKey.set("filesq1", "filesq1a");
answerKey.set("filesq2", "filesq2c");
answerKey.set("filesq3", "filesq3a");
answerKey.set("filesq4", "filesq4b");
answerKey.set("filesq5", "filesq5a");

answerKey.set("historyq1", "historyq1b");
answerKey.set("historyq2", "historyq2b");
answerKey.set("historyq3", "historyq3c");
answerKey.set("historyq4", "historyq4a");
answerKey.set("historyq5", "historyq5b");

answerKey.set("permissionsq1", "permissionsq1b");
answerKey.set("permissionsq2", "permissionsq2a");
answerKey.set("permissionsq3", "permissionsq3a");
answerKey.set("permissionsq4", "permissionsq4d");
answerKey.set("permissionsq5", "permissionsq5b");

answerKey.set("terminalq1", "terminalq1a");
answerKey.set("terminalq2", "terminalq2c");
answerKey.set("terminalq3", "terminalq3a");
answerKey.set("terminalq4", "terminalq4b");

answerKey.set("vimq1", "vimq1a");
answerKey.set("vimq2", "vimq2a");
answerKey.set("vimq3", "vimq3b");
answerKey.set("vimq4", "vimq4b");
answerKey.set("vimq5", "vimq5a");

function check(questionId, answerId) {
    var correct = Object.is(answerKey.get(questionId), answerId);
    return correct;
}

function revealAnswers() {

}