$('#btnThemAnhAlbum').click(function () {
    $('#dropzonePreview').slideToggle('slow');
});
$('#chooseAnhDaiDienAlbum').change(function (event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#showAnhDaiDienAlbum").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
});
// Dropzone.autoDiscover = false;
// var myDropzone = new Dropzone('div#my-awesome-dropzone', {
//     url: "create/uploadImage",
//     autoProcessQueue: false,
//     uploadMultiple: true,
//     addRemoveLinks: true,
//     maxFilesize: 8,
//     maxFiles: 10,
//     dictRemoveFile: 'Xóa'
// });
// $("#btnCreateAlbum").on('click', function (e) {
//     myDropzone.processQueue();
// });
// $("input[name='image']").imageuploadify();
$("#input-id").fileinput({

    showUpload: false,
});


