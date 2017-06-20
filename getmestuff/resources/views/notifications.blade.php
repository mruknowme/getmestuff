@extends ('layouts.app')

@section ('title', ' | Notifications')

@section ('html-class', 'overflow-visible user-bg notifications')

@section ('body-class', 'overflow-visible')

@section ('content')
    <main class="col-12 mw m-auto main-fix flex vertical center">
        <user-info :user="{{ auth()->user() }}"></user-info>
        
        <div class="mw flex s-between">
            <div class="w48">
                @forelse($notifications as $key => $data)
                    <div class="notification bg-white mw flex vertical start">

                        @if (\Carbon\Carbon::parse($key)->isToday())
                            <h3 class="mw">Today</h3>
                        @elseif (\Carbon\Carbon::parse($key)->isYesterday())
                            <h3 class="mw">Yesterday</h3>
                        @else
                            <h3 class="mw">{{ \Carbon\Carbon::parse($key)->format('d-m-y') }}</h3>
                        @endif

                        @foreach($data as $key => $notification)
                            <div class="notification-info mw">
                                <h4>{{ $key }}</h4>
                                <p>Donated: {{ $notification['total'] }}$ by {{ $notification['count'] }} people.</p>
                            </div>
                        @endforeach

                    </div>
                @empty
                    <div class="mw flex center bg-white empty">
                        <p>You don't have any notifications yet.</p>
                    </div>
                @endforelse
            </div>

            <div class="wallet-notification w48">
                <div class="notification bg-white mw flex vertical start">
                    <h3 class="mw">Wallet Topup</h3>

                    @forelse($topups as $topup)
                        <div class="notification-info mw pos-r">
                            <h4>{{ $topup->created_at->format('d-m-y') }}</h4>
                            <p>Walet Topup: {{ $topup->amount }}$ <span>(+ {{ $topup->interest }}$)</span></p>
                            @if ($topup->successful == 1)
                                <i class="pos-a fa fa-check-circle" aria-hidden="true"></i>
                            @else
                                <i class="pos-a fa fa-exclamation-circle" aria-hidden="true"></i>
                            @endif
                        </div>
                    @empty
                        <div class="mw flex center empty">
                            <p>You haven't made any transactions yet</p>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    </main>
@endsection