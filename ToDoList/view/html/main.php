<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDO</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <div class="display">Mine, absolutely useless, made in an hour without normal classes and a framework, </div>
    <div class="display">which I will forget about tomorrow*</div>
    <div class="display-1">Super cool ToDO list!!! &#128293;</div>
    <span id='holder' style='display:none'><?php session_start(); echo json_encode($_SESSION) ?></span>
    <div class="table-responsive mt-4 ">
        <table class="mx-auto w-auto">
            <thead class='head'>
                <tr>
                    <td class="form-outline">
                        <span class="form-outline">
                            <input type="text" id="typeText" class="form-control">
                        </span>
                        
                    </td>
                    <td>
                        <button type="button" class="btn btn-default add-button" aria-label="Left Align">
                            <span class="fa fa-plus fa-lg" aria-hidden="true"></span>
                            </button>
                    </td>
                </tr>
            </thead>

            <tbody class="foot">
                <tr>
                    <td >
                        <div class = "task-text">Just Task </div>
                        
                    </td>
                    <td>
                        <button type="button" class="btn btn-default delete-button" aria-label="Left Align">
                            <span class="fa fa-close fa-lg" aria-hidden="true"></span>
                            </button>
                    </td>
                </tr>
                <tr>
                    <td >
                        <div class = "task-text">Обоже..&#127783; </div>
                    </td>
                    <td>
                        <button type="button" class="btn btn-default" aria-label="Left Align">
                            <span class="fa fa-close fa-lg" aria-hidden="true"></span>
                        </button>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="placeholder"></tr>
            </tfoot>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="../js/MainController.js"></script>
    <!-- <script src="../js/LoginController.js"></script> -->
    <script src="../js/front.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>