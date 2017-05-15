$('#chooseAnhDaiDienDanhMuc').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showAnhDaiDienDanhMuc").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});