import Vuex from 'vuex';
import vuexI18n from 'vuex-i18n';

const store = new Vuex.Store();

Vue.use(vuexI18n.plugin, store);

const translationsEn = {
    'no-relevant-results': 'There are no relevant results at this point',

    /* Wish */
    total: "Total",
    progress: 'Progress',
    collected: 'Collected',
    donate: 'Donate',
    report: 'Report',

    /* Achievements */
    redeem: 'Redeem points for prizes',
    'not-redeem': 'Go back',

    /* Profile Settings */
    edit: 'Edit Profile',
    'first_name': 'Your First Name',
    'last_name': 'Your Last Name',
    email: 'Your Email',
    'edit_password': 'Edit Password',
    'current_password': 'Current Password',
    confirm: 'Please enter your password to confirm changes',
    save: 'Save Settings',

    /* Top Up */
    wallet: 'Wallet Top Up',
    amount: 'Amount',
    interest: 'Amount with Interes',
    'top-up': 'Top Up',

    /* Make a Wish */
    wish: 'Make a Wish',
    priority: 'This wish\'s priority will be higher.',
    item: 'What is Your Wish?',
    link: 'Link to your desired product...',
    current: 'Current Amount (default: 0)',
    needed: 'Amount Needed',
    address: 'Please provide your full address\:',
    address1: 'Address 1',
    address2: 'Address 2 (optional)',
    city: 'City',
    zip: 'Post Code',
    country: 'Country',
    request: 'Make Your Wish',
    'not-donated': 'Looks like you haven\'t donated yet. Please donate and come back to make your wish.',

    /* Random Wish */
    random: 'Random Wish',

    /* User Wishes */
    user: 'Your Current Wish',
    'no-wishes': 'You don\'t have any wishes yet.'
};

const translationsRu = {
    'no-relevant-results': 'На данный момент нет соответствующих результатов',

    /* Wish */
    total: "Всего",
    progress: 'Прогресс',
    collected: 'Собрано',
    donate: 'Дать',
    report: 'Пожаловаться',

    /* Achievements */
    redeem: 'Обменять очки на призы',
    'not-redeem': 'Вернутся назад',

    /* Profile Settings */
    edit: 'Настроить Профиль',
    'first_name': 'Ваше Имя',
    'last_name': 'Ваша Фамилия',
    email: 'Ваш Email',
    'edit_password': 'Изменить Пароль',
    'current_password': 'Текущий Пароль',
    confirm: 'Введите пароль что бы подтвердить изменения',
    save: 'Сохранить',

    /* Top Up */
    wallet: 'Пополнить Кошелек',
    amount: 'Сумма',
    interest: 'Сумма с Комиссией',
    'top-up': 'Пополнить',

    /* Make a Wish */
    wish: 'Создать Желание',
    priority: 'Приоритет этого желания будет выше.',
    item: 'Чего бы вы хотели?',
    link: 'Ссылка на ваш продукт...',
    current: 'Текущая Сумма (0)',
    needed: 'Необхадимая Сумма',
    address: 'Пожалуйста, укажите свой полный адрес\:',
    address1: 'Адрес 1',
    address2: 'Адрес 2 (необязательно)',
    city: 'Город',
    zip: 'Индекс',
    country: 'Страна',
    request: 'Загрузить',
    'not-donated': 'Похоже вы еще не пожертвовали. Пожалуйста, пожертвуйте и возращайтесь сюда.',

    /* Random Wish */
    random: 'Случайное Желание',

    /* User Wishes */
    user: 'Ваше Текущее Желание',
    'no-wishes': 'У вас пока нет желаний.'
};

Vue.i18n.add('en', translationsEn);
Vue.i18n.add('ru', translationsRu);