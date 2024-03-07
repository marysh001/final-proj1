<?php

namespace Geekbrains\Application1\Domain\Controllers;

use Geekbrains\Application1\Application\Application;
use Geekbrains\Application1\Application\Render;
use Geekbrains\Application1\Domain\Models\User;
use Geekbrains\Application1\Application\Auth;

class UserController extends AbstractController {

    protected array $actionsPermissions = [
        'actionHash' => ['admin', 'some'],
        'actionSave' => ['admin'],
        'actionEdit' => ['admin'],
        'actionIndex' => ['admin'],
        'actionLogout' => ['admin'],
    ];

    public function actionIndex(): string {
        $users = User::getAllUsersFromStorage();
        
        $render = new Render();

        if(!$users){
            return $render->renderPage(
                'user-empty.tpl', 
                [
                    'title' => 'Список пользователей в хранилище',
                    'message' => "Список пуст или не найден"
                ]);
        }
        else{
            return $render->renderPage(
                'user-index.tpl', 
                [
                    'title' => 'Список пользователей в хранилище',
                    'users' => $users
                    'isAdmin' => User::isAdmin($_SESSION['id_user']?? null)
                ]);
        }
    }

    public function actionIndexRefresh(){
        $limit = null;
        
        if(isset($_POST['maxId']) && ($_POST['maxId'] > 0)){
            $limit = $_POST['maxId'];
        }

        $users = User::getAllUsersFromStorage($limit);
        $usersData = [];
        if(count($users) > 0) {
            foreach($users as $user){
                $usersData[] = $user->getUserDataAsArray();
            }
        }

        return json_encode($usersData);
    }

    public function actionSave(): string {
        if(User::validateRequestData()) {
            $user = new User();
            $user->setParamsFromRequestData();
            $user->saveToStorage();

            $render = new Render();

            return $render->renderPage(
                'user-created.tpl', 
                [
                    'title' => 'Пользователь создан',
                    'message' => "Создан пользователь " . $user->getUserName() . " " . $user->getUserLastName()
                ]);
        }
        else {
            throw new \Exception("Переданные данные некорректны");
        }
    }
    
    public static function isAdmin(?int $idUser):bool {
        if($idUser > 0){
            $sql = "SELECT role FROM user_roles WHERE role = 'admin' AND id_user =:id_user"

$handler = Application:: $storage->get()->prepare($sql);
$handler->execute([
    'id_user' => $idUser
]);
$result = $handler->fetchAll();

if (count($result)> 0){
    return true;
}
else {
    return false;
}
        }
    }

    public function actionEdit(): string {
        $render = new Render();

        $action = '/user/save';
        if(isset($_GET['user_id'])){
            $userId = $_GET['user_id'];
            $action = '/user/update';
            $userData = User::getUserDataByID($userId);

        }
        return $render->renderPageWithForm(
                'user-form.tpl', 
                [
                    'title' => 'Форма создания пользователя'
                    'user_data'=> $userData ?? [],
                    'action' => $action,
                ]);
    }

    public function actionUpdate(): string {
        if(User::exists($_POST['user_id'])) {
            $user = new User();
            $user->setUserId($_POST['user_id']);

            $arrayData = [];

            if(isset($_POST['name']))
                $arrayData['user_name'] = $_POST['name'];

            if(isset($_POST['lastname'])) {
                $arrayData['user_lastname'] = $_POST['lastname'];
            }

            $user->updateUser($arrayData);
        }
        else {
            throw new \Exception("Пользователь не существует");
        }

        $render = new Render();
        return $render->renderPage(
            'user-created.tpl',
            [
                'title' => 'Пользователь обновлен',
                'message' => "Обновлен пользователь " . $user->getUserId()
            ]);
    }



    public function actionHash(): string {
        return Auth::getPasswordHash($_GET['pass_string']);
    }

    public function actionLogin(): string {
        $result = false;

        if(isset($_POST['login']) && isset($_POST['password'])){
            $result = Application::$auth->proceedAuth($_POST['login'], $_POST['password']);
            if($result &&
                isset($_POST['user-remember']) && $_POST['user-remember'] == 'remember'){
                $token = Application::$auth->generateToken($_SESSION['auth']['id_user']);

                User::setToken($_SESSION['auth']['id_user'], $token);
            }
        }

        public function actionAuth(): string {
            $render = new Render();
            
            return $render->renderPageWithForm(
                    'user-auth.tpl', 
                    [
                        'title' => 'Форма логина'
                        'auth_success' => 1
                    ]);
        }
        if(!$result){
            $render = new Render();

            return $render->renderPageWithForm(
                'user-auth.tpl', 
                [
                    'title' => 'Форма логина',
                    'auth-success' => false,
                    'auth-error' => 'Неверные логин или пароль'
                ]);
        }
        else{
            header('Location: /');
            return "";
        }
    }

    public function actionDelete(): string{
        if(User:: exists($GET['user_id'])){
            User::deleteFromStorage($_GET['user_id']);
            header('Location: /user');
            die();
        }
        else{
            throw new \Exeption("Пользователь не существует");
        }
    }

    public function actionBirthday(): string {
        $result = false;

        if(isset($_POST['birthday'])){
            $result = Application::$auth->proceedAuth($_POST['birthday']);
            if($result &&
                isset($_POST['user-remember']) && $_POST['user-remember'] == 'remember'){
                $token = Application::$auth->generateToken($_SESSION['auth']['id_user']);

                User::setToken($_SESSION['auth']['id_user'], $token);
            }
        }
        if(!$result){
            $render = new Render();
            return $render->renderPageWithForm(
                'user-auth.tpl', 
                [
                    'title' => 'Форма даты рождения'
                    'auth_success' => 1
                ]);
    }

            return $render->renderPageWithForm(
                'user-form.tpl', 
                [
                    'title' => 'Форма даты рождения',
                    'auth-success' => false,
                    'auth-error' => 'Неверная дата рождения'
                ]);
        }
        else{
            header('Location: /');
            return "";
        }
    }
    public function actionLogout(): void {
        session_destroy();
        unset($_SESSION['user_name']);
        header("Location: /");
        die();
    }
}