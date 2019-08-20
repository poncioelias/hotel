


//pagination detail user
$(document).on('click','.categ-detail li', function(){ 

    pag_ativa = $(this).html();

    $( ".categ-detail li" ).each(function( index ) {
        if ($(this).html() == pag_ativa) {
            $(this).attr("class","active")
        } else {
            $(this).attr("class","none")
        }
    });

})

$(document).on('click','tbody tr', function(){  
    
    user_id = $(this).attr("data-user-id")

    //consultar detalhes do usuário
    $.ajax({
        url: 'get_guest?user_id='+user_id,
        method: 'get',
        dataType: 'json',
        success: function(data){   

            $("#IDGuest").val(user_id);
            $("#titleFirstName").html(data[0].FirstName);          		       
            $("#FirstName").html(data[0].FirstName);
            $("#LastName").html(data[0].LastName);
            $("#Email").html(data[0].Email);
            $("#Phone").html(data[0].Phone);
            $("#Sex").html(data[0].Sex);
            $("#Country").html(data[0].Country);
            $("#City").html(data[0].City);
            $("#Address").html(data[0].Address);
            $("#Group").html(data[0].Group)
            $("#Group").css("background-color", data[0].backgroundColor );

        }
    })//fim ajax

})


$(document).on('click','.dropdown-menu .dropdown-item', function(e){  

    IDGroup = $(this).attr("data-value"); 
    IDGuest = $("#IDGuest").val();

    updateGroup(IDGroup, IDGuest)

});

function updateGroup(IDGroup, IDGuest) {
    
    //atualilzar status
    $.ajax({
        url: 'update_group?idgroup='+IDGroup+"&iduser="+IDGuest,
        method: 'get',
        success: function(data){   
            if (data ==1 ) location.reload();
        }
    })//fim ajax

}

