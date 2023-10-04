<style>
    .reset-btn{
        background-color: rgb(51,102,153);
        color: white;
        border: none;
        border-radius: 10px;
        padding: 10px 0px 10px 0px;
        margin-top: 30px;
    }
</style>
<div class="row justify-content-center">
    <div class="modal fade" id="forgot-password">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="mx-auto pt-3">Forgot Password ?</h2>
                </div>
                <div class="modal-body">
                    <p class="h5 text-muted text-center">No worries, we'll send you reset instructions</p>
                    <div class="mt-3 align-items-center">
                        <div class="card card-modal">
                            <div class="card-body">
                                <form action="#" method="post">
                                    @csrf
                                    @method('PATCH')

                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-6">
                                            <div class="row">
                                                <label for="email" class="form-label">Enter your Email</label>
                                                <input type="email" name="enail" id="email" class="form-control">

                                                <button type="submit" class="reset-btn">Reset Password</button>
                                            </div>
                                        </div>
                                        <div class="col-3"></div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="#" method="post" class="modal-form">
                        @csrf
                        @method('DELETE')
    
                        <button type="button" class="modal-button" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="modal-delete-button">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="row">

</div> 



