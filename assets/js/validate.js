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