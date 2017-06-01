<div class="forgot-form pos-a" style="display: none;">
    <div class="pos-a arrow"></div>
    <div class="pos-r mw pas-wrapper">
        <form class="pos-a pos-center mw flex vertical start" id="forgotform" method="POST" action="{{ route('password.request') }}" style="display: block">
            {{ csrf_field() }}
            <label>Enter your email:</label>
            <div class="flex start">
                <input id="mailf" name="mailf">
                <button>Send</button>
            </div>
        </form>
        <div class="done" style="display: none">
            <i class="fa fa-check-circle fa-2x pos-r" aria-hidden="true"></i>
            <p>Check your inbox</p>
        </div>
    </div>
</div>
<div class="overlay"></div>