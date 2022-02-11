$(document).ready(function() {
    $('input').keydown(function(e) {
      if(e.keyCode === 13) {
          plus()
      }
    });
  });

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

var task = document.createElement('tr')

window.onbeforeunload = function(){

    $.ajax({
    url: 'php/reloader.php',
    // async: false ,
    // dataType: 'json' ,
    })
    
}

function counting(){
    return ($('.head').children().size() - 1)
}

function backAdd(){
    addTask($('#inputer').val())
    inputClear()
}

function backRemove(){
    let number = $(this).parent().parent().attr('number');
    doAjax(number  , null , 'delete')
    $(this).parent().parent().remove();    
}

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

function deleteTask(){
    //pass
}
function ia_ebal_apach(){
    console.log('apach, sosi hui')
}


