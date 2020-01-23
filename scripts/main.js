function setUserName() {
  var myName = prompt('Digite seu nome');
  localStorage.setItem('name', myName);
  myHeading.innerHTML = 'Mozilla is cool, ' + myName;
}


/*
document.querySelector('html').onclick = function() {
    alert('Ouch! Stop poking me!');
}*/

var myButton = document.querySelector('button');
var myHeading = document.querySelector('h1');

/*
if(!localStorage.getItem('name')) {
  setUserName();
} else {
  var storedName = localStorage.getItem('name');
  myHeading.innerHTML = 'Mozilla is cool, ' + storedName;
}
*/

myButton.onclick = function() {
  setUserName();
}


var myImage = document.querySelector('img');
myImage.onclick = function() {
    var mySrc = myImage.getAttribute('src');
    if(mySrc === 'images/firefox-icon.png') {
      myImage.setAttribute ('src','images/img2.jpg');
    } else {
      myImage.setAttribute ('src','images/firefox-icon.png');
    }
}
