@extends('layouts.app')

@section('title', 'Route List')

@section('content')

    {{ HTML::style('css/pages/routelist.css') }}

    @include('layouts.navbar')

    <!--Jumbotron-->
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card card-image" style="background-image: url(https://img.clipartxtras.com/0b364c3d9f842671710402a0830078fd_free-blue-sky-clipart-27-sky-clipart_1680-1050.jpeg);">
                <div class="text-white text-center rgba-stylish-strong py-5 px-4">
                    <div class="py-5">

                        <!--Content-->
                            <h2 class="card-title pt-3 mb-5 mt-5 font-bold">Route List. Don't forget about places you have to reach.</h2>
                            <p class="px-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat
                                fugiat, laboriosam, voluptatem, optio vero odio nam sit officia
                                accusamus minus error nisi architecto nulla ipsum dignissimos.
                                Odit sed qui, dolorum!</p>
                        <!--Content-->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Jumbotron-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Timeline -->
                <div class="row mt-5">
                    <div class="col-md-12">

                        <!-- Timeline Wrapper -->
                        <ul class="stepper stepper-vertical timeline-simple pl-0">

                            <li class="step-1">
                                <!--Section Title -->
                                <a href="#" class="circle-check">
                                    <i class="circle green fa fa-check" aria-hidden="true"></i>
                                </a>

                                <!-- Section Description -->
                                <div class="step-content z-depth-1 ml-xl-0 p-4 hoverable">
                                    <h4 class="font-weight-bold">Ut enim ad minim veniam</h4>
                                    <p class="text-muted mt-3"><i class="fa fa-clock-o" aria-hidden="true"></i> 2017</p>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <!--Section Title -->
                                <a href="#!">
                                    <span class="circle grey"></span>
                                </a>

                                <!-- Section Description -->
                                <div class="step-content z-depth-1 ml-xl-0 p-4 hoverable">
                                    <h4 class="font-weight-bold">Duis aute irure dolor</h4>
                                    <p class="text-muted mt-3"><i class="fa fa-clock-o" aria-hidden="true"></i> 2016</p>
                                    <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </li>
                            <li>
                                <!--Section Title -->
                                <a href="#!">
                                    <span class="circle grey"></span>
                                </a>

                                <!-- Section Description -->
                                <div class="step-content z-depth-1 ml-xl-0 p-4 hoverable">
                                    <h4 class="font-weight-bold">Sed ut nihil unde omnis</h4>
                                    <p class="text-muted mt-3"><i class="fa fa-clock-o" aria-hidden="true"></i> 2015</p>
                                    <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                </div>
                            </li>
                            <li class="timeline-inverted" id="1">
                                <!--Section Title -->
                                <a href="#!">
                                    <span class="circle grey"></span>
                                </a>

                                <!-- Section Description -->
                                <div class="step-content z-depth-1 ml-xl-0 p-4 hoverable">
                                    <h4 class="font-weight-bold"> Quis autem vel eum voluptate</h4>
                                    <p class="text-muted mt-3"><i class="fa fa-clock-o" aria-hidden="true"></i> 2014</p>
                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                </div>
                            </li>
                            <li>
                                <!--Section Title -->
                                <a href="#!">
                                    <span class="circle grey"></span>
                                </a>

                                <!-- Section Description -->
                                <div class="step-content z-depth-1 ml-xl-0 p-4 hoverable">
                                    <h4 class="font-weight-bold">Mussum ipsum cacilds</h4>
                                    <p class="text-muted mt-3"><i class="fa fa-clock-o" aria-hidden="true"></i> 2013</p>
                                    <p class="mb-0">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                </div>
                            </li>
                        </ul>
                        <!-- Timeline Wrapper -->

                    </div>
                </div>
                <!-- Timeline -->
            </div>
            <div class="col-lg-4">
                <div class="sticky">
                    <h2><a><i class="fa fa-angle-left" aria-hidden="true"></i></a> Пт. 21 сентября <a><i class="fa fa-angle-right" aria-hidden="true"></i></a></h2>
                </div>
            </div>
        </div>
    </div>

@endsection
