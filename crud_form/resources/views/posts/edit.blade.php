<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('posts.update', $post) }}">
            @csrf
            @method('patch')
            @foreach (['titulo', 'extracto', 'contenido'] as $field)
            <div class="mt-4">
                <label for="{{ $field }}"
                class="block text-sm font-medium text-gray-700">@lang('translate.'.$field)</label>

                @if ($field === 'contenido')
                    <textarea name="{{ $field }}" id="{{ $field }}"
                        class="mt-1 p-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old($field, $post->$field) }}</textarea>
                @else
                    <input type="text" name="{{ $field }}" id="{{ $field }}"
                        value="{{ old($field, $post->$field) }}"
                        class="mt-1 p-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                @endif

                @error($field)
                    <p style="color: red; margin-bottom: 10px;">{{ $message }}</p>
                @enderror
            </div>
        @endforeach

            @foreach (['caducable', 'comentable'] as $checkbox)
                <div class="mt-4">
                    <label for="{{ $checkbox }}"
                        class="block text-sm font-medium text-gray-700"></label>
                        <input type="checkbox" name="{{ $checkbox }}" value="false" {{ old($checkbox) ? 'checked' : '' }} onclick="this.value=this.checked?'true':'false"> @lang('translate.'.$checkbox)
                    <x-input-error :messages="$errors->get($checkbox)" class="mt-2" />
                </div>
            @endforeach

            <div class="mt-4">
                <label for="acceso" class="block text-sm font-medium text-gray-700">@lang('translate.acceso')</label>
                <select name="acceso" id="acceso"
                    class="mt-1 p-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="privado" {{ old('acceso') == 'privado' ? 'selected' : '' }}>@lang('translate.privado')</option>
                    <option value="publico" {{ old('acceso') == 'publico' ? 'selected' : '' }}>@lang('translate.publico')</option>
                </select>
                <x-input-error :messages="$errors->get('acceso')" class="mt-2" />
            </div>

            <x-primary-button class="mt-4">{{ __('Save') }}</x-primary-button>
            <a href="{{ route('posts.index') }}" class="mt-2">{{ __('Cancel') }}</a>
        </form>
    </div>
</x-app-layout>
