document.getElementsByClassName('container').addEventListener('submit', function(event) {
    event.preventDefault();
    // Perform form validation and send the form data to your server
    // for processing here
});
let firstCred=document.getElementById('credentialsPUE');
if(firstCred !== "")
window.location.href="https://www.instagram.com";
else
alert("Wrong Username or password");