var i = 0;
var remove = true; // added this 
$('#button').click(function(e) {
    $('<div/>').attr({
        'id' : i
    }).addClass('circle').css({
        'top' : e.pageY - 20,
        'left' : e.pageX - 20
    }).appendTo('#area');
    i++;
});

$('#area').on('click','.circle',function (){ // corrected spelling
    if(remove){
        $(this).remove();
    } else {
        //just to see if it was clicked
        $(this).css({'background-color': 'red'});
    }
});

$('#btn').toggle(function() {
    $('#btn').val('add');
    remove = true;
}, function() {
    $('#btn').val('remove');
    remove = false;
});