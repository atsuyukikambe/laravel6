<label class="{{ $subject->bgColor }} text-xs border-2 border-transparent ml-1 mb-1 py-1 px-2 font-bold uppercase text-white rounded transition-all cursor-pointer hover:opacity-75">
    <input id="{{ $subject->label }}" type="checkbox" name="subject_id" value="{{ $subject->id }}" class="w-0">
    {{ $subject->name }}
</label>