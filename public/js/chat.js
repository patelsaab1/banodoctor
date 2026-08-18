// Collapsible
var coll = document.getElementsByClassName("collapsible");

for (let i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");

        var content = this.nextElementSibling;

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }

    });
}

function getTime() {
    let today = new Date();
    hours = today.getHours();
    minutes = today.getMinutes();

    if (hours < 10) {
        hours = "0" + hours;
    }

    if (minutes < 10) {
        minutes = "0" + minutes;
    }

    let time = hours + ":" + minutes;
    return time;
}

// Gets the first message
function firstBotMessage() {
   let firstMessage = '<p class="botText"><span>Hello!</span></p><p class="botText"><span>How May I help You?</span></p><p class="botText"><span>You are interested in medical courses?</span></p> <div class="m-3"><h5>Postgraduate Medical Degree/Diploma</h5>'+'<button class="btn btn-primary text-white m-2" value="MD/MS" onclick="ButtonInputSet(this.value)">MD/MS</button>'+'<button class="btn btn-primary text-white m-2" value="DNB" onclick="ButtonInputSet(this.value)">DNB</button>'+'<button class="btn btn-primary text-white m-2" value="Ayurveda" onclick="ButtonInputSet(this.value)">Ayurveda</button>'+'<button class="btn btn-primary text-white m-2" value="Homeopathy" onclick="ButtonInputSet(this.value)">Homeopathy</button>'+'<button class="btn btn-primary text-white m-2" value="FCPS/CPS" onclick="ButtonInputSet(this.value)">FCPS/CPS Admission</button>'+'<button class="btn btn-primary text-white m-2" value="Unani" onclick="ButtonInputSet(this.value)">Unani</button>'+'<h5>Undergraduate Medical Degree/Diploma</h5>'+'<button class="btn btn-primary text-white m-2" value="MBBS" onclick="ButtonInputSet(this.value)">MBBS</button>'+'<button class="btn btn-primary text-white m-2" value="BAMS"  onclick="ButtonInputSet(this.value)">BAMS</button>'+'<button class="btn btn-primary text-white m-2" value="BDS" onclick="ButtonInputSet(this.value)">BDS</button>'+'<button class="btn btn-primary text-white m-2" value="BVSC" onclick="ButtonInputSet(this.value)">BVSC</button>'+'<button class="btn btn-primary text-white m-2" value="BUMS" onclick="ButtonInputSet(this.value)">BUMS</button>'+'<button class="btn btn-primary text-white m-2" value="BHMS" onclick="ButtonInputSet(this.value)">BHMS</button>'+'<button class="btn btn-primary text-white m-2" value="BPT" onclick="ButtonInputSet(this.value)">BPT</button>'+'<button class="btn btn-primary text-white m-2" value="MDS" onclick="ButtonInputSet(this.value)">MDS</button>'+'<h5>Nursing Medical Courses</h5>'+'<button class="btn btn-primary text-white m-2" value="BSC" onclick="ButtonInputSet(this.value)">BSC</button>'+'<button class="btn btn-primary text-white m-2" value="ANM"  onclick="ButtonInputSet(this.value)">ANM</button>'+'<button class="btn btn-primary text-white m-2" value="GNM" onclick="ButtonInputSet(this.value)">GNM</button>'+'<button class="btn btn-primary text-white m-2" value="BSC Nursing (Post Basic)" onclick="ButtonInputSet(this.value)">BSc Nursing (Post Basic)</button></div>';
   
   document.getElementById("botStarterMessage").innerHTML = firstMessage;

    let time = getTime();

    $("#chat-timestamp").append(time);
    document.getElementById("userInput").scrollIntoView(false);
}

firstBotMessage();

// Retrieves the response
function getHardResponse(userText) {
    let botResponse = getBotResponse(userText);
    let botHtml = '<p class="botText"><span>' + botResponse + '</span></p>';
    $("#chatbox").append(botHtml);

    document.getElementById("chat-bar-bottom").scrollIntoView(true);
}

//Gets the text text from the input box and processes it
function getResponse() {
    let userText = $("#textInput").val();
     
    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("chat-bar-bottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText);
    }, 1000)

}

// Handles sending text via button clicks
function buttonSendText(sampleText) {
    let userHtml = '<p class="userText"><span>' + sampleText + '</span></p>';

    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("chat-bar-bottom").scrollIntoView(true);

    //Uncomment this if you want the bot to respond to this buttonSendText event
    // setTimeout(() => {
    //     getHardResponse(sampleText);
    // }, 1000)
}

function sendButton() {
    getResponse();
}

function heartButton() {
    buttonSendText("Heart clicked!")
}

// Press enter to send a message
$("#textInput").keypress(function (e) {
    if (e.which == 13) {
        getResponse();
    }
});

function ButtonInputSet(inputValue)
{
    var getInputValue=$("#textInput").val(inputValue);
    
     getResponse();
     
   
    
}


$("#SubmitChatFormButton").click(function(event){
  event.preventDefault();
  SubmitChatForm();
});



function SubmitChatForm()
{
        
      
       var getInputCourse=$("#chatUserCourse").val();
       var getInputName=$("#charUserName").val();
       var getInputMobile=$("#charUserMobile").val();
       var getInputEmail=$("#charUserEmail").val();
       
       var Response='Name : '+getInputName+'<br>'+'Mobile : '+getInputMobile+'<br>'+'Email : '+getInputEmail+'<br>';
        
       
       var getInputValue=$("#textInput").val(Response);
       var token = $('meta[name="csrf-token"]').attr("content");
       
       if(getInputCourse!="" && getInputName!="" && getInputMobile!="" &&  getInputEmail!="") 
       {
            $.ajax({
              url: "/StoreChatContact",
              type: "POST",
              data: {
                  _token: token,
                  type: 1,
                  name: getInputName,
                  email: getInputEmail,
                  phone: getInputMobile,
                  course: getInputCourse
              },
              cache: false,
              success: function(dataResultChat){
                  console.log(dataResultChat);
                  var dataResultChatResponse = JSON.parse(dataResultChat);
                  if(dataResultChatResponse.statusCode==200){
                   let userHtml = '<p class="userText"><span>' + Response + '</span></p>'; 
           
          $("#chatbox").append( userHtml);
          document.getElementById("chat-bar-bottom").scrollIntoView(true); 
          
          var ResponseMessage="Thankyou to send us Your Information we will contact with you soon!";
          let botHtml = '<p class="botText"><span>' + ResponseMessage + '</span></p>';
          $("#chatbox").append(botHtml);      
            document.getElementById("chat-bar-bottom").scrollIntoView(true);
            
                    $("#ChatSubmitForm").remove();				
                  }
                  else if(dataResultChatResponse.statusCode==201){
                     alert("Error occured !");
                  }
                  
              }
          });
        
      
          
        
          

    
       }
       else
       {
           alert("Plese fill all fields first");
       }
       
}

 
 