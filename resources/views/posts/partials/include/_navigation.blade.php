
<div class="row justify-content-center">
    <div class="mt-4">
        <div class="mt-5">
            @section('title')
                @if ($view == 'index')
                    <h4>{{ trans('Posts') }}</h4>
                @elseif($view == 'show')
                    <h4>{{ trans('Post') }}</h4>
                @endif
            @endsection
        </div>
    </div>
</div>
