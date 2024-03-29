const path = '../../controller/TaskController.php'
const standartTask = $('.hid')
const userId = JSON.parse($("#holder").text())['id']
const controller = new TaskController()


$('.add-button').click(function() {
    let taskText = $('#typeText').val()
    controller.addTask(path, userId , taskText)
})

$('.delete-button').click(function() {
    let row = ($(this).parent().parent())
    let rowId =  row.attr('id')
    console.log(rowId)
    controller.deleteTask(path, userId, rowId)
})

function createTask(id , taskText){
    let newTask = standartTask.clone()
    newTask.attr('id' ,id)
    newTask.removeClass('hid')
    let div = newTask.children()[0].children[0]   
    div.innerHTML = taskText
    $('.foot').prepend(newTask)
}
