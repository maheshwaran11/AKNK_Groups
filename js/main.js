$(function(){

    $("body").click(function(event){
        if( document.getElementById("menuIcon").isSameNode(event.target) 
            || document.getElementById("menuIcon").contains(event.target)) {
                if($('.menu').hasClass('mobileMenu')) {
                    $('.menu').removeClass('mobileMenu');
                    $('body').removeClass('mobileMenuOpen');
                    $('.menuIcon i').html("menu");
                } else {
                    $('.menu').addClass('mobileMenu');
                    $('body').addClass('mobileMenuOpen');
                    $('.menuIcon i').html("close");
                }
        }
        else {
            if($('body').hasClass('mobileMenuOpen')) {
                $('.menu').removeClass('mobileMenu');
                $('body').removeClass('mobileMenuOpen');
                $('.menuIcon i').html("menu");
            }
        }
    });

    $('.bookLink a, .bookAppointment').bind('click', function(){
        popup('bookFormPopup');
    });

    $('.modal-header button').on('click', function(){
        $('body').removeClass('popupOpen');
        $(this).closest('.overlayContainer').removeClass('popupShow');
    });
    
    
    
    $('#bookingFormModal #sendBtn').on('click', function() {
        $('#bookingFormModal .errorMsg').html('');
        $mob = $('#bookingFormModal #mobile').val();
        if($mob === '') {
            $('#bookingFormModal .errorMsg').html('<span>Enter your mobile number</span>');
        } else {
            $('#bookingFormModal .errorMsg').html('');
            $('#bookingFormModal .loader').removeClass('d-none');
            $form = document.getElementById('bookingForm1');
            $formData = new FormData($form);
            $form_values = Object.fromEntries($formData);
            console.log($form_values);
            $.ajax({
                type: "POST",
                url: "./admin/api/booking_enquiry.php",
                data: { data: $form_values },
                dataType: "JSON",
                success: function (response) {
                    $('#bookingFormModal .loader').addClass('d-none');
//                    $('.modal-header').addClass('d-none');
                    $('#bookingFormModal .modal-footer').addClass('d-none');
                    $('#bookingFormModal .respMsg').removeClass('d-none');
                    $('#bookingFormModal #bookingForm1').hide();
                    console.log(response);
                    if(response.status == 1) {
                        $('#bookingFormModal .respMsg i').html('mail');
                        $('#bookingFormModal .respMsg').addClass('success');
                        $('#bookingFormModal .respMsg p').html(response.info);
                    } else {
                        $('#bookingFormModal .respMsg i').html('mail');
                        $('#bookingFormModal .respMsg').addClass('error');
                        $('#bookingFormModal .respMsg p').html(response.info);
                    }

                }
            });
        }
    });
    
    
    $('.btn').append("<span class='material-icons'>arrow_forward_ios</span>");
    
    
});



function popup(id) {
    var elem = '#'+id;
    console.log(id);
    if($(elem).hasClass('popupShow')) {
        $('body').removeClass('popupOpen');
        $(elem).removeClass('popupShow');
    } else {
        $('body').addClass('popupOpen');
        $(elem).addClass('popupShow');
    }
}

$(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
       $('body').addClass('header_fixed');
    } else {
       $('body').removeClass('header_fixed');
    }
});