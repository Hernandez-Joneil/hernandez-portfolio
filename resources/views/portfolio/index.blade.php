@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- Hero Section -->
<section id="portfolio" >
    <div  class="container-portfolio">
        <img class="cover-image" src="./image/jonelCover.jpeg" alt="coverimages">
        <div  class="home-box">
            <div class="home">
                <h1  class="h1-home">Hello <span class="span-im" >I'm</span></h1>
                <h1 class="display-4 mb-3">{{ $portfolio['name'] }}</h1>

                <h3 class="mb-4">{{ $portfolio['title'] }}</h3>

                <p class="lead mb-4">{{ $portfolio['bio'] }}</p>
            </div>
        </div>
    </div>
</section>
<!-- <section id="portfolio" class="hero-section">
            <div>
                <img class="cover-image" src="./image/jonelCover.jpeg" alt="coverimages">
           </div>
    <div class="container">
           
       <div class="section-container">
           
            <div>
                <img src="./image/joneil.jpeg" alt="{{ $portfolio['name'] }}" class="profile-img">
            </div>
            
       </div>

    </div>

</section> -->

<!-- About Section -->

<section id="about" class="section">
<h2 class="section-title" id="boxAbout">About Me</h2>
   
    <div class="container">
           
        <div class="section-container-about">
            <div class="image-paragraph-container">
                    <div > <img src="./image/imageko.jpeg" class ="aboutImage"></div>
                <div class="paragrah-about">
                    <p>Hi, I’m Hernandez, Joneil, a developer backend based in my knowledge.
                        I specialize in backend also cute din and then have experience working on 
                        many company. I’m passionate about building clean,
                        user-friendly, and scalable solutions. Whether I’m designing an interface 
                        or writing backend code, I care deeply about the end user.
                    </p>
                </div>
           </div>
            
        </div>
    </div>
        <!-- <div class="projects-section">
            <div class="content">
                    <h2 class="project-card">Skills:</h2>
                @foreach($portfolio['skills'] as $skill)
                    <p class="project-card"> {{ $skill }}</p>
                @endforeach
        
            </div>
             
        </div> -->
        <!-- About content -->

    

</section>

<!-- Projects Section -->

<section id="projects" class="section bg-light">

    <div class="container">

        <h2 class="section-title" id="boxAbout" >My Projects</h2>
        <div class="projects-section">
            
             <ul class="project-list">
            @foreach($portfolio['projects'] as $project)
                <li class="project-card">
                    <p><strong>Name:</strong> {{ $project['name'] }}</p>
                    <p><strong>Stack:</strong> {{ $project['stack'] }}</p>
                    <p><strong>Status:</strong> <span class="S_status">{{ $project['status'] }}</span></p>
                </li>
            @endforeach
        </ul>
        </div>
       
        <!-- Projects content -->

    </div>

</section>

<!-- Contact Section -->

<section id="contact" class="section">

    <div class="contact-section" >
        <h2 class="section-title" id="boxAbout">Contact</h2>

        <div class="projects-section">
            <ul class="project-list">
                @foreach($portfolio['contact'] as $key => $value)
                    @if(is_array($value))
                        <li class="project-card">
                            @foreach($value as $item)
                                <p>{{ $item }}</p>
                            @endforeach
                        </li>
                    @else
                        <li >
                            <p>{{ $value }}</p>
                        </li>
                    @endif
                @endforeach
             </ul>
        </div>
    </div>
        <!-- Contact content -->

    </div>

</section>

@endsection