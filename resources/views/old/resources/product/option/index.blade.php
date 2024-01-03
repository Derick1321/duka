<x-app-layout>
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <a href="{{ route('product.products.productOptions.create') }}" class="btn btn-success mb-2"><i
                                    class="mdi mdi-plus me-2"></i> Add
                                productOption</a>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-centered datatable dt-responsive nowrap "
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customercheck">
                                                <label class="form-check-label" for="customercheck">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Name</th>
                                        <th>Product Name</th>

                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productOptions as $productOption)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customercheck1">
                                                    <label class="form-check-label" for="customercheck1">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td>{{ $productOption->name }}</td>
                                            <td>{{ $productOption->productOptionVal->name }}</td>


                                            <td id="tooltip-container0">
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('product.productOptions.edit', ['productOption' => $productOption]) }}"
                                                        class="me-3 text-primary" data-bs-container="#tooltip-container0"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="{{ route('product.productOptions.show', ['productOption' => $productOption]) }}"
                                                        class="me-3 text-primary" data-bs-container="#tooltip-container0"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="show"><i
                                                            class="mdi  mdi-eye-plus font-size-18"></i></a>

                                                    <a href="{{ route('product.productOptions.destroy', ['productOption' => $productOption]) }}"
                                                        class="text-danger" data-bs-container="#tooltip-container0"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i
                                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>
</x-app-layout>
