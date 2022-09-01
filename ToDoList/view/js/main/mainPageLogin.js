
const path = '../../controller/LoginController.php'
const control = new MainController()

let json = JSON.parse($('#holder').text())
// console.log(json)
control.userLogin(path , json['login'] , json['password'])