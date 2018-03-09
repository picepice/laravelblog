@extends('main')
  @section('title', '| Contact Me')
  @section('content')

              <div class="row">
                <div class="col-md-12">
                 <div class="card">
                    <div class="card-body">
                   <h1>Contact Me</h1>

                  <form>

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@email.com">
                      </div>

                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                      </div>

                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea  class="form-control" id="message" placeholder="Your Message Here"></textarea>
                      </div>
                      <input type="submit" value="Send Message" class="btn btn-primary">
                  </form>
                     
                  </div> <!--card body-->    
                 </div> <!-- card-->   
                 </div> <!-- col-md-12-->
              </div>  <!-- end of row -->
             
          
@endsection