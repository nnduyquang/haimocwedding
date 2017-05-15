$('#chooseAnhAoCuoi').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showAnhAoCuoi").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});