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



//===========================Item Filter Category vanila==============================
let indicator = document.querySelector('.indicator').children;
let main = document.querySelector('.items').children;

for(let i=0; i<indicator.length; i++)
{
    indicator[i].onclick = function(){
        for(let x=0; x<indicator.length; x++)
        {
            indicator[x].classList.remove('active');
        }
        this.classList.add('active');
        const displayItems = this.getAttribute('data-filter');
        
        for(let z=0; z<main.length; z++)
        {
            main[z].style.transform = 'scale(0)';
            setTimeout(() => {
                main[z].style.display = 'none';
            }, 500);

            if((main[z].getAttribute('data-category') == displayItems) || displayItems =='all' )
            {
                main[z].style.transform = 'scale(1)';
                setTimeout(() => {
                    main[z].style.display = 'block';
                }, 500);
            }
        }

    }
}


