function checkinforegister() {
	const name=document.validation.name.value;  
	const password=document.validation.password.value;  
    const str = document.validation.email.value;
    const filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
    
    if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
    }else if (filter.test(str)){
        testresults = true
    }else {
        alert("Please input a valid email address!")
        testresults = false
    }if (password==null || password==""){  
        alert("Password must not be empty.");  
        return false;  
    }  
}

function checkinfologin() {
	const password=document.validation.password.value;  
    const str = document.validation.email.value;
    const filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
    
   if (filter.test(str)){
        testresults = true
    }else {
        alert("Please input a valid email address!")
        testresults = false
    }
    if (password==null || password==""){  
        alert("Password must not be empty.");  
        return false;  
    }  
}