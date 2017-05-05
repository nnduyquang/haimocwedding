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
    $('#dropzonePreview').slideToggle('slow');
});
Dropzone.autoDiscover = false;
var myDropzone = new Dropzone('form#dropzoneForm', {
        // url:"{{ route('albums.store') }}",
        autoProcessQueue: false,
        previewsContainer: '#dropzonePreview',
        uploadMultiple: true,
        init: function () {
            var myDropzone = this;
            $("#btnCreateAlbum").on('click', function (e) {
                myDropzone.processQueue();
            });

        } // in
    });


