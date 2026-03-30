@extends('component.main')
@section('content')



<!-- HEADER -->
<section class="relative bg-white text-[#FC5124] py-24 overflow-hidden">

  <!-- Background Glow -->
  <div class="absolute inset-0 opacity-20">
  </div>

  <div class="relative max-w-7xl mx-auto px-6 text-center">

    <!-- Heading -->
    <h1 class="text-4xl md:text-5xl font-bold mb-4" text-black data-aos="fade-up">
      Get in Touch
    </h1>

    <!-- Subheading -->
    <p class="text-lg text-black max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
      Have a project in mind or need backend solutions?  
      Our team at <span class="text-[#FC5124] font-semibold">Backend Coders</span> is here to help you build scalable systems.
    </p>


  </div>

</section>





<div class="bg-gray-100 flex items-center justify-center min-h-100 py-12">
  <div class="container max-w-5xl flex justify-center items-center min-h-auto">
      <div class="form-box login">
        <form action="#">
          <h1>Login</h1>
          <div class="input-box">
            <input type="text" placeholder="Username" required />
            <i class="bx bxs-user"></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Password" required />
            <i class="bx bxs-lock-alt"></i>
          </div>
          <div class="forgot-link">
            <a href="#">Forgot Password?</a>
          </div>
          <button type="submit" class="btn">Login</button>
          <p>or login with social platforms</p>
          <div class="social-icons">
            <a href="#"><i class="bx bxl-google"></i></a>
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-github"></i></a>
            <a href="#"><i class="bx bxl-linkedin"></i></a>
          </div>
        </form>
      </div>

      <div class="form-box register">
        <form action="#">
          <h1>Registration</h1>
          <div class="input-box">
            <input type="text" placeholder="Username" required />
            <i class="bx bxs-user"></i>
          </div>
          <div class="input-box">
            <input type="email" placeholder="Email" required />
            <i class="bx bxs-envelope"></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Password" required />
            <i class="bx bxs-lock-alt"></i>
          </div>
          <button type="submit" class="btn">Register</button>
          <p>or register with social platforms</p>
          <div class="social-icons">
            <a href="#"><i class="bx bxl-google"></i></a>
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-github"></i></a>
            <a href="#"><i class="bx bxl-linkedin"></i></a>
          </div>
        </form>
      </div>

      <div class="toggle-box">
        <div class="toggle-panel toggle-left">
          <h1>Hello, Welcome!</h1>
          <p>Don't have an account?</p>
          <button class="btn register-btn">Register</button>
        </div>

        <div class="toggle-panel toggle-right">
          <h1>Welcome Back!</h1>
          <p>Already have an account?</p>
          <button class="btn login-btn">Login</button>
        </div>
      </div>
    </div>

</div>

<script>
    const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');

registerBtn.addEventListener('click', () => {
    container.classList.add('active');
})

loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
})
</script> 

@endsection
