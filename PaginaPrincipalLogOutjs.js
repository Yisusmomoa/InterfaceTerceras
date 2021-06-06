window.onscroll = function(){
    AddOrRemove()
};

var Nav = document.getElementById("EjNav");
var NavPosition = Nav.offsetTop;

function AddOrRemove(){
    if(window.pageYOffset >= NavPosition){
        Nav.classList.add("Paste");
    }
    else{
        Nav.classList.remove("Paste");
    }
}


function menuToggle(){
const toggleMenu=document.querySelector('.menu');
toggleMenu.classList.toggle('active');

}