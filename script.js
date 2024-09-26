const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})



    //  page automatic timeout session code 



// // JavaScript to handle automatic logout after 1 minute of inactivity
// let timeout;

// function startTimer() {
//     // Set timeout for 1 minute (60000 milliseconds)
//     timeout = setTimeout(function() {
//         alert('Session timed out due to inactivity.');
//         window.location.href = 'logout.php';
//     }, 30000);
// }

// function resetTimer() {
//     clearTimeout(timeout);
//     startTimer();
// }

// // Start the timer when the page loads
// window.onload = startTimer;

// // Reset the timer on any user activity
// document.onmousemove = resetTimer;
// document.onkeypress = resetTimer;




            