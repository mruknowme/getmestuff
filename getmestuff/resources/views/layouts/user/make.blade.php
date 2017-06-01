<section class="flex vertical start bg-white main-section" id="wish">
    <h2>Make a Wish</h2>
    <form class="vertical center mw">
        <div class="vertical mw center">
            <div class="mw">
                <input type="text" name="yourwish" placeholder="What is Your Wish?" required>
            </div>
            <div class="mw">
                <input type="text" name="linkwish" placeholder="Link to your desired product..." required>
            </div>
        </div>
        <div class="mw divisor divisor-bg">
            <p><i class="fa fa-address-card-o" aria-hidden="true"></i><span>Please provide your full address:</span></p>
            <div class="mw">
                <input type="text" name="streetone" placeholder="Address 1" required>
            </div>
            <div class="mw">
                <input type="text" name="streettwo" placeholder="Address 2 (optional)">
            </div>
            <div class="mw flex between">
                <div class="w3">
                    <input type="text" name="city" placeholder="City" required>
                </div>
                <div class="w3">
                    <input type="text" name="zip" placeholder="Zip Code" required>
                </div>
                <div class="w3">
                    <input type="text" name="country" placeholder="Country" required>
                </div>
            </div>
        </div>
        <div class="self-start">
            <button type="submit">Make Your Wish</button>
        </div>
    </form>
</section>