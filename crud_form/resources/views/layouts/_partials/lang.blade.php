@foreach(Config::get('languages') as $lang => $language)
    @if($lang != App::getLocale())
        <a href="{{ route('lang', $lang) }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150ç">
            @if($lang == 'es')
                <i class="flag-icon flag-icon-es"></i> <!-- Spain -->
            @elseif($lang == 'en')
                <i class="flag-icon flag-icon-us"></i> <!-- United States -->
            @else
                {{ $language }}
            @endif
        </a>
    @endif
@endforeach
