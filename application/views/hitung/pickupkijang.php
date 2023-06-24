<!-- <!DOCTYPE html>
<html>

<head>
     <title>Selamat Datang</title>
</head>

<body>
     <h2>Selamat Datang, <?php echo $username; ?>!</h2>
     <p>Anda telah berhasil login.</p>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Dashboard</title>
     <link href="https://fonts.googleapis.com/css?family=Inter:400,500,600,700&display=swap" rel="stylesheet">
     <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
     <style>
     [x-cloak] {
          display: none;
     }

     body {
          font-family: "Inter" !important;
     }

     .card {
          background-color: #fff;
          margin-bottom: 10px;
          padding: 6px;
          border-radius: 10px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          display: inline-block;
          width: 300px;
          height: 160px;
          text-align: center;
          margin-left: 20px;
     }

     .card img {
          width: 150px;
          height: 100px;
          object-fit: cover;
          border-radius: 5px;
          margin-bottom: 10px;
     }

     .row {
          display: flex;
          flex-wrap: wrap;
          margin: -10px;
     }

     .col-6 {
          flex: 0 0 50%;
          max-width: 50%;
          padding: 10px;
     }

     table {
          border-collapse: collapse;
          width: 100%;
     }

     th,
     td {
          border: 1px solid black;
          padding: 8px;
          text-align: left;
     }
     </style>

     <script>
     function hitungOutput() {
          event.preventDefault();
          // Mendapatkan nilai dari input
          var L = document.getElementById("varJBB").value;
          var BK = document.getElementById("varBK").value;
          var G = document.getElementById("varG").value;

          // Menghitung output
          var output = parseFloat(L) + parseFloat(BK) + parseFloat(G) + " Kg";
          var varL = parseFloat(L);
          var varBK = parseFloat(BK);

          // Memasukkan output ke dalam tabel
          document.getElementById("output").innerHTML = output;
          document.getElementById("varL").innerHTML = varL;
     }
     </script>

     <!-- <script>
     function hitungPickUpKijang() {
          event.preventDefault();

          // Mendapatkan nilai dari input
          var JBB = document.getElementById("varJBBPickupKijang").value;
          var S1 = document.getElementById("varS1PickupKijang").value;
          var S2 = document.getElementById("varS2PickupKijang").value;
          var BK = document.getElementById("varBKPickupKijang").value;
          var L = document.getElementById("varLPickupKijang").value;
          var G = document.getElementById("varGPickupKijang").value;
          var JBI = document.getElementById("varJBIPickupKijang").value;

          // Menghitung output
          var varJBBPickupKijang = parseFloat(JBB);
          var varS1PickupKijang = parseFloat(S1);
          var varS2PickupKijang = parseFloat(S2);
          var varBKPickupKijang = parseFloat(BK);
          var varLPickupKijang = parseFloat(L);
          var varGPickupKijang = parseFloat(G);
          var varJBIPickupKijang = parseFloat(JBI);

          // Memasukkan output ke dalam tabel
          document.getElementById("varJBBPickupKijang").innerHTML = varJBBPickupKijang;
          document.getElementById("varS1PickupKijang").innerHTML = varS1PickupKijang;
          document.getElementById("varS2PickupKijang").innerHTML = varS2PickupKijang;
          document.getElementById("varBKPickupKijang").textContent = varBKPickupKijang;
          document.getElementById("varLPickupKijang").textContent = varLPickupKijang;
          document.getElementById("varGPickupKijang").textContent = varGPickupKijang;
          document.getElementById("varJBIPickupKijang").textContent = varJBIPickupKijang;
     }
     </script> -->

</head>

<body>
     <!-- partial:index.partial.html -->

     <body class="antialiased bg-gray-200">

          <div x-data="{ sidemenu: false }" class="h-screen flex overflow-hidden" x-cloak
               @keydown.window.escape="sidemenu = false">

               <div class="md:hidden">
                    <div @click="sidemenu = false"
                         class="fixed inset-0 z-30 bg-gray-600 opacity-0 pointer-events-none transition-opacity ease-linear duration-300"
                         :class="{'opacity-75 pointer-events-auto': sidemenu, 'opacity-0 pointer-events-none': !sidemenu}">
                    </div>

                    <!-- Small Screen Menu -->
                    <div class="fixed inset-y-0 left-0 flex flex-col z-40 max-w-xs w-full bg-white transform ease-in-out duration-300 -translate-x-full"
                         :class="{'translate-x-0': sidemenu, '-translate-x-full': !sidemenu}">

                         <!-- Brand Logo / Name -->
                         <div class="flex items-center px-6 py-3 h-16">
                              <div class="text-2xl font-bold tracking-tight text-gray-800">Dashing Admin.</div>
                         </div>
                         <!-- @end Brand Logo / Name -->

                         <div class="px-4 py-2 flex-1 h-0 overflow-y-auto">
                              <ul>
                                   <li>
                                        <a href="#"
                                             class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24"
                                                  height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                  <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                  <rect x="4" y="4" width="6" height="6" rx="1" />
                                                  <rect x="14" y="4" width="6" height="6" rx="1" />
                                                  <rect x="4" y="14" width="6" height="6" rx="1" />
                                                  <rect x="14" y="14" width="6" height="6" rx="1" />
                                             </svg>
                                             Dashboard
                                        </a>
                                   </li>

                              </ul>
                         </div>

                    </div>
                    <!-- @end Small Screen Menu -->
               </div>


               <!-- Menu Above Medium Screen -->
               <div class="bg-white w-64 min-h-screen overflow-y-auto hidden md:block shadow relative z-30">

                    <!-- Brand Logo / Name -->
                    <div class="flex items-center px-6 py-3 h-16">
                         <div class="text-2xl font-bold tracking-tight text-gray-800">Dashboard.</div>
                    </div>
                    <!-- @end Brand Logo / Name -->

                    <div class="px-4 py-2">
                         <ul>
                              <li>
                                   <a href="#"
                                        class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24"
                                             height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                             fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                             <rect x="4" y="4" width="6" height="6" rx="1" />
                                             <rect x="14" y="4" width="6" height="6" rx="1" />
                                             <rect x="4" y="14" width="6" height="6" rx="1" />
                                             <rect x="14" y="14" width="6" height="6" rx="1" />
                                        </svg>
                                        Dashboard
                                   </a>
                              </li>
                         </ul>

                    </div>
               </div>
               <!-- @end Menu Above Medium Screen -->

               <div class="flex-1 flex-col relative z-0 overflow-y-auto">
                    <div class="px-4 md:px-8 py-2 h-16 flex justify-between items-center shadow-sm bg-white">
                         <div class="flex items-center w-2/3">
                              <input
                                   class="bg-gray-200 focus:outline-none focus:shadow-outline focus:bg-white border border-transparent focus:border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal hidden md:block placeholder-gray-700 mr-10"
                                   type="text" placeholder="Search...">

                              <div class="p-2 rounded-full hover:bg-gray-200 cursor-pointer md:hidden"
                                   @click="sidemenu = !sidemenu">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                        <line x1="4" y1="6" x2="20" y2="6" />
                                        <line x1="4" y1="12" x2="20" y2="12" />
                                        <line x1="4" y1="18" x2="20" y2="18" />
                                   </svg>
                              </div>
                              <div class="text-xl font-bold tracking-tight text-gray-800 md:hidden ml-2">Dashboard
                              </div>
                         </div>
                         <div class="flex items-center">

                              <a href="#"
                                   class="text-gray-500 p-2 rounded-full hover:text-blue-600 hover:bg-gray-200 cursor-pointer mr-4">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                        <path
                                             d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                        <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                   </svg>
                              </a>

                              <div class="relative" x-data="{ open: false }" x-cloak>
                                   <div @click="open = !open"
                                        class="cursor-pointer font-bold w-10 h-10 bg-blue-200 text-blue-600 flex items-center justify-center rounded-full">
                                        DA
                                   </div>

                                   <div x-show.transition="open" @click.away="open = false"
                                        class="absolute top-0 mt-12 right-0 w-48 bg-white py-2 shadow-md border border-gray-100 rounded-lg z-40">
                                        <a href="#"
                                             class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Edit
                                             Profile</a>
                                        <a href="#"
                                             class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Account
                                             Settings</a>
                                        <a href="<?php echo base_url('index.php/login') ?>"
                                             class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Sign
                                             Out</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="md:max-w-6xl md:mx-auto px-4 py-8">

                         <div class="bg-green-200 text-green-700 px-6 py-4 rounded-lg relative mb-5" role="alert"
                              x-data="{ open: true }" x-show.transition="open">
                              <div class="mr-4">
                                   <strong class="font-bold">Hallo!</strong>
                                   <span class="block sm:inline">Selamat Datang
                                        di dashboard website<?php echo $username; ?>!</span>
                              </div>

                              <span class="cursor-pointer absolute top-0 bottom-0 right-0 hover:bg-red-100 hover:text-red-600 w-10 h-10 rounded-full inline-flex items-center justify-center mt-2 mr-3"
                                   x-on:click="open = false">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                        <line x1="18" y1="6" x2="6" y2="18" />
                                        <line x1="6" y1="6" x2="18" y2="18" />
                                   </svg>
                              </span>
                         </div>

                         <div class="flex items-center justify-between mb-4">
                              <h2 class="text-xl font-bold text-gray-800" style="margin-left: 10px;">Dashboard</h2>

                              <button id="openFormButton"
                                   class="flex items-center bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                        <line x1="12" y1="5" x2="12" y2="19" />
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                   </svg>
                                   Hitung JBB
                              </button>
                         </div>


                         <!-- POP UP HITUNG JBB -->
                         <!-- ################# -->

                         <div id="popupForm"
                              class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                              <div class="bg-white rounded-lg p-8">
                                   <center>
                                        <label for="text" class="block font-bold mb-2">HITUNG JBB</label>
                                   </center>
                                   <form>
                                        <div class="mb-2">
                                             <label for="text" class="block font-bold mb-2">Masukan L:</label>
                                             <input type="text" id="varJBB" name="jbb"
                                                  class="w-full px-3 py-2 border border-gray-300 rounded"
                                                  placeholder="Masukan L (kg)">
                                        </div>
                                        <div class="mb-2">
                                             <label for="text" class="block font-bold mb-2">Masukan BK:</label>
                                             <input type="text" id="varBK" name="bk"
                                                  class="w-full px-3 py-2 border border-gray-300 rounded"
                                                  placeholder="Masukan BK (kg)">
                                        </div>
                                        <div class="mb-2">
                                             <label for="text" class="block font-bold mb-2">Masukan G:</label>
                                             <input type="text" id="varG" name="g"
                                                  class="w-full px-3 py-2 border border-gray-300 rounded"
                                                  placeholder="Masukan G (kg)">
                                        </div>
                                        <br />
                                        <hr />
                                        <br />
                                        <div class="mb-2">
                                             <label for="text" class="block font-bold mb-2">Hasil JBB :</label>
                                             <p id="output" style="color: green;">.....</p>
                                        </div>
                                        <br />
                                        <div class="flex justify-end">
                                             <a href="<?php echo base_url('index.php/dashboard'); ?>">
                                                  <button type="submit"
                                                       class="bg-red-500 text-white font-semibold py-2 px-4 rounded-lg">Close</button>
                                             </a>
                                             <button style="margin-left: 10px;" onclick="hitungOutput()" type="submit"
                                                  class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">Enter</button>
                                        </div>
                                   </form>
                              </div>
                         </div>

                         <!-- POP UP HITUNG PICK UP -->
                         <!-- ################# -->
                         <!-- <div id="popupPickUp"
                              class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                              <div class="bg-white rounded-lg p-8">
                                   <form>
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">JBB:</label>
                                                       <input type="text" id="varJBBPickupKijang"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan JBB (kg)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">S1:</label>
                                                       <input type="text" id="varS1PickupKijang"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan S1 (kg)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">S2:</label>
                                                       <input type="text" id="varS2PickupKijang"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan S2 (kg)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">BK Pick:</label>
                                                       <input type="text" id="varBKPickupKijang"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan BK (kg)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">L Pick:</label>
                                                       <input type="text" id="varLPickupKijang"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan L (kg)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">G:</label>
                                                       <input type="text" id="varGPickupKijang"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan G (kg)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            JBI:</label>
                                                       <input type="text" id="varJBIPickupKijang"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan JBI (kg)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <hr />
                                        <br />
                                        <div class="mb-2">
                                             <label for="text" class="block font-bold mb-2">Hasil :</label>
                                             <table>
                                                  <thead>
                                                       <tr>
                                                            <th>JBB</th>
                                                            <th>S1</th>
                                                            <th>S2</th>
                                                            <th>BK</th>
                                                            <th>L</th>
                                                            <th>G</th>
                                                            <th>JBI</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td id="varJBBPickupKijang">...</td>
                                                            <td id="varS1PickupKijang">...</td>
                                                            <td id="varS2PickupKijang">...</td>
                                                            <td id="varBKPickupKijang">...</td>
                                                            <td id="varLPickupKijang">...</td>
                                                            <td id="varGPickupKijang">...</td>
                                                            <td id="varJBIPickupKijang">...</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                        <br />
                                        <div class="flex justify-end">
                                             <a href="<?php echo base_url('index.php/dashboard'); ?>">
                                                  <button type="submit"
                                                       class="bg-red-500 text-white font-semibold py-2 px-4 rounded-lg">Close</button>
                                             </a>
                                             <button style="margin-left: 10px;" onclick="hitungPickUpKijang()"
                                                  type="submit"
                                                  class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">Enter</button>
                                        </div>
                                   </form>
                              </div>
                         </div> -->

                         <!-- CARD DASHBOARD -->
                         <!-- <br />
                         <div class="row">
                              <div class="col-4" id="openFormButtonPickUp">
                                   <div class="card">
                                        <center>
                                             <a href="">
                                                  <img style="margin-top: 10px;"
                                                       src="https://png.pngtree.com/png-vector/20220220/ourlarge/pngtree-vector-illustration-of-truck-png-image_4427022.png"
                                                       alt="Kendaraan 1">
                                                  <h3></h3>
                                                  <p>Pick Up Kijang</p>
                                             </a>
                                        </center>
                                   </div>
                              </div>

                              <div class="col-4">
                                   <div class="card">
                                        <center>
                                             <a href="">
                                                  <img style="margin-top: 10px;"
                                                       src="https://png.pngtree.com/png-clipart/20200401/original/pngtree-transport-car-angkot-png-image_5329758.jpg"
                                                       alt="Kendaraan 1">
                                                  <h3></h3>
                                                  <p>Angkot</p>
                                             </a>
                                        </center>
                                   </div>
                              </div>

                              <div class="col-4">
                                   <div class="card">
                                        <center>
                                             <a href="">
                                                  <img style="margin-top: 10px;"
                                                       src="https://png.pngtree.com/png-clipart/20220423/ourlarge/pngtree-bus-transportation-illustration-png-image_4553041.png"
                                                       alt="Kendaraan 1">
                                                  <h3></h3>
                                                  <p>Bus 1.2</p>
                                             </a>
                                        </center>
                                   </div>
                              </div>
                         </div>
                         <br /> -->
                    </div>
               </div>
          </div>
     </body>
     <!-- partial -->

     <script>
     document.getElementById('openFormButton').addEventListener('click', function(event) {
          event.preventDefault();
          document.getElementById('popupForm').classList.remove('hidden');
     });

     document.getElementById('popupForm').addEventListener('click', function(event) {
          if (event.target === this) {
               this.classList.add('hidden');

          }
     });
     </script>

</body>

</html>