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
                    <h1>All Slides</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>All Slides</li>
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
                                                All Slides
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.add_slide') }}" class="btn btn-info pull-right">Add New</a>
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
                                                    <th>Title</th>
                                                    <th>Status</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($slides as $slide )
                                                    <tr>
                                                        <td>{{ $slide->id }}</td>
                                                        <td><img src="{{ asset('images/slider') }}/{{ $slide->image }}" width="100" height="60" alt="{{ $slide->name }}"></td>
                                                        <td>{{ $slide->title }}</td>
                                                        <td>
                                                            @if ($slide->status)
                                                            Active
                                                            @else
                                                            In-Active
                                                            @endif
                                                        </td>

                                                        <td>{{ $slide->created_at }}</td>
                                                        <td><a href="{{ route('admin.edit_slide',['slide_id'=>$slide->id]) }}" title="Edit" style="text-decoration: none">
                                                        <i class="fa fa-edit fa-2x text-primary" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="#" onclick="confirm('Are you sure you want to delete this slide?') || event.stopImmediatePropagation()" wire:click.prevent='deleteSlide({{ $slide->id }})' style="margin-left: 15px" title="Delete" >
                                                            <i class="fa fa-trash fa-2x text-danger" aria-hidden="true"></i>
                                                        </a>

                                                    </td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{ $slides->links() }}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
