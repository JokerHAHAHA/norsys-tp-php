$(function() {
    $( ".draggable" ).draggable({
        containment: $('.restrict'),
        drag: function(){
            currentId = $(this).find('#id').text();
        }
    });
    $( "#droppableTodo" ).droppable({
        drop: function(event, ui) {
                // console.log(currentId);
                $.getScript( "functions/fctSAve.js");
                updateTicket(currentId, 'todo');
                
            }
        });
    $( "#droppableProcess" ).droppable({
        drop: function(event, ui) {
                // console.log(currentId);
                $.getScript( "functions/fctSAve.js");
                updateTicket(currentId, 'process');
                
            }
        });
});