$(document).ready(function () {

$(".travel-a").on('click', function () {
   var code = $(this).find("travel_cod").val();
    $.ajax({
        url: BASE_URL + '/travels/'+code,
        method: "GET",
        beforeSend: function () {

        },
        success: function (res) {

        }
    });


});

});