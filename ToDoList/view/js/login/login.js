
const path = '../../controller/LoginController.php'
const control = new LoginController()

$('.sign-up-button').click(function() {
    var login = $('.login-input').val()
    var password = $('.password-input').val()
    if (login.length  <= 3 || login.length  >= 10){
        alert('Valid values for login 3 to 10 characters')
    } else {
        control.userAdd(path , login , password)
    }
})

//? Сиджу DRY порушую, кста, але робити тут функцію з поверненням массиву ну то вже гріх щоб стільки часу витрачати

$('.login-button').click(function() {
    var login = $('.login-input').val()
    var password = $('.password-input').val()
    if (login.length  <= 3 || login.length  >= 10){
        alert('Valid values for login 3 to 10 characters')
    } else {
        control.userLogin(path , login , password)
    }
})