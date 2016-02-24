<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $email;
    public $password;
    public $company_name;
    public $ur_company_name;
    public $city;
    public $address;
    public $office_phone_1;
    public $office_phone_2;
    public $office_phone_3;
    public $corporate_email;
    public $site;
    public $name;
    public $surname;
    public $patronymic;
    public $position;
    public $user_phone;
    public $alternate_email;
    public $year;
    public $year_link;
    public $company_description;
    public $portfolio_link;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'company_name', 'ur_company_name', 'address', 'site', 'name', 'surname', 'patronymic', 'position', 'alternate_email', 'year_link', 'company_description', 'portfolio_link'], 'filter', 'filter' => 'trim'],
            [['email', 'company_name', 'password', 'site', 'name', 'surname', 'position', 'city', 'office_phone_1', 'corporate_email', 'alternate_email', 'year', 'company_description', 'portfolio_link'], 'required', 'message' => 'Поле обязательно для заполнения.'],

            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Этот емейл уже зарегистрирован.'],

            ['company_name', 'string', 'max' => 255],

            ['password', 'string', 'min' => 6],

            ['ur_company_name', 'string', 'max' => 255],

            ['address', 'string', 'max' => 255],

            ['corporate_email', 'email'],
            ['corporate_email', 'string', 'max' => 70],

            ['site', 'string', 'max' => 100],

            ['name', 'string', 'max' => 50],

            ['surname', 'string', 'max' => 50],

            ['patronymic', 'string', 'max' => 50],

            ['position', 'string', 'max' => 100],

            ['alternate_email', 'email'],
            ['alternate_email', 'string', 'max' => 70],

            ['year_link', 'string', 'max' => 255],
            ['year_link', 'string', 'max' => 255],

            ['company_description', 'string'],

            ['portfolio_link', 'string', 'max' => 255],

        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->email = $this->email;
        $user->company_name = $this->company_name;
        $user->ur_company_name = $this->ur_company_name;
        $user->city = $this->city;
        $user->address = $this->address;
        $user->office_phone_1 = $this->office_phone_1;
        $user->office_phone_2 = $this->office_phone_2;
        $user->office_phone_3 = $this->office_phone_3;
        $user->corporate_email = $this->corporate_email;
        $user->site = $this->site;
        $user->name = $this->name;
        $user->surname = $this->surname;
        $user->patronymic = $this->patronymic;
        $user->position = $this->position;
        $user->user_phone = $this->user_phone;
        $user->alternate_email = $this->alternate_email;
        $user->year = $this->year;
        $user->year_link = $this->year_link;
        $user->company_description = $this->company_description;
        $user->portfolio_link = $this->portfolio_link;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
