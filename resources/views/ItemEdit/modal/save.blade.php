<style>
    .card-modal{
        width: 35%;
        margin-left: 32%;
        height: 300px;
    }

    .card-body{
    background-image: url('../images/carrot.jpg');
    background-size: cover;
    height: 250px;
    border-radius: 15px 15px 0px 0px;
    }

    h2{
        color: rgb(117,123,157)
    }
    .modal-form{
        display: flex;
    }
    .modal-close-button{
        margin-right: 270px;
        padding: 10px 100px 10px 100px;
        border-radius: 10px;
        background-color: rgb(102,153,204);
        color: white;
        border: none;
        margin-top: 0;
        margin-bottom: 50px;
    }
</style>

<div class="row justify-content-center">
    <div class="modal fade" id="save-item">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="mx-auto pt-3">Item has been changed !!</h2>
                </div>
                <div class="modal-body">
                    <div class="mt-3 align-items-center">
                        <div class="card card-modal">
                            <div class="card-body">
    
                            </div>
                            <div class="card-footer" style="background-color: rgb(216,230,233)">
                                <div class="border border-rounded" style="background-color: rgb(153,204,255)">
                                    <p class="h2 text-center">ITEM NAME</p>
                                    <p class="h4 text-center">Chicken</p>
                                    <p class="h5 px-1">PRICE :</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="button" class="modal-close-button" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
</div>