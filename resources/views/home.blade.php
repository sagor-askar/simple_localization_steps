@extends('layouts.app')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <hr>

                    <!-- language selector -->
                     <div class="col-md-2 col-md-offset-6 text-right">
                        <strong>Select Language: </strong>
                    </div>

                    <div class="col-md-4">

                        <select class="form-control changeLang">

                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>

                            <option value="bn" {{ session()->get('locale') == 'bn' ? 'selected' : '' }}>Bangla</option>
                        </select>
                    </div>
                    
                    <hr>

                    <h3>{{ __('message.title') }}</h3>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var url = "{{ route('changeLang') }}";
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>
@endsection
