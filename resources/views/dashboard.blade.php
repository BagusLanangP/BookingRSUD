<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Rumah Sakit Sanjiwani</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid p-2">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
  </nav>

  <header>{{ asset('img/background.jpg') }}
    <img src="{{ asset('img/background.jpg') }}" alt="">
    <div class="title">
      <h4>CARING FOR LIFE</h4>
      <h1>Welcome to Eksekutif Sanjiwani</h1>
      <a href="">Our Services</a>
    </div>

    <div class="cards">
      <div class="row">

        <div class="col-1"></div>

        <div class="col-3">
          <div class="card">
            <div class="row p-4">
              <div class="col-10 card-title">
                <h6 class="text-center">Book an Appointment</h6>
              </div>
              <div class="col-2 icon">
                <h6><i class="fa-solid fa-calendar-days"></i></h6>
              </div>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card">
            <div class="row p-4">
              <div class="col-10 card-title">
                <h6 class="text-center">Book an Appointment</h6>
              </div>
              <div class="col-2 icon">
                <h6><i class="fa-solid fa-calendar-days"></i></h6>
              </div>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card">
            <div class="row p-4">
              <div class="col-10 card-title">
                <h6 class="text-center">Book an Appointment</h6>
              </div>
              <div class="col-2 icon">
                <h6><i class="fa-solid fa-calendar-days"></i></h6>
              </div>
            </div>
          </div>
        </div>

        <div class="col-1"></div>

      </div>
    </div>

  </header>

  <section>
    <div class="executif">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6 text-center mt-5"> 
          <h5>welcome to eksekutif sanjiwani</h5>
          <h3>An Excellent Choice for Trusted Medical Care</h3>
          <p>Sanjiwani General Hospital in Gianyar offers exceptional medical care with a focus on patient well-being. Our skilled team provides personalized treatments using modern technology, ensuring trusted and reliable healthcare for the community.</p>
          <a href="">Learn More</a>
        </div>
        <div class="col-3"></div>
      </div>
    </div>

    <div class="photos mt-5">
      <div class="row">
        <div class="col-2"></div> <!-- Spacer kiri -->
        <div class="col-8 text-center"> <!-- Menambahkan text-center untuk gambar -->
          <img src="asset/img/photo.png" alt="" class="img-fluid">
        </div>
        <div class="col-2"></div> <!-- Spacer kanan -->
      </div>
    </div>
  </section>

  <section>
    <div class="services  mb-5">
      <h5 class="title text-center">Care you can believe in</h5>
      <h2 class="text-center">Our Services</h2>

      <div class="row">
        <div class="col-2 ">
          <div class="cards-service text-center">
            
            <div class="card-service border p-4">
              <i class="fa-solid fa-notes-medical"></i>
              <h6 class="mt-2">Free Checkup</h6>
            </div>
            
            <div class="card-service border p-4 bg-black text-white">
              <i class="fa-solid fa-notes-medical"></i>
              <h6 class="mt-2">Free Checkup</h6>
            </div>

            <div class="card-service border p-4">
              <i class="fa-solid fa-notes-medical"></i>
              <h6 class="mt-2">Free Checkup</h6>
            </div>

            <div class="card-service border rounded-bottom p-2 bg-black text-white">
              <h6>View All</h6>
            </div>

          </div>
        </div>

        <div class="col-6">
          <h5 class=" title-serv text-center mb-4">A passion for putting patients first.</h5>
          <div class="list-container">
            <div class="list-item">● Committed to Care</div>
            <div class="list-item">● Everything We Offer</div>
            <div class="list-item">● Tradition of Excellence</div>
            <div class="list-item">● Top-Tier Care</div>
            <div class="list-item">● Trust in Us</div>
            <div class="list-item">● Consistently Caring</div>
        </div>
          
          <p class="par-serve">At Sanjiwani General Hospital, our passion lies in prioritizing patients above all else. We believe that compassionate, patient-centered care is the cornerstone of exceptional healthcare. Our dedicated team is committed to understanding each patient's unique needs and ensuring they receive the attention and support they deserve throughout their medical journey. From the moment you arrive, we strive to create a welcoming environment that fosters healing and comfort, making your well-being our top priority.</p>
        </div>
        

        <div class="col-4">
          <img src="asset/img/ser-img1.png" alt="">
          <img src="asset/img/und.png" alt="" class="under">
          <img src="asset/img/ser=img-2.png" alt="">
          
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="services  mb-5">
      <h5 class="title text-center">Always Caring</h5>
      <h2 class="text-center">Our Specialties</h2>

      <div class="row">
        <div class="col-3">
          <div class="cards-service text-center">
            
            <div class="card-service border p-5">
              <i class="fa-regular fa-heart"></i>
              <h6 class="mt-2">Neurology</h6>
            </div>
            
            <div class="card-service border p-5">
              <i class="fa-regular fa-heart"></i>
              <h6 class="mt-2">Ophthalmology</h6>
            </div>

            <div class="card-service border p-5">
              <i class="fa-regular fa-heart"></i>
              <h6 class="mt-2">Gastroenterology</h6>
            </div>

          </div>
        </div>
        <div class="col-3">
          <div class="cards-service text-center">
            
            <div class="card-service border p-5">
              <i class="fa-regular fa-heart"></i>
              <h6 class="mt-2">Bones</h6>
            </div>
            
            <div class="card-service border p-5 bg-black text-white">
              <i class="fa-regular fa-heart"></i>
              <h6 class="mt-2">Cardiovascular</h6>
            </div>

            <div class="card-service border p-5">
              <i class="fa-regular fa-heart"></i>
              <h6 class="mt-2">Urology</h6>
            </div>

          </div>
        </div>
        <div class="col-3">
          <div class="cards-service text-center">
            
            <div class="card-service border p-5">
              <i class="fa-regular fa-heart"></i>
              <h6 class="mt-2">Urology</h6>
            </div>
            
            <div class="card-service border p-5">
              <i class="fa-regular fa-heart"></i>
              <h6 class="mt-2">Oncology</h6>
            </div>

            <div class="card-service border p-5">
              <i class="fa-regular fa-heart"></i>
              <h6 class="mt-2">Dermatology</h6>
            </div>

          </div>
        </div>
        <div class="col-3">
          <div class="cards-service text-center">
            
            <div class="card-service border p-5">
              <i class="fa-regular fa-heart"></i>
              <h6 class="mt-2">Urology</h6>
            </div>
            
            <div class="card-service border p-5">
              <i class="fa-regular fa-heart"></i>
              <h6 class="mt-2">Oncology</h6>
            </div>

            <div class="card-service border p-5">
              <i class="fa-regular fa-heart"></i>
              <h6 class="mt-2">Dermatology</h6>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="appointment">
    <div class="booking">
      <img src="asset/img/background2.png" alt="">
      <div class="con-tainer">
        <h2 class="title-booking text-center mt-5">Book an Appointment</h2>
      <p class="par-booking text-center">Scheduling an appointment at Sanjiwani General Hospital</p>
      <div class="row">
        <div class="col-6">
          @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif

          @if (session('error'))
              <div class="alert alert-danger">
                  {{ session('error') }}
              </div>
          @endif

          <form action="{{ route('appointments.store') }}" method="POST">
            @csrf
            <!-- Input Nama Pasien -->
            <div class="mb-3">
                <label for="patient_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="patient_name" placeholder="Input Your Name" name="patient_name" required>
            </div>
        
            <!-- Input Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
            </div>
        
            <!-- Input Tanggal -->
            <div class="mb-3">
                <label for="date" class="form-label">Pilih Tanggal</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
        
            <!-- Pilih Dokter -->
            <div class="mb-3">
                <label for="doctor" class="form-label">Doctor</label>
                <select class="form-select" id="doctor" name="doctor_id" required>
                    <option selected disabled>Choose a doctor</option>
                    @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                    @endforeach
                </select>
            </div>
        
            <!-- Pilih Jenis Kelamin -->
            <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="gender_female" name="gender" value="Perempuan" required>
                    <label class="form-check-label" for="gender_female">
                        Perempuan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="gender_male" name="gender" value="Laki-Laki" required>
                    <label class="form-check-label" for="gender_male">
                        Laki-Laki
                    </label>
                </div>
            </div>
        
            <!-- Input Nomor Telepon -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" placeholder="08xxx" name="phone" required>
            </div>
        
            <!-- Pilih Waktu -->
            <div class="mb-3">
                <label for="time" class="form-label">Time</label>
                <select class="form-select" id="time" name="time_id" required>
                    <option selected disabled>Choose Time</option>
                    @foreach ($times as $t)
                        <option value="{{ $t->id }}">{{ $t->time_slot }}</option>
                    @endforeach
                </select>
            </div>
        
            <!-- Pilih Departemen -->
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select class="form-select" id="department" name="department_id" required>
                    <option selected disabled>Choose a department</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
        
            <!-- Tombol Simpan -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        
        </div>
        
      </div>
      </div>
      
    </div>
  </section>


  <div class="container mt-5">
    <h2 class="mb-4 text-center">Daftar Booking Appointment</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr class="table-secondary">
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Email</th>
                <th>Dokter</th>
                <th>Departemen</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Gender</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $index => $appointment)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $appointment->patient_name }}</td>
                    <td>{{ $appointment->email }}</td>
                    <td>{{ $appointment->doctor->name }}</td>
                    <td>{{ $appointment->department->name }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->time->time_slot }}</td>
                    <td>{{ $appointment->gender }}</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" 
                              onclick="return confirm('Apakah Anda yakin ingin menghapus appointment ini?')">
                              Hapus
                          </button>
                      </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

  <div class="section">
    <div class="row text-center">
      <div class="services  mb-5">
        <h5 class="title text-center">Trusted Care</h5>
        <h2 class="text-center">Our Doctors</h2>
      </div>
      
      <!-- Card 1 -->
      <div class="col-lg-4 mb-4">
          <div class="card" style="width: 14rem; position: relative;">
              <img src="asset/img/foto.png" class="card-img-top" alt="Doctor 1">
              <div class="card-body">
                  <h5 class="card-title text-center">Doctor's Name 1</h5>
                  <p class="card-text text-center"><b>NEUROLOGY</b></p>
                  <div class="row text-center mb-3">
                      <div class="col-4"><i class="fa-brands fa-linkedin"></i></div>
                      <div class="col-4"><i class="fa-brands fa-facebook"></i></div>
                      <div class="col-4"><i class="fa-brands fa-instagram"></i></div>
                  </div>
              </div>
              <a href="#" class="btn-view-profile text-center">View Profile</a>
          </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 mb-4">
          <div class="card" style="width: 14rem; position: relative;">
              <img src="asset/img/foto.png" class="card-img-top" alt="Doctor 2">
              <div class="card-body">
                  <h5 class="card-title text-center">Doctor's Name 2</h5>
                  <p class="card-text text-center"><b>CARDIOLOGY</b></p>
                  <div class="row text-center mb-3">
                      <div class="col-4"><i class="fa-brands fa-linkedin"></i></div>
                      <div class="col-4"><i class="fa-brands fa-facebook"></i></div>
                      <div class="col-4"><i class="fa-brands fa-instagram"></i></div>
                  </div>
              </div>
              <a href="#" class="btn-view-profile text-center">View Profile</a>
          </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 mb-4">
          <div class="card" style="width: 14rem; position: relative;">
              <img src="asset/img/foto.png" class="card-img-top" alt="Doctor 3">
              <div class="card-body">
                  <h5 class="card-title text-center">Doctor's Name 3</h5>
                  <p class="card-text text-center"><b>ORTHOPEDICS</b></p>
                  <div class="row text-center mb-3">
                      <div class="col-4"><i class="fa-brands fa-linkedin"></i></div>
                      <div class="col-4"><i class="fa-brands fa-facebook"></i></div>
                      <div class="col-4"><i class="fa-brands fa-instagram"></i></div>
                  </div>
              </div>
              <a href="#" class="btn-view-profile text-center">View Profile</a>
          </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container text-center mt-5">
      <h5 class="mb-2">GET IN TOUCH</h5>
      <h2 class="mb-4">Contact</h2>
  
      <div class="row">
          
          <div class="col-md-3">
              <div class="card text-white bg-secondary mb-4">
                  <div class="card-body">
                      <i class="fa-solid fa-phone fa-2x mb-3"></i>
                      <h5 class="card-title">EMERGENCY</h5>
                      <p>0361943020<br>+155895548855</p>
                  </div>
              </div>
          </div>
  
          
          <div class="col-md-3">
              <div class="card text-white bg-dark mb-4">
                  <div class="card-body">
                      <i class="fa-solid fa-location-dot fa-2x mb-3"></i>
                      <h5 class="card-title">LOCATION</h5>
                      <p>Jl. Ciung Wanara-Gianyar No.2, Gianyar,<br>Kec. Gianyar, Bali 80511</p>
                  </div>
              </div>
          </div>
  
          
          <div class="col-md-3">
              <div class="card text-white bg-secondary mb-4">
                  <div class="card-body">
                      <i class="fa-solid fa-envelope fa-2x mb-3"></i>
                      <h5 class="card-title">EMAIL</h5>
                      <p>hh</p>
                  </div>
              </div>
          </div>
  
          
          <div class="col-md-3">
              <div class="card text-white bg-secondary mb-4">
                  <div class="card-body">
                      <i class="fa-solid fa-clock fa-2x mb-3"></i>
                      <h5 class="card-title">WORKING HOURS</h5>
                      <p>Mon-Sat 09:00-20:00<br>Sunday Emergency only</p>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>

  <footer>
    <footer class="bg-dark text-white pt-5 pb-3">
      <div class="container">
          <div class="row">
              
              <div class="col-md-3 mb-4">
                  <h4 class="mb-3">SANJIWANI</h4>
                  <p>Leading the Way in Medical Excellence, Trusted Care.</p>
              </div>
              
              
              <div class="col-md-3 mb-4">
                  <h5>Important Links</h5>
                  <ul class="list-unstyled">
                      <li><a href="#" class="text-white text-decoration-none">Appointment</a></li>
                      <li><a href="#" class="text-white text-decoration-none">Doctors</a></li>
                      <li><a href="#" class="text-white text-decoration-none">Services</a></li>
                      <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                  </ul>
              </div>
              
           
              <div class="col-md-3 mb-4">
                  <h5>Contact Us</h5>
                  <p>Call: 000000</p>
                  <p>Email: sanjiwani@gmail.com</p>
                  <p>Address: Jl. Sanjiwani, Bali, Indonesia</p>
              </div>
              
              
              <div class="col-md-3 mb-4">
                  <h5>Newsletter</h5>
                  <div class="input-group">
                      <input type="email" class="form-control" placeholder="Enter your email address" aria-label="Email address">
                      <button class="btn btn-primary" type="button">
                          <i class="fa-solid fa-paper-plane"></i>
                      </button>
                  </div>
              </div>
          </div>
          
         
          <div class="row">
              <div class="col-12 text-center mt-4">
                  <a href="#" class="text-white me-3"><i class="fa-brands fa-linkedin fa-lg"></i></a>
                  <a href="#" class="text-white me-3"><i class="fa-brands fa-facebook fa-lg"></i></a>
                  <a href="#" class="text-white"><i class="fa-brands fa-instagram fa-lg"></i></a>
              </div>
          </div>
      </div>
  </footer>
  
  </footer>
  

    


    <script src="asset/js/bootstrap.min.js"></script>
    
    
</body>
</html>