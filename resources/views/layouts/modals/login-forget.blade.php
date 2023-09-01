{{-- @section('styles')
<link rel="stylesheet" href="{{ mix('/css/login-forget.css') }}">
@endsection --}}

{{-- <style>
    /* .modal-dialog {
        width:50%;
        max-width: none;
        height:50%;
        max-height: none; */
    /* } */
</style> --}}

<div id="login-forget" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Forgot Password?</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <a>No worries, we'll send you reset instructions</a>
                    <div class="">
                        <label for="email" class="email">Enter your email</label>
                    </div>
                    <input type="text" class="form-control">
                    <div class="reset-email-alert">
                        We ca'nt seem to find the right email address for<br> you.
                        resend the email that you have registreted
                    </div>
                    <div class="reset-button">
                        <button type="submit" class="btn btn-secondary shadow mt-3">
                            <a href="#" class="text-white">Reset Password</a>
                        </button>
                    </div>
                    <div class="back-login">
                        <button class="btn btn-white mt-1 shadow">
                            <a href="#" class="">Back to Login</a>
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <span>Don't have account?</span>
                    <a href="#" class="">Sign Up</a>
                </div>
            </div>
        </div>

    </div>
</div>
