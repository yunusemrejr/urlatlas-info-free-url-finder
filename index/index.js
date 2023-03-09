

document.getElementById('home').addEventListener('click',function(){

window.location.href="https://www.urlatlas.info";

});

document.getElementById('tutorial').addEventListener('click',function(){

bootbox.alert({  
message: '<h3 style="color:#258;"><i aria-hidden="true" class="fa fa-graduation-cap"></i> Tutorial</h3><br/> <p style="color:#258;">Step #1: Enter any URL into the input box<br/>Step #2: Click on the "Go" button and wait for the parsing and WHOIS results to load.</p>',

 });});

document.getElementById('contact').addEventListener('click',function(){

bootbox.alert({  
message: '<h3 style="color:#258;"><i aria-hidden="true" class="fa fa-phone"></i> Contact Us</h3><br/> <a href="mailto:urlatlasinfo@gmail.com" style="color:#258;">urlatlasinfo@gmail.com</a>',

 });});
 

document.getElementById('about').addEventListener('click',function(){

bootbox.alert({  
message: '<h3 style="color:#258;"><i aria-hidden="true" class="fa fa-info-circle"></i> About</h3><br/> <p style="color:#258;">"urlatlas.info - Free URL Parser & WHOIS" is an open-source and free web tool created by Yunus Emre Vurgun in March 2023, designed to help you get website details from URLs.</p>',

 });});
 
 