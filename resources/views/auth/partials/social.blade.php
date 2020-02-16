<div class="card my-4">
    <div class="card-header">{{ __('Social Login') }}</div>
    <div class="card-body">
        <a href="{{ route('auth.social.github') }}" class="btn btn-social btn-dark">
            <span class="fab fa-github mr-2 pr-2 border-right"></span>
            Sign in with GitHub
        </a>
    </div>
</div>

<style>
    .btn-social {
        position: relative;
        text-align: left;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
