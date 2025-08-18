<div class="form-group">
    <x-form.input label="العنوان" name="title" :value="old('title', $article->title ?? '')" />
</div>

<div class="form-group">
    <x-form.label>الصورة</x-form.label>
    <x-form.input type="file" name="image" accept="image/*" />
    @if (!empty($article) && $article->image)
        <img src="{{ asset('storage/' . $article->image) }}" alt="Article Image" height="60" class="mt-2">
    @endif
</div>

<div class="form-group">
    <x-form.textarea label="المحتوى" name="content">{{ old('content', $article->content ?? '') }}</x-form.textarea>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_label ?? 'حفظ' }}</button>
</div>
