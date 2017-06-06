<section class="flex vertical start bg-white main-section" id="wish">
    <h2>Make a Wish</h2>
    <form class="vertical center mw" method="POST" action="/wishes" data-parsley-validate>
        {{ csrf_field() }}
        <div class="vertical mw center">
            <div class="mw pos-r">
                <input type="text" name="item" placeholder="What is Your Wish?" required>
            </div>
            <div class="mw pos-r">
                <input type="url" data-parsley-trigger="change" name="url" placeholder="Link to your desired product..." required>
            </div>
        </div>
        <div class="flex between mw">
            <div class="w48 pos-r">
                <input type="number" name="current_amount" placeholder="Current Amount" required>
            </div>
            <div class="w48 pos-r">
                <input type="number" name="amount_needed" placeholder="Amount Needed" required>
            </div>
        </div>
        <div class="mw divisor divisor-bg">
            <p><i class="fa fa-address-card-o" aria-hidden="true"></i><span>Please provide your full address:</span></p>
            <div class="mw pos-r">
                <input type="text" value="{{ Auth::user()->address['address_one'] ?? '' }}" name="address_one" placeholder="Address 1" required>
            </div>
            <div class="mw pos-r">
                <input type="text" value="{{ Auth::user()->address['address_two'] ?? '' }}" name="address_two" placeholder="Address 2 (optional)">
            </div>
            <div class="mw flex between">
                <div class="w3 pos-r">
                    <input type="text" value="{{ Auth::user()->address['city'] ?? '' }}" name="city" placeholder="City" required>
                </div>
                <div class="w3 pos-r">
                    <input type="text" value="{{ Auth::user()->address['post_code'] ?? '' }}" name="post_code" placeholder="Post Code" required>
                </div>
                <div class="w3 pos-r">
                    <input type="text" value="{{ Auth::user()->address['country'] ?? '' }}" name="country" placeholder="Country" required>
                </div>
            </div>
        </div>
        <div class="self-start">
            <button type="submit">Make Your Wish</button>
        </div>
    </form>
</section>