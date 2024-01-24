let i=0;
let imgArray=[
    "../assets/slide-1.jpg",
    "../assets/slide-2.jpg",
    "../assets/slide-3.jpg",
    "../assets/slide-4.jpg",
    "../assets/slide-5.jpg",
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

