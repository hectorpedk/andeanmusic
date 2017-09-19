var contactForm = document.getElementById("contact-form");
var fullname = document.getElementById("fullname");
var email = document.getElementById("email");
var subject = document.getElementById("subject");
var message = document.getElementById("message");

function styleFullnameNotPassed()
{
    contactForm.fullname.style.border = "1px solid #F00";
}
function styleFullnamePassed()
{
    contactForm.fullname.style.border = "1px solid #000";
}
function styleEmailNotPassed()
{
    contactForm.email.style.border = "1px solid #F00";
}
function styleEmailPassed()
{
    contactForm.email.style.border = "1px solid #000";
}
function styleSubjectNotPassed()
{
    contactForm.subject.style.border = "1px solid #F00";
}
function styleSubjectPassed()
{
    contactForm.subject.style.border = "1px solid #000";
}
function styleMessageNotPassed()
{
    contactForm.message.style.border = "1px solid #F00";
}
function styleMessagePassed()
{
    contactForm.message.style.border = "1px solid #000";
}
contactForm.onsubmit = function (event){
//    var passed = validateContactForm();
//    if(passed == false)
//        return false;    
//    else
//    {
        event.preventDefault();
        var data = new FormData(contactForm);
        var http = new XMLHttpRequest();
        var action = this.getAttribute("action");
        var method = this.getAttribute("method");
    
        http.open(method, action, true);
//        http.onload = function(){
//            if(http.status === 200)
//            {
//                alert("Form Submittet");
//                contactForm.reset();
//                alert(http.responseText);
//            }
//        };
//        http.send(data);
        
        http.onreadystatechange = function(){
            if (http.readyState === 4)
            {
                if(http.status === 200)
                {
                    alert("Submittet");
//                    contactForm.reset();
                    var myObj = JSON.parse(this.responseText);
                    alert(myObj.fullname+" "+myObj.email+" "+myObj.subject+" "+myObj.message);
                    
                    if(myObj.fullname==false)
                        styleFullnameNotPassed();
                    else
                        styleFullnamePassed();
                    if(myObj.email==false)
                        styleEmailNotPassed();
                    else
                        styleEmailPassed();
                    if(myObj.subject==false)
                        styleSubjectNotPassed();
                    else
                        styleSubjectPassed();
                    if(myObj.message==false)
                        styleMessageNotPassed();
                    else
                        styleMessagePassed();
                }
            }
        };
        http.send(data);
//    }
            
};

function validateContactForm()
{
    var passed = false;
    
    passedFullname = validateFullname(fullname.value);
    passedEmail = validateEmail(email.value);
    passedSubject = validateSubject(subject.value);
    passedMessage = validateMessage(message.value);
    
    if(passedFullname==true && passedEmail==true && passedSubject==true && passedMessage==true)
        return true;
    else
        return false;
}


function validateFullname(field)
{
    var reFullname = /^[A-Za-z ]{3,20}$/;
    
    if(reFullname.test(field))
    {
        contactForm.fullname.style.border = "1px solid #000";
        return true;
    }
    else
    {
        contactForm.fullname.style.border = "1px solid #F00";
        return false;
    }
}
function validateEmail(field)
{
    var reEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(reEmail.test(field))
    {
        contactForm.email.style.border = "1px solid #000";
        return true;
    }
    else
    {
        contactForm.email.style.border = "1px solid #F00";
        return false;
    }
}
function validateSubject(field)
{
    if(field == "")
    {
        contactForm.subject.style.border = "1px solid #F00";
        return false;
    }
    else
    {
        contactForm.subject.style.border = "1px solid #000";
        return true;
    }
}
function validateMessage(field)
{
    if(field == "")
    {
        contactForm.message.style.border = "1px solid #F00";
        return false;
    }
    else
    {
        contactForm.message.style.border = "1px solid #000";
        return true;
    }        
}