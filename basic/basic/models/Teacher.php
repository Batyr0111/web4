<?php
use yii\data\ActiveDataProvider;
use app\models\Teacher;
use Yii;
use yii\helpers\Url;
use yii\web\ServerErrorHttpException;
use yii\web\NotFoundHttpException;

namespace app\controllers

class Teacher{
    public function loadAndSave($badyParams){
        $user = ($this->isNewRecord) ? new User() :
User::findOne($this->user_id);
if ($user->load($bodyParams, '') && $user->save()) {
if ($this->isNewRecord) {
$this->user_id = $user->user_id;
}
if ($this->load($bodyParams, '') && $this-
>save()) {
return true;
}
}

return false;
    }
    public function fields(){
        $fields = parent::fields();
return array_merge($fields, [
'lastname' => function () { return $this->user-
>lastname;},
'firstname' => function () { return $this->user-
>firstname;},
'patronymic' => function () { return $this->user-
>patronymic;},
'login' => function () { return $this->user-
>login;},
'gender_id' => function () { return $this->user-
>gender_id;},
'genderName' => function () { return $this->user-
>gender->name;},
'birthday' => function () { return $this->user-
>birthday;},
'roleName' => function () { return $this->user-
>roleName;},
'active' => function () { return $this->user-
>active;},
'otdelName' => function () { return $this->otdel-
>name;},
]);
    }
    
}