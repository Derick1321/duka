<x-app-layout>
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <a href="{{ route('location.shops.create') }}" class="btn btn-success mb-2"><i
                                    class="mdi mdi-plus me-2"></i> Add
                                shop</a>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-striped"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-light">
                                    <tr>
                                        
                                        <th>Shop</th>
                                        <th>Phone</th>
                                        <th>Country</th>
                                        <th>Region</th>
                                        <th>Ward</th>
                                        <td>Street</td>

                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shops as $shop)
                                        
                                            <td>{{ $shop->shop_name }}</td>
                                            <td>{{ $shop->phone ?? "NIL" }}</td>
                                            <td>{{ $shop->country?->name }}</td>
                                            <td>{{ $shop->region?->name }}</td>
                                            <td>{{ $shop->ward?->name }}</td>
                                            <td>{{ $shop->street?->name }}</td> 

                                            <td id="tooltip-container0">

                                                <div class="btn-group">

                                                    <a href="{{ route('location.shops.edit', ['shop' => $shop]) }}"
                                                        class="btn btn-outline-primary" title="Edit"><i
                                                            class="mdi mdi-pencil"></i></a>
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
