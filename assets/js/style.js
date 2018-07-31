  
  





$('.showloginform').click(function() {
    $('.registerationform').slideUp('fast');
    $('.loginform').slideDown(1500);
    $('.showloginformtext').slideUp('fast');
    $('.showregisterformtext').slideDown('fast');

});

$('.showregisterform').click(function() {
    $('.loginform').slideUp('fast');
    $('.registerationform').slideDown(1500);
    $('.showregisterformtext').slideUp('fast');
    $('.showloginformtext').slideDown('fast');
});


$('#subsnow').click(function() {
    var url = 'https://www.twenty.zone/en/h/newsletter';
    var email = $('#newsemail').val();



    $.ajax({
        type: "POST",
        url: url,
        data: {email: email},
        beforeSend: function(data) {
            console.log(data);
            $('.formcontainer').hide('fast');
            $('.formloading').show();
        },
        success: function(data) {
            //show thank you
            $('.formloading').hide();
            $('.thankyou').show();
        }


    });
});








