<section class="mw flex between user-info">
    <p>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
    <p>{{ Auth::user()->balance }}$</p>
</section>