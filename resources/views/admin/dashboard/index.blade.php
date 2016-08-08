        @extends('admin.layouts.default')

        {{-- Web site Title --}}
        @section('title') {!! $title !!} :: @parent @stop

        {{-- Content --}}
        @section('main')
        <h3>
            {{$title}}
        </h3>
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-ms-6">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                              <div class="panel "style="background-color: purple; ">
                               <div class="panel-heading">
                                 <div class="panel-title"style="color: white ">Buses</div>
                             </div>
                             
                             <a href="{{URL::to('admin/articlecategory')}}">
                                <div class="panel-body"style="background-color: white">
                                    flkkjsdljfjasfjlasj
                                </div>                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                                               <div class="content-box-header"style="background-color: purple;border-radius: 0px" >
                                <div class="panel-title">Routs</div>

                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
                            </div>
                            <div class="content-box-large box-with-header">
                                <div class="row ">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-header"style="background-color: purple;border-radius: 0px">
                                <div class="panel-title">Stop</div>

                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
                            </div>
                            <div class="content-box-large box-with-header">
                                <div class="row well">
                                    <div class="col-sm-5 well"></div>
                                    <div class="col-sm-7 well"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-header"style="background-color: purple;border-radius: 0px">
                                <div class="panel-titl" style="color: floralwhite;float: left">Users</div>

                                <div class="panel-options"style="float: right">
                                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
                            </div>
                            <div class="content-box-large box-with-header">
                                <div class="row well">
                                    <div class="col-sm-5 well"></div>
                                    <div class="col-sm-7 well"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 panel-warning">
                    <div class="content-box-header panel-heading"style="background-color: purple;border-radius: 0px">
                        <div class="panel-title ">New vs Returning Visitors</div>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                        </div>
                    </div>
                    <div class="content-box-large box-with-header">
                        <div class="row well">
                            <div class="col-sm-5 well">

                            </div>
                            <div class="col-sm-7 well"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
            <!-- <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-bullhorn fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$newscategory}}</div>
                                    <div>{{ trans("admin/admin.news_categories") }}!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{URL::to('admin/articlecategory')}}">
                            <div class="panel-footer">
                                <span class="pull-left">{{ trans("admin/admin.view_detail") }}</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-list fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$news}}</div>
                                    <div>{{ trans("admin/admin.news_items") }}!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{URL::to('admin/article')}}">
                            <div class="panel-footer">
                                <span class="pull-left">{{ trans("admin/admin.view_detail") }}</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-list fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$photoalbum}}</div>
                                    <div>{{ trans("admin/admin.photo_albums") }}!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{URL::to('admin/photoalbum')}}">
                            <div class="panel-footer">
                                <span class="pull-left">{{ trans("admin/admin.view_detail") }}</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-camera fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$photo}}</div>
                                    <div>{{ trans("admin/admin.photo_items") }}!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{URL::to('admin/photo')}}">
                            <div class="panel-footer">
                                <span class="pull-left">{{ trans("admin/admin.view_detail") }}</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-user fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$users}}</div>
                                    <div>{{ trans("admin/admin.users") }}!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{URL::to('admin/users')}}">
                            <div class="panel-footer">
                                <span class="pull-left">{{ trans("admin/admin.view_detail") }}</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                        <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="glyphicon glyphicon-user fa-3x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">{{$stop}}</div>
                                                <div>{{ trans("stop") }}!</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{URL::to('sitestop')}}">
                                        <div class="panel-footer">
                                            <span class="pull-left">{{ trans("admin/admin.view_detail") }}</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>





                        </div> -->
                        @endsection
