<section class="flex vertical start bg-white main-section" id="settings">
    <h2>Edit Profile</h2>
    <form class="mw vertical center" action="/home/update" method="POST" data-parsley-validate>
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="mw">
            <div class="mw pos-r">
                <input type="text" id="first_name" name="first_name" placeholder="Your Name" value="{{ Auth::user()->first_name }}" autocomplete="off">
            </div>
            <div class="mw pos-r">
                <input type="text" id="last_name" name="last_name" placeholder="Your Last Name" value="{{ Auth::user()->last_name }}" autocomplete="off">
            </div>
            <div class="mw pos-r">
                <input data-parsley-trigger="change" type="email" id="email" name="email" placeholder="Your Email" value="{{ Auth::user()->email }}" autocomplete="off">
            </div>
            <div class="mw pos-r">
                <input data-parsley-trigger="change" minlength="8" type="password" id="password" name="password" placeholder="Edit Password">
            </div>
        </div>
        <div class="divisor divisor-bg mw">
            <p><i class="fa fa-key" aria-hidden="true"></i><span>Please enter your current password to confirm changes:</span></p>
            <div class="mw pos-r">
                <input type="password" id="current_password" name="current_password" placeholder="Your Current Password" autocomplete="off" required>
            </div>
            <!-- <span>
                <i aria-hidden="true"></i>
                <i aria-hidden="true"></i>
            </span> -->
        </div>
        <div class="self-start">
            <button type="submit">Save Changes</button>
        </div>
    </form>
</section>