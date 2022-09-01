
class MainController{

    userLogin(path ,login , password) {
        this.doAjax(path ,login , password , 'userLogin')
    }

    doAjax(path ,login , password , requestType) {
        $.ajax({
        url: path ,
        type: 'POST',
        async: false ,
        // dataType: 'json' ,
        data: {
            login : login , 
            password : password ,
            requestType : requestType,
        } ,success: function(data){ 
            console.log(data)
            try {
                let json = JSON.parse(data)
                if (json['status'] == 'false'){
                    alert("Code2: Oops , we have some errors..")
                    // window.location.href = 'http://localhost/projects/ToDoList/view/html/login.html';

                } else if (json['body'] == "Cant login"){
                    alert("Username or nickname is wrong")
                    // window.location.href = 'http://localhost/projects/ToDoList/view/html/login.html'
                }
            } catch {
                alert("Code1: Oops , we have some errors..")
                // window.location.href = 'http://localhost/projects/ToDoList/view/html/login.html';
            }
                
            console.log('COMPLETED')
        }
        ,
        error: function(){
            alert('Code3: Oops , we have some errors..');
            // window.location.href = 'http://localhost/projects/ToDoList/view/html/login.html';
        }
    
    })
    }
}