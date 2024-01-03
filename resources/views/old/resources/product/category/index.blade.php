<x-app-layout>
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <a href="{{ route('product.productCategories.create') }}" class="btn btn-success mb-2"><i
                                    class="mdi mdi-plus me-2"></i> Add
                                Product Category</a>
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
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Parent</th>
                                        <th>Description</th>
                                        <th>Assign</th>
                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productCategories as $productCategory)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customercheck1">
                                                    <label class="form-check-label" for="customercheck1">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>{{ $productCategory->featured_image }}</td>
                                            <td>{{ $productCategory->name }}</td>
                                            <td>{{ $productCategory->parent->name ?? 'Null' }}</td>
                                            <td>{{ $productCategory->description }}</td>


                                            <td><a href="{{ route('product.productCategories.show', ['productCategory' => $productCategory]) }}"
                                                    class="btn btn-outline-secondary btn-rounded">add product <i
                                                        class="mdi mdi-download ms-2"></i></a></td>

                                            <td id="tooltip-container0">
                                                <div class="btn-group">

                                                    <a href="{{ route('product.productCategories.edit', ['productCategory' => $productCategory]) }}"
                                                        class="btn btn-outline-primary" title="Edit"><i
                                                            class="mdi mdi-pencil"></i></a>
                                                    <form
                                                        action="{{ route('product.productCategories.destroy', ['productCategory' => $productCategory]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-outline-danger"
                                                            title="Delete"><i class="mdi mdi-trash-can"></i></button>

                                                    </form>



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
