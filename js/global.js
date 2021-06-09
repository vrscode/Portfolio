$(document).ready(function(){
    // let tick = false;
    let a = 0;
    $('html, body, *').mousewheel(function(e, delta){
        console.log("wheel")
    a -= delta * 10;
    TweenMax.to('html, body, *', 0.3, {scrollTo:{y:0, x:a}});
    e.preventDefault();
});
});
