var box = document.querySelector(".btn button:first-child");
var box2 = document.querySelector(".btn button:last-child");
var h2 = document.querySelector("h2");
var h1 = document.querySelector("h1");

var boxVideo = document.getElementById("video");

// console.log(pos)

function repos(){
    var pos = 0, p = 0;
    pos =([-1,1][Math.random()*2|0]) *Math.random()*300;
    po =([Math.random() < 0.5 ? -1 : 1  ]) *Math.random()*250;
    box.style.position = "relative"; 
    box.style.left = pos +"px"; 
    box.style.right = pos +"px"; 
    box.style.bottom = po +"px"; 
    box.style.top = po +"px"; 
}

function myf(){
var video = document.querySelector("video");
    var video = '<video autoplay><source type="video/mp4" src="./assets/images/IMG_1173.MP4"><source type="video/mp4" src="./assets/images/IMG_1173.MP4"></video>'
    box.style.display = "none";
    box2.style.display = "none";
    h2.style.display = "block";
    h1.style.display = "none";
    boxVideo.innerHTML = video
}


