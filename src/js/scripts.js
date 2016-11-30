$("#preview").submit(function(e) {

    var url = "manager/preview.php";

    $.ajax({
        type: "POST",
        url: url,
        data: $("#preview").serialize(),
        success: function(data) {
            $('#results').fadeOut('100', function() {
                $('#results').fadeIn('100').html(data);

            });
        },

    });

    e.preventDefault();
});

var $loading = $('.preloader').hide();
$(document)
    .ajaxStart(function() {
        $loading.fadeIn('3000');
    })
    .ajaxStop(function() {
        $loading.fadeOut('3000');
    });
