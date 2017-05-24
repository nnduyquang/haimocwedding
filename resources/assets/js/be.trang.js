$('#chooseAnhDaiDienTrang').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showAnhDaiDienTrang").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});
$('#summernote-trang').summernote({
    height: 500,
    minHeight: null,
    maxHeight: null,
    focus: true,
});