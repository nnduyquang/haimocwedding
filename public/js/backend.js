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
$('#chooseBanDo').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showBanDo").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
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
$('#chooseAnhMiniAlbum').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showAnhMiniAlbum").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
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
$('input[type=checkbox][name=IsCampaign]').change(function () {
    if ($(this).prop("checked")) {
        $('input[name=price]').removeAttr("disabled");
    }
    else {
        $('input[name=price]').attr("disabled", "disabled");
    }
});
$('#summernote-album').summernote({
    height: 500,
    minHeight: null,
    maxHeight: null,
    focus: true,
});




$('#chooseAnhSlider').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showSlider").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});
$('#chooseAnhDaiDienDanhMuc').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showAnhDaiDienDanhMuc").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});
$('#chooseAnhAoCuoi').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showAnhAoCuoi").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});
$('#chooseAnhDaiDienTrang').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showAnhDaiDienTrang").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});
$('#chooseAnhMini').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showAnhMinid").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});
$('#summernote-trang').summernote({
    height: 500,
    minHeight: null,
    maxHeight: null,
    focus: true,
});