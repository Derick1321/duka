<x-app-layout>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        @isset($country)
                            <h5 class="mt-3 font-size-16">{{ __('Update country') }}</h5>
                        @else
                            <h5 class="mt-3 font-size-16">{{ __('New country') }}</h5>
                        @endisset
                    </div>
                    <div class="card-body">
                                @isset($country)
                                    <form action="{{ route('location.countries.update', ['country' => $country->id]) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @method('patch')
                                    @else
                                        <form action="{{ route('location.countries.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                        @endisset
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="name"
                                                        label="Country Name" placeholder="Country"
                                                        value="{{ isset($country) ? $country->name : old('name') }}" />
                                                </div>

                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="description"
                                                        label="Description" placeholder="Description"
                                                        value="{{ isset($country) ? $country->description : old('description') }}" />
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                             <div class="row">
                                            <div class="col-lg-6">
                                                <x-form.coordinates-input 
                                                    latitude="{{ isset($country) && $country->latitude ? $country->latitude : old('latitude') }}" 
                                                    longitude="{{ isset($country) && $country->longitude ? $country->longitude : old('longitude') }}" 
                                                    zoom="{{ isset($country) && $country->zoom ? $country->zoom : old('zoom') }}" 
                                                />
                                            </div>
                                        </div>

                                        <hr />
                                        <div>
                                            @isset($country)
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
  </x-app-layout>