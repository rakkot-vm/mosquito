$(document).ready(function() {
    $('#value-text').summernote();
});

$('[name="value-type"]').click(function(e){
    // e.target.name;
    $('.value-fields input[type=file]').toggle();
    $('.value-fields .textarea').toggle();
});

var newTabId = 0;
$('#add_acc_item').click(function(e){
    newTabId = newTabId+1;

    $('#add_acc_item').before(
        '<div class="row accordion-item tab_new'+newTabId+'">\n' +

        '    <input id="" name="tab_id" type="hidden" value="new'+newTabId+'">' +
        '    <input id="" name="setting_id" type="hidden" value="new'+newTabId+'">' +

        '    <div class="form-group col-sm-12">\n' +
        '        <label for="sec3_acc[new'+newTabId+'][title]">Title:</label>' +
        '        <input class="form-control" name="sec3_acc[new'+newTabId+'][title]" type="text" value="" id="sec3_acc[new'+newTabId+'][title]">' +
        '    </div>'+

        '    <div class="form-group col-sm-6">' +
        '        <label for="sec3_acc[[new'+newTabId+'][img]">Image:</label>' +
        '        <input name="sec3_acc[[new'+newTabId+'][img]" type="file" id="sec3_acc[[new'+newTabId+'][img]">' +

        '        <div class="row">' +
        '            <div class="col-sm-6">' +
        '                <label for="sec3_acc[[new'+newTabId+'][imgAlt]">Img alt:</label>' +
        '                <input class="form-control" name="sec3_acc[[new'+newTabId+'][imgAlt]" type="text" value="" id="sec3_acc[[new'+newTabId+'][imgAlt]">' +
        '            </div>' +
        '            <div class="col-sm-6">' +
        '                <label for="sec3_acc[[new'+newTabId+'][imgTitle]">Img title:</label>' +
        '                <input class="form-control" name="sec3_acc[[new'+newTabId+'][imgTitle]" type="text" value="" id="sec3_acc[[new'+newTabId+'][imgTitle]">' +
        '            </div>' +
        '        </div>' +
        '    </div>' +

        '    <div class="form-group col-sm-6">' +
        '        <label for="sec3_acc[[new'+newTabId+'][imgText]">Text:</label>' +
        '        <input class="form-control" name="sec3_acc[[new'+newTabId+'][imgText]" type="text" id="sec3_acc[[new'+newTabId+'][imgText]">' +

        '        <div class="btn-del-tab">' +
        '            <button type="button" class="btn btn-danger pull-right del_acc_item" id="del_acc_item_new'+newTabId+'" value="new'+newTabId+'" onclick="delNewTab(newTabId)">Delete</button>' +
        '        </div>' +
        '    </div>' +
        '    <hr>' +
        '</div>');
});

/* Del/Cancel del accordion tabs*/
$('.del_acc_item').click(function(e){
    $('[name="tab_id"][value="'+e.target.value+'"]').attr('name','del_id');
    toggleDel(e);
});
$('.cancel_del_acc_item').click(function(e){
    $('[name="del_id"][value="'+e.target.value+'"]').attr('name','tab_id');
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
    $('#del_acc_item_'+e.target.value).toggle();
    $('#cancel_del_acc_item_'+e.target.value).toggle();
}