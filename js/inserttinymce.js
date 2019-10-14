tinymce.init({
    selector: '#mytextarea',
    plugins: 'link, image, pageembed code fullscreen',
    width: 500,
    height: 250,
    menubar: 'view format',
    menu: {
        view: { title: 'View', items: 'code' },
        format: { title: 'Format', items: 'codeformat' }
    },
    toolbar: 'bold italic underline | fontsizeselect forecolor | link | image | removeformat customcleancode customhtmlview fullscreen',
    resize: false
});