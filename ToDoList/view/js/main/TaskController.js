
class TaskController{

    

    constructor(){
        this.doAjax(path , userId , 0 , 'get' , null)
        
    }

    addTask(path ,id ,task){
        this.doAjax(path , id , task , 'add' , null)
    }

    deleteTask(path ,id , taskId ){
        this.doAjax(path , id , 0 , 'delete' , taskId)
    }


    //? Захист від редагування сессій і тегів, для слабких
    //? middelware вручну писати я не буду!!

    doAjax(path , id , task ,  requestType , taskId){
        return $.ajax({
            url: path ,
            type: 'POST',
            async: false ,
            dataType: 'json' ,
            data: {
                id : id , 
                task : task ,
                requestType : requestType,
                taskId : taskId,

            } ,success: function(data){ 
                
                if (requestType == 'add'){
                    document.getElementById("typeText").value = ""
                    createTask(data['body'][0][0] , task)
                    //? Доведеться перебіндити функції на кнопку видалення щоб не оновляти сторінку
                    $('.delete-button').click(function() {
                        let row = ($(this).parent().parent())
                        let rowId =  row.attr('id')
                        console.log(rowId)
                        controller.deleteTask(path, userId, rowId)
                    })

                } else if (requestType == 'get' && data['body']){
                    data['body'].forEach(row => {
                        createTask(row['id'] , row['task'])
                    });
                    
                } else if (requestType == 'delete'){
                    console.log("OK")
                    $('#'+taskId).remove()
                }
                
            },
            error: function(data){
                alert('Code3: Oops , we have some errors..');
                console.log(data)
            }
        })
    }

}
