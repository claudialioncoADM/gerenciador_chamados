 <!-- partial:index.partial.html -->
 <div id="nav-bar">
     <input id="nav-toggle" type="checkbox" />
     <div id="nav-header"><a id="nav-title" href="https://codepen.io" target="_blank"><i
                 class="fab fa-codepen"></i> CHAMADOS</a>
         <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
         <hr />
     </div>

     <div id="nav-content">
         <div class="nav-button"><i class="fas fa-palette"></i><span><x-nav-link href="{{ url('empresa') }}">
                     {{ __('Empresas') }}
             </span></x-nav-link></div>
         <div class="nav-button"><i class="fas fa-images"></i><span>teste</span></div>
         <div class="nav-button"><i class="fas fa-thumbtack"></i><span>Pinned Items</span></div>
         <hr />
         <div class="nav-button"><i class="fas fa-heart"></i><span>Following</span></div>
         <div class="nav-button"><i class="fas fa-chart-line"></i><span>Trending</span></div>
         <div class="nav-button"><i class="fas fa-fire"></i><span>Challenges</span></div>
         <div class="nav-button"><i class="fas fa-magic"></i><span>Spark</span></div>
         <hr />
         <div class="nav-button"><i class="fas fa-gem"></i>
         </div>
     </div>
     <div id="nav-content-highlight"></div>
 </div>


 {{-- <input id="nav-footer-toggle" type="checkbox" /> --}}
 </div>
 <!-- partial -->
