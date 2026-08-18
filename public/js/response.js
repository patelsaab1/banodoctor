function getBotResponse(input) 
{
    //rock paper scissors
    if(input!="" )
    {
       var oldInput="";
   
        if ($("#ChatSubmitForm").length)
        {
            
                   $("#ChatSubmitForm").remove();
                   oldInput="You have selected another medical course<br>";
                  
        }
                
                
         var form= oldInput+"Plese Submit Your Information <form  value='{{Session::token()}}' onsubmit='return false;' class='bg-light pb-5 rounded chatForm' id='ChatSubmitForm'><br><input type='text' class='m-3' placeholder='Enter course interested' value='"+input+"' id='chatUserCourse'><br><input type='text'class='m-3' placeholder='Full Name' id='charUserName'><br> <input type='text'class='m-3' placeholder='Mobile Number' id='charUserMobile'> <br><input type='text'class='m-3' placeholder='Email Id' id='charUserEmail'><br><button class='btn btn-primary'  onclick='SubmitChatForm()'>Submit</button></form>";
             
             return form;
    }
  
    
    else
    {
       return "Please call us on <a href='tel:+917880109834'>+917880109834</a> Our Counsellor will help you for enquiry!";
   
    }
   
    
    
}