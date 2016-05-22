//javaScript file for making bottom images show and switche

//window.addEventListener("resize", imagesShow);
$(document).ready(function(){
        $("#images").ready(imagesShow);

});
$(window).resize(imagesShow);

function imagesShow(){

    var images = document.getElementById('images').getElementsByClassName('image');
    var i;
    alert(screen.width);
    for(i=0;i<images.length;i++){

        if(screen.width<768){
            if(i>2){
                images[i].style.display="none";
            }
        }else if((screen.width) >=992){
            if(i>4){
                images[i].style.display="none";
            }
        }else if((screen.width) >=1200){
            if(i>6){
                images[i].style.display="none";
            }
        }else{
            if(i>3){
                images[i].style.display="none";
            }
        }
    }

};
