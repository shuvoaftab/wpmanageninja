# Customized JS for adding Email Field from Fluent Forms to GTM GA Transporting.
Look for the line with <b> var userEmail = $form.find('input[name="email"]').val();  </b>
Make sure to match with Form Field Name Attribute.

<pre>
  <script>
   (function($){
     var fluentForms = $('.frm-fluent-form');
     fluentForms.each(function() {
       var $form = $(this);
       var formId = $form.attr('data-form_id');
       dataLayer.push({
        'event': 'FluentFormActivities',
        'eventCategory': 'FluentForm',
        'eventAction': 'FormView',
        'FluentFormID': formId
      });

      $form.on('fluentform_submission_success', function(e) {
        var userEmail = $form.find('input[name="email"]').val(); 
        dataLayer.push({
          'event': 'FluentFormActivities',
          'eventCategory': 'FluentForm',
          'eventAction': 'FormSubmitted',
          'FluentFormID': formId,
          'FluentFormSubmitterEmail': userEmail
        });
      });
    });
  }(jQuery));
</script>
</pre>
