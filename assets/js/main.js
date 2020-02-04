$(function () {
    /**
     * Smooth scrolling to page anchor on click
     **/
    $("a[href*='#']:not([href='#'])").click(function () {
        if (
            location.hostname == this.hostname &&
            this.pathname.replace(/^\//, "") == location.pathname.replace(/^\//, "")
        ) {
            var anchor = $(this.hash);
            anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) + "]");
            if (anchor.length) {
                $("html, body").animate({
                    scrollTop: anchor.offset().top
                }, 500);
            }
        }
    });
});

function cardAnimation(myid) {
    let idNumber = myid.substr(-1, 1)
    let getCard = document.getElementById('effecthover' + idNumber);
    let getImage = document.getElementById("effectimage" + idNumber);
    let getText = document.getElementById("effecttext" + idNumber);
    if (getText.classList.contains("d-none")) {
        getImage.classList.add("d-none");
        getText.classList.remove("d-none");
        getText.classList.add("d-block");
    } else {
        getImage.classList.remove("d-none");
        getText.classList.remove("d-block");
        getText.classList.add("d-none");
    }
}

function removeCardAnimation(myid) {
    let idNumber = myid.substr(-1, 1)
    let getCard = document.getElementById('effecthover' + idNumber);
    let getImage = document.getElementById("effectimage" + idNumber);
    let getText = document.getElementById("effecttext" + idNumber);

    getImage.classList.remove("d-none");
    getText.classList.remove("d-block");
    getText.classList.add("d-none");
}

$('#carouselExample').on('slide.bs.carousel', function (e) {

    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
            // append slides to end
            if (e.direction == "left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});