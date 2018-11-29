@extends('layouts.nav')
@section('content')
<section class="section-about">
<h1 class="about-title">ABOUT US PAGE</h1>
<article>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien 
    velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate 
    diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit 
    amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit 
    porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. 
    Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan 
    leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at 
    urna arcu. Sed.
</article>
</section>
<section class="leader section-about">
    <h2>Leadership</h2>
    <div class="leader-image">
        <img src="{{asset('images/profile.jpg')}}" alt="">
    </div>
    <article>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem.
    </article>
</section>

<section class="team section-about">
    <h2>THE TEAM</h2>
    <div class="members">
        <div class="members">
            <div class="team-member">
                <img src="{{asset('images/profile.jpg')}}" alt=""/>
                <p>Team member name</p>
                <p>
                    Lead Programmer
                </p>
            </div>
            <div class="team-member">
                <img src="{{asset('images/profile.jpg')}}" alt=""/>
                <p>Team member name</p>
                <p>
                    Lead Programmer
                </p>
            </div>
            <div class="team-member">
                <img src="{{asset('images/profile.jpg')}}" alt=""/>
                <p>Team member name</p>
                <p>
                    Lead Programmer
                </p>
            </div>
            <div class="team-member">
                <img src="{{asset('images/profile.jpg')}}" alt=""/>
                <p>Team member name</p>
                <p>
                    Lead Programmer
                </p>
            </div>
            <div class="team-member">
                <img src="{{asset('images/profile.jpg')}}" alt=""/>
                <p>Team member name</p>
                <p>
                    Lead Programmer
                </p>
            </div>
            <div class="team-member">
                <img src="{{asset('images/profile.jpg')}}" alt=""/>
                <p>Team member name</p>
                <p>
                    Lead Programmer
                </p>
            </div>
        </div>
</section>
<section class="about-section mentorship">
    <h1>Mentorship Program</h1>
    <article>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien 
        velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate
        diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit
        . Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum 
        sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat mi nisl quis eros. Integer ornare libero quis risus fermentum consequat. Mauris pharetra odio sagittis, vulputate magna at, lobortis nulla. 
        Proin efficitur, nisi vel finibus elementum, orci sem volutpat eros, eget ultrices velit mi.
    </article>
    <button>APPLY NOW</button>
</section>
@endsection