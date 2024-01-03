<x-app-layout>
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        @isset($street)
                            <h5 class="mt-3 font-size-16">{{ __('Update') }} {{ $region->name }} - {{ $district->name }} - {{ $ward->name }} {{ __('Street') }}</h5>
                        @else
                            <h5 class="mt-3 font-size-16">{{ __('Add') }} {{ $region->name }} - {{ $district->name }} - {{ $ward->name }} {{ __('Street') }}</h5>
                        @endisset
                    </div>
                    <div class="card-body">
                                @isset($street)
                                    <form action="{{ route('location.countries.regions.districts.wards.streets.update', ['country' => $country, 'region' => $region->id, 'district' => $district, 'ward' => $ward, 'street' => $street]) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @method('patch')
                                    @else
                                        <form action="{{ route('location.countries.regions.districts.wards.streets.store', ['country' => $country, 'region' => $region, 'district' => $district, 'ward' => $ward]) }}" method="POST"
                                            enctype="multipart/form-data">
                                        @endisset
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="country_name"
                                                        label="Country Name" placeholder="Country"
                                                        value="{{  $region->country->name }}" readonly/>
                                                </div>

                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="region_name"
                                                        label="Region Name" placeholder="Country"
                                                        value="{{  $region->name }}" readonly/>
                                                </div>

                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="district_name"
                                                        label="District Name" placeholder="District"
                                                        value="{{  $district->name }}" readonly/>
                                                </div>

                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="ward_name"
                                                        label="Ward Name" placeholder="Ward Name"
                                                        value="{{  $ward->name }}"  readonly/>
                                                </div>

                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="name"
                                                        label="Street Name" placeholder="Street Name"
                                                        value="{{ isset($street) ? $street->name : old('name') }}" />
                                                </div>

                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="description"
                                                        label="Description" placeholder="Description"
                                                        value="{{ isset($street) ? $street->description : old('description') }}" />
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-lg-6">
                                                <x-form.coordinates-input 
                                                    latitude="{{ isset($street) && $street->latitude ? $street->latitude : (old('latitude') ? old('latitude') : $ward->latitude) }}" 
                                                    longitude="{{ isset($street) && $street->longitude ? $street->longitude : (old('longitude') ? old('longitude') : $ward->longitude) }}" 
                                                    zoom="{{ isset($street) && $street->zoom ? $street->zoom : (old('zoom') ? old('zoom') : $ward->zoom) }}" 
                                                />
                                            </div>
                                        </div>

                                        <hr />
                                        <div>
                                            @isset($street)
                                                <div class="float-end"><button type="submit" class="btn btn-primary">Update
                                                        Info<i class="mdi mdi-arrow-right ms-1"></i></button></div>
                                            @else
                                                <div class="float-end"><button type="submit" class="btn btn-success">Save
                                                        Info<i class="mdi mdi-arrow-right ms-1"></i></button>
                                                </div>
                                            @endisset
                                        </div>

                                        
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>