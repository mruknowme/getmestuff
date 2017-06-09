@extends ('layouts.app')

@section ('title', ' | Wishes')

@section ('html-class', 'user-bg overflow-visible current-wishes')

@section ('body-class', 'overflow-visible')

@section ('content')
    <main class="col-12 mw m-auto main-fix">
        <user-info user="{{ auth()->user() }}"></user-info>

        <wishes :data="{{ $wishes }}"></wishes>
        {{--<section class="flex wrap between mw">--}}

        {{--@forelse($wishes as $wish)--}}
            {{--<div class="wish mw">--}}
                {{--<div class="content">--}}
                    {{--<div class="header">--}}
                        {{--<h4>{{ $wish->item }}</h4>--}}
                        {{--<p>{{ $wish->created_at->format('m/d/y') }}</p>--}}
                    {{--</div>--}}
                    {{--<div class="progress">--}}
                        {{--<p>Progress</p>--}}
                        {{--<div class="progress-bar">--}}
                            {{--<div style="width: {{ $wish->current_amount / $wish->amount_needed * 100 }}%"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="footer">--}}
                        {{--<p title="{{ $wish->current_amount." / ".$wish->amount_needed }}">Collected:--}}
                            {{--{{ shortenNum($wish->current_amount) }}/--}}
                            {{--{{ shortenNum($wish->amount_needed) }}--}}
                        {{--</p>--}}
                        {{--<form action="/wish/{{ $wish->id }}/donate" method="POST">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--{{ method_field('PATCH') }}--}}
                            {{--<input type="number" name="amount" required>--}}
                            {{--<button type="submit">Donate</button>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@empty--}}
            {{--<p>There are no wishes at the moment</p>--}}
        {{--@endforelse--}}

        {{--</section>--}}
    </main>
@endsection