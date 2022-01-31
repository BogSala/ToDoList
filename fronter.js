function doAjax() {
    let credit = parseInt($('#credit').val());
    let multiplier = parseInt($('#multiplier').val()); 
    let duration =  parseInt($('#duration').val());
    let creditType = $('select').val();
    $.ajax({
    url: 'http://localhost/ITStartPHP/Lection9/back.php',
    type: 'POST',
    async: false ,
    dataType: 'json' ,
    data: {
        credit: credit ,
        multiplier: multiplier,
        duration: duration ,
        creditType : creditType 
    } ,success: function(data){

        console.log(data.price)
        $('#dataholder').text(data.price )
    }
    ,
    error: function(){
    console.log('ERROR');
    }

})
}

function plus(){
    addTask($('#inputer').val())
    inputClear()
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
        text : task
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
}


