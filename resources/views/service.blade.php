@extends('layouts.app')

@section('content')


<div class="img-banner">
    <div class="uk-grid">
        <div class="uk-width-1-2@m">

         <h1 class="uk-margin-large-top uk-padding-large">WE PROVIDE BEST SERVICE TO IMPLIMENT </h1>

        </div>
            <div class="uk-width-1-2@m">

    <img src="{{asset('/images/service.svg')}}" alt="">
        </div>


    </div>

</div>

<div class="uk-section">


    <div class="uk-container">


        <div class="uk-grid " id="services">
            <div class="uk-width-1-2@m">
                <div class="uk-grid">
                    <div class="uk-width-1-2">
                        <img src="{{asset('images/webdevelopment.svg')}}" alt="">
                    </div>
                    <div class="uk-width-1-2">
                        <h1>Web Development</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis doloribus perferendis rerum sequi? Assumenda at beatae delectus deserunt distinctio doloremque et minus natus, necessitatibus omnis provident quae repellendus sequi voluptates.</p>


                        <button class="uk-button-default uk-button" style="background: #F05704;color:white;border-radius: 300px">View More</button>

                    </div>
                </div>

            </div>

            <div class="uk-width-1-2@m">
                <div class="uk-grid">
                    <div class="uk-width-1-2">
                        <img src="{{asset('images/mobile.svg')}}" alt="">
                    </div>
                    <div class="uk-width-1-2">
                        <h1>Apps Development</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis doloribus perferendis rerum sequi? Assumenda at beatae delectus deserunt distinctio doloremque et minus natus, necessitatibus omnis provident quae repellendus sequi voluptates.</p>


                        <button class="uk-button-default uk-button" style="background: #F05704;color:white;border-radius: 300px">View More</button>

                    </div>
                </div>

            </div>






        </div>


    </div>



<div class="uk-container-fluid">












    <div class="uk-position-relative " id="services-slider" uk-slideshow>

        <ul class="uk-slideshow-items">
            <li>

                <div class="uk-grid">
                    <div class="uk-width-1-2 uk-margin-large-top uk-padding-large">
                        <h1>Digital Marketing</h1>
                        <p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci culpa cupiditate delectus deserunt dolorem est excepturi hic nesciunt pariatur quisquam quo repellat repudiandae soluta suscipit, ullam ut veritatis voluptas, voluptatum.</p>
                        <button class="uk-button-default uk-button" style="background: #F05704;color:white;border-radius: 300px">View More</button>

                    </div>

                    <div class="uk-width-1-2">
                        <img src="{{asset('images/digital.svg')}}" alt="">

                    </div>

                </div>

            </li>
            <li>
                <div class="uk-grid">
                    <div class="uk-width-1-2">
                        <img src="{{asset('images/software.svg')}}" alt="">

                    </div>

                    <div class="uk-width-1-2 uk-margin-large-top uk-padding-large">
                        <h1>Software Development</h1>
                        <p style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci culpa cupiditate delectus deserunt dolorem est excepturi hic nesciunt pariatur quisquam quo repellat repudiandae soluta suscipit, ullam ut veritatis voluptas, voluptatum.</p>
                        <button class="uk-button-default uk-button" style="background: #F05704;color:white;border-radius: 300px">View More</button>

                    </div>


                </div>
            </li>

        </ul>

        <div class="uk-position-bottom-center uk-position-small">
            <ul class="uk-dotnav">
                <li uk-slideshow-item="0"><a href="#">Item 1</a></li>
                <li uk-slideshow-item="1"><a href="#">Item 2</a></li>

            </ul>
        </div>
    </div>
</div>
    </div>


    @endsection
