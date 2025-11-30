@extends('layout.app')
@section('title', $title)
@section('description', $description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">create product</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create Product</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        <div class="form-element">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Add New Product</h6>
                        </div>
                        <div class="card-body pb-md-50">
                            <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mx-n15">
                                    <div class="col-md-4 mb-20 px-15">
                                        <label for="category_id"
                                            class="il-gray fs-14 fw-500 align-center mb-10">Category</label>
                                        <select name="category_id" id="category_id"
                                            class="custom-select form-control select-arrow-none ih-medium radius-xs b-light shadow-none color-light fs-14">
                                            <option selected disabled value="">Select Category</option>
                                            @if(!empty($categories))
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-4 mb-20 px-15">
                                        <label for="sub_category_id"
                                            class="il-gray fs-14 fw-500 align-center mb-10">Subcategory</label>
                                        <select name="sub_category_id" id="sub_category_id"
                                            class="custom-select form-control select-arrow-none ih-medium radius-xs b-light shadow-none color-light fs-14">
                                            <option selected disabled value="">Select Subcategory</option>
                                            @if(!empty($subcategories))
                                                @foreach($subcategories as $subcat)
                                                    <option value="{{ $subcat->id }}" data-category-id="{{ $subcat->category_id }}"
                                                        {{ old('sub_category_id') == $subcat->id ? 'selected' : '' }}>
                                                        {{ $subcat->name }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('sub_category_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-4 mb-20 px-15">
                                        <label for="name" class="il-gray fs-14 fw-500 align-center mb-10">Product
                                            Name</label>
                                        <input name="name" id="name" type="text"
                                            class="form-control ih-medium ip-light radius-xs b-light"
                                            placeholder="Product name" value="{{ old('name') }}" required>
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="row mx-n15">
                                    <div class="col-md-4 mb-20 px-15">
                                        <label for="slug" class="il-gray fs-14 fw-500 align-center mb-10">Slug</label>
                                        <input name="slug" id="slug" type="text"
                                            class="form-control ih-medium ip-light radius-xs b-light"
                                            placeholder="product-slug" value="{{ old('slug') }}">
                                        @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-4 mb-20 px-15">
                                        <label for="sku" class="il-gray fs-14 fw-500 align-center mb-10">SKU</label>
                                        <input name="sku" id="sku" type="text"
                                            class="form-control ih-medium ip-light radius-xs b-light" placeholder="SKU"
                                            value="{{ old('sku') }}">
                                        @error('sku') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-4 mb-20 px-15">
                                        <label for="price" class="il-gray fs-14 fw-500 align-center mb-10">Price</label>
                                        <input name="price" id="price" type="number" step="0.01"
                                            class="form-control ih-medium ip-light radius-xs b-light" placeholder="0.00"
                                            value="{{ old('price') }}" required>
                                        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="row mx-n15">
                                    <div class="col-md-4 mb-20 px-15">
                                        <label for="discount_price" class="il-gray fs-14 fw-500 align-center mb-10">Discount
                                            Price</label>
                                        <input name="discount_price" id="discount_price" type="number" step="0.01"
                                            class="form-control ih-medium ip-light radius-xs b-light" placeholder="0.00"
                                            value="{{ old('discount_price') }}">
                                        @error('discount_price') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-4 mb-20 px-15">
                                        <label for="stock" class="il-gray fs-14 fw-500 align-center mb-10">Stock</label>
                                        <input name="stock" id="stock" type="number"
                                            class="form-control ih-medium ip-light radius-xs b-light" placeholder="0"
                                            value="{{ old('stock', 0) }}">
                                        @error('stock') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-4 mb-20 px-15">
                                        <label for="featured"
                                            class="il-gray fs-14 fw-500 align-center mb-10">Featured</label>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="featured" id="featured"
                                                value="1" {{ old('featured') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="featured">Show in featured</label>
                                        </div>
                                        @error('featured') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="row mx-n15">
                                    <div class="col-md-12 mb-20 px-15">
                                        <label for="short_description" class="il-gray fs-14 fw-500 align-center mb-10">Short
                                            Description</label>
                                        <textarea name="short_description" id="short_description"
                                            class="form-control ih-medium ip-light radius-xs b-light"
                                            rows="2">{{ old('short_description') }}</textarea>
                                        @error('short_description') <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mx-n15">
                                    <div class="col-md-12 mb-20 px-15">
                                        <label for="long_description" class="il-gray fs-14 fw-500 align-center mb-10">Long
                                            Description</label>
                                        <textarea name="long_description" id="long_description"
                                            class="form-control ih-medium ip-light radius-xs b-light"
                                            rows="6">{{ old('long_description') }}</textarea>
                                        @error('long_description') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-25 mt-1">
                                    <div class="form-check ps-0">
                                        <div class="form-check-inline">
                                            <input type="checkbox" class="form-check-input" name="status" id="status"
                                                value="1" {{ old('status', 1) ? 'checked' : '' }}>
                                            <label for="status" class="form-check-label">Active</label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary px-30" type="submit">Create Product</button>
                            </form>
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    var nameInput = document.getElementById('name');
                                    var slugInput = document.getElementById('slug');
                                    if (nameInput && slugInput) {
                                        nameInput.addEventListener('input', function () {
                                            var s = this.value.toLowerCase().trim()
                                                .replace(/[^a-z0-9\s-]/g, '')
                                                .replace(/\s+/g, '-')
                                                .replace(/-+/g, '-');
                                            slugInput.value = s;
                                        });
                                    }
                                    var categorySelect = document.getElementById('category_id');
                                    var subCategorySelect = document.getElementById('sub_category_id');
                                    if (categorySelect && subCategorySelect) {
                                        categorySelect.addEventListener('change', function () {
                                            var catVal = this.value;
                                            Array.from(subCategorySelect.options).forEach(function (opt) {
                                                if (!opt.value) return; // leave placeholder
                                                var catId = opt.getAttribute('data-category-id');
                                                if (!catVal || catId == catVal) {
                                                    opt.style.display = '';
                                                } else {
                                                    opt.style.display = 'none';
                                                }
                                            });
                                            // Reset selection if the current is not visible
                                            if (subCategorySelect.selectedOptions.length) {
                                                var sel = subCategorySelect.selectedOptions[0];
                                                if (sel && sel.style.display == 'none') {
                                                    subCategorySelect.value = '';
                                                }
                                            }
                                        });
                                        // Trigger once to initialize
                                        categorySelect.dispatchEvent(new Event('change'));
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!-- ends: .card -->
                </div>


            </div>
        </div>
    </div>
@endsection