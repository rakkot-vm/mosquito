$(document).ready(function() {
    $('#value-text').summernote();

    $('.delete-confirm').click(function () {
        return confirm('Are you sure?');
    });

    initAdditionalItemFunctions();
});

$('[name="value-type"]').click(function(e){
    // e.target.name;
    $('.value-fields input[type=file]').toggle();
    $('.value-fields .textarea').toggle();
});

$('.popup-toggle').click(function(e){
    if(e.target.checked){
        e.target.value = 'on';
        $('input[type=hidden][name=' + e.target.name +']').remove();
    }else{
        $('<input type="hidden" name="'+ e.target.name +'" value="off">').insertBefore(e.target);
    }
});

var newTabId = 0;
$('#add_acc_item').click(function(e){
    newTabId = newTabId+1;

    $('#add_acc_item').before(
        '<div class="row accordion-item tab_new'+newTabId+'">' +

        '    <input id="" name="sec3_acc[new'+newTabId+'][setting_id]" type="hidden" value="'+accordion_setting_id+'">' +

        '    <div class="form-group col-sm-12">' +
        '        <label for="sec3_acc[new'+newTabId+'][title]">Title:</label>' +
        '        <input class="form-control" name="sec3_acc[new'+newTabId+'][title]" type="text" value="" id="sec3_acc[new'+newTabId+'][title]">' +
        '    </div>'+

        '    <div class="form-group col-sm-6">' +
        '        <label for="sec3_acc[new'+newTabId+'][img]">Image:</label>' +
        '        <input name="sec3_acc[new'+newTabId+'][img]" type="file" id="sec3_acc[new'+newTabId+'][img]">' +

        '        <div class="row">' +
        '            <div class="col-sm-6">' +
        '                <label for="sec3_acc[new'+newTabId+'][imgAlt]">Img alt:</label>' +
        '                <input class="form-control" name="sec3_acc[new'+newTabId+'][imgAlt]" type="text" value="" id="sec3_acc[[new'+newTabId+'][imgAlt]">' +
        '            </div>' +
        '            <div class="col-sm-6">' +
        '                <label for="sec3_acc[new'+newTabId+'][imgTitle]">Img title:</label>' +
        '                <input class="form-control" name="sec3_acc[new'+newTabId+'][imgTitle]" type="text" value="" id="sec3_acc[[new'+newTabId+'][imgTitle]">' +
        '            </div>' +
        '        </div>' +
        '    </div>' +

        '    <div class="form-group col-sm-6">' +
        '        <label for="sec3_acc[new'+newTabId+'][text]">Text:</label>' +
        '        <textarea class="form-control" name="sec3_acc[new'+newTabId+'][text]" cols="50" rows="10" id="sec3_acc[new'+newTabId+'][text]"></textarea>'+

        '        <div class="btn-del-tab">' +
        '            <button type="button" class="btn btn-danger pull-right del_acc_item" id="del_acc_item_new'+newTabId+'" value="new'+newTabId+'" onclick="delNewTab(newTabId)">Delete</button>' +
        '        </div>' +
        '    </div>' +
        '    <hr>' +
        '</div>');
});

/* Del/Cancel del accordion tabs*/
$('.del_acc_item').click(function(e){
    let id = e.target.value;

    $('[name="sec3_acc['+id+'][tab_id]"][value="'+id+'"]').attr('name','sec3_acc['+id+'][del_id]');
    toggleDel(e);
});
$('.cancel_del_acc_item').click(function(e){
    let id = e.target.value;

    $('[name="sec3_acc['+id+'][del_id]"][value="'+id+'"]').attr('name','sec3_acc['+id+'][tab_id]');
    toggleDel(e);
});

function delNewTab(id)
{
    $('.tab_new'+id)[0].remove();
}

function toggleDel(e){
    $('.tab_'+e.target.value+' input').toggle();
    $('.tab_'+e.target.value+' img').toggle();
    $('.tab_'+e.target.value+' label').toggle();
    $('.tab_'+e.target.value+' textarea').toggle();
    $('#del_acc_item_'+e.target.value).toggle();
    $('#cancel_del_acc_item_'+e.target.value).toggle();
}

$(".image-upload").change(function(input) {
    if (input.target.files && input.target.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#preview-'+input.target.name).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.target.files[0]);
    }
});

function initAdditionalItemFunctions()
{
    $(".delete-additional").click(function (e) {
        if (!confirm('Are you sure?')) return;

        $(e.target).parents('.additional-item').remove();
    });


    $(".additional-id").change(function(e) {
        let elementsIds = ['', '[title]', '[value]'];
        let oldName = e.target.name;

        elementsIds.forEach(function (id) {
            $('[for="'+ oldName + id +'"]').attr('for', 'additional['+ e.target.value +']'+ id);
            $('[name="'+ oldName + id +'"]').attr('name', 'additional['+ e.target.value +']'+ id);
        });
    });
}
$(".add-additional").click(function(e) {
    let additional_item = '<div class="col-xs-12 col-xs-6 additional-item">' +
    '    <hr>' +
    '    <div class="row">' +
    '        <div class="col-xs-6">' +
    '            <div class="form-group">' +
    '                <label for="additional[null]">ID *:</label>' +
    '                <input class="form-control additional-id" name="additional[null]" type="text" value="" id="additional[null]">' +
    '            </div>' +
    '        </div>' +
    '        <div class="col-xs-2">' +
    '            <button type="button" class="btn btn-block btn-danger btn-xs delete-additional">' +
    '                <i class="fa fa-trash-o"></i>' +
    '            </button>' +
    '        </div>' +
    '    </div>' +
    '    <div class="row">' +
    '        <div class="col-xs-12 col-lg-6">' +
    '            <div class="form-group">' +
    '                <label for="additional[null][title]">Title *:</label>' +
    '                <input class="form-control" name="additional[null][title]" type="text" value="" id="additional[null][title]">' +
    '            </div>' +
    '        </div>' +
    '        <div class="col-xs-12 col-lg-6">' +
    '            <div class="form-group">' +
    '                <label for="additional[null][value]">Value *:</label>' +
    '                <input class="form-control" name="additional[null][value]" type="text" value="" id="additional[null][title]">' +
    '            </div>' +
    '        </div>' +
    '    </div>' +
    '</div>';

    $('.additional-items').append(additional_item);

    initAdditionalItemFunctions();
});