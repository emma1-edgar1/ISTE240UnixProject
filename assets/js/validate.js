function validateHistory(){
	errormsg = "";

	// question 1
	if(document.getElementById("historyq1a").checked == false &&
		document.getElementById("historyq1b").checked == false &&
		document.getElementById("historyq1c").checked == false &&
		document.getElementById("historyq1d").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// question 2
	if(document.getElementById("historyq2a").checked == false &&
		document.getElementById("historyq2b").checked == false){
		errormsg = "Please do not leave any questions blank\nMake a guess if you need to!";
	}

	// question 3
	if(document.getElementById("historyq3a").checked == false &&
		document.getElementById("historyq3b").checked == false &&
		document.getElementById("historyq3c").checked == false &&
		document.getElementById("historyq3d").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// question 4
	if(document.getElementById("historyq4a").checked == false &&
		document.getElementById("historyq4b").checked == false){
		errormsg = "Please do not leave any questions blank\nMake a guess if you need to!";
	}

	// question 5
	if(document.getElementById("historyq5a").checked == false &&
		document.getElementById("historyq5b").checked == false){
		errormsg = "Please do not leave any questions blank\nMake a guess if you need to!";
	}

	// return 
	if(errormsg != ""){
        alert(errormsg);
        return false;
    }
    else{
    	return true;
    }
}

function validateFiles(){
	errormsg = "";

	// question 1
	if(document.getElementById("filesq1a").checked == false &&
		document.getElementById("filesq1b").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// question 2
	if(document.getElementById("filesq2a").checked == false &&
		document.getElementById("filesq2b").checked == false &&
		document.getElementById("filesq2c").checked == false &&
		document.getElementById("filesq2d").checked == false){
		errormsg = "Please do not leave any questions blank\nMake a guess if you need to!";
	}

	// question 3
	if(document.getElementById("filesq3a").checked == false &&
		document.getElementById("filesq3b").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// question 4
	if(document.getElementById("filesq4a").checked == false &&
		document.getElementById("filesq4b").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// question 5
	if(document.getElementById("filesq5a").checked == false &&
		document.getElementById("filesq5b").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// return 
	if(errormsg != ""){
        alert(errormsg);
        return false;
    }
    else{
    	return true;
    }
}

function validateFolders(){
	errormsg = "";

	// question 1
	if(document.getElementById("directq1a").checked == false &&
		document.getElementById("directq1b").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// question 2
	if(document.getElementById("directq2a").checked == false &&
		document.getElementById("directq2b").checked == false){
		errormsg = "Please do not leave any questions blank\nMake a guess if you need to!";
	}

	// question 3
	if(document.getElementById("directq3a").checked == false &&
		document.getElementById("directq3b").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// question 4
	if(document.getElementById("directq4a").checked == false &&
		document.getElementById("directq4b").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// question 5
	if(document.getElementById("directq5a").checked == false &&
		document.getElementById("directq5b").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// return 
	if(errormsg != ""){
        alert(errormsg);
        return false;
    }
    else{
    	return true;
    }
}

function validateTerminal(){
	errormsg = "";

	// question 1
	if(document.getElementById("terminalq1a").checked == false &&
		document.getElementById("terminalq1b").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// question 2
	if(document.getElementById("terminalq2a").checked == false &&
		document.getElementById("terminalq2b").checked == false &&
		document.getElementById("terminalq2c").checked == false &&
		document.getElementById("terminalq2d").checked == false){
		errormsg = "Please do not leave any questions blank\nMake a guess if you need to!";
	}

	// question 3
	if(document.getElementById("terminalq3a").checked == false &&
		document.getElementById("terminalq3b").checked == false &&
		document.getElementById("terminalq3c").checked == false &&
		document.getElementById("terminalq3d").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// question 4
	if(document.getElementById("terminalq4a").checked == false &&
		document.getElementById("terminalq4b").checked == false){
		errormsg = "Please do not leave any questions blank\nMake a guess if you need to!";
	}

	// question 5
	if(document.getElementById("terminalq5a").checked == false &&
		document.getElementById("terminalq5b").checked == false){
		errormsg = "Please do not leave any questions blank\nMake a guess if you need to!";
	}

	// return 
	if(errormsg != ""){
        alert(errormsg);
        return false;
    }
    else{
    	return true;
    }
}

function validateVim(){
	errormsg = "";

	// question 1
	if(document.getElementById("vimq1a").checked == false &&
		document.getElementById("vimq1b").checked == false &&
		document.getElementById("vimq1c").checked == false &&
		document.getElementById("vimq1d").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// question 2
	if(document.getElementById("vimq2a").checked == false &&
		document.getElementById("vimq2b").checked == false){
		errormsg = "Please do not leave any questions blank\nMake a guess if you need to!";
	}

	// question 3
	if(document.getElementById("vimq3a").checked == false &&
		document.getElementById("vimq3b").checked == false &&
		document.getElementById("vimq3c").checked == false &&
		document.getElementById("vimq3d").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// question 4
	if(document.getElementById("vimq4a").checked == false &&
		document.getElementById("vimq4b").checked == false){
		errormsg = "Please do not leave any questions blank\nMake a guess if you need to!";
	}

	// question 5
	if(document.getElementById("vimq5a").checked == false &&
		document.getElementById("vimq5b").checked == false){
		errormsg = "Please do not leave any questions blank\nMake a guess if you need to!";
	}

	// return 
	if(errormsg != ""){
        alert(errormsg);
        return false;
    }
    else{
    	return true;
    }
}

function validatePermissions(){
	errormsg = "";

	// question 1
	if(document.getElementById("permissionsq1a").checked == false &&
		document.getElementById("permissionsq1b").checked == false &&
		document.getElementById("permissionsq1c").checked == false &&
		document.getElementById("permissionsq1d").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// question 2
	if(document.getElementById("vimpermissionsq2aq2a").checked == false &&
		document.getElementById("permissionsq2b").checked == false){
		errormsg = "Please do not leave any questions blank\nMake a guess if you need to!";
	}

	// question 3
	if(document.getElementById("permissionsq3a").checked == false &&
		document.getElementById("permissionsq3b").checked == false){
		errormsg = "Please do not leave any questions blank!\nMake a guess if you need to!";
	}

	// question 4
	if(document.getElementById("permissionsq4a").checked == false &&
		document.getElementById("permissionsq4b").checked == false &&
		document.getElementById("permissionsq4c").checked == false &&
		document.getElementById("permissionsq4d").checked == false){
		errormsg = "Please do not leave any questions blank\nMake a guess if you need to!";
	}

	// question 5
	if(document.getElementById("permissionsq5a").checked == false &&
		document.getElementById("permissionsq5b").checked == false){ 
		errormsg = "Please do not leave any questions blank\nMake a guess if you need to!";
	}

	// return 
	if(errormsg != ""){
        alert(errormsg);
        return false;
    }
    else{
    	return true;
    }
}
