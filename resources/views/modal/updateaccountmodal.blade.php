<div>
    <!-- Modal -->
    <div class="modal fade " id="update-account-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="update-account-modal-Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h1 class="modal-title fs-5" id="update-account-modal-Label">Update Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="row m-2">
                                <div class="col-5">
                                    <label for="account-Id">Account ID</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="accountid" class="form-control" id="account-id-input">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-5">
                                    <label for="account-name">Account Name</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="accountname" class="form-control" id="account-name">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-5">
                                    <label for="account-name">Bank Name</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="bankname" class="form-control" id="bank-name">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-5">
                                    <label for="account-name">Current Balance</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="currentbalance" class="form-control" id="current-balance">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-5">
                                    <label for="account-name">Date</label>
                                </div>
                                <div class="col-7">
                                    <input type="date" name="dateopened" class="form-control" id="date-opened">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="cancel" class="btn btn-secondary">cancel</button>
                    <button type="button" id="update-account" class="btn btn-primary">update</button>
                </div>
            </div>
        </div>
    </div>
</div>
