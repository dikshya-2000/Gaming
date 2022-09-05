const btnHam = document.querySelector('.ham-btn');
const btnTimes = document.querySelector('.times-btn');
const navBar = document.getElementById('nav-bar');

btnHam.addEventListener('click', function(){
    if(btnHam.className !== ""){
        btnHam.style.display = "none";
        btnTimes.style.display = "block";
        navBar.classList.add("show-nav");
    }
})

btnTimes.addEventListener('click', function(){
    if(btnHam.className !== ""){
        this.style.display = "none";
        btnHam.style.display = "block";
        navBar.classList.remove("show-nav");
    }
})

/*var i=0;
function read(){
    if(!i){
        document.getElementById("more").style.
        display="inline";
        document.getElementById("dots").style.
        display="none";
        document.getElementById("read").innerHTML="Read less";
        i=1;
    }
    else{
        document.getElementById("more").style.
        display="none";
        document.getElementById("dots").style.
        display="inline";
        document.getElementById("read").innerHTML="Read more";
        i=0;
    }
}*/



