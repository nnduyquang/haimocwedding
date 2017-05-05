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


