@if ($errors->any())
  <div class="alert alert-danger">
    <h4>Error Occurred!</h4>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<div class="form-group">
  <x-form.label for="name">Category Name</x-form.label>
  <x-form.input class="form-control-lg" name="name" :value="$category->name"  type="input"/>
</div>

<div class="form-group">
  <x-form.label for="parent_id">Category Parent</x-form.labell>
  <x-form.select
    name="parent_id"
    id="parent_id"
    :parents="$parents"
    :selected="$category->parent_id ?? ''"
    text="Primary Category"
  />
  </div>

<div class="form-group">
  <x-form.label for="description">Description</x-form.label>
  <x-form.textarea name="description" :value="$category->description"/>
</div>

<div class="form-group">
  <x-form.label for="image">Image</x-form.label>
  <x-form.input type="file" name="image" accept="image/*" />
  @if (!empty($category->image))
    <img src="{{ asset('uploads/' . $category->image) }}" alt="Category Image" height="50">
  @endif
</div>

<div class="form-group">
  <label>Status</label>
  <div>
    <div class="form-check">
      <x-form.radio name="status" :checked="$category->status" :options="['active' => 'Active', 'archived' => 'Archived']"/>
    </div>
  </div>
</div>

<div class="form-group">
  <button type="submit" class="btn btn-primary">{{ $button_label ?? 'Save' }}</button>
</div>
