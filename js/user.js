$(document).ready(function (){
  checkLoginState();
  loadOwnListings();
});
// Loads user's listings
function loadOwnListings(){
  // Ajax call to listOwnItems function
  $.ajax({
    url: 'controller/UserController.php',
    data: {action: 'listOwnItems'},
    type: 'post',
    success: function(output) {
      // Parses JSON output
      json = JSON.parse(output);
      // Loads existing user information
      var userfName = json[0].firstName;
      var userSurname = json[0].lastName;
      var userEmail = json[0].email;
      $('#userfName').html(userfName);
      $('#userSurname').html(userSurname);
      $('#userEmail').html(userEmail);
      // Clones and appends user cards for each item
      for(i=0; json.length > i; i++){
        var tmpl = $('#userCardTmpl').clone();
        tmpl.removeAttr('id');
        // Image path to current item's image
        var src = 'storedImages/'+json[i].itemID+'/image';
        tmpl.find('img').attr('src', src);
        tmpl.find('.card-title').html(json[i].name);
        tmpl.find('.dateItem').html(json[i].date);
        tmpl.find('.card-text').html(json[i].descr);
        // Makes onclick function call ith current itemID as parameter
        var onclick = 'deleteListing('+'"'+json[i].itemID+'")';
        tmpl.find('.deleteItemButton').attr('onclick', onclick);
        $('#listItems').append(tmpl);
      }
    }
  });
}
