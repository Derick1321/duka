   <x-app-layout>
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    @isset($productOption)
                        <div class="card-header bg-secondary">
                            <h5 class="mt-3 font-size-16 text-white">{{ __('Update Option Value') }}</h5>
                        @else
                            <div class="card-header bg-primary">
                                <h5 class="mt-3 font-size-16 text-white">{{ __('New Option Value') }}</h5>
                            @endisset
                        </div>
                        <div class="card-body">
                            @isset($productOption)
                                <form
                                    action="{{ route('pproduct.products.productSkus.productSkusValue.update', ['product' => $product->id, 'productSku' => $productSku]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @method('patch')
                                @else
                                    <form
                                        action="{{ route('product.products.productSkus.productSkusValue.store', ['product' => $product->id, 'productSku' => $productSku]) }}"
                                        method="POST" enctype="multipart/form-data">
                                    @endisset
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="validationCustom03" class="form-label">Product Option</label>
                                                <select name="product_option_id" class="form-select" id="validationCustom03"
                                                    required="">
                                                    <option selected="" disabled="" value="">Choose...</option>
                                                    @foreach ($productOptions as $productOption)
                                                        <option value="{{ $productOption->id }}">
                                                            {{ $productOption->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                                <div class="invalid-feedback">

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="validationCustom03" class="form-label">Product Option
                                                    Value</label>
                                                <select name="product_option_value_id" class="form-select"
                                                    id="validationCustom03" required="">
                                                    <option selected="" disabled="" value="">Choose...</option>
                                                    @foreach ($productOptionValues as $productOptionValue)
                                                        <option value="{{ $productOptionValue->id }}">
                                                            {{ $productOptionValue->name }}</option>
                                                    @endforeach

                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a valid state.
                                                </div>

                                            </div>
                                        </div>

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
    </div>
   </x-app-layout>
