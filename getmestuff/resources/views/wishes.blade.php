@extends ('layouts.app')

@section ('title', ' | Wishes')

@section ('html-class', 'user-bg overflow-visible current-wishes')

@section ('body-class', 'overflow-visible')

@section ('content')
    <main class="col-12 mw m-auto main-fix">
        @include ('layouts.user.info')
        <section class="flex wrap between mw">

        @foreach($wishes as $wish)
            <div class="wish mw">
                <div class="content">
                    <div class="header">
                        <h4>{{ $wish->item }}</h4>
                        <p>{{ $wish->created_at->format('m/d/y') }}</p>
                    </div>
                    <div class="progress">
                        <p>Progress</p>
                        <div class="progress-bar">
                            <div style="width: {{ $wish->current_amount / $wish->amount_needed * 100 }}%"></div>
                        </div>
                    </div>
                    <div class="footer">
                        <p>Collected: {{ $wish->current_amount }}/{{ $wish->amount_needed }}</p>
                        <form>
                            <input type="number" name="amount" required>
                            <button type="submit">Donate</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

        </section>
    </main>
@endsection