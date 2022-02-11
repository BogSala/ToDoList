function doAjax(number , text , requestType) {
    $.ajax({
    url: 'php/setter.php',
    type: 'POST',
    async: false ,
    // dataType: 'json' ,
    data: {
        number : number , 
        text : text ,
        requestType : requestType
    } ,success: function(data){ 
        $('.foot').append(data)
        console.log('COMPLETED')
        
        // $('#dataholder').text(data.price )
    }
    ,
    error: function(){
    console.log('ERROR');
    }

})
}


window.onbeforeunload = function(){

    $.ajax({
    url: 'php/reloader.php',
    // async: false ,
    // dataType: 'json' ,
    })
    
 }


function plus(){
    addTask($('#inputer').val())
    inputClear()
}

function counting(){
    return ($('.head').children().size() - 1)
}

$(document).ready(function() {
  $('input').keydown(function(e) {
    if(e.keyCode === 13) {
        plus()
    }
  });
});

function removeTask(){
    $(this).parent().parent().remove();
    
}

var task = document.createElement('tr')

function inputClear(){
    document.getElementById('inputer').value = ""
}

function addTask(task){
    let trTask = $('<tr>', {
        class: 'task'
    })
    let tdTask = $('<td>', {
        class: 'taskText',
        text : task ,
        number : counting()
    })
    trTask.append(tdTask)
    let tdButton = $('<td>', {
        class: 'taskDelete',
    })
    let deleteButton = $('<button>', {
        class: 'delete',
        text : '✖',
    })
    deleteButton.on("click" , removeTask)
    tdButton.append(deleteButton)
    trTask.append(tdButton)
    $('thead').append(trTask);
    doAjax(counting()  , task , 'add')
}




