<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {

    // Toggle NEET score field
    $('.neet-radio').on('change', function () {
        $('#neetScoreDiv').toggle($(this).val() === 'yes');
    });

    // Initial visibility check
    $('#neetScoreDiv').toggle($('.neet-radio:checked').val() === 'yes');

    // Download button click
    $('.download-btn').on('click', function (e) {
        e.preventDefault();
        let fileUrl = $(this).data('file-url');

        $.get("{{ route('check.enquiry.session') }}", function (response) {
            if (response.session_exists) {
                window.location.href = fileUrl;
            } else {
                $('#file_url').val(fileUrl);
                $('#enquiryModal').modal('show');
            }
        });
    });

    // Form submission with csrf_token() injected from Laravel
    $('#enquiryForm').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: "{{ route('submit.enquiry') }}",
            type: "POST",
            data: $('#enquiryForm').serialize(),
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            success: function (response) {
                $('#enquiryModal').modal('hide');
                if (response.file_url) {
                    window.location.href = response.file_url;
                }
            },
            error: function () {
                alert('Submission failed. Please check inputs and try again.');
            }
        });
    });
});
</script>
