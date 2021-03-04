// Add Bottle in Ajax path.

$('.addBottle').on('click', function(){
    $.post('addBottle.php', function(dataAdd){
        $('.modal').html(dataAdd);
    });
    $("html, body").animate({ scrollTop: 0}, "slow");
} );

// Target input hidden and open update's modal. 

$('.edit').on('click', function(){
    var id = $(this).prev().val();
    $.post('modify.php', {id}, function(data){
        $('.modal').html(data);
        // $('.hidden').val();
    });
    $("html, body").animate({ scrollTop: 0}, "slow");
});

// Close update's modal

$(document).on('click', '.cancel', function(){
    $('.modal').html('');
});

// Delete a bottle in Ajax path

$('.trash').on('click', function(){
    var id = $(this).next().val();
    $.post('delet.php', {id}, function(dataDelet){
        $('.modal').html(dataDelet);
    });
    $("html, body").animate({ scrollTop: 0}, "slow");
});

// Hide and show on click of input file in Modal.

$(document).on('click','.fakeImgBtn', function() {
    $('.inputFile').append('<input type="file" name="picture" id="picture" accept=".png, .jpg, .jpeg">');
    $('.fakeImg').hide();
});


// Filter mechanic AJAX

// $('select').on('change', function(){
    
//     var year = $('#year').val();
//     var country = $('#country').val();
//     var name = $('#winename').val();
//     var region = $('#region').val();

//     console.log(year);
    
//     if(year == $('#year').val() ){
//         $.post("inc/search.php", {"year":year}, function(response){
//             $('#year').val(response);
//         });
//     }
// });

