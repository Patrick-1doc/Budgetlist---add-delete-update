<div>
    <!-- Modal -->
    <div class="modal fade" id="delete-account-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="delete-account-modal-Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title fs-5" id="delete-account-modal-Label">Delete Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Label for displaying account ID dynamically -->
                    <label id="account-id-delete"></label>
                    <input type="text" hidden id="deletehidden">
                </div>
                <div class="modal-footer">
                    <button type="button" id="cancel" class="btn btn-secondary">Cancel</button>
                    <button type="button" id="delete-account" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
