/**
 * slideIndex = contains current slide position
 * slides = array that contains all images
 * dots = contains dot elements
 * captionText = holds the current caption Text
 */
var slideIndex, slides, dots, captionText;
var timer = null;
dots = []; //intialise new array dots

function initGallery() {
    slideIndex = 0;                                             //initialise current slide position to 0
    slides = document.getElementsByClassName("slide-holder");   //get from dom, all elements with classname slide-holder, ie get all the images, reivews and caption texts
    slides[slideIndex].style.opacity = 1;                       //make slide in array visible
    
    //Set Initial Caption Text Values
    captionTextTop = document.querySelector(".captionHolderTop .captionTextTop");               //Access class captionTextTop in captionHolderTop div
    captionTextTop.innerText = slides[slideIndex].querySelector(".captionTextTop").innerText;   //Change its text value from captionTextTop in current slide
    captionTextBot = document.querySelector(".captionHolderBot .captionTextBot");               //Access class captionTextBot in captionHolderBot div
    captionTextBot.innerText = slides[slideIndex].querySelector(".captionTextBot").innerText;   //Change its text value from captionTextBot in current slide
     
    var dotsContainer = document.getElementById("dotsContainer");   //get div with id="dotsContainer" from DOM

    //loop to create number of dots = number of images
    for(var i = 0; i < slides.length; i++){             //loop length of amount of slides
      var dot = document.createElement("span");         //create span element, save to var dot
      dot.classList.add("dots");                        //add class 'dots' to new span element
      dotsContainer.append(dot);                        //append the span element to the div, dotsContainer
      dot.setAttribute("onclick","moveSlide("+i+")");   //set attribute, onclick="moveSlide(i)"
      dots.push(dot);                                   //add to dots array
      
    }
    dots[slideIndex].classList.add("active");           //add 'active' class to current dot, relative to slide
}
function plusSlides(n) {    //called when arrow img clicked, dot clicked or every 6s interval
    moveSlide(slideIndex + n);  //moveSlide() called with index slideIndex adjusted
}
function moveSlide(n){  //Slides with be moved using CSS (Animations) and not JS 
    //i = used for loop
    //current = holds current slide
    //next = holds next slide
    var i, current, next, slideTextAnimClass;
    
    //Object tht hold vars to store css class for current and next class
    var moveSlideAnimClass = { 
        forCurrent : "",
        forNext : ""
    }

    if(n > slideIndex) {            //check if moving the slide to the right or right arrow clicked
        if(n >= slides.length){     //if slide at the end
            n = 0;                  //reset count to zero
        }
        moveSlideAnimClass.forCurrent="moveLeftCurrentSlide";   //move current slide to left
        moveSlideAnimClass.forNext="moveLeftNextSlide";         //move new slide in
        slideTextAnimClass="slideTextFromTop";                  //change caption text upwards
    }else if(n < slideIndex){                                   //if moving the slide to the left or left arrow clicked
        if(n < 0){                          //when 
            n = slides.length - 1;          //go to previous slide
        }
        moveSlideAnimClass.forCurrent="moveRightCurrentSlide";
        moveSlideAnimClass.forNext="moveRightPrevSlide";
        slideTextAnimClass="slideTextFromBottom"; //change caption text downwards
    }
    if(n != slideIndex){    //when slide needs to move left OR right
        next = slides[n]; //next slide to be viewed position
        current = slides[slideIndex]; //current slide position
        
        for (i = 0; i < slides.length; i++) { //reset all images classname, opacity and active
            slides[i].className = "slide-holder"; //set all images className to slide-holder
            slides[i].style.opacity = 0; //set all images opacity to 0
            dots[i].classList.remove("active"); //remove class active to all slides
        }
        current.classList.add(moveSlideAnimClass.forCurrent); //add class to current slide
        next.classList.add(moveSlideAnimClass.forNext); //add class to next slide
        dots[n].classList.add("active"); //make the relevant dot for slide = active
        slideIndex = n; //set current slide index as 
        
        //Setting the Top caption text
        captionTextTop.style.display="none";
        captionTextTop.className="captionTextTop" + slideTextAnimClass;
        captionTextTop.innerText=slides[n].querySelector(".captionTextTop").innerText;
        captionTextTop.style.display="block";
        //Setting the Bottom caption text
        captionTextBot.style.display="none";
        captionTextBot.className="captionTextBot" + slideTextAnimClass;
        captionTextBot.innerText=slides[n].querySelector(".captionTextBot").innerText;
        captionTextBot.style.display="block";
    }
}
function setTimer(){
    timer = setInterval(function(){plusSlides(1)}, 6000); //call plusSlider(1) every 6 secs
}
initGallery();      //sets the first slide
setTimer();         //call plusSlides(1) after 6s, then every 6s after