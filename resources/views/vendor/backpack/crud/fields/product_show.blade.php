<div @include('crud::inc.field_wrapper_attributes') >
    <label>{!! $field['label'] !!}</label>
    <input
        id="monarre-product"
        type="text"
        disabled
        name="{{ $field['name'] }}"
        value="{{ old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : '' )) }}"
        @include('crud::inc.field_attributes')
    >

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
</div>

@if ($crud->checkIfFieldIsFirstOfItsType($field, $fields))
  {{-- FIELD EXTRA CSS  --}}
  {{-- push things in the after_styles section --}}

      @push('crud_fields_styles')
          <!-- no styles -->
      @endpush

  {{-- FIELD EXTRA JS --}}
  {{-- push things in the after_scripts section --}}

      @push('crud_fields_scripts')
          <!-- no scripts -->
      @endpush
@endif

@section('after_scripts')
    <script>
        $(document).ready(function () {
            var product = $('select[name="product_id"]');
            var produtShow = $('#monarre-product');
            product.on('change', function () {
                produtShow.val('Searching for Product..');
                $.get(`{{ route('product.index') }}/${product.children("option:selected").val()}`, function( data ) {
                    produtShow.val(data.name);
                });
            });
        });
    </script>
@endsection