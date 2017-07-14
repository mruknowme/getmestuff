<h2 class="self-start">Contact Us</h2>
<div class="mw flex s-between contact-form">
    <p class="w4">We would like to here from you about any suggestions or problems.</p>
    <form class="vertical center w5" data-parsley-validate>
        {{ csrf_field() }}
        <div class="mw input-wrapper pos-r">
            <input type="text" name="name" placeholder="Name" required>
        </div>
        <div class="mw input-wrapper pos-r">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="mw input-wrapper pos-r">
            <textarea name="message" placeholder="Your Message..." required></textarea>
        </div>
        <button class="self-start" type="submit">
            Send
        </button>
    </form>
</div>