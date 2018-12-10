@extends('layouts.app')

@section('content')
    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="display-2">Save Time</h1>
                            <h1>Our online exam system saves your time.</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="display-2">Save Paper</h1>
                            <h1>Save paper and save nature.</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="display-2">Live Results</h1>
                            <h1>No more waiting for results to be announced.</h1>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <h2>Admin Module</h2>
                    <p>Admin module is the central system of the online test, add tests, students, questions.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <h2>Teacher Module</h2>
                    <p>Teacher module is the system of the online test, add questions, assign teachers.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <h2>Student Module</h2>
                    <p>Student module is the system of the online test, take rest, see results.</p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Administrator.</h2>
                    <p class="lead">Write something about admin module</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="{{ url('images/bg1.jpg') }}"
                         alt="Admin module">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Teacher.</h2>
                    <p class="lead">Write something about teacher module</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="{{ url('images/bg2.jpg') }}"
                         alt="Admin module">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Student.</h2>
                    <p class="lead">Student something about admin module</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="{{ url('images/bg3.jpg') }}"
                         alt="Admin module">
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p><a href="#">Kartel Technologies</a></p>
        </footer>
    </main>
@endsection
