<!-- Modal -->
<div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    <iframe src="{{ route('register_form_page', ['type'=>$type]) }}" width="100%" height="auto" class="embed-responsive-item" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $('#register_modal').on('show.bs.modal', function (event) {
        $(this).find('iframe').trigger('resize');
    })
</script>
@endpush