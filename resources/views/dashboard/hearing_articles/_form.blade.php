<div class="form-group">
    {{-- <x-form.input label="Title" name="title" :value="old('title', $article->title ?? '')" /> --}}
    <x-form.input label="Title" name="title" value="{{ old('title', $article->title ?? '') }}" />
</div>

<div class="form-group">
    <x-form.label>Image</x-form.label>
    <x-form.input type="file" name="image" accept="image/*" />
    @if (!empty($article) && $article->image)
        <img src="{{ $article->image_url }}" alt="Article Image" height="60" class="mt-2">
    @endif
</div>

<div class="form-group">
    {{-- <x-form.textarea label="Content" name="content">{{ old('content', $article->content ?? '') }}</x-form.textarea> --}}
    <x-form.textarea label="Content" name="content" :value="old('content', $article->content ?? '')" />
</div>


<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_label ?? 'Save' }}</button>
</div>
