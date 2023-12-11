<body>
   <header class="header">
      <nav class="nav">
         <div class="container-header">
            <div class="nav-data">
               <div class="logo">
                  <a href="home.php">
                     <img src="assets/img/logo2.png" alt="logo" title="Lopesenatalio">
                  </a>
               </div>

               <div class="nav-toggle" id="nav-toggle">
                  <i class="ri-menu-line nav-burger"></i>
                  <i class="ri-close-line nav-close"></i>
               </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav-menu" id="nav-menu">
               <ul class="nav-list">
                  <li><a href="home" class="nav-link link_disable">Home</a></li>

                  <li><a href="portfolio" class="nav-link link_disable">Portfólio</a></li>

                  <!--=============== DROPDOWN 1 ===============-->
                  <li class="dropdown-item">
                     <div class="nav-link link_disable" id="dropdown-menu">
                        Serviços <i class="ri-arrow-right-s-line dropdown-arrow"></i>
                     </div>

                     <!-- Dropdown -->
                     <ul class="dropdown-menu">

                        <li>
                           <button href="#" class="back-button" id="closeDropdownButton">
                           <i class="fa-solid fa-arrow-left"></i> Voltar
                           </button>
                        </li>

                        <li>
                           <a href="#" class="services-link">
                              Serviços <i class="ri-arrow-right-s-line"></i>
                           </a>
                        </li>

                        <li>
                           <a href="#" class="dropdown-link">
                              Exemplo 1
                           </a>
                        </li>

                        <li>
                           <a href="#" class="dropdown-link">
                              Exemplo 2
                           </a>
                        </li>

                        <li>
                           <a href="#" class="dropdown-link">
                              Exemplo 3
                           </a>
                        </li>
                     </ul>
                  </li>

                  <li><a href="#" class="nav-link link_disable">Sobre</a></li>


                  <li><a href="contato" class="nav-link link_disable">Contato</a></li>

                  <li class="btn-ocarmento">
                     <a href="#" class="link_disable btn btn-header pulse">ORÇAMENTO</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
   </header>

   <div id="overlay-menu"></div> <!-- Película preta -->


   <!-- JS -->
   <script src="assets/js/estrutura/header.js"></script>
</body>