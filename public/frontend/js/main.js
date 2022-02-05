/* ====================Back to top======================= */
const toTop = document.querySelector(".to-top");

window.addEventListener('scroll',() => {
    if(window.pageYOffset > 100)
    {
        toTop.classList.add('active_top');
    }
    else
    {
        toTop.classList.remove('active_top');
    }
})



/* ====================Product Display======================= */
function myFunctionimg(small_img){
    var full_img = document.getElementById('display_img');
    full_img.src=small_img.src;
    }




/*======================Search=================================*/
let search = document.querySelector(".search");
let clear = document.querySelector(".clear");

search.onclick = function()
{
    document.querySelector(".sesrch-box").classList.toggle('active');
}

clear.onclick = function()
{
    document.getElementById("search_input").value = "";
}


//=============================slight slider======================================

$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });