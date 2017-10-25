/* ucitavanje GET parametra iz url-a */

function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

var catid = getUrlVars()['catid'];


/* ucitavanje komentara */

function readComents(){
    var catid = getUrlVars()['catid'];
    $.ajax({
        url: 'resources/ajax/comments.php',
        type: 'POST',
        data: {catid: catid},
        success: function(data){
            $("#PostComment").html(data);
        }
    })
}

/* dodavanje komentara */

function addcomment(){
    var comment = $('#komentar').val();
    var hidden = $('#hidden').val();
    var button = $('#addbtn').val();

    $.ajax({
        url: 'resources/ajax/comments.php',
        type: 'POST',
        data: {
            komentar : comment,
            hidden : hidden,
            button : button
        },
        success : function (){

            readComents();

            $("#komentar").val("");
        },

    })
}

/*brisanje komentara*/

function deleteKomentar(id){

    $.ajax({
        url: 'resources/ajax/comments.php',
        type: 'POST',
        data: {
            comid: id,
        },
        success: function (data){

            readComents();
        }
    });
}

/*ucitavanje sadrzaja */
function getContent(){
  $.get(
    "resources/ajax/content.php",
    {},
    function (data){
      $('#adminContent').html(data);
    }
  )
}

/*dodavanje sadrzaja posta */

/*brisanje postova*/

function deletePost(id){
    var conf = confirm('do you really want to delete This Post?');
      if(conf == true){
      $.ajax({
        url: 'resources/ajax/content.php',
        type: 'POST',
        data: {id: id},
        success:function(){
          getContent();
            alert('post successfully deleted');
      }
    })
  }
}
/*ucitavanje korisnika*/
function showUsers(){
  $.get(
    'resources/ajax/users.php',
    {},
    function(data){
      $('#tabela').html(data);
    }
  )
}
/*dodavanje korisnika*/

function addUser(){

  var username = $('#username').val();
  var email = $('#email').val();
  var password = $('#password').val();
  var password2 = $('#password2').val();
  var btn = $('#dugme').val();
  var role = $('#role').val();
 if(password == password2){
   if (username != "" && email != "")
   {
     $.ajax({
       url: 'resources/ajax/users.php',
       type: 'POST',
       data: {
         username : username,
         email : email,
         password: password,
         password2 : password2,
         btn : btn,
         role : role
       }
     })
     .done(function(data) {
       showUsers();
       alert('new user successfully added');
       var username = $('#username').val("");
       var email = $('#email').val("");
       var password = $('#password').val("");
       var password2 = $('#password2').val("");
     });
   }else{
     alert ('must fill all fields');
   }

    }else{
      alert ('passwords doesnt match')
    }
}
/*brisanje korisnika */

function deleteUser(id){
  var conf = confirm('delete user ?');
  if(conf == true){
  $.post('resources/ajax/users.php',
      {id:id},
   function() {
    showUsers();
  });
}
}
/*ucitavanje komentara*/

function getAdminComments(){
  $.get(
    'resources/ajax/admincomments.php',
    {},
    function(data){
      $('#adminComments').html(data);
    }
  );
}
/*brisanje komentara*/

function delAdminCom(id){
  var conf = confirm('Delete this comment?');
    if(conf == true){
    $.post('resources/ajax/admincomments.php',
    {id:id},
      function(data, textStatus, xhr) {
          getAdminComments();
          alert('Comment deleted');
    });
  }
}
/*dobavljanje detalja o postu*/
function GetPostDetails(id){
    var postId = id;
    $.post(
        'resources/ajax/details.php',
        { postId : id},
        function (data) {
          var post = JSON.parse(data);
          $('#UpdTitle').val(post.naziv);
          $('#UpdSlug').val(post.podnaslov);
          $('#UpdText').val(post.text);
          $('#HiddenId').val(post.id);
        }
    );
    $('#updateModal').modal({backdrop: "static"});
    $('#updateModal').modal('show');
}

/*azuriranje postova*/

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
  .done(function() {
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });

alert('cao');

});

$(document).ready(function() {
  readComents();
  showUsers();
  getContent();
  getAdminComments();
});
