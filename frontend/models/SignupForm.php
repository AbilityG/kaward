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
    public $agency_full;
    public $design_studio;
    public $digital_agency;
    public $mobile_apps;
    public $projects_support;
    public $e_commerce;
    public $seo;
    public $smm;
    public $tech_solutions;
    public $software;
    public $system_integrator;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'company_name', 'ur_company_name', 'address', 'site', 'name', 'surname', 'patronymic', 'position', 'alternate_email', 'year_link', 'company_description', 'portfolio_link'], 'filter', 'filter' => 'trim'],
            [['email', 'company_name', 'password', 'site', 'name', 'surname', 'position', 'user_phone', 'city', 'office_phone_1', 'corporate_email', 'alternate_email', 'year', 'company_description', 'portfolio_link'], 'required', 'message' => 'Поле обязательно для заполнения.'],

            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Этот емейл уже зарегистрирован.'],

            [['ur_company_name', 'address', 'office_phone_2', 'office_phone_3', 'patronymic', 'user_phone', 'year_link'], 'default', 'value' => ''],

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
        $user->agency_full = $this->agency_full;
        $user->design_studio = $this->design_studio;
        $user->digital_agency = $this->digital_agency;
        $user->mobile_apps = $this->mobile_apps;
        $user->projects_support = $this->projects_support;
        $user->e_commerce = $this->e_commerce;
        $user->seo = $this->seo;
        $user->smm = $this->smm;
        $user->tech_solutions = $this->tech_solutions;
        $user->software = $this->software;
        $user->system_integrator = $this->system_integrator;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
