$(document).on('click', '.arr-down-one', function() {
    $('.one').css('display', 'block');
    $('.arr-down-one').css('display', 'none');
    $('.arr-up-one').css('display', 'block');
})

$(document).on('click', '.arr-up-one', function() {
    $('.one').css('display', 'none');
    $('.arr-down-one').css('display', 'block');
    $('.arr-up-one').css('display', 'none');
})

//two
$(document).on('click', '.arr-down-two', function() {
    $('.two').css('display', 'block');
    $('.arr-down-two').css('display', 'none');
    $('.arr-up-two').css('display', 'block');
})

$(document).on('click', '.arr-up-two', function() {
    $('.two').css('display', 'none');
    $('.arr-down-two').css('display', 'block');
    $('.arr-up-two').css('display', 'none');
})

//three
$(document).on('click', '.arr-down-three', function() {
    $('.three').css('display', 'block');
    $('.arr-down-three').css('display', 'none');
    $('.arr-up-three').css('display', 'block');
})

$(document).on('click', '.arr-up-three', function() {
    $('.three').css('display', 'none');
    $('.arr-down-three').css('display', 'block');
    $('.arr-up-three').css('display', 'none');
})

//four
$(document).on('click', '.arr-down-four', function() {
    $('.four').css('display', 'block');
    $('.arr-down-four').css('display', 'none');
    $('.arr-up-four').css('display', 'block');
})

$(document).on('click', '.arr-up-four', function() {
    $('.four').css('display', 'none');
    $('.arr-down-four').css('display', 'block');
    $('.arr-up-four').css('display', 'none');
})

//five
$(document).on('click', '.arr-down-five', function() {
    $('.five').css('display', 'block');
    $('.arr-down-five').css('display', 'none');
    $('.arr-up-five').css('display', 'block');
})

$(document).on('click', '.arr-up-five', function() {
    $('.five').css('display', 'none');
    $('.arr-down-five').css('display', 'block');
    $('.arr-up-five').css('display', 'none');
})

//six
$(document).on('click', '.arr-down-six', function() {
    $('.six').css('display', 'block');
    $('.arr-down-six').css('display', 'none');
    $('.arr-up-six').css('display', 'block');
})

$(document).on('click', '.arr-up-six', function() {
    $('.six').css('display', 'none');
    $('.arr-down-six').css('display', 'block');
    $('.arr-up-six').css('display', 'none');
})

//seven
$(document).on('click', '.arr-down-seven', function() {
    $('.seven').css('display', 'block');
    $('.arr-down-seven').css('display', 'none');
    $('.arr-up-seven').css('display', 'block');
})

$(document).on('click', '.arr-up-seven', function() {
    $('.seven').css('display', 'none');
    $('.arr-down-seven').css('display', 'block');
    $('.arr-up-seven').css('display', 'none');
})

//eight
$(document).on('click', '.arr-down-eight', function() {
    $('.eight').css('display', 'block');
    $('.arr-down-eight').css('display', 'none');
    $('.arr-up-eight').css('display', 'block');
})

$(document).on('click', '.arr-up-eight', function() {
    $('.eight').css('display', 'none');
    $('.arr-down-eight').css('display', 'block');
    $('.arr-up-eight').css('display', 'none');
})

//nine
$(document).on('click', '.arr-down-nine', function() {
    $('.nine').css('display', 'block');
    $('.arr-down-nine').css('display', 'none');
    $('.arr-up-nine').css('display', 'block');
})

$(document).on('click', '.arr-up-nine', function() {
    $('.nine').css('display', 'none');
    $('.arr-down-nine').css('display', 'block');
    $('.arr-up-nine').css('display', 'none');
})

//ten
$(document).on('click', '.arr-down-ten', function() {
    $('.ten').css('display', 'block');
    $('.arr-down-ten').css('display', 'none');
    $('.arr-up-ten').css('display', 'block');
})

$(document).on('click', '.arr-up-ten', function() {
    $('.ten').css('display', 'none');
    $('.arr-down-ten').css('display', 'block');
    $('.arr-up-ten').css('display', 'none');
})

//eleven
$(document).on('click', '.arr-down-eleven', function() {
    $('.eleven').css('display', 'block');
    $('.arr-down-eleven').css('display', 'none');
    $('.arr-up-eleven').css('display', 'block');
})

$(document).on('click', '.arr-up-eleven', function() {
    $('.eleven').css('display', 'none');
    $('.arr-down-eleven').css('display', 'block');
    $('.arr-up-eleven').css('display', 'none');
})

//radio-button
$('.plan').click(function(e){
    if (e.ctrlKey) {
        $(this).prop('checked', false);
    }
});