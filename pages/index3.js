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

