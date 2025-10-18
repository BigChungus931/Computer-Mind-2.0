<!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Auto-show modal on page load
        document.addEventListener('DOMContentLoaded', function() {
            const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
            errorModal.show();
        });

        // Optional: Add some interaction logging
        document.getElementById('errorModal').addEventListener('shown.bs.modal', function () {
            console.log('Error modal displayed');
        });

        document.getElementById('errorModal').addEventListener('hidden.bs.modal', function () {
            console.log('Error modal dismissed');
        });
    </script>