 <div class="modal fade error-modal" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        User Error
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="error-icon">
                        <i class="bi bi-x-circle-fill"></i>
                    </div>
                    <h4 class="error-title">Oops! Something went wrong</h4>
                    <p class="error-message">
                        Email or password is incorrect
                    </p>
                    <div class="alert alert-danger" role="alert">
                        <strong>Error Code:</strong> 401 - invalid Credentials
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg me-1"></i>
                        Dismiss
                    </button>
                </div>
            </div>
        </div>
</div>