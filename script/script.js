
$(document).ready(function () {
    $('.slider_des').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        fade: true,
        cssEase: 'linear',
        nextArrow: $('.right'),
        prevArrow: $('.left')
    });
});

$(".slider_des").on("afterChange", function (event, slick, currentSlide, nextSlide) {
    $(".slide__number").text(`0${currentSlide + 1}/0${slick.slideCount}`);
});

function addSliderAPI(imgList) {
    imgList.forEach((itemImg) => {
        $(`.slider2`).append(
            `<div class="gallery__cel">
           <img class="slider-2-img" src="${itemImg.webformatURL}" alt="photo telephone">
       </div>` )
    })
}

function imgAPI() {
    const link = `https://pixabay.com/api/?key=20835570-260a5d18818fba36f5dd73fba&q=retro`;
    fetch(link)
        .then((response) => {
            let myresult = response.json()
            return myresult;
        })



        .then((result) => {
            addSliderAPI(result.hits);
            $('.slider2').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                cssEase: 'linear',
                nextArrow: $('.right_com'),
                prevArrow: $('.left_com')
            });
        })
        .catch((error) => {
            console.log(error);
        })
}

imgAPI();


$(document).ready(function () {
    const overlay = $('#overlay'); 
    const open_modal = $('.open_modal'); 
    const close = $('.modal_close, #overlay'); 
    const modal = $('.modal_div'); 

    open_modal.click(function (event) { 
        event.preventDefault(); 
        const div = $(this).attr('href'); 
        overlay.fadeIn(400, 
            function () { 
                $(div) 
                    .css('display', 'block')
                    .animate({ opacity: 1, top: '50%' }, 200);
            });
    });

    close.click(function () { 
        modal 
            .animate({ opacity: 0, top: '45%' }, 200, 
                function () { 
                    $(this).css('display', 'none');
                    overlay.fadeOut(400);
                }
            );
    });
});


$('#subscribeBtn').click(function (event) {
    $('#modal').toggleClass('activeModal');
})

$('#closeBtn').click(() => $('#modal').toggleClass('activeModal'));

$('.modal').click(function (e) {
    if ($(e.target).is('.modal')) {
        $('#modal').toggleClass('activeModal');
    }
});