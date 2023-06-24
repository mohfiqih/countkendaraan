<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Halaman Login</title>
     <link rel="stylesheet" href="<?php echo base_url('assets/login/style.css'); ?>">
     <style>
     .popup {
          display: none;
          position: fixed;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          padding: 20px;
          background-color: red;
          color: white;
          border-radius: 10px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          z-index: 9999;
     }

     .form-structor2 {
          background-image: url('https://pktj.ac.id/assets/frontoffice/images/uploads/1ca983ddddd1c7bcca0cd692969affc3.jpg') !important;
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
     }

     body {
          position: relative;
          min-height: 100vh;
          background-color: #dadbdb;
          display: flex;
          align-items: center;
          justify-content: center;
          font-family: "Fira Sans", Helvetica, Arial, sans-serif;
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
     }

     .form-structor2 {
          background-color: #222;
          border-radius: 15px;
          height: 550px;
          width: 350px;
          position: relative;
          overflow: hidden;
     }

     .form-structor2 .signup {
          position: absolute;
          top: 50%;
          left: 50%;
          -webkit-transform: translate(-50%, -50%);
          width: 65%;
          z-index: 5;
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .signup.slide-up {
          top: 5%;
          -webkit-transform: translate(-50%, 0%);
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .signup.slide-up .form-holder,
     .form-structor2 .signup.slide-up .submit-btn {
          opacity: 0;
          visibility: hidden;
     }

     .form-structor2 .signup.slide-up .form-title {
          font-size: 1em;
          cursor: pointer;
          color: black;
     }

     .form-structor2 .signup.slide-up .form-title span {
          margin-right: 5px;
          opacity: 1;
          visibility: visible;
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .signup .form-title {
          color: #000;
          font-size: 1.7em;
          text-align: center;
     }

     .form-structor2 .signup .form-title span {
          color: rgba(0, 0, 0, 0.4);
          opacity: 0;
          visibility: hidden;
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .signup .form-holder {
          border-radius: 15px;
          background-color: #fff;
          overflow: hidden;
          margin-top: 50px;
          opacity: 1;
          visibility: visible;
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .signup .form-holder .input {
          border: 0;
          outline: none;
          box-shadow: none;
          display: block;
          height: 30px;
          line-height: 30px;
          padding: 8px 15px;
          border-bottom: 1px solid #eee;
          width: 100%;
          font-size: 12px;
     }

     .form-structor2 .signup .form-holder .input:last-child {
          border-bottom: 0;
     }

     .form-structor2 .signup .form-holder .input::-webkit-input-placeholder {
          color: rgba(0, 0, 0, 0.4);
     }

     .form-structor2 .signup .submit-btn {
          background-color: rgba(0, 0, 0, 0.4);
          color: rgba(255, 255, 255, 0.7);
          border: 0;
          border-radius: 15px;
          display: block;
          margin: 15px auto;
          padding: 15px 45px;
          width: 100%;
          font-size: 13px;
          font-weight: bold;
          cursor: pointer;
          opacity: 1;
          visibility: visible;
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .signup .submit-btn:hover {
          transition: all 0.3s ease;
          background-color: rgba(0, 0, 0, 0.8);
     }

     .form-structor2 .login {
          position: absolute;
          top: 20%;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #fff;
          z-index: 5;
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .login::before {
          content: "";
          position: absolute;
          left: 50%;
          top: -20px;
          -webkit-transform: translate(-50%, 0);
          background-color: #fff;
          width: 200%;
          height: 250px;
          border-radius: 50%;
          z-index: 4;
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .login .center {
          position: absolute;
          top: calc(50% - 10%);
          left: 50%;
          -webkit-transform: translate(-50%, -50%);
          width: 65%;
          z-index: 5;
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .login .center .form-title {
          color: #000;
          font-size: 1.7em;
          text-align: center;
     }

     .form-structor2 .login .center .form-title span {
          color: rgba(0, 0, 0, 0.4);
          opacity: 0;
          visibility: hidden;
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .login .center .form-holder {
          border-radius: 15px;
          background-color: #fff;
          border: 1px solid #eee;
          overflow: hidden;
          margin-top: 50px;
          opacity: 1;
          visibility: visible;
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .login .center .form-holder .input {
          border: 0;
          outline: none;
          box-shadow: none;
          display: block;
          height: 30px;
          line-height: 30px;
          padding: 8px 15px;
          border-bottom: 1px solid #eee;
          width: 100%;
          font-size: 12px;
     }

     .form-structor2 .login .center .form-holder .input:last-child {
          border-bottom: 0;
     }

     .form-structor2 .login .center .form-holder .input::-webkit-input-placeholder {
          color: rgba(0, 0, 0, 0.4);
     }

     .form-structor2 .login .center .submit-btn {
          background-color: #6B92A4;
          color: rgba(255, 255, 255, 0.7);
          border: 0;
          border-radius: 15px;
          display: block;
          margin: 15px auto;
          padding: 15px 45px;
          width: 100%;
          font-size: 13px;
          font-weight: bold;
          cursor: pointer;
          opacity: 1;
          visibility: visible;
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .login .center .submit-btn:hover {
          transition: all 0.3s ease;
          background-color: rgba(0, 0, 0, 0.8);
     }

     .form-structor2 .login.slide-up {
          top: 90%;
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .login.slide-up .center {
          top: 10%;
          -webkit-transform: translate(-50%, 0%);
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .login.slide-up .form-holder,
     .form-structor2 .login.slide-up .submit-btn {
          opacity: 0;
          visibility: hidden;
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .login.slide-up .form-title {
          font-size: 1em;
          margin: 0;
          padding: 0;
          cursor: pointer;
          -webkit-transition: all 0.3s ease;
     }

     .form-structor2 .login.slide-up .form-title span {
          margin-right: 5px;
          opacity: 1;
          visibility: visible;
          -webkit-transition: all 0.3s ease;
     }
     </style>
</head>

<body>
     <!-- partial:index.partial.html -->
     <div class="form-structor2">
          <div class="signup">
               <h2 class="form-title" id="signup">Register</h2>
               <?php echo validation_errors(); ?>
               <?php echo form_open('register/process_register'); ?>
               <div class="form-holder">
                    <!-- <input type="text" class="input" placeholder="Name" /> -->
                    <input type="username" class="input" name="username" placeholder="Username" required />
                    <input type="password" class="input" name="password" placeholder="Password" required />
                    <!-- <input type="submit" class="submit-btn" value="Register"> -->
               </div>
               <button type="submit" class="submit-btn">Sign up</button>
               <?php echo form_close(); ?>
          </div>
          <div class="login slide-up">
               <div class="center">
                    <h2 class="form-title" id="login"><span></span>Login</h2>
                    <div class="form-holder">
                         <form method="POST" action="<?php echo site_url('login/process_login'); ?>">
                              <input type="username" class="input" name="username" placeholder="Username" required />
                              <input type="password" class="input" name="password" placeholder="Password" required />
                              <input type="submit" class="submit-btn" name="login" value="Login">
                         </form>
                    </div>
                    <!-- <button class="submit-btn">Login</button> -->
               </div>
          </div>
     </div>
     <!-- partial -->
     <script src="<?php echo base_url('assets/login/script.js'); ?>"></script>
     <script>
     // Tampilkan pesan error jika ada
     var error = "<?php echo $this->session->flashdata('error'); ?>";
     if (error) {
          var popup = document.createElement('div');
          popup.classList.add('popup');
          popup.innerHTML = '<p class="error-message">' + error + '</p>';
          document.body.appendChild(popup);
          popup.style.display = 'block';
          setTimeout(function() {
               popup.style.display = 'none';
               document.body.removeChild(popup);
          }, 3000); // Menyembunyikan popup setelah 3 detik
     }
     </script>
</body>



</html>
