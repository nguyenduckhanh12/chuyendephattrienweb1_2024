<?php
// Start the session
session_start();
// if (!isset($_SESSION['form_submitted'])) {
// $_SESSION['form_submitted'] = false;
// }
unset($_SESSION['form_submitted']);
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = null; //Add new user
$_id = null;

function hashId($id)
    {
        return md5($id); // Hoặc có thể sử dụng hàm băm bảo mật khác
    }
if (!empty($_GET['id'])) {
    $hashId = $_GET['id'];
    $users = $userModel->getUsers();
    foreach ($users as $usr) {
        if (hashId($usr['id']) === $hashId) {
        $_id = $usr['id']; // Lấy id thực nếu khớp
        $user = $userModel->findUserById($_id); // Lấy user bằng id thực
        break;
    }
    }
}

if (!empty($_POST['submit'])) {
    $errors = [];
    $name = $_POST['name'];
    if (empty($name)) {
        $errors[] = 'Bắt buộc nhập tên';
    } elseif (!preg_match('/^[A-Za-z0-9]{5,15}$/', $name)) {
        $errors[] = 'Tên phải có độ dài từ 5 đến 15 ký tự';
    }
    $password = $_POST['password'];
    if (empty($password)) {
        $errors[] = 'Bắt buộc nhập mật khẩu';
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/', $password)) {
        $errors[] = 'Mật khẩu phải có độ dài từ 5-10 ký tự, bao gồm chữ thường, chữ HOA, số, và ký tự đặc biệt (~!@#$%^&*())';
    }
    if (empty($errors)) {
            if (!empty($_id)) {
                $userModel->updateUser($_POST);
            } else {
                $userModel->insertUser($_POST);
            }
            header('location: list_users.php');
            exit(); 
    } else {
        foreach ($errors as $error) {
            echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User form</title>
        <?php include 'views/meta.php'?>
    </head>
    <body>
        <?php include 'views/header.php'?>
        <div class="container">

            <?php if ($user || !isset($_id)) {?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST" onsubmit="return validateForm()">
            <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Tên</label>
                    <input id="name" class="form-control" name="name" placeholder="Tên" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                    <small class="form-text text-muted">Tên phải có độ dài từ 5 đến 15 ký tự</small>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input id="password" type="password" name="password" class="form-control" placeholder="Mật khẩu">
                    <small class="form-text text-muted">Mật khẩu phải có độ dài từ 5-10 ký tự, bao gồm chữ thường, chữ HOA, số, và ký tự đặc biệt (~!@#$%^&*())</small>
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Gửi</button>
            </form>
            <?php } else {?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
            <?php }?>
        </div>

        <script>
            function validateForm() {
                var name = document.getElementById('name').value;
                var password = document.getElementById('password').value;          
                var nameRegex = /^[A-Za-z0-9]{5,15}$/;
                var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/;
                if (name == "") {
                    alert("Bắt buộc nhập tên");
                    return false;
                } else if (!nameRegex.test(name)) {
                    alert("Tên phải có độ dài từ 5 đến 15 ký tự");
                    return false;
                }
                if (password == "") {
                    alert("Bắt buộc nhập mật khẩu");
                    return false;
                } else if (!passwordRegex.test(password)) {
                    alert("Mật khẩu phải có độ dài từ 5-10 ký tự, bao gồm chữ thường, chữ HOA, số, và ký tự đặc biệt (~!@#$%^&*())");
                    return false;
                }
                return true;
            }
        </script>
    </body>
</html>