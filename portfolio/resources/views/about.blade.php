@extends('layouts.app')

@section('title', 'About Sukanta')

@section('content')
<style>
    .about-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .card {
        background: #fdfdfd;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.02);
    }

    .skills-list {
        list-style-type: none;
        padding-left: 0;
    }

    .skills-list li {
        margin-bottom: 10px;
    }

    .skills-list li::before {
        content: "✔️"; 
        color: #4facfe;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
        padding-right: 15px;
    }
</style>

<h2>About <span style="color: #333">Me</span></h2>

<div class="about-container">
    <div class="card">
        <h3>My Journey</h3>
        <p>Hi! I'm Sukanta. I am a beginner web developer taking my first steps into the world of coding. I created this portfolio as a project to apply the HTML, CSS, and basic PHP skills I am currently learning.</p>
        <p>I enjoy the process of turning simple code into visual websites you can interact with. Every day is a new learning experience!</p>
    </div>

    <div class="card">
        <h3>My Current Toolkit</h3>
        <p>Here is what I am currently studying and working with:</p>
        <ul class="skills-list">
            <li><strong>HTML5:</strong> Structuring web pages</li>
            <li><strong>CSS3:</strong> Styling and making things look good</li>
            <li><strong>PHP:</strong> Basic server-side scripting</li>
            <li><strong>Laravel Framework:</strong> Getting started with routes and views</li>
        </ul>
    </div>
    
    <div class="card">
        <h3>My Goals</h3>
        <p>My short-term goal is to become comfortable building multi-page websites and understanding how backend data works. Eventually, I hope to create fully interactive web applications!</p>
        <a href="/contact" class="btn">Get in Touch</a>
    </div>
</div>
@endsection
