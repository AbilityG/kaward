<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \frontend\assets\AppAsset;

AppAsset::register($this);
$this->title = 'Signup';
?>


<!-- Registration form(1/3) -->
<div class="center">
    <?php $form = ActiveForm::begin([
        'id' => 'form-signup',
        'enableClientValidation' => 'false',
        'enableAjaxValidation' => 'true',
    ]); ?>
    <div class="reg-block">
        <h1>Регистрация в рейтинге <span>Шаг 1 из 3</span></h1>
        <p class="small-desc ">Регистрируясь в рейтинге Ваша компания подтверждает свое участие и попадает в список компаний, среди которых будет проводится оценка и ранжирование.<br>
            От лица компании может быть зарегистрирован только один представитель. В случае регистрации нескольких представителей, будет выбран первый зарегистрированный, остальные профили будут удалены из списка.</p>
        <?= $form->field($model, 'company_name', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->textInput(['class' => 'default medium'])->label( 'Название компании', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
        <p class="small-desc under-input">Мы просим Вас вводить название компании без указания типа организации и юридического лица. Возможность представить подобную информацию имеется ниже.</p>
        <?= $form->field($model, 'ur_company_name', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->textInput(['class' => 'default medium'])->label( 'Юридическое название', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
        <?= $form->field($model, 'site', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->textInput(['class' => 'default medium'])->label( 'Адрес основного сайта', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
        <?= $form->field($model, 'email', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->textInput(['class' => 'default medium'])->label( 'Основной емейл', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
        <p class="small-desc under-input">Основной емейл послужит также логином для входа. Необходимо ввести рабочий емейл ответственного лица компании или представителей руководящего состава</p>
        <?= $form->field($model, 'password', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->passwordInput(['class' => 'default medium'])->label( 'Пароль', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
    </div>
    <div class="reg-block reg-block__grey">
        <h2>Головной офис компании</h2>
        <p class="small-desc if-remotely">В случае, если вся команда работает удаленно, под офисом подразумевается коворкинг, стол в кафе или комната в доме родителей, другими словами, то место, где чаще всего бывает высшее руководство либо проходят встречи с клиентами</p>
        <?= $form->field($model, 'city', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->dropDownList([
            '' => '',
            'Абай' => 'Абай',
            'Акколь' => 'Акколь',
            'Аксай' => 'Аксай',
            'Аксу' => 'Аксу',
            'Актау' => 'Актау',
            'Актобе' => 'Актобе',
            'Алга' => 'Алга',
            'Алматы' => 'Алматы',
            'Аральск' => 'Аральск',
            'Аркалык' => 'Аркалык',
            'Арысь' => 'Арысь',
            'Астана' => 'Астана',
            'Атбасар' => 'Атбасар',
            'Атырау' => 'Атырау',
            'Аягоз' => 'Аягоз',
            'Байконыр' => 'Байконыр',
            'Балхаш' => 'Балхаш',
            'Булаево' => 'Булаево',
            'Державинск' => 'Державинск',
            'Ерейментау' => 'Ерейментау',
            'Есик' => 'Есик',
            'Есиль' => 'Есиль',
            'Жанаозен' => 'Жанаозен',
            'Жанатас' => 'Жанатас',
            'Жаркент' => 'Жаркент',
            'Жезказган' => 'Жезказган',
            'Жем' => 'Жем',
            'Жетысай' => 'Жетысай',
            'Житикара' => 'Житикара',
            'Зайсан' => 'Зайсан',
            'Зыряновск' => 'Зыряновск',
            'Казалинск' => 'Казалинск',
            'Кандыагаш' => 'Кандыагаш',
            'Капчагай' => 'Капчагай',
            'Караганда' => 'Караганда',
            'Каражал' => 'Каражал',
            'Каратау' => 'Каратау',
            'Каркаралинск' => 'Каркаралинск',
            'Каскелен' => 'Каскелен',
            'Кентау' => 'Кентау',
            'Кокшетау' => 'Кокшетау',
            'Костанай' => 'Костанай',
            'Кульсары' => 'Кульсары',
            'Курчатов' => 'Курчатов',
            'Кызылорда' => 'Кызылорда',
            'Ленгер' => 'Ленгер',
            'Лисаковск' => 'Лисаковск',
            'Макинск' => 'Макинск',
            'Мамлютка' => 'Мамлютка',
            'Павлодар' => 'Павлодар',
            'Петропавловск' => 'Петропавловск',
            'Приозёрск' => 'Приозёрск',
            'Риддер' => 'Риддер',
            'Рудный' => 'Рудный',
            'Сарань' => 'Сарань',
            'Сарканд' => 'Сарканд',
            'Сарыагаш' => 'Сарыагаш',
            'Сатпаев' => 'Сатпаев',
            'Семей' => 'Семей',
            'Сергеевка' => 'Сергеевка',
            'Серебрянск' => 'Серебрянск',
            'Степногорск' => 'Степногорск',
            'Степняк' => 'Степняк',
            'Тайынша' => 'Тайынша',
            'Талгар' => 'Талгар',
            'Талдыкорган' => 'Талдыкорган',
            'Тараз' => 'Тараз',
            'Текели' => 'Текели',
            'Темир' => 'Темир',
            'Темиртау' => 'Темиртау',
            'Туркестан' => 'Туркестан',
            'Уральск' => 'Уральск',
            'Усть-Каменогорск' => 'Усть-Каменогорск',
            'Ушарал' => 'Ушарал',
            'Уштобе' => 'Уштобе',
            'Форт-Шевченко' => 'Форт-Шевченко',
            'Хромтау' => 'Хромтау',
            'Шалкар' => 'Шалкар',
            'Шар' => 'Шар',
            'Шардара' => 'Шардара',
            'Шахтинск' => 'Шахтинск',
            'Шемонаиха' => 'Шемонаиха',
            'Шу' => 'Шу',
            'Шымкент' => 'Шымкент',
            'Щучинск' => 'Щучинск',
            'Экибастуз' => 'Экибастуз',
            'Эмба' => 'Эмба',
        ],['class' => 'default medium', 'size' => ''])->label( 'Город', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
        <?= $form->field($model, 'address', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->textInput(['class' => 'default medium'])->label( 'Адрес офиса', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
        <?= $form->field($model, 'office_phone_1', [
            'template' => '{label}{input} <span class="phone-plus">+</span>{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group add-phone-input'
            ]
        ])->widget(\yii\widgets\MaskedInput::className(), ['mask' => '+7 (999)-999-99-99'])->textInput(['class' => 'default small'])->label( 'Официальный телефон', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
        <?= $form->field($model, 'corporate_email', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->textInput(['class' => 'default medium'])->label( 'Корпоративный емейл', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
    </div>
    <div class="reg-block">
        <h2>Ответственное лицо компании</h2>
        <p class="small-desc if-remotely">В случае необходимости, у ответственного лица компании должно быть достаточно полномочий, чтобы ответить на вопросы комиссии рейтинга. Лучше, если это будут топы компании.</p>
        <?= $form->field($model, 'name', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->textInput(['class' => 'default medium'])->label( 'Имя', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
        <?= $form->field($model, 'surname', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->textInput(['class' => 'default medium'])->label( 'Фамилия', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
        <?= $form->field($model, 'patronymic', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->textInput(['class' => 'default medium'])->label( 'Отчество', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
        <?= $form->field($model, 'position', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->textInput(['class' => 'default medium'])->label( 'Должность', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
        <?= $form->field($model, 'user_phone', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->widget(\yii\widgets\MaskedInput::className(), ['mask' => '+7 (999)-999-99-99'])->textInput(['class' => 'default small phone-number'])->label( 'Номер мобильного', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
        <?= $form->field($model, 'alternate_email', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->textInput(['class' => 'default medium'])->label( 'Альтернативный емейл', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
        <p class="small-desc under-input">Дополнительный емейл может потребоваться для восстановления пароля (если утерян доступ к основному емейлу) или для смены логина (основного емейла)</p>
    </div>
    <div class="reg-block orange-block">
        <?= $form->field($model, 'year', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group disable-margin'
            ]
        ])->dropDownList([
            '' => '',
            '1995' => '1995',
            '1996' => '1996',
            '1997' => '1997',
            '1998' => '1998',
            '1999' => '1999',
            '2000' => '2000',
            '2001' => '2001',
            '2002' => '2002',
            '2003' => '2003',
            '2004' => '2004',
            '2005' => '2005',
            '2006' => '2006',
            '2007' => '2007',
            '2008' => '2008',
            '2009' => '2009',
            '2010' => '2010',
            '2011' => '2011',
            '2012' => '2012',
            '2013' => '2013',
            '2014' => '2014',
            '2015' => '2015',
            '2016' => '2016',
        ],['class' => 'default', 'size' => ''])->label( 'Год создания', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
        <?= $form->field($model, 'year_link', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->textInput(['class' => 'default medium'])->label( 'Пруфлинк', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
        <?= $form->field($model, 'company_description', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group'
            ]
        ])->textInput(['class' => 'default medium'])->label( 'Описание компании', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
    </div>
    <div class="reg-block">
        <div class="input-group disable-margin">
            <label class="text-label" for="">Социальные сети</label>
            <select class="default" name="year" id="">
                <option value="" selected="selected"></option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
            </select>
            <input class="default small" id="" type="text" name="site">
        </div>
    </div>
    <div class="reg-block orange-block">
        <?= $form->field($model, 'portfolio_link', [
            'template' => '{label}{input}{error}',
            'errorOptions' => [
                'tag' => 'p'
            ],
            'options' => [
                'class' => 'input-group disable-margin'
            ]
        ])->textInput(['class' => 'default medium'])->label( 'Ссылка на портфолио', ['class' => 'text-label'])->error(['class' => 'under-input small-desc error-desc']); ?>
    </div>
    <div class="reg-block positioning">
        <h3>Позиционирование</h3>
        <p class="small-desc">Укажите один или несколько пунктов, раскрывающих, как компания представляет себя на рынке</p>
        <?= $form->field($model, 'agency_full', [
            'template' => '{input}{label}',
            'options' => [
                'class' => 'checkbox-group'
            ]
        ])->checkbox(['class' => 'checkbox'], false)->label( 'Агентство полного цикла', ['class' => 'for-checkbox']); ?>
        <?= $form->field($model, 'design_studio', [
            'template' => '{input}{label}',
            'options' => [
                'class' => 'checkbox-group'
            ]
        ])->checkbox(['class' => 'checkbox'], false)->label( 'Дизайн-студия', ['class' => 'for-checkbox']); ?>
        <?= $form->field($model, 'digital_agency', [
            'template' => '{input}{label}',
            'options' => [
                'class' => 'checkbox-group'
            ]
        ])->checkbox(['class' => 'checkbox'], false)->label( 'Диджитал-агентство', ['class' => 'for-checkbox']); ?>
        <?= $form->field($model, 'mobile_apps', [
            'template' => '{input}{label}',
            'options' => [
                'class' => 'checkbox-group'
            ]
        ])->checkbox(['class' => 'checkbox'], false)->label( 'Разработчик мобильных приложений', ['class' => 'for-checkbox']); ?>
        <?= $form->field($model, 'projects_support', [
            'template' => '{input}{label}',
            'options' => [
                'class' => 'checkbox-group'
            ]
        ])->checkbox(['class' => 'checkbox'], false)->label( 'Поддержка проектов', ['class' => 'for-checkbox']); ?>
        <?= $form->field($model, 'e_commerce', [
            'template' => '{input}{label}',
            'options' => [
                'class' => 'checkbox-group'
            ]
        ])->checkbox(['class' => 'checkbox'], false)->label( 'Разработчик e-commerce', ['class' => 'for-checkbox']); ?>
        <?= $form->field($model, 'seo', [
            'template' => '{input}{label}',
            'options' => [
                'class' => 'checkbox-group'
            ]
        ])->checkbox(['class' => 'checkbox'], false)->label( 'SEO-студия/агентство', ['class' => 'for-checkbox']); ?>
        <?= $form->field($model, 'smm', [
            'template' => '{input}{label}',
            'options' => [
                'class' => 'checkbox-group'
            ]
        ])->checkbox(['class' => 'checkbox'], false)->label( 'SMM-студия/агентство', ['class' => 'for-checkbox']); ?>
        <?= $form->field($model, 'software', [
            'template' => '{input}{label}',
            'options' => [
                'class' => 'checkbox-group'
            ]
        ])->checkbox(['class' => 'checkbox'], false)->label( 'Разработчик ПО', ['class' => 'for-checkbox']); ?>
        <?= $form->field($model, 'tech_solutions', [
            'template' => '{input}{label}',
            'options' => [
                'class' => 'checkbox-group'
            ]
        ])->checkbox(['class' => 'checkbox'], false)->label( 'Разработчик технологических решений', ['class' => 'for-checkbox']); ?>
        <?= $form->field($model, 'system_integrator', [
            'template' => '{input}{label}',
            'options' => [
                'class' => 'checkbox-group'
            ]
        ])->checkbox(['class' => 'checkbox'], false)->label( 'Системный интегратор', ['class' => 'for-checkbox']); ?>
        <div class="checkbox-group margin-50">
            <div class="oferta">
                <input class="checkbox offer-checking" id="positioning-6" type="checkbox" name="site">
                <label class="for-checkbox" for="positioning-6">Согласен с <a href="#">Офертой</a> и прочей ерундой</label>
            </div>
            <button type="submit" name="signup-button" class="submit disabled" disabled>Зарегистрироваться</button>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>

