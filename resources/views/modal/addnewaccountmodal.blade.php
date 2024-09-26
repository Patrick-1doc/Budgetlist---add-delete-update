<div>
   <!-- Modal -->
<div class="modal fade " id="add-new-account-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="add-new-account-modal-Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h1 class="modal-title fs-5" id="add-new-account-modal-Label">Add Account</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
                <div class="row m-2">
                    <div class="col-5">
                        <label for="account-name">Account ID</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="accountid" class="form-control" id="account-id">
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
          <button type="button" id="create-or-update-account" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
</div>
