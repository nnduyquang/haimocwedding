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
$('#chooseIcon').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showIcon").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});
$('#btnThemAnhAlbum').click(function () {
    $('.file-input-new').slideToggle('slow');
});
$('#chooseAnhDaiDienAlbum').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showAnhDaiDienAlbum").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});

$("#input-id").fileinput({

    showUpload: false,
});
$('.is-remove').each(function () {
    var $this = $(this);
    $this.click(function () {
        var state = $this.attr('data-id');
        if (state == 1) {
            $this.removeClass('btn-primary');
            $this.addClass('btn-danger');
            $this.attr('data-id', 0);
            $this.html('Hủy');
            $value = $this.val() + '-xoa';
            $this.val($value);
            var id = $this.attr('id');
            var lastid = id.split("-")[2];
            $('#is-remove-hd-' + lastid).val($value);
        } else if (state == 0) {
            $this.addClass('btn-primary');
            $this.removeClass('btn-danger');
            $this.attr('data-id', 1);
            $this.html('Xóa');
            $value = $this.val().replace('-xoa', '');
            $this.val($value);
            var id = $this.attr('id');
            var lastid = id.split("-")[2];
            $('#is-remove-hd-' + lastid).val($value);
        }
    });
});


