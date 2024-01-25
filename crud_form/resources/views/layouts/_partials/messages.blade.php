@if($message = Session::get('success'))
    <div style="position: fixed; top: 0; left: 50%; transform: translateX(-50%); z-index: 1000; width: 300px; padding: 15px; background-color: green; color: white; text-align: center;">
        <p>{{ $message }}</p>
    </div>
@endif

@if($message = Session::get('danger'))
    <div style="position: fixed; top: 0; left: 50%; transform: translateX(-50%); z-index: 1000; width: 300px; padding: 15px; background-color: red; color: white; text-align: center;">
        <p>{{ $message }}</p>
    </div>
@endif
