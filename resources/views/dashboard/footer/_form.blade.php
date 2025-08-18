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

<div class="row">
  <div class="form-group col-md-4">
    <x-form.label for="number_one">First Phone Number</x-form.label>
    <x-form.input name="number_one" :value="$footer->number_one" />
  </div>

  <div class="form-group col-md-4">
    <x-form.label for="number_two">Second Phone Number</x-form.label>
    <x-form.input name="number_two" :value="$footer->number_two" />
  </div>

  <div class="form-group col-md-4">
    <x-form.label for="email">Email</x-form.label>
    <x-form.input name="email" type="email" :value="$footer->email" />
  </div>
</div>

<div class="row">
  <div class="form-group col-md-4">
    <x-form.label for="address_one">First Address</x-form.label>
    <x-form.input name="address_one" :value="$footer->address_one" />
  </div>

  <div class="form-group col-md-4">
    <x-form.label for="address_two">Second Address</x-form.label>
    <x-form.input name="address_two" :value="$footer->address_two" />
  </div>

  <div class="form-group col-md-4">
    <x-form.label for="address_three">Third Address</x-form.label>
    <x-form.input name="address_three" :value="$footer->address_three" />
  </div>
</div>

<div class="row">
  <div class="form-group col-md-4">
    <x-form.label for="facebook">Facebook Link</x-form.label>
    <x-form.input name="facebook" :value="$footer->facebook" />
  </div>

  <div class="form-group col-md-4">
    <x-form.label for="x">X Link</x-form.label>
    <x-form.input name="x" :value="$footer->x" />
  </div>

  <div class="form-group col-md-4">
    <x-form.label for="instagram">Instagram Link</x-form.label>
    <x-form.input name="instagram" :value="$footer->instagram" />
  </div>
</div>

{{-- <div class="row">
  <div class="form-group col-md-4">
    <x-form.label for="Copyright">Copyright</x-form.label>
    <x-form.input name="Copyright" :value="$footer->Copyright" />
  </div>
</div> --}}

{{-- Descriptions at the bottom --}}
<div class="row mt-4">
  <div class="form-group col-md-6">
    <x-form.label for="short_description_one">First Short Description</x-form.label>
    <x-form.textarea name="short_description_one" :value="$footer->short_description_one" />
  </div>

  <div class="form-group col-md-6">
    <x-form.label for="short_description_two">Second Short Description</x-form.label>
    <x-form.textarea name="short_description_two" :value="$footer->short_description_two" />
  </div>
</div>

<div class="form-group mt-3">
  <button type="submit" class="btn btn-primary">{{ $button_label ?? 'Save' }}</button>
</div>
