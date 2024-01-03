<x-app-layout>
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    @isset($productCategory)
                        <div class="card-header bg-primary">
                            <h5 class="mt-3 font-size-16 text-white">{{ __('Update Product Category') }}</h5>
                        @else
                            <div class="card-header bg-success">
                                <h5 class="mt-3 font-size-16 text-white">{{ __('New Product Category') }}</h5>
                            @endisset
                        </div>
                        <div class="card-body">
                            @isset($productCategory)
                                <form
                                    action="{{ route('product.productCategories.update', ['productCategory' => $productCategory]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @method('patch')
                                @else
                                    <form action="{{ route('product.productCategories.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                    @endisset
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <x-form.customer-input type="text" name="name" label="Category Name"
                                                value="{{ isset($productCategory) ? $productCategory->name : Null }}" placeholder="Category Name" />
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="" class="label-control">Select Parent</label>
                                            <select name="parent_id" id="parent_id"
                                                class="form-control  @error('parent_id') is-invalid @enderror">
                                                <option value="">Choose...</option>
                                                @foreach ($productCategories as $productCategory)
                                                    <option
                                                        value="{{ old('parent_id') ?? isset($productCategory->id) ? $productCategory->id : '' }}"
                                                        {{ isset($productCategory) && $productCategory->id != $productCategory->parent_id ? 'selected' : null }}>
                                                        {{ $productCategory->name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="col-lg-6">
                                            <label for="" class="label-control">Import Featured Image</label>
                                            <input type="file" name="featured_image" class="form-control" />

                                        </div>
                                        <div class="col-lg-12">
                                            <label class="form-label" for="productdesc">Category Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description">{{ isset($productCategory) ? $productCategory->description : null }}</textarea>

                                        </div>

                                        <!-- end col -->

                                    </div><!-- end row -->
                                    <div class="mb-4">

                                    </div>
                                    <hr />
                                    <div>

                                        <div class="float-end"><button type="submit" class="btn btn-success">Save Info<i
                                                    class="mdi mdi-arrow-right ms-1"></i></button>
                                        </div>

                                    </div>
                                </form>
                        </div>
                    </div>
                </div>

            </div><!-- end row -->

        </div>
   
</x-app-layout>
