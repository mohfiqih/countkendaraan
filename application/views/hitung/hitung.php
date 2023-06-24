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
     <title>Halaman Hitung</title>
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

     .form-group {
          display: flex;
          flex-direction: column;
          margin-bottom: 15px;
     }

     .form-group label {
          font-weight: bold;
          margin-bottom: 5px;
     }

     .form-group input {
          padding: 8px;
          border-radius: 4px;
          border: 1px solid #ccc;
     }

     .form-group input[type="submit"] {
          background-color: #4CAF50;
          color: white;
          cursor: pointer;
     }

     .sidebar {
          transition: filter 0.3s ease;
     }

     .sidebar.blur {
          filter: blur(5px);
     }
     </style>

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

                                   <li>
                                        <a href="#"
                                             class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24"
                                                  height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                  <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                  <line x1="4" y1="19" x2="20" y2="19" />
                                                  <polyline points="4 15 8 9 12 11 16 6 20 10" />
                                             </svg>
                                             Analytics
                                        </a>
                                   </li>

                                   <li>
                                        <a href="#"
                                             class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24"
                                                  height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                  <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                  <polyline points="14 3 14 8 19 8" />
                                                  <path
                                                       d="M17 21H7a2 2 0 0 1 -2 -2V5a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                                  <line x1="9" y1="9" x2="10" y2="9" />
                                                  <line x1="9" y1="13" x2="15" y2="13" />
                                                  <line x1="9" y1="17" x2="15" y2="17" />
                                             </svg>
                                             Invoices
                                        </a>
                                   </li>

                                   <li>
                                        <a href="#"
                                             class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-blue-700 hover:text-blue-600 hover:bg-gray-200 bg-gray-200">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24"
                                                  height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                  <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                  <circle cx="12" cy="12" r="9" />
                                                  <polyline points="12 7 12 12 9 15" />
                                             </svg>
                                             Tracking
                                        </a>
                                   </li>

                                   <li>
                                        <a href="#"
                                             class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24"
                                                  height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                  <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                  <path
                                                       d="M16 6h3a 1 1 0 011 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                                                  <line x1="8" y1="8" x2="12" y2="8" />
                                                  <line x1="8" y1="12" x2="12" y2="12" />
                                                  <line x1="8" y1="16" x2="12" y2="16" />
                                             </svg>
                                             History
                                        </a>
                                   </li>

                                   <li>
                                        <a href="#"
                                             class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24"
                                                  height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                  <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                  <path
                                                       d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                  <circle cx="12" cy="12" r="3" />
                                             </svg>
                                             Settings
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
                         <div class="text-2xl font-bold tracking-tight text-gray-800">Menu Sidebar</div>
                    </div>
                    <!-- @end Brand Logo / Name -->

                    <div class="px-4 py-2">
                         <ul>
                              <li>
                                   <a href="<?php echo base_url('index.php/dashboard'); ?>"
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

                              <li>
                                   <a href="#"
                                        class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5" viewBox="0 0 24 24"
                                             stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                             <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                             <line x1="12" y1="5" x2="12" y2="19" />
                                             <line x1="5" y1="12" x2="19" y2="12" />
                                        </svg>
                                        <p style="margin-left: 10px;">Hitung JBB</p>
                                   </a>
                              </li>
                              <!-- <li>
                                   <a href="#"
                                        class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24"
                                             height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                             fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                             <path
                                                  d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                             <circle cx="12" cy="12" r="3" />
                                        </svg>
                                        Settings
                                   </a>
                              </li> -->
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
                              <div class="text-xl font-bold tracking-tight text-gray-800 md:hidden ml-2">Dashing Admin.
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
                         <div class="flex items-center justify-between mb-4">
                              <h2 class="text-xl font-bold text-gray-800">Output Hitung :</h2>

                              <button id="openFormButton"
                                   class="flex items-center bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                        <line x1="12" y1="5" x2="12" y2="19" />
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                   </svg>
                                   Hitung Data
                              </button>
                         </div>


                         <div id="popupForm"
                              class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                              <div class="bg-white rounded-lg p-8">
                                   <!-- Tempatkan form input Anda di sini -->
                                   <form>
                                        <div class="mb-2">
                                             <label for="name" class="block font-bold mb-2">Masukan JBB:</label>
                                             <input type="text" id="jbb" name="jbb"
                                                  class="w-full px-3 py-2 border border-gray-300 rounded"
                                                  placeholder="Masukan JBB (kg)" required>
                                        </div>
                                        <div class="mb-2">
                                             <label for="email" class="block font-bold mb-2">Masukan Sumbu 1:</label>
                                             <input type="email" id="sumbu1" name="sumbu1"
                                                  class="w-full px-3 py-2 border border-gray-300 rounded"
                                                  placeholder="Masukan Sumbu 1 (kg)" required>
                                        </div>
                                        <div class="mb-2">
                                             <label for="email" class="block font-bold mb-2">Masukan Sumbu 2:</label>
                                             <input type="email" id="sumbu2" name="sumbu2"
                                                  class="w-full px-3 py-2 border border-gray-300 rounded"
                                                  placeholder="Masukan Sumbu 2 (kg)" required>
                                        </div>
                                        <div class="mb-2">
                                             <label for="email" class="block font-bold mb-2">Masukan G (Orang):</label>
                                             <input type="email" id="varG" name="varG"
                                                  class="w-full px-3 py-2 border border-gray-300 rounded"
                                                  placeholder="Masukan G = 'Orang' (kg)" required>
                                        </div>
                                        <div class="mb-2">
                                             <label for="email" class="block font-bold mb-2">Masukan a (WB):</label>
                                             <input type="email" id="varA" name="varA"
                                                  class="w-full px-3 py-2 border border-gray-300 rounded"
                                                  placeholder="Masukan a (mm)" required>
                                        </div>
                                        <div class="mb-2">
                                             <label for="email" class="block font-bold mb-2">Masukan q:</label>
                                             <input type="email" id="varQ" name="varQ"
                                                  class="w-full px-3 py-2 border border-gray-300 rounded"
                                                  placeholder="Masukan q (mm)" required>
                                        </div>
                                        <div class="flex justify-end">
                                             <button type="submit"
                                                  class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">Submit</button>
                                        </div>
                                   </form>
                              </div>
                         </div>
                         <div class="bg-white mb-10 p-6 rounded-lg shadow">
                              <div class="md:flex">
                                   <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                             <tr>
                                                  <th scope="col"
                                                       class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                                                       JJB</th>
                                                  <th scope="col"
                                                       class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                                                       Sumbu 1</th>
                                                  <th scope="col"
                                                       class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                                                       Sumbu 2</th>
                                                  <th scope="col"
                                                       class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                                                       MST</th>
                                                  <th scope="col"
                                                       class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                                                       Kelas jalan</th>
                                             </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                             <tr>
                                                  <td class="px-6 py-4 whitespace-nowrap">Hasil</td>
                                                  <td class="px-6 py-4 whitespace-nowrap">Hasil</td>
                                                  <td class="px-6 py-4 whitespace-nowrap">Hasil</td>
                                                  <td class="px-6 py-4 whitespace-nowrap">Hasil</td>
                                                  <td class="px-6 py-4 whitespace-nowrap">Hasil</td>
                                             </tr>
                                        </tbody>
                                   </table>
                              </div>
                         </div>

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
