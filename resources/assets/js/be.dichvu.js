$('#chooseIcon').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showIcon").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});