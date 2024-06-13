<div>
    <label for="{{ $id }}" @class([
        'block mb-2 text-sm font-medium',
        'text-gray-900 dark:text-white' => !$errors->has($name),
        'text-red-700 dark:text-red-500' => $errors->has($name),
    ])>{{ $label }}</label>

    <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" value="{{ old($name) ?? $value }}"
        @class([
            'shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-2.5 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light' => !$errors->has(
                $name),
        
            'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' => $errors->has(
                $name),
        ]) />

    @error($name)
        <p class="text-red-400 text-sm font-medium">{{ $message }}</p>
        @endif

        @if ($help)
            <p class="text-gray-700 text-sm font-light">{{ $help }}</p>
        @endif
    </div>
