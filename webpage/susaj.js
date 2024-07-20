function show(){
    var slide1 = document.getElementById("slide");

    if(slide1.style.display === "flex"){
        slide1.style.display = "none";
    }
    else{
        slide1.style.display = "flex";
    }
}
function blog(){
    var slide = document.getElementById("menu");
    if(slide.style.display === "block"){
        slide.style.display = "none";
    }
    else{
        slide.style.display="block";
    }
}