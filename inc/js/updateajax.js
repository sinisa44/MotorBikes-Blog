$('#UpdateForm').on('submit', function(event) {
  event.preventDefault();
  $.ajax({
    url: 'resources/ajax/content.php',
    type: 'POST',
    data: new FormData(this),
    contentType:false,
    cache:false,
    processData:false,
  })
  .done(function(data) {
    console.log(data);
      $('#updateModal').modal('hide');
      getContent();
  });


});
