let i=0;
let imgArray=[
    "slide-1.jpg",
    "slide-2.jpg",
    "slide-3.jpg",
    "slide-4.jpg",
    "slide-5.jpg",
];
function ndrroIMG(){
    document.getElementById('slideshow').src=imgArray[i];
    if(i<imgArray.length-1){
        i++;
    }
    else {
        i=0;
    }
    setTimeout("ndrroIMG()",2500)
}
document.body.addEventListener('load',ndrroIMG());

    home.onclick=() =>{
    window.location.assign("index2.html")
    }   
    travel.onclick=() =>{
        window.location.assign("index1.html")
    }
    aboutus.onclick=() =>{
        window.location.assign("index3.html")
    }
    login.onclick=() =>{
        window.location.assign("index5.html")
    }