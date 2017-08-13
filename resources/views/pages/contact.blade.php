@extends('main')

@section('title', '- Contact')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <h3>Contact Me!</h3>
        <form>
            <div class="form-group">
                <input type="email" placeholder="Your Email Address" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Subject" class="form-control">
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Send Message</button>
        </form>
        <br>
    </div>
@endsection