

class LoginController{

    // redirectPath = 'http://localhost/projects/ToDoList/view/html/main.html'
    redirectPath = 'http://localhost/projects/ToDoList/controller/test.php'

    userAdd(path ,login , password) {
        this.doAjax(path , login , password , 'userAdd')
    }

    userLogin(path ,login , password) {
        this.doAjax(path , login , password , 'userLogin')
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
                } else if (json['body'] == "Cant login"){
                    alert("Username or nickname is wrong")
                } else {
                    window.location.href = 'http://localhost/projects/ToDoList/view/html/main.php';
                }
            } catch {
                alert("Code1: Oops , we have some errors..")
            }
                
            
            console.log('COMPLETED')
        }
        ,
        error: function(){
            alert('Code3: Oops , we have some errors..');
        }
    
    })
    }
}
