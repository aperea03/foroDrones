@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        @if ($message = Session::get('success'))
            <script>
                window.addEventListener('load', function() {
                    var toastElList = [].slice.call(document.querySelectorAll('.toast'));
                    var toastList = toastElList.map(function (toastEl) {
                    return new bootstrap.Toast(toastEl);
                    });
                    toastList.forEach((toast) => toast.show());
                });
            </script>
            {{-- TOAST --}}
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">ForoDrones</strong>
                    <small>hace 0 minutos</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ $message }}
                </div>
                </div>
            </div>
        @else
                
        @endif                
    </div>    
</div>


@endsection