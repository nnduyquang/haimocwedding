$('#btnThemAnhAlbum').click(function () {
    $('#dropzonePreview').slideToggle('slow');
});
Dropzone.autoDiscover = false;
var myDropzone = new Dropzone('div#my-awesome-dropzone', {
    url: "create/uploadImage",
    autoProcessQueue: false,
    uploadMultiple: true,
    addRemoveLinks: true,
    maxFiles: 10,
    parallelUploads: 10,
    dictRemoveFile: 'Remove',
    init: function () {
        var myDropzone = this;
        $("#btnCreateAlbum").on('click', function (e) {
            myDropzone.processQueue();
        });
    },
    success: function(file, response){
        alert("ok");
    }
});




