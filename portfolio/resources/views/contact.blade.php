@extends('layouts.app')

@section('title', 'Contact Sukanta')

@section('content')
<style>
    .contact-wrapper {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        margin-top: 20px;
    }

    .contact-info, .contact-form {
        flex: 1;
        min-width: 300px;
    }

    .contact-info-box {
        background-color: #f0f8ff; /* light blue */
        border-left: 5px solid #4facfe;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 4px;
    }

    .contact-info-box h4 {
        margin-bottom: 10px;
        color: #333;
    }

    .contact-info-box p {
        margin: 5px 0;
        color: #555;
    }

    /* Simple Form Styling */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #555;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-family: inherit;
        font-size: 1em;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        outline: none;
        border-color: #4facfe;
        box-shadow: 0 0 5px rgba(79, 172, 254, 0.3);
    }

    textarea.form-control {
        resize: vertical; /* only allow vertical resizing */
    }

    .submit-btn {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
        border: none;
        padding: 12px 25px;
        font-size: 1.1em;
        border-radius: 5px;
        cursor: pointer;
        transition: transform 0.2s, box-shadow 0.2s;
        width: 100%;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
</style>

<h2>Get in <span style="color: #333">Touch</span></h2>
<p>I would love to hear from you! Whether you have a question about my learning journey, a tip for a beginner, or just want to say hi.</p>

<div class="contact-wrapper">
    <!-- Contact Information Side -->
    <div class="contact-info">
        <div class="contact-info-box">
            <h4>Contact Details</h4>
            <p><strong>Email:</strong> sukanta@example.com</p>
            <p><strong>Phone:</strong> +1 (555) 123-4567</p>
            <p><strong>Location:</strong> Earth</p>
        </div>

        <div class="contact-info-box" style="background-color: #fff9e6; border-left-color: #ffc107;">
            <h4>Follow My Progress</h4>
            <p>I am planning to upload my code to GitHub soon!</p>
            <p>GitHub: <a href="#" style="color: #0088cc; text-decoration: none;">Coming Soon...</a></p>
        </div>
    </div>

    <!-- Contact Form Side -->
    <div class="contact-form">
        <div style="background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); border: 1px solid #eee;">
            <h3 style="margin-top: 0; margin-bottom: 20px;">Send a Message</h3>
            
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                </div>

                <div class="form-group">
                    <label for="email">Your Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required>
                </div>

                <div class="form-group">
                    <label for="message">What's on your mind?</label>
                    <textarea id="message" name="message" rows="5" class="form-control" placeholder="Write your message here..." required></textarea>
                </div>

                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </div>
</div>
@endsection
