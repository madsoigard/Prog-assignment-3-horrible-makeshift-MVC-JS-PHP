$(document).ready(function (){
  //Get the id that is located in the url
   var url = location.href;
   var itemID = url.substring(url.indexOf("=")+1);
  $.ajax({
    url: 'controller/ItemController.php',
    data: {
      action: 'getItemData'
      item: itemID
    },
    type: 'post',
    success: function(output) {
      json = JSON.parse(output);
      console.log(json);
      var tmpl = $('#tmplItem').clone();
      tmpl.removeAttr('id');
      tmpl.find('.itemName').html(json.name);
      tmpl.find('.itemDate').html(json.date);
      tmpl.find('.itemDescr').html(json.descr);
      tmpl.find('.nameOwner').html(json.firstName +" "+ json.lastName);

      $('#itemContainer').append(tmpl);
    }
  });


});

function checkExistingThread(){
  var itemID = url.substring(url.indexOf("=")+1);

  $.ajax({
    url: 'controller/ItemController.php',
    data: {
      action: 'checkExistingThread',
      item: itemID
    },
    type: 'post',
    success: function(output) {
      if(output == 'true'){
        location.href = '';// This has to redirect to user page, set
      }else{
        // Toggles message modal so user can create a message
        $('#sendMessageModal').modal('toggle');
      }
     }
  });

}

// Called when user clicks 'send' in the message modal
function newMsgTHread(){
  var itemID = url.substring(url.indexOf("=")+1);

  $.ajax({
    url: 'controller/ItemController.php',
    data: {
      action: 'newMsgThread',
      item: itemID
      content: $('#msgContent').val();
    },
    type: 'post',
    success: function(output) {
      if(output == 'true'){

        location.href = ''; // This has to redirect to user page, set
      }
     }
  });

}
