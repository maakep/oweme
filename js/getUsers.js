
function getFriend(search){
    $.ajax({

        url: '/oweme/searchUser_getUsers.php',
        type: 'POST',
        data: 'search='+search,
        success: function(result){
                //success-meddelande
                //result är url-s print
                $('#search').html(result);
        }

    });         

}

function addFriend(friend){
    $('#btn'+friend).attr("disabled", true);
    $('#btn'+friend).text("Added");
    $.ajax({

        url: '/oweme/searchUser_addUser.php',
        type: 'POST',
        data: 'friend='+friend,
        success: function(result){
            $('#friendAdd').hide();
            $('#friendAdd').html(friend + " added to friendlist");
            $('#friendAdd').slideUp('slow');
        }

    });  
}