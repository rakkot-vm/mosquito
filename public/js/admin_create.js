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

        '    <input id="" name="sec3_acc[new'+newTabId+'][setting_id]" type="hidden" value="'+accordion_setting_id+'">' +

        '    <div class="form-group col-sm-12">\n' +
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
    $('[name=sec3_acc['+id+'][del_id]"][value="'+id+'"]').attr('name','sec3_acc['+id+'][del_id]');
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

$('.delete-confirm').click(function () {
   return confirm('Are you sure?');
});


// --------------------
var stripe = Stripe('pk_test_AcmqjKi2CpY5PgKpGDwKp8SV', {
    betas: ['payment_intent_beta_3']
});

var elements = stripe.elements();
var cardElement = elements.create('card');
cardElement.mount('#card-element');

// ----
var cardholderName = document.getElementById('cardholder-name');
var cardButton = document.getElementById('card-button');
var clientSecret = cardButton.dataset.secret;

cardButton.addEventListener('click', function(ev) {
    stripe.handleCardPayment(
        clientSecret, cardElement, {
            source_data: {
                owner: {name: cardholderName.value}
            }
        }
    ).then(function(result) {
        if (result.error) {
            alert('bad');
        } else {
            alert('good');
        }
    });
});