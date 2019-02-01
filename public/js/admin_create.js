$(document).ready(function() {
    $('#value-text').summernote();
});

$('[name="value-type"]').click(function(e){
    // e.target.name;
    $('.value-fields input[type=file]').toggle();
    $('.value-fields .textarea').toggle();
});

$('#add_accr_item').click(function(e){
    // e.target.name;
    $('.value-fields input[type=file]').toggle();
    $('.value-fields .textarea').toggle();
});
$('#del_accr_item').click(function(e){
    // e.target.name;
    $('.value-fields input[type=file]').toggle();
    $('.value-fields .textarea').toggle();
});
