var drCustomFieldEvent = $('.custom-field-file .dropify').dropify({
    messages: dropifyMessages
});
drCustomFieldEvent.on("dropify.afterClear", function(event, element) {
        var elementName = element.element.name;
        // find the hidden input field and remove the value
        $('input[type=hidden][name="' + elementName + '"]').val('');
});
<?php /**PATH /home/u594498081/domains/crm.rrpateloverseas.com/public_html/resources/views/components/forms/custom-field-filejs.blade.php ENDPATH**/ ?>