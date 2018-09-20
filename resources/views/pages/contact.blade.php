@extends('main')

@section('title','| contact')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Contact me</h1>
                <form>
                  <div class="form-group">
                    <label name="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label name="subject">Subject:</label>
                    <input class="form-control" id="subject" name="subject">
                  </div>
                  <div class="form-group">
                    <label name="message">Message:</label>
                    <textarea class="form-control" id="message" name="message"> Type your Message here....</textarea>
                  </div>
                  <input type="submit" class="btn btn-success" value="Send Message">
                </form>
            </div>
        </div>  {{-- End of header row --}}
@endsection