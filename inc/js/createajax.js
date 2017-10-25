$('#PostForm').on('submit', function(event) {
    event.preventDefault(this);
    $.ajax({
        url: 'resources/ajax/content.php',
        type: 'POST',
        data: new FormData(this),
        contentType:false,
        cache:false,
        processData:false,
        success:function(){
            getContent();
        }
    })
});
