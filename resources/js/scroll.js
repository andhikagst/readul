$('#scroll-right-btn').on('click', function () {
    $('#book-container').animate({
        scrollLeft: $('#book-container').scrollLeft() + 400
    }, 500);
    
});

$('#scroll-left-btn').on('click', function () {
    $('#book-container').animate({
        scrollLeft: $('#book-container').scrollLeft() - 400
    }, 500);
});

$('#book-container').on('scroll', function () {
    const $this = $(this);
    const scrollLeft = $this.scrollLeft();
    const scrollWidth = $this[0].scrollWidth;
    const clientWidth = $this[0].clientWidth;

    
    
    if (scrollLeft === 0) {
        hiddenLeft();
        showRight();
    } else if (scrollLeft + clientWidth >= scrollWidth) {
        hiddenRight();
        showLeft();
    } else {
        showLeft();
        showRight();
    }

});

function hiddenLeft() {
    $('#scroll-left').addClass('hidden');
    $('#scroll-gradient-l').addClass('hidden');
}

function showLeft() {
    $('#scroll-left').removeClass('hidden');
    $('#scroll-gradient-l').removeClass('hidden');
}

function hiddenRight() {
    $('#scroll-right').addClass('hidden');
    $('#scroll-gradient-r').addClass('hidden');
}

function showRight() {
    $('#scroll-right').removeClass('hidden');
    $('#scroll-gradient-r').removeClass('hidden');
}