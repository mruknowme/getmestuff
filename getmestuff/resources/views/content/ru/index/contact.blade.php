<h2 class="self-start">Свяжитесь с нами</h2>
<div class="mw flex s-between contact-form">
    <p class="w4">Мы бы хотели услашть что-то</p>
    <form class="vertical center w5" data-parsley-validate>
        {{ csrf_field() }}
        <div class="mw input-wrapper pos-r">
            <input type="text" name="name" placeholder="Имя" required>
        </div>
        <div class="mw input-wrapper pos-r">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="mw input-wrapper pos-r">
            <textarea name="message" placeholder="Ваше сообщение..." required></textarea>
        </div>
        <button class="self-start" type="submit">
            Отправить
        </button>
    </form>
</div>