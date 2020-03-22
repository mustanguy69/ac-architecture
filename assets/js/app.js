/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.scss');

const $ = require('jquery');
global.$ = global.jQuery = $;
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
require('bootstrap');

// or you can include specific pieces
// require('bootstrap/js/dist/tooltip');
// require('bootstrap/js/dist/popover');

$(document).ready(function() {
    $('[data-toggle="popover"]').popover();

    // This will load up TinyMCE on all textareas, add a load of useful bits and pieces, allow you to upload images
    // as base64 into the relevant textarea
    $(function () {
        tinymce.init({
            content_css : '/build/app.css',
            selector: "textarea",
            height: 400,
            plugins: [
                "advlist autolink lists link image imagetools charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textpattern"
            ],
            toolbar1: "undo redo | fullscreen | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link media image",
            toolbar2: "",
            paste_data_images: true,
            image_caption: false,
            image_title: true,
            automatic_uploads: true,
            file_picker_types: 'image',
            imagetools_toolbar: "rotateleft rotateright | flipv fliph | editimage imageoptions",
            setup: function (editor) {
                // This ensures the actual field TinyMCE is supplanting gets updated with content.
                editor.on('change', function () {
                    editor.save();
                });
            },
            image_advtab: true,
            file_picker_callback: function (callback, value, meta) {
                // This adds an extra button to the image menu and enables image uploads into the field as base64
                if (meta.filetype == 'image') {
                    var upload = $('#upload');
                    upload.trigger('click');
                    upload.on('change', function () {
                        var file      = this.files[0];
                        var reader    = new FileReader();
                        reader.onload = function (e) {
                            callback(e.target.result, {
                                alt: ''
                            });
                        };
                        reader.readAsDataURL(file);
                    });
                }
            }
        });
    });
});