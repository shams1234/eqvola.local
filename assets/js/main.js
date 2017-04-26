/**
 * Created by shs on 04/24/17.
 */
$(document).ready(function () {

    scrollTo();
    hideNotifications();
    fileUploadPreview();

});

function scrollTo(){

    $('body').on('click', '.attention', function (e) {

        if (this.hash !== "") {
            e.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                window.location.hash = '';

            });
            $('#u_pwd').focus();
        }

    });

}

function hideNotifications(){

    if($('.notification').length){

        $('.notification').delay(5000).fadeOut('slow');

    }

}

function fileUploadPreview () {
    $.uploadPreview({
        input_field: "#u_avatar",   // Default: .image-upload
        preview_box: "#image-preview",  // Default: .image-preview
        label_field: "#image-label",    // Default: .image-label
        label_default: "Choose Image",   // Default: Choose File
        label_selected: "Change Image",  // Default: Change File
        no_label: false,                // Default: false
        success_callback: null          // Default: null
    });

}