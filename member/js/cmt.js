  var form = $('#cmtForm');
  var submit = $('#cmtPost');
form.on('submit', function(e) {
    // prevent default action
    e.preventDefault();
    submit.val('Submit').removeAttr('disabled');
    // send ajax request

    $.ajax({
      url: 'testing1.php',
      type: 'POST',
      cache: false,
      data: form.serialize(), //form serizlize data
      beforeSend: function(){
        // change submit button value text and disabled it
        submit.val('Posting...').attr('disabled', 'disabled');
      },
      success: function(data){
        var item = $(data).hide().fadeIn(800);
        $(item).insertBefore("#pt");

        // reset form and button
        form.trigger('reset');
        submit.val('Submit Comment').removeAttr('disabled');
      },
      error: function(e){
        alert(e);
      }
    });
  });