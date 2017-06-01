<section class="flex vertical start bg-white main-section" id="settings">
    <h2>Edit Profile</h2>
    <form class="mw vertical center">
        <div class="mw">
            <input type="text" id="firstname" name="firstname" placeholder="Your Name" autocomplete="off">
            <input type="text" id="lastname" name="lastname" placeholder="Your Last Name" autocomplete="off">
            <input type="email" id="email" name="email" placeholder="Your Email" autocomplete="off">
            <div>
                <input type="password" id="paswd" name="paswd" placeholder="Edit Password">
            </div>
        </div>
        <div class="divisor divisor-bg mw">
            <p><i class="fa fa-key" aria-hidden="true"></i><span>Please enter your current password to confirm changes:</span></p>
            <input type="password" id="currentpaswd" name="currentpaswd" placeholder="Your Current Password" autocomplete="off">
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