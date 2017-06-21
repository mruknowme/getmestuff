@extends ('layouts.app')

@section ('title', ' | Notifications')

@section ('html-class', 'overflow-visible user-bg notifications')

@section ('body-class', 'overflow-visible')

@section ('content')
    <main class="col-12 mw m-auto main-fix flex vertical center">
        <user-info :user="{{ auth()->user() }}"></user-info>
        
        <div class="mw flex s-between">
            <notifications></notifications>
            <payments></payments>
        </div>
    </main>
@endsection