@extends ('layouts.app')

@section ('title', ' | Login')

@section ('html-class', 'login overflow-visible')

@section ('body-class', 'overflow-visible')

@section ('content')
    <main class="mh mw">
        <section class="pos-r flex vertical center">
            <tabs form="{{ $form }}">
                <tab name="Sign Up">
                    @include ('auth.layouts.register')
                </tab>
                <tab name="Log In">
                    @include ('auth.layouts.login')
                </tab>
            </tabs>
        </section>
    </main>
@endsection
