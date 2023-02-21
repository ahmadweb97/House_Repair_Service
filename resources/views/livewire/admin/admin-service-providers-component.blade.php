<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important
        }
        #card{
            box-shadow: 3px 3px 6px 2px rgba(0, 0, 0, 0.3) !important;
        }
    </style>
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Service Providers</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Service Providers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container ">
                        <div class="row portfolioContainer ">
                            <div class="col-md-12 profile1">
                                <div class="panel panel-default" id="card">
                                    <div class="panel-heading">
                                        <div class="row ">
                                            <div class="col-md-6 ">
                                                All Service Providers
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">
                                            {{ Session::get('message') }}
                                        </div>
                                        @endif
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone#</th>
                                                    <th>City</th>
                                                    <th>Service Category</th>
                                                    <th>Service Locations</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($sProviders as $sProvider )
                                                    <tr>
                                                        <td>{{ $sProvider->id }}</td>
                                                        <td><img src="{{ asset('images/sproviders') }}/{{ $sProvider->image }}" width="60" alt="{{ $sProvider->name }}"></td>
                                                        <td>{{ $sProvider->user->name }}</td>
                                                        <td>{{ $sProvider->user->email }}</td>
                                                        <td>{{ $sProvider->user->phone }}</td>
                                                        <td>{{ $sProvider->city }}</td>
                                                        <td>{{ $sProvider->category->name }}</td>
                                                        <td>{{ $sProvider->service_locations }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{ $sProviders->links() }}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
