<?php
$lang_name = 'Русский';
$lang_value = 'ru';

$status_arr = array(
'0'=>'не подтвержден', 
'1'=>'подтвержден', 
'2'=>'оплачен' 
//'3'=>'в историю'
);

$lang_days = array (
'0' => '?',
'1' => 'Понедельник',
'2' => 'Вторник',
'3' => 'Среда',
'4' => 'Четверг',
'5' => 'Пятница',
'6' => 'Суббота',
'7' => 'Воскресение'
);

$lang_days_short = array (
'0' => '?',
'1' => 'Пн',
'2' => 'Вт',
'3' => 'Ср',
'4' => 'Чт',
'5' => 'Пт',
'6' => 'Сб',
'7' => 'Вс'
);

$lang_monts_r = array (
'0' => '?',
'00' => '?',
'01' => 'января',
'02' => 'февраля',
'03' => 'марта',
'04' => 'апреля',
'05' => 'мая',
'06' => 'июня',
'07' => 'июля',
'08' => 'августа',
'09' => 'сентября',
'10' => 'октября',
'11' => 'ноября',
'12' => 'декабря'
);

$lang_monts = array (
'0' => '?',
'00' => '?',
'01' => 'Январь',
'02' => 'Февраль',
'03' => 'Март',
'04' => 'Апрель',
'05' => 'Май',
'06' => 'Июнь',
'07' => 'Июль',
'08' => 'Август',
'09' => 'Сентябрь',
'10' => 'Октябрь',
'11' => 'Ноябрь',
'12' => 'Декабрь'
);
//=========================================ADMIN INTERFACE
$lang = array(
'language' => 'Язык интерфейса',
'yes' => 'Да',
'no' => 'Нет',
'From:' => 'С:',
'To:' => 'По:',
'disabled' => 'Не доступно',
'admin_title' => 'Панель управления',
'menu' => 'Меню',
'home' => 'Главная',
'admin' => 'Администратор',
'super_admin' => 'Глав. администратор',
'user' => 'Пользователь',
'users' => 'Пользователи',
'not_found_user' => 'пользователь не найден',
'staff' => 'Персонал',
'profile' => 'Профиль',
'categorys' => 'Категории',
'all_categorys' => 'Все категории',
'category' => 'Категория',
'services' => 'Услуги / Объекты',
'services_order' => 'Услуга / Объект',
'service' => 'Объект',
'orders' => 'Заказы',
'order' => 'заказ',
'welcome' => 'Добро пожаловать',
'settings' => 'Настройки',
'photo' => 'Фото',
'photos' => 'Фотографии',
'add_photo' => 'Добавить фото',
'photo_catalog' => 'Выберете папку',
'logbook' => 'Журнал',
'schedule' => 'Расписание',
'login' => 'Логин',
'pass' => 'Пароль',
'enter' => 'Вход',
'lost_pass' => 'Не помню пароль',
'sent' => 'Отправить',
'when_sent' => 'Отправлено',
'logout' => 'Выход',
'error' => 'Ошибка',
'error_login' => 'Не верный логин или пароль',
'error_found_login' => 'Такой логин уже есть в базе данных, используйте другой',
'error_found_folder' => 'Папка с таким именем уже есть, используйте другое название',
'error_symbol_folder' => 'Не допустимые символы в имени папки',
'error_folder_empty' => 'Введите имя папки',
'error_found_replace' => 'Редактируемый объект не найден в базе данных',
'error_found_replace_swing' => 'Редактируемый объект был перемещен, или уже отсутствует в базе данных.',
'error_access' => 'Не достаточно прав',
'error_login_replace_symbol' => 'Логин содержит не допустимые символы (используйте буквы и цифры, без пробелов)',
'error_login_replace_number' => 'Логин должен быть не менее 3 символов',
'error_login_replace_empty' => 'Логин не может быть пустым',
'error_pass_replace_symbol' => 'Пароль содержит не допустимые символы',
'error_pass_replace_number' => 'Пароль должен быть не менее 3 символов',
'error_pass_replace_empty' => 'Пароль не может быть пустым',
'error_name_empty' => 'Введите имя',
'error_title_empty' => 'Введите название',
'error_title_number' => 'Название менее 3 символов',
'error_title_symbol' => 'Название содержит не допустимые символы',
'error_mail_empty' => 'Введите E-mail',
'error_mail_invalid' => 'E-mail введён не корректно',
'error_phone_empty' => 'Введите номер телефона',
'error_phone_invalid' => 'Номер телефона введён не корректно',
'error_upload' => 'Загрузка не удалась',
'error_upload_type' => 'Не верный тип файла',
'error_this_dir' => 'Папка не найдена',
'confirm_access' => 'Внимание! Уровень доступа будет изменён',
'title' => 'Название',
'name' => 'Имя',
'mail' => 'E-mail',
'lost_pass_mail' => 'Введите ваш E-mail',
'lost_pass_sent' => 'Учётные данные отправлены на вашу электронную почту',
'mail_not_found' => 'Пользователя с таким адресом не найдено',
'phone' => 'Телефон',
'access_level' => 'Уровень доступа',
'description' => 'Описание',
'staff_post' => 'Должность',
'date' => 'Дата',
'add_date' => 'Добавить дату',
'time' => 'Время',
'edit' => 'Редактировать',
'delete' => 'Удалить',
'remove' => 'Убрать',
'delete_f' => 'будет удалена безвозвратно',
'delete_m' => 'будет удалён безвозвратно',
'continue' => 'Продолжить',
'moove' => 'Переместить',
'up' => 'выше',
'down' => 'ниже',
'done' => 'Выполнено',
'empty_data' => 'База данных пуста',
'empty_data_orders' => 'Текущих заказов нет',
'no_file' => 'Файл данных не найден',
'submit' => 'Применить',
'safe' => 'Сохранить',
'safe_and_close' => 'Сохранить и закрыть',
'safe_and_back' => 'Сохранить и продолжить редактирование',
'saved' => 'Сохранено',
'close' => 'Закрыть',
'cancel' => 'Отменить',
'add' => 'Добавить',
'added' => 'Добавлено',
'changed' => 'Изменено',
'add_folder' => 'Добавить папку',
'select' => 'Выбрать',
'allow_display' => 'Показывать посетителям',
'active' => 'Активировать',
'active_yes' => 'Активированно',
'active_no' => 'Отключено',
//'yes' => 'Да',
//'no' => 'Нет',
'on_off' => 'Вкл./Выкл.',
'new_staff' => 'Новый сотрудник',
'new_category' => 'Новая категория',
'new_service' => 'Новая услуга (объект)',
'reset' => 'Сбросить',
'folder' => 'Папка',
'create_new_folder' => 'Имя новой папки',
'to_folder' => 'папку',
'delete_folder' => 'Внимание. Всё содержимое папки будет так же удалено.',
'back' => 'Назад',
'upload' => 'Загрузить',
'select_file' => 'Выберете файл',
'search' => 'Поиск',
'not_found' => 'Не найдено',
'empty_search' => 'Запрос пуст.',
'title_search' => 'Результаты по запросу:',
'allow_html' => 'Можно использовать HTML',
'title_lost_pass_mess' => 'Ваши учётные данные для',
'no_category' => 'Без категории',
'category_not_found' => 'Категория не найдена',
'category_empty' => 'Категорий нет',
'select_staff' => 'Назначить персонал',
'select_list_staff' => 'Выберете персонал',
'add_staff' => 'Добавить сотрудника',
'staff_not_found' => 'Пользователь не найден',
'operation_mode' => 'Режим работы',
'unit_time' => 'Единица времени',
'year' => 'год',
'month' => 'месяц',
'months' => 'месяцев',
'week' => 'неделя',
'weeks' => 'недель',
'day' => 'день',
'days' => 'дней',
'hour' => 'час',
'hours' => 'часы',
'minutes' => 'минуты',
'time_start' => 'Начало',
'time_end' => 'Окончание',
'spots' => 'Места',
'c_spots' => 'мест',
'total_spots' => 'всего',
'min_spots' => 'миним.',
'max_spots' => 'макс.',
'count_spots_order' => 'счит.',
'error_counts_spots' => 'Не соответствие по количеству мест (всего, минимум, максимум).',
'pay' => 'Оплата',
'price' => 'цена',
'currency' => 'валюта',
'select_currency' => 'Выбор валюты',
'add_unit_time' => 'Добавить единицу времени',
'confirm_close' => 'Закрыть без сохранения?',
'empty_staff' => 'Произошла ошибка в назначении персонала. Выберете сотрудников.',
'empty_staff_checkbox' => 'Должен быть минимум один сотрудник.',
'empty_days_checkbox' => 'Должен быть минимум один день',
'daily' => 'Посуточно',
'hourly' => 'По времени',
'daily_interval' => 'Интервал',
'provide' => 'Предоставление услуги / объекта',
'allow_today' => 'Разрешить заказы/бронь на текущую дату?',
'working_days' => 'Рабочие дни в неделе',
'status' => 'статус',
'mode' => 'режим',
'disabled_day' => 'не рабочий день',
'closed_day' => 'дата закрыта',
'change_price' => 'изменённая цена',
'to_plus' => '&uarr; в плюс',
'to_minus' => '&darr; в минус',
'no_use' => 'не использовать',
'shift_prise' => 'сместить цену',
'sum' => 'сумма',
'in_sum' => 'на сумму',
'settings_month_days_cp' => 'Установка не рабочих дней в году или дней с изменённой ценой',
'today' => 'Сегодня',
'fix_price' => 'Фиксированная цена',
'use' => 'Задействовать',
'go_top' => 'Наверх',
'go_bottom' => 'Вниз',
'promo_code' => 'Промокод',
'discount' => 'Скидка',
'discount_use_promo_code' => 'Скидка (промокод)',
'code' => 'Код',
'discount_count' => 'Вычитать',
'discount_sum' => '(=) Сумму',
'discount_percent' => '(%) Процент',
'queue' => 'Очерёдность',
'wording' => 'Формулировка',
'booking_go' => 'Забронировать',
'order_go' => 'Заказать',
'total_spots_all_time' => 'Места для всех единиц времени',
'select_only_row' => 'Выбор дат или времени только подряд',
'active_two_monts' => 'Сделать доступными только текущий и следующий месяц',
'client' => 'Клиент',
'status_order' => 'Статус',
'not_found_obj' => 'объект / услуга не найдена',
'check_order' => 'С отмеченными',
'change_status' => 'Сменить статус',
'error_act_orders' => 'В данный момент список редактировался и изменился, один или несколько заказов уже отсутствуют в этом списке.',
'warrring_act_orders' => 'В данный момент список редактировался другими пользователями и изменился.',
'not_found_act_order' => 'Данный заказ уже отсутствует в этом списке.',
'cat_link' => 'Ссылка только на эту категорию',
'order_actual' => 'Актуальные',
'more' => 'Ещё',
'all_orders' => 'Все текущие заказы',
'order_more_deck' => 'Список вместе с истёкшими заказами двухдневной давности',
'my_orders' => 'Мои заказы',
'reservation' => 'Зарезервировать',
'order_number' => 'Номер заказа',
'history' => 'История',
'history_desc' => 'Все оплаченные заказы с истёкшим сроком',
'statistics' => 'Статистика',
'statistics_desc' => 'Статистика',
'clients' => 'Клиенты',
'clients_desc' => 'Клиенты',
'common_settings' => 'Общие',
'form_settings' => 'Форма',
'mail_settings' => 'Почта',
'design_settings' => 'Оформление',
'curr_code_sett' => 'Валюта',
'curr_simb_sett' => 'Знак',
'curr_pos_sett' => 'Позиция знака валюты',
'curr_left_sett' => 'Слева от цифры',
'curr_right_sett' => 'Справа от цифры',
'add_currency' => 'Добавить валюту',
'error_empty_curr_simbol' => 'Не установлен знак валюты',
'error_empty_input' => 'Не заполнено поле',
'inp_org_name' => 'Название организации',
'inp_org_desc' => 'Краткое описание (для мета-заголовка)',
'inp_org_phone' => 'Номер телефона (для контактной информации в уведомлениях)',
'inp_org_mail' => 'Общий E-mail (для контактной информации в уведомлениях)',
'inp_onoff_sent_mail' => 'Включить отправку уведомлений',
'inp_org_sent_mail' => 'Отправлять копии уведомлений на общий E-mail',
'inp_mail_status' => 'Отправлять заказчикам уведомления о изменении статуса заказа',
'inp_confirm_mail' => 'Включить подтверждение заказов по ссылке в уведомлении',
'inp_captcha' => 'Captcha - Защита от автоматической отправки данных',
'inp_conf_form0' => 'При заказе требуется указать E-mail и номер телефона',
'inp_conf_form1' => 'Только E-mail',
'inp_conf_form2' => 'Только номер телефона (самостоятельное подтверждение заказа будет невозможно)',
'active_colors' => 'Цвет активных элементов',
'color1' => 'Основной',
'color2' => 'При наведении',
'reset_colors' => 'Сброс цвета по умолчанию',
'inp_custom_css' => 'Свой CSS',
'inp_custom_header' => 'Содержимое верхней части - "шапка" (HTML, JS)',
'inp_custom_footer' => 'Содержимое нижней части - "подвал" (HTML, JS)',
'payment' => 'Оплата',
'read_modules_error' => 'Не найден каталог модулей',
'payment_modules' => 'Платёжные модули',
'payment_way' => 'Способ оплаты',
'payment_fact' => 'наличными',
'pages' => 'Страницы',
'view_count_l' => 'Показать по',
'view_count_r' => 'заказов на страницу',
'id_link' => 'ID объекта',
'id_cat_link' => 'ID категории',



'count_orders' => 'Кол-во заказов',
'total_count_orders' => 'Всего заказов',
'total_count_summ_currency' => 'Общая сумма в валюте',
'found_order' => 'Найдено заказов',
'view_orders_select_month' => 'Посмотреть заказы за выбранный месяц',
'reset_search' => 'Сбросить поиск',
'not_specified' => 'не указано',
'identify_mail' => 'идентифицировать по E-mail адресу',
'identify_phone' => 'идентифицировать по номеру телефона',
'view_orders' => 'Показать заказы',


'help_units_time' => 'Создайте нужное количество единиц рабочего времени (сессии, сеансы, рейсы и т.п.). Установите время начала и окончания каждой единицы ("с" и "до"). В случае, когда не нужно устанавливать конкретное время окончания, в поле "часы" выберете "XX".<div class="br_dec"><span></span></div>Если требуется учитывать расход мест, то в поле "всего" укажите их общее количество. В этом случае, за один заказ/бронь можно занять только одну единицу времени и она будет доступна пока в ней не закончатся все места на конкретную дату. (Пример: бронирование рейсов.) При значении "0", в поле "всего", выше описанный функционал по учёту мест в процессе заказа/бронирования участвовать не будет. Поля "миним." и "макс." предназначены для установки ограничений. В "миним." (минимум) указывается количество мест, меньше которого занять будет нельзя, "макс." (макимум) - сколько всего мест можно занять за один заказ/бронь. Выбранное посетителем количество мест можно сделать не влияющим на стоимость, для этого выставите "Нет" в поле "счит." (считать), тогда места не будут подсчитываться при калькуляции общей стоимости. В случаях где требуется дать возможность заказывать/бронировать по нескольку единиц времени за один заказ и учитывать количество мест в стоимости, установите их максимальное число в опции "<a href="#all_time_spots" class="scrollto">Места для всех единиц времени</a>". (Пример: бронирование мест общего пользования на нескольких человек с почасовой оплатой.)',

'help_daily' => 'Если требуется учитывать расход мест, то в поле "всего" укажите их общее количество. В этом случае, за один заказ/бронь можно занять только одну дату и она будет доступна пока в ней не закончатся все места. (Пример: бронирование экскурсий.) При значении "0", в поле "всего", выше описанный функционал по учёту мест в процессе заказа/бронирования участвовать не будет. Поля "миним." и "макс." предназначены для установки ограничений. В "миним." (минимум) указывается количество мест, меньше которого занять будет нельзя, "макс." (макимум) - сколько всего мест можно занять за один заказ/бронь. Выбранное посетителем количество мест можно сделать не влияющим на стоимость, для этого выставите "Нет" в поле "счит." (считать), тогда места не будут подсчитываться при калькуляции общей стоимости.<br />В случаях где требуется дать возможность заказывать/бронировать по нескольку дат за один заказ и учитывать количество мест в стоимости, установите их максимальное количество в опции "<a href="#all_time_spots" class="scrollto">Места для всех единиц времени</a>".',

'help_dis_days_cp' => 'В положении "не рабочий день", установленные даты станут не активными и произвести на них заказ/бронь будет нельзя. Если требуется установить дополнительную стоимость на конкретные дни, то выставите значение "изменённая цена", тогда при выборе этих дат, стоимость будет смещена на указанную сумму. В почасовом режиме, будет изменена стоимость каждой единицы времени.',

'help_working_days' => 'Выберете не рабочие дни в неделе или установите смещение стоимости. (На пример, если по выходным цена должна быть выше. В почасовом режиме, будет изменена стоимость каждой единицы времени.)',

'help_fix_price' => 'Установка фиксированной стоимости, вне зависимости от количества выбранных дней или единиц времени.<br />(Введите  "0" в поле "сумма" или оставьте его пустым, что бы не использовать фиксированную цену.)',

'help_promo_code' => 'Предоставление скидки по средствам промокода. Установленная сумма или процент будет вычтен из общей стоимости заказа, если посетитель введёт указанный набор символов в поле "Промокод". Что бы не использовать скидку, оставьте поле "Промокод" пустым. ',

'help_queue' => 'Включите эту опцию, если оказание услуги должно производиться в порядке очереди. На пример если для всех услуг задействовано всего одно место или помещение. Занятое время в других услугах, на те же даты, будет недоступно и в этой. В посуточном режиме будут недоступны даты, занятые в других услугах.',

'help_total_spots_all_time' => 'В случаях когда требуется дать возможность заказывать/бронировать по нескольку дат или единиц времени за один заказ и учитывать количество мест в стоимости, установите их максимальное число в этой опции. Все установки относительно мест в единицах времени или дате, учитываться не будут. Что бы не использовать данную опцию, установите значение "0" или оставьте пустым.',

'help_orders' => 'Не актуальные заказы, по истечении двухдневного срока, автоматически удаляются из этого списка. Заказы со статусом "оплачен", перемещаются в <a href="logbook.php">историю</a>.<div class="br_dec"><span></span></div>В поле поиска, кроме вставки даты, так же можно набирать <i>номер заказа</i>, <i>имя заказчика</i>, его <i>e-mail</i> и <i>номер телефона</i>, а так же <i>название объекта</i> <i>или категории</i>.',


'php_ver_error1' => 'Внимание! Ваша версия <b>PHP</b> устарела',
'php_ver_error2' => 'Система может не корректно работать на данном сервере. Требуется PHP не старше <b>5.3.0</b> версии.',

//=========================================USER INTERFACE & OTHER

'back_to_current_month' => 'Вернуться в текущий месяц',
'back_month' => 'Предыдущий месяц',
'next_month' => 'Следующий месяц',
'go_submit' => 'Перейти',
'time_busy' => 'Время занято',
'day_busy' => 'Этот день занят',
'lost_time' => 'Истёкшее время',
'lost_day' => 'Истёкший день',
'active_time' => 'Время свободно',
'active_day' => 'Выбрать дату',
'error_bd_serv_connect' => 'База данных услуг/объектов отсутствует.',
'bd_serv_empty' => 'База данных услуг/объектов пуста.',
'open' => 'Открыть',
'select_date' => 'Не выбрана дата',
'total_price' => 'Итог',
'open_card_staff' => 'Открыть карточку сотрудника',
'card_staff' => 'Карточка сотрудника',
'in' => 'на',
'comment' => 'Комментарий (примечания)',
'mail_temp' => 'E-mail',
'not_active_dates' => 'Дата не доступна',
'dates_busy' => 'Эти даты уже заняты',
'times_busy' => 'Это время уже занято',
'order_ok_title' => 'оформление заказа успешно завершено',
'booking_dates' => 'Выбранные даты',
'booking_times' => 'Выбранное время',
'to_pay' => 'К оплате',
'print' => 'Распечатать',
'order_in' => 'Заказ на имя',
'contact_info' => 'Контактная информация',
'enter_promocode_discount' => 'Если у вас есть промокод, введите его и получите скидку',
'error_promo_code' => 'Не верный промокод',
'your_discount' => 'Ваша скидка',
'obj_name' => 'Наименование',
'select_count_spots' => 'кол-во мест',
'reset_select_time' => 'Сбросить выбор времени',
'error_select_dates' => 'Не выбраны даты',
'error_select_time' => 'Не выбрано время',
'error_max_spots' => 'Выбранное количество мест больше допустимого',
'error_min_spots' => 'Выбранное количество мест меньше допустимого',
'error_empty_spots' => 'Не указанно количество мест',
'error_simbol_spots' => 'Ошибка в поле количества мест',
'fix_price_hh' => 'Не зависит от количества выбранного времени',
'fix_price_hd' => 'Не зависит от количества выбранных дней',
'price_variable' => 'варьируется',
'price_null' => 'бесплатно',
'enable_spots' => 'доступно',
'vacancy_spots' => 'свободных мест',
'end_spots' => 'Нет свободных мест',
'end_spots_in_time' => 'На это время нет свободных мест',
'end_spots_in_date' => 'На эту дату нет свободных мест',
'order_totlal_spots' => 'всего мест',
'order_max_allow_spots' => 'можно выбрать не более',
'order_min_allow_spots' => 'не менее',
'title_mail_message' => 'Уведомление о заказе',
'title_mail_message_change_order' => 'Изменение в заказе',
'title_mail_message_change_status' => 'Изменение статуса заказа',
'sent_cange' => 'Отправить заказчику новое уведомление (изменение заказа)',
'done_order_mail_mess' => 'На указанный вами E-mail адрес отправлено уведомление',
'confirm_order_mail_mess' => 'Пожалуйста подтвердите ваш заказ по ссылке в письме',
'confirm_order_mail_link' => 'Для подтверждения заказа перейдите по этой ссылке',
'company' => 'Организация',
'your_order_number' => 'Ваш заказ №',
'confirm_complete' => 'успешно подтверждён',
'thankyou' => 'Спасибо',
'was_confirmed' => 'уже был подтверждён',
'order_confirm_not_found' => 'Заказ не найден (подтверждение не выполнено)',
'error_captcha' => 'Неверно указан код с изображения',
'change_captcha' => 'Сменить код',
'payment_now' => 'Оплатить заказ сейчас',
'select_payment' => 'Выберете способ оплаты',
'payment_wait' => 'Выполняется перенаправление для онлайн оплаты. Пожалуйста подождите',
'payment_done' => 'успешно оплачен',
'select_only_pay' => 'Обязательная оплата',
'help_only_pay' => 'Если опция включена, то сделать заказ не выбрав способ оплаты будет нельзя.',
'add_interval' => 'Добавить интервал',
'add_date_interval' => 'Добавить промежуток времени',
'select_last_day' => 'Выберите последний день ...',
'select_first_day' => 'Выберите первый день ...',
'selected_intervals' => 'Выбранные промежутки времени',
'ordered_day' => 'Резервирующийся день',
'ordered_day_start_interval' => 'Резервирующийся день - начало интервала',
'not_accessible_date' => 'Дата не достижима',
);


?>
