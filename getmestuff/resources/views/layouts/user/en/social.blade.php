<section class="flex vertical start bg-white main-section ref">
    <h2>Social Info</h2>
    <div class="flex around mw">
        <div class="flex vertical center ref-link">
            <p>Your ref link is:</p>
            <a href="/register/{{ auth()->user()->ref_link }}">getmestuff.dev/register/{{ auth()->user()->ref_link }}</a>
        </div>
        <div class="w4 ref-count flex vertical center divisor-bg">
            <p>Number of refs:</p>
            <p>{{ $ref_count }}</p>
        </div>
    </div>
</section>