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
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                       
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
                                            
                                            <td>{{ $productCategory->featured_image }}</td>
                                            <td>{{ $productCategory->name }}</td>
                                            <td>{{ $productCategory->parent->name ?? 'Null' }}</td>
                                            <td>{{ $productCategory->description }}</td>


                                            <td><a href="{{ route('product.productCategories.show', ['productCategory' => $productCategory]) }}"
                                                    class="btn btn-outline-secondary">add product </a></td>

                                            <td id="tooltip-container0">
                                                <div class="btn-group">

                                                    <a href="{{ route('product.productCategories.edit', ['productCategory' => $productCategory]) }}"
                                                        class="btn btn-outline-primary" title="Edit">Edit</a>
                                                    <form
                                                        action="{{ route('product.productCategories.destroy', ['productCategory' => $productCategory]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-outline-danger"
                                                            title="Delete">Delete</button>

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
