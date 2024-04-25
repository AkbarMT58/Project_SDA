
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">

        @foreach ($modul_permission as $modulmenu)
            <ul>
          

           
                @if($modulmenu->categorymenu==1 )

                  <li class="{{set_active([$modulmenu->link_menu])}} submenu">

                    <a href="#" class="{{ set_active([$modulmenu->link_menu]) ? 'noti-dot' : '' }}">
                        <i class="{{$modulmenu->namaicons}}"></i> <span style="font-size:12px;">{{$modulmenu->namamenu}} </span> 
                        <span class="menu-arrow"></span>
                    </a>

                     <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">


                

                      
                    @foreach($data_subchildcategorymenu as $subchild)

                    <!-- @if( $subchild->sub_categorymenu == 2  ) -->
                 

                      <!-- <li>
                            
                        <a class="{{set_active([$subchild->link_menu])}}" style="font-size:12px;" href="{{ url('/') }}{{$subchild->link_menu}}">{{$subchild->namamenu}} </a>
                    
                      </li>  -->

                          <!-- jika dropdown menu kategori 2 bisa collapse -->

                    @if($subchild->sub_categorymenu== 2  )

                  <li class="{{set_active([$subchild->link_menu])}} submenu">

                    <a href="#" class="{{ set_active([$subchild->link_menu]) ? 'noti-dot' : '' }}">
                        <i class="{{$subchild->namaicons}}"></i> <span style="font-size:12px;">{{$subchild->namamenu}} </span> 
                        <span class="menu-arrow"></span>
                    </a>

                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">



                    @foreach($data_subchildcategorymenu as $subchild)

                    @if( $subchild->sub_categorymenu == $modulmenu->id && $subchild->categorymenu ==3  ) 


                      <li>
                            
                        <a class="{{set_active([$subchild->link_menu])}}" style="font-size:12px;" href="{{ url('/') }}{{$subchild->link_menu}}">{{$subchild->namamenu}} </a>

                      </li>

                    </li>

                    @endif


                    @endforeach


                      
                    </ul>

                    
                  </li> 

                  <!-- @endif -->


                  <!-- batas collapse -->


   
                    </li>

                    @endif

                
                    @endforeach

                    
                       
                    </ul>
                   
                    
                </li> 

                @endif

                     <!-- jika dropdown menu kategori 2 bisa collapse -->

                     <!-- @if($modulmenu->categorymenu==2 )

                        <li class="{{set_active([$modulmenu->link_menu])}} submenu">

                          <a href="#" class="{{ set_active([$modulmenu->link_menu]) ? 'noti-dot' : '' }}">
                              <i class="{{$modulmenu->namaicons}}"></i> <span style="font-size:12px;">{{$modulmenu->namamenu}} </span> 
                              <span class="menu-arrow"></span>
                          </a>

                          <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">


              
                          @foreach($data_subchildcategorymenu as $subchild)

                           @if( $subchild->sub_categorymenu == $modulmenu->id && $subchild->categorymenu ==3  ) 

                        
                            <li>
                                  
                              <a class="{{set_active([$subchild->link_menu])}}" style="font-size:12px;" href="{{ url('/') }}{{$subchild->link_menu}}">{{$subchild->namamenu}} </a>

                            </li>

                          </li>

                          @endif


                          @endforeach


                            
                          </ul>

                          
                        </li> 

                        @endif -->


                     <!-- batas collapse -->

                

                
               

            </ul>

            @endforeach
        </div>
    </div>
</div>
<!-- /Sidebar -->