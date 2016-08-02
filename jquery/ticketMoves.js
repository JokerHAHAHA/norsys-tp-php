$(function() {
    $( ".draggable" ).draggable({
        containment: $('.restrict'),
        drag: function(){
            currentId = $(this).find('#id').text();
        }
    });
    $( "#droppableTodo" ).droppable({
        drop: function(event, ui) {
            $.getScript( "functions/fctSAve.js");
            updateTicket(currentId, 'todo');

        }
    });
    $( "#droppableProcess" ).droppable({
        drop: function(event, ui) {
            $.getScript( "functions/fctSAve.js");
            updateTicket(currentId, 'process');

        }
    });
    $( "#droppableDone" ).droppable({
        drop: function(event, ui) {
            $.getScript( "functions/fctSAve.js");
            updateTicket(currentId, 'done');

        }
    });
});