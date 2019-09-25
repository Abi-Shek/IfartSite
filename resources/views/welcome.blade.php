@extends('layouts.app')

@section('content')
    <div class="uk-position-relative uk-visible-toggle uk-light banner-slider" tabindex="-1" uk-slideshow>

        <ul class="uk-slideshow-items">
            <li>
                <div class="uk-grid uk-padding-small">
             <div class="uk-width-1-2 uk-padding-large">

                 <h2 class="uk-margin-medium-top" style="color: black">The new era of Technology .....</h2>
                 <p style="color: black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid architecto aspernatur consequatur consequuntur, culpa deserunt dicta eaque ipsam labore, maiores maxime natus nihil numquam perferendis, repellat rerum sequi suscipit.</p>
                 <button class="uk-button-default uk-button" style="background: #F05704;color:white;border-radius: 300px">View More</button>



             </div>

                    <div class="uk-width-1-2">

                        <img class="uk-blend-luminosity" src="{{asset('images/banner3.svg')}}" alt="Blend Multiply" style="height: 400px;" >



                    </div>
                </div>
            </li>
            <li>
                <div class="uk-inline uk-background-primary div-banner">
                    <img class="uk-blend-luminosity" src="{{asset('images/banner1.jpg')}}" alt="Blend Multiply">
                    <div class="uk-position-center">
                        <p class="uk-h4 uk-margin-remove">Multiply</p>
                    </div>
                </div>
            </li>
            <li>

                <div class="uk-inline uk-background-primary div-banner">
                    <img class="uk-blend-luminosity" src="{{asset('images/banner.jpg')}}" alt="Blend Multiply">
                    <div class="uk-position-center">
                        <p class="uk-h4 uk-margin-remove">Multiply</p>
                    </div>
                </div>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

    </div>


    <div class="uk-container">

        <div class="uk-section">

{{--            <h2 class=" uk-margin-large-bottom uk-text-bold"> Our Features</h2>--}}
            <h1 class="uk-heading-line uk-margin-large-bottom uk-text-center"><span class="uk-text-bold">Our Features</span></h1>

            <div class="uk-grid uk-text-center" id="feature">

                <div class="uk-width-1-4@m">




                    <img src="{{asset('images/clean.svg')}}" alt="">
                    <h2>Clean UI/UX</h2>

                    <p class="uk-text-justify"> consectetur adipisicing elit. Aliquid dicta eligendi enim est id ipsum provident rem sequi? Animi aperiam aspernatur deserunt doloribus error in minima molestias repudiandae! Ea, tenetur.</p>
                </div>


                <div class="uk-width-1-4@m">

                    <img src="{{asset('images/fine2.svg')}}" alt="">
                    <h2>Fine Typography</h2>
                    <p class="uk-text-justify">consectetur adipisicing elit. Aliquid dicta eligendi enim est id ipsum provident rem sequi? Animi aperiam aspernatur deserunt doloribus error in minima molestias repudiandae! Ea, tenetur.</p>
                </div>


                <div class="uk-width-1-4@m">

                    <img src="{{asset('images/seo.svg')}}" alt="">
                    <h2>Complete SEO</h2>
                    <p class="uk-text-justify">consectetur adipisicing elit. Aliquid dicta eligendi enim est id ipsum provident rem sequi? Animi aperiam aspernatur deserunt doloribus error in minima molestias repudiandae! Ea, tenetur.</p>
                </div>



                <div class="uk-width-1-4@m">

                    <img src="{{asset('images/team.svg')}}" alt="">
                    <h2>Team Work</h2>
<p class="uk-text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem delectus est ipsam nobis. Corporis dolorem eos id quasi sint. Aspernatur atque eligendi ipsum, nostrum possimus quam repellendus sit voluptatibus?</p>
                </div>
            </div>
        </div>




        <div class="uk-section">
            <h1 class="uk-heading-line uk-margin-large-bottom uk-text-center"><span class="uk-text-bold">Our Services</span></h1>

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
    <div class="uk-container">
        <div class="uk-section uk-margin-large-top" id="subscribe">
           <div class="uk-grid">
               <div class="uk-width-1-2">

               </div>
               <div class="uk-width-1-2">
                   <h2 class="uk-margin-xlarge-top uk-margin-remove-bottom uk-text-bold">Join Us</h2>
                   <span style="color: #03d917;">We are ready to help you! Join us with your email!!</span>
                   <form class="uk-margin-small-top">


                   <div class="uk-margin">
                       <div class="uk-inline ">
                           <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail;ratio:1.5" style="color:#F05704;"></span>
                           <input class="uk-input uk-form-width-large uk-padding-medium" placeholder="email address" type="text" style="height: 50px;border-radius: 7px;">

                       </div>
                       <br>
                       <small>We will keep your email safe.</small>

                   </div>
                   </form>
                   <p class="uk-padding-small" id="links">
                       <span class="uk-icon" uk-icon="icon:facebook;ratio:1.5"></span>
                       <span class="uk-icon" uk-icon="icon:instagram;ratio:1.5"></span>
                       <span class="uk-icon" uk-icon="icon:twitter;ratio:1.5"></span>
                       <span class="uk-icon" uk-icon="icon:github;ratio:1.5"></span>


                   </p>
               </div>
           </div>

        </div>
    </div>






























@endsection
