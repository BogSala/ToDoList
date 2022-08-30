

// const path = '../../controller/LoginController.php'
const path = '../../controller/LoginController.php'
const control = new MainController()

let json = JSON.parse($('#holder').text())


control.userLogin(path , json['login'] , json['password'])