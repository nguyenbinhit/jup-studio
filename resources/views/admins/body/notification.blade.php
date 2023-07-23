@if (Session::has('success'))
    <div style="position: absolute; top: 8.5rem; right: 0; z-index: 10000; width: 300px;">
        <!-- Then put toasts within -->
        <div class="toast fade show ribbon-box" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
            <div class="ribbon-two ribbon-two-primary"><span>Success</span></div>
            <div class="toast-header">
                <img src="{{ asset('../bootstrap-admin/images/users/avatar-4.jpg') }}" alt="brand-logo" height="28"
                    class="mr-1 rounded">
                <strong class="mr-auto">{{ auth()->user()->name }}</strong>
                <small class="text-muted">vừa xong</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body" style="word-wrap: break-word;">
                {{ Session::get('success') }}
            </div>
        </div>
        <!--end toast-->
    </div>
@elseif (Session::get('error'))
    <div style="position: absolute; top: 8.5rem; right: 0; z-index: 10000; width: 300px;">
        <!-- Then put toasts within -->
        <div class="toast fade show ribbon-box" role="alert" aria-live="assertive" aria-atomic="true"
            data-toggle="toast">
            <div class="ribbon-two ribbon-two-danger"><span>Danger</span></div>
            <div class="toast-header">
                <img src="{{ asset('../bootstrap-admin/images/users/avatar-4.jpg') }}" alt="brand-logo" height="28"
                    class="mr-1 rounded">
                <strong class="mr-auto">{{ auth()->user()->name }}</strong>
                <small class="text-muted">vừa xong</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body" style="word-wrap: break-word;">
                {{ Session::get('error') }}
            </div>
        </div>
        <!--end toast-->
    </div>
@endif
{{-- <div class="card-box ribbon-box">
    <div class="ribbon-two ribbon-two-primary"><span>Primary</span></div> --}}
