<x-app-layout>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <a href="{{ route('location.countries.create') }}" class="btn btn-success mb-2"><i
                                    class="mdi mdi-plus me-2"></i> Add
                                Country</a>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-striped"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-light">
                                    <tr>
                                        
                                        <th>Name</th>
                                        <th>No of Regions</th>
                                        <th>Total Districts</th>
                                        <th>Total Wards</th>
                                        <th>Total Streets</th>
                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($countries as $country)
                                        <tr>
                                           

                                            <td>{{ $country->name }}</td>
                                            <td>{{ $country->regions->count() }}</td>
                                            <td>{{ $country->districts->count() }}</td>
                                            <td>{{ $country->wards->count() }}</td>
                                            <td>{{ $country->streets->count() }}</td>

                                            <td id="tooltip-container0">
                                                <form action="{{ route('location.countries.destroy', ['country' => $country]) }}" method="POST">
                                                    @csrf
                                                    @method("delete")
                                                    <div class="btn-group">
                                                        <a href="{{ route('location.countries.show', ['country' => $country]) }}"
                                                            >Show</a>
                                                        <a href="{{ route('location.countries.edit', ['country' => $country]) }}"
                                                           >Edit</a>
                                                        <button type="submit"
                                                           >Delete</i></button>
                                                    </div>
                                                </form>
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

</x-app-layout>