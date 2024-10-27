@extends('layout')
@section('frontend-contains')
<form action="">
    @csrf
    <div class="row mt-5">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4> category</h4>
                </div>
                <div class="card-body">
                    <select  name="" id="select_value" class="form-control">
                        <option value="one" selected disabled>--- Selecet one ---</option>

                        @foreach ($categorys as $category)
                          <option value="{{ $category->id }}" >{{ $category->category_name }}</option>
                        @endforeach
                        
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Sub Category</h4>
                </div>
                <div class="card-body">
                    <select lect name="sub_category" class="form-control"> <!-- Add a name attribute -->
                        <option value="" selected disabled>--- Select Subcategory ---</option>
                        <!-- Subcategories will be populated here -->
                    </select>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection


@push('js_contains')
<script>
    $(function(){
         $('#select_value').on('change', (event) => {
           let selectData = $(event.target).val(); // Get the selected category ID
         
           $.ajax({
               url: `{{ route('subcategory') }}`, // Update this to the correct route for subcategories
               type: 'GET',
               data: {
                   category_id: selectData, // Send the selected category ID
               },
               success: (res) => {
                $('select[name="sub_category"]').html('')
                  res.map(data=>{
                    $('select[name="sub_category"]').append(`<option value="${data.id}">${data.name}</option>`)
                  })
               }
           });
         });
    });
</script>
@endpush