

class Controller{

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
            requestType : requestType
        } ,success: function(data){ 
            console.log(data)
            console.log('COMPLETED')
        }
        ,
        error: function(){
            alert('We have error');
        }
    
    })
    }
}
