<section class="flex vertical start bg-white main-section achievements">
    <h2>Your Achievements</h2>
    <div class="flex nc-between mw">
        <div class='donated'>
            <div>
                <p>Donated:</p>
                <p><span>{{ auth()->user()->amount_donated }}</span>$</p>
            </div>
            <div>
                <p>Recieved:</p>
                <p><span>{{ auth()->user()->amount_received }}</span>$</p>
            </div>
        </div>
        <div class="w8 achievements-info">
            <div class="pos-r stars flex nc-between">
                <div class="w8 star-info">
                    <p>Use points to get an extra <a>Wish</a> (200 points)</p>
                    <p>(Click on a badge for more info.)</p>
                </div>
                <p>{{ auth()->user()->points }} <i class="currency fa fa-trophy" aria-hidden="true"></i></p>
            </div>
            <div class="mw flex s-between wrap">
                @foreach($achievements as $achievement)
                    <badge image="{{ asset('images/badge.svg') }}"
                           :achievement="{{ $achievement }}"
                           :userinfo="{{ auth()->user()->achievements }}"></badge>
                @endforeach
            </div>
        </div>
    </div>
</section>