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
          width: 100%;
          /* Mengubah lebar menjadi 100% */
          max-width: 300px;
          height: 300px;
          /* Menambahkan lebar maksimum */
          text-align: center;
          margin-left: 20px;
     }

     .card img {
          width: 300px;
          /* Mengubah lebar gambar menjadi 100% */
          height: 200px;
          /* Menjadikan tinggi gambar responsif */
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
          flex: 0 0 100%;
          /* Mengubah lebar menjadi 100% */
          max-width: 100%;
          /* Menambahkan lebar maksimum */
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

     /* Menambahkan media query untuk perangkat seluler */
     @media (min-width: 300px) {
          .col-6 {
               flex: 0 0 50%;
               max-width: 50%;
               padding: 10px;
          }
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
          // var varBK = parseFloat(BK);

          // Memasukkan output ke dalam tabel
          document.getElementById("output").innerHTML = output;
          document.getElementById("varL").innerHTML = varL;
     }

     // ------------- HITUNG PICK UP KIJANG -------------------- //
     function hitungPickup() {
          event.preventDefault();
          // Mendapatkan nilai dari input
          var JBB_ = document.getElementById("PickJBB").value;
          var S1 = document.getElementById("PickS1").value;
          var S2 = document.getElementById("PickS2").value;
          var A = document.getElementById("PickA").value;
          var Q = document.getElementById("PickQ").value;
          var G_ = document.getElementById("PickG").value;
          var P = document.getElementById("PickP").value;

          var varJBB_ = parseFloat(JBB_);
          var varS1 = parseFloat(S1);
          var varS2 = parseFloat(S2);
          var varG_ = parseFloat(G_);
          // var varJBI = parseFloat(output_R1) + parseFloat(varMST);
          var varP = parseFloat(P);

          // Menghitung Rumus
          // 1. BK = S1 + S2
          var output_BK = parseFloat(S1) + parseFloat(S2);
          // 2. G = x * 60
          var output_G = parseFloat(G_) * 60;
          // 3. L = JBB - (BK + G)
          var output_L = parseFloat(JBB_) - (parseFloat(output_BK) + parseFloat(output_G));

          // 4. R2 = S2 + G*(a-p)/a + L*(a-q)/a
          var varMST = parseFloat(S2) + parseFloat(output_L) * parseFloat(Q) / parseFloat(A) + parseFloat(output_G) *
               parseFloat(P) / parseFloat(A);
          varMST = parseFloat(varMST).toFixed(2);
          console.log(varMST);

          // 5. Mencari R1
          var output_R1 = parseFloat(S1) + parseFloat(output_G) * (parseFloat(A) - parseFloat(P)) / parseFloat(A) +
               parseFloat(output_L) * (parseFloat(A) - parseFloat(Q)) / parseFloat(A);
          output_R1 = parseFloat(output_R1).toFixed(2);
          console.log(output_R1);

          var varJBI = parseFloat(output_R1) + parseFloat(varMST);

          var varDAKijang = parseFloat(output_G) + parseFloat(output_L);

          // Memasukkan output ke dalam tabel
          document.getElementById("varJBB_").innerHTML = varJBB_;
          document.getElementById("varS1").innerHTML = varS1;
          document.getElementById("varS2").innerHTML = varS2;
          document.getElementById("varJBI").innerHTML = varJBI;


          // document.getElementById("output_R1").innerHTML = output_R1 + " Kg";
          document.getElementById("varMST").innerHTML = varMST + " Kg";
          document.getElementById("varDAKijang").innerHTML = varDAKijang;

          document.getElementById("output_BK").innerHTML = output_BK;
          document.getElementById("output_L").innerHTML = output_L;
          document.getElementById("output_G").innerHTML = output_G;
          document.getElementById("varP").innerHTML = varP;

     }

     function hitungCarry() {
          event.preventDefault();
          var JBB_C = document.getElementById("JBB_Carry").value;
          var S1_C = document.getElementById("S1_Carry").value;
          var S2_C = document.getElementById("S2_Carry").value;
          var A_C = document.getElementById("A_Carry").value;
          var Q_C = document.getElementById("Q_Carry").value;
          var G_C = document.getElementById("G_Carry").value;

          var out_JBB_C = parseFloat(JBB_C);
          var out_S1_C = parseFloat(S1_C);
          var out_S2_C = parseFloat(S2_C);
          var out_A_C = parseFloat(A_C);

          // RUMUS
          // 1. BK = S1 + S2
          out_BK_C = parseFloat(S1_C) + parseFloat(S2_C);
          // 2. L = JBB - (BK+G)
          out_L_C = parseFloat(JBB_C) - (parseFloat(out_BK_C) + parseFloat(G_C));
          // 3. R1 = S1 + L * (a-q)/a
          out_R1_C = parseFloat(S1_C) + parseFloat(G_C) + parseFloat(out_L_C) * (parseFloat(Q_C) / parseFloat(A_C));
          // 4. R2 = S2 + L * q/a
          out_R2_C = parseFloat(S2_C) + parseFloat(out_L_C) * (parseFloat(Q_C) / parseFloat(A_C));


          //  G = x * 60
          out_G_C = parseFloat(G_C) * 60;

          //  JBI = R1 + R2
          out_JBI_C = parseFloat(out_R1_C) + parseFloat(out_R2_C);

          out_R2_C = parseFloat(S2_C) + parseFloat(out_L_C) * (parseFloat(Q_C) / parseFloat(A_C));
          out_R2_C = parseFloat(out_R2_C).toFixed(2);
          console.log(out_R2_C);

          out_DA_Carry = parseFloat(out_G_C) + parseFloat(out_L_C);

          document.getElementById("out_JBB_C").innerHTML = out_JBB_C;
          document.getElementById("out_S1_C").innerHTML = out_S1_C;
          document.getElementById("out_S2_C").innerHTML = out_S2_C;
          document.getElementById("out_BK_C").innerHTML = out_BK_C;
          document.getElementById("out_L_C").innerHTML = out_L_C;
          document.getElementById("out_G_C").innerHTML = out_G_C;
          document.getElementById("out_JBI_C").innerHTML = out_JBI_C;
          document.getElementById("out_R2_C").innerHTML = out_R2_C + " Kg";
          document.getElementById("out_DA_Carry").innerHTML = out_DA_Carry + " Kg";
          // document.getElementById("out_R1_C").innerHTML = out_R1_C;


     }

     function hitungAngkot() {
          event.preventDefault();
          // Mendapatkan nilai dari input
          var JBB_A = document.getElementById("JBB_Angkot").value;
          var S1_A = document.getElementById("S1_Angkot").value;
          var S2_A = document.getElementById("S2_Angkot").value;
          var A_A = document.getElementById("A_Angkot").value;
          var Q_A = document.getElementById("Q_Angkot").value;
          var G_A = document.getElementById("G_Angkot").value;


          var out_JBB = parseFloat(JBB_A);
          var out_S1 = parseFloat(S1_A);
          var out_S2 = parseFloat(S2_A);
          var out_A = parseFloat(A_A);

          // RUMUS
          // 1. BK = S1 + S2
          out_BK = parseFloat(S1_A) + parseFloat(S2_A);
          // 2. L = 70 * G - 10
          out_L = 70 * parseFloat(G_A) - 10;
          // 3. G = G * 60
          out_G = parseFloat(G_A) * 60;

          out_L2 = parseFloat(out_L) - parseFloat(out_G);
          // 4. R1 = S1 + L * (a-q)/a
          out_R1 = parseFloat(S1_A) + parseFloat(out_L) * (parseFloat(A_A) - parseFloat(Q_A)) / parseFloat(A_A) + " Kg";
          out_R1 = parseFloat(out_R1).toFixed(2);
          console.log(out_R1);
          // 5. R2 = S2 + L*q/a
          out_R2 = parseFloat(S2_A) + parseFloat(out_L) * parseFloat(Q_A) / parseFloat(A_A) + " Kg";
          out_R2 = parseFloat(out_R2).toFixed(2);
          console.log(out_R2);
          // 6. JBI = R1 + R2
          out_JBI = parseFloat(out_R1) + parseFloat(out_R2);
          out_DA_Angkot = parseFloat(out_G) + parseFloat(out_L2);

          document.getElementById("out_JBB").innerHTML = out_JBB;
          document.getElementById("out_S1").innerHTML = out_S1;
          document.getElementById("out_S2").innerHTML = out_S2;
          document.getElementById("out_BK").innerHTML = out_BK;
          document.getElementById("out_L2").innerHTML = out_L2;
          document.getElementById("out_G").innerHTML = out_G;
          // document.getElementById("out_R1").innerHTML = out_R1 + " Kg";
          document.getElementById("out_R2").innerHTML = out_R2 + " Kg";
          document.getElementById("out_DA_Angkot").innerHTML = out_DA_Angkot;
          document.getElementById("out_JBI").innerHTML = out_JBI;

     }

     function hitungBarang12() {
          event.preventDefault();

          var JBB_S12 = document.getElementById("JBB_Barang12").value;
          var S1_S12 = document.getElementById("S1_Barang12").value;
          var S2_S12 = document.getElementById("S2_Barang12").value;
          var A_S12 = document.getElementById("A_Barang12").value;
          var Q_S12 = document.getElementById("Q_Barang12").value;
          var G_S12 = document.getElementById("G_Barang12").value;

          var out_JBB_S12 = parseFloat(JBB_S12);
          var out_S1_S12 = parseFloat(S1_S12);
          var out_S2_S12 = parseFloat(S2_S12);
          var out_A_S12 = parseFloat(A_S12);

          // RUMUS
          // 1. BK = S1 + S2
          out_BK_S12 = parseFloat(S1_S12) + parseFloat(S2_S12);
          // 3. G = G * 60
          out_G_S12 = parseFloat(G_S12) * 60;
          // 2. L = 70 * G - 10
          out_L_S12 = parseFloat(JBB_S12) - (parseFloat(out_BK_S12) + parseFloat(out_G_S12));

          out_R1_S12 = parseFloat(S1_S12) + parseFloat(out_G_S12) + parseFloat(out_L_S12) * (parseFloat(A_S12) -
               parseFloat(Q_S12)) / parseFloat(A_S12);
          out_R1_S12 = parseFloat(out_R1_S12).toFixed(2);
          console.log(out_R1_S12);
          // 5. R2 = S2 + L*q/a
          out_R2_S12 = parseFloat(S2_S12) + parseFloat(out_L_S12) * (parseFloat(Q_S12) / parseFloat(A_S12));
          out_R2_S12 = parseFloat(out_R2_S12).toFixed(2);
          console.log(out_R2_S12);
          // 6. JBI = R1 + R2
          out_JBI_S12 = parseFloat(out_R1_S12) + parseFloat(out_R2_S12);

          out_DA_S12 = parseFloat(out_G_S12) + parseFloat(out_L_S12);


          document.getElementById("out_JBB_S12").innerHTML = out_JBB_S12;
          document.getElementById("out_S1_S12").innerHTML = out_S1_S12;
          document.getElementById("out_S2_S12").innerHTML = out_S2_S12;
          document.getElementById("out_BK_S12").innerHTML = out_BK_S12;
          document.getElementById("out_G_S12").innerHTML = out_G_S12;
          document.getElementById("out_L_S12").innerHTML = out_L_S12;
          document.getElementById("out_R2_S12").innerHTML = out_R2_S12 + " Kg";
          document.getElementById("out_DA_S12").innerHTML = out_DA_S12;
          document.getElementById("out_JBI_S12").innerHTML = out_JBI_S12;

     }

     function hitungBarangDepanS1() {
          event.preventDefault();

          var JBB_B = document.getElementById("JBB_Brg").value;
          var S1_B = document.getElementById("S1_Brg").value;
          var S2_B = document.getElementById("S2_Brg").value;
          var A_B = document.getElementById("A_Brg").value;
          var Q_B = document.getElementById("Q_Brg").value;
          var G_B = document.getElementById("G_Brg").value;
          var P_B = document.getElementById("P_Brg").value;

          var output_JBB_Brg = parseFloat(JBB_B);
          var output_S1_Brg = parseFloat(S1_B);
          var output_S2_Brg = parseFloat(S2_B);
          var output_A_Brg = parseFloat(A_B);


          // RUMUS
          // 1. BK = S1 + S2
          output_BK_Brg = parseFloat(S1_B) + parseFloat(S2_B);
          // 3. G = G * 60
          output_G_Brg = parseFloat(G_B) * 60;
          // 2. L = 70 * G - 10
          output_L_Brg = parseFloat(JBB_B) - (parseFloat(output_BK_Brg) + parseFloat(output_G_Brg));

          output_R1_Brg = parseFloat(S1_B) + parseFloat(output_G_Brg) * (parseFloat(A_B) - parseFloat(P_B)) /
               parseFloat(A_B) + parseFloat(output_L_Brg) * (parseFloat(A_B) - parseFloat(Q_B)) / parseFloat(A_B);
          output_R1_Brg = parseFloat(output_R1_Brg).toFixed(2);
          console.log(output_R1_Brg);

          output_R2_Brg = parseFloat(S2_B) + parseFloat(output_L_Brg) * (parseFloat(Q_B) / parseFloat(A_B)) +
               parseFloat(output_G_Brg) * (parseFloat(P_B) / parseFloat(A_B));
          output_R2_Brg = parseFloat(output_R2_Brg).toFixed(2);
          console.log(output_R2_Brg);


          // 6. JBI = R1 + R2
          output_JBI_Brg = parseFloat(output_R1_Brg) + parseFloat(output_R2_Brg);

          output_DA_Brg = parseFloat(output_G_Brg) + parseFloat(output_L_Brg);

          document.getElementById("output_JBB_Brg").innerHTML = output_JBB_Brg;
          document.getElementById("output_S1_Brg").innerHTML = output_S1_Brg;
          document.getElementById("output_S2_Brg").innerHTML = output_S2_Brg;
          document.getElementById("output_BK_Brg").innerHTML = output_BK_Brg;
          document.getElementById("output_G_Brg").innerHTML = output_G_Brg;
          document.getElementById("output_L_Brg").innerHTML = output_L_Brg;
          // document.getElementById("output_R1_Brg").innerHTML = output_R1_Brg;
          document.getElementById("output_R2_Brg").innerHTML = output_R2_Brg + " Kg";
          document.getElementById("output_JBI_Brg").innerHTML = output_JBI_Brg;
          document.getElementById("output_DA_Brg").innerHTML = output_DA_Brg;
     }

     function hitungTronton() {
          event.preventDefault();

          var JBB_T = document.getElementById("JBB_Tronton").value;
          var S1_T = document.getElementById("S1_Tronton").value;
          var S2_T = document.getElementById("S2_Tronton").value;
          var S3_T = document.getElementById("S3_Tronton").value;
          var A_T = document.getElementById("A_Tronton").value;
          var Q_T = document.getElementById("Q_Tronton").value;
          var G_T = document.getElementById("G_Tronton").value;
          var P_T = document.getElementById("P_Tronton").value;

          var out_JBB_Tronton = parseFloat(JBB_T);
          var out_S1_Tronton = parseFloat(S1_T);
          var out_S2_Tronton = parseFloat(S2_T);
          var out_S3_Tronton = parseFloat(S3_T);
          var out_A_Tronton = parseFloat(A_T);

          // RUMUS
          // 1. BK = S1 + S2
          out_BK_Tronton = parseFloat(S1_T) + parseFloat(S2_T) + parseFloat(S3_T);
          // 3. G = G * 60
          out_G_Tronton = parseFloat(G_T) * 60;

          out_L_Tronton = parseFloat(JBB_T) - (parseFloat(out_BK_Tronton) + parseFloat(out_G_Tronton));

          // Rumus R1
          // Hitung (a+p) / a
          ap = (parseFloat(A_T) + parseFloat(P_T)) / parseFloat(A_T);
          aq = (parseFloat(A_T) - parseFloat(Q_T)) / parseFloat(A_T);
          // Hasil R1
          out_R1_Tronton = parseFloat(S1_T) + parseFloat(out_G_Tronton) * parseFloat(ap) + parseFloat(out_L_Tronton) *
               parseFloat(aq);
          out_R1_Tronton = parseFloat(out_R1_Tronton).toFixed(2);
          console.log(out_R1_Tronton);

          // Rumus R2
          //  hitung q / 2.a
          q2a = parseFloat(Q_T) / (2 * parseFloat(A_T));
          p2a = parseFloat(P_T) / (2 * parseFloat(A_T));
          out_R2_Tronton = parseFloat(S2_T) + parseFloat(out_L_Tronton) * parseFloat(q2a) + parseFloat(out_G_Tronton) *
               parseFloat(p2a);
          out_R2_Tronton = parseFloat(out_R2_Tronton).toFixed(2);
          console.log(out_R2_Tronton);


          // Rumus R3
          q2a = parseFloat(Q_T) / (2 * parseFloat(A_T));
          p2a = parseFloat(P_T) / (2 * parseFloat(A_T));
          out_R3_Tronton = parseFloat(S3_T) + parseFloat(out_L_Tronton) * parseFloat(q2a) + parseFloat(out_G_Tronton) *
               parseFloat(p2a);
          out_R3_Tronton = parseFloat(out_R3_Tronton).toFixed(2);
          console.log(out_R3_Tronton);

          // 6. JBI = R1 + R2 + R3
          out_JBI_Tronton = parseFloat(out_R1_Tronton) + parseFloat(out_R2_Tronton) + parseFloat(out_R3_Tronton);

          // Rumus DA
          out_DA_Tronton = parseFloat(out_G_Tronton) + parseFloat(out_L_Tronton);

          document.getElementById("out_JBB_Tronton").innerHTML = out_JBB_Tronton;
          document.getElementById("out_S1_Tronton").innerHTML = out_S1_Tronton;
          document.getElementById("out_S2_Tronton").innerHTML = out_S2_Tronton;
          document.getElementById("out_S3_Tronton").innerHTML = out_S3_Tronton;
          document.getElementById("out_BK_Tronton").innerHTML = out_BK_Tronton;
          document.getElementById("out_G_Tronton").innerHTML = out_G_Tronton;
          document.getElementById("out_L_Tronton").innerHTML = out_L_Tronton;
          document.getElementById("out_JBI_Tronton").innerHTML = out_JBI_Tronton;
          // document.getElementById("out_R1_Tronton").innerHTML = out_R1_Tronton;
          document.getElementById("out_R2_Tronton").innerHTML = out_R2_Tronton + " Kg";
          // document.getElementById("out_R3_Tronton").innerHTML = out_R3_Tronton;
          document.getElementById("out_DA_Tronton").innerHTML = out_DA_Tronton;
     }
     </script>

</head>

<body>

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
                                             Daya Angkut
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
                         <div class="text-2xl font-bold tracking-tight text-gray-800">Daya Angkut.</div>
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
                                        PR
                                   </div>

                                   <div x-show.transition="open" @click.away="open = false"
                                        class="absolute top-0 mt-12 right-0 w-48 bg-blue-500 py-2 shadow-md border border-gray-100 rounded-lg z-40">

                                        <a style="margin-left: 10px;" href="<?php echo base_url('index.php/login') ?>"
                                             class="block px-4 py-2 text-white">Logout</a>
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
                                        di Dashboard Hitung Daya Angkut<?php echo $username; ?>!</span>
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

                         <!-- HITUNG JBB -->
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
                                   <br />
                                   <form>
                                        <div class="mb-2">
                                             <label for="text" class="block font-bold mb-2">Masukan L:</label>
                                             <input type="text" id="varJBB"
                                                  class="w-full px-3 py-2 border border-gray-300 rounded"
                                                  placeholder="Masukan L (kg)">
                                        </div>
                                        <div class="mb-2">
                                             <label for="text" class="block font-bold mb-2">Masukan BK:</label>
                                             <input type="text" id="varBK"
                                                  class="w-full px-3 py-2 border border-gray-300 rounded"
                                                  placeholder="Masukan BK (kg)">
                                        </div>
                                        <div class="mb-2">
                                             <label for="text" class="block font-bold mb-2">Masukan G:</label>
                                             <input type="text" id="varG"
                                                  class="w-full px-3 py-2 border border-gray-300 rounded"
                                                  placeholder="Masukan G (kg)">
                                        </div>
                                        <br />
                                        <hr />
                                        <br />
                                        <div class="mb-2">
                                             <label for="text" class="block font-bold mb-2">Hasil JBB :</label>
                                             <p id="output" style="color: green;">.....</p>
                                             <!-- <p id="varL">...</p> -->
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

                         <!-- POP UP HITUNG PICK UP KIJANG -->
                         <div id="popupPickUp"
                              class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                              <div class="bg-white rounded-lg p-8">
                                   <form>
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            JBB:</label>
                                                       <input type="text" id="PickJBB"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan JBB (kg)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            S1:</label>
                                                       <input type="text" id="PickS1"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan S1 (kg)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            S2:</label>
                                                       <input type="text" id="PickS2"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan S2 (kg)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            a:</label>
                                                       <input type="text" id="PickA"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan a (cm)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            q:</label>
                                                       <input type="text" id="PickQ"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan q (cm)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            G:</label>
                                                       <input type="text" id="PickG"
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
                                                            P:</label>
                                                       <input type="text" id="PickP"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan p (cm)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <hr />
                                        <br />
                                        <div class="mb-2">
                                             <label for="text" class="block font-bold mb-2">Hasil Pick Up
                                                  Kijang:</label>
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
                                                            <!-- <th>R1</th> -->
                                                            <th>MST</th>
                                                            <th>DA</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td id="varJBB_">...</td>
                                                            <td id="varS1">...</td>
                                                            <td id="varS2">...</td>
                                                            <td id="output_BK">...</td>
                                                            <td id="output_L">...</td>
                                                            <td id="output_G">...</td>
                                                            <td id="varJBI">...</td>
                                                            <!-- <td id="output_R1">...</td> -->
                                                            <td id="varMST">...</td>
                                                            <td id="varDAKijang">...</td>
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
                                             <button style="margin-left: 10px;" onclick="hitungPickup()" type="submit"
                                                  class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">Enter</button>
                                        </div>
                                   </form>
                              </div>
                         </div>


                         <!-- POP UP HITUNG PICK UP CARRY -->
                         <div id="popupPickUpCarry"
                              class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                              <div class="bg-white rounded-lg p-8">
                                   <form>
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            JBB:</label>
                                                       <input type="text" id="JBB_Carry"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan JBB (kg)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            S1:</label>
                                                       <input type="text" id="S1_Carry"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan S1 (kg)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            S2:</label>
                                                       <input type="text" id="S2_Carry"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan JBB (kg)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            a:</label>
                                                       <input type="text" id="A_Carry"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan a (cm)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            q:</label>
                                                       <input type="text" id="Q_Carry"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan q (cm)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            G:</label>
                                                       <input type="text" id="G_Carry"
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
                                                            P:</label>
                                                       <input type="text" id="P_Carry"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan P (cm)">
                                                  </div>
                                             </div>
                                        </div>
                                        <hr />
                                        <br />
                                        <div class="mb-2">
                                             <label for="text" class="block font-bold mb-2">Hasil Pick Up Carry:</label>
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
                                                            <th>MST</th>
                                                            <th>DA</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td id="out_JBB_C">...</td>
                                                            <td id="out_S1_C">...</td>
                                                            <td id="out_S2_C">...</td>
                                                            <td id="out_BK_C">...</td>
                                                            <td id="out_L_C">...</td>
                                                            <td id="out_G_C">...</td>
                                                            <td id="out_JBI_C">...</td>
                                                            <td id="out_R2_C">...</td>
                                                            <td id="out_DA_Carry">...</td>
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
                                             <button style="margin-left: 10px;" onclick="hitungCarry()" type="submit"
                                                  class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">Enter</button>
                                        </div>
                                   </form>
                              </div>
                         </div>


                         <!-- POP UP HITUNG ANGKOT -->
                         <div id="popupAngkot"
                              class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                              <div class="bg-white rounded-lg p-8">
                                   <form>
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            JBB Angkot:</label>
                                                       <input type="text" id="JBB_Angkot"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan JBB (kg)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            S1:</label>
                                                       <input type="text" id="S1_Angkot"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan S1 (kg)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            S2:</label>
                                                       <input type="text" id="S2_Angkot"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan S2 (kg)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            a:</label>
                                                       <input type="text" id="A_Angkot"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan a (cm)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            Q:</label>
                                                       <input type="text" id="Q_Angkot"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan Q (cm)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            G:</label>
                                                       <input type="text" id="G_Angkot"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan G (Orang)">
                                                  </div>
                                             </div>
                                        </div>
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
                                                            <!-- <th>R1</th> -->
                                                            <th>MST</th>
                                                            <th>DA</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td id="out_JBB">...</td>
                                                            <td id="out_S1">...</td>
                                                            <td id="out_S2">...</td>
                                                            <td id="out_BK">...</td>
                                                            <td id="out_L2">...</td>
                                                            <td id="out_G">...</td>
                                                            <td id="out_JBI">...</td>
                                                            <!-- <td id="out_R1">...</td> -->
                                                            <td id="out_R2">...</td>
                                                            <td id="out_DA_Angkot">...</td>
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
                                             <button style="margin-left: 10px;" onclick="hitungAngkot()" type="submit"
                                                  class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">Enter</button>
                                        </div>
                                   </form>
                              </div>
                         </div>

                         <!-- POP UP HITUNG Barang Sumbu 1.2 -->
                         <div id="popupMobilBarangP0"
                              class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                              <div class="bg-white rounded-lg p-8">
                                   <form>
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            JBB Barang:</label>
                                                       <input type="text" id="JBB_Barang12"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan JBB (kg)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            S1:</label>
                                                       <input type="text" id="S1_Barang12"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan S1 (kg)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            S2:</label>
                                                       <input type="text" id="S2_Barang12"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan S2 (kg)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            a:</label>
                                                       <input type="text" id="A_Barang12"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan a (cm)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            Q:</label>
                                                       <input type="text" id="Q_Barang12"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan Q (cm)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            G:</label>
                                                       <input type="text" id="G_Barang12"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan G (Orang)">
                                                  </div>
                                             </div>
                                        </div>
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
                                                            <th>MST</th>
                                                            <th>DA</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td id="out_JBB_S12">...</td>
                                                            <td id="out_S1_S12">...</td>
                                                            <td id="out_S2_S12">...</td>
                                                            <td id="out_BK_S12">...</td>
                                                            <td id="out_L_S12">...</td>
                                                            <td id="out_G_S12">...</td>
                                                            <td id="out_JBI_S12">...</td>
                                                            <!-- <td id="out_R1">...</td> -->
                                                            <td id="out_R2_S12">...</td>
                                                            <td id="out_DA_S12">...</td>
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
                                             <button style="margin-left: 10px;" onclick="hitungBarang12()" type="submit"
                                                  class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">Enter</button>
                                        </div>
                                   </form>
                              </div>
                         </div>

                         <!-- POP UP HITUNG Barang Depan S1 -->
                         <div id="popupMobilBarangDepanS1"
                              class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                              <div class="bg-white rounded-lg p-8">
                                   <form>
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            JBB Barang:</label>
                                                       <input type="text" id="JBB_Brg"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan JBB (kg)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            S1:</label>
                                                       <input type="text" id="S1_Brg"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan S1 (kg)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            S2:</label>
                                                       <input type="text" id="S2_Brg"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan S2 (kg)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            a:</label>
                                                       <input type="text" id="A_Brg"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan a (cm)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            Q:</label>
                                                       <input type="text" id="Q_Brg"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan Q (cm)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            G:</label>
                                                       <input type="text" id="G_Brg"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan G (Orang)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            P:</label>
                                                       <input type="text" id="P_Brg"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan P (cm)">
                                                  </div>
                                             </div>
                                        </div>
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
                                                            <th>MST</th>
                                                            <th>DA</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td id="output_JBB_Brg">...</td>
                                                            <td id="output_S1_Brg">...</td>
                                                            <td id="output_S2_Brg">...</td>
                                                            <td id="output_BK_Brg">...</td>
                                                            <td id="output_L_Brg">...</td>
                                                            <td id="output_G_Brg">...</td>
                                                            <td id="output_JBI_Brg">...</td>
                                                            <td id="output_R2_Brg">...</td>
                                                            <td id="output_DA_Brg">...</td>
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
                                             <button style="margin-left: 10px;" onclick="hitungBarangDepanS1()"
                                                  type="submit"
                                                  class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">Enter</button>
                                        </div>
                                   </form>
                              </div>
                         </div>

                         <!-- POP UP HITUNG Truck Tronton -->
                         <div id="popupMobilTronton"
                              class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                              <div class="bg-white rounded-lg p-8">
                                   <form>
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            JBB Truck:</label>
                                                       <input type="text" id="JBB_Tronton"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan JBB (kg)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            S1:</label>
                                                       <input type="text" id="S1_Tronton"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan S1 (kg)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            S2:</label>
                                                       <input type="text" id="S2_Tronton"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan S2 (kg)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            S3:</label>
                                                       <input type="text" id="S3_Tronton"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan a (cm)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            Q:</label>
                                                       <input type="text" id="Q_Tronton"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan Q (cm)">
                                                  </div>
                                             </div>
                                             <div class="col-4" style="margin-left: 10px;">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            G:</label>
                                                       <input type="text" id="G_Tronton"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan G (Orang)">
                                                  </div>
                                             </div>
                                        </div>
                                        <br />
                                        <div class="row">
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            a:</label>
                                                       <input type="text" id="A_Tronton"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan a (cm)">
                                                  </div>
                                             </div>
                                             <div class="col-4">
                                                  <div class="mb-2">
                                                       <label for="text" class="block font-bold mb-2">Masukan
                                                            P:</label>
                                                       <input type="text" id="P_Tronton"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded"
                                                            placeholder="Masukan P (cm)">
                                                  </div>
                                             </div>
                                        </div>
                                        <hr />
                                        <br />
                                        <div class="mb-2">
                                             <label for="text" class="block font-bold mb-2">Hasil Tronton:</label>
                                             <table>
                                                  <thead>
                                                       <tr>
                                                            <th>JBB</th>
                                                            <th>S1</th>
                                                            <th>S2</th>
                                                            <th>S3</th>
                                                            <th>BK</th>
                                                            <th>L</th>
                                                            <th>G</th>
                                                            <th>JBI</th>
                                                            <!-- <th>R1</th> -->
                                                            <th>MST</th>
                                                            <!-- <th>R3</th> -->
                                                            <th>DA</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td id="out_JBB_Tronton">...</td>
                                                            <td id="out_S1_Tronton">...</td>
                                                            <td id="out_S2_Tronton">...</td>
                                                            <td id="out_S3_Tronton">...</td>
                                                            <td id="out_BK_Tronton">...</td>
                                                            <td id="out_L_Tronton">...</td>
                                                            <td id="out_G_Tronton">...</td>
                                                            <td id="out_JBI_Tronton">...</td>
                                                            <!-- <td id="out_R1_Tronton">...</td> -->
                                                            <td id="out_R2_Tronton">...</td>
                                                            <!-- <td id="out_R3_Tronton">...</td> -->
                                                            <td id="out_DA_Tronton">...</td>
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
                                             <button style="margin-left: 10px;" onclick="hitungTronton()" type="submit"
                                                  class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">Enter</button>
                                        </div>
                                   </form>
                              </div>
                         </div>

                         <!-- CARD DASHBOARD -->
                         <br />
                         <div class="row">
                              <div class="col-4">
                                   <div class="card" id="openFormButtonPickUp">
                                        <center>
                                             <a href="">
                                                  <img style="margin-top: 10px;"
                                                       src="https://media.istockphoto.com/id/1203075524/id/vektor/ambil-vektor.jpg?s=170667a&w=0&k=20&c=23Gc8dGmj6i0riVKWZIPfBP7ZWKU2fJHumLC4zqg3pw="
                                                       alt="Kendaraan 1">
                                                  <h3></h3>
                                                  <p>Pick Up Kijang P Belakang S1</p>
                                             </a>
                                        </center>
                                   </div>
                              </div>

                              <div class="col-4">
                                   <div class="card" id="openFormButtonPickUpCarry">
                                        <center>
                                             <a href="">
                                                  <img style="margin-top: 10px;"
                                                       src="https://i.pinimg.com/originals/cb/19/03/cb19039c436b264beec066bba76ac318.jpg"
                                                       alt="Kendaraan 1">
                                                  <h3></h3>
                                                  <p>Pick Up Carry Sumbu 1.1</p>
                                                  <p></p>
                                             </a>
                                        </center>
                                   </div>
                              </div>

                              <div class="col-4">
                                   <div class="card" id="openFormButtonAngkot">
                                        <center>
                                             <a href="">
                                                  <img style="margin-top: 10px;"
                                                       src="https://png.pngtree.com/element_our/20190602/ourlarge/pngtree-cartoon-blue-bus-illustration-image_1419027.jpg"
                                                       alt="Kendaraan 1">
                                                  <h3></h3>
                                                  <p>Angkot, Bus, Taksi</p>
                                             </a>
                                        </center>
                                   </div>
                              </div>

                              <div class="col-4">
                                   <div class="card" id="openFormButtonMobilBarangP0">
                                        <center>
                                             <a href="">
                                                  <img style="margin-top: 10px;"
                                                       src="https://png.pngtree.com/png-vector/20220730/ourlarge/pngtree-truck-umplung-legend-vector-and-png-png-image_6092463.png"
                                                       alt="Kendaraan 1">
                                                  <h3></h3>
                                                  <p>Mobil Barang Sumbu 1.2 P=0</p>
                                             </a>
                                        </center>
                                   </div>
                              </div>

                              <div class="col-4">
                                   <div class="card" id="openFormButtonBarangDepanS1">
                                        <center>
                                             <a href="">
                                                  <img style="margin-top: 10px;"
                                                       src="https://png.pngtree.com/png-vector/20220730/ourlarge/pngtree-truck-umplung-legend-vector-and-png-png-image_6092463.png"
                                                       alt="Kendaraan 1">
                                                  <h3></h3>
                                                  <p>Mobil Barang P Depan S1<br /> Konfigurasi 1.2</p>
                                             </a>
                                        </center>
                                   </div>
                              </div>

                              <div class="col-4">
                                   <div class="card" id="openFormButtonTronton">
                                        <center>
                                             <a href="">
                                                  <img style="margin-top: 10px;"
                                                       src="https://png.pngtree.com/png-clipart/20220513/ourlarge/pngtree-big-long-tronton-trailer-trug-png-image_4572279.png"
                                                       alt="Kendaraan 1">
                                                  <h3></h3>
                                                  <p>Truck Tronton<br /> Sumbu 1.22</p>
                                             </a>
                                        </center>
                                   </div>
                              </div>
                         </div>
                         <br />
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

     <!-- PickUp Kijang -->
     <script>
     document.getElementById('openFormButtonPickUp').addEventListener('click', function(event) {
          event.preventDefault();
          document.getElementById('popupPickUp').classList.remove('hidden');
     });

     document.getElementById('popupPickUp').addEventListener('click', function(event) {
          if (event.target === this) {
               this.classList.add('hidden');

          }
     });
     </script>

     <!-- PickUp Carry -->
     <script>
     document.getElementById('openFormButtonPickUpCarry').addEventListener('click', function(event) {
          event.preventDefault();
          document.getElementById('popupPickUpCarry').classList.remove('hidden');
     });

     document.getElementById('popupPickUpCarry').addEventListener('click', function(event) {
          if (event.target === this) {
               this.classList.add('hidden');

          }
     });
     </script>

     <!-- Angkot, Bus, -->
     <script>
     document.getElementById('openFormButtonAngkot').addEventListener('click', function(event) {
          event.preventDefault();
          document.getElementById('popupAngkot').classList.remove('hidden');
     });

     document.getElementById('popupAngkot').addEventListener('click', function(event) {
          if (event.target === this) {
               this.classList.add('hidden');

          }
     });
     </script>

     <!-- Barang Sumbu 1.2 -->
     <script>
     document.getElementById('openFormButtonMobilBarangP0').addEventListener('click', function(event) {
          event.preventDefault();
          document.getElementById('popupMobilBarangP0').classList.remove('hidden');
     });

     document.getElementById('popupMobilBarangP0').addEventListener('click', function(event) {
          if (event.target === this) {
               this.classList.add('hidden');

          }
     });
     </script>

     <!-- Barang P depan S1 Sumbu 1.2 -->
     <script>
     document.getElementById('openFormButtonBarangDepanS1').addEventListener('click', function(event) {
          event.preventDefault();
          document.getElementById('popupMobilBarangDepanS1').classList.remove('hidden');
     });

     document.getElementById('popupMobilBarangDepanS1').addEventListener('click', function(event) {
          if (event.target === this) {
               this.classList.add('hidden');

          }
     });
     </script>

     <!-- Truck Tronton Sumbu 1.22 -->
     <script>
     document.getElementById('openFormButtonTronton').addEventListener('click', function(event) {
          event.preventDefault();
          document.getElementById('popupMobilTronton').classList.remove('hidden');
     });

     document.getElementById('popupMobilTronton').addEventListener('click', function(event) {
          if (event.target === this) {
               this.classList.add('hidden');

          }
     });
     </script>

</body>




</html>
