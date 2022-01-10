@extends('layout.layout')
   
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
@section('content')
<!-- Nav tabs -->
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <button href="#tab1" class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
      <button href="#" class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
      <button href="#" class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui facere at eius voluptatem, accusantium quis perferendis maxime in rerum deleniti, dignissimos porro et. Ut nobis quae, rem vero aperiam deserunt.</div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero fugit, nostrum dolor doloribus corporis perspiciatis voluptatibus, culpa voluptates facere fugiat vitae officia expedita rerum ut, eaque accusantium necessitatibus voluptas quam!</div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, tempora ipsam possimus fuga sit adipisci incidunt aut facilis sequi quasi error cum iste molestiae dolorem quis deserunt, quo consequuntur doloremque.</div>
  </div>
@endsection
