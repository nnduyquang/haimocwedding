$('#chooseHinhDiaDiem').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showHinhDiaDiem").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});
$('#chooseHinhDiaDiem1').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showHinhDiaDiem1").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});
$('#chooseHinhDiaDiem2').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showHinhDiaDiem2").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});
$('#chooseHinhDiaDiem3').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showHinhDiaDiem3").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});
$('#chooseHinhNenDiaDiem').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showHinhNenDiaDiem").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});
$('#chooseHinhNenPhoBien').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showHinhNenPhoBien").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});