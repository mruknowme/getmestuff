@extends ('layouts.app')

@section ('title', ' | Contact')

@section ('html-class', 'overflow-visible user-bg contact')

@section ('body-class', 'overflow-visible')

@section('content')
    <main class="col-12 mw mh m-auto main-fix flex">
        <section class="contact-form bg-white flex vertical start w68">
            <h1>Contact Us</h1>
            <contact-form></contact-form>
        </section>
        <section class="social-widgets">
            <social-widgets></social-widgets>
        </section>
    </main>
@endsection