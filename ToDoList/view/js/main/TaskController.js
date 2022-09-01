
class TaskController{

    tasks = []

    // get(){
    //     let response = this.doAjax(path , userId , 0 , 'get')
    //     console.log(response)
    // }

    addTask(path ,id ,task){
        return this.doAjax(path , id , task , 'add')
    }

    deleteTask(task){
        //
    }


    //? Захист від редагування сессій і тегів, для слабких
    //? middelware вручну писати я не буду!!

    doAjax(path , id , task ,  requestType){
        return $.ajax({
            url: path ,
            type: 'POST',
            async: false ,
            dataType: 'json' ,
            data: {
                id : id , 
                task : task ,
                requestType : requestType,
            } ,success: function(data){ 
                createTask(data['body'][0][0] , task)
            },
            error: function(){
                alert('Code3: Oops , we have some errors..');
                
            }
        })
    }

}
