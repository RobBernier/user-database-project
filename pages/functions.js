function validateForm() {
	/*
        Name: functions.js

        Javascript functions for site, mostly validation for the entry.php forms.
    */ 
    var validate = document.forms["newEntry"]["employeename"].value;
    if (validate == null || validate == "") {
        alert("Name must be filled out");
        return false;
    }

    var validate = document.forms["newEntry"]["datejoined"].value;
    if (validate == null || validate == "") {
        alert("Date Joined must be filled out");
        return false;
    }

    //regular expression for ISO date format.
    var re = /^([\+-]?\d{4}(?!\d{2}\b))((-?)((0[1-9]|1[0-2])(\3([12]\d|0[1-9]|3[01]))?|W([0-4]\d|5[0-2])(-?[1-7])?|(00[1-9]|0[1-9]\d|[12]\d{2}|3([0-5]\d|6[1-6])))([T\s]((([01]\d|2[0-3])((:?)[0-5]\d)?|24\:?00)([\.,]\d+(?!:))?)?(\17[0-5]\d([\.,]\d+)?)?([zZ]|([\+-])([01]\d|2[0-3]):?([0-5]\d)?)?)?)?$/;
    if (re.test(validate) == false) {
    	alert("Date must be in ISO format.");
    	return false;
    }

    var validate = document.forms["newEntry"]["department"].value;
    if (validate == null || validate == "") {
        alert("Department must be filled out");
        return false;
    }

    var validate = document.forms["newEntry"]["annualsalary"].value;
    if (validate == null || validate == "") {
        alert("Salary must be filled out");
        return false;
    }

    var validate = document.forms["newEntry"]["project"].value;
    if (validate == null || validate == "") {
        alert("Project must be filled out");
        return false;
    }
    

    var validate = document.forms["modifyUser"]["employeename"].value;
    if (validate == null || validate == "") {
        alert("Name must be filled out");
        return false;
    }

    var validate = document.forms["modifyUser"]["datejoined"].value;
    if (validate == null || validate == "") {
        alert("Date Joined must be filled out");
        return false;
    }

    var re = /^([\+-]?\d{4}(?!\d{2}\b))((-?)((0[1-9]|1[0-2])(\3([12]\d|0[1-9]|3[01]))?|W([0-4]\d|5[0-2])(-?[1-7])?|(00[1-9]|0[1-9]\d|[12]\d{2}|3([0-5]\d|6[1-6])))([T\s]((([01]\d|2[0-3])((:?)[0-5]\d)?|24\:?00)([\.,]\d+(?!:))?)?(\17[0-5]\d([\.,]\d+)?)?([zZ]|([\+-])([01]\d|2[0-3]):?([0-5]\d)?)?)?)?$/;
    if (re.test(validate) == false) {
    	alert("Date must be in ISO format.");
    	return false;
    }

    var validate = document.forms["modifyUser"]["department"].value;
    if (validate == null || validate == "") {
        alert("Department must be filled out");
        return false;
    }

    var validate = document.forms["modifyUser"]["annualsalary"].value;
    if (validate == null || validate == "") {
        alert("Salary must be filled out");
        return false;
    }

    var validate = document.forms["modifyUser"]["project"].value;
    if (validate == null || validate == "") {
        alert("Project must be filled out");
        return false;
    }

}